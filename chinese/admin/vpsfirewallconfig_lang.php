<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addfirewall_plan_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 2.8.1
// 灵感来源于成为最好的渴望
// ----------------------------------------------------------
// 开始者: Husain
// 日期: 2015年11月11日
// 时间: 16:20 小时
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

$l['<title>'] = VM_SHORT.' 防火墙配置';
$l['vpsfirewall_config'] = VM_LONG.' 防火墙配置';
$l['none'] = '无';
$l['apply_firewall'] = '应用防火墙到';
$l['apply_by_plan'] = '按计划应用';
$l['apply_by_users'] = '按用户应用';
$l['apply_to_vps'] = '应用到'.VM_SHORT;
$l['method_selector'] = '选择方法';
$l['choose_option'] = '选择一个选项';
$l['select_plan'] = '选择一个计划';
$l['select_user'] = '选择一个用户';
$l['invalid'] = '无效的 ';
$l['by_plan'] = '计划'; 
$l['by_user'] = '用户';
$l['invalid_response'] = '无效的响应';
$l['select_vps'] = '选择一个'.VM_SHORT;
$l['select_admin_firewall'] = '选择一个管理员防火墙计划';
$l['apply_firewall_plan'] = '应用计划';
$l['select_method'] = '请提供一个方法';
$l['choose_option'] = '请提供一个选项';
$l['select_admin_firewall'] = '请选择一个管理员防火墙计划';
$l['no_pro_servers'] = '没有带有专业许可证的服务器';
$l['not_pro_server'] = '这些服务器没有专业许可证';

$l['fwp_name'] = '输入计划名称';
$l['fwp_name_desp'] = '指定防火墙计划名称。';
$l['ip'] = 'IP';
$l['ipv4'] = 'IPv4';
$l['ipv6'] = 'IPv6';
$l['direction'] = '方向';
$l['direction_exp'] = '流量方向';
$l['iptype'] = 'IP类型';
$l['iptype_exp'] = 'IP版本';
$l['decision'] = '决策';
$l['decision_exp'] = '对流量的操作';
$l['protocol'] = '协议';
$l['protocol_exp'] = '协议类型';
$l['sport'] = '源端口';
$l['sport_exp'] = '要应用规则的源端口';
$l['dport'] = '目标端口';
$l['dport_exp'] = '要应用规则的目标端口';
$l['port'] = '端口';
$l['source'] = '源';
$l['source_exp'] = '您可以指定单个IP（2.2.2.2）、子网或0.0.0.0/0（表示所有IP）';
$l['destination'] = '目标IP';
$l['action'] = '操作';
$l['srno'] = '#';
$l['in'] = '入';
$l['out'] = '出';
$l['accept'] = '接受';
$l['drop'] = '丢弃';
$l['custom'] = '自定义';
$l['anywhere'] = '任意';
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
$l['fwp_allow_enduser_desp'] = '最终用户可以使用此设置应用防火墙计划';
$l['no_rules'] = '计划中未添加任何规则';
$l['done'] = '防火墙计划已成功保存';
$l['note'] = '注意';
$l['direction_info'] = '数据包进出虚拟机的方向。可能的值：入/出';
$l['iptype_info'] = 'IP协议的版本。目前仅支持IPv4。';
$l['decision_info'] = '默认情况下，我们丢弃所有数据包。我们仅允许接受规则。';
$l['protocol_info'] = '支持的协议：TCP、UDP、GRE、ICMP。';
$l['sport_info'] = '对于进入虚拟机的数据包，源端口将是进入IP的端口。对于出站数据包则相反。<br>（有效条目：端口号在65535之间，或NONE表示所有端口）';
$l['dport_info'] = '对于出站数据包，虚拟机的目标端口将是目标IP的端口。对于入站数据包则相反。<br>（有效条目：端口号在65535之间，或NONE表示所有端口）';
$l['source_info'] = '要应用规则的IP或子网。<br>（有效条目：单个IP地址、子网或0.0.0.0/0表示所有IP）';
$l['admin_default'] = '将这些规则设为默认';
$l['admin_default_desc'] = '如果启用，则当未为用户分配防火墙计划时，将应用此计划下的规则';
$l['default_policy'] = '默认策略';
$l['default_policy_desc'] = '设置流量的默认策略。您可以将其设置为接受/丢弃，根据此策略，默认流量将被允许/拒绝。';
$l['port_placeholder'] = 'NONE 或 PORT';
$l['success'] = '防火墙规则更新任务已成功添加到后台';