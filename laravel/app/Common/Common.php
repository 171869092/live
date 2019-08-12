<?php
namespace App\Common;
/**
 * Created by PhpStorm.
 * author: along
 * Date: 2019/8/3
 * Time: 14:43
 */
class Common{
    /*
  * @desc 日志记录
  * */
    public static function getLogger($file="error",$row,$url="/logs/")
    {
        $now = date('[Y-m-d H:i:s]');
        $level = 'INFO';
        $logPath = storage_path().$url;
        if(!is_dir($logPath)){
            mkdir($logPath, 0777,true);
            chmod($logPath, 0777);
        }

        $logFile = $logPath.$file.'-'.date('Y-m-d').'.log';
        if(!file_exists($logFile)){//初始日志文件权限
            @file_put_contents($logFile,"log\r\n");
            @chmod($logFile,0777);
        }
        error_log("{$now} {$level}: {$row}\r\n", 3,$logFile);
    }


    /**
     * @desc 获取客户指定单位的订单重量（暂时只支持KGS、LBS、OZS互转）
     * @param unknown $inUnit  待转换重量单位
     * @param unknown $outUnit 转出重量单位
     * @param unknown $value 原始重量值
     */
    public static function getWeightForCustomUnit($inUnit,$outUnit,$value)
    {
        //单位转换成大写
        $inUnit = strtoupper($inUnit);
        $outUnit = strtoupper($outUnit);

        //重量单位提前转换成复数形式
        $inUnit = strpos($inUnit,'S') ? $inUnit : $inUnit.'S';
        $outUnit = strpos($outUnit, 'S') ? $outUnit : $outUnit.'S';

        if($inUnit == $outUnit){
            return $value;
        }

        if($inUnit == 'KGS' && $outUnit == 'OZS'){
            return $value*35.2739619;
        }

        if($inUnit == 'KGS' && $outUnit == 'LBS'){
            return $value * 2.204;
        }

        if($inUnit == 'OZS' && $outUnit == 'LBS'){
            return $value * 0.0625;
        }

        if($inUnit == 'OZS' && $outUnit == 'KGS'){
            return $value * 0.0283495;
        }

        if($inUnit == 'LBS' && $outUnit == 'OZS'){
            return $value * 16;
        }

        if($inUnit == 'LBS' && $outUnit == 'KGS'){
            return $value * 0.45359237;
        }
        return $value;
    }

    /**
     * @desc 获取客户指定单位的尺寸值(暂时只支持CM和IN互转)
     * @param unknown $inUnit  待转换单位
     * @param unknown $outUnit 转出单位
     * @param unknown $value 原始尺寸值
     */
    public static function getDimensionsForCustomUnit($inUnit,$outUnit,$value)
    {
        //单位转换成大写
        $inUnit = strtoupper($inUnit);
        $outUnit = strtoupper($outUnit);

        if($inUnit == $outUnit){
            return $value;
        }

        if($inUnit == 'CM' && $outUnit == 'IN'){
            return $value * 0.3937008;
        }

        if($inUnit == 'IN' && $outUnit == 'CM'){
            return $value * 2.539999918;
        }
        return $value;
    }


    /**
     * @desc 执行CURL请求
     * @param unknown $url 请求URL
     * @param unknown $requset 请求数据
     * @param unknown $logPath 写入日志路径
     * @param unknown $header 请求Header头
     * @param string $method 请求方法：GET,POST
     * @throws Exception
     * @return multitype:number string multitype: mixed NULL unknown
     */
    public static function excuteCurlService($url,$requset,$logPath = '',$header = array(),$method = 'POST')
    {


        //requestStatus=200 表示请求成功,其它任何状态都是异常
        $result = array(
            "state" => 0,
            "message" => "",
            "httpCode" => '',
            "data" => array(),
            "requestStatus" => 0,
        );
        try {
            $ch = curl_init() ;//初始化资源句柄
            curl_setopt($ch, CURLOPT_URL,$url) ;//设置请求地址
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//将curl_exec()获取的信息以文件流的形式返回，而不是直接输出。
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//https请求不验证证书
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);//https请求不验证hosts
            curl_setopt($ch, CURLOPT_IPRESOLVE,CURL_IPRESOLVE_V4);
            curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
            if($method == 'POST' || $method=='PUT' ||$method=='DELETE'){
                if(!empty($requset)){
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $requset);//设置请求数据
                }
            }
            curl_setopt($ch, CURLOPT_TIMEOUT,180);//设置超时时间
            $result_api = curl_exec($ch);


            $getInfo = curl_getinfo($ch);
            $result['httpCode'] = $getInfo['http_code'];

            $errNo = curl_errno($ch);
            $errorStr = curl_error($ch);
            curl_close($ch);
            if ($errNo) {
                //返回错误码
                $result['errorCode'] = in_array($errNo, array(6, 7, 28, 56)) ? "001" : "002";
                switch ((int)$errNo) {
                    case 6: //避免一直发邮件 URL报错
                        break;
                    case 7: //无法通过 connect() 连接至主机或代理服务器
                        break;
                    case 28: //超时
                        break;
                    case 56: //接收网络数据失败
                        break;
                    default:
                        break;
                }
                throw new \Exception($errorStr);
            }

            $result["state"] = 1;
            $result["data"] = $result_api;

            //表示请求成功
            if (!empty($result_api)) {
                $result['requestStatus'] = 200;
            }
        } catch (\Exception $e) {
            $result["message"] = $e->getMessage();
        }
        //请求日志
        if(!empty($logPath)){
            $logs="**************curl--start*************\r\n"
                ."url:\r\n"
                . $url."\r\n"
                . "header:\r\n"
                . print_r($header,true)
                . "request:" . "\r\n"
                . print_r($requset, true)  . "\r\n"
                . "response:\r\n"
                . print_r($result,true)."\r\n"
                . "**************curl--end*************\r\n";
            Common::getLogger('API_LOGISTICS_Response','return：'.$logs,'/logs/'.$logPath.'/');
        }

        return $result;
    }

    /**
     * 对象转数组
     * @param $obj
     * @return mixed
     */
    public static function objectToArray($obj) {
        $arr = '';
        $_arr = is_object($obj) ? get_object_vars($obj) : $obj;
        if (is_array($_arr)) {
            foreach ($_arr as $key => $val) {
                $val = (is_array($val) || is_object($val)) ? self::objectToArray($val) : $val;
                $arr[$key] = $val;
            }
        }
        return $arr;
    }

}
