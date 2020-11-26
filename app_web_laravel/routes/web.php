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

Route::get('/', function () {
    return view('welcome');
});



    // route create video
    Route::get('create-video', 'DataVideoController@create');

    // route simpan video
    Route::post('simpan-video', 'DataVideoController@store');

    // route halaman tampil video
    Route::get('tampil-video', 'DataVideoController@tampil');