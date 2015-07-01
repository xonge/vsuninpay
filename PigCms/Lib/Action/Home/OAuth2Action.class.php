<?php

/**
 * 微信授权相关接口
 *
 *
 */

// $app_id = '';
// $app_secret = '';

class OAuth2Action extends Action {
	public $app_id;
	public $token;
	public $wx;
	// 输出demo，直接放在class里面，以后考虑提取出去
	// 微信认证链接
	public function wxurl() {
		// 在自家的token
		$v_token = $_GET['token'];
		// 测试时使用上面的
		// $wxuser = M('wxuser')->where(array('token' => $v_token))->find();
		// dump($wxuser);
		// global $app_id;
		include 'WxOAuth2.class.php';
		$oauth2 = new WxOAuth2();
		// $oauth->app_id = $this->app_id = $wxuser['appid'];
		// $this->app_id = '11111111';
		// $__set
		// echo $oauth->app_id . '<br>';
		// $oauth->app_secret = $app_secret = $wxuser['appsecret'];

		// import('MyClass.Wechatauth',APP_PATH);
		// $Wechat = new wechatauth();

		// $token = session('token'); //查看是否已经授权
		if (session('token')) {
			echo '存在session，开始删除<br>';
			session('token', null);
			echo 'session已经删除<br>';
		}
		// dump($token);

		// $wxoauth2 = M('wxoauth2');
		// 如果用户session失去，不再使用session
		// dump($token);

		// 就从数据库里面得到
		// echo 'get database';
		// echo '开始从数据库里读取access_token<br>';
		// 倒序读取指定token的access_token，就是最后存入的access_token
		// $t_wxoauth2 = $wxoauth2->where(array('openid' => $v_token))->order('id desc')->find();
		// if ($t_wxoauth2) {
		// 旧的用户，可能会重新授权
		// $expire_time = $t_wxoauth2['expire_time'];
		// 如果当前时间小于失效时间，就使用旧的access_token
		// if (time() < $expire_time) {
		//
		// dump($t_wxoauth2);
		// $this->token = $token = $t_wxoauth2;
		// } else {
		// 重新授权
		// 首先要把数组清空
		// $this->token = array();
		// }
		// } else {
		// 如果不存在此用户，就开始新的授权，不是重新授权
		// echo '您是新的用户，会开始新的授权<br>';
		// $callback = U('wxrurl', '', false, false, true);
		// $url = $wx->get_authorize_url($callback, $v_token);
		// echo '授权链接是：' . $url . '<br>';
		// echo '<a href=' . $url . '>这是新用户的授权</a><br>';
		// }

		// dump($this->token);
		// $this->app_id = $t_wxoauth2['appid'];
		// $this->app_secret = $t_wxoauth2['appsecret'];
		// die;
		// 如果是数据库结果不为空
		// dump($this->token);
		// if (isset($this->token)) {
		// dump($token);
		// $wxoauth2M('')
		// echo '类的私有变量不是空的<br>';
		// $state = $this->check_access_token($token['access_token'], $token['openid']); //检验token是否可用(成功的信息："errcode":0,"errmsg":"ok")
		// print_r($state);
		// dump($state);
		// access_token没有失效的话
		// if ($state['errcode'] !== 42001) {
		// $user_info = $this->get_user_info($token['access_token'], $token['openid']); //获取用户信息
		// dump($user_info);
		// echo $user_info['headimgurl'];
		// die;
		// $user_info['addtime'] = time();
		// foreach ($user_info as $key => $value) {
		// if (is_array($value)) {
		// $user_info[$key] = json_encode($value);
		// }
		// }
		// $wx_openid = M('wxoauth2_openid');
		// $r = $wx_openid->data($user_info)->add();
		// if ($r < 0) {
		//
		// }
		// } else {
		// echo '[access_token]失效，必须开始重新申请授权<br>';
		// 如果access_token失效，就重新申请，她的有效期是7200s，2个小时
		// $callback = U('wxrurl', '', false, false, true);
		// $url = $this->get_authorize_url($callback, $v_token);
		// echo '<a href=' . $url . '>access_token失效，请重新授权</a>';
		// }
		// }
		// 此处链接授权后，会跳转到下方处理
		// $url = $Wechat->get_authorize_url('http://twx.vjiankang.org/wsite/test/wxrurl','1');
		$referer = $_GET['referer'];
		$referer = 'http://v.suninpay.com/index.php?g=Wap&m=Red_packet&a=index&id=1&token=wfzqmi1427969786&wecha_id=o7F8auDz4SGsyIkBov3pWzA2C4jE';

		$callback = U('wxrurl', '', false, false, true);
		$appid = M('wxuser')->where(array('token' => $v_token))->getField('appid');
		$oauth2->app_id = $appid;
		// 让他知道来源网址
		// $callback = $callback . '&referer=' . $referer;
		$callback = $referer;
		echo $callback . '<br>';
		$url = $oauth2->get_authorize_url($callback, 'snsapi_base', $v_token);
		echo '<a href=' . $url . '>授权</a>';
	}

	// 微信返回字符串
	public function wxrurl() {
		include 'WxOAuth2.class.php';
		$oauth2 = new WxOAuth2();
		// 授权成功后跳转到此页面获取的信息
		// dump($_GET);
		// var_dump($this);
		// echo $this->app_id . '<br>';
		// 用户同意授权，返回用户标识
		$state = $_GET['state'];
		// 根据用户标识来确定app_id
		$wxuser = M('wxuser')->where(array('token' => $state))->find();
		// dump($wxuser);
		$oauth2->app_id = $wxuser['appid'];
		$oauth2->app_secret = $wxuser['appsecret'];
		// 用户取消授权
		if ($_GET['code'] == '') {
			// echo '用户取消授权';
			return false;
		}
		// 确认授权后会，根据返回的code获取token
		$token_arr = $oauth2->get_access_token('', '', $_GET['code']);
		// dump($token_arr);
		// 保存授权信息
		// 把当前公众号的标识写到数组
		$token_arr['token'] = $_GET['state'];
		// 时间戳
		$token_arr['creatime'] = time();
		// 把失效时间也存到数据库，7200-120，提前2分钟，为了防止出错吧
		$token_arr['expire_time'] = $token_arr['creatime'] + 7200 - 120;
		session('token', $token_arr);
		// $wxoauth2 = M('wxoauth2')->where(array('token' => $_GET['token']))->order('desc')->find();
		// 添加新的数据
		$r = M('wxoauth2')->data($token_arr)->add();
		// echo '<br>access_token => ' . $token_arr['access_token'];
		// die;
		$user_info = $oauth2->get_user_info($token_arr['access_token'], $token_arr['openid']); //获取用户信息
		// print_r($user_info);

		$user_info['addtime'] = time();
		// 把是数组的值转成json字符串，方便存数据库
		foreach ($user_info as $key => $value) {
			if (is_array($value)) {
				$user_info[$key] = json_encode($value);
			}
		}
		// 存用户信息到数据库
		$user_info['v_token'] = $token_arr['token'];
		$wx_openid = M('wxoauth2_openid');
		$r = $wx_openid->data($user_info)->add();
		if ($r < 0) {
			// 写入失败
		} else {
			echo $user_info['headimgurl'];
		}
	}

	// public function http($url, $method, $postfields = null, $headers = array(), $debug = false) {
	public function http2() {
		$url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid=APPID&secret=SECRET&code=CODE&grant_type=authorization_code';
		$ci = curl_init();
		/* Curl settings */
		$headers = array(
			'User-Agent:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36',
			'Referer:https://mp.weixin.qq.com/',
		);
		curl_setopt($ci, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, 30);
		// 跳过SSL证书检查，必须添加这个才能得到微信服务器的回应，不然得到的是拒绝访问
		curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, 0);
		// curl_setopt($ci, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ci, CURLOPT_TIMEOUT, 30);
		// curl_setopt($ci, CURLOPT_HEADER, 0);
		curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
		// curl_setopt($ci, CURLOPT_HTTPHEADER, $headers);

		switch ($method) {
			case 'POST':
				curl_setopt($ci, CURLOPT_POST, true);
				if (!empty($postfields)) {
					curl_setopt($ci, CURLOPT_POSTFIELDS, $postfields);
					$this->postdata = $postfields;
				}
				break;
		}
		curl_setopt($ci, CURLOPT_URL, $url);
		curl_setopt($ci, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ci, CURLINFO_HEADER_OUT, true);

		$response = curl_exec($ci);
		$http_code = curl_getinfo($ci, CURLINFO_HTTP_CODE);

		// if ($debug) {
		if (1) {
			echo "=====post data======\r\n";
			var_dump($postfields);

			echo '=====info=====' . "\r\n";
			print_r(curl_getinfo($ci));

			echo '=====$response=====' . "\r\n";
			print_r($response);
		}
		curl_close($ci);
		return array($http_code, $response);
	}

}
