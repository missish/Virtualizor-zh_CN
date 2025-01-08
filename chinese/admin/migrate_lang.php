<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addserver_lang.php
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

$l['cant_migrate'] = '迁移/克隆错误';
$l['cant_migrate_exp'] = '不允许从节点迁移/克隆 '.VM_SHORT.'。请从主节点操作';
$l['cant_migrate_openvz'] = 'OpenVZ 不支持迁移';
$l['no_ip'] = '未指定IP地址！';
$l['no_pass'] = '未指定密码密钥地址！';
$l['details_err'] = '无法连接到服务器。请确保IP和服务器密码正确';
$l['no_vps'] = '在您要迁移的服务器上未找到 '.VM_SHORT.'！';
$l['same_server'] = '源服务器和目标服务器不能相同！';
$l['no_vpsid'] = '提交的 '.VM_SHORT.' 无效';
$l['err_saving_users'] = '保存从节点的用户详细信息时出错';
$l['err_saving_vps'] = '保存从节点的 '.VM_SHORT.' 详细信息时出错';
$l['err_saving_ippool'] = '保存从节点的IP池时出错';
$l['err_saving_ips'] = '保存从节点的IP时出错';
$l['err_save_slave'] = '在从节点上保存数据时出错';
$l['wrong_virt'] = '服务器必须运行相同的虚拟化技术。例如，KVM '.VM_SHORT.' 只能迁移到另一个KVM节点';
$l['wrong_vpsid'] = '无法获取进度数据。提交的 '.VM_SHORT.'ID 错误。';
$l['inv_from_server'] = '<b>源服务器</b> 无效。';
$l['inv_to_server'] = '<b>目标服务器</b> 无效。';
$l['valid_mip'] = '请选择有效的IP地址';
$l['migrate_ram_error'] = '目标服务器没有足够的RAM';
$l['not_supported'] = '此功能在以下环境中不支持：';
$l['proxmox_not_supported'] = 'Proxmox 不支持迁移';
$l['ip_cant_preserver'] = '以下IP地址在目标服务器和源服务器之间不共享，因此无法保留：';
$l['live_mig_ips_not_shared'] = '实时迁移要求 '.VM_SHORT.' IP地址来自共享IP池。无法为 '.VM_SHORT.' ID 进行实时迁移：';
$l['less_space'] = '目标服务器上的存储空间不足：所选 '.VM_SHORT.' 磁盘大小为 {{vps_disk_space}} GB，目标存储上的剩余空间为 {{dest_disk_space}} GB';
$l['type_missmatch'] = '所选存储类型与目标存储不匹配';
$l['no_storage_on_dest'] = '目标服务器上不存在所选存储';
$l['no_storage'] = '请选择迁移的存储';
$l['storage_missmatch'] = '目标服务器上的主存储类型与 '.VM_SHORT.' 存储类型不匹配';
$l['disk_create_err'] = '无法在目标服务器上创建 '.VM_SHORT.' 磁盘';
$l['no_suitable_storage'] = '在目标服务器上未找到适合的存储空间用于所选 '.VM_SHORT;
$l['invalid_vps_disk_count'] = '所选磁盘数量与 '.VM_SHORT.' 磁盘数量不匹配，所选：{{selected}}，预期：{{expected}}';
$l['invalid_dest_disk_format'] = '所选目标存储格式与 '.VM_SHORT.' 磁盘格式不匹配：'.VM_SHORT.' 磁盘格式：{{vps_format}}，所选目标服务器存储格式：{{dest_format}}';
$l['invalid_dest_disk_type'] = '所选目标存储类型与 '.VM_SHORT.' 磁盘类型不匹配：'.VM_SHORT.' 磁盘类型：{{vps_type}}，所选目标服务器存储类型：{{dest_type}}';
$l['no_storage_dest_vps_disk'] = '在目标服务器上未找到适合的存储空间用于 '.VM_SHORT.' 磁盘：[磁盘编号] {{disk_num}}，['.VM_SHORT.' ID] {{vpsid}}';
$l['no_storage_select'] = '所选 '.VM_SHORT.' 虚拟化不支持存储选择，因此将使用目标服务器的主存储';
$l['inv_act'] = '选择了无效的操作';
$l['no_ipv4'] = '目标服务器上的IPv4地址不足';
$l['no_internal'] = '目标服务器上的内部IP地址不足';
$l['no_ipv6'] = '目标服务器上的IPv6地址不足';
$l['no_ipv6_sub'] = '目标服务器上的IPv6子网不足';
$l['from_server_version_mismatch'] = '源服务器版本 (&soft-1;) 必须与主服务器版本 (&soft-2;) 相同。请更新源服务器以避免此错误。';
$l['to_server_version_mismatch'] = '目标服务器版本 (&soft-1;) 必须与主服务器版本 (&soft-2;) 相同。请更新目标服务器以避免此错误。';
$l['err_create'] = '在目标节点上预创建 '.VM_SHORT.' 时出错';
$l['mig_lic_error'] = '您正在迁移 {{vm_count}} 个 '.VM_SHORT.'，但目标服务器上仅允许创建 {{allowed_vms}} 个 '.VM_SHORT.'。请升级目标服务器的许可证以迁移 '.VM_SHORT.'。';
$l['err_live_mig_no_conf'] = '无法在节点 {{node}} 上加载 '.VM_SHORT.' XML 配置文件';
$l['err_live_mig_cpu_diff'] = VM_SHORT.' 当前设置的CPU模式值要求源节点和目标节点的CPU制造商相同';

// 主题字符串
$l['<mtitle>'] = '迁移 '.VM_LONG;
$l['<ctitle>'] = '克隆 '.VM_LONG;
$l['from_server'] = '源服务器';
$l['from_server_exp'] = '从中选择 '.VM_SHORT.' 的源服务器';
$l['enter_keys'] = '输入服务器详细信息';
$l['from_ip'] = 'IP地址';
$l['from_ip_exp'] = '服务器的主地址';
$l['from_pass'] = '服务器密码';
$l['from_pass_exp'] = '控制服务器的密码';
$l['getvpslist'] = '获取 '.VM_SHORT.' 列表';
$l['to_server'] = '目标服务器';
$l['to_server_exp'] = '用于 '.VM_SHORT.' 的 <b>目标</b> 服务器';
$l['select_vps'] = '选择 '.VM_SHORT;
$l['select_vps_exp'] = '选择您要执行操作的 '.VM_SHORT;
$l['msub_but'] = '迁移 '.VM_SHORT;
$l['csub_but'] = '克隆 '.VM_SHORT;
$l['mnote1'] = '建议您在开始此过程之前保存 '.VM_SHORT.' 数据，因为 Virtualizor 将 <b>关闭</b> '.VM_SHORT.' 以进行传输。';
$l['mnote2'] = '此过程可能需要一些时间，具体取决于 '.VM_SHORT.' 的大小和传输速率。';
$l['mnote3'] = '您可以离开此页面并在 <b><a href="'.$globals['index'].'act=tasks">任务页面</a></b> 上查看状态。';
$l['mnote4'] = '现在，成功迁移后 '.VM_SHORT.'ID 将保持不变。（即新迁移的 '.VM_SHORT.' 将获得旧的 '.VM_SHORT.'ID）';
$l['m_complete'] = '迁移完成。';
$l['c_complete'] = '克隆完成。';
$l['m_percent'] = '百分比';
$l['m_speed'] = '平均速度';
$l['m_ip'] = 'IP地址';
$l['m_ip_opt'] = '选择IP地址';
$l['m_ip_exp'] = '您可以从IP列表中选择';
$l['m_del_orig'] = '删除源 '.VM_SHORT;
$l['m_del_orig_exp'] = '设置此选项以在成功迁移后删除源 '.VM_SHORT;
$l['preserve_ip'] = '保留相同的IP地址';
$l['preserve_ip_exp'] = '设置此选项以在迁移的 '.VM_SHORT.' 上使用相同的IP地址。IP必须属于源服务器和目标服务器之间的共享IP池。如果未选中，IP将自动选择。';
$l['select_server'] = '选择服务器';
$l['select_storage'] = '选择存储';
$l['type_missmatch'] = '存储类型不匹配';
$l['select_storage_exp'] = '为目标服务器上的相应磁盘选择存储。';
$l['lv_notcreated'] = '无法创建LV';
$l['fetchlv_failed'] = '无法获取LV - fetchlv() 失败';
$l['dump_failed'] = '无法将OpenVZ '.VM_SHORT.' 转储到文件';
$l['dest_dumpdel_failed'] = '无法从目标删除转储';
$l['fetchdump_failed'] = '无法获取转储 - fetchlv() 失败';
$l['restoredump_failed'] = '无法恢复转储';
$l['src_dumpdel_failed'] = '无法从源删除转储';
$l['mcompleted'] = '迁移完成';
$l['ccompleted'] = '克隆完成';
$l['mig_task_not_found'] = '未找到迁移任务';
$l['mig_ssh_failed'] = 'SSH 连接到目标服务器 ({{TO_IP}}) 端口 ({{TO_PORT}}) 失败，源服务器 ({{FROM_IP}})。如果使用的端口不正确，您可以在目标服务器的从节点设置中更改它。';
$l['mig_err_bg_exec'] = '在后台执行迁移命令时出错。';
$l['mig_in_process'] = '迁移进行中';
$l['malicious_symlink_found'] = '在 '.VM_SHORT.' 内发现恶意符号链接。';
$l['migrate_data'] = '迁移数据';
$l['clone_data'] = '克隆数据';
$l['mig_checking'] = '检查迁移/克隆参数';
$l['mig_checking_ssh'] = '检查服务器连接性';
$l['mig_task_not_updated'] = '任务自上次更新以来已超过30分钟，因此存在一些错误。';
$l['mig_estimate_cur_size'] = '估计 '.VM_SHORT.' 的当前大小以进行迁移';
$l['mig_du_err'] = '无法确定源 '.VM_SHORT.' 的大小。';
$l['mig_finalizing'] = '执行最终操作。';
$l['migrate2'] = '迁移';
$l['clone2'] = '克隆';
$l['mig_tar_error'] = '无法制作源 '.VM_SHORT.' 的TAR文件';
$l['migrate_start'] = '开始迁移';
$l['clone_start'] = '开始克隆';
$l['mig_couldnt_edit'] = '设置配置时出错';
$l['mig_couldnt_start'] = '无法启动 '.VM_SHORT;
$l['speed_limit'] = '传输 '.VM_SHORT.' 数据的速度限制（以MBps为单位）';
$l['speed_limit_exp'] = '如果定义，传输 '.VM_SHORT.' 数据到另一台服务器将以定义的速度进行。如果未定义，默认速度为100MBps';
$l['not_updated_30_min'] = '任务自上次更新以来已超过30分钟，因此存在一些错误';
$l['no_throttle'] = '源服务器上未安装Throttle工具。请安装它或联系Virtualizor支持团队';
$l['no_gzip'] = '源服务器上未安装Gzip工具。请安装它或联系Virtualizor支持团队';
$l['lic_expired'] = '以下服务器的Virtualizor许可证已过期：';
$l['auto_select_ip'] = '自动选择IP';
$l['auto_select_ip_exp'] = '如果选中，IP将从空闲IP列表中自动分配，先到先得。';
$l['note_mig_started'] = '所选 '.VM_SHORT.' 的请求过程已启动并在后台运行，您可以在 <b><a href="'.$globals['index'].'act=tasks">任务页面</a></b> 上查看状态。';
$l['mul_disk_not_allowed'] = '此虚拟化不支持多磁盘';
$l['mul_migrate_vps'] = '多迁移 '.VM_SHORT;
$l['server_time_diff'] = '源服务器时间与主节点时间不同。请同步时间后重试。';
$l['num_free_ips'] = '空闲IP：';
$l['ips'] = 'IPv4 IP(s)';
$l['ipv6'] = 'IPv6 IP(s)';
$l['ipv6_subnet'] = 'IPv6 子网';
$l['ips_int'] = '内部IP';
$l['num_ips'] = 'IPv4数量';
$l['num_ips_exp'] = '分配给迁移的 '.VM_SHORT.' 的IPv4数量';
$l['num_ipv6'] = 'IPv6数量';
$l['num_ipv6_exp'] = '分配给迁移的 '.VM_SHORT.' 的IPv6数量';
$l['num_ipv6_subnet'] = 'IPv6子网数量';
$l['num_ipv6_subnet_exp'] = '分配给迁移的 '.VM_SHORT.' 的IPv6子网数量';
$l['num_ips_int'] = '内部IP数量';
$l['num_ips_int_exp'] = '分配给迁移的 '.VM_SHORT.' 的内部IP数量';
$l['ip_resources'] = VM_SHORT.' IP资源';
$l['disable_gzip'] = '禁用压缩';
$l['disable_gzip_exp'] = '如果选中，迁移期间将不使用压缩（即gzip）';
$l['virt_xcp'] = 'XCP';
$l['virt_proxo'] = 'Proxmox OpenVz';
$l['virt_proxk'] = 'Proxmox QEMU';
$l['virt_proxl'] = 'Proxmox LXC';
$l['virt_vzk'] = 'Virtuozzo KVM';
$l['virt_vzo'] = 'Virtuozzo OpenVZ';
$l['live_mig'] = '实时迁移';
$l['live_mig_exp'] = '如果选中，KVM '.VM_SHORT.' 将实时迁移到其他节点';
$l['err_live_mig_no_virt_support'] = '当前不支持从节点 {{from_server}} 到 {{to_server}} 的所选 '.VM_SHORT.' 的实时迁移';
$l['internal_ip_live'] = '实时迁移将仅在内部IP上进行';
$l['cpu_mode_live'] = '将CPU模式设置为CPU/主机直通';
$l['no_same_storage'] = '源和目标存储路径应相同';
$l['migrate_lock_msg'] = VM_SHORT.' 迁移正在进行中'; 
$l['clone_lock_msg'] = VM_SHORT.' 克隆正在进行中';

// HAProxy 域名转发语言用于迁移/克隆
$l['m_ignore_if_vdfconflict'] = '忽略域名转发冲突';
$l['m_ignore_if_vdfconflict_exp'] = '如果发现与目标服务器上的记录冲突，则忽略HAProxy '.VM_SHORT.' 域名转发记录';
$l['found_dest_haproxy_not_allowedports'] = '发现目标服务器上不允许的端口：{{not_allowedports}}';
$l['found_dest_haproxy_reservedports'] = '发现目标服务器上保留的端口：{{src_ports}}';
$l['found_dest_haproxy_reservedports_http'] = '发现仅保留用于HTTP或HTTPS但用于TCP的端口：{{src_ports}}';
$l['vdf_errors'] = VM_SHORT.' {{vps_name}} ({{hostname}}) 的域名转发错误：<br/>&nbsp;&nbsp;{{vdf_errors}}';
$l['vdf_conflicts'] = '发现冲突：<br>&nbsp;&nbsp;&nbsp;&nbsp;';
$l['conflict_src_ports'] = '源端口：{{src_ports}}';
$l['conflict_src_hostnames'] = '源域名/IP：{{src_hostnames}}';
$l['err_exist_src_hostname_and_port'] = '目标服务器上已存在源域名 ({{src_hostname}}) 和源端口 ({{src_port}}) 的条目';
$l['err_vdf_suggest'] = '发现域名转发记录冲突。请更新 '.VM_SHORT.' 域名转发记录或选择“忽略域名转发”选项以忽略此 '.VM_SHORT.' 的域名转发记录复制并重试';

$l['inv_io_uring'] = '目标节点不支持io uring，但它在vps中启用了';

// 直通
$l['cannot_mig_passdev'] = "无法迁移具有主机USB/PCI直通设备分配的 ".VM_SHORT."。请从 ".VM_SHORT." 中移除它们并重试";
$l['vps_having_passdev'] = "<div class='notice' id='vps_having_passdev'>以下 ".VM_SHORT." 无法 {{selected_act}}，因为这些 ".VM_SHORT." 分配了直通设备：<ul><li> {{implode}} </li></ul></div>";

// HAProxy 域名转发管理员日志和 '.VM_SHORT.' 日志
$l['domain_forwarder'] = '域名转发';
$l['source'] = '源';
$l['destination'] = '目标';
$l['protocol'] = '协议';
$l['migrated'] = '已迁移';
$l['cb_failed'] = '回调失败';
$l['task_pending'] = '待处理';

$l['locked'] = '已锁定';
$l['locked_err'] = '以下 '.VM_SHORT.' 已锁定，因此无法继续：';
$l['locked_warn'] = '以下 '.VM_SHORT.' 已锁定，因此跳过这些 '.VM_SHORT.'：';
$l['migrate_same_host'] = '由于两个服务器上的UUID相同，无法进行实时迁移。<br> 请在其中一台服务器上执行以下步骤。<br><b>在运行命令之前，请咨询系统管理员</b><br>1. 运行 "uuidgen" <br>2. 在 /etc/libvirt/libvirtd.conf 中添加生成的UUID作为 host_uuid = "UUID" <br>3. 重启 libvirtd 服务';
$l['no_shared_storage_dest_vps_disk'] = '在目标服务器上未找到适合的存储用于 '.VM_SHORT.' 磁盘：[磁盘编号] {{disk_num}}，['.VM_SHORT.' ID] {{vpsid}}';
$l['shared_storage_err'] = VM_SHORT.' 存储未共享，因此不支持迁移';
$l['shared_storage_mig'] = '共享存储迁移';
$l['shared_storage_mig_exp'] = '如果选中，则仅迁移域文件';
$l['err_shared_mig'] = '共享存储迁移仅支持实时迁移（KVM）';
$l['inv_lb_vps'] = '以下 '.VM_SHORT.' 无法迁移，因为它们是负载均衡器的一部分且目标服务器位于不同区域：<br>';
