<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($tpl['wxname']); ?></title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">
<link href="<?php echo RES;?>/css/ty/news5.css" rel="stylesheet" type="text/css" />
<script src="<?php echo RES;?>/js/ty/iscroll.js" type="text/javascript"></script>

<style>
#cate6 .mainmenu li.li0:nth-child(5) .menumesg {
    background-color: #990000;
}
#cate6 .mainmenu li.li0:nth-child(1) .menumesg {
    background-color: #01AA0A;
}
#cate6 .mainmenu li.li0:nth-child(9) .menumesg {
    background-color: #8B4500;
}

#cate8 .mainmenu li .menubtn {
    border-radius: 5px;
}
#cate8 .mainmenu li div img {
    border-radius: 5px;
}

 .themeStyle{background:#DE0C04}  
</style>
<script src="<?php echo RES;?>/css/flash/js/iscroll.js" type="text/javascript"></script>
<script type="text/javascript">
var myScroll;

function loaded() {
myScroll = new iScroll('wrapper', {
snap: true,
momentum: false,
hScrollbar: false,
onScrollEnd: function () {
document.querySelector('#indicator > li.active').className = '';
document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
}
 });
 
 
}

document.addEventListener('DOMContentLoaded', loaded, false);
</script>
</head>
<body id="cate4">

<div class="banner">
<div id="wrapper">
<div id="scroller">
<ul id="thelist">
   <?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li><p><?php echo ($so["info"]); ?></p><a href="<?php echo ($so["url"]); ?>"><img src="<?php echo ($so["img"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>
</div>
<div id="nav">
<div id="prev" onclick="myScroll.scrollToPage('prev', 0,400,<?php echo ($num-1); ?>);return false">&larr; prev</div>
<ul id="indicator">
<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li   <?php if($i == 1): ?>class="active"<?php endif; ?>  ><?php echo ($i); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>

</ul>
<div id="next" onclick="myScroll.scrollToPage('next', 0);return false">next &rarr;</div>
</div>
<div class="clr"></div>
</div>

<script>


var count = document.getElementById("thelist").getElementsByTagName("img").length;	


for(i=0;i<count;i++){
 document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}

document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";


 setInterval(function(){
myScroll.scrollToPage('next', 0,400,count);
},3500 );

window.onresize = function(){ 
for(i=0;i<count;i++){
document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}

 document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
} 

</script>
<div id="todayList">
<ul  class="todayList">
   <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="only4">
	<a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo ($vo["url"]); endif; ?>">
		<div class="img"><img src="<?php echo ($vo["img"]); ?>" /></div>
		<h2><?php echo ($vo["name"]); ?></h2>
		<p class="onlyheight"><?php echo ($vo["info"]); ?></p>
		<span class="icon">&nbsp;</span>
		<div class="clr"></div>
	</a>
</li><?php endforeach; endif; else: echo "" ;endif; ?>

 	
</ul>
</div>
<?php if(($copyright) == "0"): ?><div class="copyright"  >
<?php echo htmlspecialchars_decode(C('copyright')) ?>
</div><?php endif; ?>
<div style="display:none"><?php echo (htmlspecialchars_decode($tpl["tongji"])); ?></div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<?php if($radiogroup > 8): ?><br>
<br><?php endif; ?>
<script>
function displayit(n){
	for(i=0;i<4;i++){
		if(i==n){
			var id='menu_list'+n;
			if(document.getElementById(id).style.display=='none'){
				document.getElementById(id).style.display='';
				document.getElementById("plug-wrap").style.display='';
			}else{
				document.getElementById(id).style.display='none';
				document.getElementById("plug-wrap").style.display='none';
			}
		}else{
			if($('#menu_list'+i)){
				$('#menu_list'+i).css('display','none');
			}
		}
	}
}
function closeall(){
	var count = document.getElementById("top_menu").getElementsByTagName("ul").length;
	for(i=0;i<count;i++){
		document.getElementById("top_menu").getElementsByTagName("ul").item(i).style.display='none';
	}
	document.getElementById("plug-wrap").style.display='none';
}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
});
</script> <style type="text/css">
body { margin-bottom:60px !important; }
ul, li { list-style:none; margin:0; padding:0 }
#plug-wrap { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0); z-index:800; }
.top_bar { position:fixed; bottom:0; left:0px; z-index:900; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }
.plug-menu { -webkit-appearance:button; display:inline-block; width:36px; height:36px; border-radius:36px; position: absolute; bottom:17px; left: 17px; z-index:999; box-shadow: 0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25); background-color: #B70000; -webkit-transition: -webkit-transform 200ms; -webkit-transform:rotate(1deg); color:#fff; background-image:url('tpl/Wap/default/common/images/plug.png'); background-repeat: no-repeat; -webkit-background-size: 80% auto; background-size: 80% auto; background-position: center center; }
.plug-menu:before { font-size:20px; margin:9px 0 0 9px; }
.plug-menu:checked { -webkit-transform:rotate(135deg); }
.top_menu { margin-left: -175px; }
.top_menu>li { min-width: 86px; padding: 0 10px; height:32px; border-radius:32px; box-shadow: 0 0 0 3px #FFFFFF, 0 2px 5px 3px rgba(0, 0, 0, 0.25); background:#B70000; margin-bottom: 23px; margin-left: 23px; z-index:900; transition: all 200ms ease-out; -webkit-transition: all 200ms ease-out; }
.top_menu>li:last-child { margin-bottom: 80px; }
.top_menu>li a { color:#fff; font-size:20px; display: block; height: 100%; line-height: 33px; text-indent:26px; text-decoration:none; position:relative; font-size:16px; text-overflow:ellipsis; white-space:nowrap; overflow:hidden; }
.top_menu>li a img { display: block; width: 24px; height: 24px; text-indent: -999px; position: absolute; top: 50%; left: 10px; margin-top: -13px; margin-left: -12px; }
.top_menu>li.on:nth-of-type(1) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 700ms ease-out;
-webkit-transition: all 700ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(2) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 600ms ease-out;
-webkit-transition: all 600ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(3) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 500ms ease-out;
-webkit-transition: all 500ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(4) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 400ms ease-out;
-webkit-transition: all 400ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(5) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 300ms ease-out;
-webkit-transition: all 300ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(6) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 200ms ease-out;
-webkit-transition: all 200ms ease-out;width: 130px;
}
 .top_menu>li.out:nth-of-type(1) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 600ms ease-out;
-webkit-transition: all 600ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(2) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 500ms ease-out;
-webkit-transition: all 500ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(3) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 400ms ease-out;
-webkit-transition: all 400ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(4) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 300ms ease-out;
-webkit-transition: all 300ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(5) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 200ms ease-out;
-webkit-transition: all 200ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(6) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 100ms ease-out;
-webkit-transition: all 100ms ease-out;width: 130px;
}
#sharemcover { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; z-index: 20000; }
#sharemcover img { position: fixed; right: 18px; top: 5px; width: 260px; height: 180px; z-index: 20001; border:0; }
</style>
<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
<nav>
    <ul id="top_menu" class="top_menu">
      <input type="checkbox" id="plug-btn" class="plug-menu themeStyle" style="background-color:<?php echo ($homeInfo["plugmenucolor"]); ?>;background-image:url('tpl/Wap/default/common/images/plug.png');border:0px;">
        <?php if(is_array($catemenu)): $i = 0; $__LIST__ = $catemenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="themeStyle out" style="background:<?php echo ($homeInfo["plugmenucolor"]); ?>"> <a href="<?php echo ($vo["url"]); ?>"><img src="<?php echo ($vo["picurl"]); ?>"><label><?php echo ($vo["name"]); ?></label></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
  </nav>
</div>

<div id="plug-wrap" style="display: none;" ></div>
<script>
$(function(){
        $(".plug-menu").click(function(){
        var li = $(this).parents('ul').find('li');
        if(li.attr("class") == "themeStyle on"){
                li.removeClass("themeStyle on");
                li.addClass("themeStyle out");
        }else{
                li.removeClass("themeStyle out");
                li.addClass("themeStyle on");
        }
        });
});
</script>
	<?php if(ACTION_NAME == 'index'): ?><script type="text/javascript">
			window.shareData = {  
					"moduleName":"Index",
					"moduleID": '0',
					"imgUrl": "<?php echo ($homeInfo["picurl"]); ?>", 
					"timeLineLink": "<?php echo C('site_url'); echo U(Index/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"sendFriendLink": "<?php echo C('site_url'); echo U(Index/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"weiboLink": "<?php echo C('site_url'); echo U(Index/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"tTitle": "<?php echo ($homeInfo["title"]); ?>",
					"tContent": "<?php echo ($homeInfo["info"]); ?>"
				};
		</script>
	<?php else: ?>
		<script type="text/javascript">
			window.shareData = {  
				"moduleName":"Index",
				"moduleID": '1',
				"imgUrl": "<?php echo ($homeInfo["picurl"]); ?>", 
				"timeLineLink": "<?php echo C('site_url'); echo U(Index/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"sendFriendLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"weiboLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"tTitle": "<?php echo ($homeInfo["title"]); ?>",
				"tContent": "<?php echo ($homeInfo["info"]); ?>"
			};
		</script><?php endif; ?>
<?php echo ($shareScript); ?>
</body>
</html>