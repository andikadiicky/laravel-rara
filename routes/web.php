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

Route::get('/', 'PagesController@index');
Route::get('/profil', 'PagesController@profil');

Route::resource('students', 'StudentsController');

Route::resource('admin', 'AdminsController');

Route::get('/pembina', 'PembinasController@index');
Route::get('/pembina/penilaian', 'PembinasController@penilaian');

Route::resource('pembina', 'PembinasController');

//Route::get('/students', 'StudentsController@index');