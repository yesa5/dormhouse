<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    //
    protected $table = 'votes';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'vote_user_id',
        'vote_discussion_id',
        'vote_is_like'
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
