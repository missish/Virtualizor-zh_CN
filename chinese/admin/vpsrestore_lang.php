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

$l['<title>'] = '恢复 '.VM_SHORT.' 备份';

$l['cant_restore'] = '恢复 '.VM_SHORT.' 错误';
$l['cant_restore_exp'] = '从服务器不允许恢复 '.VM_SHORT.'。请从主服务器执行此操作。';
$l['select'] = '选择';
$l['select_bkp_server'] = '选择备份服务器';
$l['select_dir'] = '选择备份目录';
$l['select_date'] = '选择备份日期';
$l['select_vps'] = '选择 '.VM_SHORT;
$l['local'] = '本地';
$l['other'] = '其他';
$l['scan'] = '扫描';
$l['restore'] = '恢复';
$l['restore_new'] = '恢复到新的 '.VM_SHORT;
$l['no_backup_found'] = '目录中未找到备份';
$l['no_vpsid'] = '指定的vpsid无效';
$l['no_dir'] = '指定的备份目录无效';
$l['no_date'] = '指定的备份日期无效';
$l['no_backup_date'] = '此日期没有备份';
$l['done_restore'] = '恢复进程已启动并在后台运行。';
$l['done_delete'] = '备份已成功删除。';
$l['conf_res_new'] = '您确定要将其恢复到新的 '.VM_SHORT.' 吗？';
$l['conf_res'] = '您确定要恢复此备份吗？';
$l['conf_del'] = '您确定要删除此备份吗？';
$l['size'] = '大小';
$l['name'] = '名称';
$l['or'] = '或';
$l['select_user'] = '选择用户';
$l['select_user_exp'] = '选择 '.VM_SHORT.' 的用户';
$l['hostname'] = '主机名';
$l['hostname_exp'] = '输入 '.VM_SHORT.' 的主机名。例如：www.domain.com';
$l['no_hostname'] = '请输入有效的主机名';
$l['no_uid'] = '请选择有效的用户';
$l['list_tasks'] = '最近20个恢复任务';
$l['actid'] = '任务ID';
$l['user'] = '用户';
$l['server'] = '服务器';
$l['status'] = '状态';
$l['progress'] = '进度';
$l['logs'] = '日志';
$l['no_tasks'] = '未找到恢复任务';
$l['select_storage'] = '选择存储';
$l['select_storage_exp'] = '选择 '.VM_SHORT.' 磁盘的存储';
$l['select_server'] = '选择服务器';
$l['select_server_exp'] = '选择要恢复 '.VM_SHORT.' 备份的服务器';
$l['select_os'] = '选择操作系统';
$l['select_os_exp'] = '请选择操作系统以显示此 '.VM_SHORT.' 的发行版标志';
$l['select_iso'] = '选择ISO';
$l['select_iso_exp'] = '请选择ISO以显示此 '.VM_SHORT.' 的发行版标志';
$l['err_no_os'] = '请选择操作系统';
$l['os_note'] = '<b>注意：</b>我们不会使用所选操作系统格式化 '.VM_SHORT;
$l['free'] = '空闲';
$l['ips'] = 'IP地址数量';
$l['ips_exp'] = '您可以指定要分配的IP数量';
$l['ips_ind'] = 'IP地址';
$l['ips_ind_exp'] = '您可以指定要分配的IP';
$l['ips6'] = 'IPv6地址数量';
$l['ips6_exp'] = '您可以指定要分配的IPv6数量';
$l['ips6_subnet'] = 'IPv6子网数量';
$l['ips6_subnet_exp'] = '您可以指定要分配的IPv6子网数量';
$l['ips_int'] = '内部IP地址数量';
$l['ips_int_exp'] = '您可以指定要分配的内部IP数量';
$l['ips_int_ind'] = '内部IP地址';
$l['ips_int_ind_exp'] = '您可以指定要分配的内部IP';

// 错误信息
$l['err_bkup_server_not_found'] = '找不到备份服务器';
$l['err_deleting_backup'] = '删除 '.VM_SHORT.' 备份时出错';
$l['err_invalid_dir'] = '请指定有效的备份目录';
$l['err_bkup_server_notfound'] = '未找到备份服务器';
$l['err_inf'] = '获取备份信息时出错';
$l['err_vps_virt_inv'] = '要恢复的 '.VM_SHORT.' 的虚拟化类型不受此服务器支持！';
$l['err_vps_not_found'] = '面板上不存在此 '.VM_SHORT.'。请使用“恢复到新的 '.VM_SHORT.'”从备份创建新的 '.VM_SHORT.'。';
$l['err_backuply_no_vps'] = '面板上不存在此 '.VM_SHORT;
$l['err_restore'] = '恢复 '.VM_SHORT.' 时出错。请查看 '.VM_SHORT.' 备份日志以获取完整信息。';
$l['err_no_bkup_settings'] = '此 '.VM_SHORT.' 没有任何备份设置。';
$l['task_notcomplete'] = '任务无法完成。';
$l['err_storage_not_found'] = '找不到您提交的存储（UUID: {{uuid}}）。';
$l['err_inv_storage'] = '您为磁盘: {{disk_num}} 提交的存储格式为: "{{storage_format}}"，但备份磁盘的格式为: "{{disk_format}}"';
$l['bus_driver'] = '总线驱动';
$l['bus_driver_num'] = '总线驱动编号';
$l['no_htime'] = '提供的文件名无效';
$l['no_time'] = '提供的链日期无效';
$l['err_no_os_temp'] = '此 '.VM_SHORT.' 的inf文件中提到的操作系统不存在。这可能是因为操作系统已从面板中删除或其条目已从数据库中删除。';
$l['err_os_size_mismatch'] = '大小信息与数据库中的信息和操作系统模板文件大小不匹配。这可能是由于下载不完整或磁盘空间不足。';
$l['err_no_plan'] = '我们无法从inf文件中找到 '.VM_SHORT.' 计划';
$l['err_no_backup_plan'] = '我们无法从inf文件中找到备份计划';