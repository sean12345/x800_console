<?php
return array(
            //'APP_DEBUG'   =>  true,  // 调试模式开关
            'DEFAULT_AJAX_RETURN'   => 'json',

            'LOG_RECORD'                   => true,  // 进行日志记录
            'LOG_RECORD_LEVEL'        => array('EMERG','ALERT','CRIT','ERR'),  // 允许记录的日志级别 'EMERG','ALERT','CRIT','ERR','WARN','NOTIC','INFO','DEBUG','SQL'
            'LOG_TYPE'                         =>  'File', // 日志记录类型 默认为文件方式

            'DEFAULT_APP'           => '@',

            'URL_ROUTER_ON'   => true, 

            // 'APP_SUB_DOMAIN_DEPLOY'   =>    1, // 开启子域名或者IP配置
            // 'APP_SUB_DOMAIN_RULES'    =>    array(
            //      /* 域名部署配置
            //       *格式1: '子域名或泛域名或IP'=> '模块名[/控制器名]';
            //       *格式2: '子域名或泛域名或IP'=> array('模块名[/控制器名]','var1=a&var2=b&var3=*');
            //       */ 
            //      // 'local.test.antnest.clcw.com.cn' => 'Utest/Index',

            //       // 'local.test.antnest.clcw.com.cn/sms' => 'SMS/Unittest/index',

            //      // 'local.api.antnest.clcw.com.cn' => 'Admin/Admin',
            //      // 'local.api.antnest.clcw.com.cn' => 'Admin/Admin',
            //      // 'local.api.antnest.clcw.com.cn/sms/' => 'SMS/Index'
            // ),

            'LOAD_EXT_CONFIG' => array(
                  'EXCEPTION_CODE_PREFIX'                   => 'error_code_prefix',
                  'SYS_EXCEPTION_CODE'                        => 'config_error_code',
                  'URL_ROUTE_RULES'                              => 'router_dynamic',
                  'URL_MAP_RULES'                                 => 'router_static',
            ),

            // 'APP_GROUP_LIST'     => 'SMS,Test,Admin', 
            // 'DEFAULT_GROUP'      =>'SMS', 

            'DEFAULT_M_LAYER' => 'Model', // 默认的模型层名称

            'URL_CASE_INSENSITIVE'=>false,
            
            'MODULE_ALLOW_LIST'     => array('SMS', 'Admin'), // 设置允许访问的模块列表
            'DEFAULT_MODULE'           => 'Admin',
            'DEFAULT_CONTROLLER'    => 'Static',
            'DEFAULT_ACTION'    => 'doc',


            // 'COOKIE_EXPIRE'         =>  0,    // Cookie有效期
            // 'COOKIE_DOMAIN'     =>  '',      // Cookie有效域名
            // 'COOKIE_PATH'           =>  '/',     // Cookie路径
            // 'COOKIE_PREFIX'         =>  '',      // Cookie前缀 避免冲突

            /*默认数据库配置*/
            // 'DB_TYPE'               =>  'mysql',     // 数据库类型
            // 'DB_HOST'              =>  '192.168.3.71', // 服务器地址
            // // 'DB_NAME'             =>  'ant_nest',          // 数据库名
            // 'DB_NAME'             =>  'ant_nest',          // 数据库名
            // 'DB_USER'               =>  'root',      // 用户名
            // 'DB_PWD'                =>  '111111',          // 密码
            // 'DB_PORT'               =>  '3306',        // 端口
            // 'DB_PREFIX'             =>  'ant_',    // 数据库表前缀
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
            // 'DB_DSN'               =>  'mysql://root:111111@192.168.3.71:3306/ant_nest#utf8',
            'DB_FIELDS_CACHE'=> false, //数据库字段缓存
            'DB_ANT_NEST' => array(
                  'DB_TYPE'               =>  'mysql',     // 数据库类型
                  'DB_HOST'              =>  '192.168.2.115', // 服务器地址
                  'DB_NAME'             =>  'ant_nest',          // 数据库名
                  'DB_USER'               =>  'dbuser',      // 用户名
                  'DB_PWD'                =>  '123456',          // 密码
                  'DB_PORT'               =>  '3306',        // 端口
                  'DB_PREFIX'             =>  'ant_',    // 数据库表前缀
            ),

            'DB_AUMS' => array(
                  'DB_TYPE'               =>  'mysql',     // 数据库类型
                  'DB_HOST'              =>  '192.168.2.115', // 服务器地址
                  'DB_NAME'             =>  'aums',          // 数据库名
                  'DB_USER'               =>  'dbuser',      // 用户名
                  'DB_PWD'                =>  '123456',          // 密码
                  'DB_PORT'               =>  '3306',        // 端口
                  'DB_PREFIX'             =>  'au_',    // 数据库表前缀
            ),


            // 'REDIS_CONF'  => array(
            //      'master' => array(
            //         array('host'=> '127.0.0.1', 'auth' => '', 'port' => 6379),
            //      ),  
            //      'slave'  => array(
            //         array('host'=> '127.0.0.1', 'auth' => '', 'port' => 6379),
            //      ),
            // ), 

            // 'DEFAULT_M_LAYER'       =>  'Logic', // 默认的模型层名称

            // 'TOKEN_ON'      =>    true,  // 是否开启令牌验证 默认关闭
            // 'TOKEN_NAME'    =>    '__hash__',    // 令牌验证的表单隐藏字段名称，默认为__hash__
            // 'TOKEN_TYPE'    =>    'md5',  //令牌哈希验证规则 默认为MD5
            // 'TOKEN_RESET'   =>    true,  //令牌验证出错后是否重置令牌 默认为true

            // 'DATA_CACHE_TIME'             =>  0,      // 数据缓存有效期 0表示永久缓存
            // 'DATA_CACHE_COMPRESS'   =>  false,   // 数据缓存是否压缩缓存
            // 'DATA_CACHE_CHECK'          =>  false,   // 数据缓存是否校验缓存
            // 'DATA_CACHE_PREFIX'          =>  '',     // 缓存前缀
            // 'DATA_CACHE_TYPE'             =>  'File',  // 数据缓存类型,支持:File|Db|Apc|Memcache|Shmop|Sqlite|Xcache|Apachenote|Eaccelerator
            // 'DATA_CACHE_PATH'            =>  TEMP_PATH,// 缓存路径设置 (仅对File方式缓存有效)
            // 'DATA_CACHE_SUBDIR'         =>  false,    // 使用子目录缓存 (自动根据缓存标识的哈希创建子目录)
            // 'DATA_PATH_LEVEL'               =>  1,        // 子目录缓存级别

            // 'ERROR_MESSAGE'         =>  '页面错误！请稍后再试～',//错误显示信息,非调试模式有效
            // 'ERROR_PAGE'            =>  '', // 错误定向页面
            // 'SHOW_ERROR_MSG'        =>  false,    // 显示错误信息
            // 'TRACE_MAX_RECORD'      =>  100,    // 每个级别的错误信息 最大记录数

            // 'LOG_RECORD'            =>  false,   // 默认不记录日志
            // 'LOG_TYPE'              =>  'File', // 日志记录类型 默认为文件方式
            // 'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR',// 允许记录的日志级别
            // 'LOG_EXCEPTION_RECORD'  =>  false,    // 是否记录异常信息日志

            // 'SESSION_AUTO_START'    =>  true,    // 是否自动开启Session
            // 'SESSION_OPTIONS'       =>  array(), // session 配置数组 支持type name id path expire domain 等参数
            // 'SESSION_TYPE'          =>  '', // session hander类型 默认无需设置 除非扩展了session hander驱动
            // 'SESSION_PREFIX'        =>  'clcw_api_', // session 前缀

            'URL_MODEL'             =>  2,       // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
            // 'URL_CASE_INSENSITIVE'  =>  true,   // 默认false 表示URL区分大小写 true则表示不区分大小写
            // 'URL_PATHINFO_DEPR'     =>  '/',    // PATHINFO模式下，各参数之间的分割符号
            // 'URL_REQUEST_URI'       =>  'REQUEST_URI', // 获取当前页面地址的系统变量 默认为REQUEST_URI
            // 'URL_HTML_SUFFIX'       =>  'html',  // URL伪静态后缀设置
            // 'URL_DENY_SUFFIX'       =>  'ico|png|gif|jpg', // URL禁止访问的后缀设置
            // 'URL_PARAMS_BIND'       =>  true, // URL变量绑定到Action方法参数
            // 'URL_PARAMS_BIND_TYPE'  =>  0, // URL变量绑定的类型 0 按变量名绑定 1 按变量顺序绑定
            // 'URL_404_REDIRECT'      =>  '', // 404 跳转页面 部署模式有效
            // 'URL_ROUTER_ON'         =>  false,   // 是否开启URL路由

            // 'VAR_MODULE'            =>  'm',     // 默认模块获取变量
            // 'VAR_CONTROLLER'        =>  'c',    // 默认控制器获取变量
            // 'VAR_ACTION'            =>  'a',    // 默认操作获取变量
            // 'VAR_AJAX_SUBMIT'       =>  'ajax',  // 默认的AJAX提交变量
            // 'VAR_JSONP_HANDLER'     =>  'callback',
            // 'VAR_PATHINFO'          =>  's',    // 兼容模式PATHINFO获取变量例如 ?s=/module/action/id/1 后面的参数取决于URL_PATHINFO_DEPR
            // 'VAR_TEMPLATE'          =>  't',    // 默认模板切换变量

            // 'HTTP_CACHE_CONTROL'    =>  'private',  // 网页缓存控制
            // 'CHECK_APP_DIR'         =>  true,       // 是否检查应用目录是否创建
            // 'FILE_UPLOAD_TYPE'      =>  'Local',    // 文件上传方式
            // 'DATA_CRYPT_TYPE'       =>  'Think',    // 数据加密方式

);