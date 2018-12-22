<?php
/**
 * Created by PhpStorm.
 * User: 管理员
 * Date: 2018/12/22
 * Time: 16:29
 */

namespace App\Mailer;


use Illuminate\Support\Facades\Mail;
use Naux\Mail\SendCloudTemplate;

class Mailer
{
    protected function sendTo($template, $email, array $data)
    {
        $content = new SendCloudTemplate($template, $data);
        Mail::raw($content, function ($message) use ($email) {
            $message->from('echo61546@gmail.com', '原味');
            $message->to($email);
        });
    }
}
