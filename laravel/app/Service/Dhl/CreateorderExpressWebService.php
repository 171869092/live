<?php
namespace App\Service\Dhl;
use App\Common\Common;

/**
 * @desc DHL-API对接
 * @author along
 * @date 2019-08-03
 */
class CreateorderExpressWebService
{   
    /**
     * @desc 提交数据
     */
    protected $post_data;
    
    protected $service;

	protected $_logFileName;

	protected $__account;
	//数据初始化
	public function __construct($array = array()){
		$this->_logFileName="DHL";
		$this->post_data=$array;
	}

	/**
	 * 创建并预报物流订单
	 */
	public function createAndPreAlertOrderService(){
		//返回参数格式
		$callResult = array(
				'code' => '100',
				'message' => '',
				'data' => array(
					'serviceNumber' => '',
					'trackingNumber' => '',
					'labelUrl' => '',
					'baseData'=>'',
					'baseDataArr'=>array(),
					'apiRequest'=>array(),  //API原始请求数据
					'apiResponse'=>array(), //API原始返回数据
				),
		);
		try {

            //调用服务接口，同步审核订单
            $result = $this->excuteOrderTo();
			$callResult['data']['apiRequest'] = $result['apiRequest'];
			$callResult['data']['apiResponse'] = $result['apiResponse'];
			if($result["state"] == '1'){
				$callResult["code"] = 200;
				$callResult['data']["serviceNumber"] = $result['serviceNumber'];                             //服务商单号
				$callResult['data']['trackingNumber'] = $result['trackingNumber'];                            //跟踪号
				$callResult['data']['baseData']=$result['label'][0];
				$callResult['data']['baseDataArr']=$result['label'];
			}else{
			    $callResult["message"] = $result["message"];
			}
			
		} catch (\Exception $e) {
			$callResult['message'] = $e->getMessage();
		}
		return $callResult;
	}
	
	//调用服务接口
	public function excuteOrderTo(){
		$objProcess_temp = new ExpressWebService($this->post_data['account'],$this->_logFileName);
		
		//获取订单数据
		$data = $this->orderDataSet();
		$sysResult = $objProcess_temp->createAndPreAlertOrderService($data,$this->post_data['order']['orderNo']);
		Common::getLogger('API_LOGISTICS_Response','return：OrderNo:'.$this->post_data['order']['orderNo']."\r\n"."ApiResquest:".print_r($data,1)."\r\n"."ApiResponse:".print_r($sysResult,1),'/logs/'.$this->_logFileName.'/');
		return $sysResult;
	}
	
	/*
	 * 构造订单信息
	 */
	public function orderDataSet()
	{
	    $data = array();	    
	    /**
	     * 验证配置信息
	     */
	    if(empty($this->post_data['order']['serverCodeType'])){
	        throw new \Exception("API产品代码不能为空.");
	    }
	    
	    $labelRequest = array();
	    
	    /**
	     * 1.API头部信息
	     */
	    $hdr['messageType'] = 'LABEL';
	    $hdr['messageDateTime'] = date('c');                                                                   //请求时间
	    $hdr['accessToken'] = '';                                                                              //授权token
	    $hdr['messageVersion'] = '1.4';                                                                        //API版本
	    $hdr['messageLanguage'] = 'zh_CN';                                                                     //语言：en,zh_CN,th_TH
	    
	    /**
	     * 2.API主体信息
	     */
	    $bd['pickupAccountId'] = $this->post_data['account']['accountID'];                                                 //客户DHL拣货账号ID
	    $bd['soldToAccountId'] = $this->post_data['account']['requesterID'];                                               //客户DHL发货人账号ID

	    /**
	     * 3.拣货地址
	     */
	    $pickupAddress['companyName'] =$this->post_data['pickUpInfo']['pickUpCompanyName'];                               //拣货人公司名称
	    $pickupAddress['name'] = $this->post_data['pickUpInfo']['pickUpName'];                                             //拣货人姓名
	    $pickupAddress['address1'] = $this->post_data['pickUpInfo']['pickUpAddress1'];                                     //拣货地址1
	    $pickupAddress['address2'] =$this->post_data['pickUpInfo']['pickUpAddress2'];                                     //拣货地址2
	    $pickupAddress['city'] = $this->post_data['pickUpInfo']['pickUpCity'];                                             //拣货城市
	    $pickupAddress['state'] = $this->post_data['pickUpInfo']['pickUpStateOrProvince'];                                 //拣货州、省
	    $pickupAddress['district'] = null;                                                                     //拣货人区
	    $pickupAddress['country'] = $this->post_data['pickUpInfo']['pickUpCountryCode'];                                   //拣货人国家
	    $pickupAddress['postCode'] = $this->post_data['pickUpInfo']['pickUpPostCode'];                                     //拣货人邮编
	    $pickupAddress['phone'] = $this->post_data['pickUpInfo']['pickUpPhone'];                                           //拣货人电话
	    $pickupAddress['email'] = $this->post_data['pickUpInfo']['pickUpEmail'];                                           //拣货人邮箱
	    $bd['pickupAddress'] = $pickupAddress;
	    
	    /**
	     * 4.发件人地址
	     */
	    $shipperAddress['companyName'] = $this->post_data['shipper']['shipperCompanyName'] ? $this->post_data['shipper']['shipperCompanyName'] : null;
	    $shipperAddress['name'] = $this->post_data['shipper']['shipperName'];
	    $shipperAddress['address1'] = $this->post_data['shipper']['shipperAddress1'];
	    $shipperAddress['address2'] = $this->post_data['shipper']['shipperAddress2'] ? $this->post_data['shipper']['shipperAddress2'] : null;
	    $shipperAddress['city'] = $this->post_data['shipper']['shipperCity'];
	    $shipperAddress['state'] = $this->post_data['shipper']['shipperStateOrProvince'];
	    $shipperAddress['district'] = null;
	    $shipperAddress['country'] = $this->post_data['shipper']['shipperCountryCode'];
	    $shipperAddress['postCode'] = $this->post_data['shipper']['shipperPostCode'];
	    $shipperAddress['phone'] = $this->post_data['shipper']['shipperPhone'] ? $this->post_data['shipper']['shipperPhone'] : null;
	    $shipperAddress['email'] = $this->post_data['shipper']['shipperEmail'] ? $this->post_data['shipper']['shipperEmail'] : null;
	    $bd['shipperAddress'] = $shipperAddress;
	    
	    /**
	     * 5.订单收件人地址信息
	     */
	    $consigneeAddress['companyName'] = $this->post_data['order']['consigneeCompanyName'];                              //订单收件人公司名称
	    
	    $consigneeAddress['name'] = $this->post_data['order']['consigneeName'];                                            //订单收件人姓名
	    $address1 = $this->post_data['order']['consigneeAddress1'];
	    $consigneeAddress['address1'] = $address1;                                                             //收件人地址1
	    $consigneeAddress['address2'] = $this->post_data['order']['consigneeAddress2'];                                    //收件人地址2
	    //门牌号
	    if(!empty($this->post_data['order']['consigneeHouseNo'])){
	        if(empty($this->post_data['order']['consigneeAddress2'])){
	            $consigneeAddress['address1'] = $address1.' '.$this->post_data['order']['consigneeHouseNo'];
	        }else{
	            $consigneeAddress['address2'] = $consigneeAddress['address2'].' '.$this->post_data['order']['consigneeHouseNo'];
	        }
	    }
	    $consigneeAddress['city'] = $this->post_data['order']['consigneeCity'];                                            //收件人城市
	    $consigneeAddress['state'] = $this->post_data['order']['consigneeStateOrProvince'];                                //收件人州、省
	    if(empty($consigneeAddress['state'])){
	        $consigneeAddress['state'] = null;
	    }
	    $consigneeAddress['district'] = null;                                                                  //收件人区
	    $consigneeAddress['country'] = $this->post_data['order']['consigneeCountryCode'];                                  //收件人国家
	    $consigneeAddress['postCode'] = $this->post_data['order']['consigneePostalCode'];                                  //收件人邮编
	    
	    //美国邮编特殊处理：只取五位数字，过滤掉"-"
	    if($consigneeAddress['country'] == 'US'){	        
	        $consigneeAddress['postCode'] = str_replace('-', '', $consigneeAddress['postCode']);
	        $consigneeAddress['postCode'] = substr($consigneeAddress['postCode'], 0, 5);
	        if(!is_numeric($consigneeAddress['postCode']) || strlen($consigneeAddress['postCode']) < 5){
	            throw new \Exception('收件人邮编格式不正确。');
	        }
	    }	    
	    
	    $consigneeAddress['phone'] = $this->post_data['order']['consigneePhone'];                                          //收件人电话
	    if(empty($consigneeAddress['phone'])){
	        $consigneeAddress['phone'] = null;
	    }else{
	        //不支持电话号码带正斜线,替换成中划线
	        $consigneeAddress['phone'] = str_replace('/', '-', $consigneeAddress['phone']);
	    }
	    
	    $consigneeAddress['email'] = $this->post_data['order']['consigneeEmail'];                                          //收件人邮箱
	    if(empty($consigneeAddress['email'])){
	        $consigneeAddress['email'] = null;
	    }
	    //判断客户是否开启自动拆分功能
	    if($this->post_data['order']['isAutoSplitAddress'] == '1'){
	        $consigneeAddress = $this->autoProcessAddress($consigneeAddress);
	    }
	    if(empty($consigneeAddress['companyName'])){
	        $consigneeAddress['companyName'] = null;
	    }
	    if(empty($consigneeAddress['address2'])){
	        $consigneeAddress['address2'] = null;
	    }
	    $shipmentItems[0]['consigneeAddress'] = $consigneeAddress;
	    
	    /**
	     * 6.回邮地址
	     */
	    $returnAddress['companyName'] = $this->post_data['returnInfo']['returnCompanyName'] ? $this->post_data['returnInfo']['returnCompanyName'] : null;
	    $returnAddress['name'] = $this->post_data['returnInfo']['returnName'];
	    $returnAddress['address1'] = $this->post_data['returnInfo']['returnAddress1'];
	    $returnAddress['address2'] = $this->post_data['returnInfo']['returnAddress2'] ? $this->post_data['returnInfo']['returnAddress2'] : null;
	    $returnAddress['city'] = $this->post_data['returnInfo']['returnCity'];
	    $returnAddress['state'] = $this->post_data['returnInfo']['returnStateOrProvince'];
	    $returnAddress['district'] = null;
	    $returnAddress['country'] = $this->post_data['returnInfo']['returnCountryCode'];
	    $returnAddress['postCode'] = $this->post_data['returnInfo']['returnPostCode'];
	    $returnAddress['phone'] = $this->post_data['returnInfo']['returnPhone'] ? $this->post_data['returnInfo']['returnPhone'] : null;
	    $returnAddress['email'] = $this->post_data['returnInfo']['returnEmail'] ? $this->post_data['returnInfo']['returnEmail'] : null;
	    //提供了退件地址才传
	    if(!empty($returnAddress['address1'])){
	        $shipmentItems[0]['returnAddress'] = $returnAddress;
	    }
        	    
	    /**
	     * 7.订单商品信息
	     */
	    $shipmentContents = array();
	    $packageDesc = '';                 //商品描述
	    $skuStr = '';
	    $hasBattery = false;               //是否含电池
	    foreach ($this->post_data['orderItem'] as $key=>$val){
	         $packageDesc .= $val['titleEn']; 
	         $item['skuNumber'] = $val['sku'];                                                                 //商品SKU
	         $item['description'] = mb_substr($val['titleEn'],0,50);                                                           //商品描述
	         $item['itemValue'] = floatval($val['value']);                                                     //申报价值
	         $itemQuantity = intval($val['quantity']);
	         $itemQuantity = ($itemQuantity > 999) ? 999 : $itemQuantity;
	         $item['itemQuantity'] = $itemQuantity;                                                            //申报数量:最大999，超过默认999
	         $item['countryOfOrigin'] = 'CN';                                                                  //商品原产国
	         $item['descriptionExport'] = mb_substr($val['titleCn'],0,50,'UTF-8');                             //商品原产国所用语言描述
	         if(!empty($val['hsCode'])){
	             $item['hsCode'] = $val['hsCode'];                                                             //海关编码
	         }	         
	         $shipmentContents[] = $item;
	         $skuStr .= $val['sku'].'*'.$val['quantity'].' ';
	         if($val['hasBattery'] == 1){
	             $hasBattery = true;
	         }
	    }
	    
	    //是否带电:04-带电，00-不带电	    
	    $shipmentItems[0]['contentIndicator'] = $hasBattery ? '04' : '00';
	    
	    $shipmentItems[0]['shipmentContents'] = $shipmentContents;
	    $packageDesc = mb_substr($packageDesc, 0,50);
	    $platform=isset($this->post_data['account']['application'])?$this->post_data['account']['application']:'DHL';
	    /**
	     * 7.订单其他信息
	     */
	    $shipmentID = $this->post_data['order']['shipmentId'] ? $this->post_data['order']['shipmentId'] :$platform.$this->post_data['order']['orderNo'];
	    $shipmentItems[0]['shipmentID'] = $shipmentID;                                                            //装运订单ID，必需包含客户前缀
	    $shipmentItems[0]['packageDesc'] = $packageDesc;                                                          //包裹描述
	    //重量单位
	    $weightUnit = $this->post_data['order']['unitOfWeight'] ? $this->post_data['order']['unitOfWeight'] : 'KG';
	    $weight = Common::getWeightForCustomUnit($weightUnit, 'KG', $this->post_data['order']['weight']);
	    $shipmentItems[0]['totalWeight'] = ceil($weight*1000);                                                    //包裹重量 
	    $shipmentItems[0]['totalWeightUOM'] = 'G';                                                                //重量单位
	    $shipmentItems[0]['productCode'] = $this->post_data['order']['serverCodeType'];                                       //服务商产品代码:PKD,PPS,PLD...
	    
	    //检查是否设置国际贸易术语
	    if(!empty($this->post_data['order']['incoterm'])){
	        $shipmentItems[0]['incoterm'] = $this->post_data['order']['incoterm'];                                            //国际贸易术语：DDP-Delivery Duties Paid,DDU-Delivery Duties Unpaid
	    }
	    $shipmentItems[0]['totalValue'] = floatval(sprintf('%.2f',$this->post_data['order']['declaredValue']));               //申报总价值
	    $shipmentItems[0]['currency'] = $this->post_data['order']['declaredCurrency'];                                         //申报币种
	    $skuStr = substr($skuStr, 0, 50);
	    $remarks = $this->post_data['order']['remark'] ? $this->post_data['order']['remark'] : $skuStr;
	    $shipmentItems[0]['remarks'] = $remarks;                                                                   //SKU数据(最多50)
	    
	    //是否WS工作模式
	    if(strtoupper($this->post_data['order']['pickUpType']) == 'WS'){
	        $shipmentItems[0]['workshareIndicator'] = 'WS';
	    }                      
	    
	    //是否购买保险(保险默认取申报金额，当申报金额大于设置的最大保险金额（SVP）取设置的保险金额)
	    $insuranceValue = '0.00';
	    if($this->post_data['order']['isInsurance'] == '1'){
	        $insuranceValue = $this->post_data['order']['insuranceValue'];
	    }
	    if($insuranceValue > 0){
	        $shipmentItems[0]['insuranceValue'] = $insuranceValue;
	    }

	    //COD
	    if($this->post_data['order']['codValue'] > 0 && !empty($this->post_data['order']['codCurrency'])){
	        $shipmentItems[0]['codValue'] = floatval($this->post_data['order']['codValue']);
	        $shipmentItems[0]['currency'] = $this->post_data['order']['codCurrency'];
	    }

	    //退件类型:
	    //01-Return to Registered Address
	    //02-Return to Pickup Address (only available with Ad-Hoc Pickup)
	    //03-Return to New Address
	    //05-Abandon
	    $shipmentItems[0]['returnMode'] = $this->post_data['order']['returnType'] ? $this->post_data['order']['returnType'] : null;
	       
	    $bd['shipmentItems'] = $shipmentItems;
	    $bd['inlineLabelReturn'] = 'Y';                        //Y-返回base64标签值，N-返回标签URL
	    
	    /**
	     * 8.标签格式
	     */
	    $labelType = $this->post_data['order']['labelType'] ? $this->post_data['order']['labelType'] : 'PNG';
	    $labelType = strtoupper($labelType);
	    $label['pageSize'] = '400x600';                                                                   //标签尺寸 
	    $label['format'] = $labelType;                                                                    //标签类型
	    $label['layout'] = '1x1';                                                                         //标签布局
	    $bd['label'] = $label; 
	    
	    $labelRequest['hdr'] = $hdr;
	    $labelRequest['bd'] = $bd;
	    $data['labelRequest'] = $labelRequest;
	    
	    return $data;
	}
	
	/**
	 * @desc 获取标签
	 * @param unknown $request
	 * @param unknown $companyCode
	 * @param unknown $orderCode
	 */
	public function getLabel()
	{

	    $obj = new ExpressWebService($this->post_data['account'],$this->_logFileName);
	    //请求数据
	    $requestData = array(
	        'serviceNumber'=>$this->post_data['order']['serviceNumber'],
	        'labelType'=>!empty($this->post_data['order']['labelType'])?$this->post_data['order']['labelType']:'',
	    );
		$orderCode=$this->post_data['order']['orderNo'];
	    return $obj->getLabel($requestData,$orderCode);
	}
	

	/**
	 * @desc 自动处理拆分订单地址信息等
	 * 1.收件人名称超过30位字符之后，收件人名程超过长度可以放一部分到收件人公司
	 * 2.在收件人地址超过50个字符之后，可以强制截断，超长的放在收件人地址2。
	 * @param unknown $consigneeAddress
	 */
	public function autoProcessAddress($consigneeAddress)
	{
	    /**
	     * 1.去掉前后空格
	     */
	    $consigneeAddress['name'] = trim($consigneeAddress['name']);
	    $consigneeAddress['companyName'] = trim($consigneeAddress['companyName']);
	    $consigneeAddress['address1'] = trim($consigneeAddress['address1']);
	    $consigneeAddress['address2'] = trim($consigneeAddress['address2']);
	     
	    /**
	     * 2.收件人名称超30截取放在公司名称内
	    */
	    if(strlen($consigneeAddress['name']) > 30){
	        if(strlen($consigneeAddress['companyName']) > 30){
	            throw new \Exception('收件人姓名和公司名称长度都超过30个字符，无法自动处理请手工编辑后重新提交。');
	        }
	        //拆分姓名
	        $nameArr = explode(' ', $consigneeAddress['name']);
	        $newName = '';
	        $newCompanyName = '';
	        $isFull = false;
	        foreach ($nameArr as $val){
	            if(strlen($newName.' '.$val) <= 30 && $isFull == false){
	                $newName .= $val.' ';
	            }else{
	                $isFull = true;
	                $newCompanyName .= $val.' ';
	            }
	        }
	        $newCompanyName .= $consigneeAddress['companyName'];
	        if(strlen($newName) <= 30 && strlen($newCompanyName) <= 30){
	            $consigneeAddress['name'] = $newName;
	            $consigneeAddress['companyName'] = $newCompanyName;
	        }else{
	            throw new \Exception('收件人姓名超过30个字符无法自动拆分，请手工编辑后重新提交。');
	        }
	    }
	     
	    /**
	     * 3.处理地址：
	     * 国际：地址1:1-50，地址2:1-50，地址3:1-30
	     * 国内：地址1:1-60，地址2:1-60，地址3:1-60
	     */	    
	    if(strlen($consigneeAddress['address1'].$consigneeAddress['address2']) > 130){
	        throw new \Exception('收件地址长度都超过130个字符，超过服务商最大限制请手工修改地址后重新提交。');
	    }
	    
	    $address1Arr = explode(' ', $consigneeAddress['address1']);
	    $address2Arr = explode(' ', $consigneeAddress['address2']);
	    $addressFullArr = array_merge($address1Arr,$address2Arr);
	    
	    //拆分地址
	    $address1 = '';
	    $address2 = '';
	    $address3 = '';
	    $isFull1 = false;
	    $isFull2 = false;
	    foreach ($addressFullArr as $v){
	        if(strlen($address1.' '.$v) <= 50 && $isFull1 == false){
	            $address1 .= $v.' ';
	        }elseif (strlen($address2.' '.$v) <= 50 && $isFull2 == false){
	            $isFull1 = true;
	            $address2 .= $v.' ';
	        }else{
	            $isFull2 = true;
	            $address3 .= $v.' ';
	        }
	    }
	    $address1 = trim($address1);
	    $address2 = trim($address2);
	    $address3 = trim($address3);
	    if(strlen($address1) <= 50 && strlen($address2) <= 50 && strlen($address3) <= 30){
	        $consigneeAddress['address1'] = $address1 ? $address1 : null;
	        $consigneeAddress['address2'] = $address2 ? $address2 : null;
	        $consigneeAddress['address3'] = $address3 ? $address3 : null;
	    }else{
	        throw new \Exception('收件人地址超长无法自动拆分，请手工编辑后重新提交。');
	    }
	     
	    return $consigneeAddress;
	}
	

}