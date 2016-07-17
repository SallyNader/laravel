<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Permission;
class Functionn extends Model
{


    public $table = 'functions';
    public function users()
    {

        return $this->belongsToMany('App\User','function_user','functionn_id','user_id');
    }

    public function permissions()
    {

        return $this->belongsToMany('App\Permission','function_permission','functionn_id','permission_id');
    }

    public function assign(Permission $permission)
    {

        return $this->permissions()->save($permission);
    }


}
