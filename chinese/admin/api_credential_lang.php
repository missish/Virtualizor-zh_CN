<?php

//////////////////////////////////////////////////////////////
//===========================================================
// api_credential_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来源：成为最好的
// ----------------------------------------------------------
// 开发者: Alons
// 日期: 2010年3月8日
// 时间: 23:00
// 网站: https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// 请阅读 https://www.virtualizor.com 的使用条款
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('非法访问');

}

$l['<title>'] = '列出 API 凭证';
$l['<title_edit>'] = '编辑 API 凭证';
$l['<title_create>'] = '创建 API 凭证';
$l['with_selected'] = '与所选项一起';
$l['api_details'] = 'API 信息';
$l['delete_pair'] = '删除';
$l['logging'] = '启用日志记录';
$l['logging_exp'] = '启用后，将为此 API 配对生成日志';
$l['logging_col'] = '日志记录';
$l['create'] = '允许创建 VPS';
$l['delete'] = '允许删除 VPS';
$l['view'] = '仅显示 VPS 信息';
$l['delete_successful'] = '删除成功';
$l['not_allowed'] = '您没有权限创建 API 配对。';
$l['not_allowed_see'] = '您没有权限查看此页面。';
$l['go'] = '继续';
$l['all'] = '所有';
$l['none'] = '选择用户';
$l['search_id'] = 'API ID';
$l['search_uid'] = '用户电子邮件';
$l['submit'] = '提交';
$l['ip_value'] = 'IP 地址';
$l['ip_values'] = 'IP 地址';
$l['select_user'] = '选择管理员用户';
$l['added'] = 'API 配对成功生成！返回 <a href="'.$globals['index'].'act=list_api">API 列表概览</a>';
$l['added_fail'] = '生成 API 配对失败。';
$l['cant_delete'] = '无法删除默认的 API 密钥和密码';
$l['select_action'] = '操作';
$l['sub_but'] = '生成 API 配对';
$l['sub_but_sv'] = '保存更改';
$l['no_api_action'] = '未选择 API 操作';
$l['no_ip'] = '请输入有效的 IP 地址';
$l['no_ip_none'] = '未找到 IP 地址';
$l['root'] = '所有者';
$l['no_acl_record'] = '未找到此用户的 ACL 记录！';
$l['no_api_rec'] = '未找到 API 记录！';
$l['act_done'] = 'ACL 成功添加。';
$l['act_cat_admin_dash'] = '管理员仪表板';
$l['act_cat_vs'] = VM_LONG;
$l['act_cat_ippools'] = 'IP 池';
$l['act_cat_servers'] = '服务器和服务器组';
$l['act_cat_storage'] = '存储';
$l['act_cat_backups'] = '服务器和 '.VM_SHORT.' 备份';
$l['act_cat_plans'] = '计划';
$l['act_cat_users'] = '用户';
$l['act_cat_media'] = '媒体和媒体组';
$l['act_cat_config'] = '配置';
$l['act_cat_pdns'] = 'PowerDNS';
$l['act_cat_procs'] = '进程和服务';
$l['act_cat_logs'] = '日志';
$l['act_cat_haproxy'] = '域名转发';
$l['no_info'] = '未找到 API 配对！';
$l['api_key'] = 'API 密钥';
$l['api_val'] = 'API 密码';
$l['api_actions'] = '操作';
$l['err_add'] = '无法保存数据，请重试。';
$l['acl_surpass'] = '您已分配的 ACL 权限超过了此用户实际分配的 ACL 计划';
$l['acl_wrong'] = '请重新检查提交的 ACL，它与分配的 ACL 不匹配';
$l['delete_ids'] = '以下 API ID 已被删除';
$l['reset_ids'] = '以下 API ID 已成功重置';
$l['reset_conf'] = '您确定要重置 API 密钥吗？';
$l['cant_reset'] = '无法重置默认的 API 密钥和密码';
$l['reset_successful'] = '密钥已成功重置';
$l['reset'] = '重置';
$l['inv_user'] = '请选择有效的用户';
$l['api_gen_fail'] = '生成 API 配对失败！';
$l['all_ip'] = '所有 IP 地址';
$l['post_data'] = 'POST';
$l['get_data'] = 'GET';

$l['act_cluster_statistics'] = '查看集群统计信息';
$l['act_server_statistics'] = '查看服务器统计信息';
$l['act_vs'] = '列出 '.VM_LONG;
$l['act_vsresources'] = '查看 '.VM_SHORT.' 资源';
$l['act_addvs'] = '添加 '.VM_LONG;
$l['act_rebuildvs'] = '重建 '.VM_LONG;
$l['act_editvs'] = '编辑 '.VM_LONG;
$l['act_deletevs'] = '删除 '.VM_LONG;
$l['act_startvs'] = '启动 '.VM_LONG;
$l['act_stopvs'] = '停止 '.VM_LONG;
$l['act_restartvs'] = '重启 '.VM_LONG;
$l['act_poweroffvs'] = '关闭 '.VM_LONG;
$l['act_suspendvs'] = '暂停 '.VM_LONG;
$l['act_unsuspendvs'] = '取消暂停 '.VM_LONG;
$l['act_vnc'] = VM_LONG.'. VNC';
$l['act_migrate'] = '迁移 '.VM_LONG;

$l['act_ippool'] = '查看 IP 池';
$l['act_addippool'] = '添加 IP 池';
$l['act_editippool'] = '编辑 IP 池';
$l['act_deleteippool'] = '删除 IP 池';
$l['act_ips'] = '查看 IP';
$l['act_addips'] = '添加 IP';
$l['act_editips'] = '编辑 IP';
$l['act_deleteips'] = '删除 IP';

$l['act_servers'] = '查看服务器';
$l['act_addserver'] = '添加服务器';
$l['act_editserver'] = '编辑服务器';
$l['act_deleteserver'] = '删除服务器';
$l['act_sg'] = '查看服务器组';
$l['act_addsg'] = '添加服务器组';
$l['act_editsg'] = '编辑服务器组';
$l['act_deletesg'] = '删除服务器组';
$l['act_rebootserver'] = '重启服务器';
$l['act_manageserver'] = '管理服务器';
$l['act_terminal'] = '终端';

$l['act_storage'] = '查看存储';
$l['act_volumes'] = '卷';
$l['act_addstorage'] = '添加存储';
$l['act_editstorage'] = '编辑存储';
$l['act_deletestorage'] = '删除存储';

$l['act_databackup'] = '查看数据库备份';
$l['act_performdatabackup'] = '执行数据库备份';
$l['act_dldatabackup'] = '下载数据库备份';
$l['act_deletedatabackup'] = '删除数据库备份';
$l['act_vpsbackupsettings'] = '编辑 '.VM_SHORT.' 备份设置';
$l['act_vpsbackups'] = '查看 '.VM_SHORT.' 备份';
$l['act_restorevpsbackup'] = '恢复 '.VM_SHORT.' 备份';
$l['act_deletevpsbackup'] = '删除 '.VM_SHORT.' 备份';
$l['act_backupservers'] = '查看备份服务器';
$l['act_addbackupserver'] = '添加备份服务器';
$l['act_editbackupservsers'] = '编辑备份服务器';
$l['act_deletebackupserver'] = '删除备份服务器';

$l['act_plans'] = '查看计划';
$l['act_addplan'] = '添加计划';
$l['act_editplan'] = '编辑计划';
$l['act_deleteplan'] = '删除计划';
$l['act_dnsplans'] = '查看 DNS 计划';
$l['act_adddnsplan'] = '添加 DNS 计划';
$l['act_editdnsplan'] = '编辑 DNS 计划';
$l['act_deletednsplan'] = '删除 DNS 计划';
$l['act_add_dnsrecord'] = '添加 DNS 记录';

$l['act_users'] = '查看用户';
$l['act_adduser'] = '添加用户';
$l['act_edituser'] = '编辑用户';
$l['act_deleteuser'] = '删除用户';
$l['act_suspend_user'] = '暂停用户';
$l['act_unsuspend_user'] = '取消暂停用户';
$l['act_list_api'] = '列出 API 凭证';
$l['act_create_api'] = '创建 API 凭证';
$l['act_api_credential_edit'] = '编辑 API 凭证';
$l['act_show_api_log'] = '查看 API 日志';

$l['act_ostemplates'] = '查看模板';
$l['act_os'] = '查看模板浏览器';
$l['act_addtemplate'] = '添加模板';
$l['act_edittemplate'] = '编辑模板';
$l['act_deletetemplate'] = '删除模板';
$l['act_createtemplate'] = '创建模板';
$l['act_iso'] = '查看 ISO 列表';
$l['act_addiso'] = '添加 ISO';
$l['act_editiso'] = '编辑 ISO';
$l['act_deleteiso'] = '删除 ISO';
$l['act_mg'] = '查看媒体组';
$l['act_addmg'] = '添加媒体组';
$l['act_editmg'] = '编辑媒体组';
$l['act_deletemg'] = '删除媒体组';
$l['act_list_distros'] = '查看发行版列表';
$l['act_add_distro'] = '添加发行版';
$l['act_synciso'] = '同步 ISO';

$l['act_config'] = '编辑通用设置';
$l['act_emailsettings'] = '编辑电子邮件设置';
$l['act_adminacl'] = '查看管理员 ACL';
$l['act_add_admin_acl'] = '添加管理员 ACL';
$l['act_edit_admin_acl'] = '编辑管理员 ACL';
$l['act_delete_admin_acl'] = '删除管理员 ACL';
$l['act_serverinfo'] = '查看服务器信息';
$l['act_licenseinfo'] = '查看许可证信息';
$l['act_hostname'] = '查看主机名';
$l['act_changehostname'] = '编辑主机名';
$l['act_maintenance'] = '维护模式';
$l['act_kernconfig'] = '编辑内核配置';
$l['act_defaultvsconf'] = '默认 '.VM_SHORT.' 配置';
$l['act_twofactauth'] = '两步验证';
$l['act_updates'] = '执行更新';
$l['act_emailtemps'] = '查看邮件模板';
$l['act_editemailtemps'] = '编辑邮件模板';
$l['act_ssl'] = '查看 SSL 文件';
$l['act_editssl'] = '编辑 SSL 文件';
$l['act_createssl'] = '创建 SSL 证书';
$l['act_firewall'] = '管理防火墙';
$l['act_importvs'] = '导入虚拟机';
$l['act_phpmyadmin'] = '访问 PhpMyAdmin';
$l['act_ssh'] = '访问 SSH';
$l['act_pdns'] = '查看 DNS 服务器';
$l['act_managepdns'] = '管理 DNS 服务器';
$l['act_addpdns'] = '添加 DNS 服务器';
$l['act_editpdns'] = '编辑 DNS 服务器';
$l['act_deletepdns'] = '删除 DNS 服务器';
$l['act_rdns'] = '添加反向 DNS 区域';

$l['act_procs'] = '管理进程';
$l['act_services'] = '管理服务';
$l['act_webserver'] = '重启 Web 服务器';
$l['act_network'] = '重启网络服务';
$l['act_sendmail'] = '重启邮件服务器';
$l['act_mysqld'] = '重启 MySQL';
$l['act_iptables'] = '重启 IPTables';

$l['act_logs'] = '查看日志';
$l['act_deletelogs'] = '删除日志';
$l['act_userlogs'] = '查看用户日志';
$l['act_deleteuserlogs'] = '删除用户日志';
$l['act_loginlogs'] = '查看登录日志';
$l['act_deleteloginlogs'] = '删除登录日志';
$l['act_iplogs'] = '查看 IP 日志';
$l['act_deliplogs'] = '删除 IP 日志';

$l['act_checkall'] = '全选';
$l['act_save'] = '保存';

$l['cat_recipe'] = '配方';
$l['act_recipes'] = '查看配方';
$l['act_addrecipe'] = '添加配方';
$l['act_editrecipe'] = '编辑配方';

$l['act_backup_plans'] = '列出备份计划';
$l['act_addbackup_plan'] = '添加备份计划';
$l['act_editbackup_plan'] = '编辑备份计划';
$l['act_deletebackup_plan'] = '删除备份计划';

$l['act_haproxy'] = '域名转发';
$l['act_euiso'] = 'Enduser ISO';
$l['act_orphaneddisk'] = '列出孤立磁盘';
$l['act_deleteorphaneddisk'] = '删除孤立磁盘';

$l['act_ha'] = '高可用性';
$l['act_load_balancer'] = '负载均衡器';
$l['act_manage_load_balancer'] = '管理负载均衡器';
$l['act_multivirt'] = '多虚拟化'; 
$l['act_webuzo'] = 'Webuzo 设置';
$l['act_billing'] = '账单设置';
$l['act_resource_pricing'] = '资源计费';
$l['act_invoices'] = '发票';
$l['act_transactions'] = '交易';
$l['act_addinvoice'] = '添加发票';
$l['act_addtransaction'] = '添加交易';

$l['cat_admin_dash'] = '管理员仪表板';
$l['cat_vs'] = VM_LONG;
$l['cat_ippools'] = 'IP 池';
$l['cat_servers'] = '服务器和服务器组';
$l['cat_storage'] = '存储';
$l['cat_backups'] ='服务器和 '.VM_SHORT.' 备份';
$l['cat_plans'] = '计划';
$l['cat_users'] = '用户';
$l['cat_media'] = '媒体和媒体组';
$l['cat_config'] = '配置';
$l['cat_pdns'] = 'PowerDNS';
$l['cat_procs'] = '进程和服务';
$l['cat_logs'] = '日志';
$l['cat_haproxy'] = '域名转发';
$l['cat_billing'] = '账单';
