<?php
/**
 * 短信服务任务模块
 *
 *
 * @category API
 * @version v1.0
 * @license (http://www.clcw.com.cn/licenses/LICENSE-2.0)
 * @copyright (c) 2016-2026 http://www.clcw.com.cn All rights reserved.
 */
namespace SMS\Controller;

use Workerman\Worker;
use GatewayWorker\Register;

class IndexController extends CommonController {
    public function index(){
        echo "------短信任务服务-------\n";
    }

    /**
     * 验车通知短信定时发送
     *
     * @return mix
     */
    public function carCheckNote() {
        require_once APP_PATH.'Org'.DIRECTORY_SEPARATOR.'Workerman'.DIRECTORY_SEPARATOR.'Autoloader.php';

        // 每个进程最多执行1000个请求
        define('MAX_REQUEST', 1000);

        // Worker::$daemonize = true;//以守护进程运行

        Worker::$stdoutFile = APP_PATH . 'Data/Log/crawl_che168.log';

        Worker::$pidFile = APP_PATH. 'Data/wwwlogs/CMSWorker/workerman.pid';//方便监控WorkerMan进程状态

        Worker::$stdoutFile = APP_PATH. 'Data/wwwlogs/CMSWorker/stdout.log';//输出日志, 如echo，var_dump等

        Worker::$logFile = APP_PATH. 'Data/wwwlogs/CMSWorker/workerman.log';//workerman自身相关的日志，包括启动、停止等,不包含任何业务日志

        $worker = new Worker('text://127.0.0.1:10024');

        $worker->name = 'CMSWorker';

        $worker->count = 2;

        //$worker->transport = 'udp';// 使用udp协议，默认TCP

        $worker->onWorkerStart = function($worker){
            echo "Worker starting...\n";
        };

        $worker->onWorkerStart = function($worker){
            echo "Worker starting...\n";
        };

        $worker->onMessage = function($connection, $data){
            static $request_count = 0;// 已经处理请求数
            var_dump($data);
            $connection->send("hello");

            /*
            * 退出当前进程，主进程会立刻重新启动一个全新进程补充上来，从而完成进程重启
            */
            if(++$request_count >= MAX_REQUEST){// 如果请求数达到1000
                Worker::stopAll();
            }
        };

        $worker->onBufferFull = function($connection){
        echo "bufferFull and do not send again\n";
        };
        $worker->onBufferDrain = function($connection){
        echo "buffer drain and continue send\n";
        };

        $worker->onWorkerStop = function($worker){
        echo "Worker stopping...\n";
        };

        $worker->onError = function($connection, $code, $msg){
        echo "error $code $msg\n";
        };

        // 运行worker
        Worker::runAll();
    }

    /**
     * 618促销活动短信推送
     * 
     */
    public function action618() {
        \Think\Log::record('测试日志信息，这是警告级别','WARN');
        
    }



}