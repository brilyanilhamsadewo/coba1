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

Route::get('myView', function () {
    return view('webtest');
});

Route::get('hi', function () {
    return "lagi belajar nih ye...";
});

Route::get('ID/{id}', function ($id) {
    return 'ID anda : '.$id;
});
Route::get('viewcontroll', 'MyfirstController@index');
