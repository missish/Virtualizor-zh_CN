<?php

//////////////////////////////////////////////////////////////
//===========================================================
// config_lang.php
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

$l['no_sn'] = '未指定站点名称。';
$l['no_cookie_name'] = '未指定Cookie名称';
$l['invalid_cookie_name'] = '您指定的Cookie名称无效';
$l['no_soft_email'] = '未提供电子邮件地址';
$l['wrong_soft_email'] = '您提交的电子邮件地址无效';
$l['no_lang'] = '未选择语言';
$l['wrong_lang'] = '选择的语言无效';
$l['no_theme_folder'] = '未选择主题';
$l['wrong_theme_folder'] = '选择的主题无效';
$l['no_timezone'] = '未选择时区';
$l['wrong_timezone'] = '选择的时区无效';
$l['no_cron_time'] = '未指定定时任务时间';
$l['no_emps_cron_time'] = '未指定EMPS的定时任务时间。EMPS是Virtualizor的NGinx、PHP和MySQL堆栈';
$l['no_off_message'] = '未指定关闭主题';
$l['no_off_subject'] = '未指定关闭消息';
$l['saving_error'] = '保存设置时出现了一些错误';
$l['no_dbhost'] = '未提供主机';
$l['no_db'] = '未提供数据库';
$l['no_dbuser'] = '未提供数据库用户';
$l['no_dbpass'] = '未提供数据库密码';
$l['no_theme'] = '未提供主题';
$l['no_admin_logs'] = '未指定管理员日志保留时间';
$l['no_vps_logs'] = '未指定'.VM_SHORT.'和用户日志保留时间';
$l['no_login_logs'] = '未指定登录日志保留时间';
$l['no_system_logs'] = '未指定'.VM_SHORT.'系统日志保留时间';
$l['no_status_logs'] = '未指定'.VM_SHORT.'状态日志保留时间';
$l['no_bandwidth_logs'] = '未指定带宽日志保留时间';
$l['no_sess_len'] = '未提供会话长度';
$l['invalid_update'] = '提交了无效的更新偏好';
$l['no_xen_dom0mem'] = '请指定Domain-0内存';
$l['invalid_xen_dom0mem'] = 'Domain-0内存不应小于512 MB';
$l['no_vg'] = '请指定卷组（VG）';
$l['inv_vg'] = '指定的卷组不存在。';
$l['login_attempts_invalid'] = '<b>最大登录尝试次数</b>不能小于2';
$l['login_ban_time_invalid'] = '<b>登录失败封禁时间</b>不能小于2';
$l['invalid_disk_limit'] = '提交了无效的磁盘限制';
$l['vnc_ip'] = '设置VNC IP';
$l['vnc_ip_exp'] = '仅在Virtualizor安装在内部网络时使用此选项';
$l['wrong_vnc_ip'] = '请输入有效的VNC IP或域名';
$l['ping_ip'] = '设置Ping IP';
$l['ping_ip_exp'] = '当Virtualizor桥接网络启动时，它将尝试ping此IP以检查服务器是否具有连接性。如果为空，则Virtualizor将ping 4.2.2.1';
$l['wrong_ping_ip'] = '请输入有效的Ping IP';
$l['inv_overcommit_val'] = '内存超额分配值不能小于实际内存';
$l['overcommit'] = '内存超额分配';
$l['overcommit_exp'] = '如果指定，物理服务器上所有'.VM_SHORT.'的总分配内存不能超过此值。';
$l['slave_cant'] = '主服务器设置错误';
$l['slave_cant_exp'] = '从服务器不允许编辑主服务器设置！';

//主题设置
$l['<title>'] = '配置';
$l['heading'] = '配置';
$l['done'] = '配置已更改。';
$l['dbhost'] = '数据库主机';
$l['database'] = '数据库名称';
$l['dbuser'] = '数据库用户';
$l['dbpass'] = '数据库密码';
$l['sitename'] = '站点名称';
$l['cookie_name'] = 'Cookie名称';
$l['sitename_exp'] = '使用Virtualizor的服务器或公司名称。它将出现在Virtualizor面板的许多页面中';
$l['master_name'] = '主服务器名称';
$l['master_name_exp'] = '如果设置，则主服务器将显示为提供的名称而不是localhost';
$l['copy_right'] = '版权';
$l['copy_right_exp'] = '出现在页脚的版权信息';
$l['cook_name_exp'] = '将存储在浏览器上的Cookie名称。';
$l['comp_output'] = '压缩输出';
$l['comp_output_exp'] = '这将压缩输出并节省大量带宽。';
$l['cpu_nm'] = '显示CPU型号名称';
$l['cpu_nm_exp'] = '在所有'.VM_SHORT.'中显示CPU型号名称。';
$l['choose_lang'] = '选择语言';
$l['choose_lang_exp'] = '选择您偏好的语言';
$l['choose_theme'] = '选择主题';
$l['choose_theme_exp'] = '所选主题将成为Virtualizor中的默认主题';
$l['soft_email'] = '电子邮件地址';
$l['soft_email_exp'] = '用于FROM头的电子邮件地址。';
$l['from_email'] = '发件人电子邮件地址';
$l['from_email_exp'] = '设置此选项以设置不同的发件人电子邮件头。如果为空，则将电子邮件地址设置为发件人头';
$l['timezone'] = '时区';
$l['saveconfig'] = '保存配置';
$l['cron_time'] = '定时任务频率';
$l['cron_time_exp'] = '将收集所有'.VM_SHORT.'信息并检查更新的定时任务。';
$l['emps_cron_time'] = 'EMPS定时任务频率';
$l['emps_cron_time_exp'] = '将更新EMPS堆栈（PHP、NGinx和MySQL）的EMPS定时任务。我们建议每月设置两次';
$l['logo_url'] = 'Logo URL';
$l['logo_url_exp'] = '推荐大小为172 x 35像素。如果为空，将显示Virtualizor徽标。';
$l['admin_mob_logo_url'] = '移动Logo URL';
$l['admin_mob_logo_url_exp'] = '推荐大小为45 x 53像素。如果为空，将显示Virtualizor徽标。';
$l['gen_set'] = '常规设置';
$l['data_set'] = '数据库设置';
$l['updatesettings'] = '更新设置';
$l['email_upd_soft'] = '通知更新'; 
$l['email_upd_soft_exp'] = '当Virtualizor有可用更新或自动升级时将发送电子邮件';
$l['email_upd_soft_client'] = '禁用客户电子邮件'; 
$l['email_upd_soft_client_exp'] = '创建新的'.VM_SHORT.'时，不会向客户发送电子邮件';
$l['auto_upd_virtualizor'] = '自动更新Virtualizor';
$l['auto_upd_virtualizor_exp'] = '如果启用，Virtualizor将自动更新到最新版本。<br /><b>稳定版</b>在发布候选版经过全面测试后发布。<br /><b>发布候选版</b>包含最新版本和功能。';
$l['never_update'] = '从不更新';
$l['stable'] = '稳定版（推荐）';
$l['release_cand'] = '发布候选版（实验性！）';
$l['logs_settings'] = '日志设置';
$l['admin_logs'] = '管理员日志保留';
$l['admin_logs_exp'] = '管理员日志将保存指定的天数。（0表示无限保留）';
$l['vps_logs'] = VM_SHORT.'日志保留';
$l['vps_logs_exp'] = VM_SHORT.'日志将保存指定的天数。（0表示无限保留）';
$l['login_logs'] = '登录日志保留';
$l['login_logs_exp'] = '登录日志将保存指定的天数。（0表示无限保留）';
$l['system_logs'] = VM_SHORT.'系统日志保留';
$l['system_logs_exp'] = '日志将保存指定的天数。（0表示无限保留）';
$l['status_logs'] = VM_SHORT.'状态日志保留';
$l['status_logs_exp'] = '日志将保存指定的天数。（0表示无限保留）';
$l['bandwidth_logs'] = '带宽日志保留';
$l['bandwidth_logs_exp'] = '日志将保存指定的天数。（0表示无限保留）';
$l['sess_len'] = '会话超时';
$l['sess_len_exp'] = '未使用的会话超时前的秒数';
$l['update_settings'] = '更新设置';
$l['interface'] = '网络接口';
$l['interface_exp'] = '服务器的公共网络接口。如果为空，默认接口为<strong>eth0</strong>。';
$l['xen_settings'] = 'Xen设置';
$l['xen_pvbridge'] = '半虚拟化桥接';
$l['xen_pvbridge_exp'] = '此设置允许您定义Xen PV '.VM_LONG.'使用的默认桥接';
$l['xen_hvmbridge'] = 'HVM桥接';
$l['xen_hvmbridge_exp'] = '此设置允许您定义Xen HVM '.VM_LONG.'使用的默认桥接';
$l['xen_dom0mem'] = 'Domain-0 / 主机内存';
$l['xen_dom0mem_exp'] = '在Xen中，Domain-0是物理节点。这将设置Domain-0可用的内存。物理节点的剩余内存将可供'.VM_SHORT.'使用。';
$l['vg'] = '卷组';
$l['vg_exp'] = '当前创建'.VM_SHORT.'的默认卷组。如果'.VM_SHORT.'已存在于卷组上，则此选项将被禁用。';
$l['security_settings'] = '安全设置';
$l['eu_iso_settings'] = '最终用户ISO设置';
$l['login_attempts'] = '最大登录尝试次数';
$l['login_attempts_exp'] = '在封禁IP之前允许的尝试次数，封禁时间在<b>登录失败封禁时间</b>中指定';
$l['login_ban_time'] = '登录失败封禁时间';
$l['login_ban_time_exp'] = '封禁超过<b>最大登录尝试次数</b>的用户IP的时间（分钟）';
$l['secure_allowed_ips'] = '允许访问面板的IP列表';
$l['secure_allowed_ips_exp'] = '允许访问Virtualizor管理员面板的IP列表。如果设置，则只有这些IP可以访问管理员面板。如果有多个IP，IP必须用\',\'分隔。如果为空，则不对允许的IP施加任何限制。目前仅支持IPv4 IP';
$l['secure_allowed_ips_inv'] = '在"<b>'.$l['secure_allowed_ips'].'</b>"字段中发现了无效的IP';
$l['secure_allowed_api_ips'] = '限制API操作的允许IP列表';
$l['secure_allowed_api_ips_exp'] = '允许执行API操作的IP列表。如果有多个IP，IP必须用\',\'分隔。如果为空，则不对允许的IP施加任何限制。目前仅支持IPv4 IP';
$l['secure_allowed_api_ips_inv'] = '在"<b>'.$l['secure_allowed_api_ips'].'</b>"字段中发现了无效的IP';
$l['enable_backup_delete'] = '删除'.VM_SHORT.'时删除备份';
$l['enable_backup_delete_exp'] = '如果选中，删除'.VM_SHORT.'时将删除备份。';
$l['enable_backup_delete_cron'] = '天数';
$l['enable_backup_delete_cron_exp'] = '如果为零，'.VM_SHORT.'备份将在删除'.VM_SHORT.'时立即删除。<br>否则将在提供的天数后删除。';
$l['disable_virtsparsify'] = '禁用virt-sparsify';
$l['disable_virtsparsify_exp'] = '如果选中，'.VM_SHORT.'在每次启动/关闭操作后将不会被稀疏化';
$l['disable_2tb_check'] = '禁用'.VM_SHORT.'的2TB检查';
$l['disable_2tb_check_exp'] = '如果选中，将允许创建大于2TB的'.VM_SHORT;
$l['set_vps_config_mtu'] = '在'.VM_SHORT.'配置文件中设置MTU值';
$l['set_vps_config_mtu_exp'] = '如果启用，则MTU值将设置在'.VM_SHORT.'配置文件中，适用于支持的虚拟化';
$l['disable_terminal_access'] = '禁用服务器Web终端';
$l['disable_terminal_access_exp'] = '如果启用，管理员面板中的服务器Web终端访问将被禁用';

$l['notify_settings'] = '通知设置';
$l['alert_load_limit'] = '高负载警报';
$l['alert_load_limit_exp'] = '如果硬件节点的<b>15分钟</b>负载超过此处设置的限制，将向管理员发送电子邮件。';
$l['alert_disk_limit'] = '磁盘警报限制';
$l['alert_disk_limit_exp'] = '如果节点的磁盘使用率超过设置的限制（%），将向管理员发送电子邮件。';
$l['openvz_settings'] = 'OpenVZ设置';
$l['vswap'] = '启用VSwap';
$l['vswap_exp'] = '为此服务器启用VSwap。仅当节点的操作系统为RHEL/SL/CentOS 6时有效。<br />请参阅<a href="'.$globals['docs'].'VSwap_Openvz" target="_blank">此</a>文章以获取更多信息。';
$l['enduser_settings'] = '最终用户设置';
$l['disable_icons_monitor'] = '禁用监控';
$l['disable_icons_monitor_exp'] = '禁用最终用户的监控图标';
$l['disable_icons_cp'] = '禁用控制面板';
$l['disable_icons_cp_exp'] = '禁用最终用户的控制面板安装图标';
$l['disable_recipes'] = '禁用配方';
$l['disable_recipes_exp'] = '禁用最终用户的配方';
$l['node_bandwidth'] = '节点带宽';
$l['node_bandwidth_exp'] = '节点的总带宽（GB）。如果设置为零，带宽计算将假定为无限带宽';
$l['vps_bandwidth_threshold'] = VM_SHORT.'带宽阈值';
$l['vps_bandwidth_threshold_exp'] = '如果设置为零，带宽阈值电子邮件将被禁用。值为%';
$l['change_ssh_port'] = '更改SSH端口';
$l['change_ssh_port_exp'] = '设置服务器的SSH端口。建议更改此设置以提高安全性。';
$l['ssh_port_invalid'] = '请输入有效的SSH端口';
$l['max_ssh_login'] = '最大SSH登录次数';
$l['max_ssh_login_exp'] = '设置最大SSH登录尝试次数';
$l['ssh_login_invalid'] = '请输入有效的SSH登录尝试次数';
$l['overcommit_check'] = '允许内存超额分配';
$l['overcommit_check_exp'] = '<b>注意</b>：这可能会影响您的'.VM_SHORT.'性能。';
$l['support'] = '支持URL';
$l['support_exp'] = '指定将显示在最终用户面板中的支持URL。';
$l['enable_tuntap_cp'] = '在客户面板中启用Tun/Tap设置';
$l['enable_tuntap_cp_exp'] = '默认情况下，Tun/Tap图标将被禁用。';
$l['enable_ppp_cp'] = '在客户面板中启用PPP设置';
$l['enable_ppp_cp_exp'] = '默认情况下，PPP图标将被禁用。';
$l['enable_enduser_vnc'] = '允许VNC管理';
$l['enable_enduser_vnc_exp'] = '如果启用，用户可以打开/关闭其'.VM_SHORT.'的VNC';
$l['hide_enuser_vnc_info'] = '隐藏VNC详细信息';
$l['hide_enuser_vnc_info_exp'] = '如果启用，'.VM_SHORT.'的VNC详细信息将不会显示给最终用户';
$l['show_server'] = '显示服务器名称/位置';
$l['show_server_exp'] = '如果启用，最终用户可以看到'.VM_SHORT.'的服务器名称或位置';
$l['band_suspend'] = '禁用带宽暂停';
$l['band_suspend_exp'] = '全局设置，禁用所有'.VM_SHORT.'的带宽暂停';
$l['speed_cap_disable'] = '禁用速度限制';
$l['speed_cap_disable_exp'] = '全局设置，禁用'.VM_SHORT.'网络速度限制';
$l['bw_calculation'] = '带宽计算';
$l['bw_calculation_exp'] = '基于上传/下载的带宽计算';
$l['bw_cal_upload'] = '仅计算上传带宽。总使用量将仅显示上传。'; 
$l['bw_cal_download'] = '仅计算下载带宽。总使用量将仅显示下载。';
$l['bw_cal_both'] = '正常带宽计算。总使用量将显示上传和下载的总和。';
$l['novnc_settings'] = 'noVNC设置';
$l['novnc'] = '启用noVNC';
$l['novnc_exp'] = '此选项将启用HTML5 VNC查看器以及JAVA VNC查看器';
$l['novnc_master_only'] = '仅主代理';
$l['novnc_master_only_exp'] = '如果启用，只有主服务器将具有noVNC WebSocket服务';
$l['novnc_server_name'] = '使用服务器主机名';
$l['novnc_server_name_exp'] = '如果启用，则服务器名称（而不是其IP）将用作访问noVNC服务的主机。请确保主服务器中的服务器名称正确。';
$l['disable_login_logo'] = '禁用登录Logo';
$l['exp_disable_login_logo'] = '如果选中，登录时将隐藏最终用户的Logo。这对于帮助经销商或云用户重新品牌化其面板非常有用。';
$l['disable_backup_cp'] = '在客户面板中禁用备份';
$l['disable_backup_cp_exp'] = '默认情况下，备份图标将显示。';
$l['disable_java_vnc'] = '禁用JAVA VNC查看器';
$l['disable_java_vnc_exp'] = '此选项将禁用JAVA VNC查看器';
$l['pass_strength'] = '默认密码强度';
$l['pass_strength_exp'] = '如果设置，用户将被迫设置指定强度的密码';
$l['inv_pass_limit'] = '密码强度限制不应超过100';
$l['enable_fuse_cp'] = '在客户面板中启用FUSE设置';
$l['enable_fuse_cp_exp'] = '默认情况下，FUSE图标将被禁用。';
$l['enable_ipip_cp'] = '在客户面板中启用IPIP设置';
$l['enable_ipip_cp_exp'] = '默认情况下，IPIP图标将被禁用。';
$l['enable_ipgre_cp'] = '在客户面板中启用IPGRE设置';
$l['enable_ipgre_cp_exp'] = '默认情况下，IPGRE图标将被禁用。';
$l['enable_nfs_cp'] = '在客户面板中启用NFS设置';
$l['enable_nfs_cp_exp'] = '默认情况下，NFS图标将被禁用。';
$l['enable_quotaugidlimit_cp'] = '在客户面板中启用QUOTAUGIDLIMIT设置';
$l['enable_quotaugidlimit_cp_exp'] = '默认情况下，QUOTAUGIDLIMIT图标将被禁用。';
$l['enable_iolimit_cp'] = '在客户面板中启用IO带宽限制设置';
$l['enable_iolimit_cp_exp'] = '默认情况下，IO带宽限制图标将被禁用。';
$l['enable_iopslimit_cp'] = '在客户面板中启用IOPS限制设置';
$l['enable_iopslimit_cp_exp'] = '默认情况下，IOPS限制图标将被禁用。';
$l['favicon_url'] = 'Favicon URL';
$l['favicon_url_exp'] = '如果未设置，则将使用Virtualizor的Favicon';

//启用最终用户ISO
$l['enable_eu_iso'] = '为最终用户启用添加ISO选项';
$l['enable_eu_iso_exp'] = '如果选中，允许最终用户从最终用户面板添加自己的自定义ISO';
$l['eu_iso_size'] = '最大ISO大小（MB）';
$l['eu_iso_size_exp'] = '指定最终用户可以下载的ISO的最大大小。如果未指定，默认大小为5120 MB。';
$l['eu_iso_limit'] = '允许的ISO数量';
$l['eu_iso_limit_exp'] = '指定最终用户可以下载的ISO数量。如果未指定，默认限制为3。';
$l['eu_iso_space'] = '每个最终用户的总ISO空间（MB）';
$l['eu_iso_space_exp'] = '每个最终用户允许的ISO总空间。如果未指定，默认空间为5120 MB。';
$l['inv_eu_iso_limit'] = '最终用户ISO设置不能有负值或空值';
$l['eu_iso_del_hr'] = '自动删除最终用户ISO（小时）';
$l['eu_iso_del_hr_exp'] = '如果指定，最终用户ISO将在指定小时后删除';
$l['eu_iso_del_hr_err'] = '自动删除最终用户ISO值不能为负';
$l['enable_eu_iso_boot'] = '启用最终用户ISO启动';
$l['enable_eu_iso_boot_exp'] = '如果选中，最终用户将能够从ISO启动'.VM_SHORT;
$l['enable_eu_iso_error'] = '请启用最终用户ISO启动以使用最终用户的ISO选项';

// HAProxy配置语言
$l['haproxy_settings'] = 'HAProxy设置（'.VM_SHORT.'域名转发）';
$l['haproxy_enable'] = '启用HAProxy';
$l['haproxy_enable_exp'] = '这允许'.VM_SHORT.'(s)在私有IP上托管服务，可以通过互联网访问';
$l['haproxy_src_ips'] = 'HAProxy源IP';
$l['haproxy_src_ips_exp'] = '允许HAProxy在此服务器上监听的IP的逗号分隔列表。如果为空，将使用从服务器的主IP。<br/>注意：修改源IP还需要在管理面板 > '.VM_LONG.' > 域名转发 > 服务器页面下将旧源IP重新映射到新源IP，以更新现有的VDF记录';
$l['haproxy_src_ips_inv'] = '在指定的HAProxy IP列表中发现无效的IP';
$l['haproxy_src_ips_change'] =  '修改源IP还需要在管理面板 > '.VM_LONG.' > 域名转发 > 服务器页面下将旧源IP重新映射到新源IP，以更新现有的VDF记录';

$l['haproxy_reservedports'] = 'HAProxy阻止的端口';
$l['haproxy_reservedports_exp'] = '不允许HAProxy使用的源端口列表。多个端口应以\',\'分隔，端口范围应以\'-\'指定。（例如：26,99,1001-1005）';
$l['haproxy_reservedports_inv'] = '在指定的HAProxy保留端口列表中发现无效的端口';

$l['haproxy_reservedports_http'] = 'HAProxy保留的HTTP(S)端口';
$l['haproxy_reservedports_http_exp'] = 'HAProxy保留的仅用于HTTP和HTTPS协议的源端口列表，即这些端口不允许用于HAProxy中的任何TCP端口。多个端口应以\',\'分隔，端口范围应以\'-\'指定。（例如：26,99,1001-1005）';
$l['haproxy_reservedports_http_inv'] = '在指定的HAProxy HTTP(S)保留端口列表中发现无效的端口';
$l['haproxy_reservedports_http_restricted'] = '在指定的HAProxy HTTP(S)保留端口列表中发现受限制的端口';

$l['haproxy_allowedports'] = 'HAProxy允许的HTTP(S)和TCP端口';
$l['haproxy_allowedports_exp'] = '允许用于HAProxy的任何协议的源端口列表。如果为空，则允许用户使用任何可用端口。<b>注意</b>：如果指定，HTTP和TCP端口将仅允许从这些端口使用。多个端口应以\',\'分隔，端口范围应以\'-\'指定。（例如：26,99,1001-1005）';
$l['haproxy_allowedports_inv'] = '在指定的HAProxy允许端口列表中发现无效的端口';
$l['haproxy_allowedports_restricted'] = '在指定的HAProxy允许端口列表中发现受限制的端口';
$l['haproxy_allowedports_http'] = 'HTTP(S)保留端口未包含在允许的HAProxy端口列表中';

$l['haproxy_empty_src_ips'] = '启用了HAProxy '.VM_SHORT.'域名转发，但源IP列表为空';

$l['haproxy_cron_logs'] = 'HAProxy定时任务日志保留';
$l['haproxy_cron_logs_exp'] = '日志将保存指定的天数。（0表示无限保留）';

$l['no_haproxy_cron_logs'] = '未指定HAProxy定时任务日志保留时间';

// 添加虚拟机IO/CPU优先级设置
$l['addvs_io_cpu_settings'] = '创建'.VM_SHORT.' IO/CPU优先级';
$l['nice'] = '进程优先级';
$l['nice_exp'] = '虚拟机创建进程将获得的CPU时间量。值从19（最不优先）到-20（最优先）';
$l['ionice_class'] = '进程I/O类';
$l['ionice_class_exp'] = '虚拟机创建进程的I/O类';
$l['ionice_prio'] = '进程I/O优先级';
$l['ionice_prio_exp'] = '虚拟机创建进程的I/O优先级。值从0（最优先）到7（最不优先）';
$l['addvs_io_cpu_note'] = '您需要设置所有三个值才能在虚拟机创建期间生效';

// 队列创建通知
$l['queue_creation'] = '启用队列创建';
$l['queue_creation_exp'] = '例如，如果您将值设置为2，则一次只能创建2个虚拟机。其他创建进程将排队';

// MAC地址初始数字
$l['custom_mac'] = '自定义MAC前缀';
$l['custom_mac_exp'] = '自动生成的虚拟机MAC地址的前3个八位字节。如果未设置，则默认值为00:16:3e';
$l['invalid_mac'] = '输入的MAC前3个八位字节无效';
$l['inv_multicast_mac'] = '输入的MAC初始值为多播，期望为单播MAC。请在第一个八位字节的LSByte中指定偶数';

$l['vps_limit'] = VM_SHORT.'创建限制';
$l['vps_limit_exp'] = '此配置用于限制将在此服务器上创建的虚拟机数量。设置为0表示无限制。';

$l['set_def_hvm'] = '默认使用HVM';
$l['set_def_hvm_exp'] = '选择此选项以在支持的虚拟化平台上将HVM设置为虚拟机创建的默认选项';

$l['ploop'] = 'Ploop';
$l['ploop_exp'] = '将为所有新创建的虚拟机启用Ploop。';

$l['pv_on_hvm'] = 'PV-on-HVM';
$l['pv_on_hvm_exp'] = '全局设置，为所有新虚拟机启用PV-on-HVM';

$l['band_calc_creation'] = '服务周期带宽计算';
$l['band_calc_creation_exp'] = '此选项将根据虚拟机的服务周期计算带宽。例如，如果虚拟机在1月15日创建，则带宽计算将从1月15日到2月14日。';

$l['enable_rdns'] = '启用RDNS';
$l['enable_rdns_exp'] = '如果选中，则虚拟机的反向DNS将开启。但是您需要设置DNS服务器。';

$l['master_setting_note'] = '<b>注意</b>：这些设置是全局设置，将同步到所有从服务器。您还可以从<a href="'.$globals['index'].'act=config_slave">从服务器设置</a>向导中按节点更改设置。';
$l['slave_setting_note'] = '<b>注意</b>：这些设置是活动节点的单独设置。这些设置将覆盖活动从节点上的主设置。';

$l['use_xl'] = '使用XL';
$l['use_xl_exp'] = '使用<b>xl</b>工具而不是已弃用的<b>xm</b>工具。注意：xend服务必须关闭并防止启动';
$l['auto_add_zone'] = '自动添加rDNS区域';
$l['auto_add_zone_exp'] = '如果选中，将自动为没有区域的记录创建rDNS区域';
$l['disable_apicredential'] = '在客户面板中禁用API凭证访问';
$l['exp_disable_apicredential'] = '如果选中，用户将无法生成API凭证。';
$l['enable_console'] = '启用串行控制台';
$l['enable_console_exp'] = '为OpenVZ容器启用串行控制台。警告，将在OpenVZ节点上创建SSH用户以使用此功能。';
$l['curl_timeout'] = 'CURL超时';
$l['curl_timeout_exp'] = '如果设置，Virtualizor将使用此值作为CURL超时。默认值为3。如果要更改超时，请设置大于3的值。';
$l['del_novps_user'] = '删除没有虚拟机的用户';
$l['del_novps_user_exp'] = '如果选中，则每天删除没有虚拟机的用户。';
$l['del_slave_ostemplate'] = '删除从服务器上的操作系统模板';
$l['del_slave_ostemplate_exp'] = '如果选中，则将从所有从服务器中删除操作系统模板。这对于节省从服务器上的空间非常有用。但每次创建虚拟机时都需要更多的带宽，因为模板将重新下载。';
$l['disable_master_vpsname'] = '禁用主虚拟机名称';
$l['disable_master_vpsname_exp'] = '默认情况下，主服务器决定虚拟机名称并使用集群中可用的最高虚拟机名称。如果选中此选项，虚拟机名称将由每个从服务器决定。';
$l['showsearch'] = '显示搜索框（默认）';
$l['showsearch_exp'] = '如果选中，搜索框将显示在管理面板中适用的页面上。';
$l['disable_nw_config'] = '禁用网络配置';
$l['exp_disable_nw_config'] = '如果选中，Virtualizor在虚拟机重新启动时将不会配置/重写网络。但是，在创建虚拟机期间，将写入网络文件。';
$l['site_domain'] = '站点域名';
$l['site_domain_exp'] = '如果为空，将使用服务器的IP而不是域名。';
$l['turnon_virtdf'] = '启用Virt-df';
$l['turnon_virtdf_exp'] = '如果选中，virt-df将用于在每小时定时任务中获取磁盘使用情况，并且将在单个虚拟机启动时检测磁盘使用情况。';
$l['disable_newtheme'] = '禁用新主题';
$l['disable_newtheme_exp'] = '如果选中，最终用户将无法使用新UI。';
$l['enable_idsort'] = '按ID降序排序虚拟机';
$l['enable_idsort_exp'] = '如果选中，新创建的虚拟机将首先显示';
$l['eu_allow_virtio'] = '允许virtio管理';
$l['eu_allow_virtio_exp'] = '如果启用，用户可以启用/禁用其虚拟机的virtio';
$l['disable_rescue'] = '禁用救援模式';
$l['disable_rescue_exp'] = '禁用最终用户的救援模式';
$l['disable_change_hostname'] = '禁用主机名更改';
$l['disable_change_hostname_exp'] = '最终用户将无法更改主机名';
$l['disable_change_password'] = '禁用虚拟机密码更改';
$l['disable_change_password_exp'] = '最终用户将无法更改其虚拟机密码';
$l['disable_change_vnc_password'] = '禁用虚拟机VNC密码更改';
$l['disable_change_vnc_password_exp'] = '最终用户将无法更改其虚拟机VNC密码';
$l['disable_vps_config'] = '禁用虚拟机配置';
$l['disable_vps_config_exp'] = '最终用户将无法更改虚拟机配置';
$l['disable_os_reinstall'] = '禁用操作系统重装';
$l['disable_os_reinstall_exp'] = '最终用户将无法重装操作系统';
$l['disable_ssh'] = '禁用SSH';
$l['disable_ssh_exp'] = '最终用户将无法从面板访问SSH';
$l['vcores_limit'] = '虚拟核心';
$l['vcores_limit_exp'] = '可用于虚拟机创建的虚拟核心数量。一旦达到限制<br /> - 无法在此节点上创建虚拟机。<br /> - 无法为现有虚拟机分配额外的核心';
$l['current_cores_in_use'] = '{{cores_in_use}}虚拟核心已在使用中！';
$l['disable_suspend_email'] = '禁用虚拟机暂停时的电子邮件';
$l['disable_suspend_email_exp'] = '最终用户在虚拟机暂停时将不会收到任何电子邮件';
$l['del_tasks'] = '任务保留';
$l['del_tasks_exp'] = '任务将保存指定的天数。（0表示无限保留）';
$l['del_notifications'] = '通知保留';
$l['del_notifications_exp'] = '通知将保存指定的天数。（0表示无限保留）';
$l['del_api_logs'] = 'API日志保留';
$l['del_api_logs_exp'] = 'API日志将保存指定的天数。（0表示无限保留）';
$l['disable_self_shutdown'] = '禁用自关机';
$l['disable_self_shutdown_exp'] = '最终用户将无法从最终用户面板安排电源选项';
$l['disable_server_location'] = '禁用服务器位置';
$l['disable_server_location_exp'] = '如果选中，最终用户面板中的地图上的服务器位置将不会显示';
$l['no_del_tasks'] = '未指定任务保留时间';
$l['enable_nic'] = '启用NIC选项';
$l['enable_nic_exp'] = '如果启用，用户可以管理其虚拟机的NIC（网络接口卡）';
$l['disable_cloud_suspend_options'] = '禁用云用户的暂停选项';
$l['disable_cloud_suspend_options_exp'] = '如果选中，云用户的虚拟机暂停/取消暂停和网络暂停/取消暂停选项将被禁用';
$l['openvz_suspend_load'] = '在高负载时暂停虚拟机';
$l['openvz_suspend_load_exp'] = '如果设置，将检查每个虚拟机过去5分钟的负载（uptime），如果高于设置的值，虚拟机将被暂停';
$l['default_sg_name'] = '设置默认服务器组名称';
$l['default_sg_name_exp'] = '如果未设置，则默认将显示由Virtualizor默认创建的服务器组';
$l['default_sg_reseller_name'] = '设置默认经销商区域名称';
$l['default_sg_reseller_name_exp'] = '（可选）将显示给经销商的服务器组名称。如果未设置，将设置为默认';
$l['default_sg_desc'] = '设置默认服务器组描述';
$l['2fa_email_otp'] = '电子邮件OTP';
$l['2fa_email_otp_exp'] = '如果选中且未从最终用户面板设置任何方法，则最终用户将通过电子邮件启用双因素认证';
$l['enable_2fa'] = '启用双因素认证';
$l['enable_2fa_exp'] = '如果选中，最终用户将启用双因素认证。但他们必须从最终用户面板启用他们想要的方法';
$l['keep_orphan_template'] = '不删除孤立的操作系统模板';
$l['keep_orphan_template_exp'] = '如果选中，则不会删除未添加到Virtualizor的孤立操作系统模板。';
$l['disable_virttop'] = '禁用virt-top';
$l['disable_virttop_exp'] = '如果选中，支持的虚拟化平台上的虚拟机的CPU和磁盘I/O统计信息将不会显示值。';
$l['disable_enduser_sshkeys'] = '禁用SSH密钥';
$l['disable_enduser_sshkeys_exp'] = '最终用户将无法向其虚拟机添加SSH密钥';
$l['disable_vga'] = '禁用VGA';
$l['disable_vga_exp'] = '如果选中，最终用户面板中的虚拟机配置对话框中的启用VGA选项将不会显示。';
$l['xen_dm_version'] = 'Xen dm版本';
$l['xen_dm_version_exp'] = '定义用于虚拟机配置的xen_dm_version的值，qemu-xen-traditional或qemu-xen。<br>qemu-xen在xen版本4.4+之后可用';
$l['xen_dm_version_traditional'] = '使用<b>qemu-xen-traditional</b>';
$l['xen_dm_version_qemu'] = '使用<b>qemu-xen</b>';
$l['disable_ebtables'] = '禁用ebtables';
$l['disable_ebtables_exp'] = '如果选中，将不会为所有服务器上的虚拟机创建ebtables规则。如果要删除现有虚拟机的ebtables规则，则在启用此设置后，您需要编辑虚拟机或更新虚拟机的网络规则。无需停止或重新启动虚拟机';
$l['disable_ebtables_internal'] = '禁用内部IP ebtables';
$l['disable_ebtables_internal_exp'] = '如果选中，将不会为所有服务器上的虚拟机创建内部IP ebtables规则。如果要删除现有虚拟机的ebtables规则，则在启用此设置后，您需要编辑虚拟机或更新虚拟机的网络规则。无需停止或重新启动虚拟机';
$l['domain_forwarding_check'] = '禁用最终用户的域名转发';
$l['domain_forwarding_check_exp'] = '如果选中，最终用户面板中的域名转发功能将被禁用';
$l['disable_domain_forward'] = '域名转发已禁用';
$l['show_vps_active_time'] = '在最终用户面板中显示虚拟机活动时间';
$l['show_vps_active_time_exp'] = '如果选中，最终用户面板将显示虚拟机运行时间';
$l['power_only_option'] = '仅显示电源按钮';
$l['power_only_option_exp'] = '如果启用，则用户在访问最终用户面板时只会获得电源选项。所有其他选项将被禁用。<b>注意：</b>此设置仅在启用<b>由管理员管理</b>时应用。';
$l['disable_logs'] = '禁用日志';
$l['disable_logs_exp'] = '如果启用，最终用户将无法看到日志选项卡';
$l['disable_change_primary_ip'] = '禁用主IP更改';
$l['disable_change_primary_ip_exp'] = '如果启用，最终用户将无法更改虚拟机的主IP';
$l['vz6_style_suspend'] = '使用<b>vzctl suspend</b>暂停virtuozzo容器';
$l['vz6_style_suspend_exp'] = '如果启用，则virtuozzo容器将使用vzctl命令暂停';
$l['enable_iops_sec'] = '允许每秒总I/O';
$l['enable_iops_sec_exp'] = '如果启用，云用户将能够设置I/O限制'; 
//数据库设置
$l['database_settings'] = '数据库设置';
$l['disable_slave_db_backup'] = '禁用从服务器上的数据库备份';
$l['disable_slave_db_backup_exp'] = '如果选中，从服务器将不会进行数据库备份';

// 回调设置 
$l['cb_settings'] = '回调设置';
$l['enable_cb'] = '启用回调';
$l['enable_cb_exp'] = '如果选中，Virtualizor面板中的更改将反映在计费面板中';
$l['cb_url'] = '回调URL';
$l['cb_url_exp'] = '回调文件的完整URL。例如，如果您使用WHMCS，URL将类似于billing.xxxx.com/whmcs/modules/servers/virtualizor/callback.php';
$l['cb_hash'] = '回调哈希';
$l['cb_hash_exp'] = '用于身份验证的回调哈希';
$l['reset'] = '重置哈希';
$l['cb_suspend'] = VM_SHORT.'暂停';
$l['cb_suspend_exp'] = '如果选中，则启用虚拟机暂停的回调';
$l['cb_unsuspend'] = VM_SHORT.'取消暂停';
$l['cb_unsuspend_exp'] = '如果选中，则启用虚拟机取消暂停的回调';
$l['cb_hostname'] = '启用更改虚拟机主机名的回调';
$l['cb_hostname_exp'] = '如果选中，则在更改虚拟机主机名时将启用回调';
$l['cb_terminate'] = '启用虚拟机终止的回调';
$l['cb_terminate_exp'] = '如果选中，则启用虚拟机终止的回调';
$l['cb_changeips'] = '启用更改虚拟机IP的回调';
$l['cb_changeips_exp'] = '如果选中，则在更新虚拟机IP时将启用回调';
$l['no_use_https'] = '请选择http协议';
$l['no_cb_url'] = '请指定回调URL';
$l['inv_cv_url'] = '请指定有效的回调URL';
$l['cb_login_whmcs_user'] = '启用WHMCS用户登录';
$l['cb_login_whmcs_user_exp'] = '如果选中，则WHMCS用户无需注册即可作为云用户登录';
$l['cb_invoice_whmcs_user'] = '启用WHMCS发票';
$l['cb_bandwidth_overusage'] = '启用WHMCS带宽超额使用（可计费）';
$l['cb_bandwidth_overusage_exp'] = '启用WHMCS带宽超额使用（可计费）';
$l['cb_invoice_whmcs_user_exp'] = '如果选中，云计费面板中的余额将从WHMCS获取，并且发票也将在WHMCS中生成';

// Proxmox设置
$l['proxmox_settings'] = 'Proxmox设置';
$l['proxmox_server_name'] = 'Proxmox服务器名称';
$l['proxmox_server_name_exp'] = 'Proxmox服务器名称可以在/etc/hostname文件中找到';
$l['proxmox_server_pass'] = 'Proxmox root密码';
$l['proxmox_server_pass_exp'] = '用于Proxmox面板登录的Proxmox root密码';

// 云用户设置
$l['cloud_user_settings'] = '云用户设置';
$l['cloud_allow_virtio'] = '允许virtio管理';
$l['cloud_allow_virtio_exp'] = '如果启用，云用户可以启用/禁用其虚拟机的virtio';

$l['logo_login_url'] = 'Logo URL（登录页面）';
$l['logo_login_url_exp'] = '推荐大小为400 x 80像素。如果为空，将显示Virtualizor徽标。';

$l['allow_cloud_ebt_disable'] = '允许禁用ebtables';
$l['allow_cloud_ebt_disable_exp'] = '允许云用户禁用其虚拟机的ebtables规则。Ebtables规则防止IP窃取（这些规则防止虚拟机使用未分配给它的IP）';

// 服务器位置
$l['server_location_set'] = '服务器位置设置';
$l['select_country'] = '选择您的国家代码';
$l['country_code'] = '国家代码';
$l['country_code_exp'] = '设置服务器所在的国家代码';
$l['city'] = '城市';
$l['city_exp'] = '设置服务器所在的城市';
$l['state'] = '州';
$l['state_exp'] = '设置服务器所在的州';

// 备份设置
$l['backup_settings'] = '最终用户备份设置';
$l['backup_queue'] = '备份队列';
$l['backup_queue_exp'] = '允许的最大同时最终用户备份操作数。设置为-1表示无限制。';
$l['restore_queue'] = '恢复队列';
$l['restore_queue_exp'] = '允许的最大同时最终用户恢复操作数。设置为-1表示无限制。';
$l['enable_enduser_backup_servers'] = '在客户面板中启用备份服务器';
$l['enable_enduser_backup_servers_exp'] = '允许最终用户为其虚拟机备份添加自己的备份服务器。<br /><b>注意：</b>如果启用，这将覆盖所有备份计划中的设置。';
$l['nw_settings'] = '网络设置';
$l['backup_email'] = '备份/恢复电子邮件';
$l['backup_email_exp'] = '将发送备份/恢复成功和错误消息的电子邮件。<br /><b>注意：</b>如果为空，邮件将发送给站点管理员电子邮件。';
$l['backup_disable_success_mail'] = '禁用备份/恢复成功邮件';
$l['backup_disable_success_mail_exp'] = '如果选中，备份/恢复成功邮件将不会发送给管理员。<br /><b>注意：</b>无论此设置如何，错误邮件将始终发送。';
$l['search'] = '输入以搜索配置..';

// 最大IP设置
$l['max_ips_setting'] = 'IP设置';
$l['max_ipv4s'] = '每个虚拟机的最大IPv4';
$l['max_ipv4s_exp'] = '每个虚拟机允许的最大IPv4地址数';
$l['max_ipv6s'] = '每个虚拟机的最大IPv6';
$l['max_ipv6s_exp'] = '每个虚拟机允许的最大IPv6地址数';
$l['max_ipv6_subnets'] = '每个虚拟机的最大IPv6子网';
$l['max_ipv6_subnets_exp'] = '每个虚拟机允许的最大IPv6子网数';
$l['max_internal_ips'] = '每个虚拟机的最大内部IP';
$l['max_internal_ips_exp'] = '每个虚拟机允许的最大内部IP地址数';

$l['allow_cloud_dom_name'] = '允许云用户域名';
$l['exp_allow_cloud_dom_name'] = '允许云用户域名登录';

$l['resource_pref_load'] = '最小系统负载';
$l['resource_pref_space'] = '最大可用空间';
$l['resource_pref_ram'] = '最大可用内存';
$l['resource_pref_cores'] = '最大可用核心';
$l['resource_pref_ips'] = '最大可用IPv4';
$l['resource_pref_ipv6'] = '最大可用IPv6';
$l['resource_pref_ipv6sub'] = '最大可用IPv6子网';
$l['resource_pref_numvps'] = '最小虚拟机数量';
$l['resource_pref_none'] = '无';
$l['resource_sg_pref'] = '服务器组偏好';
$l['resource_sg_sel'] = '服务器选择';

$l['disable_recipe_reinstall'] = '禁用重建时的配方执行';
$l['disable_recipe_reinstall_exp'] = '如果启用，则虚拟机计划中设置的配方将不会执行';
$l['use_win_script'] = '使用Windows配置脚本';
$l['use_win_script_exp'] = '如果启用，将执行静态IP、位置和其他操作';

$l['disable_notifications'] = '禁用通知';

$l['hide_acc_password'] = '隐藏账户密码';
$l['hide_acc_password_exp'] = '如果启用，用户将无法从最终用户面板更改账户密码';
$l['hide_forgot_password'] = '隐藏忘记密码链接';
$l['hide_forgot_password_exp'] = '如果启用，用户将无法在登录页面重置密码';

$l['server_ram_threshold'] = '设置锁定服务器的RAM阈值（%）';
$l['server_ram_threshold_exp'] = '如果提供，则服务器在超过RAM阈值值后将锁定';
$l['server_disk_threshold'] = '设置主存储锁定服务器的阈值（%）';
$l['server_disk_threshold_exp'] = '如果提供，则服务器在超过主存储阈值值后将锁定';
$l['disable_volumes'] = '禁用卷';
$l['disable_volumes_exp'] = '如果启用，云面板中的卷管理将被禁用';
$l['disable_lb_enduser'] = '禁用负载均衡器';
$l['disable_lb_enduser_exp'] = '如果启用，云面板中的负载均衡器管理将被禁用';
$l['disable_virtvps'] = '不显示虚拟化类型';
$l['disable_virtvps_exp'] = '如果启用，最终用户面板中的listvs页面上将不会显示虚拟化类型列';

//垂直扩展
$l['enable_ver_scaling'] = '启用垂直扩展';
$l['default'] = '默认';
$l['ver_scale_settings'] = '垂直扩展设置';
$l['ver_ram_settings'] = '内存设置';
$l['ver_max_ram'] = '最大内存（MB）';
$l['ver_max_ram_exp'] = '提供将分配给虚拟机的最大内存量';
$l['ver_max_ram_err'] = '请指定最大内存';
$l['ver_ram_threshold'] = '内存阈值（%）';
$l['ver_ram_threshold_exp'] = '如果虚拟机内存使用率大于/小于提供的阈值，将相应地执行扩展';
$l['ver_ram_threshold_err'] = '请指定内存阈值';
$l['ver_ram_inc_by'] = '增加/减少内存（GB）';
$l['ver_ram_inc_by_exp'] = '如果阈值超过/低于，将相应地增加或减少提供的内存（GB）';
$l['ver_ram_inc_by_err'] = '请指定增加/减少内存';

$l['ver_cpu_settings'] = 'CPU设置';
$l['ver_max_cpu'] = '最大CPU核心';
$l['ver_max_cpu_exp'] = '提供将分配给虚拟机的最大CPU核心数';
$l['ver_max_cpu_err'] = '请指定最大CPU';
$l['ver_cpu_threshold'] = 'CPU阈值（%）';
$l['ver_cpu_threshold_exp'] = '如果虚拟机CPU使用率大于/小于提供的阈值，将相应地执行扩展';
$l['ver_cpu_threshold_err'] = '请指定CPU阈值';
$l['ver_cpu_inc_by'] = '增加/减少CPU核心';
$l['ver_cpu_inc_by_exp'] = '如果阈值超过/低于，将相应地增加或减少提供的核心';
$l['ver_cpu_inc_by_err'] = '请指定增加/减少CPU核心';
$l['ver_scaling_note'] = '<ol class="pl-2 mb-1">
<li>垂直扩展仅在基于KVM的虚拟化上支持。</li>
<li>QEMU版本应大于或等于1.5，要检查QEMU版本，请运行"/usr/bin/virsh version"</li>
<li>垂直扩展目前不支持Windows虚拟机</li>
</ol>';

$l['disable_enduser_panel'] = '禁用最终用户面板';
$l['disable_enduser_panel_exp'] = '如果启用，最终用户面板访问将被禁用';

$l['error_state_city'] = '您不能在没有国家的情况下设置城市/州。请先选择国家';
$l['default_enduser_timezone'] = '默认最终用户时区';
$l['default_enduser_timezone_exp'] = '如果设置，则虚拟机将获得所选时区作为默认时区。最终用户可以从最终用户面板设置不同的时区';
$l['no_timezone'] = '无';
$l['show_server_selection_logs'] = '显示服务器选择日志';
$l['show_server_selection_logs_exp'] = '在创建虚拟机任务页面中显示服务器选择日志';
$l['compression_algo'] = '压缩算法';
$l['compression_algo_exp'] = '选择压缩算法，对于proxmox（仅支持zstd，lzop）（在ubuntu上zstd是实验性的）';
$l['no_compression_algo'] = '无';
$l['hide_eu_tasks'] = '隐藏任务日志';
$l['hide_eu_tasks_exp'] = '如果启用，最终用户将无法看到任务日志';
$l['save_vm_pass'] = '保存虚拟机密码';
$l['save_vm_pass_exp'] = '如果启用，则虚拟机密码将被存储，并且仅对最终用户可见。管理员将无法看到密码。';
$l['memory_limit'] = '内存限制（MB）';
$l['memory_limit_exp'] = '如果您遇到同步问题，可以增加内存限制，默认值为128M';
$l['slave_low_space'] = '从服务器上没有足够的磁盘空间';
$l['proxmox_tfa_secret'] = 'Proxmox 2FA密钥';
$l['proxmox_tfa_secret_exp'] = '输入从Proxmox 2FA获得的密钥';
$l['proxmox_root_token_name'] = 'Proxmox API令牌名称';
$l['proxmox_root_token_name_exp'] = '在Proxmox面板中从数据中心 > 权限 > API令牌生成的root@pam用户的API令牌名称';
$l['proxmox_root_token_secret'] = 'Proxmox API令牌密钥值';
$l['proxmox_root_token_secret_exp'] = '为上述root用户API令牌生成的密钥值';
$l['dont_delete_bw_from_db'] = '不删除带宽数据';
$l['dont_delete_bw_from_db_exp'] = '如果选中，则不会删除每5分钟的带宽数据';
$l['temporary_st_directory'] = '临时备份目录';
$l['temporary_st_directory_exp'] = '远程备份期间临时数据将存储在此目录中';
$l['no_temp_dir_exists'] = '临时目录不存在';
$l['add_ptr_record'] = '添加PTR记录';
$l['add_ptr_record_exp'] = '虚拟机创建后将添加PTR记录，虚拟机的主机名将用于添加记录。';
$l['no_pdns_servers'] = '没有PDNS服务器来添加PTR记录。<br/><a href="'.$globals['index'].'act=addpdns">现在添加PDNS服务器</a>';

// LDAP
$l['enable_ldap_auth'] = '启用LDAP认证';
$l['enable_ldap_auth_exp'] = '管理员登录认证将通过LDAP服务器完成';
$l['ldap_server'] = 'LDAP服务器';
$l['ldap_server_exp'] = '输入LDAP服务器的主机名或IP地址';
$l['ldap_port'] = 'LDAP端口';
$l['ldap_port_exp'] = '输入LDAP服务器的端口（默认为389）';
$l['ldap_admin_username'] = 'LDAP管理员';
$l['ldap_admin_username_exp'] = '输入LDAP管理员用户的dn（可分辨名称）<br />例如：cn=admin,dc=ldapserver,dc=local';
$l['ldap_admin_password'] = 'LDAP密码';
$l['ldap_search_base'] = 'LDAP用户的dn（可分辨名称）';
$l['ldap_search_base_exp'] = '输入用户将从中认证的搜索基础。<br />例如：ou=users,dc=ldapserver,dc=local<br />请注意：<br /><ul><li>用户条目必须存在于LDAP服务器上，并且必须设置用户的邮件属性，否则用户将无法登录</li></ul>';
$l['no_ldap_server'] = '请输入LDAP服务器';
$l['no_ldap_admin_username'] = '请输入LDAP管理员用户名';
$l['no_ldap_admin_password'] = '请输入LDAP管理员密码';
$l['no_ldap_search_base'] = '请输入LDAP用户的搜索基础';
$l['inv_ldap_search_base'] = '请输入有效的LDAP搜索基础';

$l['disable_guest_agent'] = '禁用客户代理';
$l['disable_guest_agent_exp'] = '如果启用，则无法在实时机器上执行密码更改、获取内存和磁盘实际使用情况等操作';
$l['enable_vm_setup_wizard'] = '为最终用户启用虚拟机设置向导';
$l['enable_vm_setup_wizard_exp'] = '如果启用，则不会从管理面板创建虚拟机。用户将能够选择操作系统和密码';

$l['disable_enduser_vps_poweroff'] = '禁用虚拟机关机';
$l['disable_enduser_vps_poweroff_exp'] = '如果启用，最终用户的虚拟机关机将被禁用。';
$l['disable_enduser_firewall'] = '禁用防火墙';
$l['disable_enduser_firewall_exp'] = '如果启用，最终用户的虚拟机防火墙将被禁用。';

$l['eu_hide_recipe_code'] = '隐藏配方代码';
$l['eu_hide_recipe_code_exp'] = '如果启用，配方代码将对最终用户隐藏。';

$l['drop_arp_broadcast'] = '丢弃ARP广播';
$l['drop_arp_broadcast_exp'] = '如果选中，则所有ARP广播将被丢弃，并且仅允许通过我们的面板创建的虚拟机的ARP广播';
$l['provide_both_token_name_secret'] = '应同时提供Proxmox root用户API令牌和密钥';