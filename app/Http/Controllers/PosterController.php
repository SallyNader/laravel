<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Poster;
use App\Role;
class PosterController extends Controller
{
    public function showposters($id)
    {


        $poster = Poster::find($id)->comments()->get();


        return view('comments.showposters', compact('poster'));
    }



    public function showallroles(){


    	$poster=Poster::find(3);

    	return view('roles.showroles',compact('poster'));
    }


}
