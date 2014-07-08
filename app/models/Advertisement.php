<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

/**
 * Class Advertisement
 *
 * @property Comment[] $comments
 * @property User $user
 */
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
    protected $fillable = ['title', 'body', 'user_id'];

    protected $with = ['Comments'];

    /**
     * @return string
     */
    public function getUrlAttribute()
    {
        return URL::route('advertisements.show', $this->slug);
    }

    public function comments()
    {
        return $this->morphMany('Comment', 'commentable');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

}