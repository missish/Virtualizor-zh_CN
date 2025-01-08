<?php

//////////////////////////////////////////////////////////////
//===========================================================
// users_lang.php
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


$l['<title>'] = '用户';
$l['usr_tit'] = '用户';
$l['saved'] = '用户已成功删除';
$l['no_users'] = '没有用户。<a href="'.$globals['index'].'act=adduser">现在添加用户</a>';
$l['no_res'] = '未找到与您的搜索查询匹配的结果';
$l['usr_id'] = 'ID';
$l['username'] = '用户名';
$l['usr_type'] = '用户类型';
$l['add_usr'] = '添加用户';
$l['del_usr'] = '删除用户';
$l['edit_usr'] = '编辑用户';
$l['Admin'] = '管理员';
$l['Cloud'] = '云';
$l['User'] = '用户';
$l['search_email'] = '邮箱';
$l['search_id'] = 'ID';
$l['search_type'] = '类型';
$l['submit'] = '搜索';
$l['user_1'] = '管理员';
$l['user_2'] = '云';
$l['user_0'] = '用户';
$l['no_of_vps'] = VM_SHORT.' 数量';
$l['bw_used'] = '已用带宽';
$l['slave_cant_delete'] = '从服务器不允许删除用户。';
$l['ms_suspend'] = '暂停';
$l['ms_unsuspend'] = '取消暂停';
$l['ms_deactivate_2fa'] = '停用双因素认证';
$l['deactivate_2fa_conf'] = '您确定要停用所选用户的双因素认证吗？';
$l['suspend_user'] = '暂停用户';
$l['suspend_conf'] = '暂停用户将同时暂停其所有'.VM_SHORT.'。您确定要暂停该用户吗？';
$l['unsuspend_user'] = '取消暂停用户';
$l['unsuspend_conf'] = '取消暂停用户将同时取消暂停其所有'.VM_SHORT.'。您确定要取消暂停该用户吗？';
$l['err_suspend'] = '暂停用户时出现了一些错误';
$l['err_unsuspend'] = '取消暂停用户时出现了一些错误';
$l['err_suspend_vpses'] = '暂停以下ID的'.VM_SHORT.'时出现了一些错误：';
$l['err_unsuspend_vpses'] = '取消暂停以下ID的'.VM_SHORT.'时出现了一些错误：';
$l['wiki_help'] = '您可以使用 * 进行通配符搜索<br>例如：abc* 将匹配以 abc 开头的邮箱';
$l['slave_cant_suspend'] = '从服务器不允许暂停用户';
$l['slave_cant_unsuspend'] = '从服务器不允许取消暂停用户';
$l['2fa_status'] = '双因素认证';
$l['2fa_status_on'] = '最终用户已配置双因素认证';
$l['2fa_status_off'] = '最终用户未配置双因素认证';
$l['clous_user_band_note'] = '注意：云用户带宽包括子用户的总带宽';
$l['status'] = '状态';
$l['status_active'] = '账户已激活';
$l['status_inactive'] = '账户未激活';
$l['activate'] = '激活账户';
$l['deactivate'] = '停用账户';
$l['activate_account_conf'] = '您确定要激活所选用户的账户吗？';
$l['deactivate_account_conf'] = '您确定要停用所选用户的账户吗？';
$l['slave_cant_change_user_status'] = '从服务器不允许激活或停用用户。';
$l['dont_destroy_vps'] = '不销毁'.VM_SHORT.'';
$l['dont_destroy_vps_help'] = '如果选中此选项，则不会删除'.VM_SHORT.'';
$l['dont_destroy_vps_continue'] = '继续';
$l['dont_destroy_vps_header'] = '您是否要保留'.VM_SHORT.'？';
$l['sshkey_no_keys'] = '您没有任何SSH密钥';
$l['curr_usage'] = '当前使用情况';
$l['na'] = '无';
$l['curr_usage_exp'] = '如果启用了计费，将显示当前使用情况';