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

$l['slave_cant'] = '管理 '.VM_LONG.' 错误';
$l['slave_cant_exp'] = '从服务器不允许访问管理 '.VM_LONG.' 页面！';
$l['none_plan'] = '无';
$l['no_hname'] = '请指定主机名';
$l['no_os'] = '请为 '.VM_SHORT.' 选择一个操作系统';
$l['no_rootpass'] = '请指定根密码';
$l['no_disk_space'] = '请指定要分配的磁盘空间';
$l['no_ram'] = '请指定内存';
$l['no_bandwidth'] = '请指定带宽';
$l['no_cpu_units'] = '请指定CPU单位';
$l['no_cpu_cores'] = '请指定核心数';
$l['no_percent_cpu'] = '请指定允许的CPU利用率百分比';
$l['no_swap_ram'] = '请指定交换内存';
$l['no_burst_ram'] = '请指定可突发的内存限制';
$l['no_inodes'] = '请指定允许的Inode数量';
$l['no_io'] = '请选择I/O优先级';
$l['invalid_os'] = '您提交的操作系统无效';
$l['no_ip'] = '请为 '.VM_SHORT.' 指定至少一个IP';
$l['invalid_ip'] = '以下IP无效：';
$l['invalid_ip_subnet'] = '以下IP子网无效：';
$l['used_ip'] = '以下IP已被另一个 '.VM_SHORT.' 使用：';
$l['used_ip_subnet'] = '以下IP子网已被另一个 '.VM_SHORT.' 使用：';
$l['err_edit'] = '编辑 '.VM_SHORT.' 时出错';
$l['err_rootpass'] = '设置新 '.VM_SHORT.' 的根密码时出错';
$l['err_vncpass'] = '设置新VNC密码时出错';
$l['vncpass_too_long'] = 'VNC密码长度过长，支持的最大长度为：';
$l['no_uid'] = '未选择用户';
$l['invalid_uid'] = '您提交的用户不存在';
$l['invalid_hostname'] = '您提交的主机名无效';
$l['no_nonalphanumeric'] = 'VNC密码不允许使用非字母数字字符';
$l['no_shadow'] = '您未指定影子内存';
$l['err_save_slave'] = '在从服务器上保存 '.VM_SHORT.' 数据时出错。请确保从服务器正常工作。';
$l['err_mac'] = '无效的MAC地址';
$l['err_dns'] = '请指定正确的域名服务器';
$l['err_space'] = '您不能缩小 '.VM_SHORT.' 的磁盘空间';
$l['err_effective_space'] = VM_SHORT.' 的有效磁盘空间（<b>空间 - 交换空间</b>）不能小于之前的有效磁盘空间';
$l['err_shrink_swap'] = '无法缩小交换空间！请扩展根空间以调整交换空间。';
$l['no_webuzo_template'] = '此 '.VM_SHORT.' 的操作系统模板不是Webuzo模板。';
$l['inv_kvm_cache'] = '提交的磁盘缓存无效';
$l['inv_io_mode'] = '提交的I/O策略无效';
$l['inv_io_uring'] = '节点不支持IO Uring模式';
$l['inv_vnc_keymap'] = '提交的VNC键映射无效';
$l['percent_err_threshold'] = '请输入0到100之间的CPU阈值';
$l['time_err_threshold'] = 'CPU阈值时间必须大于0且为5分钟的倍数';
$l['less_ram'] = '节点没有足够的内存分配给此 '.VM_SHORT.'。请减少分配给此 '.VM_SHORT.' 的内存。';
$l['less_space'] = '节点没有足够的磁盘空间来创建此 '.VM_SHORT;
$l['rescue_edit_no_allowed'] = VM_SHORT.' 处于救援模式。不允许编辑操作';
$l['inv_storage'] = VM_SHORT.' 的存储无效';
$l['no_storage'] = '找不到主存储';
$l['inv_space'] = '您提交的空间格式无效';
$l['primary_disk_modified'] = '您不能修改主磁盘存储或UUID';
$l['mul_storage'] = '此虚拟化类型不支持二级磁盘选项';
$l['inv_cpu_mode'] = '指定的CPU模式无效';
$l['inv_topology'] = '无效的CPU拓扑值';
$l['no_root'] = '未指定根密码';
$l['no_conf'] = '未指定确认密码';
$l['err_topology_calc'] = '指定的CPU核心数应等于拓扑限制（CPU核心数 = 插槽数 x 拓扑核心数 x 线程数）';
$l['inv_bpid'] = '选择的备份计划无效！';
$l['kvm_ide_limit'] = '由于KVM的限制，您不能同时添加超过4个磁盘和ISO。如果您想添加更多磁盘，请启用virtio';
$l['inv_bus_driver'] = '无效的磁盘总线驱动';
$l['inv_bus_driver_num_format'] = '不能有重复的总线驱动和编号格式。请更改总线编号或总线驱动';
$l['err_max_size'] = '目前不支持大于或等于2TB的主磁盘大小';
$l['lockedips'] = '以下IP已被锁定';

// 主题字符串
$l['<title>'] = '管理 '.VM_SHORT;
$l['heading'] = '管理 '.VM_LONG;
$l['power'] = '管理';
$l['general'] = '常规选项';
$l['vps_info'] = VM_SHORT.' 信息';
$l['resources'] =  '管理资源';
$l['storage'] = '存储';
$l['ram'] =  '内存';
$l['cpu'] = 'CPU';
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
$l['conf_apply_plan'] = '是否将所选计划的值应用于此 '.VM_SHORT.'？';
$l['hvm'] = 'Xen HVM';
$l['hvm_exp'] = '您想为此 '.VM_SHORT.' 启用完全虚拟化吗？';
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
$l['iondisk'] = VM_SHORT.' 内允许的最大Inode数（即文件数）。推荐值：500000+';
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
$l['err_cores_more'] = '不能分配超过可用核心数的核心。<br> 可用核心数：';
//$l['cpucore_exp'] = '推荐值：4';
$l['percent'] = 'CPU %';
$l['cpu_threshold'] = 'CPU阈值';
$l['cpu_thre_time'] = 'CPU阈值时间';
$l['cpu_percentage'] = 'CPU阈值百分比';
$l['cpu_thre_time_exp'] = '阈值时间除以5，我们将在每个间隔检查CPU使用情况。如果每个间隔的CPU使用率超过阈值值，则在最后一个间隔我们将暂停 '.VM_SHORT;
$l['cpu_threshold_exp'] = '当CPU使用率超过预定义的阈值时，CPU阈值会通知管理员';
$l['cpuperutil'] = '相应的 '.VM_SHORT.' 不允许超过的CPU时间百分比。<br />设置为<b>0</b>表示无限制。';
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
$l['network_speed_exp'] = '输入0或留空表示无限制。<br />使用选择框进行简单选择';
$l['net_kb'] = 'KB/s';
$l['upload_speed'] = '上传速度';
$l['upload_speed_exp'] = '输入0或留空表示无限制。<br />输入-1表示上传速度与<b>网络速度</b>相同。<br />使用选择框进行简单选择';
$l['no_limit'] = '无限制';
$l['vncpass'] = 'VNC密码';
$l['vncpass_exp'] = '如果不想更改当前密码，请留空。点击图标生成新的随机密码';
$l['ha'] = '高可用性';
$l['ha_exp'] = '根据服务器组中的配置，为 '.VM_SHORT.' 启用高可用性';
$l['boot_order'] = '启动顺序';
$l['free'] = '免费';
$l['band_suspend']= '带宽暂停';
$l['exp_band_suspend'] = '如果 '.VM_SHORT.' 使用的带宽超过允许的限制，则暂停它';
$l['addvoption'] = '高级选项';
$l['addvhide']	= '隐藏高级选项';
$l['mac'] = '设置MAC地址';
$l['mac_suc'] = '更改将在您重新启动 '.VM_SHORT.' 后生效';
$l['exp_mac'] = '六组两位十六进制数字，用冒号分隔 (:)，例如 01:23:45:67:89:ab';
$l['tuntap'] = 'Tun/Tap';
$l['ppp'] = 'PPP';
$l['exp_tuntap'] = '为 '.VM_SHORT.' 启用Tun/Tap';
$l['exp_ppp'] = '为 '.VM_SHORT.' 启用PPP（点对点协议）';
$l['fuse'] = '在容器中启用Fuse';
$l['fuse_exp'] = '如果选中，Fuse将在容器中启用。';
$l['ipip'] = '在容器中启用IPIP';
$l['ipip_exp'] = '如果选中，IPIP将在容器中启用。';
$l['ipgre'] = '在容器中启用IPGRE';
$l['ipgre_exp'] = '如果选中，IPGRE将在容器中启用。';
$l['nfs'] = '在容器中启用NFS';
$l['nfs_exp'] = '如果选中，NFS将在容器中启用。';
$l['quotaugidlimit'] = '在容器中启用QUOTAUGIDLIMIT';
$l['quotaugidlimit_exp'] = '启用或禁用容器内的每用户和每组磁盘配额。如果值为0或未设置，则容器内的磁盘配额被禁用且不计入。<br><b>注意：</b>这将重新启动容器。';
$l['iolimit'] = '为容器设置IO带宽限制';
$l['iolimit_exp'] = '如果设置，执行IO操作时IO操作不会超过指定的限制。';
$l['iopslimit'] = '为容器设置IOPS限制';
$l['iopslimit_exp'] = '如果设置，每秒IO操作不会超过指定的限制。';
$l['dns'] = 'DNS域名服务器';
$l['exp_dns'] = '如果不清楚，请使用4.2.2.1和4.2.2.2';
$l['reboot'] = '更改将在您停止并启动 '.VM_SHORT.' 后生效';
$l['osreinstall'] = '操作系统重装限制';
$l['exp_osreinstall'] = '如果您想限制每月操作系统重装的次数。<br />例如：0 - 表示无限制';
$l['changenic'] = '虚拟网络接口类型';
$l['exp_changenic'] = '如果您想更改网络接口类型。选项为默认或E1000';
$l['add_route'] = '设置默认路由';
$l['exp_add_route'] = '如果您想显式设置IP的默认路由，请选中此项。';
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
$l['exp_disk_driver'] = '使用<b>virtio</b>作为virtio驱动<br>使用<b>scsi</b>作为磁盘驱动。Fstrim仅在选择scsi且存储为精简配置时有效。<br>如果未选中任何选项，则选择IDE';
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
$l['weak_pass'] = '密码必须至少包含以下3项：大写字母、小写字母、数字或特殊符号';
$l['inv_winpass_chars'] = 'Windows '.VM_SHORT.' 根密码允许的特殊字符为：';
$l['total_iops_sec'] = '每秒总I/O';
$l['read_bytes_sec'] = '读取兆字节/秒';
$l['write_bytes_sec'] = '写入兆字节/秒';
$l['vps_id'] = '选择 '.VM_SHORT;
$l['virtio_warning'] = '启用virtio可能会导致 '.VM_SHORT.' 发生不可预测的变化。您仍然要启用它吗？注意：您将无法稍后禁用它！';
$l['rem_storage'] = '删除此存储';
$l['del_storage_warn'] = '您确定要删除此磁盘吗？所有数据将丢失！';
$l['alert_failure'] = '执行失败';
$l['title_start'] = '启动';
$l['title_stop'] = '停止';
$l['title_restart'] = '重启';
$l['title_poweroff'] = '关机';
$l['title_novnc'] = 'NoVNC';
$l['title_javavnc'] = 'JAVA VNC';
$l['title_suspend'] = VM_SHORT.' 暂停';
$l['title_unsuspend'] = VM_SHORT.' 取消暂停';
$l['title_suspend_net'] = '网络暂停';
$l['title_unsuspend_net'] = '网络取消暂停';
$l['kvm_vga'] = '启用VGA';
$l['acceleration'] = '启用加速';
$l['acceleration_exp'] = '如果选中，则将为 '.VM_SHORT.' 启用2D和3D加速';
$l['cpu_mode'] = 'CPU模式';
$l['cpu_topology'] = 'CPU拓扑';
$l['manage_ips'] = '管理IP';
$l['settings'] =  '设置';
$l['general'] = '常规';
$l['advanced'] = '高级选项';
$l['launch_vnc'] = '启动VNC';
$l['title_vnc'] = 'VNC';
$l['close'] = '关闭';
$l['save'] = '保存';
$l['rescue_mode'] = '救援模式';
$l['enable_rescue'] = '启用救援模式';
$l['disable_rescue'] = '禁用救援模式';
$l['rescue_exp'] = '救援模式提供了从另一个磁盘启动小型Linux环境的能力，以便您可以救援主Linux '.VM_SHORT.' 或备份其中的文件';
$l['rescue_enabled'] = '救援模式当前已启用。';
$l['rescue_disabled'] = '救援模式当前已禁用。';
$l['conf_pass'] = '确认密码';
$l['resource_utilization'] = '资源利用率';
$l['band_used'] = '已用带宽';
$l['band_limit'] = '带宽限制';
$l['disk'] = '磁盘';
$l['edit_vps'] = '编辑 '.VM_SHORT;
$l['edit_user'] = '编辑用户';
$l['user_details'] = '用户详情';
$l['user_email'] = '用户邮箱';
$l['user_pass'] = '密码';
$l['dnsplid'] = 'DNS计划';
$l['add_user'] = '添加用户';
$l['media'] = '媒体';
$l['network'] = '网络';
$l['other'] = '其他';
$l['primary_ip'] = '主IP';
$l['disk_space'] = '总磁盘空间';
$l['vid'] = 'VID';
$l['id'] = 'ID';
$l['num_ipv4'] = 'IPv4 IP数量';
$l['num_ipv6'] = 'IPv6 IP数量';
$l['disable_ebtables'] = '禁用ebtables';
$l['vnc_info'] = 'VNC信息';
$l['vnc_ip'] = 'VNC IP';
$l['vnc_port'] = 'VNC端口';
$l['file_system'] = '文件系统';
$l['utilized'] = '已使用';
$l['avaiable'] = '可用';
$l['no_user'] = '您未指定用户邮箱';
$l['no_user_pass'] = '您未指定用户密码';
$l['invalid_email'] = '用户邮箱地址无效';
$l['emailexist'] = '您指定的新用户邮箱已存在';
$l['exp_mac'] = '如果未设置，则默认使用主IP的Mac';
$l['clock'] = '时钟类型';
$l['enabling_rescue'] = '正在启用救援模式';
$l['disabling_rescue'] = '正在禁用救援模式';
$l['user_done'] = '用户设置已保存';
$l['adv_done'] = '高级选项已成功保存';
$l['rescue_enable_success'] = '救援模式已成功启用，正在重新加载页面！';
$l['rescue_disable_success'] = '救援模式已成功禁用，正在重新加载页面！';
$l['status_online'] = '在线';
$l['status_suspended'] = '已暂停'; 
$l['status_offline'] = '离线';
$l['save_all'] = '保存设置';
$l['admin_managed'] = '由管理员管理';
$l['exp_admin_managed'] = '如果选中，'.VM_SHORT.' 无法从最终用户面板管理。';
$l['notes'] = '备注';
$l['rdp'] = '启用RDP';
$l['exp_rdp'] = '启用远程桌面连接（适用于Windows '.VM_SHORT.'）';
$l['title_bwreset'] = '重置带宽';
$l['done_bwreset'] = '带宽重置成功！';
$l['error'] = '错误';
$l['edit_user'] = '更改用户';
$l['change_password'] = '更改密码';
$l['change_user'] = '更改用户';
$l['ipaddresses'] = 'IPv4地址';
$l['ipaddresses_ip6'] = 'IPv6地址';
$l['ipaddresses_ip6subnet'] = 'IPv6子网';
$l['allocated_ram'] = '已分配内存';
$l['used_ram'] = '已用内存';
$l['disk_tuning'] = '磁盘调优';
$l['video'] = '视频';
$l['macaddr'] = 'MAC地址';
$l['nic'] = '网络接口类型';
$l['boot_order'] = '启动顺序';
$l['cpu_tune'] = 'CPU调优';
$l['iso'] = 'ISO';
$l['conf_bwreset'] = '您确定要重置此 '.VM_SHORT.' 的带宽吗？';
$l['disable_nw_config'] = '禁用网络配置';
$l['exp_disable_nw_config'] = '如果选中，Virtualizor在 '.VM_SHORT.' 重启时将不会配置/重写网络。但是，在创建 '.VM_SHORT.' 时，网络文件将被写入。';
$l['managevps_beta_warn'] = '注意：此功能处于测试阶段，将来将替换编辑 '.VM_SHORT.' 页面';
$l['svs_admin_login'] = '进入 '.VM_SHORT.' 面板';
$l['manage_ipv6_subnets'] = '管理IPv6子网';
$l['managevdf'] = '域名转发';
$l['edit'] = '编辑';
$l['add_an_ipv6_addr'] = '添加一个IPv6地址';
$l['manage_subnets_add_ip'] = '添加IP';
$l['back'] = '返回';
$l['show'] = '显示';
$l['entries'] = '条目';
$l['search'] = '搜索';
$l['showing'] = '显示';
$l['to'] = '到';
$l['of'] = '的';
$l['no_data_avail'] = '表中无可用数据';
$l['filtered_from'] = '从以下筛选';
$l['total_entries'] = '总条目';
$l['first'] = '第一';
$l['last'] = '最后';
$l['next'] = '下一个';
$l['previous'] = '上一个';
$l['old_edit_wizard'] = '旧编辑向导';

$l['scsi_controller'] = 'SCSI控制器';

$l['mng_inv_ipaddress'] = '指定的IP不属于您';
$l['mng_ipv6_invalid'] = 'IPv6地址存在错误';
$l['mng_done'] = 'IP已成功保存';
$l['usenuma'] = '启用NUMA';
$l['old_editvs_note'] = '点击此处访问旧版编辑 '.VM_SHORT.' 向导';
$l['sshkeys'] = 'SSH密钥';
$l['sshkey_no_keys'] = '找不到SSH密钥';
$l['sshkey_done'] = 'SSH密钥已成功添加，SSH密钥将在 '.VM_SHORT.' 关闭并启动后应用';
$l['sshkey_err_add'] = '添加SSH密钥时出错';

// 救援模式语言
$l['passwords_do_not_match'] = '指定的密码和确认密码不匹配';
$l['starting_enable_rescue'] = '正在启用救援模式';
$l['starting_disable_rescue'] = '正在禁用救援模式';
$l['vm_locked_enable_rescue'] = VM_SHORT.' 救援模式正在启用，因此不允许对此 '.VM_SHORT.' 执行任何操作';
$l['vm_locked_install_script'] = VM_SHORT.' 正在重新安装，因此不允许对此 '.VM_SHORT.' 执行任何操作';
$l['vm_locked_disable_rescue'] = VM_SHORT.' 救援模式正在禁用，因此不允许对此 '.VM_SHORT.' 执行任何操作';
$l['err_enable_rescue'] = '启用救援时出现了一些错误';
$l['err_disable_rescue'] = '禁用救援时出现了一些错误';
$l['delete'] = '删除';
$l['rescue_not_enabled'] = '救援模式未启用';
$l['no_task_found'] = '数据库中未找到任务';
$l['success_enable_rescue'] = '救援模式已成功启用。正在重新加载页面。';
$l['success_disable_rescue'] = '救援模式已成功禁用。正在重新加载页面。';
$l['err_vps_locked'] = VM_SHORT.' 已锁定，因此不允许对此 '.VM_SHORT.' 执行任何操作。';
$l['inv_var_passed'] = '从最终用户传递的无效变量！！';
$l['pass_strength_error'] = '密码强度不应小于 ';

$l['rebuildvs'] = '重装操作系统';
$l['select_os'] = '为 '.VM_SHORT.' 选择操作系统';
$l['new_pass'] = '新密码';
$l['retype_pass'] = '重新输入密码';
$l['reinstall'] = '重装';
$l['eu_send_rebuild_email'] = '通知用户';
$l['eu_send_rebuild_email_exp'] = '如果选中，'.VM_SHORT.' 用户将在 '.VM_SHORT.' 重建后收到电子邮件';
$l['pass_match'] = '密码不匹配';
$l['rebuild_data_lost_warn'] = '您确定要重建 '.VM_SHORT.' 吗？警告：'.VM_SHORT.' 上的现有数据将永久丢失。';
$l['copy_pass'] = '请将密码复制到安全的地方';
$l['checking_data'] = '正在检查提交的数据...';
$l['remove_old_ssh_keys'] = '删除旧的SSH密钥';
$l['remove_old_ssh_keys_exp'] = '如果选中，则将从 '.VM_SHORT.' 中删除旧的SSH密钥';

$l['backup_plan'] = '备份计划';
$l['same_as_vps_plan'] = '与 '.VM_SHORT.' 计划相同';
$l['install_xentools'] = '安装Xentools';

// Webuzo 语言
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
$l['webuzo_ns1'] = '域名服务器1';
$l['webuzo_ns1_p'] = '（可选）指定您的域名服务器1';
$l['webuzo_ns2'] = '域名服务器2';
$l['webuzo_ns2_p'] = '（可选）指定您的域名服务器2';
$l['webuzo_apache'] = '选择Apache版本';
$l['webuzo_mysql'] = '选择MYSQL版本';
$l['webuzo_php'] = '选择PHP版本';
$l['webuzo_os'] = '选择操作系统';
$l['webuzo_disabled'] = 'Webuzo安装已被管理员禁用';
$l['webuzo_support_err'] = '应用程序不支持。';
$l['webuzo_sshport_err'] = '请输入SSH端口';
$l['webuzo_spasswd_err'] = '请输入根密码';
$l['webuzo_pd_err'] = '请指定正确的域名';
$l['webuzo_script_err'] = '所选脚本不在列表中。请重试';
$l['webuzo_stack_err'] = '请选择要安装的正确堆栈';
$l['mysql_err'] = '请选择MySQL版本';
$l['php_err'] = '请选择PHP版本';
$l['webserver_err'] = '请选择Apache版本';
$l['webuzo_wmp_err'] = '您未选择正确的堆栈版本';
$l['webuzo_ns1_err'] = $l['webuzo_ns2_err'] = '请输入正确的域名服务器详细信息';
$l['webuzo_os_err'] = '请选择要安装的操作系统';
$l['webuzo_os_invalid'] = '提交的操作系统不是有效的Webuzo操作系统';
$l['webuzo_install_data_lost_warn'] = '您确定要继续安装吗？警告：所有 '.VM_SHORT.' 数据将永久丢失。';
$l['webuzo_req_err'] = '无法获取脚本要求。';
$l['webuzo_app_err'] = '获取Webuzo应用程序时出错';
$l['webuzo_prim_ip_err'] = '无法获取IP';
$l['webuzo_install_start'] = 'Webzuo安装已在后台启动。成功安装后，将向给定的电子邮件ID发送电子邮件。正在重新加载页面！';
$l['webuzo_dns_err'] = '请填写域名服务器详细信息';
$l['enabling_webuzo'] = '请稍等，正在验证数据';
// Webuzo 后台脚本语言
$l['error_reins'] = '重新安装 '.VM_SHORT.' 时出错';
$l['err_install_script'] = '安装脚本时出错';
$l['iscript'] = '正在安装脚本';
$l['iscript_err'] = '无法安装应用程序';

//--------------HAProxy 语言开始------------
// ManageVDF (haproxy) 语言字符串 - 前缀 : vdf_
$l['vdf_heading'] = '域名转发';
$l['vdf_serid'] = '服务器';
$l['vdf_vpsid'] = VM_SHORT;
$l['vdf_proto'] = '协议';
$l['vdf_src_hname'] = '源域名/IP';
$l['vdf_src_dom'] = '源域名';
$l['vdf_src_ip'] = '源IP';
$l['vdf_src_port'] = '源端口';
$l['vdf_dest_ip'] = '目标IP';
$l['vdf_dest_port'] = '目标端口';

$l['vdf_add_title'] = '新建域名转发记录';
$l['vdf_sel_proto'] = '选择协议';
$l['vdf_select_vps'] = '选择 '.VM_SHORT;
$l['vdf_select_ip'] = '选择IP';
$l['id'] = 'ID';
$l['nothing_selected'] = '未选择任何内容！';

$l['vdf_no_act_sel'] = '未选择任何操作，请选择一个并重试';
$l['vdf_success_add'] = '添加成功';
$l['vdf_success_update'] = '更新数据成功';
$l['vdf_success_save'] = '保存更改';
$l['vdf_no_server_found'] = '未找到服务器';
$l['vdf_conf_del_entries'] = '删除所选条目？';
$l['vdf_success_del_entries'] = '成功删除条目';
$l['vdf_ser_not_found'] = '未找到请求的服务器';
$l['vps_not_found_on_server'] = '在所选服务器上未找到请求的 '.VM_SHORT.' ({{vpsid}}) ({{server}})';
$l['vdf_proto_no_support'] = '协议ID ({{protocolid}}) 不支持';
$l['vdf_no_id_found'] = '未找到VDF ID ({{id}})';
$l['vdf_no_vps_id_found'] = '未找到 '.VM_SHORT.' ID ({{vpsid}})';
$l['vdf_inv_ipaddress'] = '指定的IP不属于您';
$l['vdf_no_vps'] = '未找到 '.VM_SHORT;

$l['vdf_empty_allowed_src_ips'] = '允许的源IP列表为空，管理员用户在使用此功能之前必须设置此IP列表';
$l['vdf_inv_src_port'] = '源端口 ({{src_port}}) 不是有效的端口号';
$l['vdf_in_use_src_port'] = '源端口 ({{src_port}}) 已被使用';
$l['vdf_inv_src_hostname'] = '所选源域名 ({{src_hostname}}) 不是有效的域名';
$l['vdf_inv_src_ip'] = '源IP ({{src_ip}}) 不是有效的IP';
$l['vdf_not_available_src_ip'] = '所选源IP ({{$src_ip}}) 不可用于 '.VM_SHORT.' 域名转发';
$l['vdf_port_not_supported_tcp'] = '源端口 ({{src_port}}) 不支持所选协议TCP，仅支持协议：HTTP和HTTPS';

$l['vdf_inv_dest_port'] = '目标端口 ({{dest_port}}) 不是有效的端口号';
$l['vdf_inv_dest_ip'] = '目标IP ({{dest_ip}}) 不是有效的IP或未分配给此vps';

$l['vdf_note_point_domain'] = '注意：要使域名转发工作，此vps的域名 ({{src_hostname}}) 必须指向以下IP之一：'."\n".'{{ips_list}}';
$l['vdf_err_exist_src_hostname_and_port'] = '源域名 ({{src_hostname}}) 和源端口 ({{src_port}}) 的记录已存在';

$l['vdf_db_query_error'] = '执行数据库查询时出错，无法处理请求';
$l['vdf_err_unknown'] = '处理请求时发生未知错误';

$l['vdf_err_haproxy_port_empty'] = '源端口为空';
$l['vdf_err_haproxy_port_used'] = '源端口 {{src_port}} 已被使用';
$l['vdf_in_haproxy_reservedports'] = '源端口 {{src_port}} 在保留端口列表中';
$l['vdf_in_haproxy_reservedports_http'] = '源端口 {{src_port}} 在仅允许HTTP或HTTPS协议的保留端口列表中';
$l['vdf_notin_haproxy_allowedports'] = '源端口 {{src_port}} 不在允许的端口列表中';

//VDF 信息div语言
$l['vdf_info'] = '信息';
$l['vdf_info_server'] = '服务器';
$l['vdf_info_reservedports'] = '保留端口';
$l['vdf_info_allowedports'] = '允许的端口';
$l['vdf_info_reservedports_http'] = '仅用于HTTP/HTTPS的保留端口';

$l['vdf_tooltip_edit'] = '编辑此记录';
$l['vdf_tooltip_save'] = '保存对此记录的更改';
$l['vdf_tooltip_revert'] = '还原对此记录的更改';
$l['vdf_tooltip_delete'] = '删除此记录';

$l['vdf_skipped_msg'] = '此条目已被跳过';
$l['vdf_skipped_haproxy_reservedports'] = '源端口在阻止端口列表中';
$l['vdf_skipped_haproxy_reservedports_http'] = '源端口在仅允许HTTP和HTTPS的保留端口列表中';
$l['vdf_skipped_haproxy_allowedports'] = '源端口不在允许的端口列表中';

//VDF 管理员和 '.VM_SHORT.' 日志
$l['vdf_domain_forwarding'] = '域名转发';
$l['vdf_source'] = '源';
$l['vdf_destination'] = '目标';
$l['vdf_added'] = '已添加';
$l['vdf_updated'] = '已更新';
$l['vdf_removed'] = '已删除';
$l['vdf_removed_multiple'] = '已删除多个';

//--------------HAProxy 语言结束------------

// 单个 '.VM_SHORT.' 备份
$l['bak_now'] = '立即备份';
$l['take_full_backup'] = '进行完整备份';
$l['take_inc_backup'] = '进行增量备份';
$l['err_bak_now'] = '创建备份时出错';
$l['err_bak_task_exist'] = '备份已在运行';
$l['bak_now_started'] = VM_SHORT.' 备份已成功启动';
$l['bak_now_confirm'] = '您确定要创建备份吗？';
$l['bak_vps_not_exists'] = VM_SHORT.' 未找到';

// 最大IP错误
$l['err_max_ipv4s'] = '每个 '.VM_SHORT.' 允许的最大IPv4数量：';
$l['err_max_ipv6s'] = '每个 '.VM_SHORT.' 允许的最大IPv6数量：';
$l['err_max_ipv6_subnets'] = '每个 '.VM_SHORT.' 允许的最大IPv6子网数量：';
$l['err_max_internal_ips'] = '每个 '.VM_SHORT.' 允许的最大内部IP数量：';

$l['err_negative_val'] = '您提交了一个负值';

$l['enable_discard'] = '启用丢弃';
$l['vlan_tag'] = 'VLAN标签';
$l['vlan_tag_err'] = 'VLAN标签值必须在1 - 4094之间';
$l['inv_cpu_cores'] = '指定的CPU核心无效';

$l['format_primary_warn'] = '主磁盘格式化仅支持KVM、PROXMOX KVM和XEN HVM主机节点上的 '.VM_SHORT.'(s)';
$l['format_primary'] = '仅格式化主磁盘';
$l['format_primary_exp'] = '如果选中此框，则仅格式化操作系统的主磁盘。其他磁盘保持不变。（仅支持KVM、PROXMOX KVM和XEN HVM上的 '.VM_SHORT.'(s)）';
$l['recipe'] = '配方';
$l['recipe_exp'] = '选择在 '.VM_SHORT.' 创建后要在其中执行的配方';

$l['server_offline'] = '服务器 - <b>'.$GLOBALS['servers'][$globals['server']]['server_name'].'</b> (IP: '.$GLOBALS['servers'][$globals['server']]['ip'].') 已离线';
$l['server_status_0'] = '服务器 - <b>'.$GLOBALS['servers'][$globals['server']]['server_name'].'</b> (IP: '.$GLOBALS['servers'][$globals['server']]['ip'].') 已离线';
$l['server_status_2'] = '服务器 - <b>'.$GLOBALS['servers'][$globals['server']]['server_name'].'</b> (IP: '.$GLOBALS['servers'][$globals['server']]['ip'].') 的许可证已过期';
$l['invalid_inf'] = '写入inf文件的路径无效';
$l['download_inf'] = '下载INF';
$l['container_type'] = '容器类型';
$l['unpriv_ct'] = '非特权CT';
$l['priv_ct'] = '特权CT';
$l['rtc'] = 'RTC';
$l['unprivileged'] = '非特权';
$l['unprivileged_exp'] = '创建非特权容器。注意：一旦创建CT，您将无法更改非特权状态';
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
$l['ver_cpu_threshold_exp'] = '如果VPS的CPU使用率大于/小于提供的阈值，将相应地执行扩展';
$l['ver_cpu_threshold_err'] = '请指定CPU阈值';
$l['ver_cpu_inc_by'] = '增加/减少CPU核心';
$l['ver_cpu_inc_by_exp'] = '如果阈值超过/低于阈值，将相应地增加或减少提供的核心';
$l['ver_cpu_inc_by_err'] = '请指定增加/减少CPU核心';
$l['ver_scaling_note'] = '<ol class="pl-2 mb-1">
<li>垂直扩展仅在基于KVM的虚拟化上支持。</li>
<li>QEMU版本应大于或等于1.5，要检查QEMU版本，请运行“/usr/bin/virsh version”</li>
<li>垂直扩展目前不支持Windows '.VM_SHORT.'</li>
</ol>';

$l['disable_guest_agent'] = '禁用客户代理';
$l['exp_disable_guest_agent'] = '如果启用，则无法在实时机器上执行密码更改、获取内存和磁盘实际使用情况等操作';
$l['acpi_exp'] = 'ACPI用于向虚拟机发送关机信号。虚拟机需要ACPI以便它们可以对此类信号作出反应';
$l['apic_exp'] = '高级可编程中断控制器通过允许客户直接访问APIC，显著减少了中断延迟和由APIC引起的虚拟机退出次数，从而提高了虚拟化AMD64和Intel 64客户的性能';
$l['pae_exp'] = '物理地址扩展模式允许32位客户虚拟机寻址超过4 GB的内存';
$l['os_type'] = '选择操作系统类型';
$l['os_type_exp'] = '设置正确的操作系统（OS）允许Proxmox VE优化一些低级参数';
$l['netfilter'] = '设置netfilter模块';
$l['netfilter_exp'] = '此选项用于设置iptables模块的状态';

$l['cpas_change_onboot'] = VM_SHORT.' 密码将在您从面板关闭并启动 '.VM_SHORT.' 后更改。';
$l['title_lock'] = '锁定 '.VM_SHORT;
$l['title_unlock'] = '解锁 '.VM_SHORT;
$l['reason_txt'] = '原因';
$l['vm_username'] = '用户名';
$l['vm_username_exp'] = '如果填写，则仅更改提供的用户的密码。用户必须存在，否则密码将不会更改';
$l['vnc_auto_exp'] = 'VNC端口自动设置。Virtualizor将自动检测所选VM的分配端口。';
$l['vga_vram'] = '设置vram';
$l['vga_vram_exp'] = '设置VGA的vram（MB）。如果未定义或设置为0，vram值将设置为8MB';
$l['nested_vit'] = '启用嵌套虚拟化';
$l['nested_vit_exp'] = '此功能是实验性的，仅在Linux客户机上测试。嵌套虚拟机的操作可能不稳定。';

// 直通
$l['passthrough'] = '直通';
$l['pci'] = 'PCI直通';
$l['pci_exp'] = '将PCI设备分配给 '.VM_SHORT;
$l['usb'] = 'USB直通';
$l['usb_exp'] = '将USB设备分配给 '.VM_SHORT;
$l['remove_usb_err'] = "无法删除以下USB设备：";
$l['assign_usb_err'] = "无法分配以下USB设备：";
$l['assign_pci_err'] = "无法分配以下PCI设备：";
$l['remove_pci_err'] = "无法删除以下PCI设备：";
$l['poweroff_start'] = "尝试关机 | 如果此错误频繁发生，请从面板启动 ".VM_SHORT;
$l['added_usb_controllers'] = "所需的USB控制器已添加到 ".VM_SHORT."，请关闭并启动 ".VM_SHORT."。尝试再次添加那些未添加的USB设备";
$l['iommu_grp'] = 'IOMMU组';
$l['remove_audio'] = '移除音频';
$l['remove_video'] = '移除视频';

$l['ssd_emulation'] = 'SSD仿真';
$l['status_net_suspended'] = '网络已暂停';
$l['cs_create'] = '创建控制台';
$l['cs_none'] = '未找到现有的控制台会话。请创建一个！';
$l['cs_details'] = '以下是控制台详细信息';
$l['cs_expires'] = '过期 ';
$l['cs_ip'] = 'IP ';
$l['cs_port'] = '端口';
$l['cs_username'] = '用户名';
$l['cs_password'] = '密码';
$l['cs_destroy'] = '销毁';
$l['machine_type'] = '机器类型';
$l['serial_console'] = '串行控制台';
$l['guest_agent_nt_instl'] = '客户代理未安装';
$l['volume_disk'] = '此磁盘作为卷附加，因此无法从此处删除。请从卷向导中删除它。此卷的备份将不会被创建。';
$l['server_selection'] = '服务器选择';
$l['add_tpm'] = '启用TPM';
$l['add_tpm_exp'] = '如果选中，TPM将被启用';
$l['bios'] = 'Bios';
$l['exp_bios'] = '选择要从中启动的bios。默认值为seabios';
$l['err_invalid_bios'] = '无效的bios';
$l['err_ide_not_support'] = 'Ide总线驱动不支持uefi启动';
$l['swtpm_not_found'] = '节点上未安装Swtpm';

$l['err_vol_delete'] = '无法从此处删除卷磁盘';
$l['ssd_does_not_support_kvm'] = '所选磁盘驱动不支持SSD';
$l['ssd_does_not_support_proxk'] = '所选总线驱动不支持SSD';
$l['ssd_emulation_not_support_kvm'] = '您的主机不支持SSD仿真';
$l['uefi_note'] = '要使用UEFI bios创建 '.VM_SHORT.'，请使用ISO，因为我们的默认模板不适用于UEFI bios选项。从ISO创建 '.VM_SHORT.' 后，将无法调整大小。模板创建不适用于具有UEFI bios的 '.VM_SHORT.'。';
//额外的CPU标志
$l['extra_cpu_flag'] = '额外的CPU标志';
$l['on'] = '开启';
$l['default'] = '默认';
$l['off'] = '关闭';
$l['md-clear'] = 'md-clear';
$l['md-clear-info'] = '需要让客户操作系统知道MDS是否正确缓解。';
$l['pcid'] = 'pcid';
$l['pcid-info'] = '在Westmere、Sandy-和IvyBride Intel CPU上减少Meltdown修复成本。';
$l['spec-ctrl'] = 'spec-ctrl';
$l['spec-ctrl-info'] = '允许改进Intel CPU的Spectre缓解。';
$l['ssbd'] = 'ssbd';
$l['ssbd-info'] = '为Intel模型提供Speculative Store Bypass保护。';
$l['ibpb'] = 'ibpb';
$l['ibpb-info'] = '允许改进AMD CPU的Spectre缓解。';
$l['virt-ssbd'] = 'virt-ssbd';
$l['virt-ssbd-info'] = '为AMD模型提供Speculative Store Bypass保护的基础。';
$l['amd-ssbd'] = 'amd-ssbd';
$l['amd-ssbd-info'] = '改进AMD CPU的Spectre缓解性能，最好与virt-ssbd一起使用。';
$l['amd-no-ssb'] = 'amd-no-ssb';
$l['amd-no-ssb-info'] = '通知客户操作系统主机对AMD CPU的Spectre不脆弱。';
$l['pdpe1gb'] = 'pdpe 1gb';
$l['pdpe1gb-info'] = '如果主机硬件支持，允许客户操作系统使用1GB大小的页面。';
$l['hv-tlbflush'] = 'hv-tlbflush';
$l['hv-tlbflush-info'] = '在过度承诺的Windows客户中提高性能。可能导致旧CPU上的客户蓝屏。';
$l['hv-evmcs'] = 'hv-evmcs';
$l['hv-evmcs-info'] = '提高嵌套虚拟化的性能。仅在Intel CPU上支持。';
$l['aes'] = 'aes';
$l['aes-info'] = '激活AES指令集以进行硬件加速。';
$l['min_ram_error'] = '保证内存应大于最小内存';
$l['min_ram'] = '最小内存';
$l['no_bridge_ips'] = '为 '.VM_SHORT.' 分配的IP不存在桥接，可能无法启动。不可用的桥接：';
$l['no_bridge'] = '无网络桥接';
$l['boot_order'] = '启动顺序';
$l['boot_order_exp'] = '选择 '.VM_SHORT.' 将从哪个磁盘启动（注意：此选项仅用于启动顺序更改。磁盘将按照 '.VM_SHORT.' 创建时的顺序考虑）';
$l['select_lb'] = '选择负载均衡器';
$l['iso_load_balancer'] = '无法为作为负载均衡器创建的 '.VM_SHORT.' 设置ISO';
$l['invalid_boot_order'] = '无效的启动顺序，请以disk[0-00]和cdrom[1-2]格式指定启动顺序';
$l['resuce_edit_vps_kvm'] = '请编辑 '.VM_SHORT.'，然后停止并启动 '.VM_SHORT.'，然后启用救援模式（旧的启动顺序方法存在于 '.VM_SHORT.' 中）';
$l['demo_time']='添加演示时间 ';
$l['demo_date']='添加演示日期 ';
$l['date'] = '演示到期日期';
$l['time'] = '演示到期时间';
$l['inv_time'] = '交易时间无效';
$l['inv_demodate'] = '给定的演示日期无效';
$l['inv_demotime'] = '给定的演示时间无效';
$l['no_date'] = '请输入日期';
$l['demo']='输入演示的日期和时间';
$l['enable_demo']='启用演示';
$l['demo_action']= '演示操作';
$l['demo_action_exp']= '演示到期后要执行的操作';
$l['demo_suspend_action']= VM_SHORT.' 将被暂停';
$l['demo_delete_action']= VM_SHORT.' 将被删除';
$l['single_gpu_only'] = '目前仅允许单个VGA直通';
$l['passthrough_poweroff_warning'] = '如果编辑后更改了任何pci设备，'.VM_SHORT.' 将自动关闭并启动';
$l['invalid_zfs_disk_size'] = '对于ZFS存储，不允许使用小数磁盘大小，请使用 {{int_size}} 而不是 {{decimal_size}}';
$l['vcores_limit_exceeded'] = '虚拟核心数超出限制！请检查从服务器设置中设置的限制';
$l['admin_firewall_plan'] = '防火墙计划';
$l['admin_firewall_plan_exp'] = '为 '.VM_SHORT.' 选择防火墙计划';
$l['admin_firewall_plan'] = '管理员防火墙计划';
$l['admin_firewall_plan_exp'] = '为 '.VM_SHORT.' 选择管理员防火墙计划';
$l['firewall_plan'] = '最终用户防火墙计划';
$l['firewall_plan_exp'] = '为 '.VM_SHORT.' 选择最终用户防火墙计划';
$l['disable_autostart'] = '禁用自动启动';
$l['disable_autostart_exp'] = '如果启用，则在节点重启时 '.VM_SHORT.' 不会自动启动';
$l['vm_console'] = VM_SHORT.' 控制台';
$l['refresh'] = '刷新';
$l['operation_progress'] = '操作正在进行中';
$l['obj_backup_err'] = '对象存储备份需要专业版许可证';
$l['use_firewall_err'] = '要使用防火墙功能，您需要<b>专业版</b>许可证';