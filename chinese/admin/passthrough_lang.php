<?php

//////////////////////////////////////////////////////////////
//===========================================================
// passthrough_lang.php
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

$l['<title>'] = '直通设备';
$l['no_users'] = '没有直通设备。<a href="'.$globals['index'].'act=addpassthrough">现在添加设备</a>';
$l['usr_tit'] = '直通设备';
$l['rec_desc'] = '描述';
$l['saved'] = '直通设备已成功删除';
$l['no_res'] = '未找到与您的搜索查询匹配的结果';
$l['desc'] = '描述';
$l['add_usr'] = '添加设备';
$l['del_usr'] = '删除设备';
$l['edit_usr'] = '编辑设备';
$l['search_passthrough'] = '搜索设备';
$l['search_id'] = 'ID'; 
$l['submit'] = '搜索';
$l['type'] = '类型';
$l['ms_delete'] = '删除';
$l['ms_active'] = '激活';
$l['ms_deactive'] = '停用';
$l['del_usr'] = '删除设备';
$l['wiki_help'] = '您可以使用 * 进行通配符搜索<br>例如：abc* 将匹配以 abc 开头的设备';
$l['no_desc'] = '无描述';
$l['status'] = '状态';
$l['activated'] = '已激活';
$l['deactivated'] = '已停用';
$l['conf1'] = '您确定要 ';
$l['conf2'] = ' 所选项目吗？';
$l['conf3'] = ' 所选项目';
$l['passthrough_id'] = 'ID';
$l['device_fullname'] = '直通设备名称';
$l['name'] = '名称';
$l['passthrough_name'] = '直通名称';
$l['attach_to_host_err'] = '无法重新附加到主机：';
$l['deactivate_pci'] = '停用 PCI 设备将同时停用数据库中其所属 IOMMU 组的所有对等 PCI 设备。';
$l['activate_pci'] = '激活 PCI 设备将同时激活数据库中其所属 IOMMU 组的所有对等 PCI 设备。';
$l['delete_pci'] = '删除 PCI 设备将同时删除数据库中其所属 IOMMU 组的所有对等 PCI 设备。';
$l['delete'] = '删除';
$l['activate'] =  '激活';
$l['deactivate'] =  '停用';
$l['detach'] =  '分离';
$l['attach'] =  '附加';
$l['attach_btn'] = '直通设备';
$l['vps'] = 'VPS ID';
$l['exp_vps'] = '选择 VPS';
$l['passthrough_device'] = '直通设备';
$l['vps_not_found'] = '未找到 VPS';
$l['no_passthrough_dev'] = '未找到直通设备';
$l['passthrough_no_att'] = '直通设备未附加到 '.VM_SHORT;
$l['virt_not_supported'] = VM_SHORT.' 虚拟化不支持直通';
$l['invalid_passthrough_type'] = '选择了无效的直通类型';
$l['gpu_rom_file'] = 'GPU ROM 文件';
//////////////////////////////////脚本//////////////////////////////
$l['check_iommu'] = '检查是否启用了 IOMMU？';
$l['enable_iommu'] = '启用 IOMMU';
$l['check_cpu'] = '检查 CPU';
$l['list_pci'] = '列出 PCI 设备';
$l['list_iommu_grp'] = '列出 IOMMU 组中的 PCI 设备';
$l['quit'] = '退出';
$l['print_all'] = '打印所有选项';
$l['enable_interrupt_mapping'] = '启用中断映射';
$l['vfio_conf_content'] = '创建或编辑 /etc/modprobe.d/vfio.conf 并添加以下内容，以逗号分隔格式添加设备 ID："options vfio-pci ids=8086:9bc8,10de:0e0f disable_vga=1"，您可以从 lspci -nn 命令获取 ID';
$l['device_ids'] = '01:00.0 VGA 兼容控制器 [0300]: NVIDIA Corporation GK208B [GeForce GT 730] >>> [10de:1287] <<< (rev a1)
01:00.1 音频设备 [0403]: NVIDIA Corporation GK208 HDMI/DP 音频控制器 >>> [10de:0e0f] <<< (rev a1)';
$l['iommu_supported'] = 'IOMMU 已支持';
$l['iommu_not_supported'] = 'IOMMU 不支持';
$l['iommu_interrupt_supported'] = 'IOMMU 中断映射已支持';
$l['iommu_interrupt_not_supported'] = 'IOMMU 中断映射不支持';
$l['gpu_id'] = '>>> 01:00.0 <<< VGA 兼容控制器 [0300]: NVIDIA Corporation GK208B [GeForce GT 730] [10de:1287] (rev a1) 
在 PCI ID 前添加 0000:，例如 0000:01:00.0，这仅适用于 GPU';
$l['grub_edit'] = '编辑 /etc/default/grub'.PHP_EOL.'找到 GRUB_CMDLINE_LINUX 行并按如下方式修改';
$l['blacklist_modules'] = '黑名单 GPU 模块';
$l['dump_vga_bios'] = '转储 GPU BIOS';
$l['check_interrupt_remapping'] =  '检查是否启用了中断映射';
$l['modules_to_load_ubuntu'] = '打开或编辑 /etc/modules 并添加以下行';
$l['modules_to_load_redhat'] = '打开或编辑 /etc/modprobe.d/local.conf';
$l['VFIO_Modules'] = 'VFIO 模块';
$l['Invalid_option'] = '无效选项';
$l['deactivated_device'] = 'PCI 设备已停用，无法执行操作';