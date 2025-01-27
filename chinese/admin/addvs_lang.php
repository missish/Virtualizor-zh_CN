<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addvs_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来自于成为最好的愿望
// ----------------------------------------------------------
// 由 Alons 开始
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

$l['server_locked_title'] = '服务器已锁定';
$l['server_locked'] = '无法在锁定的服务器上创建 '.VM_SHORT;
$l['slave_cant'] = '添加 '.VM_LONG.' 错误';
$l['slave_cant_exp'] = '不允许在从服务器上添加 '.VM_LONG.'！';
$l['masteronly_cant_exp'] = '不允许在主服务器上创建 '.VM_SHORT.'。请选择另一个从服务器。';
$l['none_plan'] = '无';
$l['no_hname'] = '请指定主机名';
$l['no_os'] = '请为 '.VM_SHORT.' 选择一个操作系统';
$l['no_rootpass'] = '请指定根密码';
$l['no_vncpass'] = '请指定VNC密码';
$l['no_disk_space'] = '请指定要分配的磁盘空间';
$l['no_ram'] = '请指定内存';
$l['no_bandwidth'] = '请指定带宽';
$l['no_cpu_units'] = '请指定CPU单位';
$l['no_cpu_cores'] = '请指定核心数';
$l['no_percent_cpu'] = '请指定允许的CPU利用率百分比';
$l['no_swap_ram'] = '请指定交换内存';
$l['no_burst_ram'] = '请指定可突发的内存限制';
$l['no_inodes'] = '请指定允许的inode数量';
$l['no_io'] = '请选择I/O优先级';
$l['invalid_os'] = '提交的操作系统无效';
$l['no_ip'] = '请为 '.VM_SHORT.' 指定至少一个IP';
$l['invalid_ip'] = '以下IP无效：';
$l['invalid_ip_subnet'] = '以下IP子网无效：';
$l['cpan_wrong_panel'] = '选择的面板无效';
$l['subnet_mismatch'] = '数据库中未找到某些IPv6子网';
$l['used_ip'] = '以下IP已被另一个 '.VM_SHORT.' 使用：';
$l['used_ip_subnet'] = '以下IP子网已被另一个 '.VM_SHORT.' 使用：';
$l['err_insert'] = '保存新的 '.VM_SHORT.' 信息时出错。';
$l['err_create'] = '创建 '.VM_SHORT.' 时出错。<a href="'.$globals['index'].'act=rebuild&vpsid=&soft-1;">点击此处重新安装 '.VM_LONG.'</a>';
$l['err_rootpass'] = '设置新 '.VM_SHORT.' 的根密码时出错';
$l['err_vncpass'] = '设置新VNC密码时出错';
$l['cpan_wrong_os'] = '无法在以下操作系统上安装控制面板：';
$l['err_cpan_iso'] = '选择ISO时无法安装控制面板！';
$l['vncpass_too_long'] = 'VNC密码长度超过支持的长度';
$l['invalid_uid'] = '提交的用户不存在';
$l['no_user'] = '未指定用户邮箱';
$l['no_user_pass'] = '未指定用户密码';
$l['invalid_email'] = '用户邮箱地址无效';
$l['emailexist'] = '指定的新用户邮箱已存在';
$l['err_user'] = '添加用户时出错';
$l['err_start'] = '启动新 '.VM_SHORT.' 时出错';
$l['err_numvs'] = '您的许可证不允许创建更多的 '.VM_SHORT;
$l['err_mac'] = '请指定MAC地址';
$l['err_dns'] = '请指定正确的名称服务器';
$l['err_tccreate'] = '设置 '.VM_SHORT.' 的网络限制时出错';
$l['invalid_hostname'] = '提交的主机名不是有效的FQDN';
$l['no_nonalphanumeric'] = 'VNC密码不允许使用非字母数字字符';
$l['no_shadow'] = '未指定影子内存';
$l['err_save_slave'] = '在从服务器上保存 '.VM_SHORT.' 数据时出错。请确保从服务器正常工作。';
$l['less_ram'] = '节点没有足够的内存来创建此 '.VM_SHORT;
$l['less_space'] = '节点没有足够的磁盘空间来创建此 '.VM_SHORT;
$l['less_inodes'] = 'inode数量不应少于50000';
$l['no_webuzo_template'] = '选择的操作系统模板不是Webuzo模板';
$l['err_swapsize'] = '指定的SWAP大小不能大于或等于指定的总磁盘空间';
$l['inv_kvm_cache'] = '提交的磁盘缓存无效';
$l['inv_io_mode'] = '提交的I/O策略无效';
$l['inv_io_uring'] = '节点不支持IO Uring模式';
$l['inv_vnc_keymap'] = '提交的VNC键映射无效';
$l['err_vpslimit'] = VM_SHORT.' 创建限制已超出';
$l['err_vcores'] = '没有足够的核心来创建 '.VM_SHORT;
$l['in_queue'] = '等待其他进程完成';
$l['inv_storage'] = '提交的存储无效';
$l['inv_storage_ha'] = '选择的存储不是共享存储。请为HA虚拟机添加共享存储';
$l['inv_bus_driver'] = '无效的磁盘总线驱动';
$l['inv_bus_driver_num_format'] = '不能有重复的总线驱动和编号格式。请更改总线编号或总线驱动';
$l['no_storage'] = '未找到主存储';
$l['xen_pv_file_support'] = 'Xen PV不支持文件级磁盘';
$l['inv_space'] = '提交的空间格式无效';
$l['mul_storage'] = '此虚拟化类型不支持辅助磁盘选项';
$l['inv_cpu_mode'] = '指定的CPU模式无效';
$l['no_ipv4'] = 'IPv4数量不足';
$l['no_ipv6'] = 'IPv6数量不足';
$l['no_ipv6_subnet'] = 'IPv6子网数量不足';
$l['no_int_ips'] = '内部IP数量不足';
$l['err_cores_more'] = '不能分配比可用核心更多的核心。可用核心：';
$l['err_noippool'] = '未找到以下IP池ID或它们不属于目标服务器：';
$l['lockedips'] = '以下IP已锁定';
$l['lxc_file_support'] = 'LXC不支持文件级磁盘';
$l['err_topology_calc'] = '指定的CPU核心数应等于拓扑限制（CPU核心 = 插槽 x 拓扑核心 x 线程）';
$l['server_version_mismatch'] = VM_SHORT.' 创建失败，原因是版本不匹配。从服务器版本（&soft-1;）必须与主服务器版本（&soft-2;）相同。请更新从服务器以避免此错误。';
$l['ms_ver_mismatch'] = '从服务器版本不同。请更新从服务器以避免此错误。';
$l['kvm_ide_limit'] = '由于KVM的限制，您不能同时添加超过4个磁盘和ISO。如果您想添加更多磁盘，请启用virtio';
$l['err_max_size'] = '目前不支持大于或等于2TB的主磁盘大小';
$l['time_err_threshold'] = 'CPU阈值时间必须大于0且为5分钟的倍数';
$l['percent_err_threshold'] = '请输入0到100之间的CPU阈值值';


$l['<title>'] = '添加 '.VM_LONG;
$l['add_vs'] = '添加 '.VM_LONG;
$l['done'] = VM_LONG.' 已创建。返回 <a href="'.$globals['index'].'act=vs">'.VM_LONG.' 概览</a>';
$l['newvs_vpsid'] = VM_SHORT.' ID';
$l['newvs_vps_name'] = VM_SHORT.' 名称';
$l['newvs_rootpass'] = '根密码';
$l['newvs_vnc'] = 'VNC详情';
$l['newvs_vncpass'] = 'VNC密码';
$l['newvs_ips'] = 'IP';
$l['newvs_ips6'] = 'IPv6';
$l['newvs_ips6_subnet'] = 'IPv6子网';
$l['vs_server'] = '服务器';
$l['exp_server'] = '选择要在其上创建 '.VM_SHORT.' 的服务器';
$l['vs_virt'] = '选择虚拟化';
$l['vs_virt_exp'] = '要创建的 '.VM_SHORT.' 的虚拟化技术。';
$l['vs_ser_id'] = 'ID';
$l['vs_user'] = '用户';
$l['vs_user_exp'] = '选择现有用户或添加用户';
$l['user_email'] = '用户邮箱';
$l['user_pass'] = '密码';
$l['add_user'] = '添加用户';
$l['vs_plan'] = '选择计划';
$l['plan_exp'] = '选择预定义的计划';
$l['hvm'] = 'Xen HVM';
$l['hvm_exp'] = '是否要为此 '.VM_SHORT.' 启用完全虚拟化？';
$l['vsos'] = '操作系统';
$l['vsos_exp'] = '选择 '.VM_SHORT.' 的操作系统';
$l['vsiso'] = 'ISO';
$l['vsiso_exp'] = '如果选择了ISO，机器将从该ISO启动';
$l['sec_vsiso'] = '辅助CDROM的ISO';
$l['sec_vsiso_exp'] = '选择辅助CDROM的ISO';
$l['none'] = '无';
$l['rootpass'] = VM_SHORT.' 根密码';
$l['rootpass_exp'] = VM_SHORT.' 的根用户/管理员密码';
$l['randpass'] = '生成另一个随机密码';
$l['hostname'] = '主机名';
$l['hostname_exp'] = '输入 '.VM_SHORT.' 的主机名。例如：www.domain.com';
$l['ip'] = 'IP地址';
$l['ips_exp'] = '您可以从IP池中选择或指定其他IP';
$l['ips6'] = 'IPv6地址';
$l['ips6_exp'] = '您可以指定要分配的IPv6数量';
$l['ips6_subnet'] = 'IPv6子网';
$l['ips6_subnet_exp'] = '您可以指定要分配的IPv6子网数量';
$l['ips_int'] = '内部IP地址';
$l['ips_int_exp'] = '您可以从内部IP地址列表中选择';
$l['add_ip'] = '+';
$l['remove_ip'] = '-';
$l['add_to_ips'] = '<<';
$l['rem_from_ips'] = '移除此IP';
$l['add_dns'] = '+';
$l['hdd'] = '磁盘空间';
$l['exp_hdd'] = VM_SHORT.' 允许的磁盘空间';
$l['mac'] = 'MAC地址';
$l['exp_mac'] = '六组两位十六进制数字，用冒号分隔（:），例如：01:23:45:67:89:ab';
$l['space_gb'] = 'GB';
$l['inodes'] = 'Inodes';
$l['iondisk'] = VM_SHORT.' 内允许的最大Inode数量（即文件）。推荐值：500000+';
$l['gram'] = '保证内存';
$l['exp_gram'] = VM_SHORT.' 将始终拥有的内存量';
$l['ram_mb'] = 'MB';
$l['bram'] = '可突发内存';
$l['exp_bram'] = VM_SHORT.' 可以使用的最大内存量';
$l['swap'] = '交换内存';
$l['exp_swap'] = '';
$l['exp_swap_hvm'] = '如果上面选择了操作系统模板，将尝试创建SWAP分区';
$l['band'] = '带宽';
$l['exp_band'] = VM_SHORT.' 的月度带宽限制。0（零）表示无限制';
$l['band_gb'] = 'GB';
$l['cpunit'] = 'CPU单位';
$l['cpalloc'] = '要分配的CPU单位';
$l['cpalloc_xen'] = '推荐值：256';
$l['cpalloc_openvz'] = '推荐值：1000';
$l['cpalloc_kvm'] = '推荐值：1024';
$l['units'] = '单位';
$l['cores'] = 'CPU核心';
//$l['cpucore_exp'] = '推荐值：4';
$l['percent'] = 'CPU %';
$l['cpuperutil'] = VM_SHORT.' 不允许超过的CPU时间百分比。<br />设置为<b>0</b>表示无限制。';
$l['cpu_threshold'] = 'CPU阈值';
$l['cpu_thre_time'] = 'CPU阈值时间';
$l['cpu_percentage'] = 'CPU阈值百分比';
$l['cpu_thre_time_exp'] = '阈值时间除以5，我们将在每个间隔检查CPU使用情况。如果CPU使用率在每个间隔都超过阈值值，则在最后一个间隔我们将暂停 '.VM_SHORT;
$l['cpu_threshold_exp'] = 'CPU阈值在CPU使用率超过预定义阈值时通知管理员';
$l['io'] = 'I/O优先级';
$l['io0-7'] = '从0-7中选择优先级';
$l['na'] = '网络速度';
$l['na_exp'] = '请指定网络速度';
$l['ubcsettings'] = 'UBC设置';
$l['exp_ubc'] = '如果选中，您将被重定向以编辑 '.VM_SHORT.' 的UBC设置';
$l['submit'] = '添加 '.VM_LONG;
$l['addvoption'] = '高级选项';
$l['addvhide']	= '隐藏高级选项';
$l['network_speed'] = '网络速度';
$l['network_speed_exp'] = '输入0或留空表示无限制。<br />使用选择框进行简单选择';
$l['net_kb'] = 'KB/s';
$l['upload_speed'] = '上传速度';
$l['upload_speed_exp'] = '输入0或留空表示无限制。<br />输入-1表示上传速度与<b>网络速度</b>相同。<br />使用选择框进行简单选择';
$l['no_limit'] = '无限制';
$l['shadow'] = '影子内存';
$l['shadow_exp'] = '推荐值：8 MB';
$l['vncpass'] = 'VNC密码';
$l['vncpass_exp'] = VM_SHORT.' 的VNC密码。点击图标生成新的随机密码';
$l['ha'] = '高可用性';
$l['ha_exp'] = '根据服务器组中的配置为 '.VM_SHORT.' 启用高可用性';
$l['free'] = '免费';
$l['band_suspend']= '带宽暂停';
$l['exp_band_suspend'] = '如果 '.VM_SHORT.' 使用超过指定带宽，则暂停';
$l['tuntap'] = 'Tun/Tap';
$l['ppp'] = 'PPP';
$l['exp_tuntap'] = '为 '.VM_SHORT.' 启用Tun/Tap';
$l['exp_ppp'] = '为 '.VM_SHORT.' 启用PPP（点对点协议）';
$l['osreinstall'] = '操作系统重装限制';
$l['exp_osreinstall'] = '如果您想限制每月操作系统重装的次数。<br />例如：0 - 表示无限制';
$l['changenic'] = '虚拟网络接口类型';
$l['exp_changenic'] = '如果您想更改网络接口类型。选项为默认或E1000。如果启用了<b>virtio</b>，则将使用<b>virtio</b>作为虚拟网卡类型';
$l['add_route'] = '使用路由网络';
$l['exp_add_route'] = '如果选中，将使用路由网络。';
$l['nic_default'] = 'Realtek 8139';
$l['nic_e1000'] = 'Intel E1000';
$l['nic_novell'] = 'Novell NE2000';
$l['nic_i82559er'] = 'Intel i82559er';
$l['nic_pcnet'] = 'AMD PCNET';
$l['nic_ne2k_isa'] = 'Novell E2000 ISA';
$l['change_vif_type'] = '虚拟网络接口仿真类型';
$l['exp_change_vif_type'] = '如果您想更改网络接口仿真类型。选项为<b>netfront</b>或<b>ioemu</b>。';
$l['viftype_ioemu'] = 'ioemu';
$l['viftype_netfront'] = 'netfront（默认）';
$l['disk_driver'] = '选择磁盘驱动';
$l['exp_disk_driver'] = '使用<b>virtio</b>作为virtio驱动<br>使用<b>scsi</b>作为磁盘驱动。Fstrim仅在选择scsi且存储为thin时有效。<br>如果未选择，则选择IDE';
$l['virtio'] = 'virtio';
$l['scsi'] = 'scsi';
$l['usesec_cdrom'] = '启用辅助CD ROM';
$l['exp_usesec_cdrom'] = '启用此选项以将辅助ISO附加到虚拟机';
$l['kvm_cache'] = '磁盘缓存';
$l['exp_kvm_cache'] = '控制缓存机制';
$l['io_mode'] = 'I/O策略';
$l['vnc_keymap'] = 'VNC控制台键映射';
$l['dns'] = 'DNS名称服务器';
$l['exp_dns'] = '如果不清楚，请使用4.2.2.1和4.2.2.2';
$l['mg'] = '媒体组';
$l['mg_exp'] = '如果未分配媒体组，则所有媒体都将对此 '.VM_SHORT.' 可用';

$l['scsi_controller'] = 'SCSI控制器';
$l['apps'] = '应用程序';
$l['apps_exp'] = '选择要安装的Webuzo应用程序';
$l['ploop'] = 'Ploop';
$l['ploop_exp'] = '如果启用，'.VM_SHORT.' 将以Ploop格式创建';
$l['dnsplid'] = 'DNS计划';
$l['dnsplid_exp'] = '为用户选择DNS计划';
$l['disable_ebtables'] = '禁用ebtables';
$l['rdp'] = '启用RDP';
$l['exp_rdp'] = '启用远程桌面连接（适用于Windows '.VM_SHORT.'）';
$l['usenuma'] = '启用NUMA';
$l['enable_cpu_topology'] = 'CPU拓扑';
$l['enable_cpu_topology_exp'] = '指定要分配给 '.VM_SHORT.' 的CPU核心数、线程数和插槽数';
$l['inv_topology'] = '无效的CPU拓扑值。所有指定的拓扑值必须大于零';
$l['inv_cpu_mode'] = '指定的CPU模式无效';
$l['disable_nw_config'] = '禁用网络配置';
$l['exp_disable_nw_config'] = '如果选中，Virtualizor在 '.VM_SHORT.' 重启时将不会配置/重写网络。但是，在创建 '.VM_SHORT.' 时，网络文件将被写入';
$l['fuse'] = '在容器中启用Fuse';
$l['fuse_exp'] = '如果选中，Fuse将在创建新容器时启用';
$l['ipip'] = '在容器中启用IPIP';
$l['ipip_exp'] = '如果选中，IPIP将在创建新容器时启用';
$l['ipgre'] = '在容器中启用IPGRE';
$l['ipgre_exp'] = '如果选中，IPGRE将在创建新容器时启用';
$l['nfs'] = '在容器中启用NFS';
$l['nfs_exp'] = '如果选中，NFS将在创建新容器时启用';
$l['quotaugidlimit'] = '在容器中启用QUOTAUGIDLIMIT';
$l['quotaugidlimit_exp'] = '启用或禁用容器内的每用户和每组磁盘配额。如果值为0或未设置，则容器内的磁盘配额将被禁用且不计入。<br><b>注意：</b>这将重启容器';
$l['iolimit'] = '为容器设置IO带宽限制';
$l['iolimit_exp'] = '如果设置，IO操作在执行IO操作时将不会超过指定的限制';
$l['iopslimit'] = '为容器设置IOPS限制';
$l['iopslimit_exp'] = '如果设置，每秒IO操作将不会超过指定的限制';
$l['serid'] = '服务器ID';
$l['reason'] = '原因';

$l['mac_temp_vncdetails'] = 'MAC地址：';
$l['mail_temp_vnctitle'] = 'VNC详情：';
$l['mail_temp_vncdetails'] = 'VNC详情：';
$l['mail_temp_vncpasswd'] = 'VNC密码：';
$l['mail_temp_vncusername'] = 'VNC用户名：';

$l['reinstall'] = '重装 '.VM_LONG;
$l['cpupin'] = 'CPU亲和性';
$l['cpupin_exp'] = '将特定的CPU核心固定到此 '.VM_SHORT.'。您可以选择多个CPU核心';
$l['cpupin_select'] = '选择vCPU';

$l['pv_on_hvm'] = 'PV-on-HVM驱动支持';
$l['exp_pv_on_hvm'] = 'PV on HVM的主要目标是通过使用特别优化的半虚拟设备驱动程序来提高完全虚拟化HVM客户机的性能';

$l['control_panel'] = 'Web控制面板';
$l['control_panel_exp'] = '此选项将在 '.VM_SHORT.' 中安装选定的Web控制面板';

$l['install_xentools'] = '安装Xentools';

$l['disk'] = '磁盘';
$l['memory'] = '内存';
$l['cpu'] = 'CPU';
$l['network'] = '网络';
$l['gen_set'] = '常规设置';
$l['net_set'] = '网络设置';
$l['con_set'] = '容器设置';
$l['basic_set'] = '基本设置';
$l['misc_set'] = '杂项设置';
$l['cp_set'] = '控制面板';

//进度更新
$l['checking_data'] = '正在检查提交的数据...';
$l['beginning_creation'] = '开始创建 '.VM_SHORT.'...';
$l['building_vps'] = '正在构建 '.VM_SHORT.'...';
$l['setting_mac'] = '正在插入数据库...';
$l['setting_pass'] = '正在设置根密码...';
$l['starting_vps'] = '正在启动 '.VM_SHORT.'...';
$l['verifying_vps'] = '正在验证 '.VM_SHORT.' 构建...';
$l['final_steps'] = '正在执行最后步骤...';
$l['overcomit_free'] = '过度承诺的可用内存';
$l['oversell_free'] = '过度承诺的可用空间';
$l['strength_indicator'] = '强度指示器';
$l['bad'] = '差';
$l['good'] = '好';
$l['strong'] = '强';
$l['short'] = '短';
$l['weak_pass'] = '密码必须至少包含以下3项：大写字母、小写字母、数字或特殊符号';
$l['inv_winpass_chars'] = 'Windows '.VM_SHORT.' 根密码允许的特殊字符为：';
$l['total_iops_sec'] = '每秒总I/O';
$l['read_bytes_sec'] = '读取兆字节/秒';
$l['write_bytes_sec'] = '写入兆字节/秒';
$l['no_space_storage'] = '为存储指定的总空间超过了存储的实际可用空间';
$l['no_space'] = '请指定要分配的空间';
$l['inv_cpu_cores'] = '指定的CPU核心无效';
$l['kvm_vga'] = '启用VGA';
$l['acceleration'] = '启用加速';
$l['acceleration_exp'] = '如果选中，则为 '.VM_SHORT.' 启用2D和3D加速';
$l['cpu_mode'] = 'CPU模式';
$l['user_details'] = '用户详情';
$l['networksettings'] = '网络设置';
$l['ubcsettings'] = 'UBC设置';
$l['exp_ubc'] = '如果选中，您将被重定向以编辑此计划的UBC设置';
$l['dont_add_ptr'] = '不添加PTR记录';
$l['dont_add_ptr_exp'] = '如果在主设置中启用了自动添加PTR记录，则不会为 '.VM_SHORT.' 添加PTR记录';
$l['ptr_record_added'] = 'PTR记录已添加<br/>PDNS服务器 - {{pdns_ser_name}}<br/>主机名 - {{hostname}}<br/>IP - {{ip}}';
$l['ptr_record_error'] = '添加PTR记录时出错';
$l['disable_setup_wizard'] = '从管理面板设置 '.VM_SHORT;
$l['disable_setup_wizard_exp'] = '如果启用，则 '.VM_SHORT.' 将从管理面板创建，用户将无法从最终用户面板设置';

// UBC相关设置
$l['no_bkmemsize'] = '<b>kmemsize</b> 屏障未指定';
$l['no_blockedpages'] = '<b>lockedpages</b> 屏障未指定';
$l['no_bnumproc'] = '<b>numproc</b> 屏障未指定';
$l['no_bphyspages'] = '<b>physpages</b> 屏障未指定';
$l['no_bnumtcpsock'] = '<b>numtcpsock</b> 屏障未指定';
$l['no_bnumflock'] = '<b>numflock</b> 屏障未指定';
$l['no_bnumpty'] = '<b>numpty</b> 屏障未指定';
$l['no_bnumsiginfo'] = '<b>numsiginfo</b> 屏障未指定';
$l['no_btcpsndbuf'] = '<b>tcpsndbuf</b> 屏障未指定';
$l['no_btcprcvbuf'] = '<b>tcprcvbuf</b> 屏障未指定';
$l['no_bothersockbuf'] = '<b>othersockbuf</b> 屏障未指定';
$l['no_bdgramrcvbuf'] = '<b>dgramrcvbuf</b> 屏障未指定';
$l['no_bnumothersock'] = '<b>numothersock</b> 屏障未指定';
$l['no_bdcachesize'] = '<b>dcachesize</b> 屏障未指定';
$l['no_bnumfile'] = '<b>numfile</b> 屏障未指定';
$l['no_bnumiptent'] = '<b>numiptent</b> 屏障未指定';
$l['no_bswappages'] = '<b>swappages</b> 屏障未指定';
$l['no_bdiskinodes'] = '<b>diskinodes</b> 屏障未指定';
$l['no_bdcachsize'] = '<b>dcachsize</b> 屏障未指定';
$l['no_bquotaugidlimit'] = '<b>quotaugidlimit</b> 屏障未指定';
$l['no_bmeminfo'] = '<b>meminfo</b> 屏障未指定';

$l['no_lkmemsize'] = '<b>kmemsize</b> 限制未指定';
$l['no_llockedpages'] = '<b>lockedpages</b> 限制未指定';
$l['no_lnumproc'] = '<b>numproc</b> 限制未指定';
$l['no_lphyspages'] = '<b>physpages</b> 限制未指定';
$l['no_lnumtcpsock'] = '<b>numtcpsock</b> 限制未指定';
$l['no_lnumflock'] = '<b>numflock</b> 限制未指定';
$l['no_lnumpty'] = '<b>numpty</b> 限制未指定';
$l['no_lnumsiginfo'] = '<b>numsiginfo</b> 限制未指定';
$l['no_ltcpsndbuf'] = '<b>tcpsndbuf</b> 限制未指定';
$l['no_ltcprcvbuf'] = '<b>tcprcvbuf</b> 限制未指定';
$l['no_lothersockbuf'] = '<b>othersockbuf</b> 限制未指定';
$l['no_ldgramrcvbuf'] = '<b>dgramrcvbuf</b> 限制未指定';
$l['no_lnumothersock'] = '<b>numothersock</b> 限制未指定';
$l['no_ldcachesize'] = '<b>dcachesize</b> 限制未指定';
$l['no_lnumfile'] = '<b>numfile</b> 限制未指定';
$l['no_lnumiptent'] = '<b>numiptent</b> 限制未指定';
$l['no_lswappages'] = '<b>swappages</b> 限制未指定';
$l['no_ldiskinodes'] = '<b>diskinodes</b> 限制未指定';
$l['no_ldcachsize'] = '<b>dcachsize</b> 限制未指定';
$l['no_lquotaugidlimit'] = '<b>quotaugidlimit</b> 限制未指定';
$l['no_lmeminfo'] = '<b>meminfo</b> 限制未指定';
$l['err_edit_vps'] = '应用UBC设置到 '.VM_SHORT.' 时出错';
$l['err_save_slave'] = '在从服务器上保存 '.VM_SHORT.' 数据时出错。请确保从服务器正常工作';

//主题设置
$l['ubcsetting'] = 'UBC设置';
$l['plan_name'] = '计划';
$l['vps_name'] = VM_SHORT;
$l['id'] = 'ID';
$l['barrier'] = '屏障';
$l['limit'] = '限制';
$l['kmemsize'] = 'kmemsize';
$l['lockedpages'] = 'lockedpages';
$l['numproc'] = 'numproc';
$l['physpages'] = 'physpages';
$l['numtcpsock'] = 'numtcpsock';
$l['numflock'] = 'numflock';
$l['numpty']= 'numpty';
$l['numsiginfo'] = 'numsiginfo';
$l['tcpsndbuf'] = 'tcpsndbuf';
$l['tcprcvbuf'] = 'tcprcvbuf';
$l['othersockbuf'] = 'othersockbuf';
$l['dgramrcvbuf'] = 'dgramrcvbuf';
$l['numothersock'] = 'numothersock';
$l['dcachesize'] = 'dcachesize';
$l['numfile'] = 'numfile';
$l['numiptent'] = 'numiptent';
$l['swappages'] = 'swappages';
$l['diskinodes'] = 'diskinodes';
$l['dcachsize'] = 'dcachsize';
$l['quotaugidlimit1'] = 'quotaugidlimit';
$l['meminfo'] = 'meminfo';
$l['admin_managed'] = '由管理员管理';
$l['exp_admin_managed'] = '如果选中，'.VM_SHORT.' 将无法从最终用户面板管理';
$l['recipe'] = '配方';
$l['recipe_exp'] = '选择在 '.VM_SHORT.' 创建后要执行的配方';
$l['storage_not_supported'] = '当前libguestfs版本不支持QCOW2存储。请按照<a href="'.$globals['docs'].'Llibguestfs_CentOS_7.3_Fix" target="_blank">此</a>指南安装支持的版本';
$l['vm_locked_addvs'] = VM_SHORT.' 正在安装，因此不允许对此 '.VM_SHORT.' 执行任何操作';
$l['err_vzk_storage'] = '选择用于创建附加磁盘的存储应与Virtuozzo KVM的主存储相同';
$l['inv_bpid'] = '选择的备份计划无效！';
$l['same_as_vps_plan'] = '与 '.VM_SHORT.' 计划相同';

//WHMCS错误
$l['no_serverfound'] = '未找到符合您的 '.VM_SHORT.' 配置条件的服务器：';
$l['exclude_server'] = '以下服务器被排除 - ';
$l['no_slaveserver'] = '请使用正确的从服务器名称更正计划。没有从服务器';
$l['sg_notfound'] = '请使用正确的从服务器名称更正<b>产品/服务</b>。找不到服务器组';
$l['virtserver_notfound'] = '请使用正确的从服务器名称更正计划。服务器组中没有符合参数设置的资源且具有虚拟化类型的服务器';
$l['backup_plan'] = '备份计划';
$l['backup_plan_exp'] = '选择预定义的备份计划';

// Webuzo语言
$l['webuzo_mode'] = 'Webuzo应用程序';
$l['webuzo_exp'] = '使用应用程序创建 '.VM_SHORT;
$l['webuzo_ssh_port'] = 'SSH端口';
$l['webuzo_spasswd'] = '根密码';
$l['webuzo_spasswd_p'] = '输入根密码';
$l['webuzo_pd'] = '主域名';
$l['webuzo_pd_p'] = 'example.com';
$l['webuzo_appstack'] = '选择堆栈';
$l['webuzo_scriptlist'] = '选择一个脚本';
$l['webuzo_submit'] = '安装';
$l['webuzo_advanced'] = '高级选项';
$l['webuzo_ns1'] = '名称服务器1';
$l['webuzo_ns1_p'] = '（可选）指定您的名称服务器1';
$l['webuzo_ns2'] = '名称服务器2';
$l['webuzo_ns2_p'] = '（可选）指定您的名称服务器2';
$l['webuzo_apache'] = '选择Apache版本';
$l['webuzo_mysql'] = '选择MYSQL版本';
$l['webuzo_php'] = '选择PHP版本';
$l['webuzo_os'] = '选择操作系统';
$l['webuzo_disabled'] = 'Webuzo安装已被管理员禁用';
$l['webuzo_support_err'] = '应用程序不受支持';
$l['webuzo_spasswd_err'] = '请输入根密码';
$l['webuzo_pd_err'] = '请指定正确的域名';
$l['webuzo_script_err'] = '选择的脚本不在列表中。请重试';
$l['webuzo_stack_err'] = '请选择正确的堆栈进行安装';
$l['mysql_err'] = '请选择MySQL版本';
$l['php_err'] = '请选择PHP版本';
$l['webserver_err'] = '请选择Apache版本';
$l['webuzo_wmp_err'] = '您未选择正确的堆栈版本';
$l['webuzo_wmp_err1'] = '您未选择正确的堆栈版本。此功能在免费版本中不可用';
$l['webuzo_ns1_err'] = $l['webuzo_ns2_err'] = '请输入正确的名称服务器详细信息';
$l['webuzo_os_err'] = '请选择要安装的操作系统';
$l['webuzo_os_invalid'] = '提交的操作系统不是有效的Webuzo操作系统';
$l['webuzo_install_data_lost_warn'] = '您确定要继续安装吗？警告：所有 '.VM_SHORT.' 数据将永久丢失';
$l['webuzo_req_err'] = '无法获取脚本要求';
$l['webuzo_app_err'] = '获取Webuzo应用程序时出错';
$l['webuzo_prim_ip_err'] = '无法获取IP';
$l['webuzo_install_start'] = 'Webuzo安装已在后台启动。安装成功后，将发送电子邮件到给定的邮箱。正在重新加载页面！';
$l['webuzo_dns_err'] = '请填写名称服务器详细信息';
$l['enabling_webuzo'] = '请稍等，正在验证数据';
// Webuzo后台脚本语言
$l['error_reins'] = '重新安装 '.VM_SHORT.' 时出错';
$l['err_install_script'] = '安装脚本时出错';
$l['iscript'] = '正在安装脚本';
$l['iscript_err'] = '无法安装应用程序';
$l['install_cp'] = '正在安装控制面板';
$l['install_recipe'] = '正在执行配方';

//最大IP错误
$l['err_max_ipv4s'] = '每个 '.VM_SHORT.' 允许的最大IPv4数量：';
$l['err_max_ipv6s'] = '每个 '.VM_SHORT.' 允许的最大IPv6数量：';
$l['err_max_ipv6_subnets'] = '每个 '.VM_SHORT.' 允许的最大IPv6子网数量：';
$l['err_max_internal_ips'] = '每个 '.VM_SHORT.' 允许的最大内部IP数量：';

$l['err_negative_val'] = '您提交了一个负值';

$l['enable_discard'] = '启用丢弃';
$l['vlan_tag'] = 'VLAN标签';
$l['vlan_tag_err'] = 'VLAN标签值必须在1 - 4094之间';

//直通
$l['pci'] = 'PCI直通';
$l['pci_exp'] = '这允许 '.VM_SHORT.' 独占访问PCI设备';
$l['assign_pci'] = '正在分配PCI设备';
$l['usb'] = 'USB直通';
$l['usb_exp'] = '这允许 '.VM_SHORT.' 独占访问USB设备';
$l['unable_to_attach'] = "无法附加USB设备";
$l['assign_usb'] = '正在分配USB设备';
$l['passthrough_not_sup'] = '所选节点不支持PCI直通。在将PCI设备分配给 '.VM_SHORT.' 之前，请启用它';
$l['passthrough_gpu'] = 'GPU直通';
$l['exp_passthrough_gpu'] = '如果您正在进行GPU直通，请启用此选项';
$l['no_gpu_roms'] = '节点上没有可用的GPU rom';
$l['gpu_roms'] = 'GPU rom';
$l['exp_gpu_roms'] = 'GPU bios rom文件';

//IP数量
$l['num_ips_exp'] = '您可以指定要分配的IP数量';

$l['rtc'] = 'RTC';
$l['unprivileged'] = '非特权';
$l['unprivileged_exp'] = '创建非特权容器。注意：一旦 '.VM_SHORT.' 创建，您将无法更改非特权状态';
$l['rtc_exp'] = '设置RTC本地时间。默认情况下，Windows启用此功能';

//垂直扩展
$l['enable_ver_scaling'] = '启用垂直扩展';
$l['default'] = '默认';
$l['ver_scale_settings'] = '垂直扩展设置';
$l['ver_ram_settings'] = '内存设置';
$l['ver_max_ram'] = '最大内存（MB）';
$l['ver_max_ram_exp'] = '提供将分配给 '.VM_SHORT.' 的最大内存量';
$l['ver_max_ram_err'] = '请指定最大内存';
$l['ver_ram_threshold'] = '内存阈值（%）';
$l['ver_ram_threshold_exp'] = '如果 '.VM_SHORT.' 的内存使用率大于/小于提供的阈值，将相应地执行扩展';
$l['ver_ram_threshold_err'] = '请指定内存阈值';
$l['ver_ram_inc_by'] = '增加/减少内存（GB）';
$l['ver_ram_inc_by_exp'] = '如果阈值超过/低于阈值，将相应地增加或减少提供的内存（GB）';
$l['ver_ram_inc_by_err'] = '请指定增加/减少内存';

$l['ver_cpu_settings'] = 'CPU设置';
$l['ver_max_cpu'] = '最大CPU核心';
$l['ver_max_cpu_exp'] = '提供将分配给 '.VM_SHORT.' 的最大CPU核心数';
$l['ver_max_cpu_err'] = '请指定最大CPU';
$l['ver_cpu_threshold'] = 'CPU阈值（%）';
$l['ver_cpu_threshold_exp'] = '如果VPS CPU使用率大于/小于提供的阈值，将相应地执行扩展';
$l['ver_cpu_threshold_err'] = '请指定CPU阈值';
$l['ver_cpu_inc_by'] = '增加/减少CPU核心';
$l['ver_cpu_inc_by_exp'] = '如果阈值超过/低于阈值，将相应地增加或减少提供的核心';
$l['ver_cpu_inc_by_err'] = '请指定增加/减少CPU核心';
$l['ver_scaling_note'] = '<ol class="pl-2 mb-1">
<li>垂直扩展仅在基于KVM的虚拟化上受支持。</li>
<li>QEMU版本应大于或等于1.5，要检查QEMU版本，请运行“/usr/bin/virsh version”</li>
<li>目前不支持Windows '.VM_SHORT.' 的垂直扩展</li>
</ol>';
$l['disable_guest_agent'] = '禁用客户代理';
$l['exp_disable_guest_agent'] = '如果启用，则无法在实时机器上执行密码更改、获取RAM和磁盘实际使用情况等操作';
$l['acpi_exp'] = 'ACPI用于向虚拟机发送关机信号。虚拟机需要ACPI以便它们可以对此类信号做出反应';
$l['apic_exp'] = '高级可编程中断控制器通过允许客户直接访问APIC，显著减少了中断延迟和由APIC引起的虚拟机退出次数，从而提高了虚拟化AMD64和Intel 64客户机的性能';
$l['pae_exp'] = '物理地址扩展模式允许32位客户虚拟机寻址超过4 GB的内存';
$l['os_type'] = '选择操作系统类型';
$l['os_type_exp'] = '设置正确的操作系统（OS）允许Proxmox VE优化一些低级参数';
$l['netfilter'] = '设置netfilter模块';
$l['netfilter_exp'] = '此选项用于设置iptables模块的状态';
$l['no_loop_device'] = '服务器上没有可用的空闲循环设备。因此，在基于文件的存储上创建 '.VM_SHORT.' 可能会失败。请释放一些循环设备以创建 '.VM_SHORT;
$l['vga_vram'] = '设置vram';
$l['vga_vram_exp'] = '为VGA设置vram（MB）。如果未定义或设置为0，vram值将设置为8MB';
$l['nested_virt'] = '启用嵌套虚拟化';
$l['nested_virt_exp'] = '此功能是实验性的，仅在Linux客户机上进行了测试。嵌套虚拟机的操作可能不稳定';
$l['ssd_emulation'] = 'SSD仿真';
$l['err_disksize'] = '操作系统模板大小大于 '.VM_SHORT.' 磁盘大小';
$l['server_selection'] = '服务器选择';
$l['add_tpm'] = '启用TPM';
$l['add_tpm_exp'] = '如果选中，将启用TPM';
$l['bios'] = 'Bios';
$l['exp_bios'] = '选择要从中启动的bios。默认将是seabios';
$l['err_invalid_bios'] = '无效的bios';
$l['err_ide_not_support'] = 'UEFI启动不支持Ide总线驱动';
$l['uefi_path_not_found'] = '节点上未安装UEFI';
$l['swtpm_not_found'] = '节点上未安装Swtpm';
$l['webuzo_user_creation_err'] = '未创建Webuzo用户';
$l['machine_type'] = '机器类型';
$l['ssd_does_not_support_kvm'] = '所选磁盘驱动不支持SSD';
$l['ssd_does_not_support_proxk'] = '所选总线驱动不支持SSD';
$l['ssd_emulation_not_support_kvm'] = '您的主机不支持SSD仿真';
$l['uefi_note'] = '要使用UEFI bios创建 '.VM_SHORT.'，请使用ISO，因为我们的默认模板不适用于UEFI bios选项。使用ISO创建 '.VM_SHORT.' 后，将无法调整大小。模板创建不适用于具有UEFI bios的 '.VM_SHORT;
$l['min_ram'] = '最小内存';
$l['min_ram_error'] = '保证内存应大于最小内存';
//额外的CPU标志
$l['extra_cpu_flag'] = '额外的CPU标志';
$l['on'] = '开启';
$l['default'] = '默认';
$l['off'] = '关闭';
$l['md-clear'] = 'md-clear';
$l['md-clear-info'] = '需要让客户操作系统知道MDS是否正确缓解';
$l['pcid'] = 'pcid';
$l['pcid-info'] = '在Westmere、Sandy-和IvyBride Intel CPU上减少Meltdown修复成本';
$l['spec-ctrl'] = 'spec-ctrl';
$l['spec-ctrl-info'] = '允许改进Intel CPU的Spectre缓解';
$l['ssbd'] = 'ssbd';
$l['ssbd-info'] = '为Intel模型提供Speculative Store Bypass保护';
$l['ibpb'] = 'ibpb';
$l['ibpb-info'] = '允许改进AMD CPU的Spectre缓解';
$l['virt-ssbd'] = 'virt-ssbd';
$l['virt-ssbd-info'] = '为AMD模型提供Speculative Store Bypass保护的基础';
$l['amd-ssbd'] = 'amd-ssbd';
$l['amd-ssbd-info'] = '改进AMD CPU的Spectre缓解性能，最好与virt-ssbd一起使用';
$l['amd-no-ssb'] = 'amd-no-ssb';
$l['amd-no-ssb-info'] = '通知客户操作系统主机对AMD CPU的Spectre不脆弱';
$l['pdpe1gb'] = 'pdpe 1gb';
$l['pdpe1gb-info'] = '如果主机硬件支持，允许客户操作系统使用1GB大小的页面';
$l['hv-tlbflush'] = 'hv-tlbflush';
$l['hv-tlbflush-info'] = '在过度承诺的Windows客户机中提高性能。在旧CPU上可能导致客户蓝屏';
$l['hv-evmcs'] = 'hv-evmcs';
$l['hv-evmcs-info'] = '提高嵌套虚拟化的性能。仅在Intel CPU上受支持';
$l['aes'] = 'aes';
$l['aes-info'] = '激活AES指令集以进行硬件加速';
$l['boot_order'] = '启动顺序';
$l['boot_order_exp'] = '选择 '.VM_SHORT.' 将从哪个磁盘启动（注意：此选项仅用于启动顺序更改。磁盘将按照 '.VM_SHORT.' 创建时的顺序考虑）';
$l['load_balancer_settings'] = '负载均衡器设置';
$l['create_as_lb'] = '创建为负载均衡器';
$l['iso_load_balancer'] = '在创建 '.VM_SHORT.' 作为负载均衡器时，您不能设置ISO';
$l['select_lb'] = '选择负载均衡器';
$l['invalid_boot_order'] = '无效的启动顺序。请以disk[0-00]和cdrom[1-2]格式指定启动顺序';
$l['demo_time'] = '添加演示到期时间';
$l['demo_date'] = '添加演示到期日期';
$l['date'] = '演示到期日期';
$l['time'] = '演示到期时间';
$l['inv_time'] = '交易时间无效';
$l['inv_demodate'] = '给定的演示日期无效';
$l['inv_demotime'] = '给定的演示时间无效';
$l['no_date'] = '请输入日期';
$l['demo']='输入演示的日期和时间';
$l['enable_demo']='启用演示';
$l['demo_action'] = '演示操作';
$l['demo_action_exp']= '演示到期后要执行的操作';
$l['demo_suspend_action']= VM_SHORT.' 将被暂停';
$l['demo_delete_action']= VM_SHORT.' 将被删除';
$l['passthrough_invalid_loadbalancer'] = '不允许为负载均衡器附加PCI/USB设备';
$l['single_gpu_only'] = '目前仅允许单个VGA直通';
$l['lb_os_not_supported'] = '此操作系统不受支持。负载均衡器支持Almalinux 8、Almalinux 9、Ubuntu 20、Ubuntu 22';
$l['lb_must_have_unlimited_bw'] = '负载均衡器 '.VM_SHORT.' 不能有带宽限制';
$l['ssh_connection_failed'] = '连接到备份服务器的SSH连接失败';
$l['invalid_zfs_disk_size'] = '对于ZFS存储，不允许使用小数磁盘大小，请使用{{int_size}}而不是{{decimal_size}}';
$l['proxl_qcow_not_supported'] = 'Proxmox LXC不支持qcow2存储格式';
$l['admin_firewall_plan'] = '防火墙计划';
$l['admin_firewall_plan_exp'] = '为 '.VM_SHORT.' 选择防火墙计划';
$l['lb_no_pro_serv'] = '所选服务器没有专业许可证来创建负载均衡器';
$l['lb_no_pro_serv_reg'] = '在所选区域中未找到创建负载均衡器的服务器';
$l['lb_no_pro_serv_grp'] = '在所选服务器组中未找到创建负载均衡器的服务器';
$l['allocated_ram'] = '已分配';
$l['actual_free_ram'] = '实际可用';
$l['disable_autostart'] = '禁用自动启动';
$l['disable_autostart_exp'] = '如果启用，则在节点重启时 '.VM_SHORT.' 将不会自动启动';
$l['obj_backup_err'] = '对象存储备份需要专业许可证';
$l['use_firewall_err'] = '要使用防火墙功能，您需要<b>专业</b>许可证';
?>