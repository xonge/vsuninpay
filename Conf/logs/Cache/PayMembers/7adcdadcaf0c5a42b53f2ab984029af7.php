<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head id="Head1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>商户提现银行设置|<%=GetMemberSystemTitle()%>|<%=GetWebsiteName()%></title>
    <base href="http://xiangtan.suninpay.com:81/">
    <link href="WebCss/WebSite.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<form id="FomSub">
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
				<!-- <div class="box" style="margin-bottom:10px"> -->
                <div class="FullWidth">
				    <div class="title01">
					    <h2>【<?php echo ($member["RealName"]); ?>】您的提现银行列表。</h2>
					    <span></span>
				    </div>
				    <div class="FullWidthList">
                        <div class="WithdrawalBankList">
                        <h2>
                          <b class="blue"><a id="RptMessageList_ctl00_LkbtAlter" title="建设银行" href="javascript:__doPostBack('RptMessageList$ctl00$LkbtAlter','')"><?php echo ($bankcard["BankName"]); ?>(尾号<?php echo (reset($r4num["0"])); ?>)</a></b>
                                        (<span class="FontGreen">默认</span>)
                                        <input type="image" name="RptMessageList$ctl00$ImgDelete" id="RptMessageList_ctl00_ImgDelete" title="建设银行" src="WebImages/DeleteImage.jpg" onclick="JavaScript:return confirm('确定删除吗？一旦删除将不可恢复！');" style="border-width:0px;">
                                        &nbsp;

                        </h2>
                        </div>
				    </div>
			    </div>
			</div>

			<div class="mainbody">
		    <div class="undata_main">
			    <div class="title">提现银行</div>
			    <div class="content1" style=" height:60px">
				    <P style="font-size:24px; font-family:'微软雅黑'; text-align:center"><?php echo ($bankcard["BankName"]); ?>(尾号：<?php echo (reset($r4num["0"])); ?>) (默认)</P>
			    </div>
			    <div class="step1_cont">
				    <ul>
					    <li>
						    <dl>
							    <dt>开户银行：</dt>
							    <dd>
							        <select name="DpdAllBankList" id="DpdAllBankList" class="input1">
  <option value="19">中国银行(储蓄卡)</option>
  <option value="14">中国农业银行(储蓄卡)</option>
  <option value="12">中国建设银行(储蓄卡)</option>
  <option value="11">中国工商银行(储蓄卡)</option>

</select>
							    </dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>开户分行：</dt>
							    <dd><input id="TxtChildBankName" name="TxtChildBankName" type="text" class="input1" /><span class="FontRed">*</span></dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>银行帐号：</dt>
							    <dd><input id="TxtWithdrawalAccount" name="TxtWithdrawalAccount" type="text" class="input1" maxlength="20" onkeydown="ValidateNumber(event);" onpaste="ValidateClip(event);" /><span id="SpnHaveBank" class="FontRed" >*</span></dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>开户人：</dt>
							    <dd>
							        <b  class="org" style="line-height:33px; font-size:16px">
                      <?php echo ($bankcard["RealName"]); ?>
							            
							        </b>
							    </dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>&nbsp;</dt>
							    <dd>
							    <asp:Button  ID="BtnAddAccount" Text="添加" OnClientClick="return CheckEmpty();" CssClass="org_bt"
				                OnClick="BtnAddAccount_Click"></asp:Button>
							    &nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="重置" name="" class="org_bt" /></dd>
						    </dl>
					    </li>
				    </ul>
			    </div>
		    </div>
		    <div class="sub_right">
			    <div class="sub_announce">
				    <div class="title01"><h1>系统公告</h1></div>
				    <div class="content">
					    <ul class="text01">
						    <uc3:DivNewsList ID="DivNoticeList" />
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

    </script>
    <script type="text/javascript">
        function CheckEmpty()
        {
            if (FomSub.TxtChildBankName.value=="")
            {
                alert("对不起，开户分行不能为空！");
                FomSub.TxtChildBankName.focus();
                return false;
            }
            if (FomSub.TxtWithdrawalAccount.value=="")
            {
                alert("对不起，开户银行帐号不能为空！");
                FomSub.TxtWithdrawalAccount.focus();
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
                     //ValidateClip(ev);
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