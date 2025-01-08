<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adddnsplan_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来源于追求成为最优秀的目标
// ----------------------------------------------------------
// 开始者: Alons
// 日期:       2010年3月8日
// 时间:       23:00
// 网站:       https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// 请阅读 https://www.virtualizor.com 上的使用条款
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//=========================================================== 
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('非法入侵');

}

$l['slave_cant'] = '添加 DNS 计划错误';
$l['slave_cant_exp'] = '不允许从服务器添加 DNS 计划！';
$l['no_name'] = '请指定计划的名称';
$l['plannameexist'] = '计划名称已存在';
$l['no_hostmasteremail'] = '请指定主机管理员的电子邮件';
$l['no_maxdomains'] = '请指定最大域名数量';
$l['no_maxdomainsrec'] = '请指定每个域名的最大记录数';
$l['no_ttl'] = '请指定默认的 TTL 值';
$l['no_pdns'] = '没有 DNS 服务器。请 <a href="'.$globals['index'].'act=addpdns">添加</a> DNS 服务器';

// 主题设置
$l['<title>'] = '添加 DNS 计划';
$l['add_dns_plan'] = '添加 DNS 计划';
$l['submit'] = '添加 DNS 计划';
$l['done'] = 'DNS 计划已保存。返回到 <a href="'.$globals['index'].'act=dnsplans">计划概览</a>';
$l['planname'] = '计划名称';
$l['nameofplan'] = '此计划的名称';
$l['nameofdnsserver'] = '要使用的 DNS 服务器';
$l['hostmasteremail'] = '主机管理员电子邮件';
$l['nameserver'] = '域名服务器';
$l['exp_hostmasteremail'] = '负责此区域的人员的电子邮件地址';
$l['maxdomains'] = '最大域名数';
$l['maxdomainsrec'] = '最大域名记录数';
$l['ttl'] = '默认 TTL';

?>
