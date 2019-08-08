<?php

namespace App\Http\Controllers;

use DOMDocument;
use Illuminate\Http\Request as req;
use Illuminate\Routing\Controller as BaseController;
use App\Table\author as auth;
use MarketplaceWebServiceOrders_Exception;
use MarketplaceWebServiceOrders_Interface as ints;
use MarketplaceWebServiceOrders_Model_ListOrdersRequest;
use MarketplaceWebServiceOrders_Model;
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
//        $data = $request->all();ListOrderItemsSample.php
//        $client = new MC([
////            'Marketplace_Id' => $data['types'],
//            'Seller_Id' => 'AQC0EPAOK4SV8',
//            'Access_Key_ID' => 'AKIAJDCTTKAWNE3R775A',
//            'Secret_Access_Key' => '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',
//            'MWSAuthToken' => 'amzn.mws.34b62dbe-4248-2d9e-066d-233bdfb2cea5', // Optional. Only use this key if you are a third party user/developer
//        ]);
        require_once(__DIR__.'/../../src/MarketplaceWebServiceOrders/Samples/.config.inc.php');
        $serviceUrl = "https://mws-eu.amazonservices.com/Orders/2013-09-01";
        $config = array (
            'ServiceURL' => $serviceUrl,
            'ProxyHost' => null,
            'ProxyPort' => -1,
            'ProxyUsername' => null,
            'ProxyPassword' => null,
            'MaxErrorRetry' => 3,
        );
        $obj = new \MarketplaceWebServiceOrders_Client(AWS_ACCESS_KEY_ID,
            AWS_SECRET_ACCESS_KEY,
            APPLICATION_NAME,
            APPLICATION_VERSION,
            $config);
        /************************************************************************
         * Setup request parameters and uncomment invoke to try out
         * sample for List Order Items Action
         ***********************************************************************/
        // @TODO: set request. Action can be passed as MarketplaceWebServiceOrders_Model_ListOrderItems
        $request = new \MarketplaceWebServiceOrders_Model_ListOrdersRequest();
        $request->setSellerId(MERCHANT_ID);
        $request->setMWSAuthToken('amzn.mws.3eb3a9ec-b6e3-3567-90b6-7a814f7624d9');
        $request->setCreatedAfter('2019-01-01');
        $request->SetMarketplaceId('A1PA6795UKMFR9');
//        $request->setOrderStatus(['PendingAvailability','Pending','Unshipped','PartiallyShipped','Shipped','InvoiceUnconfirmed','Canceled','Unfulfillable']);
        // object or array of parameters

        self::invokeListOrderItems($obj, $request);

//        var_dump($res);die;
        $client = new MC([
            'Application_Version' => '1',
            'Marketplace_Id' => 'A1PA6795UKMFR9',
            'Seller_Id' => 'A14TJI9BYJZA3Y',
            'Access_Key_ID' => 'AKIAIDH5ZZXVEUKJMEVA',
            'Secret_Access_Key' => '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',
            'MWSAuthToken' => 'amzn.mws.3eb3a9ec-b6e3-3567-90b6-7a814f7624d9' // Optional. Only use this key if you are a third party user/developer
        ]);
//        $app = auth::all();https://www.youtube.com/watch?v=wny1ojJli8k
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
//        $ASIN = '';
//        $resx = $client->ListRecommendations();
//        var_dump($resx);die;


//        $da = $client->GetOrder('303-8040564-4169135');
//        var_dump($da);die;
//
//        $fromDate = new \DateTime('2013-01-01');
//        $orders = $client->ListOrders($fromDate);
//        $res = [];
//        echo "<pre>";
//        foreach ($orders as $order) {
//            $items = $client->ListOrderItems($order['AmazonOrderId']);
//            $res[] = $items;
////            print_r($order);
////            print_r($items);
//        }
//        var_dump($orders);die;

        if($client->validateCredentials()){
            echo 111;die;
        }else{
            echo 222;die;
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

    /**
     * Get List Order Items Action Sample
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param MarketplaceWebServiceOrders_Interface $service instance of MarketplaceWebServiceOrders_Interface
     * @param mixed $request MarketplaceWebServiceOrders_Model_ListOrderItems or array of parameters
     */

    public static function invokeListOrderItems(ints $service, $request)
    {
        try {
            $response = $service->ListOrders($request);

            echo ("Service Response\n");
            echo ("=============================================================================\n");

            $dom = new DOMDocument();
            $dom->loadXML($response->toXML());
            $dom->preserveWhiteSpace = false;
            $dom->formatOutput = true;
            echo $dom->saveXML();
            echo("ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");

        } catch (MarketplaceWebServiceOrders_Exception $ex) {
            echo("Caught Exception: " . $ex->getMessage() . "\n");
            echo("Response Status Code: " . $ex->getStatusCode() . "\n");
            echo("Error Code: " . $ex->getErrorCode() . "\n");
            echo("Error Type: " . $ex->getErrorType() . "\n");
            echo("Request ID: " . $ex->getRequestId() . "\n");
            echo("XML: " . $ex->getXML() . "\n");
            echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
        }
    }

}
