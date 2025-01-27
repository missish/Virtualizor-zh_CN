<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addsg_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来源于成为最好的愿望
// ----------------------------------------------------------
// 开始者: Alons
// 日期: 2010年3月8日
// 时间: 23:00 小时
// 网站: https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// 请阅读使用条款 https://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('非法访问');

}

$l['cant_add'] = '添加服务器错误';
$l['cant_add_exp'] = '不允许从服务器添加服务器！';
$l['cant_add_head'] = '错误';
$l['no_name'] = '未指定服务器组名称！';
$l['err_saving'] = '保存服务器组时出错';

// 主题字符串
$l['<title>'] = '添加服务器组/区域';
$l['add_sg'] = '添加服务器组/区域';
$l['added'] = '服务器组已添加。返回<a href="'.$globals['index'].'act=servergroups">服务器组概览</a>';
$l['sg_name'] = '服务器组名称';
$l['sg_name_exp'] = '服务器组的名称。\n对于高可用性，服务器组名称不应包含空格';
$l['sg_reseller_name'] = '经销商区域名称';
$l['sg_reseller_name_exp'] = '（可选）将显示给经销商的服务器组名称';
$l['sg_desc'] = '服务器组描述';
$l['sub_but'] = '添加服务器组';
$l['sg_select'] = '服务器选择';
$l['sg_select_space'] = '最多可用空间';
$l['sg_select_ram'] = '最多可用内存';
$l['sg_select_cores'] = '最多可用核心';
$l['sg_select_ips'] = '最多可用IPv4';
$l['sg_select_ipv6'] = '最多可用IPv6';
$l['sg_select_ipv6sub'] = '最多可用IPv6子网';
$l['sg_select_numvps'] = '最少'.VM_SHORT.'数量';
$l['sg_select_sys_load'] = '最低系统负载';
$l['sg_select_none'] = '无';
$l['err_sg_select'] = '服务器选择首选项的值无效';
$l['sg_ha_enable'] = '高可用性';
$l['sg_ha_enable_exp'] = '如果启用，Pacemaker集群将安装在此服务器组中的所有服务器上';
$l['err_sg_name'] = '对于高可用性，服务器组名称不应包含空格';
?>