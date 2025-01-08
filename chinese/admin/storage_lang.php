<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backupservers_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来自于成为最好的愿望
// ----------------------------------------------------------
// 开始者: Julien
// 日期: 2012年7月19日
// 时间: 13:40 小时
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

$l['<title>'] = '存储概览';
$l['plans_tit'] = '存储概览';
$l['saved'] = '存储已成功删除';
$l['no_backupservers'] = '没有添加存储。<a href="'.$globals['index'].'act=addstorage">添加存储。</a>';
$l['no_res'] = '未找到与您的搜索查询匹配的结果';
$l['del_conf'] = '您确定要删除此存储吗？';
$l['err_del_storage'] = '无法删除存储';
$l['err_del_storage_prox'] = '无法在某些服务器上删除 Proxmox 存储';
$l['id'] = 'ID';
$l['name'] = '存储名称';
$l['vg'] = '卷组名称';
$l['edit']= '编辑';
$l['delete'] = '删除';
$l['cant_del'] = '无法删除存储';
$l['cant_del_exp'] = '无法从从服务器删除存储。请仅从主服务器执行此操作！';
$l['cant_del_head'] = '从服务器无法删除存储！';

$l['err_del_backupserver'] = '删除备份服务器时出错';
$l['err_storage_in_use'] = '以下存储当前正在使用，无法删除：';
$l['err_save_slave'] = '在从服务器上保存 '.VM_SHORT.' 数据时出错。请确保从服务器正常工作。';
$l['err_inv_bid'] = '备份服务器 ID 无效';
$l['unable_connect'] = '无法连接到服务器';
$l['success_connect'] = '连接成功！';

// 主题语言
$l['st_type'] = '类型';
$l['st_path'] = '路径';
$l['st_servers'] = '服务器';
$l['st_uuid'] = 'UUID';
$l['st_primary'] = '主存储';
$l['st_size'] = '大小';
$l['st_free'] = '空闲';
$l['st_oversell'] = '超售';
$l['st_alert_threshold'] = '警报阈值';
$l['no'] = '否';
$l['yes'] = '是';
$l['sbypath'] = '路径';
$l['sbyname'] = '名称';
$l['submit'] = '搜索';
$l['add_storage'] = '添加存储';
$l['st_format'] = '格式';
?>