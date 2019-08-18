<?php

namespace App\Http\Controllers;

use App\Service\orders as ORDERS;
use http\Env\Request;
use Illuminate\Http\Request as REQ;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ordersController extends CommonController
{
    /**
     * order list
     * @return \Illuminate\Contracts\View\View
     */
    public function index(REQ $request){
        $return = $this->returnArr;
        $params = $request->all();
        $page = $request->input('page',1);
        $pageSize = $request->input('pageSize',1);

//        if (empty($params)) {
//            $return['state'] = 1;
//            $return['message'] = 'fail error';
//            return $this->returnJsons($return);
//        }
        $res = DB::table('orders')->paginate($pageSize,['*'],'page',$page)->toArray();
        if (!empty($res)) {
            $return['state'] = 1;
            $return['message'] = 'success';
            $return['data'] = $res;
        }else{
            $return['message'] = 'Fail';
        }
        return $this->returnJsons($return);
//        return View::make('orders.list');
    }

    /**
     *Exception order
     * @return \Illuminate\Contracts\View\View
     */
    public function abnormal(){
        return View::make('orders.abnormal');
    }

    /**
     *timeout order
     * @return \Illuminate\Contracts\View\View
     */
    public function timeout(){
        return View::make('orders.timeout');
    }

    /**
     *bounces order
     * @return \Illuminate\Contracts\View\View
     */
    public function bounces(){
        return View::make('orders.bounces');
    }

    /**
     *import order
     * @return \Illuminate\Contracts\View\View
     */
    public function import(){
        return View::make('orders.import');
    }


    public function forecast(REQ $request){
        $return = $this->returnArr;
        $orderId = $request->input('orderId','');
        if (empty($orderId)){
            $return['state'] = 1;
            $return['message'] = 'parameter is not empty!';
        }
        return $this->returnJsons($return);
    }


    /**
     * hand pull order
     * @param REQ $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handPullOrder(REQ $request){
        $return = $this->returnArr;
        $stTime = $request->input('start_time',date('Y-m-d'));
        $endTime = $request->input('end_time','');
        $authId = $request->input('auth_id');
        $status = $request->input('status','');

        #. check authoriztion
        $check = $this->checkAuthoriztion($authId);
        if (isset($check) && $check !== true){
            $return['state'] = 0;
            $return['message'] = '账号检测授权失败';
            return $this->returnJsons($return);
        }
        $result = ORDERS::getOrder($authId,$stTime,$endTime,$status);
        if ($result !== true){
            $return['state'] = 0;
            $return['message'] = 'Fail';
        }else{
            $return['state'] = 1;
            $return['message'] = 'Success';
        }
        return $this->returnJsons($return);
    }

    /**
     * ship
     * @param REQ $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function execShip(REQ $request){
        $return = $this->returnArr;
        $shipNum = $request->input('ship_num');
        if (empty($shipNum)){
            $return['state'] = 0;
            $return['message'] = 'Fail';
            return $this->returnJsons($return);
        }
        $result = ORDERS::saveOrder($shipNum);
        if ($result){
            $return['state'] = 1;
            $return['message'] = 'Success';
        }else{
            $return['state'] = 0;
            $return['message'] = 'Fail';
        }
        return $this->returnJsons($return);
    }

}
