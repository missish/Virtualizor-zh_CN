<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来自于成为最好的愿望
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

$l['novps'] = '未指定 '.VM_SHORT.' 容器ID';
$l['no_vpsbandwidth'] = '未指定 '.VM_SHORT.' 的带宽';
$l['novpsfound'] = '未找到 '.VM_SHORT.' 配置';
$l['vpsavailable'] = VM_SHORT.' 已可用';
$l['used_ip'] = '以下IP地址已被另一个 '.VM_SHORT.' 使用：';
$l['err_insert'] = '插入 '.VM_SHORT.' 数据到数据库时发生错误';
$l['err_openvz_usedip'] = ' 无法导入，因为以下IP地址已被另一个 '.VM_SHORT.' 使用：';
$l['err_kvm_usedip'] = ' 无法导入，因为以下IP地址已被另一个 '.VM_SHORT.' 使用：';
$l['err_xen_usedip'] = ' 无法导入，因为以下IP地址已被另一个 '.VM_SHORT.' 使用：';
$l['err_openvz_import'] = '尝试导入OpenVZ '.VM_SHORT.' 时发生错误';
$l['err_kvm_import'] = '尝试导入KVM '.VM_SHORT.' 时发生错误';
$l['err_xen_import'] = '尝试导入Xen '.VM_SHORT.' 时发生错误';
$l['err_intpool_exist'] = '内部IP池已存在，名称为：';
$l['err_no_storage'] = '未找到存储。请按照以下指南添加存储：<a href="'.$globals['docs'].'Add_New_Storage" target="new">添加存储</a>';

$l['<title>'] = '导入';
$l['importvps']= '导入 '.VM_SHORT;
$l['importusers'] = '导入用户';
$l['importstorages'] = '导入存储';
$l['done'] = VM_SHORT.' 成功导入。要编辑 '.VM_SHORT.'，请<a href="'.$globals['index'].'act=editvs&vpsid=&soft-1;">点击这里</a>';

$l['done_openvz'] = VM_SHORT.' 成功导入';
$l['vpsname'] = VM_SHORT.' 容器ID';
$l['exp_vpsname'] = '请指定要导入的 '.VM_SHORT.' 容器ID';
$l['submit'] = '导入';
$l['ippresent'] = 'IP已被另一个 '.VM_SHORT.' 使用';
$l['vpsbandwidth'] = '带宽';
$l['exp_vpsbandwidth'] = '请指定 '.VM_SHORT.' 的带宽';
$l['vpsuser'] = '用户';
$l['none'] = '无';
$l['name'] = '名称';
$l['type'] = '类型';
$l['no_orphan'] = '没有 '.VM_SHORT.' 可导入';
$l['is_openvz7_warning'] = '您似乎在此服务器上安装了OpenVZ7，但正在尝试使用OpenVZ 6向导导入，请<a href="'.$globals['index'].'act=import&sa=openvz7">点击这里</a>将其作为OpenVZ 7容器导入';
$l['email'] = '电子邮件';
$l['reason'] = '原因';
$l['empty_email'] = '无电子邮件';
$l['no'] = '否';
$l['yes'] = '是';
$l['import_no'] = '是否导入？';
$l['type_user'] = '用户类型';
$l['no_users'] = '没有用户可导入';
$l['no_storages'] = '没有存储可导入';
$l['storages_exists'] = '存储已存在于Virtualizor数据库中';
$l['users_exists'] = '用户已存在于Virtualizor数据库中';
$l['send_email'] = '是否向所有要导入的用户发送电子邮件？';
$l['so_conn_err'] = '无法连接到SolusVM MySQL服务器';
$l['so_seldb_err'] = '无法选择SolusVM数据库。';

$l['db1'] = '数据库名称：';
$l['no_query'] = '无法执行查询';
$l['no_file'] = '找不到配置文件。';

$l['import_ut'] = '。请继续使用 '.VM_SHORT.' 导入工具';

$l['u_imp'] = '用户已导入，';
$l['e_sent'] = '电子邮件已发送，';
$l['nt_fetch_dbname'] = '无法从文件中获取数据库名称：';
$l['nt_fetch_mysqlpass'] = '无法从文件中获取MySQL密码：';

$l['here'] = '这里';

// SolusVM 向导
$l['solusvm_import'] = 'SolusVM 导入向导';
$l['solus_import_note'] = '在开始导入数据之前，请阅读<a href="'.$globals['docs'].'SolusVM_Import_Guide" target="_blank">SolusVM 导入指南</a>';
$l['solus_nodes_link'] = '查看节点';
$l['solus_ng_link'] = '导入节点组';
$l['solus_plans_link'] = '导入计划';
$l['solus_users_link'] = '导入用户';
$l['solus_ips_link'] = '导入IP池';
$l['solus_os_link'] = '导入操作系统模板';
$l['solus_vps_link'] = '导入 '.VM_LONG;

// SolusVM 节点
$l['solus_nodes'] = 'SolusVM 和 Virtualizor 节点';
$l['solus_nodes_id'] = '节点ID';
$l['solus_nodes_name'] = '节点名称';
$l['solus_nodes_ip'] = '节点IP';
$l['solus_nodes_virt'] = 'Virtualizor 等效项';
$l['solus_back_to_wizard'] = '返回向导';
$l['solus_green_nodes'] = '绿色行表示匹配的节点，即Virtualizor已安装在SolusVM之上的节点。';

// SolusVM 节点组
$l['err_importing_nodegroups'] = '导入节点组时发生错误：';
$l['done_solusvm_nodegroups'] = '节点组已成功导入。<a href="'.$globals['index'].'act=import&sa=solusvm">点击这里返回向导。</a>';

$l['solus_nodegroups'] = 'SolusVM 节点组导入器';
$l['solus_ng_id'] = 'ID';
$l['solus_ng_name'] = '组名称';
$l['solus_ng_nodes'] = '节点';
$l['solus_ng_virt'] = 'Virtualizor 等效项';
$l['solus_green_ng'] = '绿色背景表示要导入的节点组';

// SolusVM 用户
$l['err_importing_user'] = '导入用户时发生错误：';
$l['done_solusvm_users'] = '用户已成功导入。<a href="'.$globals['index'].'act=import&sa=solusvm">点击这里返回向导。</a>';

$l['solus_users'] = '导入用户';
$l['solus_user_type_0'] = '用户';
$l['solus_user_type_1'] = '经销商';
$l['solus_user_type_2'] = '子用户';

// SolusVM 计划
$l['err_importing_plan'] = '导入计划时发生错误：';
$l['done_solusvm_plans'] = '计划已成功导入。<a href="'.$globals['index'].'act=import&sa=solusvm">点击这里返回向导。</a>';

$l['solus_plans'] = '导入计划';
$l['solus_plan_id'] = 'ID';
$l['solus_plan_name'] = '计划名称';
$l['solus_plan_type'] = '类型';
$l['solus_plan_ram'] = '内存';
$l['solus_plan_disk'] = '磁盘';
$l['solus_plan_bandwidth'] = '带宽';
$l['solus_plan_virt'] = 'Virtualizor 等效项';
$l['solus_green_plans'] = '绿色背景表示Virtualizor将导入这些计划。';

// SolusVM 导入IP
$l['err_importing_ipblock'] = '导入IP块时发生错误：';
$l['err_importing_ip'] = '导入块节点IP时发生错误：';
$l['done_solusvm_ips'] = 'IP地址已成功导入。<a href="'.$globals['index'].'act=import&sa=solusvm">点击这里返回向导。</a>';

$l['solus_no_ips'] = '没有可导入的内容';
$l['solus_ipaddress'] = 'IP地址';
$l['solus_import_ips'] = '导入IP地址';
$l['solus_ips_name'] = 'IP块';
$l['solus_ips_type'] = '类型';
$l['solus_ips_gw'] = '网关';
$l['solus_ips_netmask'] = '子网掩码';
$l['solus_ips_ns'] = '域名服务器';
$l['solus_ips_servers'] = '服务器关系';
$l['solus_green_ips'] = '绿色背景表示Virtualizor将导入这些对象。';

// SolusVM 操作系统
$l['err_importing_os'] = '导入操作系统时发生错误：';
$l['done_solusvm_os'] = '操作系统已成功导入。<a href="'.$globals['index'].'act=import&sa=solusvm">点击这里返回向导。</a>';
$l['no_os_selected'] = '请为SolusVM操作系统模板选择Virtualizor操作系统：';

$l['solus_os'] = 'SolusVM 模板导入器';
$l['solus_os_id'] = 'ID';
$l['solus_os_name'] = '模板名称';
$l['solus_os_type'] = '类型';
$l['solus_os_virt'] = 'Virtualizor 等效项';
$l['solus_no_os'] = '在SolusVM中未找到操作系统模板';
$l['solus_green_os'] = '绿色背景表示Virtualizor将导入这些操作系统模板。未标记为绿色的模板已存在于Virtualizor中。';
$l['solus_os_used_only'] = '仅列出用于创建 '.VM_SHORT.' 的模板。未使用的模板不会列出。';

// SolusVM '.VM_SHORT.'
$l['solus_ip_not_free'] = 'IP地址不适用于 '.VM_SHORT.'。IP：';
$l['solus_no_vps_left'] = '没有 '.VM_SHORT.' 可导入';
$l['err_importing_vps'] = '导入 '.VM_SHORT.' 时发生错误：';
$l['done_solusvm_vps'] = VM_SHORT.' 已成功导入。<a href="'.$globals['index'].'act=import&sa=solusvm">点击这里返回向导。</a>';

$l['solus_vps'] = 'SolusVM '.VM_SHORT.' 导入器';
$l['solus_vps_id'] = 'ID';
$l['solus_vps_name'] = 'CTID';
$l['solus_vps_hostname'] = '主机名';
$l['solus_vps_type'] = '类型';
$l['solus_vps_user'] = '用户';
$l['solus_vps_virt'] = 'Virtualizor 等效项';

$l['solus_green_vps'] = '绿色背景表示Virtualizor将导入这些 '.VM_SHORT.'。未标记为绿色的 '.VM_SHORT.' 已存在于Virtualizor中。';
$l['solus_no_vps'] = '在此SolusVM节点中未找到 '.VM_SHORT;
$l['solus_vps_server'] = '选择顶部栏中的活动服务器以导入该服务器的虚拟机';

// Proxmox 向导
$l['proxmox_import'] = 'Proxmox 导入向导';
$l['proxmox_import_note'] = '在开始导入数据之前，请阅读<a href="'.$globals['docs'].'Proxmox_Import_Guide" target="_blank">Proxmox 导入指南</a>';
$l['proxmox_storages_link'] = '导入存储';

// Proxmox 节点
$l['proxmox_nodes'] = 'Proxmox 和 Virtualizor 节点';
$l['proxmox_nodes_id'] = '节点ID';
$l['proxmox_nodes_name'] = '节点名称';
$l['proxmox_back_to_wizard'] = '返回向导';
$l['proxmox_green_nodes'] = '绿色行表示匹配的节点，即Virtualizor已安装在Proxmox之上的节点。';
$l['proxmox_nodes_virt'] = 'Virtualizor 等效项';

// Proxmox 用户
$l['proxmox_users_server'] = '选择顶部栏中的活动服务器以导入该服务器的用户';

// Proxmox 存储
$l['err_importing_storage'] = '导入存储时发生错误：';
$l['done_proxmox_storages'] = '存储已成功导入。<a href="'.$globals['index'].'act=import&sa=proxmox">点击这里返回向导。</a>';
$l['proxmox_storage_server'] = '选择顶部栏中的活动服务器以导入该服务器的存储';

// Proxmox '.VM_SHORT.'
$l['done_proxmox_vps'] = VM_SHORT.' 已成功导入。<a href="'.$globals['index'].'act=import&sa=proxmox">点击这里返回向导。</a>';
$l['proxmox_vps'] = 'Proxmox '.VM_SHORT.' 导入器';
$l['proxmox_no_vps'] = '在此Proxmox节点中未找到 '.VM_SHORT;
$l['none']  = '无';

$l['err_empty_vps_name'] = '空的CTID或 '.VM_SHORT.' 名称';
$l['err_empty_space'] = '{{vps_name}}：已跳过，因为Virtualizor检测到其主磁盘空间为0 ({{size}})（如果这是错误检测，请联系Virtualizor支持）';
$l['succ_imp_vps'] = '成功导入以下 '.VM_SHORT;
$l['err_detect_vs_space'] = '无法检测 '.VM_SHORT.' 的空间';
$l['done_proxmox_users'] = '用户已成功导入。<a href="'.$globals['index'].'act=import&sa=proxmox">点击这里返回向导。</a>';
$l['select_prox_server'] = '请从顶部栏中选择Proxmox服务器以继续';

?>