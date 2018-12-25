<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//话题
Route::middleware('api')->get('/topics', 'TopicController@topics');

//关注问题
Route::middleware('auth:api')->post('/question/follower', 'QuestionFollowerController@follower');
Route::middleware('auth:api')->post('/question/follow', 'QuestionFollowerController@follow');

//关注用户
Route::middleware('auth:api')->get('/user/{id}/follower', 'UserFollowerController@index');
Route::middleware('auth:api')->post('/user/follow', 'UserFollowerController@follow');

//问题点赞
Route::middleware('auth:api')->post('/answer/{id}/vote/user', 'AnswerVoteController@user');
Route::middleware('auth:api')->post('/answer/vote', 'AnswerVoteController@vote');
