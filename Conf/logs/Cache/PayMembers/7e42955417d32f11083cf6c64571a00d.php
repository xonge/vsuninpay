<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>|-二维码导航名片，亲们，我的名片可以导航啦，有永久免费版的哦，功能强大，好东西一定要推荐给大家。</title>
  <base href="http://xiangtan.suninpay.com:81/">
  <meta content="telephone=no" name="format-detection" />
  <meta content="email=no" name="format-detection" />
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script type="text/javascript" src="CardStyle/jquery-1.9.1.min.js"></script>
  <meta name="robots" content="nofollow" />
  <script type="text/javascript" src="CardStyle/mpShow.js"></script>
  <link rel="stylesheet" href="CardStyle/mpShow.css" />
  <link rel="stylesheet" href="CardStyle/btm_bar.css" />
  <script type="text/javascript">
        //var StrMerchantExtensionLink="http://<%= Request.Url.Authority%>/Register.aspx?DLid=<%= StrShowMerchantUserid%>";
        var StrMerchantExtensionLink="http://<%= Request.Url.Authority%>/Card<%= StrMerchantUserName%>.aspx";
        var StrMerchantCardsLink="http://<%= Request.Url.Authority%>/Card<%= StrMerchantUserName%>.aspx";
        //var StrMerchantWeChatCodeLink="https://wx.qq.com/<%= StrWeChatCode%>?preview";
        //var StrMerchantWeChatCodeLink="http://weixin.qq.com/r/x87E3CjEsHXPrWy-95vV";
        var StrMerchantWeChatCodeLink="<%= StrWeChatCodeLink%>";
        var StrMerchantSmallBlogCodeLink="http://t.qq.com/<%= StrSmallBlogCode%>?preview";
        var StrShareLink="http://s.jiathis.com/qrcode.php?url=" + StrMerchantExtensionLink + "";
        //var StrCardsLink="http://s.jiathis.com/qrcode.php?url=" + StrMerchantCardsLink + "";
        var StrCardsLink="<%= StrWeChatPublicCodeLink%>";
        var StrWeChatCodeLink="http://s.jiathis.com/qrcode.php?url=" + StrMerchantWeChatCodeLink + "";
        var StrSmallBlogCodeLink="http://s.jiathis.com/qrcode.php?url=" + StrMerchantSmallBlogCodeLink + "";

        //var bigCodeUrl = 'http://pic.soqi.cn/phonecode/phonecode_12458466.jpg';
        var bigCodeUrl = StrShareLink;
        //var weixinUrl = 'http://pic.soqi.cn/weixin/weixin_12458466.jpg';
        //var weixinUrl = "http://s.jiathis.com/qrcode.php?url=" + StrWeChatCodeLink + ""
        //var weixinUrl = StrWeChatCodeLink;
        var weixinUrl = "http://open.weixin.qq.com/qr/code/?username=<%= StrWeChatCode%>";
        //var weiboUrl = 'http://pic.soqi.cn/weibo/weibo_12458466.jpg';
        var weiboUrl = "http://s.jiathis.com/qrcode.php?url=" + StrSmallBlogCodeLink + ""
        //var perhomeCodeUrl = 'http://pic.soqi.cn/perHomeCode/perHomeCode_12458466.jpg';
        var perhomeCodeUrl = StrCardsLink;
        var phoneidEcr = '5F29C5B25A176F067CB0BCD31B48A3E7';
    </script>
  <script type="text/javascript" src="CardStyle/util.js"></script>
  <script type="text/javascript" src="CardStyle/templateCom.js"></script>
  <script type="text/javascript" src="CardStyle/api"></script>
  <script type="text/javascript" src="CardStyle/getscript"></script>
  <script type="text/javascript" src="CardStyle/map.js"></script>
  <style type="text/css">
        .list_page li {line-height:26px;}
        .list_page li a{ color:#663300;}
        .list_page li span {width:85px;line-height:26px;float:right;text-align:left;}
    </style>
</head>
<body>
  <form id="FomSub" runat="server">
    <div>
      <div class="div1">
        <div class="divTop" style="background-color: rgb(85, 85, 85);">
          <div class="topColumn">
            <div class="topLeft">
              <a href="http://v.suninpay.com/<?php echo U('Card/index', array('uid' => $uid));?>">我的微名片</a>
            </div>
            <div class="topCentent">
              <a href="<?php echo U('Card/create', array('uid' => $uid));?>" target="_bank">
                <span style="color: rgb(255, 255, 163);">我也要创建微名片</span>
              </a>
            </div>
            <div class="topRight">
              <a href="<?php echo U('Store/index', array('uid' => $uid));?>" target="_blank">我的微店</a>
            </div>
          </div>
        </div>
        <!-- 顶部 -->
        <div id="topSpacebar" class="divTop divTop2"></div>
        <div class="div2">
          <div id="cenContent" class="div3">
            <!-- 头部 -->
            <div id="searchbar" style="margin-top:10px;text-align:center;">
              文章搜索：
              <input type="text" id="TxtSearchKey" autocomplete="on" placeholder="请输入要搜索的文章标题" class="" style="width:160px;height:25px;" />
              <a id="LkbtSearch" class="xg_searchbtn" OnClick="LkbtSearch_Click">搜索</a>
            </div>
            <div class="div4" style="margin-top: 20px;" style="margin-top: 20px;">
              <div class="div6">
                <span id="temComName" style="font-size: 20px"><?php echo ($company); ?></span>
              </div>
            </div>
            <!-- 中部 -->
            <div class="div4" style="top:70px;margin-top: 20px;" >
              <div class="text_list">
                <div class="list_page">
                  <uc4:DivWapArticlePaging id="NewsTextList" />
                  <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                    <a href="NewContent1810.aspx" target="_blank" title="下属是“虎将”，是福也是祸！ ">
                        <?php echo (msubstr($vo["Title"],0, 13, 'utf-8', false)); ?></a>
                        <span>
                   <a href="MobileNewsAdd.aspx?AltType=2&amp;Nid=1810" target="_blank" title="下属是“虎将”，是福也是祸！ ">编辑</a>
                   <a onclick="JavaScript:return confirm('确定删除吗？一旦删除将不可恢复！');" id="NewsTextList_RptNewsList_ctl00_LkbtDelete" title="下属是“虎将”，是福也是祸！ " href="javascript:__doPostBack('NewsTextList$RptNewsList$ctl00$LkbtDelete','')">删除</a>
                </span>
                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
                  <style type="text/css">

  .f12px { font-size: 12px }
  .f14px { font-size: 14px }
  .left { FLOAT: left }
  .right { FLOAT: right }

  .DivPage a{ color: #1f3a87; text-decoration: none }
  .DivPage font { font-size: 12px; COLOR: #1f3a87; TEXT-ALIGN: center; }
  .DivPage { border: red 0px solid;color: #1f3a87;width: 100%;HEIGHT: 25px;font-size: 12px; TEXT-ALIGN: center; }
  .DivPagingBar { border:#1f3a87 0px solid;MARGIN-TOP: 5px;HEIGHT: 15px;TEXT-ALIGN: center; }
      /*
    .DivPage a{ color: #795731; text-decoration: none }     1f3a87

  .SpnCurrentPage { border:red 0px solid;FLOAT: left;width: 194px; PADDING-TOP: 7px;HEIGHT: 100% }
  .SpnChangePage { width:960px;border:blue 0px solid;FLOAT: left;width: 300px; PADDING-TOP: 7px;HEIGHT: 100% }
      */
</style>
<div class="DivPage" id="DivPage" align="center">
  <div class="DivPagingBar" id="DivPagingBar" align="center">
        <span id="SpnCurrentPage" class="SpnCurrentPage" style="margin-top:4px;float:left;">
            &nbsp;第1/23页&nbsp;[共228条]&nbsp;
        </span>
        <span id="SpnChangePage" class="SpnChangePage" style="padding-bottom:10px;">
            <span id="DtPag_SpanFirstPage" style="float:left; padding:3px 0px 3px 0px;">
                <a id="DtPag_LbtFirst" disabled="disabled">[首页]</a></span>
            <span id="DtPag_SpanUpPage" style="float:left; padding:3px 0px 3px 0px;">
                <a id="DtPag_LbtUpPage" disabled="disabled">[上页]</a></span>
            <span id="SpnDown" style="float:left; padding:3px 0px 3px 0px;">
                <a id="DtPag_LbtDownPage" href="javascript:__doPostBack('DtPag$LbtDownPage','')">[下页]</a></span>
            <span id="SpnLast" style="float:left; padding:3px 0px 3px 0px;">
                <a id="DtPag_LbtLastPage" href="javascript:__doPostBack('DtPag$LbtLastPage','')">[尾页]</a></span>
        </span>
  </div>
</div>
                </div>
              </div>
            </div>
          </div>
          <div class="divFull"></div>
        </div>
        <!-- 顶替浮动栏 -->
        <div style="height: 52px;"></div>

        <div class="divTop" style="bottom: 0px;top: inherit;">
          <div class="divBottom">
            <div class="divBtmShow" id="wanqu" style="padding-bottom: 10px;">
              <div style="width: 45%;padding-left: 28%;">
                <div class="divBtmShow1" onClick="javascript:weixinCodeShow();">微信</div>
                <a href="WechatAddFriend.aspx?MUName=<%= StrMerchantUserName%>" target="_blank">关注好友</a>
                <div class="divBtmShow1" onClick="javascript:perhomeCodeUrlShow();">公众帐号</div>
                <div class="divBtmShow1" onClick="javascript:weiboCodeShow();">微博</div>
                <a href="http://user.qzone.qq.com/<%= StrQQNumber%>
                  ">
                  <div class="divBtmShow1">QQ空间</div>
                </a>
              </div>
            </div>
            <div class="divBtm2">
              <div class="divBtm3">
                <a href="javascript:void(0);" onClick="javascript:ringUpDivShow();">
                  <div class="divBtm4">一键拨号</div>
                </a>
                <a href="sms:<?php echo ($username); ?>">
                  <div class="divBtm4" style="border-right-style: none;">发送短信</div>
                </a>
                <div class="divBtm4" style="width: 21%;border-right-style: none;">&nbsp;</div>
                <a href="javascript://" onclick="javaScript:encodeUriString(&#39;http://api.map.baidu.com/direction?origin=latlng:<%= StrBeginAddress%>|name:我的位置&amp;destination=<%= StrToAddress%>&amp;mode=driving&amp;region=<%= StrCityName%>&amp;output=html&amp;src=<%= StrCityName%>&#39;)" style="cursor:pointer;">
                  <div style="width: 20%;float: left;border-right: 1px solid #5A5A5A;">快速导航</div>
                </a>
                <a href="javascript:return void(0);" onClick="return displayit(3);">
                  <div style="width: 19%;float: left;">
                    <img style="width: 25px;margin-top: 15px;" src="./CardStyle/pin_4.png"></div>
                </a>
                <ul id="menu_list3" class="menu_font" style="bottom: 68px;background: -webkit-gradient(linear, 0 0, 0 100%, from(#636363), to(#2E2D2D), color-stop(60%, #4B4B4B));">
                  <li>
                    <a href="javascript:;" target="_blank">
                      <label>我要收藏</label>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo U('Card/register', array('uid' => $uid));?>" target="_blank">
                      <label>我要注册</label>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;" target="_bank">
                      <label >群发短信</label>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div style="position: absolute;width: 15%;left: 50%;margin-left: -33px;z-index:3;">
              <a href="javascript:void(0);">
                <img src="./CardStyle/up.png">
                <img src="./CardStyle/up-1.png" id="upShow" style="top: 0px;position: absolute;left: 0px;"></a>
            </div>
          </div>
        </div>

        <!--透明顶层遮罩层 -->
        <div id="topShadeDiv" class="divTop shadeDiv1" style="z-index: 1;opacity: 0;"></div>

        <!-- 遮罩层 -->
        <div id="shadeDiv" class="divTop shadeDiv1"></div>

        <!-- <div id="BottomImgDiv" class="divTop BottomImgDiv1" style="background-image:url(./<%= GetNameCardsPicutre(StrWeChatBackPicture)%>);center;"></div>
      -->
      <div id="BottomImgDiv" class="divTop BottomImgDiv1" style="background-image:url(CardImages/NewsListBackground.gif);center;"></div>

      <!-- 提示层 -->
      <div id="tipDiv" class="divTop shadeDiv1">
        <span class="tipSpan">正在为您规划导航路线，请稍等。。。</span>
      </div>
      <div id="shadeCen" class="divTop shadeCen1">
        <div id="divVetically" class="divVetically" style="margin-top: 466.5px;">
          <!-- loading -->
          <div id="loadingDiv" class="cenConDiv1 loadingDiv"></div>

          <div id="contentCodeCen" class="cenConDiv1">
            <span class="codeText">扫一扫，保存信息至手机通讯录</span>
            <img id="bigCode" class="code" src="http://<%= Request.Url.Authority%>
            /Card
            <%=StrMerchantUserName%>.aspx"></div>
          <div id="weixinCodeDiv" class="cenConDiv1">
            微信号：
            <%= StrWeChatCode%>
            <img id="weixinCode" class="code" src="./CardStyle/weixin_12459446.jpg" onerror="javaScript:errorImg(this,&#39;http://<%= Request.Url.Authority%>
            /images/weixinCode.jpg&#39;)">
            <br />
            <span class="codeText">扫一扫，加我微信</span>
            <br />
            <a href="weixin://contacts/profile/">
              <span id="weixinguanzhu" style="display: none; font-size: 16px; font-weight: bold;color: black;" class="codeText">添加好友</span>
            </a>
          </div>
          <div id="weiboCodeDiv" class="cenConDiv1">
            微博号：
            <%= StrSmallBlogCode%>
            <img id="weiboCode" class="code" src="./CardStyle/weiboCode.jpg" onerror="javaScript:errorImg(this,&#39;http://<%= Request.Url.Authority%>
            /images/weiboCode.jpg&#39;)">
            <br />
            <span class="codeText">扫一扫，加我微博</span>
            <br />
            <div id="weiboguanzhu">
              <span id="wb_follow_btn"></span>
            </div>
          </div>

          <div id="perCodeDiv" class="cenConDiv1">
            扫一扫，进入我的名片
            <img id="perCode" class="code" src="">
            <br />
            <span id="myPageImgSaveText" style="color: rgb(75, 173, 75);">右击图片保存</span>
          </div>

          <div id="ringDiv" class="cenConDiv1">
            <a href="tel:<%= StrCompanyPhone%>
              ">
              <span class="ringText">
                <%= StrCompanyPhone%></span>
            </a>
            <span class="ringLine"></span>
            <a href="tel:<%= StrMerchantUserName%>
              ">
              <span class="ringText">
                <%= StrMerchantUserName.Substring(0, 3) + "&nbsp;" + StrMerchantUserName.Substring(3, 4) + "&nbsp;" + StrMerchantUserName.Substring(7, 4)%></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</body>
</html>