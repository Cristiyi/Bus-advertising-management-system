<?php
return array(
	//'配置项'=>'配置值'

    //公共

    //前台
    'SHOW_PAGE_TRACE' => false,



	//后台
	// 'BACK_CSS_URL' => '/Back/Public/css',
	// 'BACK_JS_URL' => '/Back/Public/js',
	// 'BACK_IMG_URL' => '/Back/Public/img',
    'UPLOAD_PATH' => ' http://localhost/zjkgj/gongjiao/',

	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'gongjiao',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
);
