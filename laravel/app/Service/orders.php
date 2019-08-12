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

class orders extends Model
{
    protected $ORDERSTATUS;  #. 订单状态
    protected $REDIS;        #. rds


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
        $auth =DB::table('user_system_authorization')->where('usa_id','=',$authId)->get();

        if (empty($auth)){
            return false;
        }

        require_once(__DIR__.'/../src/MarketplaceWebServiceOrders/Samples/.config.inc.php');
//        $serviceUrl = self::$webArr['eu'];
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
        $request = new \MarketplaceWebServiceOrders_Model_ListOrdersRequest();
        $request->setSellerId(MERCHANT_ID);
        $request->setMWSAuthToken('amzn.mws.3eb3a9ec-b6e3-3567-90b6-7a814f7624d9');
        if (isset($staTime)){
            $request->setCreatedAfter('2019-01-01');
        }
        if (isset($endTime)){
            $request->setLastUpdatedAfter($endTime);
        }
        if (isset($status)){
            $request->setOrderStatus($status);
        }

        $request->SetMarketplaceId('A1PA6795UKMFR9');
        $result = self::invokeListOrderItemsx($obj, $request);

        if (true === $result){
            $return['state'] = 1;
            $return['message'] = 'Success';
        }else{
            $return['state'] = 0;
            $return['message'] = 'Fail';
        }
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
            echo "<pre>";
            $response = $service->ListOrders($request);
            var_dump($response->getListOrdersResult());die();
//var_dump($response->getResponseHeaderMetadata());die;
//            echo ("Service Response\n");
//            echo ("=============================================================================\n");
//            var_dump($response->toXML());die;
            $dom = new \DOMDocument();
            $dom->loadXML($response->toXML());
            $dom->preserveWhiteSpace = false;
            $dom->formatOutput = true;
            echo $dom->saveXML();
            echo("ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");
            if ($response){
                return true;
            }else{
                return false;
            }
die;
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

}
