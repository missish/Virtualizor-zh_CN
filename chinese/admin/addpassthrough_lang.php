<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addpassthrough_lang.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// 版本 : 1.0
// 灵感来源于追求成为最优秀的目标
// ----------------------------------------------------------
// 开始者: Alons
// 日期:       2010年3月8日
// 时间:       23:00
// 网站:       https://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// 请阅读 https://www.virtualizor.com 上的使用条款
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//=========================================================== 
//////////////////////////////////////////////////////////////

if(!defined('VIRTUALIZOR')){

	die('非法入侵');

}

$l['cant_add'] = '添加透传错误';
$l['cant_add_exp'] = '从属服务器不允许添加任何透传设备！';
$l['no_name'] = '未指定透传设备名称';
$l['no_path'] = '未指定透传设备路径';

// 主题字符串
$l['<title>'] = '添加透传设备';
$l['add_passthrough'] = '添加透传设备';
$l['sub_but'] = '添加透传设备';
$l['passthrough_server'] = '服务器';
$l['passthrough_exp_server'] = '可以使用此透传设备的服务器';
$l['added'] = '透传设备的详细信息已添加。返回 <a href="'.$globals['index'].'act=passthrough">透传设备概览</a>';

$l['pci_devices'] = "PCI设备";
$l['passthrough_type'] = "设备类型";
$l['passthrough_type_exp'] = "选择要添加的设备类型";
$l['pci_devices_exp'] = "所选节点上可用的PCI设备列表";
$l['passthrough_customname'] = "自定义名称";
$l['passthrough_customname_exp'] = "提供一个自定义名称，此名称将在下拉列表中使用";
$l['pci_dumpxml'] = "设备信息";
$l['pci_dumpxml_exp'] = "所选PCI设备的XML表示";
$l['passthrough_desc'] = "描述";
$l['passthrough_desc_exp'] = "设备的简短描述";
$l['done'] = '设备已成功添加！返回 <a href="'.$globals['index'].'act=passthrough">透传设备列表概览</a>';
$l['no_iommu_support'] = 'PCI设备分配仅适用于支持Intel VT-d或AMD IOMMU的硬件平台。必须在主机的BIOS中启用这些Intel VT-d或AMD IOMMU功能，才能使PCI设备分配功能生效。';
$l['detach_from_host_err'] = "无法从主机中分离PCI设备";
$l['no_interrupt_remapping'] = "未启用中断重映射。在将PCI设备分配给 ".VM_SHORT." 之前，请启用中断重映射功能";
$l['no_iommu_group_devices'] = "以下PCI设备没有找到IOMMU组：";
$l['usb_devices'] = "USB设备";
$l['usb_devices_exp'] = "列出节点上可用的USB设备";
$l['pci_noIommu'] = '所选的PCI设备不在任何IOMMU组中，因此无法分配给 '.VM_SHORT;
$l['inv_server'] = '您提交的服务器无效';
$l['iommu_peer'] = '此设备已自动保存，因为它属于保存的PCI设备的IOMMU组之一';
$l['invalid_pci'] = '所选的PCI设备似乎在服务器上不存在。请重新检查所选的PCI设备';
$l['pci_isgpu'] = 'GPU';
$l['exp_pci_isgpu'] = '如果透传设备类型是GPU（VGA控制器），请勾选此项';
$l['gpu_rom_file'] = 'VGA BIOS ROM文件';
$l['exp_gpu_rom_file'] = '某些GPU需要ROM文件来重置自身，如果选择，则该文件将被添加到虚拟机中';

?>
