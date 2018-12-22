<?php
/**
 * Created by PhpStorm.
 * User: 管理员
 * Date: 2018/12/22
 * Time: 16:34
 */
if ( !function_exists('user') ) {
    /**
     * @param null $driver
     * @return mixed
     */
    function user($driver = null)
    {
        if ( $driver ) {
            return app('auth')->guard($driver)->user();
        }
        return app('auth')->user();
    }
}
