<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!-- saved from url=(0065)<?php echo ($f_siteUrl); ?>bbs/member.php?mod=logging&action=login -->

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title><?php echo ($f_siteName); ?>-用户登入</title>

<link rel="stylesheet" href="<?php echo RES;?>/css/newlogin.css" media="screen">

<link rel="icon" href="<?php echo ($f_siteUrl); ?>favicon.ico" type="image/x-icon">

<meta name="description" content="<?php echo ($content); ?>">

<meta name="keywords" content="<?php echo ($keyword); ?>">

<script src="<?php echo RES;?>/js/jquery-1.4.4.min.js" type="text/javascript"></script>

</head>

<body style="background: url('/tpl/Home/bbs52jscncom/common/images/background.jpg"') repeat;">

<div id="wxj-header">

  <div class="wei_link">

    <div style=""></div>

  </div>

  <div class="container"> <a href="<?php echo ($f_siteUrl); ?>"><img id="logo" src="<?php echo RES;?>/images/logo2.png" alt="<?php echo ($f_siteName); ?>"></a>

    <div class="hdc cl"> 

      <script src="<?php echo RES;?>/js/logging.js" type="text/javascript"></script>

      <form method="post" autocomplete="off" id="lsform" action="<?php echo U('Users/checklogin');?>" onsubmit="return lsSubmit();">

        <div class="fastlg cl"> <span id="return_ls" style="display:none"></span>

          <div class="y pns"> <span class="ftid">

            <select style="display: none;" selecti="0" name="fastloginfield" width="40" tabindex="900" id="ls_fastloginfield">

              <option value="username"></option>

            </select>

            <a tabindex="900" style="width:40px" href="javascript:;" id="ls_fastloginfield_ctrl"></a> </span>

            <input type="text" tabindex="901" onblur="if(this.value == &#39;&#39;){this.value = &#39;UID/用户名/Email&#39;;}" onfocus="if(this.value == &#39;UID/用户名/Email&#39;){this.value = &#39;&#39;;}" value="UID/用户名/Email" class="signin-text" autocomplete="off" id="ls_username" name="username">

            <label for="ls_cookietime">

              <input style="display:none" type="checkbox" tabindex="903" value="2592000" class="pc" id="ls_cookietime" name="cookietime">

            </label>

            <a onclick="showWindow(&#39;login&#39;, &#39;member.php?mod=logging&amp;action=login&amp;viewlostpw=1&#39;)" href="javascript:;"></a>

            <input type="hidden" name="formhash" value="2bc9dad7">

            <input type="hidden" name="referer" value="<?php echo ($f_siteUrl); ?>index.php?con=user">

            <input type="password" tabindex="902" autocomplete="off" class="signin-text" id="ls_password" name="password">

            <button tabindex="904" class="green-btn" type="submit"><em>登录</em></button>

            <input type="hidden" name="quickforward" value="yes">

            <input type="hidden" name="handlekey" value="ls">

          </div>

        </div>

      </form>

    </div>

    <img id="mark-m1" class="mark" src="<?php echo RES;?>/images/mark_1.png" style="display: block; opacity: 0.534530012857203;"> </div>

</div>

<div class="reg-now">

  <span style="padding-top: 5px; margin-left: 16px;">还没有<?php echo ($f_siteName); ?>账号？<a target="_blank" href="<?php echo U('Index/reg');?>">马上注册</a> <a href="<?php echo ($f_siteUrl); ?>index.php?con=index&act=lostpass">&nbsp;&nbsp;忘记密码?</a></span></p>

</div>

<div id="wxj-footer">

  <div class="container"> <a target="_blank" style="font-size: 14px; margin-left: 46px;" href="<?php echo ($f_siteUrl); ?>"><?php echo ($f_siteName); ?>国际</a> <span class="sep"></span> <a target="_blank" href="<?php echo ($f_siteUrl); ?>"></a> <span class="sep"></span><br>

    <a target="_blank" href="<?php echo ($f_siteUrl); ?>"></a> <span class="light"> © <?php echo ($f_copyright); ?>&nbsp;&nbsp;&nbsp;<?php echo ($f_ipc); ?></span> <img alt="可信网址,诚信网址" src="<?php echo RES;?>/images/cxwz.png" class="cxwz"> </div>

</div>

<div class="overlay"></div>

<div id="reg-select">

  <div class="container">

    <div id="overlay-content">

      <div class="close-btn"></div>

      <div class="title">

        <h1>请选择你的微信公众号类型：</h1>

        <h2>注：不同的类型在营销平台中提供的服务模块会有所区别,请按您的公众号类型选择。</h2>

      </div>

      <div id="reg-type" class="fn-clear"> <a href="<?php echo ($f_siteUrl); ?>" id="t-merchant"></a> <a href="<?php echo ($f_siteUrl); ?>bbs/member.php?mod=logging&action=login#" id="t-taobao"></a> </div>

    </div>

  </div>

</div>

<script type="text/javascript">

var  count = 0;

function changesrc() {  

$('#mark-m1').attr("src","/tpl/Home/bbs52jscncom/common/images/mark_"+(count%4)+".png");

count++;

}  

$(document).ready(function(){  

setInterval(changesrc, 2000);  

}); 

</script>

</body>

</html>