<?php
namespace App\Service\ShunFeng;
use App\Common\Common;
use App\Service\LogisticsTrail\LogisticsWebService;
use SoapClient;


class ExpressWebService
{
	/*
	 * @desc 地址
	*/
	protected $_serviceUrl = ""; //http://uatoms.trackmeeasy.com/ruserver/webservice/sfexpressService?wsdl
	
	/*
	 * @desc checkword，用于生成校验码
	*/
	protected $_serviceToken = "";//78BE1BCAAED1EE08D344F894FBB296D3
	
	protected $_printLabelUrl = ''; //http://sfapi.trackmeeasy.com/ruserver/api/getLabelUrl.action
	
	/*
	 * @desc 接入码
	*/
	protected $_serviceCode = "";//erptest
	protected $_logFileName = '';
	
	public function __construct($account=array(),$logFileName){
		$this->_logFileName ='ShunFeng';
		if(!empty($account)){
			$this->_serviceUrl = isset($account["url"]) ? $account["url"] : '';
			$this->_printLabelUrl = isset($account["labelUrl"]) ? $account["labelUrl"] : '';
			$this->_serviceToken = isset($account["token"]) ? $account["token"] : '';
			$this->_serviceCode = isset($account["application"]) ? $account["application"] : '';
		}
	}
	
	public function createAndPreAlertOrderService($xmlArray,$orderNo){
		$return = array("state"=>0,"message"=>"","data"=>"",'errorCode'=>'002');


		//接入码
		$xmlArray["Head"] = $this->_serviceCode;
		
		$xml = $this->array2xml($xmlArray,'Request');
		$verifyCode = $this->EncryptionData($xml);

		$return['apiRequest'] = $xmlArray;

		Common::getLogger('API_LOGISTICS_Request','return：OrderNo:'.$orderNo."\r\n"."Url:\r\n".$this->_serviceUrl."\r\n"."Create Shipment Request Xml:\r\n".print_r($xml,1)."Create Shipment Request Data:\r\n".print_r($xmlArray,1),'/logs/'.$this->_logFileName.'/');
		Common::getLogger('API_LOGISTICS_Request','return：OrderNo:'.$orderNo."\r\n"."Create Shipment Request Md5:\r\n".print_r($verifyCode,true)."\r\n",'/logs/'.$this->_logFileName.'/');

		$result = $this->excuteService($xml,$verifyCode,"sfKtsService");
		$return['apiResponse'] = $result['data'];

		$objectxmls= simplexml_load_string($result['data']);//将文件转换成 对象
		$xmljsons= json_encode($objectxmls);//将对象转换个JSON
		$xmlarrays=json_decode($xmljsons,true);//

		$result['data'] =$xmlarrays;

		Common::getLogger('API_LOGISTICS_Request','return：OrderNo:'.$orderNo."\r\n"."Create Shipment Response:\r\n".print_r($result,true)."\r\n",'/logs/'.$this->_logFileName.'/');
		if($result["ask"] == '0' || empty($result["data"])  || $result["data"]["Head"] == "ERR"){
			$error = $result["data"]["ERROR"];
			$return["message"] = $error;
		}else{
		    $mailNo = $result["data"]["Body"]["OrderResponse"]["@attributes"]['mailno'];
			$trackingNumber=(isset($mailNo) && !empty($mailNo)) ? $mailNo : '';
			if(!empty($trackingNumber)){
				$logistics=new LogisticsWebService();
				$dataArr=array(
					'tracking_number'=>$trackingNumber,
					'carrier_code'=>'sfb2c',
					'lang'=>'cn',
				);
				$logistics->addLogistics($dataArr,$this->_logFileName);
			}
			$return["trackingNumber"] =$trackingNumber;
			$return["serviceNumber"] = $result["data"]["Body"]["OrderResponse"]["@attributes"]["agent_mailno"];
			$return["state"] =1;
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
	        'message'=>''
	    );
	    
	    try {
	        //是否打印配货单
	        $isPrintPeiHuo = $data['packinglist'] ? 'true' : 'false';
	        $request = array(
	            'mailno'=>$data['trackingNumber'],
	            'orderid'=>$orderCode,
	            'onepdf'=>'true', //是否打印一张pdf
	            'jianhuodan'=>$isPrintPeiHuo,
	            'username'=>$this->_serviceCode,
	        );
	        $sign = $this->EncryptionData($this->_serviceCode);
	        $request['signature'] = $sign;
	        $request = http_build_query($request);
	        $url = $this->_printLabelUrl.'?'.$request;
	        $header = array();
	        $result = Common::excuteCurlService($url, $request, $this->_logFileName,$header,'GET');

	        if($result['state'] != '1'){
	            throw new \Exception($result['message']);
	        }
	        $response = json_decode($result['data'],true);

	        if($response['success'] == true && !empty($response['url'])){
	            $labelUrl = $response['url'];
	            $labelData = $this->curl_file_get_contents($labelUrl);
				$return['code']=200;
				$return['message'] ="Success";
				$return['data']['baseData']=base64_encode($labelData);
				$return['data']['labelUrl']=$labelUrl;
				$return['data']['baseDataArr']=array();
				Common::getLogger('API_LOGISTICS_Request','return：OrderNo:'.$orderCode."\r\n"."ApiRequest:\r\n".print_r($request,true)."\r\n"."ApiResponse:\r\n".print_r($response,true)."\r\n",'/logs/'.$this->_logFileName.'/');

			}else{
	            $message = $response['exception'] ? $response['exception'] : '服务商未返回标签。';
	            throw new \Exception($message);
	        }
	    }catch(\Exception $e){
	        $return['message'] = $e->getMessage();
	    }
	    
	    return $return;
	}

	function curl_file_get_contents($szUrl){
		$UserAgent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $szUrl);
		curl_setopt($curl, CURLOPT_HEADER, 0);  //0表示不输出Header，1表示输出
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_ENCODING, '');
		curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
		$data = curl_exec($curl);
		return $data;
	}
	
	public function verificationApiAuth()
	{
	    $return = array(
	        'ask'=>'0',
	        'message'=>''
	    );
	     
	    try{
	        $xml = '<Request service="OrderService" lang="zh-CN">
                    <Head>'.$this->_serviceCustomerId.'</Head>
                    <Body>
                		<Order orderid="ML0978234090001" erp_code="0019" express_type="9" j_company="EC" j_contact="Yau" j_tel="1234141234" j_mobile="" j_address="nanshan xili" j_province="" j_city="shenzhen" j_county=" " j_post_code="548121" j_country="CN" d_company=" " d_contact="Becki Heyl" d_tel="89689362615" d_mobile="89689362615" d_address="ylitca BIANKI dom 6 korp.4 kv.81" d_province="Moscow" d_city="Moscow" d_county="" d_post_code="142784" d_country="RU" parcel_quantity="1" pay_method="1" declared_value="12" declared_value_currency="USD" custid="" cargo_total_weight="0.200" operate_flag="1" isBat="1" cargo_length="1" cargo_width="1" cargo_height="1" remark="">
                			<Cargo name="MOIS" count="4" unit="Piece" weight="0.1" amount="60" currency="USD" order_url="">
                			</Cargo>
                			<Cargo name="Bracelet" count="1" unit="Piece" weight="0.1" amount="40" currency="USD" order_url="">
                			</Cargo>
                		</Order>
                	</Body>
                    </Request>';
	        $verifyCode = $this->EncryptionData($xml);
	        $result = $this->excuteService($xml,$verifyCode,"sfKtsService");
	        if($result['ack'] != '1'){
	            throw new Exception($result['message']);
	        }
	        $result['data'] = XML_unserialize($result['data']);
	        if($result['data']['Response']['ERROR attr']['code'] == '9100'){
	            $return['ask'] = '1';
	        }else{
	            $message = $result['data']['Response']['ERROR'] ? $result['data']['Response']['ERROR'] : '';
	            throw new Exception($message);
	        }
	    }catch(Exception $e){
	        $return['message'] = $e->getMessage();
	    }
	     
	    return $return;
	}
	
	/**
	 * 调用webserver
	 * @param $xml XML字符串
	 * @param $verifyCode 加密后的字符串
	 * 返回xml格式
	 */
	public function excuteService($xml,$verifyCode,$method){
		$result = array("ask"=>0,"message"=>"","data"=>"");
		$options = array(
				"trace" => true,
				"exceptions" => true,
				"connection_timeout" => 1000,
				"encoding" => "utf-8",
		);
	
		$client = null;
		try {
			$client = new SoapClient($this->_serviceUrl, $options);
			$data = $client->__soapCall($method, (array("xml" => $xml, "verifyCode" => $verifyCode)));
			$result["ask"] = 1;
			$result["data"] = $data;
		} catch (\SoapFault $e) {
			$result["message"] = $e->getMessage();
		}
		
		return $result;
	}
	
	/**
	 * 加密方法
	 * @param $xml XML字符串
	 * @param $checkword 密钥
	 */
	public function EncryptionData($xml){
	
		$newbody = $xml . $this->_serviceToken;
		$md5 = md5($newbody, true);
		$verifyCode = base64_encode($md5);
	
		return $verifyCode;
	}
	
	/**
	 * 数组转为xML
	 * @param $var 数组
	 * @param $type xml的根节点
	 * @param $tag
	 * 返回xml格式
	 */
	
	private function array2xml($var, $type = 'root', $tag = '') {
		$ret = '';
		if (!is_int($type)) {
			if ($tag)
				return $this->array2xml(array($tag => $var), 0, $type); else {
					$tag .= $type;
					$type = 0;
				}
		}
		$level = $type;
		$indent = str_repeat("\t", $level);
		if (!is_array($var)) {
			$ret .= $indent . '<' . $tag;
			$var = strval($var);
			if ($var == '') {
				$ret .= ' />';
			} else if (!preg_match('/[^0-9a-zA-Z@\._:\/-]/', $var)) {
				$ret .= '>' . $var . '</' . $tag . '>';
			} else {
				$ret .= "><![CDATA[{$var}]]></{$tag}>";
			}
			$ret .= "\n";
		} else if (!(is_array($var) && count($var) && (array_keys($var) !== range(0, sizeof($var) - 1))) && !empty($var)) {
			foreach ($var as $tmp)
				$ret .= $this->array2xml($tmp, $level, $tag);
		} else {
			$ret .= $indent . '<' . $tag;
			if ($level == 0)
				$ret .= '';
			if (isset($var['@attributes'])) {
				foreach ($var['@attributes'] as $k => $v) {
					if (!is_array($v)) {
						$ret .= sprintf(' %s="%s"', $k, $v);
					}
				}
				unset($var['@attributes']);
			}
			$ret .= ">\n";
			foreach ($var as $key => $val) {
				$ret .= $this->array2xml($val, $level + 1, $key);
			}
			$ret .= "{$indent}</{$tag}>\n";
		}
		return $ret;
	}
}