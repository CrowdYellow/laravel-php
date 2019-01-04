<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/4
 * Time: 18:48
 */

namespace App\Model;


use App\User;

class Settings
{
    protected $allowed = ['sex', 'city', 'desc'];

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function merge(array $attributes)
    {
        $settings = array_merge($this->user->settings,array_only($attributes,$this->allowed));
        return $this->user->update(['settings' => $settings]);
    }
}