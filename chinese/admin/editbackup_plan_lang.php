<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editbackup_plan_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 2.8.1
// 受“成为最好的”这一愿望启发
// ----------------------------------------------------------
// 开始人: Husain
// 日期: 2015年11月16日
// 时间: 15:33
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

$l['<title>'] = '编辑备份计划';
$l['editbackup_plan'] = '编辑备份计划';
$l['slave_cant'] = '编辑备份计划错误';
$l['slave_cant_exp'] = '从服务器不允许编辑备份计划！';
$l['plannameexist'] = '计划名称已存在';
$l['planname'] = '计划名称';
$l['nameofplan'] = '此计划的名称';
$l['sel_backupserver'] = '备份服务器';
$l['exp_sel_backupserver'] = '备份将保存到的服务器';
$l['backup_freq'] = '备份频率';
$l['exp_backup_freq'] = '备份过程运行的频率';
$l['backup_time'] = '时间';
$l['exp_backup_time'] = '备份过程开始的时间';
$l['backup_day'] = '备份日';
$l['exp_backup_day'] = '备份运行的指定日期';
$l['backup_date'] = '备份日期';
$l['exp_backup_date'] = '备份运行的指定日期';
$l['backup_month'] = '备份月份';
$l['exp_backup_month'] = '备份运行的指定月份';
$l['freq_daily'] = '每日';
$l['freq_weekly'] = '每周';
$l['freq_monthly'] = '每月';
$l['freq_hourly'] = '每小时';
$l['freq_manual'] = '手动';
$l['backup_hourly'] = '每隔';
$l['exp_backup_hourly'] = '每小时备份频率';
$l['hrs'] = '小时';
$l['min'] = '分钟';
$l['backup_rotation'] = '备份轮换';
$l['exp_backup_rotation'] = '每个 '.VM_SHORT.' 允许的备份数量';
$l['backup_limit'] = '终端用户备份';
$l['exp_backup_limit'] = '每月 '.VM_SHORT.' 用户可以执行的最大手动备份操作数';
$l['restore_limit'] = '终端用户恢复';
$l['exp_restore_limit'] = '每月 '.VM_SHORT.' 用户可以执行的最大恢复操作数';
$l['enable_enduser_backup_servers'] = '启用终端用户备份服务器';
$l['exp_enable_enduser_backup_servers'] = '允许 '.VM_SHORT.' 用户选择自己的备份服务器存储备份。<br /><b>注意：</b>如果主设置中被覆盖，则此设置将被忽略';
$l['disabled'] = '已禁用';
$l['unlimited'] = '无限';
$l['select'] = '选择....';
$l['done'] = '备份计划已成功保存';
$l['submit'] = '提交';
$l['nice'] = '进程优先级';
$l['nice_exp'] = '备份进程将获得的CPU时间。19（最不优先）到-20（最优先）';
$l['ionice_class'] = '进程I/O类别';
$l['ionice_class_exp'] = '备份进程的I/O类别';
$l['ionice_prio'] = '进程I/O优先级';
$l['ionice_prio_exp'] = '备份进程的I/O优先级';
$l['backup_compression'] = '禁用压缩';
$l['exp_backup_compression'] = '禁用备份压缩。此设置仅对KVM、Xen-HVM和OpenVZ生效。<br />对于KVM文件类型的 '.VM_SHORT.'，此设置仅对QCOW2磁盘有效。';
$l['sel_type']= '备份类型';
$l['local_dir'] = '目录';
$l['exp_local_dir'] = '备份将存储的目录路径。对于本地备份，该路径必须事先在服务器上<b>挂载</b>。<b>例如</b>: "/Your-Dir"';
$l['err_saving'] = '保存备份计划时出错';
$l['no_backupserver'] = '未选择备份服务器';
$l['no_freq'] = '未指定备份频率';
$l['no_time'] = '未指定备份时间';
$l['no_hourly_freq'] = '未指定小时备份频率';
$l['no_rotation'] = '未指定轮换值';
$l['no_nice'] = '未指定进程优先级';
$l['no_ionice_prio'] = '未指定I/O优先级';
$l['no_ionice_class'] = '未指定I/O类别';
$l['no_type'] = '未指定备份类型';
$l['no_dir'] = '未指定备份目录';
$l['no_plan_name'] = '未指定计划名称';
$l['no_backup_limit'] = '未指定备份限制';
$l['no_restore_limit'] = '未指定恢复限制';
$l['inv_backup_type'] = '指定了无效的备份类型';
$l['inv_freq'] = '指定了无效的备份频率';
$l['inv_hourly_freq'] = '指定了无效的小时备份频率';
$l['inv_time'] = '指定了无效的备份时间';
$l['inv_day'] = '指定了无效的备份日';
$l['inv_date'] = '指定了无效的备份日期';
$l['inv_rotation'] = '指定了无效的备份轮换值';
$l['inv_backup_limit'] = '指定了无效的手动备份限制';
$l['inv_restore_limit'] = '指定了无效的手动恢复限制';
$l['inv_nice'] = '指定了无效的进程优先级';
$l['inv_ionice_prio'] = '指定了无效的I/O优先级';
$l['inv_ionice_class'] = '指定了无效的进程I/O类别';
$l['ssh_server_error'] = '您选择的备份服务器类型为 <b>&soft-1;</b>，而备份类型为 <b>&soft-2;</b>';
$l['err_save_slave'] = '保存备份计划时出错。请确保从服务器正常工作。';
$l['err_backup_dir'] = '备份目录不能为空';
$l['list_tasks'] = '此计划的最近50个备份/恢复任务';
$l['no_tasks'] = '没有正在运行的任务';
$l['start_immediate_backup'] = '开始立即备份';
$l['take_full_backup'] = '进行完全备份';
$l['take_inc_backup'] = '进行增量备份';
$l['err_backup_now'] = '启动 '.VM_SHORT.' 备份过程时出错';
$l['done_backup_now'] = ' '.VM_SHORT.' 备份过程已在后台启动';
$l['not_started'] = '任务未启动';
$l['not_updated'] = '任务未更新';
$l['not_ended'] = '任务未结束';
$l['backup_disabled'] = '禁用';
$l['exp_backup_disabled'] = '禁用此备份计划';
$l['list_vs'] = '此备份计划中的 '.VM_SHORT.' 列表';
$l['hostname'] = '主机名';
$l['space'] = '空间';
$l['no_vps_in_plan'] = '此备份计划中没有分配 '.VM_SHORT;
$l['err_backup_dir_not_absolute'] = '备份目录应为本地/SSH备份的绝对路径。<b>例如</b>: "/Your-Dir"';
$l['err_ssh_conn'] = '无法连接到SSH备份服务器';
$l['err_ftp_connect'] = '无法连接到FTP备份服务器';
$l['err_create_backup_folder'] = '创建备份目录时出错。请检查用户是否具有正确的读/写权限，或是否有足够的空间进行备份';
$l['err_create_backup_date_folder'] = '创建备份日期目录时出错。请检查用户是否具有正确的读/写权限，或是否有足够的空间进行备份';
$l['check_dir_permissions'] = '保存时检查目录权限';
$l['exp_check_dir_permissions'] = '如果选中，将在保存备份计划时检查本地/备份服务器的目录权限，以确保备份不会失败';
$l['addvoption'] = '高级选项';
$l['backup_server_per_region'] = '每个服务器/服务器组的备份服务器';
$l['backup_server_per_region_exp'] = '为每个从服务器/服务器组分配不同的备份服务器。此设置将覆盖上面指定的默认备份服务器';
$l['default'] = '默认';
$l['server_group_header'] = '服务器/服务器组';
$l['default_dir'] = '为空时默认';
$l['inv_bs_group'] = '为[组]{{server_group}}指定了无效的备份服务器';
$l['inv_bs_server'] = '为{{server}}指定了无效的备份服务器';
$l['io_limit'] = '进程I/O速度限制（Mbps）';
$l['exp_io_limit'] = '备份过程的I/O速度限制（Mbps）。设置为0表示无限制。仅在写入I/O操作时生效';
$l['inv_io_limit'] = '指定了无效的I/O速度限制';
$l['backup_primary'] = '主备份';
$l['primary_backup_exp'] = '如果启用，将只备份主磁盘';
$l['disable_suspended_vm'] = '禁用挂起的 '.VM_SHORT;
$l['disable_suspended_vm_exp'] = '如果选中，将不对挂起的 '.VM_SHORT.' 进行备份';

// 增量备份语言
$l['backup_scheme'] = '备份方案';
$l['backup_scheme_exp'] = '选择 '.VM_SHORT.' 的备份方案';
$l['always_full'] = '始终完全备份';
$l['always_incremental'] = '始终增量备份';
$l['weekly_full_daily_incremental'] = '每周完全备份，每日增量备份';
$l['monthly_full_weekly_diff_daily_incremental'] = '每月完全备份，每周差异备份，每日增量备份';
$l['weekly_full_freq'] = '每周完全备份频率';
$l['weekly_full_daily_inc_freq'] = '每日增量备份频率';
$l['monthly_full_freq'] = '每月完全备份频率';
$l['weekly_diff_freq'] = '每周差异备份频率';
$l['weekly_diff_daily_inc_freq'] = '每日增量备份频率';
$l['custom_full'] = '自定义完全备份频率';
$l['custom_inc'] = '自定义增量备份频率';
$l['custom_diff'] = '自定义差异备份频率';
$l['enable_manual_backup'] = '启用手动备份';
$l['exp_enable_manual_backup'] = '如果启用，则备份不会自动启动，但在手动备份时将遵循与备份方案相同的模式';
$l['click_set_cron'] = '点击设置Cron任务';
$l['custom'] = '自定义';
$l['no_backup_scheme'] = '未选择备份方案';
$l['no_always_cronjob'] = '请提供备份频率的Cron设置';
$l['no_weekly_full_cronjob'] = '请提供每周完全备份频率的Cron设置';
$l['no_daily_inc_cronjob'] = '请提供每日增量备份频率的Cron设置';
$l['no_monthly_full_cronjob'] = '请提供每月完全备份频率的Cron设置';
$l['no_weekly_diff_cronjob'] = '请提供每周差异备份频率的Cron设置';
$l['no_custom_full_cronjob'] = '请提供自定义完全备份频率的Cron设置';
$l['no_custom_inc_cronjob'] = '请提供自定义增量备份频率的Cron设置';
$l['no_custom_diff_cronjob'] = '请提供自定义差异备份频率的Cron设置';
$l['all_days'] = '所有日期';
$l['all_dates'] = '所有日期';
$l['all_months'] = '所有月份';

// cronjob_lang.php
$l['c_err_invalid_minute'] = '分钟字段格式不正确';
$l['c_err_invalid_hour'] = '小时字段格式不正确';
$l['c_err_invalid_day'] = '日期字段格式不正确';
$l['c_err_invalid_month'] = '月份字段格式不正确';
$l['c_err_invalid_weekday'] = '星期字段格式不正确';
$l['cr_submit_button'] = '添加Cron任务';
$l['c_option'] = '选项';
$l['c_sun'] = '星期天';
$l['c_mon'] = '星期一';
$l['c_tues'] = '星期二';
$l['c_wed'] = '星期三';
$l['c_thur'] = '星期四';
$l['c_fri'] = '星期五';
$l['c_sat'] = '星期六';
$l['backuply_warning'] = '增量备份仅支持KVM、Virtuozzo机器，对于其他内核将执行完全备份！它要求在相应的节点上安装Backuply许可，'.VM_SHORT.' 才能启用';
$l['enable_legacy_backup'] = '启用传统备份';
$l['enable_legacy_backup_exp'] = '如果启用，则始终使用传统方法执行完全备份，而不是Backuply方法。<br><b>注意：</b>此设置仅适用于完全备份。';

?>
