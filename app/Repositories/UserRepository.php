<?php
/**
 * Created by PhpStorm.
 * User: 管理员
 * Date: 2018/12/25
 * Time: 12:12
 */

namespace App\Repositories;


use App\User;

class UserRepository
{
    public function byId($id)
    {
        return User::find($id);
    }
}
