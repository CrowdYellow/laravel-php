<?php

namespace App\Http\Controllers\Home;

use App\Repositories\MessageRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    protected $messageRepository;

    protected $userRepository;

    public function __construct(MessageRepository $messageRepository, UserRepository $userRepository)
    {
        $this->messageRepository = $messageRepository;
        $this->userRepository = $userRepository;
    }

    public function index($id)
    {
        $user = $this->userRepository->byId($id);
        $arr = [$id, user()->id];
        sort($arr);
        $messages = $this->messageRepository->getDialogMessagesBy($arr[0].$arr[1]);
        return view('notification.to', compact('user', 'messages'));
    }

    public function store($id)
    {
        $arr = [$id, user()->id];
        sort($arr);
        $this->messageRepository->create([
            'to_user_id'   => $id,
            'from_user_id' => user()->id,
            'body'         => request('body'),
            'dialog_id'    => (string)$arr[0].$arr[1],
        ]);

        return back();
    }
}
