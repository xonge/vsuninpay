<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($metaTitle); ?></title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link href="<?php echo RES;?>/card/style/style.css" rel="stylesheet" type="text/css">
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript"> 
$(document).ready(function () { 

$("#qiandao").click(function () { 
var btn = $(this);
var submitData = {
};
$.post('/index.php?g=Wap&m=Fanssign&a=addSign&token=<?php echo ($token); ?>&wecha_id=<?php echo ($wecha_id); ?>', submitData,
function(data) {
	if (data.success == true) {
		$("#qiandao").html("今天你已经签到了!");
 		alert(data.msg);
 		setTimeout('dourl(12)',2000);
		return
	} 
},
"json");

}); 

}); 

</script>
<style type="text/css">
.window {
width:240px;
position:absolute;
display:none;
margin:-50px auto 0 -120px;
padding:2px;
top:0;
left:50%;
border-radius:0.6em;
-webkit-border-radius:0.6em;
-moz-border-radius:0.6em;
background-color: rgba(255, 0, 0, 0.5);
-webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
-moz-box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
-o-box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
font:14px/1.5 Microsoft YaHei,Helvitica,Verdana,Arial,san-serif;
z-index:10;
bottom: auto;
}
.window .content {
overflow:auto;
padding:10px;
    color: #222222;
    text-shadow: 0 1px 0 #FFFFFF;
border-radius: 0 0 0.6em 0.6em;
-webkit-border-radius: 0 0 0.6em 0.6em;
-moz-border-radius: 0 0 0.6em 0.6em;
}
.window #txt {
min-height:30px;font-size:20px; line-height:22px; color:#FFF; text-align:center;
}
</style>
</head>
<body id="cardintegral" class="mode_webapp">
<div class="qiandaobanner"><a href="javascript:history.go(-1);"><img src="<?php echo ($sign_pic); ?>" ></a> </div>
<div class="cardexplain">
<a class="receive"  id="qiandao">
	<?php if($tody_sign == ''): ?><span class="red">点击签到</span><?php else: ?><span style="color:#666">今天您已经签到了</span><?php endif; ?>
	<span style=" display:none"></span>
</a>
</div>
<!--
<div class="jifen-box">
<ul class="zongjifen">
<li>
<div class="fengexian">
<p>签到总分</p>
<span><?php echo ($count); ?>分</span></div>
</a></li>
<li>
<div class="fengexian">
<p>连续签到</p>
<span><?php echo ($sign_num); ?>天</span></div>
</a></li>
<li>
<p>签到奖励</p>
<span>+<?php echo ($integral); ?>分</span></a></li>
</ul>
<div class="clr"></div>
</div>
-->
<div class="jifen-box header_highlight">
<div class="tab month_sel"> <span class="title">查看每月签到及积分详情
<p>点击这里选择其他月份</p>
</span> </div>
<select onChange="dourl2(this.value)" class="month">
<option  value="1">1月</option>
<option value="2">2月</option>
<option value="3">3月</option>
<option value="4">4月</option>
<option value="5">5月</option>
<option value="6">6月</option>
<option value="7">7月</option>
<option value="8">8月</option>
<option value="9">9月</option>
<option value="10">10月</option>
<option value="11">11月</option>
<option value="12">12月</option>
</select>
<div class="accordion_child">
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="integral_table">
<thead>
<tr>
<th>日期</th>
<th>签到情况</th>
</tr>
</thead>
<tbody>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo (date('m月d日',$item["time"])); ?></td>
<td><span class="wqian">已签到</span></td>
</tr><?php endforeach; endif; else: echo "$empty" ;endif; ?>
</tbody>
</table>
</div>
</div>

<div class="window" id="windowcenter" style="margin-top:50px;">
<div class="content">
 <div id="txt"></div>
</div>

</div>
</div>

<script>
function dourl(m){
location.href= locatino.href;
}
function dourl2(m){
	location.href= '/index.php?g=Wap&m=Fanssign&a=index&token=<?php echo ($token); ?>&wecha_id=<?php echo ($wecha_id); ?>&id=<?php echo ($set_id); ?>&month='+m;
}
</script>

<script type="text/javascript"> 

function alert(title){ 
$("#windowcenter").slideToggle("slow"); 
$("#txt").html(title);
setTimeout('$("#windowcenter").slideUp(500)',2000);
} 

</script>
<!--<div style="height:40px;"></div>
<div class="footermenu">
    <ul>
        <li>
            <a href="/index.php?g=Wap&m=Card&a=index&token=<?php echo ($token); ?>&cardid=<?php echo ($thisCard["id"]); ?>&wecha_id=<?php echo ($wecha_id); ?>">
           	<img src="<?php echo RES;?>/card/images/home.png">
            <p>首页</p>
            </a>
        </li>
        
        <li>
            <a <?php if(ACTION_NAME=='card'){ ?>class="active"<?php } ?> href="/index.php?g=Wap&m=Card&a=card&token=<?php echo ($token); ?>&cardid=<?php echo ($thisCard["id"]); ?>&wecha_id=<?php echo ($wecha_id); ?>">
           	<img src="<?php echo RES;?>/card/images/c.png">
            <p>会员卡</p>
            </a>
        </li>

        <li>
            <a <?php if(ACTION_NAME=='notice'){ ?>class="active"<?php } ?> href="/index.php?g=Wap&m=Card&a=notice&token=<?php echo ($token); ?>&wecha_id=<?php echo ($wecha_id); ?>&cardid=<?php echo ($thisCard["id"]); ?>">
           	<img src="<?php echo RES;?>/card/images/prev.png">
            <p>通知</p>
            </a>
        </li>

        <li>
            <a <?php if(ACTION_NAME=='signscore'){ ?>class="active"<?php } ?> href="/index.php?g=Wap&m=Card&a=signscore&token=<?php echo ($token); ?>&wecha_id=<?php echo ($wecha_id); ?>&cardid=<?php echo ($thisCard["id"]); ?>">
           	<img src="<?php echo RES;?>/card/images/intergral.png">
            <p>签到</p>
            </a>
        </li>

        <li>
            <a <?php if(ACTION_NAME=='cards'){ ?>class="active"<?php } ?> href="/index.php?g=Wap&m=Card&a=cards&token=<?php echo ($token); ?>&cardid=<?php echo ($thisCard["id"]); ?>&wecha_id=<?php echo ($wecha_id); ?>">
           	<img src="<?php echo RES;?>/card/images/my.png">
            <p>会员中心</p>
            </a>
        </li>
    </ul>
</div>-->
<script type="text/javascript">
window.shareData = {  
            "moduleName":"Card",
            "moduleID":"0",
            "imgUrl": "", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Card/index',array('token'=>$token));?>",
            "tTitle": "会员卡",
            "tContent": ""
};
</script>
<?php echo ($shareScript); ?>
</body>
</html>