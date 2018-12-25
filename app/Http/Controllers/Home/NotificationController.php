<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function message()
    {
        $user = user();
        return view('notification.message', compact('user'));
    }

    public function notification()
    {
        $user = user();
        return view('notification.notification', compact('user'));
    }
}
