<?php
/**
 * 异常处理类
 *
 * @category Exception
 * @version v1.0
 * @license (http://www.clcw.com.cn/licenses/LICENSE-2.0)
 * @copyright (c) 2016-2026 http://www.clcw.com.cn All rights reserved.
 */
namespace Base;

use Think\Exception;

class ExceptionHandler extends Exception
{
    /**
    * 抛出异常
    * @param    int $code    异常码
    * @param    string $msg  异常描述信息
    * @return   void
    */
    public static function make_throw($code, $msg='') {
        if (empty($msg)) {
            $msgList = C(MODULE_NAME . '_EXCEPTION_CODE');
            $msg = !empty($msgList[$code]) ? $msgList[$code] : '';
        }
        $codePrefixList = C('EXCEPTION_CODE_PREFIX');
        $fullCode = $codePrefixList[MODULE_NAME] . $code;
        throw new \Exception($msg, $fullCode);
    }
}