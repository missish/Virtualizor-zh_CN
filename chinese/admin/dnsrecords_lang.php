<?php

//////////////////////////////////////////////////////////////
//===========================================================
// dnsrecords_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 受“成为最好的”这一愿望启发
// ----------------------------------------------------------
// 开始人: Alons
// 日期: 2010年3月8日
// 时间: 23:00
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

$l['<title>'] = 'DNS 记录';
$l['conf_del'] = '您确定要删除此 DNS 记录吗？';
$l['page_head'] = 'DNS 记录';
$l['dnsrecords'] = 'DNS 记录';
$l['done'] = '记录已成功删除';

$l['id'] = 'ID';
$l['ip'] = 'IP';
$l['name'] = '名称';
$l['domain'] = '域名';
$l['manage'] = '管理';
$l['type'] = '类型';
$l['priority'] = '优先级';
$l['ttl'] = 'TTL';
$l['rdns'] = '添加反向 DNS 区域';
$l['pdns_zones'] = '查看区域';
$l['edit_dnsrecords'] = '编辑';
$l['del_dnsrecords'] = '删除';
$l['del_record'] = '删除记录';
$l['add_dnsrecord'] = '添加记录';
$l['dns_domain'] = '域名';
$l['dns_name'] = '名称';
$l['domain_id'] = '区域 ID';
$l['rdns_ip'] = '反向 DNS IP';
$l['rdns_inv_ipaddress'] = '输入的反向 DNS IP 地址无效';

$l['pdns_name'] = '服务器名称';
$l['rdns_ipaddress'] = 'IP 地址';
$l['submit'] = '搜索';
$l['record_type'] = '记录类型';

$l['no_rdns'] = '没有 DNS 记录。<a href="'.$globals['index'].'act=add_dnsrecord&pdnsid='.optGET('pdnsid').'">立即添加 DNS 记录</a>';
$l['no_res'] = '未找到符合您搜索条件的结果';
$l['pdns_inuse'] = '此服务器已包含在一个 DNS 计划中。请从计划中取消分配该服务器，然后再尝试删除它';
$l['unable_connect'] = '无法连接到服务器';
$l['success_connect'] = '连接成功！';

$l['test_pdns'] = '测试';
$l['edit_pdns'] = '编辑';
$l['delete_pdns'] = '删除';

$l['powerdns_note'] = '请阅读以下指南：<br />
1) <a href="'.$globals['docs'].'PowerDNS" target="_blank">PowerDNS 安装指南</a><br />
2) <a href="'.$globals['docs'].'Configure_PowerDNS" target="_blank">将 PowerDNS 添加到 Virtualizor</a><br />
3) <a href="'.$globals['docs'].'Configure_Reverse_DNS" target="_blank">配置反向 DNS</a>';

$l['err_delete'] = '删除以下记录时出错：';
$l['err_connect'] = '无法连接到远程数据库';

?>
