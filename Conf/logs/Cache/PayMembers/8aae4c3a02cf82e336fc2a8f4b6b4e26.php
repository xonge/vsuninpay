<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>文章管理中心||</title>
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
					    <h2>文章管理</h2>
    				    <span id="SpnAddLink" runat="server"><a href="MerchantNewsAdd.aspx?MainID=0">发布文章</a></span>
				    </div>
				    <div class="text_list">
					    <ul class="textlist1">
					        <ul class="textlist1">
					        
            <li>
                
                <a href="NewContent367.aspx" target="_blank" title="商用宝致尊敬的各位微信玩家的一封信">
                        商用宝致尊敬的各位微信玩家的一封信</a>
                <span>
                    【2014-11-24 15:44:11】   
                    <a id="NewsTextList_RptNewsList_ctl00_LkbtUpMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl00$LkbtUpMove','')">上  移</a>
                    <a id="NewsTextList_RptNewsList_ctl00_LkbtDownMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl00$LkbtDownMove','')">下  移</a>
                    <a href="MerchantNewsAdd.aspx?MainID=6&amp;AltType=2&amp;NID=367">编 辑</a>
                    <a onclick="JavaScript:return confirm('确定要删除吗？一旦删除将不可恢复！');" id="NewsTextList_RptNewsList_ctl00_LkbtDelete" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl00$LkbtDelete','')">删  除</a>
                </span> 
            </li>
        
            <li>
                
                <a href="NewContent362.aspx" target="_blank" title="一夜负债2.5亿到身价158亿，全靠敢用人、敢分钱、敢分（权）">
                        一夜负债2.5亿到身价158亿，全靠</a>
                <span>
                    【2014-11-24 08:44:20】   
                    <a id="NewsTextList_RptNewsList_ctl01_LkbtUpMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl01$LkbtUpMove','')">上  移</a>
                    <a id="NewsTextList_RptNewsList_ctl01_LkbtDownMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl01$LkbtDownMove','')">下  移</a>
                    <a href="MerchantNewsAdd.aspx?MainID=6&amp;AltType=2&amp;NID=362">编 辑</a>
                    <a onclick="JavaScript:return confirm('确定要删除吗？一旦删除将不可恢复！');" id="NewsTextList_RptNewsList_ctl01_LkbtDelete" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl01$LkbtDelete','')">删  除</a>
                </span> 
            </li>
        
            <li>
                
                <a href="NewContent1073.aspx" target="_blank" title="喻春光： “跑得快”还要“站得稳”！">
                        喻春光： “跑得快”还要“站得稳”！</a>
                <span>
                    【2015-03-24 18:35:50】   
                    <a id="NewsTextList_RptNewsList_ctl02_LkbtUpMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl02$LkbtUpMove','')">上  移</a>
                    <a id="NewsTextList_RptNewsList_ctl02_LkbtDownMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl02$LkbtDownMove','')">下  移</a>
                    <a href="MerchantNewsAdd.aspx?MainID=6&amp;AltType=2&amp;NID=1073">编 辑</a>
                    <a onclick="JavaScript:return confirm('确定要删除吗？一旦删除将不可恢复！');" id="NewsTextList_RptNewsList_ctl02_LkbtDelete" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl02$LkbtDelete','')">删  除</a>
                </span> 
            </li>
        
            <li>
                
                <a href="NewContent347.aspx" target="_blank" title="同一件事，博士后花了90万，农民工190块搞定。">
                        同一件事，博士后花了90万，农民工1</a>
                <span>
                    【2014-11-22 17:35:00】   
                    <a id="NewsTextList_RptNewsList_ctl03_LkbtUpMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl03$LkbtUpMove','')">上  移</a>
                    <a id="NewsTextList_RptNewsList_ctl03_LkbtDownMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl03$LkbtDownMove','')">下  移</a>
                    <a href="MerchantNewsAdd.aspx?MainID=6&amp;AltType=2&amp;NID=347">编 辑</a>
                    <a onclick="JavaScript:return confirm('确定要删除吗？一旦删除将不可恢复！');" id="NewsTextList_RptNewsList_ctl03_LkbtDelete" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl03$LkbtDelete','')">删  除</a>
                </span> 
            </li>
        
            <li>
                
                <a href="NewContent1918.aspx" target="_blank" title="教你几招玩转微信个人账号！">
                        教你几招玩转微信个人账号！</a>
                <span>
                    【2015-05-23 10:32:49】   
                    <a id="NewsTextList_RptNewsList_ctl04_LkbtUpMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl04$LkbtUpMove','')">上  移</a>
                    <a id="NewsTextList_RptNewsList_ctl04_LkbtDownMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl04$LkbtDownMove','')">下  移</a>
                    <a href="MerchantNewsAdd.aspx?MainID=6&amp;AltType=2&amp;NID=1918">编 辑</a>
                    <a onclick="JavaScript:return confirm('确定要删除吗？一旦删除将不可恢复！');" id="NewsTextList_RptNewsList_ctl04_LkbtDelete" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl04$LkbtDelete','')">删  除</a>
                </span> 
            </li>
        
            <li>
                
                <a href="NewContent1916.aspx" target="_blank" title="北京住总来湘钢，寻找品牌推广大使">
                        北京住总来湘钢，寻找品牌推广大使</a>
                <span>
                    【2015-05-23 10:07:04】   
                    <a id="NewsTextList_RptNewsList_ctl05_LkbtUpMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl05$LkbtUpMove','')">上  移</a>
                    <a id="NewsTextList_RptNewsList_ctl05_LkbtDownMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl05$LkbtDownMove','')">下  移</a>
                    <a href="MerchantNewsAdd.aspx?MainID=6&amp;AltType=2&amp;NID=1916">编 辑</a>
                    <a onclick="JavaScript:return confirm('确定要删除吗？一旦删除将不可恢复！');" id="NewsTextList_RptNewsList_ctl05_LkbtDelete" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl05$LkbtDelete','')">删  除</a>
                </span> 
            </li>
        
            <li>
                
                <a href="NewContent1878.aspx" target="_blank" title="中国皇帝顺序，太全了，值得收藏 ">
                        中国皇帝顺序，太全了，值得收藏</a>
                <span>
                    【2015-05-21 21:18:54】   
                    <a id="NewsTextList_RptNewsList_ctl06_LkbtUpMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl06$LkbtUpMove','')">上  移</a>
                    <a id="NewsTextList_RptNewsList_ctl06_LkbtDownMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl06$LkbtDownMove','')">下  移</a>
                    <a href="MerchantNewsAdd.aspx?MainID=6&amp;AltType=2&amp;NID=1878">编 辑</a>
                    <a onclick="JavaScript:return confirm('确定要删除吗？一旦删除将不可恢复！');" id="NewsTextList_RptNewsList_ctl06_LkbtDelete" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl06$LkbtDelete','')">删  除</a>
                </span> 
            </li>
        
            <li>
                
                <a href="NewContent1810.aspx" target="_blank" title="下属是“虎将”，是福也是祸！ ">
                        下属是“虎将”，是福也是祸！</a>
                <span>
                    【2015-05-18 19:17:47】   
                    <a id="NewsTextList_RptNewsList_ctl07_LkbtUpMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl07$LkbtUpMove','')">上  移</a>
                    <a id="NewsTextList_RptNewsList_ctl07_LkbtDownMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl07$LkbtDownMove','')">下  移</a>
                    <a href="MerchantNewsAdd.aspx?MainID=6&amp;AltType=2&amp;NID=1810">编 辑</a>
                    <a onclick="JavaScript:return confirm('确定要删除吗？一旦删除将不可恢复！');" id="NewsTextList_RptNewsList_ctl07_LkbtDelete" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl07$LkbtDelete','')">删  除</a>
                </span> 
            </li>
        
            <li>
                
                <a href="NewContent1770.aspx" target="_blank" title="嫁给农村人做老婆，好处多多">
                        嫁给农村人做老婆，好处多多</a>
                <span>
                    【2015-05-17 12:13:07】   
                    <a id="NewsTextList_RptNewsList_ctl08_LkbtUpMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl08$LkbtUpMove','')">上  移</a>
                    <a id="NewsTextList_RptNewsList_ctl08_LkbtDownMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl08$LkbtDownMove','')">下  移</a>
                    <a href="MerchantNewsAdd.aspx?MainID=6&amp;AltType=2&amp;NID=1770">编 辑</a>
                    <a onclick="JavaScript:return confirm('确定要删除吗？一旦删除将不可恢复！');" id="NewsTextList_RptNewsList_ctl08_LkbtDelete" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl08$LkbtDelete','')">删  除</a>
                </span> 
            </li>
        
            <li>
                
                <a href="NewContent1748.aspx" target="_blank" title="【商用宝前线】所有媒体给出满分的大片出现了（注意，是所有媒体）">
                        【商用宝前线】所有媒体给出满分的大片</a>
                <span>
                    【2015-05-16 17:07:13】   
                    <a id="NewsTextList_RptNewsList_ctl09_LkbtUpMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl09$LkbtUpMove','')">上  移</a>
                    <a id="NewsTextList_RptNewsList_ctl09_LkbtDownMove" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl09$LkbtDownMove','')">下  移</a>
                    <a href="MerchantNewsAdd.aspx?MainID=6&amp;AltType=2&amp;NID=1748">编 辑</a>
                    <a onclick="JavaScript:return confirm('确定要删除吗？一旦删除将不可恢复！');" id="NewsTextList_RptNewsList_ctl09_LkbtDelete" href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl09$LkbtDelete','')">删  除</a>
                </span> 
            </li>
          

					    </ul>
					    </ul>
					    
					    <div class="list_page">              
                            
<style type="text/css">

	.DivPage { border: red 0px solid;color: #1f3a87;width: 100%; height: 45px; text-align: center;font-size: 12px;}
	.DivPage a{ color: #1f3a87; text-decoration: none }
	.DivPage a:hover { color: #1f3a87; text-decoration: none }
	.DivPagingBar {width:680px;border: #1f3a87 0px solid;  margin-top: 8px; margin-left: auto; margin-right: auto; height: 25px; text-align: center }
	   
	.SpnCurrentPage { border-right: red 0px solid; border-top: red 0px solid;float: left;border-left: red 0px solid;padding-top: 7px;border-bottom:red 0px solid;height: 100% }
	.SpnChangePage {float: left;width: 282px; line-height:20px; padding-top:4px;}
	.SpnGo { border-right: black 0px solid; border-top: black 0px solid; float: left; border-left: black 0px solid; width: 150px; border-bottom: black 0px solid; height: 100% }
	.SpnGoText { border-right: black 0px solid; color: #1f3a87;border-top: black 0px solid; float: left; border-left: black 0px solid; width: 100px; padding-top: 2px; border-bottom: black 0px solid; height: 100% }
	.SpnGoCtl { border-right: black 0px solid; padding-right: 1px; border-top: black 0px solid; padding-left: 1px; float: left; padding-bottom: 1px; border-left: black 0px solid; width: 50px; padding-top: 1px; border-bottom: black 0px solid; height: 100% }
</style>
<div id="DivPage" align="center" class="DivPage" style="margin:0 auto; padding:0; width:500px; margin-top:35px">
    <div id="DivPagingBar" align="center" class="DivPagingBar">
            
        <span id="SpnCurrentPage" class="SpnCurrentPage">
            &nbsp;第1/24页&nbsp;【共231条】&nbsp; 
        </span>
        <span id="SpnChangePage" class="SpnChangePage" style="padding-bottom:10px;">
            <span id="DtPag_SpanFirstPage" style="float:left; padding:3px 0px 3px 0px;">
                <a id="DtPag_LbtFirst" disabled="disabled">【首&nbsp;&nbsp;页】</a></span> 
            <span id="DtPag_SpanUpPage" style="float:left; padding:3px 0px 3px 0px;">
                <a id="DtPag_LbtUpPage" disabled="disabled">【上一页】</a></span>
            <span id="SpnDown" style="float:left; padding:3px 0px 3px 0px;">
                <a id="DtPag_LbtDownPage" href="javascript:__doPostBack('DtPag$LbtDownPage','')">【下一页】</a></span>
            <span id="SpnLast" style="float:left; padding:3px 0px 3px 0px;">
                <a id="DtPag_LbtLastPage" href="javascript:__doPostBack('DtPag$LbtLastPage','')">【尾&nbsp;&nbsp;页】</a></span>
        </span>
     </div>
</div>


 
					    </div>
				    </div>
			    </div>
		    </div>
		    <div class="sub_right">
			    <div class="index_peopel">
    <div class="people_id">帐号：<?php echo ($member["UserName"]); ?>，我是推广员。</div>
    <div class="people_img">
        <dl> 
            <dt><a href="MerchantUserCenter.aspx"><img src="<?php echo ($member["SmallAdvertImage"]); ?>" alt="" /></a></dt>
            <dd class="right">
                <p class="t1">【<?php echo ($member["RealName"]); ?>】</p>
                <P><span>已审核</span></P>
                <p><a href="OrdersRecharge.aspx?MainID=4" class="cz">立即充值</a></p>
            </dd>
        </dl>
        <ul>
            <li>注册时间：<?php echo ($member["AddTime"]); ?></li>
            <li>到期时间：<?php echo ($member["EndTime"]); ?></li> 
            <li>
                
                <a href="NoticeDetails.aspx?MTID=1&CTID=1&NID=27" class="xf" style="margin:auto;">续费</a></li> 
            <!-- 
            <li>
                <span>安全系数：</span>
                <span><img src="WebImages/index_r15_c18.jpg" /></span>
                <span><img src="WebImages/index_r15_c18.jpg" /></span>
                <span><img src="WebImages/index_r15_c18.jpg" /></span>
                <span><a href="MerchantSafeMessage.aspx?MainID=1">管理</a></span>
            </li>
            -->
        </ul>
    </div>
    <div class="people_money">                                                           
        <h1>现金余额：【<span class="org"><?php echo ($member["AccountUsedValue"]); ?></span>】<font>元</font></h1>
        <h1>收益余额：【<span class="org"><?php echo ($member["VirtualUsedValue"]); ?></span>】<font>元</font></h1>
    </div>   
        <!--
    <div class="botom">
        <a href="MerchantAccountShow.aspx?MainID=0">我的账户</a>  | <a href="JavaScript://">账户明细</a>
    </div>     
        -->
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
</body>
</html>