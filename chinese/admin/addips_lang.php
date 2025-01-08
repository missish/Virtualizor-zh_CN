<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addips_lang.php
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

$l['slave_cant'] = '添加IP错误';
$l['slave_cant_exp'] = '不允许从服务器添加IP！';
$l['inv_ippool'] = '提交的IP池无效';
$l['inv_server'] = '提交的服务器无效';
$l['inv_startip'] = '提交的第一个IP无效';
$l['inv_endip'] = '提交的最后一个IP无效';
$l['invalid_range'] = '提交的IP范围无效';
$l['ips_inv'] = '以下IP无效';
$l['macs_inv'] = '以下MAC无效';
$l['no_ip'] = '未指定IP';
$l['ips_exist'] = '以下IP已存在';
$l['inv_ipv6'] = '提交的用于生成IP的IPv6无效';
$l['no_ipv6_num'] = '未指定要生成的IPv6数量';
$l['ipv6_too_much'] = '要生成的IPv6数量不应超过5000';
$l['err_save_slave'] = '在从服务器上保存IP时出错';
$l['err_ip'] = '保存IP时出错';
$l['entermac_exp'] = '将MAC字段留空以自动生成MAC。';
$l['no_addips_nat'] = '无法添加更多IP，因为此池已启用NAT';
$l['no_ips'] = '未提交IP';
$l['no_ip_pool'] = '未分配IP池';
$l['ipv6_subnet_there'] = '存在与您尝试创建的范围相同的子网';
$l['error_primary_ip'] = '已作为主IP存在。请输入不同的IP。';

$l['<title>'] = '添加IP';
$l['addip'] = '添加IP';
$l['done'] = 'IP已保存。返回<a href="'.$globals['index'].'act=ippool">IP池概览</a>';
$l['iptype'] = 'IP类型';
$l['enterip'] = '输入IP';
$l['enterip_exp'] = '输入单个IP或创建IP范围';
$l['enterip_exp_6'] = '输入单个IP或生成随机IP';
$l['add_more_ips'] = '添加更多IP';
$l['ip_range'] = 'IP范围';
$l['gen_ipv6'] = '生成IP';
$l['iprange'] = '添加IP范围';
$l['first_IP'] = '第一个IP';
$l['last_IP'] = '最后一个IP';
$l['ipv6_range'] = '生成IPv6';
$l['ipv6_num'] = 'IPv6数量';
$l['ipv6_num_exp'] = '要生成的IPv6地址数量。';
$l['sel_ippool'] = '选择IP池';
$l['ipp_none'] = '无';
$l['sel_server'] = '选择服务器';
$l['submitip'] = '添加IP地址';
$l['ip'] = 'IP';
$l['mac_addr'] = 'MAC';

?>