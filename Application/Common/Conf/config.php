<?php
return array(
	//'配置项'=>'配置值'
	//模板常量
	'TMPL_PARSE_STRING'=>array('__ADMIN__'=>__ROOT__.'/Public/Admin'),
	/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址 远程地址填远程ip
    'DB_NAME'               =>  'db_oa',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sp_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数    
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    
    //显示跟踪信息
    'SHOW_PAGE_TRACE'       =>  true,     //默认为false,开启为true
    //动态加载文件
    'LOAD_EXT_FILE'         =>'info',//多个用，分开
    
    
    //RABC权限数据信息
    //角色数组
    'RABC_ROLES'  => array(
    						1  =>  '高层管理',
    						2  =>  '中层管理',
    						3  =>  '普通员工'
    					),
    //权限数组   关联角色数组
    'RABC_ROLE_AUTHS'   => array(
    						1   =>  '*/*',  //全部权限 与角色对应
    						2   =>  array('index/*','email/*','doc/*','dept/*'),
    						3   =>  array('index/*','email/*')
                       ),
    
);