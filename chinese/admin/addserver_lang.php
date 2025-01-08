<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addserver_lang.php
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

$l['cant_add'] = '添加服务器错误';
$l['cant_add_exp'] = '不允许从服务器添加服务器！';
$l['cant_add_head'] = '错误';
$l['no_name'] = '未指定服务器名称！';
$l['no_ip'] = '未指定IP地址！';
$l['no_pass'] = '未指定密码密钥地址！';
$l['ips_exist'] = '以下IP地址已存在于主服务器上';
$l['details_err'] = '无法连接到服务器。请确保IP和服务器密码正确';
$l['err_saving'] = '保存详细信息时出错';
$l['err_slaving'] = '在从服务器上保存详细信息时出错';
$l['err_saving_users'] = '保存从服务器的用户详细信息时出错';
$l['err_saving_vps'] = '保存从服务器的'.VM_SHORT.'详细信息时出错';
$l['err_saving_ippool'] = '保存从服务器的IP池时出错';
$l['err_saving_ips'] = '保存从服务器的IP地址时出错';
$l['err_save_slave'] = '在从服务器上保存数据时出错';
$l['self_slave'] = '您尝试添加的服务器是主服务器，因此无法添加';
$l['wrong_internal_ip'] = '提交的内部IP地址无效';
$l['wrong_ip'] = '提交的IP地址无效';
$l['curl_error'] = '无法向从服务器发出curl请求';
$l['slave_lic_exp'] = '从服务器的许可证已过期';
$l['err_save_backup_plans'] = '在从服务器上保存备份计划时出错';
$l['err_save_enduser_backup_servers'] = '在从服务器上保存最终用户备份服务器时出错';
$l['err_auth'] = '高可用性集群认证失败';
$l['ha_install'] = '此服务器组已启用高可用性，Pacemaker工具将安装在此服务器上。';
$l['err_saving_passthroughs'] = '保存从服务器的直通设备时出错';

// 主题字符串
$l['<title>'] = '添加服务器';
$l['add_server'] = '添加服务器';
$l['added'] = '从服务器已添加。返回<a href="'.$globals['index'].'act=servers">服务器概览</a>';
$l['server_name'] = '服务器名称';
$l['server_name_exp'] = '服务器的名称';
$l['server_ip'] = 'IP地址';
$l['server_ip_exp'] = '服务器的主地址';
$l['server_pass'] = '服务器API密码';
$l['server_pass_exp'] = '用于控制服务器的API密码。请参阅<a href="'.$globals['docs'].'server-clustering" target="_blank">添加服务器</a>指南';
$l['sub_but'] = '添加服务器';
$l['server_group'] = '服务器组';
$l['server_group_exp'] = '此服务器所属的服务器组';
$l['server_lock'] = '锁定服务器';
$l['server_lock_exp'] = '如果锁定，将不会在此服务器上创建新的'.VM_SHORT;
$l['internal_ip'] = '内部IP';
$l['internal_ip_exp'] = '为云服务器设置内部IP。（可选）';
$l['ver_missmatch'] = '两台服务器上的Virtualizor版本不匹配';
$l['sg_ha'] = '服务器组已启用高可用性，Pacemaker工具将安装在此服务器上';
$l['err_billing_enabled'] = '您要添加为从服务器的服务器上启用了内部计费系统。因此无法将该服务器添加为从服务器。此功能将在未来的版本中支持。';
$l['duplicate_entries_error'] = '以下表的数据在主服务器上是重复的，因此无法继续！';
?>