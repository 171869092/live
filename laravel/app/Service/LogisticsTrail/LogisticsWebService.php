<?php
namespace App\Service\LogisticsTrail;
use App\Common\Common;
/**
 * Created by PhpStorm.
 * author:along
 * Date: 2019/8/4
 * Time: 21:26
 */
class LogisticsWebService{
    protected $post_data;

    protected $url;

    protected $_logFileName;

    protected $apiKey;
    //数据初始化
    public function __construct($array = array()){

        $this->_logFileName=isset($array['platform'])?$array['platform']:'';
        $this->post_data=$array;
        $this->url='https://api.trackingmore.com';
        $this->apiKey='9f031ff9-9eba-45c9-9a8e-8fa479fe7a71';//9f031ff9-9eba-45c9-9a8e-8fa479fe7a71 4e216bf2-9a39-44e4-befa-995727de3278

    }

    /**
     * @desc 物流轨迹查询
     * @return array
     */
    public function getLogistics(){
            //返回参数格式
            $return = array(
                'code' => '100',
                'message' => '',
                'data' => array(),
            );
            try{
                $url=$this->url.'/v2/trackings/'.$this->post_data['platform'].'/'.$this->post_data['trackingNumber'];
                $httpHeader=array(
                    "Content-type:application/json",
                    "Trackingmore-Api-Key: ".$this->apiKey,
                );
                $result=Common::excuteCurlService($url,'',$this->_logFileName,$httpHeader,'GET');
                if($result['state'] != '1'){
                    throw new \Exception($result['message']);
                }
                $response = json_decode($result['data'],true);
                if($response['meta']['code']=='200'){
                    $return['code']='200';
                    $return['data']=$response['data'];
                }else{
                    $return['message'] = $response['meta']['message'];
                }
            }catch(\Exception $e){
                $return['message'] = $e->getMessage();
            }

            if($this->_logFileName=='sfb2c'){
                $this->_logFileName='ShunFeng';
            }
            Common::getLogger('API_LOGISTICS_Logistics','return：trackingNumber:'.$this->post_data['trackingNumber']."\r\n"."ApiResquest:".print_r($this->post_data,1)."\r\n"."ApiResponse:".print_r($result,1),'/logs/'.$this->_logFileName.'/');
            return $return;
        }


    public function addLogistics($data=array(),$platform){
        //返回参数格式
        $return = array(
            'code' => '100',
            'message' => '',
            'data' => array(),
        );
        try{
            $url=$this->url.'/v2/trackings/post';
            $httpHeader=array(
                "Content-type:application/json",
                "Trackingmore-Api-Key: ".$this->apiKey,
            );
            $postData=json_encode($data);
            $result=Common::excuteCurlService($url,$postData,$this->_logFileName,$httpHeader,'POST');
            if($result['state'] != '1'){
                $return['message'] = $result['message'];
            }
            $response = json_decode($result['data'],true);
            if($response['meta']['code']=='200'){
                $return['code']='200';
                $return['data']=$response['data'];
            }else{
                $return['message'] = $response['meta']['message'];
            }
        }catch(\Exception $e){
            $return['message'] = $e->getMessage();
        }

        Common::getLogger('API_LOGISTICS_Logistics',"\r\n"."ApiResquest:".print_r($data,1)."\r\n"."ApiResponse:".print_r($result,1),'/logs/'.$platform.'/');
       // return $return;
    }
}