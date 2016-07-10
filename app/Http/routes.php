<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function ()
{
    return view('welcome'); }
);
Route::get('lang', function ()
{


    echo trans('home.welcome'); }

);
//uploads
Route::put('upload/(:any)/update','UploadController@putUpdate');
Route::get('upload/update/{id}/{comment}','UploadController@getUpdatePath');
Route::post('upload/delete-force/{id}','UploadController@postForceDelete');
Route::get('upload/restore/{id}','UploadController@postRestore');
Route::controller('upload','UploadController');    //using restful controller





//role

Route::get('role/showrole', 'PosterController@showallroles');


//comments

Route::get('comment/showall', 'CommentController@showall');
Route::get('poster/showall/{id}', 'PosterController@showposters');

//users

Route::controller('user','UserController');

//notes
Route::get('note/form', function ()
{
    $title = 'Create Note';
		return view('notes.create-note', compact('title')); }
);

Route::post('note/add', "NoteController@add");

Route::get('page/show/{id}', 'NoteController@show');


Route::get('note/showall', 'NoteController@showAll');
