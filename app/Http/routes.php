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

Route::get('admin/publish/{id}', 'AdminController@publish');

Route::get('admin/delete/{id}', 'AdminController@delete');

Route::get('admin/reported', 'AdminController@reported');

Route::get('admin/unpublish/{id}', 'AdminController@unpublish');

Route::get('contribute', 'ContributeController@contribute');

Route::post('contribute', 'ContributeController@store');
//Route::post('contribute','ContributeController@formData');

//Route::post('upload', function(){
//    if(Input::hasFile('Image'))
//        {
//            $file = Input::file('Image');
//            $destinationPath = public_path().'/images/graffiti/';
//            $filename = $file->getClientOriginalName();
//            $file->move($destinationPath, $filename);
//
//            return "yess";
//           
//        }
//        else{
//            return "nooooo";
//        }
//});

Route::get('submit', function(){
    return "hello";
});

Route::get('info', 'WelcomeController@info');

Route::get('tour', 'WelcomeController@tour');

Route::get('location', 'ContributeController@Location');
