<?php
namespace App\Common;
use App\Service\ApiService;
use App\Service\orders;
use App\Service\ShipAddressBook;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/10
 * Time: 15:04
 */
class ApiBaseData{
    private $orderCode;
    private $service;
    private $orders;
    private $addressBook;
    private $orderInfo;
    private $platform;
    public function __construct($orderCode='',$platform)
    {

        $this->orderCode=$orderCode;
        $this->platform=$platform;
        $this->orders=new orders();
        $this->addressBook=new ShipAddressBook();
        $where['order_id']=$this->orderCode;
        $res=$this->orders->getOrders($where);
        $this->orderInfo=$res->toArray();
        $this->service=new ApiService();

    }

    /**
     * @desc 获取订单明细
     */
    public function getOrderItems(){
        $where['order_id']=$this->orderCode;
        $res=$this->orders->getProduct($where);
        $items=$res->toArray();
        $arr=array();



        foreach($items as $key=>$val){

            $arr[]= array(
                    "product_id" => $val["product_id"], //ID
                    "description" => $this->orderInfo[0]["parcel_contents"], //描述
                    "quantity" => $val["product_quantity"], //数量
                    "weight" => $val["product_weight"], //单重
                    "netWeight" => $val["product_net_weight"],//净重
                    "length" => $val["product_length"], //长
                    "width" => $val["product_width"],   //宽
                    "height" => $val["product_height"], //高
                    "value" => $val['product_declared_value'], //申报价值
                    "currency" => strtoupper($val['currency_code']), //申报币种
                    "sku" => $val["product_sku"], //SKU
                    "skuOrgValue"=>$val["product_declared_value"], //sku原始申报金额
                    "warehouseSku" =>$val["product_sku"], //SKU
                    "titleCn" => $val["product_title"], //中文申报品名
                    "titleEn" => $val["product_title_en"], //英文申报品名
                    "refTnx" =>'', //Ref Transaction ID
                    "refItemId" => '', //Ref Item id
                    "refBuyerId" => '', //买家ID
                    "hsCode"=>$val['hs_code'],//商品海关编码
                    "productLocation"=>'',//库位
                    "hasBattery"=>$val['contain_battery'],//是否带电池：0-否，1-是
                    "productUrl"=>'', //产品链接
                );



        }

        return $arr;
    }

    /**
     * @desc 获取发货人地址
     */
    public function getShipAddress(){

        $where['sab_id']=$this->orderInfo[0]['ship_address_id'];
        $conginee=$this->addressBook->getAddress($where);
        $conginee=$conginee->toArray();

        if(!empty($conginee)){
            $arr=array(
                'shipperName'=>$conginee[0]['sab_firstname']." ".$conginee[0]['sab_lastname'],
                'shipperCompanyName'=>$conginee[0]['sab_campany_name'],
                'shipperStateOrProvince'=>$conginee[0]['sab_state'],
                'shipperCity'=>$conginee[0]['sab_city'],
                'shipperPostCode'=>$conginee[0]['sab_postcode'],
                'shipperStreet'=>$conginee[0]['sab_street'],
                'shipperPhone'=>$conginee[0]['sab_phone'],
                'shipperMobilePhone'=>$conginee[0]['sab_cell_phone'],
                'shipperCellPhone'=>$conginee[0]['sab_cell_phone'],
                'shipperEmail'=>$conginee[0]['sab_email'],
                'shipperCountryCode'=>$conginee[0]['sab_country_code'],
                'shipperCountryCodeIso'=>$conginee[0]['sab_country_codeios'],
                'shipperCountryName'=>$conginee[0]['sab_country_name'],
                'shipperAddress1'=>$conginee[0]['sab_street_address1'],
                'shipperAddress2'=>$conginee[0]['sab_street_address2'],
                'shipperHouseNo'=>$conginee[0]['sab_house_number'],
                'shipperAddress'=>$conginee[0]['sab_street_address1']." ".$conginee[0]['sab_street_address2'],
                'shipperDistrict'=> $conginee[0]['sab_area'] ? $conginee[0]['sab_area'] : '',//区/县*/
            );

        }else{
            $arr=array(
                'shipperName'=>'',
                'shipperCompanyName'=>'',
                'shipperStateOrProvince'=>'',
                'shipperCity'=>'',
                'shipperPostCode'=>'',
                'shipperStreet'=>'',
                'shipperPhone'=>'',
                'shipperMobilePhone'=>'',
                'shipperEmail'=>'',
                'shipperCountryCode'=>'',
                'shipperCountryCodeIso'=>'',
                'shipperCountryName'=>'',
                'shipperAddress1'=>'',
                'shipperAddress2'=>'',
                'shipperHouseNo'=>'',
                'shipperAddress'=>'',
                'shipperDistrict'=>'',//区/县*/
                'shipperCellPhone'=>'',
            );
        }
        return $arr;

    }

    /**
     * @desc 获取揽收地址
     */
    public function getPickUpAddress(){


        $where['sab_id']=$this->orderInfo[0]['pickup_address_id'];
        $conginee=$this->addressBook->getAddress($where);
        $conginee=$conginee->toArray();
        if(!empty($conginee)){

            $arr=array(
                'pickUpName'=>$conginee[0]['sab_firstname']." ".$conginee[0]['sab_lastname'],
                'pickUpCompanyName'=>$conginee[0]['sab_campany_name'],
                'pickUpStateOrProvince'=>$conginee[0]['sab_state'],
                'pickUpCity'=>$conginee[0]['sab_city'],
                'pickUpPostCode'=>$conginee[0]['sab_postcode'],
                'pickUpPhone'=>$conginee[0]['sab_phone'],
                'pickUpMobilePhone'=>$conginee[0]['sab_cell_phone'],
                'pickUpEmail'=>$conginee[0]['sab_email'],
                'pickUpCountryCode'=>$conginee[0]['sab_country_code'],
                'pickUpCountryCodeIso'=>$conginee[0]['sab_country_codeios'],
                'pickUpCountryName'=>$conginee[0]['sab_country_name'],
                'pickUpAddress1'=>$conginee[0]['sab_street_address1'],
                'pickUpAddress2'=>$conginee[0]['sab_street_address2'],
                'pickUpHouseNo'=>$conginee[0]['sab_house_number'],
                'pickUpAddress'=>$conginee[0]['sab_street_address1']." ".$conginee[0]['sab_street_address2'],
                'pickUpDistrict'=> $conginee[0]['sab_area'] ? $conginee[0]['sab_area'] : '',//区/县*/
            );
        }else{

            $arr=array(
                'pickUpName'=>'',
                'pickUpCompanyName'=>'',
                'pickUpStateOrProvince'=>'',
                'pickUpCity'=>'',
                'pickUpPostCode'=>'',
                'pickUpPhone'=>'',
                'pickUpMobilePhone'=>'',
                'pickUpEmail'=>'',
                'pickUpCountryCode'=>'',
                'pickUpCountryCodeIso'=>'',
                'pickUpCountryName'=>'',
                'pickUpAddress1'=>'',
                'pickUpAddress2'=>'',
                'pickUpHouseNo'=>'',
                'pickUpAddress'=>'',
                'pickUpDistrict'=>'',//区/县*/
            );
        }

        return $arr;

    }

    /**
     *@desc 获取退货地址
     */
    public function getReturnInfoAddress(){

        $where['sab_id']=$this->orderInfo[0]['returninfo_address_id'];
        $conginee=$this->addressBook->getAddress($where);
        $conginee=$conginee->toArray();
        if(!empty($conginee)){
            $arr=array(
                'returnName'=>$conginee[0]['sab_firstname']." ".$conginee[0]['sab_lastname'],
                'returnCompanyName'=>$conginee[0]['sab_campany_name'],
                'returnStateOrProvince'=>$conginee[0]['sab_state'],
                'returnCity'=>$conginee[0]['sab_city'],
                'returnPostCode'=>$conginee[0]['sab_postcode'],
                'returnPhone'=>$conginee[0]['sab_phone'],
                'returnMobilePhone'=>$conginee[0]['sab_cell_phone'],
                'returnEmail'=>$conginee[0]['sab_email'],
                'returnCountryCode'=>$conginee[0]['sab_country_code'],
                'returnCountryCodeIso'=>$conginee[0]['sab_country_codeios'],
                'returnCountryName'=>$conginee[0]['sab_country_name'],
                'returnAddress1'=>$conginee[0]['sab_street_address1'],
                'returnAddress2'=>$conginee[0]['sab_street_address2'],
                'returnHouseNo'=>$conginee[0]['sab_house_number'],
                'returnAddress'=>$conginee[0]['sab_street_address1']." ".$conginee[0]['sab_street_address2'],
                'returnDistrict'=> $conginee[0]['sab_area'] ? $conginee[0]['sab_area'] : '',//区/县*/
            );
        }else{
            $arr=array(
                'returnName'=>'',
                'returnCompanyName'=>'',
                'returnStateOrProvince'=>'',
                'returnCity'=>'',
                'returnPostCode'=>'',
                'returnPhone'=>'',
                'returnMobilePhone'=>'',
                'returnEmail'=>'',
                'returnCountryCode'=>'',
                'returnCountryCodeIso'=>'',
                'returnCountryName'=>'',
                'returnAddress1'=>'',
                'returnAddress2'=>'',
                'returnHouseNo'=>'',
                'returnAddress'=>'',
                'returnDistrict'=> '',//区/县*/
            );
        }

        return $arr;
    }

    /**
     * @desc 获取收货人地址
     */
    public function getConsigneeAddress(){


        $where['sab_id']=$this->orderInfo[0]['consignee_address_id'];
        $conginee=$this->addressBook->getAddress($where);
        $conginee=$conginee->toArray();
        $arr=array(
            'orderNo'=>$this->orderInfo[0]['order_code'],
            'serverCodeType'=>$this->orderInfo[0]['service_code_type'],
            'consigneeName'=>$conginee[0]['sab_firstname']." ".$conginee[0]['sab_lastname'],
            'consigneeFirstName'=>$conginee[0]['sab_firstname'],
            'consigneeLastName'=>$conginee[0]['sab_lastname'],
            'consigneeCompanyName'=>$conginee[0]['sab_campany_name'],
            'consigneeStateOrProvince'=>$conginee[0]['sab_state'],
            'consigneeCity'=>$conginee[0]['sab_city'],
            'consigneePostalCode'=>$conginee[0]['sab_postcode'],
            'consigneeStreet'=>$conginee[0]['sab_street'],
            'consigneePhone'=>$conginee[0]['sab_phone'],
            'consigneeCellPhone'=>$conginee[0]['sab_cell_phone'],
            'consigneeEmail'=>$conginee[0]['sab_email'],
            'consigneeCountryCode'=>$conginee[0]['sab_country_code'],
            'consigneeCountryCodeIso'=>$conginee[0]['sab_country_codeios'],
            'consigneeCountryName'=>$conginee[0]['sab_country_name'],
            'consigneeAddress1'=>$conginee[0]['sab_street_address1'],
            'consigneeAddress2'=>$conginee[0]['sab_street_address2'],
            'consigneeHouseNo'=>$conginee[0]['sab_house_number'],
            'isAutoSplitAddress'=>0,//是否拆单
            'shipmentId'=>'',
            'unitOfWeight'=>'KG',
            'weight'=>$this->orderInfo[0]['declared_weight'],
            'declaredValue'=>$this->orderInfo[0]['parcel_declared_value'],
            'declaredCurrency'=>$this->orderInfo[0]['currency_code'],
            'remark'=>'',
            'pickUpType'=>'',
            'isInsurance'=>'',
            'codValue'=>'',
            'returnType'=>'',//退件类型
            'labelType'=>'',
            'length'=>'',
            'width'=>'',
            'height'=>'',
            'unitOfMeasurement'=>'CM',
            'referenceID'=>'',
            'platform'=>'',
            'federalTaxId'=>'',
        );
        return $arr;
    }

    /**
     * @desc 授权信息
     */
    public function getAccount(){
        $where['as_code']=strtoupper($this->platform);
        $conginee=$this->service->getService($where);
        $conginee=$conginee->toArray();
        if(!empty($conginee)){
            $arr=array(
                "accountID"=>$conginee[0]['as_account'],//客户DHL拣货账号ID
                "requesterID"=>$conginee[0]['as_partner'],//客户DHL发货人账号ID
                "url"=>$conginee[0]['as_address'],//API地址
                "labelUrl"=>$conginee[0]['as_address1'],//标签地址
                "token"=>$conginee[0]['as_token'],//token
                "application"=>$conginee[0]['as_application'],//顺丰接入码
            );
        }else{
            $arr=array(
                "accountID"=>'',//客户DHL拣货账号ID
                "requesterID"=>'',//客户DHL发货人账号ID
                "url"=>'',//API地址
                "labelUrl"=>'',//标签地址
                "token"=>'',//token
                "application"=>'',//顺丰接入码
            );
        }

        return $arr;
    }



}