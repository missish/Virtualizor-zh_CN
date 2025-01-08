<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cron_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来源于追求成为最优秀的目标
// ----------------------------------------------------------
// 开始者: Alons
// 日期:       2010年3月8日
// 时间:       23:00
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

$l['upd_avail_sub'] = 'Virtualizor 升级 v&soft-1; &soft-2; 可用';
$l['upd_avail'] = 'Virtualizor 升级 v&soft-1; 可用。
由于“自动更新”已关闭，您需要手动升级到最新版本。
为此，请访问：
管理员面板 -> 配置 -> 更新

以下是新版本的相关信息：
&soft-2;

来自 Virtualizor Cron 任务';

$l['upd_avail_suc_sub'] = '成功升级到 Virtualizor v&soft-1; &soft-2;';
$l['upd_avail_suc'] = 'Virtualizor 升级 v&soft-1; 可用。<br>
Virtualizor 已成功升级到最新版本。<br>
以下是升级尝试的日志：<br>
&soft-2;<br>
<br>
以下是新版本的相关信息：<br>
&soft-3;<br>
<br>
来自 Virtualizor Cron 任务';

$l['upd_avail_err_sub'] = '升级到 Virtualizor v&soft-1; &soft-2; 失败';
$l['upd_avail_err'] = 'Virtualizor 升级 v&soft-1; 可用。<br>
Virtualizor 尝试自动升级到最新版本，但失败。<br>
以下是升级尝试的日志：<br>
&soft-2;<br>
<br>
您需要手动升级到最新版本。<br>
为此，请访问：<br>
管理员面板 -> 配置 -> 更新<br>
<br>
以下是新版本的相关信息：<br>
&soft-3;<br>
<br>
来自 Virtualizor Cron 任务';

//管理员邮件限制警告
$l['admin_mail_limit_sub'] = '系统资源使用限制已超出';
$l['admin_mail_limit'] = '

主机名 : {{hostname}}

服务器 IP : {{ip}}

负载 : {{load}}

CPU 使用率 : {{cpu_usage}} %

内存使用率 : {{ram_usage}} %

磁盘使用率 : {{disk_usage}} %

/tmp 使用率 : {{tmp_disk_usage}} %

此致，
{{sn}} {{ip}}';

$l['host_body_notify'] = '主机名 : {{hostname}}<br>
服务器 IP : {{ip}}<br>';

$l['admin_mail_limit_notify'] = '负载 : {{load}}<br>
CPU 使用率 : {{cpu_usage}} %<br>
内存使用率 : {{ram_usage}} %<br>
磁盘使用率 : {{disk_usage}} %<br>
/tmp 使用率 : {{tmp_disk_usage}} %';

//从属服务器状态邮件
$l['slave_offline_sub'] = '从属服务器离线';
$l['slave_offline'] = '以下从属服务器已离线：

{{slave_text}}

此致，
{{sn}} {{ip}} ({{hostname}})';

$l['slave_offline_notify'] = '以下从属服务器已离线：<br>
{{slave_text}}';

//从属服务器状态邮件（在线）
$l['slave_online_sub'] = '从属服务器在线';
$l['slave_online'] = '以下从属服务器现已在线：

{{slave_text}}

此致，
{{sn}} {{ip}} ({{hostname}})';

$l['slave_online_notify'] = '以下从属服务器现已在线：<br>
{{slave_text}}';

$l['patch'] = '补丁 : ';

//存储阈值警告邮件
$l['storage_threshold_sub'] = '存储使用量已达到阈值！';
$l['storage_threshold'] = '以下存储已超过设置的阈值，请采取必要的措施。

{{storage_list}}

此致，
{{sn}} {{ip}} ({{hostname}})';

$l['admin_mail_cputhreshold_sub'] = 'CPU 阈值超出 (ID : {{vpsid}})';
$l['admin_mail_cputhreshold_body'] = '

您好，

您的 '.VM_SHORT.' {{hostname}} 已被暂停。

详细信息如下，

ID : {{vpsid}}
'.VM_SHORT.' IP : {{ip}}
时间 : 从最后 {{time}} 分钟
CPU 使用率 : {{cpu_usage}} %
服务器 IP : {{server_ip}}

此致，
{{sn}}';

$l['host_cpu_notify'] = '主机名 : {{hostname}}<br>
服务器 IP : {{ip}}<br>';

$l['admin_cputhreshold_notify'] = 
'CPU 使用率 : {{cpu_usage}} <br>
'.VM_SHORT.' ID : {{vpsid}} <br>
IP : {{ip}} <br>
时间 : 从最后 {{time}} 分钟';

?>
