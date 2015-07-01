<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="description" content="Common form elements and layouts">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>设置公众号信息_<?php echo ($f_siteName); ?></title>

  <link href="tpl/static/demo/a.css" media="all" rel="stylesheet" type="text/css">
<link href="tpl/static/demo/a1.css" media="all" rel="stylesheet" type="text/css">
<link href="tpl/static/demo/ace.css" media="all" rel="stylesheet" type="text/css">
<link href="tpl/static/demo/a2.css" media="all" rel="stylesheet" type="text/css">
</head>

<body data-spy="scroll" data-target="#nav-sidebar" class="gl-body">
  <div class="gl-top"></div>

  <div class="gl-main row" style="margin:0">
    <div class="gl-content col-sm-12">
      <div class="gl-ct-inner1">
  <form accept-charset="UTF-8" action="<?php echo U('Index/upsave');?>" class="new_wx_mp_user" data-validate="true" id="new_wx_mp_user" method="post" novalidate="novalidate">
    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
    <input class="px" name="headerpic" type="hidden" id="pic" value="<?php echo ($info["headerpic"]); ?>" size="60">
    <input type="hidden" name="token" value="<?php echo ($info["token"]); ?>" class="px" tabindex="1" size="40">
    <input type="hidden" class="px" id="province" value="<?php echo ($info["province"]); ?>" name="province" tabindex="1" size="20">
    <input id="city" value="<?php echo ($info["city"]); ?>" type="hidden" name="city" class="px" tabindex="1" size="20">
    <h3>设置公众号信息<small class="margin-left-10"></small></h3>

    <div class="form-group">
      <label>公众号名称<span class="required-star">*</span></label><a href="https://mp.weixin.qq.com/" class="pull-right font-size13" target="_blank" style="margin-left:20px;">点击到公众平台查看</a>&nbsp;&nbsp;<a href="/tpl/static/getoid.htm" class="pull-right font-size13 green" target="_blank">查看帮助</a>
      <div class="clearfix">
        <input data-validate="true" class="form-control" value="<?php if($info['wxname'] != '测试公众号'): echo ($info["wxname"]); endif; ?>" id="wx_mp_user_name" name="wxname" placeholder="您的公众号名称" size="30" type="text">
      </div>
    </div>

    <div class="form-group">
      <label>原始ID<span class="required-star">*</span></label>
      <div class="clearfix">
        <input data-validate="true" class="form-control" value="<?php if($info['wxid'] != 'demo'): echo ($info["wxid"]); endif; ?>" id="wx_mp_user_uid" name="wxid" placeholder="您的公众平台ID 如：gh_4324d72a21" size="30" type="text">
      </div>
    </div>

    <div class="form-group">
      <label>微信号<span class="required-star">*</span></label>
      <div class="clearfix">
        <input data-validate="true" class="form-control" value="<?php if($info['weixin'] != 'demo'): echo ($info["weixin"]); endif; ?>" id="wx_mp_user_nickname" name="weixin" placeholder="您的公众平台微信号" size="30" type="text">
      </div>
    </div>
    
    <div class="form-group">
      <label>AppID</label>
      <div class="clearfix">
        <input data-validate="true" class="form-control" value="<?php echo ($info["appid"]); ?>" id="wx_mp_user_appid" name="appid" placeholder="只有服务号和认证订阅号需要填写" size="30" type="text">
      </div>
    </div>
    
    <div class="form-group">
      <label>AppSecret</label>
      <div class="clearfix">
        <input data-validate="true" class="form-control" value="<?php echo ($info["appsecret"]); ?>" id="wx_mp_user_appsecret" name="appsecret" placeholder="只有服务号和认证订阅号需要填写" size="30" type="text">
      </div>
    </div>
    <input type="hidden" name="demoStep" value="1" />



    <div class="form-group" style="text-align:center">
      <input class="btn btn-primary form-control" value="保存并进入下一步：绑定公众号" type="submit">
      <br>
       <br>
 <a href="<?php echo U('Function/index',array('id'=>$info['id'],'token'=>$info['token']));?>">还没公众号，先不设置了</a>
    </div>
</form>
<script>//<![CDATA[
if(window.ClientSideValidations===undefined)window.ClientSideValidations={};window.ClientSideValidations.disabled_validators=[];window.ClientSideValidations.number_format={"separator":".","delimiter":","};if(window.ClientSideValidations.patterns===undefined)window.ClientSideValidations.patterns = {};window.ClientSideValidations.patterns.numericality=/^(-|\+)?(?:\d+|\d{1,3}(?:\,\d{3})+)(?:\.\d*)?$/;if(window.ClientSideValidations.forms===undefined)window.ClientSideValidations.forms={};window.ClientSideValidations.forms['new_wx_mp_user'] = {"type":"ActionView::Helpers::FormBuilder","input_tag":"<span id=\"input_tag\" /><label class=\"error-message\" for=\"\"><i></i><em></em></label>","label_tag":"<label id=\"label_tag\" />","validators":{"wxname":{"presence":[{"message":"\u4e0d\u80fd\u4e3a\u7a7a"}]},"weixin":{"presence":[{"message":"\u4e0d\u80fd\u4e3a\u7a7a"}]},"wxid":{"presence":[{"message":"\u4e0d\u80fd\u4e3a\u7a7a"}]}}};
//]]></script>  <div class="clearfix"></div>
</div>

    </div>
  </div>

  <script src="tpl/static/demo/j.js" type="text/javascript"></script><a style="position: fixed; z-index: 2147483647; display: none;" title="" href="#top" id="scrollTop"></a>



  




</body></html>