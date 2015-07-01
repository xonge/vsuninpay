<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>商户微名片导航菜单修改|<%=GetMemberSystemTitle()%>|<%=GetWebsiteName()%></title>
    <base href="http://xiangtan.suninpay.com:81/">
    <link href="WebCss/WebSite.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .SpnLeft{float:left;font-size:14px;color:#666666;}
    </style>
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
			    <div class="title">手机微名片管理&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>                                                   
			    <div class="content1" style="display:none;">
				    <dl> 
					    <dt><img src="<?php echo ($member["CompanyLogo"]); ?>" alt="<?php echo ($member["RealName"]); ?>" /></dt>
					    <dd >
						    <p class="t1">【<?php echo ($member["UserName"]); ?>】</p>
						    <P>(<%= StrPassState%>)</P>
						    <% if (StrPassStateID == "1")
                            {%>
						    <p><a href="OrdersRecharge.aspx?MainID=4" class="cz">立即充值</a></p>
						    <%} %>
					    </dd>
				    </dl>
			    </div>
			    <div class="CardGuideMenu">
				    <ul>  
					    <li >
						    <dl>
							    <dt>名片背景：</dt>
							    <dd>
                                    <div id="DivWeChatBackPictureShowFile" runat="server" class="inputk" style="font-size:14px;">
                                        <strong>
                                            <a href="" target="_blank" title="点击可查看图片">
                                                <img alt="名片背景" src="<?php echo ($card["WeChatBackPicture"]); ?>" width="80" height="80" />
                                            </a>
                                        </strong>&nbsp;&nbsp;
                                        <asp:LinkButton ID='LkbtUpWeChatBackPictureFile' runat='server' OnClick='LkbtUpWeChatBackPictureFile_Click' >重新上传</asp:LinkButton>
                                    </div>
                                    <div id="DivWeChatBackPictureFile" runat="server" class="inputk">
                                        <asp:FileUpload ID="UpWeChatBackPictureFile" runat="server" CssClass="inputk" Width="330px" />&nbsp;
                                        <asp:Button ID="BtnUpWeChatBackPictureLoad" runat="server" CssClass="inputk" OnClick="BtnUpWeChatBackPictureLoad_Click" Text="上  传" />
                                        <span >名片背景图尺寸：宽*高为567*1008的比例。</span>
                                    </div>
							    </dd>
						    </dl>

					    </li>   
					    <li >
						    <dl>
							    <dt>背景音乐：</dt>
							    <dd>
							        <select name="DrpWeChatBackgroundMusicList" id="DrpWeChatBackgroundMusicList" onchange="return SetPlayerBackMusic();">
	<option selected="selected" value="0">不设置背景音乐</option>
	<option value="NewsVideo/music-11.mp3">music-11</option>
	<option value="NewsVideo/music-20.mp3">music-20</option>
	<option value="NewsVideo/music-21.mp3">music-21</option>
	<option value="NewsVideo/李荣浩-小芳.mp3">李荣浩 - 小芳(Live)</option>
	<option value="NewsVideo/钟汉良-何以爱情.mp3">钟汉良 - 何以爱情</option>
	<option value="NewsVideo/DJ慢摇/Alexandra Burke - Let It Go.mp3">Alexandra Burke - Let It Go</option>
	<option value="NewsVideo/草原风/凤凰传奇 - 大声唱.mp3">凤凰传奇 - 大声唱</option>
	<option value="NewsVideo/钢琴曲轻音乐/Richard Clayderman - 思乡曲.mp3">Richard Clayderman - 思乡曲</option>
	<option value="NewsVideo/经典流行/Beyond—不再犹豫.mp3">Beyond—不再犹豫</option>
	<option value="NewsVideo/经典流行/筷子兄弟—小苹果.mp3">筷子兄弟—小苹果</option>
	<option value="NewsVideo/经典流行/周传雄—关不上的窗.mp3">周传雄—关不上的窗</option>
	<option value="NewsVideo/经典流行/Beyond—大地.mp3">Beyond—大地</option>
	<option value="NewsVideo/经典流行/Beyond—光辉岁月.mp3">Beyond—光辉岁月</option>
	<option value="NewsVideo/经典流行/Beyond—海阔天空.mp3">Beyond—海阔天空</option>
	<option value="NewsVideo/经典流行/Beyond—冷雨夜.mp3">Beyond—冷雨夜</option>
	<option value="NewsVideo/经典流行/Beyond—逝去日子.mp3">Beyond—逝去日子</option>
	<option value="NewsVideo/经典流行/Beyond—岁月无声.mp3">Beyond—岁月无声</option>
	<option value="NewsVideo/经典流行/Beyond—喜欢你.mp3">Beyond—喜欢你</option>
	<option value="NewsVideo/经典流行/Beyond—真的爱你.mp3">Beyond—真的爱你</option>
	<option value="NewsVideo/经典流行/It is my life反恐背景音乐.mp3">It is my life反恐背景音乐</option>
	<option value="NewsVideo/经典流行/Joan Jett—I Hate Myself For Loving You.mp3">Joan Jett—I Hate Myself For Loving You</option>
	<option value="NewsVideo/经典流行/lady gaga - bad romance.mp3">lady gaga - bad romance</option>
	<option value="NewsVideo/经典流行/lady gaga - poker face.mp3">lady gaga - poker face</option>
	<option value="NewsVideo/经典流行/On the Floor (Ft. Pitbull).mp3">On the Floor (Ft. Pitbull)</option>
	<option value="NewsVideo/经典流行/Toni Braxton - Fairy Tale.mp3">Toni Braxton - Fairy Tale</option>
	<option value="NewsVideo/经典流行/蔡国权—不装饰你的梦.mp3">蔡国权—不装饰你的梦</option>
	<option value="NewsVideo/经典流行/蔡幸娟—问情.mp3">蔡幸娟—问情</option>
	<option value="NewsVideo/经典流行/陈百强—偏偏喜欢你.mp3">陈百强—偏偏喜欢你</option>
	<option value="NewsVideo/经典流行/陈慧琳—希望.mp3">陈慧琳—希望</option>
	<option value="NewsVideo/经典流行/陈慧娴—归来吧.mp3">陈慧娴—归来吧</option>
	<option value="NewsVideo/经典流行/陈慧娴—飘雪.mp3">陈慧娴—飘雪</option>
	<option value="NewsVideo/经典流行/陈慧娴—千千阙歌.mp3">陈慧娴—千千阙歌</option>
	<option value="NewsVideo/经典流行/陈慧娴—人生何处不相逢.mp3">陈慧娴—人生何处不相逢</option>
	<option value="NewsVideo/经典流行/陈慧娴—月半小夜曲.mp3">陈慧娴—月半小夜曲</option>
	<option value="NewsVideo/经典流行/陈绮贞 - 旅行的意义.mp3">陈绮贞 - 旅行的意义</option>
	<option value="NewsVideo/经典流行/邓丽君—漫步人生路.mp3">邓丽君—漫步人生路</option>
	<option value="NewsVideo/经典流行/笛萧&amp;古筝—笑傲江湖.mp3">笛萧&amp;古筝—笑傲江湖</option>
	<option value="NewsVideo/经典流行/儿童歌曲-听妈妈讲那过去的事情.mp3">儿童歌曲-听妈妈讲那过去的事情</option>
	<option value="NewsVideo/经典流行/高胜美—千年等一回(新白娘子传奇).mp3">高胜美—千年等一回(新白娘子传奇)</option>
	<option value="NewsVideo/经典流行/高胜美—雨伞是媒红(新白娘子传奇).mp3">高胜美—雨伞是媒红(新白娘子传奇)</option>
	<option value="NewsVideo/经典流行/李克勤—红日.mp3">李克勤—红日</option>
	<option value="NewsVideo/经典流行/李克勤—护花使者.mp3">李克勤—护花使者</option>
	<option value="NewsVideo/经典流行/李茂山--烟雨蒙蒙.mp3">李茂山--烟雨蒙蒙</option>
	<option value="NewsVideo/经典流行/李茂山—昨夜星辰.mp3">李茂山—昨夜星辰</option>
	<option value="NewsVideo/经典流行/林子祥—男儿当自强.mp3">林子祥—男儿当自强</option>
	<option value="NewsVideo/经典流行/刘德华—开心的马骝.mp3">刘德华—开心的马骝</option>
	<option value="NewsVideo/经典流行/刘德华—男人哭吧不是罪.mp3">刘德华—男人哭吧不是罪</option>
	<option value="NewsVideo/经典流行/杨千嬅 - 可惜我是水瓶座.mp3">杨千嬅 - 可惜我是水瓶座</option>
	<option value="NewsVideo/民歌/董文华 - 血染的风采.mp3">董文华 - 血染的风采</option>
	<option value="NewsVideo/中国风/李玉刚 - 国色天香.mp3">李玉刚 - 国色天香</option>

</select>
                                    <div id="DivWeChatBackgroundMusicShowFile" class="inputk" style="font-size:14px; display:none;">
                                        <strong><a href="0" target="_blank" title="点击可下载背景音乐文件">0</a></strong>&nbsp;&nbsp;
                                        <a id="LkbtUpWeChatBackgroundMusicFile" href="javascript:__doPostBack('LkbtUpWeChatBackgroundMusicFile','')">重新上传</a>
                                    </div>
                                    
							    </dd>
						    </dl>

					    </li> 
					    <li>
						    <dl>
							    <dt>名片头像：</dt>
							    <dd>
                                    <div id="DivCompanyLogoShowFile" runat="server" CssClass="inputk" style="font-size:14px;">  
                                        <strong>
                                            <a href="<?php echo ($member["CompanyLoGo"]); ?>" target="_blank" title="点击可查看图片">
                                                <img alt="名片头像" src="<?php echo ($member["SmallCompanyLogo"]); ?>" width="80" height="80" />
                                            </a>
                                        </strong>&nbsp;&nbsp;
                                        <asp:LinkButton ID='LkbtUpCompanyLogoFile' runat='server' OnClick='LkbtUpCompanyLogoFile_Click' >重新上传</asp:LinkButton>

                                    </div>
                                    <div id="DivCompanyLogoFile" runat="server" CssClass="inputk">
                                        <asp:FileUpload ID="UpCompanyLogoFile" runat="server" CssClass="inputk" Width="330px" />&nbsp;
                                        <asp:Button ID="BtnCompanyLogoUpLoad" runat="server" CssClass="inputk" OnClick="BtnCompanyLogoUpLoad_Click" Text="上  传" />
                                    </div>	
							    </dd>
						    </dl>

					    </li>   
					    <li>
						    <dl>
							    <dt>个人职称：</dt>
							    <dd>   
							        <span class="SpnLeft">
                                        <input type="text" ID="TxtJobGrade" runat="server" CssClass="inptext text-right" placeholder="请输入个人职称" maxlength="20" value="<?php echo ($member["JobGrade"]); ?>"/>
                                    </span>
							    </dd>
						    </dl>

					    </li>
					    <li>
						    <dl>
							    <dt>微信帐号：</dt>
							    <dd>
							        <span class="SpnLeft">
							            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							            <input id="TxtWeChatCode" runat="server" name="TxtCardHomeName" type="text" class="CardGuideMenuTxtName" maxlength="32" value="<?php echo ($member["WeChatCode"]); ?>" />
							        </span>
							    </dd>
						    </dl>

					    </li>
					    <li>
						    <dl>
							    <dt>公众帐号：</dt>
							    <dd>
							        <span class="SpnLeft">
							            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							            <input id="TxtWeChatPublicCode" runat="server" name="TxtCardHomeName" type="text" class="CardGuideMenuTxtName" maxlength="32" value="<?php echo ($member["WeChatPublicCode"]); ?>" />
							        </span>
							    </dd>
						    </dl>

					    </li>
					    <li>
						    <dl>
							    <dt>微博帐号：</dt>
							    <dd>
							        <span class="SpnLeft">
							            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							            <input id="TxtSmallBlogCode" runat="server" name="TxtCardHomeName" type="text" class="CardGuideMenuTxtName" maxlength="32" value="<?php echo ($member["SmallBlogCode"]); ?>" />
							        </span>
							    </dd>
						    </dl>

					    </li>    
			            <div class="title">微名片导航链接管理</div>
			            <div class="title">系统内的链接地址请不要输入http://，外网地址一定要输入http://。</div> 
					    <li>
						    <dl>
							    <dt>导航一：</dt>
							    <dd>
							        <span class="SpnLeft">
							            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							            链接地址：<input id="TxtCardHomeName" runat="server" name="TxtCardHomeName" type="text" class="CardGuideMenuTxtName" maxlength="32" value="名片首页" />
							        </span>
							        <span class="SpnLeft" ><input id="TxtCardHomePage" runat="server" name="TxtCardHomePage" type="text" class="CardGuideMenuTxtLink" maxlength="150" /></span>
							    </dd>
						    </dl>

					    </li>   
					    <li>
						    <dl>
							    <dt>导航二：</dt>
							    <dd>
							        <span class="SpnLeft">
							            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							            链接地址：<input id="TxtCardNewsName" runat="server" name="TxtCardNewsName" type="text" class="CardGuideMenuTxtName" maxlength="32" value="名片新闻" />
							        </span>
							        <span class="SpnLeft" ><input id="TxtCardNewsPage" runat="server" name="TxtCardNewsPage" type="text" class="CardGuideMenuTxtLink" maxlength="150" /></span>
							    </dd>
						    </dl>

					    </li>
					    <li>
						    <dl>
							    <dt>导航三：</dt>
							    <dd>
							        <span class="SpnLeft">
							            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							            链接地址：<input id="TxtCardProductName" runat="server" name="TxtCardProductName" type="text" class="CardGuideMenuTxtName" maxlength="32" value="名片产品" />
							        </span>
							        <span class="SpnLeft" ><input id="TxtCardProductPage" runat="server" name="TxtCardProductPage" type="text" class="CardGuideMenuTxtLink" maxlength="150" /></span>
							    </dd>
						    </dl>

					    </li>
					    <li>
						    <dl>
							    <dt>导航四：</dt>
							    <dd>
							        <span class="SpnLeft">
							            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							            链接地址：<input id="TxtCardAboutName" runat="server" name="TxtCardAboutName" type="text" class="CardGuideMenuTxtName" maxlength="32" value="关于名片" />
							        </span>
							        <span class="SpnLeft" ><input id="TxtCardAboutPage" runat="server" name="TxtCardAboutPage" type="text" class="CardGuideMenuTxtLink" maxlength="150" /></span>
							    </dd>
						    </dl>
					    </li>
					    <li style="display:none;">
						    <d>
							    <dt>创建名片：</dt>
							    <dd>
							        <span class="SpnLeft">
							            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							            链接地址：<input id="TxtCardJoinName" runat="server" name="TxtCardJoinName" type="text" class="CardGuideMenuTxtName" maxlength="32" value="创建名片" />
							        </span>
							        <span class="SpnLeft" ><input id="TxtCardJoinPage" runat="server" name="TxtCardJoinPage" type="text" class="CardGuideMenuTxtLink" maxlength="150" /></span>
							    </dd>
						    </dl>

					    </li>
					    <li style="display:none;">
						    <dl>
							    <dt>名片预定：</dt>
							    <dd>
							        <span class="SpnLeft">
							            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							            链接地址：<input id="TxtCardBookName" runat="server" name="TxtCardBookName" type="text" class="CardGuideMenuTxtName" maxlength="32" value="名片预定" />
							        </span>
							        <span class="SpnLeft" ><input id="TxtCardBookPage" runat="server" name="TxtCardBookPage" type="text" class="CardGuideMenuTxtLink" maxlength="150" /></span>
							    </dd>
						    </dl>

					    </li>
					    <li style="display:none;">
						    <dl>
							    <dt>联系名片：</dt>
							    <dd>
							        <span class="SpnLeft">
							            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							            链接地址：<input id="TxtCardContactName" runat="server" name="TxtCardContactName" type="text" class="CardGuideMenuTxtName" maxlength="32" value="联系名片" />
							        </span>
							        <span class="SpnLeft" ><input id="TxtCardContactPage" runat="server" name="TxtCardContactPage" type="text" class="CardGuideMenuTxtLink" maxlength="150" /></span>
							    </dd>
						    </dl>
					    </li>
					    <li style="display:none;">
						    <dl>
							    <dt>名片其他：</dt>
							    <dd>
							        <span class="SpnLeft">
							            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							            链接地址：<input id="TxtCardOtherName" runat="server" name="TxtCardOtherName" type="text" class="CardGuideMenuTxtName" maxlength="32" value="名片其他" />
							        </span>
							        <span class="SpnLeft" ><input id="TxtCardOtherPage" runat="server" name="TxtCardOtherPage" type="text" class="CardGuideMenuTxtLink" maxlength="150" /></span>
							    </dd>
						    </dl>

					    </li>
				    </ul>
			    </div>

			    <div class="ShopGuideMenu">
				    <ul>    
					    <li>
						    <dl>
							    <dt>&nbsp;</dt>
							    <dd>
							        <!-- 
							    <input type="button" value="确定修改" name="" class="org_bt">   如： 010-123123。
							        -->
							        <input type="submit" name="BtnAlter" value="确定修改" onclick="return CheckEmpty();" id="BtnAlter" class="org_bt">
                                    <a href="Card<%=StrMerchantUserName%>.aspx" class="org_bt" target="_blank"><img alt="" src="WebImages/WeChatCodeImage.jpg" width="100" height="40" class="jiathis_button_weixin" /></a>    
                                    <!--     
                                    <a href="Card<%=StrMerchantUserName%>.aspx" class="org_bt" target="_blank" style=" display:block;"><span class="" style="width:100px; height:40px;background:url(WebImages/OrangeButton.jpg);">微信名片</span></a>  
                                    <a class="jiathis_button_weixin">微信</a>   
                                    -->
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
          <audio id="musicPlayer" loop src="<%= GetNameCardsBackMusic(StrWeChatBackgroundMusic,"")%>" autoplay="autoplay" style="display:none;position:absolute;z-index:-11">
          </audio>
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
      
        function SetPlayerBackMusic()
        {                 
            var StrBackMusic=document.all["<%= DrpWeChatBackgroundMusicList.ClientID%>"].value; 
            document.all["musicPlayer"].src=StrBackMusic;
            var ObjAudioElement = document.getElementById("musicPlayer");
            ObjAudioElement.play();	//播放
            //alert(StrBackMusic+StrMusicPlayerValue);
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
            var sHTML = '<div class="chy_sm_fd"><div class="titchy"><H1>分享到朋友圈</h1><span onclick="window.neatDialog.close()" ></span></div><div class="contetn"><img src="WebCardImages/index_r12_c16.jpg" /></div></div> '+
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