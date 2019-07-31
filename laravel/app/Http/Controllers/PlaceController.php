<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as req;
use Illuminate\Support\Facades\View;
use App\Table\product as product;
use Illuminate\Support\Facades\DB;

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
//        $pageSize = $request->input('pageSize',20);
        if (empty($params)) {
            $return['state'] = 1;
            $return['message'] = 'fail error';
            return $this->returnJsons($return);
        }
        $res = DB::table('product')->simplePaginate($page)->items();
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
}
