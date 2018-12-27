<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "messages";

    protected $fillable = ['from_user_id', 'to_user_id', 'body', 'dialog_id'];

    /**
     * 与用户关联
     * 发送人
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    /**
     * 收件人
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toUser()
    {
        return $this->belongsTo(User::class, 'to_user_id');
    }

    /**
     * 将消息变为已读
     */
    public function markAsRead()
    {
        if(is_null($this->read_at)) {
            $this->forceFill(['has_read' => 'T','read_at' => $this->freshTimestamp()])->save();
        }
    }

    /**
     * 利用 collection 将消息标记为已读
     *
     * @param array $models
     * @return MessageCollection|\Illuminate\Database\Eloquent\Collection
     */
    public function newCollection(array $models = [])
    {
        return new MessageCollection($models);
    }

    /**
     * 判断消息是否是已读
     * @return bool
     */
    public function read()
    {
        return $this->has_read === 'T';
    }

    /**
     * 判断消息是否是未读
     * @return bool
     */
    public function unread()
    {
        return $this->has_read === 'F';
    }

    /**
     * unread class
     * @return bool
     */
    public function shouldAddUnreadClass()
    {
        if(user()->id === $this->from_user_id) {
            return false;
        }
        return $this->unread();
    }
}
