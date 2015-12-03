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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', 'User@index');
Route::get('/news', 'User@news');
Route::group(['prefix' => 'about'], function(){
	Route::get('/', 'User@about');
	Route::get('/network', 'User@about_network');
});