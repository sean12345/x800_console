/*数据库*/
#create database ant_nest default charset utf8 collate utf8_general_ci;

/*任务服务信息表*/
DROP TABLE IF EXISTS `ant_task_service`;
CREATE TABLE `ant_task_service` (
  `task_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(10) DEFAULT NULL COMMENT '任务分组ID',
  `pid` int(10) DEFAULT NULL COMMENT '进程号',
  `user_id` int(10) DEFAULT NULL COMMENT '创建人ID',
  `title` varchar(200) NOT NULL DEFAULT '' COMMENT '任务标题',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '验车处理结果(0:待处理, 1:处理中, 2:暂停中, 3:处理成功 4:处理失败)',
  `processed` int(10) DEFAULT NULL DEFAULT 0 COMMENT '已完成任务量(%)',
  `task_url` varchar(200) NOT NULL DEFAULT '' COMMENT '任务启动地址',
  `desc` text COMMENT '任务描述',
  `remark` text COMMENT '备注',
  `starttime` datetime NOT NULL COMMENT '任务开始时间',
  `endtime` datetime NOT NULL COMMENT '任务结束时间',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  `updatetime` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`task_id`),
  UNIQUE INDEX `group_id_UNIQUE` (`group_id` ASC),
  UNIQUE INDEX `pid_UNIQUE` (`pid` ASC)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='任务服务信息表';
