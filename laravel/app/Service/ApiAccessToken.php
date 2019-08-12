<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Model;
use App\Table\ApiAccessToken as APITOKEN;

class ApiAccessToken extends Model
{

    /**
     * get order list
     * @param array $params
     */
    public static function getToken(array $params)
    {
        return APITOKEN::query()->where($params)->get();
    }

    /**
     * @param array $params
     * @param $id
     * @return bool
     */
    public static function addToken(array $params,$id){

            if(!empty($id)){
                $job = APITOKEN::query()->where('aat_id',$id)->update([
                    'as_code'=>'DHL',
                    'aat_user'=>$params['aat_user'],
                    'aat_pass'=>$params['aat_pass'],
                    'aat_key'=>'',
                    'aat_access_token'=>$params['aat_access_token'],
                    'aat_expires_time'=>$params['aat_expires_time']
                ]);
            }else{
                $job=APITOKEN::query()->insert([
                    'as_code'=>'DHL',
                    'aat_user'=>$params['aat_user'],
                    'aat_pass'=>$params['aat_pass'],
                    'aat_key'=>'',
                    'aat_access_token'=>$params['aat_access_token'],
                    'aat_expires_time'=>$params['aat_expires_time']
                ]);
            }

            return true;

        }




}
