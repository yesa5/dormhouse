<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    //
    protected $table = 'tags';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'tag_name'
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
