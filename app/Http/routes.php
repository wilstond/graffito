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

Route::get('explore', 'MapController@explore');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('about', 'WelcomeController@about');

Route::get('contact', 'WelcomeController@contact');

Route::get('products', 'ProductController@products');

Route::get('admin', 'AdminController@index');

Route::get('contribute', 'ContributeController@contribute');

Route::post('upload', 'ContributeController@upload');