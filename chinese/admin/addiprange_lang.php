<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addiprange_lang.php
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

$l['slave_cant'] = '添加IP错误';
$l['slave_cant_exp'] = '从服务器不允许添加IP！';
$l['inv_ippool'] = '您提交的IP池无效';
$l['inv_server'] = '您提交的服务器无效';
$l['inv_netmask'] = '子网掩码无效';
$l['ip_gen_inv'] = '请输入有效的IPv6 /{{from}} 子网以生成 /{{to}} 子网';
$l['invalid_range'] = '您提交的IP范围无效';
$l['ips_inv'] = '以下IP无效';
$l['ips_exist'] = '以下IP子网已存在';
$l['ips_exist_in_ip'] = '以下IP或子网已存在';
$l['inv_ipv6'] = '您提交的IPv6生成IP无效';
$l['no_ipv6_num'] = '未提供生成的IPv6数量';
$l['ipv6_too_much'] = '生成的IPv6数量不能超过5000';
$l['err_ip'] = '保存IP时发生错误';
$l['no_ips'] = '未提交任何IP';
$l['no_ip_pool'] = '未分配IP池';
$l['input_mask_bigger'] = '输入的子网掩码不能大于或等于输出子网掩码';
$l['err_max_ipv6'] = '要生成的IPv6数量超过了该范围内可能的子网数。最大子网数量为：';

$l['<title>'] = '添加IPv6子网';
$l['addip'] = '添加IPv6子网';
$l['done'] = 'IP已保存。返回 <a href="'.$globals['index'].'act=ippool">IP池概览</a>';
$l['netmask'] = '子网掩码（路由前缀）';
$l['enterip'] = '输入IP';
$l['enterip_exp_6'] = '输入单个IP或生成随机IP';
$l['add_more_ips'] = '添加更多子网';
$l['gen_ipv6'] = '生成子网';
$l['subnet'] = '子网';
$l['ipv6_num'] = 'IPv6子网数量';
$l['ipv6_num_exp'] = '要生成的IPv6子网数量';
$l['sel_ippool'] = '选择IP池';
$l['ipp_none'] = '无';
$l['sel_server'] = '选择服务器';
$l['submitip'] = '添加子网';
$l['ip'] = 'IP';
$l['mac_addr'] = 'MAC地址';
$l['input_netmask'] = '输入子网掩码（从）';
$l['output_netmask'] = '期望的子网掩码（到）';
$l['gen_ipv6_ip'] = '生成单个IP';

?>
