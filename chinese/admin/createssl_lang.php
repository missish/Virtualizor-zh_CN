<?php

//////////////////////////////////////////////////////////////
//===========================================================
// createssl_lang.php
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

$l['error_saving'] = '保存 SSL 信息时发生错误';

$l['<title>'] = '创建 SSL 证书';
$l['sim_key'] = 'virtualizor.key';
$l['sim_key_desc'] = '生成的 RSA 私钥';
$l['sim_crt_desc'] = '生成的 CRT 密钥';
$l['sim_crt'] = 'virtualizor.crt';
$l['submit'] = '创建 SSL';
$l['emptykey'] = 'SSL 证书密钥不能为空';
$l['emptycrt'] = 'SSL 证书文件不能为空';
$l['country'] = '国家代码';
$l['country_desc'] = '2 个字母的缩写，例如 US 或 IN';
$l['state'] = '州';
$l['state_desc'] = '州或省的名称';
$l['locality'] = '地区';
$l['locality_desc'] = '城市或城镇的名称'; 
$l['organisation'] = '公司名称';
$l['organisation_desc'] = '您的公司或组织名称';
$l['org_unit'] = '公司部门'; 
$l['org_unit_desc'] = '组织部门或分支的名称';
$l['comname'] = '主机';
$l['comname_desc'] = '您的名称或服务器名称';
$l['email'] = '电子邮件地址';
$l['email_desc'] = '您的电子邮件地址';
$l['key_size'] = 'RSA 密钥大小';
$l['long_country'] = '指定的国家代码太长。请指定一个 2 字母的代码';
$l['no_country'] = '未指定国家代码'; 
$l['no_state'] = '未指定州或省';
$l['no_locality'] = '未指定地区';
$l['no_organisation'] = '未指定组织或公司名称';
$l['no_comname'] = '未指定主机名称';
$l['no_email'] = '未指定电子邮件地址';
$l['no_keysize'] = '未指定 RSA 密钥大小';
$l['inv_keysize'] = '指定的 RSA 密钥大小无效';
$l['done'] = 'SSL 文件已成功创建并安装，但您需要重启 Web 服务器。';
$l['invalid_email'] = '输入的电子邮件地址无效';
$l['note'] = '注意';
$l['ssl_note'] = '此工具将创建 SSL 证书的私钥、证书签名请求以及证书本身。如果您想获得并安装由 SSL 证书提供商颁发的证书，那么您将需要证书签名请求（virtualizor.csr），您可以从 <a href="'.$globals['index'].'act=ssl#csr">这里</a> 获取。';

?>
