<?php
namespace SMS\Controller;
 
use Think\Controller\RestController;
 
/**
* Restful测试控制器
*
* @author LincolnZhou
*/
class TestRestApiController extends RestController {
protected $allowMethod = array('delete');
 
public function rest() {
}
 
public function get() {
var_dump($this->_method);
}
 
public function test() {
echo 'test ok';
}
 
public function testput() {
var_dump(IS_PUT);
echo 'test put ok';
}
 
public function testdelete() {
var_dump(IS_DELETE);
echo 'test delete ok';
}
}
