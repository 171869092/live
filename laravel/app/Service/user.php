<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'user';//表名
    public $timestamps = false;
    /**
     * Service
     */

    public function userInfo()
    {
        //关联的模型类名, 关系字段
        return $this->hasOne('App\Service\user','user_id');
    }
}
