<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable=['body','page_id'];


public function page(){

	return $this->belongsTo('App\Page','page_id');
}



}
