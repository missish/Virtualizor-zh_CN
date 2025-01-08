<?php

//////////////////////////////////////////////////////////////
//===========================================================
// user_notice_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来源于成为最好的渴望
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
$l['<title>'] = '用户通知';
$l['user_notice'] = '用户通知';
$l['no_notice'] = '没有添加任何通知。&nbsp;<a href="'.$globals['index'].'act=add_user_notice">现在添加通知</a>';
$l['enable'] = '启用';
$l['disable'] = '禁用';
$l['add_user_notices'] = '添加用户通知';
$l['no_subject'] = '请输入主题';
$l['no_mailbox'] = '请输入消息';
$l['done'] = '通知保存成功';
$l['disabled'] = '通知禁用成功';
$l['current_notice'] = '当前通知';
$l['edit_notice'] = '编辑通知';
$l['delete_notice'] = '删除通知';
$l['delete_notice_msg'] = '您确定要删除此通知吗？';
$l['deleted'] = '已删除';
$l['err_notice_not_found'] = '未找到此通知ID';
$l['err_only_one_active_notice'] = '一次只能激活一个通知';

$l['slave_cant_exp'] = '从服务器不允许发送邮件！';
$l['users'] = '用户';
$l['cloud_users'] = '云';
$l['all_users'] = '所有用户';
$l['no_server'] = '无服务器';
$l['selectall'] = '全选';
$l['user_already_added'] = '用户已添加！';
$l['server'] = '服务器';
$l['user_type'] = '类型';
$l['user_list'] = '用户列表';
$l['add'] = '添加';
$l['to'] = '至';
$l['usr_selected'] = '已选择用户';
$l['remove_all'] = '移除全部';
$l['subject'] = '主题';
$l['notice_type'] = '通知类型';
$l['notice_name'] = '通知名称';
$l['enabled_for'] = '可见范围';
$l['notice'] = '通知';
$l['simple_notice'] = '蓝色横幅中的信息通知';
$l['warning_notice'] = '黄色横幅中的警告通知';
$l['offers_notice'] = '绿色横幅中的成功通知';
$l['danger_notice'] = '红色横幅中的危险通知';

?>