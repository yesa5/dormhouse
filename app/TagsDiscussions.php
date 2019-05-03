<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagsDiscussions extends Model
{
    //
    protected $table = 'tags_discussions';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'tag_id',
        'discussion_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
