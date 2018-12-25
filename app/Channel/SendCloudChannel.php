<?php
/**
 * Created by PhpStorm.
 * User: 管理员
 * Date: 2018/12/25
 * Time: 13:59
 */

namespace App\Channel;

use Illuminate\Notifications\Notification;
class SendCloudChannel
{
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toSendCloud($notifiable);
    }
}
