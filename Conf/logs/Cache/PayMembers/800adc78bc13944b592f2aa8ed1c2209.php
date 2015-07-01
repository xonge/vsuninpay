<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>填写个人信息</title>
  <base href="http://xiangtan.suninpay.com:81/"></base>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta http-EQUIV="pragma" CONTENT="no-cache" />
  <meta http-EQUIV="Cache-Control" CONTENT="no-cache, must-revalidate" />
  <meta http-EQUIV="expires" CONTENT="0" />
  <!--外部样式文件-->
  <link rel="stylesheet" href="WebCss/commonHead.css?t=2014-10-22" />
  <link rel="stylesheet" href="WebCss/login.css?t=2014-10-22" />
  <link rel="stylesheet" href="WebCss/CommonFontSet.css" />
  <link rel="stylesheet" href="WebCss/reset.css" />
  <link rel="stylesheet" href="WebCss/flytip.css" />
  <!-- <link rel="stylesheet" href="WebCss/nameCard.css?v=201503011" />
  -->
  <link rel="stylesheet" href="WebCss/nameCard.css">
  <link rel="stylesheet" href="WebCss/swipebox.min.css" />
  <link href="WebCss/bootstrap.min.css" rel="stylesheet" />
  <link href="WebCss/cropper.min.css" rel="stylesheet" />
  <link href="WebCss/main.css" rel="stylesheet" />
  <link href="WebCss/uploadify/uploadify.css" rel="stylesheet" />
  <!--外部js文件-->
  <!-- <script type="text/javascript" src="WebJs/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="WebJs/util.js?v=1.0.1"></script>
<script type="text/javascript" src="WebJs/login.js"></script>
<script type="text/javascript" src="WebJs/mp.js?t=2014-10-22"></script>
-->
<style type="text/css">
* { margin: 0; padding: 0; } a { text-decoration: none; } .btn_addPic { display: block; position: relative; width: 50px; height: 50px; overflow: hidden; border: 1px solid #EBEBEB; background: none repeat scroll 0 0 #F3F3F3; color: #999999; cursor: pointer; text-align: center; background: url(CardImages/upload.png) no-repeat; background-size: 50px; vertical-align: middle; }.btn_addPic span { display: block; line-height: 39px; }.btn_addPic em { background: url(CardImages/upload.png) 0 0; display: inline-block; width: 18px; height: 18px; overflow: hidden; margin: 10px 5px 10px 0; line-height: 20em; vertical-align: middle; }.btn_addPic: hover em { background-position: -19px 0; }.filePrew { display: block; position: absolute; top: 0; left: 0; width: 140px; height: 39px; font-size: 100px; /* 增大不同浏览器的可点击区域 */ opacity: 0; /* 实现的关键点 */ filter: alpha(opacity = 0); /* 兼容IE */ }
</style>
</head>
<body class="wrap">
  <form action="" method="post">
  <div id="crop-avatar">
    <!--#=start column-->
    <div class="fillIn-title">
      用户名：<?php echo ($userinfo["UserName"]); ?>
    </div>
    <div class="fillIn-column avatar-column ">
      <ul class="fillIn-inner">
        <li class="fillIn-inner-item">
          <span class="fillIn-item-title">头像</span>
          <input type="file" id="UpHeadImageFile" Width="80px" class="" capture="camera" size="3" alt="支持jpg、jpeg、gif、png格式，文件小于5M" />
          <img id="ImgUserHead" alt="用户头像" src="" class="fillIn-avatar-thumbnail" />
          <div class="avatar-view fillIn-avatar"></div>
        </li>
      </ul>
    </div>
    <!-- Cropping modal -->
<div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <!-- <form class="avatar-form" action="crop.php" enctype="multipart/form-data"
                            method="post">
    -->
    <div class="modal-header">
      <button class="close" data-dismiss="modal" type="button">&times;</button>
      <h4 class="modal-title" id="avatar-modal-label">修改头像</h4>
    </div>
    <div class="modal-body">
      <div class="avatar-body">
        <!-- Upload image and data -->
        <div class="avatar-upload">
          <input class="avatar-src" name="avatar_src" type="hidden">
          <input class="avatar-data" name="avatar_data" type="hidden">
          <!-- <label for="avatarInput" class="" style="border:1px solid green;width:
                                        100%;height:60px;text-align: center;line-height: 60px;">选择图片或者拍照</label>
        -->
        <input class="avatar-input" style="display:block;" id="avatarInput" name="avatar_file"
                                        type="file" accept="image/*" capture="camera">
        <input id="avatarbase64" type="hidden"></input>
    </div>
    <!-- Crop and preview -->
    <div class="row">
      <div class="col-md-9">
        <div class="avatar-wrapper"></div>
      </div>
      <div class="col-md-3">
        <!-- <div class="avatar-preview preview-lg"></div>
      <div class="avatar-preview preview-md"></div>
      <div class="avatar-preview preview-sm"></div>
      -->
    </div>
  </div>
  <div class="row avatar-btns">
    <!-- <div class="col-md-9">
    <div class="btn-group">
      <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
      <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
      <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>
      <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
    </div>
    <div class="btn-group">
      <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>
      <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>
      <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
      <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
    </div>
  </div>
  -->
  <div class="col-md-3">
    <button class="btn btn-primary btn-block avatar-save" type="submit">确定修改</button>
  </div>
</div>
</div>
</div>
<!-- <div class="modal-footer">
<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
</div>
-->
<!-- </form>--></div>
</div>
</div>
<!-- /.modal -->
<!-- Loading state -->
<div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
<div class="fillIn-title">必填项目</div>
<!-- 隐藏域 -->
<input type="hidden" name="id" value="" />
<input type="hidden" name="openid" value="od8J4s9yRgK0jBRlpTp3OgfMpWJY" id="personOpenid" />
<input type="hidden" name="cardid" value="" />
<input type="hidden" name="avater" value="NewsUpload/NoHead.png" id="personAvater" />
<section class="fillIn-column">
  <ul class="fillIn-inner">
    <li class="fillIn-inner-item">
      <span class="fillIn-item-title">姓名</span>
      <input type="text" id="TxtRealName" class="inptext text-right" placeholder="请输入真实姓名" maxlength="20" value="<?php echo ($userinfo["RealName"]); ?>" /> &nbsp;&nbsp;
      <span class="FontRed">*</span>
    </li>
  </ul>
</section>
<div class="fillIn-title">选填项目</div>
<section class="fillIn-column">
  <ul class="fillIn-inner">
    <li class="fillIn-inner-item">
      <span class="fillIn-item-title">公司</span>
      <input type="text" id="TxtMerchantName" class="inptext text-right" placeholder="请输入单位名称" maxlength="32" value="<?php echo ($userinfo["MerchantName"]); ?>" />
    </li>
    <li class="fillIn-inner-item">
      <span class="fillIn-item-title">电话</span>
      <input type="text" id="TxtCompanyPhone" class="inptext text-right" placeholder="请输入单位电话" maxlength="32" value="<?php echo ($userinfo["Phone"]); ?>" />
    </li>
    <li class="fillIn-inner-item">
      <span class="fillIn-item-title">邮箱</span>
      <div class="parentCls">
        <input type="text" id="TxtEmail" class="inptext text-right inputElem" placeholder="请输入电子邮箱" maxlength="100" value="<?php echo ($userinfo["Email"]); ?>" />
      </div>
      &nbsp;&nbsp;
      <span class="FontRed">*</span>
    </li>
    <li class="fillIn-inner-item">
      <span class="fillIn-item-title">职位</span>
      <select id="DrpJobGradeList" class="fillIn-select fillIn-long-select" >
        <option value="0" Text="请点击我选择行业类别"></option>
        <option value="1" Text="董事长">董事长</option>
        <option value="2" Text="总经理">总经理</option>
        <option value="3" Text="副总">副总</option>
        <option value="4" Text="运营总监">运营总监</option>
        <option value="5" Text="市场总监">市场总监</option>
        <option value="6" Text="人事">人事</option>
        <option value="7" Text="销售经理">销售经理</option>
        <option value="8" Text="业务">业务</option>
        <option value="9" Text="客服">客服</option>
        <option value="10" Text="财务">财务</option>
        <option value="11" Text="技术部">技术部</option>
        <option value="12" Text="研发人员">研发人员</option>
        <option value="13" Text="前台">前台</option>
        <option value="14" Text="店长">店长</option>
        <option value="15" Text="导购">导购</option>
        <option value="16" Text="售后">售后</option>
      </select>
      <input type="text" id="TxtJobGrade" class="inptext text-right" placeholder="请输入个人职称" maxlength="20" visible="false" value="<?php echo ($userinfo["JobGrade"]); ?>" />
    </li>
    <li class="fillIn-inner-itemsel">
      <span class="fillIn-item-title">行业</span>
      <div class="sel">
        <select id="DrpCompanyClassList" class="fillIn-select fillIn-long-select" >
          <option value="0" Text="请点击我选择行业类别"></option>
        </select>
      </div>
    </li>
    <li class="fillIn-inner-itemsel" style="height:60px;">
      <span class="fillIn-item-title">名片背景图片</span>
      <div id="thumb_Background" style="width: auto;display:inline-block;">
        <a href="javascript:;" class="swipebox" title="Backgroundimage">
          <img src="" alt="" height="45"></a>
      </div>
      <div class="sel">
        <select id="DpdWeChatBackgroundList" class="fillIn-select fillIn-long-select">
          <option value="0" Text="请点击我选择背景图片"></option>
          <option value="NewsUpLoad/Background/1.jpg" Text="1.jpg"></option>
          <option value="NewsUpLoad/Background/2.jpg" Text="2.jpg"></option>
          <option value="NewsUpLoad/Background/3.jpg" Text="3.jpg"></option>
          <option value="NewsUpLoad/Background/4.jpg" Text="4.jpg"></option>
          <option value="NewsUpLoad/Background/5.jpg" Text="5.jpg"></option>
          <option value="NewsUpLoad/Background/6.jpg" Text="6.jpg"></option>
          <option value="NewsUpLoad/Background/7.jpg" Text="7.jpg"></option>
          <option value="NewsUpLoad/Background/8.jpg" Text="8.jpg"></option>
          <option value="NewsUpLoad/Background/9.jpg" Text="9.jpg"></option>
          <option value="NewsUpLoad/Background/10.jpg" Text="10.jpg"></option>
          <option value="NewsUpLoad/Background/11.jpg" Text="11.jpg"></option>
          <option value="NewsUpLoad/Background/12.jpg" Text="12.jpg"></option>
          <option value="NewsUpLoad/Background/13.jpg" Text="13.jpg"></option>
          <option value="NewsUpLoad/Background/14.jpg" Text="14.jpg"></option>
          <option value="NewsUpLoad/Background/15.jpg" Text="15.jpg"></option>
          <option value="NewsUpLoad/Background/16.jpg" Text="16.jpg"></option>
          <option value="NewsUpLoad/Background/17.jpg" Text="17.jpg"></option>
          <option value="NewsUpLoad/Background/18.jpg" Text="18.jpg"></option>
          <option value="NewsUpLoad/Background/19.jpg" Text="19.jpg"></option>
          <option value="NewsUpLoad/Background/20.jpg" Text="20.jpg"></option>
          <option value="NewsUpLoad/Background/21.jpg" Text="21.jpg"></option>
          <option value="NewsUpLoad/Background/22.jpg" Text="22.jpg"></option>
          <option value="NewsUpLoad/Background/23.jpg" Text="23.jpg"></option>
          <option value="NewsUpLoad/Background/24.jpg" Text="24.jpg"></option>
          <option value="NewsUpLoad/Background/25.jpg" Text="25.jpg"></option>
          <option value="NewsUpLoad/Background/26.jpg" Text="26.jpg"></option>
          <option value="NewsUpLoad/Background/27.jpg" Text="27.jpg"></option>
          <option value="NewsUpLoad/Background/28.jpg" Text="28.jpg"></option>
          <option value="NewsUpLoad/Background/29.jpg" Text="29.jpg"></option>
          <option value="NewsUpLoad/Background/30.jpg" Text="30.jpg"></option>
          <option value="NewsUpLoad/Background/31.jpg" Text="31.jpg"></option>
          <option value="NewsUpLoad/Background/32.jpg" Text="32.jpg"></option>
          <option value="NewsUpLoad/Background/33.jpg" Text="33.jpg"></option>
          <option value="NewsUpLoad/Background/34.jpg" Text="34.jpg"></option>
          <option value="NewsUpLoad/Background/35.jpg" Text="35.jpg"></option>
          <option value="NewsUpLoad/Background/36.jpg" Text="36.jpg"></option>
          <option value="NewsUpLoad/Background/37.jpg" Text="37.jpg"></option>
          <option value="NewsUpLoad/Background/38.jpg" Text="38.jpg"></option>
          <option value="NewsUpLoad/Background/39.jpg" Text="39.jpg"></option>
          <option value="NewsUpLoad/Background/40.jpg" Text="40.jpg"></option>
          <option value="NewsUpLoad/Background/41.jpg" Text="41.jpg"></option>
          <option value="NewsUpLoad/Background/42.jpg" Text="42.jpg"></option>
          <option value="NewsUpLoad/Background/43.jpg" Text="43.jpg"></option>
          <option value="NewsUpLoad/Background/44.jpg" Text="44.jpg"></option>
          <option value="NewsUpLoad/Background/45.jpg" Text="45.jpg"></option>
          <option value="NewsUpLoad/Background/46.jpg" Text="46.jpg"></option>
          <option value="NewsUpLoad/Background/47.jpg" Text="47.jpg"></option>
          <option value="NewsUpLoad/Background/48.jpg" Text="48.jpg"></option>
          <option value="NewsUpLoad/Background/49.jpg" Text="49.jpg"></option>
          <option value="NewsUpLoad/Background/50.jpg" Text="50.jpg"></option>
          <option value="NewsUpLoad/Background/51.jpg" Text="51.jpg"></option>
          <option value="NewsUpLoad/Background/52.jpg" Text="52.jpg"></option>
          <option value="NewsUpLoad/Background/53.jpg" Text="53.jpg"></option>
          <option value="NewsUpLoad/Background/54.jpg" Text="54.jpg"></option>
          <option value="NewsUpLoad/Background/55.jpg" Text="55.jpg"></option>
          <option value="NewsUpLoad/Background/56.jpg" Text="56.jpg"></option>
          <option value="NewsUpLoad/Background/57.jpg" Text="57.jpg"></option>
          <option value="NewsUpLoad/Background/58.jpg" Text="58.jpg"></option>
          <option value="NewsUpLoad/Background/59.jpg" Text="59.jpg"></option>
          <option value="NewsUpLoad/Background/60.jpg" Text="60.jpg"></option>
          <option value="NewsUpLoad/Background/61.jpg" Text="61.jpg"></option>
          <option value="NewsUpLoad/Background/62.jpg" Text="62.jpg"></option>
          <option value="NewsUpLoad/Background/63.jpg" Text="63.jpg"></option>
          <option value="NewsUpLoad/Background/64.jpg" Text="64.jpg"></option>
          <option value="NewsUpLoad/Background/65.jpg" Text="65.jpg"></option>
          <option value="NewsUpLoad/Background/66.jpg" Text="66.jpg"></option>
          <option value="NewsUpLoad/Background/67.jpg" Text="67.jpg"></option>
          <option value="NewsUpLoad/Background/68.jpg" Text="68.jpg"></option>
          <option value="NewsUpLoad/Background/69.jpg" Text="69.jpg"></option>
          <option value="NewsUpLoad/Background/70.jpg" Text="70.jpg"></option>
          <option value="NewsUpLoad/Background/71.jpg" Text="71.jpg"></option>
        </select>
      </div>
    </li>
    <li class="fillIn-inner-itemsel">
      <span class="fillIn-item-title">名片背景音乐</span>
      <div class="sel">
        <select id="DpdWeChatBackgroundMusicList"  class="fillIn-select fillIn-long-select">
          <option value="0" Text="请点击我选择背景音乐"></option>
          <option value="NewsVideo/The Eagles-加州旅馆.mp3" Text="The Eagles-加州旅馆"></option>
          <option value="NewsVideo/草蜢-宝贝对不起.mp3" Text="草蜢-宝贝对不起"></option>
          <option value="NewsVideo/陈小春-我爱的人.mp3" Text="陈小春-我爱的人"></option>
          <option value="NewsVideo/陈奕迅-十年.mp3" Text="陈奕迅-十年"></option>
          <option value="NewsVideo/邓紫棋-爱你-AINI.mp3" Text="邓紫棋-爱你-AINI"></option>
          <option value="NewsVideo/邓紫棋-龙卷风.mp3" Text="邓紫棋-龙卷风"></option>
          <option value="NewsVideo/邓紫棋-泡沫.mp3" Text="邓紫棋-泡沫"></option>
          <option value="NewsVideo/范玮琪-最重要的决定.mp3" Text="范玮琪-最重要的决定"></option>
          <option value="NewsVideo/筷子兄弟-父亲.mp3" Text="筷子兄弟-父亲"></option>
          <option value="NewsVideo/黎明-两个人的烟火.mp3" Text="黎明-两个人的烟火"></option>
          <option value="NewsVideo/田震-执着.mp3" Text="田震-执着"></option>
          <option value="NewsVideo/王杰-不浪漫罪名.mp3" Text="王杰-不浪漫罪名"></option>
          <option value="NewsVideo/许巍-完美生活.mp3" Text="许巍-完美生活"></option>
          <option value="NewsVideo/李荣浩-小芳.mp3" Text="李荣浩 - 小芳(Live)"></option>
          <option value="NewsVideo/钟汉良-何以爱情.mp3" Text="钟汉良 - 何以爱情"></option>
          <option value="NewsVideo/DJ慢摇/Alexandra Burke - Let It Go.mp3" Text="Alexandra Burke - Let It Go"></option>
          <option value="NewsVideo/草原风/凤凰传奇 - 大声唱.mp3" Text="凤凰传奇 - 大声唱"></option>
          <option value="NewsVideo/钢琴曲轻音乐/Richard Clayderman - 思乡曲.mp3" Text="Richard Clayderman - 思乡曲"></option>
          <option value="NewsVideo/经典流行/Beyond—不再犹豫.mp3" Text="Beyond—不再犹豫"></option>
          <option value="NewsVideo/经典流行/筷子兄弟—小苹果.mp3" Text="筷子兄弟—小苹果"></option>
          <option value="NewsVideo/经典流行/周传雄—关不上的窗.mp3" Text="周传雄—关不上的窗"></option>
          <option value="NewsVideo/经典流行/Beyond—大地.mp3" Text="Beyond—大地"></option>
          <option value="NewsVideo/经典流行/Beyond—光辉岁月.mp3" Text="Beyond—光辉岁月"></option>
          <option value="NewsVideo/经典流行/Beyond—海阔天空.mp3" Text="Beyond—海阔天空"></option>
          <option value="NewsVideo/经典流行/Beyond—冷雨夜.mp3" Text="Beyond—冷雨夜"></option>
          <option value="NewsVideo/经典流行/Beyond—逝去日子.mp3" Text="Beyond—逝去日子"></option>
          <option value="NewsVideo/经典流行/Beyond—岁月无声.mp3" Text="Beyond—岁月无声"></option>
          <option value="NewsVideo/经典流行/Beyond—喜欢你.mp3" Text="Beyond—喜欢你"></option>
          <option value="NewsVideo/经典流行/Beyond—真的爱你.mp3" Text="Beyond—真的爱你"></option>
          <option value="NewsVideo/经典流行/It is my life反恐背景音乐.mp3" Text="It is my life反恐背景音乐"></option>
          <option value="NewsVideo/经典流行/Joan Jett—I Hate Myself For Loving You.mp3" Text="Joan Jett—I Hate Myself For Loving You"></option>
          <option value="NewsVideo/经典流行/lady gaga - bad romance.mp3" Text="lady gaga - bad romance"></option>
          <option value="NewsVideo/经典流行/lady gaga - poker face.mp3" Text="lady gaga - poker face"></option>
          <option value="NewsVideo/经典流行/On the Floor (Ft. Pitbull).mp3" Text="On the Floor (Ft. Pitbull)"></option>
          <option value="NewsVideo/经典流行/Toni Braxton - Fairy Tale.mp3" Text="Toni Braxton - Fairy Tale"></option>
          <option value="NewsVideo/经典流行/蔡国权—不装饰你的梦.mp3" Text="蔡国权—不装饰你的梦"></option>
          <option value="NewsVideo/经典流行/蔡幸娟—问情.mp3" Text="蔡幸娟—问情"></option>
          <option value="NewsVideo/经典流行/陈百强—偏偏喜欢你.mp3" Text="陈百强—偏偏喜欢你"></option>
          <option value="NewsVideo/经典流行/陈慧琳—希望.mp3" Text="陈慧琳—希望"></option>
          <option value="NewsVideo/经典流行/陈慧娴—归来吧.mp3" Text="陈慧娴—归来吧"></option>
          <option value="NewsVideo/经典流行/陈慧娴—飘雪.mp3" Text="陈慧娴—飘雪"></option>
          <option value="NewsVideo/经典流行/陈慧娴—千千阙歌.mp3" Text="陈慧娴—千千阙歌"></option>
          <option value="NewsVideo/经典流行/陈慧娴—人生何处不相逢.mp3" Text="陈慧娴—人生何处不相逢"></option>
          <option value="NewsVideo/经典流行/陈慧娴—月半小夜曲.mp3" Text="陈慧娴—月半小夜曲" Selected="True"></option>
          <option value="NewsVideo/经典流行/陈绮贞 - 旅行的意义.mp3" Text="陈绮贞 - 旅行的意义"></option>
          <option value="NewsVideo/经典流行/邓丽君—漫步人生路.mp3" Text="邓丽君—漫步人生路"></option>
          <option value="NewsVideo/经典流行/笛萧&古筝—笑傲江湖.mp3" Text="笛萧&古筝—笑傲江湖"></option>
          <option value="NewsVideo/经典流行/儿童歌曲-听妈妈讲那过去的事情.mp3" Text="儿童歌曲-听妈妈讲那过去的事情"></option>
          <option value="NewsVideo/经典流行/高胜美—千年等一回(新白娘子传奇).mp3" Text="高胜美—千年等一回(新白娘子传奇)"></option>
          <option value="NewsVideo/经典流行/高胜美—雨伞是媒红(新白娘子传奇).mp3" Text="高胜美—雨伞是媒红(新白娘子传奇)"></option>
          <option value="NewsVideo/经典流行/李克勤—红日.mp3" Text="李克勤—红日"></option>
          <option value="NewsVideo/经典流行/李克勤—护花使者.mp3" Text="李克勤—护花使者"></option>
          <option value="NewsVideo/经典流行/李茂山--烟雨蒙蒙.mp3" Text="李茂山--烟雨蒙蒙"></option>
          <option value="NewsVideo/经典流行/李茂山—昨夜星辰.mp3" Text="李茂山—昨夜星辰"></option>
          <option value="NewsVideo/经典流行/林子祥—男儿当自强.mp3" Text="林子祥—男儿当自强"></option>
          <option value="NewsVideo/经典流行/刘德华—开心的马骝.mp3" Text="刘德华—开心的马骝"></option>
          <option value="NewsVideo/经典流行/刘德华—男人哭吧不是罪.mp3" Text="刘德华—男人哭吧不是罪"></option>
          <option value="NewsVideo/经典流行/杨千嬅 - 可惜我是水瓶座.mp3" Text="杨千嬅 - 可惜我是水瓶座"></option>
          <option value="NewsVideo/民歌/董文华 - 血染的风采.mp3" Text="董文华 - 血染的风采"></option>
          <option value="NewsVideo/中国风/李玉刚 - 国色天香.mp3" Text="李玉刚 - 国色天香"></option>
        </select>
      </div>
    </li>
    <li class="fillIn-inner-item" style="clear:both;">
      <span class="fillIn-item-title">QQ</span>
      <input type="text" id="TxtQQNumber" class="inptext text-right" placeholder="请输入QQ号码" onkeydown="ValidateNumber(event);" onpaste="ValidateClip(event);" maxlength="32" value="<?php echo ($userinfo["QQ"]); ?>" />
    </li>
    <li class="fillIn-inner-item">
      <span class="fillIn-item-title">详细地址</span>
      <input type="text" id="TxtAddress" class="inptext text-right" placeholder="请输入详细地址" maxlength="128" value="<?php echo ($userinfo["Address"]); ?>" />
    </li>
    <li class="fillIn-inner-item">
      <span class="fillIn-item-title">微信号</span>
      <input type="text" id="TxtWeChatCode" class="inptext text-right" placeholder="请输入微信帐号" maxlength="20" value="<?php echo ($userinfo["WeChatCode"]); ?>" />
    </li>
    <li class="fillIn-inner-item">
      <span class="fillIn-item-title">上传你的微信二维码</span>
      <a href="" target="_blank">
        <img id="ImgWeChatPicture" alt="用户头像" src="" class="fillIn-avatar-thumbnail" /></a>
      <input type="file" id="UpWeChatPictureFile" width="215px" class="" tabindex="3" capture="camera" size="3" alt="支持jpg、jpeg、gif、png格式，文件小于5M" />
    </li>
    <li class="fillIn-inner-item">
      <span class="fillIn-item-title">主营</span>
      <input type="text" id="TxtMainProduct" class="inptext text-right" style="width:100%;padding: 8px;box-sizing:border-box;" placeholder="请输入主营产品" maxlength="120" />
    </li>
  </ul>
  <div class="editcontent-tips">也可以点击 更多->个人信息 进入编辑模式</div>
</section>
<!--#=end column-->
</div>
<div class="create-next create-position" id="footerFixed">
  <button id="BtnSave" class="create-next-btn" onclick="BtnSave_Click" onclientclick="return CheckEmpty();">名片</button>
</div>
<!-- autoplay="autoplay"  -->
<audio id="musicPlayer" loop src="" style="display:none;position:absolute;z-index:-11"></audio>
<!--#=end page-->
<input type="hidden" value="" id="cityid" />
<input type="hidden" value="" id="provinceid" />
</div>
</form>
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/flytip.js"></script>
<script type="text/javascript" src="WebJs/validate.js"></script>
<!--来自http://res2.eqianxian.com/app_static/lib/validate.js?v=201503231714a-->
<script type="text/javascript" src="WebJs/region.js"></script>
<!--来自http://res2.eqianxian.com/app_static/lib/region.js-->
<script type="text/javascript" src="WebJs/bottomFixed.js"></script>
<!--来自http://res2.eqianxian.com/app_static/common/js/bottomFixed.js?v=201503231714a-->
<!-- <script type="text/javascript" src="WebJs/wx.js"></script>
-->
<script type="text/javascript" src="js/wx-share.js"></script>
<!--来自http://res2.eqianxian.com/app_static/common/js/wx.js?v=201503231714a-->
<script>
if (navigator.appName == "Microsoft Internet Explorer") {
  if (navigator.appVersion.match(/8./i) == '8.') {
    //是IE7，不加载dojo.js
    var js_lrz = document.createElement("script");
    js_lrz.setAttribute("src", "WebJs/lrz.pc.min.js");
    document.getElementsByTagName("head")[0].appendChild(js_lrz);
  } else {
    //加载dojo.js
    var js_lrz = document.createElement("script");
    js_lrz.setAttribute("src", "WebJs/lrz.mobile.min.js");
    document.getElementsByTagName("head")[0].appendChild(js_lrz);
  }
} else {
  var js_lrz = document.createElement("script");
  js_lrz.setAttribute("src", "WebJs/lrz.mobile.min.js");
  document.getElementsByTagName("head")[0].appendChild(js_lrz);
}
</script>
<!--html5压缩并上传图片的js库 来自https://github.com/think2011/localResizeIMG3/wiki-->
<script type="text/javascript" src="js/jquery.swipebox.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/cropper.min.js"></script>
<script src="js/main.js"></script>
<!-- <script src="js/uploadify/jquery.uploadify.min.js">--></script>
<script src="js/jquery.md5.js"></script>
<script type="text/javascript" src="js/emailAutoComplete.js"></script>
<script>
$(function() {
    var isIOS = (/iphone|ipad/gi).test(navigator.appVersion);
    if (isIOS) {
        $('#crop-avatar').on('focus', 'input', function () {
            $('#footerFixed').addClass('pos-rel');
        }).on('focusout', 'input', function () {
            $('#footerFixed').removeClass('pos-rel');
        });
    }
});
</script>
<script type="text/javascript">
            //   $(function(){
            //     /*
            //  * 微信分享6.0.2新版 API
            //  * victor
            //  */
            // //***********LOAD SDK****************
            // var LOADWXJS = document.createElement("script");
            // LOADWXJS.setAttribute("src","http://res.wx.qq.com/open/js/jweixin-1.0.0.js");
            // document.head.appendChild(LOADWXJS);
            // //***********SDK配置*******************
            // var WXJSSDK = WXJSSDK || {};
            // var WXAPI = WXAPI || {};
            // WXJSSDK.config = {
            //     debug: false, // 调试
            //     // appid: 'wxcaebd5318cdb7fa1', // 必填，公众号的唯一标识,如果提示签名无效需检查此id是否和当前绑定的js安全域名同一个公众号
            //     // timestamp: parseInt((new Date).getTime()/1000), // 必填，生成签名的时间戳
            //     // nonceStr: Math.random().toString(36).substr(2), // 必填，生成签名的随机串
            //     // signature: '',// 签名
            //     appid: '', // 必填，公众号的唯一标识,如果提示签名无效需检查此id是否和当前绑定的js安全域名同一个公众号
            //     timestamp: 0, // 必填，生成签名的时间戳
            //     nonceStr: '', // 必填，生成签名的随机串
            //     signature: '',// 签名
            //     jsApiList: ["onMenuShareTimeline","onMenuShareAppMessage","onMenuShareQQ","onMenuShareWeibo","chooseImage"] // 必填，需要使用的JS接口列表
            // };
            // WXJSSDK.signature = function (callback){
            //   // $.ajax({
            //   //  async: false,
            //   //  url: "http://v.suninpay.com/%E5%BE%AE%E4%BF%A1jssdk/sample.php",
            //   //  type: "GET",
            //   //  // data: {timestamp: WXJSSDK.config.timestamp, nonceStr: WXJSSDK.config.nonceStr, url: window.location.href.split('#')[0]},
            //   //  dataType: "JSONP",
            //   //  jsonp:,
            //   //  timeout: 5000,
            //   //  success: function(data){
            //   //    console.log('z');
            //   //    console.log(data);
            //   //    WXJSSDK.config.signature = data.signature;
            //   //    callback && callback();
            //   //  }
            //   // });
            // var url = window.location.href.split('#')[0];
            // var newurl = "http://v.suninpay.com/%E5%BE%AE%E4%BF%A1jssdk/sample.php?jsoncallback=?&url1=" + url;
            // console.log(newurl);
            // $.getJSON(newurl, function(json){
            //   console.log('z');
            //   if (json) {
            //     console.log(json);
            //     WXJSSDK.config.appid = json.appid;
            //     WXJSSDK.config.timestamp = json.timestamp;
            //     WXJSSDK.config.nonceStr = json.nonceStr;
            //     WXJSSDK.config.signature = json.signature;
            //     // WXJSSDK.config.signature = 1;
            //     console.log(WXJSSDK.config.signature);
            //     callback && callback();
            //   }
            // });
            // };
            // // 加载微信开发工具包
            // // callbacks： 是一个包含了各种回调的对象
            // WXJSSDK.load = function (callbacks){
            //   //SDK加载完成后
            //   console.log("rrrrrr");
            //   LOADWXJS.onload = function(){
            //     //注入配置信息
            //     console.log('tttttt');
            //     WXJSSDK.signature(function() {
            //       console.log('zzzzzz');
            //       console.log(WXJSSDK.config);
            //       wx.config(WXJSSDK.config);
            //     });
            //     //config信息验证后会执行ready方法
            //     wx.ready(function(){
            //       callbacks.ready && callbacks.ready();
            //     });
            //     // 接口调用成功时执行的回调函数
            //     wx.success(function(res){
            //       callbacks.success && callbacks.success();
            //     });
            //     // 接口调用失败时执行的回调函数
            //     wx.fail(function(res){
            //       $.vAlert ? $.vAlert(res.errMsg) : alert(res.errMsg);
            //       callbacks.fail && callbacks.fail();
            //     });
            //     // 接口调用完成时执行的回调函数，无论成功或失败都会执行
            //     wx.complete(function(res){
            //       callbacks.complete && callbacks.complete();
            //     });
            //     // 用户点击取消时的回调函数，仅部分有用户取消操作的api才会用到
            //     wx.cancel(function(res){
            //       callbacks.cancel && callbacks.cancel();
            //     });
            //     // 监听Menu中的按钮点击时触发的方法，该方法仅支持Menu中的相关接口
            //     wx.trigger(function(res){
            //       callbacks.trigger && callbacks.trigger();
            //     });
            //     // config信息验证失败会执行error函数
            //     wx.error(function(res){
            //       console.log(res);
            //       alert(res);
            //       $.flytip ? $.flytip(res.errMsg) : alert(res.errMsg);
            //       callbacks.error && callbacks.error();
            //     });
            //   };
            // };

            // //*************API定义*****************
            // //==============================
            // // 微信分享接口
            // //==============================
            // WXAPI.shares = function (params){
            //   wx.showOptionMenu();
            //   // 分享到朋友圈
            //   wx.onMenuShareTimeline({
            //       title: params.title, // 分享标题
            //       link: params.shareCircle ? params.shareCircle : params.link, // 分享链接
            //       imgUrl: params.imgUrl, // 分享图标
            //       success: function () {
            //       },
            //       cancel: function () {
            //       }
            //   });
            //   // 分享给朋友
            //   wx.onMenuShareAppMessage({
            //       title: params.title, // 分享标题
            //       desc: params.desc, // 分享描述
            //       link: params.shareFriend ? params.shareFriend : params.link, // 分享链接
            //       imgUrl: params.imgUrl, // 分享图标
            //       type: params.type ? params.type : "link", // 分享类型,music、video或link，不填默认为link
            //       dataUrl: params.dataUrl ? params.dataUrl : "", // 如果type是music或video，则要提供数据链接，默认为空
            //       success: function () {
            //       },
            //       cancel: function () {
            //       }
            //   });
            //   // 分享到QQ
            //   wx.onMenuShareQQ({
            //       title: params.title, // 分享标题
            //       desc: params.desc, // 分享描述
            //       link: params.shareQQ ? params.shareQQ : params.link, // 分享链接
            //       imgUrl: params.imgUrl, // 分享图标
            //       success: function () {
            //       },
            //       cancel: function () {
            //       }
            //   });
            //   // 分享到腾讯微博
            //   wx.onMenuShareWeibo({
            //       title: params.title, // 分享标题
            //       desc: params.desc, // 分享描述
            //       link: params.shareWeibo ? params.shareWeibo : params.link, // 分享链接
            //       imgUrl: params.imgUrl, // 分享图标
            //       success: function () {
            //       },
            //       cancel: function () {
            //       }
            //   });
            // };
            // });
</script>
<script type="text/javascript">
function unixtime() {
  var dt = new Date();
  var ux = Date.UTC(dt.getFullYear(), dt.getMonth(), dt.getDay(), dt.getHours(), dt.getMinutes(), dt.getSeconds()) / 1000;
  return ux;
}
var timestamp = unixtime();
            // $(function() {
            //     $('#avatarInput').uploadify({
            //         'formData': {
            //             'timestamp': timestamp,
            //             'token': $.md5(timestamp),
            //         },
            //         'swf': 'http://xiangtan.suninpay.com/js/uploadify/uploadify.swf',
            //         'uploader': 'http://v.suninpay.com/uploadify.php',
            //         'onUploadSuccess': function(file, data, response) {
            //             // alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
            //             console.log(data);
            //             // var fuck_url = data.split('/')
            //             if (data.length > 0) {
            //                 console.log('eeee');
            //                 console.log($('.avatar-save'));
            //                 $('.close').click();
            //                 $('#ImgUserHead').attr('src', 'http://v.suninpay.com/' + data);
            //             } else {
            //                 $('.avatar-save').click();
            //             }
            //         }
            //     });
            // });
</script>
<script type="text/javascript">
            // location.reload();
            //        html5上传图片，使用input
            //        var input = document.querySelector("input[type='file']");
            //        console.log(input);
            //        input.onchange = function () {
            //          lrz(this.files[0], {width: 300}, function (results) {
            //            // 你需要的数据都在这里，可以以字符串的形式传送base64给服务端转存为图片。
            //            console.log(results);
            //          });
            //        }
            //        function saveHeadImage() {
            //          $.ajax({
            //            type: "POST",
            //            url: "/app/bizcard/savePersonInfo.do",
            //            data: $('#personForm').serialize(),
            //            success: function (msg) {
            //            }
            //          });
            //        }
            //        function savePersonInfo() {
            //          //$("#saveBtn").text("正在保存...");
            //          $("#personForm").submit();
            //        }
            //        $(document).ready(function (e) {
            //          $(".fillIn-inner-item .inptext").focus(function (e) {
            //            var $this = $(this);
            //            $this.removeClass("text-right");
            //          }).focusout(function (e) {
            //            var $this = $(this),
            //              pl = $this.attr("placeholder");
            //            if ($this.val() === pl) {
            //              $this.val("");
            //            }
            //            $this.addClass("text-right");
            //          });
            //          //########----个人名片才用----
            //          ajaxListProvinces("jsProvince",
            //            function () {
            //              var provinceid = $("#provinceid").val();
            //              if (provinceid != "") {
            //                $("#jsProvince option[value=" + provinceid + "]").attr("selected", "selected");
            //                $("#jsProvince").change();
            //              }
            //            },
            //            "请选择");
            //          $("#jsProvince").on("change",
            //            function () {
            //              var province = $("#jsProvince option:selected").val();
            //              ajaxListCities("jsCity", province,
            //                function () {
            //                  var cityid = $("#cityid").val();
            //                  if (cityid != "") {
            //                    $("#jsCity option[value=" + cityid + "]").attr("selected", "selected");
            //                  }
            //                },
            //                "请选择")
            //            });
            //          //----个人名片才用----##########
            //          $("#avatarfileInput").on("change",
            //            function (e) {
            //              var files = e.target.files || e.dataTransfer.files;
            //              if ($(this).val()) {
            //                funUploadFile(files);
            //              }
            //            });
            //          var errorMsg = "";
            //          if (errorMsg) {
            //            if ($.flytip) {
            //              $.flytip(errorMsg);
            //            } else {
            //              alert(errorMsg);
            //            }
            //          }
            //          $("#footerFixed").bottomFixed();
            //          //===========微信上传图片===========
            //          console.log('fffff');
            //          WXJSSDK.load({
            //            ready: function () {
            //              WXAPI.img.images.num = 1;
            //              WXAPI.img.images.fileType = "bizcard";
            //              WXAPI.img.images.sizeRange = "0x0x300x300xfalse";
            //              console.log('gggg');
            //              $("#avatarInput").change(function () {
            //                console.log('start upload avatar');
            //                alert('jjjj');
            //                WXAPI.img.choose(function () {
            //                  WXAPI.img.upload(function (res) {
            //                    var url = res[0].url;
            //                    var path = res[0].path;
            //                    $(".fillIn-avatar-thumbnail").attr("src", url);
            //                    $("#personAvater").val(path);
            //                    saveHeadImage();
            //                  });
            //                });
            //              });
            //            }
            //          ,error: function(){
            //            console.log('error');
            //          }});
            //        });
            // var wxShareDate = {
            //   "title": "我也要一张微名片",
            //   "content": "点击进入,马上创建你的微名片",
            //   "imgUrl": "http://app.suninpay.com/app_static/app/bizCard/img/t1.jpg",
            //   "shareUrl": "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxcaebd5318cdb7fa1&redirect_uri=http://app.suninpay.com/oauth.do&response_type=code&scope=snsapi_base&state=/app/bizcard/showBizCard.do#wechat_redirect"
            // };
            // wxShareFunc(wxShareDate);
            // //微信新版分享
            // WXJSSDK.load({
            //   ready: function () {
            //     WXAPI.shares({
            //       title: wxShareDate.title,
            //       // 分享标题
            //       desc: wxShareDate.content,
            //       // 分享描述
            //       link: wxShareDate.shareUrl,
            //       // 其他分享链接
            //       imgUrl: wxShareDate.imgUrl // 分享图标
            //     })
            //   }
            // });
</script>
<script type="text/javascript">
function CheckEmpty() {
  if (document.all["TxtRealName"].value == "") {
    alert("对不起，真实姓名不能为空！");
    //document.getElementByid("SpnRealName").innerHTML = "确认密码与新密码不匹配！";
    //$("#SpnRealName").html("对不起，真实姓名不能为空！");
    document.all["TxtRealName"].focus();
    return false;
  }
                /*
if (document.all["TxtEmail"].value == "") {
alert("对不起，电子邮件不能为空！");
//$("#SpnEmail").html("对不起，电子邮件不能为空！");
document.all["TxtEmail"].focus();
return false;
}
*/
                //FomSub.submit();
}
function SetUserHeadImage() {
  //debugger;
  var StrUploadFile = document.all["UpHeadImageFile"].value;
  //alert(StrUploadFile);
  if (StrUploadFile != "" & StrUploadFile != "undefined") {
    document.getElementByid("ImgUserHead").src = StrUploadFile;
    return true;
  }
  //FomSub.submit();
}

function SetPlayerBackMusic() {
  var StrBackMusic = document.all["<%= DpdWeChatBackgroundMusicList.Clientid%>"].value;
  document.all["musicPlayer"].src = StrBackMusic;
  var ObjAudioElement = document.getElementByid("musicPlayer");
  ObjAudioElement.play(); //播放
  //alert(StrBackMusic+StrMusicPlayervalue);
}

//////只能输入数字
function OnlyInputNumber(obj, reg, inputstr) {
  // if (event.srcelement.getattribute("readonly") || event.srcelement.getattribute("disabled")) return false;
  // if (event.keycode < 46 || event.keycode > 57) return false;
  // var docsel = document.selection.createrange();
  // if (docsel.parentelement().tagname != "input") return false;
  // osel = docsel.duplicate() osel.text = "";
  // var srcrange = obj.createtextrange() osel.setendpoint("starttostart", srcrange) var str = osel.text + inputstr + srcrange.text.substr(osel.text.length) return reg.test(str)
}

function ValidateNumber(ev) {
  var e = ev.keyCode;
  //允许的有大、小键盘的数字，左右键，backspace, delete, Control + C, Control + V
  if (e != 48 && e != 49 && e != 50 && e != 51 && e != 52 && e != 53 && e != 54 && e != 55 && e != 56 && e != 57 && e != 96 && e != 97 && e != 98 && e != 99 && e != 100 && e != 101 && e != 102 && e != 103 && e != 104 && e != 105 && e != 37 && e != 39 && e != 13 && e != 8 && e != 46) {
    if (ev.ctrlKey == false) {
      //不允许的就清空!
      ev.returnvalue = "";
    } else {
      //验证剪贴板里的内容是否为数字!
      ValidateClip(ev);
    }
  }
}

//验证剪贴板里的内容是否为数字!
function ValidateClip(ev) {
  //查看剪贴板的内容!
  var content = clipboardData.getData("Text");
  if (content != null) {
    try {
      var test = parseInt(content);
      var str = "" + test;
      if (isNaN(test) == true) {
        //如果不是数字将内容清空!
        clipboardData.setData("Text", "");
      } else {
        if (str != content) clipboardData.setData("Text", str);
      }
    } catch (e) {
      //清空出现错误的提示!
      alert("粘贴出现错误!");
    }
  }
}
</script>
<script type="text/javascript" charset="utf-8">
function ChangeImage(e) {
  var src = e.target || window.event.srcElement; //获取事件源，兼容chrome/IE
  src.style.Background = 'red';

  document.getElementByid("ImgUserHead").src = src.value;
  document.getElementByid("UpHeadImageFile").value = src.value;
  alert(src.value + "OK");

  //测试chrome浏览器、IE6，获取的文件名带有文件的path路径
  //下面把路径截取为文件名
  var filename = src.value;

  alert(filename.substring(filename.lastIndexOf('\\') + 1));

  //获取文件名的后缀名（文件格式）
  alert(filename.substring(filename.lastIndexOf('.') + 1));

}
</script>
<script type="text/javascript">
;(function($) {
  $('.swipebox').swipebox();
})(jQuery);
</script>
<script type="text/javascript">
$(function() {
  $('#DpdWeChatBackgroundList').change(function(event) {
    /* Act on the event */
    console.log($(this).val());
    var newimgurl = $(this).val();
    $('#thumb_Background a').attr('href', newimgurl);
    console.log($('#thumb_Background a').attr('href'));
    $('#thumb_Background img').attr('src', newimgurl);
  });
});
</script>
<script type="text/javascript">
$(function() {
  $("input[id='UpHeadImageFile']").each(function() {
    // console.log(this);
    // $(this).click(function(event) {
    //     // console.log(this);
    //     console.log($(this).attr('id'));
    //     var xg_1 = 'xg_'+$(this).attr('id');
    //     $('.'+xg_1).text('正在选择图片');
    // })
    $(this).change(function(event) {
      // console.log(this);
      // console.log($(this).attr('id'));
      // var xg_1 = 'xg_'+$(this).attr('id');
      $('#ImgUserHead').attr('src', 'WebImages/xg.png');
    });
  });
});
</script>
</body>
</html>