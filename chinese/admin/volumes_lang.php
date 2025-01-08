<?php

//////////////////////////////////////////////////////////////
//===========================================================
// volume.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来源于成为最好的渴望
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

$l['<title>'] = '卷';
$l['heading'] = '卷';
$l['no_vps'] = '未找到'.VM_SHORT.'';
$l['add_user'] = '选择用户';
$l['no_id'] = '请选择一个'.VM_SHORT.'';
$l['no_server'] = '请选择服务器';
$l['no_size'] = '请输入卷大小';
$l['no_storage'] = '请选择存储';
$l['no_disk_name'] = '请指定磁盘名称';
$l['no_disk_format'] = '请指定磁盘格式';
$l['restore'] = '恢复';
$l['inv_vps_disk'] = VM_SHORT.'中没有磁盘';
$l['unsupported_virt'] = '所选虚拟化不支持热插拔';
$l['no_multidisk_support'] = '所选虚拟化不支持多磁盘';
$l['ide_not_support'] = '总线驱动IDE不支持热插拔';
$l['disk_create_err'] = '无法创建'.VM_SHORT.'磁盘服务器';
$l['st_type'] = '类型';
$l['st_path'] = '路径';
$l['st_servers'] = '服务器';
$l['st_uuid'] = 'UUID';
$l['st_size'] = '大小';
$l['st_vm'] = 'Vpsid';
$l['st_user'] = '用户';
$l['st_id'] = 'ID';
$l['st_name'] = '名称';
$l['st_mnt'] = '挂载';
$l['sbypath'] = '路径';
$l['sbyname'] = '名称';
$l['sbyemail'] = '用户';
$l['submit'] = '搜索';
$l['add_vol'] = '添加卷';
$l['st_format'] = '格式';
$l['no_user_found'] = '未找到用户';
$l['choose_action'] = '选择操作';
$l['attach_vol'] = '附加';
$l['detach_vol'] = '分离';
$l['resize_vol'] = '调整大小';
$l['disk_not_attached'] = '磁盘未附加';
$l['disk_already_attached'] = '磁盘已附加';
$l['vol_submit'] = '提交';
$l['no_disk_did'] = '未找到磁盘';
$l['disk_in_use'] = '磁盘正在使用中';
$l['disk_not_del'] = '删除磁盘时出错：';
$l['disk_size_zero'] = '磁盘大小不能为零或小于当前大小';
$l['err_vol_disk_resize'] = '调整卷大小时出错';
$l['invalid_format'] = '指定的磁盘格式类型无效';
$l['search'] = '搜索';
$l['slave_cant'] = '添加卷错误';
$l['slave_cant_exp'] = '从服务器不允许添加卷磁盘！';
$l['add_volume_disk'] = '添加卷磁盘';
$l['vs_server'] = '服务器';
$l['exp_server'] = '更改当前服务器以更改服务器';
$l['edit_exp_server'] = '将执行操作的服务器（无需选择）';

$l['vps'] = '选择'.VM_SHORT.'';
$l['vps_id'] = '选择'.VM_SHORT.'';
$l['vs_user_exp'] = '选择现有的'.VM_SHORT.' ID';
$l['edit_vps_exp'] = VM_SHORT.' ID';
$l['vol_space_exp'] = '选择存储并添加卷大小';
$l['vol_space'] = '卷大小';
$l['e_vol_space_exp'] = '指定要调整的卷大小';
$l['vol_name'] = '卷名称';
$l['vol_name_exp'] = '指定卷的名称';
$l['vol_name_edit_exp'] = '卷的名称';
$l['attach_volume_exp'] = '如果选中，卷将被创建并附加到选定的'.VM_SHORT.'，否则仅创建卷';
$l['attach_volume'] = '附加卷';
$l['format_type_exp'] = '卷将格式化的文件系统类型';
$l['format_type'] = '格式类型';
$l['mount_volume_exp'] = '如果指定，则卷将挂载到'.VM_SHORT.'内的指定目录（注意：QCOW2格式不支持挂载）';
$l['mount_volume'] = '挂载点';
$l['create_vol'] = '创建卷';
$l['vol_edit'] = '编辑卷';
$l['no_volumes'] = '没有卷：<a href="javascript:void(0);" onclick="return show_addvol_window();">现在添加卷</a>';
$l['xfs_not_qcow2'] = 'XFS格式不支持QCOW2类型的磁盘格式';
$l['disk_attached_resize'] = '卷无法调整大小，因为它已附加到'.VM_SHORT.'';
$l['vps_not_found'] = VM_SHORT.'未找到';
$l['err_max_size'] = '主磁盘大小大于或等于2TB目前不支持';
$l['inv_space'] = '提交的空间格式无效';
$l['no_storage'] = '未找到主存储';
$l['inv_storage_ha'] = '所选存储不是共享存储。为HA虚拟机添加共享存储';
$l['mul_storage'] = '此虚拟化类型不支持辅助磁盘选项';
$l['less_space'] = '节点没有足够的磁盘空间来创建此'.VM_SHORT.'';
$l['inv_storage'] = VM_SHORT.'的存储无效';
$l['vps_locked'] = VM_SHORT.'已锁定，无法执行任何操作';
$l['vps_rescue'] = VM_SHORT.'处于救援模式，无法执行任何操作';
$l['resizing_vol'] = '正在调整卷大小';
$l['vm_not_persistent'] = VM_SHORT.'不是持久化的';
$l['attaching_disk'] = '正在将磁盘附加到'.VM_SHORT.'';
$l['attaching_disk_error'] = '将磁盘附加到'.VM_SHORT.'失败';
$l['completed'] = '完成';
$l['creating_vol'] = '正在创建卷';
$l['started_background'] = '任务已在后台启动';
$l['cant_mount_enable_guest_agent'] = '此'.VM_SHORT.'的客户代理已禁用。请启用客户代理以将卷挂载到指定的挂载点';
$l['deleting_vol'] = '正在删除卷';
$l['err_deleting_vol'] = '删除卷时出错';
$l['deleted_vol'] = '已删除卷';