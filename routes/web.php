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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/export', 'UsersController@export');
Route::get('/showdata', 'UsersController@showdata');    
Route::post('/import', 'UsersController@import')->name('import');

Route::get('/index', 'RegisterController@index');
Route::get('/export','RegisterController@export');  
Route::post('/import','RegisterController@import')->name('import');