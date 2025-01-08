<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editserver_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
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

$l['slave_cant_add'] = '编辑服务器错误';
$l['slave_cant_exp'] = '从服务器不允许添加服务器！';
$l['slave_cant_head'] = '错误';
$l['no_name'] = '未指定服务器名称！';
$l['no_ip'] = '未指定IP地址！';
$l['no_pass'] = '未指定密码密钥地址！';
$l['no_sgid'] = '未指定服务器组！';
$l['details_err'] = '无法加载服务器详细信息';
$l['virt_changed'] = '从服务器的虚拟化内核已更改。请删除服务器并重新添加';
$l['is_master'] = '您尝试编辑的服务器是主服务器，因此无法添加';
$l['is_slave'] = '该服务器是另一台主服务器的从服务器，无法添加';
$l['err_saving'] = '保存详细信息时出错';
$l['err_slaving'] = '在从服务器上保存详细信息时出错';
$l['wrong_internal_ip'] = '您提交的内部IP无效';
$l['wrong_ip'] = '您提交的IP无效';
$l['ha_install'] = '此服务器组启用了高可用性，Pacemaker工具将在此服务器上安装。';
$l['err_private_key'] = '添加私钥到从服务器时发生错误';
$l['err_public_key'] = '添加公钥到从服务器时发生错误';

// 主题字符串
$l['<title>'] = '编辑服务器';
$l['page_head'] = '编辑服务器';
$l['saved'] = '从服务器已编辑。返回 <a href="'.$globals['index'].'act=servers">服务器概览</a>';
$l['server_name'] = '服务器名称';
$l['server_name_exp'] = '服务器的名称';
$l['server_ip'] = 'IP地址';
$l['server_ip_exp'] = '服务器的主要地址';
$l['server_pass'] = '服务器密码';
$l['server_pass_exp'] = '服务器的API密钥密码';
$l['server_lock'] = '锁定服务器';
$l['server_lock_exp'] = '如果锁定，则不允许在该服务器上创建新的 '.VM_SHORT.' 实例';
$l['sub_but'] = '编辑服务器';
$l['server_group'] = '服务器组';
$l['internal_ip'] = '内部IP';
$l['internal_ip_exp'] = '为云服务器设置内部IP（可选）';

?>