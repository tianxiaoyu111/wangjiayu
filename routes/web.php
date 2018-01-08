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

Route::get('/', 'FileController@index');
Route::get('up', 'FileController@showUploaded');
Route::get('fix', 'FileController@showFixed');
Route::get('down', 'FileController@downLoad');
Route::get('clean', 'FileController@cleanUp');
