<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>通道网银费率查看|<%=GetMemberSystemTitle()%>|<%=GetWebsiteName()%></title>
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


	    <div class="mainbody" >
		    <div class="index_main">
			    <div class="box" style="margin-bottom:10px">
				    <div class="title01">
					    <h2>充值手续费</h2>                                                      
    				
				    </div>
				    <div class="chy_2_st">
					    <div class="div_01">
						    <h1 style="float:left; width:300px">宝付：<b class="org"><?php echo ($rate); ?>%</b></h1>                                                                  
						    <h1 style="float:left"><b class="blue">网银：</b><b class="org"><?php echo ($rate); ?>%</b></h1>
					    </div>
				    </div>
			    </div>		
		    </div>
		    <div class="sub_right">
    			
			    <div class="sub_announce">
				    <div class="title01">
					    <h1>系统公告</h1>
				    </div>
				    <div class="content">
					    <ul class="text01">
						    <uc3:DivNewsList ID="DivNoticeList" runat="server" />
					    </ul>
				    </div>
			    </div>
		    </div>
	    </div>
		
	    <uc2:WebFoot ID="WebFoot1" runat="server" />
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
</body>
</html>