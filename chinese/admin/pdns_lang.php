<?php

//////////////////////////////////////////////////////////////
//===========================================================
// pdns_lang.php
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

$l['<title>'] = 'Power DNS';
$l['page_head'] = 'Power DNS';
$l['add_pdns'] = '添加 DNS 服务器';
$l['pdns'] = 'Power DNS';
$l['done'] = 'PowerDNS 服务器已成功删除';

$l['id'] = 'ID';
$l['name'] = '名称';
$l['descr'] = '描述';
$l['ip'] = 'IP 地址';
$l['manage'] = '管理';
$l['rdns'] = '添加反向 DNS 区域';
$l['pdns_zones'] = '区域';
$l['edit_pdns'] = '编辑此服务器';
$l['del_pdns'] = '删除此服务器';
$l['test_pdns'] = '检查数据库连接';

$l['pdns_name'] = '服务器名称';
$l['pdns_ipaddress'] = 'IP 地址';
$l['submit'] = '搜索';

$l['no_pdns'] = '没有 PDNS 服务器。<a href="'.$globals['index'].'act=addpdns">现在添加 PDNS 服务器</a>';
$l['no_res'] = '未找到与您的搜索查询匹配的结果';
$l['pdns_inuse'] = '此服务器已包含在 DNS 计划中。请先从计划中取消分配，然后再尝试删除';

$l['test_pdns'] = '测试';
$l['edit_pdns'] = '编辑';
$l['delete_pdns'] = '删除';

$l['powerdns_note'] = '请阅读以下指南：<br />
1) <a href="'.$globals['docs'].'PowerDNS" target="_blank">PowerDNS 设置指南</a><br />
2) <a href="'.$globals['docs'].'Configure_PowerDNS" target="_blank">将 PowerDNS 添加到 Virtualizor</a><br />
3) <a href="'.$globals['docs'].'Configure_Reverse_DNS" target="_blank">配置反向 DNS</a>';
$l['view'] = '查看';
$l['pdns_records'] = '记录';

?>