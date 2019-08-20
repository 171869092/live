<?php
namespace App\Service\ShunFeng;
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
		$this->_logFileName="ShunFeng";
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
				$callResult['message']='Success';
				$callResult['data']["serviceNumber"] = $result['serviceNumber'];                             //服务商单号
				$callResult['data']['trackingNumber'] = $result['trackingNumber'];                            //跟踪号
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

		//获取订单数据
		$data = $this->orderDataSet();
		$objProcess_temp = new ExpressWebService($this->post_data['account'],$this->_logFileName);
		$sysResult = $objProcess_temp->createAndPreAlertOrderService($data,$this->post_data['order']['orderNo']);
		Common::getLogger('API_LOGISTICS_Response','return：OrderNo:'.$this->post_data['order']['orderNo']."\r\n"."ApiResquest:".print_r($data,1)."\r\n"."ApiResponse:".print_r($sysResult,1),'/logs/'.$this->_logFileName.'/');

		return $sysResult;
	}
	
	/*
	 * 构造订单信息
	 */

	public function orderDataSet(){
		$xmlArray = array();
		//处理门牌号不为空的问题
		$address = trim($this->post_data['order']['consigneeAddress1']);
		if (!empty($this->post_data['order']['consigneeAddress2'])) {
			$address .= ' ' . trim($this->post_data['order']['consigneeAddress2']);
		}
		if (!empty($this->post_data['order']['consigneeHouseNo'])) {
			$address .= ' ' . $this->post_data['order']['consigneeHouseNo'];
		}
		$address = preg_replace('/\"/', '\'', $address); //双引号转单引号

		$oab_company = !empty($this->post_data['order']['consigneeCompanyName'])?$this->post_data['order']['consigneeCompanyName']:'';
		if(empty($oab_company)){
			$oab_company = $this->post_data['order']["consigneeName"];
		}

		//寄件人地址
		$j_address = $this->post_data['shipper']['shipperAddress1'] . ' ' . $this->post_data['shipper']['shipperAddress2'];	//寄件地址(英文)
		$j_address = trim($j_address);

		//物品信息
		$weight = 0;
		$hasBattery = 1; //是否带电池

		foreach ($this->post_data['orderItem'] as $oKey=>$oVal){

			if($oVal['hasBattery'] == '1'){
				$hasBattery = 0;
			}

			$weight += $oVal["weight"];
			$productArray[] = array (
				'@attributes' => array (
					'name' => $oVal["titleEn"],	         //申报必须英文
					'ename' => $oVal['titleEn'],         //商品（英文）报关品名
					'cname' => $oVal['titleCn'],         //商品（中文）报关品名
					'count' => $oVal["quantity"],	    //数量
					'unit' => 'Piece',					//货物单位
					'weight' =>	$oVal["weight"],		//单位重量
					'amount' => $oVal['value'],	        //货物单价
					'currency' => 'USD',				//单价币种（固定）
					'order_url' => !empty($oVal['productUrl']) ? $oVal['productUrl'] : '',	//电商专递货物url（express_type为29时必填）
					'hscode' => $oVal['hsCode'],
				)
			);
		}
		//包裹长宽高
		$UnitOfMeasurement = !empty($this->post_data['order']['unitOfMeasurement'])? $this->post_data['order']['unitOfMeasurement'] : 'CM';
		$length = Common::getDimensionsForCustomUnit($UnitOfMeasurement, 'CM', $this->post_data['order']['length']);
		$width = Common::getDimensionsForCustomUnit($UnitOfMeasurement, 'CM', $this->post_data['order']['width']);
		$height = Common::getDimensionsForCustomUnit($UnitOfMeasurement, 'CM', $this->post_data['order']['height']);
		$length = sprintf('%.3f',$length);
		$width = sprintf('%.3f',$width);
		$height = sprintf('%.3f',$height);

		$xmlArray = array(
			'@attributes' => array(
				'service' => 'OrderService',
				'lang' => 'zh-CN'
			),
			'Head' => "",
			'Body' => array(
				"Order" => array(
					'@attributes' => array(
						'platform_order_id' => $this->post_data['order']['referenceID'], //
						'orderid' => $this->post_data['order']['orderNo'],			//客户订单号
						'erp_code'=>'0019', //易仓
						'express_type'=>$this->post_data['order']["serverCodeType"] ,	//快件类别【配置项】取ASP_CODE
						'platform_code'=>$this->post_data['order']['platform'],         //订单销售平台
						'j_company' => $this->post_data['shipper']['shipperCompanyName'],		//寄件公司名(英文)
						'j_contact' => trim($this->post_data['shipper']['shipperName']),		//寄件联系人(英文)
						'j_tel' => $this->post_data['shipper']['shipperPhone'],				//寄件电话(英文)
						'j_mobile' => $this->post_data['shipper']['shipperCellPhone'],		//寄件手机(英文)
						'j_address' => $j_address,		//寄件地址(英文)
						'j_province' => $this->post_data['shipper']['shipperStateOrProvince'],	//寄件方省份
						'j_city' => $this->post_data['shipper']['shipperCity'],			//寄件方城市
						'j_county' => ' ',				//寄方区县
						'j_post_code' => $this->post_data['shipper']['shipperPostCode'],	//寄方邮编
						'j_country' => 'CN',			//寄方国家

						'd_company'=> $oab_company,					//到件公司，无公司名使用联系人名称
						'd_contact'=> $this->post_data['order']["consigneeName"], //到件联系人
						'd_tel'=> $this->post_data['order']["consigneePhone"], 			//到件联系电话
						'd_mobile'=> $this->post_data['order']["consigneePhone"], 		//到件手机
						'd_address'=> $address,						//到件地址
						'd_province' => $this->post_data['order']["consigneeStateOrProvince"],	//到件省份
						'd_city' => $this->post_data['order']["consigneeCity"],			//到件城市
						'd_county' => '',				//到件区县
						'd_post_code' => $this->post_data['order']["consigneePostalCode"],	//到件邮编
						'd_country'=> $this->post_data['order']["consigneeCountryCode"],			//到件国家代码
						'parcel_quantity' => '1',				//包裹数，固定1
						'pay_method' => '1',					//付款方式，固定1：寄方付
						'declared_value' => $this->post_data['order']["declaredValue"],		//订单总申报价值
						'declared_value_currency' => 'USD',		//申报币种

						'custid' => '',							//客户月结卡号，客户代码【配置项】
						'cargo_total_weight' => sprintf('%.3f',$weight),		//订单重量
						'operate_flag' => '1',                 //固定值：1（确认下单）
						'isBat' => $hasBattery,                //是否带电 0：带电 1 不带电
						'cargo_length' => $length > 0 ? $length : 1,             //货物长（不能小于0, 单位cm）
						'cargo_width' => $width > 0 ? $width : 1,               //货物宽（不能小于0, 单位cm）
						'cargo_height' => $height > 0 ? $height : 1,             //货物高（不能小于0, 单位cm）

						'remark' => '',							//备注
						'tax_number' =>$this->post_data['order']['federalTaxId'],//税号，说明：目的国为澳洲AU ，产品类型为国际小包挂号10，税号和ABN不能同时为空，填写了ABN时GSTexemptionCode不能为空，其它国家和产品类型选填。
						'abn' => '',                            //在澳洲有注册公司的企业，基于其ABN号走标准流程注册的号码11位纯数字
						'gst_exemption_code' => '',             //在澳洲有注册公司的企业, 在澳大利亚的商业编号12位纯数字
					),
					'Cargo' => $productArray,
				))
		);

		//顺丰国际电商专递渠道(29)设置Extra
		if($this->post_data['order']['serverCodeType'] == '29'){
			$Extra = array(
				'@attributes'=>array(
					'd_email' => $this->post_data['order']['consigneeEmail'], //到方邮箱
					'order_website' => '', //平台网站
				),
			);
			$xmlArray['Body']['Order']['Extra'] = $Extra;
		}


		return $xmlArray;
	}

	/**
	 * 重新获取标签
	 * @param unknown $request
	 * @param unknown $companyCode
	 * @param unknown $orderCode
	 */
	public function getLabel(){
		//订单验证
		$request['packinglist'] = $this->post_data['order']['packinglist']; //是否打印配货信息
		$request['trackingNumber']=$this->post_data['order']['trackingNumber'];
		$orderCode=$this->post_data['order']['orderNo'];
		$obj = new ExpressWebService($this->post_data['account'],$this->_logFileName);
		return $obj->getLabel($request,$orderCode);
	}
	

}