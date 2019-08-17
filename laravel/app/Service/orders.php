<?php

namespace App\Service;

use DOMDocument;
use Illuminate\Database\Eloquent\Model;
use App\Table\orders as ODS;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use MarketplaceWebServiceOrders_Exception;
use MarketplaceWebServiceOrders_Interface;
use MarketplaceWebServiceOrders_Model_GetServiceStatusRequest;
use Symfony\Component\Console\Helper\Table;

class orders extends Model
{
    protected $ORDERSTATUS;  #. 订单状态
    protected $REDIS;        #. rds

    public static $webArr = [
        'eu' => "https://mws-eu.amazonservices.com/Orders/2013-09-01",
        'DE' => "https://mws-eu.amazonservices.com/Orders/2013-09-01",
        'ES' => "https://mws-eu.amazonservices.com/Orders/2013-09-01",
        'FR' => "https://mws-eu.amazonservices.com/Orders/2013-09-01",
        'GB' => "https://mws-eu.amazonservices.com/Orders/2013-09-01",
        'AU' => "https://mws.amazonservices.com.au/Orders/2013-09-01",
        'JP' => "https://mws.amazonservices.jp/Orders/2013-09-01",
        'US' => "https://mws.amazonservices.com/Orders/2013-09-01",
        'CA' => "https://mws.amazonservices.ca/Orders/2013-09-01",
        'MX' => "https://mws.amazonservices.com.mx/Orders/2013-09-01",
    ];

    public static $sites = [
        'DE' => 'A1PA6795UKMFR9',
        'ES' => 'A1RKKUPIHCS9HS',
        'FR' => 'A13V1IB3VIYZZH',
        'GB' => 'A1F83G8C2ARO7P',
        'AU' => 'A39IBJ37TRP1C6',
        'JP' => 'A1VC38T7YXB528',
        'US' => 'ATVPDKIKX0DER',
        'CA' => 'A2EUQ1WTGCTBG2',
        'MX' => 'A1AM78C64UM0Y8',
    ];
    public function __construct($type = '')
    {
        $this->REDIS = Redis::connection('my_redis');
        $this->ORDERSTATUS = 0;
    }

    /**
     * get order list
     * @param array $params
     * @return ODS[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getOrderList(array $params)
    {
        $pars = self::verification($params);
        if (!empty($pars['error'])){
            return $pars['error'];
        }
        $result = ODS::all();
        foreach ($result as $k => &$v){
            $v['order_codes'] = $v['order_code'];
        }
        return $result;
    }


    /**
     * check parameter
     * @param $params
     * @return array
     */
    public static function verification($params)
    {
        $result = [];
        foreach ($params as $key => $val)
        {
            $result[$key] = $val;
        }
        return $result;
    }

    public function execForecast($order){

    }

    /**
     * get order
     * @param bool $type
     * @return bool
     */
    public static function getOrder($authId, $staTime = '', $endTime = '', $status = '', $type = false){
        $return = [];
        if (empty($authId)){
            return false;
        }
        $auth =DB::table('user_system_authorization')->where('usa_id','=',$authId)->get()->toArray();

        if (empty($auth)){
            return false;
        }

        require_once(__DIR__.'/../src/MarketplaceWebServiceOrders/Samples/.config.inc.php');
        $serviceUrl = self::$webArr[$auth[0]['usa_region']];
//        $serviceUrl = "https://mws-eu.amazonservices.com/Orders/2013-09-01";
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
        $request = new \MarketplaceWebServiceOrders_Model_ListOrdersRequest();
        $request->setSellerId($auth[0]['usa_seller_id']?$auth[0]['usa_seller_id']:0);
        $request->setMWSAuthToken($auth[0]['usa_auth_code']?$auth[0]['usa_auth_code']:0);
        if (isset($staTime)){
            $request->setCreatedAfter('2019-01-01');
        }
        if (isset($endTime)){
            $request->setLastUpdatedAfter($endTime);
        }
        if (isset($status)){
            $request->setOrderStatus($status);
        }

        $request->SetMarketplaceId(self::$sites[$auth[0]['usa_region']]);
        $result = self::invokeListOrderItemsx($obj, $request);
        if (true === $result){
            return true;
        }else{
            return false;
        }
    }

    public static function object_array($array) {
        if(is_object($array)) {
            $array = (array)$array;
        } if(is_array($array)) {
            foreach($array as $key=>$value) {
                $array[$key] = self::object_array($value);
            }
        }
        return $array;
    }

    public static function object_to_array($obj){
        $arr = is_object($obj) ? get_object_vars($obj) : $obj;
        if(is_array($arr)){
            return array_map(__FUNCTION__, $arr);
        }else{
            return $arr;
        }
    }

    public static function getArray($array){
        $res = [];
        foreach ($array as $k=>$v){
            if (is_array($v)){
                foreach ($v as $key=>$item){
                    if (is_array($v[$key])){
                        foreach ($v[$key] as $its => $it){
                            if ($it['FieldValue']){
                                $res[$its] = $it['FieldValue'];
                            }
                        }
                    }

                }
            }

        }

        return $res;
    }

    /**
     * Get List Order Items Action Sample
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param MarketplaceWebServiceOrders_Interface $service instance of MarketplaceWebServiceOrders_Interface
     * @param mixed $request MarketplaceWebServiceOrders_Model_ListOrderItems or array of parameters
     */

    public static function invokeListOrderItemsx(\MarketplaceWebServiceOrders_Interface $service, $request)
    {
        try {
//            echo "<pre>";
            $response = $service->ListOrders($request);
//            self::_format($response->getListOrdersResult());
//            var_dump(json_decode($response->getListOrdersResult()));
            $resu = $response->getListOrdersResult();
//            var_dump($resu);die;
            $data = self::object_array($resu);
            $newArr = [];
            $error = [];
            foreach ($data as $k => $v){
                $newArr[] = $v['Orders']['FieldValue'];
                if ($v['Orders']['FieldValue']){
                    foreach ($v['Orders']['FieldValue'] as $key=>$val){
                        foreach ($val as $item){
                            $total = self::getArray($item['OrderTotal']);

                            $res = DB::table('orders')->insertGetId([
                                'order_code' => $item['AmazonOrderId']['FieldValue'],
                                'platform' => 'Amazon',
                                'order_platform_code' => $item['AmazonOrderId']['FieldValue'],
                                'create_type' => 'hand',
                                'parcel_declared_value' => isset($total['Amount']) ? $total['Amount'] : 0,
                                'currency_code'=>isset($total['CurrencyCode'])?$total['CurrencyCode']:'',
                                'add_time' => date('Y-m-d H:i:s'),
                                'update_time'=>date('Y-m-d H:i:s'),
                                'order_paydate'=>date('Y-m-d H:i:s')
                            ]);
                            if (!$res){
                                $error[] = $k;
                            }

//                            $newArr['AmazonOrderId'] = $item['AmazonOrderId']['FieldValue'];
//                            $newArr['SellerOrderId'] = $item['SellerOrderId']['FieldValue'];
//                            $newArr['PurchaseDate'] = $item['PurchaseDate']['FieldValue'];
//                            $newArr['LastUpdateDate'] = $item['LastUpdateDate']['FieldValue'];
//                            $newArr['OrderStatus'] = $item['OrderStatus']['FieldValue'];
//                            $newArr['FulfillmentChannel'] = $item['FulfillmentChannel']['FieldValue'];
//                            $newArr['SalesChannel'] = $item['SalesChannel']['FieldValue'];
//                            $newArr['OrderChannel'] = $item['OrderChannel']['FieldValue'];
//                            $newArr['ShipServiceLevel'] = $item['ShipServiceLevel']['FieldValue'];
//                            $newArr['ShippingAddress'] = $item['ShippingAddress']['FieldValue'];
//                            $newArr['OrderTotal'] = $item['OrderTotal']['FieldValue'];
                        }
                    }
                }

            }
//            var_dump($error);die;

//            $result = self::saveOrder($newArr[0]);

            if (!$error){
                return true;
            }else{
                return false;
            }

//var_dump($response->getResponseHeaderMetadata());die;
//            echo ("Service Response\n");
//            echo ("=============================================================================\n");
//            var_dump($response->toXML());die;
//            $dom = new \DOMDocument();
//            $dom->loadXML($response->toXML());
//            $dom->preserveWhiteSpace = false;
//            $dom->formatOutput = true;
//            echo $dom->saveXML();
//            echo("ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");

        } catch (MarketplaceWebServiceOrders_Exception $ex) {
            echo("Caught Exception: " . $ex->getMessage() . "\n");
            echo("Response Status Code: " . $ex->getStatusCode() . "\n");
            echo("Error Code: " . $ex->getErrorCode() . "\n");
            echo("Error Type: " . $ex->getErrorType() . "\n");
            echo("Request ID: " . $ex->getRequestId() . "\n");
            echo("XML: " . $ex->getXML() . "\n");
            echo("ResponseHeaderMetadata: " . $ex->getResponseHeaderMetadata() . "\n");
            return false;
        }
    }

    public function xmlToArray($xml)
    {
        //将XML转为array
        $array_data = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        return $array_data;
    }

    public static function saveOrder(array $data){
        $error = [];
        foreach ($data as $k=>$v){
            foreach ($v as $val){
                $row = [
                    'order_code' => $val['AmazonOrderId'],
                    'platform' => 'Amazon',
                    'order_platform_code' => $val['AmazonOrderId'],
                    'create_type' => 'hand',
                    'order_type' => 0,
                    'parcel_declared_value' => $val['AmazonOrderId'],
                    'currency_code' => $val['AmazonOrderId'],
                    'add_time' => date('Y-m-d H:i:s')
                ];
                var_dump($row);die;
                $res = DB::table('orders')->insertGetId($row);
                if (!$res){
                    $error[] = $k;
                }
            }
        }

        return $error;
    }

}
