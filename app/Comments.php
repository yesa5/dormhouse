<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    protected $table = 'comments';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'comment_user_id',
        'comment_discussion_id',
        'comment_parent_id',
        'comment_description'
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
