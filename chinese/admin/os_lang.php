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
$l['no_url'] = '文件的URL缺失';
$l['err_down'] = '下载文件时出错。请删除文件并重试。';
$l['err_down_filesize'] = '下载已开始但未完成，因为文件大小不匹配。原始大小为 $orig，但下载大小为 $downloaded。请删除文件并重试。';
$l['file_exists'] = '文件已存在 - 跳过..';
$l['file_done'] = '下载成功';

$l['<title>'] = '操作系统模板浏览器';
$l['tit_ostmp'] = '操作系统模板浏览器';
$l['done'] = '操作系统列表已保存。请等待文件下载完成';
$l['down_done'] = '所有文件已下载完成。返回 <a href="'.$globals['index'].'act=ostemplates">已安装操作系统概览</a>';
$l['head_os'] = '操作系统';
$l['head_type'] = '类型';
$l['head_name'] = '文件名';
$l['head_size'] = '大小';
$l['submit'] = '保存设置';
$l['pending'] = '待处理';

$l['status_none'] = '全部';
$l['vstype'] = '类型:';
$l['distrotype'] = '发行版:';
$l['osxen'] = 'Xen';
$l['osxenhvm'] = 'Xen HVM';
$l['osxcp'] = 'XCP';
$l['osxcphvm'] = 'XCP HVM';
$l['osopenvz'] = 'OpenVZ';
$l['oskvm'] = 'KVM';
$l['oslxc'] = 'LXC';
$l['osvzo'] = 'Virtuozzo OpenVZ';
$l['osvzk'] = 'Virtuozzo KVM';
$l['osproxo'] = 'Proxmox OpenVZ';
$l['osproxk'] = 'Proxmox KVM / QEMU';
$l['osproxl'] = 'Proxmox LXC';

$l['osalmalinux'] = 'Almalinux';
$l['osrockylinux'] = 'Rocky Linux';
$l['oscentos'] = 'CentOS';
$l['osubuntu'] = 'Ubuntu';
$l['osdebian'] = 'Debian';
$l['osfedora'] = 'Fedora';
$l['osopensuse'] = 'OpenSuse';
$l['osscientific'] = 'Scientific';
$l['oswebuzo'] = 'Webuzo';
$l['oswindows'] = 'Windows';
$l['osoracle'] = 'Oracle Linux';

// 管理员邮件 - 操作系统下载
$l['admin_dlos_sub'] = '操作系统模板下载报告';
$l['admin_dlos_body'] = '
以下是操作系统模板下载的结果：

{{os_name}}

此致，
{{sn}}
';
$l['fetching_os'] = '正在获取操作系统';
$l['file_found'] = '操作系统文件已找到';
$l['downloaded'] = '下载成功';
$l['completed'] = '任务完成';
$l['final_steps'] = '执行最终步骤';

?>