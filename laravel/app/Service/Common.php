<?php

namespace App\Service;

use DOMDocument;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use MarketplaceWebServiceOrders_Exception;
use MarketplaceWebServiceOrders_Interface;
use PHPUnit\Framework\MockObject\Stub\ReturnSelf;

class Common extends Model
{


    /**
     * authoriztion check
     * @param MarketplaceWebServiceOrders_Interface $service
     * @param $request
     * @return bool
     */
    public static function invokeGetServiceStatus(MarketplaceWebServiceOrders_Interface $service, $request)
    {
        try {
            $response = $service->GetServiceStatus($request);
//            $dom = new DOMDocument();
//            $dom->loadXML($response->toXML());
//            $dom->preserveWhiteSpace = false;
//            $dom->formatOutput = true;
//            echo $dom->saveXML();
//            echo("ResponseHeaderMetadata: " . $response->getResponseHeaderMetadata() . "\n");
            if ($response){
                return true;
            }else{
                return false;
            }

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

    public static function checkAuthoriztion($authId){
        if (empty($authId)){
            return false;
        }
        $return = [];
        try {
            $auth =DB::table('user_system_authorization')->where('usa_id','=',$authId)->get();
            if (empty($auth)){
                $return['message'] = '未找到授权用户';
                return $return;
            }
            require_once(__DIR__.'/../src/MarketplaceWebServiceOrders/Samples/.config.inc.php');
            $serviceUrl = self::$webArr['eu'];

        }catch (\Exception $exception){
            exit($exception->getMessage());
        }



    }
}
