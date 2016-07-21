<?php
return array(
            'TMPL_PARSE_STRING' => array (
                  '__PUBLIC__'      => 'http://'.$_SERVER['HTTP_HOST'].'/Application/SMS/Public' // 更改默认的/Public 替换规则
            ),

            'LOAD_EXT_CONFIG' => array(
                  'SMS_API' => 'config_sms_template',
                  'SMS_EXCEPTION_CODE' => 'config_error_code',
            ),

            'DB_TYPE'               =>  'mysql',     // 数据库类型
            'DB_HOST'              =>  '192.168.2.115', // 服务器地址
            'DB_NAME'             =>  'ant_nest',          // 数据库名
            'DB_USER'               =>  'dbuser',      // 用户名
            'DB_PWD'                =>  '123456',          // 密码
            'DB_PORT'               =>  '3306',        // 端口
            'DB_PREFIX'             =>  'ant_',    // 数据库表前缀

);