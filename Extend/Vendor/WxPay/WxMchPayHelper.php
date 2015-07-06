<?php
/**
 * 微信红包类
 * @author jy625
 */
include_once "CommonUtil.php";
include_once "SDKRuntimeException.class.php";
include_once "MD5SignUtil.php";
class WxMchPayHelper {
	var $parameters; //cft 参数
	function __construct() {

	}
	function setParameter($parameter, $parameterValue) {
		$this->parameters[CommonUtil::trimString($parameter)] = CommonUtil::trimString($parameterValue);
	}
	function getParameter($parameter) {
		return $this->parameters[$parameter];
	}
	function check_sign_parameters() {
		if ($this->parameters["nonce_str"] == null ||
			$this->parameters["partner_trade_no"] == null ||
			$this->parameters["mchid"] == null ||
			$this->parameters["mch_appid"] == null ||
			$this->parameters["openid"] == null ||
			$this->parameters["amount"] == null ||
			$this->parameters["desc"] == null ||
			$this->parameters["spbill_create_ip"] == null ||
			$this->parameters["check_name"] == null
		) {
			return false;
		}
		return true;

	}
	/**
	例如：
	appid：    wxd111665abv58f4f
	mch_id：    10000100
	device_info：  1000
	Body：    test
	nonce_str：  ibuaiVcKdpRxkhJA
	第一步：对参数按照 key=value 的格式，并按照参数名 ASCII 字典序排序如下：
	stringA="appid=wxd930ea5d5a258f4f&body=test&device_info=1000&mch_i
	d=10000100&nonce_str=ibuaiVcKdpRxkhJA";
	第二步：拼接支付密钥：
	stringSignTemp="stringA&key=192006250b4c09247ec02edce69f6a2d"
	sign=MD5(stringSignTemp).toUpperCase()="9A0A8659F005D6984697E2CA0A
	9CF3B7"
	 */
	protected function get_sign() {
		define('PARTNERKEY', "4YULIIKklHlMVnp5sVZek2KqVTihAhLt");
		try {
			if (null == PARTNERKEY || "" == PARTNERKEY) {
				throw new SDKRuntimeException("密钥不能为空！" . "<br>");
			}
			// var_dump($this->parameters);
			if ($this->check_sign_parameters() == false) {
				//检查生成签名参数
				throw new SDKRuntimeException("生成签名参数缺失！" . "<br>");
			}
			$commonUtil = new CommonUtil();
			ksort($this->parameters);
			$unSignParaString = $commonUtil->formatQueryParaMap($this->parameters, false);

			$md5SignUtil = new MD5SignUtil();
			return $md5SignUtil->sign($unSignParaString, $commonUtil->trimString(PARTNERKEY));
		} catch (SDKRuntimeException $e) {
//            echo 'get sign error';die;
			die($e->errorMessage());
		}

	}

	//生成红包接口XML信息
	/*
	<xml>
	<sign>![CDATA[E1EE61A9]]</sign>
	<mch_billno>![CDATA[00100]]</mch_billno>
	<mch_id>![CDATA[888]]</mch_id>
	<wxappid>![CDATA[wxcbda96de0b165486]]</wxappid>
	<nick_name>![CDATA[nick_name]]</nick_name>
	<send_name>![CDATA[send_name]]</send_name>
	<re_openid>![CDATA[onqOjjXXXXXXXXX]]</re_openid>
	<total_amount>![CDATA[100]]</total_amount>
	<min_value>![CDATA[100]]</min_value>
	<max_value>![CDATA[100]]</max_value>
	<total_num>![CDATA[1]]</total_num>
	<wishing>![CDATA[恭喜发财]]</wishing>
	<client_ip>![CDATA[127.0.0.1]]</client_ip>
	<act_name>![CDATA[新年红包]]</act_name>
	<act_id>![CDATA[act_id]]</act_id>
	<remark>![CDATA[新年红包]]</remark>
	</xml>
	 */
	function create_hongbao_xml($retcode = 0, $reterrmsg = "ok") {
		try {
//             echo $this->get_sign();die;
			$this->setParameter('sign', $this->get_sign());
//             echo 'go';die;
			$commonUtil = new CommonUtil();
//             echo 'go';die;
			return $commonUtil->arrayToXml($this->parameters);

		} catch (SDKRuntimeException $e) {
//            echo 'create xml error';die;
			die($e->errorMessage());
		}

	}

	function curl_post_ssl($url, $vars, $second = 30, $aHeader = array()) {
		$ch = curl_init();
		//超时时间
		curl_setopt($ch, CURLOPT_TIMEOUT, $second);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		//这里设置代理，如果有的话
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

		//cert 与 key 分别属于两个.pem文件
		//        他人证书地址
		//		curl_setopt($ch,CURLOPT_SSLCERT,dirname(__FILE__).DIRECTORY_SEPARATOR.'zhengshu'.DIRECTORY_SEPARATOR.'apiclient_cert.pem');
		// 		curl_setopt($ch,CURLOPT_SSLKEY,dirname(__FILE__).DIRECTORY_SEPARATOR.'zhengshu'.DIRECTORY_SEPARATOR.'apiclient_key.pem');
		// 		curl_setopt($ch,CURLOPT_CAINFO,dirname(__FILE__).DIRECTORY_SEPARATOR.'zhengshu'.DIRECTORY_SEPARATOR.'rootca.pem');
		//        商用宝证书地址
		//        echo file_get_contents('D:\phpStudy4IIS\cert\weixinpay\apiclient_cert.pem');
		curl_setopt($ch, CURLOPT_SSLCERT, 'D:\\phpStudy4IIS\\cert\\weixinpay\\apiclient_cert.pem');
		curl_setopt($ch, CURLOPT_SSLKEY, 'D:\\phpStudy4IIS\\cert\\weixinpay\\apiclient_key.pem');
		curl_setopt($ch, CURLOPT_CAINFO, 'D:\\phpStudy4IIS\\cert\\weixinpay\\rootca.pem');

		if (count($aHeader) >= 1) {
			curl_setopt($ch, CURLOPT_HTTPHEADER, $aHeader);
		}

		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);
		$data = curl_exec($ch);
		if ($data) {
			curl_close($ch);
			// var_dump($data);
			return $data;
		} else {
			$error = curl_errno($ch);
			echo 'curl error is: ';
//            print_r($error);die;
			curl_close($ch);
			return false;
		}
	}

}

?>