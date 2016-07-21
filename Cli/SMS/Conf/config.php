<?php
return array(
	//'配置项'=>'配置值'
            // 'APP_AUTOLOAD_PATH' => 'Think.Util.,ORG.Util.,@.Workerman.', //
            // 'AUTOLOAD_NAMESPACE' => array(

            // ),
            // 'TAGLIB_PRE_LOAD'          => 'Common\TagLib\Workerman', 
            'RUNTIME_PATH'          => APP_PATH,

            'AUTOLOAD_NAMESPACE'    => array(
                    'Workerman'               => MODULE_PATH . 'Org/Workerman/',
            ),
);