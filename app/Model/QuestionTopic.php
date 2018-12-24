<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class QuestionTopic extends Model
{
    protected $table = "question_topic";

    //字段白名单
    protected $fillable = [
        'question_id', 'topic_id'
    ];
}
