<?php

//////////////////////////////////////////////////////////////
//===========================================================
// vs_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来源于成为最好的渴望
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

$l['err_destroyvps'] = '销毁 '.VM_SHORT.' 时出错';
$l['err_save_slave'] = '在从服务器上保存 '.VM_SHORT.' 数据时出错。请确保从服务器正在运行。';
$l['err_slave_delete'] = '从节点无法删除任何 '.VM_SHORT.'。请仅从主服务器删除 '.VM_SHORT.'。';
$l['err_suspendvps'] = '暂停 '.VM_SHORT.' 时出错';
$l['err_unsuspendvps'] = '尝试取消暂停 '.VM_SHORT.' 时出错';
$l['err_unsuspendvps_status'] = '取消暂停后，'.VM_SHORT.' 状态检查失败';
$l['err_not_allowed'] = '您无权访问此页面';
$l['rescue_del_no_allowed'] = '您不能删除处于救援模式的 '.VM_SHORT;

$l['<title>'] = VM_LONG;
$l['page_head'] = VM_LONG;
$l['done'] = VM_SHORT.' 已成功删除';
$l['done_sus'] = VM_SHORT.' 已暂停';
$l['done_unsus'] = VM_SHORT.' 已取消暂停';
$l['no_res'] = '未找到与您的搜索查询匹配的结果';
$l['no_vs'] =  '没有 '.VM_LONG.' <a href="'.$globals['index'].'act=addvs">现在添加 '.VM_SHORT.'</a>';
$l['vpsname'] = 'VID';
$l['vpsip'] = 'IP';
$l['vpshostname'] = '主机名';
$l['submit'] = '搜索';
$l['lv_cid'] = 'VID';
$l['lv_id'] = 'ID';
$l['lv_type'] = '类型';
$l['lv_os'] = '操作系统';
$l['lv_hostname'] = '主机名';
$l['lv_ram'] = '内存';
$l['lv_server'] = '服务器';
$l['lv_burst'] = '突发';
$l['lv_swap'] = '交换';
$l['lv_bandwidth'] = '带宽';
$l['lv_cpu'] = 'CPU';
$l['lv_ip'] = 'IP';
$l['lv_mb'] = 'MB';
$l['lv_gb'] = 'GB';
$l['unlimited'] = '无限制';
$l['lv_space'] = '空间';
$l['lv_core'] = '核心';
$l['lv_cpup'] = 'CPU %';
$l['lv_vnc'] = 'VNC';
$l['lv_nic'] = '网卡类型';
$l['lv_vif'] = 'VIF 类型';
$l['lv_enabled'] = '启用';
$l['lv_disabled'] = '禁用';
$l['lv_user'] = '用户';
$l['no_info'] = '无信息';
$l['band_reset'] = '重置';
$l['conf_bwreset'] = '您确定要重置带宽吗？';
$l['done_bwreset'] = '带宽已成功重置';

$l['conf_del'] = '您确定要删除这些 '.VM_SHORT.'(s) 吗？';

$l['conf_sus'] = '您确定要暂停此 '.VM_SHORT.' 吗？';
$l['conf_unsus'] = '您确定要取消暂停此 '.VM_SHORT.' 吗？';
$l['conf_susnetwork'] = '您确定要暂停此 '.VM_SHORT.' 的网络吗？';
$l['conf_unsusnetwork'] = '您确定要取消暂停此 '.VM_SHORT.' 的网络吗？';
$l['suspend_vs'] = '暂停 '.VM_SHORT;
$l['unsuspend_vs'] = '取消暂停 '.VM_SHORT;
$l['suspend_ntw'] = '暂停 '.VM_SHORT.' 网络';
$l['unsuspend_ntw'] = '取消暂停 '.VM_SHORT.' 网络';
$l['add_vs'] = '添加 '.VM_LONG;
$l['add_vs_xenhvm'] = '添加 Xen HVM '.VM_LONG;
$l['total_ip'] = '总计';
$l['svs_adm_login_title'] = '进入 '.VM_SHORT.' 面板';
$l['vps_id_stat_off'] = '离线';
$l['vps_id_stat_on'] = '在线';
$l['vps_id_stat_suspend'] = '已暂停的 '.VM_SHORT;
$l['manage_vps'] = '编辑 / 管理 '.VM_SHORT;

$l['vpmenu_start'] = '启动 '.VM_SHORT;
$l['vpmenu_stop'] = '停止 '.VM_SHORT;
$l['vpmenu_poweroff'] = '关闭 '.VM_SHORT;
$l['vpmenu_restart'] = '重启 '.VM_SHORT;
$l['vpmenu_destroy'] = '销毁 '.VM_SHORT;

$l['startvps'] = '启动 '.VM_SHORT;
$l['stopvps'] = '停止 '.VM_SHORT;
$l['started'] = '已成功启动';
$l['stopped'] = '已成功停止';
$l['poweroff'] = '已成功关闭';
$l['start_failed'] = VM_SHORT.' 启动失败';
$l['stop_sent'] = '已向 '.VM_SHORT.' 发送关闭信号';
$l['restart'] = '已向 '.VM_SHORT.' 发送重启信号';
$l['vpsloading'] = '加载中';

$l['vsstatus'] = '状态';
$l['status_suspended'] = '已暂停';
$l['status_unsuspended'] = '已取消暂停';
$l['status_ntwsuspended'] = '网络已暂停';
$l['status_ntwunsuspended'] = '网络已取消暂停';
$l['status_none'] = '全部';
$l['vstype'] = '类型';
$l['vsxen'] = 'Xen';
$l['vsxenhvm'] = 'Xen HVM';
$l['vsxcp'] = 'XCP';
$l['vsxcphvm'] = 'XCP HVM';
$l['vsopenvz'] = 'OpenVZ';
$l['vskvm'] = 'KVM';
$l['vslxc'] = 'LXC';
$l['vsvzo'] = 'Virtuozzo OpenVZ';
$l['vsvzk'] = 'Virtuozzo KVM';
$l['vsproxo'] = 'Proxmox OpenVz';
$l['vsproxk'] = 'Proxmox KVM/Qemu';
$l['vsproxl'] = 'Proxmox LXC';
$l['vserid'] = '服务器';
$l['vpsid'] = 'ID';

//进度更新
$l['prog_begin'] = '开始销毁 '.VM_SHORT;
$l['prog_destroy'] = '正在销毁 '.VM_SHORT;

//救援模式提示
$l['rescue_tip'] = VM_SHORT.' 处于 <b>救援模式</b>。请在执行任何操作之前从 <b>最终用户面板</b> 禁用救援模式。';

//创建日期
$l['last_edited'] = '最后编辑';
$l['creation_date'] = '创建日期';

//云
$l['is_cloud_user'] = '云用户';
$l['is_admin'] = '管理员';
$l['is_user'] = '用户';

//列表中的VNC
$l['vpmenu_novnc'] = '启动 noVNC 查看器';
$l['vpmenu_javavnc'] = '启动 Java VNC 查看器';

$l['multi_delete'] = '正在删除 ID 为 - 的 '.VM_SHORT;
$l['multi_suspend'] = '正在暂停 ID 为 - 的 '.VM_SHORT;
$l['multi_unsuspend'] = '正在取消暂停 ID 为 - 的 '.VM_SHORT;
$l['multi_suspend_net'] = '正在暂停 ID 为 - 的 '.VM_SHORT.' 网络';
$l['multi_unsuspend_net'] = '正在取消暂停 ID 为 - 的 '.VM_SHORT.' 网络';
$l['no_sel_vps'] = '未选择 '.VM_SHORT.'(s) 进行操作 ';
$l['cnf_action'] = '您确定要 ';// 结尾需要空格
$l['cnf_action_1'] = ' 以下 '.VM_SHORT.'(s) 吗？ ';
$l['vpsid_list'] = VM_SHORT.' ID '; 
$l['final_conf'] = '不会再有进一步的确认！';
$l['multi_vs_netrestrict'] = '正在更新 ID 为 - 的 '.VM_SHORT.' 网络规则';
$l['multi_start'] = '正在启动 ID 为 - 的 '.VM_SHORT;
$l['multi_stop'] = '正在向 ID 为 - 的 '.VM_SHORT.' 发送关闭信号';
$l['multi_poweroff'] = '正在关闭 ID 为 - 的 '.VM_SHORT;
$l['multi_restart'] = '正在重启 ID 为 - 的 '.VM_SHORT;
$l['ms_vs_netrestrict'] = '更新网络规则';
$l['ms_start'] = '启动';
$l['ms_stop'] = '停止';
$l['ms_restart'] = '重启';
$l['ms_suspend'] = '暂停';
$l['ms_unsuspend'] = '取消暂停';
$l['ms_suspend_net'] = '暂停网络';
$l['ms_unsuspend_net'] = '取消暂停网络';
$l['ms_poweroff'] = '关闭';
$l['alert_suspend'] = VM_SHORT.' 已暂停';
$l['alert_unsuspend'] = VM_SHORT.' 已取消暂停';
$l['alert_suspend_net'] = '网络已暂停';
$l['alert_unsuspend_net'] = '网络已取消暂停';
$l['initiate_del'] = '正在启动删除进程。';
$l['freeip'] = '正在释放 IP';
$l['finalsteps'] = '正在执行最后步骤';
$l['vps_deleted'] = VM_SHORT.' 已删除';
$l['of'] = '的';
$l['cpu'] = 'CPU';
$l['ram'] = '内存';
$l['disk'] = '磁盘';
$l['lv_stats'] = '资源';
$l['resources_note'] = 'OpenVZ '.VM_SHORT.'(s) 显示的 CPU % 是 '.VM_SHORT.' 内部的 CPU 使用率，KVM 显示的是 virt-top 报告的 CPU 使用率，XEN 和 XCP 显示的是 xentop 报告的 CPU 使用率。<br /> 此页面显示的是 Virtualizor 日志中存储的统计信息，每 5 分钟到 1 小时更新一次。';
$l['servergroup'] = '服务器组';
$l['lv_speedcap'] = '速度限制';
$l['lv_netspeed'] = '网络速度';
$l['lv_plan'] = '计划';
$l['lv_backup_plan'] = '备份计划';
$l['backup_help'] = '仅显示已启用的备份计划。';
$l['notes'] = '备注';
$l['old_edit'] = '旧版编辑 '.VM_SHORT;
$l['disabling_rescue'] = '正在禁用救援模式';

$l['err_locked_vps'] = VM_SHORT.' 已锁定，因此不允许执行任何操作';
$l['conf_lock'] = '您确定要锁定此 '.VM_SHORT.' 吗？';
$l['conf_unlock'] = '您确定要解锁此 '.VM_SHORT.' 吗？';
$l['lock_vs'] = '锁定 '.VM_SHORT;
$l['unlock_vs'] = '解锁 '.VM_SHORT;
$l['multi_lock'] = '正在锁定 ID 为 - 的 '.VM_SHORT;
$l['multi_unlock'] = '正在解锁 ID 为 - 的 '.VM_SHORT;
$l['ms_lock'] = '锁定';
$l['ms_unlock'] = '解锁';
$l['reason'] = '由管理员锁定';
$l['reason_txt'] = '原因';
$l['status_lock'] = VM_SHORT.' 已锁定';
$l['status_unlock'] = VM_SHORT.' 已解锁';
$l['guest_agent_nt_instl'] = '未安装客户代理';
$l['alert_lock_vs'] = '以下 vpses 由于已锁定，将不会执行操作。';
$l['export_csv'] = '导出为 CSV';
$l['export_in _background'] = '后台导出已启动';
$l['to_delete'] = '删除 vps！';
$l['search'] = '搜索';
$l['demo_expired_at'] = '演示版到期时间：';
$l['setup_pending'] = '用户设置待处理';
$l['waiting'] = '等待中';