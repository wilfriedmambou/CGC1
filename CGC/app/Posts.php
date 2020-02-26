<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'title',
        'content'
    ];

    public function comment()
    {
        return $this->hasMany('App\Comments');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
