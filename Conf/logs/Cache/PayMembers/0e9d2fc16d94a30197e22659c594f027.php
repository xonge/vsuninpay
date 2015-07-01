<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>商户基本信息修改||</title>
  <base href="http://xiangtan.suninpay.com:81/">
  <script charset="utf-8" src="KindEditor/kindeditor.js" type="text/javascript"></script>
  <script charset="utf-8" src="KindEditor/lang/zh_CN.js" type="text/javascript"></script>
  <script charset="utf-8" src="KindEditor/plugins/code/prettify.js" type="text/javascript"></script>
  <script type="text/javascript">
// KindEditor.ready(function(K) {
//       var editor1 = K.create('#TxtContent', {
//         width: '100%',
//         cssPath : 'KindEditor/plugins/code/prettify.css',
//         uploadJson : 'KindEditor/upload_json.ashx',
//         fileManagerJson : 'KindEditor/file_manager_json.ashx',
//         allowFileManager : true,
//         afterCreate : function() {
//           var self = this;
//           K.ctrl(document, 13, function() {
//             self.sync();
//             K('form[name=FomSub]')[0].submit();
//           });
//           K.ctrl(self.edit.doc, 13, function() {
//             self.sync();
//             K('form[name=FomSub]')[0].submit();
//           });
//         }
//       });
//       prettyPrint();
//     });
</script>
  <style type="text/css">
      .TxtContentStyleBB{width: 100%;height:200px;visibility:hidden;}
      .TxtContentStyle{width: 100%;height:500px;}
  </style>
  <link href="WebCss/WebSitemb.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="MobileCss/icon-weigoyi.css">
</head>
<body>
  <form>
    <div>
      <footer>
        <div class="footer">
          <div class="footer_le">
            <a href="Card<%= StrMerchantUserName%>
              .aspx"> <i class="icon-shouye"></i>
              <span class="text">微名片</span>
            </a>
          </div>
          <div class="footer_middle footer_return">
            <a href="javascript:;">
              <span class="" style="font-size: 14px;">商用宝—微文章</span>
            </a>
          </div>
          <div class="footer_ri">
            <a href="javascript:;"> <i class="icon-gouwuche"><b><em id="buy_price" class="em01" style="display: none;">0</em></b></i>
              <span class="text">微店</span>
            </a>
          </div>
        </div>
      </footer>
      <div class="mainbody">
        <div class="undata_main">
          <!-- <div class="title">商用宝—手机版文章发布系统</div>
        -->
        <div class="RequestArticleAddList">
          <ul>
            <li>
              <dl>
                <dt>&nbsp;文章标题：</dt>
                <dd>
                  <input id="TxtTitle" name="TxtTitle" type="text" class="input1" maxlength="60" />
                  <span class="FontRed">*</span>
                </dd>
              </dl>
            </li>
            <li style="display:none;">
              <dl>
                <dt>&nbsp;内容来源：</dt>
                <dd>
                  <asp:RadioButtonList id="RdbtContentClassList" RepeatDirection="Horizontal" RepeatLayout="Flow" AutoPostBack="true" OnSelectedIndexChanged="RdbtContentClassList_SelectedIndexChanged">
                    <asp:ListItem Value="1" Text="本地内容"></asp:ListItem>
                    <asp:ListItem Value="2" Text="远程网页" Selected="True"></asp:ListItem>
                  </asp:RadioButtonList>
                  <span class="FontRed">*</span>
                </dd>
              </dl>
            </li>
            <span id="SpnRemotePage" runat="server">
              <li>
                <dl>
                  <!-- <dt>远程网页：</dt>
                  <dd>
                    <input type="text" id="TxtRemotePageLink" class="input1" placeholder="请输入要获取远程网页的网址链接路径" MaxLength="256" />
                    <span class="FontRed">&nbsp;&nbsp;</span>
                    <button id="BtnGetPageLink" Text="获取远程页面内容" OnClientClick="return CheckWebLinkEmpty();" class="" OnClick="BtnGetPageLink_Click" ></button>

                  </dd> -->
                </dl>
              </li>
            </span>
            <li>
              <dl>
                <dt>文章排序：</dt>
                <dd>
                  <input id="TxtOrderSort" name="TxtOrderSort" type="text" value="0" onkeydown="ValidateNumber(event);" onpaste="ValidateClip(event);" class="input1" maxlength="20" />
                  <span class="FontRed">*</span>
                </dd>
              </dl>
            </li>
            <li>
              <dl>
                <dt>文章内容：</dt>
                <dd style="clear:both;">
                  <div type="text" id="TxtContent" class="TxtContentStyle" height="20">
                  <!-- 加载编辑器的容器 -->
<script id="container" name="content" type="text/plain" style="width:100%;height:200px;">
    这里写你的初始化内容
</script>
                  </div>
              </dd>
            </dl>
          </li>
          <li>
            <dl>
              <!-- <dt>&nbsp;</dt>
            -->
            <dd>
              <!-- <button id="BtnAlter" Text="发布文章" OnClientClick="return CheckEmpty();" class="org_bt" OnClick="BtnAlter_Click">发布文章</button>
              <a href="News<%= StrMerchantUserName%>.aspx" class="org_bt">文章列表</a> -->
            </dd>
          </dl>
        </li>
      </ul>
    </div>
  </div>

</div>

</div>
<div style="clear:both;"></div>
<button id="BtnAlter" Text="发布文章" OnClientClick="return CheckEmpty();" class="org_bt" OnClick="BtnAlter_Click">发布文章</button>
              <a href="News<%= StrMerchantUserName%>.aspx" class="org_bt">文章列表</a>
</form>
<!-- <script type="text/javascript" src="http://v.suninpay.com/third/ueditor1_4_3-utf8-php/ueditor.config.js"></script>
<script type="text/javascript" src="http://v.suninpay.com/third/ueditor1_4_3-utf8-php/ueditor.all.min.js"></script>
<script type="text/javascript">var ue = UE.getEditor('TxtContent');</script> -->
<!-- <script type="text/javascript" src="http://v.suninpay.com/third/umeditor1_2_2-utf8-php/umeditor.config.js"></script>
<script type="text/javascript" src="http://v.suninpay.com/third/umeditor1_2_2-utf8-php/umeditor.min.js"></script>
<script type="text/javascript">var ue = UE.getEditor('TxtContent');</script> -->

<!-- 样式文件 -->
<link rel="stylesheet" href="http://v.suninpay.com/third/umeditor1_2_2-utf8-php/themes/default/css/umeditor.css">
<!-- 引用jquery -->
<script src="http://v.suninpay.com/third/umeditor1_2_2-utf8-php/third-party/jquery.min.js"></script>
<!-- 配置文件 -->
<script type="text/javascript" src="http://v.suninpay.com/third/umeditor1_2_2-utf8-php/umeditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="http://v.suninpay.com/third/umeditor1_2_2-utf8-php/umeditor.js"></script>
<!-- 语言包文件 -->
<script type="text/javascript" src="http://v.suninpay.com/third/umeditor1_2_2-utf8-php/lang/zh-cn/zh-cn.js"></script>
<!-- 实例化编辑器代码 -->
<script type="text/javascript">
    $(function(){
        window.um = UM.getEditor('container', {
            /* 传入配置参数,可配参数列表看umeditor.config.js */
            toolbar: ['undo redo | bold italic underline']
        });
    });
</script>
<script type="text/javascript">
        function CheckEmpty()
        {
            if (document.all["TxtTitle"].value=="")
            {
                alert("对不起，文章标题不能为空！");
                document.all["TxtTitle"].focus();
                return false;
            }

            //return VerificateMobile(document.all["TxtMobile"].value);

//            return VerificateBodyCode(document.all["TxtBodyCode"].value);

//            return VerificateMobile(document.all["TxtMobile"].value);

            return true;
            //document.submit();
        }
  </script>
<script type="text/javascript">
        function nTabs(thisObj,Num){
        if(thisObj.className == "active")return;
        var tabObj = thisObj.parentNode.id;
        var tabList = document.getElementByid(tabObj).getElementsByTagName("li");
        for(i=0; i <tabList.length; i++){
        if (i == Num){
           thisObj.className = "active";
              document.getElementByid(tabObj+"_Content"+i).style.display = "block";
        }else{
           tabList[i].className = "normal";
           document.getElementByid(tabObj+"_Content"+i).style.display = "none";
        }
        }
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
<script type="text/javascript" src="WebJs/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
  $(function(){
    console.log($('.ke-container-default').attr('style'));
    $('.ke-container-default').attr('style','');
  })
</script>
</body>
</html>