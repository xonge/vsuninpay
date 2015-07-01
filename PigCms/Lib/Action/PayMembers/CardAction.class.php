<?php
class CardAction extends Action {
	// 名片首页，不一定需要登录
	public function index() {
		// 本来是用session username做判断的，现在改成uid
		$uid = $this->_get('uid', 'htmlspecialchars');
		$this->uid = $uid;
		$s_username = session('username');
		$this->username = $s_username;
		// 把session username换成uid
		// $userinfo = M('user2')->where(array('UserName' => $s_username))->find();
		$userinfo = M('user2')->where(array('MerchantID' => $uid))->find();
		$bgimg = M('user_extend')->where(array('uid' => $userinfo['MerchantID']))->getField('bgimg');
		$userinfo['bgimg'] = $bgimg;
		$this->userinfo = $userinfo;
		$this->display();
	}

	// 名片管理，考虑放在别的模块，比如system 或者 manage
	public function manage() {
		// 需要登录
		$s_card_uid = session('card_uid');
		if (!$s_card_uid) {
			$this->redirect('Card/login');
		}
		if (IS_GET) {
			$userinfo = M('user2')->where(array('MerchantID' => $s_card_uid))->find();
			$this->userinfo = $userinfo;
			$this->display();
		} elseif (IS_POST) {
			# code...
		}
	}

	public function add() {
		if (IS_POST) {
			$_DB = M('Funintro');
			$_DB->add($_POST);
			$this->success('添加成功', U("Aboutus/index", array('token' => session('token'), 'type' => 1)));exit;
		} else {
			$this->assign('info', array('isnew' => 0));

		}
		$this->display();
	}
	public function edit() {
		if (IS_POST) {
			$_DB = M('Funintro');
			$ok = $_DB->save($_POST);
			$this->success('修改成功', U("Aboutus/index", array('token' => session('token'), 'type' => 1)));exit;
		} else {
			$fun = M('Funintro')->where(array('id' => intval($_GET['id']), 'type' => 1))->find();
			$this->assign('info', $fun);
			$this->display('add');
		}

	}
	public function del() {
		if (IS_POST) {
			$this->all_save();
		} else {
			$id = $this->_get('id', 'intval', 0);
			if ($id == 0) {
				$this->error('非法操作');
			}
			$this->assign('tpltitle', '编辑');
			$fun = M('Funintro')->where(array('id' => $id, 'type' => 1))->delete();
			if ($fun == false) {
				$this->error('删除失败');
			} else {
				$this->success('删除成功');
			}
		}
	}

	// 名片注册
	public function register() {
		if (IS_POST) {
			$s_username = session('username');
			if (!$s_username) {
				// $this->error
			}
		} elseif (IS_GET) {
			// 难度获得以后就是数字？
			$step = $this->_get('step');
			// echo $step;
			switch ($step) {
				case '1':
					# code...
					break;
				case '2':
					# code...
					break;
				case 4:
					$s_username = session('username');
					if (!$s_username) {
						$this->error('请登陆', 'Card/login');
					}
					$userinfo = M('user2')->where(array('UserName' => $s_username))->find();
					$this->userinfo = $userinfo;
					// echo 'z';
					$this->display('register');
					break;
				default:
					# code...
					break;
			}
		}
	}

	// 名片登录
	public function login() {
		if (IS_POST) {
			// 现在系统采用的thinkphp不支持I函数
			// $userphone = I('post.userphone', '', 'is_numeric');
			// $userpwd = I('post.userpwd', '', 'htmlspecialchars');

			// 需要验证手机号码的正确性
			$userphone = $this->_post('userphone', 'htmlspecialchars,strip_tags', 0);
			$userpwd = $this->_post('userpwd', 'htmlspecialchars,strip_tags', 0);
			if (!$userphone || !$userpwd) {
				$this->error('请填写正确信息');
			}
			// md5加密原始密码，加密强度不够，后期修改加密方式
			$encryptPwd = md5($userpwd);
			echo $encryptPwd;
			// 考虑新建一个paymembers数据库，防止表太多造成不方便管理
			// 获得用户密码
			dump($userphone);
			// 测试
			// $userinfo = M('user2')->where(array('UserName' => $userphone))->find();
			// dump($userinfo);
			// 字段区分大小写
			$userinfo = M('user2')->where(array('UserName' => $userphone))->field('MerchantID, UserName, Pwd')->find();
			$card_uid = $userinfo['MerchantID'];
			$username = $userinfo['UserName'];
			$pwd = $userinfo['Pwd'];
			$pwd = strtolower($pwd);
			echo $pwd;
			if ($encryptPwd == $pwd) {
				// 跳转到
				$this->success('登陆成功', U('Card/index'));
				// 设置session
				// 判断session是否设置过，不会用
				// session('?name');
				session('card_uid', $card_uid);
				session('username', $username);
			} else {
				$this->error('登陆失败');
			}
		} elseif (IS_GET) {
			// 测试
			// echo session('username');
			// 如果已经登陆，就跳转到
			if (session('username')) {
				$this->redirect('Card/index');
			}
			$this->display();
		}
	}

	// 名片退出
	public function logout() {
		// 清空session
		session('card_uid', null);
	}
}
?>