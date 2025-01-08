<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ippool_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来自成为最好的愿望
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

$l['error_deleting'] = '删除 IP 池时出错';
$l['err_destroy_nat'] = '销毁 NAT 网络时出错';
$l['err_destroy_internal_network'] = '销毁内部 IP 网络时出错';

//主题语言
$l['<title>'] = 'IP 池';
$l['done'] = 'IP 池已成功删除';
$l['conf_del'] = '您确定要删除 IP 池吗？';
$l['ip_pool'] = 'IP 池';
$l['total_ip'] = '总数';
$l['free_ip'] = '空闲';
$l['unasssigned_ip'] = '未分配';
$l['subnets'] = '子网';
$l['free_subnet'] = '空闲';
$l['add_ip'] = '添加 IP';
$l['del_pool'] = '删除';
$l['no_pools'] = '没有 IP 池。<a href="'.$globals['index'].'act=addippool">立即添加 IP 池</a>';
$l['no_res'] = '未找到与您的搜索查询匹配的结果';
$l['view_ips'] = '查看 IP';
$l['view_subnets'] = '查看子网';
$l['ips_in_use'] = '此 IP 池中的 IP 地址正在使用中';
$l['type'] = '类型';
$l['pool_name'] = '名称';
$l['subnet-nat'] = 'NAT';
$l['edit_pool'] = '编辑 IP 池';
$l['delete'] = '删除';
$l['pool_id'] = 'ID';
$l['poolname'] = 'IP 池';
$l['poolgateway'] = '网关';
$l['netmask'] = '子网掩码';
$l['nameserver'] = '域名服务器';
$l['submit'] = '搜索';
$l['add_ippool'] = '创建 IP 池';
$l['ipp_server'] = '服务器';
$l['locked_head'] = '锁定';
$l['locked_title'] = '锁定的 IP';
$l['vlan'] = 'VLAN';
$l['internal'] = '内部';

?>