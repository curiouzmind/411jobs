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

 get('/', function () {
	 return redirect('/blog');
});

 get('blog', 'BlogController@index');
 get('blog/{slug}', 'BlogController@showPost');
 //get('admin', 'BlogController@admin');
 //get('compose','BlogController@compose');
 get('show/','BlogController@show');
 post('process','BlogController@show');
 
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('activate/{confirmation_code}', 'Auth\AuthController@activateAccount');
Route::get('confirm','HomeController@confirm');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


 $router->group([
  'namespace' => 'Admin',
 // 'middleware' => 'admin',
], function () {
  resource('admin', 'AdminController');
  resource('admin/tag', 'TagController');
  //resource('admin/user','UsersController');
  //resource('admin/location', 'LocationController');
  get('admin/upload', 'UploadController@index');
  post('admin/upload/file', 'UploadController@uploadFile');
  delete('admin/upload/file', 'UploadController@deleteFile');
  //post('admin/upload/folder', 'UploadController@createFolder');
 // delete('admin/upload/folder', 'UploadController@deleteFolder');
});