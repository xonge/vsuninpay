<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>注册下级商户|
    <%=GetMemberSystemTitle()%>
    |
    <%=GetWebsiteName()%></title>
  <base href="http://xiangtan.suninpay.com:81/">
  <link href="WebCss/WebSite.css" rel="stylesheet" type="text/css" />
  <link href="Images/zwicon.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
  <form action="" method="post">
    <div>
      <style type="text/css">
.heard01 .left{ background:url(../<%= StrStationLogoFile%>); width:230px; height:90px;}
.heard01 .right{ margin-top:20px; font-family:""}
</style>
<div class="heard01">
  <div class="left"></div>
  <div  class="right">
    欢迎你：<?php echo ($member["UserName"]); ?> | <a href="http://v.suninpay.com/<?php echo U('Public/logout');?>">退出</a> | <a href="javascript:;">帮助中心</a>
  </div>
</div>
<div class="meun">
  <div class="left"></div>
  <div  class="jiju">
    <div class="nTab" >
      <div class="TabTitle">
        <ul id="mid2">
          <li onmousemove="nTabs(this,0);" class="">
            <span>
              <a href="MerchantUserCenter.aspx?MainID=0">首&nbsp;&nbsp;页</a>
            </span>
          </li>
          <li onmousemove="nTabs(this,1);" class="">
            <span>
              <a href="MerchantAccountShow.aspx?MainID=1">账户管理</a>
            </span>
          </li>
          <li onmousemove="nTabs(this,2);" class="">
            <span>
              <a href="OrdersRecharge.aspx?MainID=2">刷卡购物</a>
            </span>
          </li>
          <li onmousemove="" class="">
            <span>
              <a href="">收入提现</a>
            </span>
          </li>
          <li onmousemove="" class="">
            <span>
              <a href="">交易管理</a>
            </span>
          </li>
          <li onmousemove="nTabs(this,5);" class="">
            <span>
              <a href="">推广管理</a>
            </span>
          </li>
        <li onmousemove="nTabs(this,6);" class="">
          <span>
            <a href="">商务应用</a>
          </span>
        </li>
      </ul>
    </div>
    <div class="content">
      <div id="mid2_Content0" style="display:">
        <ul style="margin-left:10px;">
          <li>
            <a href="MerchantBasicMessage.aspx?MainID=0">基本信息</a>
            |
            <a href="IdentityValidate.aspx?MainID=0">实名认证</a>
            |
            <a href="MerchantNewsList.aspx?MainID=0">文章管理</a>
            |
            <a href="MerchantNameCardsSet.aspx?MainID=0">微名片管理</a>
            |
            <a href="MerchantGuideMenuSet.aspx?MainID=0">微店管理</a>
            |
            <a href="NoticeCenterList.aspx?MainID=0">系统公告</a>
          </li>
        </ul>
      </div>
      <div id="mid2_Content1" class="none" style="display:;">
        <ul style="margin-left:130px;">
          <li>
            <a href="MerchantAccountShow.aspx?MainID=1">我的账户</a>
            |
            <a href="MerchantSafeMessage.aspx?MainID=1">密码管理</a>
            |
            <a href="WithdrawalBankSet.aspx?MainID=1">提现设置</a>
            |
            <a href="LoginRecordView.aspx?MainID=1">登录记录</a>
          </li>
        </ul>
    </div>
    <div id="mid2_Content2" class="none" style="display:;">
      <ul style="margin-left:200px;">
        <li>
          <a href="BankRateView.aspx?MainID=2">充值费率查看</a>
          |
          <a href="OrdersRecharge.aspx?MainID=2">买家充值</a>
          |
          <a href="BankRechargeList.aspx?MainID=2">网银收款记录</a>
        </li>
      </ul>
    </div>
    <div id="mid2_Content3" class="none" style="display:;">
      <ul style="margin-left:400px;">
        <li>
          <a href="FeeMoneyView.aspx?MainID=3">提现手续费</a>
          |
          <a href="MerchantWithdrawal.aspx?MainID=3">提现</a>
          |
          <a href="MerchantEntrustWithdrawal.aspx?MainID=3">委托提现</a>
          |
          <a href="RequestPassZero.aspx?MainID=3">申请开通T+0提现功能</a>
      </li>
    </ul>
  </div>
  <div id="mid2_Content4" class="none" style="display:;">
    <ul style="margin-left:440px;">
      <li>
        <a href="BankTransactionList.aspx?MainID=4">网银交易记录</a>
        |
        <a href="TransactionStatisticsView.aspx?MainID=4">交易记录统计</a>
        |
        <a href="MerchantWithdrawalList.aspx?MainID=4">提现记录</a>
        |
        <a href="MerchantWithdrawalList.aspx?MainID=4&ACID=2">委托提现记录</a>
        |
        <a href="FundsChangeList.aspx?MainID=4">资金变动记录</a>
      </li>
    </ul>
  </div>
  <div id="mid2_Content5" class="none" style="display:;">
    <ul style="margin-left:530px;">
      <li>
        <a href="DownGradeMerchantList.aspx?MainID=5">我的推广商户</a>
        |
        <a href="Register.aspx?MainID=5" target="_blank">新增商户</a>
        |
        <a href="TransactionDetailsList.aspx?MainID=5" >我的利润统计</a>
        |
        <a href="AddUser.aspx?MainID=5" target="_blank">晒我的业绩</a>
        <a href="MerchantSpreadRegister.aspx?MainID=5&MUID=" target="_blank" style="display:none;">我的推广页面</a>
      </li>
    </ul>
  </div>
  <div id="mid2_Content6" class="none" style="display:;">
    <ul style="margin-left:750px;">
      <li>
      <a href="MerchantBusinessApplication.aspx?MainID=6">商务短信</a>
      |
      <a href="PaymentAccountMoney.aspx?MainID=6">转账付款</a>
      |
      <a href="OnlineRechargeWebsite.aspx?MainID=6">官方网站</a>
    </li>
  </ul>
</div>
</div>
</div>
</div>
<div class="right"></div>
</div>

<link rel="shortcut icon" href="Images/zwicon.ico" type="image/x-icon" />

      <div class="rember_main">
        <div class="div01"></div>
        <div class="step1_cont">
          <ul>
            <li>
              <dl>
                <dt>上级账号名：</dt>
                <dd>
                  <b class="org" style="line-height:33px; font-size:16px"><?php echo (reset($l4phone["0"])); ?>****<?php echo (reset($r4phone["0"])); ?></b>
                  <input type="hidden" name="super" value="<?php echo ($member["MerchantID"]); ?>" />
                </dd>
              </dl>
            </li>
            <li>
              <dl>
                <dt>用&nbsp;户&nbsp;名：</dt>
                <dd>
                  <input type="text" name="TxtUserName" id="TxtUserName" class="input1" onkeydown="ValidateNumber(event);" onpaste="ValidateClip(event);" MaxLength="11" />
                  <label id="LabHaveShow"> <font color="#ff0000">*</font>
                    用户名只能用手机号码
                  </label>
                </dd>
              </dl>
            </li>
            <li>
              <dl>
                <dt>登录密码：</dt>
                <dd>
                  <input type="password" name="TxtPwd" id="TxtPwd" class="input1" MaxLength="256" />
                  <span>您要设置的登录密码</span>
                </dd>
              </dl>
            </li>
            <li>
              <dl>
                <dt>确认密码：</dt>
                <dd>
                  <input type="password" name="TxtOKPwd" id="TxtOKPwd" class="input1" MaxLength="256" />
                  <span>再次输入您要设置的登录密码</span>
                </dd>
              </dl>
            </li>
            <li>
              <dl>
                <dt>验&nbsp;证&nbsp;码：</dt>
                <dd>
                  <input type="text" ID="TxtValidateCode" class="input1" placeholder="填写短信验证码" onkeydown="ValidateNumber(event);" onfocus="this.select(); " onpaste="ValidateClip(event);" maxlength="4" style="width:80px" />
                  <span>
                    <input type="submit" name="BtnSendValidateCode" value="发送验证码" onclick="return CheckMobileEmpty();" id="BtnSendValidateCode" class="org_bt"></span>
                </dd>
              </dl>
            </li>
            <li>
              <dl>
                <dt>&nbsp;</dt>
                <dd>
                  <input type="submit" name="BtnRegister" value="下一步" onclick="return CheckEmpty();" id="BtnRegister" class="org_bt"></dd>
              </dl>
            </li>
          </ul>
        </div>
      </div>
      
<div class="footer">
	<a href="NoticeContent26.aspx" target="_blank">关于我们</a>|<a href="NoticeContent28.aspx" target="_blank">帮助中心</a>
	<!-- 
	|<a href="JavaScript://">问题反馈</a>
	-->
	|<a href="NoticeContent27.aspx" target="_blank">联系我们</a>|<a href="NoticeContent29.aspx" target="_blank">服务协议</a> 
	<!-- 
	|<a href="JavaScript://">网站导航</a>
	-->
</div>

<script type="text/javascript" language="JavaScript" src="WebJs/SetHomePage.Js"></script>
    </div>
  </form>
  <script type="text/javascript">
        function nTabs(thisObj,Num){
        if(thisObj.className == "active")return;
        var tabObj = thisObj.parentNode.id;
        var tabList = document.getElementById(tabObj).getElementsByTagName("li");
        for(i=0; i <tabList.length; i++){
        if (i == Num){
           thisObj.className = "active";
              document.getElementById(tabObj+"_Content"+i).style.display = "block";
        }else{
           tabList[i].className = "normal";
           document.getElementById(tabObj+"_Content"+i).style.display = "none";
        }
        }
        }

    </script>
  <script type="text/javascript">
        function CheckMobileEmpty()
        {
            if (document.all["TxtUserName"].value=="")
            {
                alert("对不起，手机号码用户名不能为空！");
                //$("#SpnUserName").html("对不起，手机号码用户名不能为空！");
                document.all["TxtUserName"].focus();
                return false;
            }

            return VerificateMobile(document.all["TxtUserName"].value);

            //FomSub.submit();
        }

        function CheckEmpty()
        {
            if (FomSub.TxtUserName.value=="")
            {
                alert("对不起，用户名不能为空！");
                FomSub.TxtUserName.focus();
                return false;
            }
            if (FomSub.TxtUserName.value=='<%=StrMerchantUserName%>')
            {
                alert("对不起，注册的下级商户用户名不能够和当前商户用户名相同，请重新输入！");
                FomSub.TxtUserName.focus();
                return false;
            }

            if (!VerificateMobile(document.all["TxtUserName"].value))
            {
                return false;
            }

            if (FomSub.TxtPwd.value=="")
            {
                alert("对不起，密码不能为空！");
                FomSub.TxtPwd.focus();
                return false;
            }
            if (FomSub.TxtOKPwd.value=="")
            {
                alert("对不起，确认密码不能为空！");
                FomSub.TxtOKPwd.focus();
                return false;
            }
            if (FomSub.TxtValidateCode.value=="")
            {
                alert("对不起，验证码不能为空！");
                FomSub.TxtValidateCode.focus();
                return false;
            }
            if (FomSub.TxtPwd.value!=FomSub.TxtOKPwd.value)
            {
                alert("对不起，密码与确认密码不匹配，请重新输入！");
                FomSub.TxtOKPwd.focus();
                return false;
            }

            // var StrValidateCode="<%= StrValidateVBumCode%>";
            // if (document.all["TxtValidateCode"].value!=StrValidateCode)
            // {
            //     alert("对不起，手机短信验证码输入不正确，请重新输入！");
            //     //$("#SpnUserName").html("对不起，手机号码用户名不能为空！");
            //     document.all["TxtValidateCode"].focus();
            //     return false;
            // }
            //return VerificateMobile(FomSub.TxtUserName.value);
            //alert(document.getElementById("DpdLstArea").value);
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

        //验证输入字符串是否为手机号码格式类型。
        function VerificateMobile(StrInputValue)
        {
            var StrMobileFormat=/^1[3,5,7,8]{1}[0-9]{1}[0-9]{8}$/;
            if(!StrMobileFormat.test(StrInputValue))
            {
                alert("对不起，用户名格式不正确，请输入11位数字的正确手机号码作为用户名！");
                FomSub.TxtUserName.focus();
                return false;
            }
            return true;
        }

        function ClickChangeImage()
        {
            document.getElementById("ImgCode").src = "ValidateCode.aspx?"+Math.random();;
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
</body>
</html>