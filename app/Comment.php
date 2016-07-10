<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{


    public function poster(){


    	return $this->belongsTo('App\Poster');
    }
}
