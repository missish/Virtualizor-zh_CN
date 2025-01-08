<?php

//////////////////////////////////////////////////////////////
//===========================================================
// performance_lang.php
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

$l['<title>'] = '服务器监控';
$l['cpu'] = 'CPU';
$l['list_process'] = '列出进程';
$l['consuming'] = '消耗资源最多的前 10 个进程';
$l['cpu_details'] = 'CPU 详情';
$l['ram_details'] = 'RAM 详情';
$l['ram_details_exp'] = '显示 RAM 信息';
$l['cpu_details_exp'] = '显示 CPU 信息';
$l['node_info'] = '节点信息';
$l['os'] = '节点的操作系统';
$l['binaries'] = '二进制文件';
$l['binaries_miss'] = '缺少二进制文件';
$l['binaries_no_miss'] = '没有缺少的二进制文件';
$l['scripts'] = '脚本';
$l['active_cron_process'] = '显示活动的 cron 进程时间';
$l['diskio'] = '磁盘 IO';
$l['diskio_exp'] = '显示当前节点的磁盘 IO';
$l['ntw_graphs'] = '网络图表';
$l['ntw_graphs_exp'] = '监控上传/下载速度';
$l['hostname'] = '主机名';
$l['ram'] = 'RAM';
$l['total_ram'] = '总内存';
$l['hdd_header'] = 'HDD 驱动器健康状态';
$l['ssd_header'] = 'SSD 驱动器健康状态';
$l['nvme_header'] = 'NVMe 驱动器健康状态';
$l['virtual_header'] = '虚拟驱动器健康状态';
$l['missing_binary_note'] = '显示 Virtualizor 核心功能所需的缺失二进制文件';
$l['note'] = '注意';
$l['ram_note'] = '此列表每 5 秒根据内存使用情况更新一次';
$l['cpu_note'] = '此列表每 5 秒根据 CPU 使用情况更新一次';
$l['disk_note'] = '此表显示每个磁盘分区的活动 I/O，每 5 秒更新一次';
$l['script_note'] = '脚本的活动时间每 5 秒更新一次';
$l['graph_note'] = '图表值每 5 秒更新一次';
$l['devices'] = '设备';
$l['devices_exp'] = '此列显示 /dev 目录中列出的设备或分区名称。';
$l['tps'] = 'TPS';
$l['tps_exp'] = '表示每秒向设备发出的传输次数。传输是对设备的 I/O 请求。多个逻辑请求可以合并为对设备的单个 I/O 请求。传输的大小不确定。';
$l['mbs'] = '读取 MB/s';
$l['mbs_exp'] = '表示从设备读取的数据量，以块数表示，即每秒兆字节。块等同于扇区，因此大小为 512 字节。';
$l['mbws'] = '写入 MB/s';
$l['mbws_exp'] = '表示写入设备的数据量，以块数表示，即每秒兆字节。';
$l['read'] = '读取 MB';
$l['read_exp'] = '读取的总块数，即兆字节。';
$l['mbw'] = '写入 MB';
$l['mbw_exp'] = '写入的总块数，即兆字节。';
$l['info'] = '需要更多信息？';
$l['nosmart'] = '没有 S.M.A.R.T 值！';
$l['id'] = 'ID';
$l['attr'] = '属性';
$l['val'] = '值';
$l['worst'] = '最差值';
$l['thresh'] = '阈值';
$l['flags'] = '标志';
$l['rv'] = '原始值';
$l['fail'] = '失败';
$l['pid'] = '进程 ID';
$l['ppid'] = '父进程 ID';
$l['cmd'] = '命令';
$l['mem'] = '内存';
$l['cronname'] = 'Cron 名称';
$l['elapsedtime'] = '已用时间（秒）';
$l['interfacename'] = '接口名称';
$l['interfaceup'] = '上传速度';
$l['interfacedwn'] = '下载速度';
$l['utility'] = '实用工具';
$l['model_family'] = '型号系列';
$l['serial_number'] = '序列号';
$l['lblock'] = '逻辑块大小';
$l['rrate'] = '转速';
$l['satav'] = 'SATA 版本';
$l['interfacespeed'] = '接口速度';
$l['firmwarev'] = '固件版本';
$l['size'] = '大小';
$l['temp'] = '温度';
$l['pass'] = '通过';
$l['error_message'] = "哎呀！这不应该发生";
$l['bw_header'] = "带宽使用情况";
?>