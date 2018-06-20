<?php
/**
 * Created by PhpStorm.
 * User: xhkj
 * Date: 2018/6/20
 * Time: 上午8:41
 */

namespace Keling\City\Repositories;

use Illuminate\Support\Facades\Redis;


class CityRedis
{
    public function __construct()
    {
        // 检查Redis是否开启
    }

    /**
     * 获取缓存
     *
     * @author Eric
     * @param $key
     * @return mixed
     */
    public function get($key)
    {
        return json_decode(Redis::get($key), true);
    }


    /**
     * 更新缓存
     *
     * @author Eric
     * @param $key
     * @param $data
     */
    public function update($key, $data)
    {
        Redis::set($key, $data);
    }
}