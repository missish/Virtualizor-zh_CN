<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addplan_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来源于成为最好的愿望
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

$l['slave_cant'] = '添加计划错误';
$l['slave_cant_exp'] = '不允许从服务器添加计划！';
$l['noplantype'] = '请选择计划类型';
$l['no_name'] = '请指定计划的名称';
$l['no_disk_space'] = '请指定要分配的磁盘空间';
$l['scsi_controller'] = 'SCSI控制器';
$l['no_ram'] = '请指定内存';
$l['no_bandwidth'] = '请指定带宽';
$l['no_cpu_units'] = '请指定CPU单位';
$l['no_cpu_cores'] = '请指定核心数';
$l['no_percent_cpu'] = '请指定允许的CPU利用率百分比';
$l['no_swap_ram'] = '请指定交换内存';
$l['no_burst_ram'] = '请指定可突发的内存限制';
$l['no_inodes'] = '请指定允许的Inode数量';
$l['plannameexist'] = '计划名称已存在';
$l['no_io'] = '请选择I/O优先级';

//主题设置
$l['<title>'] = '添加计划';
$l['add_plan'] = '添加计划';
$l['plan_template'] = '计划模板';
$l['exp_plan_template'] = '选择现有计划作为模板';
$l['select_plan_template'] = '选择计划模板';
$l['done'] = '计划已保存。返回<a href="'.$globals['index'].'act=plans">计划概览</a>';
$l['plantype'] = '计划类型';
$l['planname'] = '计划名称';
$l['nameofplan'] = '此计划的名称';
$l['dspace'] = '磁盘空间';
$l['hspaceallot'] = '允许的磁盘空间为'.VM_SHORT;
$l['inodes'] = 'Inodes';
$l['iondisk'] = 'Inode数量。推荐值：500000+';
$l['gram'] = '保证内存';
$l['gram_exp'] = VM_SHORT.'将始终拥有的内存量';
$l['burst_ram'] = '可突发内存';
$l['burst_ram_exp'] = VM_SHORT.'可以使用的最大内存量';
$l['bwidth'] = '带宽';
$l['balloc'] = VM_SHORT.'的每月带宽限制';
$l['cpu'] = 'CPU单位';
$l['cpalloc'] = '要分配的CPU单位';
$l['cpalloc_xen'] = '推荐值：256';
$l['cpalloc_openvz'] = '推荐值：1000';
$l['cpalloc_lxc'] = '推荐值：1000';
$l['cpalloc_kvm'] = '推荐值：1024';
$l['cpucore'] = 'CPU核心';
$l['cpupercent'] = 'CPU %';
$l['cpuperutil'] = VM_SHORT.'不允许超过的CPU时间百分比。<br />设置为<b>0</b>表示无限制。';
$l['ioprior'] = 'I/O优先级';
$l['io0-7'] = '选择0-7的优先级';
$l['swap'] = '交换内存';
$l['plan_ips'] = 'IP数量';
$l['plan_ips_exp'] = '指定任何正整数。如果未指定（或为0），则在创建'.VM_SHORT.'时需要选择IP。';
$l['plan_ips6_subnet'] = 'IPv6子网数量';
$l['plan_ips6_subnet_exp'] = '指定任何正整数。如果未指定（或为0），则在创建'.VM_SHORT.'时需要选择IP。';
$l['plan_ips6'] = 'IPv6地址数量';
$l['plan_ips6_exp'] = '指定任何正整数。如果未指定（或为0），则在创建'.VM_SHORT.'时需要选择IP。';
$l['plan_ips_int'] = '内部IP数量';
$l['plan_ips_int_exp'] = '指定任何正整数。如果未指定（或为0），则在创建'.VM_SHORT.'时需要选择内部IP。';
$l['ubcsettings'] = 'UBC设置';
$l['exp_ubc'] = '如果选中，您将被重定向以编辑此计划的UBC设置';
$l['submit'] = '保存计划';
$l['network_speed'] = '网络速度';
$l['network_speed_exp'] = '输入0或留空表示无限制。<br />使用选择框以获取简单选项';
$l['net_kb'] = 'KB/s';
$l['no_limit'] = '无限制';
$l['disk_driver'] = '选择磁盘驱动';
$l['exp_disk_driver'] = '使用<b>virtio</b>作为virtio驱动<br>使用<b>scsi</b>作为磁盘驱动。Fstrim仅在选择scsi且存储为精简配置时有效。<br>如果未选择任何选项，则默认选择IDE';
$l['virtio'] = 'virtio';
$l['scsi'] = 'scsi';
$l['nic_type'] = '虚拟网络接口类型';
$l['nic_type_exp'] = '如果要更改网络接口类型。选项为默认或E1000。如果启用了virtio，则将使用virtio作为虚拟网卡类型';
$l['select_os'] = '选择操作系统';

// UBC相关设置
$l['no_bkmemsize'] = '<b>kmemsize</b>屏障未指定';
$l['no_blockedpages'] = '<b>lockedpages</b>屏障未指定';
$l['no_bnumproc'] = '<b>numproc</b>屏障未指定';
$l['no_bphyspages'] = '<b>physpages</b>屏障未指定';
$l['no_bnumtcpsock'] = '<b>numtcpsock</b>屏障未指定';
$l['no_bnumflock'] = '<b>numflock</b>屏障未指定';
$l['no_bnumpty'] = '<b>numpty</b>屏障未指定';
$l['no_bnumsiginfo'] = '<b>numsiginfo</b>屏障未指定';
$l['no_btcpsndbuf'] = '<b>tcpsndbuf</b>屏障未指定';
$l['no_btcprcvbuf'] = '<b>tcprcvbuf</b>屏障未指定';
$l['no_bothersockbuf'] = '<b>othersockbuf</b>屏障未指定';
$l['no_bdgramrcvbuf'] = '<b>dgramrcvbuf</b>屏障未指定';
$l['no_bnumothersock'] = '<b>numothersock</b>屏障未指定';
$l['no_bdcachesize'] = '<b>dcachesize</b>屏障未指定';
$l['no_bnumfile'] = '<b>numfile</b>屏障未指定';
$l['no_bnumiptent'] = '<b>numiptent</b>屏障未指定';
$l['no_bswappages'] = '<b>swappages</b>屏障未指定';
$l['no_bdiskinodes'] = '<b>diskinodes</b>屏障未指定';
$l['no_bdcachsize'] = '<b>dcachsize</b>屏障未指定';
$l['no_bquotaugidlimit'] = '<b>quotaugidlimit</b>屏障未指定';
$l['no_bmeminfo'] = '<b>meminfo</b>屏障未指定';

$l['no_lkmemsize'] = '<b>kmemsize</b>限制未指定';
$l['no_llockedpages'] = '<b>lockedpages</b>限制未指定';
$l['no_lnumproc'] = '<b>numproc</b>限制未指定';
$l['no_lphyspages'] = '<b>physpages</b>限制未指定';
$l['no_lnumtcpsock'] = '<b>numtcpsock</b>限制未指定';
$l['no_lnumflock'] = '<b>numflock</b>限制未指定';
$l['no_lnumpty'] = '<b>numpty</b>限制未指定';
$l['no_lnumsiginfo'] = '<b>numsiginfo</b>限制未指定';
$l['no_ltcpsndbuf'] = '<b>tcpsndbuf</b>限制未指定';
$l['no_ltcprcvbuf'] = '<b>tcprcvbuf</b>限制未指定';
$l['no_lothersockbuf'] = '<b>othersockbuf</b>限制未指定';
$l['no_ldgramrcvbuf'] = '<b>dgramrcvbuf</b>限制未指定';
$l['no_lnumothersock'] = '<b>numothersock</b>限制未指定';
$l['no_ldcachesize'] = '<b>dcachesize</b>限制未指定';
$l['no_lnumfile'] = '<b>numfile</b>限制未指定';
$l['no_lnumiptent'] = '<b>numiptent</b>限制未指定';
$l['no_lswappages'] = '<b>swappages</b>限制未指定';
$l['no_ldiskinodes'] = '<b>diskinodes</b>限制未指定';
$l['no_ldcachsize'] = '<b>dcachsize</b>限制未指定';
$l['no_lquotaugidlimit'] = '<b>quotaugidlimit</b>限制未指定';
$l['no_lmeminfo'] = '<b>meminfo</b>限制未指定';
$l['err_edit_vps'] = '应用UBC设置时出错';
$l['err_save_slave'] = '在从服务器上保存'.VM_SHORT.'数据时出错。请确保从服务器正在运行。';
$l['no_shadow'] = '请指定影子内存';
$l['rdp'] = '启用RDP';
$l['exp_rdp'] = '启用远程桌面连接（适用于Windows '.VM_SHORT.'）';

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
$l['quotaugidlimit'] = 'quotaugidlimit';
$l['meminfo'] = 'meminfo';
$l['networksettings'] = '网络设置';
$l['ploop'] = 'Ploop';
$l['ploop_exp'] = '如果启用，'.VM_SHORT.'将以Ploop格式创建';
$l['upload_speed'] = '上传速度';
$l['upload_speed_exp'] = '输入0或留空表示无限制。<br />输入-1表示上传速度与<b>网络速度</b>相同。<br />使用选择框以获取简单选项';
$l['band_suspend']= '带宽暂停';
$l['exp_band_suspend'] = '如果'.VM_SHORT.'使用的带宽超过指定值，则暂停'.VM_SHORT;
$l['dns'] = 'DNS名称服务器';
$l['exp_dns'] = '如果不确定，请使用4.2.2.1和4.2.2.2';
$l['add_dns'] = '+';
$l['tuntap'] = 'Tun/Tap';
$l['ppp'] = 'PPP';
$l['exp_tuntap'] = '为'.VM_SHORT.'启用Tun/Tap';
$l['exp_ppp'] = '为'.VM_SHORT.'启用PPP（点对点协议）';
$l['ubcsettings'] = 'UBC设置';
$l['exp_ubc'] = '选中此项以保存UBC设置';
$l['addvoption'] = '高级选项';
$l['control_panel'] = 'Web控制面板';
$l['control_panel_exp'] = '此选项将在'.VM_SHORT.'中安装选定的Web控制面板';
$l['mg'] = '媒体组';
$l['mg_exp'] = '如果未分配媒体组，则所有媒体将对此'.VM_SHORT.'可用。';
$l['cpu_mode'] = 'CPU模式';
$l['hvm'] = 'Xen HVM';
$l['hvm_exp'] = '您要为此'.VM_SHORT.'启用完全虚拟化吗？';
$l['change_vif_type'] = '虚拟网络接口仿真类型';
$l['exp_change_vif_type'] = '如果要更改网络接口仿真类型。选项为<b>netfront</b>或<b>ioemu</b>。';
$l['viftype_ioemu'] = 'ioemu';
$l['viftype_netfront'] = 'netfront（默认）';
$l['usesec_cdrom'] = '启用辅助CD ROM';
$l['exp_usesec_cdrom'] = '启用此选项以将辅助ISO附加到虚拟机。';	
$l['kvm_cache'] = '磁盘缓存';
$l['exp_kvm_cache'] = '控制缓存机制';
$l['io_mode'] = 'I/O策略';
$l['vnc_keymap'] = 'VNC控制台键映射';
$l['kvm_vga'] = '启用VGA';
$l['acceleration'] = '启用加速';
$l['acceleration_exp'] = '如果选中，则将为'.VM_SHORT.'启用2D和3D加速';
$l['osreinstall'] = '操作系统重装限制';
$l['exp_osreinstall'] = '如果要限制每月操作系统重装次数。<br />例如：0 - 表示无限制';
$l['total_iops_sec'] = '每秒总I/O';
$l['read_bytes_sec'] = '读取兆字节/秒';
$l['write_bytes_sec'] = '写入兆字节/秒';
$l['vnc_keymap'] = 'VNC控制台键映射';
$l['inv_vnc_keymap'] = '提交的VNC键映射无效';
$l['vsos'] = '操作系统';
$l['vsos_exp'] = '选择'.VM_SHORT.'的操作系统';
$l['pv_on_hvm'] = 'PV-on-HVM驱动支持';
$l['exp_pv_on_hvm'] = 'PV on HVM的主要目标是通过使用特别优化的半虚拟化设备驱动程序来提高完全虚拟化HVM客户机的性能';
$l['vsiso'] = 'ISO';
$l['vsiso_exp'] = '如果选择了ISO，则机器将从该ISO启动';
$l['sec_vsiso'] = '辅助CDROM的ISO';
$l['sec_vsiso_exp'] = '选择辅助CDROM的ISO';
$l['admin_managed'] = '由管理员管理';
$l['exp_admin_managed'] = '如果选中，'.VM_SHORT.'将无法从最终用户面板管理。';
$l['dont_add_ptr'] = '不添加PTR记录';
$l['dont_add_ptr_exp'] = '如果在主设置中启用了自动添加PTR记录设置，则不会为'.VM_SHORT.'添加PTR记录';
$l['shadow'] = '影子内存';
$l['shadow_exp'] = '推荐值：8 MB';
$l['acpi'] = 'ACPI';
$l['apic'] = 'APIC';
$l['pae'] = 'PAE';
$l['recipe'] = '配方';
$l['recipe_exp'] = '选择在'.VM_SHORT.'创建后要执行的配方';
$l['enable_cpu_topology'] = 'CPU拓扑';
$l['enable_cpu_topology_exp'] = '指定要分配给'.VM_SHORT.'的CPU核心数、线程数和插槽数';
$l['inv_topology'] = '无效的CPU拓扑值。所有指定的拓扑值必须大于零';
$l['disable_nw_config'] = '禁用网络配置';
$l['exp_disable_nw_config'] = '如果选中，则在'.VM_SHORT.'重新启动时，Virtualizor不会配置/重写网络。但是，在创建'.VM_SHORT.'时，网络文件将被写入。';
$l['err_topology_calc'] = '指定的CPU核心数应等于拓扑限制（CPU核心数 = 插槽数 x 拓扑核心数 x 线程数）';
$l['fuse'] = '在容器中启用Fuse';
$l['fuse_exp'] = '如果选中，则在创建新容器时将启用Fuse';
$l['ipip'] = '在容器中启用IPIP';
$l['ipip_exp'] = '如果选中，则在创建新容器时将启用IPIP';
$l['ipgre'] = '在容器中启用IPGRE';
$l['ipgre_exp'] = '如果选中，则在创建新容器时将启用IPGRE';
$l['nfs'] = '在容器中启用NFS';
$l['nfs_exp'] = '如果选中，则在创建新容器时将启用NFS';
$l['quotaugidlimit'] = '在容器中启用QUOTAUGIDLIMIT';
$l['quotaugidlimit_exp'] = '启用或禁用容器内每用户和每组的磁盘配额。如果值为0或未设置，则容器内的磁盘配额将被禁用且不计入。<br><b>注意：</b>这将重新启动容器。';
$l['iolimit'] = '为容器设置IO带宽限制';
$l['iolimit_exp'] = '如果设置，则在执行IO操作时，IO操作不会超过指定的限制。';
$l['iopslimit'] = '为容器设置IOPS限制';
$l['iopslimit_exp'] = '如果设置，则每秒IO操作不会超过指定的限制。';
$l['usenuma'] = '启用NUMA';
$l['backup_plans'] = '备份计划';
$l['backup_plans_exp'] = '选择'.VM_SHORT.'的备份计划';
$l['select_backup_plan'] = '选择备份计划';
$l['nic_default'] = 'Realtek 8139';
$l['nic_e1000'] = 'Intel E1000';
$l['nic_novell'] = 'Novell NE2000';
$l['nic_i82559er'] = 'Intel i82559er';
$l['nic_pcnet'] = 'AMD PCNET';
$l['nic_ne2k_isa'] = 'Novell E2000 ISA';
$l['inv_bus_driver'] = '无效的磁盘总线驱动';
//区域定价设置
$l['pricing'] = '定价';
$l['h_rate'] = '小时费率';
$l['m_rate'] = '月费率';
$l['y_rate'] = '年费率';
$l['all_reg'] = '所有区域';
$l['add_reg'] = '添加区域';
$l['sel_reg'] = '选择区域';
$l['inv_val_for'] = '[{{region}}] 输入的值无效 {{field}}: ';
$l['err_save_reg_price'] = '保存区域定价时出错';
$l['regions'] = '区域';
$l['no_reg_add'] = '没有更多区域可添加';
$l['delid_not_found'] = '未找到删除ID';
$l['install_xentools'] = '安装Xentools';
$l['none'] = '无';

//IP池设置
$l['ip_pool'] = 'IP池';
$l['ip_pool_exp'] = '选择要分配给此计划的多个IP池。（可选）';
$l['select_ip_pool'] = '选择IP池';
$l['internal'] = '内部';

//一些缺失的标签
$l['cpupin'] = 'CPU绑定';
$l['cpupin_exp'] = '将特定的CPU核心绑定到此'.VM_SHORT.'。您可以选择多个CPU核心。';

//高级应用
$l['premium_apps_plan'] = '启用高级应用';
$l['premium_apps_plan_exp'] = '如果选中，则此计划下的'.VM_SHORT.'将启用高级应用';

$l['enable_discard'] = '启用丢弃';
$l['vlan_tag'] = 'VLAN标签';
$l['vlan_tag_err'] = 'VLAN标签值必须在1 - 4094之间';

//div标题
$l['gen_set'] = '常规设置';
$l['custom_cpu_model'] = '自定义CPU模式';
$l['custom_cpu_model_exp'] = '自定义模型应为添加虚拟机向导中CPU模式下拉列表中可用的确切名称。如果不匹配，则不会设置自定义模型。';
$l['ha'] = '启用HA';
$l['exp_ha'] = '仅当'.VM_SHORT.'在启用HA的服务器组中创建时，才会为'.VM_SHORT.'启用HA';
$l['vga_vram'] = '设置vram';
$l['vga_vram_exp'] = '以MB为单位设置VGA的vram。如果未定义或设置为0，则vram值将设置为8MB';
$l['os_type'] = '选择操作系统类型';
$l['os_type_exp'] = '设置正确的操作系统（OS）允许Proxmox VE优化一些低级参数';
$l['rtc'] = 'RTC';
$l['rtc_exp'] = '设置RTC本地时间。默认情况下，Windows启用此选项';

//垂直扩展
$l['enable_ver_scaling'] = '启用垂直扩展';
$l['default'] = '默认';
$l['ver_scale_settings'] = '垂直扩展设置';
$l['ver_ram_settings'] = '内存设置';
$l['ver_max_ram'] = '最大内存（MB）';
$l['ver_max_ram_exp'] = '提供将分配给'.VM_SHORT.'的最大内存量';
$l['ver_max_ram_err'] = '请指定最大内存';
$l['ver_ram_threshold'] = '内存阈值（%）';
$l['ver_ram_threshold_exp'] = '如果'.VM_SHORT.'的内存使用率超过/低于提供的阈值，则将相应地执行扩展';
$l['ver_ram_threshold_err'] = '请指定内存阈值';
$l['ver_ram_inc_by'] = '增加/减少内存（GB）';
$l['ver_ram_inc_by_exp'] = '如果阈值超过/低于，则将相应地增加或减少提供的内存（GB）';
$l['ver_ram_inc_by_err'] = '请指定增加/减少内存';

$l['ver_cpu_settings'] = 'CPU设置';
$l['ver_max_cpu'] = '最大CPU核心';
$l['ver_max_cpu_exp'] = '提供将分配给'.VM_SHORT.'的最大CPU核心数';
$l['ver_max_cpu_err'] = '请指定最大CPU';
$l['ver_cpu_threshold'] = 'CPU阈值（%）';
$l['ver_cpu_threshold_exp'] = '如果'.VM_SHORT.'的CPU使用率超过/低于提供的阈值，则将相应地执行扩展';
$l['ver_cpu_threshold_err'] = '请指定CPU阈值';
$l['ver_cpu_inc_by'] = '增加/减少CPU核心';
$l['ver_cpu_inc_by_exp'] = '如果阈值超过/低于，则将相应地增加或减少提供的核心数';
$l['ver_cpu_inc_by_err'] = '请指定增加/减少CPU核心';
$l['ver_scaling_note'] = '<ol class="pl-2 mb-1">
<li>垂直扩展仅在基于KVM的虚拟化中支持。</li>
<li>QEMU版本应大于或等于1.5，要检查QEMU版本，请运行"/usr/bin/virsh version"</li>
<li>垂直扩展目前不支持Windows '.VM_SHORT.'</li>
</ol>';


$l['ssd_emulation'] = 'SSD模拟';

$l['acpi_exp'] = 'ACPI用于向虚拟机发送关机信号。虚拟机需要ACPI以便它们可以对此类信号作出反应';
$l['apic_exp'] = '高级可编程中断控制器通过允许客户机直接访问APIC来改善虚拟化AMD64和Intel 64客户机的性能，从而大大减少中断延迟和由APIC引起的虚拟机退出次数';
$l['pae_exp'] = '物理地址扩展模式允许32位客户虚拟机寻址超过4 GB的内存';
$l['bios'] = 'Bios';
$l['exp_bios'] = '选择从哪个bios启动'.VM_SHORT.'。注意：如果'.VM_SHORT.'从ISO启动，则此选项有效。';
$l['machine_type'] = '机器类型';
$l['machine_type_exp'] = '输入机器类型（例如：pc-i440fx-5.1或pc-q35-5.1）。如果未正确输入，则将选择默认机器类型';
$l['unprivileged'] = '非特权';
$l['unprivileged_exp'] = '创建非特权容器。注意：一旦'.VM_SHORT.'创建，您将无法更改非特权状态';
//额外的CPU标志
$l['extra_cpu_flag'] = '额外的CPU标志';
$l['has_feature_exp'] = '仅在Proxmox 7及以上版本中支持';
$l['on'] = '开启';
$l['default'] = '默认';
$l['off'] = '关闭';
$l['md-clear'] = 'md-clear';
$l['md-clear-info'] = '需要让客户机操作系统知道MDS是否正确缓解。';
$l['pcid'] = 'pcid';
$l['pcid-info'] = '在Westmere、Sandy-和IvyBride Intel CPU上减少Meltdown修复成本。';
$l['spec-ctrl'] = 'spec-ctrl';
$l['spec-ctrl-info'] = '允许在Intel CPU上改进Spectre缓解。';
$l['ssbd'] = 'ssbd';
$l['ssbd-info'] = '为Intel模型提供Speculative Store Bypass保护。';
$l['ibpb'] = 'ibpb';
$l['ibpb-info'] = '允许在AMD CPU上改进Spectre缓解。';
$l['virt-ssbd'] = 'virt-ssbd';
$l['virt-ssbd-info'] = '为AMD模型提供Speculative Store Bypass保护的基础。';
$l['amd-ssbd'] = 'amd-ssbd';
$l['amd-ssbd-info'] = '在AMD CPU上改进Spectre缓解性能，最好与virt-ssbd一起使用。';
$l['amd-no-ssb'] = 'amd-no-ssb';
$l['amd-no-ssb-info'] = '通知客户机操作系统主机在AMD CPU上不受Spectre影响。';
$l['pdpe1gb'] = 'pdpe 1gb';
$l['pdpe1gb-info'] = '如果主机硬件支持，则允许客户机操作系统使用1GB大小的页面。';
$l['hv-tlbflush'] = 'hv-tlbflush';
$l['hv-tlbflush-info'] = '在过度使用的Windows客户机中提高性能。在旧CPU上可能导致客户机蓝屏。';
$l['hv-evmcs'] = 'hv-evmcs';
$l['hv-evmcs-info'] = '提高嵌套虚拟化的性能。仅在Intel CPU上支持。';
$l['aes'] = 'aes';
$l['aes-info'] = '激活AES指令集以进行硬件加速。';
$l['min_ram'] = '最小内存';
$l['min_ram_error'] = '保证内存应大于最小内存';
$l['load_balancer'] = '创建为负载均衡器';
$l['load_balancer_exp'] = '如果选中，则'.VM_SHORT.'将启用负载均衡器服务';
$l['lb_no_osid'] = '您需要选择一个操作系统以启用负载均衡器';
$l['lb_os_not_supported'] = '此操作系统不受支持。负载均衡器支持Almalinux 8、Almalinux 9、Ubuntu 20、Ubuntu 22';
$l['lb_must_have_unlimited_bw'] = '负载均衡器'.VM_SHORT.'不能有带宽限制';
$l['cpu_percentage'] = 'CPU阈值百分比';
$l['cpu_thre_time_exp'] = '阈值时间除以5，我们将在每个间隔检查CPU使用率。如果CPU使用率在每个间隔超过阈值值，则在最后一个间隔我们将暂停'.VM_SHORT;
$l['cpu_threshold_exp'] = 'CPU阈值在CPU使用率超过预定义阈值时通知管理员';
$l['cpuperutil'] = VM_SHORT.'不允许超过的CPU时间百分比。<br />设置为<b>0</b>表示无限制。';
$l['percent_err_threshold'] = '请输入CPU阈值在0%到100%之间';
$l['time_err_threshold'] = '请输入CPU阈值时间大于0且必须是5分钟的倍数';
$l['cpu_threshold'] = 'CPU阈值';
$l['cpu_thre_time'] = 'CPU阈值时间';
$l['cpu_percentage'] = 'CPU阈值百分比';
$l['uefi_note'] = '要使用UEFI bios创建'.VM_SHORT.'，请使用ISO，因为我们的默认模板不适用于UEFI bios选项。从ISO创建'.VM_SHORT.'后，将无法调整大小。模板创建不适用于使用UEFI bios的'.VM_SHORT.'。';
$l['add_tpm'] = '启用TPM';
$l['add_tpm_exp'] = '如果选中，将启用TPM';
$l['iso_load_balancer'] = '创建负载均衡器计划时，请不要选择ISO';
$l['enable_demo']='启用演示';
$l['demo_action']= '演示操作';
$l['demo'] = '输入演示持续时间（天）';
$l['demo_action_exp'] = '演示期结束后要执行的操作';
$l['demo_suspend_action']= VM_SHORT.'将被暂停';
$l['demo_delete_action']= VM_SHORT.'将被删除';
$l['invalid_duration'] = '无效的天数持续时间';
$l['invalid_option_demo'] = '提供的演示操作选项无效';
$l['demo_days'] = '天';
$l['admin_firewall_plan'] = '防火墙计划';
$l['admin_firewall_plan_exp'] = '选择'.VM_SHORT.'的防火墙计划';
$l['disable_guest_agent'] = '禁用客户代理';
$l['disable_guest_agent_exp'] = '如果启用，则不会为'.VM_SHORT.'安装/启用客户代理';
$l['disable_autostart'] = '禁用自动启动';
$l['disable_autostart_exp'] = '如果启用，则在节点重新启动时'.VM_SHORT.'不会自动启动';
?>