<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ram_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来源：成为最好的
// ----------------------------------------------------------
// 开发者: Alons
// 日期: 2010年3月8日
// 时间: 23:00
// 网站: https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// 请阅读 https://www.virtualizor.com 的使用条款
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('非法访问');

}

$l['<title>'] = '管理员访问控制列表';
$l['header'] = '管理员 ACL';
$l['admin_acl_tit'] = '管理员访问控制列表';

$l['err_del_acl'] = '删除 ACL 时发生错误';
$l['err_no_aclid'] = '无法删除不存在的 ACL';
$l['err_acl_in_use'] = '该 ACL 无法删除，因为它已分配给一个用户';
$l['no_name_specified'] = '未指定 ACL 的名称';
$l['no_acls'] = '未定义任何 ACL';
$l['nameexist'] = '未指定唯一的 ACL 名称';

$l['done'] = 'ACL 已成功删除';
$l['name'] = '名称';
$l['edit'] = '编辑';
$l['delete'] = '删除';
$l['add_admin_acl'] = '添加 ACL';
$l['go'] = '前往';
$l['id'] = 'ID';

?>