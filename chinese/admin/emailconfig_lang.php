<?php

//////////////////////////////////////////////////////////////
//===========================================================
// emailconfig_lang.php
//===========================================================
// SOFTACULOUS 
// 版本 : 1.1
// 灵感来自成为最好的愿望
// ----------------------------------------------------------
// 开始者: Alons
// 日期: 2009年1月10日
// 时间: 21:00 小时
// 网站: http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// 请阅读使用条款 http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('非法访问');

}

$l['no_mail'] = '未选择邮件方法';
$l['no_switch'] = '未选择邮件切换值';
$l['wrong_mail'] = '提交的邮件方法无效';
$l['no_mail_server'] = '未提交SMTP邮件服务器';
$l['no_mail_port'] = '未提交SMTP邮件端口';
$l['no_mail_user'] = '未提交SMTP邮件用户名';
$l['no_mail_pass'] = '未提交SMTP邮件密码';
$l['saving_error'] = '保存设置时出现了一些错误';

// 主题字符串
$l['<title>'] = '邮件设置';
$l['heading'] = '邮件设置';
$l['settings_saved'] = '邮件设置已成功保存';
$l['emailconfighead'] = '邮件设置';
$l['mailmethod'] = '邮件发送方法';
$l['mailmethod_exp'] = '使用PHP mail()函数或您的SMTP服务器发送邮件';
$l['smtp_server'] = 'SMTP服务器';
$l['smtp_port'] = 'SMTP端口';
$l['smtp_port_exp'] = '如果端口465不起作用，请使用端口587';
$l['smtp_user'] = 'SMTP用户名';
$l['smtp_pass'] = 'SMTP密码';
$l['edit_settings'] = '编辑设置';
$l['change_final'] = '邮件设置已更改。';
$l['disable_email'] = '禁用邮件';
$l['disable_email_exp'] = '系统将不会发送任何邮件';
$l['mail_debug'] = '启用调试';
$l['mail_debug_exp'] = '记录发送邮件时生成的调试输出。生成的日志可以在 /var/virtualizor/log/email/email.log 中查看';
$l['mail_connect_timeout'] = '连接超时';
$l['mail_connect_timeout_exp'] = '连接超时时间（秒），Virtualizor将在指定的秒数内等待邮件服务器的响应，然后超时。默认值为5。如果要更改超时时间，请设置大于5的值。';
$l['inv_mail_connect_timeout'] = '指定的连接超时值无效（值必须大于5秒）';
$l['smtp_secure'] = '安全连接';
$l['smtp_secure_exp'] = '使用所选模式安全连接到邮件服务器。';
$l['server'] = '服务器';
$l['exp_server'] = '选择您要设置邮件设置的服务器';
$l['all_server'] = '所有服务器';
?>