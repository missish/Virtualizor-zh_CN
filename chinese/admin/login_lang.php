<?php

//////////////////////////////////////////////////////////////
//===========================================================
// login_lang.php
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

$l['no_username'] = '用户名字段为空';
$l['no_password'] = '密码字段为空';
$l['too_many_attempts'] = '您已用完登录失败配额，已达到 '.$globals['login_attempts'].' 次失败尝试！<b>请等待 '.$globals['login_ban_time'].' 分钟后再试。</b> 请不要忘记密码区分大小写。';

$l['<title>'] = '登录';
$l['sign_in'] = '登录';
$l['log_user'] = '用户名';
$l['log_pass'] = '密码';
$l['sub_but'] = '登录';
$l['pass_nomatch'] = '您输入的用户名或密码不正确。';
$l['twofactauth_otp_mail_sub'] = '登录一次性密码';
$l['twofactauth_otp_mail_body'] = '您好，

您的账户在以下地址提交了登录请求：
{{site_domain}}

请使用以下一次性密码（OTP）登录：
{{otp}}

此致，
{{sn}}';
$l['login_no_otp'] = '请输入一次性密码（OTP）';
$l['twofactauth_otp_expired'] = '您提交的 OTP 已过期！';
$l['login_incorrect_otp'] = '验证码错误';
$l['login_inv_user'] = '无效用户';

$l['login_no_2fa_key'] = '无效的验证密钥';
$l['login_invalidkey'] = '您指定的密钥无效';
$l['login_no_otp'] = '请输入一次性密码（OTP）';
$l['twofactauth_otp_expired'] = '您提交的 OTP 已过期！';
$l['login_incorrect_otp'] = '验证码错误';
$l['login_inv_user'] = '无效用户';
$l['login_sub_email'] = '提交';
$l['login_sub_email'] = '提交';
$l['log_otp'] = '一次性密码';

?>