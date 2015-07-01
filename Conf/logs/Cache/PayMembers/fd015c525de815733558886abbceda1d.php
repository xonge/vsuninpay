<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>||商户实名认证</title>
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

        <!-- <div class="nav01">
  <div class="left">您好，【<?php echo ($member["RealName"]); ?>】</div>
  <div class="left"><img alt="<?php echo ($member["RealName"]); ?>" src="WebImages/vip.jpg" /></div>
  <div class="left" style="font-size:15px;">
  	&nbsp;&nbsp;订单充值费率为【<span class="FontRed" style="font-weight:bold;"><?php echo ($rate["RateStandard"]); ?>%</span>】，短信价格为【<span class="FontRed" style="font-weight:bold;"><?php echo ($message["MessagePrice"]); ?></span>】元一条。
  </div>
  <div class="right">
  	上次登录时间：<?php echo ($loginlog["Intime"]); ?> &nbsp;&nbsp;&nbsp;&nbsp;上次登录IP：<?php echo ($loginlog["LoginIP"]); ?>
  </div>
</div> -->

		<div class="nav01">
		    <div class="left">信息审核(已审核)</div>
	    </div>
	    <div class="mainbody" >
		    <div class="undata_main">
			    <div class="title">
			        商户信息
			        <span style="font-size:16px;color:#666666;">
			            账户余额：【<font style="color:#ff0000;"><?php echo ($member["AccountUsedValue"]); ?></font>】元。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			            收益余额：【<font style="color:#ff0000;"><?php echo ($member["VirtualUsedValue"]); ?></font>】元。
			        </span>
			    </div>
			    <div class="content1" style="border-bottom:none">
				    <dl>
					    <dt><img src="<?php echo ($member["SmallAdvertImage"]); ?>"  alt="<?php echo ($member["RealName"]); ?>" /></dt>
					    <dd>
						    <p class="t1"><?php echo ($member["RealName"]); ?></p>
						    <p><span> <?php echo ($member["BodyCode"]); ?></span></p>
    						<p style="display:none;">
                                <span style="font-size:16px;">审核金额：【<font style="color:#ff0000;"><%= StrPassMoneyValue%></font>】元。</span>
                                <% if (StrPassStateID != "1" & float.Parse(StrUseAccountValue) < float.Parse(StrPassMoneyValue))
                                {%>
                                    <br />
                                    <asp:Button  ID="BtnRecharge" runat="server" Text="充值"
                                    CssClass="org_bt" OnClick="BtnRecharge_Click"></asp:Button>
                                <% }%>
    						</p>

					    </dd>
				    </dl>
			    </div>
			    <div class="title" style=" border-top:3px solid #CFDBE8">
			        证件信息<span style="font-size:12px; font-weight:normal; font-family:'宋体'">温馨提示：请确保您的身份证和银行卡是本人和同一个人 否则您的资金结算将会受到影响！</span>
		        </div>
		        <div class="CertificateValidate">
			        <ul class="CertificateShow">
				        <li>
			                <span>
                                本人身份证(正面)：
                                <div id="DivBodyPositiveShowFile" runat="server" CssClass="inputk">
                                    <strong><?php echo ($validate["BodyPositive"]); ?></strong>&nbsp;&nbsp;
                                    <asp:LinkButton ID='LkbtUpBodyPositiveFile' runat='server' OnClick='LkbtUpBodyPositiveFile_Click' >重新上传</asp:LinkButton>

                                </div>
                                <div id="DivBodyPositiveFile" runat="server" CssClass="inputk">
                                    <asp:FileUpload ID="UpBodyPositiveFile" runat="server" CssClass="inputk" Width="330px" />&nbsp;
                                    <asp:Button ID="BtnBodyPositiveUpLoad" runat="server" CssClass="inputk" OnClick="BtnBodyPositiveUpLoad_Click" Text="上  传" />
                                </div>
			                </span>
                            <a href="<%= GetCertificateImages(StrBodyPositiveImage)%>" target="_blank" title="点击可以查看原图">
                                <img alt="<?php echo ($member["RealName"]); ?>身份证(正面)" src="/<?php echo ($validate["BodyPositiveSmall"]); ?>" />
                            </a>
                            &nbsp;&nbsp;
                            <span class='FontGreen'>已审核</span>
				        </li>
				        <li>
				            <span>
				                本人身份证(反面)：
                                <div id="DivBodyNegativeShowFile" runat="server" class="inputk">
                                    <strong><?php echo ($validate["BodyNegative"]); ?></strong>&nbsp;&nbsp;
                                    <asp:LinkButton ID='LkbtUpBodyNegativeFile' runat='server' OnClick='LkbtUpBodyNegativeFile_Click' >重新上传</asp:LinkButton>
                                </div>
                                <div id="DivBodyNegativeFile" runat="server" class="inputk">
                                    <asp:FileUpload ID="UpBodyNegativeFile" runat="server" CssClass="inputk" Width="330px" />&nbsp;
                                    <asp:Button ID="BtnUpBodyNegativeLoad" runat="server" CssClass="inputk" OnClick="BtnUpBodyNegativeLoad_Click" Text="上  传" />
                                </div>
                            </span>
                            <a href="<%= GetCertificateImages(StrBodyNegativeImage)%>" target="_blank" title="点击可以查看原图">
                                <img alt="<?php echo ($member["RealName"]); ?>身份证(反面)" src="<?php echo ($validate["BodyNegativeSmall"]); ?>" />
                            </a>
                            &nbsp;&nbsp;
                            <span class='FontGreen'>已审核</span>
				        </li>
				        <li>
					        <span>
				                本人银行卡(正面)：
                                <div id="DivBankCardsPositiveShowFile" align="left" runat="server" class="inputk">
                                    <strong><?php echo ($validate["BankCardsPositive"]); ?></strong>&nbsp;&nbsp;
                                    <asp:LinkButton ID='LkbtUpBankCardsPositiveFile' runat='server' OnClick='LkbtUpBankCardsPositiveFile_Click' >重新上传</asp:LinkButton>
                                </div>
                                <div id="DivBankCardsPositiveFile" runat="server" class="inputk">
                                    <asp:FileUpload ID="UpBankCardsPositiveFile" runat="server" CssClass="inputk" Width="330px" />&nbsp;
                                    <asp:Button ID="BtnUpBankCardsPositiveLoad" runat="server" CssClass="inputk" OnClick="BtnUpBankCardsPositiveLoad_Click" Text="上  传" />
                                </div>
                            </span>
                            <a href="<%= GetCertificateImages(StrBankCardsPositiveImage)%>" target="_blank" title="点击可以查看原图">
                                <img alt="<?php echo ($member["RealName"]); ?>银行卡(正面)" src="<?php echo ($validate["BankCardsPositiveSmall"]); ?>" />
                            </a>
                            &nbsp;&nbsp;
                            <span class='FontGreen'>已审核</span>
				        </li>
				        <li>
					        <span>
					            本人银行卡(反面)：
                                <div id="DivBankCardsNegativeShowFile" align="left" runat="server" class="inputk">
                                    <strong><?php echo ($validate["BankCardsNegative"]); ?></strong>&nbsp;&nbsp;
                                    <asp:LinkButton ID='LkbtUpBankCardsNegativeFile' runat='server' OnClick='LkbtUpBankCardsNegativeFile_Click' >重新上传</asp:LinkButton>
                                </div>
                                <div id="DivBankCardsNegativeFile" runat="server" class="inputk">
                                    <asp:FileUpload ID="UpBankCardsNegativeFile" runat="server" CssClass="inputk" Width="330px" />&nbsp;
                                    <asp:Button ID="BtnUpBankCardsNegativeLoad" runat="server" CssClass="inputk" OnClick="BtnUpBankCardsNegativeLoad_Click" Text="上  传" />
                                </div>
					        </span>
                            <a href="<%= GetCertificateImages(StrBankCardsNegativeImage)%>" target="_blank" title="点击可以查看原图">
                                <img alt="<?php echo ($member["RealName"]); ?>银行卡(反面)" src="<?php echo ($validate["BankCardsNegativeSmall"]); ?>" />
                            </a>
                            &nbsp;&nbsp;
                            <span class='FontGreen'>已审核</span>
				        </li>
				        <li>
					        <span>
					            手持身份证半身 照片)：
                                <div id="DivHalfBodyPhotoShowFile" align="left" runat="server" class="inputk">
                                    <strong><?php echo ($validate["HalfBodyPhoto"]); ?></strong>&nbsp;&nbsp;
                                    <asp:LinkButton ID='LkbtUpHalfBodyPhotoFile' runat='server' OnClick='LkbtUpHalfBodyPhotoFile_Click' >重新上传</asp:LinkButton>
                                </div>
                                <div id="DivHalfBodyPhotoFile" runat="server" class="inputk">
                                    <asp:FileUpload ID="UpHalfBodyPhotoFile" runat="server" CssClass="inputk" Width="330px" />&nbsp;
                                    <asp:Button ID="BtnUpHalfBodyPhotoLoad" runat="server" CssClass="inputk" OnClick="BtnUpHalfBodyPhotoLoad_Click" Text="上  传" />
                                </div>
					        </span>
                            <a href="<%= GetCertificateImages(StrHalfBodyPhotoImage)%>" target="_blank" title="点击可以查看原图">
                                <img alt="<?php echo ($member["RealName"]); ?>银行卡(反面)" src="<?php echo ($validate["HalfBodyPhotoSmall"]); ?>" />
                            </a>
                            &nbsp;&nbsp;
                            <span class='FontGreen'>已审核</span>
				        </li>
			        </ul><!--
			         <a href="OrdersRecharge.aspx?MainID=4" class="cz">立即充值</a>
			         选用下面的按钮会产生点击按钮不能够进入程序代码里面的问题。
			        <input id="BtnPass2" name="" type="button" runat="server" value="提交审核" class="org_bt" onclick="return CheckAccountValue();" onserverclick="BtnPass_ServerClick" />
			        -->
			        <asp:Button ID="BtnPass" runat="server" Text="提交审核" CssClass="org_bt" OnClick="BtnPass_ServerClick" OnClientClick="return CheckAccountValue();" />
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

        function CheckAccountValue()
        {
            debugger;
            var StrUseAccountValue="<%= StrUseAccountValue%>";
            var StrPassMoneyValue="<%= StrPassMoneyValue%>";

            /*
            if (StrPassMoneyValue>StrUseAccountValue)
            {
                alert("对不起，您的可用余额不足【"+StrPassMoneyValue+"】元，请进行账户充值！");
                document.all["BtnRecharge"].focus();
                return false;
            }
            */
            return true;
            //FomSub.submit();
        }

        function formatFloat(src, pos)
        {
            return Math.round(src*Math.pow(10, pos))/Math.pow(10, pos);
        }
    </script>
</body>
</html>