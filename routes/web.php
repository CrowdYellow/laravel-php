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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'Home\QuestionController@index');

//邮箱验证
Route::get('email/verify/{token}', ['as' => 'email.verify', 'uses' => 'Home\EmailController@verify']);

//问答区
Route::resource('/questions','Home\QuestionController', ['name' => [
    'create' => 'questions.create',
    'show' => 'questions.show'
]]);

//回答
Route::post('questions/{question}/answer', 'Home\AnswerController@store');

//用户区
Route::resource('/users', 'Home\UserController');
