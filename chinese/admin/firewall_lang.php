<?php

//////////////////////////////////////////////////////////////
//===========================================================
// firewall_lang.php
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

$l['<title>'] = '防火墙服务';
$l['onfirewall'] = '启用防火墙';
$l['stopfirewall'] = '禁用防火墙';
$l['statusfirewall'] = '防火墙状态';
$l['testing_interval'] = '设置测试间隔';
$l['testing_interval_detail'] = '间隔字段设置 cron 的间隔时间（以分钟为单位）。将此值设置为“n”分钟意味着在系统时钟的 n 分钟后，所有规则将被清除，并重新应用原始规则。例如，如果您将 cron 的间隔设置为 5 分钟，防火墙将在防火墙启动后的 0-5 分钟内清除并应用默认规则。';
$l['firewall_start_success'] = '防火墙启动成功！';
$l['firewall_start_error'] = '启动防火墙时出错';
$l['firewall_stop_success'] = '防火墙停止成功！';
$l['firewall_stop_error'] = '停止防火墙时出错';
$l['firewall_restart_success'] = '防火墙重启成功！';
$l['firewall_restart_error'] = '重启防火墙时出错';

$l['action_completed'] = '操作成功完成';
$l['err_ports'] = '但是，我们无法对以下端口执行操作：<br>';
$l['err_ips'] = '但是，我们无法对以下 IP 执行操作：<br>';

$l['temp_ip_blockfirewall'] = '阻止 IP 地址和端口';
$l['temp_ip_allowfirewall'] = '允许 IP 地址和端口';
$l['firewall_warning'] = '如果您了解 iptables 的工作原理，请使用防火墙。请注意，如果您从面板启用防火墙，则默认情况下 INPUT 链策略将设置为 DROP';

$l['firewall_disabled'] = '防火墙已禁用！';
$l['invalid_min'] = '无效的间隔时间！';
$l['no_ufw'] = '未安装 ufw 服务，我们建议安装它以使防火墙正常工作。';
$l['no_iptable_service'] = '未安装 iptables-services 服务，我们建议安装它以使防火墙正常工作。';

$l['testing_interval_set'] = '测试间隔设置成功！';
$l['enable_testing'] = '测试模式已成功启用！';
$l['disable_testing'] = '测试模式已成功禁用！';
$l['testing_enable_warn'] = '测试模式已启用 - 不要忘记禁用测试模式';
$l['change_test_mode'] = '测试模式';
$l['disable_firewall_testing_detail'] = '禁用测试模式';
$l['restartfirewall'] = '重启防火墙';
$l['blockfirewall'] = '阻止端口';
$l['ip_blockfirewall'] = '阻止 IP 地址';
$l['ip_allowfirewall'] = '允许 IP 地址';
$l['allowfirewall'] = '允许端口';
$l['policyfirewall'] = '恢复出厂设置';
$l['versionfirewall'] = '防火墙版本';
$l['viewfirewall'] = '查看 IPtables 规则';
$l['searchip'] = '搜索 IP';

$l['stopfirewall_detail'] = '停止防火墙';
$l['restartfirewall_detail'] = '重启 IPtables 服务';
$l['onfirewall_detail'] = '启动 IPtables 服务';
$l['statusfirewall_detail'] = '显示 IPtables 状态';

$l['blockfirewall_detail_1'] = '阻止端口号';
$l['ip_blockfirewall_detail'] = '阻止 IP 地址';
$l['blockfirewall_detail'] = '通过防火墙';

$l['allowfirewall_detail_1'] = '允许端口号';
$l['ip_allowfirewall_detail'] = '允许 IP 地址';
$l['allowfirewall_detail'] = '通过防火墙';

$l['policyfirewall_detail'] = '将防火墙重置为出厂设置';
$l['versionfirewall_detail'] = '显示 IPtables 版本';
$l['viewfirewall_detail'] = '列出所有链的 IPtable 规则';
$l['searchip_detail'] = '在 IPtables 中搜索 IP 地址';
$l['searchip_successfully'] = '成功搜索 IP 地址';

$l['port_default'] = '如果您阻止此端口，Virtualizor 服务可能会受到影响，因此此操作被拒绝';

$l['port'] = '请输入端口号。';
$l['port_error'] = '请输入有效的端口号。';
$l['port_already_exist'] = '此端口号已存在。';

$l['ip_drop_success'] = 'IP 地址已成功阻止。';
$l['ip'] = '请输入 IP 地址。';
$l['ip_error'] = '请输入有效的 IP 地址。';
$l['ip_already_exist'] = '此 IP 地址已存在。';
$l['ip_not_found'] = '未找到 IP 地址。';

$l['for'] = '为';
$l['minutes'] = '分钟';
$l['port'] = '端口';
$l['ip_address'] = 'IP 地址';
$l['optional'] = '可选';
$l['protocol_and'] = '协议和';
$l['firewall_warn'] = '请确保您没有将以下端口添加到阻止列表中：4081-4085。<br>我们还使用以下端口进行 VNC，因此请确保您没有将以下端口添加到阻止列表中：5900-6000';

?>