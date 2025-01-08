<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addbackupserver_lang.php
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

$l['slave_cant'] = '添加备份服务器错误';
$l['slave_cant_exp'] = '不允许从服务器添加备份服务器！';
$l['no_name'] = '请为 FTP 服务器指定一个唯一的名称';
$l['no_hostname'] = '请指定主机名';
$l['no_type'] = '请指定类型';
$l['no_username'] = '请指定用户名';
$l['no_password'] = '请指定密码';
$l['no_port'] = '请指定端口';
$l['no_dir'] = '请指定上传目录';
$l['nameexist'] = '此名称已存在';
$l['err_add_backupserver'] = '添加备份服务器时发生错误';
$l['nameexist'] = '具有此名称的备份服务器已存在';
$l['err_save_slave'] = '保存从服务器的 '.VM_SHORT.' 数据时发生错误。请确保从服务器正常工作。';
$l['extension_not_found'] = 'SSH 扩展未正确加载。请使用以下命令重新启动 Virtualizor 服务：<b>service virtualizor restart</b>';
$l['not_available'] = '此功能在 XenServer 中当前不可用';

// 主题设置
$l['<title>'] = '添加备份服务器';
$l['add_backupserver'] = '添加备份服务器';
$l['done'] = '备份服务器已保存。返回到 <a href="'.$globals['index'].'act=backupservers">备份服务器概览</a>';
$l['name'] = '名称';
$l['exp_name'] = '备份服务器的唯一名称';
$l['hostname'] = '主机名';
$l['exp_hostname'] = '服务器的有效 TLD 或 IP 地址';
$l['type'] = '类型';
$l['username'] = '用户名';
$l['password'] = '密码';
$l['port'] = '端口';
$l['dir'] = '目录';
$l['exp_dir'] = '要上传的服务器上的目录';
$l['submit'] = '提交';

$l['sshkey'] = '使用 SSH 密钥';
$l['sshpubkey'] = 'SSH 公钥';
$l['sshprikey'] = 'SSH 私钥';
$l['ssh_exp'] = '如果启用，将使用 SSH 密钥代替密码连接到备份服务器';
$l['no_ssh_key_err'] = '请提供 SSH 密钥';
$l['invalid_pub_key'] = '您指定的公钥无效';
$l['ssh_key_con_err'] = '无法使用指定的 SSH 密钥连接到服务器。密钥无效或未在备份服务器的 authorized_keys 文件中添加公钥';
$l['genkey'] = '生成 SSH 密钥';
$l['gen_key_exp'] = '如果启用，将自动生成公钥和私钥';
$l['ftps'] = '使用 FTP(s)';

?>
