<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editpassthrough_lang.php
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

$l['<title>'] = '编辑直通设备';
$l['edit_user'] = '编辑直通设备';
$l['no_passthrough'] = '没有直通设备';
$l['no_name'] = '直通设备名称不能为空';
$l['no_passthroughscript'] = '未输入直通bash脚本';
$l['email_exist'] = '您输入的电子邮件地址已存在';
$l['done'] = '直通设备已更新。返回 <a href="'.$globals['index'].'act=passthrough">直通设备概览</a>';
$l['submit'] = '更新';
$l['passthrough_name'] = '直通设备名称';
$l['passthrough_name_exp'] = '您的直通设备名称。此名称将显示给用户。';
$l['passthroughadd_error'] = '直通设备已经更新';
$l['rdu_done'] = '设备已更新';
$l['passthrough_desc'] = '描述';
$l['desc_exp'] = '设备的简短描述。此信息将显示给用户。<br />注意：仅允许使用&lt;br&gt; &lt;br/&gt; &lt;p&gt; &lt;a&gt; &lt;b&gt; &lt;span>这些标签。';
$l['status'] = '禁用直通设备';
$l['exp_status'] = '如果选中，则该直通设备将不会显示给最终用户。';

$l['passthrough_devices'] = '直通设备';
$l['passthrough_server'] = '服务器';
$l['passthrough_exp_server'] = '能够使用此直通设备的服务器';
$l['passthrough_customname'] = '自定义名称';
$l['passthrough_customname_exp'] = '为设备提供简短的自定义名称，以便在服务器间更好地识别设备';
$l['not_vga_controller'] = '当前的PCI设备不是VGA类型';
$l['pci_isgpu'] = 'GPU';
$l['exp_pci_isgpu'] = '如果直通设备是GPU（VGA控制器）类型，请选中此项';
$l['gpu_rom_file'] = 'VGA BIOS Rom 文件';
$l['exp_gpu_rom_file'] = '某些GPU需要rom文件才能重置自身，如果选择，则该文件将添加到域中';

?>
