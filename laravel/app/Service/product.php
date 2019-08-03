<?php

namespace App\Service;

use Illuminate\Database\Eloquent\Model;
use MCS\MWSClient as MC;

class product extends Model
{
    //
    public static function saveProduct(array $data){
        $client = new MC([
            'Seller_Id' => '272477286344',
            'Access_Key_ID' => 'AKIAIMTY34WANUNAQJCQ',
            'Secret_Access_Key' => '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',
            'MWSAuthToken' => 'amzn.mws.a4b4182e-02ba-5bc7-6b26-1ab2dd11f244',


//            'Marketplace_Id' => 'A1PA6795UKMFR9',
//            'Seller_Id' => 'A1XKW8C3I72FG6',
//            'Access_Key_ID' => 'AKIAJ3WT3MQK7V5I2BIQ',
//            'Secret_Access_Key' => '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',
//            'MWSAuthToken' => 'amzn.mws.a4b4182e-02ba-5bc7-6b26-1ab2dd11f244', // Optional. Only use this key if you are a third party user/developer
        ]);

        if($client->validateCredentials()){
            echo "授权验证成功\n";die;
        }else{
            echo "授权验证失败\n";die;
        }
        die;
        return true;
    }
}
