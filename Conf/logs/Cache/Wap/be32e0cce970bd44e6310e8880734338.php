<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0067)http://sale.suning.com/images/advertise/001/hbgz30/active-rule.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta content="telephone=no" name="format-detection">
	<title><?php echo ($packet_info["title"]); ?></title>
    <link rel="stylesheet" href="<?php echo ($staticPath); ?>/tpl/static/packet/css/base.css">
    <link rel="stylesheet" href="<?php echo ($staticPath); ?>/tpl/static/packet/css/redbg.css">
<style>
.activeRule-content{min-height:350px;}
</style>   
</head>
<body style="<?php if($packet_info["bgcolor"] != ''): ?>background:<?php echo ($packet_info["bgcolor"]); ?>;<?php endif; ?>">
    <section class="pdlayout">
            <div class="activeRule-top pr" style="<?php if($packet_info["bgcolor"] != ''): ?>background:<?php echo ($packet_info["bgcolor"]); ?>;<?php endif; ?>">
                <img src="<?php echo ($staticPath); ?>/tpl/static/packet/images/active_bg.png" width="100%" height="59">
            </div>
            <div class="activeRule-content  pdlayout pr">
       			<?php echo (htmlspecialchars_decode($packet_info["info"])); ?>
            </div>
    </section>
<script type="text/javascript">
window.shareData = {  
            "moduleName":"Red_packet",
            "moduleID":"0",
            "imgUrl": "<?php echo ($packet_info["msg_pic"]); ?>", 
            "timeLineLink": "<?php echo C('site_url') . U('Red_packet/index',array('token' => $token,'id'=>$packet_info['id']));?>",
            "sendFriendLink": "<?php echo C('site_url') . U('Red_packet/index',array('token' => $token,'id'=>$packet_info['id']));?>",
            "weiboLink": "<?php echo C('site_url') . U('Red_packet/index',array('token' => $token,'id'=>$packet_info['id']));?>",
            "tTitle": "<?php echo ($packet_info["title"]); ?>",
            "tContent": "<?php echo ($packet_info["title"]); ?>"
        };
</script>
<?php echo ($shareScript); ?>   
</body>
</html>