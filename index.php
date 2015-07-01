<?php

include './php/SocketLog.class.php';
slog(array(
	'error_handler' => true,
	'optimize' => true,
	'show_included_files' => true,
), 'set_config');
slog('hello world'); //一般日志
slog('msg', 'log'); //一般日志
slog('msg', 'error'); //错误日志
slog('msg', 'info'); //信息日志
slog('msg', 'warn'); //警告日志
slog('msg', 'trace'); // 输入日志同时会打出调用栈
slog('msg', 'alert'); //将日志以alert方式弹出
slog('msg', 'log', 'color:red;font-size:20px;'); //自定义日志的样式，第三个参数为css样式

header("Content-type: text/html; charset=utf-8");
ini_set('display_errors', '1');
error_reporting(E_ALL ^ E_NOTICE);
if (!file_exists('PigData/install.lock')) {
	header('Location:install/index.php');
	exit();
}

if (get_magic_quotes_gpc()) {
	function stripslashes_deep($value) {
		$value = is_array($value) ?
		array_map('stripslashes_deep', $value) :
		stripslashes($value);
		return $value;
	}
	$_POST = array_map('stripslashes_deep', $_POST);
	$_GET = array_map('stripslashes_deep', $_GET);
	$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
}
define('APP_NAME', 'cms');
define('CONF_PATH', './Conf/');
define('TMPL_PATH', './tpl/');
$GLOBALS['_beginTime'] = microtime(TRUE);
define('MEMORY_LIMIT_ON', function_exists('memory_get_usage'));
define('CORE', './');
if (MEMORY_LIMIT_ON) {
	$GLOBALS['_startUseMems'] = memory_get_usage();
}

define('APP_PATH', './PigCms/');
defined('APP_PATH') or define('APP_PATH', dirname($_SERVER['SCRIPT_FILENAME']) . '/');
define('RUNTIME_PATH', './Conf/logs/');
defined('RUNTIME_PATH') or define('RUNTIME_PATH', APP_PATH . 'Runtime/');
define('APP_DEBUG', 1);
defined('APP_DEBUG') or define('APP_DEBUG', false);
$runtime = defined('MODE_NAME') ? '~' . strtolower(MODE_NAME) . '_runtime.php' : '~runtime.php';
defined('RUNTIME_FILE') or define('RUNTIME_FILE', RUNTIME_PATH . $runtime);
if (!APP_DEBUG && is_file(RUNTIME_FILE)) {
	require RUNTIME_FILE;
} else {
	defined('THINK_PATH') or define('THINK_PATH', dirname(__FILE__) . '/');
	require THINK_PATH . 'Common/runtime.php';
}
?>
