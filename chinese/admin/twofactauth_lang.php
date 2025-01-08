<?php

//////////////////////////////////////////////////////////////
//===========================================================
// users_lang.php
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

$l['<title>'] = '双因素认证';
$l['twofactauth_title'] = '双因素认证';
$l['submit_button'] = '提交';
$l['none_twofactauth'] = '无（不推荐！）';
$l['email_twofactauth'] = '邮箱 OTP';
$l['app_twofactauth'] = '启用应用（如 Google Authenticator 等）';
$l['twofactauth_pref'] = '选择偏好：';
$l['twofactauth_pref_exp'] = '选择双因素认证类型，然后输入代码以启用它';
$l['twofactauth_email_sent_to'] = 'OTP 将发送至：';
$l['twofactauth_email_passcode'] = '邮箱验证码';
$l['twofactauth_desc'] = '要获取确认码，您应下载双因素认证应用，例如 Google Authenticator、Authy 等。<br />扫描二维码或将下面提供的密钥输入您的双因素认证应用。之后，应用将为您提供一个唯一的 OTP，您需要将其输入文本框以启用双因素认证。';
$l['twofactauth_secret_key'] = '密钥：';
$l['twofactauth_reset_key'] = '重置密钥';
$l['twofactauth_code_input'] = '确认码';
$l['twofactauth_code_input_exp'] = '输入从邮箱或应用中收到的 OTP';
$l['twofactauth_passcode_mail_sub'] = '双因素认证确认码';
$l['twofactauth_passcode_mail_body'] = '您好，

您在 {{site_domain}} 的账户启用双因素认证的确认码为：{{passcode}}

此致，
{{sn}}';
$l['twofactauth_mail_done'] = 'OTP 已发送至您的邮箱';
$l['twofactauth_no_passcode'] = '请输入 OTP';
$l['twofactauth_otp_expired'] = '您提交的 OTP 已过期！';
$l['twofactauth_err_enable'] = '输入的验证码不正确';
$l['twofactauth_enabled'] = '双因素认证已启用';
$l['twofactauth_changes_saved'] = '您的更改已成功保存';
$l['twofactauth_disabled'] = '双因素认证已禁用';
$l['twofactauth_changes_saved'] = '您的更改已成功保存';
$l['twofactauth_secret_key_conf'] = '警告：如果您重置密钥，您将需要在应用中更新为新密钥。您确定要继续吗？';
?>