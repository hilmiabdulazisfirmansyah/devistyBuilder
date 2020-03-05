<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function() {
	return View('welcome');
});


Route::resource('admin', 'AdminController')->middleware('auth');

Route::group(['prefix' => 'admin'], function (){
	Route::group(['prefix' => 'settings'], function(){
			Route::resource('menus', 'MenuController');
	});
});

Route::get('/dapodik', function(){
	return View('test.loginDapodikOnline');
});

Route::get('search', function(){
	return View('test.search');
});

Route::get('/home', 'HomeController@index')->name('home');