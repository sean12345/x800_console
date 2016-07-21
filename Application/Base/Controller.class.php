<?php
/**
 * ant-nest基础控制器
 *
 * 提供控制层功能处理
 *
 * @category API
 * @version v1.0
 * @license (http://www.clcw.com.cn/licenses/LICENSE-2.0)
 * @copyright (c) 2016-2026 http://www.clcw.com.cn All rights reserved.
 */
namespace Base;

use Think\Controller\RestController;

class Controller extends RestController {
    public function _empty($name)
    {
        $codePrefixList = C('EXCEPTION_CODE_PREFIX');
        $code = '0001';
        $fullCode = $codePrefixList['ANTNEST'] . $code;
        $msgList = C('SYS_EXCEPTION_CODE');
        $data = array(
            'code' => $fullCode,
            'msg' => $msgList[$code],
            'data' => array(),
        );
        $this->response($data, 'json');
    }

    protected function returnResponse($data) {
            if (!empty($data) && (is_array($data) || $data === true)) {
                $this->returnSuccess($data);
            } else {
                $this->returnFaild();
            }
    }    

    protected function returnSuccess($data=array()) {
            $data = array(
                'code' => '000000',
                'msg' => '',
                'data' => (!empty($data) && is_array($data)) ? $data : array(),
            );
            $this->response($data, 'json');
    }

    protected function returnFaild() {
            $data = array(
                'code' => '-1',
                'msg' => '当前请求处理失败',
                'data' => array(),
            );
            $this->response($data, 'json');
    }

    protected function returnException($e) {
        $data = array(
            'code' => $e->getCode(),
            'msg' => $e->getMessage(),
            'data' => array(),
        );
        $this->response($data, 'json');
    }

    
}