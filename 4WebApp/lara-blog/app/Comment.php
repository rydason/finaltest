<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {
        return $this->belongTo('App\Post');
    }

    public function user()
    {
        return $this->belongTo('App\User');
    }
}
