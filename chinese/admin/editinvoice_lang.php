<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editinvoice_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本: 1.0
// 灵感来自成为最佳的渴望
// ----------------------------------------------------------
// 开始者: Alons
// 日期: 2010年3月8日
// 时间: 23:00
// 网站: https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// 请阅读 https://www.virtualizor.com 上的使用条款
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('黑客攻击尝试');

}

$l['slave_cant'] = '编辑发票错误';
$l['slave_cant_exp'] = '从服务器不允许添加备份服务器！';
$l['no_uid'] = '请选择此发票的用户';
$l['no_invodate'] = '请指定发票日期';
$l['no_duedate'] = '请指定到期日期';
$l['no_item'] = '请指定发票项目';
$l['no_amt'] = '请指定发票金额';
$l['inv_uid'] = '您提交的用户无效';
$l['inv_invodate'] = '发票日期无效';
$l['inv_duedate'] = '到期日期无效';
$l['inv_paydate'] = '支付日期无效';
$l['err_insert'] = '保存发票数据时出错，请再试一次！';

// 主题设置
$l['<title>'] = '编辑发票';
$l['_head'] = '编辑发票';
$l['done'] = '发票已编辑。返回 <a href="'.$globals['index'].'act=invoices">发票概览</a>';
$l['select_user'] = '选择用户';
$l['exp_select_user'] = '选择发票所属的用户';
$l['invodate'] = '发票日期';
$l['exp_invodate'] = '生效的发票日期';
$l['duedate'] = '到期日期';
$l['exp_duedate'] = '发票到期的日期';
$l['paydate'] = '支付日期';
$l['exp_paydate'] = '发票支付的日期';
$l['item'] = '项目';
$l['exp_item'] = '正在开具发票的项目';
$l['item_desc'] = '项目描述';
$l['exp_item_desc'] = '(可选) 项目的详细描述';
$l['amt'] = '金额';
$l['exp_amt'] = '发票金额';
$l['disc'] = '折扣';
$l['exp_disc'] = '(可选) 该金额将从总额中扣除';
$l['net'] = '净额';
$l['exp_net'] = '总应付金额';
$l['token'] = '支付令牌';
$l['exp_token'] = '(可选) 支付交易的参考';
$l['submit'] = '提交';
$l['current_day'] = '今天';
$l['apply_tax'] = '应用税费';
$l['exp_apply_tax'] = '(可选) 如果勾选，将应用税费';
$l['tax_info_head'] = '税务信息';
$l['tax_no'] = '编号';
$l['tax_name'] = '税种名称';
$l['tax_percent'] = '税率（百分比值）';
$l['tax_val'] = '税费金额';
$l['tax_total_paybale'] = '总应付净金额';