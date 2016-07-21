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
namespace Admin\Controller;

use Base\ExceptionHandler;

class StaticController extends CommonController {

    protected $allowMethod = array('get');

    protected $allowType = array('html');

    public function pub(){
        echo "静态资源";
     }

    public function doc(){

        // try {
        //     // $res =  D('MsgGateWay', 'Service')->msgSend(15029911786, 20, array('order_number'=>'10001', 'check_limit_time'=>'2016-10-15', 'check_addr'=>'西安'));
        //     $res =  D('MsgGateWay', 'Service')->msgSend(15029911786, 20, array('order_number'=>'10001', 'check_limit_time'=>'2016-10-15', 'check_addr'=>'西安'), 'CHINAMSG');
        //     // $res =  D('MsgGateWay', 'Service')->msgSend(15029911786, 20, array('order_number'=>'10001'), 'CHINAMSG');
        // } catch (\Exception $e) {
        //     $data = array(
        //         'code' => $e->getCode(),
        //         'msg' => $e->getMessage(),
        //         'data' => array(),
        //     );
        //     $this->returnException($e);
        // }
        // $this->returnResponse($res);
// var_dump($_GET);exit;
        $fileName = I('get.doc_name', 'readme') . '.md';
        $moduleName = I('get.from', MODULE_NAME);
        import("Common.Org.Parsedown");
        $Parsedown = new \Common\ORG\Parsedown();
        $fileAddr = APP_PATH . DIRECTORY_SEPARATOR . strtoupper($moduleName) . DIRECTORY_SEPARATOR . 'Doc' . DIRECTORY_SEPARATOR . $fileName;
        $content = file_get_contents($fileAddr);
        $content =  $Parsedown->text($content);
        if (empty($content)) {
            $this->_empty();
        }
        $this->assign('content', $content);
        $this->assign('addr', 'http://192.168.3.71/ant_nest/Application/Common/Lib/Wiki/doku.php?id=ant_nest:msg_verification.md');
        layout(false);
        $this->display('Doc/show_nolayout');
     }

}