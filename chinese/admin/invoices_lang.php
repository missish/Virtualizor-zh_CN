<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ips_lang.php
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

$l['error_deleting'] = '删除发票时出错';

$l['<title>'] = '发票';
$l['_head'] = '发票';
$l['done'] = '发票已成功删除。正在重新加载页面！';
$l['err_delete'] = '删除发票时出现了一些错误';
$l['no_invoice'] = '没有发票。<a href="'.$globals['index'].'act=addinvoice">立即创建发票</a>';
$l['no_res'] = '未找到与您的搜索查询匹配的结果';
$l['error_occurred'] = '似乎存在网络连接问题，请刷新页面并重试';
$l['error_session_logout'] = '您的会话似乎已过期，请登录并重试';

$l['sby_invoid'] = '发票 ID';
$l['sby_uid'] = '用户 ID';
$l['sby_email'] = '用户邮箱';
$l['sby_item'] = '项目';
$l['sby_paydate'] = '支付日期';
$l['sby_invodate'] = '发票日期';
$l['sby_duedate'] = '到期日期';
$l['submit'] = '搜索';

$l['th_invoid'] = 'ID';
$l['th_email'] = '用户';
$l['th_invodate'] = '日期';
$l['th_duedate'] = '到期日期';
$l['th_paydate'] = '支付日期';
$l['th_item'] = '项目';
$l['th_net'] = '净额';

$l['edit_invoice'] = '编辑发票';
$l['del_invoice'] = '删除发票';
$l['with_selected'] = '选中项';
$l['go'] = '执行';
$l['create_invoice'] = '创建发票';