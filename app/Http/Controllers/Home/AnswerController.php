<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\AnswerRequest;
use App\Repositories\AnswerRepository;
use App\Http\Controllers\Controller;

class AnswerController extends Controller
{
    protected $answerRepository;

    public function __construct(AnswerRepository $answerRepository)
    {
        $this->answerRepository = $answerRepository;
    }

    public function store(AnswerRequest $request, $question)
    {
        $answer = $this->answerRepository->create([
            'question_id' => $question,
            'user_id' => user()->id,
            'body' => $request->get('body'),
        ]);

        $answer->question()->increment('answers_count');

        $answer->user()->increment('answers_count');

        return back();
    }
}
