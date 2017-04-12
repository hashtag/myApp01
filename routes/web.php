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

Route::get('login', array('uses' => 'Auth\LoginController@showLogin'));

Route::post('login', array('uses' => 'Auth\LoginController@doLogin'));

Route::get('logout', array('uses' => 'Auth\LoginController@logout'));

Route::get('register', array('uses' => 'Auth\RegisterController@showRegister'));

Route::post('register', array('uses' => 'Auth\RegisterController@register'));

Route::get('home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});
