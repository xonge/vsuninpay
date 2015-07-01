<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>商户安全信息修改|<%=GetMemberSystemTitle()%>|<%=GetWebsiteName()%></title>
    <base href="http://xiangtan.suninpay.com:81/">
    <link href="WebCss/WebSite.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<form id="FomSub" runat="server">
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

	    <div class="nav01">
  <div class="left">您好，【<?php echo ($member["RealName"]); ?>】</div>
  <div class="left"><img alt="<?php echo ($member["RealName"]); ?>" src="WebImages/vip.jpg" /></div>
  <div class="left" style="font-size:15px;">
  	&nbsp;&nbsp;订单充值费率为【<span class="FontRed" style="font-weight:bold;"><?php echo ($rate["RateStandard"]); ?>%</span>】，短信价格为【<span class="FontRed" style="font-weight:bold;"><?php echo ($message["MessagePrice"]); ?></span>】元一条。
  </div>
  <div class="right">
  	上次登录时间：<?php echo ($loginlog["Intime"]); ?> &nbsp;&nbsp;&nbsp;&nbsp;上次登录IP：<?php echo ($loginlog["LoginIP"]); ?>
  </div>
</div>
			
			<div class="mainbody">
		    <div class="undata_main">
			    <div class="title">修改登录密码</div>
			    <div class="step1_cont" style="margin:10px auto"> 
			        <center><span class="FontGreen" style="font-size:16px; font-weight:bold;">登录密码，是您登录本管理平台使用的密码。</span><br /><br /></center>
				    <ul>
					    <li>                                                                                            
						    <dl>
							    <dt style="width:130px">登录密码(原)：</dt>
							    <dd style="width:500px">
							        <input id="TxtOldLoginPwd" runat="server" name="TxtOldLoginPwd" type="password" class="input1" style="width:180px" />
							        <span class="FontRed">您正在使用的登录密码。</span>
							    </dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt style="width:130px">登录密码(新)：</dt>
							    <dd style="width:500px">
							        <input id="TxtLoginPwd" runat="server" name="TxtLoginPwd" type="password" class="input1" style="width:180px" />
							        <span class="FontRed">您要设置的新的登录密码。</span>
							    </dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt style="width:130px">再次输入密码：</dt>
							    <dd style="width:500px">
							        <input id="TxtOKLoginPwd" runat="server" name="TxtOKLoginPwd" type="password" class="input1" style="width:180px" />
							        <span class="FontRed">再次输入您要设置的新的登录密码。</span>
							    </dd>
						    </dl>
					    </li> 
    					
					    <li>
						    <dl>
							    <dt style="width:130px">&nbsp;</dt>
							    <dd style="width:500px">
							    <asp:Button  ID="BtnAlterLoginPwd" runat="server" Text="确定修改" OnClientClick="return CheckLoginPwdEmpty();" CssClass="org_bt"
				                OnClick="BtnAlterLoginPwd_Click"></asp:Button>
				                <input type="reset" value="重置" name="" class="org_bt" />
							    </dd>
						    </dl>
					    </li> 
				    </ul>
			    </div>
			    <div class="title"  style="border-top:3px solid #CFDBE8">修改支付密码</div>
			    <div class="step1_cont" style="margin:10px auto">
			        <center><span class="FontGreen" style="font-size:16px; font-weight:bold;">支付密码，是您付款或收款时使用的密码。(初始支付密码为123456)。</span><br /><br /></center>
				    <ul>
					    <li>
						    <dl>
							    <dt style="width:130px">支付密码(原)：</dt>
						        <dd style="width:500px">
							        <input id="TxtOldPayPwd" runat="server" name="TxtOldPayPwd" type="password" class="input1" style="width:180px" />
							        <span class="FontRed">您正在使用的支付密码。</span>
							    </dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt style="width:130px">支付密码(新)：</dt>
						        <dd style="width:500px">
							        <input id="TxtPayPwd" runat="server" name="TxtPayPwd" type="password" class="input1" style="width:180px" />
							        <span class="FontRed">您要设置的新的支付密码。</span>
							    </dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt style="width:130px">再次输入密码：</dt>
						        <dd style="width:500px">
							        <input id="TxtOKPayPwd" runat="server" name="TxtOKPayPwd" type="password" class="input1" style="width:180px" />
							        <span class="FontRed">再次输入您要设置的新的支付密码。</span>
							    </dd>
						    </dl>
					    </li> 
    					
					    <li>
						    <dl>
							    <dt style="width:130px">&nbsp;</dt>
							    <dd style="width:500px">
							        <asp:Button  ID="BtnAlterPayPwd" runat="server" Text="确定修改" OnClientClick="return CheckPayPwdEmpty();" CssClass="org_bt"
				                OnClick="BtnAlterPayPwd_Click"></asp:Button>
							        <input type="reset" value="重置" name="" class="org_bt" />
							    </dd>
						    </dl>
					    </li>
					    <!-- 
							        <span style=" color:#3074A3">再次输入您要设置的新的支付密码。</span>
					    --> 
				    </ul>
			    </div>
    			
		    </div>
		    <div class="sub_right">
			    <div class="sub_announce">
				    <div class="title01"><h1>系统公告</h1></div>
				    <div class="content">
					    <ul class="text01">
						    <uc3:DivNewsList ID="DivNoticeList" runat="server" />
					    </ul>
				    </div>
			    </div>
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
        function CheckLoginPwdEmpty()
        {
            if (FomSub.TxtOldLoginPwd.value=="")
            {
                alert("对不起，原来的登录密码不能为空！");            
                FomSub.TxtOldLoginPwd.focus();
                return false;
            }
            if (FomSub.TxtLoginPwd.value=="")
            {
                alert("对不起，新的登录密码不能为空！");            
                FomSub.TxtLoginPwd.focus();
                return false;
            }
            if (FomSub.TxtOKLoginPwd.value=="")
            {
                alert("对不起，新的登录确认密码不能为空！");            
                FomSub.TxtOKLoginPwd.focus();
                return false;
            }
            if (FomSub.TxtOKLoginPwd.value!=FomSub.TxtLoginPwd.value)
            {
                alert("对不起，新登录密码与新登录确认密码不匹配，请重新输入！");            
                FomSub.TxtOKLoginPwd.focus();
                return false;
            }
            //FomSub.submit();
        }
        
        function CheckPayPwdEmpty()
        {
            if (FomSub.TxtOldPayPwd.value=="")
            {
                alert("对不起，原来的支付密码不能为空！");            
                FomSub.TxtOldPayPwd.focus();
                return false;
            }
            if (FomSub.TxtPayPwd.value=="")
            {
                alert("对不起，新的支付密码不能为空！");            
                FomSub.TxtPayPwd.focus();
                return false;
            }
            if (FomSub.TxtOKPayPwd.value=="")
            {
                alert("对不起，新的支付确认密码不能为空！");            
                FomSub.TxtOKPayPwd.focus();
                return false;
            }
            if (FomSub.TxtOKPayPwd.value!=FomSub.TxtPayPwd.value)
            {
                alert("对不起，新支付密码与新支付确认密码不匹配，请重新输入！");            
                FomSub.TxtOKPayPwd.focus();
                return false;
            }
            //FomSub.submit();
        }
	</script>
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
</body>
</html>