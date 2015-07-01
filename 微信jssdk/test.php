<?php
class Wechat {
	public $dsql;
	  private function getAccessToken() //生成access_token，并存入数据库
	{
		  global $dsql;
		  $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".AppId."&secret=".AppSecret;
		  $data = getCurl($url);//通过自定义函数getCurl得到https的内容
		  $resultArr = json_decode($data, true);//转为数组
		  //access_token插入数据库做缓存
		  $time=time();
		  $sql="insert into wx_accesstoken(access_token,uptime) value('{$resultArr["access_token"]}',$time)";
		  $dsql->ExecuteNoneQuery($sql);
		  return $resultArr["access_token"];//获取access_token
	  }
	  private function getToken()//如果access_token有数据库缓存，就从数据库取，如果没有就重新取
	  {
		   global $dsql;
		   $time=time()-7200;
		   $sql="select * from wx_accesstoken where uptime>$time";
		   $row=$dsql->GetOne($sql);
		   if($row)
		   {
			return $row['access_token'];//从数据库取
		   }else{
			return $this->getAccessToken();//重新获取
		   }
	  }
	  public function getJSApi_ticket(){//获取JSApi_ticket
		   global $dsql;
		   $time=time()-7200;
		   $sql="select * from wx_jsApiTicket where uptime>$time";
		   $row=$dsql->GetOne($sql);
		   if($row)
		   {
				return $row['access_token'];//从数据库取
		   }else{
			   //如果数据库没有保存有效的jsApiTicket，就重新生成并存入数据库
			   $accessToken = $this->getToken();//获取access_token
			   $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=".$accessToken."&type=jsapi";
			   $data = getCurl($url);//通过自定义函数getCurl得到https的内容
			   $resultArr = json_decode($data, true);//转为数组
			   //插入数据库做缓存
			   $nowtime=time();
			   $sql="insert into wx_jsApiTicket(jsApiTicket,uptime) value('{$resultArr["ticket"]}',$nowtime)";
			   $dsql->ExecuteNoneQuery($sql);
			   return $resultArr['ticket'];//获取jsApi_ticket
		   }
	  }
	  public function getSignature(){
		   $jsApi_ticket = $this->getJSApi_ticket();//获取access_token
		   //file_put_contents("a.txt",$jsApi_ticket."\n",FILE_APPEND);此处是做断点测试用的
		   //动态获取ｕｒｌ
		   if($_SERVER['QUERY_STRING']){
				$url= 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
		   }else{
				$url= 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
		   }

		   //file_put_contents("a.txt",$url."\n",FILE_APPEND);
		   $str = "jsapi_ticket=".$jsApi_ticket."&noncestr=2nDgiWM7gCxhL8v0&timestamp=1420774989&url=".$url;
		   $signature = "";
		   $signature=sha1($str);
		  return $signature;
		 }
  ｝
function getCurl($url){//get https的内容
	 $ch = curl_init();
	 curl_setopt($ch, CURLOPT_URL,$url);
	 curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);//不输出内容
	 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	 $result =  curl_exec($ch);
	 curl_close ($ch);
	 return $result;
 }
  
function dataPost($post_string, $url) {//POST方式提交数据
	 $context = array ('http' => array ('method' => "POST", 'header' => "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) \r\n Accept: */*", 'content' => $post_string ) );
	 $stream_context = stream_context_create ( $context );
	 $data = file_get_contents ( $url, FALSE, $stream_context );
	 return $data;
 }

