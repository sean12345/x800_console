<?php
/**
 * ant-nest服务管理平台
 *
 *
 * @category API
 * @version v1.0
 * @license (http://www.clcw.com.cn/licenses/LICENSE-2.0)
 * @copyright (c) 2016-2026 http://www.clcw.com.cn All rights reserved.
 */
namespace Admin\Controller;

use Base\ExceptionHandler;

class AdminController extends CommonController {
    // protected $page_num = 10;

    public function index(){

// echo $_SERVER['HTTP_HOST'];
// exit;

        // echo COMMON_PATH;

        // echo C('DB_AUMS.DB_PREFIX');

        // $model = D('Common/Aums/CarOwnerCo');
        // $res = $model->scope('wait_import')->count();
        // // $res = $model->test();
        // echo $model->getLastSql();
        // dump($res);

        // $model = D('Common/TaskService',  'Logic');
        // $res = $model->getTaskList();
        // echo $res;
        // exit;

        $this->assign ( 'page', 100 ); // 赋值分页输出
        $this->display(''); // 输出模板
    }

}