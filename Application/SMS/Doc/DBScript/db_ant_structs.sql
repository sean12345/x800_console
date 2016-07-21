/*SMS短信发送日志信息表*/
DROP TABLE IF EXISTS `ant_msg_send_log`;
CREATE TABLE `ant_msg_send_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` char(11) NOT NULL DEFAULT '' COMMENT '电话',
  `gateway` varchar(30) NOT NULL DEFAULT '' COMMENT '短信网关名称',
  `msg_type` smallint(4) DEFAULT NULL COMMENT '短信类型编号',
  `msg_var` varchar(200) NOT NULL DEFAULT '' COMMENT '短信模板参数',
  `response_code` tinyint(1) DEFAULT NULL COMMENT '短信发送结果(0:成功, 1:失败)',
  `remark` text COMMENT '备注',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='SMS短信发送日志信息表';