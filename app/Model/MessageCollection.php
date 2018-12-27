<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Collection;

class MessageCollection extends Collection
{
    /**
     * Mark a notifications collection as read.
     */
    public function markAsRead()
    {
        $this->each(function($message) {
            //判断是否是该用户的收信
            if($message->to_user_id === user()->id ){
                $message->markAsRead();
            }
        });
    }
}
