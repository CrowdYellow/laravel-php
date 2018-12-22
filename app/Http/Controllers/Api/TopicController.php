<?php

namespace App\Http\Controllers\Api;

use App\Repositories\TopicRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopicController extends Controller
{
    protected $topic;

    public function __construct(TopicRepository $topic)
    {
        $this->topic = $topic;
    }

    public function topics(Request $request)
    {
        return $this->topic->getTopics($request);
    }
}
