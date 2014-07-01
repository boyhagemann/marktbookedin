<?php

use Illuminate\Database\Eloquent\Builder as QueryBuilder;

Event::listen('api.advertisement.index', function(QueryBuilder $qb) {

    if(!Input::get('q')) {
        return;
    }

    $client = new Elasticsearch\Client();
    $response = $client->search(array(
        'size' => 1000,
        'index' => 'marktbookedin',
        'type' => 'advertisement',
        'body' => array(
            'query' => array(
                'bool' => array(
                    'should' => array(
                        array(
                            'fuzzy_like_this_field' => array(
                                'title' => array(
                                    'like_text' => Input::get('q'),
                                    'boost' => 3,
                                ),
                            ),
                        ),
                        array(
                            'fuzzy_like_this_field' => array(
                                'body' => array(
                                    'like_text' => Input::get('q'),
                                    'boost' => 3,
                                ),
                            ),
                        ),
                    ),
                ),
            )
        )
    ));

    $ids = array_fetch($response['hits']['hits'], '_id');

    if(!$ids) {
        $ids = array(-1); // Fake ID
    }

    $qb->whereIn('id', $ids);

    $order = implode(',', $ids);
    $qb->orderByRaw(DB::raw("FIELD(id, $order)"));

});


Advertisement::saved(function(Advertisement $advertisement) {

    $client = new Elasticsearch\Client();
    $client->index(array(
        'index' => 'marktbookedin',
        'type' => 'advertisement',
        'id' => $advertisement->id,
        'body' => array(
            'title' => $advertisement->title,
            'body' => $advertisement->body,
        )
    ));
});

Advertisement::deleting(function(Advertisement $advertisement) {

    $client = new Elasticsearch\Client();
    $client->delete(array(
        'index' => 'marktbookedin',
        'type' => 'advertisement',
        'id' => $advertisement->id,
    ));

});