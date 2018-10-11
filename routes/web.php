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

Route::view('/','welcome');
Route::view('/image','image');
Route::post('/image', 'ImageController@post');

Route::post('/audio', 'AudioController@post');

Route::post('/video', 'VideoController@post');

Route::view('/video','video');

Route::view('/audio','audio');