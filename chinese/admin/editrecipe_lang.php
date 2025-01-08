<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editrecipe_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本: 1.0
// 灵感来自成为最佳的渴望
// ----------------------------------------------------------
// 开始者: Alons
// 日期: 2010年3月8日
// 时间: 23:00
// 网站: https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// 请阅读 https://www.virtualizor.com 上的使用条款
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('黑客攻击尝试');

}

$l['<title>'] = '编辑配方';
$l['edit_user'] = '编辑配方';
$l['no_recipe'] = '没有配方';
$l['no_name'] = '配方名称不能为空';
$l['no_recipescript'] = '未输入配方bash脚本';
$l['email_exist'] = '您输入的电子邮件地址已存在';
$l['done'] = '配方已更新。返回 <a href="'.$globals['index'].'act=recipes">配方概览</a>';
$l['submit'] = '更新配方';
$l['code'] = '输入您的配方';
$l['code_exp'] = '在此输入实际的bash代码。<br />注意：#!/bin/sh将自动添加，您无需手动添加。<br /></br />您可以在配方中使用以下变量：<br />\<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />\<strong>{{vps_name}}</strong> : VID<br />\<strong>{{vps_hostname}}</strong> : '.VM_SHORT.' 主机名<br />\<strong>{{username}}</strong> : 用户邮箱<br />\<strong>{{root_pass}}</strong> : 根密码<br />\<strong>{{ips}}</strong> : IPv4地址<br />\<strong>{{ips6}}</strong> : IPv6地址<br />\<strong>{{ips6_subnet}}</strong> : IPv6子网<br />';
$l['recipe_name'] = '配方名称';
$l['recipe_name_exp'] = '您的配方名称。此名称将显示给用户。';
$l['recipeadd_error'] = '配方已更新';
$l['rdu_done'] = '配方已更新';
$l['recipe_logo'] = '配方图标';
$l['url_exp'] = '配方图标的URL。此字段为可选。';
$l['recipe_desc'] = '描述';
$l['exp_desc'] = '此描述将显示给用户。<br />注意：仅允许使用&lt;br&gt; &lt;br/&gt; &lt;p&gt; &lt;a&gt; &lt;b&gt; &lt;span>这些标签。';
$l['status'] = '禁用配方';
$l['exp_status'] = '如果选中，则该配方将不会显示给最终用户。';
$l['shell'] = 'Shell类型';
$l['shell_exp'] = '选择配方执行时使用的Shell类型，默认为Bash shell（对于Windows，请保留默认设置）';
$l['invalid_shell'] = '选择的Shell类型无效';
$l['admin_only'] = '仅限管理员配方？';
$l['admin_only_exp'] = '如果启用，则该配方仅对管理员用户可见';
$l['duplicate_name'] = '配方名称重复';

?>
