<?php

//////////////////////////////////////////////////////////////
//===========================================================
// vpsbackups_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 2.1.9
// 灵感来源于成为最好的渴望
// ----------------------------------------------------------
// 开始者: Julien
// 日期: 2012年7月26日
// 时间: 15:33 小时
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

$l['<title>'] = VM_SHORT.' 备份';

//错误信息
$l['err_ftp_connect'] = '错误：连接远程备份服务器时出错';
$l['err_restore_vps'] = '启动恢复进程时出错';
$l['err_del_backup'] = '删除以下备份时出错';
$l['no_vid'] = '指定的vpsid无效';
$l['no_date'] = '指定的备份日期无效';
$l['no_backups'] = '当前备份目录中尚未创建任何备份';
$l['no_backups_date'] = '此日期没有备份';
$l['err_process_running'] = '已有恢复进程正在进行中';

//主题字符串
$l['vpsbackups'] = VM_SHORT.' 备份';
$l['name'] = '名称';
$l['size'] = '大小'; 
$l['restore'] = '恢复';
$l['delete'] = '删除';
$l['select'] = '选择....';
$l['submit'] = '提交';
$l['sel_data'] = '选择备份日期';
$l['restore_bg'] = '恢复进程已启动并在后台运行。';
$l['delete_bg'] = '备份已成功删除';
$l['conf_res'] = '您确定要恢复此备份吗？';
$l['conf_del'] = '您确定要删除此备份吗？';
$l['select_user'] = '选择用户';
$l['select_user_exp'] = '选择'.VM_SHORT.'的用户';
$l['hostname'] = '主机名';
$l['hostname_exp'] = '输入'.VM_SHORT.'的主机名。例如：www.domain.com';
$l['no_hostname'] = '请输入有效的主机名';
$l['no_uid'] = '请选择有效的用户';

//管理员邮件 '.VM_SHORT.' 恢复完成
$l['admin_vpsrestore_end_sub'] = VM_SHORT.' 恢复已完成';
$l['admin_vpsrestore_end_body'] = '您好，

'.VM_SHORT.' 恢复进程已完成。
以下'.VM_SHORT.'已成功恢复：-
{{vpsid}}
	  
此致，
{{sn}}';

//管理员邮件 '.VM_SHORT.' 恢复错误
$l['admin_vpsrestore_err_sub'] = VM_SHORT.' 恢复未成功';
$l['admin_vpsrestore_err_body'] = '您好，

在'.VM_SHORT.' 恢复过程中发生了以下错误。
{{error_log}}
		
请参阅'.V_LOG_DIR.'/virtualizor-restore.log以获取更多信息。
	  
此致，
{{sn}}';

//恢复后台语言字符串
//后台脚本字符串
$l['log_start'] = '正在启动恢复进程';
$l['log_createtemp_loc'] = '正在准备临时备份位置';
$l['log_connect'] = '正在连接到备份服务器';
$l['log_restore'] = '正在恢复'.VM_SHORT;
$l['log_cleaning'] = '正在清理';
$l['log_endemail'] = '正在发送完成通知邮件';
$l['log_end'] = '恢复进程已完成';
$l['log_download'] = '正在下载备份存档';
$l['log_abortclean'] = '正在清理中止的恢复进程';
$l['log_vps_restore_done'] = '已完成，耗时';	
$l['log_vps_restore_script_done'] = '恢复进程已完成，耗时';
$l['log_restore_type'] = VM_SHORT.' 恢复类型为 ';

$l['log_err_createtemp_loc'] = '错误：无法创建临时备份位置';
$l['log_err_create_backup_folder'] = '错误：无法创建备份文件夹';
$l['log_err_ssh_conn'] = '错误：无法通过SSH连接服务器';
$l['log_err_ssh_send'] = '错误：无法将备份传输到远程服务器';
$l['log_err_ftp_connect'] = '错误：无法连接FTP服务器';
$l['log_err_create_restore'] = '错误：无法恢复'.VM_SHORT;
$l['log_err_download'] = '错误：无法下载备份存档：请验证vpsid和备份日期';
$l['log_err_local_move_backup'] = '错误：无法将备份存档从/vz/dump移动到备份文件夹';
$l['log_err_cant_proceed'] = '由于之前的错误，恢复进程无法继续';
$l['log_err_end'] = '恢复进程未成功完成';
$l['log_err_filenotfound'] = '在备份服务器上找不到文件';
$l['log_err_download_inf'] = '错误：无法下载INF文件：请验证vpsid和备份日期';
$l['create_backup_folder'] = '正在创建备份文件夹';
$l['chck_local_backup'] = '正在检查备份文件';
$l['restore_new_vps'] = '恢复到新'.VM_SHORT;
$l['conf_res_new'] = '您确定要将其恢复到新'.VM_SHORT.'吗？';
$l['vps_does_not_exist'] = '此备份的'.VM_SHORT.'不存在！请点击“恢复到新'.VM_SHORT.'”以创建一个新的。';
$l['err_inf'] = '获取备份信息时出错。';
$l['err_insert'] = '保存新'.VM_SHORT.'信息时出错。';
$l['err_disk_create'] = '无法创建用于恢复'.VM_SHORT.'的磁盘。';
$l['err_edit'] = '编辑'.VM_SHORT.'时出错';
$l['err_ret'] = '无法检索备份目录。请再次验证您的'.VM_SHORT.'备份设置，或检查设置是否已保存。';
$l['no_ipv4'] = '可用的IPv4地址数量不足。';
$l['err_save_slave'] = '在从服务器上保存'.VM_SHORT.'数据时出错。请确保从服务器正在运行。';
$l['err_create_tmp_folder'] = '创建INF文件的临时文件夹时出错。';
$l['err_bkup_settings_notfound'] = '未找到备份设置';
$l['err_restore'] = '恢复'.VM_SHORT.'时出错。请查看'.VM_SHORT.'备份日志以获取完整信息。';
$l['vps_virt_inv'] = '要恢复的'.VM_SHORT.'的虚拟化类型不受此服务器支持！';
$l['err_couldnt_edit'] = '设置配置时出错';