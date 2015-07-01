<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>联系我们_河北微信_河北微信营销_河北微信平台_河北微信开发_微信运营平台_河北微信网站-国内领先的功能性微信运营平台</title>
<meta name="Keywords" content="河北微信,河北微信营销,河北微信网站,河北微信平台,河北微信网站,企业微信营销,微信营销平台,微信运营平台,微信二次开发,微信二次开发平台,河北微5214" />
<meta name="Description" content="微5214网络，服务于企业的微信营销服务平台，提供河北微信,河北微信营销,河北微信网站,河北微信平台,河北微信网站,企业微信营销,微信营销平台,微信运营平台,微信二次开发,微信二次开发等服务。" />
<link href="<?php echo RES;?>/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/scrolltop.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var $BanContBg = $(".BanContBg")
	var $BanPic = $(".BanPic");
	var $BanTxt = $(".BanTxt");
	var $BanBtn = $(".BanBtn");
	var BanBtnLi = 0;
	$BanPicLi = $BanPic.find("li");
	$BanTxtLi = $BanTxt.find("li");
	$BanBtnLi = $BanBtn.find("li");
	for(i=0;i<$BanPicLi.length;i++){
		var BanPicLiSrc = $BanPicLi.eq(i).find("img")[0].src;
		$BanPicLi.eq(i).css({"background-image":"url('"+BanPicLiSrc+"')"});
		$BanPicLi.eq(i).find("img").css({"display":"none"});
		}
	$BanPicLi.hide().css({"opacity":0}).eq(BanBtnLi).show().css({"opacity":1});
	$BanTxtLi.hide().eq(BanBtnLi).show();
	$BanBtnLi.eq(BanBtnLi).addClass("Active")
	$BanBtnLi.click(function(){
		$BanContBg.css({"opacity":0});
		$(this).addClass("Active").siblings().removeClass("Active");
		BanBtnLi = $BanBtnLi.index(this);
		$BanPicLi.hide().css({"opacity":0}).eq(BanBtnLi).show();
		$BanPicLi.eq(BanBtnLi).animate({opacity:1},1000);
		$BanContBg.animate({opacity:0.2},1000);
		$BanTxtLi.hide().eq(BanBtnLi).show();
		})
		})
</script>
</head>
<body>
<div id="top">
  <div class="topwrap">
    <div class="tel">欢迎使用<?php echo ($f_siteName); ?>多用户微信营销服务平台!</div>
    <div class="tag">
		<?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Home/Index/login');?>">平台登陆　</a> |　 <a href="<?php echo U('Home/Index/reg');?>">申请入驻　</a> |　 <a href="http://wpa.qq.com/msgrd?v=3&uin=616105616&site=qq&menu=yes" target="_blank">接口定制　</a> |　 <a href="http://wxedit.5214.com.cn/" target="_blank">微信编辑器</a>
			<?php else: ?>
			<?php echo (session('uname')); ?> 欢迎您，<a href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出　</a> |　 <a href="<?php echo U('User/Index/index');?>" hidefocus="true">管理中心　</a> |　 <a href="http://wpa.qq.com/msgrd?v=3&uin=616105616&site=qq&menu=yes" target="_blank">接口定制　</a> |　 <a href="http://wxedit.5214.com.cn/" target="_blank">微信编辑器</a><?php endif; ?>	
	</div>
  </div>
  </div>
<!--导航 start -->
<div class="head">
  <div class="head_top">
    <div class="logo"><a href="/" title="锦尚中国微信营销">国内领先的功能性微信运营平台</a></div>
    <div class="menu">
      <ul>
        <li><a href="<?php echo U('Home/Index/index');?>" title="首页"<?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="selected"<?php endif; ?>>首页</a></li>
        <li><a href="<?php echo U('Home/Index/gn');?>" title="功能"<?php if((ACTION_NAME) == "gn"): ?>class="selected"<?php endif; ?>>功能</a></li>
        <li><a href="<?php echo U('Home/Index/case');?>" title="案例"<?php if((ACTION_NAME) == "case"): ?>class="selected"<?php endif; ?>>案例</a></li>
        <li><a href="<?php echo U('Home/Index/help');?>">帮助</a></li>
        <li><a href="<?php echo U('Home/Index/about');?>" title="关于"<?php if((ACTION_NAME) == "about"): ?>class="selected"<?php endif; ?>>关于</a></li>
        <li><a href="<?php echo U('Home/Index/content');?>" title="联系我们"<?php if((ACTION_NAME) == "content"): ?>class="selected"<?php endif; ?>>联系我们</a></li>
      </ul>
    </div>
    <div class="tel01"> <span class="wz01">24小时在线服务</span> <span class="wz02">QQ：<?php echo ($f_qq); ?></span></div>
  </div>
</div>
<!--导航 end --> 
<div class="big_main">
  <div class="main_top"></div>
       <div id="dituContent">
       </div>
       <div class="map">
          <div class="bbg">
             <div class="message">
                <span class="tit01">联系我们</span>
                <div class="contact_cont">
                <dl>
                   <dt>联系人：<span>*</span></dt>
                   <dd><input class="u1" type="text" name="t0" maxlength="20" /></dd>
                </dl>
                  <dl>
                   <dt>邮箱：<span>*</span></dt>
                   <dd><input class="u1" type="text" name="t3" maxlength="20" /></dd>
                </dl>
                   <dl>
                   <dt>电话：<span>*</span></dt>
                   <dd><input class="u1" type="text" name="t2" maxlength="20" /></dd>
                </dl>
                   <dl>
                   <dt>公司名称：<span>*</span></dt>
                   <dd><input class="u1" type="text" name="t5" maxlength="20" /></dd>
                </dl>
                   <dl class="textareakuang">
                   <dt>您的留言：<span>*</span></dt>
                   <dd><textarea name="" cols="" rows="" name="t1"></textarea></dd>
                </dl>
                <div class="btnCont">
            <input name="input" class="btn fht" value="提 交" onclick="javascript:submitFrom();" title="提交您的需求" type="button" />
            <span>两个工作日内回复您，您的资料会保密处理。</span></div>
                </div>
             </div>
             <div class="con">
               <span class="tit02">河北微5214网络</span>
                <div class="lxcont">

                </div>
                <div class="ewm15"><img src="<?php echo RES;?>/images/contact_weiwang_07.jpg"/></div>
             </div>
          </div>
</div>
</div>

<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(112.520033,37.100455);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"河北微5214网络",content:"河北市和平北路67号<br/>电话：0351-6181211<br/>18603516772",point:"112.515228|37.877707",isOpen:1,icon:{w:21,h:6,l:0,t:0,x:6,lb:6}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>