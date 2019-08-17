<?php

namespace App\Http\Controllers;

use App\Service\Common;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse as RE_JSP;
use Illuminate\Support\Facades\DB;
use MarketplaceWebServiceOrders_Model_GetServiceStatusRequest;

class CommonController extends Controller
{
    //
    public $returnArr = ['state' => 0, 'message' => '','data' => ''];
    public $isToke;

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
    public $configur = [];
    public static $site = 'amzn.mws.3eb3a9ec-b6e3-3567-90b6-7a814f7624d9';

    public function __construct($type = false)
    {
        $this->isToke = false;
        if (empty($this->configur)){
            $this->configur = [
                'ServiceURL' => '',
                'ProxyHost' => null,
                'ProxyPort' => -1,
                'ProxyUsername' => null,
                'ProxyPassword' => null,
                'MaxErrorRetry' => 3,
            ];
        }
    }

    /**
     * check authoriztion
     * @param $authId
     * @return array|bool
     */
    public function checkAuthoriztion($authId){
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
            require_once(__DIR__.'/../../src/MarketplaceWebServiceOrders/Samples/.config.inc.php');
            $serviceUrl = self::$webArr['eu'];
            $this->configur['ServiceURL'] = $serviceUrl;
            $obj = new \MarketplaceWebServiceOrders_Client(AWS_ACCESS_KEY_ID,
                AWS_SECRET_ACCESS_KEY,
                APPLICATION_NAME,
                APPLICATION_VERSION,
                $this->configur);
            $request = new MarketplaceWebServiceOrders_Model_GetServiceStatusRequest();
            $request->setSellerId(MERCHANT_ID);
            $request->setMWSAuthToken(self::$site);
            $result = Common::invokeGetServiceStatus($obj, $request);
            if (true === $result){
                return true;
            }else{
                return false;
            }
        }catch (\Exception $exception){
            exit($exception->getMessage());
        }

    }

    public function returnJsons($data = [])
    {
        return response()->json([
            'state'    => $data['state'],
            'message' => $data['message'],
            'data'    => $data['data'],
        ]);
    }

    //对象转数组
    public function objToArr($obj)
    {
        return json_decode(json_encode($obj), true);
    }
}
