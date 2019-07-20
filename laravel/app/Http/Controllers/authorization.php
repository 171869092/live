<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class authorization extends BaseController{

    public $authorization = false;

    public function __construct($uname , $pass , $auth = false)
    {

    }

    public static function runAuthorization()
    {

    }

}
