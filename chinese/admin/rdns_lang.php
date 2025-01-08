<?php

//////////////////////////////////////////////////////////////
//===========================================================
// rdns_lang.php
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

$l['no_zone_name'] = '未指定区域名称';
$l['no_ns'] = '必须指定名称服务器。至少需要两个';
$l['no_hostmasteremail'] = '未指定主机管理员电子邮件';
$l['inv_revzone'] = '指定的反向 DNS 区域无效';
$l['inv_ns'] = '指定的名称服务器 TLD 无效';
$l['inv_hostemail'] = '指定的主机管理员电子邮件无效';
$l['err_connect'] = '无法连接到服务器。请检查服务器是否在线';
$l['err_save'] = '保存数据时出错';
$l['done'] = '反向 DNS 区域已成功添加';
$l['zone_exists'] = '此区域已存在';
$l['no_pdnsid'] = '未选择服务器';

// 主题字符串
$l['<title>'] = '添加 DNS/反向 DNS 区域';
$l['page_head'] = '添加 DNS/反向 DNS 区域';
$l['add_rdns'] = '添加 DNS/反向 DNS 区域';
$l['zone_name'] = '区域名称';
$l['exp_zone_name'] = '区域名称。<br />例如，<br />IPv4 IP : 1.2.3.xxx, 区域名称 : <b>3.2.1.in-addr.arpa</b><br />IPv6 IP : 2001:41d0:0008:53ff:0000:0000:xxxx:xxxx, 区域名称 : <b>0.0.0.0.0.0.0.0.f.f.3.5.8.0.0.0.0.d.1.4.1.0.0.2.ip6.arpa</b><br /><br />
<b>子委派反向 DNS 区域</b>:<br />如果 IPv4 IP 范围的前缀不是 /8、/16 或 /24，则该 IP 范围的反向 DNS 区域名称可以采用以下格式之一：<br /><br />
1. FIRST-LAST.REST_OCTETS.in-addr.arpa<br />
2. FIRST/PREFIX.REST_OCTETS.in-addr.arpa<br /><br />
其中 FIRST 和 LAST 是满足前缀的最后一个八位字节的第一个和最后一个可能值，REST_OCTETS 是剩余八位字节的反向顺序。<br />
例如，如果 IP 范围是 192.168.15.16/28，则<br />
FIRST = 16<br />
LAST = 31<br />
REST_OCTETS = 15.168.192<br />
因此，反向 DNS 区域名称为：
格式 1:  16-31.15.168.192.in-addr.arpa<br />
格式 2: 16/28.15.168.192.in-addr.arpa<br /><br />
有关更多信息，请参阅 Virtualizor 文档中的反向 DNS 部分。<br /><br />
<b>注意</b>: 请咨询 IP 提供商以确认他们支持上述哪种子委派反向 DNS 格式。';
$l['ns'] = '名称服务器';
$l['hostmasteremail'] = '主机管理员电子邮件';
$l['exp_hostmasteremail'] = '主机管理员电子邮件';
$l['pdns_server'] = '选择服务器';
$l['exp_pdns_server'] = '要添加记录的 DNS 服务器';
$l['sub_but'] = '提交';
$l['slave_cant'] = '添加反向 DNS 区域错误';
$l['slave_cant_exp'] = '不允许从服务器添加反向 DNS 区域！';
$l['custom_ttl'] = '自定义 TTL（可选）';
$l['exp_custom_ttl'] = '此 TTL 值将用于自动生成的记录。如果未设置，则将使用 86400。';

?>