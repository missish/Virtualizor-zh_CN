<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php (Admin)
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

$l['no_license'] = '未找到LICENSE文件！请向Softaculous报告此问题。';

//选项卡图标图像
$l['lm_dashboard'] = '仪表盘';
$l['lm_vs'] = VM_LONG;
$l['lms_vs'] = '列出所有';
$l['lms_addvs'] = '创建 '.VM_SHORT;
$l['lms_rebuild'] = '重建 '.VM_SHORT;
$l['lms_addvs_xenhvm'] = '创建 HVM '.VM_SHORT;
$l['lms_vnc'] = '启动 '.VM_SHORT.' VNC';
$l['lms_migrate'] = '迁移 '.VM_SHORT;
$l['lms_clone'] = '克隆 '.VM_SHORT;
$l['lms_haproxy'] = '域名转发';
$l['lms_ha'] = '高可用性';
$l['lm_load_balancer'] = '负载均衡器';
$l['lms_load_balancer'] = '列出负载均衡器';
$l['lms_add_load_balancer'] = '添加负载均衡器';
$l['lms_migrate_disk'] = '迁移磁盘';

$l['lm_ippool'] = 'IP池';
$l['lms_ippool'] = '列出IP池';
$l['lms_addippool'] = '创建IP池';
$l['lms_ips'] = '列出IP';
$l['lms_addips'] = '添加IP';
$l['lms_ipranges'] = '列出IPv6子网';
$l['lms_addiprange'] = '添加IPv6子网';
$l['lms_managesubnets'] = '管理IPv6子网';

$l['lm_servers'] = '服务器';
$l['lms_servers'] = '列出服务器';
$l['lms_addserver'] = '添加服务器';
$l['lms_servergroups'] = '服务器组/区域';
$l['lms_addsg'] = '添加服务器组/区域';
$l['lms_backupservers'] = '列出备份服务器';
$l['lms_addbackupserver'] = '添加备份服务器';
$l['lms_terminal'] = '服务器终端';

$l['lm_plans'] = '套餐';
$l['lms_plans'] = '列出套餐';
$l['lms_addplan'] = '添加套餐';
$l['lms_user_plans'] = '列出用户套餐';
$l['lms_adduser_plans'] = '添加用户套餐';
$l['lms_dnsplans'] = '列出DNS套餐';
$l['lms_adddnsplan'] = '添加DNS套餐';
$l['lms_backup_plans'] = '列出备份套餐';
$l['lms_addbackup_plan'] = '添加备份套餐';

// 防火墙
$l['lm_vpsfirewall'] = VM_SHORT.' 防火墙';
$l['lms_vpsfirewallconfig'] = VM_SHORT.' 防火墙配置';
$l['lms_firewall_plans'] = '列出防火墙套餐';
$l['lms_addfirewall_plan'] = '添加防火墙套餐';

$l['lm_users'] = '用户';
$l['lms_users'] = '列出用户';
$l['lms_adduser'] = '添加用户';
$l['lms_mail'] = '发送邮件给用户';
$l['lms_addcloud'] = '添加云用户';
$l['lms_user_sessions'] = '用户会话';
$l['lms_user_notice'] = '用户通知';
$l['lms_add_user_notice'] = '添加用户通知';

$l['lm_storage'] = '存储';
$l['lms_storage'] = '列出存储';
$l['lms_addstorage'] = '添加存储';
$l['lms_orphaneddisks'] = '孤立磁盘';
$l['lms_volumes'] = '卷';
$l['lms_storageusage'] = '存储使用情况';
$l['lms_smart_devices'] = '磁盘健康';

$l['lm_ostemplates'] = '媒体';
$l['lms_iso'] = '列出ISO';
$l['lms_addiso'] = '添加ISO';
$l['lms_ostemplates'] = '操作系统模板';
$l['lms_os'] = '模板浏览器';
$l['lms_addtemplate'] = '添加模板';
$l['lms_createtemplate'] = '创建模板';
$l['lms_mediagroups'] = '媒体组';
$l['lms_addmg'] = '添加媒体组';
$l['lms_list_distros'] = '列出发行版';
$l['lms_add_distro'] = '添加发行版';
$l['lms_euiso'] = '最终用户ISO';

$l['lm_recipes'] = '配方';
$l['lms_recipes'] = '列出配方';
$l['lms_addrecipe'] = '添加配方';

$l['lm_passthrough'] = '直通';
$l['lms_passthrough'] = '列出设备';
$l['lms_addpassthrough'] = '添加直通设备';

$l['lm_tasks'] = '任务';

$l['lm_config'] = '配置';
$l['lms_config'] = '主设置';
$l['lms_config_slave'] = '从设置';
$l['lms_webuzo'] = 'Webuzo设置';
$l['lms_emailconfig'] = '邮件设置';
$l['lms_admin_acl'] = '管理员ACL';
$l['lms_serverinfo'] = '服务器信息';
$l['lms_multivirt'] = '多虚拟化';
$l['lms_license'] = '许可证信息';
$l['quick_links'] = '快速链接';
$l['lms_hostname'] = '更改主机名';
$l['lms_maintenance'] = '维护';
$l['lms_kernelconf'] = '内核配置';
$l['lms_defaultvsconf'] = '默认 '.VM_SHORT.' 配置';
$l['lms_updates'] = '更新';
$l['lms_pma'] = 'phpMyAdmin';
$l['lms_emailtemp'] = '邮件模板';
$l['lms_webuzo'] = 'Webuzo设置';
$l['lms_twofactauth'] = '双因素认证';
$l['lm_api'] = 'API凭证';
$l['lms_list_api'] = '列出API对';
$l['lms_create_api'] = '创建API对';
$l['lms_show_api_log'] = '显示API日志';
$l['lms_performance'] = '服务器监控';
$l['lms_server_stats'] = '服务器统计';
$l['lms_serverloads'] = VM_SHORT.' 服务器负载';
$l['lms_vps_stats'] = VM_SHORT.' 统计';

$l['lm_billing'] = '计费';
$l['lms_billing'] = '计费设置';
$l['lms_resource_pricing'] = '资源定价';
$l['lms_invoices'] = '发票';
$l['lms_transactions'] = '交易';
$l['lms_addinvoice'] = '创建发票';
$l['lms_addtransaction'] = '添加交易';
$l['lms_tax_rules'] = '税收规则';

$l['lm_ssl'] = 'SSL设置';
$l['lms_ssl'] = 'SSL文件';
$l['lms_sslcert'] = 'SSL证书';
$l['lms_createssl'] = '创建证书';
$l['lms_installssl'] = '安装SSL';

$l['lm_cpu'] = 'CPU';
$l['lms_cpu'] = 'CPU使用情况';
$l['lms_vscpu'] = VM_SHORT.' 利用率';

$l['lm_serverloads'] = VM_SHORT.' 服务器负载';

$l['lm_ram'] = '内存';
$l['lms_ram'] = '内存使用情况';
$l['lms_vsram'] = VM_SHORT.' 利用率';

$l['lm_disk'] = '磁盘';

$l['lm_bandwidth'] = '带宽';
$l['lms_bandwidth'] = '带宽使用情况';
$l['lms_vsbandwidth'] = VM_SHORT.' 利用率';

$l['lm_tools'] = '工具';
$l['lm_logs'] = '日志';
$l['lm_filemanager'] = '文件管理器';

$l['lm_services'] = '服务';
$l['lms_services'] = '列出服务';
$l['lms_res_httpd'] = '重启Web服务器';
$l['lms_res_network'] = '重启网络';
$l['lms_res_sendmail'] = '重启邮件服务器';
$l['lms_res_mysqld'] = '重启MySQL';
$l['lms_res_iptables'] = '重启IPTables';

$l['lm_processes'] = '进程';
$l['lm_performance'] ='服务器监控';
$l['lms_disk_health'] ='RAID健康';
$l['lm_ssh'] ='SSH';

$l['lm_logs'] = '日志';
$l['lms_logs'] = '管理员日志';
$l['lms_userlogs'] = VM_SHORT.' 和用户';
$l['lms_loginlogs'] = '登录日志';
$l['lms_iplogs'] = 'IP日志';
$l['lms_adminnotes'] = '归档笔记';

$l['lm_databackup'] = '备份';
$l['lms_vpsbackupsettings'] = VM_SHORT.' 备份设置';
$l['lms_vpsrestore'] = '恢复 '.VM_SHORT.' 备份';
$l['lms_databackup'] = '数据库备份';
$l['lms_vpsbackup'] = VM_SHORT.' 备份';
$l['lms_vps_backup_logs'] = VM_SHORT.' 备份日志';

$l['lm_firewall'] = '防火墙';
$l['lms_firewall'] = '原生防火墙';
$l['lms_csf'] = 'ConfigServer (CSF)';

$l['lm_import'] = '导入';
$l['lms_import'] = '从OpenVZ 6';
$l['lms_hypervm'] = '从HyperVM';
$l['lms_veportal'] = '从vePortal';
$l['lms_solusvm'] = '从SolusVM';
$l['lms_feathur'] = '从Feathur';
$l['lms_proxmox'] = '从Proxmox';
$l['lms_xenserver'] = '从XenServer';
$l['lms_openvz7'] = '从OpenVZ 7';
$l['lms_kvm'] = '从KVM';
$l['lms_xen'] = '从Xen';

$l['lm_pdns'] = 'Power DNS';
$l['lms_pdns'] = '列出DNS服务器';
$l['lms_addpdns'] = '添加DNS服务器';
$l['lms_rdns'] = '添加反向DNS区域';

$l['lm_server_stats'] = '节点性能';

$l['lm_vps_stats'] = VM_SHORT.' 统计';

//$l['lm_migrate'] = '迁移 '.VM_SHORT;

// 子菜单
$l['sub_outdated'] = '过时的安装';
$l['sub_byuser'] = '按用户';
$l['sub_byscript'] = '按脚本';
$l['sub_gen_set'] = '常规';
$l['tab_import'] = '导入';

$l['sl_ip'] = 'IP';
$l['sl_id'] = 'ID';

// alt文本
$l['alt_feedback'] = '反馈';
$l['alt_tasks'] = '迁移任务';
$l['unlimited'] = '无限制';

$l['server_offline'] = '服务器 - <b>'.$GLOBALS['servers'][$globals['server']]['server_name'].'</b> (IP: '.$GLOBALS['servers'][$globals['server']]['ip'].') 已离线';
$l['server_status_0'] = '服务器 - <b>'.$GLOBALS['servers'][$globals['server']]['server_name'].'</b> (IP: '.$GLOBALS['servers'][$globals['server']]['ip'].') 已离线';
$l['server_status_2'] = '服务器 - <b>'.$GLOBALS['servers'][$globals['server']]['server_name'].'</b> (IP: '.$GLOBALS['servers'][$globals['server']]['ip'].') 的许可证已过期';

$l['not_allowed_title'] = '访问被拒绝';
$l['err_acl_no_allowed'] = '您没有足够的访问权限来访问此页面。';
$l['err_acl_no_op_allowed'] = '您没有足够的权限执行此操作。';

// cluster.php
$l['cvd_off'] = '无法连接到远程服务器';
$l['err_restore_process_running'] = '恢复进程已在运行';
$l['err_nonexistant_vps'] = '此 '.VM_SHORT.' 不存在。无法恢复到不存在的 '.VM_SHORT;
$l['lic_error'] = '获取许可证时出错';
$l['inv_lic'] = '无效的许可证密钥';
$l['no_ips_vps'] = '没有分配给vps的IP';
$l['no_firewall_plan'] = '无效的防火墙套餐';

//错误调试信息
$l['show_debug_info'] = '显示此错误的详细信息';
$l['hide_debug_info'] = '隐藏此错误的详细信息';

$l['all_servers'] = '所有服务器';

//管理员邮件模板
$l['admin_mail_addvs_sub'] = VM_SHORT.' 已创建';
$l['admin_mail_addvs'] = '您好，

'.VM_SHORT.' 已创建。以下是其详细信息：
'.VM_SHORT.'ID : {{vpsid}}
用户名 : {{root_username}}
根密码 : {{root_pass}}
IP(s) : {{ips}}
{{macdetails}}

{{vncdetails}}

此致，
{{sn}}';

//管理员邮件错误模板
$l['admin_mail_addvs_err_sub'] = '创建 '.VM_SHORT.' 时出错';
$l['admin_mail_addvs_err'] = '您好，

创建 '.VM_SHORT.' ( '.VM_SHORT.'ID:{{vpsid}} ) 时出错。以下是其详细信息：

错误: {{err_msg}}

节点详情：
IP : {{node_ip}}

此致，
{{sn}}';

//客户端邮件模板
$l['mail_addvs_sub'] = VM_SHORT.' 已创建';
$l['mail_addvs'] = '您好，

您的 '.VM_SHORT.' 已创建。
登录详情如下：
用户名 : {{username}}
密码 : {{password}}
URL : https://{{host}}:4083
	  http://{{host}}:4082

您的 '.VM_SHORT.' 详情如下：
主机名 : {{vps_hostname}}
'.VM_SHORT.'ID : {{vpsid}}
用户名 : {{root_username}}
根密码 : {{root_pass}}
IP(s) : {{ips}}
{{macdetails}}

{{vncdetails}}

此致，
{{sn}}';

//管理员邮件删除模板
$l['admin_mail_del_vs_sub'] = VM_SHORT.' 已删除';
$l['admin_mail_del_vs'] = '您好，

'.VM_SHORT.' 已删除。以下是其详细信息：
'.VM_SHORT.'ID : {{vpsid}}
主机名 : {{hostname}}

节点详情：
IP : {{node_ip}}

此致，
{{sn}}';

//管理员邮件删除错误模板
$l['admin_mail_del_vs_err_sub'] = '销毁 '.VM_SHORT.' 时出错';
$l['admin_mail_del_vs_err'] = '您好，

销毁 '.VM_SHORT.' ( '.VM_SHORT.'ID:{{vpsid}} ) 时出错。以下是其详细信息：

错误: {{err_msg}}

Vps 名称：
名称 : {{vps_name}}

Vps IPs：
IPs : {{vps_ips}}

节点名称：
名称 : {{node_name}}
 
节点详情：
IP : {{node_ip}}

此致，
{{sn}}';

//管理员邮件重建模板
$l['admin_mail_rebuild_vs_sub'] = VM_SHORT.' 已重建';
$l['admin_mail_rebuild_vs'] = '您好，

'.VM_SHORT.' 已重建。以下是其详细信息：
'.VM_SHORT.'ID : {{vpsid}}
用户名 : {{root_username}}
根密码 : {{root_pass}}
IP(s) : {{ips}}
{{macdetails}}

{{vncdetails}}

此致，
{{sn}}';

//客户端邮件重建模板
$l['mail_rebuildvs_sub'] = VM_SHORT.' 已重建';
$l['mail_rebuildvs'] = '您好，

您的 '.VM_SHORT.' 已重建。
'.VM_SHORT.' 详情如下：
'.VM_SHORT.'ID : {{vpsid}}
VID : {{vps_name}}
用户名 : {{root_username}}
根密码 : {{root_pass}}
IP(s) : {{ips}}
{{macdetails}}

{{vncdetails}}

此致，
{{sn}}';

//管理员邮件重建错误模板
$l['admin_mail_rebuild_vs_err_sub'] = '重建 '.VM_SHORT.' 时出错';
$l['admin_mail_rebuild_vs_err'] = '您好，

重建 '.VM_SHORT.' ( '.VM_SHORT.'ID:{{vpsid}} ) 时出错。以下是其详细信息：

错误: {{err_msg}}

节点详情：
IP : {{node_ip}}

此致，
{{sn}}';

//创建模板邮件模板
$l['createtemplate_sub'] = '模板已创建';
$l['createtemplate_vs'] = '您好，

已从 '.VM_SHORT.' ( '.VM_SHORT.'ID:{{vpsid}} ) 创建模板。以下是其详细信息：
文件名 : {{filename}}

节点详情：
IP : {{node_ip}}

此致，
{{sn}}';

//创建模板错误邮件模板
$l['createtemplate_err_sub'] = '创建模板时出错';
$l['createtemplate_vs_err'] = '您好，

从 '.VM_SHORT.' ( '.VM_SHORT.'ID:{{vpsid}} ) 创建模板时出错。以下是其详细信息：
错误: {{err_msg}}

节点详情：
IP : {{node_ip}}

此致，
{{sn}}';

//管理员邮件操作系统下载
$l['temp_admin_dlos'] = '下载操作系统邮件模板';
$l['admin_dlos_sub'] = '操作系统模板下载报告';
$l['admin_dlos_body'] = '
以下是操作系统模板下载的结果：

{{os_name}}

此致，
{{sn}}
';

// 迁移完成邮件模板 (selected_act = (迁移或克隆))
$l['temp_mig_done'] = '迁移 / 克隆完成';
$l['mig_done_sub'] = '{{selected_act}} 状态 '.VM_SHORT.' {{vpsid}} : 完成';
$l['mig_done_body'] = '您好，

'.VM_SHORT.' {{vpsid}} 的 {{selected_act}} 过程已完成。以下是详细信息：

从服务器 : {{from_ip}}
到服务器 : {{to_ip}}

'.VM_SHORT.' ID : {{vpsid}}

'.VM_SHORT.' 名称 : {{vps_name}}
新 '.VM_SHORT.' 名称 : {{new_vpsname}}

此致，
{{sn}} ({{primary_ip}})
';

// 迁移失败邮件模板 (selected_act = (迁移或克隆))
$l['temp_mig_fail'] = '迁移 / 克隆失败';
$l['mig_fail_sub'] = '{{selected_act}} 状态 '.VM_SHORT.' {{vpsid}} : 失败';
$l['mig_fail_body'] = '您好，

'.VM_SHORT.' {{vpsid}} 的 {{selected_act}} 过程失败。以下是详细信息：

从服务器 : {{from_ip}}
到服务器 : {{to_ip}}

'.VM_SHORT.' ID : {{vpsid}}

'.VM_SHORT.' 名称 : {{vps_name}}

此致，
{{sn}} ({{primary_ip}})
';

// HA 安装完成邮件模板
$l['temp_installha_done'] = '高可用性安装成功';
$l['installha_done_sub'] = '高可用性安装成功';
$l['installha_done_body'] = '您好，

服务器 {{server_ip}} 的 HA 安装过程成功。

此致，
{{sn}} ({{primary_ip}})
';

// HA 安装失败邮件模板
$l['temp_installha_fail'] = '高可用性安装失败';
$l['installha_fail_sub'] = '高可用性安装失败';
$l['installha_fail_body'] = '您好，

服务器 {{server_ip}} 的 HA 安装过程失败。

此致，
{{sn}} ({{primary_ip}})
';

// 重置最终用户密码
$l['login_mail_sub'] = '重置密码';
$l['login_mail_body'] = '您好，

已收到重置密码的请求。
如果您未请求重置密码，请忽略此邮件。

如果您想重置密码，请点击以下链接：
https://{{node_ip}}:4083/index.php?act=login&sa=resetpass&key=&soft-1;

请注意：上述链接仅在24小时内有效。

此致，
{{sn}}';

// 暂停 Vps
$l['suspend_vps_sub'] = VM_SHORT.' 已被暂停';
$l['suspend_vps_body'] = '您好，

您的 '.VM_SHORT.' {{hostname}} 已被管理员暂停。
{{suspend_reason}}

此致，
{{sn}}';

//Webuzo 安装模板
$l['install_webuzo_sub'] = 'Webuzo 安装';
$l['install_webuzo_body'] = '您好，

您的 '.VM_SHORT.' 已重建并安装了 Webuzo。

安装详情如下：
'.VM_SHORT.'ID : {{vpsid}}
Webuzo 访问面板 (https): {{webuzo_panel2}}
用户名 : root
根密码 : {{root_pass}}
域名 : {{domain}}
已安装脚本 : {{script}}
堆栈 : {{stack}}
IP : {{ip}}
NS1 : {{ns1}}
NS2 : {{ns2}}
Webuzo 访问面板 (http): {{webuzo_panel}}

软用户名 : {{soft_user}}
软密码 : {{soft_pass}}

脚本的管理员详情如下：

管理员邮箱 : {{admin_email}}
管理员用户名 : {{admin_username}}
管理员密码 : {{admin_pass}}

注意：请更改脚本的管理员详情。

此致，
{{sn}}';

//管理员邮件 install_webuzo 模板
$l['admin_install_webuzo_vs_sub'] = 'Webuzo 安装';
$l['admin_install_webuzo_vs_body'] = '您好，

'.VM_SHORT.' 已重建并安装了 Webuzo。以下是其详细信息：

安装详情如下：
'.VM_SHORT.'ID : {{vpsid}}
Webuzo 访问面板 (https): {{webuzo_panel2}}
用户名 : root
根密码 : {{root_pass}}
域名 : {{domain}}
已安装脚本 : {{script}}
堆栈 : {{stack}}
IP : {{ip}}
NS1 : {{ns1}}
NS2 : {{ns2}}
Webuzo 访问面板 (http): {{webuzo_panel}}

软用户名 : {{soft_user}}
软密码 : {{soft_pass}}

脚本的管理员详情如下：

管理员邮箱 : {{admin_email}}
管理员用户名 : {{admin_username}}
管理员密码 : {{admin_pass}}

此致，
{{sn}}';

//管理员邮件 install_webuzo 错误模板
$l['admin_install_webuzo_err_sub'] = 'Webuzo 脚本安装错误！';
$l['admin_install_webuzo_err_body'] = '您好，

重建 '.VM_SHORT.' ( '.VM_SHORT.'ID:{{vpsid}} ) 时出错。以下是其详细信息：

错误: {{err_msg}}

节点详情：
IP : {{node_ip}}

此致，
{{sn}}';

// 取消暂停 Vps
$l['unsuspend_vps_sub'] = VM_SHORT.' 已取消暂停';
$l['unsuspend_vps_body'] = '您好，

您的 '.VM_SHORT.' {{hostname}} 已被管理员取消暂停。

此致，
{{sn}}';

// 暂停 '.VM_SHORT.' 网络
$l['suspend_vps_net_sub'] = VM_SHORT.' 网络已暂停';
$l['suspend_vps_net_body'] = '您好，

'.VM_SHORT.' {{vpsid}} 的主机名为 {{hostname}} 的网络已被管理员暂停。

此致，
{{sn}}';

// 取消暂停 '.VM_SHORT.' 网络
$l['unsuspend_vps_net_sub'] = VM_SHORT.' 网络已取消暂停';
$l['unsuspend_vps_net_body'] = '您好，

'.VM_SHORT.' {{vpsid}} 的主机名为 {{hostname}} 的网络已被管理员取消暂停。

此致，
{{sn}}';

// 暂停用户 
$l['suspend_users_sub'] = '您的账户已被暂停';
$l['suspend_users_body'] = '您好，

您的账户因以下原因已被暂停：
{{sus_reason}}

此致，
{{sn}}';

// 计费警告滥用者 
$l['billing_warn_abusers_sub'] = '添加资金以取消暂停账户';
$l['billing_warn_abusers_body'] = '您好，

您的账户已于 {{suspend_time}} 被暂停。
您当前余额为 '.$globals['billing_symbol'].'{{cur_bal}}，而您当前的使用量为 '.$globals['billing_symbol'].'{{total_usage}}

为了取消暂停您的账户，请向您的账户添加资金。

此致，
{{sn}}';

// 计费警告用户 
$l['billing_warn_users_sub'] = '账户余额不足';
$l['billing_warn_users_body'] = '您好，

您的账户余额不足。
您当前余额为 '.$globals['billing_symbol'].'{{cur_bal}}，而您当前的使用量为 '.$globals['billing_symbol'].'{{total_usage}}

请为您的账户充值，以避免服务中断。

此致，
{{sn}}';

// 取消暂停用户 
$l['unsuspend_users_sub'] = '您的账户已取消暂停';
$l['unsuspend_users_body'] = '您好，

您的账户已取消暂停。
{{additional_note}}

此致，
{{sn}}';

$l['billing_unsuspend_note'] = '如果您需要更多信息，请联系支持。';

// 计费发票创建
$l['billing_invoice_created_sub'] = '发票已生成';
$l['billing_invoice_created_body'] = '您好，

您的账户已生成一张发票，用于云使用活动。
发票 ID {{invoid}} 日期 {{invodate_h}} 已生成。

发票金额为 '.$globals['billing_symbol'].'{{net}}。

我们请求您从您的账户仪表板支付发票。
要查看并支付发票，请访问以下 URL：
'.$globals['cp_url'].'?act=invoices&invoid={{invoid}}

登录面板 -> 计费 -> 发票
在那里您会找到您的发票，并点击“添加资金”以支付发票。

感谢您选择 '.$globals['sn'].'。
如果您有任何疑问，请联系我们 '.$globals['support_email'].'

此致，
{{sn}}';

$l['lic_exp_warn_sub'] = VM_LONG.' 将在 &soft-1; 天后暂停';
$l['lic_exp_warn_body'] = '您好，

您的许可证已于 &soft-1; 过期，请续订许可证以避免 '.VM_SHORT.' 暂停。

请尽快续订您的许可证。
如果您是从 NOC 购买的许可证，请立即联系 NOC。
如果此许可证是直接从 Virtualizor 购买的，请从客户中心续订：
https://www.virtualizor.com/clients

来自 Virtualizor 暂停警告任务'.$thisip;

$l['wiki_help'] = '点击此处前往 Wiki';
$l['search'] = '搜索';
$l['vpsid'] = VM_SHORT.' ID';
$l['no_res'] = '未找到与您的搜索查询匹配的结果';
$l['admin_suspended_nw'] = '管理员暂停的网络';
$l['user_suspended_0'] = '账户已被管理员暂停。请联系您的管理员以获取更多信息。';
$l['user_suspended_2'] = '账户因网络使用过量而被暂停。请联系您的管理员以获取更多信息。';
$l['user_suspended_3'] = '您当前的使用量为 '.$globals['billing_symbol'].'{{total_usage}}，而您的余额为 '.$globals['billing_symbol'].'{{cur_bal}}。请为您的账户添加资金以取消暂停。';

/* 页面通用语言 */
$l['manage'] = '管理';
$l['ms_delete'] = '删除';
$l['ms_enable'] = '启用';
$l['ms_disable'] = '禁用';
$l['del_conf'] = '您确定要删除所选项目吗？';
$l['with_selected'] = '已选择：';
$l['nothing_selected'] = '未选择任何内容！';
$l['no_action'] = '未选择任何操作！';
$l['action_msg'] = '请稍候，操作正在进行中。';
$l['notify_msg'] = '操作完成后，您将收到通知。';
$l['action_completed'] = '操作成功完成。正在重新加载页面！';
$l['go'] = '执行';
$l['all'] = '全部';
$l['entries_per_page'] = '行数';
$l['os_size_mismatch'] = '无法下载操作系统';
$l['go_back'] = '返回';
$l['fname'] = '名字';
$l['lname'] = '姓氏';
$l['edit'] = '编辑';
$l['delete'] = '删除';
$l['pbar_notice'] = '注意：此过程可能需要一些时间。';
$l['pbar_tip'] = '离开此页面不会影响此过程。';
$l['action'] = '操作';

//存储月份，用于服务器统计和 '.VM_SHORT.' 统计
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

//存储月份全名
$l['january'] = '一月';
$l['february'] = '二月';
$l['march'] = '三月';
$l['april'] = '四月';
$l['may'] = '五月';
$l['june'] = '六月';
$l['july'] = '七月';
$l['august'] = '八月';
$l['september'] = '九月';
$l['october'] = '十月';
$l['november'] = '十一月';
$l['december'] = '十二月';

$l['free'] = '空闲';
$l['used'] = '已使用';

$l['cb_failed'] = '回调失败';
$l['task_pending'] = '待处理';
$l['need_info'] = '需要更多信息？';

$l['dev_lic_notice'] = '<strong>开发许可证：</strong> 此 VIRTUALIZOR 安装正在使用开发许可证，未经授权不得用于生产环境。<br>请将任何滥用情况报告给 support@virtualizor.com';

$l['select_server'] = '选择服务器';
// 速度限制消息
$l['speed_cap_down_inv'] = '下载速度限制设置的值无效';
$l['speed_cap_up_inv'] = '上传速度限制设置的值无效';

$l['note_private'] = '私有';
$l['note_public'] = '公开';
$l['note_loading'] = '加载中';
$l['note_no_notes'] = '无笔记';
$l['note_save'] = '保存';
$l['note_done'] = '完成';
$l['note_add_note'] = '添加笔记';
$l['note_close'] = '关闭';
$l['note_cancel'] = '取消';
$l['note_title'] = '标题';
$l['note_content'] = '内容';
$l['note_unsaved'] = '未保存';
$l['note_confirm_delete'] = '您确定要删除此笔记吗？';
$l['note_no_title'] = '笔记标题不能为空。';
$l['note_no_content'] = '笔记内容不能为空。';
$l['note_search'] = '搜索';
$l['note_go'] = '执行';

$l['virt_xcp'] = 'XCP';
$l['virt_proxo'] = 'Proxmox OpenVZ';
$l['virt_proxk'] = 'Proxmox QEMU';
$l['virt_proxl'] = 'Proxmox LXC';
$l['virt_vzk'] = 'Virtuozzo KVM';
$l['virt_vzo'] = 'Virtuozzo OpenVZ';
$l['not_supported'] = '此功能在以下环境中不受支持：';
$l['show_logs'] = '显示日志';
$l['pass_strength_error'] = '密码强度不应低于 ';

// 通用语言
$l['id'] = 'ID';
$l['add'] = '添加';
$l['update'] = '更新';
$l['new'] = '新建';
$l['close'] = '关闭';
$l['servers'] = '服务器';
$l['actions'] = '操作';
$l['errors'] =  '错误';
$l['vps_name'] =  VM_SHORT.' 名称';

// 数据表相关语言
$l['to'] = '到';
$l['of'] = '的';
$l['search'] = '搜索';
$l['entries'] = '条目';
$l['showing'] = '显示';
$l['show'] = '显示';
$l['previous'] = '上一页';
$l['next'] = '下一页';
$l['first'] = '首页';
$l['last'] = '末页';
$l['no_data_avail'] = '表中无可用数据';
$l['filtered_from'] = '从';
$l['total_entries'] = '总条目';
$l['no_match_record'] = '未找到匹配的记录';

$l['err_add_sshkeys'] = '添加 SSH 密钥时出错';
$l['err_remove_sshkeys'] = '删除 SSH 密钥时出错';
$l['select'] = '选择';

// 一些缺失的标签
$l['loading'] = '加载中';
$l['logs'] = '日志';
$l['user_not_found'] = '未找到用户';

//任务日志语言
$l['show'] = '显示';
$l['hide'] = '隐藏';
$l['show_more'] = '显示更多';
$l['show_less'] = '显示更少';
$l['downloading_os'] = '从主服务器下载操作系统模板';
$l['downloading_iso'] = '从主服务器下载 ISO';
$l['downloading_iso2'] = '从主服务器下载次要 ISO';
$l['preparing_config_file'] = '根据您的要求准备配置文件';
$l['written_config_file'] = '配置文件已成功创建';
$l['calling_after_config_write'] = '调用配置写入后的钩子';
$l['called_after_config_write'] = '配置写入后的钩子已成功调用';
$l['tc_rule_create'] = '创建 TC 规则';
$l['creating_disk'] = '创建磁盘：';
$l['setting_cpu'] = '设置 CPU';
$l['setting_bios'] = '设置 BIOS 模式';
$l['setting_cpu_perc'] = '设置 CPU 百分比';
$l['setting_cpu_cores'] = '设置 CPU 核心';
$l['setting_cpu_pin'] = '设置 CPU 绑定';
$l['set_ram'] = '设置内存';
$l['set_disk_space'] = '设置磁盘空间';
$l['change_dnsnameserver'] = '更改 DNS 名称服务器';
$l['fstab_handle'] = '在 fstab 中进行更改';
$l['edit_done'] = VM_SHORT.' 编辑操作完成';
$l['vm_edit_logs'] = VM_SHORT.' 编辑日志';
$l['resizing_disk'] = '开始调整磁盘大小';
$l['resizing_disk_done'] = '磁盘调整大小完成';
$l['resizing_fs'] = '开始调整文件系统大小';
$l['resizing_fs_done'] = '文件系统调整大小完成';
$l['net_config'] = '配置网络设置';
$l['hostname_config'] = '配置主机名';
$l['sshkey_clean'] = '清理 SSH 密钥';
$l['create_done'] = '创建 '.VM_SHORT.' 操作完成';
$l['mount'] = '挂载';
$l['umount'] = '卸载';
$l['untar_os'] = '解压操作系统';
$l['enable_vnc'] = '启用 VNC';
$l['disable_vnc'] = '禁用 VNC';
$l['mkfs_direct'] = '创建文件系统';
$l['swap_disk'] = '设置交换磁盘';
$l['virtuzo_create'] = '创建 '.VM_SHORT;
$l['set_hostname'] = '设置主机名';
$l['set_io_prio'] = '设置 I/O 优先级';
$l['set_iso'] = '设置 ISO';
$l['set_pri_iso'] = '设置主 ISO';
$l['set_sec_iso'] = '设置次要 ISO';
$l['set_boot_order'] = '设置启动顺序';
$l['set_ips'] = '设置 IP';
$l['set_ips6'] = '设置 IPv6';
$l['set_nic'] = '设置网卡';
$l['set_dnsnameserver'] = '设置名称服务器';
$l['add_iso'] = '添加 ISO';
$l['rem_iso'] = '删除 ISO';
$l['setting_boot_policy'] = '设置启动策略';
$l['resize_vps'] = '调整 '.VM_SHORT.' 大小';
$l['set_config'] = '配置';
$l['ubc_setting'] = '保存 UBC 设置';
$l['setting_params'] = '设置所需参数';
$l['openvz_features'] = '设置 Openvz 功能';
$l['set_os_temp'] = '设置操作系统模板';

//启动 '.VM_SHORT.' 任务日志 
$l['performing_vps_pending_tasks'] = '执行 '.VM_SHORT.' 待处理任务';
$l['performing_startup_process'] = '执行启动过程';
$l['beginning_start_vps'] = '启动 '.VM_SHORT; 
$l['change_password'] = '更改密码';
$l['remotedesktop'] = '配置远程桌面';
$l['change_hostname'] = '更改主机名';
$l['install_cp'] = '安装控制面板';
$l['delete_vpsdisks'] = '删除 '.VM_SHORT.' 磁盘';
$l['install_recipe'] = '执行配方';
$l['add_sshkeys'] = '添加 SSH 密钥';
$l['remove_sshkeys'] = '删除 SSH 密钥';
$l['get_conf_file'] = '获取配置文件';
$l['err_get_conf_file'] = '获取到空配置';
$l['call_hook'] = '调用钩子';
$l['first_create_conf'] = '首次尝试创建配置文件';
$l['err_first_create_conf'] = '首次创建后未找到文件';
$l['second_create_conf'] = '第二次尝试创建配置文件';
$l['set_autostart'] = '设置 '.VM_SHORT.' 自动启动';
$l['start_done'] = VM_SHORT.' 启动命令发送成功';
$l['start_err'] = '无法启动 '.VM_SHORT;
$l['vzo_setfeatures'] = '启用容器功能';
$l['enable_ppp'] = '启用 PPP';
$l['disable_ppp'] = '禁用 PPP';
$l['start_script'] = '在后台启动脚本';
$l['edit_vps'] = '编辑 '.VM_SHORT;
$l['change_vncpass'] = '更改 VNC 密码';
$l['install_tools'] = '安装工具';
$l['removed_iso_from_config'] = '{{iso_file}} 未找到！，已从配置中删除 ISO。';

//关闭 '.VM_SHORT.' 任务日志
$l['power_off_vps'] = '关闭 '.VM_SHORT;
$l['power_off_done'] = '关闭完成！';

//从服务器 '.VM_SHORT.' 操作任务日志
$l['start_vps_slave'] = '显示从服务器启动 vps 的日志'; 
$l['stop_vps_slave'] = '显示从服务器停止 vps 的日志'; 
$l['restart_vps_slave'] = '显示从服务器重启 vps 的日志'; 
$l['poweroff_vps_slave'] = '显示从服务器关闭 vps 的日志'; 

//重启 '.VM_SHORT.' 任务日志
$l['restart_vps'] = '重启 '.VM_SHORT;
$l['restart_vps_done'] = '重启完成！';

//停止 '.VM_SHORT.' 任务日志
$l['stop_vps'] = '停止 '.VM_SHORT;
$l['stop_vps_done'] = '停止完成！';

//销毁 '.VM_SHORT.' 任务日志
$l['start_del_vps'] = '开始删除 '.VM_SHORT;
$l['tc_rule_delete'] = '删除 TC 规则';
$l['del_vps'] = '删除 '.VM_SHORT;
$l['del_storage'] = '删除存储';
$l['del_kpartx'] = '删除 kpartx';
$l['del_ebtables'] = '删除 ebtable 规则';
$l['del_config'] = '删除配置文件';
$l['del_cid'] = '删除类 ID 文件';
$l['del_vps_done'] = '删除 '.VM_SHORT.' 完成';

//钩子语言
$l['call_hook_before_startvps'] = '启动 '.VM_SHORT.' 前调用钩子';
$l['call_hook_after_startvps'] = '启动 '.VM_SHORT.' 后调用钩子';
$l['call_hook_before_delvps'] = '销毁 '.VM_SHORT.' 前调用钩子';
$l['call_hook_after_delvps'] = '销毁 '.VM_SHORT.' 后调用钩子';
$l['calling_after_createvps'] = '创建 '.VM_SHORT.' 后调用钩子';

//救援模式
$l['enabling_rescue'] = '启用救援模式';
$l['download_rescue_temp'] = '下载救援模板';
$l['copy_rescue'] = '复制救援磁盘';
$l['disabling_rescue'] = '禁用救援模式';
$l['rename_config'] = '重命名配置文件';
$l['format_disk'] = '格式化磁盘';
$l['tc_rule_done'] = '已创建 TC 规则';

//动画任务语言
$l['create_vps_task'] = '创建 '.VM_SHORT.' 任务已启动';
$l['create_temp_task'] = '创建模板任务已启动';
$l['database_back_task'] = '数据库备份任务已启动';
$l['back_now_task'] = '立即备份任务已启动';
$l['edit_vps_task'] = '编辑 '.VM_SHORT.' 任务已启动！';
$l['dis_rescue_task'] = '禁用救援任务已启动';
$l['ena_rescue_task'] = '启用救援任务已启动';
$l['migrate_task'] = '迁移任务已启动';
$l['migrate_disk_task'] = '磁盘迁移已启动';
$l['clone_task'] = '克隆任务已启动';
$l['multivirt_task'] = '多虚拟化任务已启动';
$l['delvps_task'] = '删除 '.VM_SHORT.' 任务已启动';
$l['restore_new_task'] = '恢复到新任务已启动';
$l['restore_task'] = '恢复任务已启动';
$l['vpsaction_task'] = VM_SHORT.' 任务已启动';
$l['rebuild_task'] = '重建 '.VM_SHORT.' 任务已启动';
$l['update_virtualizor_task'] = 'Virtualizor 更新任务已启动';
$l['getting_info'] = '获取信息';

$l['error_ftp_connect'] = '无法连接到 FTP 服务器';
$l['error_ssh_connect'] = '无法连接到 SSH 服务器';
$l['backup_del_cron_started'] = '删除 '.VM_SHORT.' 备份';
$l['err_backup_del_cron'] = '删除 '.VM_SHORT.' 备份时出错';
$l['backup_del_cron_success'] = VM_SHORT.' 备份已成功删除';
$l['enable_backup_delete_update_task'] = '任务将在 ';

//控制面板邮件
$l['temp_control_panel_installation'] = '控制面板安装';
$l['webcp_subject']= '{{cp_name}} 安装详情';
$l['webcp_body'] = '您好，<br>
{{cp_name}} 正在安装中。<br>
可能需要 60 - 90 分钟才能完成。<br><br>
您可以在您的 '.VM_SHORT.' 中查看日志，路径如下：<br>
<b>{{cp_logs}}</b><br><br>
安装完成后，您可以通过以下链接访问 {{cp_name}}：<br>
<a href="{{cp_link}}" target="_blank">{{cp_link}}</a><br><br>
<b>用户名：</b> {{username}}<br>
<b>密码：</b> {{password}}<br><br>';
$l['cpanel'] = 'cPanel';
$l['plesk'] = 'Plesk';
$l['webmin'] = 'Webmin';
$l['interworx'] = 'Interworx';
$l['ispconfig'] = 'ISPConfig';
$l['cwp'] = 'CentOS Web Panel';
$l['vesta'] = 'Vesta';
$l['webuzo'] = 'Webuzo';

$l['note'] = '注意';
$l['mo_notes'] = '笔记';
$l['open_guide'] = '打开指南';
$l['mo_success'] = '成功';
$l['mo_error'] = '错误';
$l['mo_warning'] = '警告';
$l['mo_confirm'] = '确认';

$l['ok'] = '确定';
$l['cancel'] = '取消';

$l['remove_all_ips'] = '删除所有 IP';
$l['notify_admin'] = '通过邮件通知管理员';

$l['no_tasks'] = '没有正在运行的任务！';
$l['type_search'] = '输入以搜索';
$l['vm_locked_backup'] = VM_SHORT.' 备份正在运行';
$l['vm_locked_restore'] = VM_SHORT.' 恢复正在运行';

$l['get_run_task'] = '获取正在运行的任务';

$l['Change_disk'] = '更改磁盘';
$l['setting_disk'] = '设置启动磁盘';

$l['sync_failed'] = '同步失败！';
$l['sync_failed_msg'] = '服务器 ID : {{serid}} - {{server_name}} 同步失败';
$l['sync_completed_msg'] = '服务器 ID : {{serid}} - {{server_name}} 同步完成';
$l['wrong_serid_format'] = 'serids 的格式无效，应为 serids=1,2,3';
$l['invalid_serid'] = '提供的 serid(s) 无效。这些是 serid(s) ';

$l['ide_bus_num_err'] = '总线驱动号应为 2 或 3';
$l['err_res_type_empty'] = '指定的资源类型为空';
$l['err_res_type_unknown'] = '未知的资源类型';
$l['err_no_ipp'] = '未找到给定 '.VM_SHORT.' 的 IP 池';
$l['err_src_dest_share_no_ipp'] ='源服务器和目标服务器不共享 IP 池';
$l['err_no_st'] = '未找到给定 '.VM_SHORT.' 的存储';
$l['err_src_dest_share_no_st'] = '源服务器和目标服务器不共享存储';
$l['low_space_os'] = '您没有足够的磁盘空间来下载操作系统模板';
$l['low_space_iso'] = '您没有足够的磁盘空间来下载 ISO';
//虚拟凭证
$l['temp_virt_credentials'] = '虚拟凭证';
$l['virt_user_pass'] = 'Virtualizor 用户和密码'; 
$l['email_temp'] = '您好， 
欢迎使用 Virtualizor。 
以下是您的登录详情。 
用户名：&soft-1;。 
密码：&soft-2;。 

感谢并此致， 
Virtualizor 团队。';

//双因素认证 OTP
$l['temp_twofactauth_otp'] = '登录 OTP';
$l['twofactauth_otp_mail_sub'] = '登录 OTP';
$l['twofactauth_otp_mail_body'] = '您好，

您的账户在以下位置提交了登录请求：
{{site_domain}}

请使用以下一次性密码 (OTP) 登录：
{{otp}}

此致，
{{sn}}';

//双因素认证密码
$l['temp_twofactauth_passcode'] = '双因素认证确认码';
$l['twofactauth_passcode_mail_sub'] = '双因素认证确认码';
$l['twofactauth_passcode_mail_body'] = '您好，

启用双因素认证的确认码为：{{passcode}}。

此致，
{{sn}}';

//带宽 
$l['temp_bandwidth'] = VM_SHORT.' 因带宽超用被暂停';
$l['bandwidth_mail_sub'] = VM_SHORT.' 因带宽超用被暂停';
$l['bandwidth_mail_body'] = '您好，

您的 '.VM_SHORT.' `{{hostname}}` 因超出分配的带宽限制而被暂停。

'.VM_SHORT.' 已使用 {{used_gb}} GB 带宽，但仅允许 {{limit_gb}} GB。 

此致，
{{sn}}';

//带宽阈值
$l['temp_bandwidth_threshold'] = '带宽阈值超出';
$l['bandwidth_threshold_mail_sub'] = '带宽阈值超出';
$l['bandwidth_threshold_mail_body'] = '您好，

您的 '.VM_SHORT.' {{hostname}} 已超出带宽限制的 {{vps_bandwidth_threshold}} %。

'.VM_SHORT.' 已使用 {{used_gb}} GB 带宽，总带宽为 {{limit_gb}} GB。 

此致，
{{sn}}';

//注册账户
$l['temp_registered_mail'] = '激活账户';
$l['reg_mail_sub'] = '激活账户'; 
$l['reg_mail_body'] = '您好 {{email}}，

感谢您在 {{sn}} 注册账户。

在您使用账户之前，您需要激活它。
点击以下链接激活您的账户：
{{cp_url}}/?#act=register&sa=validate&u={{uid}}&code={{activation_code}}

如果上述链接无效，您需要将链接复制并粘贴到您的浏览器中，或手动输入。

如果您在注册过程中遇到问题，请联系我们 {{support_email}}

感谢！

{{sn}} 团队
{{cp_url}}

激活码：{{activation_code}}
用户 ID：{{uid}}
{{cp_url}}/?#act=register&sa=validate';

//创建新账户
$l['temp_new_account_creation'] = '创建新账户';
$l['reg_val_mail_sub'] = '欢迎来到 {{sn}}';
$l['reg_val_mail_body'] = '恭喜您在 {{sn}} 创建了全新的账户，{{email}}。
	
您现在可以登录您的账户：
{{cp_url}}/?#act=login

请保存此邮件以备记录，因为它包含您账户的重要信息。

祝您使用愉快！

{{sn}} 团队
{{cp_url}}

用户 ID：{{uid}}
激活码：{{activation_code}}';

//新云用户
$l['temp_reg_mail_admin'] = '新云用户注册';
$l['reg_mail_admin_sub'] = '新云用户注册 {{sn}}';
$l['reg_mail_admin_body'] = '新云用户注册，邮箱 {{email}}
	
用户详情： 
用户 ID：{{uid}}
{{contact_no}}
';

//激活码
$l['temp_reg_res_mail'] = '重新发送激活码';
$l['reg_res_mail_sub'] = '您的激活码';
$l['reg_res_mail_body'] = '您好 {{email}}，

我们收到了重新发送激活码的请求。

在您使用账户之前，您需要激活它。
点击以下链接激活您的账户：
{{cp_url}}/?#act=register&sa=validate&u={{uid}}&code={{activation_code}}

如果上述链接无效，您需要将链接复制并粘贴到您的浏览器中，或手动输入。

如果您在注册过程中遇到问题，请联系我们 {{support_email}}

感谢！

{{sn}} 团队
{{cp_url}}

激活码：{{activation_code}}
用户 ID：{{uid}}
{{cp_url}}/?#act=register&sa=validate';

// 从服务器状态邮件
$l['temp_slave_offline'] = '从服务器离线';
$l['slave_offline_sub'] = '从服务器离线';
$l['slave_offline'] = '以下从服务器已离线：

{{slave_text}}

此致，
{{sn}} {{ip}} ({{hostname}})';

// 从服务器状态邮件
$l['temp_slave_online'] = '从服务器在线';
$l['slave_online_sub'] = '从服务器在线';
$l['slave_online'] = '以下从服务器已在线：

{{slave_text}}

此致，
{{sn}} {{ip}} ({{hostname}})';


// 从服务器阈值状态邮件
$l['temp_storage_threshold'] = '存储使用阈值值！！！';
$l['storage_threshold_sub'] = '存储使用限制已达到阈值值！！！';
$l['storage_threshold'] = '以下存储已超出设置的阈值值。请采取必要的措施。

{{storage_list}}
此致，
{{sn}} {{ip}} ({{hostname}})';

//数据库备份成功
$l['temp_db_backup'] = '数据库备份成功';
$l['db_backup_sub'] = '数据库备份成功';
$l['db_backup_body'] = '您好，
		
您的数据库备份已成功创建。
服务器 IP 地址：{{primary_ip}}

{{server_domain}}

请查看附件中的数据库文件。

此致，
Virtualizor';

//数据库备份失败
$l['temp_admin_dbbackups_err'] = '数据库备份失败';
$l['admin_dbbackups_err_sub'] = '数据库备份失败';
$l['admin_dbbackups_err_body'] = '您好，

服务器 IP 地址：{{primary_ip}}

{{server_domain}}

数据库备份过程中发生以下错误。	
{{error_log}}		
		
请参考数据库备份日志或 '.V_LOG_DIR.'/dbbackups.log 获取更多信息。
		
	  
此致，
{{sn}}';
 
// 电源定时任务通知
$l['temp_self_shutdown'] = VM_SHORT.' 关闭';
$l['self_shutdown_sub'] = VM_SHORT.' {{action}}';
$l['self_shutdown_body'] = '您好

您的 '.VM_SHORT.' {{vpsid}} 已根据您设置的时间 ({{time}}) 被 {{action}}
';

// '.VM_SHORT.' 备份完成
$l['temp_vpsbackups_single'] = VM_SHORT.' 备份计划完成';
$l['vpsbackups_single_sub'] = VM_SHORT.' 备份完成';
$l['vpsbackups_single_body'] = '您好，

'.VM_SHORT.' 备份过程已完成。

以下 '.VM_SHORT.'(s) 已成功备份：

{{vpses}}
	  
此致，
{{sn}}';

// '.VM_SHORT.' 备份失败
$l['temp_vpsbackups_single_err'] = VM_SHORT.' 备份计划失败';
$l['vpsbackups_single_err_sub'] = VM_SHORT.' 备份失败';
$l['vpsbackups_single_err_body'] = '您好，

以下 '.VM_SHORT.' 备份失败：

{{vpses}}

服务器 IP 地址：{{primary_ip}}

{{server_domain}}

请参考 '.VM_SHORT.' 备份日志获取更多信息。


此致，
{{sn}}';

//公共笔记
$l['temp_public_email'] = 'Virtualizor：新公共笔记';
$l['email_subject'] = 'Virtualizor：新公共笔记';
$l['email_message'] = '您好，

{{user}} 发布了一条新的公共笔记：


{{note_title}}

{{note_content}}


此致，
{{sn}}';

//资源使用限制
$l['temp_admin_mail_limit'] = '系统资源使用限制超出';
$l['admin_mail_limit_sub'] = '系统资源使用限制超出';
$l['admin_mail_limit'] = '

主机名：{{hostname}}

服务器 IP：{{ip}}

负载：{{load}}

CPU 使用率：{{cpu_usage}} %

内存使用率：{{ram_usage}} %

磁盘使用率：{{disk_usage}} %

/tmp 使用率：{{tmp_disk_usage}} %

此致，
{{sn}} {{ip}}';

//vps 恢复成功
$l['temp_vpsrestore_end'] = VM_SHORT.' 恢复完成';
$l['vpsrestore_end_sub'] = VM_SHORT.' 恢复完成';
$l['vpsrestore_end_body'] = '您好，

'.VM_SHORT.' 恢复过程已完成。

以下 '.VM_SHORT.' 已成功恢复：

'.VM_SHORT.' ID：{{vpsid}} ({{hostname}})
	  
此致，
{{sn}}';

// '.VM_SHORT.' 恢复失败
$l['temp_vpsrestore_err'] = VM_SHORT.' 恢复失败';
$l['vpsrestore_err_sub'] = VM_SHORT.' 恢复失败';
$l['vpsrestore_err_body'] = '您好，

'.VM_SHORT.' ID：{{vpsid}} ({{hostname}})

服务器 IP 地址：{{primary_ip}}

{{server_domain}}

'.VM_SHORT.' 恢复过程中发生以下错误。 
{{error_log}}
		
请参考 '.VM_SHORT.' 恢复日志获取更多信息。
	  
此致，
{{sn}}';

//邮件 '.VM_SHORT.' 备份结束
$l['temp_vpsbackups_end'] = VM_SHORT.' 备份完成';
$l['vpsbackups_end_sub'] = VM_SHORT.' 备份完成';
$l['vpsbackups_end_body'] = '您好，

'.VM_SHORT.' 备份过程已完成。

以下 '.VM_SHORT.' 已成功备份：

'.VM_SHORT.' ID：{{vpsid}} ({{hostname}})
	  
此致，
{{sn}}';

//管理员邮件 '.VM_SHORT.' 备份错误
$l['temp_vpsbackups_err'] = VM_SHORT.' 备份失败';
$l['vpsbackups_err_sub'] = VM_SHORT.' 备份失败';
$l['vpsbackups_err_body'] = '您好，

'.VM_SHORT.' ID：{{vpsid}} ({{hostname}})

服务器 IP 地址：{{primary_ip}}

{{server_domain}}

'.VM_SHORT.' 备份过程中发生以下错误。
{{error_log}}

请参考 '.VM_SHORT.' 备份日志获取更多信息。


此致，
{{sn}}';

//磁盘迁移成功邮件模板
$l['temp_migdisk_done'] = '磁盘迁移完成';
$l['migdisk_done_sub'] = '磁盘迁移 '.VM_SHORT.' {{vpsid}} : 完成';
$l['migdisk_done_body'] = '您好，

'.VM_SHORT.' {{vpsid}} 的磁盘迁移过程已完成。以下是详细信息：

从磁盘：{{from_disk}}
到磁盘：{{to_disk}}

'.VM_SHORT.' ID：{{vpsid}}

'.VM_SHORT.' 名称：{{vps_name}}

此致，
{{sn}} ({{primary_ip}})
';

//磁盘迁移失败邮件模板
$l['temp_migdisk_err'] = '磁盘迁移失败';
$l['migdisk_err_sub'] = '磁盘迁移 '.VM_SHORT.' {{vpsid}} : 失败';
$l['migdisk_err_body'] = '您好，

'.VM_SHORT.' {{vpsid}} 的磁盘迁移过程失败。以下是详细信息：

{{err}}

从磁盘：{{from_disk}}
到磁盘：{{to_disk}}

'.VM_SHORT.' ID：{{vpsid}}

'.VM_SHORT.' 名称：{{vps_name}}

此致，
{{sn}} ({{primary_ip}})
';

// VPS 网络速度被限制
$l['temp_vps_net_speed_capped'] = VM_SHORT.' 网络速度被限制';
$l['speed_capped_mail_sub'] = VM_SHORT.' 网络速度因带宽超限被限制';
$l['speed_capped_mail_message'] = '您好，

您的 '.VM_SHORT.' {{hostname}} 的网络速度已被限制，因为它已达到分配的带宽限制。

该 '.VM_SHORT.' 已使用 {{used_gb}} GB 带宽，允许的带宽为 {{limit_gb}} GB。

此致，
{{sn}}';

// VPS 网络速度恢复
$l['temp_vps_net_speed_capped_restore'] = VM_SHORT.' 网络速度已恢复';
$l['removed_speed_capped_mail_sub'] = VM_SHORT.' 网络速度已恢复';
$l['removed_speed_capped_mail_message'] = '您好，

您的 '.VM_SHORT.' {{hostname}} 的网络速度已恢复。

该 '.VM_SHORT.' 已使用 {{used_gb}} GB 带宽，允许的带宽为 {{limit_gb}} GB。

此致，
{{sn}}';
$l['custom'] = '自定义';

$l['kvm_live_pass_err'] = '使用客户代理更新密码时出错。请尝试停止并启动 '.VM_SHORT.' 以更改密码';
$l['kvm_pass_poweroff'] = '您需要关闭并启动 '.VM_SHORT.' 以更改密码';
$l['kvm_guest_agent_err'] = '客户代理（版本：{{version}}）不支持 "{{command}}"，因此无法执行该命令';
$l['kvm_live_pass'] = '密码已成功更新，无需关闭并启动 VPS';
$l['kvm_live_pass_update'] = '正在使用客户代理更新密码';
$l['install_guest_agent'] = '正在安装 qemu-guest-agent';
$l['result_found'] = ' 条结果找到';
$l['require_prolic'] = '需要 <b>Pro</b> 许可证才能使用此功能';

$l['many_ttyd_sess'] = '您有超过 5 个 TTY 会话。无法创建新会话！';

// 直通部分
$l['passthrough_nocontroller'] = VM_SHORT.' 内部没有 USB 控制器。要自动添加它们，请先停止 | 启动 '.VM_SHORT.'，然后再尝试分配 USB';
$l['passthrough_offline_vps'] = '当 '.VM_SHORT.' 离线时，无法更改分配的直通设备';
$l['passthrough_removed'] = 'PCI 设备已移除';

$l['lic_sync_notice'] = '<strong>许可证同步错误：</strong> 您的服务器似乎未与 Virtualizor 服务器同步。<br>请报告至 support@virtualizor.com';

$l['download_csv'] = '点击此处下载 CSV';

$l['suspend_error'] = '暂停 '.VM_SHORT.' 时出错';
$l['unsuspend_error'] = '恢复 '.VM_SHORT.' 时出错';
$l['change_log_ver'] = '版本变更日志 ';
$l['suspend_reason'] = '暂停原因：';
$l['cpu_threshold_exceeded'] = VM_SHORT.' 已暂停，因为 CPU 阈值已超出';

// 防火墙
$l['no_admin_fwid_and_fwid'] = '最终用户和管理员防火墙计划不能都为空';
$l['no_fwid'] = '未指定防火墙计划';
$l['no_firewall_plan'] = '未找到防火墙计划';
$l['wrong_enduser_firewall_plan'] = '指定的最终用户防火墙计划错误';
$l['wrong_admin_firewall_plan'] = '指定的管理员防火墙计划错误';
$l['not_enduser_firewall'] = '指定的计划不是最终用户防火墙计划';
$l['not_admin_firewall'] = '指定的计划不是管理员防火墙计划';
$l['no_plan_provided'] = '未提供计划';
$l['invalid_vps_column'] = 'VPS 表的列名无效';
$l['invalid_plans_variable'] = '$plans 的结构无效。它应该像 $plans = array("plids" => array(1,2..), "columns" =>array("plid", "plan_name"...)) 或 $plan = array("all")';
$l['invalid_plans_column'] = '计划表的列名无效';
$l['admin_not_allowed_enduser_firewalledit'] = '管理员不能编辑最终用户防火墙计划';
$l['vps_fwp_update_start'] = '开始更新 '.VM_SHORT.' 防火墙计划';
$l['vps_fwp_updated'] = VM_SHORT.' 防火墙计划已成功更新';
$l['vps_fwp_apply_rules'] = '正在服务器上应用规则：';

// 客户电子邮件模板，通知设置待处理
$l['addvs_setup_pending_sub'] = VM_SHORT.' 设置待处理';
$l['addvs_setup_pending_body'] = '您好，

您的 '.VM_SHORT.' 已创建，设置完成待处理。
请登录面板并完成设置。
登录详细信息如下：
用户名：{{username}}
密码：{{password}}
URL：https://{{host}}:4083
	  http://{{host}}:4082

您的 '.VM_SHORT.' 详细信息如下：
'.VM_SHORT.'ID：{{vpsid}}

转到 '.VM_SHORT.' 列表 -> 点击设置待处理图标。它将重定向您到设置完成向导。
选择您的操作系统并填写其他详细信息以完成您的 '.VM_SHORT.' 设置。

此致，
{{sn}}';

// 客户电子邮件模板，设置完成
$l['addvs_setup_complete_sub'] = VM_SHORT.' 设置成功完成';
$l['addvs_setup_complete_body'] = '您好，

您的 '.VM_SHORT.' 设置已成功配置。
'.VM_SHORT.' 详细信息如下：
'.VM_SHORT.'ID：{{vpsid}}
VID：{{vps_name}}
用户名：{{root_username}}
根密码：{{root_pass}}
IP(s)：{{ips}}
{{macdetails}}

{{vncdetails}}

此致，
{{sn}}';

// 管理员电子邮件模板，设置待处理
$l['admin_addvs_setup_pending_sub'] = VM_SHORT.' 已创建，设置待处理';
$l['admin_addvs_setup_pending_body'] = '您好，

'.VM_SHORT.' 已创建。其设置待用户处理。
以下是其详细信息：
'.VM_SHORT.'ID：{{vpsid}}

此致，
{{sn}}';

// 管理员电子邮件模板，设置完成
$l['admin_addvs_setup_complete_sub'] = VM_SHORT.' ({{vpsid}}) 设置已由用户完成';
$l['admin_addvs_setup_complete_body'] = '您好，

'.VM_SHORT.' 设置已由用户完成。以下是其详细信息：
'.VM_SHORT.'ID：{{vpsid}}
用户名：{{root_username}}
根密码：{{root_pass}}
IP(s)：{{ips}}
{{macdetails}}

{{vncdetails}}

此致，
{{sn}}';

// 管理员错误电子邮件模板，设置完成
$l['admin_addvs_setup_complete_err_sub'] = VM_SHORT.' ({{vpsid}}) 用户完成设置时出错';
$l['admin_addvs_setup_complete_err_body'] = '您好，

'.VM_SHORT.' 设置配置失败。
以下是其详细信息：

错误：{{err_msg}}

节点详细信息：
IP：{{node_ip}}

此致，
{{sn}}';

$l['enabled'] = '已启用';
$l['disabled'] = '已禁用';
$l['active'] = '活跃';
$l['inactive'] = '不活跃';
$l['no_nbd_device'] = '未提供 NBD 设备';

// 通过电子邮件登录面板
$l['mail_panel_login'] = '
<tr>
	<td class="wrapper" style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; box-sizing: border-box; padding: 24px;" valign="top">
		<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt;mso-table-rspace: 0pt; box-sizing: border-box; width: 100%; min-width: 100%;"width="100%">
			<tbody>
				<tr>
					<td align="left" style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; padding-bottom: 16px;" valign="top">
						<table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
							<tbody>
								<tr>
									<td style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; border-radius: 4px; text-align: center; background-color: #0867ec;" valign="top" align="center" bgcolor="#0867ec">
										<a href="https://{{host}}:4083" target="_blank" style="border: solid 2px #0867ec; border-radius: 4px; box-sizing: border-box; cursor: pointer; display: inline-block; font-size: 16px; font-weight: bold; margin: 0; padding: 12px 24px; text-decoration: none; text-transform: capitalize; background-color: #0867ec; border-color: #0867ec; color: #ffffff;">登录面板</a>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>';

// 将消息转换为 HTML 模板
$l['virt_html_email'] = '<body style="font-family: Helvetica, sans-serif; -webkit-font-smoothing: antialiased; font-size: 16px; line-height: 1.3; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #f4f5f6; margin: 0; padding: 0;">
	<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f4f5f6; width: 100%;" width="100%" bgcolor="#f4f5f6">
		<tr>
			<td style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top;" valign="top">&nbsp;</td>
			<td class="container" style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; max-width: 600px; padding: 0; padding-top: 24px;width: 600px; margin: 0 auto;" width="600" valign="top">
				<div class="content" style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 600px; padding: 0;">
					<!-- START CENTERED WHITE CONTAINER -->
					<table role="presentation" border="0" cellpadding="0" cellspacing="0" class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #ffffff; border: 1px solid #eaebed; border-radius: 16px; width: 100%;" width="100%">
						<!-- START MAIN CONTENT AREA -->
						 <tr>
							<td align="center" style="padding-top: 2rem;">
								{{logo}}
							</td>
						 </tr>
						<tr>
							<td class="wrapper" style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; box-sizing: border-box; padding: 24px;" valign="top">
								<pre style="font-family: Helvetica, sans-serif; font-size: 15px; font-weight: normal; margin: 0; margin-bottom: 16px;">{{content}}</pre>
							</td>
						</tr>
						{{mail_panel_login}}
						<!-- END MAIN CONTENT AREA -->
					</table>
					<!-- START FOOTER -->
					<div class="footer" style="clear: both; padding-top: 24px; text-align: center; width: 100%; margin-bottom: 2rem;">
						<table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
							<tr>
								<td class="content-block powered-by" style="font-family: Helvetica, sans-serif; vertical-align: top; color: #9a9ea6; font-size: 16px; text-align: center;" valign="top" align="center">{{copyright}}
								</td>
							</tr>
						</table>
					</div>
					<!-- END FOOTER -->
					<!-- END CENTERED WHITE CONTAINER -->
				</div>
			</td>
			<td style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top;" valign="top">&nbsp;</td>
		</tr>
	</table>
</body>';

$l['total_notification'] = '您共有';
$l['notifications'] = '条通知';
$l['ago'] = ' 前';
$l['success_connect'] = '连接成功';
$l['unable_connect'] = '连接失败';
$l['unable_content_connect'] = '无法连接到';
$l['success_content_connect'] = '成功连接到';
$l['dns_server'] = 'DNS 服务器';