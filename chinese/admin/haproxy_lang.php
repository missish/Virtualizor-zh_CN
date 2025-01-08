<?php

//////////////////////////////////////////////////////////////
//===========================================================
// haproxy.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来自于成为最好的愿望
// ----------------------------------------------------------
// 开始者: Abhijeet
// 日期: 2017年2月10日
// 时间: 16:30 小时
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
$l['<title>'] = VM_SHORT.' 域名转发';
$l['<haproxy>'] = VM_SHORT.' 域名转发';
$l['title_haproxy'] = VM_SHORT.' 域名转发';

$l['slave_cant_manage'] = '管理 '.VM_SHORT.' 域名转发记录错误';
$l['slave_cant_exp'] = '从服务器不允许管理 '.VM_SHORT.' 域名转发！';
$l['slave_cant_head'] = '错误';

$l['vdf_serid'] = '服务器';
$l['vdf_vpsid'] = VM_SHORT;
$l['vdf_proto'] = '协议';
$l['vdf_src_hname'] = '源域名/IP';
$l['vdf_src_dom'] = '源域名';
$l['vdf_src_ip'] = '源IP';
$l['vdf_src_port'] = '源端口';
$l['vdf_dest_ip'] = '目标IP';
$l['vdf_dest_port'] = '目标端口';

$l['vdf_add_title'] = '新建域名转发记录';
$l['vdf_sel_proto'] = '选择协议';
$l['vdf_select_vps'] = '选择 '.VM_SHORT;
$l['vdf_select_ip'] = '选择IP';

$l['vdf_no_act_sel'] = '未选择操作，请选择一个操作后重试';
$l['vdf_success_add'] = '添加成功';
$l['vdf_success_update'] = '更新数据成功';
$l['vdf_success_save'] = '保存更改成功';
$l['vdf_no_server_found'] = '未找到服务器';
$l['vdf_conf_del_entries'] = '删除所选条目？';
$l['vdf_success_del_entries'] = '删除条目成功';
$l['vdf_ser_not_found'] = '请求的服务器未找到';
$l['vdf_vps_not_found'] = '请求的 '.VM_SHORT.' ({{vpsid}}) 在所选服务器 ({{server}}) 上未找到';
$l['vdf_proto_no_support'] = '协议ID ({{protocolid}}) 不支持';
$l['vdf_no_id_found'] = 'VDF ID ({{id}}) 未找到';
$l['vdf_no_vps_id_found'] = VM_SHORT.' ID ({{vpsid}}) 未找到';

$l['vdf_empty_allowed_src_ips'] = '允许的源IP列表为空，管理员用户必须在使用此功能之前设置此IP列表';
$l['vdf_inv_src_port'] = '源端口 ({{src_port}}) 不是有效的端口号';
$l['vdf_in_use_src_port'] = '源端口 ({{src_port}}) 已被使用';
$l['vdf_inv_src_hostname'] = '所选源域名 ({{src_hostname}}) 不是有效的域名';
$l['vdf_inv_src_ip'] = '源IP ({{src_ip}}) 不是有效的IP';
$l['vdf_not_available_src_ip'] = '所选源IP ({{$src_ip}}) 不可用于 '.VM_SHORT.' 域名转发';
$l['vdf_port_not_supported_tcp'] = '源端口 ({{src_port}}) 不支持所选协议TCP，仅支持协议：HTTP和HTTPS';

$l['vdf_inv_dest_port'] = '目标端口 ({{dest_port}}) 不是有效的端口号';
$l['vdf_inv_dest_ip'] = '目标IP ({{dest_ip}}) 不是有效的IP或未分配给此 '.VM_SHORT;

$l['vdf_note_point_domain'] = '注意：要使域名转发生效，此VPS的域名 ({{src_hostname}}) 必须指向以下IP之一：'."\n".'{{ips_list}}';
$l['vdf_err_exist_src_hostname_and_port'] = '源域名 ({{src_hostname}}) 和源端口 ({{src_port}}) 的记录已存在';

$l['vdf_db_query_error'] = '执行数据库查询时发生错误，无法处理请求';
$l['vdf_err_unknown'] = '处理请求时发生未知错误';

$l['vdf_err_haproxy_port_empty'] = '源端口为空';
$l['vdf_err_haproxy_port_used'] = '源端口 {{src_port}} 已被使用';
$l['vdf_in_haproxy_reservedports'] = '源端口 {{src_port}} 在保留端口列表中';
$l['vdf_in_haproxy_reservedports_http'] = '源端口 {{src_port}} 在仅允许HTTP或HTTPS协议的保留端口列表中';
$l['vdf_notin_haproxy_allowedports'] = '源端口 {{src_port}} 不在允许的端口列表中';

$l['vdf_skipped_msg'] = '此条目已被跳过';
$l['vdf_skipped_haproxy_reservedports'] = '源端口在阻止的端口列表中';
$l['vdf_skipped_haproxy_reservedports_http'] = '源端口在仅允许HTTP和HTTPS的保留端口列表中';
$l['vdf_skipped_haproxy_allowedports'] = '源端口不在允许的端口列表中';

//VDF 信息div语言
$l['vdf_info'] = '信息';
$l['vdf_info_server'] = '服务器';
$l['vdf_info_reservedports'] = '保留端口';
$l['vdf_info_allowedports'] = '允许的端口';
$l['vdf_info_reservedports_http'] = '仅用于HTTP/HTTPS的保留端口';

//VDF 管理员和 '.VM_SHORT.' 日志
$l['vdf_domain_forwarding'] = '域名转发';
$l['vdf_source'] = '源';
$l['vdf_destination'] = '目标';
$l['vdf_added'] = '已添加';
$l['vdf_updated'] = '已更新';
$l['vdf_removed'] = '已移除';
$l['vdf_removed_multiple'] = '已移除多个';

$l['vdf_tooltip_edit'] = '编辑此记录';
$l['vdf_tooltip_save'] = '保存对此记录的更改';
$l['vdf_tooltip_revert'] = '撤销对此记录的更改';
$l['vdf_tooltip_delete'] = '删除此记录';
$l['vdf_invalid_server'] = '无效的服务器ID';

// HA 服务器页面语言
$l['enabled'] = '已启用';
$l['status'] = '状态';
$l['yes'] = '是';
$l['no'] = '否';
$l['running'] = '运行中';
$l['stopped'] = '已停止';
$l['error_state'] = '发生错误';
$l['not_installed'] = '未安装';
$l['list_records'] = '列出记录';
$l['map_ips'] = '映射IP';
$l['service_reload'] = '重新加载';
$l['heading_update_old_src_ips'] = '用新的源IP更新旧的源IP';
$l['head_old_src_ips'] = '旧的源IP';
$l['head_new_src_ips'] = '新的源IP';
$l['err_request'] = '处理请求时出错';
$l['err_no_old_src_ips'] = '未找到此服务器的旧源IP';
$l['empty_old_src_ips'] = '旧的源IP列表为空或无效';
$l['success_reload_ha_service'] =  '重新加载服务成功';
$l['err_reload_ha_service'] = '重新加载服务器ID为 {{serid}} 的HAProxy服务时出错，请检查HAProxy任务日志以获取更多信息';
$l['tooltip_update_server_src_ips'] = '更新服务器的源IP';
$l['tooltip_reload_haproxy_service'] = '重新加载HAProxy服务';
$l['confirm_update_src_ips'] = '您确定要更新此服务器的源IP吗？';

$l['err_map_src_ips'] = '无法将旧源IP ({{old_srcip}}) 映射到新源IP ({{new_scrip}})，因为旧源IP使用的以下端口在新源IP上不可用：'."\n".'{{src_ports}}';
$l['err_update_server_src_ips'] = '映射源IP时出错：'."\n".'{{ip_ports}}';

?>