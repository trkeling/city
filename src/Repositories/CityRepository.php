<?php
namespace Keling\City\Repositories;

use Keling\City\Models\Tr_area;
/**
 * Created by PhpStorm.
 * User: xhkj
 * Date: 2018/6/11
 * Time: 上午8:05
 */
class CityRepository
{
    /**
     * 查询所有城市
     *
     * @author Eric
     * @return mixed
     */
//    public function allCitys()
//    {
//        return Tr_area::where('level',1)->get();
//    }

    /**
     * 城市查询
     *
     * @author Eric
     * @param $level 层级 1省 2市 3区县
     * @param int $pid 父id
     * @return array
     */
    public function allCitys($level, $pid = 0)
    {
        $data = [];
        if($pid !== null && $level !== null)
        {
            if(Config('city.Redis'))
            {
                $RedisKey = $level.$pid.'tr:area';
                $CityRedis = new CityRedis();
                $RedisData = $CityRedis->get($RedisKey);
                if(count($RedisData) == 0)
                {
                    $data = $this->getTrArea($level, $pid);
                    $CityRedis->update($RedisKey, $data);
                }
                else
                {
                    $data = $RedisData;
                }
            }
            else
            {
                $data = $this->getTrArea($level, $pid);
                $data = $data->toArray();
            }
        }
        return $data;
    }

    /**
     * 查询城市信息
     *
     * @author Eric
     * @param $level
     * @param int $pid
     * @return mixed
     */
    public function getTrArea($level, $pid = 0)
    {
        return Tr_area::where('level', $level)->where('pid', $pid)->get();
    }
}