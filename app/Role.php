<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {


        $this->belongsToMany('App\Poster','role_poster')->withPivot('poster_id','role_id');
    }
}
