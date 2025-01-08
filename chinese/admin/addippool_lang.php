<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addippool_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来源于成为最好的愿望
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

$l['slave_cant_add'] = '添加IP池错误';
$l['slave_cant_exp'] = '不允许从服务器添加IP池！';
$l['slave_cant_head'] = '错误';
$l['no_iptype'] = '未提交IP池类型';
$l['no_name'] = '未指定IP池名称';
$l['no_gateway'] = '未指定网关';
$l['no_netmask'] = '未指定子网掩码';
$l['no_ns1'] = '未指定名称服务器1';
$l['no_ns2'] = '未指定名称服务器2';
$l['no_servers'] = '未选择IP池的服务器';
$l['invalid_server'] = '提交的服务器无效';
$l['inv_gateway'] = '网关无效';
$l['inv_netmask'] = '子网掩码无效';
$l['inv_netmask_6'] = '子网掩码无效。必须是1-128之间的整数';
$l['inv_ns1'] = '名称服务器1无效';
$l['inv_ns2'] = '名称服务器2无效';
$l['inv_startip'] = '提交的第一个IP无效';
$l['inv_endip'] = '提交的最后一个IP无效';
$l['inv_ipv6'] = '提交的IPv6无效';
$l['no_ipv6_num'] = '未指定要生成的IPv6数量';
$l['ipv6_too_much'] = '要生成的IPv6数量不应超过5000';
$l['invalid_range'] = '提交的IP范围无效';
$l['ips_exist'] = '以下IP已存在';
$l['err_save_slave'] = '在从服务器上保存IP池时出错';
$l['err_ippool'] = '保存IP池时出错';
$l['err_ip'] = '保存IP时出错';
$l['no_macs'] = '请指定MAC地址';
$l['entermac_exp'] = '将MAC字段留空以自动生成MAC。';
$l['inv_ip'] = '提交的IP地址无效';
$l['inv_mac'] = '提交的MAC地址无效';
$l['pool_exists'] = '具有指定名称的池已存在';
$l['err_create_nat'] = '在从服务器上创建NAT网络时出错';
$l['no_ip_nat'] = '未指定NAT的第一个IP和最后一个IP';
$l['error_nat_create'] = '创建NAT网络时出错';
$l['internal_ipv4'] = '内部IP范围目前只能是IPv4';
$l['internal_no_bridge'] = '内部IP池缺少桥接';
$l['internal_range_exists'] = '内部IP池已存在。一个主机节点上只能有一个内部IPv4池和另一个内部IPv6池。';
$l['error_internal_network_create'] = '创建内部网络时出错';
$l['inv_server'] = '提交的服务器无效';
$l['nat_route_oneserver'] = '如果选择了多个服务器，则不允许NAT和路由';
$l['inv_group'] = '提交的组无效';
$l['nat_ipv6_err'] = 'IPv6池不允许NAT和路由';
$l['ipv6_subnet_there'] = '存在与您尝试创建的范围相同的子网';
$l['error_primary_ip'] = '已作为主IP存在。请输入不同的IP。';
$l['vlan'] = '启用VLAN';
$l['vlan_exp'] = '如果选中，将使用VLAN网络';
$l['vlan_bridge'] = 'VLAN桥接';
$l['vlan_bridge_exp'] = 'VLAN桥接必须由管理员配置。请参阅<a href="'.$globals['docs'].'VLAN" target="_blank">此</a>指南以获取更多信息。';
$l['vlan_no_bridge'] = '请指定VLAN桥接名称';
$l['ips_exist_same_ser'] = '所选服务器上存在IP范围';
$l['vlan_tag_err'] = 'VLAN标签值必须在1-4094之间';

// 字符串
$l['<title>'] = '添加IP池';
$l['addippool'] = '添加IP池';
$l['iptype'] = '类型';
$l['ippool_name'] = '名称';
$l['nameofip'] = '此IP池的名称';
$l['gateway'] = '网关';
$l['netmask'] = '子网掩码';
$l['routing_prefix'] = '(路由前缀)';
$l['netmask_6'] = '1-128之间的整数';
$l['nameserver'] = '名称服务器';
$l['unsure_1'] = '如果不确定，请使用4.2.2.1';
$l['unsure_2'] = '如果不确定，请使用4.2.2.2';
$l['unsure_1_6'] = '如果不确定，请使用2001:4860:4860::8888';
$l['unsure_2_6'] = '如果不确定，请使用2001:4860:4860::8844';
$l['first_IP'] = '第一个IP';
$l['last_IP'] = '最后一个IP';
$l['ipv6_range'] = '生成IPv6';
$l['ipv6_num'] = 'IPv6数量';
$l['ipv6_num_exp'] = '要生成的IPv6地址数量。';
$l['pool_server'] = '服务器';
$l['exp_server'] = '注意：NAT和路由仅允许一个服务器';
$l['sub_but'] = '添加IP池';
$l['ser_id'] = 'ID';
$l['ip'] = 'IP';
$l['mac_addr'] = 'MAC';
$l['done'] = 'IP池已保存。返回<a href="'.$globals['index'].'act=ippool">IP池概览</a>';
$l['done_ipv6_subnet'] = '要生成IPv6子网，请点击<a href="'.$globals['index'].'act=addiprange&ippid={{ippid}}">此处</a>';
$l['add_more_ips'] = '+';
$l['or'] = '或';
$l['optional_firstip'] = '如果要向IP池添加范围，请指定第一个IP。';
$l['optional_lastip'] = '如果要向IP池添加范围，请指定最后一个IP。';
$l['subnet'] = '启用NAT';
$l['exp_subnet'] = '仅在数据中心不允许桥接网络并且您正在添加子网IP时启用此选项。<br />请参阅<a target="_blank" href="'.$globals['docs'].'NAT">此</a>以获取更多信息。<br />
<b>仅添加上面的第一个和最后一个可用IP。<br />如果启用，则无法向此池添加更多IP。</b>';
$l['add_route'] = '使用路由网络';
$l['exp_add_route'] = '如果选中，将使用路由网络';
$l['internal'] = '是内部IP范围吗？';
$l['internal_exp'] = '您可以为虚拟机分配内部IP以进行内部通信。如果此IP池用于公共IP，请不要选中此选项';
$l['internal_bridge'] = '内部IP桥接';
$l['internal_bridge_exp'] = '将在节点上用于内部IP范围的桥接。请参阅我们的指南以创建<a target="_blank" href="'.$globals['docs'].'Internal_Network">内部桥接</a>';
$l['server_choose'] = '选择服务器';
$l['ipv6_subnet'] = '生成子网';
$l['ipv6_subnet_exp'] = '如果要创建子网，您将在创建IP池后被重定向';
$l['mtu'] = 'MTU';
$l['exp_mtu'] = '指定最大传输单元（字节）';
$l['vlan_tag'] = 'VLAN标签';
$l['vlan_tag_exp'] = '指定VLAN标签号（0-4094）。仅适用于Proxmox。';
$l['no_int_pool'] = '内部池不能分配给用户。';
$l['select_user'] = '选择用户';
$l['select_user_exp'] = '选择您要分配此IP池的用户';
$l['select_pdns_server'] = '选择PDNS服务器';
$l['select_pdns_server_exp'] = '选择您要分配此IP池的pdns服务器，RDNS记录的条目将存储在所选PDNS服务器中';
$l['invalid_pdns'] = '请选择正确的pdns服务器';

?>