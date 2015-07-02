<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>鑫远达 周大为 的微名片累计访问 1 次，红遍朋友圈，你也赶紧创建一个吧！</title>
  <base href="http://xiangtan.suninpay.com:81/">
  <meta name="format-detection" content="telephone=no,email=no" />
  <!--连写模式-->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <!--for iphone-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- seo，真的有必要seo吗？-->
  <meta name="keywords" content="商用宝 微名片 二维码 商用宝 周大为 的名片" />
  <meta name="description" content="商用宝 微名片 二维码 商用宝 周大为 的名片" />
  <!-- <meta name="robots" content="nofollow" />
  告诉搜索引擎不追踪此页面的链接-->
  <!-- 外部css-->
  <link rel="stylesheet" href="CardStyle/flytip.css" />
  <link rel="stylesheet" href="CardStyle/common.css?v=201503011j" />
  <link rel="stylesheet" href="CardStyle/default-1.css?v=201503011j" />
  <link rel="stylesheet" href="css/vpopup.css" />
  <link rel="stylesheet" href="CardStyle/mpShow.css" />
  <link rel="stylesheet" href="CardStyle/btm_bar.css" />
  <link rel="stylesheet" href="CardStyle/CardShow.css?t=2014-12-5" />
  <link rel="stylesheet" href="CardStyle/base2.css" />
  <link rel="stylesheet" href="CardStyle/theme.css" />
  <!-- <link rel="stylesheet" type="text/css" href="http://xiangtan.suninpay.com/CardStyle/CardShow.css?t=2014-12-5">
  -->
  <!-- 外部js-->
  <script type="text/javascript" src="CardStyle/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="CardStyle/mpShow.js"></script>
  <!--内部css-->
  <style type="text/css">
  .GuideMenuLink span {
    margin-left: 5px;
    background: url(CardStyle/CardGuideLink.png);
  }
  .GuideMenuLink span a {
    color: #ff0000;
  }
  </style>
</head>
<body class="card card-home" style="">
  <div style="display:none;">
    <img src="291290.jpg" alt="" style="" width="400"></div>
  <!-- 第一个层-->
  <div class="xonge_wrapper">
      <div style="display:none;">
        Ta关注: IT</div>
      <!--#=start page-->
      <div class="card-page toggle-transition-1s namecard-page-relative">
        <!--#=start column-->
        <section id="fuck_content" class="home-column pb45">
          <div class="home-inner">
            <!--#=start catalog-->
            <!--公司名称-->
            <div class="home-inner-title">
              <p class="comp"><?php echo ($userinfo["MerchantName"]); ?></p>
              <p class="comp"></p>
            </div>
            <!-- 位置导航-->
            <div class="home-inner-hand" id="jsClickLike" onClick="GetAddressMessageList();">
              <a class="home-hand-link" href="javascript:">
                <span class="item-round"> <i class="ico-hand"></i>
                </span>
                <span class="home-number info-number">找TA</span>
              </a>
            </div>
            <!-- 访问量-->
            <div class="home-inner-network">
            <!-- 跳到访客记录 -->
              <a class="home-network-link" href="javascript:;" target="_blank">
                <span class="item-round">累计访问</span>
                <span class="home-number"><?php echo ($userinfo["ViewCount"]); ?></span>
              </a>
            </div>
            <ul class="home-box-stat" id="catesWrap">
              <li class="home-box-item " data-id="1414466325173">
                <a href="javascript:;" class="content-item-anchor" target="_blank">
                  <span class="home-column-text">名片主页</span>
                </a>
              </li>
              <li class="home-box-item " data-id="1414466325174">
                <a href="javascript:;" class="content-item-anchor" target="_blank">
                  <span class="home-column-text">新闻中心</span>
                </a>
              </li>
              <li class="home-box-item " data-id="1414466325175">
                <a href="javascript:;" class="content-item-anchor" target="_blank">
                  <span class="home-column-text">产品中心</span>
                </a>
              </li>
              <li class="home-box-item " data-id="1414466325176">
                <a href="javascript:;" class="content-item-anchor" target="_blank">
                  <span class="home-column-text">关于我们</span>
                </a>
              </li>
            </ul>
            <!--#=end catalog-->
            <div class="home-box-basic">
              <a href="javascript:;" class="content-item-anchor" target="_blank">
                <div class="home-avatar">
                  <img alt='代理商推广网址URL二维码' src="<?php echo ($userinfo["SmallCompanyLogo"]); ?>" class="home-avatar-thumbnail avatarPic" width="" style=""/>
                </div>
              </a>
              <div class="home-ewm">
                <i class="icon-ewm js-ewm"></i>
              </div>
              <div class="home-contact-box">
                <div class="home-contact-name">
                  <h3 class="home-name">
                    <span class="tipstr"><?php echo ($userinfo["RealName"]); ?></span>
                    <br />
                    <a href="javascript:;" class="btn-add " style="" target="_blank">加好友</a>
                  </h3>
                </div>
                <div class="home-contact-post">
                  <span class="home-contact-text"><?php echo ($userinfo["JobGrade"]); ?></span>
                  <span class="home-contact-text text-phone"><?php echo ($userinfo["UserName"]); ?></span>
                  <a class="home-contact-text text-call" href="tel:<?php echo ($username); ?>">
                    <i class="ico-call"></i>一键拨号</a>
                </div>
              </div>
              <div class="home-text-box">
                <div class="home-box-row">
                  <p class="row-absolute">
                    <span class="vertical-m">电话：</span>
                  </p>
                  <span class="vertical-m"><?php echo ($userinfo["Phone"]); ?></span>
                </div>
              <div class="home-box-row">
                <p class="row-absolute">
                  <span class="vertical-m">邮箱：</span>
                </p>
                <span class="vertical-m">
                  <a href="mailto:xonge007x@sina.com"><?php echo ($userinfo["Email"]); ?></a>
                </span>
              </div>
              <div class="home-box-row">
                <p class="row-absolute">
                  <span class="vertical-m">地址：</span>
                </p>
                <span class="vertical-m"><?php echo ($userinfo["Address"]); ?></span>
              </div>
              <div class="home-box-row">
                <p class="row-absolute">
                  <span class="vertical-m">微信：</span>
                </p>
                <span class="vertical-m">
                  <a href="javascript:;" class="js-add" style="" target="_blank"><?php echo ($userinfo["WeChatCode"]); ?>：点击加微信</a>
                </span>
              </div>
            </div>
          </div>
          <p class="line"></p>
          <ul class="fovorite-text-inner">
            <li class="info--text-item">
              <span class="info-name-tit">TA专注：</span>
              <span id="RunTopic">我也不知道</span>
            </li>
            <li class="info--text-item">
              <span class="info-name-tit">读TA：</span>
              <a href="javascript:;" target="_blank">点击阅读TA的文章</a>
            </li>
          </ul>
      <!-- continue-->
        </div>
      </section>
      <!--#=end column-->
    </div>
    <!-- 背景层，会有背景图，不是遮盖层，重新写在css里面，使用平铺，防止不同尺寸手机显示不完整-->
    <div class="cardBg" style="background:url(<?php echo ($userinfo["bgimg"]); ?>) repeat;background-size:100%;"></div>
    <!--#=end page-->
    <!-- 底部按钮层-->
    <div id="more_btn" class="feature1 js-sharebox toggle-transition-1s" style="bottom: 50px;">
      <a href="http://vcard.suninpay.com/" class="downLoadLink1" target="_blank">微贺卡</a>
      <a href="http://v.suninpay.com/<?php echo U('Article/add', array('f' => 0));?>" class="downLoadLink1" target="_blank">发文章</a>
      <a href="javascript:;" class="downLoadLink1" target="_blank">网络POS</a>
      <a href="javascript:;" class="downLoadLink1" target="_blank" style="display:none;">远程收款</a>
      <a href="http://so.suninpay.com/" class="downLoadLink1" target="_blank">搜商宝</a>
    </div>
    <div class="feature js-sharebox toggle-transition-1s">
      <!-- 左侧按钮-->
      <div class="feature-favor js-collect feature-w33">
        <i class="ico-favor"></i>
        <span class="vertical-m" id="collectBtnTx">TA的微店</span>
      </div>
      <!-- 中间按钮-->
      <div class="feature-favor feature-w33">
        <a href="<?php echo U('Card/register', array('f' => 0));?>" class="" target="_blank"><i class="ico-card"></i><span class="vertical-m">我也要一个</span></a>
      </div>
      <!-- 右侧按钮-->
      <div class="feature-more js-featureMore feature-w33">
        <i class="ico-more"></i>
        <span class="vertical-m">更多</span>
      </div>
    </div>
    <!-- 箭头-->
    <div class="fuckarr" style="display:none;">
      <img alt="" src="CardImages/nav.gif" />
    </div>
    <!-- 右侧弹出栏-->
    <div class="more-list-wrap js-moreList">
  <div class="more-list">
    <ul class="more-list-ul">
      <li class="more-list-item btop">
        <a href="http://v.suninpay.com/<?php echo U('Card/manage', array());?>" class="more-item-anchor" target="_blank">
          <span class="vertical-m">管理入口</span> <i class="icon-right"></i>
        </a>
      </li>
      <li class="more-list-item btop">
        <a href="MobileIdentityValidate.aspx?MainID=0" class="more-item-anchor" target="_blank">
          <span class="vertical-m">申请审核</span> <i class="icon-right"></i>
        </a>
      </li>
      <li class="more-list-item btop">
        <a href="http://v.suninpay.com/<?php echo U('Card/register');?>" class="more-item-anchor" target="_blank">
          <span class="vertical-m">修改名片</span>
          <i class="icon-right"></i>
        </a>
      </li>
      <li class="more-list-item btop">
        <a href="javascript:;" class="more-item-anchor" target="_blank">
          <span class="vertical-m">短信群发</span>
          <i class="icon-right"></i>
        </a>
      </li>
      <li class="more-list-item btop">
        <a href="javascript:;" class="more-item-anchor" target="_blank">
          <span class="vertical-m">一键支付</span>
          <i class="icon-right"></i>
        </a>
      </li>
      <li class="more-list-item btop" style="display:none;">
        <a href="javascript:;" class="more-item-anchor" target="_blank">
          <span class="vertical-m">远程收款</span>
          <i class="icon-right"></i>
        </a>
      </li>
      <li class="more-list-item btop">
        <a href="javascript:;" class="more-item-anchor" target="_blank">
          <span class="vertical-m">一键提现</span>
          <i class="icon-right"></i>
        </a>
      </li>
      <li class="more-list-item btop">
        <a href="javascript:;" class="more-item-anchor" target="_blank">
          <span class="vertical-m">保存通讯录</span>
          <i class="icon-right"></i>
        </a>
      </li>
      <li class="more-list-item btop">
        <a href="javascript:;" id="jsqrcode" class="more-item-anchor" target="_blank">
          <span class="vertical-m">二维码通讯录</span>
          <i class="icon-right"></i>
        </a>
      </li>
      <li class="more-list-item btop">
        <a href="javascript:;" class="more-item-anchor" target="_blank">
          <span class="vertical-m">晒我的业绩</span>
          <i class="icon-right"></i>
        </a>
      </li>
      <li class="more-list-item btop">
        <a href="javascript:;" class="more-item-anchor">
          <span class="vertical-m">操作教程</span>
          <i class="icon-right"></i>
        </a>
      </li>
      <li class="more-list-item btop">
        <a href="javascript:;" class="more-item-anchor" target="_blank">
          <span class="vertical-m">我的微名片</span>
          <i class="icon-right"></i>
        </a>
      </li>
      <li class="more-list-item btop">
        <a href="MobileLogout.aspx" class="more-item-anchor">
          <span class="vertical-m">退出</span>
          <i class="icon-right"></i>
        </a>
      </li>
    </ul>
  </div>
  <div class="more-list-item item-back">
    <a href="javascript:;" class="more-item-anchor"> <i class="ico-back"></i>
      <span class="vertical-m">返 回</span>
    </a>
  </div>
</div>
<!-- 二维码弹出层-->
<div class="ewmform js-ewmform">
  <div class="ewmform-box">
    <code class="ewmform-close js-ewmClose"></code>
    <div class="ewmform-title">扫码收藏我的微名片</div>
    <div class="ewmform-summary">
      <img class="ewm-thumbnail" id="ewmThumbnail" data-src="<%= StrWeChatPublicCodeLink%>"></div>
    <div class="ewmform-des">
      长按二维码可保存到手机里
      <br>可印在纸质名片和宣传单上</div>
  </div>
</div>
<div class="superMask" id="superMask"></div>
<div class="sideNav-tip" id="sideNavTip"></div>
<!-- 二维码 -->
<div class="m-qrpopmask" id="j-m-qrpop">
<section class="m-qrpop">
  <div class="tab-hd">
    <span name="twoCode" class="item flex-center active" data-type="0">导入通讯录</span>
    <span name="twoCode" class="item flex-center" data-type="1">名片二维码</span>
  </div>
  <div id="j-link-qr" class="tab-cont" style="display: none;">
    <div class="tc">
      <img alt="" width="60%" src="" />
      <!-- onerror="this.src='themes/common/images/demo-qrcode.jpg'" -->
    </div>
    <div class="tc mt-5">扫描二维码，访问TA的名片</div>

    <div class="tc mt-10">
      <a class="btn-vcf" href="javascript:;" target="_blank">加微信好友</a>
    </div>
  </div>
  <div id="j-content-qr" class="tab-cont">
    <div class=" tc">
      <img alt="" width="60%" src="" style="z-index: 99999999" />
      <!-- onerror="this.src='themes/common/images/demo-qrcode.jpg'" -->
    </div>
    <div class="fs-16 tc mt-10">微信扫一扫，保存手机通讯录</div>
    <div class="tc mt-10">
      <a class="btn-vcf" href="">导入手机通讯录</a>
    </div>
  </div>
  <div class="m-close" data-action="dailog-close">
    <span class="iconfont">&#xe60f;</span>
  </div>
</section>
</div>
<input id="isFocus" type="hidden" value="false" data-url="test" />
<input id="hasCollect" type="hidden" value="false" />
<input id="personId" type="hidden" value="54fc508f0cf2edf0d9e1cc6c" />
<input id="openId" type="hidden" value="od8J4s8lK2OleSGuj9QCER6912Q4"/>
<input id="focusUrl" type="hidden" value="" />
<input id="fromUrl" type="hidden" value="" />
<input id="isFirst" type="hidden" value="" />
<input id="showTip" type="hidden" value="" />
<input id="notWeixin" type="hidden" value="" />
<input id="fromScan" type="hidden" value="" />
<input id="isCom" type="hidden" value="" />

<div class="musicBox play" id="musicBox"></div>
<audio id="musicPlayer" loop src="" autoplay="autoplay" style="display:none;position:absolute;z-index:-11">
</audio>
</div>
<!-- js -->
<script type="text/javascript" src="js/wx-share.js?v=201503011"></script>
<script type="text/javascript" src="js/flytip.js"></script>
<script type="text/javascript" src="js/vpopup.js"></script>
<script type="text/javascript" src="js/cookie.js"></script>
<script type="text/javascript" src="js/common.js?v=201503011"></script>
<script type="text/javascript" src="js/templateCom.js"></script>
<script type="text/javascript" src="js/jquery.rolltitle.js"></script>
<script type="text/javascript">
$(document.body).ready(function(){
// $("#RunTopic").RollTitle({line:1,speed:200,timespan:1500});
// $("#noticeList").textScroll();
var x = $($('.info-name-tit').get('1')).offset().top;
console.log('zzzz' + x);
});
</script>
<script>
$("link").each(function(){
  var $this = $(this);
  var url = $this.attr("href");
  var ts = (new Date()).getTime();
  $this.on("error",function() {
    $this.attr("href", url + "?=" + ts);
  });
});
</script>
<!-- 延时刷新页面，清空手机微信的缓存-->
<script type="text/javascript">
$(function() {
  //    setTimeout("location.reload()",30000);
});
</script>
<script type="text/javascript">
var IntVideoWidth = 550;
var IntVideoHeight = 400;
// 使用jquery实现回到顶部
$(function() {
  var sh = $(document).height();
  if (sh < IntVideoWidth) {
    console.log(sh);
    // $('#fuck_content').attr('height','IntVideoWidth');
    $('#fuck_content').height(IntVideoWidth);
    $(window).scroll(function() { //只要窗口滚动,就触发下面代码
      var scrollt = document.documentElement.scrollTop + document.body.scrollTop; //获取滚动后的高度
      if (scrollt > 20) { //判断滚动后高度超过200px,就显示
        $("#more_btn").fadeIn(IntVideoHeight); //淡出
      } else {
        $("#more_btn").stop().fadeOut(IntVideoHeight); //如果返回或者没有超过,就淡入.必须加上stop()停止之前动画,否则会出现闪动
      }
    });
  } else {
    var x = $($('.info-name-tit').get('1')).offset().top;
    var selfh = ($($('.info-name-tit').get('1')).height()) * 2;
    console.log(selfh);
    nh = x + selfh + 105;
    if (sh < nh) {
      $('#fuck_content').height(nh);
      $(window).scroll(function() { //只要窗口滚动,就触发下面代码
        var scrollt = document.documentElement.scrollTop + document.body.scrollTop; //获取滚动后的高度
        if (scrollt > 20) { //判断滚动后高度超过200px,就显示
          $("#more_btn").fadeIn(IntVideoHeight); //淡出
        } else {
          $("#more_btn").stop().fadeOut(IntVideoHeight); //如果返回或者没有超过,就淡入.必须加上stop()停止之前动画,否则会出现闪动
        }
      });
    } else {
      $("#more_btn").fadeIn(IntVideoHeight);
    }
  }
});
$(function() {
    var avatar = $('.home-avatar img');
    // Get on screen image
// var screenImage = $("#image");

// Create new offscreen image to test
var theImage = new Image();
theImage.src = avatar.attr("src");

// Get accurate measurements from that.
var imageWidth = theImage.width;
var imageHeight = theImage.height;
//该代码片段来自于: http://www.sharejs.com/codes/javascript/4265
    // console.log(imageWidth);
    if (imageWidth < imageHeight) {
        avatar.css('width', '110');
        // console.log(avatar.css('width'));
    } else {
        avatar.css('height', '110');
        // console.log(avatar.css('width'));
    }
    //二维码
    $("[name='twoCode']").on('touchend mouseup',function(){
        var dataType = $(this).attr('data-type');
        $("[name='twoCode']").removeClass('active');
        $(this).addClass('active');
        if(dataType == "1"){
            $('#j-content-qr').hide();
            $('#j-link-qr').show();
        }else{
            $('#j-content-qr').show();
            $('#j-link-qr').hide();
        }
        event.preventDefault();
    });
    $('#jsqrcode').click(function(event) {
        /* Act on the event */
        $('#j-m-qrpop').toggleClass('flex-center active');
    });
    $("[data-action='dailog-close']").on('touchend mouseup',function(){
        $('#j-m-qrpop').removeClass('flex-center active');
        event.preventDefault();
    });
});
</script>
<!-- Piwik 统计代码 -->
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setCookieDomain", "*.suninpay.com"]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//tongji.aa12345.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 4]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript>
<p>
<img src="//tongji.aa12345.com/piwik.php?idsite=4" style="border:0;" alt="" />
</p>
</noscript>
<!-- End Piwik Code -->
</body>
</html>