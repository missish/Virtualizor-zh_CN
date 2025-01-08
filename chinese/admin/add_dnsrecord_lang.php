<?php

//////////////////////////////////////////////////////////////
//===========================================================
// add_dnsrecord_lang.php
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

$l['no_dns_ip'] = '必须指定 IP 地址';
$l['no_zone_name'] = '必须指定区域名称';
$l['no_rdns_domain'] = '未指定域名';
$l['no_zone_name'] = '必须指定区域名称';
$l['no_host'] = '必须指定主机';
$l['no_record_type'] = '必须指定记录类型';
$l['no_zone_type'] = '必须指定区域类型';
$l['no_content'] = '必须指定内容';
$l['no_ttl'] = '必须指定 TTL';
$l['inv_revzone'] = '指定的反向 DNS 区域无效';
$l['inv_name'] = '主机名无效';
$l['inv_int'] = '指定的整数无效';
$l['inv_ip'] = '指定的 IP 地址无效';
$l['inv_tld'] = '指定的顶级域名无效';
$l['inv_ipv6'] = '指定的 IPv6 地址无效';
$l['inv_srv'] = '无效的 SRV 格式，请使用以下格式：<br>"weight port target"<br>例如："80 443 hostname.example.com"';
$l['err_save'] = '保存数据时发生错误';
$l['done'] = '记录已成功添加';
$l['domain_exists'] = '该域名已存在';
$l['no_pdnsid'] = '未选择服务器';
$l['is_rdns'] = '记录已存在';
$l['err_zone'] = '未找到该 IP 地址的 RDNS 区域条目';
$l['err_add'] = '保存数据时发生错误';
$l['err_soa'] = '更新 SOA 序列号时发生错误';
$l['err_connect'] = '无法连接到远程数据库';
$l['no_soa_content'] = 'SOA 记录内容不能为空';

// 主题字符串
$l['<edit_title>'] = '编辑 DNS 记录';
$l['<add_title>'] = '添加 DNS 记录';
$l['page_head'] = '添加 DNS 记录';
$l['add_dnsrecord'] = '添加 DNS 记录';
$l['edit_dnsrecord'] = '编辑 DNS 记录';
$l['zone_name'] = '区域名称';
$l['sub_but'] = '保存';
$l['domain'] = '域名';
$l['domain_exp'] = '完全合格的域名';
$l['dns_ip'] = 'IP 地址';
$l['type_rdns'] = '反向 DNS';
$l['type_dns'] = 'DNS';
$l['record_type'] = '记录类型';
$l['host'] = '主机';
$l['content'] = '内容';
$l['priority'] = '优先级';
$l['dns_type'] = '记录类型';
$l['slave_cant'] = (empty($_GET['edit']) ? $l['<add_title>'] : $l['<edit_title>']).' 错误';
$l['slave_cant_exp'] = '不允许在从服务器上'.(empty($_GET['edit']) ? $l['<add_title>'] : $l['<edit_title>']).'！';

?>
