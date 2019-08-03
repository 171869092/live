<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as req;
use Illuminate\Support\Facades\View;
use App\Table\product as product;
use Illuminate\Support\Facades\DB;
use App\Service\product as ServicePro;

class PlaceController extends CommonController
{
    /**
     * index
     * @return \Illuminate\Contracts\View\View
     */
    public function index(req $request)
    {
        $return = $this->returnArr;
        $request->all();
        $page = $request->input('page',1);
        $pageSize = $request->input('pageSize',1);
//        if (empty($params)) {
//            $return['state'] = 1;
//            $return['message'] = 'fail error';
//            return $this->returnJsons($return);
//        }
        $res = DB::table('product')->paginate($pageSize,['*'],'page',$page)->toArray();
        if (!empty($res)) {
            $return['state'] = 1;
            $return['message'] = 'success';
            $return['data'] = $res;
        }

        return $this->returnJsons($return);
//        return View::make('place.products');
    }

    /**
     * template
     * @return \Illuminate\Contracts\View\View
     */
    public function freightTmp()
    {
        return View::make('place.freightTmp');
    }


    /**
     * edit product
     * @param req $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function placeEdit(req $request){
        $return = $this->returnArr;
        $params = $request->input();
        $res = ServicePro::saveProduct($params);
        if ($res){
            $return['state'] = 1;
            $return['message'] = 'success';
        }
        return $this->returnJsons($return);
    }


}
