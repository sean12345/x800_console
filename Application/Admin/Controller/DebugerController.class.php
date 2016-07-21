<?php
/**
 * 接口调试工具
 *
 *
 * @category API
 * @version v1.0
 * @license (http://www.clcw.com.cn/licenses/LICENSE-2.0)
 * @copyright (c) 2016-2026 http://www.clcw.com.cn All rights reserved.
 */
namespace Admin\Controller;

use Base\ExceptionHandler;

class DebugerController extends CommonController {

    protected $allowMethod = array('get', 'post');

    protected $allowType = array('html');

    /**
     * 调试工具界面
     * 
     * @return mix
     */
    public function show(){
        $this->display('show');
     }

}