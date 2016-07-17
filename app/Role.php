<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {


        return $this->belongsToMany('App\Poster', 'role_poster')->withPivot('poster_id',
            'role_id');
    }


    public function user()
    {


        return $this->belongsToMany('App\User');
    }



}
