<?php
/**
 * Created by PhpStorm.
 * User: 管理员
 * Date: 2018/12/22
 * Time: 19:48
 */

namespace App\Repositories;


use App\Model\Topic;
use Illuminate\Http\Request;

class TopicRepository
{
    public function getTopics(Request $request)
    {
        return Topic::select(['id', 'name'])
            ->where('name', 'like', '%'.$request->query('q').'%')
            ->get();
    }
}
