<?php
class ArticleAction extends Action {
	// 文章列表
	public function index() {
		// 也许使用变形的更好
		$uid = $this->_get('uid', 'htmlspecialchars');
		// echo $uid;
		$s_username = session('username');
		// 还没有设置session uid
		$s_uid = session('uid');
		$this->uid = $s_uid = 18;
		$this->username = $s_username;
		$userinfo = M('user2')->where(array('MerchantID' => $uid))->find();
		$this->company = $userinfo['MerchantName'];
		$page = new Page($count, 10);
		$articles = M('user_article')->where(array('MerchantID' => $uid))->limit($page->firstRow . ',' . $page->listRows)->select();
		$this->articles = $articles;
		$this->display();
	}

	public function del() {
		C('TOKEN_ON', false);
		$id = $this->_get('id', 'intval');
		$pid = $this->_get('pid', 'intval');
		if (D('Img')->delete($id)) {
			$this->success('操作成功', U(MODULE_NAME . '/index', array('pid' => $pid)));
		} else {
			$this->error('操作失败', U(MODULE_NAME . '/index', array('pid' => $pid)));
		}
	}

	// 文章添加，发文章
	public function add() {
		// 获得session，判断用户是否登陆，不登陆跳到名片登陆界面
		// 不能使用uid作为session，会与原程序的uid冲突，添加card前缀
		$s_card_uid = session('card_uid');
		echo $s_card_uid;
		$s_username = session('username');
		if (!$s_card_uid) {
			$this->redirect('Card/login');
		}
		if (IS_GET) {
			$this->display();
		} elseif (IS_POST) {

		}
	}

	// 文章编辑
	public function edit() {
		if (IS_GET) {
			$this->display();
		} elseif (IS_POST) {

		}
	}

	// 文章搜索
	public function search() {
		if (IS_GET) {
			$this->display();
		} elseif (IS_POST) {

		}
	}
}