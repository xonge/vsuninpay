<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>关于我们_河北微信_河北微信营销_河北微信平台_河北微信开发_微信运营平台_河北微信网站-国内领先的功能性微信运营平台</title>
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
    <div class="MainBanner" style="background-image: url(<?php echo RES;?>/images/essay_banner.jpg);">
<div class="MainBanBg"></div>
<div class="MainBannerTxt" style="top: 28px; margin-left: 170px; color: #fff; background-color: #7cbb00; font-size: 40px; line-height: 50px;">微5214网络<br>微信智能服务</div>
</div>
<div class="Public-contLent clearfix sp">
   <div class="Public">
   <div class="hg">
       <p> 微5214微信隶属于河北微5214网络旗下，主要致力于为企业提供移动互联网应用解决方案,始终坚持微信
商业应用技术功能的研发创新，秉承便捷、专业、高效服务客户的宗旨。平台功能不断更新完善，注册用户更是突破8万量级，每天新入驻企业过
千，已经成为名符其实微信第三方平台的领跑者与创新者。</p>
<p>微5214微信是打造一个专门针对针对微信商家公众号提供与众不同的、有针对性的营销推广服务。通过微5214微信营销平台，用户可以轻松管理自己的微信各类信息，对微信公众账号进行维护、开展智能机器人、在线发优惠劵、抽奖、刮奖、派发会员卡、打造微官网、开启微团购等多种活动，对微信营销实现有效监控，极大扩展潜在客户群和实现企业的运营目标。微5214微信营销平台很好的弥补了微信公众平台本身功能不足、针对性不强、交互不便利的问题，为商家公众账号提供更为贴心的、且是核心需求的功能和服务。在线优惠劵、转盘抽奖、微信会员卡等推广服务更是让微信成为商家推广的利器。智能客服的可调教功能让用户真正从微信繁琐的日常客服工作中解脱出来，真正成为商家便利的新营销渠道。</p>
<p>经过多年的沉淀积累，微5214网络形成了一支大规模、有实力、富有经验的专业团队，依托于互联网，坚持自主开发和创新，旗下拥有了自主产权和核心技术的网络商城系统、在线客服系统、微信营销系统、超前创新理念的网络营销解决方案等贴合用户需求、符合市场规律和独具行业特色的产品和服务。</p>
</div>
   </div>
   <div class="Public sp1">
   <div class="hg">
           <p> 微5214网络，一家致力于将创意与技术完美结合的互联网应用IT咨询公司。</p>

 <p> 我们的服务包括：品牌网站建设 、微信3G移动手机网站建设、网络营销、网站配套服务、IT咨询等互联网应用服务。</p>
 <p> 
       我们的使命是为客户的产品或品牌提供非凡而精彩的用户体验，用设计及技术俘获人心，推动产品价值最大化。</p>

       <p>  我们始终关注市场及行业的发展，尤其是国内外同行的智慧，唯有此，才有可能在变幻莫测的市场取得先机，为客户找到最佳的定位及解决方案。要做到这一点需要平衡两股力量，那就是创意跟责任。因此，我们一直把创造性的思维与出色的执行完美得结合起来。</p>
       <p>微5214网络坚守品质，追求卓越，将以为客户创造更多价值为核心，同更多企业探索电子商务经营之道，我们坚信在这个电子商务的掘金时代，网派互动能提供最好的掘金工具，协助企业取得金光灿灿的硕果，促进企业电子商务明天的长足发展。</p>

       <p>  微5214网络，让智慧起舞，专注于擅长的核心业务！</p></div>
   </div>
</div>
</div>