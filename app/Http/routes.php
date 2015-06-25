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

Route::get('/', 'WelcomeController@index');

Route::get('viewedpost/{id}', 'WelcomeController@viewedPost');

Route::get('admin', 'AdminController@index');

Route::get('admin/publish/{id}', 'AdminController@publish');

Route::get('admin/delete/{id}', 'AdminController@delete');

Route::get('admin/reported', 'AdminController@reported');

Route::get('admin/unpublish/{id}', 'AdminController@unpublish');

Route::get('contribute', 'ContributeController@contribute');

Route::post('contribute', 'ContributeController@store');

Route::get('contribute/save', 'ContributeController@save');

Route::get('insertdata', 'ContributeController@insertdata');

Route::get('submit', function(){
    return "hello";
});
Route::get('info', 'WelcomeController@info');

Route::get('tour', 'WelcomeController@tour');

Route::get('location', 'ContributeController@Location');

Route::post('getcoordinates', 'MapController@getcoordinates');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

