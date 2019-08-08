<?php

namespace App\Service;

use DOMDocument;
use Illuminate\Database\Eloquent\Model;
use MarketplaceWebServiceOrders_Exception;
use MarketplaceWebServiceOrders_Interface;

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

            echo ("Service Response\n");
            echo ("=============================================================================\n");

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
}
