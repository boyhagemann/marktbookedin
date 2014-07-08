<?php

return array(

    'type' => [
        'supply' => 'aanbod',
        'demand' => 'vraag',
    ],

	'index' => [

        'title' => 'Alle advertenties',
        'item' => [

            'readmore' => 'Lees verder...',
        ]
    ],

    'create' => [

        'title' => 'Plaats een advertentie',
        'message' => [
            'success' => 'Uw advertentie is geplaatst',
        ]
    ],

    'search' => [

        'title' => '{0} Geen advertenties gevonden voor <em>:q</em>|{1} 1 advertentie gevonden voor <em>:q</em>|[2, Inf]:count advertenties gevonden voor <em>:q</em>',
    ],

    'form' => [

        'create' => [

            'type' => [
                'supply' => 'Ik wil iets aanbieden',
                'demand' => 'Ik wil iets vragen',
            ],
            'title' => [
                'label' => 'Titel'
            ],
            'body' => [
                'label' => 'Tekst'
            ],
            'submit' => [
                'label' => 'Plaats advertentie'
            ],

        ]
    ],

    'supply' => [

        'title' => 'Aanbod',
    ],

    'demand' => [

        'title' => 'Vraag',
    ],
);
