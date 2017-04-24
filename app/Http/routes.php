<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

//Route::get('admin', [
//	'uses' => 'AdminController@index',
//	'middleware' => 'auth'
//]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'auth'], function () {
	Route::get('admin','AdminController@index');
	Route::post('admin/upload','AdminController@upload');
	Route::resource('adminSetting', 'AdminSettingController');
	Route::resource('adminUser', 'AdminUserController');
	Route::resource('adminPage', 'AdminPageController');
});