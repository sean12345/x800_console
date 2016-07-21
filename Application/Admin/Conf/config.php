<?php
return array(
	//'配置项'=>'配置值'
            // 'APP_MODE' => '',
            // 'URL_ROUTE_RULES'       =>  array(), // 默认路由规则 针对模块
            // 'URL_MAP_RULES'         =>  array( 
            // ), // URL映射定义规则
            // // 'RUNTIME_PATH'     =>   '../Runtime/',

            'APP_AUTOLOAD_PATH' => 'Think.Util.,ORG.Util.,@.Base.',

            'TMPL_PARSE_STRING' => array (
                  // '__PUBLIC__'      => MODULE_PATH . 'Public' // 更改默认的/Public 替换规则
                  '__PUBLIC__'      => 'http://'.$_SERVER['HTTP_HOST'].'/Application/Admin/Public' // 更改默认的/Public 替换规则
            ),

            'SHOW_ERROR_MSG'        =>  true,    // 显示错误信息

            'TMPL_CONTENT_TYPE'     =>  'text/html', // 默认模板输出类型
            'TMPL_ACTION_ERROR'     =>  THINK_PATH.'Tpl/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
            'TMPL_ACTION_SUCCESS'   =>  THINK_PATH.'Tpl/dispatch_jump.tpl', // 默认成功跳转对应的模板文件
            'TMPL_EXCEPTION_FILE'   =>  THINK_PATH.'Tpl/think_exception.tpl',// 异常页面的模板文件
            'TMPL_DETECT_THEME'     =>  false,       // 自动侦测模板主题
            'TMPL_TEMPLATE_SUFFIX'  =>  '.html',     // 默认模板文件后缀
            'TMPL_FILE_DEPR'        =>  '/', //模板文件CONTROLLER_NAME与ACTION_NAME之间的分割符
            'TMPL_ENGINE_TYPE'      =>  'Think',     // 默认模板引擎 以下设置仅对使用Think模板引擎有效
            'TMPL_CACHFILE_SUFFIX'  =>  '.php',      // 默认模板缓存后缀
            'TMPL_DENY_FUNC_LIST'   =>  'echo,exit',    // 模板引擎禁用函数
            'TMPL_DENY_PHP'         =>  false, // 默认模板引擎是否禁用PHP原生代码
            'TMPL_L_DELIM'          =>  '{',            // 模板引擎普通标签开始标记
            'TMPL_R_DELIM'          =>  '}',            // 模板引擎普通标签结束标记
            'TMPL_VAR_IDENTIFY'     =>  'array',     // 模板变量识别。留空自动判断,参数为'obj'则表示对象
            'TMPL_STRIP_SPACE'      =>  true,       // 是否去除模板文件里面的html空格与换行
            'TMPL_CACHE_ON'         =>  false,        // 是否开启模板编译缓存,设为false则每次都会重新编译
            'TMPL_CACHE_PREFIX'     =>  '',         // 模板缓存前缀标识，可以动态改变
            'TMPL_CACHE_TIME'       =>  0,         // 模板缓存有效期 0 为永久，(以数字为值，单位:秒)
            'TMPL_LAYOUT_ITEM'      =>  '{__CONTENT__}', // 布局模板的内容替换标识
            'LAYOUT_ON'             =>  false, // 是否启用布局
            'LAYOUT_NAME'           =>  'layout', // 当前布局名称 默认为layout

            'HTML_CACHE_ON' => false,//禁止静态缓存 

            'LAYOUT_ON'=>true,
            'LAYOUT_NAME'=>'Layout/admin_main',

            'CONTROLLER_LEVEL'      =>  2,

            'LOAD_EXT_CONFIG' => array(
                  'AMDIN_EXCEPTION_CODE' => 'config_error_code',
            ),

            'TMPL_PARSE_STRING' => array (
                  '__PUBLIC__'      => 'http://'.$_SERVER['HTTP_HOST'].'/Application/'. MODULE_NAME .'/Public' // 更改默认的/Public 替换规则
            ),

);