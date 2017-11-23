<?php
return array(
	//'配置项'=>'配置值'

    //页面Trace
    'SHOW_PAGE_TRACE' =>true,
    //模块部署
    'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),
    'DEFAULT_MODULE'       =>    'Home',
    //设置禁止访问模块
    'MODULE_DENY_LIST'      =>  array('Common','Runtime'),
    //输入过滤
    'VAR_FILTERS'=>'htmlspecialchars',
    'URL_PARAMS_BIND'       =>  3,




    /* 数据库设置 */
    'DB_TYPE'               =>  'mysqli',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'blog',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'bl_',    // 数据库表前缀
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8



);