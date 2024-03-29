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

Route::get('/', 'HomeController@showHome');
Route::group(array('prefix' => 'store'), function()
{
	Route::get('/', 'HomeController@showStore');

	Route::pattern('id', '[0-9]+');
	Route::get('item/{id}', 'HomeController@showItem');

	Route::get('category/{category}', 'HomeController@showCategory');
});

