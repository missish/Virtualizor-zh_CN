<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addserver_lang.php
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

$l['cant_add'] = '添加存储错误';
$l['cant_add_exp'] = '不允许从服务器添加任何存储！';
$l['no_name'] = '未指定存储名称';
$l['no_path'] = '未指定存储路径';
$l['no_type'] = '未指定存储类型';
$l['invalid_st_type'] = '存储类型无效';
$l['inv_group'] = '提交的组无效';
$l['inv_server'] = '提交的服务器无效';
$l['lvm_raw_only'] = 'LVM存储仅支持RAW格式';
$l['lvm_xcp_formats'] = 'LVM存储仅支持XenServer的RAW / VHD格式';
$l['vz_path_wrong'] = 'OpenVZ存储类型的路径必须为/vz';
$l['lvm_full_path'] = '请输入LVM的完整路径，包括/dev/';
$l['err_linbit_path_name'] = 'Linbit存储路径应与存储名称相同';

// 主题字符串
$l['<title>'] = '添加存储';
$l['add_storage'] = '添加存储';
$l['sub_but'] = '添加存储';
$l['st_name'] = '名称';
$l['st_name_exp'] = '创建'.VM_SHORT.'时将显示的存储名称';
$l['st_server'] = '服务器';
$l['st_exp_server'] = '能够使用此存储的服务器';
$l['st_path'] = '存储路径';
$l['st_lvm_path_exp'] = '卷组路径 <b>/dev/VG_NAME</b>';
$l['st_file_path_exp'] = '绝对路径 <b>/FileStorage</b>';
$l['st_openvz_path_exp'] = '绝对路径 <b>/vz</b>';
$l['st_zfs_path_exp'] = 'ZFS卷组路径 <b>/dev/zvol/YOUR_POOLNAME</b>';
$l['st_thin_block_path_exp'] = '精简卷组路径 <b>/dev/VGName/THINPOOLNAME</b>';
$l['st_lightbit_path_exp'] = 'Lightbit磁盘存储路径 <b>/dev/disk/by-id</b>';
$l['st_lightbit_project_name'] = 'Lightbit项目名称';
$l['st_type'] = '存储类型';
$l['st_type_exp'] = 'LVM用于常规块设备存储。精简LVM用于精简配置，并允许超额分配磁盘空间';
$l['added'] = '存储详细信息已添加。返回<a href="'.$globals['index'].'act=storage">存储概览</a>';
$l['st_oversell'] = '超额分配';
$l['st_oversell_exp'] = '您希望为此存储超额分配的最大磁盘空间。单位为<b>GB</b>';
$l['st_format'] = '文件格式';
$l['st_format_exp'] = '将在此存储中创建的'.VM_SHORT.'磁盘的格式';
$l['st_alert_threshold'] = '警报阈值';
$l['st_alert_threshold_exp'] = '如果使用量超过此百分比，将向管理员发送电子邮件';
$l['st_primary_storage'] = '主存储';
$l['st_primary_storage_exp'] = '这将是所选节点的主存储。一个节点只能有一个主存储';
$l['thin_warning'] = '精简LVM需要Linux管理知识。如果您的'.VM_SHORT.'停止工作，Virtualizor不对此负责。您同意吗？';
$l['zfs_warning'] = '<b>ZFS</b> - 如果您要添加ZFS存储，请确保您知道如何处理和管理ZFS存储。否则，您可能会丢失所有数据，Virtualizor将不对此负责！';
$l['ceph_pool_name_exp'] = 'Ceph块设备路径 <b>/dev/rbd/CEPH_POOLNAME</b>';
$l['err_proj_name'] = 'Lightbit需要项目名称';
$l['st_linbit_path_exp'] = 'Linbit存储路径名称应与存储名称相同';

?>