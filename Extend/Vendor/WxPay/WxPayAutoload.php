<?php

function WxPayAutoload($classname) {
	// 不能使用 __DIR__ 因为php版本必须大于等于5.3 Can't use __DIR__ as it's only in PHP 5.3+
	$filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'class.' . strtolower($classname) . '.php';
	if (is_readable($filename)) {
		require $filename;
	}
}

if (version_compare(PHP_VERSION, '5.1.2', '>=')) {
	//SPL autoloading was introduced in PHP 5.1.2
	if (version_compare(PHP_VERSION, '5.3.0', '>=')) {
		spl_autoload_register('WxPayAutoload', true, true);
	} else {
		spl_autoload_register('WxPayAutoload');
	}
} else {
	/**
	 * Fall back to traditional autoload for old PHP versions
	 * @param string $classname The name of the class to load
	 */
	function __autoload($classname) {
		WxPayAutoload($classname);
	}
}
