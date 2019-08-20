<?php
namespace App\Http\Controllers;
use App\Common\Common;
use App\Service\ApiAccessToken;
use App\Service\SvcClient;
use Exception;
/**
 * Created by PhpStorm.
 * author: along
 * Date: 2019/08/03
 * Time: 14:54
 */
class ApiLogisticsController extends Controller{
private $_Token='QEb2xvVQaLJZ9fXiQ53gvKk4G7e7USKuxNfAVKQ2JEc=';
    /**
     * @desc 入口文件
     * @return array
     */
    public function index() {
        $return = array (
            'code' => '100',
            'message' =>'数据格式不正确',
            'token'=>'',
            'module'=>'',
            'service' => '',
            'responseTime'=>date ( 'Y-m-d H:i:s' ),
            'data'=>array(),
        );
        //查询物流轨迹
        $return = array (
            'code' => '100',
            'message' =>'数据格式不正确',
            'token'=>md5($this->_Token.date('Ymd')),
            'module'=>'LogisticsTrail',
            'service' => 'apiBaseSet',
            'responseTime'=>date ( 'Y-m-d H:i:s' ),
            'data'=>array(
                'platform'=>'ShunFeng',
                'id'=>'1',
            ),
        );

        $json=json_encode($return);
        try {
           // $json = file_get_contents ( 'php://input' );
            if (empty ( $json )) {
                $return ['message'] = '无请求数据';
                return $return;
            }

            // 请求格式为json
            $req = json_decode ( $json, true );
            $token=md5($this->_Token.date('Ymd'));

            if (! $req) {
                $return ['message'] = '数据格式需为json格式';
                return $return;
            }

            if($token!=$req['token']){
                $return ['message'] = 'Token验证无效';
                return $return;
            }
            var_dump($req);die;
            $svc = new SvcClient();
            $return = $svc->callService ( $req );
        } catch ( \Exception $e ) {
            $return ['message'] = $e->getMessage ();
        }

        echo "<pre>==";
        print_r($return);
        die ( json_encode ( $return ) );
    }


}