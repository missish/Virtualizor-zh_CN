<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addserver_lang.php
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

$l['slave_task'] = '任务页面错误';
$l['slave_task_exp'] = '从服务器无法访问任务页面';

// 主题字符串
$l['<title>'] = '任务列表';
$l['no_tasks'] = '当前没有活动任务。';
$l['percent'] = '百分比';
$l['avg_speed'] = '平均速度';
$l['from_server'] = '从服务器';
$l['to_server'] = '到服务器';
$l['vps_name'] = VM_SHORT.' 名称';
$l['new_vps_name'] = '新 '.VM_SHORT.' 名称';
$l['actid'] = 'Actid';
$l['vpsid'] = VM_SHORT.' ID';
$l['user'] = '用户';
$l['action'] = '操作';
$l['status'] = '状态';
$l['addvs'] = '创建 '.VM_SHORT;
$l['addvs_restore'] = '创建 '.VM_SHORT.' 用于恢复';
$l['fstab_handle'] = 'FS 表处理';
$l['deletevs'] = '删除 '.VM_SHORT;
$l['delete_backup_cron'] = '删除 '.VM_SHORT.' 备份';
$l['migrateprog'] = '迁移 '.VM_SHORT;
$l['migratedest'] = '迁移 '.VM_SHORT;
$l['multivirt'] = '启用多虚拟化';
$l['createtemplate'] = '创建模板';
$l['getos'] = '下载操作系统';
$l['addiso'] = '添加 ISO';
$l['rebuildvs'] = '重建 '.VM_SHORT;
$l['resizevps'] = '调整 '.VM_SHORT.' 大小';
$l['bandwidth_unsuspend'] = '解除带宽挂起';
$l['removed_speed_capped'] = '恢复网络速度';
$l['restorevps'] = '恢复 '.VM_SHORT;
$l['vpsbackups'] = '备份 '.VM_SHORT;
$l['restore'] = '恢复 '.VM_SHORT;
$l['backup'] = '备份 '.VM_SHORT;
$l['change_dnsnameserver'] = '更改 DNS 名称服务器';
$l['change_winips'] = '配置 Windows IP';
$l['changepassword'] = '更改 '.VM_SHORT.' 密码';
$l['sync_config'] = '同步配置';
$l['install_cp'] = '安装控制面板';
$l['install_recipe'] = '安装配方';
$l['hostname'] = '更改 '.VM_SHORT.' 主机名';
$l['editxcpvs'] = '编辑 XCP '.VM_SHORT;
$l['error'] = '错误';
$l['inprogress'] = '进行中';
$l['order'] = '排序';
$l['asc'] = '升序';
$l['desc'] = '降序';
$l['submit'] = '搜索';
$l['progress'] = '进度';
$l['completed'] = '已完成';
$l['task_notcomplete'] = '任务无法完成。';
$l['task_notupdated'] = '任务超过一小时未更新！';
$l['task_notupdated_status'] = 'Virtualizor 已丢失进程的跟踪。';
$l['migrate_speed'] = '迁移速度：';
$l['date'] = '日期';
$l['started'] = '开始时间';
$l['updated'] = '更新时间';
$l['ended'] = '结束时间';
$l['notupdated'] = '未更新';
$l['server'] = '服务器';
$l['id'] = 'ID';
$l['unslaved'] = '未从属的服务器';
$l['not_started'] = '任务未开始';
$l['not_updated'] = '任务未更新';
$l['not_ended'] = '任务未结束';
$l['start_vps'] = VM_SHORT.' 启动';
$l['start_vps_error'] = '启动 '.VM_SHORT.' 时出错';
$l['restart_vps'] = VM_SHORT.' 重启';
$l['restart_vps_error'] = '重启 '.VM_SHORT.' 时出错';
$l['stop_vps'] = VM_SHORT.' 停止';
$l['stop_vps_error'] = '停止 '.VM_SHORT.' 时出错';
$l['poweroff_vps'] = VM_SHORT.' 关机';
$l['poweroff_vps_error'] = '关闭 '.VM_SHORT.' 时出错';
$l['migrate2'] = '迁移';
$l['mig_prepare'] = '准备迁移';
$l['preparing'] = '准备中';
$l['suspend_callback'] = '挂起回调';
$l['unsuspend_callback'] = '解除挂起回调';
$l['terminate_callback'] = '终止 '.VM_SHORT.' 回调';
$l['editvps_callback'] = '编辑 '.VM_SHORT.' 回调';
$l['bandwidth_overusage_callback'] = '带宽超额使用回调';
$l['multimigrateprog'] = '多重迁移';
$l['transferred'] = '已传输';
$l['eta'] = '预计完成时间';
$l['speed'] = '速度';
$l['cloneprog'] = '克隆 '.VM_SHORT;
$l['clone_speed'] = '克隆速度：';
$l['clone2'] = '克隆 '.VM_SHORT;
$l['clone_prepare'] = '准备克隆进程';
$l['multicloneprog'] = '多重克隆';
$l['remotedesktop'] = '远程桌面任务';
$l['change_vncpass'] = '更改 VNC 密码';
$l['installxentools'] = '安装 Xen 工具';
$l['multi_deletevs'] = '删除 '.VM_SHORT.'(s)';
$l['create_vps'] = '创建 '.VM_SHORT.' 操作';
$l['edit_vps'] = '编辑 '.VM_SHORT.' 操作';
$l['edit_logs'] = VM_SHORT.' 编辑日志';

$l['get_crt'] = 'SSL 安装证书';
$l['renew_crt'] = 'SSL 续订证书';
$l['cron_crt'] = 'SSL 续订证书定时任务';
$l['logs'] = '日志';
$l['show_logs'] = '显示';
$l['no_logs'] = '无可用日志';
$l['common_logs'] = '显示的日志是 Virtualizor 为此任务执行的最后操作';
$l['editvzkvs'] = '编辑 Virtuozzo KVM '.VM_SHORT;
$l['enable_rescuevs'] = '启用救援模式';
$l['disable_rescuevs'] = '禁用救援模式';
$l['delete_vpsdisks'] = '删除 '.VM_SHORT.' 磁盘';
$l['installtools'] = '安装客户工具';
$l['restorevps_plan'] = VM_SHORT.' 恢复';
$l['vpsbackups_plan'] = VM_SHORT.' 备份';
$l['backuply_restorevps_plan'] = VM_SHORT.' Backuply 恢复';
$l['backuply_vpsbackups_plan'] = VM_SHORT.' Backuply 备份';

$l['haproxy_cron'] = 'HAProxy 重建';
$l['suspend_vps'] = '挂起 '.VM_SHORT;
$l['unsuspend_vps'] = '解除挂起 '.VM_SHORT;

$l['addsshkeys'] = '添加 SSH 密钥';
$l['removesshkeys'] = '删除 SSH 密钥';
$l['dbbackups'] = '数据库备份';

$l['save_euiso'] = '添加 ISO';
$l['delete_euiso'] = '删除 ISO';

$l['install_script'] = '安装应用程序';
$l['sync_media'] = '媒体同步';

$l['installha'] = '安装高可用性';

$l['updates'] = '服务器更新';
$l['update_servers'] = '多服务器更新';
$l['migrate_disk2'] = '迁移磁盘';
$l['changedisk'] = '更改磁盘';

//Fstrim 语言
$l['fstrim_handle'] = 'Fstrim 处理';

$l['quick_search'] = '快速搜索 (actid, vpsid, user, action)';
$l['exportascsv'] = '导出 '.VM_SHORT.' 详细信息';
$l['vertical_ram'] = '内存扩展';
$l['vertical_cpu'] = 'CPU 扩展';

$l['addvolume'] = '添加卷';
$l['delete_volume'] = '删除卷';
$l['resize_volume'] = '调整卷大小';
$l['detach_volume'] = '分离卷';
$l['hotplug_disk'] = '热插拔卷';

$l['install_ga'] = '安装 qemu 客户代理';
$l['apply_lb_rule'] = '应用负载均衡规则';

$l['updatevpsfirewall'] = '更新防火墙计划';
$l['updatevpsfirewallplan'] = '更新 '.VM_SHORT.' 的防火墙计划';
$l['bulk_vps_firewall_apply'] = '为多个 '.VM_SHORT.' 应用防火墙规则';
$l['completing_setup'] = '完成 '.VM_SHORT.' 设置';
?>