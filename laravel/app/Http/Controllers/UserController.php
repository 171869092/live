<?php

namespace App\Http\Controllers;

use App\Service\user;
use Illuminate\Http\Request as REQ;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Routing\Controller;

class UserController extends CommonController
{
    /**
     * index
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return View::make('user.index');
    }

    /**
     * safer
     * @return \Illuminate\Contracts\View\View
     */
    public function userSafety()
    {
        return View::make('user.security');
    }

    /**
     * channge email
     * @return \Illuminate\Contracts\View\View
     */
    public function channgeEmail()
    {
        return View::make('user.channgeEmail');
    }

    /**
     * channge phone
     * @return \Illuminate\Contracts\View\View
     */
    public function channgePhone()
    {
        return View::make('user.channgePhone');
    }

    /**
     * channge password
     * @return \Illuminate\Contracts\View\View
     */
    public function channgePwd()
    {
        return View::make('user.channgePwd');
    }

    /**
     * add pay password
     * @return \Illuminate\Contracts\View\View
     */
    public function addPayPwd()
    {
        return View::make('user.addPayPwd');
    }

    /**
     * safetyQuestion
     * @return \Illuminate\Contracts\View\View
     */
    public function safetyQuestion()
    {
        return View::make('user.safetyQuestion');
    }

    /**
     * set page
     * @return \Illuminate\Contracts\View\View
     */
    public function setPage()
    {
        return View::make('user.setPage');
    }

    /**
     * subscribe
     * @return \Illuminate\Contracts\View\View
     */
    public function subscribe()
    {
        return View::make('user.subscribe');
    }

    /**
     * index get user right meuen
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUrserRight(){
        $return = $this->returnArr;
        $userId = session('userId');
        if (empty($userId)){
            $return['state'] = 0;
            $return['message'] = '未找到该用户';
        }
        $res = DB::table('user as A')
            ->where('A.user_status','=',1)
            ->leftJoin('user_position as B','A.user_id','=','B.us_id')
            ->leftJoin('user_right as C','B.up_id','=','C.up_id')
            ->get(['A.user_name','A.user_password_update_time','A.user_phone','B.up_name','C.ur_name'])
            ->toArray();

        if (empty($res)){
            $return['state'] = 0;
            $return['message'] = 'Fail!';
        }else{
            $return['state'] = 1;
            $return['message'] = 'Success!';
            $return['data'] = $res;
        }

        return $this->returnJsons($return);
    }


    /**
     * get menu
     * @param REQ $request
     */
    public function getMenu(REQ $request){
        $return = $this->returnArr;
        $data = $request->all();
        $page = $request->input('page',1);
        $pageSize = $request->input('pageSize',1);
//        if (empty($data)){
//            $return['state'] = 0;
//            $return['message'] = 'Fail';
//        }
        $result = DB::table('user_menu')->paginate($pageSize,['*'],'page',$page)->toArray();

        if (empty($result)){
            $return['state'] = 0;
            $return['message'] = 'Fail';
        }else{
            $return['state'] = 1;
            $return['message'] = 'Success';
        }
    }

}
