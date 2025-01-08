<?php

//////////////////////////////////////////////////////////////
//===========================================================
// vpsbackup_settings_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 2.1.9
// 灵感来源于成为最好的渴望
// ----------------------------------------------------------
// 开始者: Julien
// 日期: 2012年7月25日
// 时间: 15:26 小时
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

$l['slave_cant'] = VM_SHORT.' 备份设置错误';
$l['slave_cant_exp'] = '从服务器不允许配置'.VM_SHORT.'备份设置！';
$l['err_saving'] = '保存备份设置时出错';
$l['err_save_slave'] = '在从服务器上保存'.VM_SHORT.'数据时出错。请确保从服务器正在运行。';
$l['no_backupserver'] = '未选择备份服务器';
$l['no_freq'] = '未指定备份频率';
$l['no_time'] = '未指定备份时间';
$l['no_hourly_freq'] = '未指定每小时频率值';
$l['no_rotation'] = '未指定轮换值';
$l['no_vps_sel'] = '未选择'.VM_SHORT.'。至少应选择一个'.VM_SHORT.'进行备份';
$l['no_nice'] = '未指定进程优先级';
$l['no_ionice_prio'] = '未指定I/O优先级';
$l['no_ionice_class'] = '未指定I/O类';
$l['err_process_running'] = '现有的备份进程仍在运行。退出';
$l['inv_backup_type'] = '指定的备份类型无效';
$l['no_type'] = '未指定备份类型';
$l['no_dir'] = '未指定备份目录';
$l['no_logs'] = '无可用日志';
$l['ssh_server_error'] = '您选择的备份服务器类型为<b>&soft-1;</b>，而备份类型为<b>&soft-2;</b>';

$l['<title>'] = VM_SHORT.' 备份设置';
$l['vpsbackups'] = VM_SHORT.' 备份';
$l['add_backupserver'] = '添加备份服务器';
$l['sel_backupserver'] = '备份服务器';
$l['exp_sel_backupserver'] = '备份将保存的服务器';
$l['backup_freq'] = '备份频率';
$l['exp_backup_freq'] = '备份进程运行的频率';
$l['backup_time'] = '时间';
$l['exp_backup_time'] = '备份进程开始的时间';
$l['backup_day'] = '备份日';
$l['exp_backup_day'] = '备份运行的指定日';
$l['backup_date'] = '备份日期';
$l['exp_backup_date'] = '备份运行的指定月份日';
$l['freq_daily'] = '每日';
$l['freq_weekly'] = '每周';
$l['freq_monthly'] = '每月';
$l['freq_hourly'] = '每小时';
$l['backup_hourly'] = '每';
$l['exp_backup_hourly'] = '每小时备份频率';
$l['hrs'] = '小时';
$l['min'] = '分钟';
$l['backup_rotation'] = '备份轮换';
$l['exp_backup_rotation'] = '每个'.VM_SHORT.'允许的备份数量';
$l['backup_enabled'] = '启用';
$l['exp_backup_enabled'] = '开启/关闭备份';
$l['backup_newvps'] = '备份新'.VM_SHORT;
$l['exp_backup_newvps'] = '如果选中，新创建的'.VM_SHORT.'将被添加到备份列表中。建议启用。';
$l['select'] = '选择....';
$l['done'] = VM_SHORT.' 备份设置已成功保存';
$l['submit'] = '提交';
$l['vpses'] = VM_SHORT.' 备份列表';
$l['vpses_exp'] = '选择要备份的'.VM_SHORT.'。';
$l['nice'] = '进程优先级';
$l['nice_exp'] = '备份进程的CPU时间。19（最不优先）到-20（最优先）';
$l['ionice_class'] = '进程I/O类';
$l['ionice_class_exp'] = '备份进程的I/O类';
$l['ionice_prio'] = '进程I/O优先级';
$l['ionice_prio_exp'] = '备份进程的I/O优先级';
$l['backup_compression'] = '禁用压缩';
$l['exp_backup_compression'] = '禁用备份压缩。此选项仅对KVM和Xen-HVM有效';
$l['sel_type']= '备份类型';
$l['local_dir'] = '目录';
$l['exp_local_dir'] = '备份将存储的目录。对于本地备份，此路径必须事先<b>挂载</b>在服务器上。<b>例如</b>："/Your-Dir"';
$l['backup_logs'] = VM_SHORT.' 备份日志';
$l['clear_logs'] = '清除日志';
$l['show_log_lines_1'] = '显示最后';
$l['show_log_lines_2'] = '行';
$l['log_len_go'] = '执行';
$l['backup_now_done'] = '备份进程已启动';
$l['backupnow'] = '立即开始备份';

//管理员邮件 '.VM_SHORT.' 备份开始
$l['admin_vpsbackups_start_sub'] = VM_SHORT.' 备份已开始'; 
$l['admin_vpsbackups_start_body'] = '您好，

'.VM_SHORT.' 备份进程已启动。以下'.VM_SHORT.'(s)已计划备份：
'.VM_SHORT.'ID : {{vpsids}}
	  
此致，
{{sn}}';

//管理员邮件 '.VM_SHORT.' 备份结束
$l['admin_vpsbackups_end_sub'] = VM_SHORT.' 备份已完成';
$l['admin_vpsbackups_end_body'] = '您好，

服务器IP地址 : {{primary_ip}}

{{server_domain}}

'.VM_SHORT.' 备份进程已成功完成。
	  
此致，
{{sn}}';

//管理员邮件 '.VM_SHORT.' 备份错误
$l['admin_vpsbackups_err_sub'] = VM_SHORT.' 备份未成功';
$l['admin_vpsbackups_err_body'] = '您好，

服务器IP地址 : {{primary_ip}}

{{server_domain}}

在'.VM_SHORT.' 备份过程中发生了以下错误。	
{{error_log}}		
		
请参阅'.VM_SHORT.' 备份日志或'.V_LOG_DIR.'/virtualizor-backups.log以获取更多信息。
		
	  
此致，
{{sn}}';

//后台脚本字符串
$l['log_scanning'] = '正在扫描现有的备份进程';
$l['log_abort'] = '较早的备份进程正在运行 - 正在中止它！';
$l['log_abortclean'] = '清理之前的进程';
$l['log_start'] = '正在启动备份进程';
$l['log_startemail'] = '正在发送通知邮件';
$l['log_createtemp_loc'] = '正在准备临时备份位置';
$l['log_connect'] = '正在连接到备份服务器';
$l['log_create_backup_folder'] = '正在创建备份文件夹';
$l['log_create_backup'] = '正在创建'.VM_SHORT.'的备份';
$l['log_cleaning'] = '正在清理';
$l['log_endemail'] = '正在发送完成通知邮件';
$l['log_upload'] = '正在上传到备份服务器';
$l['log_vps_backup_done'] = VM_SHORT.' 备份已完成，耗时';
$l['log_vps_backup_script_done'] = '备份进程已成功完成，耗时';
$l['log_backup_type'] = VM_SHORT.' 备份类型为 ';
$l['no_vzo_backups'] = 'Virtuozzo OpenVZ不支持远程备份';

$l['log_err_createtemp_loc'] = '错误：无法创建临时备份位置';
$l['log_err_create_backup_folder'] = '错误：无法在选定的备份服务器上创建备份文件夹';
$l['log_err_ssh_conn'] = '错误：无法通过SSH连接服务器';
$l['log_err_ssh_send'] = '错误：无法将备份传输到远程服务器';
$l['log_err_ftp_connect'] = '错误：无法连接FTP服务器';
$l['log_err_create_backup'] = '错误：无法备份'.VM_SHORT;
$l['log_err_upload'] = '错误：无法上传到备份服务器';
$l['log_err_inf_upload'] = '错误：无法上传INF到备份服务器';
$l['log_err_end'] = '备份进程未成功完成';
$l['log_err_cant_proceed'] = '由于之前的错误，备份进程无法继续';
$l['unsupported_arch'] = '32位操作系统架构仅支持本地备份';
$l['server_domain'] = '服务器域名 : ';
$l['please_wait'] = '请稍候';

?>