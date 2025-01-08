<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 受“成为最好的”这一愿望启发
// ----------------------------------------------------------
// 开始人: Alons
// 日期: 2010年3月8日
// 时间: 23:00
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

$l['wrong_file'] = '您指定的文件不安全。问题将报告给管理员。';
$l['<title>'] = '数据库备份';

$l['cron_backup'] = '定时备份';
$l['immediate_backup'] = '立即备份';
$l['testbackup'] = '开始数据库备份';
$l['db_table_col1'] = '文件名';
$l['db_table_col2'] = '来源';
$l['sel_type'] = '备份类型';
$l['sel_type_exp'] = '选择备份的类型';
$l['page_dbbackup_head'] = '数据库备份';
$l['done'] = '数据库备份设置已成功保存';
$l['db_no_avi'] = '未找到数据库备份文件';
$l['title_download'] = '下载';
$l['note'] = '注意';
$l['restore_note'] = '请不要恢复旧版本的数据库，这会导致 Virtualizor 功能异常。';
$l['cron_master_note'] = '定时数据库备份功能仅适用于主服务器数据库。';
$l['mysql_dump_fail_title'] = '数据库备份错误';
$l['mysql_dump_fail'] = '数据库备份失败';
$l['submit'] = '提交';
$l['delete_dbbackup_submit'] = '禁用数据库备份';
$l['no_databasebackups_cron'] = '未指定 Cron 值';
$l['saving_error'] = '保存配置时发生错误';
$l['dbbackup_cron'] = '输入 Cron 值';
$l['dbbackup_cron_exp'] = '输入定时备份的 Cron 值。<br />例如：18 16 * * 3';
$l['err_saving'] = '保存备份设置时发生错误';
$l['backup_email'] = '备份邮件地址';
$l['backup_email_exp'] = '输入备份将发送到的电子邮件地址';
$l['email_backup'] = '通过电子邮件发送 / 上传备份';
$l['db_backup_sub'] = '数据库备份成功';
$l['db_backup_body'] = '您好，

您的数据库备份已成功创建。
服务器 IP 地址 : {{primary_ip}}

{{server_domain}}

请查看附件中的数据库文件。

此致，
Virtualizor';
$l['server_domain'] = '服务器域名 : ';
$l['email'] = '电子邮件';
$l['ssh'] = 'SSH';
$l['ftp'] = 'FTP';
$l['dbbackup_server'] = '备份服务器';
$l['dbbackup_server_exp'] = '备份将保存到的服务器';
$l['dbbackup_server_dir'] = '备份服务器目录';
$l['dbbackup_server_dir_exp'] = '备份文件将存储的目录';
$l['select'] = '选择';
$l['inv_backup_server'] = '请选择有效的备份服务器';
$l['inv_backup_server_dir'] = '请选择有效的备份服务器目录';
$l['slave_db_backup_disabled'] = '从服务器的数据库备份已被管理员禁用';
$l['finished'] = '完成';


// 背景脚本语言
$l['log_starting'] = '开始备份过程';
$l['log_bkup_local'] = '本地备份：{{val}}';
$l['log_bkup_remote'] = '远程备份：{{val}}';
$l['log_creating_backup'] = '创建备份文件';
$l['log_connecting'] = '连接到备份服务器';
$l['log_emailing_backup'] = '正在发送数据库备份邮件';
$l['log_uploading_backup'] = '将备份文件上传到备份服务器';
$l['log_rem_bckup_type'] = '远程备份类型：{{type}}';
$l['log_completed'] = '数据库备份成功完成，耗时 {{elapsed}} 分钟';

$l['log_err_no_task'] = '错误：找不到备份任务';
$l['log_err_mysql_dump'] = '错误：MySQL dump 失败，请联系管理员';
$l['log_err_bckup_server'] = '错误：找不到备份服务器';
$l['log_err_conn'] = '错误：无法连接到备份服务器';
$l['log_err_mkdir'] = '错误：在备份服务器上创建备份文件夹失败';
$l['log_err_upload'] = '错误：上传备份文件到备份服务器失败';
$l['low_space_dbbackup'] = '磁盘空间不足，无法进行数据库备份';

$l['admin_dbbackups_err_sub'] = '数据库备份失败';
$l['admin_dbbackups_err_body'] = '您好，

服务器 IP 地址 : {{primary_ip}}

{{server_domain}}

在数据库备份过程中发生了以下错误：
{{error_log}}

请查看数据库备份日志或 '.V_LOG_DIR.'/dbbackups.log 获取更多信息。

此致，
{{sn}}';
