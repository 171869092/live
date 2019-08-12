<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Model;
use App\Table\ApiService as SERVICE;

class ApiService extends Model
{

    /**
     * get order list
     * @param array $params
     */
    public static function getService(array $params)
    {
        if(!empty($params)){
            return SERVICE::query()->where($params)->get();
        }else{
            return SERVICE::query()->get();
        }

    }

    /**
     * @param array $params
     * @param $id
     * @return bool
     */
    public static function addService(array $params,$id){

        if(!empty($id)){
            $job = SERVICE::query()->where('as_id',$id)->update([
                'as_code'=>strtoupper($params['as_code']),
                'as_code_ref'=>strtoupper($params['as_code']),
                'as_name'=>$params['as_name'],
                'as_token'=>$params['as_token'],
                'as_address'=>$params['as_address'],
                'as_address1'=>$params['as_address1'],
                'as_application'=>$params['as_application'],
                'as_partner'=>$params['as_partner'],
                'as_account'=>$params['as_account'],
            ]);
        }else{
            $job=SERVICE::query()->insert([
                'as_code'=>$params['as_code'],
                'as_code_ref'=>$params['as_code'],
                'as_name'=>$params['as_name'],
                'as_token'=>$params['as_token'],
                'as_address'=>$params['as_address'],
                'as_address1'=>$params['as_address1'],
                'as_application'=>$params['as_application'],
                'as_partner'=>$params['as_partner'],
                'as_account'=>$params['as_account'],
            ]);
        }

        return true;

    }




}
