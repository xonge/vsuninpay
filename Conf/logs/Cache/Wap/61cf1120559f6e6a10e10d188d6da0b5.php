<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="http://xiangtan.suninpay.com:81/Css/normalize.css">
	<link rel="stylesheet" type="text/css" href="http://xiangtan.suninpay.com:81/Css/foundation.min.css">
</head>
<body>
	<div class="row">
		<div class="small-12 columns text-center"><h1>微信红包测试页面</h1></div>
	</div>
	<div class="row">
		<div class="small-12 columns text-center">恭喜你中了</div>
		<div class="small-12 columns text-center"><h2><?php echo ($luckmoney["0"]); ?>元</h2></div>
		<div class="small-12 columns text-center">红包</div>
	</div>
</body>
</html>