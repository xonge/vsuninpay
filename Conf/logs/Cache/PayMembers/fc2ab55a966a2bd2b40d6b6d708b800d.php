<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head id="Head1" runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><%=GetDataNameValue("MerchantID", "MerchantName", "MerchantMessageTab", StrMerchantUserID)%>网络收银台|<%=GetMemberSystemTitle()%>|<%=GetWebsiteName()%></title>
    <base href="http://xiangtan.suninpay.com:81/">

    <meta name="description" content="中国最流行的第三方电子支付服务提供商" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    
    <link rel="shortcut icon" href="WebImages/Payment.ico" type="image/x-icon" />
	<link rel="stylesheet" href="WebCss/cashierx.css" />
	<link charset="utf-8" rel="stylesheet" href="WebCss/cashier.css" media="all" />
	
    <link href="WebCss/WebSite.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="WebCss/common.css" media="all" />
    
    <style type="text/css">
        input[type="radio"], input[type="radio"] + label img {
            vertical-align: middle;
        }
        body{background:#eff0f1}
        body{background:#ffffff}  
        .meun .jiju .TabTitle ul li {width:136px;}
    </style>
	
    <script  type="text/javascript">                         
        window._to = { start: new Date() };
    </script >

    <style type="text/css" id="alipay-object-shim-1-0-0-object-shim-css">
	    body .object-shim-class{display:inline-block;*display:inline;*zoom:1;height:22px;width:198px;border:1px solid #999}
	    body .object-shim-class object,body .object-shim-class embed{display:none}
    	
	    /*
	    .RdbtRechargeBankList {margin-left:25px;padding-top:10px;}
	    .RdbtRechargeBankList input{margin-left:5px;padding-top:10px;}
	    .RdbtRechargeBankList label{margin-left:5px;padding-top:10px;}
	    */                                                             
	    
	    .RdbtRechargeBankList label{margin-left:5px;padding-top:10px;}
	    ul.RdbtRechargeBankList  label img{ width:200px; height:56px; border:1px solid #CCCCCC}
	    ul sapn label img{ width:200px; height:56px; border:1px solid #CCCCCC}
	    
    </style>
    <style type="text/css">
	    #D_otpSection .ui-tip {
	     margin-left: 0 !important;
	    }
    	
	    .g_nav {
	      height: 26px;
	      line-height: 26px;
	      background: #81868b;
	    }
	    .g_nav-fixwidth {
	      width: 950px;
	      margin: 0 auto;
	      overflow: hidden;
	      zoom: 1;
	    }
	    .g_nav ul {
	      float: right;
	    }
	    .g_nav li {
	      float: left;
	      color: #fff;
	    }
	    .g_nav li a {
	      color: #fff;
	      float: left;
	    }
    	
	    #header {
	      height: 60px;
	      background-color: #fff;
	      border-bottom: 1px solid #d9d9d9;
	      margin-top: 0px;
	    }
	    /*
	    #header .logo {
	      height: 36px;
	      width: 200px;
	      margin-top: 10px;
	      text-indent: -9999px;
	      background: url(WebImages/MeCashier.png) no-repeat 0 100% !important;
	    }
	    */
	    #header .logo {
	      height: 36px;
	      width: 250px;
	      margin-top: 10px;
	      text-indent: -9999px;
	      background: url(WebImages/syb-logo.png) no-repeat 0 100% !important;
	    }
	    #header .deposit-logo {
	      height: 36px;
	      width: 149px;
	      background: url(WebImages/PaymentRecharge.png) no-repeat 0 100% !important;
	    }
	    .header-container {
	      width: 950px;
	      margin: 0 auto;
	    }

		ul.chl-tab-items .active {float:left;top:0;height:33px;overflow:visible;margin-right:4px;border:3px solid #BBCBEF;border-bottom:2px #fff solid
		}
		
		ul.chl-tab-items .normal { float:left;top:0;height:33px;overflow:visible;margin-right:4px;border:2px solid #dfe7f6;border-bottom:0}
		
		ul.chl-tab-items .active a {display:block;width:100px;height:31px;padding-top:2px;font-size:14px;color:#08c;text-align:center;text-decoration:none;line-height:31px;border-radius:0;border:0;background:#fff; color:#333333
		}
		
		ul.chl-tab-items .normal a {
			background: none repeat scroll 0 0 #FFFFFF;
			border: 0 none;
			border-radius: 0;
			color: #0088CC;
			display: block;
			font-size: 14px;
			height: 31px;
			line-height: 31px;
			padding-top: 2px;
			text-align: center;
			text-decoration: none;
			width: 100px;
		}
		
		ul.chl-PaymentTab-items .active {float:left;top:0;height:33px;overflow:visible;margin-right:4px;border:3px solid #BBCBEF;border-bottom:2px #fff solid
		}
		
		ul.chl-PaymentTab-items .normal { float:left;top:0;height:33px;overflow:visible;margin-right:4px;border:2px solid #dfe7f6;border-bottom:0}
		
		ul.chl-PaymentTab-items .active a {display:block;width:100px;height:31px;padding-top:2px;font-size:14px;color:#08c;text-align:center;text-decoration:none;line-height:31px;border-radius:0;border:0;background:#fff; color:#333333
		}
		
		ul.chl-PaymentTab-items .normal a {
			background: none repeat scroll 0 0 #FFFFFF;
			border: 0 none;
			border-radius: 0;
			color: #0088CC;
			display: block;
			font-size: 14px;
			height: 31px;
			line-height: 31px;
			padding-top: 2px;
			text-align: center;
			text-decoration: none;
			width: 100px;
		}
	</style>
</head>
<body>
    <form id="FomSub" runat="server" target="_blank">
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

        
	    <div class="mainbody">
    		

	    </div>

		<div id="container">
			<div id="content">  

		
				<!-- 账户渠道 开始 -->
				<div id="J_Account" class="account-chls" data-widget-cid="widget-1">	
		            <div class="BankPay_Main">
			            <div class="title" style="width:915px">
				            订单充值收款&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				            <span style="font-size:16px;">
				                账户可用现金余额：【<font style="color:#ff0000;"><?php echo ($member["AccountUsedValue"]); ?></font>】元。
				            </span>
			            </div>
			            <div class="bank_content1">
				            <span>1.</span>充值金额 
			            </div>
            		
			            <div class="step1_cont">
				            <ul>
					            <li>
						            <dl>
							            <dt>充值金额：</dt>
							            <dd>
							                <input id="TxtRechargeMoney" runat="server" name="TxtRechargeMoney" type="text" class="input1" maxlength="7" onkeydown="ValidateNumber(event);" onpaste="ValidateClip(event);" />
							                <span>(注意：请不要输入整百、整千，如：300)</span>
							            </dd>
						            </dl>
					                <dl>
							            <dt>充值费率：</dt>
							            <dd>
							                <span id="SpnPayRate" style="font-size:16px; color:#ff0000; font-weight:bold;"><?php echo ($rate); ?>%。</span>
							            </dd>
						            </dl>
					            </li>
            					
				            </ul>
			            </div>	 
		            </div>
		            
					<!-- 账户余额 开始 -->
					<div id="J-composite-balance">
						<div id="J_BalanceBank" class="account-chl">
							<input id="J_BalanceCheck" name="check" seed="account-checkbox-mix" style="display:none;" type="checkbox">&nbsp;
							<label for="J_BalanceCheck" style="font-weight:bold;">
							
								账户可支付余额&nbsp; <em><%= StrUseAccountValue%></em> 元&nbsp;&nbsp;&nbsp;&nbsp;
								<span id="J_BalancePayAmount" class="account-amount fn-hide">
								支付 <em><%= StrUseAccountValue%></em> 元
								</span>
							</label>
						</div>
				
						<div id="J_BalanceCash" class="account-chl fn-hide">
							<p class="ui-tiptext ui-tiptext-stop">
								<i class="ui-tiptext-icon iconfont" title="阻止">?</i>
								选择<em>“ 储蓄卡 ”</em>付款不能同时使用“商用宝账户余额”付款。
							</p>
						</div>
					</div>
					<!-- 账户余额 结束 -->
				</div>
				<!-- 账户渠道 结束 -->
	
				<!-- 其他渠道 tab 开始 -->
	            <div class="chl-tab ui-switchable" id="J_ChlTab" data-widget-cid="widget-4">
		            <h3 class="chl-tab-title">付款方式：</h3>

		            <!-- 其他渠道 tab 标签 开始 -->
		            <ul id="mid3" class="chl-tab-items ui-switchable-nav">
			            <li onclick="PaymentChangeTab(this,0);" data-type="PDEbank" class=" active">
				            <a href="javascript://" seed="link-tab-bank">A通道</a>
			            </li>

			            <li onclick="PaymentChangeTab(this,1);" data-type="PCEbank" class=" normal">
				            <a href="javascript://" seed="link-tab-creditCard">B通道</a>
			            </li>
			            <!--
			            <li data-type="PCash" class="chl-tab-item ui-switchable-trigger">
				            <a href="javascript://" seed="link-tab-cash">现金或刷卡</a>
			            </li>
			            -->
		                <li style="display:none;">
		                    <asp:RadioButtonList ID="RdbtRechargePassageList" runat="server" RepeatDirection="Horizontal" RepeatColumns="4" RepeatLayout="Flow">
			                    <asp:ListItem Value="0" Text="否" Selected="True"></asp:ListItem>
			                    <asp:ListItem Value="1" Text="是"></asp:ListItem>
		                    </asp:RadioButtonList> 
    		            </li>
		            </ul>
		            <!-- 其他渠道 tab 标签 结束 -->
            		
		            <div class="chl-panels ui-switchable-content">
			            <!-- 储蓄卡 开始 -->
			            <div id="mid3_Content0" class="chl-panel  ui-switchable-panel fn-hide" data-widget-cid="widget-7" style="display: block; ">
			                <div id="J_AjaxDebitExpress" data-newcard="false">
				                <div id="J_ChooseBankList" class="chl-list chl-list-bank-card chl-body-strong">
                				
				                <h5 class="icon-box icon-box-kIcon">
					                <!-- CMS:网络收银台cms/公用CMS/储蓄卡快捷logo右侧文案开始:common/debitExpressCardTopMsg.vm -->  
					                <span class="icon KuaiIconY">快捷支付（含卡通）</span>
					                <span class="icon-box-kIcon-explain">
						                <span class="kuaiIconWords"></span>
						                <div class="ui-poptip ui-poptip-blue ui-poptip-kuai">
							                <div class="ui-poptip-container">        
								                <div class="ui-poptip-arrow-left">
									                <em></em>
									                <span></span>
								                </div>
								                <div class="ui-poptip-content">
									                <i class="icon-fluency"></i>
									                <span>付款过程安全流畅</span>
								                </div>
							                </div>
						                </div>
					                </span>
					                <!-- CMS:网络收银台cms/公用CMS/储蓄卡快捷logo右侧文案结束:common/debitExpressCardTopMsg.vm -->                        	
				                </h5>
<ul class="BankList_Img">
	                                <span id="RdbtRechargeBankList"><input id="RdbtRechargeBankList_0" type="radio" name="RdbtRechargeBankList" value="4001"><label for="RdbtRechargeBankList_0"><img alt="招商银行(信用卡)" src="NewsUpLoad/07招商银行XYK.jpg"></label><input id="RdbtRechargeBankList_1" type="radio" name="RdbtRechargeBankList" value="4002"><label for="RdbtRechargeBankList_1"><img alt="中国工商银行(信用卡)" src="NewsUpLoad/05中国工商银行XYK.jpg"></label><input id="RdbtRechargeBankList_2" type="radio" name="RdbtRechargeBankList" value="4003"><label for="RdbtRechargeBankList_2"><img alt="中国建设银行(信用卡)" src="NewsUpLoad/03中国建设银行XYK.jpg"></label><input id="RdbtRechargeBankList_3" type="radio" name="RdbtRechargeBankList" value="4004"><label for="RdbtRechargeBankList_3"><img alt="上海浦东发展银行(信用卡)" src="NewsUpLoad/14上海浦东发展银行XYK.jpg"></label><br><input id="RdbtRechargeBankList_4" type="radio" name="RdbtRechargeBankList" value="4005"><label for="RdbtRechargeBankList_4"><img alt="中国农业银行(信用卡)" src="NewsUpLoad/04中国农业银行XYK.jpg"></label><input id="RdbtRechargeBankList_5" type="radio" name="RdbtRechargeBankList" value="4006"><label for="RdbtRechargeBankList_5"><img alt="中国民生银行(信用卡)" src="NewsUpLoad/15中国民生银行XYK.jpg"></label><input id="RdbtRechargeBankList_6" type="radio" name="RdbtRechargeBankList" value="4009"><label for="RdbtRechargeBankList_6"><img alt="兴业银行(信用卡)" src="NewsUpLoad/10兴业银行XYK.jpg"></label><input id="RdbtRechargeBankList_7" type="radio" name="RdbtRechargeBankList" value="4020"><label for="RdbtRechargeBankList_7"><img alt="交通银行(信用卡)" src="NewsUpLoad/08交通银行XYK.jpg"></label><br><input id="RdbtRechargeBankList_8" type="radio" name="RdbtRechargeBankList" value="4022"><label for="RdbtRechargeBankList_8"><img alt="中国光大银行(信用卡)" src="NewsUpLoad/09中国光大银行XYK.jpg"></label><input id="RdbtRechargeBankList_9" type="radio" name="RdbtRechargeBankList" value="4026"><label for="RdbtRechargeBankList_9"><img alt="中国银行(信用卡)" src="NewsUpLoad/02中国银行XYK.jpg"></label><input id="RdbtRechargeBankList_10" type="radio" name="RdbtRechargeBankList" value="4032"><label for="RdbtRechargeBankList_10"><img alt="北京银行(信用卡)" src="NewsUpLoad/12北京银行XYK.jpg"></label><input id="RdbtRechargeBankList_11" type="radio" name="RdbtRechargeBankList" value="4035"><label for="RdbtRechargeBankList_11"><img alt="平安银行(信用卡)" src="NewsUpLoad/平安银行LogoXYK.jpg"></label><br><input id="RdbtRechargeBankList_12" type="radio" name="RdbtRechargeBankList" value="4036"><label for="RdbtRechargeBankList_12"><img alt="广发银行(信用卡)" src="NewsUpLoad/广发银行LogoXYK.jpg"></label><input id="RdbtRechargeBankList_13" type="radio" name="RdbtRechargeBankList" value="4038"><label for="RdbtRechargeBankList_13"><img alt="中国邮政储蓄银行(信用卡)" src="NewsUpLoad/中国邮政储蓄银行LogoXYK.jpg"></label><input id="RdbtRechargeBankList_14" type="radio" name="RdbtRechargeBankList" value="4039"><label for="RdbtRechargeBankList_14"><img alt="中信银行(信用卡)" src="NewsUpLoad/中信银行LOGO图片XYK.jpg"></label><input id="RdbtRechargeBankList_15" type="radio" name="RdbtRechargeBankList" value="4059"><label for="RdbtRechargeBankList_15"><img alt="上海银行(信用卡)" src="NewsUpLoad/上海银行LogoXYK.jpg"></label><br></span>
	                            </ul>
                                <ul class="BankList_Img">
	                                <asp:RadioButtonList ID="RdbtRechargeBankList" runat="server" RepeatDirection="Horizontal" RepeatColumns="4" RepeatLayout="Flow">
		                                <asp:ListItem Value="0" Text="否" Selected="True"></asp:ListItem>
		                                <asp:ListItem Value="1" Text="是"></asp:ListItem>
	                                </asp:RadioButtonList>
	                            </ul>
			                </div>
		                </div>
		                    <div id="J_AjaxDebitEbank" data-newcard="false"></div>
		                    <div class="chl-foot J_ChlFoot">
			                    <asp:Button  ID="BtnRecharge" runat="server" Text="确定充值" OnClientClick="return CheckEmpty();" 
							    CssClass="org_bt" OnClick="BtnRecharge_Click"></asp:Button>  
		                    </div>
	                    </div>

	                    <div id="mid3_Content1" class="chl-panel  ui-switchable-panel fn-hide" data-widget-cid="widget-7" style="display: none; ">
		                    <div id="Div1" data-newcard="false">
			                    <div id="Div2" class="chl-list chl-list-bank-card chl-body-strong">
				                    <h5 class="icon-box icon-box-kIcon">
					                    <!-- CMS:网络收银台cms/公用CMS/储蓄卡快捷logo右侧文案开始:common/debitExpressCardTopMsg.vm -->    	
					                    <span class="icon KuaiIconY">快捷支付（含卡通）</span>
					                    <span class="icon-box-kIcon-explain">
						                    <span class="kuaiIconWords"></span>
						                    <div class="ui-poptip ui-poptip-blue ui-poptip-kuai">
							                    <div class="ui-poptip-container">        
								                    <div class="ui-poptip-arrow-left">
									                    <em></em>
									                    <span></span>
								                    </div>
								                    <div class="ui-poptip-content">
									                    <i class="icon-fluency"></i>
									                    <span>付款过程安全流畅</span>
								                    </div>
							                    </div>
						                    </div>
					                    </span>
					                    <!-- CMS:网络收银台cms/公用CMS/储蓄卡快捷logo右侧文案结束:common/debitExpressCardTopMsg.vm -->                        	
				                    </h5>
				                    <ul class="BankList_Img">
				                        <!-- 
					                    <span id="Span1"><input id="Radio1" name="RdbtRechargeBankList" value="1" type="radio"><label for="RdbtRechargeBankList_0">
					                    <img alt="神州行" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label>
					                    <input id="Radio2" name="RdbtRechargeBankList" value="2" type="radio"><label for="RdbtRechargeBankList_1">
					                    <img alt="联通卡" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label>
					                    <input id="Radio3" name="RdbtRechargeBankList" value="3" type="radio"><label for="RdbtRechargeBankList_2">
					                    <img alt="电信卡" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label>
					                    <input id="Radio4" name="RdbtRechargeBankList" value="11" type="radio"><label for="RdbtRechargeBankList_3">
					                    <img alt="盛大卡" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label><br />
					                    <input id="Radio5" name="RdbtRechargeBankList" value="12" type="radio"><label for="RdbtRechargeBankList_4">
					                    <img alt="完美卡" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label>
					                    <input id="Radio6" name="RdbtRechargeBankList" value="14" type="radio"><label for="RdbtRechargeBankList_5">
					                    <img alt="征途卡" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label>
					                    <input id="Radio7" name="RdbtRechargeBankList" value="15" type="radio"><label for="RdbtRechargeBankList_6">
					                    <img alt="骏网一卡通" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label>
					                    <input checked="checked" id="Radio8" name="RdbtRechargeBankList" value="16" type="radio">
					                    <label for="RdbtRechargeBankList_7"><img alt="网易卡" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label>
					                    -->
                                        <span id="RdbtBankOnlineRechargeList"><input id="RdbtBankOnlineRechargeList_0" type="radio" name="RdbtBankOnlineRechargeList" value="1080"><label for="RdbtBankOnlineRechargeList_0"><img alt="银联在线" src="NewsUpLoad/银联在线Logo.jpg"></label></span>
	                                </ul>

                                    <ul class="BankList_Img">
				                        <!-- 
					                    <span id="Span1"><input id="Radio1" name="RdbtRechargeBankList" value="1" type="radio"><label for="RdbtRechargeBankList_0">
					                    <img alt="神州行" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label>
					                    <input id="Radio2" name="RdbtRechargeBankList" value="2" type="radio"><label for="RdbtRechargeBankList_1">
					                    <img alt="联通卡" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label>
					                    <input id="Radio3" name="RdbtRechargeBankList" value="3" type="radio"><label for="RdbtRechargeBankList_2">
					                    <img alt="电信卡" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label>
					                    <input id="Radio4" name="RdbtRechargeBankList" value="11" type="radio"><label for="RdbtRechargeBankList_3">
					                    <img alt="盛大卡" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label><br />
					                    <input id="Radio5" name="RdbtRechargeBankList" value="12" type="radio"><label for="RdbtRechargeBankList_4">
					                    <img alt="完美卡" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label>
					                    <input id="Radio6" name="RdbtRechargeBankList" value="14" type="radio"><label for="RdbtRechargeBankList_5">
					                    <img alt="征途卡" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label>
					                    <input id="Radio7" name="RdbtRechargeBankList" value="15" type="radio"><label for="RdbtRechargeBankList_6">
					                    <img alt="骏网一卡通" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label>
					                    <input checked="checked" id="Radio8" name="RdbtRechargeBankList" value="16" type="radio">
					                    <label for="RdbtRechargeBankList_7"><img alt="网易卡" src="长沙步步高网络收银台_商户会员中心_在线充值支付收银管理系统_files/NoPicture.gif"></label>
					                    -->
                                        <asp:RadioButtonList ID="RdbtBankOnlineRechargeList" runat="server" RepeatDirection="Horizontal" RepeatColumns="4" RepeatLayout="Flow">
                                            
                                        </asp:RadioButtonList>
	                                </ul>
			                    </div>
		                    </div>
		                    <div id="J_AjaxDebitEbankOnline" data-newcard="false"></div>
		                    <div class="chl-foot J_ChlFoot">
			                    <asp:Button  ID="BtnBankOnlineRecharge" runat="server" Text="确定充值" OnClientClick="return CheckBankOnlineEmpty();" 
							    CssClass="org_bt" OnClick="BtnBankOnlineRecharge_Click"></asp:Button>  
		                    </div>
	                    </div>

	                    <!-- 储蓄卡 结束 -->
	                    <div class="chl-panel fn-hide ui-switchable-panel" data-widget-cid="widget-6" style="display: none; ">
		                    <div id="J_AjaxCreditExpress" data-newcard="false" data-creditcard="false">
			                    <div class="chl-list chl-list-bank-card chl-body-strong">
				                    <h5 class="icon-box icon-box-kIcon">
					                    <!-- CMS:网络收银台cms/公用CMS/信用卡快捷logo右侧文案开始:common/creditExpressCardTopMsg.vm -->    	
					                    <span class="icon KuaiIconY">快捷支付（含卡通）</span>
					                    <span class="icon-box-kIcon-explain">
						                    <span class="kuaiIconWords"></span>
						                    <div class="ui-poptip ui-poptip-blue ui-poptip-kuai">
							                    <div class="ui-poptip-container">        
								                    <div class="ui-poptip-arrow-left">
									                    <em></em>
									                    <span></span>
								                    </div>
								                    <div class="ui-poptip-content">
									                    <i class="icon-fluency"></i>
									                    <span>付款过程安全流畅</span>
								                    </div>
							                    </div>
						                    </div>
					                    </span>                       	
				                    </h5>
			                    </div>
		                    </div>
	                    </div>
                    </div>
                </div>
	        </div>
		
			<div id="footer">
				<style type="text/css">
					.copyright,.copyright a,.copyright a:hover{color:#808080;}
				</style>
				<div class="copyright">
					商用宝版权所有 2004-2014 湘ICP备14006977号-1
				</div>
				<div class="server" id="ServerNum">
					cashier-60-1099 &nbsp; 5807ec3f-ceb6-4aaa-ab7c-988897f410bb
				</div>
			
				<script  type="text/javascript">
					var ALIPAY_COMBO_ICONS_STAMP = '2014/03/04';
				</script >
		
			</div>
		
		</div> 

        <uc2:WebFoot ID="WebFoot1" runat="server" />
    </div>
    </form>

    <script  type="text/javascript">

		//公用JS --开始
		function hide(el){
			el.addClass('fn-hide');
		}
	
		function show(el){
			el.removeClass('fn-hide');
		}

        var FloatRechargeMinMoney='<%= StrRechargeMinMoney%>';
        var FloatRechargeMaxMoney='<%= StrRechargeMaxMoney%>';
        
        function CheckEmpty()
        {                  
            var StrOneRechargeMoneyValue=document.all["TxtRechargeMoney"].value; 
            if (StrOneRechargeMoneyValue=="")
            {
                alert("对不起，充值金额不能为空！");   
                document.all["TxtRechargeMoney"].focus();
                return false;
            }
            

            if (formatFloat(StrOneRechargeMoneyValue,3)<FloatRechargeMinMoney)
            {
                alert("对不起，充值金额不能小于系统设置的单笔充值最小金额【" + FloatRechargeMinMoney + "】元！");         
                document.all["TxtRechargeMoney"].focus();
                return false;
            }
            
            if (formatFloat(StrOneRechargeMoneyValue,3)>FloatRechargeMaxMoney)
            {
                alert("对不起，充值金额不能大于系统设置的单笔充值最大金额【" + FloatRechargeMaxMoney + "】元！");        
                document.all["TxtRechargeMoney"].focus();
                return false;
            }

            var StrRechargePassage = $("input[name='RdbtRechargePassageList']:checked").val();    //可以成功调用。
            var StrRechargeBank = $("input[name='RdbtRechargeBankList']:checked").val();

            if (StrRechargePassage == null || StrRechargePassage == "" || StrRechargePassage == "undefined") 
            {
                alert("对不起，充值支付方式不能为空，请选择充值支付方式！");
                document.all["RdbtRechargePassageList_0"].focus();
                return false;
            }
                   
            if (StrRechargeBank == null || StrRechargeBank == "" || StrRechargeBank == "undefined") 
            {
                alert("对不起，充值支付银行不能为空，请选择充值支付银行！");
                document.all["RdbtRechargeBankList_0"].focus();
                return false;
            } 
            
            //FomSub.target="_blank";
            //FomSub.submit();
            return true;
//            return VerificateNumber(FomSub.TxtRechargeMoney.value);
            //FomSub.submit();
        }
        
        function CheckBankOnlineEmpty()
        {
            var StrOneRechargeMoneyValue=document.all["TxtRechargeMoney"].value; 
            if (StrOneRechargeMoneyValue=="")
            {
                alert("对不起，充值金额不能为空！");   
                document.all["TxtRechargeMoney"].focus();
                return false;
            }

            if (formatFloat(StrOneRechargeMoneyValue,3)<FloatRechargeMinMoney)
            {
                alert("对不起，充值金额不能小于系统设置的单笔充值最小金额【" + FloatRechargeMinMoney + "】元！");         
                document.all["TxtRechargeMoney"].focus();
                return false;
            }
            
            if (formatFloat(StrOneRechargeMoneyValue,3)>FloatRechargeMaxMoney)
            {
                alert("对不起，充值金额不能大于系统设置的单笔充值最大金额【" + FloatRechargeMaxMoney + "】元！");        
                document.all["TxtRechargeMoney"].focus();
                return false;
            }

            var StrRechargePassage = $("input[name='RdbtRechargePassageList']:checked").val();    //可以成功调用。
            var StrRechargeBank = $("input[name='RdbtBankOnlineRechargeList']:checked").val();

            if (StrRechargePassage == null || StrRechargePassage == "" || StrRechargePassage == "undefined") 
            {
                alert("对不起，充值支付方式不能为空，请选择充值支付方式！");
                document.all["RdbtRechargePassageList_0"].focus();
                return false;
            }
                   
            if (StrRechargeBank == null || StrRechargeBank == "" || StrRechargeBank == "undefined") 
            {
                alert("对不起，充值支付银行不能为空，请选择充值支付银行！");
                document.all["RdbtBankOnlineRechargeList_0"].focus();
                return false;
            } 
            
            //FomSub.target="_blank";
            //FomSub.submit();
            return true;
//            return VerificateNumber(FomSub.TxtRechargeMoney.value);
            //FomSub.submit();
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
        
        function formatFloat(src, pos)
        {
            return Math.round(src*Math.pow(10, pos))/Math.pow(10, pos);
        }
    </script >
    <script  type="text/javascript"> 
		//公用JS --开始
		function hide(el){
			el.addClass('fn-hide');
		}
	
		function show(el){
			el.removeClass('fn-hide');
		}
		
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
	
		function PaymentChangeTab(thisObj,StrNumber)
		{           
		    SetPassageValue(StrNumber+"");
		
		    if(thisObj.className == "active")return; 
		    var tabObj = thisObj.parentNode.id; 
		    var tabList = document.getElementById(tabObj).getElementsByTagName("li");
		    for(i=0; i <tabList.length; i++)
		    {                   
		        if (i == StrNumber)
		        {    
		           thisObj.className = "active"; 
			          document.getElementById(tabObj+"_Content"+i).style.display = "block"; 
		        }
		        else
		        {           
		           tabList[i].className = "normal"; 
		           document.getElementById(tabObj+"_Content"+i).style.display = "none"; 
		        }             
		    } 
		     
		} 
		
		function SetPassageValue(StrPassageID)
		{           
		    var StrPassageIDValue="1";
		    var StrBankRate="<%= StrBaoFuRate%>";
            switch (StrPassageID)
            {
                case "0":
                    StrPassageIDValue="1";
                    StrBankRate="<%= StrBaoFuRate%>";
                    break;
                case "1":                            
                    StrPassageIDValue="6";
                    StrBankRate="<%= StrWebsiteBankRate%>";              
                    break;
                default:                       
                    StrPassageIDValue="1";
                    StrBankRate="<%= StrBaoFuRate%>";
                    break;
            }                                                    
            //$("input:radio[value='"+StrPassageIDValue+"']").attr('checked','true');
            document.all["SpnPayRate"].innerText=StrBankRate+"%。";
            //alert($("input[name='RdbtRechargePassageList']:checked").val()) 
		}
	</script> 
    <script language="javascript" src="WebJs/InputClassVerificate.Js" type="text/javascript"></script>
    <script type="text/javascript" src="WebJs/jquery-1.8.2.min.js"></script>
</body>
</html>