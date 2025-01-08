<?php

if(!defined('VIRTUALIZOR')){

	die('非法访问');

}

$l['<title>'] = '节点性能';
$l['page_head'] = '节点性能';
$l['display_by'] = '显示方式';
$l['select_month'] = '月份';
$l['select_date'] = '日期';
$l['from_date'] = '从';
$l['to_date'] = '到';
$l['submit_date'] = '提交';
$l['prev_month'] = '上个月';
$l['next_month'] = '下个月';
$l['cpu_label'] = 'CPU 使用率';
$l['ram_label'] = '内存';
$l['disk_label'] = '磁盘 / Inode';
$l['ntw_label'] = '网络速度';
$l['cpu_graph_title'] = 'CPU 使用情况';
$l['ram_graph_title'] = '内存使用情况';
$l['disk_graph_title'] = '磁盘使用情况';
$l['inode_graph_title'] = 'Inode 使用情况';
$l['download_graph_title'] = '下载速度';
$l['upload_graph_title'] = '上传速度';
$l['total_graph_title'] = '总速度';
$l['network_speed_label'] = '网络速度';
$l['date_label'] = '日期 (月/日)';
$l['invalid_from_date'] = '无效的起始日期';
$l['invalid_to_date'] = '无效的结束日期';
$l['no_data'] = '未找到数据';
$l['invalid_format'] = '请输入正确格式的日期';
$l['confirm_performance'] = '您确定吗？\n 这可能会影响浏览器性能。';
?>