<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>站点配置</title>
<link href="<?php echo RES;?>/images/main.css" type="text/css" rel="stylesheet">
<link href="<?php echo RES;?>/images/jquery-1.7.2.min.js" type="text/css" rel="stylesheet">
<link href="<?php echo RES;?>/images/jquery.form.js" type="text/css" rel="stylesheet">
<meta http-equiv="x-ua-compatible" content="ie=7" />
</head>
<body class="warp">
<style>
.set_top{background:url('<?php echo RES;?>/images/set_top.png');height:60px;}
.set_top li{font-weight: bold;float:left;width:98px;line-height:60px;text-align: center;background:url('<?php echo RES;?>/images/set_top_li.png');}
#set_top_li_bg{background:url('<?php echo RES;?>/images/set_top_li_hover.png');}
</style>
<div class="set_top">
	<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if(ACTION_NAME == $vo['name']): ?>id="set_top_li_bg"<?php endif; ?>><a href="<?php echo U($action.'/'.$vo['name'],array('pid'=>6,'level'=>3));?>"><?php echo ($vo['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div id="artlist">
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="addn">

<style type="text/css">
.select_style {width:270px; height:30px; overflow:hidden; background-color: #b2aba7;);
border:1px solid #ccc;
-moz-border-radius: 5px; /* Gecko browsers */
-webkit-border-radius: 5px; /* Webkit browsers */
border-radius:5px;
}
.select_style select { padding:5px; background:transparent; width:268px; font-size: 16px; border:none; height:30px;
-webkit-appearance: none; /*for Webkit browsers*/
}
</style>

 <form id="myform" action="<?php echo U('Site/themes_up');?>" method="post">

    <tr> 
      <td width="10%"  height="48"  align="right"><strong>选择前台模版：</strong></td>
      <td  align="left"> 

        <script language="JavaScript" type="text/javascript" >
        function setBeerIcon() {
          var rtl1=document.getElementById("beer");
          // alert(rtl1.options[rtl1.selectedIndex].value);
          beerIcon.src = "<?php echo RES;?>/images/themes/"+rtl1.options[rtl1.selectedIndex].value+".png";
        }
        </script>



      <div class="select_style">
        <select name="beer" id="beer" onChange="setBeerIcon();">
		   <option value="bbs52jscncom">锦尚中国原创风格01</option>
		   <option value="pigcms">小猪风格</option>		   
        </select>
        </div>


    </td>
      <td width="82%"  align="center">&nbsp;</td><br />
<br />


      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img  border="0" src="<?php echo RES;?>/images/themes/bbs52jscncom.png" id="beerIcon" />

<br /><br />
    <tr> 


      <td height="48" colspan="3">
      <div id="addkey"></div>
      <div style="padding-left:100px;">
      <input type="submit" value="保存设置" />
      </div>
    </td>
    </tr>


  </form>




</table><br />
<br />
<br />

</div>
</body>
</html>