<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addrecipe_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来源于成为最好的愿望
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

$l['error_saving'] = '保存配方信息时出错';
$l['adr_done'] = '配方已添加';

$l['<title>'] = '添加配方';
$l['code'] = '输入您的配方';
$l['code_exp'] = '在此处输入实际的bash代码。<br />注意：#!/bin/sh 将自动添加，您无需手动添加。<br /></br />\您可以在配方中使用以下变量：<br />\<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />\<strong>{{vps_name}}</strong> : VID<br />\<strong>{{vps_hostname}}</strong> : '.VM_SHORT.' 主机名<br />\<strong>{{username}}</strong> : 用户邮箱<br />\<strong>{{root_pass}}</strong> : 根密码<br />\<strong>{{ips}}</strong> : IPv4 IP地址<br />\<strong>{{ips6}}</strong> : IPv6 IP地址<br />\<strong>{{ips6_subnet}}</strong> : IPv6 子网<br />';
$l['submit'] = '添加配方';
$l['recipe_name'] = '配方名称';
$l['recipe_name_exp'] = '您的配方名称。这将显示给用户。';
$l['done'] = '配方已成功添加！返回<a href="'.$globals['index'].'act=recipes">配方概览</a>';
$l['no_recipe_name'] = '未输入配方名称';
$l['no_recipescript'] = '未输入配方bash脚本';
$l['error_saving'] = '保存配方时出错';
$l['duplicate_name'] = '重复的配方名称';
$l['recipe_logo'] = '配方Logo';
$l['url_exp'] = '配方Logo的URL。此字段为可选。';
$l['recipe_desc'] = '描述';
$l['exp_desc'] = '这将显示给用户。<br />注意：仅允许使用 &lt;br&gt; &lt;br/&gt; &lt;p&gt; &lt;a&gt; &lt;b&gt; &lt;span> 这些标签。';
$l['status'] = '禁用配方';
$l['exp_status'] = '如果选中，则此配方将不会显示给最终用户。';
$l['shell'] = 'Shell类型';
$l['shell_exp'] = '选择用于执行配方的Shell类型，默认为Bash Shell（对于Windows，请保留默认值）';
$l['invalid_shell'] = '选择了无效的Shell类型';
$l['admin_only'] = '是否为仅管理员配方？';
$l['admin_only_exp'] = '如果启用，则此配方仅对管理员用户可见';
?>