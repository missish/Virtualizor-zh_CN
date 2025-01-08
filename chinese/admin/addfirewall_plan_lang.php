<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addfirewall_plan_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 2.8.1
// 灵感来源于追求成为最优秀的目标
// ----------------------------------------------------------
// 开始者: Husain
// 日期:       2015年11月11日
// 时间:       16:20
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

$l['<title>'] = '添加防火墙计划';
$l['addfirewall_plan'] = '添加防火墙计划';
$l['fwp_name'] = '请输入计划名称';
$l['fwp_name_desp'] = '指定防火墙计划的名称。';
$l['ip'] = 'IP';
$l['ipv4'] = 'IPv4';
$l['ipv6'] = 'IPv6';
$l['direction'] = '方向';
$l['direction_exp'] = '流量的方向';
$l['iptype'] = 'IP 类型';
$l['iptype_exp'] = 'IP 版本';
$l['decision'] = '决策';
$l['decision_exp'] = '对流量执行的操作';
$l['protocol'] = '协议';
$l['protocol_exp'] = '协议类型';
$l['sport'] = '源端口';
$l['sport_exp'] = '要应用规则的源端口';
$l['dport'] = '目标端口';
$l['dport_exp'] = '要应用规则的目标端口';
$l['port'] = '端口';
$l['source'] = '源';
$l['source_exp'] = '您可以指定单个 IP（例如：2.2.2.2），子网，或 0.0.0.0/0（适用于所有 IP）';
$l['destination'] = '目标 IP';
$l['action'] = '操作';
$l['srno'] = '#';
$l['in'] = 'IN';
$l['out'] = 'OUT';
$l['accept'] = '允许';
$l['drop'] = '丢弃';
$l['custom'] = '自定义';
$l['anywhere'] = '任何地方';
$l['save'] = '添加计划';
$l['reset'] = '重置规则';
$l['no_protocol'] = '未提供协议';
$l['need_direction'] = '请指定防火墙规则的方向';
$l['empty_port'] = '未指定端口';
$l['empty_source_addr'] = '源地址为空';
$l['fwp_exists'] = '防火墙计划已存在';
$l['fwp_added'] = '防火墙计划已成功添加';
$l['no_plan_name'] = '未指定计划名称';
$l['slave_cant'] = '添加防火墙计划错误';
$l['slave_cant_exp'] = '从服务器不允许添加防火墙计划！';
$l['planname'] = '计划名称';
$l['fwp_allow_enduser'] = '允许最终用户应用防火墙计划';
$l['fwp_allow_enduser_desp'] = '通过此设置，最终用户可以应用防火墙计划';
$l['no_rules'] = '计划中没有添加规则';
$l['done'] = '防火墙计划已成功保存';
$l['note'] = '注意';
$l['direction_info'] = '数据包进出虚拟机的方向。可能的值为 IN/OUT';
$l['iptype_info'] = 'IP 协议的版本。目前仅支持 IPv4。';
$l['decision_info'] = '默认情况下，我们丢弃所有数据包。仅允许 ACCEPT 规则。';
$l['protocol_info'] = '支持的协议有 TCP、UDP、GRE 和 ICMP。';
$l['sport_info'] = '对于虚拟机内的入站数据包，源端口将是传入 IP 的端口。反之，对于出站数据包，源端口是目标 IP 的端口。<br>(有效输入：端口号范围 1-65535 或 NONE 表示所有端口)';
$l['dport_info'] = '对于出站数据包，虚拟机的目标端口将是目标 IP 的端口。反之，对于入站数据包，目标端口是源 IP 的端口。<br>(有效输入：端口号范围 1-65535 或 NONE 表示所有端口)';
$l['source_info'] = '适用规则的 IP 或子网。<br>(有效输入：单个 IP 地址、子网，或 0.0.0.0/0 表示所有 IP)';
$l['admin_default'] = '将这些规则设为默认';
$l['admin_default_desc'] = '如果启用，则当未为用户分配防火墙计划时，将应用此计划中的规则';
$l['default_policy'] = '默认策略';
$l['default_policy_desc'] = '设置流量的默认策略。可以将默认设置为 ACCEPT / DROP，根据该策略，默认流量将分别被允许或拒绝。';
$l['port_placeholder'] = 'NONE 或 PORT';

?>
