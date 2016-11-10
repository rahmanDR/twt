<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('home', 'HomeController@index');
Route::post('home', 'HomeController@store');
Route::get('setting', 'SettingController@index');
Route::get('esetting', 'SettingController@update');
Route::put('setting/{id}', 'SettingController@edit');
Route::get('foto', 'SettingController@show');
Route::put('foto/{id}', 'SettingController@ubahfoto');
