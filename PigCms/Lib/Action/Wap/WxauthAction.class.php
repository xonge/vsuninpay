<?php

class WxauthAction extends BaseAction {
    //高级功能-》开发者模式-》获取
    // private $app_id = 'wxa0c4*************';
    // private $app_secret = 'e095b6dc**********************';
    // private $app_id = 'wxf44f5e407cb908a3';
    // private $app_secret = '34c072e1743b20a77e3e67ef5bcb90b3';
    private $token = array();
    private $app_id = '';
    public $app_secret = '';

    function __construct() {
        $this->app_id = 'wx5d06b443e344a78b';
    }

    public function redirect() {
        $redirect_url = $this->_get['url'];

        if (!$redirect_url) {
//            $redirect_url = 'http://union.suninpay.com/wap/index.php?ctl=register';
            $redirect_url = urlencode('http://v.suninpay.com/' . U('get_access_token_test'));
        }
        $this->app_id = 'wx5d06b443e344a78b';
        $wx['appid'] = 'wx5d06b443e344a78b';

        $wx['authorize_url'] = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=' . $wx['appid'] . '&redirect_uri=' . $redirect_url . '&response_type=code&scope=snsapi_base&state=123#wechat_redirect';
//        $wx['authorize_url'] = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=' . $wx['appid'] . '&redirect_uri=' . $redirect_url . '&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect';

        header('Location:' . $wx['authorize_url']);
    }

    public function get_access_token_test() {
        $wx['code'] = $this->_get('code');
        $wx['state'] = $this->_get('state');
        echo $wx['code'];
        echo $wx['state'];
        $app_id = $this->app_id;
        $map['appid'] = $app_id;
        $wxuser = M('wxuser')->where($map)->find();
        $app_secret = $wxuser['appsecret'];
        echo $app_id;
        $token_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$app_id}&secret={$app_secret}&code={$wx['code']}&grant_type=authorization_code";
        $token_data = $this->http($token_url);
        // echo $token_url . '<br>';
        var_dump($token_data);
//        exit;
        if ($token_data[0] == 200) {
//            return json_decode($token_data[1], true);
            $json_data = json_decode($token_data[1], true);
            $openid = $json_data['openid'];
            $url = 'http://union.suninpay.com/wap//index.php?ctl=register' .
                '&openid=' . $openid . '&forhongbao=1';
            header('Location:' . $url);
        }

        return FALSE;
    }

    // public function __get($property_name) {
    // 	echo "在直接获取私有属性值的时候，自动调用了这个__get()方法<br>";
    // 	if (isset($this->$property_name)) {
    // 		return ($this->$property_name);
    // 	} else {
    // 		return (NULL);
    // 	}
    // }

    // public function __set($property_name, $value) {
    // 	echo "在直接设置私有属性值的时候，自动调用了这个__set()方法为私有属性赋值<br>";
    // 	$this->$property_name = $value;
    // }

    /**
     * 获取微信授权链接
     *
     * @param string $redirect_uri 跳转地址
     * @param mixed $state 参数
     */
    public function get_authorize_url($redirect_uri = '', $scope, $state = '') {
        $redirect_uri = urlencode($redirect_uri);
        return "https://open.weixin.qq.com/connect/oauth2/authorize?appid={$this->app_id}&redirect_uri={$redirect_uri}&response_type=code&scope={$scope}&state={$state}#wechat_redirect";
    }

    /**
     * 获取授权token
     *
     * @param string $code 通过get_authorize_url获取到的code
     */
    public function get_access_token($app_id = '', $app_secret = '', $code = '') {
        // $token_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$this->app_id}&secret={$this->app_secret}&code={$code}&grant_type=authorization_code";
        $app_id = empty($app_id) ? $this->app_id : $app_id;
        $app_secret = empty($app_secret) ? $this->app_secret : $app_secret;
        $token_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$app_id}&secret={$app_secret}&code={$code}&grant_type=authorization_code";
        $token_data = $this->http($token_url);
        // echo $token_url . '<br>';
        // var_dump($token_data);
        if ($token_data[0] == 200) {
            return json_decode($token_data[1], TRUE);
        }

        return FALSE;
    }

    /**
     * 获取授权后的微信用户信息
     *
     * @param string $access_token
     * @param string $open_id
     */
    public function get_user_info($access_token = '', $open_id = '') {
        if ($access_token && $open_id) {
            $info_url = "https://api.weixin.qq.com/sns/userinfo?access_token={$access_token}&openid={$open_id}&lang=zh_CN";
            $info_data = $this->http($info_url);

            if ($info_data[0] == 200) {
                return json_decode($info_data[1], TRUE);
            }
        }

        return FALSE;
    }
    /**
     * 验证授权
     *
     * @param string $access_token
     * @param string $open_id
     */
    public function check_access_token($access_token = '', $open_id = '') {
        if ($access_token && $open_id) {
            $info_url = "https://api.weixin.qq.com/sns/auth?access_token={$access_token}&openid={$open_id}&lang=zh_CN";
            $info_data = $this->http($info_url);

            if ($info_data[0] == 200) {
                return json_decode($info_data[1], TRUE);
            }
        }

        return FALSE;
    }
    // curl
    public function http($url, $method, $postfields = null, $headers = array(), $debug = false) {
        $ci = curl_init();
        /* Curl settings */
        curl_setopt($ci, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, 30);
        // 跳过SSL证书检查，必须添加这个才能得到微信服务器的回应，不然得到的是拒绝访问
        curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ci, CURLOPT_TIMEOUT, 30);
        curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);

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

        if ($debug) {
            // if (1) {
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