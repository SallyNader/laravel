<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Note;
class UserController extends Controller
{
    public function getShowAll(){

    	#$users=Note::find(52)->user()->get();
#    	$user_note=User::with('notes')->get();
#       $note=Note::find(52);

      $notes=Note::all();
    	return view('users.showall',compact('users','notes','user_note'));

    }
}
