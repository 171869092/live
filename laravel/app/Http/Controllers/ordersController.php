<?php

namespace App\Http\Controllers;

use App\Service\orders as ORDERS;
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

}
