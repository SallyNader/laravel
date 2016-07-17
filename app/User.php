<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', ];


    public function notes()
    {

        return $this->hasMany('App\Note');
    }

    public function roles()
    {


        return $this->belongsToMany('App\Role');
    }


    public function functions()
    {

        return $this->belongsToMany('App\Functionn','function_user','functionn_id','user_id');
    }


    public function hasFunction($function)
    {

         if(is_string($function)){




         	return $this->functions->contains('name',$function);
         }




         return !! $function->intersect($this->functions)->count();

    }





    public function assign($function){
    	if(is_string($function)){

    		return $this->functions()->save(
    		Functionn::whereName($function)->firstOrFail()

				);
    	}


    	return $this->functions()->save($function);

    }

}
