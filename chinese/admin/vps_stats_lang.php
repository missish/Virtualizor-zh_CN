<?php

//////////////////////////////////////////////////////////////
//===========================================================
// vps_stats_lang.php
//===========================================================
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('非法访问');

}

$l['<title>'] = VM_SHORT.' 统计';
$l['heading'] = VM_SHORT.' 统计';
$l['page_head'] = '统计';
$l['vpsid'] = VM_SHORT.' ID';
$l['vps_name'] = VM_SHORT.' 名称';
$l['hostname'] = '主机名';
$l['cpu'] = 'CPU';
$l['ram'] = '内存';
$l['disk'] = '磁盘';
$l['inode'] = 'Inode';
$l['net_in'] = '下载';
$l['net_out'] = '上传';
$l['header_ntw_speed'] = '网络速度';
$l['display_by'] = '显示方式';
$l['from_date'] = '从';
$l['to_date'] = '至';
$l['submit_date'] = '提交';
$l['prev_month'] = '上个月';
$l['next_month'] = '下个月';
$l['graph_display'] = '显示图表';
$l['upload_graph_title'] = '上传速度';
$l['download_graph_title'] = '下载速度';
$l['total_graph_title'] = '总速度';
$l['network_speed_label'] = '网络速度';
$l['cpu_utilization'] = 'CPU 使用率';
$l['ram_utilization'] = '内存使用率';
$l['bandwidth_utilization'] = '带宽使用率';
$l['no_data'] = '无可用数据';
$l['for'] = '为';
$l['no_vps'] = '没有'.VM_LONG.'';
$l['vps_stat_off'] = '离线';
$l['vps_stat_on'] = '在线';
$l['vps_stat_suspend'] = '已暂停的'.VM_SHORT;
$l['status'] = '状态';
$l['resources_note'] = 'OpenVZ '.VM_SHORT.'显示的CPU % 是'.VM_SHORT.'内部的CPU使用率，KVM显示的是virt-top报告的CPU使用率，XEN和XCP显示的是xentop报告的CPU使用率';
$l['bandwidth'] = '带宽';
$l['lv_bandwidth'] = '带宽';
$l['unlimited'] = '无限制';
$l['io_read'] = 'I/O 读取';
$l['io_write'] = 'I/O 写入';
$l['disk_io'] = '磁盘 I/O';
$l['io_read_spd'] = 'I/O 读取速度';
$l['io_write_spd'] = 'I/O 写入速度';
$l['speed_cap'] = '速度限制';
$l['vps_upload_speed'] = '上传速度';
$l['vps_download_speed'] = '下载速度';