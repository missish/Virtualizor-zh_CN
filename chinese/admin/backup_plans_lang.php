<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_plans_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 2.8.1
// 受“成为最好的”这一愿望启发
// ----------------------------------------------------------
// 开始人: Husain
// 日期: 2015年11月10日
// 时间: 13:16
// 网站: https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// 请阅读使用条款：https://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('非法访问');

}

$l['<title>'] = '备份计划';
$l['backup_plans_tit'] = '备份计划';
$l['submit'] = '搜索';
$l['bpid'] = 'ID';
$l['bp_name'] = '计划名称';
$l['backup_server'] = '备份服务器';
$l['frequency'] = '频率';
$l['dir'] = '目录';
$l['add_backup_plan'] = '添加备份计划';
$l['saved'] = '备份计划已成功删除';
$l['no_plans'] = '没有备份计划。<a href="'.$globals['index'].'act=addbackup_plan">立即添加备份计划</a>';
$l['no_res'] = '没有找到符合搜索条件的结果';
$l['del_conf'] = '您确定要删除此计划吗？';
$l['log_bkup_disabled'] = '此备份计划已禁用！';

// bg script 语言

// 电子邮件 '.VM_SHORT.' 备份完成
$l['vpsbackups_end_sub'] = VM_SHORT.' 备份已完成';
$l['vpsbackups_end_body'] = '你好，

'.VM_SHORT.' 备份过程已完成。

以下 '.VM_SHORT.' 已成功备份：

'.VM_SHORT.' ID : {{vpsid}} ({{hostname}})
	  
祝好，
{{sn}}';

$l['vpsbackups_single_sub'] = VM_SHORT.' 备份已完成 : {{backup_plan_name}}';
$l['vpsbackups_single_body'] = '你好，

'.VM_SHORT.' 备份过程已完成。

以下 '.VM_SHORT.'(s) 已成功备份：

{{vpses}}
	  
祝好，
{{sn}}';

// 管理员电子邮件 '.VM_SHORT.' 备份错误
$l['vpsbackups_err_sub'] = VM_SHORT.' 备份未成功';
$l['vpsbackups_err_body'] = '你好，

'.VM_SHORT.' ID : {{vpsid}} ({{hostname}})

服务器IP地址 : {{primary_ip}}

{{server_domain}}

在 '.VM_SHORT.' 备份过程中发生了以下错误：
{{error_log}}

请参考 '.VM_SHORT.' 备份日志获取更多信息。

祝好，
{{sn}}';

$l['vpsbackups_single_err_sub'] = VM_SHORT.' 备份未成功 : {{backup_plan_name}}';
$l['vpsbackups_single_err_body'] = '你好，

以下 '.VM_SHORT.' 备份失败：

{{vpses}}

服务器IP地址 : {{primary_ip}}

{{server_domain}}

请参考 '.VM_SHORT.' 备份日志获取更多信息。

祝好，
{{sn}}';

$l['vpsbackups_single_err'] = '备份失败，原因：';

// 管理员电子邮件 '.VM_SHORT.' 恢复完成
$l['vpsrestore_end_sub'] = VM_SHORT.' 恢复完成';
$l['vpsrestore_end_body'] = '你好，

'.VM_SHORT.' 恢复过程已完成。

以下 '.VM_SHORT.' 已成功恢复：

'.VM_SHORT.' ID : {{vpsid}} ({{hostname}})
	  
祝好，
{{sn}}';

$l['vpsrestore_err_sub'] = VM_SHORT.' 恢复未成功';
$l['vpsrestore_err_body'] = '你好，

'.VM_SHORT.' ID : {{vpsid}} ({{hostname}})

服务器IP地址 : {{primary_ip}}

{{server_domain}}

在 '.VM_SHORT.' 恢复过程中发生了以下错误：
{{error_log}}

请参考 '.VM_SHORT.' 恢复日志获取更多信息。

祝好，
{{sn}}';

$l['log_scanning'] = '扫描现有备份过程';
$l['log_start_backup'] = '开始备份过程';
$l['log_start_restore'] = '开始恢复过程';
$l['log_createtemp_loc'] = '准备临时备份位置';
$l['log_connect'] = '连接到备份服务器';
$l['log_create_backup_folder'] = '创建备份文件夹';
$l['log_create_backup'] = '创建磁盘备份：';
$l['log_cleaning'] = '清理中';
$l['log_upload'] = '上传到备份服务器';
$l['log_vps_backup_done'] = VM_SHORT.' 备份完成';
$l['log_vps_backup_script_done'] = '备份过程成功完成，耗时：';
$l['log_backup_type'] = VM_SHORT.' 备份类型为';
$l['no_vzo_backups'] = 'Virtuozzo OpenVZ 不支持远程备份';
$l['log_checking_tasks'] = '检查正在运行的任务';
$l['log_vps_tasks_running'] = '当前 '.VM_SHORT.' 正在进行备份或恢复任务';
$l['log_tasks_running'] = '有 {{num}} 个任务正在运行，最大允许 {{max}}';
$l['log_running'] = '正在运行...';
$l['log_sleeping'] = '休眠 {{duration}}...';
$l['log_abortclean'] = '恢复过程中断后进行清理';
$l['log_download'] = '下载备份归档';
$l['log_end'] = '恢复过程完成';
$l['log_restore'] = '恢复磁盘：';
$l['log_restore_type'] = VM_SHORT.' 恢复类型为';
$l['log_vps_restore_done'] = '恢复完成，耗时：';
$l['log_vps_restore_script_done'] = '恢复过程成功完成，耗时：';
$l['log_lock_reason'] = VM_SHORT.' 正在恢复，无法对该 '.VM_SHORT.' 执行操作';
$l['log_deleting_backups'] = '从备份计划 {{bpid}} 删除 '.VM_SHORT.' 备份';
$l['log_deleted_file'] = '已删除备份文件：{{file}}';
$l['log_delete_backup_done'] = VM_SHORT.' 备份删除过程完成，耗时：{{time}}';
$l['log_files_deleted'] = '已删除 {{count}} 个文件';
$l['log_deleting_backups'] = '根据轮换策略删除旧备份：{{rotation}}';
$l['log_deleted_file'] = '已删除文件：{{file}}';
$l['log_deleted_folder'] = '已删除文件夹：{{folder}}';
$l['log_finished_deleting_backups'] = '完成删除旧备份';
$l['log_local_file_md5'] = '本地文件 MD5: ';
$l['log_remote_file_md5'] = '远程文件 MD5: ';
$l['log_local_file_size'] = '本地文件大小: ';
$l['log_remote_file_size'] = '远程文件大小: ';

$l['log_err_createtemp_loc'] = '错误：无法创建临时备份位置';
$l['log_err_create_backup_folder'] = '错误：无法在所选备份服务器上创建备份文件夹';
$l['log_err_ssh_conn'] = '错误：无法通过 SSH 连接到服务器';
$l['log_err_ssh_send'] = '错误：无法将备份传输到远程服务器';
$l['log_err_ftp_connect'] = '错误：无法连接到 FTP 服务器';
$l['log_err_create_backup'] = '错误：无法备份 '.VM_SHORT;
$l['log_err_upload'] = '错误：无法上传到备份服务器';
$l['log_err_inf_upload'] = '错误：无法上传 INF 到备份服务器';
$l['log_err_backup_end'] = '备份过程未成功完成';
$l['log_err_restore_end'] = '恢复过程未成功完成';
$l['log_err_cant_proceed'] = '备份过程由于先前的错误无法继续';
$l['log_err_local_move_backup'] = '错误：无法将备份归档从 /vz/dump 移动到备份文件夹';
$l['log_err_create_restore'] = '错误：无法恢复 '.VM_SHORT;
$l['log_err_download'] = '错误：无法下载备份归档：请验证 vpsid 和备份日期';
$l['log_err_bkup_settings'] = '错误：无法找到备份设置';
$l['log_err_no_vps_backup'] = '错误：没有找到需要备份的 '.VM_SHORT;
$l['log_err_vps_suspended'] = VM_SHORT.' 被暂停，因此跳过备份';

$l['log_err_no_vps_restore'] = '错误：无法恢复 '.VM_SHORT.'。'.VM_SHORT.' ID: {{vpsid}} 不存在';
$l['log_err_missing_args'] = '错误：需要提供 <actid> 或 <backup-plan-id>';
$l['log_err_no_plan'] = '错误：没有找到备份计划用于删除过程';
$l['log_err_vpslock'] = '错误：锁定 '.VM_SHORT.' 时发生错误';
$l['log_err_delete_file'] = '错误：无法删除备份文件：{{file}}';
$l['log_err_backup_dir_empty'] = '错误：'.VM_SHORT.' 备份目录为空';
$l['log_err_no_task'] = '错误：无法找到任务';
$l['log_err_bkup_plan'] = '错误：无法找到备份计划';
$l['log_err_bkup_running'] = '错误：先前的备份进程仍在运行，退出...';
$l['log_err_bkup_integrity'] = '错误：上传后备份完整性检查失败';
$l['log_err_bkup_file'] = '错误：无法找到 '.VM_SHORT.' 备份文件';
$l['log_err_unsupported_arch'] = '错误：主机服务器的 32 位操作系统架构不支持远程备份 / 恢复';
$l['log_err_disk_device'] = '错误：无法检索 '.VM_SHORT.' 磁盘设备名称';
$l['log_err_drive_backup'] = '错误：qemu drive-backup 命令执行失败';
$l['log_err_deleting_file'] = '错误：无法删除文件：{{file}}';
$l['log_err_deleting_folder'] = '错误：无法删除文件夹：{{folder}}';
$l['qemu_file_backup_issue'] = '由于 qemu 的版本不兼容（要求版本大于 2.0.0），本服务器不支持文件基础备份';
$l['log_err_rename'] = '错误：远程服务器上找不到文件，重命名失败';
$l['log_xcp_err_drive_backup'] = '错误：vdi-export 命令执行失败';

$l['create_backup_folder'] = '创建备份文件夹';
$l['in_queue'] = '等待其他进程完成';

$l['server_domain'] = '服务器域名 : ';
$l['chck_local_backup'] = '检查备份文件';
$l['no_storage'] = '无法找到主存储';
$l['err_delete'] = '删除备份计划时发生错误';
$l['err_couldnt_edit'] = '设置配置时发生错误';
$l['disabled'] = '已禁用';
$l['yes'] = '是';
$l['no'] = '否';
$l['ms_enable'] = '启用';
$l['ms_disable'] = '禁用';
$l['backup_primary'] = '主磁盘备份';
$l['backup_primary_enabled'] = '主磁盘备份已启用';
$l['backup_primary_disabled'] = '主磁盘备份已禁用';
$l['vps_offline'] = VM_SHORT.' 离线，因此进行全量备份';
$l['vps_suspended'] = VM_SHORT.' 已暂停，因此进行全量备份';
$l['p_disk'] = '主磁盘';
$l['obj_backup_err'] = '对象存储备份需要 Pro 许可';
