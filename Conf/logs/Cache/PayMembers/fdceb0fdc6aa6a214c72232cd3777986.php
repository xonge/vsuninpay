<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>商户基本信息修改||</title>
    <base href="http://xiangtan.suninpay.com:81/">
    <link href="WebCss/WebSite.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript">
        var StrMerchantExtensionLink="http://<%= Request.Url.Authority%>/Card<%= StrMerchantUserName%>.aspx";
        var StrMerchantCardsLink="http://<%= Request.Url.Authority%>/Card<%= StrMerchantUserName%>.aspx";
        //var StrMerchantWeChatCodeLink="https://wx.qq.com/?preview";
        //var StrMerchantWeChatCodeLink="http://weixin.qq.com/r/x87E3CjEsHXPrWy-95vV";
        var StrMerchantWeChatCodeLink="";
        var StrMerchantSmallBlogCodeLink="http://t.qq.com/?preview";
        var StrShareLink="http://s.jiathis.com/qrcode.php?url=" + StrMerchantExtensionLink + "";
        var StrCardsLink="http://s.jiathis.com/qrcode.php?url=" + StrMerchantCardsLink + "";
        var StrWeChatCodeLink="http://s.jiathis.com/qrcode.php?url=" + StrMerchantWeChatCodeLink + "";
        var StrSmallBlogCodeLink="http://s.jiathis.com/qrcode.php?url=" + StrMerchantSmallBlogCodeLink + "";

		//var bigCodeUrl = 'http://pic.soqi.cn/phonecode/phonecode_12458466.jpg';
		var bigCodeUrl = StrShareLink;
		//var weixinUrl = 'http://pic.soqi.cn/weixin/weixin_12458466.jpg';
		//var weixinUrl = "http://s.jiathis.com/qrcode.php?url=" + StrWeChatCodeLink + ""
		//var weixinUrl = StrWeChatCodeLink;
		var weixinUrl = 'http://open.weixin.qq.com/qr/code/?username=';
		//var weiboUrl = 'http://pic.soqi.cn/weibo/weibo_12458466.jpg';
		var weiboUrl = "http://s.jiathis.com/qrcode.php?url=" + StrSmallBlogCodeLink + ""
		//var perhomeCodeUrl = 'http://pic.soqi.cn/perHomeCode/perHomeCode_12458466.jpg';
		var perhomeCodeUrl = StrCardsLink;
		var phoneIdEcr = '5F29C5B25A176F067CB0BCD31B48A3E7';
	</script>
	<script type="text/javascript" src="CardStyle/util.js"></script>
	<script type="text/javascript" src="CardStyle/templateCom.js"></script>
	<script type="text/javascript" src="CardStyle/api"></script>
	<script type="text/javascript" src="CardStyle/getscript"></script>
	<script type="text/javascript" src="CardStyle/map.js"></script>
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
		    <div class="undata_main">
			    <div class="title">修改基本信息</div>
			    <div class="content1">
				    <dl>
					    <dt><img src="<?php echo ($member["SmallAdvertImage"]); ?>" alt="" /></dt>
					    <dd >
						    <p class="t1">【<?php echo ($member["UserName"]); ?>】</p>
						    <P>(已审核)</P>
						    
						    <p><a href="OrdersRecharge.aspx?MainID=4" class="cz">立即充值</a></p>
					    </dd>
				    </dl>
			    </div>
			    <div class="step1_cont">
				    <ul>
					    <li>
						    <dl>
							    <dt>您的姓名：</dt>
							    <dd>
							        <input id="TxtRealName" name="TxtRealName" type="text" class="input1" maxlength="32" value="<?php echo ($member["RealName"]); ?>" disabled /><span class="FontRed">* 请输入您的姓名</span>
							    </dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>性别：</dt>
							    <dd>
                                    <span id="RdbtSexValueList"><input id="RdbtSexValueList_0" type="radio" name="RdbtSexValueList" value="1" checked="checked"><label for="RdbtSexValueList_0">男</label><input id="RdbtSexValueList_1" type="radio" name="RdbtSexValueList" value="2"><label for="RdbtSexValueList_1">女</label></span>
                                </dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>身份证号：</dt>
							    <dd><input id="TxtBodyCode" name="TxtBodyCode" type="text" class="input1"  maxlength="18" value="<?php echo ($member["BodyCode"]); ?>" disabled/><span class="FontRed">* 请输入正确的身份证号码</span></dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>单位名称：</dt>
							    <dd><input id="TxtMerchantName" name="TxtMerchantName" type="text" class="input1" maxlength="32" value="<?php echo ($member["MerchantName"]); ?>" /></dd>
						    </dl>
					    </li>
					    <li style="display:none;">
						    <dl>
							    <dt>单位LOGO：</dt>
							    <dd>
                                    <div id="DivCompanyLogoShowFile" CssClass="inputk" style="font-size:14px;">
                                        <strong><a href="<%= GetHeadImage(StrMerchantHeadImage)%>" target="_blank" title="点击可查看图片"><%= GetHeadImage(StrMerchantHeadImage)%></a></strong>&nbsp;&nbsp;
                                        <asp:LinkButton ID='LkbtUpCompanyLogoFile' runat='server' OnClick='LkbtUpCompanyLogoFile_Click' >重新上传</asp:LinkButton>

                                    </div>
                                    <div id="DivCompanyLogoFile" CssClass="inputk">
                                        <asp:FileUpload ID="UpCompanyLogoFile" CssClass="inputk" Width="330px" />&nbsp;
                                        <asp:Button ID="BtnCompanyLogoUpLoad" CssClass="inputk" OnClick="BtnCompanyLogoUpLoad_Click" Text="上  传" />
                                    </div>
							    </dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>行业类别：</dt>
							    <dd>
							        <select name="DrpCompanyClassList" id="DrpCompanyClassList">
	<option value="0">请选择行业类别</option>
	<option value="1">党政机关 社会团体</option>
	<option value="2">新闻 出版 科研 教育</option>
	<option value="3">旅游 餐饮 娱乐 休闲 购物</option>
	<option value="4">日常服务</option>
	<option value="5">家具 生活用品 食品</option>
	<option value="6">钟表眼镜 工艺品 礼品</option>
	<option value="7">医疗保健 社会福利</option>
	<option value="8">金融 保险 证券 投资</option>
	<option selected="selected" value="9">广告 会展 商务办公 咨询业</option>
	<option value="10">通信 邮政 计算机 网络</option>
	<option value="11">交通物流 运输设备</option>
	<option value="12">城建 房产 建材 装潢</option>
	<option value="13">贸易 批发 市场</option>
	<option value="14">纺织 皮革 服装 鞋帽</option>
	<option value="15">造纸 纸品 印刷  包装</option>
	<option value="16">石油化工 橡胶塑料</option>
	<option value="17">电子电器 仪器仪表</option>
	<option value="18">机械设备 通用零部件</option>
	<option value="19">冶金冶炼 金属及非金属制品</option>
	<option value="20">农林牧渔</option>

</select>
                                </dd>
						    </dl>
					    </li>
					    <li style="display:none;">
						    <dl>
							    <dt>广告图片：</dt>
							    <dd>
                                    <div id="DivAdvertImageShowFile" class="inputk" style="font-size:14px;">
                                        <strong><a href="<%=StrAdvertImageImage%>" target="_blank" title="点击可查看图片"><%=StrAdvertImageImage%></a></strong>&nbsp;&nbsp;
                                        <asp:LinkButton ID='LkbtUpAdvertImageFile' runat='server' OnClick='LkbtUpAdvertImageFile_Click' >重新上传</asp:LinkButton>
                                    </div>
                                    <div id="DivAdvertImageFile" class="inputk">
                                        <asp:FileUpload ID="UpAdvertImageFile" CssClass="inputk" Width="330px" />&nbsp;
                                        <asp:Button ID="BtnUpAdvertImageLoad" CssClass="inputk" OnClick="BtnUpAdvertImageLoad_Click" Text="上  传" />
                                        <span >广告图片尺寸：宽*高为660*60的比例。</span>
                                    </div>
							    </dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>您的QQ号：</dt>
							    <dd><input id="TxtQQNumber" name="TxtQQNumber" type="text" class="input1" onkeydown="ValidateNumber(event);" onpaste="ValidateClip(event);" maxlength="32" value="<?php echo ($member["QQNumber"]); ?>" /></dd>
						    </dl>
					    </li>
					    <li style="display:none;">
						    <dl>
							    <dt>手机号码：</dt>
							    <dd><input id="TxtMobile" name="TxtMobile" type="text" class="input1" onkeydown="ValidateNumber(event);" onpaste="ValidateClip(event);" maxlength="11" value="<?php echo ($member["Mobile"]); ?>" /><span class="FontRed">* 请输入常用的手机号码</span></dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>联系电话：</dt>
							    <dd><input id="TxtPhone" name="TxtPhone" type="text" class="input1"  maxlength="32" value="<?php echo ($member["Phone"]); ?>" /><span class="">请输入您公司的座机号码。</span></dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>电子邮箱：</dt>
							    <dd><input id="TxtEmail" name="TxtEmail" type="text" class="input1"  maxlength="100" value="<?php echo ($member["Email"]); ?>" /><span class="">请输入您的电子邮箱。</span></dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>联系地址：</dt>
							    <dd><input id="TxtAddress" name="TxtAddress" type="text" class="input1"  maxlength="128" value="<?php echo ($member["Address"]); ?>" /><span class="FontRed">* 请输入您现在所在省市的详细联系地址。</span></dd>
						    </dl>
					    </li>
					    <li style="display:none;">
						    <dl>
							    <dt>个人职称：</dt>
							    <dd>
							        <asp:DropDownList ID="DrpJobGradeList">
    							        <asp:ListItem Value="0" Text="请选择职称类别"></asp:ListItem>
    							        <asp:ListItem value="1" Text="董事长"></asp:ListItem>
	                                    <asp:ListItem value="2" Text="总经理"></asp:ListItem>
	                                    <asp:ListItem value="3" Text="副总"></asp:ListItem>
	                                    <asp:ListItem value="4" Text="技术总监"></asp:ListItem>
	                                    <asp:ListItem value="5" Text="运营总监"></asp:ListItem>
	                                    <asp:ListItem value="6" Text="市场总监"></asp:ListItem>
	                                    <asp:ListItem value="7" Text="人力资源"></asp:ListItem>
	                                    <asp:ListItem value="8" Text="财务经理"></asp:ListItem>
	                                    <asp:ListItem value="9" Text="销售经理"></asp:ListItem>
	                                    <asp:ListItem value="10" Text="业务经理"></asp:ListItem>
	                                    <asp:ListItem value="11" Text="客服经理"></asp:ListItem>
	                                    <asp:ListItem value="12" Text="研发工程师"></asp:ListItem>
	                                    <asp:ListItem value="13" Text="设计工程师"></asp:ListItem>
	                                    <asp:ListItem value="14" Text="前台"></asp:ListItem>
	                                    <asp:ListItem value="15" Text="店长"></asp:ListItem>
	                                    <asp:ListItem value="16" Text="导购"></asp:ListItem>
	                                    <asp:ListItem value="17" Text="售后"></asp:ListItem>
	                                    <asp:ListItem value="18" Text="其他"></asp:ListItem>

                                    </asp:DropDownList><span >请输入您在公司的个人职称。</span>
							    </dd>
						    </dl>
					    </li>
					    <li style="display:none;">
						    <dl>
							    <dt>微信帐号：</dt>
							    <dd><input id="TxtWeChatCode" name="TxtWeChatCode" type="text" class="input1"  maxlength="64" /><span >请输入您的微信帐号。</span></dd>
						    </dl>
					    </li>
					    <li style="display:none;">
						    <dl>
							    <dt>公众帐号：</dt>
							    <dd><input id="TxtWeChatPublicCode" name="TxtWeChatCode" type="text" class="input1"  maxlength="64" /><span >请输入您的微信公众帐号。</span></dd>
						    </dl>
					    </li>
					    <li style="display:none;">
						    <dl>
							    <dt>微博帐号：</dt>
							    <dd><input id="TxtSmallBlogCode" name="TxtSmallBlogCode" type="text" class="input1"  maxlength="64" /><span >请输入您的微博帐号。</span></dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>公司网址：</dt>
							    <dd><input id="TxtCompanyWebsite" name="TxtCompanyWebsite" type="text" class="input1"  maxlength="120" value="<?php echo ($member["CompanyWebsite"]); ?>" /><span >请输入您现在公司的网址。</span></dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>主营业务：</dt>
							    <dd><input id="TxtMainProduct" name="TxtMainProduct" type="text" class="input1"  maxlength="120" value="<?php echo ($member["CompanyWebsite"]); ?>" /><span >请输入您现在公司的网址。</span></dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>宣传片网址：</dt>
							    <dd><input id="TxtCompanyVideo" name="TxtCompanyVideo" type="text" class="input1"  maxlength="120" value="<?php echo ($member["CompanyVideo"]); ?>" /><span >请输入您现在公司的公司宣传片地址。</span></dd>
						    </dl>
					    </li>
					    <li style="display:none;">
						    <dl>
							    <dt>名片背景图：</dt>
							    <dd>
                                    <div id="DivWeChatBackPictureShowFile" class="inputk" style="font-size:14px;">
                                        <strong><a href="<%=StrWeChatBackPicture%>" target="_blank" title="点击可查看图片"><%=StrWeChatBackPicture%></a></strong>&nbsp;&nbsp;
                                        <asp:LinkButton ID='LkbtUpWeChatBackPictureFile' runat='server' OnClick='LkbtUpWeChatBackPictureFile_Click' >重新上传</asp:LinkButton>
                                    </div>
                                    <div id="DivWeChatBackPictureFile" class="inputk">
                                        <asp:FileUpload ID="UpWeChatBackPictureFile" CssClass="inputk" Width="330px" />&nbsp;
                                        <asp:Button ID="BtnUpWeChatBackPictureLoad" CssClass="inputk" OnClick="BtnUpWeChatBackPictureLoad_Click" Text="上  传" />
                                        <span >广告图片尺寸：宽*高为320*480的比例。</span>
                                    </div>
							    </dd>
						    </dl>
					    </li>
					    <li style="display:none;">
						    <dl>
							    <dt>二维码名片：</dt>
							    <dd><a href="Card<%=StrMerchantUserName%>.aspx" target="_blank" class="FontRed" style="font-size:16px;">http://<%= Request.Url.Authority%>/Card<%=StrMerchantUserName%>.aspx</a></dd>
						    </dl>
					    </li>
					    <li>
						    <dl>
							    <dt>&nbsp;</dt>
							    <dd>
							        <!--
							    <input type="button" value="确定修改" name="" class="org_bt">   如： 010-123123。
							        -->
							        <input type="submit" name="BtnAlter" value="确定修改" onclick="return CheckEmpty();" id="BtnAlter" class="org_bt">
				                    <asp:Button  ID="BtnGuideCards" Text="微信名片" CssClass="org_bt" OnClick="BtnGuideCardsr_Click" Visible="false"></asp:Button>
                                    <a href="Card<%=StrMerchantUserName%>.aspx" class="org_bt" target="_blank"><img alt="" src="WebImages/WeChatCodeImage.jpg" width="100" height="40" class="jiathis_button_weixin" /></a>
                                    <!--
                                    <a href="Card<%=StrMerchantUserName%>.aspx" class="org_bt" target="_blank" style=" display:block;"><span class="" style="width:100px; height:40px;background:url(WebImages/OrangeButton.jpg);">微信名片</span></a>
                                    <a class="jiathis_button_weixin">微信</a>
                                    -->
                                    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1" charset="utf-8"></script>
							    </dd>
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
        function CheckEmpty()
        {
            if (document.all["TxtRealName"].value=="")
            {
                alert("对不起，姓名不能为空！");
                document.all["TxtRealName"].focus();
                return false;
            }
            if (document.all["TxtBodyCode"].value=="")
            {
                alert("对不起，身份证号不能为空！");
                document.all["TxtBodyCode"].focus();
                return false;
            }
            /*
            if (document.all["TxtMobile"].value=="")
            {
                alert("对不起，手机号码不能为空！");
                document.all["TxtMobile"].focus();
                return false;
            }

            if (document.all["TxtPhone"].value=="")
            {
                alert("对不起，联系电话不能为空！");
                document.all["TxtPhone"].focus();
                return false;
            }
            */
            if (document.all["TxtAddress"].value=="")
            {
                alert("对不起，联系地址不能为空！");
                document.all["TxtAddress"].focus();
                return false;
            }

            var StrBodyCodeFormat=/(^\d{15}$)|(^\d{17}([0-9]|X)$)/;                 //这个可以，下面的也可以。
            //var StrBodyCodeFormat=/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;     //这个可以，下面的也可以。
            if(!StrBodyCodeFormat.test(document.all["TxtBodyCode"].value))
            {
                alert("对不起，身份证号码格式不正确！\n身份证号码长度只能够为15位或者18位。\n15位号码应全为数字，18位号码末位可以为数字或X！");
                document.all["TxtBodyCode"].focus();
                return false;
            }

            //return VerificateMobile(document.all["TxtMobile"].value);

//            return VerificateBodyCode(document.all["TxtBodyCode"].value);

//            return VerificateMobile(document.all["TxtMobile"].value);

//            return true;
            //document.submit();
        }

        //验证输入字符串是否为身份证号码格式类型。身份证号码为15位或者18位，15位时全为数字，18位前17位为数字，最后一位是校验位，可能为数字或字符X。
        function VerificateBodyCode(StrInputValue)
        {
            //alert(StrInputValue);
            var StrBodyCodeFormat=/(^\d{15}$)|(^\d{17}([0-9]|X)$)/;                 //这个可以，下面的也可以。
            //var StrBodyCodeFormat=/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;     //这个可以，下面的也可以。
            if(!StrBodyCodeFormat.test(StrInputValue))
            {
                alert("对不起，身份证号码格式不正确！\n身份证号码长度只能够为15位或者18位。\n15位号码应全为数字，18位号码末位可以为数字或大写的字母X！如果最后一位为X的话，只能够大写，不能够小写。");
                document.all["TxtBodyCode"].focus();
                return false;
            }
            //return true;
        }

        //验证输入字符串是否为手机号码格式类型。
        function VerificateMobile(StrInputValue)
        {
            var StrMobileFormat=/^1[3,5,7,8]{1}[0-9]{1}[0-9]{8}$/;
            if(!StrMobileFormat.test(StrInputValue))
            {
                alert("对不起，手机号码格式不正确，请输入11位数字的正确手机号码！");
                document.all["TxtMobile"].focus();
                return false;
            }
            //return true;
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

    <style type="text/css">

        DIV.neat-dialog-cont
        {

        Z-INDEX: 1000; BACKGROUND: none transparent scroll repeat 0% 0%; LEFT: 0px; WIDTH: 100%; POSITION: absolute; TOP: 0px; HEIGHT: 100%

        }

        DIV.neat-dialog-bg {

        Z-INDEX: -1; FILTER: alpha(opacity=70); LEFT: 0px; WIDTH: 100%; POSITION: absolute; TOP: 0px; HEIGHT: 100%; BACKGROUND-COLOR: #eee; opacity: 0.7

        }

        DIV.neat-dialog {Z-INDEX: 99; MARGIN-LEFT: auto;  WIDTH: 302px; MARGIN-RIGHT: auto; POSITION: relative; TOP: 100px; BACKGROUND-COLOR: #fff

        }

        DIV.neat-dialog-title {FONT-SIZE: 0.8em; MARGIN: 0px;  POSITION: relative

        }

        IMG.nd-cancel {

        RIGHT: 0em; POSITION: absolute; TOP: 0em

        }

        DIV.neat-dialog P {

        PADDING-RIGHT: 0em; PADDING-LEFT: 0em; PADDING-BOTTOM: 0em; PADDING-TOP: 0em; TEXT-ALIGN: center

        }

    </style>

    <script type="text/javascript">

        function NeatDialog(sHTML, sTitle, bCancel)

        {

            window.neatDialog = null;
            this.elt = null;

            if (document.createElement  &&  document.getElementById)
            {
                var dg = document.createElement("div");
                dg.className = "neat-dialog";
                if (sTitle)
                {
                    sHTML = '' + sHTML;
                }

                dg.innerHTML = sHTML;
                var dbg = document.createElement("div");
                dbg.id = "nd-bdg";
                dbg.className = "neat-dialog-bg";
                var dgc = document.createElement("div");
                dgc.className = "neat-dialog-cont";
                dgc.appendChild(dbg);
                dgc.appendChild(dg);

                if (document.body.offsetLeft > 0)
                {
                    dgc.style.marginLeft = document.body.offsetLeft + "px";
                }
                document.body.appendChild(dgc);

                if (bCancel) document.getElementById("nd-cancel").onclick = function()
                {
                    window.neatDialog.close();
                };
                this.elt = dgc;
                window.neatDialog = this;
            }
        }

        NeatDialog.prototype.close = function()
        {
            if (this.elt)
            {
                this.elt.style.display = "none";
                this.elt.parentNode.removeChild(this.elt);
            }
            window.neatDialog = null;
        }

        function openDialog()
        {
            var sHTML = '<div class="chy_sm_fd"><div class="titchy"><H1>分享到朋友圈</h1><span onclick="window.neatDialog.close()" ></span></div><div class="contetn"><img src="WebImages/index_r12_c16.jpg" /></div></div> '+
              '<p></p>';
            new NeatDialog(sHTML, "你知道吗？", false);
        }

    </script>
	<script type="text/javascript" src="CardStyle/util.js"></script>
	<script type="text/javascript" src="CardStyle/templateCom.js"></script>
	<script type="text/javascript" src="CardStyle/api"></script>
	<script type="text/javascript" src="CardStyle/getscript"></script>
	<script type="text/javascript" src="CardStyle/map.js"></script>
</body>
</html>