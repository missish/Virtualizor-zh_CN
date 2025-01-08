<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_plans_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 2.8.1
// 灵感来自成为最好的愿望
// ----------------------------------------------------------
// 开始者: Husain
// 日期: 2015年11月10日
// 时间: 13:16 小时
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

$l['<title>'] = '防火墙计划';
$l['firewall_plans_tit'] = '防火墙计划';
$l['submit'] = '搜索';
$l['fwid'] = 'ID';
$l['fwp_name'] = '计划名称';
$l['backup_server'] = '备份服务器';
$l['frequency'] = '频率';
$l['dir'] = '目录';
$l['add_firewall_plan'] = '添加防火墙计划';
$l['saved'] = '防火墙计划已成功删除';
$l['no_plans'] = '没有防火墙计划。<a href="'.$globals['index'].'act=addfirewall_plan">立即添加防火墙计划</a>';
$l['no_res'] = '未找到与您的搜索查询匹配的结果';
$l['del_conf'] = '您确定要删除此计划吗？';
$l['log_bkup_disabled'] = '此备份计划已禁用！';
$l['no_firewall_plan'] = '未找到防火墙计划';
$l['user'] = '用户';
$l['allow_enduser'] = '用户可以使用？';
$l['default_policy'] = '默认策略';
$l['accept'] = '接受';
$l['yes'] = '是';
$l['no'] = '否';
$l['drop'] = '丢弃';
$l['rules'] = '规则';
$l['admin_default'] = '管理员默认';
$l['firewall_plan_deletion_in_background'] = '有 '.VM_SHORT.'(s) 正在使用要删除的防火墙计划。任务已在后台启动';
$l['ask_confirmation_to_delete_admin_firewall'] = '您确定要删除防火墙计划吗？<br>因为有 '.VM_SHORT.'(s) 正在使用这些防火墙计划。<br>正在使用的防火墙计划：';
$l['invalid_fwids'] = '提供的防火墙计划 ID 无效。无效的防火墙计划 ID(s)：';
$l['enduser_fwids_provided'] = '无法从管理员删除最终用户防火墙计划。这些是 ID(s)：';
?>