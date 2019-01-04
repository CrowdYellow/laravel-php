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
Route::get('/email/verify/{token}', ['as' => 'email.verify', 'uses' => 'Home\EmailController@verify']);

//问答区
Route::resource('/questions','Home\QuestionController', ['name' => [
    'create' => 'questions.create',
    'show' => 'questions.show'
]]);

//回答
Route::post('/questions/{question}/answer', 'Home\AnswerController@store');

//用户区
Route::get('/users/{id}', 'Home\UserInfoController@userInfo');
Route::get('/users/{id}/edit', 'Home\UserInfoController@userEdit');
Route::post('/users/{id}/edit', 'Home\UserInfoController@doUserEdit');
Route::get('/users/{id}/photo', 'Home\UserInfoController@userPhoto');
Route::post('/users/photos', 'Home\UserInfoController@photoEdit');
Route::get('/users/{id}/password', 'Home\UserInfoController@userPassword');
Route::post('/users/{id}/password', 'Home\UserInfoController@passwordEdit');

//站内信
Route::get('/notification/message', 'Home\NotificationController@message');
Route::get('/notification/notification', 'Home\NotificationController@notification');

//发送私信
Route::get('/message/to/{id}','Home\MessageController@index');
Route::post('/message/store/{id}','Home\MessageController@store');
