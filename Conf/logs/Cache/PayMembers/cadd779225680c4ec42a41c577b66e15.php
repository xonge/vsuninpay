<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>手机登录页面|商用宝</title>
  <base href="http://xiangtan.suninpay.com:81/">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="blue" />
  <meta name="format-detection" content="telephone=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
  <meta name="keywords" content="商用宝,短信群发,微营销,微名片,微信导航,微店,独立网店,网络收银" />
  <meta name="description" content="商用宝是鑫远达电子商务有限公司精心研发的一款集短信群发,微营销,微名片,微信导航,微店,独立网店,网络收银等功能于一体的高效营销系统" />
  <script type="text/javascript" src="WebJs/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="WebJs/util.js?v=1.0.1"></script>
  <script type="text/javascript" src="WebJs/login.js"></script>
  <link rel="stylesheet" href="WebCss/commonHead.css" />
  <link rel="stylesheet" href="WebCss/login.css" />
  <!--[if IE 6]>
  <script src="js/iepng.js" type="text/javascript"></script>
  <script type="text/javascript">
    EvPNG.fix('div, ul, img, li, input, p, a, dl, dd, dt, span, h1');
    </script>
  <![endif]-->
</head>
<body>
  <form action="" method="post">
    <div>
      <div class="main clearfix" style=" padding-top: 0px;">
        <div class="logo-box">
          <div class="logo-div">
            <img src="./LoginImages/top_logo.jpg" width="100%">
            <!-- <h1>我的个性名片</h1>
          -->
        </div>
        <div class="arrow"></div>
      </div>
      <div id="mask" class="mask" style="display: -webkit-box; opacity: 0.8; height: 785px;display: none;"></div>
      <div id="pop-wrapper" class="pop-wrapper" style="display: -webkit-box; opacity: 1; z-index: 998; height: 785px;display: none;">
        <div id="content" class="content">
          <header>
            <h5></h5>
          </header>
          <div class="main1">
            <div>
              <input id="TxtCode2" maxlength="4" name="TxtCode" onfocus="this.select();" autocomplete="off" class="input-common mobile-captcha" placeholder="请输入验证码" />
              <input type="hidden" id="count" value="">
              <div class="refresh">
                <img id="ImgCode2" alt="看不清楚？点击更换" width="70" height="42"
            src="ValidateCode.aspx" style="cursor:pointer;" onclick="ClickChangeImage();" />
                <span id="replaceCode" class="replaceCode">换一张</span>
              </div>
            </div>
            <div class="post-captcha">
              <a id="post-captcha" href="javascript:void(0);">确认</a>
            </div>
          </div>
        </div>
      </div>
      <form action="login/login.htm" method="post" id="form">
        <div id="tips" class="tip-error"></div>
        <div style="text-align: center;color: green;">
          <!-- 名片登录：http://<%= Request.Url.Authority%>/ --></div>
        <div class="input">
          <input type="tel" name="userphone" id="TxtUserName" class="input1" onkeydown="ValidateNumber(event);" onpaste="ValidateClip(event);" placeholder="请输入手机号码用户名" MaxLength="11" />
        </div>
        <div class="input">
          <input type="password" name="userpwd" id="TxtPwd" class="input1" placeholder="请输入登录密码" MaxLength="64" />
        </div>
        <div class="input">
          <input id="TxtCode" maxlength="4" name="TxtCode" onfocus="this.select(); " autocomplete="off"   class="input-common mobile-captcha" placeholder="请输入验证码" />
        </div>
        <div class="input">
          <img id="ImgCode" alt="看不清楚？点击更换" width="70" height="42"
            src="ValidateCode.aspx" style="cursor:pointer;" onclick="ClickChangeImage();" />
        </div>
        <div class="forget">
          <label style="display:none;">
            <input type="checkbox" class="autoBox" name="autoLogin" id="autoLogin"
                    checked="checked">
            <span class="fontSize">下次自动登录</span>
          </label>
          <a href="javascript:;" target="_blank">忘记密码?</a>
        </div>
        <input type="hidden" value="" id="requestURL">
        <button type="submit" id="BtnLogin" Text="登  录" class="login" style="margin-top:15px;" OnClientClick="return CheckEmpty();" OnClick="BtnLogin_Click">登陆</button>
      </form>
      <!--
        <input onClick="location.href='MobileRegisterOne.aspx?DLid=1'"
        type="button" class="login" href="" style="background:#989898;" value="创建二维码导航名片" ">--></div>
    <div id="shadeTip" class="pop-wrapper backgroundCss" style="display: none;position: fixed;">
      <div id="Div1" class="content">
        <header style="padding-left: 10px;">
          <h5>提示</h5>
        </header>
        <div class="main1">
          <span id="tipText" style="color: green;padding-right: 10px;">正在登录!</span>
          <img id="loadImg" src="/images/loading.gif"></div>
      </div>
    </div>
    <div class="loginFoot clearfix">
      本服务由
      <a href="/"> <em>商用宝网</em>
      </a>
      提供
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br></div>
</form>
<script type="text/javascript">
    function GuideMain()
    {
      //key=event.keyCode;
      //event.keyCode = 9;
      //openWindow();return false;
      //alert("OK!");
      //document.getElementByid("ImgLogin").click();
      //当前页面跳转。
      location.href="StudentCenter/StudentCenter.aspx";
      //form.submit();
    }

        function ClickChangeImage()
        {
            document.getElementByid("ImgCode").src = "ValidateCode.aspx?"+Math.random();;
        }

        function CheckEmpty()
        {
            if (document.all["TxtUserName"].value=="")
            {
                alert("对不起，用户名不能为空！");
                document.all["TxtUserName"].focus();
                return false;
            }
            if (document.all["TxtPwd"].value=="")
            {
                alert("对不起，密码不能为空！");
                document.all["TxtPwd"].focus();
                return false;
            }
            if (document.all["TxtCode"].value=="")
            {
                alert("对不起，验证码不能为空！");
                document.all["TxtCode"].focus();
                return false;
            }

            return VerificateMobile(document.all["TxtUserName"].value);
            //FomSub.submit();
        }

        //验证输入字符串是否为手机号码格式类型。
        function VerificateMobile(StrInputValue)
        {
            var StrMobileFormat=/^1[3,5,7,8]{1}[0-9]{1}[0-9]{8}$/;
            if(!StrMobileFormat.test(StrInputValue))
            {
                alert("对不起，手机号码格式不正确，请输入11位数字的正确手机号码！");
                document.all["TxtUserName"].focus();
                return false;
            }
            return true;
        }

        //////只能输入数字
        function OnlyInputNumber(obj, reg, inputstr)
        {
            if(event.srcelement.getattribute("readonly")||event.srcelement.getattribute("disabled"))return false;
            if(event.keycode<46 || event.keycode>57)return false;
            var docsel = document.selection.createrange();
            if (docsel.parentelement().tagname != "input") return false;
            osel = docsel.duplicate()
            osel.text = ""
            var srcrange = obj.createtextrange()
            osel.setendpoint("starttostart", srcrange)
            var str = osel.text + inputstr + srcrange.text.substr(osel.text.length)
            return reg.test(str)
        }

        function ValidateNumber(ev)
        {
            var e = ev.keyCode;
            //允许的有大、小键盘的数字，左右键，backspace, delete, Control + C, Control + V
            if(e != 8  && e != 9 && e != 13  && e != 37 && e != 39 && e != 46&& e != 48 && e != 49 && e != 50 && e != 51 && e != 52 && e != 53 && e != 54 && e != 55 && e != 56 && e != 57 && e != 96 && e != 97 && e != 98 && e != 99 && e != 100 && e != 101 && e != 102 && e != 103 && e != 104 && e != 105)
            {
                if(ev.ctrlKey == false)
                {
                    //不允许的就清空!
                     ev.returnValue = "";
                 }
                else
                {
                    //验证剪贴板里的内容是否为数字!
                     ValidateClip(ev);
                 }
             }
        }

        //验证剪贴板里的内容是否为数字!
        function ValidateClip(ev)
        {
            //查看剪贴板的内容!
            var content = clipboardData.getData("Text");
            if(content != null)
            {
                try
                {
                    var test = parseInt(content);
                    var str = "" + test;
                    if(isNaN(test) == true)
                    {
                        //如果不是数字将内容清空!
                         clipboardData.setData("Text","");
                     }
                    else
                    {
                        if(str != content)
                             clipboardData.setData("Text", str);
                     }
                 }
                catch(e)
                {
                    //清空出现错误的提示!
                     alert("粘贴出现错误!");
                 }
             }
        }
  </script>
<!--
  <script type="text/javascript" src="HomeVideo/suninday_20141020.js"></script>
-->
</body>
</html>