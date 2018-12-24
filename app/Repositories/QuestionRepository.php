<?php
/**
 * Created by PhpStorm.
 * User: 管理员
 * Date: 2018/12/22
 * Time: 20:11
 */

namespace App\Repositories;


use App\Model\Question;
use App\Model\Topic;
use App\User;

class QuestionRepository
{
    public function getQuestionFeed()
    {
        return Question::published()->latest('updated_at')->with('user')->get();
    }
    /**
     * 创建问题
     *
     * @param array $array
     * @return mixed
     */
    public function create(array $array)
    {
        return Question::create($array);
    }

    /**
     * 话题设置
     *
     * @param array $topics
     * @return \Illuminate\Support\Collection
     */
    public function normalizeTopic(array $topics)
    {
        return collect($topics)->map(function ($topic) {
            //判断是否是数字
            if (is_numeric($topic)) {
                //是数字将字段加一
                Topic::find($topic)->increment('question_count');
                return (int) $topic;
            }
            //不是数字则添加
            $newTopic = Topic::create(['name' => trim($topic), 'question_count' => 1]);

            return $newTopic->id;
        });
    }

    /**
     * question show 方法
     *
     * @param $id
     * @return mixed
     */
    public function byId($id)
    {
        return Question::find($id);
    }
}
