<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// Please Read the Terms of use at https://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('非法入侵');

}

$l['privacy_policy'] = '隐私政策';
$l['virt_openvz'] = 'OpenVZ';
$l['virt_xen'] = 'Xen';
$l['virt_xenhvm'] = 'Xen HVM';
$l['virt_kvm'] = 'KVM';
$l['virt_xcp'] = 'XCP';
$l['virt_xcphvm'] = 'XCP HVM';
$l['virt_lxc'] = 'LXC';
$l['virt_proxo'] = 'Proxmox OpenVz';
$l['virt_proxk'] = 'Proxmox QEMU';
$l['virt_proxl'] = 'Proxmox LXC';
$l['virt_vzk'] = 'Virtuozzo KVM';
$l['virt_vzo'] = 'Virtuozzo OpenVZ';

$l['err_locked_vps'] = VM_SHORT.' 已锁定，因此无法执行任何操作';
$l['user_data_error_t'] = '用户数据错误';
$l['user_data_error'] = '面板无法加载您的账户信息。请将此问题报告给服务器管理员！';

$l['no_license'] = '未找到许可证文件！请将此问题报告给服务器管理员。';

$l['today'] = '<b>今天</b> '; // 用于显示今天发布时间的字符串

$l['init_theme_error_t'] = '主题错误'; // 标题
$l['init_theme_error'] = '无法加载主题文件 - &soft-1;。';

$l['init_theme_func_error_t'] = '主题功能错误'; // 标题
$l['init_theme_func_error'] = '无法加载 &soft-1; 的主题功能。';

$l['load_theme_settings_error'] = '无法加载主题设置文件。';

// 错误处理函数
$l['following_errors_occured'] = '发生了以下错误';

// 成功消息函数
$l['following_message'] = '返回了以下信息';

// 严重错误函数
$l['fatal_error'] = '致命错误';
$l['following_fatal_error'] = '发生了以下致命错误';

// 消息函数
$l['soft_message'] = '消息';
$l['following_soft_message'] = '返回了以下消息';

$l['err_user_head'] = '错误';
$l['err_user'] = '无法确定用户类型';

// 更新 Softaculous
$l['getting_info'] = '正在请求信息......';
$l['error_getting_latest'] = '无法获取信息......放弃';
$l['got_info'] = '已获取信息';
$l['manual_mode'] = '新版本的 Softaculous 需要手动操作......放弃';
$l['no_updates'] = '当前版本是最新版本......继续';
$l['fetch_upgrade'] = '正在获取升级文件......';
$l['error_fetch_upgrade'] = '无法获取升级文件......放弃';
$l['error_save_upgrade'] = '无法保存升级文件......放弃';
$l['got_upgrade'] = '已保存升级文件';
$l['unzip_upgrade'] = '正在解压文件......';
$l['error_unzip_upgrade'] = '解压时出错......放弃';
$l['unzipped_upgrade'] = '解压成功';
$l['running_upgrade'] = '正在运行升级......';
$l['succ_upgrade'] = '完成';
$l['error_upgrade'] = '升级过程中发生了以下错误：';

// MySQL 错误
$l['err_selectmy'] = '无法选择 MySQL 数据库。';
$l['err_myconn'] = '无法建立 MySQL 连接。';
$l['err_makequery'] = '无法执行编号为';
$l['err_mynum'] = 'MySQL 错误编号';
$l['err_myerr'] = 'MySQL 错误';

// hf_theme.php
$l['welcome'] = '欢迎';
$l['logout'] = '退出';
$l['page_time'] = '页面生成时间';
$l['times_are'] = '显示时间均为 GMT 格式';
$l['time_is'] = '现在时间是';
$l['load_start'] = '正在启动';
$l['load_stop'] = '正在停止';
$l['load_restart'] = '正在重启';
$l['load_poweroff'] = '正在关机';

// 分类语言变量
$l['dock_restart'] = '重启容器';
$l['dock_stop'] = '停止容器';
$l['dock_start'] = '启动容器';
$l['dock_poweroff'] = '关闭容器';
$l['dock_home'] = '首页';
$l['dock_settings'] = '编辑设置';
$l['dock_help'] = '帮助和支持';
$l['dock_sync'] = '与其他自动安装程序同步';
$l['go_home'] = '首页';
$l['dock_user'] = '用户资料';
$l['dock_password'] = '更改密码';
$l['dock_vps'] = '列出 '.VM_LONG;

// 左侧菜单
$l['lm_file_mgr'] = '文件管理器';
$l['lm_res'] = '资源';
$l['lm_performance'] = '服务器监控';
$l['lm_disk_health'] ='RAID 健康状态';
$l['lm_process'] = '进程';
$l['lm_service'] = '服务';
$l['lm_firewall'] = '防火墙';
$l['lm_ssh'] = 'SSH';
$l['lm_vnc'] = 'VNC';
$l['lm_vncpass'] = 'VNC 密码';
$l['lm_statusc'] = '状态日志';
$l['lm_res_a'] = '系统警告';
$l['lm_logs'] = '操作日志';
$l['lm_bandwidth'] = '带宽';
$l['lm_accountpass'] = '账号密码';
$l['lm_changepass'] = '账号密码';
$l['lm_controlpanel'] = '控制面板';
$l['lm_recipes'] = 'Recipes';
$l['lm_disk'] = '磁盘';
$l['lm_ostemp'] ='重装操作系统';
$l['lm_cpu'] = 'CPU';
$l['lm_ram'] = '内存';
$l['lm_host'] = '主机名';
$l['lm_logs'] = '日志';
$l['lm_ips'] = 'IP地址';
$l['lm_hvmsettings'] = VM_SHORT.' 配置';
$l['lm_apikey'] = 'API 凭据';
$l['lm_pdns'] = 'DNS';
$l['lm_rdns'] = '反向 DNS';
$l['lm_support'] = '支持';
$l['lm_self_shutdown'] = '自动任务';
$l['lm_tasks'] = '任务';
$l['lm_twofactauth'] = '安全设置';
$l['lm_backup2'] = '备份';
$l['lm_backupservers'] = '备份服务器';
$l['lm_sshkeys'] = 'SSH 密匙';
$l['lm_installapps'] = '应用';
$l['lm_billing'] = '计费';
$l['lm_volume'] = '卷';
$l['lm_server_aio'] = '资源监控';

// 用户左侧菜单
$l['lm_vs'] = ''.VM_SHORT.' 列表';
$l['lm_addvs'] = '启动 '.VM_SHORT;
$l['lm_resources'] = '云资源';
$l['lm_users'] = '用户';
$l['lm_usr_settings'] = '设置';
$l['lm_profile'] = '我的资料';
$l['lm_euiso'] = 'ISO';
$l['you_are_admin'] = '你是管理员';
$l['lmapps'] = '应用程序';

// 页面跳转相关：
$l['page_jump_title'] = '输入要跳转的页面';
$l['page_page'] = '页面';
$l['page_of'] = '共';
$l['page_go'] = '跳转';

// 创建 '.VM_SHORT.' 相关的内核错误
$l['build_no_vs'] = '数据库中未找到 '.VM_SHORT;
$l['rescue_not_synced'] = '似乎调用了救援模式，但根据数据库，救援模式未启用。这可能是因为主数据库未与从服务器同步。';
$l['build_no_os'] = '未找到操作系统模板';
$l['build_no_ip'] = '缺少 '.VM_SHORT.' 的主 IP';
$l['build_no_os_iso'] = '未找到操作系统模板或 ISO 文件';

// 错误和正确的内核
$l['wrong_kernel'] = '您已启动到错误的内核 - ';
$l['correct_kernel'] = '请重新启动到正确的内核。';
$l['kvm_module'] = '未加载 Linux-KVM 模块。';
$l['kvm_network'] = '未启动 '.$globals['bridge'].'。请运行 <b>service virtnetwork start</b>';
$l['temp_exists'] = '模板文件已存在';
$l['temp_snap_err'] = '无法创建快照，因此模板创建失败。快照创建通常因空间不足而失败';
$l['wrong_xm'] = 'XEN 模块未正确加载';
$l['lxc_module'] = '未安装 LXC。';

// Xen '.VM_SHORT.' 创建错误
$l['xen_err_lvm'] = '创建 '.VM_SHORT.' 的 LVM 时出错';
$l['xen_err_swap'] = '创建 '.VM_SHORT.' 的 SWAP 时出错';
$l['xen_err_tmp'] = '创建挂载点时出错';
$l['xen_err_mount'] = '挂载 '.VM_SHORT.' 存储时出错';
$l['xen_err_unmount'] = '卸载 '.VM_SHORT.' LVM 时出错';
$l['xen_err_dd'] = '磁盘复制操作期间出错';
$l['xen_err_mkfs'] = '格式化 '.VM_SHORT.' 时出错';
$l['xen_err_mkswap'] = '格式化 '.VM_SHORT.' 的 SWAP 时出错';
$l['xen_err_untar'] = '解压操作系统模板时出错';
$l['xen_err_part'] = '创建磁盘分区时出错';
$l['xen_err_kpart'] = '映射分区时出错';
$l['xen_err_resizefs'] = '调整文件系统大小时出错';

// XCP '.VM_SHORT.' 创建错误
$l['xcp_err_vdi'] = '创建 '.VM_SHORT.' 的 VDI 时出错';
$l['xcp_err_iso'] = '加载 ISO 时出错';
$l['xcp_err_vif'] = '创建 '.VM_SHORT.' 的 VIF 时出错';
$l['xcp_xentools_missing'] = '未找到 Xentools ISO';

// KVM '.VM_SHORT.' 创建错误
$l['kvm_err_lvm'] = '创建 '.VM_SHORT.' 的 LVM 时出错';
$l['kvm_err_mount'] = '挂载 '.VM_SHORT.' 存储时出错';
$l['kvm_err_unmount'] = '卸载 '.VM_SHORT.' LVM 时出错';
$l['kvm_err_dd'] = '磁盘复制操作期间出错';
$l['kvm_err_resizefs'] = '调整文件系统大小时出错';
$l['kvm_err_part'] = '创建磁盘分区时出错';
$l['kvm_err_kpart'] = '映射分区时出错';
$l['kvm_err_mkswap'] = '格式化 '.VM_SHORT.' 的 SWAP 时出错';
$l['kvm_err_ceph_block'] = '创建 CEPH 块设备时出错';
$l['kvm_err_ceph_block_map'] = '映射 CEPH 块设备时出错';
$l['kvm_err_ceph_block_rmmap'] = '删除 CEPH 块设备映射时出错';
$l['kvm_err_ceph_block_rm'] = '删除 CEPH 块设备时出错';
$l['kvm_err_lightbit'] = '创建 '.VM_SHORT.' 的 lightbit 磁盘时出错';
$l['kvm_err_lightbit_acl'] = '获取 lightbit 的 acl 时出错';
$l['kvm_err_lightbit_proj'] = '节点上不存在 lightbit 项目';
$l['kvm_err_lightbit_storage'] = '存储不存在';

// LXC '.VM_SHORT.' 创建错误
$l['lxc_err_untar'] = '解压操作系统模板时出错';
$l['lxc_err_unmount'] = '卸载 '.VM_SHORT.' LVM 时出错';
$l['lxc_err_resizefs'] = '调整文件系统大小时出错';
$l['lxc_network'] = '未启动 '.$globals['bridge'].'。请运行 <b>service virtnetwork start</b>';
$l['lxc_err_mount'] = '挂载 '.VM_SHORT.' 存储时出错';

// Virtuozzo '.VM_SHORT.' 创建错误
$l['virtuzo_create_error'] = '创建 '.VM_SHORT.' 时出错';
$l['err_vncpass'] = '设置 VNC 密码时出错';
$l['err_set_iso'] = '将 ISO 附加到 '.VM_SHORT.' 时出错';
$l['err_disk_create'] = '创建 '.VM_SHORT.' 磁盘时出错';
$l['err_set_boot_order'] = '设置启动顺序时出错';
$l['err_set_ram'] = '设置 RAM 时出错';
$l['err_set_pinning'] = '设置 CPU 亲和性时出错';
$l['err_install_tools'] = '安装客户工具时出错';

// 备份错误
$l['backup_err_mount'] = '挂载 LVM 临时存储时出错';
$l['backup_err_lvm'] = '创建临时存储的 LVM 时出错';
$l['backup_err_mkfs'] = '格式化临时存储时出错';
$l['backup_err_mkdir'] = '创建临时存储挂载点目录时出错';
$l['kvm_err_tar'] = '压缩存档时出错';
$l['xen_err_tar'] = '压缩存档时出错';
$l['kvm_err_untar'] = '解压存档时出错';
$l['backup_err_untar'] = '解压存档时出错';
$l['err_vzdump'] = '备份工具出错';
$l['err_create_backup_folder'] = '创建备份目录时出错';
$l['err_create_backup_date_folder'] = '创建备份日期目录时出错';
$l['err_backup_command_fail'] = '创建备份镜像失败，返回代码：';
$l['backup_err_snap_switch'] = '还原快照时出错';
$l['backup_err_snap_del'] = '删除快照时出错';
$l['vps_uuid_empty'] = VM_SHORT.' UUID 为空！';

// OpenVZ '.VM_SHORT.' 创建错误
$l['openvz_err_ubc'] = '保存 UBC 设置时出错';
$l['openvz_err_ostemplate'] = '设置操作系统模板时出错';
$l['openvz_err_space'] = '设置磁盘空间时出错';
$l['openvz_err_inodes'] = '设置磁盘空间时出错';
$l['openvz_err_hostname'] = '设置主机名时出错';
$l['openvz_err_ip'] = '设置 IP 地址时出错';
$l['openvz_err_dns'] = '设置 DNS 时出错';
$l['openvz_err_cpu'] = '设置 CPU 单元时出错';
$l['openvz_err_cpulim'] =  '设置 CPU 限制时出错';
$l['openvz_err_cores'] = '设置 CPU 核心时出错';
$l['openvz_err_ioprio'] = '设置 IO 优先级时出错';
$l['openvz_err_create'] = '创建容器时出错';
$l['vswap_error'] = '设置 VSwap 设置时出错';
$l['openvz_err_uefi'] =  '设置 UEFI 启动时出错';
$l['openvz_err_bios'] =  '设置 BIOS 启动时出错';

// 救援磁盘错误
$l['err_downloading'] = '下载救援模板时出错';
$l['err_delete_disk'] = '删除救援磁盘时出错';

// 终端用户 '.VM_SHORT.' 状态列
$l['lm_status_online'] = '在线';
$l['lm_status_offline'] = '离线';
$l['lm_status_suspended'] = '已暂停';
$l['vps_is_suspended'] = '此 '.VM_SHORT.' 已被暂停。您无法对其执行任何操作！';
$l['suspend_reason_bw'] = '此 '.VM_SHORT.' 因带宽超限而被暂停。您无法对其执行任何操作！';

$l['unknown'] = '未知';
$l['change_onboot'] = '更改将在 '.VM_SHORT.' 重新启动后生效。';
$l['completed'] = '完成';
$l['vpsdisk_resize_err'] = '调整磁盘大小时出错';
$l['mount_undetermined'] = '未在 '.VM_SHORT.' 中找到 Linux 分区';
$l['disk_destroy_err'] = '销毁磁盘时出错';
$l['started'] = '已启动';
$l['ended'] = '已结束';
$l['updated'] = '已更新';
$l['edit_xcperror'] = '尝试编辑 '.VM_SHORT.' 时出错';
$l['bandwidth_threshold_mail_sub'] = '带宽阈值已超出';
$l['bandwidth_threshold_mail_message'] = '您好，

您的 '.VM_SHORT.' {{hostname}} 已超出带宽限制的 {{vps_bandwidth_threshold}} %。

该 '.VM_SHORT.' 已使用 {{used_gb}} GB 带宽，限额为 {{limit_gb}} GB。

此致，
{{sn}}';
$l['bandwidth_mail_sub'] = VM_SHORT.' 因带宽超限而被暂停';
$l['bandwidth_mail_message'] = '您好，

您的 '.VM_SHORT.' `{{hostname}}` 因超出分配的带宽限制而被暂停。

该 '.VM_SHORT.' 已使用 {{used_gb}} GB 带宽，但限额仅为 {{limit_gb}} GB。

此致，
{{sn}}';

$l['temp_vps_net_speed_capped'] = VM_SHORT.' 网络速度被限制';
$l['temp_vps_net_speed_capped_restore'] = VM_SHORT.' 网络速度已恢复';
$l['speed_capped_mail_sub'] = VM_SHORT.' 因带宽超限而被限制网络速度';
$l['speed_capped_mail_message'] = '您好，

您的 '.VM_SHORT.' {{hostname}} 因达到分配的带宽限制而被限制网络速度。

该 '.VM_SHORT.' 已使用 {{used_gb}} GB 带宽，限额为 {{limit_gb}} GB。

此致，
{{sn}}';

$l['removed_speed_capped_mail_sub'] = VM_SHORT.' 网络速度已恢复';
$l['removed_speed_capped_mail_message'] = '您好，

您的 '.VM_SHORT.' {{hostname}} 的网络速度已恢复。

该 '.VM_SHORT.' 已使用 {{used_gb}} GB 带宽，限额为 {{limit_gb}} GB。

此致，
{{sn}}';

// 电源计划通知
$l['self_shutdown_sub'] = VM_SHORT.' {{action}}';
$l['self_shutdown_body'] = '您好，

您的 '.VM_SHORT.' {{vpsid}} 已根据您设置的时间 ({{time}}) 被 {{action}}。
';

$l['self_shutdown_start'] = '已启动';
$l['self_shutdown_stop'] = '已关机';
$l['self_shutdown_restart'] = '已重启';
$l['self_shutdown_poweroff'] = '已断电';

$l['self_shutdown_start_failed'] = '启动失败';
$l['self_shutdown_stop_failed'] = '关机失败';
$l['self_shutdown_restart_failed'] = '重启失败';
$l['self_shutdown_poweroff_failed'] = '断电失败';

// Proxmox 内核错误
$l['failed_connect_proxmox'] = '无法调用 proxmox API。请在配置 --> 从服务器设置中输入 proxmox 详细信息。';

// 速度限制消息和标签：
$l['speed_cap_down']= '限制下载速度 ';
$l['exp_speed_cap_down'] = '带宽超限后 '.VM_SHORT.' 的下载速度，0 或空值表示无限制';
$l['speed_cap_up']= '限制上传速度 ';
$l['exp_speed_cap_up'] = '带宽超限后 '.VM_SHORT.' 的上传速度。<br />如果 '.VM_SHORT.' 上传速度为 -1，则限制上传速度将与<b>限制下载速度</b>相同<br />0 或空值表示无限制';

// ISO 相关
$l['admin_iso'] = '管理员 ISO';
$l['eu_iso'] = '终端用户 ISO';

$l['enable_billing'] = '计费设置已禁用。请先从 <a href="'.$globals['index'].'act=billing">计费设置</a> 启用。';

// Webuzo 脚本分类
$l['cat_php_forums'] = '论坛';
$l['cat_php_blogs'] = '博客';
$l['cat_php_cms'] = '门户/CMS';
$l['cat_php_galleries'] = '图片库';
$l['cat_php_wikis'] = '维基';
$l['cat_php_admanager'] = '广告管理';
$l['cat_php_calendars'] = '日历';
$l['cat_php_games'] = '游戏';
$l['cat_php_mail'] = '邮件';
$l['cat_php_polls'] = '投票和调查';
$l['cat_php_projectman'] = '项目管理';
$l['cat_php_ecommerce'] = '电子商务';
$l['cat_php_guestbooks'] = '留言簿';
$l['cat_php_customersupport'] = '客户支持';
$l['cat_php_others'] = '其他';
$l['cat_php_music'] = '音乐';
$l['cat_php_video'] = '视频';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = '社交网络';
$l['cat_php_microblogs'] = '微博';
$l['cat_php_frameworks'] = '框架';
$l['cat_php_educational'] = '教育';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = '数据库工具';
$l['cat_php_files'] = '文件管理';

$l['inv_winpass_chars'] = 'Windows '.VM_SHORT.' 根密码允许的特殊字符为：';
$l['invalid_transaction'] = '交易失败/无效。请重试';
$l['success'] = '成功';
$l['failed'] = '失败';

// 通用搜索
$l['unisear_hdr_res'] = '搜索结果';
$l['unisear_no_res'] = '无搜索结果！';
$l['unisear_placeholder'] = '搜索 '.VM_SHORT.'、用户、IP';
$l['unisear_show_all'] = '显示全部';
$l['unisear_res'] = '结果 >>';
$l['unisear_matched'] = '匹配';
$l['unisear_in'] = '在';
$l['unisear_for'] = '为';
$l['unisear_list'] = '列表';
$l['unisear_vps'] = VM_SHORT;
$l['unisear_user'] = '用户';
$l['unisear_ips'] = 'IP';
$l['unisear_vps_name'] = VM_SHORT.' 名称';
$l['unisear_vpsid'] = VM_SHORT.' ID';
$l['unisear_hostname'] = '主机名';
$l['unisear_server'] = '服务器';
$l['unisear_virt'] = '虚拟化类型';
$l['unisear_os_name'] = '操作系统名称';
$l['unisear_iso'] = 'ISO';
$l['unisear_free_ips'] = 'IP (空闲)';
$l['unisear_storage'] = '存储';
$l['unisear_st_uuid'] = 'UUID';
$l['unisear_st_name'] = '名称';

// Tun Tap 处理
$l['tuntap_handle'] = 'Tun/Tap 处理';
$l['enable_tuntap'] = '启用 Tun/Tap';
$l['disable_tuntap'] = '禁用 Tun/Tap';

$l['add_ssh_key'] = '添加 SSH 密钥';
$l['add_ssh_key_exp'] = '在 '.VM_SHORT.' 中添加公钥。<br>注意：此密钥不会被保存。';
$l['sshkey_setting'] = 'SSH 密钥设置';
$l['disable_password'] = '禁用密码认证';
$l['disable_password_exp'] = '如果启用，SSH 的密码认证将被限制。';
$l['recreate_keys'] = '重新生成 SSH 密钥';
$l['recreate_keys_exp'] = '如果启用，SSH 的密码认证将被限制，并生成一对 SSH 密钥；如果 '.VM_SHORT.' 中已启用<b>禁用密码认证</b>，则旧密钥将被新密钥替换';
$l['sel_ssh_key'] = '选择 SSH 密钥';
$l['err_inv_ssh_key'] = '您指定的公钥无效';
$l['generate_keys'] = '生成 SSH 密钥';
$l['add_ssh_keys'] = '添加 SSH 密钥';
$l['use_ssh_keys'] = '使用现有密钥';
$l['no_ssh_keys'] = '未找到 SSH 密钥！';
$l['no_ssh_option'] = '请选择一个 SSH 选项';
$l['no_key_provided'] = '请提供 SSH 密钥';

// 禁用面板
$l['panel_message'] = '面板访问已被管理员禁用';
$l['panel_subject'] = '面板已禁用';
// 通知语言
$l['bandwidth_threshold_notify'] = VM_SHORT.' {{hostname}} ({{vpsid}}) 已超出带宽限制的 {{vps_bandwidth_threshold}} %。<br>
该 '.VM_SHORT.' 已使用 {{used_gb}} GB 带宽，限额为 {{limit_gb}} GB。<br>';
$l['bandwidth_mail_message_notify'] = '您的 '.VM_SHORT.' {{hostname}} ({{vpsid}}) 因超出分配的带宽限制而被暂停。<br>
该 '.VM_SHORT.' 已使用 {{used_gb}} GB 带宽，但限额仅为 {{limit_gb}} GB。<br>';
$l['speed_capped_mail_message_notify'] = '您的 '.VM_SHORT.' {{hostname}} ({{vpsid}}) 因达到分配的带宽限制而被限制网络速度。<br>
该 '.VM_SHORT.' 已使用 {{used_gb}} GB 带宽，限额为 {{limit_gb}} GB。<br>';
$l['removed_speed_capped_mail_notify'] = '您的 '.VM_SHORT.' {{hostname}} ({{vpsid}}) 的网络速度已恢复。';

$l['server_ram_threshold'] = '服务器内存阈值已达到';
$l['server_disk_threshold'] = '服务器磁盘阈值已达到';
$l['server_locked_warn'] = '服务器因超限而被锁定';
$l['vm_locked_backup'] = VM_SHORT.' 备份正在运行';
$l['vm_locked_restore'] = VM_SHORT.' 恢复正在运行';

$l['reinstall_callback'] = '重装回调';
$l['no_notification'] = '尚无通知！';
$l['clear_all_notification'] = '清除全部';
$l['dbbackup_error'] = '无法备份数据库！';
$l['notifications'] = '通知';
$l['no_timezone'] = '无';
$l['invalid_new_disk'] = '发现无效磁盘';
$l['hotplug_vol_no'] = '不支持热插拔';

// API 语言提交
// 显示 API 日志
$l['no_info'] = '未找到 API 日志！';
$l['api_key'] = 'API 密钥';
$l['api_val'] = 'API 密码';
$l['api_id'] = 'API ID';
$l['api_actions'] = '操作';
$l['taskid'] = '任务ID';
$l['uid'] = '用户邮箱';
$l['from_ip'] = '来源IP';
$l['time'] = '时间';
$l['data'] = '额外信息';
$l['search_id'] = 'VPS ID';
$l['action_create'] = '创建 API';
$l['action_delete'] = '删除 API';
$l['action_edit'] = '编辑 API';
$l['state_true'] = '成功';
$l['state_false'] = '失败';
$l['action'] = '操作';
$l['status'] = '状态';
$l['submit'] = '提交';
$l['src_ip'] = '来源IP';
$l['act_new_api'] = '创建新的 API 对';
$l['act_edit_api'] = '执行编辑 API';
$l['act_delete_api'] = '已删除 API 对';
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
$l['act_cluster_statistics'] = '查看集群统计';
$l['act_server_statistics'] = '查看服务器统计';
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
$l['act_vnc'] = VM_LONG.' VNC';
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
$l['act_list_api'] = '列出 API 凭据';
$l['act_create_api'] = '创建 API 凭据';
$l['act_api_credential_edit'] = '编辑 API 凭据';
$l['act_show_api_log'] = 'API 日志';
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
$l['act_mediagroups'] = '查看媒体组';
$l['act_admin_acl'] = '查看管理员 ACL';
$l['act_addmg'] = '添加媒体组';
$l['act_editmg'] = '编辑媒体组';
$l['act_deletemg'] = '删除媒体组';
$l['act_list_distros'] = '查看发行版列表';
$l['act_add_distro'] = '添加发行版';
$l['act_synciso'] = '同步 ISO';
$l['act_config'] = '编辑常规设置';
$l['act_emailsettings'] = '编辑邮件设置';
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
$l['act_twofactauth'] = '双因素认证';
$l['act_updates'] = '执行更新';
$l['act_emailtemps'] = '查看邮件模板';
$l['act_editemailtemps'] = '编辑邮件模板';
$l['act_ssl'] = '查看 SSL 文件';
$l['act_editssl'] = '编辑 SSL 文件';
$l['act_createssl'] = '创建 SSL 证书';
$l['act_firewall'] = '管理防火墙';
$l['act_importvs'] = '导入 VS';
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
$l['act_recipes'] = '查看配方';
$l['act_addrecipe'] = '添加配方';
$l['act_editrecipe'] = '编辑配方';
$l['act_backup_plans'] = '列出备份计划';
$l['act_addbackup_plan'] = '添加备份计划';
$l['act_editbackup_plan'] = '编辑备份计划';
$l['act_deletebackup_plan'] = '删除备份计划';
$l['act_haproxy'] = '域名转发';
$l['act_euiso'] = '终端用户 ISO';
$l['act_orphaneddisk'] = '列出孤立磁盘';
$l['act_deleteorphaneddisk'] = '删除孤立磁盘';
$l['act_ha'] = '高可用性';
$l['act_load_balancer'] = '负载均衡器';
$l['act_manage_load_balancer'] = '管理负载均衡器';
$l['act_multivirt'] = '多虚拟化';
$l['act_webuzo'] = 'Webuzo 设置';
$l['act_billing'] = '计费设置';
$l['act_resource_pricing'] = '资源计费';
$l['act_invoices'] = '发票';
$l['act_transactions'] = '交易';
$l['act_addinvoice'] = '添加发票';
$l['act_addtransaction'] = '添加交易';
$l['act_performance'] = '服务器监控';

// 终端用户调用
$l['act_vpsmanage'] = '仪表板';
$l['act_editapi'] = '编辑 API';
$l['act_sso'] = '单点登录';
$l['act_apps'] = '应用程序';
$l['act_webuzo'] = 'webuzo';
$l['act_editsshkey'] = '编辑 SSH 密钥';
$l['act_addsshkey'] = '添加 SSH 密钥';
$l['act_sshkeys'] = 'SSH 密钥';
$l['act_editbackupserver'] = '编辑备份服务器';
$l['act_addbackupserver'] = '添加备份服务器';
$l['act_backupservers'] = '备份服务器';
$l['act_addiso'] = '添加 ISO';
$l['act_euiso'] = '终端用户 ISO';
$l['act_managevdf'] = '管理 VDF';
$l['act_twofactauth'] = '双因素认证';
$l['act_tasks'] = '列出任务';
$l['act_ctasks'] = '列出任务';
$l['act_self_shutdown'] = '自动关机';
$l['act_managesubnets'] = '管理 IPv6 子网';
$l['act_managezone'] = '管理 DNS 区域';
$l['act_payment'] = '付款';
$l['act_invoices'] = '列出发票';
$l['act_billing'] = '计费';
$l['act_pdns'] = 'PDNS';
$l['act_listrecipes'] = '列出配方';
$l['act_crecipes'] = '配置配方';
$l['act_cloudres'] = '云资源';
$l['act_create'] = '创建 '.VM_SHORT;
$l['act_hvmsettings'] = VM_SHORT.' 的 HVM 设置';
$l['act_apikey'] = '列出 API 密钥';
$l['act_ips'] = '列出 IP';
$l['act_vncpass'] = 'VNC 密码';
$l['act_vnc'] = 'VNC 访问';
$l['act_listvs'] = '列出 '.VM_SHORT;
$l['act_usersettings'] = '用户设置';
$l['act_rdns'] = '反向 DNS';
$l['act_addrdns'] = '添加反向 DNS';
$l['act_userpassword'] = '用户密码';
$l['act_edituser'] = '编辑用户';
$l['act_adduser'] = '添加用户';
$l['act_profile'] = '资料';
$l['act_userpanel'] = '用户仪表板';
$l['act_users'] = '列出用户';
$l['act_hostname'] = '更改主机名';
$l['act_controlpanel'] = '控制面板';
$l['act_changepassword'] = '更改密码';
$l['act_bandwidth'] = '带宽';
$l['act_logs'] = '日志';
$l['act_system_alerts'] = '系统警报';
$l['act_statuslogs'] = '状态日志';
$l['act_console'] = '控制台访问';
$l['act_ssh'] = 'SSH 列表';
$l['act_add_ssh'] = '配置 SSH';
$l['act_performance'] = '性能';
$l['act_services'] = '服务';
$l['act_ram'] = '内存';
$l['act_cpu'] = 'CPU';
$l['act_monitor'] = '监控';
$l['act_ostemplate'] = '操作系统模板';
$l['act_rescue'] = '救援模式';
$l['act_poweroff'] = '关机';
$l['act_start'] = '启动';
$l['act_restart'] = '重启';
$l['act_stop'] = '停止';
$l['act_suspend_net'] = '暂停网络';
$l['act_unsuspend_net'] = '取消暂停网络';
$l['act_unsuspend'] = '取消暂停 '.VM_SHORT;
$l['act_suspend'] = '暂停 '.VM_SHORT;
$l['act_delvs'] = '删除 '.VM_SHORT;
$l['act_stop'] = '停止';
$l['act_register'] = '注册';
$l['act_login'] = '登录';
$l['act_editvm'] = '编辑 '.VM_SHORT;
$l['act_backup2'] = '备份/恢复';
$l['act_dashboard'] = '仪表板';
$l['act_return_session'] = '返回会话';

$l['act_domains'] = 'DNS 区域';
$l['act_dnsrecords'] = 'DNS 记录';
$l['act_edit_dnsrecord'] = '编辑 DNS 记录';
$l['act_managevps'] = '管理 '.VM_LONG;
$l['act_ipranges'] = 'IPv6 子网';
$l['act_addiprange'] = '添加 IPv6 子网';
$l['act_editiprange'] = '编辑 IP';
$l['act_servergroups'] = '服务器组/区域';
$l['act_user_plans'] = '用户计划';
$l['act_adduser_plans'] = '添加用户计划';
$l['act_edituser_plans'] = '编辑用户计划';
$l['act_editinvoice'] = '编辑发票';
$l['act_edittransaction'] = '编辑交易';
$l['act_firewall_plans'] = '列出防火墙计划';
$l['act_addfirewall_plan'] = '添加防火墙计划';
$l['act_editfirewall_plan'] = '编辑防火墙计划';
$l['act_load_balancer'] = '负载均衡器';
$l['act_manage_load_balancer'] = '管理负载均衡器';
$l['lm_load_balancer'] = '负载均衡器';
$l['at_performed'] = '操作已执行';
$l['product_id'] = '产品 ID';
$l['call_init'] = '调用发起自';
$l['os_template'] = '操作系统模板';
$l['primary_ip'] = '主 IP 已更改';
$l['conf_ssh'] = '配置 SSH 密钥，ID：';
$l['ctrl_pnl'] = '选择安装的控制面板';
$l['rdns_ip'] = '反向 DNS IP';
$l['rdns_domain'] = '反向 DNS 域名';
$l['api_hostname'] = '主机名';
$l['virt_type'] = '虚拟化类型';
$l['api_osid'] = '操作系统 ID';
$l['add_rec'] = '添加了以下配方 ID 以执行';
$l['inv_ip'] = '无效的 IP 访问';
$l['backup_delete'] = '备份删除调用';
$l['backup_init'] = '创建备份';
$l['backup_started'] = '创建备份任务已启动';
$l['restore_init'] = '恢复备份调用';
$l['server_dump'] = VM_LONG;
$l['call_init'] = '调用发起自';
$l['get_module_name'] = '模块名称';

// editapi 语言字符串 - 前缀：edu_
$l['edu_idapi_not_found'] = '未找到 API ID';
$l['edapi_done'] = '更改已保存';

$l['files'] = '文件';
$l['size'] = '大小';
$l['backup_time'] = '备份时间';

// Functions.php
$l['ath_fail'] = '认证失败，API 调用已停止';
$l['ip_fail'] = '检测到未经授权的 IP，API 调用已停止';
$l['api_key'] = 'API 密钥';
$l['data_post'] = 'POST 数据';
$l['data_get'] = 'GET 数据';
$l['show_notify_logs'] = '显示日志';

// 防火墙
$l['decision'] = '决策';
$l['decision_exp'] = '对流量执行的操作';
$l['direction'] = '方向';
$l['Add_firewalls_rules'] = '添加防火墙规则';
$l['manage_firewall_rules'] = '管理防火墙规则';
$l['IN'] = '入站';
$l['OUT'] = '出站';
$l['ACCEPT'] = '接受';
$l['DROP'] = '丢弃';
$l['port'] = '端口';
$l['sport'] = '源端口';
$l['sport_exp'] = '要应用规则的源端口';
$l['dport'] = '目标端口';
$l['dport_exp'] = '要应用规则的目标端口';
$l['CUSTOM'] = '自定义';
$l['ANYWHERE'] = '任何地方';
$l['Ipv4'] = 'IPv4';
$l['IPv6'] = 'IPv6';
$l['firewall'] = '防火墙';
$l['iptype'] = 'IP 类型';
$l['protocol'] = '协议';
$l['protocol_exp'] = '协议类型';
$l['source'] = '源';
$l['source_exp'] = '您可以指定单个 IP（2.2.2.2）、子网或 0.0.0.0/0（所有 IP）';
$l['srno'] = '序号';
$l['Empty protocol field'] = '协议字段为空';
$l['Need Direction Flow'] = '需要方向流';
$l['Empty port'] = '端口为空';
$l['Empty source address'] = '源地址为空';
$l['reset'] = '重置';
$l['update'] = '更新';

$l['add_rule_error'] = '请添加规则后再保存';
$l['rules_exceed_limit'] = '防火墙计划不能超过 <b>&soft-1;</b> 条规则';
$l['invalid_source_port'] = '规则中指定的源端口 <b>&soft-1;</b> 无效：</br>&soft-2;';
$l['correct_port_info'] = '端口值范围应为 0 - 65535 或 NONE';
$l['invalid_destination_port'] = '规则中指定的目标端口 <b>&soft-1;</b> 无效：</br>&soft-2;';
$l['invalid_protocol'] = '指定的协议无效';
$l['invalid_decision'] = '指定的决策无效';
$l['invalid_iptype'] = '指定的 IP 类型无效';
$l['invalid_direction'] = '指定的方向无效';
$l['correct_ipv4_info'] = '请指定有效的 IPv4 地址或 0.0.0.0/0 表示所有 IP';
$l['no_port_specified'] = '源端口和目标端口范围应为 0 - 65535，规则：';
$l['port_number_is_specified'] = '对于 GRE、ESP、ICMP 协议，源端口和目标端口应为 NONE';

$l['err_umount_volume'] = '卸载 '.VM_SHORT.' 中的卷时出错';
$l['enduser_vps_firewall_disabled'] = VM_SHORT.' 防火墙已禁用';
$l['bulk_enduser_vps_firewall_remove'] = '已为多个 '.VM_SHORT.' 删除终端用户防火墙规则';

$l['resize_volume'] = '调整卷大小';
$l['delete_volume'] = '删除卷';
$l['err_vol_disk_not_found'] = '未找到卷！';
$l['err_vol_disk_resize'] = '调整卷大小时出错';
$l['err_vol_disk_delete'] = '删除卷时出错';

$l['screenshot_err'] = '截取 '.VM_SHORT.' 截图时出错';
$l['no_screenshot'] = '无可用截图';
$l['invalid_subnet'] = '提供的子网无效';
$l['invalid_subnet_address'] = '提供的子网网络地址无效';
$l['invalid_subnet_netmask'] = '提供的子网掩码无效';

$l['pending_task_notice'] = '有一些待完成的任务，将在 '.VM_SHORT.' 停止并启动后执行';
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
$l['notifications'] = '通知';
$l['ago'] = '前';
$l['success_connect'] = '连接成功';
$l['unable_connect'] = '连接失败';
$l['unable_content_connect'] = '无法连接到';
$l['success_content_connect'] = '成功连接到';
$l['dns_server'] = 'DNS 服务器';