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

Route::get('/', 'PageController@home');
Route::get('/aboutme', 'PageController@aboutme');
Route::get('/contactme', 'PageController@contactme');
Route::resource('/projects', 'ProjectController');
