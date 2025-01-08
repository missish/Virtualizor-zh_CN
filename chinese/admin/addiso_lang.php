<?php

//////////////////////////////////////////////////////////////
//===========================================================
// logs_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来源于追求成为最优秀的目标
// ----------------------------------------------------------
// 开始者: Alons
// 日期:       2010年3月8日
// 时间:       23:00
// 网站:       https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// 请阅读 https://www.virtualizor.com 上的使用条款
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//=========================================================== 
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('非法入侵');

}

$l['no_url'] = '请指定一个有效的URL';
$l['no_isofile'] = '请指定一个有效的ISO文件名';
$l['err_size'] = '无法确定ISO文件的大小';
$l['invalid_url'] = '提供的URL无效。只允许使用http、https和ftp协议';

$l['<title>'] = '添加ISO';
$l['addiso'] = '添加ISO';
$l['isoname'] = 'ISO文件URL';
$l['isofile'] = 'ISO文件名';
$l['submit'] = '下载ISO';
$l['media_groups'] = '媒体组';
$l['isoname_exp'] = '如果您希望从互联网上下载此ISO，请提供URL。否则，将假设ISO文件已经存在于系统中。';
$l['done'] = 'ISO已保存。返回 <a href="'.$globals['index'].'act=iso">ISO概览</a>';

$l['aiso_no_iso_db_ent'] = '从数据库获取ISO条目失败';
$l['aiso_chk_dat'] = '正在检查数据';
$l['aiso_task_start'] = '添加ISO任务已在后台开始，您可以从任务管理器查看任务的状态';
$l['aiso_chk_iso_url'] = '正在验证ISO链接';
$l['aiso_iso_no_url'] = 'ISO URL为空';
$l['aiso_file_exist'] = '找到文件，大小为';
$l['aiso_task_started'] = '开始从URL下载';
$l['aiso_dling'] = '正在下载ISO';
$l['aiso_dl_failed'] = '下载ISO失败';
$l['aiso_dl_empty'] = '下载的文件大小为零，即文件为空';
$l['aiso_dl_success'] = '下载成功';

?>
