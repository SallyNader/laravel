<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Comment;

class CommentController extends Controller
{


   public function showall(){


   	$comments=Comment::all();

   	return view('comments.showall',compact('comments'));


   }
}
