<?php

namespace App\Table;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
    /**
     * 关联模型
     * @var string
     * 1.1 - 表名
     * 1.2 - 逐渐id
     * 1.3 - 是否使用框架的create_at | update_at
     * 1.4 - 日期粗存格式
     */
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'user_add_time';
    const UPDATED_AT = 'user_update_time';
}
