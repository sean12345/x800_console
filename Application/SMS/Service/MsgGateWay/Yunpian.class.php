<?php
namespace SMS\Service\MsgGateWay;

use Base\ExceptionHandler;
use SMS\Service\MsgGateWay\Extension\MsgGateWayInterface;

/**
 * 发送短信平台 - 云片
 * 
 */
class Yunpian implements MsgGateWayInterface {
    /**
     * 短信发送发放
     * 
     * @param  string  $mobile  短信接收人电话
     * @param  int  $number  短信自定义类型
     * @param  array  $params  短信模块参数
     * 
     * @return array
     */
    public function msgSend($mobile='', $number='', $params=array())
    {
        $config =  C('SMS_API.YUNPIAN'); 
        $apiKEY = $config['API_KEY'];
        $apiTPL = $config['TPL'];
        $tpl_id = !empty($apiTPL[$number]['tpl_id']) ? $apiTPL[$number]['tpl_id'] : '';
        if (!$tpl_id || !is_numeric($tpl_id)) {
            ExceptionHandler::make_throw('0002');
        }
        $diff_key = array_diff_key($apiTPL[$number]['var_list'], $params);
        if (count($diff_key) > 0) {
            ExceptionHandler::make_throw('0003');
        }
        $params = array_intersect_key($params, $apiTPL[$number]['var_list']);
        $var_list_tpl = array();
        foreach ($params as $key => $value) {
            $var_list_tpl['#' . $key . '#'] = $value;
        }
        $var_list_tpl = http_build_query($var_list_tpl);
        $tpl_value = $var_list_tpl;

        $encoded_tpl_value = urlencode($tpl_value);  //tpl_value需整体转义        
        $post_string = "apikey=$apiKEY&tpl_id=$tpl_id&tpl_value=$encoded_tpl_value&mobile=$mobile";
        $resMsg = \SMS\Org\NetCom::sock_post($config['API_URL'], $post_string);
        $res = json_decode($resMsg, true);
        $paramsLog = array(
            'mobile' => $mobile,
            'gateway' => 'YUNPIAN',
            'msg_type' => $number,
            'msg_var' => json_encode($params),
        );
        $msgLog = D('MsgSendLog');
        if (isset($res['code']) && $res['code'] == 0) {
            $paramsLog['response_type'] = \SMS\Model\AntNest\MsgSendLogModel::SEND_SUCCESS;
            $res = true;
        } else {
            $paramsLog['response_type'] = \SMS\Model\AntNest\MsgSendLogModel::SEND_FAILD;
            $paramsLog['remark'] = !empty($res['msg']) ? $res['msg'] : '';
            $res = false;
        }
        $resLog = D('MsgLog', 'Service')->msgSendLog($paramsLog);        
        return $res && $resLog;
    }
}
