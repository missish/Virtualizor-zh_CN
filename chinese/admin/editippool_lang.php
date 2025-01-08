<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editippool_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本: 1.0
// 灵感来自成为最佳的渴望
// ----------------------------------------------------------
// 开始者: Alons
// 日期: 2010年3月8日
// 时间: 23:00
// 网站: https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// 请阅读 https://www.virtualizor.com 上的使用条款
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('黑客攻击尝试');

}

$l['slave_cant_add'] = '编辑IP池错误';
$l['slave_cant_exp'] = '从服务器不允许编辑IP池！';
$l['slave_cant_head'] = '错误';
$l['no_name'] = '未指定IP池名称';
$l['no_gateway'] = '未指定网关';
$l['no_netmask'] = '未指定子网掩码';
$l['no_ns1'] = '未指定DNS服务器1';
$l['no_ns2'] = '未指定DNS服务器2';
$l['no_servers'] = '您未选择IP池所属的服务器';
$l['invalid_server'] = '提交的服务器无效';
$l['inv_gateway'] = '网关无效';
$l['inv_netmask'] = '子网掩码无效';
$l['inv_netmask_6'] = '子网掩码无效，必须是1到127之间的整数';
$l['inv_ns1'] = 'DNS服务器1无效';
$l['inv_ns2'] = 'DNS服务器2无效';
$l['inv_startip'] = '您提交的IP范围的第一个IP无效';
$l['inv_endip'] = '您提交的IP范围的最后一个IP无效';
$l['invalid_range'] = '您提交的IP范围无效';
$l['ips_exist'] = '以下IP已经存在';
$l['err_ippool'] = '保存IP池时发生错误';
$l['err_ip'] = '保存IP时发生错误';
$l['err_slave'] = '在从服务器上保存IP池时发生错误';
$l['err_edit_nat'] = '编辑NAT网络时发生错误';
$l['nat_not_allowed'] = '启用NAT时，IP池服务器无法更改';
$l['inv_server'] = '您提交的服务器无效';
$l['inv_group'] = '您提交的组无效';
$l['vlan_tag_err'] = 'VLAN标签值必须在1到4094之间';

// 字符串
$l['<title>'] = '编辑IP池';
$l['editippool'] = '编辑IP池';
$l['ippool_name'] = '名称';
$l['nameofip'] = '此IP池的名称';
$l['gateway'] = '网关';
$l['netmask'] = '子网掩码';
$l['routing_prefix'] = '(路由前缀)';
$l['netmask_6'] = '0-128之间的整数';
$l['nameserver'] = 'DNS服务器';
$l['unsure_1'] = '如果不确定，请使用4.2.2.1';
$l['unsure_2'] = '如果不确定，请使用4.2.2.2';
$l['unsure_1_6'] = '如果不确定，请使用2001:4860:4860::8888';
$l['unsure_2_6'] = '如果不确定，请使用2001:4860:4860::8844';
$l['first_IP'] = '第一个IP';
$l['last_IP'] = '最后一个IP';
$l['pool_servers'] = '服务器';
$l['ser_id'] = 'ID';
$l['pool_servers_exp'] = '此IP池所属的服务器';
$l['sub_but'] = '编辑IP池';
$l['done'] = 'IP池已保存。返回 <a href="'.$globals['index'].'act=ippool">IP池概览</a>';
$l['add_route'] = '使用路由网络';
$l['exp_add_route'] = '如果勾选，将使用路由网络';
$l['is_internal'] = '是内部IP范围吗？';
$l['is_vlan'] = '是VLAN吗？';
$l['yes'] = '是';
$l['bridge'] = '桥接';
$l['mtu'] = 'MTU';
$l['exp_mtu'] = '指定最大传输单元（字节）。如果为空，将使用默认值。';
$l['vlan_tag'] = 'VLAN标签';
$l['vlan_tag_exp'] = '指定VLAN标签编号（0-4094）。仅适用于Proxmox。';
$l['no_int_pool'] = '内部池不能分配给用户。';
$l['select_user'] = '选择用户';
$l['select_user_exp'] = '选择您要为其分配此IP池的用户';
$l['select_pdns_server'] = '选择PDNS服务器';
$l['select_pdns_server_exp'] = '选择您要为其分配此IP池的PDNS服务器，RDNS记录将存储在选定的PDNS服务器中';
$l['invalid_pdns'] = '请选择正确的PDNS服务器';

?>
