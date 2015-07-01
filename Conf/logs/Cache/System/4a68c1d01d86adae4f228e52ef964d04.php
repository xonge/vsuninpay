<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>代理商管理</title>
<link href="<?php echo RES;?>/images/main.css" type="text/css" rel="stylesheet">
<script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="./tpl/User/default/common/js/date/WdatePicker.js"></script>
</head>
<body class="warp">
<div id="artlist" class="addn">
<form action="" method="post" name="form" enctype="multipart/form-data" id="myform">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" id="addn">

				 <tr>
					<th colspan="4">设置代理商</th>
				</tr>
				<tr>
					<td height="48" align="right"><strong>名称：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="name" class="ipt" size="45" value="<?php echo ($info["name"]); ?>" />
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>手机：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="mp" class="ipt" size="45" value="<?php echo ($info["mp"]); ?>" />
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>密码：</strong></td>
					<td colspan="3" class="lt">
						<input type="password" name="password" class="ipt" size="45" value="" /> 不修改密码请留空
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>QQ：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="qq" class="ipt" size="45" value="<?php echo ($info["qq"]); ?>" />
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>站点地址：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="siteurl" class="ipt" size="45" value="<?php echo ($info["siteurl"]); ?>" /><br>
						 比如：http://daili.baidu.com 这里的网址，即代理商的网址，可以解析二级域名或者一级域名，在IIS添加后将会显示代理信息。
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>到期时间：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="endtime" onClick="WdatePicker()" class="ipt" size="45" value="<?php echo (date("Y-m-d",$info["endtime"])); ?>">
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>包月价格：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="monthprice" class="ipt" size="45" value="<?php echo ($info["monthprice"]); ?>" />  如果该代理商按公众号数量收钱，请填写0
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>公众号价格：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="wxacountprice" class="ipt" size="45" value="<?php echo ($info["wxacountprice"]); ?>" /> 元/年  如果不限制，请填写0
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>账户余额：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="moneybalance" class="ipt" size="45" value="<?php echo ($info["moneybalance"]); ?>" />
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>备注说明：</strong></td>
					<td colspan="3" class="lt">
						<textarea name="intro" class="ipt" style="width:300px;height:80px;"><?php echo ($info["intro"]); ?></textarea>
					</td>
				</tr>
				
	<tr>
		<td colspan="4" style="text-align:center">
			<?php if(($info["id"]) > "0"): ?><input class="bginput" type="submit" name="dosubmit" value="修 改" >
				<?php else: ?>
				<input class="bginput" type="submit" name="dosubmit" value="添 加"><?php endif; ?>
			&nbsp;
			<input class="bginput" type="button" onclick="javascript:history.back(-1);" value="返 回" ></td>
	</tr>
</table>
</form>
<br />
<br />
<br />

</div>
</body>
</html>