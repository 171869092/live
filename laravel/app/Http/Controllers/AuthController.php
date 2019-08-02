<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request as req;
use Illuminate\Support\Facades\DB;

class AuthController extends CommonController
{
    //
    /**
     * shipping authoriztion
     * @return \Illuminate\Contracts\View\View
     */
    public function index(req $request)
    {
        $return = $this->returnArr;
        $page = $request->all();
        $page = $request->input('page',1);
        $pageSize = $request->input('pageSize',1);
        //        if (empty($params)) {
//            $return['state'] = 1;
//            $return['message'] = 'fail error';
//            return $this->returnJsons($return);
//        }

        $res = DB::table('user_system_authorization')->paginate($pageSize,['*'],'page',$page)->toArray();
        if (!empty($res)) {
            $return['state'] = 1;
            $return['message'] = 'success';
            $return['data'] = $res;
        }
        return $this->returnJsons($return);
//        return View::make('authoriz.auth');
    }


    /**
     * authoriztion
     * @param req $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function authSave(req $request){
        $return = $this->returnArr;
        $params = $request->all();
        if (empty($params)){
//            $return['state'] = 0;
//            $return['message'] = 'parameter error';
//            return $this->returnJsons($return);
        }
        if (empty($params['seller_id'])){
//            $return['state'] = 0;
//            $return['message'] = 'seller_id 不能为空';
//            return $this->returnJsons($return);
        }
        $seller =DB::table('user_system_authorization')->where('usa_seller_id','=',$params['seller_id'])->get();
        if (empty($seller)){
//            $return['state'] = 0;
//            $return['message'] = '该账户授权绑定已经存在';
//            return $this->returnJsons($return);
        }
        $params['platform'];
        $params['store_name'];
        $params['status'];
        $params['site'];
        $params['seller_id'];
        $params['token'];
        $return['state'] = 1;
        $return['message'] = 'success';
        return $this->returnJsons($return);
    }

    public function b2c(){
        return View::make('authoriz.b2c');
    }

}
