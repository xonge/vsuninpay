<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>|</title>
  <base href="http://xiangtan.suninpay.com:81/">
  <link href="WebCss/WebSite.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <form>
    <div>
      <div class="topnav">
        <!-- 共用头部 -->
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
            <div class="box bottom10">
              <div class="title01">
                <h1 class="t1">欢迎您：【<?php echo ($member["RealName"]); ?>】&nbsp;&nbsp;<?php echo ($member["UserName"]); ?>&nbsp;&nbsp;&nbsp;&nbsp; <font><a href="MerchantAccountShow.aspx?MainID=0">我的账户</a></font></h1>
            </div>
            <div class="index_3">
              <ul>
                <li >
                  <dl>
                    <dt>
                      <a href="MerchantBasicMessage.aspx?MainID=1">
                        <img src="WebImages/1.jpg" />
                      </a>
                    </dt>
                    <dd>
                      <a href="MerchantBasicMessage.aspx?MainID=1">我的档案</a>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl>
                    <dt>
                      <a href="IdentityValidate.aspx?MainID=0">
                        <img src="WebImages/2.jpg" />
                      </a>
                    </dt>
                    <dd>
                      <a href="IdentityValidate.aspx?MainID=0">实名认证</a>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl>
                    <dt>
                      <a href="javascript:;" target="_blank">
                        <img src="WebImages/3.jpg" />
                      </a>
                    </dt>
                    <dd>
                      <a href="javascript:;" target="_blank">我的微店</a>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl>
                    <dt>
                      <a href="http://www.suninpay.com" target="_blank">
                        <img src="WebImages/4.jpg" />
                      </a>
                    </dt>
                    <dd>
                      <a href="http://www.suninpay.com" target="_blank">同城购物</a>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl>
                    <dt>
                      <a href="NoticeCenterList.aspx?MainID=0">
                        <img src="WebImages/5.jpg" />
                      </a>
                    </dt>
                    <dd>
                      <a href="NoticeCenterList.aspx?MainID=0">站内公告</a>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl>
                    <dt>
                      <a href="MerchantNewsList.aspx?MainID=6">
                        <img src="WebImages/6.jpg" />
                      </a>
                    </dt>
                    <dd>
                      <a href="MerchantNewsList.aspx?MainID=6">微信营销</a>
                    </dd>
                  </dl>
                </li>
                <li >
                  <dl>
                    <dt>
                      <a href="MerchantMessageSend.aspx?MainID=6">
                        <img src="WebImages/7.jpg" />
                      </a>
                    </dt>
                    <dd>
                      <a href="MerchantMessageSend.aspx?MainID=6">商务短信</a>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl>
                    <dt>
                      <a href="OrdersRecharge.aspx?MainID=4">
                        <img src="WebImages/8.jpg" />
                      </a>
                    </dt>
                    <dd>
                      <a href="OrdersRecharge.aspx?MainID=4">一键收款</a>
                    </dd>
                  </dl>
                </li>

                <li>
                  <dl>
                    <dt>
                      <a href="MerchantWithdrawal.aspx?MainID=3">
                        <img src="WebImages/9.jpg" />
                      </a>
                    </dt>
                    <dd>
                      <a href="MerchantWithdrawal.aspx?MainID=3">马上结算</a>
                    </dd>
                  </dl>
                </li>
</ul>
            </div>
          </div>
          <div class="box">
            <div class="title01">
              <h2>最近交易列表</h2>
              <span>
                <a href="BankTransactionList.aspx?MainID=4">网银交易记录</a>
                |
                <a href="MerchantWithdrawalList.aspx?MainID=2&ACID=2">委托提现记录</a>
                |
                <a href="MerchantWithdrawalList.aspx?MainID=2">提现记录</a>
              </span>
            </div>
            <div class="list_tab">
              <table  class="b1" cellspacing="1" cellpadding="0">
                <!-- <tr >
                  <th>交易类型</th>
                  <th>交易时间</th>
                  <th>交易金额</th>
                  <th>交易账户</th>
                  <th>状态</th>
                  <th>备注</th>
                </tr> -->
                <tbody><tr>
                  <th>交易类型</th>
                  <th>交易时间</th>
                  <th>交易金额</th>
                  <th>交易账户</th>
                  <th>状态</th>
                  <th>备注</th>
                </tr>
                                
                              <tr class="tr1">
                                <td>转账付款</td>
                                <td><span class="brown_color">2015-05-19 01:17:32</span></td>   
                                <td>1000</td>
                                <td>13789322528</td> 
                                <td>
                                    <span style="display:"></span>
                                    <span class="FontGreen">交易成功</span>
                                    
                                    <!-- 
                                    <input id="BtnEdit" name="" type="button" value="继续付款" class="OrangeButton"  onclick="ShowAlterValue(1896)" style="display:none" />
                                    -->
                                </td>
                                <td>转账付款交易</td>
                              </tr>
                                    
                              <tr class="tr2">
                                <td>订单充值</td>
                                <td><span class="brown_color">2015-05-18 15:53:08</span></td>   
                                <td>1895</td>
                                <td>13789322528</td> 
                                <td>
                                    <span style="display:"></span>
                                    <span class="FontGreen">交易成功</span>
                                    
                                    <!-- 
                                    <input id="BtnEdit" name="" type="button" value="继续付款" class="OrangeButton"  onclick="ShowAlterValue(1893)" style="display:none" />
                                    -->
                                </td>
                                <td>订单充值交易</td>
                              </tr>
                                    
                              <tr class="tr1">
                                <td>订单充值</td>
                                <td><span class="brown_color">2015-05-18 15:46:28</span></td>   
                                <td>2346</td>
                                <td>13789322528</td> 
                                <td>
                                    <span style="display:"></span>
                                    <span class="FontGreen">交易成功</span>
                                    
                                    <!-- 
                                    <input id="BtnEdit" name="" type="button" value="继续付款" class="OrangeButton"  onclick="ShowAlterValue(1892)" style="display:none" />
                                    -->
                                </td>
                                <td>订单充值交易</td>
                              </tr>
                                    
                              <tr class="tr2">
                                <td>订单充值</td>
                                <td><span class="brown_color">2015-05-15 15:58:23</span></td>   
                                <td>1858</td>
                                <td>13789322528</td> 
                                <td>
                                    <span style="display:"></span>
                                    <span class="FontGreen">交易成功</span>
                                    
                                    <!-- 
                                    <input id="BtnEdit" name="" type="button" value="继续付款" class="OrangeButton"  onclick="ShowAlterValue(1875)" style="display:none" />
                                    -->
                                </td>
                                <td>订单充值交易</td>
                              </tr>
                                    
                              <tr class="tr1">
                                <td>订单充值</td>
                                <td><span class="brown_color">2015-05-15 15:55:31</span></td>   
                                <td>976</td>
                                <td>13789322528</td> 
                                <td>
                                    <span style="display:"></span>
                                    <span class="FontGreen">交易成功</span>
                                    
                                    <!-- 
                                    <input id="BtnEdit" name="" type="button" value="继续付款" class="OrangeButton"  onclick="ShowAlterValue(1873)" style="display:none" />
                                    -->
                                </td>
                                <td>订单充值交易</td>
                              </tr>
                                    
                              <tr class="tr2">
                                <td>订单充值</td>
                                <td><span class="brown_color">2015-05-15 15:52:32</span></td>   
                                <td>976</td>
                                <td>13789322528</td> 
                                <td>
                                    <span style="display:"></span>
                                    <span class="FontGreen">交易成功</span>
                                    
                                    <!-- 
                                    <input id="BtnEdit" name="" type="button" value="继续付款" class="OrangeButton"  onclick="ShowAlterValue(1871)" style="display:none" />
                                    -->
                                </td>
                                <td>订单充值交易</td>
                              </tr>
                                    
                              <tr class="tr1">
                                <td>订单充值</td>
                                <td><span class="brown_color">2015-05-15 15:50:38</span></td>   
                                <td>752</td>
                                <td>13789322528</td> 
                                <td>
                                    <span style="display:"></span>
                                    <span class="FontGreen">交易成功</span>
                                    
                                    <!-- 
                                    <input id="BtnEdit" name="" type="button" value="继续付款" class="OrangeButton"  onclick="ShowAlterValue(1870)" style="display:none" />
                                    -->
                                </td>
                                <td>订单充值交易</td>
                              </tr>
                                    
                              <tr class="tr2">
                                <td>订单充值</td>
                                <td><span class="brown_color">2015-05-15 15:46:38</span></td>   
                                <td>2852</td>
                                <td>13789322528</td> 
                                <td>
                                    <span style="display:"></span>
                                    <span class="FontGreen">交易成功</span>
                                    
                                    <!-- 
                                    <input id="BtnEdit" name="" type="button" value="继续付款" class="OrangeButton"  onclick="ShowAlterValue(1867)" style="display:none" />
                                    -->
                                </td>
                                <td>订单充值交易</td>
                              </tr>
                                    
                              <tr class="tr1">
                                <td>订单充值</td>
                                <td><span class="brown_color">2015-05-15 15:45:23</span></td>   
                                <td>1568</td>
                                <td>13789322528</td> 
                                <td>
                                    <span style="display:"></span>
                                    <span class="FontGreen">交易成功</span>
                                    
                                    <!-- 
                                    <input id="BtnEdit" name="" type="button" value="继续付款" class="OrangeButton"  onclick="ShowAlterValue(1866)" style="display:none" />
                                    -->
                                </td>
                                <td>订单充值交易</td>
                              </tr>
                                    
                              <tr class="tr2">
                                <td>转账付款</td>
                                <td><span class="brown_color">2015-05-11 11:26:53</span></td>   
                                <td>10</td>
                                <td>13808412184</td> 
                                <td>
                                    <span style="display:"></span>
                                    <span class="FontGreen">交易成功</span>
                                    
                                    <!-- 
                                    <input id="BtnEdit" name="" type="button" value="继续付款" class="OrangeButton"  onclick="ShowAlterValue(1849)" style="display:none" />
                                    -->
                                </td>
                                <td>转账付款交易</td>
                              </tr>
                                    
                              <tr class="tr1">
                                <td>转账付款</td>
                                <td><span class="brown_color">2015-05-11 11:26:19</span></td>   
                                <td>10</td>
                                <td>13789322528</td> 
                                <td>
                                    <span style="display:"></span>
                                    <span class="FontGreen">交易成功</span>
                                    
                                    <!-- 
                                    <input id="BtnEdit" name="" type="button" value="继续付款" class="OrangeButton"  onclick="ShowAlterValue(1848)" style="display:none" />
                                    -->
                                </td>
                                <td>转账付款交易</td>
                              </tr>
                                    
                              <tr class="tr2">
                                <td>转账付款</td>
                                <td><span class="brown_color">2015-04-30 15:45:09</span></td>   
                                <td>154</td>
                                <td>13808412184</td> 
                                <td>
                                    <span style="display:"></span>
                                    <span class="FontGreen">交易成功</span>
                                    
                                    <!-- 
                                    <input id="BtnEdit" name="" type="button" value="继续付款" class="OrangeButton"  onclick="ShowAlterValue(1833)" style="display:none" />
                                    -->
                                </td>
                                <td>转账付款交易</td>
                              </tr>
                                    
              </tbody>
            </table>
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
        <div class="sub_announce" style="margin-top:17px;">
          <div class="title01">
            <h1>系统公告</h1>
          </div>
          <div class="content">
            <ul class="text01">
              
				                
        <li>
            
            <a href="NoticeContent36.aspx" target="_blank" title="紧急通知：警惕不法分子冒用宝付名义盗用客户信息" class="m1-1a">
                    紧急通知：警惕不法分子冒用宝付</a>
        </li>
    
        <li>
            
            <a href="NoticeContent35.aspx" target="_blank" title="商用宝新功能升级说明" class="m1-1a">
                    商用宝新功能升级说明</a>
        </li>
    
        <li>
            
            <a href="NoticeContent25.aspx" target="_blank" title="商用宝—国庆节期间下发安排通知" class="m1-1a">
                    商用宝—国庆节期间下发安排通知</a>
        </li>
    
        <li>
            
            <a href="NoticeContent24.aspx" target="_blank" title="各大银行信用卡申请进度查询" class="m1-1a">
                    各大银行信用卡申请进度查询</a>
        </li>
    
        <li>
            
            <a href="NoticeContent23.aspx" target="_blank" title="宝付民生银行信用卡限额调整" class="m1-1a">
                    宝付民生银行信用卡限额调整</a>
        </li>
    
        <li>
            
            <a href="NoticeContent22.aspx" target="_blank" title="宝付网络科技（上海）有限公司各大银行网银支付限额表（共79家）" class="m1-1a">
                    宝付网络科技（上海）有限公司各</a>
        </li>
    
        <li>
            
            <a href="NoticeContent19.aspx" target="_blank" title="2014年端午节假期业务受理及值班安排的公告" class="m1-1a">
                    2014年端午节假期业务受理及</a>
        </li>
    
        <li>
            
            <a href="NoticeContent18.aspx" target="_blank" title="端午节放假通知" class="m1-1a">
                    端午节放假通知</a>
        </li>
    
        <li>
            
            <a href="NoticeContent17.aspx" target="_blank" title="公司新代理广付宝手机刷卡器秒到账，订购请留言" class="m1-1a">
                    公司新代理广付宝手机刷卡器秒到</a>
        </li>
    
        <li>
            
            <a href="NoticeContent16.aspx" target="_blank" title="银行一般会针对以下信用卡用户提高额度" class="m1-1a">
                    银行一般会针对以下信用卡用户提</a>
        </li>
    
        <li>
            
            <a href="NoticeContent15.aspx" target="_blank" title="工行限额规则：个人网上银行交易规则" class="m1-1a">
                    工行限额规则：个人网上银行交易</a>
        </li>
    
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

    </script></body>
</html>