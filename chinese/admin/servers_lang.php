<?php

//////////////////////////////////////////////////////////////
//===========================================================
// servers_lang.php
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

$l['error_unslaving'] = '解除从服务器时出错';
$l['force_unslave'] =  '执行强制解除从属关系？';
$l['ha_force_unslave_warn'] = '注意：如果执行强制解除从属关系，并且服务器处于 HA 集群中，我们将尝试从 HA 集群中移除节点，且不会进一步确认。';
$l['ha_remove_warning'] = '此服务器已启用 HA。您是否希望将此服务器从 HA 集群中移除？';
$l['yes'] = '是';
$l['no'] = '否';

$l['<title>'] = '服务器';
$l['page_head'] = '服务器';
$l['done'] = '从服务器已成功删除';
$l['conf_del'] = '您确定要删除此从服务器吗？';
$l['sbyservername'] = '名称';
$l['sbyserverip'] = 'IP';
$l['submit'] = '搜索';
$l['no_res'] = '未找到与您的搜索查询匹配的结果';
$l['plan_list'] = '计划列表';
$l['sbyservertype'] = '类型';
$l['add_server'] = '添加服务器';
$l['click_to_manage'] = '点击您希望<b>管理</b>的服务器';
$l['server_group'] = '服务器组：';
$l['default_group'] = '默认';
$l['server_type'] = '类型';
$l['server_name'] = '名称';
$l['server_ip'] = 'IP';
$l['server_group'] = '服务器组';
$l['server_manage'] = '管理服务器';
$l['server_locked'] = '服务器已锁定';
$l['server_ram'] = '内存（已分配 / 总计）';
$l['server_vps'] = VM_SHORT.'(s)';
$l['os'] = '操作系统';
$l['expires_on'] = '过期日期';
$l['version'] = '版本';
$l['server_id'] = 'ID';
$l['ms_lock'] = '锁定';
$l['ms_unlock'] = '解锁';
$l['lock_conf'] = '您确定要锁定选中的服务器吗？';
$l['unlock_conf'] = '您确定要解锁选中的服务器吗？';
$l['reason'] = '管理员锁定';
$l['reason_txt'] = '原因';
$l['terminal'] = '终端';

$l['server_hdd'] = '硬盘（空闲 / 总计）';
$l['reset_conf'] ='您确定要重置 API 密钥吗？';
$l['reset_keys'] = '重置 API 密钥';
$l['no_serid'] = '未选择服务器！';
$l['err_reset_keys'] = '重置密钥时出错';
$l['update_servers_conf'] = '您确定要更新选中的服务器吗？';
$l['update_servers'] = '更新服务器';
$l['update_started'] = '更新进程已在后台启动，您可以在任务页面查看状态';
$l['server_cores'] = '已分配的虚拟核心';
$l['sync_err'] = '同步时出错 - ';
$l['sync_done'] = '同步成功完成';
$l['resources_live'] = '实时使用情况';
$l['resources'] = '资源';
$l['sort'] = '排序';
$l['sort_col'] = '排序列';
$l['order_by'] = '排序方式';
$l['sync_server'] = '同步服务器';
$l['failed_connect_server'] = '无法连接到服务器 ID：';
?>