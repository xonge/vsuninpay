<?php

class IndexAction extends BaseAction {
	public $includePath;
	protected function _initialize() {
		parent::_initialize();
		$this->home_theme = $this->home_theme ? $this->home_theme : 'pigcms'; //模板目录名字
		$this->includePath = './tpl/Home/' . $this->home_theme . '/'; //模板目录

		$this->assign('includeHeaderPath', $this->includePath . 'Public_header.html'); //头部公用
		$this->assign('includeFooterPath', $this->includePath . 'Public_footer.html'); //底部公用

	}
	public function clogin() {
		$cid = isset($_GET['cid']) ? intval($_GET['cid']) : 0;
		$k = isset($_GET['k']) ? $_GET['k'] : '';
		$this->assign('cid', $cid);
		$this->assign('k', $k);
		$this->display($this->home_theme . ':Index:' . ACTION_NAME);
	}
	//关注回复
	public function index() {
		$where['status'] = 1;
		if (C('agent_version')) {
			$where['agentid'] = $this->agentid;
		}
		$links = D('Links')->where($where)->select();
		$news_db = D('News');
		$where['category'] = '1';
		$where['showtime'] = array('elt', time());
		$news = $news_db->where($where)->order('showtime DESC')->limit('0,5')->select();
		$where['category'] = '2';
		$notice = $news_db->where($where)->limit('salecount DESC')->limit('0,5')->select();
		$cases = M('Case')->where($where)->order('id DESC')->select();
		$this->assign('news', $news);
		$this->assign('notice', $notice);
		$this->assign('links', $links);
		$this->assign('case', $cases);
		$this->display($this->home_theme . ':Index:' . ACTION_NAME);
	}
	//用户登出
	public function logout() {
		session(null);
		session_destroy();
		unset($_SESSION);
		redirect(U('Home/Index/index'));
	}
	public function verify() {
		Image::buildImageVerify(4, 1, 'png', 0, 28, 'verify');
	}
	public function verifyLogin() {
		Image::buildImageVerify(4, 1, 'png', 0, 28, 'loginverify');
	}
	public function resetpwd() {
		$uid = $this->_get('uid', 'intval');
		$code = $this->_get('code', 'trim');
		$rtime = $this->_get('resettime', 'intval');
		$info = M('Users')->find($uid);
		if ((md5($info['uid'] . $info['password'] . $info['email']) !== $code) || ($rtime < time())) {
			$this->error('非法操作', U('Index/index'));
		}
		$this->assign('uid', $uid);
		$this->display($this->home_theme . ':Index:' . ACTION_NAME);
	}
	public function fc() {
		if (isset($_GET['id'])) {
			$fun = M('Funintro')->where(array('id' => intval($_GET['id']), 'type' => 0))->find();
		} else {
			$fun = M('Funintro')->where('id>0 and type=0')->order('id ASC')->find();
		}
		$funs = M('Funintro')->where('id>0 and type=0')->select();
		$this->assign('funs', $funs);
		$this->assign('fun', $fun);
		$this->display($this->home_theme . ':Index:' . ACTION_NAME);
	}
	public function qrcode() {
		if (isset($_SESSION['preuid'])) {
			$thisUser = M('Users')->where(array('id' => intval($_SESSION['preuid'])))->find();
			$this->assign('thisUser', $thisUser);
			$this->display($this->home_theme . ':Index:' . ACTION_NAME);
		} else {
			exit();
		}

	}
	public function qrcodeLogin() {
		if (isset($_SESSION['preuid'])) {
			$thisUser = M('Users')->where(array('id' => intval($_SESSION['preuid'])))->find();
			session('uid', $thisUser['id']);
			session('gid', $thisUser['gid']);
			session('uname', $thisUser['username']);
			session('diynum', 0);
			session('connectnum', 0);
			session('activitynum', 0);
			//session('gname',$info['name']);
			$this->success('现在进入体验', U('User/Index/bindTip'));
		} else {
			$this->success('超时，请联系客服审核账号', U('Home/Index/index'));
		}
	}
	public function isfollow() {
		$thisUser = M('Users')->where(array('id' => intval($_SESSION['preuid'])))->find();
		echo '{"openid":"' . $thisUser['openid'] . '"}';
	}
	public function about() {

		$fun = M('Funintro')->where('type=1')->find();
		$this->assign('fun', $fun);
		//var_dump($funs);
		$this->display($this->home_theme . ':Index:' . ACTION_NAME);
	}
	public function price() {
		$groupWhere = array();
		$groupWhere['status'] = 1;
		if (C('agent_version')) {
			$groupWhere['agentid'] = $this->agentid;
		}
		$groups = M('User_group')->where($groupWhere)->order('id ASC')->select();
		$this->assign('groups', $groups);
		$count = count($groups);
		$this->assign('count', $count);
		//
		$prices = array();
		$isCopyright = array();
		$wechatNums = array();
		$diynums = array();
		$connectnums = array();
		$activitynums = array();
		$create_card_nums = array();
		if ($groups) {
			foreach ($groups as $g) {
				array_push($prices, $g['price']);
				array_push($isCopyright, $g['iscopyright']);
				array_push($wechatNums, $g['wechat_card_num']);
				array_push($diynums, $g['diynum']);
				array_push($connectnums, $g['connectnum']);
				array_push($activitynums, $g['activitynum']);
				array_push($create_card_nums, $g['create_card_num']);
			}
		}
		$this->assign('prices', $prices);
		$this->assign('copyrights', $isCopyright);

		$this->assign('wechatNums', $wechatNums);
		$this->assign('diynums', $diynums);
		$this->assign('connectnums', $connectnums);
		$this->assign('activitynums', $activitynums);
		$this->assign('create_card_nums', $create_card_nums);
		//
		if (C('agent_version') && $this->agentid) {
			$funs = M('Agent_function')->where(array('status' => 1, 'agentid' => $this->agentid))->order('id ASC')->select();
		} else {
			$funs = M('Function')->where(array('status' => 1))->order('id ASC')->select();
		}
		if ($funs) {

			foreach ($funs as $fk => $f) {
				$funs[$fk]['access'] = array();
				if ($groups) {
					foreach ($groups as $g) {
						if (strpos($g['func'], $f['funname']) === false) {
							$canUse = 0;
						} else {
							$canUse = 1;
						}
						$funs[$fk]['access'][$g['id']] = $canUse;
					}
				}

			}
		}
		$this->assign('funs', $funs);
		$this->display($this->home_theme . ':Index:' . ACTION_NAME);
	}
	public function help() {
		if (isset($_GET['token'])) {
			if (isset($_SESSION['uid'])) {
				$thisWx = apiInfo::info($_SESSION['uid'], 0, $this->_get('token'));

				$this->assign('wxuser', $thisWx);
			} else {
				$this->error('无权查看');
			}
		}
		$this->display($this->home_theme . ':Index:' . ACTION_NAME);
	}
	public function news() {
		$where['status'] = 1;
		if (C('agent_version')) {
			$where['agentid'] = $this->agentid;
		}
		$db = D('News');
		$where['category'] = '1';
		$count = $db->where($where)->count();
		$page = new Page($count, 10);
		$info = $db->where($where)->limit($page->firstRow . ',' . $page->listRows)->select();
		$this->assign('info', $info);
		$this->assign('page', $page->show());
		$this->display($this->home_theme . ':Index:' . ACTION_NAME);
	}

	public function show() {
		$where['status'] = 1;
		if (C('agent_version')) {
			$where['agentid'] = $this->agentid;
		}
		$where['id'] = $this->_get('id');
		$show = M('News')->where($where)->find();
		$content = stripslashes(htmlspecialchars_decode($show['content']));
		$this->assign($show);
		$this->assign('content', $content);
		$this->display($this->home_theme . ':Index:' . ACTION_NAME);
	}
	public function cases() {
		$where['status'] = 1;

		if (C('agent_version')) {
			$where['agentid'] = $this->agentid;
		}

		$cases = M('Case')->where($where)->order('id DESC')->select();
		$this->assign(__FUNCTION__, $cases);
		$this->display();
	}
	function think_encrypt($data, $key = '', $expire = 0) {
		$key = md5(empty($key) ? C('DATA_AUTH_KEY') : $key);
		$data = base64_encode($data);
		$x = 0;
		$len = strlen($data);
		$l = strlen($key);
		$char = '';

		for ($i = 0; $i < $len; $i++) {
			if ($x == $l) {
				$x = 0;
			}

			$char .= substr($key, $x, 1);
			$x++;
		}

		$str = sprintf('%010d', $expire ? $expire + time() : 0);

		for ($i = 0; $i < $len; $i++) {
			$str .= chr(ord(substr($data, $i, 1)) + (ord(substr($char, $i, 1))) % 256);
		}
		return str_replace('=', '', base64_encode($str));
	}
	function text() {
		$domain = $_GET['domain'];
		$domains = explode('.', $domain);

		echo '<a href="http://' . $domain . '/index.php?g=Home&m=T&a=test&n=' . $this->think_encrypt($domains[1] . '.' . $domains[2]) . '" target="_blank">http://' . $domain . '/index.php?g=Home&m=T&a=test&n=' . $this->think_encrypt($domains[1] . '.' . $domains[2]) . '</a><br>';
		echo '<a href="http://' . $domain . '/index.php?g=User&m=Create&a=index" target="_blank">http://' . $domain . '/index.php?g=User&m=Create&a=index</a><br>';
	}
	function common() {
		$where['status'] = 1;
		if (C('agent_version')) {
			$where['agentid'] = $this->agentid;
		}
		$cases = M('Case')->where($where)->order('id DESC')->select();
		$this->assign('cases', $cases);
		$this->display($this->home_theme . ':Index:' . ACTION_NAME);
	}

	public function userJson() {
		if (C('server_topdomain') == 'pigcms.cn' && $this->_get('key') == C('server_key')) {
			$id = intval($_GET['id']);
			$users = M('users')->where('id>' . $id)->order('id ASC')->limit(0, 400)->select();
			if ($users) {
				$i = 0;
				foreach ($users as $u) {
					unset($users[$i]['password']);
					$i++;
				}
			}
		}
		echo json_encode($users);
	}

	public function login() {
		$business = include './PigCms/Lib/ORG/Business.php';
		$i = 0;
		foreach ($business as $k => $v) {
			$data[$i]['key'] = $k;
			$data[$i]['val'] = $v;
			$i++;
		}
		$this->assign('business', $data);
		$this->display('login');
	}
	public function reg() {
		$business = include './PigCms/Lib/ORG/Business.php';
		$i = 0;
		foreach ($business as $k => $v) {
			$data[$i]['key'] = $k;
			$data[$i]['val'] = $v;
			$i++;
		}
		$this->assign('business', $data);
		$this->display('reg');
	}

	public function weixin_download() {
		import("ORG.Net.Http");
		// 这里下载的文件会在微信服务器上保存三天，也许微信在瞎扯淡
		// 暂时使用post，改用jsonp
		$callback = $_GET['callback'];
		$wx_medias = $_GET['media_ids'];
		$wx_medias_arr = explode(',', $wx_medias);
		// echo $wx_medias;
		// 微信api接口调用令牌，有效期为7200秒，过了这个时间就必须重新获得。
		$access_token = 'QFJNCU4fE-KiSyJse3gXQ8Qzj0KW5qVhCieAOePKeuZN2gO16L-Gp2oaGwG5m6MnXEIoLfl70gd9Q-oG2XEnMSTwtSlfh5XHvZS59fmae9w';
		$wxdown_dir = './wx_media/'; // 微信文件保存目录
		// 循环下载文件
		$return_files = Array();
		foreach ($wx_medias_arr as $wx_media_id) {
			// 微信服务器上面的下载地址
			$wxdown_url = 'http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=' . $access_token . '&media_id=' . $wx_media_id;
			// 本地文件名，包含后缀
			$local_name = $wx_media_id . '.jpg';
			// 本地路径，使用的相对路径
			$local_path = $wxdown_dir . $local_name;
			// 如果文件存在就不下载
			if (file_exists($local_path)) {
				continue;
			} else {
				// 下载文件
				Http::curlDownload($wxdown_url, $local_path);
				// 组成新的网址，准备返回给客户端
				$return_url = $_SERVER['SERVER_NAME'] . $local_path;
				$return_url = str_replace('./', '/', $return_url);
				$return_files[] = $return_url;
			}
		}
		// $wxdown_url = 'http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=QFJNCU4fE-KiSyJse3gXQ8Qzj0KW5qVhCieAOePKeuZN2gO16L-Gp2oaGwG5m6MnXEIoLfl70gd9Q-oG2XEnMSTwtSlfh5XHvZS59fmae9w&media_id=RYR7gU27yIhEiUO8m1CD9S0lbZrOAFgGb6y3xnx_rJg5lt0a2h312ay16T4_T-EX';
		// $wxdown_dir = './wx_media/'; // 微信文件保存目录
		// echo __DIR__;
		// Http::curlDownload($wxdown_url, $wxdown_dir . "xg.jpg");
		// 记录
		file_put_contents('abc.txt', $wx_medias);
		// 组成了jsonp
		$return_json = $callback . '(' . json_encode($return_files) . ')';
		echo $return_json;
	}

	// 使用phpqrcode生成二维码
	public function genqrcode() {
		# code...
		// echo 'z';
		include '/PigCms/lib/ORG/phpqrcode/qrlib.php';
		// $this->display();
		// echo '<div style="width:98%;margin:0 atuo;">';
		QRcode::png('BEGIN:VCARD
FN:周大为
ORG:湘潭鑫远达电子商务
ADR;TYPE=WORK:;;湘潭市岳塘区汽车东站家家美营销中心
TITLE:CEO
TEL;CELL:13789322528
TEL;WORK:0731-52722777
EMAIL;TYPE=PREF,INTERNET:729155@qq.com
URL:http://xiangtan.suninpay.com/
END:VCARD');
		// echo '</div>';
	}
}
