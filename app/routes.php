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

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('admin', ['as' => 'admin', 'uses' => 'SessionsController@index'])->before('auth');
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions','SessionsController', ['only' => ['create','store', 'show', 'destroy']]);

Route::resource('notices', 'NoticesController');