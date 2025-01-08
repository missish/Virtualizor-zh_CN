<?php

//////////////////////////////////////////////////////////////
//===========================================================
// enduser_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来源于成为最好的渴望
// ----------------------------------------------------------
// 开始者: Alons
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

// 头部
$l['add'] = '添加';
$l['remove'] = '移除';
$l['update'] = '更新';
$l['new'] = '新建';
$l['servers'] = '服务器';
$l['go'] = '执行';
$l['wiki_help'] = '点击此处访问Wiki';
$l['actions'] = '操作';
$l['loading'] = '加载中...';
$l['disconnected'] = '未连接，请重试。';
$l['save'] = '保存';
$l['delete'] = '删除';
$l['edit'] = '编辑';
$l['id'] = 'ID';
$l['ip'] = 'IP地址';
$l['name'] = '名称';
$l['domain'] = '域名';
$l['manage'] = '管理';
$l['desc'] = '描述';
$l['cancel'] = '取消';
$l['ram'] = '内存';
$l['burst'] = '突发内存';
$l['user'] = '用户';
$l['state'] = '状态';
$l['hostname'] = '主机名';
$l['close'] = '关闭';
$l['disk'] = '硬盘';
$l['time'] = '时间';
$l['cpu'] = 'CPU';
$l['misc'] = '杂项设置';
$l['strength_indicator'] = '强度指示器';
$l['bad'] = '密码不安全';
$l['good'] = '一般';
$l['strong'] = '强';
$l['short'] = '短';
$l['weak_pass'] = '密码必须包含：一个大写字母、一个小写字母、数字或特殊符号';
$l['pass_match'] = '两次输入的密码不一致';
$l['refresh_page'] = '重新加载本页';
$l['actid'] = 'ACTID';
$l['user'] = '用户';
$l['server'] = '服务器';
$l['action'] = '操作';
$l['status'] = '状态';
$l['progress'] = '进度';
$l['vpsid'] = VM_SHORT.'ID';
$l['logo'] = '标志';
$l['execute'] = '执行';
$l['go'] = '执行';
$l['info'] = '信息';
$l['total_speed'] = '总速度';
$l['upload'] = '上传';
$l['download'] = '下载';
$l['free'] = '空闲';
$l['used'] = '已使用';
$l['in'] = '入';
$l['out'] = '出';
$l['usage'] = '出/入';
$l['with_selected'] = '选中项操作：';
$l['jan'] = '一月';
$l['feb'] = '二月';
$l['mar'] = '三月';
$l['apr'] = '四月';
$l['may'] = '五月';
$l['jun'] = '六月';
$l['jul'] = '七月';
$l['aug'] = '八月';
$l['sep'] = '九月';
$l['oct'] = '十月';
$l['nov'] = '十一月';
$l['dec'] = '十二月';
$l['month'] = '月';
$l['bandwidth'] = '流量';
$l['january'] = '一月';
$l['february'] = '二月';
$l['march'] = '三月';
$l['april'] = '四月';
$l['may_long'] = '五月';
$l['june'] = '六月';
$l['july'] = '七月';
$l['august'] = '八月';
$l['september'] = '九月';
$l['october'] = '十月';
$l['november'] = '十一月';
$l['december'] = '十二月';
$l['sunday'] = '周日';
$l['monday'] = '周一';
$l['tuesday'] = '周二';
$l['wednesday'] = '周三';
$l['thursday'] = '周四';
$l['friday'] = '周五';
$l['saturday'] = '周六';
$l['total'] = '总计';
$l['day'] = '天';
$l['date'] = '日期';
$l['minute'] = '分钟';
$l['hour'] = '小时';
$l['submit'] = '提交';
$l['new_pass'] = '请将密码复制到安全的地方';
$l['errors'] = '错误';
$l['nothing_selected'] = '没有选择！';
$l['uuid'] = 'UUID';
$l['back'] = '返回';
$l['or'] = '或';
$l['years'] = '年';
$l['months'] = '月';
$l['days'] = '天数';
$l['hours'] = '小时';
$l['minutes'] = '分钟';
$l['no_uid_in_vm'] = '未找到用户ID，请报告管理员以验证您的'.VM_SHORT.'是否分配了有效用户';
$l['gb'] = 'GB';
$l['mb'] = 'MB';
$l['core'] = '核心';
$l['storage'] = '存储';
$l['alert'] = '警告';
$l['confirm'] = '确认';
$l['prompt'] = '提示';
$l['vm_actions'] = VM_SHORT.'操作';
$l['networking'] = '网络';
$l['note'] = '备注';

// 数据表相关语言
$l['to'] = '到';
$l['of'] = '条，总共';
$l['search'] = '搜索';
$l['entries'] = '条';
$l['showing'] = '已显示';
$l['show'] = '显示';
$l['previous'] = '上一页';
$l['next'] = '下一页';
$l['first'] = '第一页';
$l['last'] = '最后一页';
$l['no_data_avail'] = '无数据';
$l['filtered_from'] = '筛选自';
$l['total_entries'] = '总条目';
$l['no_match_record'] = '未找到匹配记录';

$l['is_managed'] = '此'.VM_SHORT.'只能由管理员管理。';
$l['pass_strength_error'] = '密码强度不应低于';

// '.VM_SHORT.' 管理语言字符串 - 前缀：vm_
$l['vm_no_new'] = '您未指定新密码。';
$l['vm_no_conf'] = '确认密码缺失。';
$l['vm_no_match'] = '您提供的密码不匹配';
$l['vm_err_changing'] = '更改密码时出现了一些错误';
$l['vm_no_nonalphanumeric'] = '不允许使用非字母数字字符';

// 主题字符串
$l['vm_region'] = '服务器 / 区域';
$l['vm_config'] = VM_SHORT.'配置';
$l['vm_vpsmanagement'] = VM_SHORT.'管理';
$l['vm_advoptions'] = '高级选项';
$l['vm_lm_ssh'] = 'SSH';
$l['vm_lm_controlpanel'] = '一键安装控制面板';
$l['vm_info'] = '信息';
$l['vm_lv_type'] = '类型';
$l['vm_lv_os'] = '操作系统';
$l['vm_lv_hname'] = '主机名';
$l['vm_lv_sname'] = '宿主机';
$l['vm_lv_IP'] = '主IP地址';
$l['vm_vps_start'] = '启动';
$l['vm_vps_stop'] = '停止';
$l['vm_vps_restart'] = '重启';
$l['vm_vps_poweroff'] = '断电';
$l['vm_vps_suspended'] = '已暂停！';
$l['vm_monitor'] = '监控';
$l['vm_lm_changepass'] = '更改密码';
$l['vm_lm_hvmsettings'] = VM_SHORT.'配置选项';
$l['vm_lm_vnc'] = 'VNC';
$l['vm_lm_vncpass'] = 'VNC密码';
$l['vm_lm_ostemp'] = '重新安装操作系统';
$l['vm_lv_backtolist'] = '返回'.VM_SHORT.'列表';
$l['vm_bandwidth'] = '流量';
$l['vm_lm_rescue_mode'] = '救援模式';
$l['vm_lm_support'] = '支持';
$l['vm_lv_status'] = '状态';
$l['vm_lm_manage_subnet'] = '管理IPv6子网';
$l['vm_lm_console'] = '串行控制台';
$l['vm_lm_change_firewall_plan'] = '更改防火墙计划';
$l['vm_tip_startstop'] = '开/关'.VM_SHORT;
$l['vm_tip_restart'] = '重启'.VM_SHORT;
$l['vm_tip_poweroff'] = '断电'.VM_SHORT;
$l['vm_tip_hname'] = '更改'.VM_SHORT.'的主机名';
$l['vm_tip_rootpassword'] = '更改'.VM_SHORT.'的Root密码';
$l['vm_tip_ips'] = '设置主IP';
$l['vm_tip_vpsconfig'] = '配置一些杂项';
$l['vm_tip_ssh'] = '通过SSH连接到'.VM_SHORT;
$l['vm_tip_vnc'] = '通过VNC连接到'.VM_SHORT;
$l['vm_tip_vncpass'] = '更改VNC密码';
$l['vm_tip_os'] = '重新安装当前系统或直接安装新的操作系统';
$l['vm_tip_cp'] = '安装您喜欢的控制面板';
$l['vm_tip_backup'] = '备份或还原'.VM_SHORT;
$l['vm_tip_monitor'] = '监控'.VM_SHORT.'资源使用情况';
$l['vm_tip_proc'] = '查看'.VM_SHORT.'运行的进程';
$l['vm_tip_services'] = '查看'.VM_SHORT.'运行的服务';
$l['vm_tip_slogs'] = '查看'.VM_SHORT.'状态日志';
$l['vm_tip_logs'] = '查看'.VM_SHORT.'日志';
$l['vm_tip_sysalerts'] = '查看'.VM_SHORT.'致命系统警告';
$l['vm_tip_bandwidth'] = '查看此'.VM_SHORT.'的带宽使用情况';
$l['vm_tip_rescue'] = '救援模式';
$l['vm_tip_manage_subnet'] = '添加/删除IPv6地址';
$l['vm_ssh_notice'] = 'SSH仅在安装并启用Java时才有效';
$l['vm_tip_console'] = '控制台访问';
$l['vm_vps_access_control'] = '电源选项';
$l['vm_vps_name'] = VM_SHORT.'名称';
$l['vm_bw_stats'] = '流量统计';
$l['vm_monthly_chart'] = '月带宽图表';
$l['vm_server_stats'] = VM_SHORT.'状态';
$l['vm_lm_status_online'] = '在线';
$l['vm_lm_status_offline'] = '离线';
$l['vm_lm_status_suspended'] = '已暂停';
$l['vm_lm_status_ntw_sus_admin'] = '网络暂停';
$l['vm_lm_status_ntw_sus_bw'] = '网络暂停（带宽超限）';
$l['vm_vps_is_suspended'] = '此'.VM_SHORT.'已暂停。您无法执行任何操作！';
$l['vm_suspend_reason_bw'] = '此'.VM_SHORT.'因带宽超限而被暂停。您无法执行任何操作！';
$l['vm_tip_recipe'] = '菜谱面板';
$l['vm_lm_recipe'] = '菜谱';
$l['vm_tip_self_shutdown'] = '设置关机计时器';
$l['vm_tip_tasks'] = '查看'.VM_SHORT.'任务';
$l['vm_tip_rdns'] = '管理RDNS';
$l['vm_lm_managevdf'] = '域名转发';
$l['vm_tip_managevdf'] = VM_SHORT.'域名转发';
$l['vm_lm_sshkeys'] = 'SSH密钥';
$l['addvs_task_running'] = '此'.VM_SHORT.'创建任务正在后台运行，不允许执行任何操作';
$l['rebuildvs_task_running'] = '此'.VM_SHORT.'重建任务正在后台运行，不允许执行任何操作';
$l['vm_tip_installapps'] = '安装应用程序';
$l['vm_no_location'] = '未找到位置';
$l['vm_sys_stats'] = '系统统计';
$l['unsupend_time_msg'] = '您的'.VM_SHORT.'已于{{sus_date}}暂停，将于{{unsus_date}}恢复';
$l['copy_vm_pass'] = '复制'.VM_SHORT.'密码';
$l['copied'] = VM_SHORT.'密码已复制';

$l['profile_warn'] = '请填写所有详细信息';

// listvs 语言字符串 - 前缀：lst_
$l['lst_virtual_servers'] = VM_LONG;
$l['lst_page_head'] = VM_LONG;
$l['lst_no_vs'] = '您的账户中没有'.VM_SHORT;
$l['lst_lv_mb'] = 'MB';
$l['lst_vps_id_stat_off'] = '离线';
$l['lst_vps_id_stat_on'] = '在线';
$l['lst_lv_managevps'] = '点击管理此'.VM_SHORT;
$l['lst_lv_type'] = '类型';
$l['lst_lv_os'] = '操作系统';
$l['lst_lv_hname'] = '主机名';
$l['lst_lv_IP'] = 'IP地址';
$l['lst_lv_user'] = '用户';
$l['lst_lv_state'] = '状态';
$l['lst_lv_delvs'] = '删除'.VM_SHORT;
$l['lst_vps_state_started'] = '已启动';
$l['lst_vps_state_stopped'] = '已停止';
$l['lst_vps_state_suspended'] = '已暂停';
$l['lst_conf_delvs'] = '您确定要删除此'.VM_SHORT.'吗？';
$l['lst_error_connect'] = '连接服务器时出错';
$l['lst_del_done_msg'] = '此'.VM_SHORT.'删除过程已启动';
$l['lst_sus_done_msg'] = '此'.VM_SHORT.'已暂停';
$l['lst_unsus_done_msg'] = '此'.VM_SHORT.'已恢复';
$l['lst_sus_net_done_msg'] = '此'.VM_SHORT.'网络已暂停';
$l['lst_unsus_net_done_msg'] = '此'.VM_SHORT.'网络已恢复';
$l['lst_lv_editvs'] = '编辑'.VM_SHORT;
$l['lst_lv_sname'] = '服务器';
$l['lst_conf_suspend'] = '您确定要暂停此'.VM_SHORT.'吗？';
$l['lst_conf_unsuspend'] = '您确定要恢复此'.VM_SHORT.'吗？';
$l['lst_conf_suspend_net'] = '您确定要暂停此'.VM_SHORT.'网络吗？';
$l['lst_conf_unsuspend_net'] = '您确定要恢复此'.VM_SHORT.'网络吗？';
$l['lst_conf_mul_suspend'] = '您确定要暂停选中的'.VM_SHORT.'(s)吗？';
$l['lst_conf_mul_unsuspend'] = '您确定要恢复选中的'.VM_SHORT.'(s)吗？';
$l['lst_conf_mul_suspend_net'] = '您确定要暂停选中的'.VM_SHORT.'(s)网络吗？';
$l['lst_conf_mul_unsuspend_net'] = '您确定要恢复选中的'.VM_SHORT.'(s)网络吗？';
$l['lst_conf_mul_start'] = '您确定要启动选中的'.VM_SHORT.'(s)吗？';
$l['lst_conf_mul_stop'] = '您确定要停止选中的'.VM_SHORT.'(s)吗？';
$l['lst_conf_mul_poweroff'] = '您确定要断电选中的'.VM_SHORT.'(s)吗？';
$l['lst_conf_mul_restart'] = '您确定要重启选中的'.VM_SHORT.'(s)吗？';
$l['lst_conf_mul_delvs'] = '您确定要删除选中的'.VM_SHORT.'(s)吗？';
$l['lst_suspendvs'] = '暂停'.VM_SHORT;
$l['lst_unsuspendvs'] = '恢复'.VM_SHORT;
$l['lst_suspendvs_net'] = '暂停'.VM_SHORT.'网络';
$l['lst_unsuspendvs_net'] = '恢复'.VM_SHORT.'网络';
$l['lst_vpmenu_novnc'] = '启动NoVNC查看器';
$l['lst_vpmenu_javavnc'] = '启动JavaVNC查看器';
$l['lst_ntwsuspended'] = '网络暂停';
$l['lst_stat_suspended'] = '已暂停'.VM_SHORT;
$l['lst_manage_vps'] = '管理'.VM_SHORT;
$l['lst_no_option_sel'] = '未选择操作';
$l['lst_no_vps_sel'] = '未选择'.VM_SHORT.'(s)';
$l['lst_ms_start'] = '启动';
$l['lst_ms_stop'] = '停止';
$l['lst_ms_restart'] = '重启';
$l['lst_ms_suspend'] = '暂停';
$l['lst_ms_unsuspend'] = '恢复';
$l['lst_ms_suspend_net'] = '暂停网络';
$l['lst_ms_unsuspend_net'] = '恢复网络';
$l['lst_ms_poweroff'] = '断电';
$l['lst_ms_delvs'] = '删除';
$l['lst_with_selected'] = '选择：';
$l['lst_region'] = '区域';
$l['lst_charges'] = '费用';

// start 语言字符串 - 前缀：svm_
$l['svm_some_error'] = '无法完成该操作';
$l['svm_page_head'] = '启动 '.VM_SHORT;
$l['svm_done'] = VM_SHORT.' 已启动';
$l['svm_sub_but'] = '启动 '.VM_SHORT;
$l['svm_cur_stat'] = '状态';
$l['svm_status_1'] = '在线';
$l['svm_status_0'] = '离线';
$l['svm_vps_stop'] = '停止';

// stop 语言字符串 - 前缀：stvm_
$l['stvm_some_error'] = '无法完成该操作';
$l['stvm_page_head'] = '停止 '.VM_SHORT;
$l['stvm_done'] = ' '.VM_SHORT.' 已成功停止';
$l['stvm_sub_but'] = '停止 '.VM_SHORT;
$l['stvm_cur_stat'] = '状态';
$l['stvm_status_1'] = '在线';
$l['stvm_status_0'] = '离线';
$l['stvm_signal_sent'] = '已成功关闭 '.VM_SHORT;
$l['stvm_vps_start'] = '启动';

// restart 语言字符串 - 前缀：re_
$l['re_some_error'] = '无法完成该操作';
$l['re_page_head'] = '重启 '.VM_SHORT;
$l['re_done'] = ''.VM_SHORT.' 已成功重启';
$l['re_sub_but'] = '重启 '.VM_SHORT;
$l['re_cur_stat'] = '状态';
$l['re_status_1'] = '在线';
$l['re_status_0'] = '离线';
$l['re_signal_sent'] = ''.VM_SHORT.' 已重启';
$l['re_vps_restart'] = '重启';
$l['re_vps_stop'] = '停止';
$l['re_fail_nw'] = ''.VM_SHORT.' 由于网络挂起而无法重启';

// poweroff 语言字符串 - 前缀：po_
$l['po_some_error'] = '无法完成该操作';
$l['po_page_head'] = '关闭电源 '.VM_SHORT;
$l['po_done'] = ''.VM_SHORT.' 已成功关闭电源';
$l['po_sub_but'] = '关闭电源 '.VM_SHORT;
$l['po_cur_stat'] = '状态';
$l['po_status_1'] = '在线';
$l['po_status_0'] = '离线';
$l['po_vps_start'] = '启动';
$l['po_vps_restart'] = '重启';
$l['po_vps_stop'] = '停止';
$l['po_vps_poweroff'] = '关闭电源';

// users 语言字符串 - 前缀：usr_
$l['usr_page_head'] = '用户';
$l['usr_add_user'] = '添加用户';
$l['usr_add_user_email'] = '新用户邮箱';
$l['usr_adu_pass'] = '密码';

$l['usr_del_not_allowed'] = '您不能删除此用户';
$l['usr_del_conf'] = '您确定要删除用户吗？';
$l['usr_no_users'] = '没有用户';
$l['usr_user_del'] = '用户已被删除';
$l['usr_del_not_allowed_has_vps'] = '用户有VPS，请先删除VPS再删除用户';

// apikey 语言字符串 - 前缀：apik_
$l['eapi_page_head'] = '编辑 API 凭据';
$l['eapi_page'] = '编辑';
$l['list_api_logs'] = 'API 日志';
$l['invalid_ip'] = '无效 IP';
$l['api_page_head'] = 'API 列表';
$l['pair_add_api'] = '创建 API';
$l['apik_key_notice'] = '输入 IP 地址（多个 IP 以逗号分隔）。如果未提供 IP，则 API 规则将应用于所有 IP 地址。<br><b>示例：</b> 192.168.1.1, 192.168.1.2';
$l['ip_addresses'] = 'IP 地址白名单';
$l['enable_logging'] = '启用日志记录';
$l['enable_logging_exp'] = '启用后，将为此 API 对生成日志';
$l['apik_h_apiip'] = 'IP 地址';
$l['all_ip'] = '所有 IP 地址';
$l['apik_heading'] = 'API 凭据';
$l['apik_api_credentials'] = 'API 凭据';
$l['apik_no_key'] = '您没有任何 API 凭据。请添加一个。';
$l['apik_h_apikey'] = 'API 密钥';
$l['apik_h_apipass'] = 'API 密码';
$l['apik_h_del'] = '删除';
$l['apik_create_api_key'] = '创建 API 密钥对';
$l['apik_key_added'] = 'API 密钥对已添加';
$l['apik_key_deleted'] = 'API 密钥对已删除';
$l['apik_key_reseted'] = 'API 密钥对已成功重置';
$l['reset_apikey'] = '您确定要重置此 API 凭据吗？';
$l['apik_h_reset'] = '重置';
$l['reset_api_key'] = '重置 API 密钥';

// 双因素认证语言字符串 - 前缀：twofactauth_
$l['twofactauth_head'] = '双因素认证';
$l['twofactauth_desc'] = '要获取确认码，您应下载双因素认证应用程序，例如 Google Authenticator、Authy 等。<br />扫描下面的二维码或将密钥输入您的双因素认证应用程序。之后，应用程序将为您提供一个唯一的 OTP，您需要将其输入文本框以启用双因素认证。';
$l['twofactauth_secret_key'] = '密钥：';
$l['twofactauth_code_input'] = '确认码';
$l['twofactauth_code_input_exp'] = '输入从电子邮件或应用程序收到的 OTP';
$l['twofactauth_submit'] = '提交';
$l['twofactauth_select_pref'] = '选择偏好：';
$l['twofactauth_select_pref_desc'] = '选择双因素认证类型，然后输入代码以启用它';
$l['twofactauth_disabled'] = '双因素认证已禁用';
$l['twofactauth_enabled'] = '双因素认证已启用';
$l['twofactauth_err_enable'] = '输入的验证码不正确';
$l['twofactauth_email_passcode'] = '电子邮件验证码';
$l['twofactauth_none'] = '无（不推荐！）';
$l['twofactauth_email_otp'] = '电子邮件 OTP';
$l['twofactauth_enable_app'] = '启用应用程序（Google Authenticator、Authy 等）';
$l['twofactauth_no_passcode'] = '请指定 OTP';
$l['twofactauth_changes_saved'] = '您的更改已成功保存';
$l['twofactauth_or'] = '或';
$l['twofactauth_passcode_error'] = '无法生成 OTP';
$l['twofactauth_otp_mail_sub'] = '登录 OTP';
$l['twofactauth_reset_key'] = '重置密钥';
$l['twofactauth_email_sent_to'] = 'OTP 将发送至：';
$l['twofactauth_otp_mail_body'] = '您好，

您的账户在以下地址提交了登录请求：
{{site_domain}}

请使用以下一次性密码（OTP）登录：
{{otp}}

此致，
{{sn}}';
$l['twofactauth_passcode_mail_sub'] = '双因素认证确认码';
$l['twofactauth_passcode_mail_body'] = '您好，

您在 {{site_domain}} 的账户启用双因素认证的确认码为：{{passcode}}。

此致，
{{sn}}';
$l['twofactauth_mail_done'] = 'OTP 已发送至您的邮箱';
$l['twofactauth_secret_key_conf'] = '警告：如果您重置密钥，您将需要在应用程序中更新新密钥。您确定要继续吗？';
$l['twofactauth_otp_expired'] = '您提交的 OTP 已过期！';
$l['twofactauth_not_allowed'] = '您无权访问此页面';

// adduser 语言字符串 - 前缀：adu_
$l['adu_no_user_email'] = '您未输入邮箱';
$l['adu_no_user_password'] = '您未输入密码';
$l['adu_invalid_email'] = '您输入的邮箱无效';
$l['adu_userlimit_exceeded'] = '您无法创建更多用户。请联系管理员';
$l['adu_useradd_error'] = '添加用户时出错。请联系管理员';
$l['adu_page_head'] = '添加用户';
$l['adu_done'] = '用户已添加';
$l['adu_user_email'] = '邮箱';
$l['adu_user_password'] = '密码';
$l['adu_user_exists'] = '用户已存在。请输入不同的邮箱';

// changepassword 语言字符串 - 前缀：cpas_
$l['cpas_no_new'] = '您未指定新密码';
$l['cpas_no_conf'] = '确认密码缺失';
$l['cpas_no_match'] = '您输入的密码不匹配';
$l['cpas_err_changing'] = '更改密码时出错';
$l['cpas_submit_button'] = '更改密码';
$l['cpas_new_pass'] = '新密码';
$l['cpas_old_pass'] = '旧密码';
$l['cpas_retype_pass'] = '确认新密码';
$l['cpas_change_note'] = '更改 Root 密码';
$l['cpas_change_final'] = '您的密码已成功修改';
$l['cpas_change_onboot'] = VM_SHORT.' 密码将在您点击关机并再次启动后生效';
$l['cpas_change_notify'] = '正在更改 '.VM_SHORT.' 的 root 密码...';
$l['cpas_strength_indicator'] = '密码强度';
$l['cpas_bad'] = '密码不安全';
$l['cpas_good'] = '良好';
$l['cpas_strong'] = '非常强';
$l['cpas_short'] = '太短';
$l['cpas_weak_pass'] = '密码必须至少包含以下 3 种：大写字母、小写字母、数字或特殊符号';
$l['cpas_pass_match'] = '密码不匹配';
$l['cpas_disabled'] = '管理员已禁用更改密码功能';
$l['pass_update'] = '密码更新';

// cloudres 语言字符串 - 前缀：cr_
$l['cr_header'] = '云资源';
$l['cr_resource_type'] = '资源类型';
$l['cr_limit'] = '限制';
$l['cr_used'] = '已使用';
$l['cr_left'] = '可用';
$l['cr_unlimited'] = '无限制';
$l['cr_num_vs'] = '虚拟机数量';
$l['cr_num_users'] = '用户数量';
$l['cr_num_space'] = '磁盘空间';
$l['cr_num_ram'] = '内存';
$l['cr_num_bandwidth'] = '带宽';
$l['cr_num_cores'] = '总核心数';
$l['cr_max_cores'] = '最大核心数 / '.VM_SHORT;
$l['cr_space_per_vm'] = '最大磁盘空间 / '.VM_SHORT;
$l['cr_num_ipv4'] = 'IPv4';
$l['cr_num_ipv6_subnet'] = 'IPv6 子网';
$l['cr_num_ipv6'] = 'IPv6';
$l['cr_cpuinfo'] = 'CPU 信息';

// console 语言字符串 - 前缀：cs_
$l['cs_disabled'] = '串行控制台已禁用';
$l['cs_call_failed'] = 'API 调用失败。请联系管理员';
$l['cs_heading'] = '串行控制台';
$l['cs_none'] = '未找到现有的控制台会话。请创建一个！';
$l['cs_create'] = '创建会话';
$l['cs_creating'] = '正在创建会话...';
$l['cs_destroying'] = '正在销毁会话...';
$l['cs_details'] = '以下是控制台详细信息';
$l['cs_expires'] = '过期时间';
$l['cs_ip'] = 'IP 地址';
$l['cs_port'] = '端口';
$l['cs_username'] = '用户名';
$l['cs_password'] = '密码';
$l['cs_destroy'] = '销毁会话';
$l['cs_java_console'] = 'Java 控制台';

// hostname 语言字符串 - 前缀：hn_
$l['hn_no_new'] = '请输入主机名';
$l['hn_new_host'] = '新主机名';
$l['hn_submit_button'] = '更改主机名';
$l['hn_err_changing'] = '更改主机名时出错';
$l['hn_host_final'] = '主机名已更改';
$l['hn_invalid_hostname'] = '无效的主机名';
$l['hn_change_onboot'] = '主机名将在 '.VM_SHORT.' 重启后生效';
$l['hn_current_hostname'] = '当前主机名';
$l['hn_change_notify'] = '正在更改主机名...';
$l['hn_disable_change_hostname'] = '管理员已禁用更改主机名功能';

// ips 语言字符串 - 前缀：ips_
$l['ips_no_ip_sel'] = '未选择 IP';
$l['ips_ip_not_exists'] = 'IP 不存在';
$l['ips_header'] = 'IP 列表';
$l['ips_ipinfo'] = 'IP 信息';
$l['ips_reorderips'] = '设置为主 IP';
$l['ips_done'] = '您的 IP 设置已保存';
$l['ips_change_onboot'] = '您的 IP 设置将在 '.VM_SHORT.' 重启后生效';
$l['ips_primary_ip'] = '设置主 IP';
$l['ips_ipv6_ips_list'] = 'IPv6 IP';
$l['ips_ipv6_empty'] = 'IPv6 为空';
$l['ips_change_notify'] = '正在更改 IP 设置...';

// monitor 语言字符串 - 前缀：mon_
$l['mon_header'] = 'CPU';
$l['mon_cpuinfo'] = 'CPU 信息';
$l['mon_totalcpu'] = '总 CPU 计算单位：';
$l['mon_cpuutilised'] = '已使用计算单位：';
$l['mon_poweredby'] = '技术支持：';
$l['mon_graphheader'] = 'CPU 使用率';
$l['mon_trademarks'] = '所有使用的商标均为其各自公司的商标或注册商标';
$l['mon_not_supported'] = '不支持此资源的当前利用率监控';
$l['mon_header_cpu'] = 'CPU';
$l['mon_header_ram'] = '内存';
$l['mon_header_disk'] = '磁盘';
$l['mon_header_nodes'] = '索引节点';
$l['mon_header_io'] = '磁盘 I/O';
$l['mon_header_ntw_speed'] = '网络';
$l['mon_io_usage'] = '平均磁盘 I/O 使用率';
$l['mon_io_read_spd'] = 'I/O 读取速度';
$l['mon_io_write_spd'] = 'I/O 写入速度';
$l['mon_ntw_info'] = '网络信息';
$l['mon_ntw_down_spd'] = '平均下载速度';
$l['mon_ntw_upld_spd'] = '平均上传速度';
$l['mon_disabled'] = '管理员已禁用监控选项';
$l['mon_cpu_usage'] = 'CPU 使用率';
$l['mon_inode_usage'] = '索引节点使用情况';
$l['mon_ram_usage'] = '内存使用';
$l['mon_disk_usage'] = '磁盘使用情况';
$l['mon_down_speed'] = '下载速度';
$l['mon_up_speed'] = '上传速度';
$l['mon_total_speed'] = '总速度';
$l['mon_cpu_hist'] = 'CPU 使用历史';
$l['mon_mem_hist'] = '内存使用历史';
$l['mon_storage'] = '已用存储';
$l['mon_date_label'] = '日期 mm/dd';
$l['mon_inode_hist'] = '使用的索引节点';
$l['mon_net_speed'] = '网速';

// os 语言字符串 - 前缀：os_
$l['os_not_selected'] = '您未选择操作系统';
$l['os_invalid_os'] = '提交的操作系统无效';
$l['os_no_new'] = '您未指定新密码';
$l['os_no_conf'] = '确认密码缺失';
$l['os_no_match'] = '您输入的密码不匹配';
$l['os_error_reins'] = '安装操作系统时出错';
$l['os_err_changing'] = '设置密码时出错';
$l['os_err_log_osreinstall'] = '您已达到本月的安装次数，重装功能已禁用';
$l['os_reins_os'] = '重新安装操作系统';
$l['os_os_reinstall'] = '重装';
$l['os_new_pass'] = '新密码';
$l['os_retype_pass'] = '再次输入新密码';
$l['os_genram_psswd'] = '生成另一个随机密码';
$l['os_done'] = '操作系统已成功安装';
$l['os_reins_notify'] = '正在重新安装操作系统...';
$l['os_centos_line1'] = 'CentOS 是一个企业级 Linux 发行版，源自北美企业 Linux 供应商公开提供的源代码。';
$l['os_centos_line2'] = 'CentOS 完全符合上游供应商的再分发政策，并旨在实现 100% 二进制兼容。CentOS 主要更改软件包以删除上游供应商的品牌和艺术品。';
$l['os_centos_line3'] = 'CentOS 由一个小型但不断增长的核心开发团队开发。CentOS 是免费的。';
$l['os_fedora_line1'] = 'Fedora 是一个基于 Linux 的操作系统，展示了最新的自由和开源软件。Fedora 始终对任何人免费使用、修改和分发。';
$l['os_fedora_line2'] = '它由全球各地的人们共同构建，作为一个社区：Fedora 项目。Fedora 项目是开放的，欢迎任何人加入。';
$l['os_fedora_line3'] = 'Fedora 项目为您提供前沿的自由和开源软件和内容。';
$l['os_suse_line1'] = 'openSUSE 项目是一个全球性的努力，旨在推广 Linux 的广泛使用。';
$l['os_suse_line2'] = 'openSUSE 创建了世界上最好的 Linux 发行版之一，以开放、透明和友好的方式与全球自由和开源软件社区合作。';
$l['os_suse_line3'] = '该项目由其社区控制，并依赖于个人的贡献，包括测试人员、作家、翻译人员、可用性专家、艺术家、大使或开发人员。';
$l['os_suse_line4'] = 'openSUSE 是一个免费的基于 Linux 的操作系统，适用于您的 PC、笔记本电脑或服务器。';
$l['os_ubuntu_line1'] = 'Ubuntu 是 Debian 系列 Linux 操作系统的一部分，拥有最大的开发者人才库，每个软件包都由专家构建。';
$l['os_ubuntu_line2'] = 'Canonical 严格的发布管理、质量保证、压力测试和产品设计增强了 Ubuntu Server 的质量。';
$l['os_ubuntu_line3'] = 'Ubuntu 是一个快速且美观的操作系统，适用于台式机、服务器、上网本和笔记本电脑。Ubuntu 始终是免费的。';
$l['os_debian_line1'] = 'Debian 是一个免费的计算机操作系统。操作系统是使计算机运行的基本程序和实用工具的集合。';
$l['os_debian_line2'] = 'Debian 使用 Linux 内核（操作系统的核心），但大多数基本操作系统工具来自 GNU 项目；因此称为 GNU/Linux。';
$l['os_debian_line3'] = 'Debian GNU/Linux 不仅提供了一个纯粹的操作系统：它还附带了超过 25000 个软件包，这些预编译的软件以方便的格式打包，便于在您的计算机上安装。';
$l['os_scientific_line1'] = 'Scientific Linux 是由费米国家加速器实验室制作的 Linux 发行版。';
$l['os_scientific_line2'] = '它是一个基于 Red Hat Enterprise Linux 的自由和开源操作系统，旨在“尽可能接近商业企业发行版”。';
$l['os_scientific_line3'] = '该产品源自 Red Hat, Inc. 提供的自由和开源软件，但并非由 Red Hat 生产、维护或支持。';
$l['os_strength_indicator'] = '密码强度';
$l['os_bad'] = '差';
$l['os_good'] = '良好';
$l['os_strong'] = '非常强';
$l['os_short'] = '太短';
$l['os_weak_pass'] = '密码必须至少包含以下 3 种：大写字母、小写字母、数字或特殊符号';
$l['os_pass_match'] = '密码不匹配';
$l['os_reinstall_wait'] = '正在重装系统，请稍候...';
$l['os_reinstall_disabled'] = '管理员已禁用操作系统重装功能';
$l['os_no_os'] = '没有可用的操作系统用于重装';
$l['os_rebuild_data_lost_warn'] = '您确定要重建 '.VM_SHORT.' 吗？警告：'.VM_SHORT.' 上的现有数据将永久丢失。';
$l['os_select_version'] = '选择版本';
$l['os_select_os'] = '选择操作系统：';
$l['os_other'] = '其他';
$l['os_format_primary'] = '仅格式化主磁盘';
$l['os_format_primary_exp'] = '如果勾选，仅删除主盘数据';
$l['os_set_new_pass'] = '重装后的操作系统密码';

// vnc 语言字符串 - 前缀: vnc_
$l['vnc_vnc_info'] = 'VNC 信息';
$l['vnc_vnc_ip'] = 'VNC IP';
$l['vnc_vnc_port'] = 'VNC 端口';
$l['vnc_novnc_button'] = '启动 HTML 5 VNC 客户端';
$l['vnc_launch_vnc'] = '启动 Java VNC 查看器';
$l['vnc_notice'] = '只有在您的浏览器中安装并启用了 Java，VNC 才能正常工作';
$l['vnc_not_enabled'] = 'VNC 未启用';

// vncpass 语言字符串 - 前缀: vncpas_
$l['vncpas_no_new'] = '您没有指定新密码';
$l['vncpas_no_conf'] = '确认密码缺失';
$l['vncpas_no_match'] = '您输入的密码不匹配';
$l['vncpas_err_changing'] = '更改密码时出现错误';
$l['vncpas_no_nonalphanumeric'] = '不允许使用非字母数字字符';
$l['vncpas_submit_button'] = '更改 VNC 密码';
$l['vncpas_new_pass'] = '新密码';
$l['vncpas_old_pass'] = '旧密码';
$l['vncpas_retype_pass'] = '确认新密码';
$l['vncpas_change_note'] = '更改 VNC 密码';
$l['vncpas_change_final'] = '您的 VNC 密码已成功更改';
$l['vncpas_change_notify'] = '正在更改 VNC 密码...';
$l['vncpas_too_long'] = 'VNC 密码长度超过支持长度';

// userpassword 语言字符串 - 前缀: up_
$l['up_no_new'] = '您没有指定新密码';
$l['up_no_conf'] = '确认密码缺失';
$l['up_no_match'] = '您输入的密码不匹配';
$l['up_err_changing'] = '更改密码时出现错误';
$l['up_new_pass'] = '新密码';
$l['up_old_pass'] = '旧密码';
$l['up_retype_pass'] = '确认新密码';
$l['up_page_head'] = '更改密码';
$l['up_change_final'] = '您的密码已成功更改';

// profile 语言字符串 - 前缀: pr_
$l['personal_info'] = '个人信息';
$l['contact_info'] = '联系信息';
$l['administrative_info'] = '管理联系人';
$l['pr_change_profile'] = '更改资料';
$l['pr_no_fname'] = '您没有输入名字';
$l['pr_no_lname'] = '您没有输入姓氏';
$l['pr_firstname'] = '名字';
$l['pr_lastname'] = '姓氏';
$l['pr_company'] = '公司';
$l['pr_website'] = '网站';
$l['pr_address'] = '地址';
$l['pr_city'] = '城市';
$l['pr_state'] = '州';
$l['pr_zip'] = '邮编';
$l['pr_country'] = '国家';
$l['pr_phone'] = '电话';
$l['pr_sys_admin_email'] = '系统管理员邮箱';
$l['pr_cc_emails'] = '发票抄送邮箱';
$l['pr_cc_emails_exp'] = '发票相关邮件将发送到这些邮箱。您可以添加多个以逗号分隔的邮箱。';
$l['pr_soft_error'] = '保存您的详细信息时出现错误。请联系支持团队：'.$globals['support_email'];
$l['pr_done'] = '您的更改已成功保存';
$l['pr_no_address'] = '请指定地址';
$l['pr_no_city'] = '请指定城市';
$l['pr_no_state'] = '请指定州';
$l['pr_no_zip'] = '请指定邮编';
$l['pr_zip_exp'] = '邮编应仅包含字母数字字符，不允许使用特殊字符';
$l['pr_wrong_zip'] = '请检查邮编';
$l['pr_no_country'] = '请指定国家';
$l['pr_no_phone'] = '请指定电话号码';
$l['pr_no_sys_admin_email'] = '请指定系统管理员邮箱';

// services 语言字符串 - 前缀: ser_
$l['ser_heading'] = '服务';
$l['ser_sstart'] = '启动';
$l['ser_sstop'] = '停止';
$l['ser_srestart'] = '重启';
$l['ser_status'] = '状态';
$l['ser_statrun'] = '运行中';
$l['ser_statoff'] = '关闭';
$l['ser_staton'] = '开启';
$l['ser_autostart'] = '自动启动';
$l['ser_select'] = '选择';
$l['ser_vps_is_off'] = VM_SHORT.' 已关闭！';
$l['ser_no_feature'] = '此功能不可用！';
$l['ser_notice_start'] = '所选服务正在启动...';
$l['ser_notice_stop'] = '所选服务正在停止...';
$l['ser_notice_restart'] = '所选服务正在重启...';

// processes 语言字符串 - 前缀: proc_
$l['proc_heading'] = '进程列表';
$l['proc_usr'] = '用户';
$l['proc_pid'] = 'PID';
$l['proc_cpu'] = '%CPU';
$l['proc_mem'] = '%内存';
$l['proc_command'] = '命令';
$l['proc_rss'] = 'RSS';
$l['proc_time'] = '时间';
$l['proc_select'] = '选择';
$l['proc_pstart'] = '启动';
$l['proc_pkill'] = '终止';
$l['proc_prefresh'] = '自动刷新';
$l['proc_vps_is_off'] = VM_SHORT.' 已关闭！';
$l['proc_no_feature'] = '此功能不可用！';
$l['proc_notice_pkill'] = '正在终止所选进程：';
$l['proc_with_selected'] = '对选中项的操作：';

// logs 语言字符串 - 前缀: log_
$l['log_heading'] = '日志';
$l['log_date'] = '日期';
$l['log_task'] = '任务';
$l['log_status'] = '状态';
$l['log_ip'] = 'IP';
$l['log_success'] = '成功';
$l['log_fail'] = '失败';

// managesubnets 语言字符串 - 前缀: mng_
$l['mng_heading'] = '管理 IPv6 子网';
$l['mng_done'] = 'IP 已保存';
$l['mng_add_ipv6'] = '添加一个 IPv6 地址';
$l['mng_add_ip_button'] = '添加 IP';
$l['mng_back_button'] = '返回';
$l['mng_save_button'] = '保存';
$l['mng_delete_confirm'] = '您确定要删除 IPv6 地址吗？';
$l['mng_ipv6_invalid'] = 'IPv6 地址有误';
$l['mng_ipv6_address'] = 'IPv6 地址';
$l['mng_ipv6_delete'] = '删除';
$l['mng_ipv6_subnet'] = 'IPv6 子网';
$l['mng_edit_subnet'] = '编辑';
$l['mng_no_vps'] = '未找到 '.VM_SHORT;
$l['mng_inv_ipaddress'] = '指定的 IP 不属于您';

// managezone 语言字符串 - 前缀: mz_
$l['mz_page_head'] = '管理区域';
$l['mz_zone_conf_del'] = '您确定要删除 PDNS 服务器吗？';
$l['mz_add_pdns'] = '添加 PDNS 服务器';
$l['mz_dns_mgmt'] = 'DNS 管理';
$l['mz_zone_add_done'] = '区域已成功添加';
$l['mz_add_zone'] = '添加区域记录';
$l['mz_zone_name'] = '区域名称';
$l['mz_pdns_zones'] = '查看区域';
$l['mz_manage_zone'] = '管理';
$l['mz_conf_del'] = '您确定要删除此记录吗？';
$l['mz_add_done'] = '记录已成功添加';
$l['mz_edit_done'] = '记录已成功编辑';
$l['mz_del_done'] = '记录已成功删除';
$l['mz_priority'] = '优先级';
$l['mz_ttl'] = 'TTL';
$l['mz_content'] = '内容';
$l['mz_type'] = '类型';
$l['mz_host'] = '主机';
$l['mz_points_to'] = '指向';
$l['mz_txt_value'] = 'TXT 值';
$l['mz_pdns_name'] = '服务器名称';
$l['mz_submit_button'] = '添加记录';
$l['mz_edit_button'] = '编辑记录';
$l['mz_no_domains'] = '没有区域记录';
$l['mz_err_addzone'] = '添加区域时出错';
$l['mz_inv_name'] = '指定的主机名无效';
$l['mz_inv_ip'] = '指定的 IP 地址无效';
$l['mz_inv_tld'] = '指定的顶级域名无效';
$l['mz_inv_ipv6'] = '指定的 IPv6 无效';
$l['mz_inv_srv'] = 'SRV 格式无效，请使用以下格式 <br>"权重 端口 目标"<br>例如：<br>"80 443 hostname.example.com"';
$l['mz_inv_int'] = '指定的整数无效';
$l['mz_err_add'] = '添加记录时出错';
$l['mz_err_del'] = '删除记录时出错';
$l['mz_err_edit'] = '编辑记录时出错';
$l['mz_err_soa'] = '更新 SOA 序列号时出错';
$l['mz_rec_exists'] = '记录已存在';
$l['mz_records_limit'] = '已达到添加记录的限制';
$l['mz_err_connect'] = '连接名称服务器时出错';
$l['mz_zone_restricted'] = '您尝试编辑的区域受限';
$l['mz_no_records'] = '没有记录';
$l['no_record_type'] = '必须指定记录类型';
$l['no_content'] = '必须指定内容';
$l['no_ttl'] = '必须指定 TTL';
$l['no_priority'] = '必须指定优先级';
$l['inv_domainid'] = '无效的域名 ID';

// pdns 语言字符串 - 前缀: pdns_
$l['pdns_conf_del'] = '您确定要删除此域名吗？';
$l['pdns_page_head'] = 'DNS 管理';
$l['pdns_add_done'] = '区域已成功添加';
$l['pdns_delete_done'] = '区域已成功删除';
$l['pdns_add_zone'] = '添加区域';
$l['pdns_zone_name'] = '区域名称';
$l['pdns_manage_zone'] = '管理';
$l['pdns_no_domains'] = '没有区域记录';
$l['pdns_no_name'] = '未指定域名';
$l['pdns_err_addzone'] = '添加区域时出错';
$l['pdns_err_delete'] = '删除区域时出错';
$l['pdns_inv_domain'] = '指定的域名无效';
$l['pdns_limit_domains'] = '已达到添加域名的最大数量';
$l['pdns_domain_exists'] = '此域名已存在';
$l['pdns_err_connect'] = '连接名称服务器时出错';
$l['pdns_no_dns'] = 'DNS 管理不可用';
$l['pdns_invalid_zone'] = '您尝试删除的 DNS 区域无效';
$l['pdns_primary_nameserver'] = '主名称服务器';
$l['pdns_hostmaster_email'] = '域名管理员邮箱';
$l['pdns_inv_email'] = '指定的域名管理员邮箱无效';
$l['pdns_inv_ns'] = '指定的主名称服务器无效';

// rdns 语言字符串 - 前缀: rdns_
$l['rdns_page_head'] = '添加反向 DNS';
$l['rdns_zone_name'] = '区域名称';
$l['rdns_exp_zone_name'] = '区域名称';
$l['rdns_ns'] = '名称服务器';
$l['rdns_hostmasteremail'] = '管理员邮箱';
$l['rdns_exp_hostmasteremail'] = '管理员邮箱';
$l['rdns_pdns_server'] = '选择服务器';
$l['rdns_exp_pdns_server'] = '要添加记录的 DNS 服务器';
$l['rdns_sub_but'] = '提交';
$l['rdns_rdns_ip'] = 'IP 地址';
$l['rdns_exp_rdns_ip'] = '输入您的 '.VM_SHORT.' IP 地址';
$l['rdns_rdns_domain'] = '域名';
$l['rdns_exp_rdns_domain'] = '输入完整的域名';
$l['rdns_no_rnds_ip'] = '请输入 IP 地址';
$l['rdns_no_rdns_domain'] = '请输入域名';
$l['rdns_no_pdnsid'] = 'PowerDNS ID 无效';
$l['rdns_err_zone'] = '未找到反向 DNS 区域条目。请联系管理员';
$l['rdns_is_rdns'] = '反向 DNS 条目已存在';
$l['rdns_no_dns'] = '管理员尚未设置 DNS 服务器。请联系管理员。';
$l['rdns_no_zone_name'] = '未指定区域名称';
$l['rdns_no_ns'] = '必须指定名称服务器。至少需要两个';
$l['rdns_no_hostmasteremail'] = '未指定管理员邮箱';
$l['rdns_inv_revzone'] = '指定的反向 DNS 区域无效';
$l['rdns_inv_ns'] = '指定的名称服务器 TLD 无效';
$l['rdns_inv_hostemail'] = '指定的管理员邮箱无效';
$l['rdns_err_connect'] = '无法连接到服务器。请检查服务器是否在线';
$l['rdns_err_save'] = '保存数据时出错';
$l['rdns_done'] = '反向 DNS 区域已成功添加';
$l['rdns_zone_exists'] = '此区域已存在';
$l['rdns_inv_ipaddress'] = '输入的 IP 地址无效';
$l['rdns_rdns_existing'] = '现有的反向 DNS 记录';
$l['rdns_deleted'] = '反向 DNS 记录已删除';
$l['rdns_id'] = 'ID';
$l['rdns_ip'] = 'IP';
$l['rdns_name'] = '名称';
$l['rdns_domain'] = '域名';
$l['rdns_db_conn_failed'] = '无法连接到反向 DNS 服务器，请联系管理员';

// edituser 语言字符串 - 前缀: edu_
$l['edu_no_user_email'] = '您未输入邮箱';
$l['edu_no_user_password'] = '您未输入密码';
$l['edu_invalid_email'] = '您输入的邮箱无效';
$l['edu_uid_not_found'] = '未找到用户 ID';
$l['edu_useradd_error'] = '编辑用户详细信息时出错';
$l['edu_page_head'] = '编辑用户';
$l['edu_done'] = '用户已编辑';
$l['edu_user_email'] = '邮箱';
$l['edu_user_password'] = '密码';

// rescue lang string - prefix : resc_
$l['resc_err_rescue_enable'] = '启用救援模式时出现一些错误';
$l['resc_err_rescue_disable'] = '禁用救援模式时出现一些错误';
$l['resc_err_downloading'] = '下载救援模板时出错';
$l['resc_err_delete_disk'] = '删除救援盘时出错';
$l['resc_cant_rescue'] = '在使用 ISO 时不允许进行救援操作。 请先删除 ISO';
$l['resc_heading'] = '救援模式';
$l['resc_rescue_exp'] = '救援模式提供了从另一个磁盘启动小型 Linux 环境的能力，这样您就可以拯救您的主 linux'.VM_SHORT.' 或存在于其上的备份文件';
$l['resc_enable_rescue'] = '启用救援模式';
$l['resc_rescue_enabled'] = '救援模式当前已启用。';
$l['resc_disable_rescue'] = '禁用救援模式';
$l['resc_rescue_disabled'] = '救援模式当前被禁用';
$l['resc_resuce_enable_success'] = '启用救援模式的进程已在后台启动';
$l['resc_resuce_disable_success'] = '禁用救援模式的进程已在后台启动';
$l['resc_rescue_enable_notify'] = '启用救援模式...';
$l['resc_rescue_disable_notify'] = '禁用救援模式...';
$l['resc_root_pass'] = '根密码';
$l['resc_root_pass_conf'] = '确认密码';
$l['resc_disable_rescue_err'] = '救援模式被管理员禁用';
$l['resc_passwords_do_not_match'] = '指定密码与确认密码不匹配';

// usersettings 语言字符串 - 前缀: us_
$l['lang_app_settings'] = '语言和外观设置';
$l['site_iden_settings'] = '站点标识设置';
$l['usr_pref_limits'] = '用户偏好和限制';
$l['leg_pol_settings'] = '法律和政策设置';
$l['auth_methods'] = '认证方法';
$l['us_no_lang'] = '没有选择语言';
$l['us_wrong_lang'] = '您选择的语言不存在';
$l['us_no_timezone'] = '你没有选择时区';
$l['us_timezone_invalid'] = '您选择的时区无效';
$l['us_wrong_theme'] = '您选择的主题不存在';
$l['us_page_head'] = '用户设置';
$l['us_change_final'] = '您的设置已成功保存';
$l['us_choose_lang'] = '选择语言';
$l['us_exp_lang'] = '选择你喜欢的语言';
$l['us_timezone'] = '时区';
$l['us_default_timezone'] = '服务器默认';
$l['us_edit_settings'] = '编辑设置';
$l['us_done'] = '设置已保存';
$l['us_choose_theme'] = '选择主题';
$l['us_exp_theme'] = '选择你喜欢的主题';
$l['us_no_theme'] = '没有选择主题';
$l['us_logo'] = '标志网址';
$l['us_mob_logo'] = '移动标志网址';
$l['us_login_logo'] = '登录标志 URL';
$l['us_logo_exp'] = '如果为空默认会显示Logo';
$l['us_vps_bandwidth_threshold'] = VM_SHORT.' 带宽阈值';
$l['us_vps_bandwidth_threshold_exp'] = '如果设置为零带宽阈值电子邮件将被禁用,以 % 表示的值';
$l['us_no_vps_bandwidth_threshold'] = '你没有输入带宽阈值';
$l['us_invalid_vps_bandwidth_threshold'] = '无效的带宽阈值';
$l['us_dom_name'] = '用户域名';
$l['us_dom_exp'] = '输入您的域名(eg: www.demo.com)';
$l['us_favicon_url'] = '用户图标 URL';
$l['us_favicon_url_exp'] = '如果为空，将显示默认的 Favicon';

$l['us_copyright_text'] = '版权';
$l['us_copyright_text_exp'] = '如果为空，将显示默认版权';
$l['us_policy_url'] = '隐私政策网址';
$l['us_policy_url_exp'] = '如果为空，则不会显示隐私政策';

$l['us_dom_invalid'] = '请输入有效的用户域名';
$l['us_no_url'] = '您没有输入用户 URL';
$l['us_logo_url_err'] = '请输入有效的徽标 URL';
$l['login_logo_err'] = '请输入有效的登录 Logo URL';
$l['mob_logo_url_err'] = '请输入有效的移动端 Logo URL';
$l['cuser_policy_url_err'] = '请输入有效的隐私政策 URL';
$l['us_favicon_url_err'] = '请输入有效的 Favicon URL';
$l['us_dom_no_blank'] = '域名一旦设置就不能为空。 它只能被改变';
$l['us_title'] = '网站标题';
$l['us_title_exp'] = '如果为空将显示默认网站标题';
//--------------HAProxy 语言字符串开始------------
// ManageVDF (haproxy) 语言字符串 - 前缀: vdf_
$l['vdf_heading'] = '域名转发';
$l['vdf_serid'] = '服务器';
$l['vdf_vpsid'] = VM_SHORT;
$l['vdf_proto'] = '协议';
$l['vdf_src_hname'] = '源域名/IP';
$l['vdf_src_dom'] = '源域名';
$l['vdf_src_ip'] = '源 IP';
$l['vdf_src_port'] = '源端口';
$l['vdf_dest_ip'] = '目标 IP';
$l['vdf_dest_port'] = '目标端口';

$l['vdf_add_title'] = '新建域名转发记录';
$l['vdf_sel_proto'] = '选择协议';
$l['vdf_select_ip'] = '选择 IP';

$l['vdf_no_act_sel'] = '未选择操作，请选择一个操作后重试';
$l['vdf_success_add'] = '添加成功';
$l['vdf_success_update'] = '数据更新成功';
$l['vdf_success_save'] = '保存更改';
$l['vdf_no_server_found'] = '未找到服务器';
$l['vdf_conf_del_entries'] = '删除所选条目？';
$l['vdf_success_del_entries'] = '成功删除条目';
$l['vdf_ser_not_found'] = '未找到请求的服务器';
$l['vps_not_found_on_server'] = '在所选服务器 ({{server}}) 上未找到请求的 '.VM_SHORT.' ({{vpsid}})';
$l['vdf_proto_no_support'] = '协议 ID ({{protocolid}}) 不受支持';
$l['vdf_no_id_found'] = '未找到 VDF ID ({{id}})';
$l['vdf_no_vps_id_found'] = '未找到 '.VM_SHORT.' ID ({{vpsid}})';
$l['vdf_inv_ipaddress'] = '指定的 IP 不属于您';
$l['vdf_no_vps'] = '未找到 '.VM_SHORT;

$l['vdf_empty_allowed_src_ips'] = '允许的源 IP 列表为空，管理员用户必须在使用此功能之前设置此 IP 列表';
$l['vdf_inv_src_port'] = '源端口 ({{src_port}}) 不是有效的端口号';
$l['vdf_in_use_src_port'] = '源端口 ({{src_port}}) 已被使用';
$l['vdf_inv_src_hostname'] = '所选源域名 ({{src_hostname}}) 不是有效的域名';
$l['vdf_inv_src_ip'] = '源 IP ({{src_ip}}) 不是有效的 IP';
$l['vdf_not_available_src_ip'] = '所选源 IP ({{$src_ip}}) 不可用于 '.VM_SHORT.' 域名转发';
$l['vdf_port_not_supported_tcp'] = '源端口 ({{src_port}}) 不支持所选协议 TCP，仅支持协议：HTTP 和 HTTPS';

$l['vdf_inv_dest_port'] = '目标端口 ({{dest_port}}) 不是有效的端口号';
$l['vdf_inv_dest_ip'] = '目标 IP ({{dest_ip}}) 不是有效的 IP 或未分配给此 VPS';

$l['vdf_note_point_domain'] = '注意：要使域名转发生效，此 VPS 的域名 ({{src_hostname}}) 必须指向以下 IP 之一：'."\n".'{{ips_list}}';
$l['vdf_err_exist_src_hostname_and_port'] = '源域名 ({{src_hostname}}) 和源端口 ({{src_port}}) 的记录已存在';

$l['vdf_db_query_error'] = '执行数据库查询时出错，无法处理请求';
$l['vdf_err_unknown'] = '处理请求时发生未知错误';

$l['vdf_err_haproxy_port_empty'] = '源端口为空';
$l['vdf_err_haproxy_port_used'] = '源端口 {{src_port}} 已被使用';
$l['vdf_in_haproxy_reservedports'] = '源端口 {{src_port}} 在保留端口列表中';
$l['vdf_in_haproxy_reservedports_http'] = '源端口 {{src_port}} 在仅允许 HTTP 或 HTTPS 协议的保留端口列表中';
$l['vdf_notin_haproxy_allowedports'] = '源端口 {{src_port}} 不在允许的端口列表中';

// VDF 信息部分语言
$l['vdf_info'] = '信息';
$l['vdf_info_server'] = '服务器';
$l['vdf_info_reservedports'] = '保留端口';
$l['vdf_info_allowedports'] = '允许的端口';
$l['vdf_info_reservedports_http'] = '仅限 HTTP/HTTPS 的保留端口';

// VDF 管理员和 '.VM_SHORT.' 日志
$l['vdf_domain_forwarding'] = '域名转发';
$l['vdf_source'] = '源';
$l['vdf_destination'] = '目标';
$l['vdf_added'] = '已添加';
$l['vdf_updated'] = '已更新';
$l['vdf_removed'] = '已删除';
$l['vdf_removed_multiple'] = '已删除多个';

// 域名转发的工具提示
$l['vdf_tooltip_edit'] = '编辑此记录';
$l['vdf_tooltip_save'] = '保存对此记录的更改';
$l['vdf_tooltip_revert'] = '撤销对此记录的更改';
$l['vdf_tooltip_delete'] = '删除此记录';

$l['vdf_skipped_msg'] = '此记录条目已被跳过';
$l['vdf_skipped_haproxy_reservedports'] = '源端口在阻止端口列表中';
$l['vdf_skipped_haproxy_reservedports_http'] = '源端口在仅限 HTTP 和 HTTPS 的保留端口列表中';
$l['vdf_skipped_haproxy_allowedports'] = '源端口不在允许的端口列表中';

//--------------HAProxy 语言字符串结束------------

// 创建语言字符串 - 前缀: li_
$l['li_no_type'] = '请指定虚拟化类型';
$l['li_num_vs_over'] = '您已创建了允许的最大数量的虚拟机';
$l['li_no_hname'] = '请指定主机名';
$l['li_no_os'] = '请为 '.VM_SHORT.' 选择一个操作系统';
$l['li_no_rootpass'] = '请指定 Root 密码';
$l['li_no_disk_space'] = '请指定要分配的磁盘空间';
$l['li_no_ram'] = '请指定内存大小';
$l['li_no_vncpass'] = '请指定 VNC 密码';
$l['li_no_bandwidth'] = '请指定带宽';
$l['li_no_cpu_units'] = '请指定 CPU 单元';
$l['li_no_cpu_cores'] = '请指定核心数量';
$l['li_cores_max'] = '最大核心数';
$l['li_space_max'] = '最大 GB';
$l['li_invalid_sg'] = '您选择的区域无效';
$l['li_invalid_plid'] = '您选择的计划无效';
$l['li_no_plid'] = '未选择计划，请选择一个有效的计划';
$l['li_invalid_virt'] = '您选择的区域不支持所选的虚拟化类型';
$l['li_no_percent_cpu'] = '请指定允许的 CPU 使用百分比';
$l['li_no_swap_ram'] = '请指定交换内存';
$l['li_no_burst_ram'] = '请指定可突发的内存限制';
$l['li_invalid_os'] = '您提交的操作系统无效';
$l['li_no_ip'] = '请为 '.VM_SHORT.' 指定至少一个 IP';
$l['li_invalid_uid'] = '您提交的用户不存在';
$l['li_no_user'] = '您未指定用户邮箱';
$l['li_no_user_pass'] = '您未指定用户密码';
$l['li_invalid_email'] = '用户邮箱地址无效';
$l['li_emailexist'] = '您指定的新用户邮箱已存在';
$l['li_err_user'] = '添加用户时出错';
$l['li_invalid_hostname'] = '您提交的主机名无效';
$l['li_less_ram'] = '您没有足够的内存来创建此 '.VM_SHORT;
$l['li_less_burst'] = '您没有足够的突发内存来创建此 '.VM_SHORT;
$l['li_less_swap'] = '您没有足够的交换内存来创建此 '.VM_SHORT;
$l['li_less_space'] = '您没有足够的磁盘空间来创建此 '.VM_SHORT;
$l['li_less_inodes'] = 'inode 数量不应少于 50000';
$l['li_less_vs'] = '您不允许创建更多的虚拟机';
$l['li_less_bandwidth'] = '您没有足够的带宽来创建此 '.VM_SHORT;
$l['li_less_network_speed'] = '您没有足够的网络速度来创建此 '.VM_SHORT;
$l['li_less_upload_speed'] = '您没有足够的上传速度来创建此 '.VM_SHORT;
$l['li_less_ipv4'] = '您没有足够的 IPv4 地址来创建此 '.VM_SHORT;
$l['li_less_ip_int'] = '您没有足够的内部 IP 地址来创建此 '.VM_SHORT;
$l['li_less_ipv6'] = '您没有足够的 IPv6 地址来创建此 '.VM_SHORT;
$l['li_less_ipv6_subnet'] = '您没有足够的 IPv6 子网来创建此 '.VM_SHORT;
$l['li_max_cores_exceeded'] = '您不允许创建具有如此多核心的 '.VM_SHORT;
$l['li_max_space_exceeded'] = '您已超出分配的磁盘空间限制';
$l['ei_max_space_exceeded'] = $l['li_max_space_exceeded'];
$l['li_less_cores'] = '您没有足够的 CPU 核心来创建此 '.VM_SHORT;
$l['li_invalid_cores'] = '无效的核心值';
$l['li_no_user_resource'] = '您已达到允许创建的最大用户数量';
$l['li_no_server'] = '您选择的区域已完全利用，没有足够的资源来创建此 '.VM_SHORT.'。请向管理员报告';
$l['li_ipv4_over'] = '您选择的区域没有足够的 IPv4 资源来创建此 '.VM_SHORT.'。请向管理员报告';
$l['li_ipv6_over'] = '您选择的区域没有足够的 IPv6 资源来创建此 '.VM_SHORT.'。请向管理员报告';
$l['li_ipv6_subnet_over'] = '您选择的区域没有足够的 IPv6 子网来创建此 '.VM_SHORT.'。请向管理员报告';
$l['li_no_webuzo_template'] = '您选择的操作系统模板不是 Webuzo 模板';
$l['li_err_swapsize'] = '指定的交换内存大小不能大于或等于总磁盘空间';
$l['li_inv_kvm_cache'] = '提交的磁盘缓存无效';
$l['li_inv_io_mode'] = '提交的 I/O 策略无效';
$l['li_inv_vnc_keymap'] = '提交的 VNC 键位映射无效';
$l['li_err_vpslimit'] = VM_SHORT.' 创建限制已超出';
$l['li_page_head'] = '启动 '.VM_SHORT;
$l['li_vstype'] = '类型';
$l['li_done'] = VM_LONG.' 已创建';
$l['li_newvs_vpsid'] = VM_SHORT.' ID';
$l['li_newvs_vps_name'] = VM_SHORT.' 名称';
$l['li_newvs_rootpass'] = 'Root 密码';
$l['li_newvs_vnc'] = 'VNC 详细信息';
$l['li_newvs_vncpass'] = 'VNC 密码';
$l['li_newvs_ips'] = 'IP 列表';
$l['li_newvs_ips6'] = 'IPv6';
$l['li_vs_server'] = '服务器';
$l['li_exp_server'] = '更改当前服务器以更改服务器';
$l['li_vs_ser_id'] = 'ID';
$l['li_vs_user'] = '用户';
$l['li_vs_user_exp'] = '选择现有用户或添加用户';
$l['li_user_email'] = '用户邮箱';
$l['li_user_pass'] = '密码';
$l['li_add_user'] = '添加用户';
$l['li_regions'] = '区域';
$l['li_virt_type'] = '虚拟化';
$l['li_os'] = '操作系统';
$l['li_select'] = '选择';
$l['li_vs_plan'] = '选择计划';
$l['li_plan_exp'] = '选择一个预定义的计划';
$l['li_hvm'] = 'Xen HVM';
$l['li_hvm_exp'] = '您要为此 '.VM_SHORT.' 启用完全虚拟化吗？';
$l['li_vsos'] = '操作系统';
$l['li_vsos_exp'] = '为 '.VM_SHORT.' 选择操作系统';
$l['li_vsiso'] = 'ISO';
$l['li_vsiso_exp'] = '如果选择了 ISO，机器将从该 ISO 启动';
$l['li_sec_vsiso'] = '辅助 CDROM 的 ISO';
$l['li_sec_vsiso_exp'] = '为辅助 CDROM 选择一个 ISO';
$l['li_none'] = '无';
$l['li_rootpass'] = VM_SHORT.' Root 密码';
$l['li_rootpass_exp'] = VM_SHORT.' 的 Root 用户/管理员密码';
$l['li_randpass'] = '生成另一个随机密码';
$l['li_hostname'] = '主机名';
$l['li_hostname_exp'] = '输入 '.VM_SHORT.' 的主机名。例如：www.domain.com';
$l['li_vpscount_exp'] = '如果您的 '.VM_SHORT.' 数量超过 10，则需要提供一个通用的主机名';
$l['li_ip'] = 'IP 地址';
$l['li_ips'] = 'IP 地址';
$l['li_ips_exp'] = '您可以指定要分配的 IP 数量';
$l['li_ips6_subnet'] = 'IPv6 子网';
$l['li_ips6_subnet_exp'] = '您可以指定要分配的 IPv6 子网数量';
$l['li_ips6'] = 'IPv6 地址';
$l['li_ips6_exp'] = '您可以指定要分配的 IPv6 数量';
$l['li_ips_int'] = '内部 IP 地址';
$l['li_ips_int_exp'] = '您可以指定要分配的内部 IP 数量';
$l['li_add_ip'] = '+';
$l['li_remove_ip'] = '-';
$l['li_add_to_ips'] = '<<';
$l['li_rem_from_ips'] = '移除此 IP';
$l['li_add_dns'] = '+';
$l['li_hdd'] = '磁盘空间';
$l['li_exp_hdd'] = VM_SHORT.' 允许的磁盘空间';
$l['li_mac'] = 'MAC 地址';
$l['li_exp_mac'] = '六组两位十六进制数字，用冒号分隔 (:)，例如：01:23:45:67:89:ab';
$l['li_space_gb'] = 'GB';
$l['li_inodes'] = 'Inodes';
$l['li_iondisk'] = VM_SHORT.' 内允许的最大 Inodes（即文件）数量。推荐值：500000+';
$l['li_gram'] = '保证内存';
$l['li_exp_gram'] = VM_SHORT.' 始终拥有的内存量';
$l['li_ram_mb'] = 'MB';
$l['li_bram'] = '突发内存';
$l['li_exp_bram'] = VM_SHORT.' 可以使用的最大内存量';
$l['li_swap'] = '交换内存';
$l['li_exp_swap'] = '';
$l['li_exp_swap_hvm'] = '如果上面选择了操作系统模板，将尝试创建交换分区';
$l['li_band'] = '带宽';
$l['li_exp_band'] = VM_SHORT.' 的每月带宽限制。0 表示无限制';
$l['li_band_gb'] = 'GB';
$l['li_cpunit'] = 'CPU 单元';
$l['li_cpalloc'] = '要分配的 CPU 单元';
$l['li_cpalloc_xen'] = '推荐值：256';
$l['li_cpalloc_openvz'] = '推荐值：1000';
$l['li_cpalloc_kvm'] = '推荐值：1024';
$l['li_units'] = '单元';
$l['li_cores'] = 'CPU 核心';
$l['li_cpucore_exp'] = '推荐值：';
$l['li_percent'] = 'CPU %';
$l['li_cpuperutil'] = VM_SHORT.' 不允许超过的 CPU 时间百分比。<br />设置为 <b>0</b> 表示无限制。<br />推荐值：10';
$l['li_io'] = 'I/O 优先级';
$l['li_io0-7'] = '从 0-7 中选择优先级';
$l['li_na'] = '网络速度';
$l['li_na_exp'] = '请指定网络速度';
$l['li_ubcsettings'] = 'UBC 设置';
$l['li_exp_ubc'] = '如果选中，您将被重定向以编辑 '.VM_SHORT.' 的 UBC 设置';
$l['li_submit'] = '创建';
$l['li_addvoption'] = '高级选项';
$l['li_addvhide'] = '隐藏高级选项';
$l['li_network_speed'] = '网络速度';
$l['li_network_speed_exp'] = '输入 0 或留空表示无限制。<br />使用选择框以方便选择';
$l['li_upload_speed'] = '上传速度';
$l['li_upload_speed_exp'] = '输入 0 或留空表示无限制。<br />使用选择框以方便选择';
$l['li_net_kb'] = 'KB/s';
$l['li_no_limit'] = '无限制';
$l['li_shadow'] = '影子内存';
$l['li_shadow_exp'] = '推荐值：8 MB';
$l['li_vncpass'] = 'VNC 密码';
$l['li_vncpass_exp'] = VM_SHORT.' 的 VNC 密码。点击图标生成新的随机密码';
$l['li_free'] = '免费';
$l['li_band_suspend'] = '带宽暂停';
$l['li_exp_band_suspend'] = '如果 '.VM_SHORT.' 使用的带宽超过指定值，则暂停它';
$l['li_tuntap'] = 'Tun/Tap';
$l['li_ppp'] = 'PPP';
$l['li_exp_tuntap'] = '为 '.VM_SHORT.' 启用 Tun/Tap';
$l['li_exp_ppp'] = '为 '.VM_SHORT.' 启用 PPP（点对点协议）';
$l['li_osreinstall'] = '操作系统重装限制';
$l['li_exp_osreinstall'] = '如果您想限制每月操作系统重装的次数。<br />例如：0 表示无限制';
$l['li_changenic'] = '虚拟网络接口类型';
$l['li_exp_changenic'] = '如果您想更改网络接口类型。选项为默认或 E1000。如果启用了 <b>virtio</b>，则将使用 <b>virtio</b> 作为虚拟网卡类型';
$l['li_add_route'] = '使用路由网络';
$l['li_exp_add_route'] = '如果选中，将使用路由网络';
$l['li_nic_default'] = 'Realtek 8139（默认）';
$l['li_nic_e1000'] = 'Intel E1000';
$l['li_change_vif_type'] = '虚拟网络接口仿真类型';
$l['li_exp_change_vif_type'] = '如果您想更改网络接口仿真类型。选项为 <b>netfront</b> 或 <b>ioemu</b>';
$l['li_viftype_ioemu'] = 'ioemu';
$l['li_viftype_netfront'] = 'netfront（默认）';
$l['li_usevirtio'] = '启用 virtio';
$l['li_exp_usevirtio'] = '使用 <b>virtio</b> 作为 I/O 虚拟化';
$l['li_usesec_cdrom'] = '启用辅助 CD ROM';
$l['li_exp_usesec_cdrom'] = '启用此选项以将辅助 ISO 附加到虚拟机';
$l['li_kvm_cache'] = '磁盘缓存';
$l['li_exp_kvm_cache'] = '控制缓存机制';
$l['li_io_mode'] = 'I/O 策略';
$l['li_vnc_keymap'] = 'VNC 控制台键位映射';
$l['li_dns'] = 'DNS 名称服务器';
$l['li_exp_dns'] = '如果不清楚，请使用 4.2.2.1 和 4.2.2.2';
$l['li_mg'] = '媒体组';
$l['li_mg_exp'] = '如果未分配媒体组，则所有媒体都将对此 '.VM_SHORT.' 可用';
$l['li_apps'] = '应用';
$l['li_apps_exp'] = '选择您要安装的 Webuzo 应用程序';
$l['li_ploop'] = 'Ploop';
$l['li_ploop_exp'] = '如果启用，'.VM_SHORT.' 将以 Ploop 格式创建';
$l['li_mac_temp_vncdetails'] = 'MAC 地址：';
$l['li_mail_temp_vnctitle'] = 'VNC 详细信息为：';
$l['li_mail_temp_vncdetails'] = 'VNC 详细信息：';
$l['li_mail_temp_vncpasswd'] = 'VNC 密码：';
$l['li_reinstall'] = '重装 '.VM_LONG;
$l['li_space'] = '磁盘空间';
$l['li_space_exp'] = VM_SHORT.' 允许的磁盘空间';
$l['li_ram'] = '保证内存';
$l['li_ram_exp'] = VM_SHORT.' 始终拥有的内存量';
$l['li_burst'] = '突发内存';
$l['li_burst_exp'] = VM_SHORT.' 可以使用的最大内存量';
$l['li_swap'] = '交换内存';
$l['li_swap_exp'] = '交换内存';
$l['li_swap_hvm'] = '如果上面选择了操作系统模板，将尝试创建交换分区';
$l['li_bandwidth'] = '带宽';
$l['li_bandwidth_exp'] = VM_SHORT.' 的每月带宽限制。0 表示无限制';
$l['li_free'] = '免费';
$l['li_unlimited'] = '无限制';
$l['li_submit'] = '创建';
$l['li_weak_pass'] = '密码必须至少包含以下 3 项：大写字母、小写字母、数字或特殊符号';
$l['li_usevirtio'] = '启用 virtio';
$l['li_usevirtio_exp'] = '使用 virtio 作为 I/O 虚拟化';
$l['li_plan_name'] = '计划名称';
$l['li_plan_details'] = '计划详情';
$l['li_new_vps_info'] = '新建 '.VM_SHORT;
$l['li_back'] = '返回';
$l['li_continue'] = '继续';
$l['li_nic'] = '虚拟网络接口类型';
$l['li_nic_exp'] = '选择虚拟网络接口类型';
$l['li_vif'] = '虚拟网络接口仿真类型';
$l['li_vif_exp'] = '选择网络接口仿真类型。选项为 netfront 或 ioemu';
$l['li_enable_cpu_topology'] = 'CPU 拓扑';
$l['li_enable_cpu_topology_exp'] = '指定要分配给 '.VM_SHORT.' 的 CPU 核心数、线程数和插槽数';
$l['li_inv_topology'] = '无效的 CPU 拓扑值。所有指定的拓扑值必须大于零';
$l['li_err_topology_calc'] = '指定的 CPU 核心数应等于拓扑限制（CPU 核心数 = 插槽数 x 拓扑核心数 x 线程数）';
$l['li_sockets'] = 'CPU 插槽';
$l['li_threads'] = 'CPU 线程';
$l['li_month'] = '月';
$l['li_hour'] = '小时';
$l['li_invalid_plid'] = '您提交的计划无效';
$l['li_install_app'] = '安装应用程序';
$l['li_install_app_exp'] = '注意：Webuzo 将作为控制面板安装';
$l['li_insufficient_balance'] = '您的余额不足，<a href="#act=billing&tab=make_payment">请立即充值</a>';
$l['li_lb_done'] = '负载均衡器已创建';

// editvm 语言字符串 - 前缀: ei_
$l['ei_page_head'] = '编辑 '.VM_SHORT;
$l['ei_vs_user'] = '用户';
$l['ei_vs_user_exp'] = '选择现有用户或添加用户';
$l['ei_user_email'] = '用户邮箱';
$l['ei_user_pass'] = '密码';
$l['ei_add_user'] = '添加用户';
$l['ei_unknown'] = '未知';
$l['ei_vsos'] = '操作系统';
$l['ei_vsos_exp'] = '此 '.VM_SHORT.' 的当前操作系统';
$l['ei_vsiso'] = 'ISO';
$l['ei_vsiso_exp'] = '如果选择了 ISO，机器将从该 ISO 启动';
$l['ei_none'] = '无';
$l['ei_hostname'] = '主机名';
$l['ei_hostname_exp'] = '输入 '.VM_SHORT.' 的主机名。例如：www.domain.com';
$l['ei_rootpass'] = VM_SHORT.' Root 密码';
$l['ei_rootpass_exp'] = '如果不想更改当前密码，请留空';
$l['ei_randpass'] = '生成另一个随机密码';
$l['ei_ip'] = 'IP 地址';
$l['ei_ips_exp'] = '您可以从 IP 池中选择或指定其他 IP';
$l['ei_ips6_subnet'] = 'IPv6 子网';
$l['ei_ips6_subnet_exp'] = '您可以从 IPv6 子网列表中选择';
$l['ei_free'] = '免费';
$l['ei_ips6'] = 'IPv6 地址';
$l['ei_ips6_exp'] = '您可以指定要分配的 IPv6 数量或从 IPv6 池中选择';
$l['ei_space'] = '磁盘空间';
$l['ei_space_exp'] = VM_SHORT.' 允许的磁盘空间';
$l['ei_ram'] = '保证内存';
$l['ei_ram_exp'] = VM_SHORT.' 始终拥有的内存量';
$l['ei_burst'] = '突发内存';
$l['ei_burst_exp'] = VM_SHORT.' 可以使用的最大内存量';
$l['ei_swap'] = '交换内存';
$l['ei_swap_exp'] = '交换内存';
$l['ei_bandwidth'] = '带宽';
$l['ei_bandwidth_exp'] = VM_SHORT.' 的每月带宽限制。0 表示无限制';
$l['ei_cores'] = 'CPU 核心';
$l['ei_cpucore_exp'] = '推荐值：';
$l['ei_cores_max'] = '最大核心数';
$l['ei_unlimited'] = '无限制';
$l['ei_network_speed'] = '网络速度';
$l['ei_network_speed_exp'] = '输入 0 或留空表示无限制。<br />使用选择框以方便选择';
$l['ei_upload_speed'] = '上传速度';
$l['ei_upload_speed_exp'] = '输入 0 或留空表示无限制。<br />使用选择框以方便选择';
$l['ei_net_kb'] = 'KB/s';
$l['ei_no_limit'] = '无限制';
$l['ei_vncpass'] = 'VNC 密码';
$l['ei_vncpass_exp'] = VM_SHORT.' 的 VNC 密码。点击图标生成新的随机密码';
$l['ei_submit'] = '编辑 '.VM_LONG;
$l['ei_done'] = VM_LONG.' 已成功编辑';
$l['ei_addvoption'] = '高级选项';
$l['ei_system_info'] = '系统信息';
$l['ei_access_details'] = '访问详情';
$l['ei_network_config'] = '网络配置';
$l['ei_resource_allocation'] = '资源分配';
$l['ei_firwall_options'] = '防火墙选项';
$l['ei_user_options'] = '用户选项';
$l['ei_system_resources'] = '系统资源';
$l['ei_adv_system_config'] = '增强系统配置';
$l['ei_no_uid'] = '未选择用户';
$l['ei_no_nonalphanumeric'] = 'VNC 密码不允许使用非字母数字字符';
$l['ei_less_space'] = '您没有足够的磁盘空间来创建此 '.VM_SHORT;
$l['ei_less_ram'] = '您没有足够的内存来创建此 '.VM_SHORT;
$l['ei_max_cores_exceeded'] = '您不允许创建具有如此多核心的 '.VM_SHORT;
$l['ei_less_cores'] = '您没有足够的 CPU 核心来创建此 '.VM_SHORT;
$l['ei_less_burst'] = '您没有足够的突发内存来创建此 '.VM_SHORT;
$l['ei_ipv4_over'] = '您选择的区域没有足够的 IPv4 资源来创建此 '.VM_SHORT.'。请向管理员报告';
$l['ei_ipv6_over'] = '您选择的区域没有足够的 IPv6 资源来创建此 '.VM_SHORT.'。请向管理员报告';
$l['ei_ipv6_subnet_over'] = '您选择的区域没有足够的 IPv6 子网来创建此 '.VM_SHORT.'。请向管理员报告';
$l['ei_less_ipv4'] = '您没有足够的 IPv4 地址来创建此 '.VM_SHORT;
$l['ei_less_ipv6'] = '您没有足够的 IPv6 地址来创建此 '.VM_SHORT;
$l['ei_less_ipv6_subnet'] = '您没有足够的 IPv6 子网来创建此 '.VM_SHORT;
$l['ei_wrong_user'] = '您无法更改为该用户';
$l['ei_only_user'] = '在编辑 '.VM_SHORT.' 的用户时，无法更改资源';
$l['ei_less_swap'] = '您没有足够的交换内存';
$l['ei_usevirtio'] = '启用 virtio';
$l['ei_usevirtio_exp'] = '使用 virtio 作为 I/O 虚拟化';
$l['ei_less_bandwidth'] = '您没有足够的带宽资源分配给此 '.VM_SHORT;
$l['ei_enable_cpu_topology'] = 'CPU 拓扑';
$l['ei_enable_cpu_topology_exp'] = '指定要分配给 '.VM_SHORT.' 的 CPU 核心数、线程数和插槽数';
$l['ei_inv_topology'] = '无效的 CPU 拓扑值。所有指定的拓扑值必须大于零';
$l['ei_err_topology_calc'] = '指定的 CPU 核心数应等于拓扑限制（CPU 核心数 = 插槽数 x 拓扑核心数 x 线程数）';
$l['ei_sockets'] = 'CPU 插槽';
$l['ei_threads'] = 'CPU 线程';
$l['ei_in_plan'] = '包含在计划中';
$l['ei_add_pricing'] = '额外定价';
$l['ei_plan'] = '当前计划';
$l['ei_plan_exp'] = '选择您要更改的计划。<b>注意</b>：如果您的当前资源多于新计划，您将根据资源定价收取额外费用';
$l['ei_plid_space'] = '您无法降级到较低的计划';

// controlpanel 语言字符串 - 前缀: cpan_
$l['cpan_wrong_panel'] = '您选择的面板无效';
$l['cpan_err_installing'] = '安装面板时出错';
$l['cpan_wrong_os'] = '控制面板无法安装在 ';
$l['cpan_confirm'] = '您确定要安装此面板吗？服务器上的数据将发生显著变化。此过程将下载并安装所选控制面板到您的 '.VM_SHORT.' 上。此过程可能需要长达 90 分钟。您可以通过 SSH 跟踪安装进度';
$l['cpan_done'] = '面板安装已开始，将很快完成';
$l['cpan_change_onboot'] = '面板将在您关闭并启动 '.VM_SHORT.' 时安装';
$l['cpan_vps_start'] = VM_SHORT.' 未运行！请先启动 '.VM_SHORT;
$l['cpan_heading'] = '控制面板';
$l['cpan_os_notice'] = '您正在使用自定义模板或以下面板不支持的操作系统';
$l['cpan_no_file'] = '控制面板支持的操作系统的 JSON 文件丢失，因此显示所有面板';

// backup2 lang string - prefix : bkup2_
$l['bkup2_page_head'] = '备份';
$l['bkup2_list_head'] = '备份清单 '.VM_SHORT.' ID: ';
$l['backuply_list_head'] = '增量备份列表 '.VM_SHORT.' ID: ';
$l['backuply_list'] = '增量备份';
$l['bkup2_list_exp'] = '下面列出了'.VM_SHORT.'可用的备份日期,您可以相应地恢复或删除它们.';
$l['bkup2_date'] = '备份时间';
$l['bkup2_size'] = '大小';
$l['bkup2_action'] = '操作';
$l['bkup2_restore'] = '恢复';
$l['bkup2_delete'] = '删除备份';
$l['bkup2_now'] = '立即备份';
$l['bkup2_conf_cbackup'] = '你确定要创建备份吗？';
$l['bkup2_conf_restore'] = '你确定要恢复这个备份吗？';
$l['bkup2_conf_delete'] = '你确定要删除这个备份吗？';
$l['bkup2_list'] = '备份列表';
$l['bkup2_settings'] = '设置';
$l['bkup2_backup_server'] = '备份服务器';
$l['bkup2_backup_server_exp'] = '如果指定备份将被上传到备份服务器';
$l['bkup2_none'] = '无';
$l['bkup2_server'] = '备份服务器';
$l['bkup2_no_day'] = '请指定备份的有效日期';
$l['bkup2_no_date'] = '指定的备份日期无效';
$l['bkup2_no_freq'] = '请指定一个有效的备份频率';
$l['bkup2_no_time'] = '请指定备份的有效时间';
$l['bkup2_no_bserid'] = '请指定一个有效的备份服务器';
$l['bkup2_done_backup'] = ''.VM_SHORT.' 备份过程已经开始，请等待几分钟以完成，完成后您将收到一封通知电子邮件';
$l['bkup2_done_restore'] = ''.VM_SHORT.' 恢复过程已经开始，请等待几分钟以完成，完成后您将收到一封通知电子邮件';
$l['bkup2_done_delete'] = ''.VM_SHORT.' 备份已成功删除';
$l['bkup2_done_save_settings'] = '备份设置已成功保存。';
$l['bkup2_err_backup'] = '创建备份时出错';
$l['bkup2_err_restore'] = '恢复时出现错误 '.VM_SHORT;
$l['bkup2_err_deletevpsbackup'] = '删除备份时出错 '.VM_SHORT;
$l['bkup2_err_backup_not_allowed'] = '这个'.VM_SHORT.' 不允许备份';
$l['bkup2_err_task_running'] = '备份或恢复过程已经为此运行 '.VM_SHORT.'. 请耐心等待完成';
$l['bkup2_err_backup_limit'] = '您已达到此 '.VM_SHORT.' 本月的备份限制。';
$l['bkup2_err_restore_limit'] = '您已达到此 '.VM_SHORT.' 本月的恢复限制。';
$l['bkup2_err_save_settings'] = '保存备份设置时出错';
$l['bkup2_monthly_bkups_used'] = '每月备份:';
$l['bkup2_monthly_restores_used'] = '每月恢复:';
$l['bkup2_current_cycle'] = '当前周期:';
$l['bkup2_unlimited'] = '无限';

// hvmsettings 语言字符串 - 前缀: hvm_
$l['virtualization_settings'] = '虚拟化设置';
$l['system_config'] = '系统配置';
$l['container_settings'] = '容器设置';
$l['hvm_virt_error'] = '此虚拟化没有 HVM 设置';
$l['hvm_rescue_enabled'] = '此 '.VM_SHORT.' 处于救援模式，无法更改';
$l['hvm_invalid_iso'] = '您选择的 ISO 无效';
$l['hvm_err_editing'] = '保存设置时出现了一些错误';
$l['hvm_heading'] = 'HVM 设置';
$l['hvm_submit_button'] = '提交';
$l['hvm_done'] = '设置已保存';
$l['hvm_apic'] = 'APIC';
$l['hvm_acpi'] = 'ACPI';
$l['hvm_vnc'] = 'VNC';
$l['hvm_boot_order'] = '引导顺序';
$l['hvm_isos'] = '选择 ISO';
$l['hvm_none'] = '无';
$l['hvm_tuntap_enable'] = '开启 Tun/Tap';
$l['hvm_ppp_enable'] = '启用 PPP';
$l['hvm_ppp__info_enable'] = '点对点协议';
$l['hvm_disabled'] = 'HVM 设置已被管理员禁用';
$l['hvm_hdd'] = '硬盘';
$l['hvm_cdrom'] = '光驱';
$l['hvm_vnc_keymap'] = 'VNC 控制台键位映射';
$l['hvm_enable_vga'] = '启用 VGA';
$l['hvm_enable_acceleration'] = '启用加速';
$l['hvm_enable_acceleration_exp'] = '如果勾选，将为 '.VM_SHORT.' 启用 2D 和 3D 加速';
$l['hvm_sec_iso'] = '二级 CDROM 的 ISO';
$l['hvm_sec_iso_exp'] = '为辅助 CDROM 选择一个 ISO';
$l['hvm_nic_type'] = '虚拟网络接口类型';
$l['hvm_nic_type_exp'] = '如果你想改变网络接口类型。选项是默认值或 E1000。如果启用了 virtio，virtio 将用作虚拟网卡类型';
$l['nic_default'] = 'Realtek 8139（默认）';
$l['nic_e1000'] = 'Intel E1000';
$l['nic_ne2k_pci'] = 'Novell NE2000';
$l['nic_i82559er'] = 'Intel i82559er';
$l['nic_pcnet'] = 'AMD PCNET';
$l['nic_ne2k_isa'] = 'Novell E2000 ISA';
$l['nic_virtio'] = 'Virtio';
$l['nic_vmxnet3'] = 'VMware vmxnet3';
$l['hvm_enable_virtio'] = '启用 Virtio'; 
$l['hvm_fuse'] = '在容器中启用 Fuse';
$l['hvm_fuse_exp'] = '如果勾选，Fuse 将在创建新容器时启用。';
$l['hvm_ipip'] = '在容器中启用 IPIP';
$l['hvm_ipip_exp'] = '如果勾选，IPIP 将在创建新容器时启用。';
$l['hvm_ipgre'] = '在容器中启用 IPGRE';
$l['hvm_ipgre_exp'] = '如果勾选，IPGRE 将在创建新容器时启用。';
$l['hvm_nfs'] = '在容器中启用 NFS';
$l['hvm_nfs_exp'] = '如果勾选，NFS 将在创建新容器时启用。';
$l['hvm_quotaugidlimit'] = '在容器中启用 QUOTAUGIDLIMIT';
$l['hvm_quotaugidlimit_exp'] = '启用或禁用容器内的用户和组磁盘配额。如果值为 0 或未设置，容器内的磁盘配额将被禁用且不计入。<br />
<b>注意：</b>这将重启容器。';
$l['hvm_iolimit'] = '为容器设置 IO 带宽限制';
$l['hvm_iolimit_exp'] = '如果设置，执行 IO 操作时不会超过指定的限制。';
$l['hvm_iopslimit'] = '为容器设置 IOPS 限制';
$l['hvm_iopslimit_exp'] = '如果设置，每秒的 IO 操作不会超过指定的限制。';
$l['hvm_admin_iso'] = '管理员 ISO';
$l['hvm_user_iso'] = '用户 ISO';
$l['hvm_addiso'] = '添加 ISO';
$l['hvm_listiso'] = 'ISO 列表';
$l['hvm_timezone'] = '选择 '.VM_SHORT.' 时区';

// cpu lang string - prefix : cpu_
$l['cpu_header'] = ' CPU ';
$l['cpu_cpuinfo'] = 'CPU 信息';
$l['cpu_totalcpu'] = '总共 CPU 计算单位 :'; 
$l['cpu_cpuutilised'] = '已使用 CPU 计算单位 : ';
$l['cpu_poweredby'] = '技术支持：';
$l['cpu_graphheader'] = 'CPU 使用率';
$l['cpu_trademarks'] = '所有使用的商标均为其各自公司的商标或注册商标。';
$l['cpu_not_supported'] = '不支持此资源的当前利用率监控。';

// ram lang string - prefix : ram_
$l['ram_header'] = ' 内存';
$l['ram_raminfo'] = '内存信息';
$l['ram_totalram'] = '内存 : ';
$l['ram_gaurateed'] = '最低可用内存 : ';
$l['ram_burstable'] = '可瞬时使用 ';
$l['ram_swap'] = 'SWAP';
$l['ram_utilised'] = '内存已使用 :';
$l['ram_percentram'] = '内存使用率 % :';
$l['ram_graphheader'] = '内存使用率';
$l['ram_not_supported'] = '当前不支持对此资源的利用率监控。';
// disk lang string - prefix : disk_
$l['disk_header'] = '磁盘';
$l['disk_diskinfo'] = '磁盘信息';
$l['disk_totaldisk'] = '总可用 : ';
$l['disk_diskutilised'] = '已使用 : ';
$l['disk_percentdisk'] = '已使用 % : ';
$l['disk_graphheader'] = '磁盘 用量';
$l['disk_inodesinfo'] ='Inodes 信息';
$l['disk_inodestotal'] = '总可用 Inodes :'; 
$l['disk_inodesutilised'] = '已使用 : ';
$l['disk_percent_inodes'] = '已使用 % :'; 
$l['disk_inodesheader'] = 'Inodes 用量';
$l['disk_not_supported'] = '当前不支持对此资源的利用率监控。';
// bandwidth lang string - prefix : band_
$l['band_heading'] = '带宽';
$l['band_bandwidthinfo'] = '带宽信息';
$l['band_Total_Bandwidth'] = '总带宽 :';
$l['band_bandwidth_utilized'] = '已使用 : ';
$l['band_percent_utilized'] = '% 已使用 : ';
$l['band_graphheader'] = '带宽利用率';
$l['band_unlimited'] = '无限制';
$l['band_range'] = '在此选择您的定制范围';
$l['band_network_speed'] = '网络速度 (MB/s)';
$l['band_prev'] = '上个月';
$l['band_next'] = '下个月';

// console lang string - prefix : cs_
$l['cs_disabled'] = '串行控制台已禁用';
$l['cs_call_failed'] = 'API 调用失败。请联系管理员';
$l['cs_heading'] = '串行控制台';
$l['cs_none'] = '未找到现有的控制台会话。请创建一个！';
$l['cs_create'] = '创建会话';
$l['cs_creating'] = '正在创建会话...';
$l['cs_destroying'] = '正在销毁会话...';
$l['cs_details'] = '以下是控制台详细信息';
$l['cs_expires'] = '过期时间';
$l['cs_ip'] = 'IP 地址';
$l['cs_port'] = '端口';
$l['cs_username'] = '用户名';
$l['cs_password'] = '密码';
$l['cs_destroy'] = '销毁会话';
$l['cs_java_console'] = 'Java 控制台';
// statuslogs lang string - prefix : sts_
$l['sts_heading'] = '状态日志';
$l['sts_running'] = '在线';
$l['sts_stopped'] = '离线';
$l['sts_sts'] = '系统状态';
$l['sts_time'] = '时间';

// system_alerts lang string - prefix : sysa_
$l['sysa_alert_heading'] = '系统警告';

// Tasks lang string - prefix : tasks_
$l['tasks_heading'] = '任务';
$l['tasks_task_started'] = '任务已启动';
$l['tasks_no_tasks'] = '此用户没有活动的任务';
$l['tasks_addvs'] = '正在创建 '.VM_SHORT;
$l['tasks_create_vps'] = '创建 '.VM_SHORT.' 操作';
$l['tasks_edit_vps'] = '编辑 '.VM_SHORT.' 操作';
$l['tasks_addsshkeys'] = '正在添加 SSH 密钥';
$l['tasks_reinstall_callback'] = '重装回调';
$l['tasks_editvzkvs'] = '编辑 Virtuozzo KVM '.VM_SHORT;
$l['tasks_fstrim_handle'] = 'Fstrim 处理';
$l['tasks_addvs_restore'] = '正在创建 '.VM_SHORT.' 以进行恢复';
$l['tasks_fstab_handle'] = 'FS Tab 处理';
$l['tasks_deletevs'] = '正在删除 '.VM_SHORT;
$l['tasks_migrateprog'] = '正在迁移 '.VM_SHORT;
$l['tasks_migratedest'] = '正在迁移 '.VM_SHORT;
$l['tasks_multivirt'] = '正在启用多虚拟化';
$l['tasks_createtemplate'] = '正在创建模板';
$l['tasks_getos'] = '正在下载操作系统';
$l['tasks_rebuildvs'] = '正在重建 '.VM_SHORT;
$l['tasks_resizevps'] = '正在调整 '.VM_SHORT.' 大小';
$l['tasks_bandwidth_unsuspend'] = '取消暂停带宽';
$l['tasks_removed_speed_capped'] = '恢复网速';
$l['tasks_restorevps'] = '正在恢复 '.VM_SHORT;
$l['tasks_vpsbackups'] = '正在备份 '.VM_SHORT;
$l['tasks_restorevps_plan'] = '正在恢复 '.VM_SHORT;
$l['tasks_vpsbackups_plan'] = '正在备份 '.VM_SHORT;
$l['tasks_restore'] = '正在恢复 '.VM_SHORT;
$l['tasks_backup'] = '正在备份 '.VM_SHORT;
$l['tasks_change_dnsnameserver'] = '更改 DNS 名称服务器';
$l['tasks_changepassword'] = '更改密码';
$l['tasks_sync_config'] = '同步配置';
$l['tasks_install_cp'] = '安装控制面板';
$l['tasks_install_recipe'] = '安装配方';
$l['tasks_hostname'] = '更改主机名';
$l['tasks_editxcpvs'] = '编辑 XCP '.VM_SHORT;
$l['tasks_error'] = '出错';
$l['tasks_inprogress'] = '进行中';
$l['tasks_order'] = '排序';
$l['tasks_asc'] = '升序';
$l['tasks_desc'] = '降序';
$l['tasks_submit'] = '搜索';
$l['tasks_progress'] = '进度';
$l['tasks_completed'] = '任务完成';
$l['tasks_task_notcomplete'] = '任务无法完成。';
$l['tasks_task_notupdated'] = '任务未更新！';
$l['tasks_task_notupdated_status'] = '进程不可追踪';
$l['tasks_migrate_speed'] = '迁移速度：';
$l['tasks_started'] = '开始';
$l['tasks_updated'] = '已更新';
$l['tasks_ended'] = '结束';
$l['tasks_notupdated'] = '未更新';
$l['tasks_unslaved'] = '未从属的服务器';
$l['tasks_not_started'] = '任务未开始';
$l['tasks_not_updated'] = '任务未更新';
$l['tasks_not_ended'] = '任务未结束';
$l['tasks_start_vps'] = VM_SHORT.' 启动';
$l['tasks_start_vps_error'] = '启动 '.VM_SHORT.' 时出错';
$l['tasks_restart_vps'] = VM_SHORT.' 重启';
$l['tasks_restart_vps_error'] = '重启 '.VM_SHORT.' 时出错';
$l['tasks_stop_vps'] = VM_SHORT.' 停止';
$l['tasks_stop_vps_error'] = '停止 '.VM_SHORT.' 时出错';
$l['tasks_poweroff_vps'] = VM_SHORT.' 断电';
$l['tasks_poweroff_vps_error'] = '断电 '.VM_SHORT.' 时出错';
$l['tasks_enable_rescuevs'] = '启用救援模式';
$l['tasks_disable_rescuevs'] = '禁用救援模式';
$l['tasks_remotedesktop'] = '远程桌面任务';
$l['tasks_change_vncpass'] = '更改 VNC 密码';
$l['tasks_installxentools'] = '正在安装 Xenserver 工具';
$l['tasks_install_script'] = '正在安装应用程序';
$l['tasks_addvolume'] = '添加卷';
$l['tasks_delete_volume'] = '删除卷';
$l['tasks_resize_volume'] = '调整卷大小';
$l['tasks_detach_volume'] = '分离卷';
$l['tasks_hotplug_disk'] = '热插拔卷';
$l['tasks_install_ga'] = '正在安装客户代理';
// 注册相关语言字符串 - 前缀：reg_
$l['reg_sec_inv'] = '安全码无效';
$l['reg_no_username'] = '用户名字段为空';
$l['reg_no_email']= '邮箱字段为空';
$l['reg_no_password'] = '密码字段为空';
$l['reg_inv_email']= '邮箱无效';
$l['reg_pass_short'] = '密码字段必须大于'.$globals['user_pass_min_char'].'个字符';
$l['reg_email_exist'] = '您提供的邮箱地址已存在';
$l['reg_soft_error'] = '创建账户时出现错误。请联系支持团队：'.$globals['support_email'];
$l['reg_done'] = '您的账户已创建。激活链接已发送至您的邮箱。请使用该链接验证您的邮箱并激活账户';
$l['reg_recaptcha_invalid'] = 'reCaptcha 输入响应缺失或密钥不匹配';

$l['register'] = '注册';
$l['reg_acc'] = '创建账户';
$l['reg_username'] = '用户名';
$l['reg_email'] = '邮箱';
$l['reg_pass'] = '密码';
$l['reg_resendact'] = '重新发送激活码';
$l['reg_mail_sub'] = '激活账户';
$l['terms_conditions_msg'] = '我已阅读并同意';
$l['terms_service'] = '服务条款';
$l['terms_err'] = '请阅读并同意服务条款';
$l['reg_mail_body'] = '您好 {{email}},

感谢您在 {{sn}} 注册账户。

在您使用账户之前，您需要激活它。
点击以下链接激活您的账户：
'.$globals['cp_url'].'/?#act=register&sa=validate&u={{uid}}&code={{activation_code}}

如果上述链接无法使用，您需要将链接复制并粘贴到浏览器中，或手动输入。

如果您仍然遇到注册问题，请联系我们：'.$globals['support_email'].'

感谢！

{{sn}} 团队
'.$globals['cp_url'].'

激活码：{{activation_code}}
用户ID：{{uid}}
'.$globals['cp_url'].'/?#act=register&sa=validate';

$l['reg_val_soft_error'] = '验证账户时出现错误。请联系支持团队：'.$globals['support_email'];
$l['reg_val_done'] = '您的账户已激活。您现在可以登录账户并监控一切！';
$l['reg_val_mail_sub'] = '欢迎来到 '.$globals['sn'];
$l['reg_val_mail_body'] = '恭喜您创建了全新的 {{sn}} 账户，{{email}}。
	
您现在可以登录您的账户：
'.$globals['cp_url'].'/?#act=login

请保存此邮件，因为它包含您账户的重要信息。

祝您使用愉快！

{{sn}} 团队
'.$globals['cp_url'].'

用户ID：{{uid}}
激活码：{{activation_code}}';
$l['reg_mail_admin_sub'] = '新云用户注册于 '.$globals['sn'];
$l['reg_mail_admin_body'] = '新云用户注册，邮箱为 {{email}}
	
用户详情：
用户ID：{{uid}}
{{contact_no}}
';
$l['reg_contact_no'] = '手机号码：';
$l['reg_val_acc'] = '用户邮箱验证';
$l['reg_val_done_cong'] = '恭喜您创建了全新的 {{sn}} 账户：';
$l['reg_val_done_uni'] = '您现在可以 <a href=#act=login>登录</a> 您的账户：<br>
<a href=#act=login>'.$globals['cp_url'].'/?#act=login</a><br><br>

祝您使用愉快！<br><br>

{{sn}} 团队<br>
<a href="'.$globals['cp_url'].'">'.$globals['cp_url'].'</a>';
$l['reg_val_done_uid'] = '用户ID：';
$l['reg_val_done_act'] = '激活码：';

$l['resendact'] = '重新发送激活码';
$l['reg_res_no_username'] = '邮箱字段为空';
$l['reg_res_soft_error'] = '重新发送激活邮件时出现错误。请联系支持团队：'.$globals['support_email'];
$l['reg_res_mail_sub'] = '您的激活码';
$l['reg_res_mail_body'] = '您好 {{email}},

我们收到了重新发送激活码的请求，用于您在 {{sn}} 的账户。

在您使用账户之前，您需要激活它。
点击以下链接激活您的账户：
'.$globals['cp_url'].'/?#act=register&sa=validate&u={{uid}}&code={{activation_code}}

如果上述链接无法使用，您需要将链接复制并粘贴到浏览器中，或手动输入。

如果您仍然遇到注册问题，请联系我们：'.$globals['support_email'].'

感谢！

{{sn}} 团队
'.$globals['cp_url'].'

激活码：{{activation_code}}
用户ID：{{uid}}
'.$globals['cp_url'].'/?#act=register&sa=validate';
$l['reg_res_done'] = '激活码已重新发送成功。请立即激活您的账户。';
$l['reg_invalid_access_key'] = '无效的访问密钥';
$l['reg_invalid_access_uid'] = '用户访问无效';
$l['reg_opt_expired'] = 'OTP 已过期。请重试';
$l['reg_no_otp'] = '请提交有效的 OTP';
$l['reg_incorrect_otp'] = '输入的 OTP 错误。请重试。';
$l['reg_submit_otp'] = '提交 OTP';
$l['reg_enter_otp'] = '输入发送至您手机号码的 OTP';
$l['reg_submit'] = '提交';
$l['reg_sms_sent_err'] = '通过短信发送 OTP 时出现错误。请联系：'.$globals['support_email'];
$l['reg_sms_sent'] = '注册短信';
$l['reg_sms_resent'] = '注册短信已重新发送';
$l['reg_otp_verify_done'] = 'OTP 验证完成。请检查您的邮箱以进行邮箱验证';
$l['reg_resendsms'] = '重新发送 OTP';
$l['reg_otp_limit_exceeds'] = 'OTP 重试次数已达上限。请联系：'.$globals['support_email'];
$l['reg_empty_contact'] = '请输入注册用的手机号码';
$l['reg_err_country_code'] = '请选择您的国家代码';
$l['reg_contact'] = '注册用的手机号码';
$l['reg_mobile_no'] = '输入用于接收 OTP 的手机号码';
$l['reg_err_key_url'] = '重新发送 OTP 时，URL 密钥不能为空';
$l['reg_no_url_key'] = '找不到提供的 URL 密钥';
$l['reg_contact_err'] = '请输入您的 10 位手机号码';
$l['reg_resend_otp_in'] = '重新发送 OTP 倒计时：';
// login 语言字符串 - 前缀: login_
$l['login_no_username'] = '用户名字段为空';
$l['login_no_password'] = '密码字段为空';
$l['login_act_status'] = '您的账户尚未验证。请验证电子邮件地址或联系支持以获取帮助。';
$l['login_act_inactive'] = '您的账户已停用。请联系支持以获取帮助。';
$l['login_too_many_attempts'] = '您已用完 '.$globals['login_attempts'].' 次失败登录尝试的配额！<b>请等待 '.$globals['login_ban_time'].' 分钟后再试。</b> 请不要忘记密码区分大小写。忘记密码了吗？请尝试使用 <a href="'.$globals['index'].'act=login&sa=fpass">忘记密码</a> 工具。';
$l['login_fpass_too_many_attempts'] = '您似乎已尝试使用 <b>忘记密码</b> 链接 '.$globals['login_attempts'].' 次。请等待 '.$globals['login_ban_time'].' 分钟后再请求 <b>忘记密码</b> 链接。如果问题仍然存在，请随时联系管理员以获取帮助。';

$l['login_sign_in'] = '登录';
$l['login_log_user'] = '邮箱或用户名';
$l['login_log_pass'] = '密码';
$l['login'] = '登录';
$l['login_sub_but'] = '登录';
$l['login_register'] = '创建账户';

$l['login_pass_nomatch'] = '您输入的用户名或密码不正确。';
$l['login_forgotpass'] = '忘记密码';
$l['login_emailuser'] = '邮箱地址';
$l['login_enteremail'] = '输入您的邮箱地址';
$l['login_sub_email'] = '发送链接';
$l['login_no_email'] = '您未提交邮箱地址';
$l['login_invalidemail'] = '您提交的邮箱地址无效';
$l['login_mail_sub'] = '重置密码';
$l['login_mail_body'] = '您好，
                        
已收到重置密码的请求。
如果您未请求重置密码，请忽略此邮件。

如果您想重置密码，请点击以下链接：
https://{{node_ip}}:4083/index.php?#act=login&sa=resetpass&key=&soft-1;

请注意：上述链接仅在 24 小时内有效。

此致，
'.$globals['sn'];
$l['login_mail_done'] = '已发送包含重置密码详情的邮件';
$l['login_back_to_login'] = '返回登录';

$l['login_resetpass'] = '重置密码';
$l['login_log_new_pass'] = '新密码';
$l['login_log_reppass'] = '确认密码';
$l['login_changepass'] = '更改密码';
$l['login_no_key'] = '未提交重置密钥';
$l['login_invalidkey'] = '您指定的密钥无效';
$l['login_no_new'] = '请输入有效密码';
$l['login_no_reppass'] = '请输入确认密码';
$l['login_no_match'] = '您输入的密码不匹配';
$l['login_keyexpire'] = '密钥已失效';
$l['login_passchanged'] = '密码已成功更改。';
$l['login_forgot_pass'] = '忘记密码';
$l['login_goto_login'] = '前往登录页面';
$l['login_no_2fa_key'] = '无效的认证密钥';
$l['login_inv_user'] = '无效用户';
$l['login_signup'] = '还没有账户？';

// 登录时的 OTP
$l['login_twofactit'] = '双因素认证';
$l['login_enterotp'] = '输入一次性密码';
$l['login_no_otp'] = '请输入一次性密码 (OTP)';
$l['login_incorrect_otp'] = '验证码不正确';

// listrecipe 语言字符串 - 前缀: recipe_
$l['recipe_err_exec'] = '菜谱执行错误';
$l['recipe_no_selected'] = '未选择菜谱';
$l['recipe_wrong'] = '选择了错误的菜谱';
$l['recipe_heading'] = '菜谱';
$l['recipe_choose'] = '选择菜谱';
$l['recipe_exp_choose_recipe'] = '选择您要烹饪的菜谱';
$l['recipe_update'] = '烹饪菜谱';
$l['recipe_none'] = '无';
$l['recipe_done'] = '菜谱已烹饪完成';
$l['recipe_exec_onboot'] = '菜谱将在您重启 '.VM_SHORT.' 时烹饪';
$l['recipe_group'] = '菜谱组';
$l['recipe_group_exp'] = '输入以逗号分隔的菜谱 ID';
$l['recipe_to_exec_msg'] = '要执行的菜谱';
$l['recipe_seq_empty_err'] = '未选择菜谱，请从列表中选择菜谱以执行';
$l['recipe_duplicate_err'] = '输入了重复的菜谱 ID。请输入唯一的序列';
$l['no_desc'] = '无描述';
$l['ingredients'] = '配料';
$l['recipe'] = '菜谱';
$l['invalid_recipe_id'] = '您选择的菜谱无效';
$l['conf_execute'] = '您确定要在您的 '.VM_SHORT.' 上烹饪这个菜谱吗？';
$l['rec_short_desc'] = '盯~这些是为您准备好的 "Bash" 菜谱';
$l['no_recipes'] = '没有菜谱';
$l['no_pdns'] = '没有 pDNS 记录';
$l['no_rdns'] = '没有 rDNS 记录';

// ssh 语言字符串 - 前缀: ssh_
$l['ssh_disabled'] = 'SSH 已被管理员禁用';

// 自动关机 - 前缀: shutdown_
$l['sd_confirm_submit'] = '您确定要设置定时器吗？';
$l['sd_confirm_delete'] = '您确定要删除定时器吗？';
$l['sd_date_alert'] = '请输入 mm/dd/yyyy 格式的日期';
$l['sd_date_current'] = '输入的时间应大于当前时间';
$l['sd_heading'] = '设置定时器';
$l['sd_action_start'] = '启动';
$l['sd_action_stop'] = '停止';
$l['sd_action_restart'] = '重启';
$l['sd_action_poweroff'] = '关机';
$l['sd_action_title'] = '操作';
$l['sd_action_edit_desc'] = '要编辑请输入数据并提交';
$l['time_updated'] = '操作已更新';
$l['time_deleted'] = '操作已删除';
$l['time_added'] = '操作已添加';
$l['sd_invalid_action'] = '无效操作';

// SSH Keys - prefix : sshkey_
$l['sshkey_heading'] = 'SSH 密钥';
$l['sshkey_add'] = '添加 SSH 密钥';
$l['sshkey_add_new'] = '添加新的 SSH 密钥';
$l['sshkey_use'] = '使用 SSH 密钥';
$l['sshkey_list'] = '列出 SSH 密钥';
$l['sshkey_no_keys'] = '您没有任何 SSH 密钥';
$l['sshkey_no_keys_acct'] = '您的帐户中没有添加任何 SSH 密钥。 请首先通过导航到左侧菜单上的 SSH 密钥添加 SSH 密钥。';
$l['sshkey_no_keys_acct_whmcs'] = '您的帐户中没有添加任何 SSH 密钥。';
$l['sshkey_uuid'] = 'UUID';
$l['sshkey_name'] = '姓名';
$l['sshkey_name_exp'] = 'SSH 密钥的唯一名称';
$l['sshkey_value'] = '公钥';
$l['sshkey_value_exp'] = 'OpenSSH 格式的 SSH 密钥值 <br />(例如:ssh-rsa AAAAB3Nza...Klj7w== root@example.com)';
$l['sshkey_heading_add'] = '添加 SSH 密钥';
$l['sshkey_edit'] = '编辑 SSH 密钥';
$l['sshkey_conf_delete'] = '你确定要删除这个 SSH 密钥吗？';
$l['sshkey_err_delete_key'] = '删除 SSH 密钥时出错';
$l['sshkey_done_delete_key'] = 'SSH 密钥已成功删除。';
$l['sshkey_no_name'] = '请指定一个有效的 SSH 密钥名称';
$l['sshkey_no_value'] = '请指定一个有效的 SSH 密钥值';
$l['sshkey_err_name_exists'] = '此名称的 SSH 密钥已存在';
$l['sshkey_err_add'] = '添加 SSH 密钥时出错';
$l['sshkey_done_add'] = 'SSH密钥添加成功';
$l['sshkey_done_edit'] = 'SSH密钥保存成功';
$l['sshkey_select_keys'] = '选择 SSH 密匙:';
$l['sshkey_done_addvps'] = 'SSH 密钥已成功添加。 更改将在下次重新启动时生效。';
$l['sshkey_err_key'] = '请选择至少一个 SSH 密钥。';
$l['sshkey_not_allowed'] = '您不能添加/编辑 SSH 密钥';
$l['sshkey_private'] = '私钥';
$l['sshkey_private_exp'] = '请将私钥复制到您的系统';
$l['sshkey_generate'] = '生成密钥';

// Enduser ISO - prefix : euiso_
$l['euiso_remove_iso'] = '删除 ISO';
$l['euiso_iso_removed'] = 'ISO 文件已删除：';
$l['euiso_removal_err'] = '删除 ISO 时出错';
$l['euiso_del_done'] = 'ISO 已被删除';
$l['euiso_heading'] = 'ISO 管理';
$l['euiso_no_iso'] = '您没有任何 ISO。 您现在可以添加一个';
$l['euiso_add_iso'] = '添加 ISO';
$l['euiso_iso_distro'] = '发行版';
$l['euiso_iso_name'] = '文件名';
$l['euiso_iso_size'] = '下载大小';
$l['euiso_iso_del'] = '删除';
$l['euiso_iso_status'] = '状态';
$l['euiso_iso_rsize'] = '总大小';
$l['euiso_confirm_iso_del'] = '文件尚未下载。 您要取消下载并删除文件吗？';
$l['euiso_iso_del_confirm'] = '你确定要删除这个项目吗？';
$l['euiso_auto_del_alert'] = 'ISO 将在添加 ISO 后 {{eu_iso_del_hr}} 小时后自动删除';
$l['euiso_dwnld_time'] = '下载时间';
$l['euiso_downloading'] = '正在下载...';
$l['euiso_invalid_url'] = '提供的 URL 无效。 仅使用 http、https 和 ftp 协议';

// Enduser ISO - prefix : aiso_
$l['aiso_err_isofile'] = '请指定正确的iso文件';
$l['aiso_inv_name'] = 'ISO 名称包含无效字符';
$l['aiso_err_size'] = '无法确定 ISO 文件的大小';
$l['aiso_iso_exist'] = 'ISO 文件已经存在';
$l['aiso_size_inv'] = 'ISO 文件超过允许的最大 ISO 大小';
$l['aiso_limit_err'] = '您不能下载更多的 ISO。 超出限制';
$l['aiso_space_err'] = '您没有足够的空间容纳这些 ISO。';
$l['aiso_download_err'] = '下载 ISO 时出错';
$l['aiso_done'] = '已成功添加ISO';
$l['aiso_add_iso'] = '添加 ISO';
$l['aiso_url'] = 'ISO 下载地址';
$l['aiso_name'] = 'ISO 文件名';
$l['aiso_page_head'] = '添加 ISO';
$l['aiso_submit_button'] = '添加 ISO';
$l['aiso_incomplete'] = '下载 ISO 时出错';
$l['aiso_started'] = '正在下载 ISO';
$l['aiso_percent'] = '下载进度';
$l['aiso_complete'] = '下载完成';

// Enduser 下载 ISO - 前缀: dwnldiso_
$l['dwnldiso_heading'] = '添加 ISO';
$l['dwnldiso_iso'] = '添加 ISO';
$l['dwnldiso_done'] = '请等待，ISO 文件正在下载';
$l['dwnldiso_err_down'] = '下载 ISO 文件时出错';
$l['dwnldiso_wait'] = '请等待，ISO 文件正在下载';

// 内部计费语言 - 前缀: ihb_
$l['ihb_no_pl'] = '该区域没有可用的计划！';
$l['ihb_sel_reg'] = '选择的区域 - ';

// Enduser 备份服务器 - 前缀: bs_
$l['bs_heading'] = '备份服务器';
$l['bs_heading_add'] = '添加备份服务器';
$l['bs_name'] = '名称';
$l['bs_name_exp'] = '备份服务器的唯一名称';
$l['bs_hostname'] = '主机名';
$l['bs_hostname_exp'] = '服务器的有效 TLD 或 IP 地址';
$l['bs_type'] = '类型';
$l['bs_type_exp'] = '备份服务器的类型，SSH 或 FTP';
$l['bs_username'] = '用户名';
$l['bs_username_exp'] = '备份服务器的用户名';
$l['bs_password'] = '密码';
$l['bs_password_exp'] = '备份服务器的密码';
$l['bs_port'] = '端口';
$l['bs_port_exp'] = '备份服务器的端口';
$l['bs_dir'] = '目录';
$l['bs_dir_exp'] = '备份将存储的目录';
$l['bs_add_server'] = '添加备份服务器';
$l['bs_conf_delete'] = '您确定要删除此备份服务器吗？';
$l['bs_heading_edit'] = '编辑备份服务器';
$l['bs_no_servers'] = '您没有任何备份服务器';
$l['bs_no_name'] = '请为备份服务器指定一个唯一名称';
$l['bs_no_hostname'] = '请指定主机名';
$l['bs_no_type'] = '请指定类型';
$l['bs_no_username'] = '请指定用户名';
$l['bs_no_password'] = '请指定密码';
$l['bs_no_port'] = '请指定端口';
$l['bs_no_dir'] = '请指定上传目录';
$l['bs_done_delete_server'] = '备份服务器已成功删除';
$l['bs_done_edit'] = '备份服务器已成功保存';
$l['bs_err_bs_not_allowed'] = '备份服务器已被管理员禁用';
$l['bs_err_invalid_type'] = '请输入有效的备份服务器类型';
$l['bs_err_name_exists'] = '此名称的备份服务器已存在';
$l['bs_err_add_backupserver'] = '添加备份服务器时出错';
$l['bs_err_backup_dir'] = '备份目录不能为空。';
$l['bs_err_server_used'] = '备份服务器正在被 {{count}} 个 '.VM_SHORT.' 使用。请先取消设置再删除。';
$l['bs_err_delete_server'] = '删除备份服务器时出错';
$l['bs_err_edit_backupserver'] = '保存备份服务器时出错';

// 计费相关
$l['bill_err_delete'] = '删除发票时出错';
$l['bill_done_delete'] = '发票已成功删除';
$l['bill_heading'] = '计费';
$l['bill_no_invoice'] = '您还没有任何发票！';
$l['bill_invoid'] = '发票 ID';
$l['bill_invodate'] = '发票日期';
$l['bill_duedate'] = '到期日期';
$l['bill_net'] = '金额';
$l['bill_item'] = '项目';
$l['bill_status'] = '状态';
$l['bill_unpaid'] = '未支付';
$l['bill_paid'] = '已支付';
$l['bill_cancelled'] = '已取消';
$l['bill_invoice'] = '发票';
$l['bill_pay_to'] = '支付给';
$l['bill_inv_to'] = '开票给';
$l['bill_pay_method'] = '支付方式';
$l['bill_desc'] = '描述';
$l['bill_disc'] = '折扣';
$l['bill_subtotal'] = '小计';
$l['res_space'] = '磁盘空间';
$l['res_cores'] = 'CPU 核心';
$l['res_ram'] = '内存';
$l['res_ips'] = 'IPv4';
$l['res_ipv6'] = 'IPv6';
$l['res_ipsint'] = '内部 IP';
$l['res_ipv6subnet'] = 'IPv6 子网';
$l['res_bandwidth'] = '带宽';
$l['bill_netamt'] = '净额';
$l['bill_print'] = '打印';
$l['bill_download'] = '下载';
$l['bill_tr_date'] = '交易日期';
$l['bill_tr_gateway'] = '网关';
$l['bill_tr_token'] = '交易 ID';
$l['bill_tr_amt'] = '金额';
$l['bill_invoices'] = '发票';
$l['bill_trans'] = '交易';
$l['bill_make_payment'] = '支付';
$l['bill_add_funds'] = '充值';
$l['bill_min_max'] = '请输入您要添加到账户的金额。最小：'.$globals['billing_symbol'].''.$globals['billing_min'].' 最大：'.$globals['billing_symbol'].''.$globals['billing_max'];
$l['bill_trid'] = 'ID';
$l['bill_trdate'] = '日期';
$l['bill_gateway'] = '网关';
$l['bill_bal'] = '余额';
$l['bill_charges'] = '本月费用';
$l['bill_unpaid_invoices'] = '未支付发票';
$l['bill_cur_usage'] = '当前使用情况';
$l['bill_no_trans'] = '未找到交易记录';
$l['bill_usage'] = '使用情况';
$l['bill_billed_usage'] = '已计费使用';
$l['bill_no_usage'] = '未找到计费项目！';
$l['bill_usid'] = 'ID';
$l['bill_vps'] = VM_SHORT;
$l['bill_region'] = '区域';
$l['bill_type'] = '类型';
$l['bill_starttime'] = '开始时间';
$l['bill_updatetime'] = '更新时间';
$l['bill_charge'] = '费用';
$l['bill_terminated'] = '已终止';
$l['bill_gateway'] = '支付网关';
$l['bill_no_payment_gateway'] = '未找到支付网关。请联系 '.$globals['sn'].'，邮箱：'.$globals['support_email'];
$l['bill_summary'] = '摘要';
$l['bill_taxable_val'] = '应税金额';
$l['bill_payment_method'] = '支付方式';
$l['gateway_disabled'] = '网关已禁用';
$l['invoice_terms_conditions'] = '条款和条件';

// 支付相关
$l['pay_login'] = '您需要登录才能进行支付';
$l['pay_min'] = '金额不能少于 '.$globals['billing_symbol'].''.$globals['billing_min'];
$l['pay_max'] = '金额不能大于 '.$globals['billing_symbol'].''.$globals['billing_max'];
$l['pay_err_ectoken'] = '创建快速结账支付令牌时出错。';
$l['pay_pp_missing'] = '从 PayPal 重定向时缺少一些数据';
$l['pay_trans_already'] = '此交易已被记录';
$l['pay_pp_connect'] = '连接 PayPal 时出错。请联系 Softaculous，邮箱：admin@softaculous.com';
$l['pay_pp_resp'] = '读取 PayPal 数据时出错。请联系 '.$globals['sn'].'，邮箱：'.$globals['support_email'];
$l['pay_success'] = '成功！您的支付 '.$globals['billing_symbol'].'{{amt}} 已成功。';
$l['pay_payment'] = '支付处理器';
$l['pay_panel'] = '控制面板';
$l['pay_data_missing'] = '响应数据缺失/无效';
$l['pay_gateway_missing'] = '支付网关缺失/无效';
$l['pay_no_required_function'] = '所选支付网关中缺少一些必需的功能。请联系服务器管理员';

// Install Scripts - prefix:webuzo_
$l['webuzo_ssh_port'] = 'SSH 端口';
$l['webuzo_spasswd'] = '脚本的根密码';
$l['webuzo_spasswd_p'] = '输入 Root 密码';
$l['webuzo_pd'] = '主域';
$l['webuzo_pd_p'] = 'example.com';
$l['webuzo_appstack'] = '选择堆栈';
$l['webuzo_scriptlist'] = '选择脚本';
$l['webuzo_submit'] = '安装';
$l['webuzo_advanced'] = '高级选项';
$l['webuzo_ns1'] = '名称服务器 1';
$l['webuzo_ns1_p'] = '（可选）指定您的名称服务器 1';
$l['webuzo_ns2'] = '名称服务器 2';
$l['webuzo_ns2_p'] = '（可选）指定您的名称服务器 2';
$l['webuzo_apache'] = '选择 Apache 版本';
$l['webuzo_mysql'] = '选择MYSQL版本';
$l['webuzo_php'] = '选择 PHP 版本';
$l['webuzo_os'] = '选择操作系统';
$l['webuzo_disabled'] = 'Webuzo 安装被管理员禁用';
$l['webuzo_support_err'] = '不支持应用程序！';
$l['webuzo_sshport_err'] = '请输入 SSH 端口';
$l['webuzo_spasswd_err'] = '请输入root密码';
$l['webuzo_pd_err'] = '请指定正确的域名';
$l['webuzo_script_err'] = '选择的脚本不在列表中。 请再试一次。';
$l['webuzo_stack_err'] = '请选择合适的堆栈进行安装';
$l['mysql_err'] = '请选择MySQL版本';
$l['php_err'] = '请选择PHP版本';
$l['webserver_err'] = '请选择 Apache 版本';
$l['webuzo_wmp_err'] = '您没有选择合适的堆栈版本';
$l['webuzo_ns1_err'] = $l['webuzo_ns2_err'] = '请输入正确的域名服务器详细信息';
$l['webuzo_os_err'] = '请选择您要安装的操作系统';
$l['webuzo_install_data_lost_warn'] = '您确定要继续安装吗？警告：'.VM_SHORT.' 上的所有数据将永久丢失。';
$l['webuzo_app_err'] = '获取Webuzo应用程序时出错';
$l['webuzo_prim_ip_err'] = '无法获取IP地址';
$l['webuzo_install_start'] = 'Webuzo安装已在后台启动。安装成功后，将发送电子邮件到提供的邮箱地址';
$l['webuzo_dns_err'] = '请填写域名服务器详细信息';

// Install applications - prefix : apps_
$l['apps_heading'] = '应用安装';
$l['apps_no_vs'] = '你没有任何 '.VM_SHORT.' 安装了应用程序';

// listvs - 搜索语言字符串
$l['vs_type'] = '类型';
$l['vs_all'] = '全部';
$l['vs_suspended'] = '已暂停';
$l['vs_unsuspended'] = '未暂停';
$l['vs_plan'] = '计划';
$l['vs_server_group'] = '服务器组';
$l['vs_no_res'] = '未找到 '.VM_SHORT;

// LetsEncrypt	前缀 = le_
$l['lm_letsencrypt'] = 'LetsEncrypt';
$l['le_no_site_domain'] = '未配置域名。请在安装证书前配置域名。';
$l['le_install_cert'] = '安装证书';
$l['le_renew_cert'] = '续期证书';
$l['le_cert_logs'] = '查看证书日志';
$l['le_config'] = 'SSL 配置';
$l['le_crt_details'] = 'SSL 证书详情';
$l['le_logs'] = '日志';
$l['le_crt_domain'] = '域名';
$l['le_crt_san'] = 'SAN';
$l['le_crt_issuer'] = '颁发者';
$l['le_crt_serialno'] = '序列号';
$l['le_crt_valid_from_time'] = '有效期从';
$l['le_crt_valid_to_time'] = '有效期至';
$l['le_next_renew'] = '下次续期日期';
$l['le_crt_installed'] = '证书已安装';
$l['le_proceed'] = '开始安装';
$l['le_no_logs'] = '无可用日志';
$l['le_confirm_process'] = '您确定要处理此请求吗？';
$l['le_primary_domain'] = '主域名';
$l['le_contact_email'] = '联系邮箱';
$l['le_key_size'] = '密钥大小';
$l['le_renew_days'] = '续期天数';
$l['le_staging'] = '测试环境';
$l['le_enable_force'] = '强制';
$l['le_primary_domain_exp'] = '证书的主域名';
$l['le_contact_email_exp'] = 'SSL 证书提供商将使用此邮箱联系域名所有者';
$l['le_key_size_exp'] = '域名证书私钥的长度';
$l['le_renew_days_exp'] = '在证书到期前自动续期的最小天数（必须小于或等于 80 天）';
$l['le_staging_exp'] = '使用 SSL 服务提供商的测试服务器获取证书';
$l['le_enable_force_exp'] = '强制处理证书';

// '.VM_SHORT.' 标签菜单语言字符串
$l['vps_overview'] = '概述';
$l['vps_graphs'] = '图表';
$l['vps_tasks_logs'] = '任务和日志';
$l['vps_disk_usage'] = '磁盘使用情况';
$l['vps_statistics'] = '统计';
$l['vps_info'] = VM_SHORT.' 信息';
$l['vps_install'] = '重装';

// 模态框
$l['modal_ok'] = '确定';
$l['modal_cancel'] = '取消';
$l['modal_success'] = '成功';
$l['modal_error'] = '错误';
$l['modal_warning'] = '警告';

// 网络和上传速度相关错误
$l['err_nw_speed'] = '您输入的网络速度超过了允许的网络速度';
$l['err_upload_speed'] = '您输入的上传速度超过了允许的上传速度';

$l['del_apikey'] = '您要删除此 API 凭证吗？';
$l['del_rdns'] = '您要删除此 rDNS 记录吗？';
$l['err_cuser_dom_name'] = '此域名已被其他用户使用';

$l['ver_scale_settings'] = '垂直扩展设置';
$l['ver_ram_settings'] = 'RAM 设置';
$l['ver_ram_inc_by'] = '增加/减少 RAM（单位：GB）';
$l['ver_ram_inc_by_exp'] = '如果超过/低于阈值，将相应地增加或减少提供的 RAM（单位：GB）';
$l['ver_cpu_settings'] = 'CPU 设置';
$l['ver_cpu_inc_by'] = '增加/减少 CPU 核心数';
$l['ver_cpu_inc_by_exp'] = '如果超过/低于阈值，将相应地增加或减少提供的核心数';
$l['scaling'] = '扩展';
$l['default'] = '默认';
$l['os_reins_limit'] = '您还可以重装操作系统 {{counter}} 次。';
$l['acc_password_err'] = '您无权更改账户密码。请联系管理员。';
$l['disk_caching'] = '磁盘缓存';
$l['available_plans'] = '可用计划';
$l['templates'] = '模板';
$l['no_os_templates'] = '没有可用的操作系统模板';
$l['stop_start'] = '更改将在 '.VM_SHORT.' 停止并启动后生效。请勿重启。';
$l['vm_count'] = VM_SHORT.' 数量';
$l['vm_count_max'] = '最大限制为 10';
$l['vm_count_min'] = '数量不能少于 1';
$l['disable_icons_cp'] = '控制面板安装已禁用。';
$l['list'] = '列表';
$l['automated_lock_notice'] = '请点击刷新按钮以获取 '.VM_SHORT.' 的当前状态。';
$l['li_less_cpu'] = '您没有足够的 CPU 权重来创建此 '.VM_SHORT;
$l['no_ip'] = '请为 '.VM_SHORT.' 指定至少一个 IP';
$l['no_vdf'] = '未找到域名转发记录';
$l['done'] = '完成';
$l['ostype_label'] = '选择你的操作系统类型';
$l['rtc_label'] = '为 RTC 使用本地时区';
$l['toggle_theme'] = '切换浅色/深色主题';
$l['change_hostname_not_allwd'] = '您不能更改主机名';
$l['change_rootpswd_not_allwd'] = '您不能更改密码';
$l['total_iops_sec'] = '每秒总 I/O';
$l['read_bytes_sec'] = '每秒读取兆字节数';
$l['write_bytes_sec'] = '每秒写入兆字节';

$l['vm_admin_name'] = VM_SHORT.' 管理员名称';
$l['vm_admin_name_exp'] = '指定用户名。如果要更改其他用户的密码，默认情况下为 Administrator（Windows）和 root（Linux）。';
$l['advance_payment'] = '预付款';
$l['reverted_advance_payment'] = '退还预付款';
$l['exp_bios'] = '选择 BIOS 以启动 '.VM_SHORT.'，默认为 seabios';
$l['bios'] = '选择 BIOS 以启动 '.VM_SHORT;
$l['ssh_keys_delete_warn'] = '删除 SSH 密钥将在下次停止/启动时从添加了它们的任何 VPS 中移除它们';
$l['err_invalid_bios'] = '无效的 BIOS';
$l['uefi_err_iso'] = 'UEFI BIOS 仅适用于 ISO 启动';

// 卷
$l['vol_vps_select'] = '选择要附加的 '.VM_SHORT;
$l['vol_volume_name'] = '输入卷名称';
$l['vol_pricing'] = '卷定价';
$l['vol_pricing_exp'] = '卷大小应以 GB 为单位，不小于 1GB，价格将根据 '.VM_SHORT.' 选择而变化';
$l['vol_rate_hour'] = '小时';
$l['vol_rate_month'] = '月';
$l['vol_Gb'] = 'GB';
$l['vol_None'] = '无';
$l['vol_vps_select_vps'] = '选择要为其创建卷的 '.VM_SHORT;
$l['vol_volume_name'] = '指定卷的名称';
$l['vol_foramt'] = '卷格式';
$l['vol_format_exp'] = '指定卷的格式化格式';
$l['vol_select_attach'] = '附加卷';
$l['vol_select_attach_exp'] = '如果选中，卷将在创建后附加到 '.VM_SHORT.'。否则将创建以供以后使用。';
$l['vol_mntpoint'] = '挂载点';
$l['vol_mntpoint_exp'] = '如果指定了挂载点，则卷将挂载到指定目录（注意：文件存储不支持挂载）';
$l['vol_region_exp'] = '选择创建卷的区域';
$l['vol_ext4'] = 'EXT4';
$l['vol_xfs'] = 'XFS';
$l['vol_yes'] = '是';
$l['vol_no'] = '否';
$l['vol_did'] = 'ID';
$l['vol_disk_name'] = '卷名称';
$l['vol_region'] = '区域';
$l['Vol_vpsid'] = 'Vpsid';
$l['vol_disk_user'] = '用户';
$l['vol_disk_size'] = '大小';
$l['vol_none'] = '无';
$l['vol_delete'] = '删除卷';
$l['vol_attach'] = '附加';
$l['vol_detach'] = '分离';
$l['vol_resize'] = '调整大小';
$l['vol_delete_disk'] = '删除卷？';
$l['vol_conf_mul_delete_disk'] = '删除卷？';
$l['vol_action_not_found'] = '未找到卷操作';
$l['vol_did_not_found'] = '未找到卷';
$l['vol_attached_done'] = '卷已附加到 '.VM_SHORT;
$l['vol_detached_done'] = '卷已从 '.VM_SHORT.' 分离';
$l['vol_resize_done'] = '卷已调整大小';
$l['vol_delete_done'] = '卷已删除';
$l['vol_no_volumes'] = '未找到卷';
$l['vol_size_empty'] = '磁盘大小不能为空';
$l['vol_no_vps'] = VM_SHORT.' 未找到';
$l['vol_size_less'] = '卷大小不能小于 1 GB';
$l['vol_add_done'] = '卷添加任务已在后台启动';
$l['vol_edit_modal'] = '编辑卷';
$l['vol_create_modal'] = '创建卷';
$l['vol_disk_name'] = '卷名称';
$l['vol_select_vps'] = '选择 '.VM_SHORT;
$l['vol_disk_size_exp'] = '指定要调整大小的卷的大小';
$l['vol_insufficient_balance'] = '您的余额不足';
$l['vol_low_disk'] = '您的磁盘空间不足';
$l['require_pro_lic'] = '请升级到专业版以使用此功能';
$l['vol_attach_err'] = '附加卷时发生错误';
$l['vol_resize_err'] = '调整卷大小时发生错误';
$l['vol_oper_err'] = '执行卷操作时发生错误';
$l['vol_resize_note'] = '如果卷已附加到 '.VM_SHORT.'，则无法调整大小，您需要先分离它，然后再调整大小';
$l['vol_mntpoint_placeholder'] = '输入挂载点';
$l['vol_name_placeholder'] = '输入卷名称';
$l['vol_listvol_head'] = '卷列表';
$l['vol_addvol_head'] = '添加卷';
$l['vol_backup_note'] = '注意：卷磁盘的备份将不会被创建';
$l['no_vol_sel'] = '请选择至少一个卷';
$l['take_full_backup'] = '进行完整备份';
$l['filter_plans'] = '过滤计划';
$l['normal_plan'] = '普通计划';
$l['lb_plan'] = '负载均衡器计划';
$l['no_lb'] = '未添加负载均衡器';
$l['lb_vps_host'] = '负载均衡器';
$l['lb_ip'] = '负载均衡器 IP';
$l['lb_num_vps'] = 'VPS 数量';
$l['lb_user'] = '用户';
$l['lb_server_group'] = '服务器组';
$l['lb_manage'] = '管理';
$l['invalid_lb'] = '无效的负载均衡器';
$l['manage_load_balancer_title'] = '管理负载均衡器';
$l['lb_vps_list'] = VM_SHORT.' 列表';
$l['lb_rules_list'] = '规则列表';
$l['lb_settings'] = '设置';
$l['lb_stats'] = '统计';
$l['lb_method'] = '负载均衡器方法';
$l['lb_choose_method'] = '选择方法';
$l['lb_default'] = '默认';
$l['lb_rules'] = '负载均衡器规则';
$l['load_balancer'] = '负载均衡器';
$l['add_load_balancer'] = '添加负载均衡器';
$l['no_lb_plans'] = '没有可用的负载均衡器计划';
$l['lb_protocol'] = '协议';
$l['lb_port'] = '端口';
$l['lb_vps'] = VM_SHORT;
$l['lb_ssl_certificate'] = '证书';
$l['lb_ssl_create'] = '自签名';
$l['lb_ssl_use'] = '使用您自己的';
$l['lb_cert_details'] = '证书详情';
$l['lb_ssl_name'] = 'SSL 名称';
$l['lb_cert'] = '证书';
$l['lb_key'] = '私钥';
$l['lb_chain'] = '证书链';
$l['lb_source_protocol'] = '源协议';
$l['lb_source_port'] = '源端口';
$l['lb_dest_protocol'] = '目标协议';
$l['lb_dest_port'] = '目标端口';
$l['lb_lb_method'] = '负载均衡器方法';
$l['lb_dir'] = '目录';
$l['lb_reinstall_ssl'] = '重新安装 SSL';
$l['lb_reinstall_ssl_exp'] = '如果选中，则将根据所选的 SSL 选项重新安装 SSL';
$l['lb_confirm_rule_delete'] = '您确定要<b class=\'text-danger\'>删除</b>此规则吗？';
$l['lb_confirm_vps_remove'] = '您确定要<b class=\'text-danger\'>移除</b>此 '.VM_SHORT.' 吗？';
$l['lb_remove_rule_done'] = '规则已成功移除';
$l['lb_remove_vps_done'] = VM_SHORT.' 已成功移除';
$l['lb_save_settings_done'] = '设置已成功保存';
$l['lb_save_settings'] = '保存设置';
$l['lb_delete_vm'] = '同时从面板中删除 '.VM_SHORT.' 吗？';
$l['select_lb'] = '选择负载均衡器';
$l['lb_assign_vm'] = '分配 '.VM_SHORT;
$l['lb_edit_rule'] = '编辑规则';
$l['lb_delete_lb_confirm'] = '您确定要<b class=\'text-danger\'>删除</b>此负载均衡器吗？';
$l['lb_delete_added_vm'] = '同时从面板中删除已添加的 '.VM_SHORT.' 吗？';
$l['no_access'] = '您无权访问此页面';
$l['delete_lb_done'] = '负载均衡器已成功删除';
$l['lb_vm_not_deleted'] = '<br>这些 '.VM_SHORT.' 已锁定，不会删除 VPSID - ';
$l['vps_timezone_changed'] = '<br /> '.VM_SHORT.' 时区已更改。';
$l['vps_timezone_changed_with_recipe'] = '<br /> '.VM_SHORT.' 时区将在您从面板中关闭并启动 '.VM_SHORT.' 后更改。';
$l['vps_timezone_change_err'] = '无法更改 '.VM_SHORT.' 时区。';
$l['invalid_boot_order'] = '无效的启动顺序，请以 disk[0-00] 和 cdrom[1-2] 格式指定启动顺序';
$l['user_suspended_3'] = '您的当前使用量为 {{total_usage}}，而您的余额为 {{cur_bal}}。请为您的账户充值以解除暂停。';


// 配方语言字符串 - 前缀：rcp_
$l['rcp_page_head'] = '配方';
$l['rcp_add_recipes'] = '添加配方';
$l['rcp_del_conf'] = '您确定要删除此配方吗？';
$l['rcp_no_recipes'] = '没有配方';
$l['rcp_recipe_del'] = '配方已删除';
$l['rcp_duplicate_recipe'] = '配方名称已存在';
$l['rcp_no_recipescript'] = '未输入配方脚本';
$l['rcp_invalid_shell'] = '选择了无效的 shell 类型';

// 添加配方语言字符串 - 前缀：adr_
$l['adr_page_head'] = '添加配方';
$l['adr_done'] = '配方已添加';
$l['adr_recipe_name'] = '配方名称';
$l['adr_recipe_name_exp'] = '您的配方名称。这将显示。';
$l['adr_recipe_shell'] = 'Shell 类型';
$l['adr_recipe_shell_exp'] = '选择用于执行配方的 shell 类型，默认为 Bash shell（对于 Windows，请保留默认值）';
$l['adr_recipe_logo'] = '配方徽标';
$l['adr_recipe_logo_exp'] = '您的配方徽标的 URL。此字段为可选。';
$l['adr_recipe_code'] = '输入您的配方';
$l['adr_recipe_code_exp'] = '在此处输入实际的 bash 代码。<br /> 注意：#!/bin/sh 将自动添加，您无需手动添加。<br /></br />您可以在配方中使用以下变量：<br /><strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br /><strong>{{vps_name}}</strong> : VID<br /><strong>{{vps_hostname}}</strong> : '.VM_SHORT.' 主机名<br /><strong>{{username}}</strong> : 用户邮箱<br /><strong>{{root_pass}}</strong> : 根密码<br /><strong>{{ips}}</strong> : IPv4 IP<br /><strong>{{ips6}}</strong> : IPv6 IP<br /><strong>{{ips6_subnet}}</strong> : IPv6 子网<br />';
$l['adr_recipe_desc'] = '描述';
$l['adr_recipe_desc_exp'] = '在此处输入您的配方描述';
$l['adr_recipe_exist'] = '用户已存在。请输入不同的邮箱';

// 编辑配方语言字符串 - 前缀：edr_
$l['edr_rid_not_found'] = '未找到配方 ID';
$l['edr_page_head'] = '编辑配方';
$l['edr_done'] = '配方已编辑';
$l['edr_not_owned'] = '此配方不属于您';

// 开发者许可证
$l['dev_license'] = '开发许可证';
$l['dev_license_info'] = '此 VIRTUALIZOR 安装正在使用开发许可证，未经授权不得用于生产环境。请将任何滥用情况报告至 support@virtualizor.com';

$l['account'] = '账户';
$l['last_login'] = '上次登录';
$l['cpu_freq'] = 'CPU 频率';
$l['utilized'] = '已使用';
$l['per_utilized'] = '使用率 %';
$l['seabios_option'] = 'SeaBios（默认）';
$l['uefi_option'] = 'UEFI（OVMF）';
$l['lamp'] = 'LAMP';
$l['lemp'] = 'LEMP';
$l['llmp'] = 'LLMP';

$l['remove_old_ssh_keys'] = '移除旧的 SSH 密钥';
$l['remove_old_ssh_keys_exp'] = '如果选中，则旧的 SSH 密钥将在下次停止/启动时从 '.VM_SHORT.' 中移除';

$l['enduser_firewall_is_disabled'] = '防火墙管理已被管理员禁用';
$l['enduser_vps_poweroff_is_disabled'] = VM_SHORT.' 关机已被管理员禁用';

// 待处理设置 ps_
$l['setup_completion_started'] = VM_SHORT.' 设置完成已启动';
$l['ps_setup_pending'] = '等待 '.VM_SHORT.' 设置';
$l['ps_invalid_setup_pending_request'] = '设置请求无效！请与管理员联系';
$l['ps_click_to_complete_setup'] = '点击此处完成设置';
$l['ps_setup_pending_notice'] = '您的 '.VM_SHORT.' 仍在等待设置';

$l['recipe_code_view_disabled'] = '配方代码查看已被管理员禁用！';

// 防火墙
$l['fw_plan_name'] = '计划名称';
$l['fw_name_exp'] = '请提供计划名称';
$l['fw_default_policy'] = '默认策略';
$l['fw_default_policy_exp'] = '设置流量的默认策略。您可以设置为 ACCEPT / DROP，根据此策略，默认流量将被允许/拒绝。';
$l['drop'] = '拒绝';
$l['accept'] = '接受';
$l['fw_port_placeholder'] = '无或端口';
$l['fw_rules'] = '规则';
$l['fw_plan_exists'] = '防火墙计划已存在';
$l['fw_invalid_ipv4'] = '无效的 IPv4 地址';
$l['fw_err_empty_rules'] = '请添加规则后再保存';
$l['fw_heading'] = '防火墙';
$l['fw_edit'] = '编辑防火墙';
$l['fw_no_plan_change'] = '未选择防火墙计划';
$l['fw_add_plan'] = '添加防火墙计划';
$l['fw_list_plans'] = '防火墙计划';
$l['fw_list_plans_exp'] = '选择一个防火墙计划';
$l['fw_plan_added'] = '防火墙计划已成功添加';
$l['fw_plan_edited'] = '防火墙计划已成功编辑';
$l['fw_no_plans'] = '没有防火墙计划';	
$l['fw_delete'] = '防火墙计划已成功删除';
$l['unable_remove_firewall'] = '无法从 '.VM_SHORT.' 移除防火墙规则';
$l['unable_apply_firewall'] = '无法为 '.VM_SHORT.' 应用防火墙规则';
$l['fw_del_confirm']  = '您确定要删除此计划吗？';
$l['fw_no_plan_name'] = '未指定计划名称';
$l['fw_no_plan_selected'] = '未选择计划';
$l['fw_change_plan'] = '更改防火墙计划';
$l['fw_direction_exp'] = '流量方向';
$l['fw_iptype_exp'] = 'IP 版本';
$l['fw_no_rules_added'] = '未添加规则';
$l['fw_invalid'] = '无效的防火墙计划';
$l['fw_change_plan_warn'] = '您确定要更改防火墙计划吗？';
$l['fw_remove_plan'] = '您确定要移除防火墙规则吗？';
$l['fw_rules_removed'] = '防火墙规则已成功移除';
$l['fw_plan_changed'] = '防火墙计划已成功更改';
$l['fw_no_protocol'] = '请选择协议';
$l['fw_need_direction'] = '请选择方向（即 IN/OUT）';
$l['fw_empty_sport'] = '源端口不能为空';
$l['fw_empty_dport'] = '目标端口不能为空';
$l['fw_empty_source_addr'] = '源/IP 地址不能为空';
$l['user_suspended_3'] = '您的当前使用量为 {{total_usage}}，而您的余额为 {{cur_bal}}。请为您的账户充值以解除暂停。';
$l['not_allowed_ips_by_admin'] = '管理员已限制以下 IP 添加到防火墙规则中：{{ips}}';
$l['not_allowed_sports_by_admin'] = '管理员已限制以下源端口添加到防火墙规则中：{{sports}}';
$l['not_allowed_dports_by_admin'] = '管理员已限制以下目标端口添加到防火墙规则中：{{dports}}';
$l['fw_note_exp'] = '（可选）您可以保存有关此计划的备注以便记忆';