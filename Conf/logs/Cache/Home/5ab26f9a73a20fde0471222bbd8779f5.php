<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>案例_河北微信_河北微信营销_河北微信平台_河北微信开发_微信运营平台_河北微信网站-国内领先的功能性微信运营平台</title>
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
  <div class="case_menu">
    <div class="casemenutop">
      <h1>案例展示</h1>
      <p>微信扫一扫，体验微派真实案例</p>
    </div>
  </div>
  <div class="anli_bg">
    <div class="bgs"> </div>
  </div>
  <div class="anli_list case_list">
     <div class="row_0">
				<div class="item item_0 left">
                    <div class="img"><ul style="top: 0px;"><li><img data-pinit="registered" src="<?php echo RES;?>/images/c4.jpg"></li><li><img data-pinit="registered" src="<?php echo RES;?>/images/c4_4.jpg"></li></ul></div>
                    <div><div class="name">美尔雅整形美容医院</div><div class="tips">美尔雅整形美容医院</div></div>
                </div>
                <div class="item item_1 left">
                   <div class="img"><ul style="top: 0px;"><li><img data-pinit="registered" src="<?php echo RES;?>/images/c2.jpg"></li><li><img data-pinit="registered" src="<?php echo RES;?>/images/c2_2.jpg"></li></ul></div>
                    <div><div class="name">伊丽莎白婚纱摄影</div><div class="tips">伊丽莎白婚纱摄影</div></div>
                </div>
                <div class="item item_2 left">
                   <div class="img"><ul style="top: 0px;"><li><img data-pinit="registered" src="<?php echo RES;?>/images/c5.jpg"></li><li><img data-pinit="registered" src="<?php echo RES;?>/images/c5_5.jpg"></li></ul></div>
                    <div><div class="name">安然纳米汗蒸</div><div class="tips">安然纳米汗蒸</div></div>
                </div>
				<div class="item item_3 left mr_0">
                    <div class="img"><ul style="top: 0px;"><li><img data-pinit="registered" src="<?php echo RES;?>/images/c1.jpg"></li><li><img data-pinit="registered" src="<?php echo RES;?>/images/c1_1.jpg"></li></ul></div>
                    <div><div class="name">novitq诺维达</div><div class="tips">novitq诺维达</div></div>
                </div>
           
				<div class="item item_4 left">
                   <div class="img"><ul style="top: 0px;"><li><img data-pinit="registered" src="<?php echo RES;?>/images/case_21.jpg"></li><li><img data-pinit="registered" src="<?php echo RES;?>/images/code_21.jpg"></li></ul></div>
                    <div><div class="name">圣地亚歌化妆品</div><div class="tips">圣地亚歌化妆品</div></div>
                </div>
                <div class="clear"></div>
				<div class="item item_5 left">
                    <div class="img"><ul style="top: 0px;"><li><img data-pinit="registered" src="<?php echo RES;?>/images/c6.jpg"></li><li><img data-pinit="registered" src="<?php echo RES;?>/images/c6_6.jpg"></li></ul></div>
                    <div><div class="name">欧培拉蛋糕微商城</div><div class="tips">欧培拉蛋糕微商城</div></div>
                </div>
				<div class="item item_6 left">
                    <div class="img"><ul style="top: 0px;"><li><img data-pinit="registered" src="<?php echo RES;?>/images/c7.jpg"></li><li><img data-pinit="registered" src="<?php echo RES;?>/images/c7_7.jpg"></li></ul></div>
                    <div><div class="name">TITI专业造型</div><div class="tips">TITI专业造型</div></div>
                </div>
                <div class="item item_7 left">
                    <div class="img"><ul style="top: 0px;"><li><img data-pinit="registered" src="<?php echo RES;?>/images/c8.jpg"></li><li><img data-pinit="registered" src="<?php echo RES;?>/images/c8_8.jpg"></li></ul></div>
                    <div><div class="name">泰和阁餐饮</div><div class="tips">泰和阁餐饮</div></div>
                </div>
                  <div class="item item_7 left">
                    <div class="img"><ul style="top: 0px;"><li><img data-pinit="registered" src="<?php echo RES;?>/images/c9.jpg"></li><li><img data-pinit="registered" src="<?php echo RES;?>/images/c9_9.jpg"></li></ul></div>
                    <div><div class="name">神农蜂语微商城</div><div class="tips">神农蜂语微商城</div></div>
                </div>
                    <div class="item item_5 left">
                    <div class="img"><ul style="top: 0px;"><li><img data-pinit="registered" src="<?php echo RES;?>/images/c10.jpg"></li><li><img data-pinit="registered" src="<?php echo RES;?>/images/c10_1.jpg"></li></ul></div>
                    <div><div class="name">大成律师事务所</div><div class="tips">大成律师事务所</div></div>
                </div>
                     <div class="item item_5 left">
                    <div class="img"><ul style="top: 0px;"><li><img data-pinit="registered" src="<?php echo RES;?>/images/c11.jpg"></li><li><img data-pinit="registered" src="<?php echo RES;?>/images/c11_1.jpg"></li></ul></div>
                    <div><div class="name">鲜之惠烤肉餐厅</div><div class="tips">鲜之惠烤肉餐厅</div></div>
                </div>
                
				            </div>
  </div>
</div>
</div>
<script type="text/javascript">
		$('.case_list .item').hover(function(){
			var self=$(this);
			var obj=self.find('ul');
			if(!obj.is(':animated'))
			{
				obj.stop(true,false).animate({'top':'-185px'});
			}
		},function(){
			var self=$(this);
			var obj=self.find('ul');
			//alert(obj.is(':animated')+'@'+self.siblings().is(':animated'));
			if(!obj.is(':animated') && !self.siblings().is(':animated'))
			{
				obj.stop(true,false).delay(3000).animate({'top':0});
			}
			else if(obj.is(':animated'))
			{
				obj.animate({'top':'-185px'}).delay(3000).animate({'top':0});
			}
		});
		
		/*$('.case_list .item').click(function(){
			var self=$(this);
			var obj=self.find('ul');
			
			if(parseFloat(obj.css('top'))<0)
			{	
				obj.animate({'top':0});
			}
		});*/
</script>