<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editvs_lang.php
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


$l['slave_cant'] = '编辑 '.VM_LONG.' 错误';
$l['slave_cant_exp'] = '不允许从服务器编辑 '.VM_LONG.' !';
$l['none_plan'] = '无';
$l['no_hname'] = '请指定主机名';
$l['no_os'] = '请为 '.VM_SHORT.' 选择一个操作系统';
$l['no_rootpass'] = '请指定根密码';
$l['no_disk_space'] = '请指定要分配的磁盘空间';
$l['no_ram'] = '请指定内存';
$l['no_bandwidth'] = '请指定带宽';
$l['no_cpu_units'] = '请指定CPU单位';
$l['no_cpu_cores'] = '请指定核心数';
$l['err_cores_more'] = '不能分配超过可用核心数。可用核心数 : ';
$l['no_percent_cpu'] = '请指定允许的CPU使用百分比';
$l['no_swap_ram'] = '请指定交换内存';
$l['no_burst_ram'] = '请指定可突发的内存限制';
$l['no_inodes'] = '请指定允许的Inode数量';
$l['no_io'] = '请选择I/O优先级';
$l['invalid_os'] = '提交的操作系统无效';
$l['no_ip'] = '请为 '.VM_SHORT.' 指定至少一个IP';
$l['invalid_ip'] = '以下IP无效 : ';
$l['invalid_ip_subnet'] = '以下IP子网无效 : ';
$l['used_ip'] = '以下IP已被另一个 '.VM_SHORT.' 使用 : ';
$l['used_ip_subnet'] = '以下IP子网已被另一个 '.VM_SHORT.' 使用 : ';
$l['err_edit'] = '编辑 '.VM_SHORT.' 时出错';
$l['err_rootpass'] = '设置新 '.VM_SHORT.' 的根密码时出错';
$l['err_vncpass'] = '设置新VNC密码时出错';
$l['no_uid'] = '未选择用户';
$l['invalid_uid'] = '提交的用户不存在';
$l['invalid_hostname'] = '提交的主机名无效';
$l['no_nonalphanumeric'] = 'VNC密码不允许使用非字母数字字符';
$l['no_shadow'] = '未指定影子内存';
$l['err_save_slave'] = '在从服务器上保存 '.VM_SHORT.' 数据时出错。请确保从服务器正常工作。';
$l['err_mac'] = '请指定MAC地址';
$l['err_dns'] = '请指定正确的域名服务器';
$l['err_space'] = '不能缩小 '.VM_SHORT.' 的磁盘空间';
$l['err_effective_space'] = VM_SHORT.' 的有效磁盘空间 (<b>空间 - 交换</b>) 不能小于之前的有效磁盘空间';
$l['no_webuzo_template'] = '此 '.VM_SHORT.' 的操作系统模板不是Webuzo模板。';
$l['inv_kvm_cache'] = '提交的磁盘缓存无效';
$l['inv_io_mode'] = '提交的I/O策略无效';
$l['inv_vnc_keymap'] = '提交的VNC键映射无效';
$l['less_ram'] = '节点没有足够的内存分配给此 '.VM_SHORT.'。请减少分配给此 '.VM_SHORT.' 的内存。';
$l['less_space'] = '节点没有足够的磁盘空间来创建此 '.VM_SHORT;
$l['rescue_edit_no_allowed'] = VM_SHORT.' 处于救援模式。不允许编辑操作';
$l['inv_storage'] = VM_SHORT.' 的存储无效';
$l['inv_bus_driver'] = '无效的磁盘总线驱动';
$l['inv_bus_driver_num_format'] = '不能有重复的总线驱动和编号格式。请更改总线编号或总线驱动';
$l['no_storage'] = '未找到主存储';
$l['inv_space'] = '提交的空间格式无效';
$l['primary_disk_modified'] = '不能修改主磁盘存储或UUID';
$l['mul_storage'] = '此虚拟化类型不支持二级磁盘选项';
$l['inv_cpu_mode'] = '指定的CPU模式无效';
$l['lxc_file_support'] = 'LXC不支持文件级磁盘';
$l['err_topology_calc'] = '指定的CPU核心数应等于拓扑限制（CPU核心数 = 插槽 x 拓扑核心 x 线程）';
$l['vncpass_too_long'] = '指定的VNC密码过长。VNC密码不得超过8个字符。';
$l['inv_bpid'] = '选择的备份计划无效！';
$l['kvm_ide_limit'] = '由于KVM的限制，不能同时添加超过4个磁盘和ISO。如果要添加更多磁盘，请启用virtio';
$l['err_max_size'] = '目前不支持大于或等于2TB的主磁盘大小';

// 主题字符串
$l['<title>'] = '编辑 '.VM_LONG;
$l['heading'] = '编辑 '.VM_LONG;
$l['done'] = VM_LONG.' 已编辑。返回 <a href="'.$globals['index'].'act=vs">'.VM_LONG.' 概览</a>';
$l['vs_server'] = '服务器';
$l['vpsid'] = 'ID';
$l['vpsname'] = 'VID';
$l['exp_server'] = '此 '.VM_SHORT.' 所属的服务器';
$l['vs_ser_id'] = 'ID';
$l['vs_user'] = '用户';
$l['vs_user_exp'] = '选择一个现有用户或添加一个用户';
$l['vs_plan'] = '选择计划';
$l['plan_exp'] = '选择一个预定义的计划';
$l['hvm'] = 'Xen HVM';
$l['hvm_exp'] = '是否要为此 '.VM_SHORT.' 启用完全虚拟化？';
$l['none'] = '无';
$l['unknown'] = '未知';
$l['vsos'] = '操作系统';
$l['vsos_exp'] = '此 '.VM_SHORT.' 的当前操作系统';
$l['vsiso'] = 'ISO';
$l['vsiso_exp'] = '如果选择了ISO，机器将从该ISO启动';
$l['sec_vsiso'] = '二级CDROM的ISO';
$l['sec_vsiso_exp'] = '为二级CDROM选择一个ISO';
$l['rootpass'] = VM_SHORT.' 根密码';
$l['rootpass_exp'] = '如果不想更改当前密码，请留空';
$l['randpass'] = '生成另一个随机密码';
$l['hostname'] = '主机名';
$l['hostname_exp'] = '输入 '.VM_SHORT.' 的主机名。例如：www.domain.com';
$l['ip'] = 'IP地址';
$l['ips_exp'] = '您可以从IP池中选择或指定其他IP';
$l['ips6'] = 'IPv6地址';
$l['ips6_exp'] = '您可以指定要分配的IPv6数量或从IPv6池中选择';
$l['ips6_subnet'] = 'IPv6子网';
$l['ips6_subnet_exp'] = '您可以从IPv6子网列表中选择';
$l['ips_int'] = '内部IP地址';
$l['ips_int_exp'] = '您可以从内部IP地址列表中选择';
$l['add_ip'] = '+';
$l['remove_ip'] = '-';
$l['add_to_ips'] = '<<';
$l['rem_from_ips'] = '删除此IP';
$l['add_dns'] = '+';
$l['hdd'] = '磁盘空间';
$l['exp_hdd'] = VM_SHORT.' 允许的磁盘空间';
$l['space_gb'] = 'GB';
$l['inodes'] = 'Inodes';
$l['iondisk'] = VM_SHORT.' 内允许的最大Inode数量（即文件数）。推荐值：500000+';
$l['gram'] = '保证内存';
$l['exp_gram'] = VM_SHORT.' 将始终拥有的内存量';
$l['ram_mb'] = 'MB';
$l['bram'] = '可突发内存';
$l['exp_bram'] = VM_SHORT.' 可以使用的最大内存量';
$l['swap'] = '交换内存';
$l['exp_swap'] = '';
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
$l['io'] = 'I/O优先级';
$l['io0-7'] = '从0-7中选择优先级';
$l['na'] = '网络速度';
$l['na_exp'] = '请指定网络速度';
$l['shadow'] = '影子内存';
$l['shadow_exp'] = '推荐值：8 MB';
$l['ubcsettings'] = 'UBC设置';
$l['exp_ubc'] = '如果选中，您将被重定向以编辑 '.VM_SHORT.' 的UBC设置';
$l['submit'] = '编辑 '.VM_LONG;
$l['network_speed'] = '网络速度';
$l['network_speed_exp'] = '输入0或留空表示无限制。<br />使用选择框以方便选择';
$l['net_kb'] = 'KB/s';
$l['upload_speed'] = '上传速度';
$l['upload_speed_exp'] = '输入0或留空表示无限制。<br />输入-1表示上传速度与<b>网络速度</b>相同。<br />使用选择框以方便选择';
$l['no_limit'] = '无限制';
$l['vncpass'] = 'VNC密码';
$l['vncpass_exp'] = '如果不想更改当前密码，请留空。点击图标生成新的随机密码';
$l['boot_order'] = '启动顺序';
$l['free'] = '免费';
$l['band_suspend']= '带宽暂停';
$l['exp_band_suspend'] = '如果 '.VM_SHORT.' 使用的带宽超过允许限制，则暂停';
$l['addvoption'] = '高级选项';
$l['addvhide']	= '隐藏高级选项';
$l['mac'] = 'MAC地址';
$l['mac_suc'] = '更改将在您重启 '.VM_SHORT.' 后生效';
$l['exp_mac'] = '六组由冒号(:)分隔的两位十六进制数字，例如 01:23:45:67:89:ab';
$l['tuntap'] = 'Tun/Tap';
$l['ppp'] = 'PPP';
$l['exp_tuntap'] = '为 '.VM_SHORT.' 启用Tun/Tap';
$l['exp_ppp'] = '为 '.VM_SHORT.' 启用PPP（点对点协议）';
$l['dns'] = 'DNS域名服务器';
$l['exp_dns'] = '如果不确定，请使用4.2.2.1和4.2.2.2';
$l['reboot'] = '更改将在您停止并启动 '.VM_SHORT.' 后生效';
$l['osreinstall'] = '操作系统重装限制';
$l['exp_osreinstall'] = '如果您想限制每月操作系统重装的次数。<br />例如：0 - 表示无限制';
$l['changenic'] = '虚拟网络接口类型';
$l['exp_changenic'] = '如果您想更改网络接口类型。选项为默认或E1000';
$l['add_route'] = '设置默认路由';
$l['exp_add_route'] = '如果您想显式设置IP的默认路由，请勾选此项。';
$l['nic_default'] = 'Realtek 8139（默认）';
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
$l['exp_disk_driver'] = '使用<b>virtio</b>作为virtio驱动<br>使用<b>scsi</b>作为磁盘驱动。Fstrim仅在选择scsi且存储为精简时有效。<br>如果未选择，则默认选择IDE';	
$l['virtio'] = 'virtio';
$l['scsi'] = 'scsi';
$l['kvm_cache'] = '磁盘缓存';
$l['exp_kvm_cache'] = '控制缓存机制';
$l['io_mode'] = 'I/O策略';
$l['vnc_keymap'] = 'VNC控制台键映射';
$l['mg'] = '媒体组';
$l['mg_exp'] = '如果未分配媒体组，则所有媒体将对此 '.VM_SHORT.' 可用。';
$l['apps'] = '应用程序';
$l['apps_exp'] = '选择您要安装的Webuzo应用程序';
$l['overcomit_free'] = '过度承诺的可用内存';
$l['oversell_free'] = '过度承诺的可用空间';
$l['ploop'] = 'Ploop';
$l['ploop_exp'] = '如果启用，'.VM_SHORT.' 将以Ploop格式创建';
$l['create_date'] = VM_SHORT.' 创建日期';
$l['last_edited'] = '最后编辑';
$l['cpupin'] = 'CPU亲和性';
$l['cpupin_exp'] = '将特定的CPU核心固定到此 '.VM_SHORT.'。您可以选择多个CPU核心。';
$l['cpupin_select'] = '选择vCPU';
$l['pv_on_hvm'] = 'PV-on-HVM驱动支持';
$l['exp_pv_on_hvm'] = 'PV on HVM的主要目标是通过使用特别优化的半虚拟设备驱动来提高完全虚拟化HVM客户机的性能';
$l['strength_indicator'] = '强度指示器';
$l['bad'] = '差';
$l['good'] = '好';
$l['strong'] = '强';
$l['short'] = '短';
$l['weak_pass'] = '密码必须包含以下至少3项：大写字母、小写字母、数字或特殊符号';
$l['inv_winpass_chars'] = 'Windows '.VM_SHORT.' 根密码允许的特殊字符为：';
$l['total_iops_sec'] = '每秒总I/O';
$l['read_bytes_sec'] = '每秒读取兆字节';
$l['write_bytes_sec'] = '每秒写入兆字节';
$l['vps_id'] = '选择 '.VM_SHORT;
$l['virtio_warning'] = '启用/禁用virtio可能会导致 '.VM_SHORT.' 发生不可预测的变化。您仍然要继续吗？';
$l['rem_storage'] = '删除此存储';
$l['del_storage_warn'] = '您确定要删除此磁盘吗？所有数据将丢失！';
$l['alert_failure'] = '执行失败';
$l['title_start'] = '启动';
$l['title_stop'] = '停止';
$l['title_restart'] = '重启';
$l['title_poweroff'] = '关机';
$l['title_vnc'] = 'VNC';
$l['title_suspend'] = VM_SHORT.' 暂停';
$l['title_unsuspend'] = VM_SHORT.' 恢复';
$l['title_suspend_net'] = '网络暂停';
$l['title_unsuspend_net'] = '网络恢复';
$l['kvm_vga'] = '启用VGA';
$l['acceleration'] = '启用加速';
$l['acceleration_exp'] = '如果选中，则将为 '.VM_SHORT.' 启用2D和3D加速';
$l['cpu_mode'] = 'CPU模式';
$l['disable_ebtables'] = '禁用ebtables';
$l['rdp'] = '启用RDP';
$l['exp_rdp'] = '启用远程桌面连接（适用于Windows '.VM_SHORT.'）';
$l['admin_managed'] = '由管理员管理';
$l['exp_admin_managed'] = '如果选中，'.VM_SHORT.' 不能从最终用户面板管理。';
$l['error'] = '错误';
$l['lockedips'] = '以下IP被锁定';
$l['backup_plan'] = '备份计划';
$l['backup_plan_exp'] = '选择预定义的备份计划';
$l['enable_cpu_topology'] = 'CPU拓扑';
$l['enable_cpu_topology_exp'] = '指定要分配给 '.VM_SHORT.' 的CPU核心数、线程数和插槽数';
$l['inv_topology'] = '无效的CPU拓扑值。所有指定的拓扑值必须大于零';
$l['inv_cpu_mode'] = '指定的CPU模式无效';
$l['disable_nw_config'] = '禁用网络配置';
$l['exp_disable_nw_config'] = '如果选中，Virtualizor在 '.VM_SHORT.' 重启时将不会配置/重写网络。但是，在创建 '.VM_SHORT.' 时，网络文件将被写入。';
$l['err_vzk_storage'] = '选择用于创建附加磁盘的存储应与Virtuozzo KVM的主存储相同';
$l['fuse'] = '在容器中启用Fuse';
$l['fuse_exp'] = '如果选中，Fuse将在创建新容器时启用。';
$l['ipip'] = '在容器中启用IPIP';
$l['ipip_exp'] = '如果选中，IPIP将在创建新容器时启用。';
$l['ipgre'] = '在容器中启用IPGRE';
$l['ipgre_exp'] = '如果选中，IPGRE将在创建新容器时启用。';
$l['nfs'] = '在容器中启用NFS';
$l['nfs_exp'] = '如果选中，NFS将在创建新容器时启用。';
$l['quotaugidlimit'] = '在容器中启用QUOTAUGIDLIMIT';
$l['quotaugidlimit_exp'] = '启用或禁用容器内的每用户和每组磁盘配额。如果值为0或未设置，则容器内的磁盘配额被禁用且不计入。<br><b>注意：</b>这将重启容器。';
$l['iolimit'] = '为容器设置IO带宽限制';
$l['iolimit_exp'] = '如果设置，IO操作在执行IO操作时将不会超过指定的限制。';
$l['iopslimit'] = '为容器设置IOPS限制';
$l['iopslimit_exp'] = '如果设置，每秒IO操作将不会超过指定的限制。';
$l['usenuma'] = '启用NUMA';
$l['install_xentools'] = '安装Xentools';

$l['disk'] = '磁盘';
$l['memory'] = '内存';
$l['cpu'] = 'CPU';
$l['network'] = '网络';
$l['gen_set'] = '常规设置';
$l['net_set'] = '网络设置';
$l['con_set'] = '容器设置';
$l['new_editvs_note'] = '点击此处访问新的管理 '.VM_SHORT.' 向导';
$l['same_as_vps_plan'] = '与 '.VM_SHORT.' 计划相同';
$l['ha'] = '高可用性';
$l['ha_exp'] = '为 '.VM_SHORT.' 启用高可用性，如服务器组中配置';

// 最大IP错误
$l['err_max_ipv4s'] = '每个 '.VM_SHORT.' 允许的最大IPv4数量 : ';
$l['err_max_ipv6s'] = '每个 '.VM_SHORT.' 允许的最大IPv6数量 : ';
$l['err_max_ipv6_subnets'] = '每个 '.VM_SHORT.' 允许的最大IPv6子网数量 : ';
$l['err_max_internal_ips'] = '每个 '.VM_SHORT.' 允许的最大内部IP数量 : ';

$l['err_negative_val'] = '您提交了一个负值';
$l['inv_cpu_cores'] = '指定的CPU核心无效';