<?php
namespace App\Service\Dhl;
use App\Common\Common;
use App\Service\ApiAccessToken;
use App\Service\LogisticsTrail\LogisticsWebService;
use SoapFault;

class ExpressWebService
{
    /**
     * @desc 开发者账号
     * @var unknown
     */
    protected $_userId = ''; //LTExMTgwNTI4MTY=
    
    /**
     * @desc 开发者密码
     * @var unknown
     */
    protected $_passWord = '';  //APITest1
    
    /**
     * @desc API令牌
     * @var unknown
     */
    protected $_token = ''; //
    
    /**
     * @desc 客户DHL拣货账号ID
     * @var unknown
     */
    protected $_pickUpAccountId = '';
    
    /**
     * @desc 客户DHL发货人账号ID
     * @var unknown
     */
    protected $_soldToAccountId = '';
    
    /**
     * @desc 日志文件名
     * @var unknown
     */
    protected $_logFileName = '';

    /**
     * @desc API地址
     * @var unknown
     */
    protected $_serviceUrl = ''; //https://apitest.dhlecommerce.asia
    
    /**
     * @desc soap对象
     * @var unknown
     */
    protected $_client = null;
    
    /**
     * @desc API代码：UPS,USPS...
     * @var unknown
     */
    protected $_asCode = '';
    
    /**
     * @desc 服务商揽收方式：1-送货到仓 2-上门提货
     * @var unknown
     */
    protected $_handoverMethod = '';
    
	/**
	 * 初始化账户变量等信息。
	 */
	public function __construct($account = array(),$logFileName = '')
	{		
		if (!empty($account)) {
		    $this->_userId = isset($account["cigUser"]) ? $account["cigUser"] : 'LTU0NTU2NDU4Ng==';
		    $this->_passWord = isset($account["cigPwd"]) ? $account["cigPwd"] : 'MjAzMDI5MTU';
			$this->_serviceUrl = isset($account["url"]) ? $account["url"] : '';
			$this->_pickUpAccountId = isset($account["accountID"]) ? $account["accountID"] : '';
			$this->_soldToAccountId = isset($account["requesterID"]) ? $account["requesterID"] : '';			
		}
		$this->_logFileName ='Dhl';
	}
	
	/**
	 * 创建并预报订单
	 * @param array $orderMainData   订单数据
	 */
	public function createAndPreAlertOrderService($data,$orderNo){
		$return = array(
		    "state"=>0,
		    "message"=>"",
		    "trackingNumber"=>"",
		    "serviceNumber"=>'',
		    'serviceNumberConvert'=>'',
		    'errorCode'=>'002',
		    'apiErrorCode'=>'',
		    'apiRequest'=>array(),
		    'apiResponse'=>array(),
		);
		
		try {		    		    		    		    		    
		    /*
		     * 1.提交订单
		    */
		    if(empty($this->_token)){
				$isRefresh = false;
		        $res = $this->getAccessToken($isRefresh,$orderNo);

		        if($res['state'] != '1'){
		            $return['errorCode'] = $res['errorCode'];
		            $return['apiErrorCode'] = $res['apiErrorCode'];
		            throw new \Exception('获取Token失败:'.$res['message']);
		        }
		    }
		    
		    $data['labelRequest']['hdr']['accessToken'] = $this->_token;
		    
		    //请求数据
		    $request = json_encode($data);
		    $return['apiRequest'] = $request;
		    
		    $url = $this->_serviceUrl.'/rest/v2/Label';
		    
		    /**
		     * 2.执行请求
		     */
		    $result = $this->executeCurl($url, $request,'POST');

			/*echo "<pre>===";
			print_r($result);
			die;*/


			/*
             * 3.处理请求结果
            */
		    if($result['state'] != '1'){
				Common::getLogger('API_LOGISTICS_Request','return：OrderNo:'.$orderNo."\r\n"."Create Order Error:\r\n 网络问题提交订单数据失败，等待下轮自动同步.",'/logs/'.$this->_logFileName.'/');

				$return['errorCode'] = '001';
		        throw new \Exception('网络问题提交订单数据失败');
		    }
		    $return['apiResponse'] = $result['data'];
		    $response = json_decode($result['data'],true);

		    /**
		     * 4.异常处理
		     */
		    //系统级的错误代码和错误信息
		    $systemErrorCode = $response['labelResponse']['bd']['responseStatus']['code'];
		    $messageDetails = $response['labelResponse']['bd']['responseStatus']['messageDetails'];     //错误信息
		    $systemErrorMessage = '';
		    if(is_array($messageDetails)){
		        foreach ($messageDetails as $val){
		            $systemErrorMessage .= $val['messageDetail'];
		        }
		    }else{
		        $systemErrorMessage = $messageDetails;
		    }
			$labelCode=isset($response['labelResponse']['bd']['labels'][0]['responseStatus']['code'])?$response['labelResponse']['bd']['labels'][0]['responseStatus']['code']:'';

		    if(!empty($systemErrorCode) && !in_array($systemErrorCode, array('200','201','202','203','204')) && 
		        empty($labelCode)){
		        $return['apiErrorCode'] = $systemErrorCode;
		        $message = $systemErrorCode ? $systemErrorMessage.',错误代码：'.$systemErrorCode : '提交订单数据未知异常，请联系技术支持。';
				Common::getLogger('API_LOGISTICS_Request','return：OrderNo:'.$orderNo."\r\n".$message,'/logs/'.$this->_logFileName.'/');

				throw new \Exception($message);
		    }

		    //业务级的错误和错误信息
		    $errorCode = isset($response['labelResponse']['bd']['labels'][0]['responseStatus']['code'])?$response['labelResponse']['bd']['labels'][0]['responseStatus']['code']:'';
		    $messageDetails =isset($response['labelResponse']['bd']['labels'][0]['responseStatus']['messageDetails'])?$response['labelResponse']['bd']['labels'][0]['responseStatus']['messageDetails']:'';     //错误信息
		    $errorMessage = '';
		    if(is_array($messageDetails)){
		        foreach ($messageDetails as $val){
		            $errorMessage .= $val['messageDetail'];
		        }
		    }else{
		        $errorMessage = $messageDetails;
		    }

		    //预报失败:200成功创建，203重复提交
		    if($errorCode != '200' && $errorCode != '203'){


		        if($systemErrorCode == '202' && $systemErrorMessage == '无效的访问令牌.请提供有效的访问令牌.'){
					//强制刷新，有时候token会提前失效
		            $res = $this->getAccessToken(true);
		            if($res['state'] != '1'){
		                $return['errorCode'] = $res['errorCode'];
		                $return['apiErrorCode'] = $res['apiErrorCode'];
		                throw new \Exception('获取Token失败:'.$res['message']);
		            }
		            
		            $data['labelRequest']['hdr']['accessToken'] = $this->_token;
		            
		            //请求数据
		            $request = json_encode($data);
		            $return['apiRequest'] = $request;
		            
		            $url = $this->_serviceUrl.'/rest/v2/Label';
		            
		            /**
		             * 2.执行请求
		             */
		            $result = $this->executeCurl($url, $request,'POST');
		            
		            /*
		             * 3.处理请求结果
		            */
		            if($result['state'] != '1'){
		                $message="Create Order Error:\r\n 网络问题提交订单数据失败，等待下轮自动同步.";
						Common::getLogger('API_LOGISTICS_Request','return：OrderNo:'.$orderNo."\r\n".$message,'/logs/'.$this->_logFileName.'/');

						$return['errorCode'] = '001';
		                throw new \Exception('网络问题提交订单数据失败');
		            }
		            $return['apiResponse'] = $result['data'];
		            $response = json_decode($result['data'],true);
		            
		            /**
		             * 4.异常处理
		            */
		            //系统级的错误代码和错误信息
		            $systemErrorCode = $response['labelResponse']['bd']['responseStatus']['code'];
		            $messageDetails = $response['labelResponse']['bd']['responseStatus']['messageDetails'];     //错误信息
		            $systemErrorMessage = '';
		            if(is_array($messageDetails)){
		                foreach ($messageDetails as $val){
		                    $systemErrorMessage .= $val['messageDetail'];
		                }
		            }else{
		                $systemErrorMessage = $messageDetails;
		            }
		            if(!empty($systemErrorCode) && !in_array($systemErrorCode, array('200','201','202','203','204')) && 
		                empty($response['labelResponse']['bd']['labels'][0]['responseStatus']['code'])){
		                $return['apiErrorCode'] = $systemErrorCode;
		                $message = $systemErrorCode ? $systemErrorMessage.',错误代码：'.$systemErrorCode : '提交订单数据未知异常，请联系技术支持。';
						Common::getLogger('API_LOGISTICS_Request','return：OrderNo:'.$orderNo."\r\n".$message,'/logs/'.$this->_logFileName.'/');
						throw new \Exception($message);
		            }
		            
		            //业务级的错误和错误信息
		            $errorCode = $response['labelResponse']['bd']['labels'][0]['responseStatus']['code'];
		            $messageDetails = $response['labelResponse']['bd']['labels'][0]['responseStatus']['messageDetails'];     //错误信息
		            $errorMessage = '';
		            if(is_array($messageDetails)){
		                foreach ($messageDetails as $val){
		                    $errorMessage .= $val['messageDetail'];
		                }
		            }else{
		                $errorMessage = $messageDetails;
		            }
		            
		            //200成功创建，203重复提交
		            if($errorCode != '200' && $errorCode != '203'){
		                $return['apiErrorCode'] = $errorCode;
    		            $message = $errorCode ? $errorMessage.',错误代码：'.$errorCode : ($systemErrorMessage ? $systemErrorMessage : '提交订单数据未知异常，请联系技术支持。');
						Common::getLogger('API_LOGISTICS_Request','return：OrderNo:'.$orderNo."\r\n".$message,'/logs/'.$this->_logFileName.'/');
						throw new \Exception($message);
		            }else{
		                $labelArr = array();
		                $trackingNumber = '';
		                $serviceNumber = '';
		                foreach ($response['labelResponse']['bd']['labels'] as $v){
		                    //跟踪号
		                    $trackingNumber = $v['deliveryConfirmationNo'] ? $v['deliveryConfirmationNo'] : $trackingNumber;
		                    $serviceNumber = $v['shipmentID'] ? $v['shipmentID'] : $serviceNumber;
		                    //标签（base64编码值）
		                    $labelArr[] = $v['content'];
		                }
		                if(empty($trackingNumber)){
		                    $trackingNumber = $serviceNumber; //平邮渠道没有跟踪号用服务商单号
		                }
		                if(empty($labelArr)){
		                    throw new \Exception('订单标签为空，判断预报失败，失败原因未知');
		                }

						if(!empty($trackingNumber)){
							$logistics=new LogisticsWebService();//"lang": "en"
							$dataArr=array(
								'tracking_number'=>$trackingNumber,
								'carrier_code'=>'dhl',
								'lang'=>'cn',
							);
							$logistics->addLogistics($dataArr,$this->_logFileName);
						}
		                //订单主体数据提交成功
		                $return['trackingNumber'] = $trackingNumber;                   //服务跟踪号
		                $return['serviceNumber'] = $serviceNumber;
		                $return['label'] = $labelArr;
		                $return['state'] = '1';
		            }
		        }else{


		            $return['apiErrorCode'] = $errorCode;
		            $message = $errorCode ? $errorMessage.',错误代码：'.$errorCode : ($systemErrorMessage ? $systemErrorMessage : '提交订单数据未知异常，请联系技术支持。');
					Common::getLogger('API_LOGISTICS_Request','return：OrderNo:'.$orderNo."\r\n".$message,'/logs/'.$this->_logFileName.'/');

					throw new \Exception($message);
		        }		        
		    }else{
		        $labelArr = array();
                $trackingNumber = '';
                $serviceNumber = '';
                foreach ($response['labelResponse']['bd']['labels'] as $v){
                    //跟踪号
                    $trackingNumber = $v['deliveryConfirmationNo'] ? $v['deliveryConfirmationNo'] : $trackingNumber;
                    $serviceNumber = $v['shipmentID'] ? $v['shipmentID'] : $serviceNumber;
                    //标签（base64编码值）
                    $labelArr[] = $v['content'];
                }
                if(empty($trackingNumber)){
//                     throw new Exception('订单跟踪号为空，判断预报失败，失败原因未知');
                    $trackingNumber = $serviceNumber; //平邮渠道没有跟踪号用服务商单号
                }
                if(empty($labelArr)){
                    throw new \Exception('订单标签为空，判断预报失败，失败原因未知');
                }

				$message="预报订单成功";
				Common::getLogger('API_LOGISTICS_Request','return：OrderNo:'.$orderNo."\r\n".$message,'/logs/'.$this->_logFileName.'/');

				if(!empty($trackingNumber)){
					$logistics=new LogisticsWebService();
					$dataArr=array(
						'tracking_number'=>$trackingNumber,
						'carrier_code'=>'dhl',
						'lang'=>'cn',
					);
					$logistics->addLogistics($dataArr,$this->_logFileName);
				}
				//订单主体数据提交成功
                $return['trackingNumber'] = $trackingNumber;                   //服务跟踪号
                $return['serviceNumber'] = $serviceNumber;
                $return['label'] = $labelArr;
                $return['state'] = '1';
		    }	        
		}catch (\Exception $e){
		    $return['message'] = $e->getMessage();
		}

		return $return;
	}
	
	/**
	 * @desc 获取标签
	 * @param unknown $data
	 * @param unknown $companyCode
	 * @param unknown $orderCode
	 */
	public function getLabel($data,$orderCode)
	{
	    $return = array(
	        'code'=>'100',
	        'message'=>'',
	        'apiErrorCode'=>'',	        
	    );
		$isFlat=false;
	    $this->getAccessToken($isFlat,$orderCode);
	    try {
	        /**
	         * 1.请求数据
	         */
	        $hdr['messageType'] = 'LABELREPRINT';
	        $hdr['messageDateTime'] = date('c');
	        $hdr['accessToken'] = $this->_token;
	        $hdr['messageVersion'] = '1.4';                                                                        //API版本
	        $hdr['messageLanguage'] = 'zh_CN';                                                                     //语言：en,zh_CN,th_TH
	        
	        $bd['pickupAccountId'] = $this->_pickUpAccountId;                                                      //客户DHL拣货账号ID
	        $bd['soldToAccountId'] = $this->_soldToAccountId;                                                      //客户DHL发货人账号ID
	        
	        $shipmentItems[0]['shipmentID'] = $data['serviceNumber'];                                              //服务商单号
	        $bd['shipmentItems'] = $shipmentItems;
	        
	        $request['labelReprintRequest']['hdr'] = $hdr;
	        $request['labelReprintRequest']['bd'] = $bd;
	        
	        $requestJsonData = json_encode($request);
	    
	        /**
	         * 2.执行请求
	         */
	        $url = $this->_serviceUrl.'/rest/v2/Label/Reprint';
	        $result = $this->executeCurl($url,$requestJsonData,'POST');

	        /**
	         * 3.处理结果
	        */
	        if($result['state'] != '1'){
	            throw new \Exception($result['message']);
	        }
	         
	        /**
	         * 4.保存标签
	         */
	        $labelType =!empty($data['labelType']) ? $data['labelType'] : 'png';
	        $labelType = strtolower($labelType);
	        $response = json_decode($result['data'],true);
	        if($response['labelReprintResponse']['bd']['shipmentItems'][0]['responseStatus']['code'] != '200'){
	            //业务级错误信息
	            $message = '';
	            foreach ($response['labelReprintResponse']['bd']['shipmentItems'][0]['responseStatus']['messageDetails'] as $val){
	                $message .= $val['messageDetail'].';';
	            }
	            
	            //系统级错误信息
    	        $systemErrorCode = $response['labelResponse']['bd']['responseStatus']['code'];
    		    $messageDetails = $response['labelResponse']['bd']['responseStatus']['messageDetails'];     //错误信息
    		    $systemErrorMessage = '';
    		    if(is_array($messageDetails)){
    		        foreach ($messageDetails as $val){
    		            $systemErrorMessage .= $val['messageDetail'];
    		        }
    		    }else{
    		        $systemErrorMessage = $messageDetails;
    		    }
    		    $message = $message ? $message : $systemErrorMessage;
	            throw new \Exception($message);
	        }
	        //标签数据
	        $labelData =!empty($response['labelReprintResponse']['bd']['shipmentItems'][0]['content'])?$response['labelReprintResponse']['bd']['shipmentItems'][0]['content']:'';


			if(!empty($labelData)){
				$return['code']=200;
				$return['message'] ="Success";
				$return['data']['baseData']=$labelData;
				$return['data']['baseDataArr']=array();
				$return['data']['labelUrl']='';
			}else{
				$return['message'] ="服务商没有返回标签数据";
			}

			Common::getLogger('API_LOGISTICS_Request','return：OrderNo:'.$orderCode."\r\n"."ApiRequest:\r\n".print_r($request,true)."\r\n"."ApiResponse:\r\n".print_r($response,true)."\r\n",'/logs/'.$this->_logFileName.'/');


		}catch (\Exception $e){
	        $return['message'] = $e->getMessage();
	    }
	     
	    return $return;
	}
	
	/**
	 * @desc 获取授权token
	 * @param bool $isRefresh 是否强制刷新
	 * Example:https://apitest.dhlecommerce.asia/rest/v1/OAuth/AccessToken?clientId=LTExMTgwNTI4MTY=&password=APITest1&returnFormat=json
	 */
	public function getAccessToken($isRefresh = false,$orderNo)
	{
	    $return = array('state'=>'0','message'=>'','token'=>'','errorCode'=>'','apiErrorCode'=>'');
	    try {
	        /**
	         * 1.检查是否已经获取token
	         */
			$tokenResult=$this->getTokenId();
	        if($isRefresh == false){

				if(!empty($tokenResult)){

					//提前10秒过期token
					if(date('Y-m-d H:i:s',strtotime('+ 10 second')) < $tokenResult[0]['aat_expires_time']){
						$return['state'] = '1';
						$this->_token = $tokenResult[0]['aat_access_token'];
						Common::getLogger('API_LOGISTICS_Request','return：OrderNo:'.$orderNo."\r\n"."查询已经获取授权Token:\r\n".print_r($tokenResult,true)."\r\n",'/logs/'.$this->_logFileName.'/');
						return $return;
					}

				}

	        }
	        
	        /**
	         * 2.获取token
	         */
	        //请求url
	        $url = $this->_serviceUrl.'/rest/v1/OAuth/AccessToken?clientId='.$this->_userId.'&password='.$this->_passWord.'&returnFormat=json';
	        
	        //获取授权token
	        $result = $this->executeCurl($url,'','GET');

	        $return['errorCode'] = $result['errorCode'];
	        if($result['state'] != '1'){
				Common::getLogger('API_LOGISTICS_Request','return：OrderNo:'.$orderNo."\r\n"."Get Token Error:\r\n获取授权token失败，失败原因：".$result['message']."\r\n",'/logs/'.$this->_logFileName.'/');

			}
	        
	        $response = json_decode($result['data'],true);
	        if($response['accessTokenResponse']['token'] && $response['accessTokenResponse']['responseStatus']['code'] == '100000'){
	            $this->_token = $response['accessTokenResponse']['token'];
	            $return['state'] = '1';
	            $tokenRow = array(
	                'as_code'=>'DHLECM',
	                'aat_user'=>$this->_userId,
	                'aat_pass'=>md5($this->_passWord),
	                'aat_access_token'=>$response['accessTokenResponse']['token'],
	                'aat_expires_time'=>date('Y-m-d H:i:s',strtotime('+ '.$response['accessTokenResponse']['expires_in_seconds'].' second'))
	            );
				$tokenId=isset($tokenResult[0]['aat_id'])?$tokenResult[0]['aat_id']:'';
				ApiAccessToken::addToken($tokenRow,$tokenId);
	        }else{
	            $message = $response['accessTokenResponse']['responseStatus']['messageDetails'];
	            $errorCode = $response['accessTokenResponse']['responseStatus']['code'];
	            $return['apiErrorCode'] = $errorCode;
	            $message = $message.',errorCode:'.$errorCode;

				Common::getLogger('API_LOGISTICS_Request','return：OrderNo:'.$orderNo."\r\n"."Get Token Error:\r\n获取授权token失败，失败原因：".$message."\r\n",'/logs/'.$this->_logFileName.'/');

				throw new \Exception($message);
	        }
	    }catch(\Exception $e){
	        $return['message'] = $e->getMessage();
	    }

	    return $return;
	}


	/**
	 * @desc 获取tokenId
	 * @return array|string
	 */
	public function getTokenId(){
		$params = array(
			'as_code'=>'DHL',
			'aat_user'=>$this->_userId,
			'aat_pass'=>md5($this->_passWord)
		);
		$tokenResult = ApiAccessToken::getToken($params);
		$tokenResult=$tokenResult->toArray();

		if(!empty($tokenResult)){
			return $tokenResult;
		}
		return '';
	}
	
	/**
	 * @desc 执行curl请求
	 * @param unknown $url
	 * @param unknown $request
	 * @param string $method  请求方法：POST,GET
	 * @throws Exception
	 * @return multitype:number string mixed NULL
	 */
	public function executeCurl($url,$request = '',$method = 'POST')
	{
	    $result = array("state"=>0,"message"=>"","data"=>"","errorCode"=>'002');
	    try {
	        $header = array(
	            'Content-type:application/json',
	            'Accept:application/json',
	        );
	    
	        $ch = curl_init() ;//初始化资源句柄
	        curl_setopt($ch, CURLOPT_URL,$url) ;//设置请求地址
	        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//将curl_exec()获取的信息以文件流的形式返回，而不是直接输出。
	        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//https请求不验证证书
	        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);//https请求不验证hosts
	        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	        if($method == 'POST'){
	            curl_setopt($ch, CURLOPT_POSTFIELDS, $request);//设置请求数据
	        }	        
	        curl_setopt($ch, CURLOPT_TIMEOUT,60);//设置超时时间
	        
	        $result_api = curl_exec($ch);	    
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
	    } catch (SoapFault  $e) {
	        $result["errorCode"] = "001";
	        $result["message"] = $e->getMessage();
	    }
	    

		$logs="curl exec \r\n url:\r\n"
			. $url."\r\n"
			. "request:" . "\r\n"
			. print_r($request, true)  . "\r\n"
			. "response:\r\n"
			. print_r($result,true)."\r\n";

		Common::getLogger('API_LOGISTICS_Response','return：'.$logs,'/logs/'.$this->_logFileName.'/');
	    
	    return $result;
	}
}