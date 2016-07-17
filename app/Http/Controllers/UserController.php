<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Note;
use Auth;
class UserController extends Controller
{

	public function getLogin(){


		return view('login');
	}


	public function postLogin(Request $request){

	if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->
            input('password')]))
            return Redirect()->intended();
            else
            return back();

	}

    public function getShowAll(){

    	#$users=Note::find(52)->user()->get();
#    	$user_note=User::with('notes')->get();
#       $note=Note::find(52);

      $notes=Note::all();
    	return view('users.showall',compact('users','notes','user_note'));

    }
    public function getShowUserRole($id){


    	$user=User::findorFail($id);

    	return view('users.showroles',compact('user'));
    }




}
