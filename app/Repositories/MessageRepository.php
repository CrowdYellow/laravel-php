<?php
/**
 * Created by PhpStorm.
 * User: 管理员
 * Date: 2018/12/25
 * Time: 14:34
 */

namespace App\Repositories;


use App\Model\Message;

class MessageRepository
{
    public function create(array $array)
    {
        return Message::create($array);
    }

    public function getAllMessages()
    {
        return Message::where('to_user_id', user()->id)
            ->orWhere('from_user_id', user()->id)
            ->with(['fromUser' => function ($query) {
                return $query->select(['id', 'name', 'photos']);
            }, 'toUser'        => function ($query) {
                return $query->select(['id', 'name', 'photos']);
            }])->latest()->get();
    }

    public function getDialogMessagesBy($dialogId)
    {
        return Message::where('dialog_id',$dialogId)->latest()->get();
    }
}
