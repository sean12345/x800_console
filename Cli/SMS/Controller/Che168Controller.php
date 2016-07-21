<?php 
/**
 * 抓取che168数据
 *
 * @access  public
 * @category TaskService
 * @version v1.0
 * @license (http://www.clcw.com.cn/licenses/LICENSE-2.0)
 * @copyright (c) 2016-2026 http://www.clcw.com.cn All rights reserved.
 */
namespace Home\Controller;
use Think\Controller;

use \Workerman\Worker;
use \Workerman\WebServer;
use \GatewayWorker\Gateway;
use \GatewayWorker\BusinessWorker;
use \Workerman\Autoloader;
use \Workerman\Lib\Timer;

class Che168Controller extends Controller {
    public function start(){

    }

}

// 自动加载类
require_once __DIR__ . '/../../Workerman/Autoloader.php';
Autoloader::setRootPath(__DIR__);
// 将屏幕打印输出到Worker::$stdoutFile指定的文件中
Worker::$stdoutFile = __DIR__ . '/Log/crawl_che168.log';

// 全局变量，保存当前进程的客户端连接数
$connection_count = 0;

$worker = new Worker('tcp://0.0.0.0:1236');

$worker->count = 10;

// 设置每个连接接收的数据包最大为10M
// TcpConnection::$maxPackageSize = 1024000;

$worker->name = 'main process';

// $TASKNUM = 0;

echo "main process ID: ". posix_getpid() . " \n";

$worker->onWorkerStart = function($worker)
{

    $pid = posix_getpid();
    $ppid = posix_getppid();
    echo "worker process NUM: {$worker->id} work process ID:　{$pid}  parentID: {$ppid} \n";
    // // 每两秒运行一次
    // $timer_id = Timer::add(2, function(){
    //     global $TASKNUM;
    //     $TASKNUM+= 1;
    //     echo "worker run: {$TASKNUM} \n";
    //     // echo "worker run \n";
    // });

    // // 20秒后运行一个一次性任务，删除两秒一次的定时任务
    // Timer::add(20, function($timer_id){
    //     Timer::del($timer_id);
    // }, array($timer_id), false);

};

$worker->onClose = function($connection)
{
    // 客户端关闭时，连接数-1
    global $connection_count;
    $connection_count--;
    echo "now connection_count=$connection_count\n";
};

// $worker->onError = function(){};
// $worker->onBufferFull = function(){};
// $worker->onBufferDrain = function(){};

$worker->onConnect = function($connection)
{

    // $connection->protocol = 'Workerman\\protocols\\Http'; // 设置当前连接协议

    // 有新的客户端连接时，连接数+1
    global $connection_count;
    ++$connection_count;
    echo "now connection_count=$connection_count\n";
    echo $connection->getRemoteIp().":".$connection->getRemotePort()."\n";
};


$worker->onMessage = function($connection, $data)
{
    // foreach ($connection->worker->connections as $con)
    // {
    //     $con->send($data);
    // }
};

// 服务注册地址
// $worker->registerAddress = '127.0.0.1:1238';

// 如果不是在根目录启动，则运行runAll方法
if(!defined('GLOBAL_START')) {
    Worker::runAll();
}

/**
 *shell 操作纪录
 *
 *
 * php *.php status/start/stop/kill  [-d]
 * 
 * lsof -i:1236
 * netstat -pn|grep 1236|awk '{print $8}'|awk -F"/" '{print $1}'
 * netstat -pn|grep 1236|awk '{print $8}'|awk -F"/" '{print $1}'|xargs kill -9
 * 
 */
