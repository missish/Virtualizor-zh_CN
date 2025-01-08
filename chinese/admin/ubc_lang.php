<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ubc_lang.php
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

$l['slave_cant'] = 'UBC 设置错误';
$l['slave_cant_exp'] = '从服务器不允许编辑 UBC 设置！';

$l['no_bkmemsize'] = '未指定 <b>kmemsize</b> 屏障';
$l['no_blockedpages'] = '未指定 <b>lockedpages</b> 屏障';
$l['no_bnumproc'] = '未指定 <b>numproc</b> 屏障';
$l['no_bphyspages'] = '未指定 <b>physpages</b> 屏障';
$l['no_bnumtcpsock'] = '未指定 <b>numtcpsock</b> 屏障';
$l['no_bnumflock'] = '未指定 <b>numflock</b> 屏障';
$l['no_bnumpty'] = '未指定 <b>numpty</b> 屏障';
$l['no_bnumsiginfo'] = '未指定 <b>numsiginfo</b> 屏障';
$l['no_btcpsndbuf'] = '未指定 <b>tcpsndbuf</b> 屏障';
$l['no_btcprcvbuf'] = '未指定 <b>tcprcvbuf</b> 屏障';
$l['no_bothersockbuf'] = '未指定 <b>othersockbuf</b> 屏障';
$l['no_bdgramrcvbuf'] = '未指定 <b>dgramrcvbuf</b> 屏障';
$l['no_bnumothersock'] = '未指定 <b>numothersock</b> 屏障';
$l['no_bdcachesize'] = '未指定 <b>dcachesize</b> 屏障';
$l['no_bnumfile'] = '未指定 <b>numfile</b> 屏障';
$l['no_bnumiptent'] = '未指定 <b>numiptent</b> 屏障';
$l['no_bswappages'] = '未指定 <b>swappages</b> 屏障';
$l['no_bdiskinodes'] = '未指定 <b>diskinodes</b> 屏障';
$l['no_bdcachsize'] = '未指定 <b>dcachsize</b> 屏障';
$l['no_bquotaugidlimit'] = '未指定 <b>quotaugidlimit</b> 屏障';
$l['no_bmeminfo'] = '未指定 <b>meminfo</b> 屏障';

$l['no_lkmemsize'] = '未指定 <b>kmemsize</b> 限制';
$l['no_llockedpages'] = '未指定 <b>lockedpages</b> 限制';
$l['no_lnumproc'] = '未指定 <b>numproc</b> 限制';
$l['no_lphyspages'] = '未指定 <b>physpages</b> 限制';
$l['no_lnumtcpsock'] = '未指定 <b>numtcpsock</b> 限制';
$l['no_lnumflock'] = '未指定 <b>numflock</b> 限制';
$l['no_lnumpty'] = '未指定 <b>numpty</b> 限制';
$l['no_lnumsiginfo'] = '未指定 <b>numsiginfo</b> 限制';
$l['no_ltcpsndbuf'] = '未指定 <b>tcpsndbuf</b> 限制';
$l['no_ltcprcvbuf'] = '未指定 <b>tcprcvbuf</b> 限制';
$l['no_lothersockbuf'] = '未指定 <b>othersockbuf</b> 限制';
$l['no_ldgramrcvbuf'] = '未指定 <b>dgramrcvbuf</b> 限制';
$l['no_lnumothersock'] = '未指定 <b>numothersock</b> 限制';
$l['no_ldcachesize'] = '未指定 <b>dcachesize</b> 限制';
$l['no_lnumfile'] = '未指定 <b>numfile</b> 限制';
$l['no_lnumiptent'] = '未指定 <b>numiptent</b> 限制';
$l['no_lswappages'] = '未指定 <b>swappages</b> 限制';
$l['no_ldiskinodes'] = '未指定 <b>diskinodes</b> 限制';
$l['no_ldcachsize'] = '未指定 <b>dcachsize</b> 限制';
$l['no_lquotaugidlimit'] = '未指定 <b>quotaugidlimit</b> 限制';
$l['no_lmeminfo'] = '未指定 <b>meminfo</b> 限制';
$l['err_edit_vps'] = '应用 UBC 设置到 '.VM_SHORT.' 时出错';
$l['err_save_slave'] = '在从服务器上保存 '.VM_SHORT.' 数据时出错。请确保从服务器正常工作。';

// 主题设置
$l['<title>'] = 'UBC';
$l['ubcsetting'] = 'UBC 设置';
$l['done'] = 'UBC 设置已保存。返回 <a href="'.$globals['index'].'act=plans">计划概览</a>';
$l['done_vps'] = 'UBC 设置已保存。返回 <a href="'.$globals['index'].'act=vs">'.VM_LONG.' 概览</a>';
$l['plan_name'] = '计划';
$l['vps_name'] = VM_SHORT;
$l['id'] = 'ID';
$l['barrier'] = '屏障';
$l['limit'] = '限制';
$l['kmemsize'] = 'kmemsize';
$l['lockedpages'] = 'lockedpages';
$l['numproc'] = 'numproc';
$l['physpages'] = 'physpages';
$l['numtcpsock'] = 'numtcpsock';
$l['numflock'] = 'numflock';
$l['numpty']= 'numpty';
$l['numsiginfo'] = 'numsiginfo';
$l['tcpsndbuf'] = 'tcpsndbuf';
$l['tcprcvbuf'] = 'tcprcvbuf';
$l['othersockbuf'] = 'othersockbuf';
$l['dgramrcvbuf'] = 'dgramrcvbuf';
$l['numothersock'] = 'numothersock';
$l['dcachesize'] = 'dcachesize';
$l['numfile'] = 'numfile';
$l['numiptent'] = 'numiptent';
$l['swappages'] = 'swappages'; 
$l['diskinodes'] = 'diskinodes';
$l['dcachsize'] = 'dcachsize';
$l['quotaugidlimit'] = 'quotaugidlimit';
$l['oomguarpages'] = 'oomguarpages';
$l['vmguarpages'] = 'vmguarpages';
$l['meminfo'] = 'meminfo';
$l['saveubc'] = '保存 UBC';
?>