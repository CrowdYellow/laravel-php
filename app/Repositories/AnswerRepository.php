<?php
/**
 * Created by PhpStorm.
 * User: 管理员
 * Date: 2018/12/24
 * Time: 13:48
 */

namespace App\Repositories;


use App\Model\Answer;

class AnswerRepository
{
    public function create(array $array)
    {
        return Answer::create($array);
    }
}
