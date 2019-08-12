<?php
/**
 * 物流系统接口
 * @author along
 */
namespace App\Service;
use App\Common\Common;

class SvcClient {
    protected $_module = '';
    protected $_service = '';
    protected $_class_name = '';

    /**
     * 数据初始化验证
     * @param array $req
     * @throws Exception
     */
    private function init($req) {

        //验证module,service
        if (!isset($req['module']) || empty ($req ['module'])) {
            throw new \Exception ( 'module 不能为空',100);
        }
        $this->_module = ucfirst($req ['module']);
        if($this->_module=='LogisticsTrail'){
            $this->_class_name = 'App\Service\\'.$this->_module."\\LogisticsWebService";
        }else{
            $this->_class_name = 'App\Service\\'.$this->_module."\\CreateorderExpressWebService";
        }


        if(!class_exists($this->_class_name)){
            throw new \Exception ( '系统不支持模块:' . $req ['module'],100);
        }
        if (!isset($req['service']) || empty ( $req ['service'] )) {
            throw new \Exception ('service 不能为空',100);
        }
        $this->_service =  $req ['service'];
        if (! method_exists ($this->_class_name, $this->_service)) {
            throw new \Exception ('模块:' .$req ['module'].',不支持方法:'. $this->_service,100);
        }

    }

    /**
     * 接口入口
     *
     * @param array $req
     * @return array $return
     * @example $return = array(
     *                'code'=>'',
     *                'message'=>'',
     * 				 'service'=>'',
     * 				 'module'=>'',
     * 				'responseTime'=>'',
     *                'data'=>array(),
     * );
     */
    public function callService($req) {
        try {
            // 1、数据校验
            $this->init ( $req );

            // 2、分发模块
            $class_name = $this->_class_name;
            $service = $this->_service;


            // 3、调用模块中的方法
            $params = $req['data'];
            $class = new $class_name($params);
            $return = $class->$service();


        } catch ( \Exception $e ) {
            $return = array (
                'code' => $e->getCode (),
                'message' => $e->getMessage (),
                'data' => [],
            );
        }

        $return['service']=$this->_service;
        $return['module']=$this->_module;
        $return['responseTime']=date('Y-m-d H:i:s');
        Common::getLogger('API_LOGISTICS_'.__FUNCTION__,'return：'.print_r($return,1),'/logs/Logistics/');
        return $return;
    }

}