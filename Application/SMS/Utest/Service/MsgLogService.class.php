<?php
namespace SMS\Utest\Service;

use Think\UnitTest;

class MsgLogService extends UnitTest{

    private $_data = array();

    public function test_getDetail()
    {
        $this->data = array(
            1,2,3,4,5,6,7
        );

        import("SMS.Service.MsgLogService");
        $obj = new \SMS\Service\MsgLogService();
        // $res = $indexController->noteMessage();
        foreach ($this->data as $logId) {
            $res = $obj->getDetail($logId);
            $this->assertNotEmpty($res);
            $this->assertNotNull($res['response_code'],'');
            $this->assertJson($res['msg_var'], '');
        }
    }

    public function test_getLogList()
    {
        $this->data = array(
            array('start_time' => '2016-05-01', 'end_time' => '2016-08-01', 'page_num' => 1, 'page_sep' => 10),
            array('start_time' => '2016-05-01', 'end_time' => '', 'page_num' => 1, 'page_sep' => 10),
            array('start_time' => '', 'end_time' => '2016-08-01', 'page_num' => 1, 'page_sep' => 10)
        );

        import("SMS.Service.MsgLogService");
        $obj = new \SMS\Service\MsgLogService();
        // $res = $indexController->noteMessage();
        foreach ($this->data as $data) {
            $res = $obj->getLogList($data['start_time'], $data['end_time'], $data['page_num'], $data['page_sep']);
            $this->assertNotEmpty($res);
            $this->assertNotEmptyArray($res);
            $this->assertCount(intval($res['count']), $res['rows']);
        }
    }

}