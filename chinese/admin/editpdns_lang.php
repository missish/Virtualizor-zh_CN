<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editpdns_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来自于成为最好的愿望
// ----------------------------------------------------------
// 开始者: Alons
// 日期: 2010年3月8日
// 时间: 23:00 小时
// 网站: https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// 请阅读使用条款：https://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){
	
	die('非法访问');
	
}

$l['<title>'] = '编辑PDNS服务器';
$l['page_head'] = 'Power DNS';
$l['edit_pdns'] = '编辑PDNS服务器';

$l['id'] = 'ID';
$l['name'] = '名称';
$l['exp_name'] = 'PDNS服务器的名称';
$l['descr'] = '描述';
$l['exp_descr'] = '关于PDNS服务器的简要描述';
$l['ipaddress'] = 'IP地址';
$l['exp_ipaddress'] = 'PDNS服务器的IP地址';
$l['sql_port'] = 'SQL端口';
$l['exp_sql_port'] = 'SQL端口（默认是3306）';
$l['sql_username'] = 'SQL用户名';
$l['exp_sql_username'] = '用于连接的SQL用户名';
$l['sql_password'] = 'SQL密码';
$l['sql_db'] = 'SQL数据库';
$l['exp_sql_db'] = '用于PDNS的SQL数据库';

$l['sub_but'] = '提交';
$l['done'] = 'PDNS服务器已成功编辑';

$l['pdns_name'] = '服务器名称';
$l['pdns_ipaddress'] = 'IP地址';
$l['submit'] = '搜索';

$l['no_name'] = '未指定名称';
$l['no_descr'] = '未指定描述';
$l['no_ipaddress'] = '未指定IP地址';
$l['no_sqlport'] = '未指定端口';
$l['no_sqlusername'] = '未指定用户名';
$l['no_sqlpassword'] = '未指定密码';
$l['no_sqldb'] = '未指定数据库';
$l['inv_ipaddress'] = '指定的IP地址无效';
$l['err_editpdns'] = '编辑DNS服务器时出错';
$l['inv_port'] = '指定的端口无效';
$l['use_ssl'] = '使用SSL';
$l['exp_use_ssl'] = '如果勾选，将使用SSL连接到PDNS服务器';
$l['encrypt_sql_pass'] = '加密SQL密码';
$l['exp_encrypt_sql_pass'] = '如果勾选，SQL密码将以加密格式存储';
$l['slave_cant'] = '编辑PDNS服务器错误';
$l['slave_cant_exp'] = '从服务器不允许编辑PDNS服务器！';

?>