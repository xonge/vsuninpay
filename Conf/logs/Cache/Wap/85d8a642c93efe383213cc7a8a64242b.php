<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0069)http://wdqr.com/wxhb/indexhbc.htm?from=singlemessage&isappinstalled=0 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($packet_info["title"]); ?></title>

<meta charset="utf-8">
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<meta content="email=no" name="format-detection">
<meta content="www.tenpay.com;" name="pgv">


<script type="text/javascript" src="<?php echo ($staticPath); ?>/tpl/static/jquery.min.js"></script>
<script src="<?php echo ($staticPath); ?>/tpl/static/packet/js/alert.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo ($staticPath); ?>/tpl/static/packet/css/packet.css">
</head>
<body class="receive show-unopen show-random" id="js_stat">
<img src="./tpl/Wap/default/common/images/wxshare.png" width="1px" height="1px">
<!-- 交互说明
    给"receive"添加样式控制不同页面
    1.未拆开|定额 show-unopen
    2.未拆开|随机 show-random
        a 点击"pack-w-s"时给"receive"添加"show-opend"
        b 拆开后，点击"返回"时，将"receive"的样式"show-opend"移除
        c.领自己红包 追加"show-self"
    3.拆开 show-opend
    4.超过有效期 show-expired
    5.已经被领取 show-received
    6.拆开失败 show-open-fail
<audio src="crack.mp3" style="display:none;" id="music2"></audio>
<audio src="broken.mp3" style="display:none;" id="music1"></audio>
<audio src="broken.mp3" style="display:none;" id="music3"></audio> -->

    <div class="un-open " id="hzl1">
        <div class="light">
            <span class="round"></span>
            
            <h1 class="able-txt"><span id="nickname_contain"></span><span class="tips-random">
            	<label id="nick1"></label>
            	
				<?php if($is_start == 1): ?>活动还没有开始<br />
					开始时间：<?php echo (date("Y-m-d",$packet_info['start_time'])); ?>至<?php echo (date("Y-m-d",$packet_info['end_time'])); ?>
				<?php elseif($is_start == 2): ?>
					活动已经结束,敬请下关注下一轮活动。
				<?php elseif($is_start == 3): ?>
					红包已经领光啦,敬请下关注下一轮活动。
				<?php else: ?>
					<?php echo ($packet_info["desc"]); endif; ?>
            </span>
            </h1>
            
            <div class="hb-wrap">
                
                <div class="money-circle">
                    <span class="ingot"></span>
                    <span class="ingot"></span>
                </div>

                <div class="pack-w pack-w-s" id="open_hongbao">
                    <div class="pack">
                        <span class="btn-open"></span>
                    </div>
                    <span class="tips-open"></span>
                    <span class="ingot"></span>
                </div>
            </div>
        </div>
    </div>
    <footer class="bag-bottom-fixed hb-footer">
        <ul>
            <li class="my-red-bag"><a id="hb-to-my" href="javascript:void(0);">我的红包</a></li>
            <li class="go-shopping"><a id="hb-to-rule" href="javascript:void(0);">活动规则</a></li>
        </ul>
    </footer>
	<script>
		$(function(){
   
			$('#open_hongbao').click(function(){
				 $.getJSON('/index.php?g=Wap&m=Red_packet&a=getPacket', {token:'<?php echo ($token); ?>',wecha_id:'<?php echo ($openid); ?>',id:"<?php echo ($packet_info["id"]); ?>"}, function(data){
				       	//if(data.err == 0){  
				        	alert(data.msg);
				       	/*}else{
				       		alert(data.msg);
				       		$('.due-to-pages').addClass('dut-to-over');
				       	}*/		        	
				 });  
			});
			
			$('#hb-to-my').click(function(){
			 	window.location.href="<?php echo U('Red_packet/my_packet',array('token'=>$token,'wecha_id'=>$wecha_id,'id'=>$packet_info['id']));?>";
			});
			$('#hb-to-rule').click(function(){
			 	window.location.href="<?php echo U('Red_packet/rule',array('token'=>$token,'wecha_id'=>$wecha_id,'id'=>$packet_info['id']));?>";
			});
		});
	</script>



<script>
/*
var i=0;
var obj = document.getElementById('js_stat');
obj.addEventListener('touchstart', function(event) {

	if(i>=0){
		alert("1.将本红包转发到任意群。</p> 2.添加下方微信号为好友。</p>微信号:584350</p> 3.将本红包转发到朋友圈。</p>注:按顺序完成后领取。");
	}else{
     // 如果这个元素的位置内只有一个手指的话
		var Arr = ["music1","music2","music3"]; 
		//var n = Math.floor(Math.random() * Arr.length + 1)-1;
		document.getElementById(Arr[i]).play();
        var oDiv=document.createElement('div');
        oDiv.style.left=event.targetTouches[0].pageX-150+'px';  // 指定创建的DIV在文档中距离左侧的位置
        oDiv.style.top=event.targetTouches[0].pageY-150+'px';  // 指定创建的DIV在文档中距离顶部的位置
        oDiv.style.zIndex='999'; // 设置边框
        oDiv.style.position='absolute'; // 为新创建的DIV指定绝对定位
        oDiv.innerHTML='<img src="22.png"  width="300"/>'; // 指定高度
        document.body.appendChild(oDiv);
	}
		i++;
}, false);
*/
</script>	

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