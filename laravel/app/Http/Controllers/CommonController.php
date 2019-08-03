<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse as RE_JSP;

class CommonController extends Controller
{
    //
    public $returnArr = ['state' => 0, 'message' => '','data' => ''];
    public $isToke;

    public function __construct($type = false)
    {
        $this->isToke = false;
    }

    public function returnAjax($data, $status = 200 , $header = array() , $type = false)
    {
//        return response()->json($data);
        return new RE_JSP(array($data),$status);
    }

    public function returnJsons($data = [])
    {
        return response()->json([
            'state'    => $data['state'],
            'message' => $data['message'],
            'data'    => $data['data'],
        ]);
    }

    //对象转数组
    public function Arr($obj)
    {
        return json_decode(json_encode($obj), true);
    }
}
