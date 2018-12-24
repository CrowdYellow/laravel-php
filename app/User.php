<?php

namespace App;

use App\Mailer\UserMailer;
use App\Model\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'confirmation_token', 'photos', 'api_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //重置密码发送邮件
    public function sendPasswordResetNotification($token)
    {
        (new UserMailer())->passwordReset($this->email, $token);
    }

    /**
     * 判断问题是否属于该用户
     *
     * @param Model $model
     * @return bool
     */
    public function owns(Model $model)
    {
        return $this->id == $model->user_id;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function follows()
    {
        return $this->belongsToMany(Question::class, 'user_question')->withTimestamps();
    }

    /**
     * 关注问题 取消关注
     *
     * @param $question
     * @return array
     */
    public function followThis($question)
    {
        return $this->follows()->toggle($question);
    }

    /**
     * 判断用户是否已关注该问题
     *
     * @param $question
     * @return bool
     */
    public function followed($question)
    {
        return !! $this->follows()->where('question_id', $question)->count();
    }
}
