<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{


   public function functions(){


   	return $this->belongsToMany('App\Functionn','function_permission','functionn_id','permission_id');
   }
}
