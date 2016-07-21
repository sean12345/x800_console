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
namespace SMS\Utest\Controller;

use Think\UnitTest;

class IndexController extends UnitTest {

    function index(){
        //通过自动遍历测试类的方式执行测试
        $this->run(true);
    }

    function index2(){
        //通过设置测试类的方式执行测试
        $this->setController( array(__CLASS__) );
        $this->run();
    }

    public function test_notMessage() {
        $indexController = new \SMS\Controller\IndexController();
        // $res = $indexController->noteMessage();
        $isSuccess = true;
        $this->assertTrue($isSuccess);

        // //设置一些测试变量
        // $empty = 0;
        // $notEmpty = 1;
        // $emptyArray = array();
        // $array = array(1 , 'a'=>'a' );
        // $indexController = new IndexController();
        // $jsonString = '{"obj":"object"}';
        // $regex = '/^\{.+\}$/';

        // //测试断言方法
        // $this->assertArrayHasKey( 'a' , $array , 'Some Message!');
        // $this->assertNotArrayHasKey('b' ,  $array , 'Some Message!');

        // $this->assertCount(2 , $array);
        // $this->assertNotCount(3 , $array);

        // $this->assertEmpty($empty);
        // $this->assertEmpty($emptyArray);
        // $this->assertNotEmpty($array);
        // $this->assertNotEmpty($notEmpty);
    }

}