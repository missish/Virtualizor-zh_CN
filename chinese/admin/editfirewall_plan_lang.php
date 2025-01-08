<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editfirewall_plan_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本: 2.8.1
// 灵感来自成为最佳的渴望
// ----------------------------------------------------------
// 开始者: Husain
// 日期: 2015年11月11日
// 时间: 16:20
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

$l['<title>'] = '编辑防火墙计划';
$l['editfirewall_plan'] = '编辑防火墙计划';
$l['fwp_name'] = '防火墙计划名称';
$l['fwp_name_desp'] = '指定防火墙计划名称。';
$l['fwp_exists'] = '防火墙计划已存在';
$l['ip'] = 'IP';
$l['ipv4'] = 'IPv4';
$l['ipv6'] = 'IPv6';
$l['direction'] = '方向';
$l['iptype'] = 'IP类型';
$l['decision'] = '决策';
$l['protocol'] = '协议';
$l['sport'] = '源端口';
$l['dport'] = '目标端口';
$l['srno'] = '序号';
$l['source'] = '源';
$l['action'] = '动作';
$l['in'] = '进入';
$l['out'] = '离开';
$l['accept'] = '接受';
$l['drop'] = '丢弃';
$l['custom'] = '自定义';
$l['anywhere'] = '任何地方';
$l['edit'] = '编辑计划';
$l['reset'] = '重置规则';
$l['no_protocol'] = '未提供协议';
$l['need_direction'] = '请为防火墙规则指定方向';
$l['empty_port'] = '未指定端口';
$l['invalid_ports'] = '无效的端口';
$l['empty_source_addr'] = '源地址为空';
$l['fwp_exists'] = '防火墙计划已存在';
$l['fwp_added'] = '防火墙计划已成功更新';
$l['no_plan_name'] = '未指定计划名称';
$l['add_rule_error'] = '请先添加规则然后保存';
$l['add_backupserver'] = '添加备份服务器';
$l['slave_cant'] = '添加备份计划错误';
$l['slave_cant_exp'] = '不允许在从服务器上添加备份计划！';
$l['plan_server'] = '服务器';
$l['exp_plan_server'] = '选择您要在其上添加备份计划的服务器';
$l['planname'] = '计划名称';
$l['nameofplan'] = '该计划的名称';
$l['fwp_allow_enduser'] = '允许最终用户应用防火墙计划';
$l['fwp_allow_enduser_desp'] = '通过此设置，最终用户可以应用防火墙计划';
$l['fwp_update_start'] = '开始更新防火墙计划';
$l['fwp_updated'] = '防火墙计划已成功更新';
$l['no_rules'] = '计划中未添加规则';
$l['direction_info'] = '数据包进出虚拟机的方向。可能的值为：IN/OUT';
$l['iptype_info'] = 'IP协议的版本。目前仅支持IPv4。';
$l['decision_info'] = '默认情况下，我们丢弃所有数据包。我们只允许接受（ACCEPT）规则。';
$l['protocol_info'] = '支持的协议：TCP、UDP、GRE、ICMP。';
$l['sport_info'] = '对于进入虚拟机的数据包，源端口将是传入IP的端口。对于外出的数据包则相反。<br>（有效输入：端口号（65535以内）或NONE表示所有端口）';
$l['dport_info'] = '对于外出数据包，虚拟机的目标端口将是目标IP的端口。对于传入数据包则相反。<br>（有效输入：端口号（65535以内）或NONE表示所有端口）';
$l['source_info'] = '应用规则的IP或子网。<br>（有效输入：单个IP地址，子网，或0.0.0.0/0表示所有IP）';
$l['admin_default'] = '将这些规则设置为默认';
$l['admin_default_desc'] = '如果启用，则在未为用户分配防火墙计划时，系统将应用此计划下的规则';
$l['default_policy'] = '默认策略';
$l['default_policy_desc'] = '设置默认的流量策略。您可以将默认设置为接受（ACCEPT）/丢弃（DROP），并根据此策略允许或拒绝默认流量。';
$l['port_placeholder'] = 'NONE 或 端口';
