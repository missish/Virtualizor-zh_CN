<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addbackup_plan_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 2.8.1
// 灵感来源于追求成为最优秀的目标
// ----------------------------------------------------------
// 开始者: Husain
// 日期:       2015年11月11日
// 时间:       16:20
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

$l['<title>'] = '添加备份计划';
$l['addbackup_plan'] = '添加备份计划';
$l['add_backupserver'] = '添加备份服务器';
$l['slave_cant'] = '添加备份计划错误';
$l['slave_cant_exp'] = '不允许在从服务器上添加备份计划！';
$l['plan_server'] = '服务器';
$l['exp_plan_server'] = '选择要添加备份计划的服务器';
$l['planname'] = '计划名称';
$l['nameofplan'] = '此计划的名称';
$l['sel_backupserver'] = '备份服务器';
$l['exp_sel_backupserver'] = '备份将保存的服务器';
$l['backup_freq'] = '备份频率';
$l['exp_backup_freq'] = '备份进程的运行频率';
$l['backup_time'] = '时间';
$l['exp_backup_time'] = '备份进程开始的时间';
$l['backup_day'] = '备份日期';
$l['exp_backup_day'] = '备份运行的指定日期';
$l['backup_date'] = '备份日期';
$l['exp_backup_date'] = '每月运行备份的指定日期';
$l['backup_month'] = '备份月份';
$l['exp_backup_month'] = '备份运行的指定月份';
$l['freq_daily'] = '每日';
$l['freq_weekly'] = '每周';
$l['freq_monthly'] = '每月';
$l['freq_hourly'] = '每小时';
$l['freq_manual'] = '手动';
$l['backup_hourly'] = '每';
$l['exp_backup_hourly'] = '每小时备份频率';
$l['hrs'] = '小时';
$l['min'] = '分钟';
$l['backup_rotation'] = '备份轮换';
$l['exp_backup_rotation'] = '每个 '.VM_SHORT.' 允许的备份数量';
$l['enable_manual_backup'] = '启用手动备份';
$l['exp_enable_manual_backup'] = '允许用户手动启动备份操作';
$l['backup_limit'] = '最终用户备份';
$l['exp_backup_limit'] = '每月最终用户可以执行的手动备份操作的最大数量';
$l['restore_limit'] = '最终用户恢复';
$l['exp_restore_limit'] = '每月最终用户可以执行的恢复操作的最大数量';
$l['enable_enduser_backup_servers'] = '启用最终用户备份服务器';
$l['exp_enable_enduser_backup_servers'] = '允许最终用户选择自己的备份服务器来存储备份。<br /><b>注意：</b>如果在主设置中被覆盖，则此设置将被忽略';
$l['disabled'] = '禁用';
$l['unlimited'] = '无限制';
$l['select'] = '选择....';
$l['done'] = '备份计划已成功保存';
$l['submit'] = '提交';
$l['nice'] = '进程优先级';
$l['nice_exp'] = '备份进程将获得的 CPU 时间，19（最不优先）到 -20（最优先）';
$l['ionice_class'] = '进程 I/O 类别';
$l['ionice_class_exp'] = '备份进程的 I/O 类别';
$l['ionice_prio'] = '进程 I/O 优先级';
$l['ionice_prio_exp'] = '备份进程的 I/O 优先级';
$l['backup_compression'] = '禁用压缩';
$l['exp_backup_compression'] = '禁用备份的压缩。仅对 KVM、Xen-HVM 和 OpenVZ 生效。<br />对于 KVM 基于文件的 '.VM_SHORT.'，仅对 QCOW2 磁盘生效。';
$l['sel_type']= '备份类型';
$l['local_dir'] = '目录';
$l['exp_local_dir'] = '备份存储的目录路径。对于本地备份，此路径必须事先在服务器上<b>挂载</b>。<b>例如</b>："/Your-Dir"';
$l['err_saving'] = '保存备份计划时发生错误';
$l['no_backupserver'] = '未选择备份服务器';
$l['no_freq'] = '未指定备份频率';
$l['no_time'] = '未指定备份时间';
$l['no_hourly_freq'] = '未指定每小时频率值';
$l['no_rotation'] = '未指定轮换值';
$l['no_nice'] = '未指定进程优先级';
$l['no_ionice_prio'] = '未指定 I/O 优先级';
$l['no_ionice_class'] = '未指定 I/O 类别';
$l['no_type'] = '未指定备份类型';
$l['no_dir'] = '未指定备份目录';
$l['no_plan_name'] = '未指定计划名称';
$l['no_backup_limit'] = '未指定备份限制';
$l['no_restore_limit'] = '未指定恢复限制';
$l['inv_backup_type'] = '指定的备份类型无效';
$l['inv_freq'] = '指定的备份频率无效';
$l['inv_hourly_freq'] = '指定的每小时频率无效';
$l['inv_time'] = '指定的备份时间无效';
$l['inv_day'] = '指定的备份日期无效';
$l['inv_date'] = '指定的备份日期无效';
$l['inv_rotation'] = '指定的备份轮换无效';
$l['inv_backup_limit'] = '指定的手动备份限制无效';
$l['inv_restore_limit'] = '指定的手动恢复限制无效';
$l['inv_nice'] = '指定的进程优先级无效';
$l['inv_ionice_prio'] = '指定的进程 I/O 优先级无效';
$l['inv_ionice_class'] = '指定的进程 I/O 类别无效';
$l['ssh_server_error'] = '你选择的备份服务器类型为 <b>&soft-1;</b>，而备份类型为 <b>&soft-2;</b>';
$l['plannameexist'] = '计划名称已存在。请提供一个不同的名称。';
$l['err_save_slave'] = '在从服务器上保存备份计划时发生错误。请确保从服务器正常运行。';
$l['err_backup_dir'] = '备份目录不能为空';
$l['backup_disabled'] = '禁用';
$l['exp_backup_disabled'] = '禁用此备份计划';
$l['err_backup_dir_not_absolute'] = '备份目录应该是本地/SSH备份的绝对路径。<b>例如</b>："/Your-Dir"';
$l['err_ssh_conn'] = '无法连接到 SSH 备份服务器';
$l['err_ftp_connect'] = '无法连接到 FTP 备份服务器';
$l['err_create_backup_folder'] = '创建备份目录时发生错误。请检查用户是否具有适当的读/写权限或是否有足够的空间进行备份。';
$l['err_create_backup_date_folder'] = '创建备份日期目录时发生错误。请检查用户是否具有适当的读/写权限或是否有足够的空间进行备份。';
$l['check_dir_permissions'] = '保存时检查目录权限';
$l['exp_check_dir_permissions'] = '如果选中，则会在保存备份计划时检查本地/远程备份服务器目录权限，以确保备份不会失败';
$l['addvoption'] = '高级选项';
$l['backup_server_per_region'] = '每个服务器/服务器组的备份服务器';
$l['backup_server_per_region_exp'] = '为每个从服务器/服务器组分配一个不同的备份服务器。此设置将覆盖上面指定的默认备份服务器。';
$l['default'] = '默认';
$l['server_group_header'] = '服务器/服务器组';
$l['default_dir'] = '如果为空则为默认';
$l['inv_bs_group'] = '指定的备份服务器无效： [Group] {{server_group}}';
$l['inv_bs_server'] = '指定的备份服务器无效： {{server}}';
$l['io_limit'] = '进程 I/O 速度限制（Mbps）';
$l['exp_io_limit'] = '备份进程的 I/O 速度限制（Mbps）。设置为 0 表示无限制。仅在写入 I/O 操作时生效。';
$l['inv_io_limit'] = '指定的 I/O 速度限制无效';
$l['backup_primary'] = '主备份';
$l['primary_backup_exp'] = '如果启用，则只会备份主磁盘';
$l['disable_suspended_vm'] = '禁用暂停的 '.VM_SHORT;
$l['disable_suspended_vm_exp'] = '如果选中，则不会备份暂停的 '.VM_SHORT;

$l['backup_scheme'] = '备份方案';
$l['backup_scheme_exp'] = '选择 '.VM_SHORT.' 的备份方案';
$l['always_full'] = '始终完全备份';
$l['always_incremental'] = '始终增量备份';
$l['weekly_full_daily_incremental'] = '每周全备份，每日增量备份';
$l['monthly_full_weekly_diff_daily_incremental'] = '每月全备份，每周差异备份，每日增量备份';
$l['weekly_full_freq'] = '每周全备份频率';
$l['weekly_full_daily_inc_freq'] = '每日增量备份频率';
$l['monthly_full_freq'] = '每月全备份频率';
$l['weekly_diff_freq'] = '每周差异备份频率';
$l['weekly_diff_daily_inc_freq'] = '每日增量备份频率';
$l['custom_full'] = '自定义全备份频率';
$l['custom_inc'] = '自定义增量备份频率';
$l['custom_diff'] = '自定义差异备份频率';
$l['enable_manual_backup'] = '启用手动备份';
$l['exp_enable_manual_backup'] = '如果启用，则备份不会自动启动，而是按照备份方案的模式手动备份';
$l['click_set_cron'] = '点击设置 cron';
$l['custom'] = '自定义';
$l['no_backup_scheme'] = '未选择备份方案';
$l['no_always_cronjob'] = '请提供备份频率的 cron';
$l['no_weekly_full_cronjob'] = '请提供每周全备份频率的 cron';
$l['no_daily_inc_cronjob'] = '请提供每日增量备份频率的 cron';
$l['no_monthly_full_cronjob'] = '请提供每月全备份频率的 cron';
$l['no_weekly_diff_cronjob'] = '请提供每周差异备份频率的 cron';
$l['no_custom_full_cronjob'] = '请提供自定义全备份频率的 cron';
$l['no_custom_inc_cronjob'] = '请提供自定义增量备份频率的 cron';
$l['no_custom_diff_cronjob'] = '请提供自定义差异备份频率的 cron';
$l['all_days'] = '所有天';
$l['all_dates'] = '所有日期';
$l['all_months'] = '所有月份';

$l['c_err_invalid_minute'] = '分钟字段格式不正确';
$l['c_err_invalid_hour'] = '小时字段格式不正确';
$l['c_err_invalid_day'] = '日期字段格式不正确';
$l['c_err_invalid_month'] = '月份字段格式不正确';
$l['c_err_invalid_weekday'] = '星期字段格式不正确';
$l['cr_submit_button'] = '添加 Cron 任务';
$l['c_option'] = '选项';
$l['c_sun'] = '星期日';
$l['c_mon'] = '星期一';
$l['c_tues'] = '星期二';
$l['c_wed'] = '星期三';
$l['c_thur'] = '星期四';
$l['c_fri'] = '星期五';
$l['c_sat'] = '星期六';
$l['backuply_warning'] = '增量备份仅在 KVM 和 Virtuozzo 虚拟机中支持，对于其他内核，将进行完全备份！它需要在相应节点上为 '.VM_SHORT.' 配置 Backuply 许可证。';
$l['enable_legacy_backup'] = '启用传统备份';
$l['enable_legacy_backup_exp'] = '如果启用，则始终使用旧方法进行完全备份，而不是 Backuply 方法。<br> <b>注意：</b>此设置仅适用于完全备份。';

?>
