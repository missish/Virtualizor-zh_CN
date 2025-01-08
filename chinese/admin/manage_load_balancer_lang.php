<?php

//////////////////////////////////////////////////////////////
//===========================================================
//manage_load_balancer_lang.php
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

$l['<title>'] = '管理负载均衡器';
$l['vps_list'] = VM_SHORT.' 列表';
$l['rules_list'] = '规则列表';
$l['settings'] = '设置';
$l['no_vpses'] = '未添加 '.VM_SHORT;
$l['hostname'] = '主机名';
$l['server'] = '服务器';
$l['remove'] = '移除';
$l['lb_method'] = '负载均衡方法';
$l['choose_method'] = '选择方法';
$l['roundrobin'] = '轮询';
$l['leastconn'] = '最少连接';
$l['static-rr'] = '静态轮询';
$l['first'] = '首次';
$l['ip_hash'] = 'IP 哈希';
$l['default'] = '默认';
$l['lb_rules'] = '负载均衡规则';
$l['source_protocol'] = '源协议';
$l['source_port'] = '源端口';
$l['dest_protocol'] = '目标协议';
$l['dest_port'] = '目标端口';
$l['dir'] = '目录';
$l['save_settings'] = '保存设置';
$l['no_lb_method'] = '请提供负载均衡方法';
$l['no_source_protocol'] = '请提供源协议';
$l['no_source_port'] = '请提供源端口';
$l['no_dest_protocol'] = '请提供目标协议';
$l['no_dest_port'] = '请提供目标端口';
$l['no_dir'] = '请提供目录';
$l['rule_exists'] = '此规则已存在于我们的记录中';
$l['save_settings_done'] = '设置已成功保存';
$l['protocol'] = '协议';
$l['port'] = '端口';
$l['ssl_certificate'] = '证书';
$l['ssl_create'] = '自签名';
$l['ssl_use'] = '使用您自己的';
$l['load_balancer'] = '负载均衡器';
$l['cert_details'] = '证书详情';
$l['cert'] = '证书';
$l['key'] = '私钥';
$l['no_ssl_options'] = '请提供 SSL 选项';
$l['no_cert'] = '请提供证书';
$l['no_key'] = '请提供私钥';
$l['save'] = '保存';
$l['reinstall_ssl'] = '重新安装 SSL';
$l['reinstall_ssl_exp'] = '如果选中，将根据所选的 SSL 选项重新安装 SSL';
$l['chain'] = '证书链';
$l['ssl_name'] = 'SSL 名称';
$l['no_ssl_name'] = '请提供 SSL 名称';
$l['no_valid_certs'] = '提供的 SSL 未在我们的记录中找到';
$l['no_valid_rule'] = '提供的规则未在我们的记录中找到';
$l['no_valid_vps'] = '提供的 '.VM_SHORT.' 未在我们的记录中找到';
$l['confirm_rule_delete'] = '您确定要<b class=\'text-danger\'>删除</b>该规则吗？';
$l['confirm_vps_remove'] = '您确定要<b class=\'text-danger\'>移除</b>该 '.VM_SHORT.' 吗？';
$l['remove_rule_done'] = '规则已成功移除';
$l['remove_vps_done'] = VM_SHORT.' 已成功移除';
$l['lb_vps_is_locked'] = '负载均衡器 '.VM_SHORT.' 已锁定，因此不允许执行任何操作';
$l['edit_rule'] = '编辑规则';
$l['delete_vm'] = '同时从面板中删除 '.VM_SHORT.' 吗？';
$l['statistics'] = '统计';
$l['log'] = '日志';
?>