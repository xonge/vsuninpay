<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 微信公众平台源码,微信机器人源码,微信自动回复源码 PigCms多用户微信营销系统</title>
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
 <script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=<?php echo $apikey;?>&v=1.1&services=true"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
 <script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<style type="text/css">
body, html {width: 100%;height: 100%;overflow: hidden;margin:0;}
#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;}
#l-map{height:100%;width:100%;}
</style>
</head>
<body id="nv_member">
<input type="hidden" id="longitude" value="0" />
<input type="hidden" id="latitude" value="0" />
<div class="ftip" style="margin:0">输入地址快速定位：<input type="text" id="suggestId" value="" class="px" size="40" name="place" data-rule-required="true" /> <button class="btnGreens" type="button" onClick="fun_search();">搜索</button>&nbsp&nbsp&nbsp单击鼠标确定</div>
<div id="l-map"><i class="icon-spinner icon-spin icon-large"></i>地图加载中...
</div>
<script type="text/javascript">
if (art.dialog.data('longitude')) {
	document.getElementById('longitude').value = art.dialog.data('longitude');// 获取由主页面传递过来的数据
	document.getElementById('latitude').value = art.dialog.data('latitude');
};

var map = new BMap.Map("l-map");
var point = new BMap.Point($('#longitude').val(),$('#latitude').val());
map.centerAndZoom(point,12);
map.enableScrollWheelZoom();                            //启用滚轮放大缩小
function myFun(result){
	var cityName = result.name;
	if($('#longitude').val()==0||$('#longitude').val()==''){
		map.setCenter(cityName);
		p = new BMap.Point(result.center.lng,result.center.lat);
	}else{
		p = new BMap.Point($('#longitude').val(),$('#latitude').val());
	}
	var marker = new BMap.Marker(p);
	marker.enableDragging();
	map.addOverlay(marker);

	marker.addEventListener("dragend", function(e){
		$('#longitude').attr('value',e.point.lng)
		$('#latitude').attr('value',e.point.lat)
	})
}

var myCity = new BMap.LocalCity();
var p=myCity.get(myFun);
//添加鱼骨控件
map.addControl(new BMap.NavigationControl());
map.addEventListener("click", function(e){
			if(confirm("确认选择这个位置？")){
				destPoint = e.point;
				var origin = artDialog.open.origin;
				var longitudeinput = origin.document.getElementById('longitude');
				var latitudeinput = origin.document.getElementById('latitude');
				longitudeinput.value = destPoint.lng;
				latitudeinput.value = destPoint.lat;
				art.dialog.close();
				map.clearOverlays();
				var marker1 = new BMap.Marker(destPoint);  // 创建标注
				map.addOverlay(marker1); 
			}
		});

//智能搜索Localsearch类
var options = {renderOptions: {map: map, panel: "results"}};
var myLocalsearch = new BMap.LocalSearch(map,options);
//模糊查询search方法
function fun_search(){
    var value_keyword_1 = document.getElementById("suggestId").value;
    myLocalsearch.search(value_keyword_1);
}
</script>
</body>
</html>