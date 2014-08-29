<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', function()
{
	return View::make('index');
});

Route::group(array('prefix'=>'api','before'=>'oauth'), function(){
	Route::resource('comments','CommentController');
});


Route::post('oauth/access_token', function()
{
    return AuthorizationServer::performAccessTokenFlow();
});
