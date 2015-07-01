<?php
/**
 *
 */
class PublicAction extends Action {
	// 会员登陆，不需要进行权限认证，所以单独放在一个文件里面
	public function login() {
		if (IS_GET) {
			$this->display();
		} elseif (IS_POST) {
			$username = $this->_post('TxtUserName');
			$pwd = $this->_post('TxtPwd');
			$userinfo = M('user2')->where(array('UserName' => $username))->field('MerchantID, Pwd')->find();
			// dump($userinfo);die;
			$encrypt_pwd = md5($pwd);
			if ($encrypt_pwd == strtolower($userinfo['Pwd'])) {
				// 登陆成功，跳到会员后台首页
				session('member_uid', $userinfo['MerchantID']);
				$this->redirect('Member/index');
			} else {
				$this->error('用户名或者密码错误，请重新输入');
			}
			// if ()
		}
	}

	// 会员退出
	public function logout() {
		// 清空session，微名片其实是这个的子集，干脆全部用member_uid代替
		session('member_uid', null);
		$this->redirect('Public/login');
	}
}