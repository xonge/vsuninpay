<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>登录记录中心|<%=GetMemberSystemTitle()%>|<%=GetWebsiteName()%></title>
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
		    <div class="index_main">
    		
			    <div class="box">
				    <div class="title01">
					    <h2>登录记录</h2>
    				
				    </div>
				    <div class="text_list">
					    <ul class="textlist1">
					        
            <li>
                
                <a href="JavaScript://10892.aspx" target="_blank" title="">
                        </a>
                <span>【2015-05-25 11:16:19】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10880.aspx" target="_blank" title="">
                        </a>
                <span>【2015-05-25 10:18:46】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10867.aspx" target="_blank" title="175.1.95.3">
                        175.1.95.3</a>
                <span>【2015-05-25 09:53:17】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10852.aspx" target="_blank" title="">
                        </a>
                <span>【2015-05-25 09:32:41】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10844.aspx" target="_blank" title="">
                        </a>
                <span>【2015-05-25 09:14:02】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10841.aspx" target="_blank" title="">
                        </a>
                <span>【2015-05-25 09:07:54】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10716.aspx" target="_blank" title="">
                        </a>
                <span>【2015-05-24 14:13:02】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10683.aspx" target="_blank" title="">
                        </a>
                <span>【2015-05-24 11:04:23】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10659.aspx" target="_blank" title="">
                        </a>
                <span>【2015-05-24 09:29:41】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10641.aspx" target="_blank" title="">
                        </a>
                <span>【2015-05-24 01:20:19】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10599.aspx" target="_blank" title="">
                        </a>
                <span>【2015-05-23 20:08:44】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10576.aspx" target="_blank" title="">
                        </a>
                <span>【2015-05-23 18:15:45】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10549.aspx" target="_blank" title="">
                        </a>
                <span>【2015-05-23 16:25:45】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10514.aspx" target="_blank" title="175.1.132.189">
                        175.1.132.189</a>
                <span>【2015-05-23 15:07:52】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10511.aspx" target="_blank" title="">
                        </a>
                <span>【2015-05-23 15:03:49】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10506.aspx" target="_blank" title="175.1.47.94">
                        175.1.47.94</a>
                <span>【2015-05-23 14:47:12】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10464.aspx" target="_blank" title="">
                        </a>
                <span>【2015-05-23 11:36:37】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10425.aspx" target="_blank" title="175.1.47.94">
                        175.1.47.94</a>
                <span>【2015-05-23 10:32:46】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10408.aspx" target="_blank" title="175.1.47.94">
                        175.1.47.94</a>
                <span>【2015-05-23 10:02:25】</span>
            </li>
        
            <li>
                
                <a href="JavaScript://10391.aspx" target="_blank" title="175.1.47.94">
                        175.1.47.94</a>
                <span>【2015-05-23 09:18:58】</span>
            </li>
          

					    </ul>
					    <div class="list_page">
					        <uc5:DataPaingNoTo ID="DtPag" runat="server" />
					    </div>
				    </div>
			    </div>
		    </div>
		    <div class="sub_right">
			    <uc6:UserAccountShow ID="UserAccountShow1" runat="server" />
			    
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
</body>
</html>