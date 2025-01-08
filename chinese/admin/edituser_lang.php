<?php

//////////////////////////////////////////////////////////////
//===========================================================
// edituser_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来自于成为最好的愿望
// ----------------------------------------------------------
// 开始者: Alons
// 日期: 2010年3月8日
// 时间: 23:00 小时
// 网站: https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// 请阅读使用条款：https://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('非法访问');

}

$l['slave_cant'] = '编辑用户错误';
$l['slave_cant_exp'] = '从服务器不允许编辑用户！';
$l['no_type'] = '请指定用户类型';
$l['no_email'] = '请输入有效的电子邮件地址';
$l['invalid_email'] = '您输入的电子邮件地址无效';
$l['email_exist'] = '您输入的电子邮件地址已存在';
$l['no_plan'] = '无计划';
$l['invalid_date'] = '指定的服务日期无效';

$l['<title>'] = '编辑用户';
$l['edit_user'] = '编辑用户';
$l['done'] = '用户已保存。返回 <a href="'.$globals['index'].'act=users">用户概览</a>';
$l['usertype'] = '用户类型';
$l['typeofuser'] = '用户的类型';
$l['new_email'] = '电子邮件';
$l['change_email'] = '此用户的电子邮件地址';
$l['new_pass'] = '新密码';
$l['changepass'] = '如果不想更改密码，请留空';
$l['sub_but'] = '编辑用户';
$l['user_1'] = '管理员';
$l['user_2'] = '云用户';
$l['user_0'] = '普通用户';
$l['inhouse_billing'] = '启用Virtualizor计费';
$l['inhouse_billing_exp'] = '如果启用，Virtualizor将计算资源使用情况并为虚拟机创建发票。否则，您的外部计费系统应管理计费。<br /> 更多信息请阅读 <a href="'.$globals['docs'].'Virtualizor_Billing" target="_blank">Virtualizor计费</a>';
$l['max_cost'] = '每'.VM_SHORT.'的最大成本 / 月';
$l['max_cost_exp'] = '每'.VM_SHORT.'每月的最大成本。';
$l['num_vs'] = '虚拟机数量';
$l['num_vs_exp'] = '此用户可以创建的虚拟机的最大数量。零（<b>0</b>）表示无限制。';
$l['num_users'] = '用户数量';
$l['num_users_exp'] = '此用户可以创建的子用户的最大数量。零（<b>0</b>）表示无限制。';
$l['space'] = '最大磁盘空间';
$l['space_exp'] = '';
$l['ram'] = '最大内存';
$l['ram_exp'] = '';
$l['burst'] = '最大突发 / 交换';
$l['burst_exp'] = '';
$l['bandwidth'] = '最大带宽';
$l['bandwidth_exp'] = '零（<b>0</b>）表示无限制带宽';
$l['cpu'] = '默认CPU权重';
$l['cpu_exp'] = '';
$l['cores'] = '最大核心数 / '.VM_SHORT;
$l['cores_exp'] = '用户无法创建超过此限制的'.VM_SHORT;
$l['space_per_vm'] = '最大磁盘空间 / '.VM_SHORT;
$l['space_per_vm_exp'] = '用户无法创建超过此限制的'.VM_SHORT;
$l['space_per_vm_err'] = '每'.VM_SHORT.'的磁盘空间不能大于最大空间';
$l['num_cores'] = '总核心数';
$l['num_cores_exp'] = '允许的总核心数。零（<b>0</b>）表示无限制核心数';
$l['cpu_percent'] = '默认CPU百分比 / 核心';
$l['cpu_percent_exp'] = '用户创建的所有'.VM_SHORT.'将具有此CPU百分比。这是基于每个核心的。例如，如果用户创建具有2个核心的'.VM_SHORT.'且百分比为40，则将分配总共80%。';
$l['num_ipv4'] = '最大IPv4';
$l['num_ipv4_exp'] = '';
$l['num_ip_int'] = '最大内部IP';
$l['num_ipv6_subnet'] = '最大IPv6子网';
$l['num_ipv6_subnet_exp'] = '';
$l['num_ipv6'] = '最大IPv6';
$l['num_ipv6_exp'] = '';
$l['allowed_virts'] = '允许的虚拟化';
$l['allowed_virts_exp'] = '允许此用户使用的虚拟化类型';
$l['openvz'] = 'OpenVZ';
$l['openvz_exp'] = '允许用户创建OpenVZ虚拟机';
$l['xen'] = 'Xen';
$l['xen_exp'] = '允许用户创建Xen虚拟机';
$l['xcp'] = 'XCP';
$l['xcp_exp'] = '允许用户创建XCP虚拟机';
$l['hvm'] = 'Xen HVM';
$l['hvm_exp'] = '允许用户创建Xen HVM虚拟机';
$l['xcphvm'] = 'XCP HVM';
$l['xcphvm_exp'] = '允许用户创建XCP HVM虚拟机';
$l['kvm'] = 'KVM';
$l['kvm_exp'] = '允许用户创建KVM虚拟机';
$l['vzo'] = 'Virtuozzo OpenVZ';
$l['vzo_exp'] = '允许用户创建Virtuozzo OpenVZ虚拟机';
$l['vzk'] = 'Virtuozzo KVM';
$l['vzk_exp'] = '允许用户创建Virtuozzo KVM虚拟机';
$l['sg'] = '允许的服务器组';
$l['sg_exp'] = '如果未选择任何组，则用户将无法创建任何'.VM_SHORT;
$l['mg'] = '媒体组';
$l['mg_exp'] = '如果未选择媒体组，则所有模板和ISO将对此用户可用';
$l['dns_plan'] = 'DNS计划';
$l['dnsplan_exp'] = '用户的DNS计划';
$l['acl_plan'] = '访问控制';
$l['no_acl'] = '未使用';
$l['network_speed'] = '网络速度';
$l['network_speed_exp'] = '输入0或留空表示无限制。<br />使用下拉框选择常用选项';
$l['upload_speed'] = '上传速度';
$l['upload_speed_exp'] = '输入0或留空表示无限制。<br />输入-1表示上传速度与<b>网络速度</b>相同。<br />使用下拉框选择常用选项';
$l['net_kb'] = 'KB/s';
$l['no_limit'] = '无限制';
$l['lxc'] = 'LXC';
$l['lxc_exp'] = '允许用户创建LXC虚拟机';
$l['band_suspend'] = '带宽暂停';
$l['band_suspend_exp'] = '如果选中，则当超出指定的带宽限制时，所有云用户的'.VM_SHORT.'将被暂停';
$l['service_period'] = '计费周期';
$l['service_period_exp'] = '带宽计算的计费周期开始日期';
$l['user_plans'] = '用户计划';
$l['user_plans_exp'] = '将用户分配到预定义的计划';
// 高级应用
$l['premium_apps_plan'] = '启用高级应用';
$l['premium_apps_plan_exp'] = '如果选中，则为此云用户及其子用户启用高级应用';
$l['total_iops_sec'] = '每秒总I/O';
$l['read_bytes_sec'] = '每秒读取兆字节';
$l['write_bytes_sec'] = '每秒写入兆字节';
?>