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

Route::get('/login', 'login@index');
Route::post('/login', 'login@verify');
Route::get('/logout', 'logout@index');

Route::get('/home', 'home@index')->name('home.index');
Route::get('/home/add', 'home@add')->name('home.add');
Route::post('/home/add', 'home@create');
Route::get('/admin/view_users', 'home@list')->name('home.list');
Route::get('/home/details/{id}', ['as'=>'home.show','uses'=>'home@show']);
Route::get('/home/edit/{id}', 'home@edit')->name('home.edit');
Route::post('/home/edit/{id}', 'home@update');
Route::get('/home/delete/{id}', 'home@delete')->name('home.delete');
Route::post('/home/delete/{id}', 'home@destroy');
