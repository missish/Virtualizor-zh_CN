<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ips_lang.php
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

$l['error_deleting'] = '删除 IP 时出错';

$l['<title>'] = 'IP 列表';
$l['ip_list'] = 'IP 列表';
$l['done'] = 'IP 已成功删除。正在重新加载页面！';
$l['no_ips'] = '没有 IP 地址。<a href="'.$globals['index'].'act=addips">立即添加 IP</a>';
$l['no_res'] = '未找到与您的搜索查询匹配的结果';
$l['sbyip'] = 'IP';
$l['sbyippool'] = 'IP 池';
$l['sbyippoolid'] = 'IP 池 ID';
$l['mac'] = 'MAC';
$l['submit'] = '搜索';
$l['edit_ip'] = '编辑 IP';
$l['del_ip'] = '删除 IP';
$l['ip_pool'] = 'IP 池';
$l['none'] = '无';
$l['assigned'] = 'IP 已分配给 '.VM_SHORT.':';
$l['free_ip'] = '空闲 IP';
$l['add_ips'] = '添加 IP';
$l['ip_server'] = '服务器';
$l['assigned_to'] = '分配给';
$l['ip_mac'] = 'MAC';
$l['mac_auto'] = '自动生成';
$l['ip_in_use'] = '此 IP 地址已分配给 '.VM_SHORT;
$l['ip'] = 'IP';
$l['del_ips'] = '删除 IP';
$l['no_ip_selected'] = '未选择任何 IP';
$l['m_done'] = 'IP 已成功删除';
$l['sbvps_name'] = VM_SHORT.' 主机名';
$l['sbservers'] = '服务器';
$l['status_none'] = '无';
$l['in_use'] = '以下 IP 正在使用中，因此无法删除：';
$l['with_selected'] = '选中项';
$l['go'] = '执行';
$l['prog_begin'] = '正在删除 IP';
$l['id'] = 'ID';
$l['show_all'] = '显示全部';
$l['show_locked'] = '显示锁定';
$l['show_unlocked'] = '显示未锁定';
$l['ms_lockip'] = '锁定';
$l['ms_unlockip'] = '解锁 IP';
$l['lockip_conf'] = '您确定要锁定选中的 IP 吗？';
$l['unlockip_conf'] = '您确定要解锁选中的 IP 吗？';
$l['ms_moveips'] = '移动 IP';
$l['moveips_conf'] = '您确定要将 IP 移动到其他 IP 池吗？';

$l['done_lockip'] = '选中的 IP 已成功锁定';
$l['done_unlockip'] = '选中的 IP 已成功解锁';
$l['locked_title'] = '锁定 IP';
$l['locked_label'] = '已锁定';
$l['error_occurred'] = '似乎存在网络连接问题，请刷新页面并重试';
$l['error_session_logout'] = '您的会话似乎已过期，请登录并重试';
$l['error_updating_data'] = '操作失败，更新数据时出错';
$l['inv_option'] = '选择了无效的选项！';
$l['slave_not_permitted'] = '从服务器不允许此操作';
$l['done_moveips'] = '选中的 IP 已成功移动';
$l['moveips_noipp_sel'] = '请先选择 IP 池';
$l['moveips_inv_ippid'] = '未找到选中的 IP 池 ID ({{ippid}})';
$l['netmask'] = '子网掩码';
$l['gateway'] = '网关';
$l['users'] = '用户';