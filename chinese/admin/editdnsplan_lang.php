<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdnsplan_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 受“成为最好的”这一愿望启发
// ----------------------------------------------------------
// 开始人: Alons
// 日期: 2010年3月8日
// 时间: 23:00
// 网站: https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// 请阅读使用条款：https://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('非法访问');

}

$l['slave_cant'] = '编辑DNS计划错误';
$l['slave_cant_exp'] = '从服务器不允许编辑DNS计划！';
$l['no_name'] = '请输入计划名称';
$l['plannameexist'] = '计划名称已存在';
$l['no_hostmasteremail'] = '请输入Hostmaster邮箱';
$l['no_maxdomains'] = '请输入最大域名数';
$l['no_maxdomainsrec'] = '请输入每个域名的最大记录数';
$l['no_dnsserverid'] = '请输入DNS服务器';
$l['no_ttl'] = '请输入默认TTL值';

//主题设置
$l['<title>'] = '编辑DNS计划';
$l['edit_dns_plan'] = '编辑DNS计划';
$l['submit'] = '编辑DNS计划';
$l['done'] = 'DNS计划已编辑。返回到 <a href="'.$globals['index'].'act=dnsplans">计划概览</a>';
$l['planname'] = '计划名称';
$l['nameofplan'] = '此计划的名称';
$l['nameofdnsserver'] = '要使用的DNS服务器';
$l['hostmasteremail'] = 'Hostmaster邮箱';
$l['nameserver'] = '名称服务器';
$l['exp_hostmasteremail'] = '负责此区域的人员的邮箱地址';
$l['maxdomains'] = '最大域名数';
$l['maxdomainsrec'] = '每个域名的最大记录数';
$l['ttl'] = '默认TTL';

?>
