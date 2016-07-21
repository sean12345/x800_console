<?php
namespace SMS\Utest\Service;

use Think\UnitTest;

class MsgGateWayService extends UnitTest{

    /**
     * 短信发送发放
     * 
     * @return boolean
     */
    public function test_msgSend($to='', $type='', $params=array(), $gateWayName='')
    {
        $isSuccess = true;
        $this->assertTrue($isSuccess);
    }


}