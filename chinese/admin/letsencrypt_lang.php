<?php

//////////////////////////////////////////////////////////////
//===========================================================
// letsencrypt_lang.php
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

$l['<title>'] = '安装 SSL';
$l['install_ssl'] = '安装 SSL';

//按钮标签
$l['get_certificate'] = '安装证书';
$l['renew_certificate'] = '续订证书';
$l['set_certificate'] = '设置证书';
$l['revoke_certificate'] = '撤销证书';
$l['configure'] = '配置';
$l['show_logs'] = '查看证书日志';

//证书表头
$l['le_crt_details'] = 'SSL 证书详情';

//证书表标签
$l['crt_domain'] = '域名';
$l['crt_san'] = 'SAN';
$l['crt_issuer'] = '颁发者';
$l['crt_serialno'] = '序列号';
$l['crt_valid_from_time'] = '有效期从';
$l['crt_valid_to_time'] = '有效期至';
$l['crt_installed'] = '已安装';
$l['next_renew'] = '下次续订日期';
$l['not_installed'] = '否';
$l['installed'] = '是';

$l['logs'] = '日志';
$l['no_logs'] = '无可用日志';

//配置表单标签和说明
$l['primary_domain'] = '主域名';
$l['primary_domain_exp'] = '证书的主域名';
$l['contact_email'] = '联系邮箱';
$l['contact_email_exp'] = 'SSL 证书提供商将使用此邮箱联系域名所有者';
$l['key_size'] = '密钥大小';
$l['key_size_exp'] = '域名证书私钥的长度';
$l['renew_days'] = '续订天数';
$l['renew_days_exp'] = '在证书到期前自动续订的最小天数（必须小于或等于 80）';
$l['staging'] = '测试环境';
$l['staging_exp'] = '使用 SSL 证书提供商的测试服务器获取证书';
$l['enable_force'] = '强制';
$l['enable_force_exp'] = '强制处理证书';
$l['enable_debug'] = '调试';
$l['enable_debug_exp'] = '启用调试模式以排查 SSL 问题，这将记录更详细的信息';
$l['ssl_type'] = '选择 SSL 类型';
$l['ssl_type_exp'] = '您可以选择要安装的 SSL 证书类型';

$l['proceed'] = '开始安装';

//配置表单标题
$l['configuration'] = 'SSL 配置';

//配置表单消息
$l['done_save_cfg'] = '配置已成功保存';
$l['err_save_cfg'] = '无法保存配置';
$l['err_inv_contact_email'] = '无效的邮箱地址';
$l['err_empty_contact_email'] = '请输入邮箱地址';
$l['err_inv_key_size'] = '无效的密钥大小 {{key_size}}，支持的密钥大小为：{{keysizes}}';
$l['err_inv_renew_days'] = '无效的续订天数：{{renew_days}}，请指定 0 到 80 之间的天数';
$l['err_inv_ssl_type'] = '无效的 SSL 类型 {{ssl_type}}，支持的类型为：{{ssl_types}}';

//请求证书消息和错误
$l['confirm_process'] = '您确定要处理此请求吗？';
$l['err_domain_resolve'] = '指定的域名未解析到此服务器';

//预检查错误
$l['inv_acme_script_not_found'] = '未找到 ACME 脚本';
$l['err_empty_primary_domain'] = '未设置主域名';
$l['err_invalid_opt'] = '选择了无效的选项';
$l['err_unknown_req'] = '收到未知请求';
$l['err_inv_domain'] = '指定的域名无效';
$l['crt_file_not_found'] = '未找到主域名的证书文件：';

$l['err_no_data'] = '未指定配置数据';
$l['no_site_domain'] = '未配置域名。请在安装证书前进行配置。';

$l['get_crt'] = '获取';
$l['renew_crt'] = '续订';
$l['set_crt'] = '设置';
$l['revoke_crt'] = '撤销';
$l['cron_crt'] = '定时任务';
$l['err_req_crt'] = '无法为请求的域名 {{req_crt}} 证书';
$l['done_req_crt'] = '成功处理 {{req_crt}} 证书请求';
$l['skip_req_crt'] = '跳过 {{req_crt}} 证书请求，下次续订时间为 {{time}}';
$l['err_remove_acct_file'] = '找到之前的 account.key 文件，但无法删除它';

//任务日志消息
$l['initializing'] = '初始化';
$l['verify_info'] = '验证信息';
$l['verify_info_fail'] = '验证信息失败，发现以下错误：';
$l['verify_info_complete'] = '信息验证完成，正在处理请求的操作';
$l['process_req_failed'] = '处理失败，发现以下错误：';
$l['port_80_check'] = '检查端口 80 是否可用';
$l['no_port_80'] = '端口 80 不可用';
$l['err_bind_port_80'] = '绑定端口 80 时出错，未知服务已在使用它';
$l['start_php_server'] = '在端口 80 上启动独立的 PHP Web 服务器';
$l['err_php_server_start'] = '无法在端口 80 上启动 PHP Web 服务器';
$l['started_php_server'] = '已在端口 80 上启动独立的 PHP Web 服务器，PID：';
$l['stop_php_server'] = '停止端口 80 上的独立 Web 服务器';
$l['err_php_server_stop'] = '无法停止端口 80 上的 PHP Web 服务器';
$l['exec_acme'] = '处理证书请求';
$l['domain_resolve'] = '检查域名 {{dom}} 是否解析到此服务器';
$l['inst_cert'] = '安装证书';
$l['no_match_crt_key'] = '证书与其密钥不匹配';
$l['verify_crt_install'] = '验证 SSL 证书是否已安装';
$l['err_le_crt_already_installed'] = '证书已安装，跳过安装';
$l['crt_installed'] = '证书已安装';
$l['reload_service'] = '重新加载 Web 服务器配置';
$l['err_reload_service'] = '重新加载 Web 服务器配置时出错';
$l['reloaded_service'] = '已重新加载 Web 服务器配置';
$l['crt_install_complete'] = '证书安装完成';
$l['no_task'] = '未找到任务';
$l['server'] = '服务器';

// Acme 日志语言
$l['port_80_usedbyxcp'] = '端口 80 由 XCP XAPI 服务使用，我们将使用它进行域名验证';
$l['port_80_usedbyvirt'] = '端口 80 由 Virtualizor Nginx 服务使用，我们将使用它进行域名验证';
$l['webroot_mode'] = '使用 webroot 模式，webroot：';
$l['acme_cmd'] = '使用命令执行 acme 脚本：';
$l['acme_finished'] = '执行完成，ACME 脚本返回值为：';
$l['kill_php_server'] = '终止 PHP 服务器，PID：';
$l['killed_php_server'] = '成功终止独立的 PHP Web 服务器进程！';
$l['req_action'] = '请求的操作：';
$l['chk_primary_domain'] = '检查主域名的证书是否存在';
$l['primary_domain_cert_found'] = '找到主域名的证书';
$l['cert_not_found'] = '未找到证书';
$l['cert_create_back'] = '创建已安装证书的备份';
$l['crt_installed_reloading'] = '证书已安装，正在重新加载 Web 服务器配置';
$l['reload_status'] = 'Web 服务器配置重新加载状态：';

?>