<?php
/**
 * Created by PhpStorm.
 * User: 管理员
 * Date: 2018/12/22
 * Time: 16:31
 */

namespace App\Mailer;

class UserMailer extends Mailer
{
    public function followNotifyEmail($email)
    {
        $data = ['url' => '', 'name' => user('api')->name];
        $this->sendTo('yuanwei_app_user_follow', $email, $data);
    }

    public function passwordReset($email, $token)
    {
        $data = ['url' => url('password/reset', $token)];
        $this->sendTo('yuanwei_app_password_reset', $email, $data);
    }

    public function welcome($user)
    {
        $data = [
            'url'  => route('email.verify', ['token' => $user->confirmation_token]),
            'name' => $user->name
        ];
        $this->sendTo('yuanwei_app_register', $user->email, $data);
    }
}
