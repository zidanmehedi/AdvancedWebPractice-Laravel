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

Route::get('/login', 'login@index')->name('login');

Route::get('/student/registration', 'studentReg@index')->name('studentReg');

Route::get('/student/home', 'studentHome@index')->name('studentHome');

Route::get('/student/research', 'studentResearch@index')->name('studentResearch');

Route::get('/student/availableTopics', 'studentTopicsWindow@index')->name('studentTopicsWindow');