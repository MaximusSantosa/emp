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


Route::get('/', ['as' => 'home', 'uses' => 'MainController@home']);

Route::get('list', ['as' => 'list', 'uses' => 'MainController@list']);

Route::get('profile/{id}/', ['as' => 'profile', 'uses' => 'MainController@profile']);

Route::get('api', ['as' => 'api', 'uses' => 'ApiController@getRefresh']);
