<?php
/**
 * 短信验证服务
 *
 * 提供获取验证码、发送验证码、审核验证码等功能
 *
 * @category API
 * @version v1.0
 * @license (http://www.clcw.com.cn/licenses/LICENSE-2.0)
 * @copyright (c) 2016-2026 http://www.clcw.com.cn All rights reserved.
 */
namespace SMS\Controller;

class IndexController extends CommonController {

     public function noteMessage() {
        $number = I('post.number', '');
        $mobile = I('post.phone', '', 'urlencode');
        // $mobile = urlencode("$mobile");
        $params=json_decode($_POST['content_params'],true);
        $arr = json_decode($_POST, true);

        try {
            if (empty($number)) {
                \Common\Exception\ExceptionHandler::make_throw('0002');
            }
            if (empty($mobile)) {
                \Common\Exception\ExceptionHandler::make_throw('0006');
            }
            $res =  D('MsgGateWay', 'Service')->msgSend($mobile, $number, $params);
        } catch (\Exception $e) {
            $this->returnException($e);
        }
        $this->returnResponse($res);
     }

    /**
     * 短信发送日志
     */
    private function add_sms_log($data) {
        // $res = M('sms_log')->add($data);
        return $res;
    }

}
