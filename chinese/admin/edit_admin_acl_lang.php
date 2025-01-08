<?php

//////////////////////////////////////////////////////////////
//===========================================================
// edit_admin_acl_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 受“成为最好的”这一愿望启发
// ----------------------------------------------------------
// 开始人: Alons
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

$l['<title>'] = '编辑管理员 ACL';
$l['header'] = '编辑管理员 ACL';

$l['no_name_specified'] = '未指定 ACL 的名称';
$l['nameexist'] = '未指定唯一的 ACL 名称';

$l['done'] = 'ACL 编辑成功';
$l['cat_admin_dash'] = '管理员仪表板';
$l['cat_vs'] = VM_LONG;
$l['cat_ippools'] = 'IP 池';
$l['cat_servers'] = '服务器和服务器组';
$l['cat_storage'] = '存储';
$l['cat_backups'] = '服务器和 ' . VM_SHORT . ' 备份';
$l['cat_plans'] = '计划';
$l['cat_users'] = '用户';
$l['cat_media'] = '媒体和媒体组';
$l['cat_config'] = '配置';
$l['cat_pdns'] = 'PowerDNS';
$l['cat_procs'] = '进程和服务';
$l['cat_logs'] = '日志';
$l['cat_haproxy'] = '域名转发';
$l['cat_passthrough'] = '直通设备';

$l['cluster_statistics'] = '查看集群统计';
$l['server_statistics'] = '查看服务器统计';
$l['listvs'] = '列出 ' . VM_LONG;
$l['vsresources'] = '查看 ' . VM_SHORT . ' 资源';
$l['addvs'] = '添加 ' . VM_LONG;
$l['rebuildvs'] = '重建 ' . VM_LONG;
$l['editvs'] = '编辑 ' . VM_LONG;
$l['deletevs'] = '删除 ' . VM_LONG;
$l['startvs'] = '启动 ' . VM_LONG;
$l['stopvs'] = '停止 ' . VM_LONG;
$l['restartvs'] = '重启 ' . VM_LONG;
$l['poweroffvs'] = '关闭 ' . VM_LONG;
$l['suspendvs'] = '挂起 ' . VM_LONG;
$l['unsuspendvs'] = '恢复 ' . VM_LONG;
$l['vsvnc'] = VM_LONG . '. VNC';
$l['migrate'] = '迁移 ' . VM_LONG;

$l['ippools'] = '查看 IP 池';
$l['addippool'] = '添加 IP 池';
$l['editippool'] = '编辑 IP 池';
$l['deleteippool'] = '删除 IP 池';
$l['ips'] = '查看 IP';
$l['addips'] = '添加 IP';
$l['editips'] = '编辑 IP';
$l['deleteips'] = '删除 IP';

$l['servers'] = '查看服务器';
$l['addserver'] = '添加服务器';
$l['editserver'] = '编辑服务器';
$l['deleteserver'] = '删除 ' . VM_LONG;
$l['sg'] = '查看服务器组';
$l['addsg'] = '添加服务器组';
$l['editsg'] = '编辑服务器组';
$l['deletesg'] = '删除服务器组';
$l['reboot'] = '重启服务器';
$l['manageserver'] = '管理服务器';
$l['terminal'] = '终端';
$l['sso'] = '单点登录';

$l['storage'] = '查看存储';
$l['addstorage'] = '添加存储';
$l['editstorage'] = '编辑存储';
$l['deletestorage'] = '删除存储';
$l['volumes'] = '卷';

$l['backups'] = '查看数据库备份';
$l['perf_db_backups'] = '执行数据库备份';
$l['dl_db_bakcups'] = '下载数据库备份';
$l['del_db_backups'] = '删除数据库备份';
$l['edit_vps_backups'] = '编辑 ' . VM_SHORT . ' 备份设置';
$l['vps_backups'] = '查看 ' . VM_SHORT . ' 备份';
$l['restore_vs_backups'] = '恢复 ' . VM_SHORT . ' 备份';
$l['delete_vs_backups'] = '删除 ' . VM_SHORT . ' 备份';
$l['list_backupservers'] = '查看备份服务器';
$l['add_backupserver'] = '添加备份服务器';
$l['edit_backupserver'] = '编辑备份服务器';
$l['delete_backupserver'] = '删除备份服务器';

$l['plans'] = '查看计划';
$l['addplan'] = '添加计划';
$l['editplan'] = '编辑计划';
$l['deleteplan'] = '删除计划';
$l['dnsplans'] = '查看 DNS 计划';
$l['adddnsplan'] = '添加 DNS 计划';
$l['editdnsplan'] = '编辑 DNS 计划';
$l['deletednsplan'] = '删除 DNS 计划';
$l['add_dnsrecord'] = '添加 DNS 记录';

$l['users'] = '查看用户';
$l['adduser'] = '添加用户';
$l['edituser'] = '编辑用户';
$l['deleteuser'] = '删除用户';
$l['suspend_user'] = '暂停用户';
$l['unsuspend_user'] = '恢复用户';
$l['list_api'] = '列出 API 凭证';
$l['create_api'] = '创建 API 凭证';
$l['api_credential_edit'] = '编辑 API 凭证';
$l['show_api_log'] = '查看 API 日志';

$l['templates'] = '查看模板';
$l['templatebrowser'] = '查看模板浏览器';
$l['addtemplates'] = '添加模板';
$l['edittemplates'] = '编辑模板';
$l['deltetemplates'] = '删除模板';
$l['createtemplate'] = '创建模板';
$l['isos'] = '查看 ISO 列表';
$l['addiso'] = '添加 ISO';
$l['editisos'] = '编辑 ISO';
$l['deleteiso'] = '删除 ISO';
$l['mgs'] = '查看媒体组';
$l['addmgs'] = '添加媒体组';
$l['editmg'] = '编辑媒体组';
$l['deletemgs'] = '删除媒体组';
$l['list_distros'] = '查看发行版列表';
$l['add_distro'] = '添加发行版';
$l['sync_iso'] = '同步 ISO';

$l['edit_settings'] = '编辑常规设置';
$l['edit_emailsettings'] = '编辑邮件设置';
$l['admin_acl'] = '查看管理员 ACL';
$l['add_admin_acl'] = '添加管理员 ACL';
$l['edit_admin_acl'] = '编辑管理员 ACL';
$l['delete_admin_acl'] = '删除管理员 ACL';
$l['serverinfo'] = '查看服务器信息';
$l['licenseinfo'] = '查看许可证信息';
$l['hostname'] = '查看主机名';
$l['edithostname'] = '编辑主机名';
$l['maintenance'] = '维护模式';
$l['kern_config'] = '编辑内核配置';
$l['dif_vps_config'] = '默认 ' . VM_SHORT . ' 配置';
$l['twofactauth'] = '双因素认证';
$l['updates'] = '执行更新';
$l['email_temps'] = '查看邮件模板';
$l['edit_email_temps'] = '编辑邮件模板';
$l['ssl'] = '查看 SSL 文件';
$l['editssl'] = '编辑 SSL 文件';
$l['createssl'] = '创建 SSL 证书';
$l['firewall'] = '管理防火墙';
$l['importvs'] = '导入虚拟机';
$l['pma'] = '访问 PhpMyAdmin';
$l['filemanager'] = '访问文件管理器';
$l['ssh'] = '访问 SSH';
$l['pdns'] = '查看 DNS 服务器';
$l['manage_pdns'] = '管理 DNS 服务器';
$l['add_pdns'] = '添加 DNS 服务器';
$l['edit_pdns'] = '编辑 DNS 服务器';
$l['delete_pdns'] = '删除 DNS 服务器';
$l['rdns'] = '添加反向 DNS 区域';

$l['manage_procs'] = '管理进程';
$l['manage_services'] = '管理服务';
$l['restart_web'] = '重启 Web 服务器';
$l['restart_net'] = '重启网络服务';
$l['restart_mail'] = '重启邮件服务器';
$l['restart_mysql'] = '重启 MySQL';
$l['restart_iptables'] = '重启 IPTables';

$l['logs'] = '查看日志';
$l['deletelogs'] = '删除日志';
$l['userlog'] = '查看用户日志';
$l['deleteuserlogs'] = '删除用户日志';
$l['loginlogs'] = '查看登录日志';
$l['delteloginlogs'] = '删除登录日志';
$l['iplogs'] = '查看 IP 日志';
$l['deliplogs'] = '删除 IP 日志';

$l['checkall'] = '全选';
$l['save'] = '保存';

$l['cat_recipe'] = '食谱';
$l['recipes'] = '查看食谱';
$l['addrecipe'] = '添加食谱';
$l['editrecipe'] = '编辑食谱';

$l['list_backup_plans'] = '列出备份计划';
$l['addbackup_plan'] = '添加备份计划';
$l['editbackup_plan'] = '编辑备份计划';
$l['deletebackup_plan'] = '删除备份计划';

$l['haproxy'] = '域名转发';
$l['euiso'] = '最终用户 ISO';
$l['orphaneddisk'] = '列出孤立磁盘';
$l['deleteorphaneddisk'] = '删除孤立磁盘';
$l['ha'] = '高可用性';
$l['multivirt'] = '多虚拟化';
$l['webuzo'] = 'Webuzo 设置';
$l['billing_set'] = '计费设置';
$l['resource_billing'] = '资源计费';
$l['invoices'] = '发票';
$l['transaction'] = '交易';
$l['add_invoice'] = '添加发票';
$l['add_transaction'] = '添加交易';
$l['syncostemplate'] = '同步操作系统模板';
$l['passthrough'] = '查看直通设备';
$l['addpassthrough'] = '添加直通设备';
$l['editpassthrough'] = '编辑直通设备';
$l['deletepassthrough'] = '删除直通设备';

?>
