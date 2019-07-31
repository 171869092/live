<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Model;
use App\Table\orders as ODS;
use Illuminate\Support\Facades\Redis;

class orders extends Model
{
    protected $ORDERSTATUS;  #. 订单状态
    protected $REDIS;        #. rds


    public function __construct($type = '')
    {
        $this->REDIS = Redis::connection('my_redis');
        $this->ORDERSTATUS = 0;
    }

    /**
     * get order list
     * @param array $params
     * @return ODS[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getOrderList(array $params)
    {
        $pars = self::verification($params);
        if (!empty($pars['error'])){
            return $pars['error'];
        }
        $result = ODS::all();
        foreach ($result as $k => &$v){
            $v['order_codes'] = $v['order_code'];
        }
        return $result;
    }


    /**
     * check parameter
     * @param $params
     * @return array
     */
    public static function verification($params)
    {
        $result = [];
        foreach ($params as $key => $val)
        {
            $result[$key] = $val;
        }
        return $result;
    }

}
