<?php
return array(
	//'配置项'=>'配置值'
    
    /* 数据库设置 */
    'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => 'localhost', // 服务器地址
    'DB_NAME'               => 'dog',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => '238012',          // 密码
    'DB_PORT'               => '3306',        // 端口
    'DB_PREFIX'             => '',    // 数据库表前缀
    
    'APP_GROUP_LIST'        => 'Home,Admin', // 项目分组设定,多个组之间用逗号分隔,例如'Home,Admin'
    'DEFAULT_GROUP'         => 'Admin',  // 默认分组
    'DEFAULT_MODULE'        => 'Index', // 默认模块名称
    'DEFAULT_ACTION'        => 'index', // 默认操作名称
    
    //修改跳转样式
	'TMPL_ACTION_SUCCESS'   => 'Public/success', // 默认成功跳转对应的模板文件
	'TMPL_ACTION_ERROR'   => 'Public/error',
    
);
?>