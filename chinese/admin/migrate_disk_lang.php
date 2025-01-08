<?php

//////////////////////////////////////////////////////////////
//===========================================================
// migrate_disk_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来自成为最好的愿望
// ----------------------------------------------------------
// 开始者: Pawan Battu
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

$l['cant_migrate'] = '磁盘迁移错误';
$l['cant_migrate_exp'] = '从服务器不允许迁移 '.VM_SHORT.' 磁盘。请从主服务器操作';
$l['no_vps'] = VM_SHORT.' 未找到';
$l['<title>'] = '迁移磁盘';
$l['disk_migration'] = '磁盘迁移';
$l['migrate_it'] = '迁移 '.VM_SHORT.' 磁盘';
$l['migrate_all'] = '迁移所选 '.VM_SHORT.' 的所有磁盘';
$l['migrate_all_exp'] = '迁移 '.VM_SHORT.' 的所有磁盘';
$l['err_del_disks'] = '删除磁盘时出错';
$l['migrate_disk_start'] = '磁盘迁移已启动';
$l['migrate_disk'] = '正在迁移磁盘';
$l['migration_complete'] = '磁盘迁移完成';
$l['no_disk'] = '无效的 '.VM_SHORT.' 磁盘';
$l['err_disk'] = '无效的磁盘数量';
$l['server_select'] = '选择服务器';
$l['server_select_exp'] = '更改当前服务器以更改服务器';
$l['no_path'] = '未找到目标磁盘路径';
$l['select_vps_disk'] = '选择 '.VM_SHORT.' 磁盘';
$l['select_vps_disk_exp'] = '选择您要操作的 '.VM_SHORT.' 磁盘';
$l['mig_checking_disk'] = '正在检查磁盘迁移的参数';
$l['err_diskmig_ha'] = '高可用性（HA）中不允许磁盘迁移';
$l['locked'] = '已锁定';

$l['no_storage_dest_vps_disk'] = '在目标服务器上未找到足够的存储空间用于 '.VM_SHORT.' 磁盘：[磁盘编号] {{disk_num}}, ['.VM_SHORT.' ID] {{vpsid}}';
$l['no_suitable_storage'] = '在目标服务器上未找到足够的存储空间用于所选 '.VM_SHORT;
$l['no_storage_select'] = '所选 '.VM_SHORT.' 虚拟化不支持存储选择，因此将使用目标服务器的主存储';
$l['not_supported'] = '此功能在以下环境中不支持：';
$l['no_disk_select'] = '未选择磁盘';
$l['mul_disk_not_allowed'] = '此虚拟化不支持多磁盘';
$l['no_storage_on_dest'] = '所选存储不存在于目标服务器上';
$l['invalid_dest_disk_format'] = '所选目标存储格式与 '.VM_SHORT.' 磁盘格式不匹配：'.VM_SHORT.' 磁盘格式：{{vps_format}}，所选目标服务器存储格式：{{dest_format}}';
$l['less_space'] = '目标服务器上的存储空间不足：所选 '.VM_SHORT.' 磁盘大小为 {{vps_disk_space}} GB，所选目标存储的剩余空间为 {{dest_disk_space}} GB';
$l['server_time_diff'] = '源服务器时间与主节点时间不同。请同步时间后重试。';
$l['err_vps_locked'] = VM_SHORT.' 已锁定';
$l['err_disks'] = VM_SHORT.' 磁盘未找到';
$l['err_save_slave'] = '在从服务器上保存数据时出错';
$l['select_storage'] = '选择存储';
$l['select_storage_exp'] = '为目标服务器上的相应磁盘选择存储。';
$l['speed_limit'] = '传输 '.VM_SHORT.'(s) 数据的速度限制（MBps）';
$l['speed_limit_exp'] = '如果定义，'.VM_SHORT.'(s) 数据传输将以定义的速度进行。如果未定义，默认速度为 100MBps';
$l['disable_gzip'] = '禁用压缩';
$l['disable_gzip_exp'] = '如果选中，迁移期间将不使用压缩（例如 gzip）';
$l['mnote3'] = '您可以离开此页面并在 <b><a href="'.$globals['index'].'act=tasks">任务页面</a></b> 上检查状态。';
$l['mig_task_not_found'] = '未找到磁盘迁移任务';
$l['no_throttle'] = '源服务器上未安装限速工具。请安装它或联系 Virtualizor 支持团队';
$l['mig_tar_error'] = '无法创建源磁盘的 TAR 文件';
$l['completed'] = '已完成';
$l['migrate_data'] = '正在迁移数据';
$l['mig_task_not_updated'] = '任务在过去 30 分钟内未更新，因此存在错误。';
$l['wrong_vpsid'] = '无法获取进度数据。提交的 '.VM_SHORT.'ID 错误。';
$l['not_updated_30_min'] = '任务在过去 30 分钟内未在主节点上更新，因此存在错误';
$l['mig_finalizing'] = '正在执行最终操作。';
$l['mig_couldnt_edit'] = '设置配置时出错';
$l['mig_couldnt_start'] = '无法启动 '.VM_SHORT;
$l['virt_xcp'] = 'XCP';
$l['virt_proxo'] = 'Proxmox OpenVz';
$l['virt_proxk'] = 'Proxmox QEMU';
$l['virt_proxl'] = 'Proxmox LXC';
$l['virt_vzk'] = 'Virtuozzo KVM';
$l['virt_vzo'] = 'Virtuozzo OpenVZ';
$l['server_offline'] = '服务器 - <b>'.$GLOBALS['servers'][$globals['server']]['server_name'].'</b> (IP: '.$GLOBALS['servers'][$globals['server']]['ip'].') 已离线';
$l['server_status_0'] = '服务器 - <b>'.$GLOBALS['servers'][$globals['server']]['server_name'].'</b> (IP: '.$GLOBALS['servers'][$globals['server']]['ip'].') 已离线';
$l['server_status_2'] = '服务器 - <b>'.$GLOBALS['servers'][$globals['server']]['server_name'].'</b> (IP: '.$GLOBALS['servers'][$globals['server']]['ip'].') 的许可证已过期';
$l['disk_create_err'] = '无法在目标服务器上创建 '.VM_SHORT.' 磁盘';
$l['migratedisk_lock_msg'] = VM_SHORT.' 磁盘迁移正在进行中'; 
$l['migrating_to_same_disk'] = '目标磁盘和源磁盘相同';
$l['also_select_swap_disk'] = '请为 Xen-PV 选择交换磁盘';