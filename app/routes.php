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

Route::get( '/signout', [ 'as' => 'signout', 'uses' => 'AuthController@signout' ] );
Route::post( '/signin', [ 'as' => 'signin', 'uses' => 'AuthController@signin' ] );
Route::post( '/vote', ['as' => 'vote', 'uses' => 'HomeController@vote', 'before' => 'auth']);
Route::get('/', function()
{
	return View::make('hello');
});
