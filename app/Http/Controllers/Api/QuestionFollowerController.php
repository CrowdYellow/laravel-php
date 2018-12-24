<?php

namespace App\Http\Controllers\Api;

use App\Repositories\QuestionRepository;
use App\Http\Controllers\Controller;

class QuestionFollowerController extends Controller
{
    protected $questionRepository;

    public function __construct(QuestionRepository $questionRepository)
    {
        $this->questionRepository = $questionRepository;
    }

    public function follower()
    {
        $follow = user('api')->followed(\request('question'));

        if ($follow) {
            return response()->json(['followed' => true]);
        }
        return response()->json(['followed' => false]);
    }

    public function follow()
    {
        $question = $this->questionRepository->byId(\request('question'));

        $followed = user('api')->followThis($question->id);

        //判断toggle执行的是否是删除操作
        if (count($followed['detached']) > 0) {

            //删除则将关注减一
            $question->decrement('followers_count');

            return response()->json(['followed' => false]);
        }

        $question->increment('followers_count');

        return response()->json(['followed' => true]);
    }
}
