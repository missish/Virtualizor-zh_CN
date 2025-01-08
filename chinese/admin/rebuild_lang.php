<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addvs_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来自于成为最好的愿望
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

$l['slave_cant'] = '添加 '.VM_LONG.' 错误';
$l['slave_cant_exp'] = '不允许从服务器重建 '.VM_LONG.' !';
$l['no_os'] = '请为 '.VM_SHORT.' 选择一个操作系统';
$l['no_id'] = '请选择一个 '.VM_SHORT;
$l['no_match'] = '您输入的密码不匹配';
$l['no_new'] = '您没有指定新密码。';
$l['no_conf'] = '确认密码缺失。';
$l['error_reins'] = '重新安装操作系统时出错';
$l['invalid_os'] = '您提交的操作系统无效';
$l['invalid_vpsid'] = '您提交的 '.VM_SHORT.' ID 无效';
$l['err_save_slave'] = '在从服务器上保存 '.VM_SHORT.' 数据时出错。请确保从服务器正常工作。';
$l['err_start'] = '启动新的 '.VM_SHORT.' 时出错';
$l['err_changing'] = '设置 '.VM_SHORT.' 的 Root 密码时出错';

// 主题字符串
$l['<title>'] = '重建 '.VM_LONG;
$l['add_vs'] = '重建 '.VM_LONG;
$l['done'] = '已创建 '.VM_LONG.'。返回 <a href="'.$globals['index'].'act=vs">'.VM_LONG.' 概览</a>';
$l['newvs_vpsid'] = VM_SHORT.' ID';
$l['newvs_vps_name'] = VM_SHORT.' 名称';
$l['vs_server'] = '服务器';
$l['exp_server'] = '更改当前服务器以更改服务器';
$l['edit_exp_server'] = '将执行操作的服务器（无需选择）';
$l['vs_ser_id'] = 'ID';
$l['user_pass'] = '密码';
$l['vps'] = VM_SHORT.' ID';
$l['vps_id'] = '选择 '.VM_SHORT;
$l['select_os'] = '选择操作系统';
$l['new_pass'] = '新密码';
$l['retype_pass'] = '重新输入密码';
$l['randpass'] = '生成另一个随机密码';
$l['none'] = '无';
$l['reinstall'] = '重新安装';
$l['vs_user_exp'] = '选择一个现有的 '.VM_SHORT.' ID';
$l['vsos'] = '操作系统';
$l['vsos_exp'] = '为 '.VM_SHORT.' 选择操作系统';
$l['notification'] = '重建 '.VM_SHORT.' 将导致该 '.VM_SHORT.' 上的所有数据丢失。您确定要继续吗？';
$l['newvs_rootpass'] = 'Root 密码';
$l['vnc_details'] = 'VNC 详情';
$l['vnc_pass'] = 'VNC 密码';
$l['newvs_ips'] = VM_SHORT.' IPs';
$l['newvs_ips6'] = VM_SHORT.' IPV6';
$l['newvs_ips6_subnet'] = VM_SHORT.' IPv6 子网';
$l['rescue_edit_no_allowed'] = '当 '.VM_SHORT.' 处于救援模式时，不允许执行重建操作';
$l['in_queue'] = '等待其他进程完成';

$l['webuzo_mode'] = 'Webuzo 应用程序';
$l['webuzo_exp'] = '使用应用程序重建 '.VM_SHORT;
$l['webuzo_ssh_port'] = 'SSH 端口';
$l['webuzo_spasswd'] = 'Root 密码';
$l['webuzo_spasswd_p'] = '输入 Root 密码';
$l['webuzo_pd'] = '主域名';
$l['webuzo_pd_p'] = 'example.com';
$l['webuzo_appstack'] = '选择堆栈';
$l['webuzo_scriptlist'] = '选择一个脚本';
$l['webuzo_submit'] = '安装';
$l['webuzo_advanced'] = '高级选项';
$l['webuzo_ns1'] = '域名服务器 1';
$l['webuzo_ns1_p'] = '（可选）指定您的域名服务器 1';
$l['webuzo_ns2'] = '域名服务器 2';
$l['webuzo_ns2_p'] = '（可选）指定您的域名服务器 2';
$l['webuzo_apache'] = '选择 Apache 版本';
$l['webuzo_mysql'] = '选择 MYSQL 版本';
$l['webuzo_php'] = '选择 PHP 版本';
$l['webuzo_os'] = '选择操作系统';
$l['webuzo_disabled'] = 'Webuzo 安装已被管理员禁用';
$l['webuzo_support_err'] = '应用程序不受支持。';
$l['webuzo_spasswd_err'] = '请输入 root 密码';
$l['webuzo_pd_err'] = '请指定正确的域名';
$l['webuzo_script_err'] = '所选脚本不在列表中。请重试';
$l['webuzo_stack_err'] = '请选择正确的堆栈进行安装';
$l['mysql_err'] = '请选择 MySQL 版本';
$l['php_err'] = '请选择 PHP 版本';
$l['webserver_err'] = '请选择 Apache 版本';
$l['webuzo_wmp_err'] = '您没有选择正确的堆栈版本';
$l['webuzo_wmp_err1'] = '您没有选择正确的堆栈版本。这在免费版本中不可用';
$l['webuzo_ns1_err'] = $l['webuzo_ns2_err'] = '请输入正确的域名服务器详细信息';
$l['webuzo_os_err'] = '请选择您要安装的操作系统';
$l['webuzo_os_invalid'] = '提交的操作系统不是有效的 Webuzo 操作系统';
$l['webuzo_install_data_lost_warn'] = '您确定要继续安装吗？警告：所有 '.VM_SHORT.' 数据将永久丢失。';
$l['webuzo_req_err'] = '无法获取脚本要求。';
$l['webuzo_app_err'] = '获取 Webuzo 应用程序时出错';
$l['webuzo_prim_ip_err'] = '无法获取 IP';
$l['webuzo_install_start'] = 'Webuzo 安装已在后台启动。安装过程成功后，将发送电子邮件到给定的电子邮件地址。重新加载页面！';
$l['webuzo_dns_err'] = '请填写域名服务器详细信息';
$l['enabling_webuzo'] = '请等待数据验证完成';
$l['cpan_wrong_os'] = '控制面板无法安装在 ';
$l['err_cpan_iso'] = '选择 ISO 时无法安装控制面板！';
$l['cpan_wrong_panel'] = '您选择的面板无效';
$l['err_disksize'] = '操作系统模板大小大于 '.VM_SHORT.' 磁盘大小';
// Webuzo 后台脚本语言
$l['error_reins'] = '重新安装 '.VM_SHORT.' 时出错';
$l['err_install_script'] = '安装脚本时出错';
$l['iscript'] = '正在安装脚本';
$l['iscript_err'] = '无法安装应用程序';
$l['install_cp'] = '正在安装控制面板';
$l['install_recipe'] = '正在执行配方';
$l['control_panel'] = 'Web 控制面板';
$l['control_panel_exp'] = '此选项将在 '.VM_SHORT.' 中安装选定的 Web 控制面板';
$l['invalid_hostname'] = '您提交的主机名不是有效的 FQDN';

// 进度更新
$l['prog_update1'] = '开始 '.VM_SHORT.' 重建...';
$l['prog_update2'] = '正在更新数据库...';
$l['prog_update3'] = '正在重新安装操作系统...';
$l['prog_update4'] = '正在设置 root 密码...';
$l['prog_update5'] = '正在启动 '.VM_SHORT.'...';
$l['prog_update6'] = '正在执行最后步骤...';

$l['mac_temp_vncdetails'] = 'MAC 地址：';
$l['mail_temp_vnctitle'] = 'VNC 详情如下：';
$l['mail_temp_vncdetails'] = 'VNC 详情：';
$l['mail_temp_vncpasswd'] = 'VNC 密码：';
$l['mail_temp_vncusername'] = 'VNC 用户名：';
$l['strength_indicator'] = '强度指示器';
$l['bad'] = '弱';
$l['good'] = '中等';
$l['strong'] = '强';
$l['short'] = '短';
$l['weak_pass'] = '密码必须至少包含以下三种：大写字母、小写字母、数字或特殊符号';
$l['pass_match'] = '密码不匹配';
$l['copy_pass'] = '请将密码复制到安全的地方';
$l['rebuild_data_lost_warn'] = '您确定要重建 '.VM_SHORT.' 吗？警告：'.VM_SHORT.' 上的现有数据将永久丢失。';
$l['eu_send_rebuild_email'] = '通知用户';
$l['eu_send_rebuild_email_exp'] = '如果选中，将在 '.VM_SHORT.' 重建后发送电子邮件给 '.VM_SHORT.' 用户';
$l['vm_locked_rebuild'] = VM_SHORT.' 正在重建，因此不允许对此 '.VM_SHORT.' 执行任何操作';
$l['storage_not_supported'] = '当前 libguestfs 版本不支持 QCOW2 存储。请按照 <a href="'.$globals['docs'].'Llibguestfs_CentOS_7.3_Fix" target="_blank">此</a> 指南安装支持的版本。';
$l['inv_var_passed'] = '从最终用户传递的无效变量！！';
$l['format_primary_warn'] = '仅支持在 KVM、PROXMOX KVM 和 XEN HVM 主机节点上的 '.VM_SHORT.' 格式化主磁盘';
$l['format_primary'] = '仅格式化主磁盘';
$l['format_primary_exp'] = '如果选中此框，则仅格式化操作系统的主磁盘。其他磁盘保持不变。（仅支持在 KVM、PROXMOX KVM 和 XEN HVM 上的 '.VM_SHORT.'）';
$l['recipe'] = '配方';
$l['recipe_exp'] = '选择在 '.VM_SHORT.' 创建后要执行的配方';
$l['checking_data'] = '正在检查提交的数据...';
$l['err_locked_vps'] = VM_SHORT.' 已锁定，因此不允许执行任何操作';
$l['remove_old_ssh_keys'] = '删除旧的 SSH 密钥';
$l['remove_old_ssh_keys_exp'] = '如果选中，则将从 '.VM_SHORT.' 中删除旧的 SSH 密钥';
?>