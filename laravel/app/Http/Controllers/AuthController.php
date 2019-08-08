<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request as req;
use Illuminate\Support\Facades\DB;

class AuthController extends CommonController
{
    public function __construct()
    {
        $this->middleware('');
    }
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
            $return['state'] = 0;
            $return['message'] = '参数错误';
            return $this->returnJsons($return);
        }

        if (empty($params['seller_id'])){
            $return['state'] = 0;
            $return['message'] = '卖家id不能为空';
            return $this->returnJsons($return);
        }

        if (empty($params['store_name'])){
            $return['state'] = 0;
            $return['message'] = '店铺名称不能为空';
            return $this->returnJsons($return);
        }



        if (empty($params['site'])){
            $return['state'] = 0;
            $return['message'] = '地区不能为空';
            return $this->returnJsons($return);
        }

        if (empty($params['token'])){
            $return['state'] = 0;
            $return['message'] = '授权码不能为空';
            return $this->returnJsons($return);
        }

        $seller =DB::table('user_system_authorization')->where('usa_seller_id','=',$params['seller_id'])->get();
        if (empty($seller)){
            $return['state'] = 0;
            $return['message'] = '该账户授权绑定已经存在';
            return $this->returnJsons($return);
        }

        $uid = session('user_id')?session('user_id'):1;
        $res = DB::table('user_system_authorization')->insertGetId([
            'user_id' => $uid,
            'usa_region' => $params['site'],
            'usa_seller_id' => $params['seller_id'],
            'usa_auth_code' => $params['token'],
            'usa_add_time' => date("Y-m-d H:i:s"),
            'usa_auth_time' => date("Y-m-d H:i:s"),
            'store_name' => $params['store_name'],
        ]);
        if ($res){
            $return['state'] = 1;
            $return['message'] = 'Success!';
        }else{
            $return['state'] = 0;
            $return['message'] = 'Fail!';
        }

        return $this->returnJsons($return);
    }

    public function b2c(){
        return View::make('authoriz.b2c');
    }


    /**
     * check authoriztion
     */
    public function authCheck(req $request){
        $return = $this->returnArr;
        $authId = $request->input('auth_id');
        if (empty($params)){
            $return['state'] = 0;
            $return['message'] = '参数错误';
            return $this->returnJsons($return);
        }
        $seller =DB::table('user_system_authorization')->where('usa_seller_id','=',$params['seller_id'])->get();

    }

}
