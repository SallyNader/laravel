<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{

    public function comments()
    {


        return $this->hasMany('App\Comment');
    }


    public function roles()
    {


        $this->belongsToMany('App\Role','role_poster')->withPivot('poster_id','role_id');
    }
}
