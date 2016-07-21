<?php
namespace SMS\Service\MsgGateWay\Extension;

use \Common\Exception\ExceptionHandler;

interface MsgGateWayInterface {
    /**
     * 短信发送发放
     * 
     * @param  string  $to  短信接收人电话
     * @param  int  $type  短信自定义类型
     * @param  array  $params  短信模块参数
     * 
     * @return json
     */
    public function msgSend($to, $type, $params);

}