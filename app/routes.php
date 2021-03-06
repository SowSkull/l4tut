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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('register', 'HomeController@getRegister');
Route::get('login', 'HomeController@getLogin');

Route::post('login', 'HomeController@postLogin');
Route::post('register', 'HomeController@postRegister');

Route::group(array('before' => 'auth'), function(){
	Route::get('admin', 'AdminController@index');
	Route::get('logout', 'HomeController@logout');

});