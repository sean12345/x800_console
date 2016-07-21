<?php
/**
 * 空控制器
 *
 * @category API
 * @version v1.0
 * @license (http://www.clcw.com.cn/licenses/LICENSE-2.0)
 * @copyright (c) 2016-2026 http://www.clcw.com.cn All rights reserved.
 */
namespace Admin\Controller;

class EmptyController extends CommonController {
    public function index() {
        $this->display('Public/404.html');
    }

    public function _empty() {
        $this->display('Public/404');
    }
}
