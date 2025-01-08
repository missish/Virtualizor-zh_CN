<?php

//////////////////////////////////////////////////////////////
//===========================================================
// webuzo_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来源于成为最好的渴望
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

$l['slave_cant'] = 'Webuzo 设置错误';
$l['slave_cant_exp'] = '从服务器不允许配置 Webuzo 设置！';
$l['saving_error'] = '保存更改时出错';

// 主题字符串
$l['<title>'] = 'Webuzo 设置';
$l['page_head'] = 'Webuzo 设置';
$l['done'] = 'Webuzo 设置已保存。';
$l['disable_webuzo'] = '禁用 Webuzo';
$l['disable_webuzo_exp'] = '如果禁用 Webuzo，您将无法创建带有应用程序的 '.VM_SHORT.'。';
$l['noc_apikey'] = 'NOC API 密钥';
$l['noc_apikey_exp'] = '您的 NOC API 密钥';
$l['noc_apipass'] = 'NOC API 密码';
$l['noc_apipass_exp'] = '您的 NOC API 密码';
$l['submit'] = '保存设置';
$l['enabled_scripts'] = '已启用的脚本';
$l['disabled_scripts'] = '已禁用的脚本';
$l['script_assign'] = '脚本分配';
$l['scripts_plan'] = '选择脚本';
$l['scripts_all'] = '全选';
$l['scripts'] = 'PHP 脚本';
$l['search_script'] = '搜索 PHP 脚本';
$l['premium_apps'] = '在计划中启用高级应用程序？';
$l['premium_apps_exp'] = '如果选中，则 Webuzo 高级应用程序将根据云用户和 '.VM_SHORT.' 计划的设置启用。默认情况下，如果 API 密钥和密码有效，所有用户都将获得高级应用程序。';

// 错误信息
$l['no_noc'] = '请输入您的 NOC 用户名';
$l['no_passwd'] = '请输入您的 NOC 密码';
$l['noc_err'] = '无效的 NOC API 密钥 / 密码';