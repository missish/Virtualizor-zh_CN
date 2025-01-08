<?php

//////////////////////////////////////////////////////////////
//===========================================================
// OS_Templates_lang.php
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

$l['no_template'] = '您必须至少选择一个操作系统模板';

$l['<title>'] = 'ISO';
$l['tit_iso'] = 'ISO';

$l['done'] = 'ISO 已成功删除';
$l['head_name'] = '文件名';
$l['media_groups'] = '媒体组';
$l['head_size'] = '大小';
$l['options'] = '选项';
$l['edit_iso'] = '编辑 ISO';
$l['del_os'] = '删除 ISO';
$l['add_iso'] = '添加 ISO';
$l['none'] = '无';
$l['submit'] = '保存设置';
$l['head_distro'] = '发行版';
$l['done'] = 'ISO 文件已成功删除';
$l['no_iso'] = '没有 ISO 文件。<a href="'.$globals['index'].'act=addiso">立即添加 ISO</a>';
$l['sync_iso'] = '同步 ISO';
$l['ms_sync_iso'] = '同步 ISO';
$l['select_servers'] = '选择服务器';
$l['select_servers_exp'] = '选择您要同步 ISO 的所有服务器';
$l['force_sync'] = '强制同步';
$l['force_sync_exp'] = '如果选中，现有模板将被删除并重新下载操作系统模板';
$l['slave_cant'] = '同步 ISO 错误';
$l['slave_cant_exp'] = '从服务器不允许同步 ISO';
$l['done_sync_iso'] = 'ISO 同步进程已在后台启动。';

?>