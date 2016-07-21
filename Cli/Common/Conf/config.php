<?php
return array(
            // // 'APP_GROUP_LIST'     => 'SMS,Test,Admin', 
            // // 'DEFAULT_GROUP'      =>'SMS', 
            define('APP_DEBUG',false),     // 关闭调试模式就不会记录日志

            'DEFAULT_MODULE'           => 'SMS',
            'DEFAULT_CONTROLLER'           => 'Index',

            'LOG_RECORD'                   => false,  // 进行日志记录
            'LOG_EXCEPTION_RECORD'  =>  true,    // 是否记录异常信息日志
            'DB_SQL_LOG' => false, // SQL执行日志记录
            'LOG_RECORD_LEVEL'        => array('EMERG','ALERT','CRIT','ERR','WARN','NOTIC'),  // 允许记录的日志级别 'EMERG','ALERT','CRIT','ERR','WARN','NOTIC','INFO','DEBUG','SQL'
            'LOG_TYPE'                         => 'File', // 日志记录类型 默认为文件方式
            'LOG_FILE_SIZE' => 2097152, // 日志文件大小限

            // 'MODULE_ALLOW_LIST'     => array('SMS'), // 设置允许访问的模块列表

            // 'DB_TYPE'               =>  'PDO',     // 数据库类型
            // 'DB_DSN'               =>  'mysql://root:111111@192.168.3.71:3306/ant_nest#utf8',
            // 'DB_HOST'              =>  '192.168.3.71', // 服务器地址
            // 'DB_NAME'             =>  'ant_nest',          // 数据库名
            // 'DB_USER'               =>  'root',      // 用户名
            // 'DB_PWD'                =>  '111111',          // 密码
            // 'DB_PORT'               =>  '3306',        // 端口
            // 'DB_PREFIX'             =>  'tb_',    // 数据库表前缀
            // 'DB_FIELDTYPE_CHECK'     =>  false,       // 是否进行字段类型检查
            // 'DB_FIELDS_CACHE'          =>  true,        // 启用字段缓存
            // 'DB_CHARSET'                   =>  'utf8',      // 数据库编码默认采用utf8
            // 'DB_DEPLOY_TYPE'            =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器) 写操作必须用模型的execute方法，读操作必须用模型的query方法
            // 'DB_RW_SEPARATE'           =>  false,       // 数据库读写是否分离 主从式有效
            // 'DB_MASTER_NUM'           =>  1, // 读写分离后 主服务器数量
            // 'DB_SLAVE_NO'                 =>  '', // 指定从服务器序号
            // 'DB_SQL_BUILD_CACHE'    =>  false, // 数据库查询的SQL创建缓存
            // 'DB_SQL_BUILD_QUEUE'    =>  'file',   // SQL缓存队列的缓存方式 支持 file xcache和apc
            // 'DB_SQL_BUILD_LENGTH'  =>  20, // SQL缓存的队列长度
            // 'DB_SQL_LOG'                   =>  false, // SQL执行日志记录
            // 'DB_BIND_PARAM'            =>  false, // 数据库写入数据自动参数绑定


            // 'REDIS_CONF'  => array(
            //      'master' => array(
            //         array('host'=> '127.0.0.1', 'auth' => '', 'port' => 6379),
            //      ),  
            //      'slave'  => array(
            //         array('host'=> '127.0.0.1', 'auth' => '', 'port' => 6379),
            //      ),
            // ), 

            // 'DEFAULT_M_LAYER'       =>  'Logic', // 默认的模型层名称

            // 'DATA_CACHE_TIME'             =>  0,      // 数据缓存有效期 0表示永久缓存
            // 'DATA_CACHE_COMPRESS'   =>  false,   // 数据缓存是否压缩缓存
            // 'DATA_CACHE_CHECK'          =>  false,   // 数据缓存是否校验缓存
            // 'DATA_CACHE_PREFIX'          =>  '',     // 缓存前缀
            // 'DATA_CACHE_TYPE'             =>  'File',  // 数据缓存类型,支持:File|Db|Apc|Memcache|Shmop|Sqlite|Xcache|Apachenote|Eaccelerator
            // 'DATA_CACHE_PATH'            =>  TEMP_PATH,// 缓存路径设置 (仅对File方式缓存有效)
            // 'DATA_CACHE_SUBDIR'         =>  false,    // 使用子目录缓存 (自动根据缓存标识的哈希创建子目录)
            // 'DATA_PATH_LEVEL'               =>  1,        // 子目录缓存级别

            // 'LOG_RECORD'            =>  false,   // 默认不记录日志
            // 'LOG_TYPE'              =>  'File', // 日志记录类型 默认为文件方式
            // 'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR',// 允许记录的日志级别
            // 'LOG_EXCEPTION_RECORD'  =>  false,    // 是否记录异常信息日志

            // 'VAR_MODULE'            =>  'm',     // 默认模块获取变量
            // 'VAR_CONTROLLER'        =>  'c',    // 默认控制器获取变量
            // 'VAR_ACTION'            =>  'a',    // 默认操作获取变量

);