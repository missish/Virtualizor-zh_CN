<?php

//////////////////////////////////////////////////////////////
//===========================================================
// billing_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 受“成为最好的”这一愿望启发
// ----------------------------------------------------------
// 开始人: Alons
// 日期: 2010年3月8日
// 时间: 23:00
// 网站: https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// 请阅读使用条款：https://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('非法访问');

}

$l['no_cp_url'] = '未指定控制面板URL';
$l['no_billing_currency'] = '未指定账单货币';
$l['no_billing_symbol'] = '未提交货币符号';
$l['no_billing_min'] = '未指定最低金额';
$l['no_billing_max'] = '未指定最高金额';
$l['no_support_email'] = '未指定支持邮件';
$l['no_billing_comp'] = '创建发票需要账单公司';
$l['no_billing_addr1'] = '请输入贵公司的账单地址';
$l['inv_billing_warn_bal'] = '余额警告限额无效';
$l['inv_billing_min'] = '最低/最高金额无效';
$l['inv_default_uplid'] = '默认用户计划无效';
$l['inv_paypal'] = '请输入完整的PayPal详细信息';
$l['paypal_compulsory'] = '在我们实现新的支付方式之前，PayPal设置是强制性的';


//主题设置
$l['<title>'] = '账单设置';
$l['heading'] = '账单设置';
$l['note'] = '注意';
$l['bill_note'] = '此账单面板处于 <b>测试版</b>。在测试阶段，账单面板是免费的，当它变得稳定后将 <b>收费</b>。请阅读完整的指南，了解如何设置 <b><u><a href="'.$globals['docs'].'Virtualizor_Cloud_Billing_System" target="_blank">Virtualizor 内建账单</u></a></b>';
$l['done'] = '设置已保存';
$l['bill_set'] = '账单设置';
$l['inhouse_billing'] = '启用账单';
$l['inhouse_billing_exp'] = '将启用 Virtualizor 的内建账单系统。用户可以自助注册并支付虚拟机费用';
$l['reg_set'] = '注册设置';

$l['force_preference'] = '强制偏好设置';
$l['force_preference_exp'] = '如果启用，用户将被强制填写所有的个人资料信息';

$l['enable_registration'] = '启用用户注册';
$l['enable_registration_exp'] = '允许被授权的用户创建他们的云账户';
$l['cp_url'] = '控制面板URL';
$l['cp_url_exp'] = '此控制面板的URL，将用于所有用户通讯';
$l['user_pass_min_char'] = '密码最小长度';
$l['user_pass_min_char_exp'] = '用户密码的最小长度';
$l['support_email'] = '支持邮件';
$l['support_email_exp'] = '显示给用户的支持邮件地址';
$l['invoice_image'] = '发票Logo';
$l['invoice_image_exp'] = '输入您希望显示在发票上的Logo URL';
$l['inv_billing_img'] = '输入的图像无效。图像大小应小于300KB，允许的扩展名为 (png, jpg, svg)';
$l['bcc_invoice_email'] = '管理员发票邮件';
$l['bcc_invoice_email_exp'] = '输入接收用户发票的邮件地址，可以用逗号分隔多个邮件地址。';
$l['default_uplid'] = '默认用户计划';
$l['default_uplid_exp'] = '当新用户注册时，将分配给用户的默认计划';
$l['billing_warn_bal'] = '余额警告百分比';
$l['billing_warn_bal_exp'] = '如果不为空，当当前使用量超过用户的余额百分比时，将向用户发送通知';
$l['billing_currency'] = '账单货币';
$l['billing_currency_exp'] = '显示给用户的货币';
$l['billing_symbol'] = '货币符号';
$l['billing_symbol_exp'] = '显示给用户的货币符号';
$l['billing_min'] = '最低金额';
$l['billing_min_exp'] = '用户可以支付的最低金额';
$l['billing_max'] = '最高金额';
$l['billing_max_exp'] = '用户可以支付的最高金额';
$l['billing_min_charge'] = '最低发票金额';
$l['billing_min_charge_exp'] = '在创建虚拟机时，扣除的最低金额。可以是固定金额，也可以以计划价格的百分比提供（使用 %）。';
$l['donot_return_advance_payment'] = '不退还预付款';
$l['donot_return_advance_payment_exp'] = '如果使用费用低于\''.$l['billing_min_charge'].'\'，则我们不会将剩余的差额添加到用户当前余额中。';
$l['billing_day'] = '账单生成日';
$l['billing_day_exp'] = '发票将生成的日期，默认是每月最后一天';
$l['bill_last_day'] = '每月最后一天';
$l['com_set'] = '公司详细信息';
$l['billing_comp'] = '公司名称';
$l['billing_comp_exp'] = '将向用户开具发票的公司名称';
$l['billing_addr1'] = '账单地址 1';
$l['billing_addr1_exp'] = '账单地址第一行';
$l['billing_addr2'] = '账单地址 2';
$l['billing_addr2_exp'] = '账单地址第二行';
$l['billing_additional'] = '其他账单信息';
$l['billing_additional_exp'] = '附加的账单信息，如税务信息和其他内容';
$l['saveconfig'] = '保存设置';

// reCaptcha 密钥
$l['captcha_secret'] = '输入密钥';
$l['captcha_secret_exp'] = '这将启用注册时的reCAPTCHA验证，如果为空，reCAPTCHA将被禁用。您可以从这里获取密钥: <a href="https://www.google.com/recaptcha/" target="_blank">https://www.google.com/recaptcha</a>';
$l['captcha_sitekey'] = '输入站点密钥';
$l['captcha_sitekey_exp'] = '这是您的站点密钥，详细信息请参考：<a href="https://www.google.com/recaptcha/" target="_blank">https://www.google.com/recaptcha</a>';
$l['captcha_keys_required'] = '启用reCaptcha验证时，必须提供两个密钥（密钥和站点密钥）';

$l['terms_conditions'] = '服务条款链接';
$l['terms_conditions_exp'] = '提供您的服务条款页面链接，注册页面将显示给用户';

$l['payment_gateways'] = '支付网关设置';
$l['payment_gateways'] = '支付网关';
$l['payment_gateways_exp'] = '从列表中选择您首选的支付网关';

// 短信设置
$l['err_no_sms_api'] = '请输入短信网关API';
$l['sms_setting'] = '短信设置';
$l['sms_api'] = '输入短信网关API URL';
$l['sms_api_exp'] = '此URL将在注册时发送短信验证码时使用。<br>请使用 <b>[[mobile_no]]</b> 作为手机号变量，<b>[[message]]</b> 用于发送短信验证码内容。';
$l['sms_registration'] = '启用短信验证码注册';
$l['sms_registration_exp'] = '启用后，用户将在注册过程中要求输入手机号进行短信验证码验证。';
$l['default_country_code'] = '默认国家代码';
$l['default_country_code_exp'] = '选择在注册时为短信验证码自动附加的默认国家代码。';

// 税务设置
// GST 设置
$l['gst'] = '商品与服务税 (GST)';
$l['vat'] = '增值税 (VAT)';
$l['tax_settings'] = '税务设置';
$l['enable_gst'] = '启用GST';
$l['enable_gst_exp'] = '如果启用，发票将会生成GST';
$l['gstn'] = 'GST编号';
$l['gstn_exp'] = '发票上显示的GST编号';
$l['gst_percent'] = 'GST百分比';
$l['gst_percent_exp'] = '适用于您为虚拟机计划定义的定价的GST百分比';
$l['err_gst_fields'] = '启用GST设置时，所有GST字段都是必填的';

// VAT 设置
$l['enable_vat'] = '启用VAT';
$l['enable_vat_exp'] = '如果启用，发票将会生成VAT';
$l['vatn'] = 'VAT编号';
$l['vatn_exp'] = '发票上显示的VAT编号';
$l['vat_percent'] = 'VAT百分比';
$l['vat_percent_exp'] = '适用于您为虚拟机计划定义的定价的VAT百分比';
$l['err_vat_fields'] = '启用VAT设置时，所有VAT字段都是必填的';

$l['bill_en_term_vps'] = '启用虚拟机终止';
$l['bill_en_term_vps_exp'] = '到期后启用虚拟机终止';
$l['bill_term_vps_dnum'] = '虚拟机终止前的天数';
$l['bill_term_vps_dnum_exp'] = '在到期后多少天虚拟机应被终止';
$l['bill_term_vps_warn_dnum'] = '虚拟机终止前发送警告邮件的天数';
$l['bill_term_vps_warn_dnum_exp'] = '将在终止期内的指定天数到终止日之间发送警告邮件';

$l['invoice_terms_conditions'] = '发票条款与条件';
$l['invoice_terms_conditions_exp'] = '如果设置了，将在发票的最后显示这些条款与条件';
$l['enable_kyc'] = '启用KYC';
$l['enable_kyc_exp'] = '启用后，用户在KYC批准之前将无法进行任何操作';
$l['billing_n_payment'] = '账单与支付';
