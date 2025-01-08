<?php

//////////////////////////////////////////////////////////////
//===========================================================
// tax_rules_lang.php
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

$l['inv_sgid'] = '以下服务器组/区域 ID 无效';
$l['inv_resource'] = '以下资源类型无效';
$l['inv_type'] = '以下费率类型无效';
$l['inv_h_rate'] = '资源 <b>{{resource}}</b> 和区域 <b>{{region}}</b> 的小时费率无效';
$l['err_select_country'] = '您已选择国家为“全部”，因此州/地区也选择为“全部”。';
$l['err_no_country'] = '未选择特定国家';
$l['err_no_state'] = '未选择特定州/地区';
$l['err_dup_rule'] = '发现重复的规则';
$l['err_insert_rule'] = '插入税务规则时出错';
$l['no_sel_taxid'] = '未选择任何税务规则';
$l['err_no_action'] = '未选择操作！';

// 主题设置
$l['<title>'] = '税务规则';
$l['heading'] = '税务规则';
$l['done_setting'] = '税务设置已保存';
$l['regions'] = '区域';
$l['h_rate'] = '小时费率';
$l['m_rate'] = '月费率';
$l['y_rate'] = '年费率';
$l['bandwidth_h_rate'] = '超额流量费率（每 GB）';
$l['all_reg'] = '所有区域';
$l['add_reg'] = '添加区域';
$l['sel_reg'] = '选择区域';
$l['space_pricing'] = '磁盘定价（每 GB）';
$l['cores_pricing'] = 'CPU 核心定价（每核心）';
$l['ram_pricing'] = '内存定价（每 GB）';
$l['ips_pricing'] = 'IPv4 定价（每 IP）';
$l['bandwidth_pricing'] = '带宽定价（每 GB）';
$l['cnf_action'] = '您确定要 '; // 末尾需要空格
$l['cnf_action_1'] = ' 以下税务规则吗？';

$l['gen_setting'] = '常规设置';
$l['enable_tax'] = '启用税务规则';
$l['enable_tax_exp'] = '如果启用，创建发票时将应用税务规则';
$l['tax_number'] = '您的税号';
$l['tax_number_exp'] = '您希望在发票上显示的税号';
$l['save_setting'] = '保存设置';
$l['conf_del'] = '您确定要删除以下税务规则吗？';

$l['tax_rule'] = '税务规则';
$l['new_rule'] = '添加新规则';
$l['tax_name'] = '税务名称';
$l['tax_rate'] = '税率（百分比值）';
$l['tax_level'] = '税务级别';
$l['level1'] = '级别 1';
$l['level2'] = '级别 2';
$l['tax_country'] = '国家';
$l['tax_country_all'] = '适用于所有国家';
$l['tax_country_select'] = '适用于特定国家';
$l['tax_state'] = '州/地区';
$l['tax_state_all'] = '适用于所有州/地区';
$l['tax_state_select'] = '适用于特定州/地区';
$l['saveconfig'] = '保存规则';
$l['all_country'] = '所有国家';
$l['all_state'] = '所有州/地区';
$l['tax_type'] = '税务类型';
$l['tax_type_exp'] = '选择如何应用税务';
$l['tax_inclusive'] = '含税 - 价格已包含税务';
$l['tax_exclusive'] = '不含税 - 价格未包含税务';
$l['rules'] = '规则';
$l['lvl2_b4_lvl1'] = '未找到所选位置的级别 1 税务规则。请先为所选位置添加级别 1 税务规则';
$l['err_tax_name'] = '请输入税务名称';
$l['err_tax_rate'] = '请输入税率';
$l['err_tax_country'] = '请选择国家';
$l['err_tax_setting'] = '请先启用税务设置';
$l['default_rule'] = '设为默认规则';
$l['default_rule_exp'] = '如果用户未在偏好设置中设置国家/州，则将应用默认税务规则';
$l['delete_record'] = '删除此记录';
$l['default_col'] = '默认规则';
?>