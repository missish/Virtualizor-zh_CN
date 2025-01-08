<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cli_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 2.8.7
// 灵感来自于成为最好的愿望
// ----------------------------------------------------------
// 开始者: Rahul
// 日期: 2014年2月26日
// 时间: 12:00 小时
// 网站: https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// 请阅读使用条款：https://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////


if(!defined('VIRTUALIZOR')){
	die('非法访问');
}

$l['err_invalid_param'] = "无效的参数 &soft-1;\n请阅读文档以获取更多详细信息：\nhttp://www.softaculous.com/docs/Upgrade_Script_from_CLI\n";
$l['err_no_input'] = "请提供一些输入。\n";
$l['help'] = "欢迎使用 Virtualizor 命令行界面。
可用命令：\n\t
-v 或 --version\t 获取 Virtualizor 版本信息。
-l 或 --license\t 获取 Virtualizor 许可证信息。
--update\t 更新当前服务器
--update-all\t 更新所有从服务器（仅在主服务器上有效）
如需支持，请联系我们：support@virtualizor.com
";

$l['import_error'] = "发生以下错误：\n";

$l['virt_license'] = "Virtualizor 许可证";
$l['lic_type'] = "类型";
$l['lic_status'] = "状态";
$l['num_vps'] = "'.VM_SHORT.' 数量：";
$l['licexpires'] = "过期时间";
$l['primary_ip'] = "许可证 IP";
$l['free'] = "免费";
$l['premium'] = "高级";
$l['expired'] = "已过期";
$l['never'] = "永不过期";
$l['trial'] = "试用";
$l['unlimited'] = "无限制";
$l['status_active'] = "状态";