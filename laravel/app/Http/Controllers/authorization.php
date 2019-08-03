<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Table\author as auth;
use MWSClientTest as ts;
use MCS\MWSClient as MC;
use MCS\MWSProduct as pro;

class authorization extends BaseController{

    public $authorization = false;    #.是否授权

    public function __construct($uname = '' , $pass = '', $auth = false)
    {

    }

    public static function runAuthorization()
    {
        $client = new MC([
//            'Marketplace_Id' => 'A1PA6795UKMFR9',
//            'Seller_Id' => 'A1XKW8C3I72FG6',
            'Seller_Id' => 'A14TJI9BYJZA3Y',
            'Access_Key_ID' => 'AKIAJ3WT3MQK7V5I2BIQ',
            'Secret_Access_Key' => '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',
//            'MWSAuthToken' => 'amzn.mws.a4b4182e-02ba-5bc7-6b26-1ab2dd11f244', // Optional. Only use this key if you are a third party user/developer
            'MWSAuthToken' => 'amzn.mws.3eb3a9ec-b6e3-3567-90b6-7a814f7624d9' // Optional. Only use this key if you are a third party user/developer
        ]);
//        $app = auth::all();
//        $product = new pro();
//        $product->sku = 'TESTNOTFORSALE';
//        $product->price = '1000.00';
//        $product->product_id = 'B0031S9***';
//        $product->product_id_type = 'ASIN';
//        $product->condition_type = 'New';
//        $product->quantity = 10;
//        if ($product->validate()) {
//            // You can also submit an array of MWSProduct objects
//            $result = $client->postProduct($product);
//        } else {
//            $errors = $product->getValidationErrors();
//        }

//        $fromDate = new \DateTime('2016-01-01');
//        $orders = $client->ListOrders($fromDate);
//        $res = [];
//        foreach ($orders as $order) {
//            $items = $client->ListOrderItems($order['AmazonOrderId']);
//            $res[] = $items;
//            print_r($order);
//            print_r($items);
//        }
//        var_dump($orders);die;

        if($client->validateCredentials()){
            echo "授权验证成功\n";die;
        }else{
            echo "授权验证失败\n";die;
        }
//        $searchField = '1'; // Can be GCID, SellerSKU, UPC, EAN, ISBN, or JAN
//
//        $result = $client->GetMatchingProductForId([
//            '1', '2', '3'
//        ], $searchField);
//
//        print_r($result);die;
        echo "so why";
    }

}
