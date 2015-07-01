<?php 
//入口文件
@require "pay.php";
$packet = new Packet();
//获取用户信息
$get = $_GET['param'];
$code = $_GET['code'];
$zj = $_GET['zj'];
//判断code是否存在
if($get=='access_token' && !empty($code)){
	$param['param'] = 'access_token';
	$param['code'] = $code;
    if ($zj == 1) {
//        echo 'zj';die;
        $packet->_route('wxpacket', array('openid' => $code));
        die;
    }
	//获取用户openid信息
	$userinfo = $packet->_route('userinfo',$param);
	if(empty($userinfo['openid'])){
		exit("NOAUTH");
	}
	//调取支付方法

    $packet->_route('wxpacket', array('openid' => $userinfo['openid']));

}else{
	$packet->_route('userinfo');
}
