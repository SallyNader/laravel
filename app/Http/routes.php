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

Route::get('welcome', function ()
{
	//Auth::loginUsingId(5);
    return view('welcome'); }
);
Route::get('api/users/{user}', function (App\User $user)
{

    return $user->email; }
);
Route::get('lang', function ()
{


    echo trans('home.welcome'); }

);


Route::get('test/from/{name?}', function ($name = 'sally')
{

    return view('common.from', compact('name')); }
);

//uploads
Route::put('upload/update', 'UploadController@putUpdate');
Route::get('upload/update/{id}/{comment}', 'UploadController@getUpdatePath');
Route::any('upload/delete-force/{id}', 'UploadController@postForceDelete');
Route::get('upload/restore/{id}', 'UploadController@postRestore');
Route::controller('upload', 'UploadController'); //using restful controller


//role

Route::get('role/showrole', 'PosterController@showallroles');


//comments

Route::get('comment/showall', 'CommentController@showall');
Route::get('poster/showall/{id}', 'PosterController@showposters');

//users

Route::get('user/showroles/{id}', 'UserController@getShowUserRole');
Route::controller('user', 'UserController');


//notes
Route::get('note/form', function ()
{
    $title = 'Create Note'; return view('notes.create-note', compact('title')); }
);

Route::post('note/add', "NoteController@add");

Route::get('page/show/{id}', 'NoteController@show');


Route::get('note/showall', 'NoteController@showAll');


Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/auth', function ()
{


    return Auth()->user()->email; }
);


Route::get('/auth/login','Auth\AuthController@getLogin');
Route::post('/auth/login','Auth\AuthController@postLogin');
Route::get('/auth/logout','Auth\AuthController@getLogout');

Route::get('/auth/register','Auth\AuthController@getRegister');
Route::post('/auth/register','Auth\AuthController@postRegister');