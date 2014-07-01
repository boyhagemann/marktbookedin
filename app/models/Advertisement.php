<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Advertisement extends Eloquent implements SluggableInterface
{
    const TYPE_SUPPLY = 'supply';
    const TYPE_DEMAND = 'demand';

    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'advertisements';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $fillable = array('title', 'body', 'user_id');

    /**
     * @return string
     */
    public function getUrlAttribute()
    {
        return URL::route('advertisements.show', $this->slug);
    }

}