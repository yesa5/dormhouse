<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussions extends Model
{
    //
    protected $table = 'discussions';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'discussion_user_id',
        'discussion_category_id',
        'discussion_title',
        'discussion_description',
        'discussion_views'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
     	'updated_at'
    ];
}
