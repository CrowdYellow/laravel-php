<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Repositories\MessageRepository;

class NotificationController extends Controller
{
    protected $messageRepository;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    public function message()
    {
        $user = user();
        $messages = $this->messageRepository->getAllMessages();
        return view('notification.message',['messages' => $messages->groupBy('dialog_id'), 'user' => $user]);
    }

    public function notification()
    {
        $user = user();
        return view('notification.notification', compact('user'));
    }
}
