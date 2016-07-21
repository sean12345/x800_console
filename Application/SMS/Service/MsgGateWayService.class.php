<?php
namespace SMS\Service;

use Base\ExceptionHandler;
use Base\BaseService;
use SMS\Service\MsgGateWay\Extension\MsgFactory;

class MsgGateWayService extends BaseService{

    Protected $autoCheckFields = false;

    /**
     * 短信发送发放
     * 
     * @param  string  $to  短信接收人电话
     * @param  int  $type  短信自定义类型
     * @param  array  $params  短信模块参数
     * @param  string  $gateWayName  短信平台名称,(默认取配置项里的第一个)
     * 
     * @return json
     */
    public function msgSend($to='', $type='', $params=array(), $gateWayName='')
    {
        $res = array();
        $obj = MsgFactory::Create($gateWayName);
        $res = $obj->msgSend($to, $type, $params);
        return $res;
    }
}