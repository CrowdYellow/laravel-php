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

Route::get('/question', function () {
    return view('question.index');
});

Route::get('/question/create', function () {
    return view('question.create');
});

Route::get('/question/edit', function () {
    return view('question.edit');
});

Route::get('/question/show', function () {
    return view('question.show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
