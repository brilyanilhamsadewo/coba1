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

// Route::get('myView', function () {
//     return view('webtest');
// });

// Route::get('hi', function () {
//     return "lagi belajar nih ye...";
// });

// Route::get('ID/{id}', function ($id) {
//     return 'ID anda : '.$id;
// });

// Route::get('viewcontroll', 'MyfirstController@index');

// Route::get('tampilnama', 'MyfirstController@nama');

// Route::get('matkul', 'MyFirstController@matkul');

// Route::get('getname/{nama}', 'MyFirstController@getNameFromUrl');

// Route::get('formulir', 'MyFirstController@formulir');

// Route::post('formulir/proses', 'MyFirstController@proses');

// Route::get('home', 'MyfirstController@home');

// Route::get('tentang', 'MyfirstController@tentang');

// Route::get('admin', function () {
//     return view('admin/admin');
// });

// Route::get('header', function () {
//     return view('admin/header');
// });

// Route::get('sidebar', function () {
//     return view('admin/sidebar');
// });
// Route::get('footer', function () {
//     return view('admin/footer');
// });


Route::get('master/index', 'Master\AdminController@index');
Route::get('master/create', 'Master\AdminController@create');
Route::get('master/edit', 'Master\AdminController@edit');
Route::get('master/destroy', 'Master\AdminController@destroy');

Route::get('Transaksi/index', 'Transaksi\TransaksiController@index');
Route::get('Transaksi/create', 'Transaksi\TransaksiController@create');
Route::get('Transaksi/edit', 'Transaksi\TransaksiController@edit');
Route::get('Transaksi/destroy', 'Transaksi\TransaksiController@destroy');
