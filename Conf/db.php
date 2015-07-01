<?php
return array(
	'DB_TYPE' => 'mysql',
	'DB_HOST' => '127.0.0.1',
	'DB_PORT' => '3306',
	'DB_NAME' => 'pigcms',
	'DB_USER' => 'root',
	'DB_PWD' => 'root',
	'DB_PREFIX' => 'tp_',
	'agent_version' => 1,

	// 数据库配置1，使用PDO连接sqlserver
	'DB_CONFIG2' => array(
		'DB_TYPE' => 'pdo',
		'DB_USER' => 'ljl',
		'DB_PWD' => 'ljl!@#$sybsa',
		'DB_DSN' => 'sqlsrv:Server=.\SQLServer2005;Database=OnlineRechargePaymentSystemTest',
		// 'DB_DSN' => 'server=.\SQLServer2005;database=OnlineRechargePaymentSystemTest;uid=ljl;pwd=ljl!@#$sybsa;Max Pool Size=300;Min Pool Size=0;Connection Lifetime=300;user id=ljl;packet size=1000;',
	),
);
?>