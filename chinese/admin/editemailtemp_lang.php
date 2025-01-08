<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editemailtemp_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来自成为最好的愿望
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

$l['<title>'] = '编辑邮件模板';
$l['heading'] = '编辑邮件模板';
$l['edittemp'] = '编辑邮件模板';
$l['done'] = '邮件模板已成功保存';
$l['savetemp'] = '保存邮件模板';
$l['tempsub'] = '请填写主题';
$l['tempcontent'] = '请填写模板内容';
$l['subject'] = '主题';
$l['content'] = '内容';
$l['action_not_applicable'] = '此操作不适用于从服务器，请切换到本地服务器。';
$l['reset_template'] = '重置模板';
$l['reset_confirm'] = '您确定要重置邮件模板吗？';
$l['temp_overview'] = '模板概览';

// 安装变量信息
$l['mail_addvs_info'] = '您可以使用以下变量：<br />
<strong>{{username}}</strong> : 用户名<br />
<strong>{{password}}</strong> : 密码<br />
<strong>{{host}}</strong> : 主机<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{root_username}}</strong> : Root 用户名<br />
<strong>{{root_pass}}</strong> : Root 密码<br />
<strong>{{ips}}</strong> : IP 地址<br />
<strong>{{macdetails}}</strong> : MAC 详情<br />
<strong>{{vncdetails}}</strong> : VNC 详情<br />
<strong>{{sn}}</strong> : Virtualizor<br />
<strong>{{vps_hostname}}</strong> : '.VM_SHORT.' 主机名<br />';

// 安装变量信息
$l['mail_admin_addvs_info'] = '您可以使用以下变量：<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{root_username}}</strong> : Root 用户名<br />
<strong>{{root_pass}}</strong> : Root 密码<br />
<strong>{{ips}}</strong> : IP 地址<br />
<strong>{{macdetails}}</strong> : MAC 详情<br />
<strong>{{vncdetails}}</strong> : VNC 详情<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

// 安装变量信息
$l['mail_admin_addvs_err_info'] = '您可以使用以下变量：<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{err_msg}}</strong> : 错误信息<br />
<strong>{{node_ip}}</strong> : 节点 IP 地址<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

// 安装变量信息
$l['mail_deletevs_info'] = '您可以使用以下变量：<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{node_ip}}</strong> : 节点 IP 地址<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

// 安装变量信息
$l['mail_admin_del_vs_err_info'] = '您可以使用以下变量：<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{vps_ips}}</strong> : '.VM_SHORT.' IPS<br />
<strong>{{node_name}}</strong> : 节点名称<br />
<strong>{{err_msg}}</strong> : 错误信息<br />
<strong>{{node_ip}}</strong> : 节点 IP 地址<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

// 安装变量信息
$l['mail_admin_rebuild_vs_info'] = '您可以使用以下变量：<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{root_username}}</strong> : Root 用户名<br />
<strong>{{root_pass}}</strong> : Root 密码<br />
<strong>{{ips}}</strong> : IP 地址<br />
<strong>{{macdetails}}</strong> : MAC 详情<br />
<strong>{{vncdetails}}</strong> : VNC 详情<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

// 安装变量信息
$l['mail_admin_rebuild_vs_err_info'] = '您可以使用以下变量：<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{err_msg}}</strong> : 错误信息<br />
<strong>{{node_ip}}</strong> : 节点 IP 地址<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

// 安装变量信息
$l['mail_createtemplate_info'] = '您可以使用以下变量：<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{filename}}</strong> : 文件名<br />
<strong>{{node_ip}}</strong> : 节点 IP 地址<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

// 安装变量信息
$l['mail_createtemplate_err_info'] = '您可以使用以下变量：<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{err_msg}}</strong> : 错误信息<br />
<strong>{{node_ip}}</strong> : 节点 IP 地址<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

// 重置终端用户面板密码
$l['mail_reset_pass_info'] = '您可以使用以下变量：<br />
<strong>{{node_ip}}</strong> : 节点 IP 地址<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

// 暂停 '.VM_SHORT.'
$l['mail_suspend_vps_info'] = '您可以使用以下变量：<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{hostname}}</strong> : 主机名 <br/> 
<strong>{{sn}}</strong> : Virtualizor<br />';

$l['mail_registered_mail_info'] = '您可以使用以下变量：<br />
<strong>{{cp_url}}</strong> : 控制面板 URL (计费设置)<br>
<strong>{{email}}</strong> : 电子邮件 ID<br>
<strong>{{support_email}}</strong> : 支持电子邮件 (计费设置)<br>
<strong>{{uid}}</strong> : 用户 ID<br>
<strong>{{activation_code}}</strong> : 激活码<br>
<strong>{{sn}}</strong> : 站点名称 (主设置)<br>';

$l['mail_reg_res_mail_info'] = $l['mail_registered_mail_info'];

$l['mail_new_account_creation_info'] = '您可以使用以下变量：<br />
<strong>{{cp_url}}</strong> : 控制面板 URL (计费设置)<br>
<strong>{{email}}</strong> : 电子邮件 ID<br>
<strong>{{uid}}</strong> : 用户 ID<br>
<strong>{{activation_code}}</strong> : 激活码<br>
<strong>{{sn}}</strong> : 站点名称 (主设置)<br>';

$l['mail_reg_mail_admin_info'] = '您可以使用以下变量：<br />
<strong>{{contact_no}}</strong> : 联系电话 (如果启用了注册时的短信 OTP 设置)<br>
<strong>{{email}}</strong> : 电子邮件 ID<br>
<strong>{{uid}}</strong> : 用户 ID<br>
<strong>{{sn}}</strong> : 站点名称 (主设置)<br>';

// 解除暂停 '.VM_SHORT.'
$l['mail_unsuspend_vps_info'] = $l['mail_suspend_vps_info'];

// 暂停 '.VM_SHORT.' 网络
$l['mail_suspend_vps_net_info'] = $l['mail_suspend_vps_info'];

// 解除暂停 '.VM_SHORT.' 网络
$l['mail_unsuspend_vps_net_info'] = $l['mail_suspend_vps_info'];
$l['mail_type'] = '启用 HTML 模板';
$l['mail_type_exp'] = '如果启用，邮件将以 HTML 格式发送，而不是纯文本';
$l['temp_is_disable'] = '禁用邮件模板';

// 重建 VS
$l['mail_rebuildvs_info'] =  '您可以使用以下变量：<br />
<strong>{{root_username}}</strong> : Root 用户名<br />
<strong>{{root_pass}}</strong> : Root 密码<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{ips}}</strong> : IP 地址<br />
<strong>{{macdetails}}</strong> : MAC 详情<br />
<strong>{{vncdetails}}</strong> : VNC 详情<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

// 安装 Webuzo
$l['mail_install_webuzo_info'] =  '您可以使用以下变量：<br />
<strong>{{webuzo_panel}}</strong> : Webuzo 访问面板<br />
<strong>{{webuzo_panel2}}</strong> : Webuzo 访问面板 2 (https)<br />
<strong>{{root_pass}}</strong> : Root 密码<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.'ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{domain}}</strong> : 域名<br />
<strong>{{script}}</strong> : 安装的脚本<br />
<strong>{{stack}}</strong> : 堆栈<br />
<strong>{{admin_email}}</strong> : 管理员电子邮件<br />
<strong>{{admin_username}}</strong> : 管理员用户名<br />
<strong>{{admin_pass}}</strong> : 管理员密码<br />
<strong>{{ns1}}</strong> : NS1<br />
<strong>{{ns2}}</strong> : NS2<br />
<strong>{{sn}}</strong> : Virtualizor<br />
<strong>{{ip}}</strong> : IP<br />';

// 管理员安装 Webuzo
$l['mail_admin_install_webuzo_vs_info'] =  '您可以使用以下变量：<br />
<strong>{{webuzo_panel}}</strong> : Webuzo 访问面板<br />
<strong>{{webuzo_panel2}}</strong> : Webuzo 访问面板 2 (https)<br />
<strong>{{root_pass}}</strong> : Root 密码<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.'ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{domain}}</strong> : 域名<br />
<strong>{{script}}</strong> : 安装的脚本<br />
<strong>{{stack}}</strong> : 堆栈<br />
<strong>{{admin_email}}</strong> : 管理员电子邮件<br />
<strong>{{admin_username}}</strong> : 管理员用户名<br />
<strong>{{admin_pass}}</strong> : 管理员密码<br />
<strong>{{ns1}}</strong> : NS1<br />
<strong>{{ns2}}</strong> : NS2<br />
<strong>{{sn}}</strong> : Virtualizor<br />
<strong>{{ip}}</strong> : IP<br />';

// 管理员安装 Webuzo 错误
$l['mail_admin_install_webuzo_err_info'] =  '您可以使用以下变量：<br />
<strong>{{err_msg}}</strong> : 错误<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.'ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{node_ip}}</strong> : IP<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

// 迁移完成
$l['mail_mig_done_info'] =  '您可以使用以下变量：<br />
<strong>{{from_ip}}</strong> : 从服务器<br />
<strong>{{to_ip}}</strong> : 到服务器<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{new_vpsname}}</strong> : 新 VID<br />
<strong>{{selected_act}}</strong> : 过程<br />
<strong>{{primary_ip}}</strong> : 主 IP<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

// 迁移失败
$l['mail_mig_fail_info'] =  '您可以使用以下变量：<br />
<strong>{{from_ip}}</strong> : 从服务器<br />
<strong>{{to_ip}}</strong> : 到服务器<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{selected_act}}</strong> : 过程<br />
<strong>{{primary_ip}}</strong> : 主 IP<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

// '.VM_SHORT.' 恢复结束
$l['mail_vpsrestore_end_info'] = '您可以使用以下变量：<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{hostname}}</strong> : 主机名 <br/>
<strong>{{server_ip}}</strong> : 服务器 IP<br />
<strong>{{server_hostname}}</strong> : 服务器主机名<br /> 
<strong>{{sn}}</strong> : Virtualizor<br />';

// '.VM_SHORT.' 恢复错误
$l['mail_vpsrestore_err_info'] =  '您可以使用以下变量：<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{hostname}}</strong> : 主机名 <br/> 
<strong>{{primary_ip}}</strong> : 主 IP <br/> 
<strong>{{server_hostname}}</strong> : 服务器主机名<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

// '.VM_SHORT.' 备份结束
$l['mail_vpsbackups_end_info'] = '您可以使用以下变量：<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{hostname}}</strong> : 主机名 <br/>
<strong>{{server_ip}}</strong> : 服务器 IP<br />
<strong>{{server_hostname}}</strong> : 服务器主机名<br /> 
<strong>{{sn}}</strong> : Virtualizor<br />';

// '.VM_SHORT.' 备份错误
$l['mail_vpsbackups_err_info'] = '您可以使用以下变量：<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{hostname}}</strong> : 主机名 <br/>
<strong>{{server_ip}}</strong> : 服务器 IP<br />
<strong>{{server_hostname}}</strong> : 服务器主机名<br /> 
<strong>{{sn}}</strong> : Virtualizor<br />';

$l['mail_admin_mail_limit_info'] = '您可以使用以下变量：<br />
<strong>{{ip}}</strong> : 服务器 IP<br />
<strong>{{load}}</strong> : 负载<br />
<strong>{{cpu_usage}}</strong> : CPU 使用率<br />
<strong>{{ram_usage}}</strong> : 内存使用率<br />
<strong>{{disk_usage}}</strong> : 磁盘使用率<br />
<strong>{{tmp_disk_usage}}</strong> : 临时磁盘使用率<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

$l['mail_vps_net_speed_capped_info'] = '您可以使用以下变量：<br />
<strong>{{hostname}}</strong> : 主机名<br />
<strong>{{used_gb}}</strong> : 已用 GB<br />
<strong>{{limit_gb}}</strong> : 限制 GB<br />
<strong>{{vps_name}}</strong> : VID<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

$l['mail_vps_net_speed_capped_restore_info'] = '您可以使用以下变量：<br />
<strong>{{hostname}}</strong> : 主机名<br />
<strong>{{used_gb}}</strong> : 已用 GB<br />
<strong>{{limit_gb}}</strong> : 限制 GB<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

$l['mail_public_email_info'] = '您可以使用以下变量：<br />
<strong>{{user}}</strong> : 用户<br />
<strong>{{note_title}}</strong> : 笔记标题<br />
<strong>{{note_content}}</strong> : 笔记内容<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

$l['mail_vpsbackups_single_err_info'] = '您可以使用以下变量：<br />
<strong>{{vpses}}</strong> : '.VM_SHORT.'<br />
<strong>{{primary_ip}}</strong> : IP 地址<br />
<strong>{{server_domain}}</strong> : 服务器域名<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

$l['mail_vpsbackups_single_info'] = '您可以使用以下变量：<br />
<strong>{{vpses}}</strong> : '.VM_SHORT.'<br />
<strong>{{server_ip}}</strong> : 服务器 IP<br />
<strong>{{server_hostname}}</strong> : 服务器主机名<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

$l['mail_self_shutdown_info'] = '您可以使用以下变量：<br />
<strong>{{vpsid}}</strong> : '.VM_SHORT.' ID<br />
<strong>{{action}}</strong> : 操作<br />
<strong>{{time}}</strong> : 时间<br />';

$l['mail_admin_dlos_info'] = '您可以使用以下变量：<br />
<strong>{{os_name}}</strong> : 操作系统名称<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

$l['mail_installha_fail_info'] = '您可以使用以下变量：<br />
<strong>{{server_ip}}</strong> : 服务器 IP<br />
<strong>{{primary_ip}}</strong> : IP 地址<br />
<strong>{{sn}}</strong> : Virtualizor<br />'; 

$l['mail_installha_done_info'] = '您可以使用以下变量：<br />
<strong>{{server_ip}}</strong> : 服务器 IP<br />
<strong>{{primary_ip}}</strong> : IP 地址<br />
<strong>{{sn}}</strong> : Virtualizor<br />'; 

$l['mail_admin_dbbackups_err_info'] = '您可以使用以下变量：<br />
<strong>{{primary_ip}}</strong> : IP 地址<br />
<strong>{{server_domain}}</strong> : 服务器域名<br />
<strong>{{error_log}}</strong> : 错误日志<br />
<strong>{{sn}}</strong> : Virtualizor<br />'; 

$l['mail_db_backup_info'] = '您可以使用以下变量：<br />
<strong>{{primary_ip}}</strong> : IP 地址<br />
<strong>{{server_domain}}</strong> : 服务器域名<br />
<strong>{{sn}}</strong> : Virtualizor<br />'; 

$l['mail_storage_threshold_info'] = '您可以使用以下变量：<br />
<strong>{{storage_list}}</strong> : 存储列表<br />
<strong>{{hostname}}</strong> : 主机名<br />
<strong>{{ip}}</strong> : IP<br />
<strong>{{sn}}</strong> : Virtualizor<br />'; 

$l['mail_slave_offline_info'] = '您可以使用以下变量：<br />
<strong>{{slave_text}}</strong> : 从服务器文本<br />
<strong>{{hostname}}</strong> : 主机名<br />
<strong>{{ip}}</strong> : IP<br />
<strong>{{sn}}</strong> : Virtualizor<br />'; 

$l['mail_bandwidth_threshold_info'] = '您可以使用以下变量：<br />
<strong>{{vps_bandwidth_threshold}}</strong> : '.VM_SHORT.' 带宽阈值<br />
<strong>{{used_gb}}</strong> : 已用 GB<br />
<strong>{{limit_gb}}</strong> : 限制 GB<br />
<strong>{{sn}}</strong> : Virtualizor<br />'; 

$l['mail_bandwidth_info'] = '您可以使用以下变量：<br />
<strong>{{hostname}}</strong> : 主机名<br />
<strong>{{used_gb}}</strong> : 已用 GB<br />
<strong>{{limit_gb}}</strong> : 限制 GB<br />
<strong>{{sn}}</strong> : Virtualizor<br />'; 

$l['mail_twofactauth_passcode_info'] = '您可以使用以下变量：<br />
<strong>{{site_domain}}</strong> : 站点域名<br />
<strong>{{passcode}}</strong> : 密码<br />
<strong>{{sn}}</strong> : Virtualizor<br />'; 

$l['mail_twofactauth_otp_info'] = '您可以使用以下变量：<br />
<strong>{{site_domain}}</strong> : 站点域名<br />
<strong>{{otp}}</strong> : OTP<br />
<strong>{{sn}}</strong> : Virtualizor<br />'; 

$l['mail_control_panel_installation_info'] = '您可以使用以下变量：<br />
<strong>{{cp_name}}</strong> : 控制面板名称<br />
<strong>{{cp_link}}</strong> : 控制面板链接<br />
<strong>{{username}}</strong> : 用户名<br />
<strong>{{password}}</strong> : 密码<br />';

$l['mail_billing_invoice_created_info'] = '您可以使用以下变量：<br />
<strong>{{invoid}}</strong> : 发票 ID<br />
<strong>{{invodate_h}}</strong> : 发票日期<br />
<strong>{{net}}</strong> : 净额<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

$l['mail_billing_warn_users_info'] = '您可以使用以下变量：<br />
<strong>{{cur_bal}}</strong> : 当前余额<br />
<strong>{{total_usage}}</strong> : 总使用量<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

$l['mail_billing_warn_abusers_info'] = '您可以使用以下变量：<br />
<strong>{{suspend_time}}</strong> : 暂停时间<br />
<strong>{{cur_bal}}</strong> : 当前余额<br />
<strong>{{total_usage}}</strong> : 总使用量<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

$l['mail_unsuspend_users_info'] = '您可以使用以下变量：<br />
<strong>{{additionale_note}}</strong> : 附加说明<br />
<strong>{{sn}}</strong> : Virtualizor<br />';

$l['mail_suspend_users_info'] = '您可以使用以下变量：<br />
<strong>{{sus_reason}}</strong> : 原因<br />
<strong>{{sn}}</strong> : Virtualizor<br />';