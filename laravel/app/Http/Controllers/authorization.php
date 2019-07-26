<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Table\author as auth;
use MWSClientTest as ts;
use MCS\MWSClient as mc;
use MCS\MWSProduct as pro;

class authorization extends BaseController{

    public $authorization = false;    #.是否授权

    public function __construct($uname = '' , $pass = '', $auth = false)
    {

    }

    public static function runAuthorization()
    {
        $client = new mc([
            'Marketplace_Id' => 'A1PA6795UKMFR9',
            'Seller_Id' => 'A22SW78TJZH24R',
            'Access_Key_ID' => 'AKIAIDH5ZZXVEUKJMEVA',
            'Secret_Access_Key' => '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',
            'MWSAuthToken' => 'amzn.mws.a4b4182e-02ba-5bc7-6b26-1ab2dd11f244' // Optional. Only use this key if you are a third party user/developer
        ]);
//        $app = auth::all();
//        $product = new pro();
//        $product->sku = 'TESTNOTFORSALE';
//        $product->price = '1000.00';
//        $product->product_id = 'B0031S9***';
//        $product->product_id_type = 'ASIN';
//        $product->condition_type = 'New';
//        $product->quantity = 10;
//        if($product->validate()){
//            $result = $client->postProduct($product);
//        }else{
//            $errors = $product->getValidationErrors();
//        }
        $reportId = $client->RequestReport('_GET_MERCHANT_LISTINGS_DATA_');
        var_dump($reportId);die;
// Wait a couple of minutes and get it's content
        $report_content = $client->GetReport($reportId);
        print_r($report_content);die;
        $ts = MWSClientTest::testValidateCredentialsOnWrongCredentials();
        var_dump($ts);die;
//        var_dump($app);die;
        echo "so why";
    }

}
