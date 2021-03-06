<?php
class IndexAction extends UserAction {
	//公众帐号列表
	public function index() {

		if (class_exists('demoImport')) {
			$this->assign('demo', 1);
			//
			$token = $this->get_token();
			echo $token;die;
			$pigSecret = $this->get_token(20, 0, 1);
			$wxinfo = M('wxuser')->where(array('uid' => intval(session('uid'))))->find();
			if (!$wxinfo) {
				$demoImport = new demoImport(session('uid'), $token, $pigSecret);
			}
			$wxinfo = M('wxuser')->where(array('uid' => intval(session('uid'))))->find();
			$this->assign('wxinfo', $wxinfo);
			//
			$this->assign('token', $token);
		}
		//
		// die;
		$where['uid'] = session('uid');
		$group = D('User_group')->select();
		foreach ($group as $key => $val) {
			$groups[$val['id']]['did'] = $val['diynum'];
			$groups[$val['id']]['cid'] = $val['connectnum'];
		}
		unset($group);
		$db = M('Wxuser');
		$count = $db->where($where)->count();
		$page = new Page($count, 100);
		$info = $db->where($where)->limit($page->firstRow . ',' . $page->listRows)->select();
		if ($info) {
			foreach ($info as $item) {
				if (!$item['appid'] && $apiinfo['appid'] && $apiinfo['appsecret']) {
					$apiinfo = M('Diymen_set')->where(array('token' => $item['token']))->find();
					$db->where(array('id' => $item['id']))->save(array('appid' => $apiinfo['appid'], 'appsecret' => $apiinfo['appsecret']));
				} else {
					$diymen = M('Diymen_set')->where(array('token' => $item['token']))->find();
					if (!$diymen && $item['appid'] && $item['appsecret']) {
						M('Diymen_set')->add(array('token' => $item['token'], 'appid' => $item['appid'], 'appsecret' => $item['appsecret']));
					}
				}
				//
			}
		}

		$this->assign('thisGroup', $this->userGroup);
		$this->assign('info', $info);
		$this->assign('group', $groups);
		$this->assign('page', $page->show());
		if (count($info) == 1 && $info[0]['wxid'] == 'demo' && class_exists('demoImport')) {
			$this->assign('info', $info[0]);
			$this->display('bindTip');
		} else {
			$this->display();
		}
	}
	//
	public function get_token($randLength = 6, $attatime = 1, $includenumber = 0) {
		if ($includenumber) {
			$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHJKLMNPQEST123456789';
		} else {
			$chars = 'abcdefghijklmnopqrstuvwxyz';
		}
		$len = strlen($chars);
		$randStr = '';
		for ($i = 0; $i < $randLength; $i++) {
			$randStr .= $chars[rand(0, $len - 1)];
		}
		$tokenvalue = $randStr;
		if ($attatime) {
			$tokenvalue = $randStr . time();
		}
		return $tokenvalue;
	}
	//添加公众帐号
	public function add() {
		$email = str_replace("http://", "", C('site_url'));
		$email = str_replace("/", "", C('site_url'));
		$email_l = strpos($email, ".") + 1;
		$email = substr($email, $email_l);
		$randLength = 6;
		$chars = 'abcdefghijklmnopqrstuvwxyz';
		$len = strlen($chars);
		$randStr = '';
		for ($i = 0; $i < $randLength; $i++) {
			$randStr .= $chars[rand(0, $len - 1)];
		}
		$tokenvalue = $randStr . time();
		$this->assign('tokenvalue', $tokenvalue);
		$this->assign('email', time() . '@' . $email);
		//地理信息
		if (C('baidu_map_api')) {
			//$locationInfo=json_decode(file_get_contents('http://api.map.baidu.com/location/ip?ip='.$_SERVER['REMOTE_ADDR'].'&coor=bd09ll&ak='.C('baidu_map_api')),1);
			///$this->assign('province',$locationInfo['content']['address_detail']['province']);
			//$this->assign('city',$locationInfo['content']['address_detail']['city']);
			//var_export($locationInfo);
		}

		$this->display();
	}
	public function edit() {
		// echo $this->token;die;
		$id = $this->_get('id', 'intval');
		$where['uid'] = session('uid');
		$where['id'] = $id;
		$res = M('Wxuser')->where($where)->find();
		$this->assign('info', $res);
		$this->display();
	}

	public function bindEdit() {
		$where['uid'] = session('uid');
		$res = M('Wxuser')->where($where)->find();
		$this->assign('info', $res);
		$this->display();
	}

	public function del() {
		$where['id'] = $this->_get('id', 'intval');
		$where['uid'] = session('uid');
		$thisWxUser = M('Wxuser')->where(array('id' => $where['id']))->find();
		$users = M('Users')->where(array('id' => $thisWxUser['uid']))->find();
		if (D('Wxuser')->where($where)->delete()) {
			if ($this->isAgent) {
				$wxuserCount = M('Wxuser')->where(array('agentid' => $this->thisAgent['id']))->count();
				M('Agent')->where(array('id' => $this->thisAgent['id']))->save(array('wxusercount' => $wxuserCount));
				if ($this->thisAgent['wxacountprice'] && time() - $thisWxUser['createtime'] < 5 * 24 * 3600) {

					$pricebyMonth = intval($this->thisAgent['wxacountprice']) / 12;
					$month = ($users['viptime'] - time()) / (30 * 24 * 3600);
					$month = intval($month);
					$price = $month * $pricebyMonth;
					//
					M('Agent')->where(array('id' => $this->thisAgent['id']))->setInc('moneybalance', $price);
					M('Agent_expenserecords')->add(array('agentid' => $this->thisAgent['id'], 'amount' => $price, 'des' => $this->user['username'] . '(uid:' . $this->user['id'] . ')删除公众号' . $thisWxUser['wxname'] . '_' . $month . '个月', 'status' => 1, 'time' => time()));
				}
			}
			$this->success('操作成功', U(MODULE_NAME . '/index'));
		} else {
			$this->error('操作失败', U(MODULE_NAME . '/index'));
		}
	}
	public function apiInfo() {
		$thisWx = apiInfo::info($this->user['id'], intval($_GET['id']));
		$this->assign('info', $thisWx);
		$fuwu = FALSE;
		if (is_file($_SERVER['DOCUMENT_ROOT'] . "/PigCms/Lib/Action/Fuwu/FuwuAction.class.php")) {
			$fuwu = TRUE;
		}
		$this->assign('fuwu', $fuwu);
		$this->display();
	}
	public function upsave() {
		S('wxuser_' . $this->token, NULL);
		echo $this->token;
		// die;
		// die;
		M('Diymen_set')->where(array('token' => $this->token))->save(array('appid' => trim($this->_post('appid')), 'appsecret' => trim($this->_post('appsecret'))));
		//
		$db = D('Wxuser');
		if (isset($_POST['demoStep'])) {
			$back = '/bindHelp?id=' . intval($_POST['id']);
		} else {
			$back = '';
		}
		if ($db->create() === false) {
			$this->error($db->getError());
		} else {
			$id = $db->save();
			if ($id) {
				if (isset($_POST['demoStep'])) {
					header('Location:' . $this->siteUrl . U('Index/bindHelp', array('id' => intval($_POST['id']))));
				} else {
					// $this->addfc();
					$this->success('操作成功', U('index'));
				}

			} else {
				$this->error('操作失败', U('index'));
			}
		}

	}

	public function insert() {
		if ($this->_post('biz', 'intval') && C('open_biz') == 1) {
			$_POST['wxid'] = uniqid('id_');
			$_POST['weixin'] = uniqid('wx_');
			$_POST['ifbiz'] = 1;

		}
		$data = M('User_group')->field('wechat_card_num')->where(array('id' => session('gid')))->find();
		$users = M('Users')->where(array('id' => session('uid')))->find();
		//
		if ($this->isAgent) {
			$needPay = 0;
			if (($users['viptime'] - $users['createtime'] - 20) > $this->reg_validDays * 24 * 3600 || $this->reg_validDays > 30) {
				$needPay = 1;
			}
			if ($needPay) {
				$pricebyMonth = intval($this->thisAgent['wxacountprice']) / 12;
				$month = ($users['viptime'] - time()) / (30 * 24 * 3600);
				$month = intval($month);
				$price = $month * $pricebyMonth;
				$price = intval($price);
				if ($price > $this->thisAgent['moneybalance']) {
					$this->error('请联系您的站长处理');
				}
			}
		}
		//
		if ($users['wechat_card_num'] < $data['wechat_card_num']) {

		} else {
			$this->error('您的VIP等级所能创建的公众号数量已经到达上线，请购买后再创建', U('User/Index/index'));exit();
		}
		//$this->alli_nsert('Wxuser');
		//
		$db = D('Wxuser');
		if ($this->isAgent) {
			$_POST['agentid'] = $this->thisAgent['id'];
		}
		//
		$randLength = 43;
		$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$len = strlen($chars);
		$randStr = '';
		for ($i = 0; $i < $randLength; $i++) {
			$randStr .= $chars[rand(0, $len - 1)];
		}
		$aeskey = $randStr;
		$_POST['aeskey'] = $aeskey;
		$_POST['encode'] = 0;
		//
		$pigSecret = $this->get_token(20, 0, 1);
		$_POST['pigsecret'] = $pigSecret;
		if ($db->create() === false) {
			$this->error($db->getError());
		} else {

			$id = $db->add();
			if ($id) {
				if ($this->isAgent) {
					$wxuserCount = M('Wxuser')->where(array('agentid' => $this->thisAgent['id']))->count();
					M('Agent')->where(array('id' => $this->thisAgent['id']))->save(array('wxusercount' => $wxuserCount));
					if ($this->thisAgent['wxacountprice']) {
						//试用期内不扣费
						if ($needPay) {
							$pricebyMonth = intval($this->thisAgent['wxacountprice']) / 12;
							$month = ($users['viptime'] - time()) / (30 * 24 * 3600);
							$month = intval($month);
							$price = $month * $pricebyMonth;
							M('Agent')->where(array('id' => $this->thisAgent['id']))->setDec('moneybalance', $price);
							M('Agent_expenserecords')->add(array('agentid' => $this->thisAgent['id'], 'amount' => (0 - $price), 'des' => $this->user['username'] . '(uid:' . $this->user['id'] . ')添加公众号' . $_POST['wxname'] . '(' . $month . '个月)', 'status' => 1, 'time' => time()));
						}
					}
				}
				M('Users')->field('wechat_card_num')->where(array('id' => session('uid')))->setInc('wechat_card_num');
				$this->addfc();
				M('Diymen_set')->add(array('appid' => trim($this->_post('appid')), 'token' => $this->_post('token'), 'appsecret' => trim($this->_post('appsecret'))));
				//
				$this->success('操作成功', U('Index/index'));
			} else {
				$this->error('操作失败', U('Index/index'));
			}
		}

	}

	//功能
	public function autos() {
		$this->display();
	}

	public function addfc() {
		$token_open = M('Token_open');
		$open['uid'] = session('uid');
		$open['token'] = $_POST['token'];
		$gid = session('gid');
		if (C('agent_version') && $this->agentid) {
			//$fun=M('Agent_function')->field('funname,gid,isserve')->where('`gid` <= '.$gid.' AND agentid='.$this->agentid)->select();
			$fun = M('User_group')->field('func')->where('`id` = ' . $gid . ' AND agentid=' . $this->agentid)->select();
		} else {
			//$fun=M('Function')->field('funname,gid,isserve')->where('`gid` <= '.$gid)->select();
			$fun = M('User_group')->field('func')->where('`id` = ' . $gid)->select();
		}
		foreach ($fun as $key => $vo) {
			$queryname .= $vo['func'] . ',';
		}
		$open['queryname'] = rtrim($queryname, ',');
		$token_open->data($open)->add();
	}

	public function usersave() {
		$pwd = $this->_post('password');
		if ($pwd != false) {
			$data['password'] = md5($pwd);
			$data['id'] = $_SESSION['uid'];
			$user = M('Users')->where(array('id' => $_SESSION['uid']))->find();
			if ($user['username'] == 'demo') {
				$this->error('别改了，这是公共测试账号！', U('Index/useredit'));
			}
			if (M('Users')->save($data)) {
				$this->success('密码修改成功！', U('Index/index'));
			} else {
				$this->error('密码修改失败！', U('Index/index'));
			}
		} else {
			$this->error('密码不能为空！', U('Index/useredit'));
		}
	}
	//处理关键词
	public function handleKeywords() {
		$Model = new Model();
		//检查system表是否存在
		$keyword_db = M('Keyword');
		$count = $keyword_db->where('pid>0')->count();
		//
		$i = intval($_GET['i']);
		//
		if ($i < $count) {
			$img_db = M($data['module']);
			$back = $img_db->field('id,text,pic,url,title')->limit(9)->order('id desc')->where($like)->select();
			//
			$rt = $Model->query("CREATE TABLE IF NOT EXISTS `tp_system_info` (`lastsqlupdate` INT( 10 ) NOT NULL ,`version` VARCHAR( 10 ) NOT NULL) ENGINE = MYISAM CHARACTER SET utf8");
			$this->success('关键词处理中:' . $row['des'], '?g=User&m=Create&a=index');
		} else {
			exit('更新完成，请测试关键词回复');
		}
	}
	public function bindHelp() {
		$where['id'] = $this->_get('id', 'intval');
		$where['uid'] = session('uid');
		$thisWx = apiInfo::info($this->user['id'], intval($_GET['id']));
		$this->assign('wxuser', $thisWx);
		$this->display();
	}
	public function bindTip() {
		if (class_exists('demoImport')) {
			$this->assign('demo', 1);
			//
			$token = $this->get_token();
			$pigSecret = $this->get_token(20, 0, 1);
			$wxinfo = M('wxuser')->where(array('uid' => intval(session('uid'))))->find();
			if (!$wxinfo) {
				$demoImport = new demoImport(session('uid'), $token, $pigSecret);
			}
			$wxinfo = M('wxuser')->where(array('uid' => intval(session('uid'))))->find();
			$this->assign('wxinfo', $wxinfo);
			//
			$this->assign('token', $token);
		}
		$this->display();
	}
	public function switchTPl() {

		if (IS_AJAX) {
			$id = (int) $this->_post('value');

			if ($id == 1) {
				if (M("Users")->where(array("id" => (int) session('uid')))->setField('usertplid', 1)) {
					echo 200;
				} else {
					echo 500;
				}

			} else {
				if (M("Users")->where(array("id" => (int) session('uid')))->setField('usertplid', 0)) {
					echo 200;
				} else {
					echo 500;
				}
			}

		} else {
			$this->display();
		}
	}

	public function qiye() {
		$where = array('uid' => intval(session('uid')), 'id' => intval($_GET['id']));
		$wxinfo = M('Wxuser')->where($where)->find();
		if (empty($wxinfo)) {
			$this->error('参数错误,请稍后再试~');
		}
		$oa = new oa($wxinfo);
		$url = $oa->url();

		$this->assign("oaurl", $url);
		$this->display();
	}

	public function usemssql() {
		$usercard = M('usercard');
		dump($usercard->select());
		// 必须添加表前缀dbo.
		$MerchantWechatCard = M('merchantwechatcardtab', 'dbo.', 'DB_CONFIG2');
		$rs = $MerchantWechatCard->select();
		// dump($r);
		foreach ($rs as $key => $value) {
			# code...
			unset($value['MerchantWechatCardID']);
			unset($value['AddTime']);
			// dump($value);die;
			// unset($value['MerchantWechatCardID']);
			$r = $usercard->add($value);
			if ($r > 0) {
				echo 'insert success';
			} else {
				echo 'insert error';
			}
		}
		$this->display();
	}

	public function usemssql2() {
		$usercard = M('user2');
		dump($usercard->select());
		// 必须添加表前缀dbo.
		$MerchantWechatCard = M('merchantmessagetab', 'dbo.', 'DB_CONFIG2');
		$rs = $MerchantWechatCard->select();
		// dump($r);
		foreach ($rs as $key => $value) {
			# code...
			// unset($value['MerchantWechatCardID']);
			// unset($value['AddTime']);
			// dump($value);die;
			// unset($value['MerchantWechatCardID']);
			$r = $usercard->add($value);
			if ($r > 0) {
				echo 'insert success';
			} else {
				echo 'insert error';
			}
		}
		$this->display();
	}

	public function usemssql3() {
		$usercard = M('user_article');
		dump($usercard->select());
		// 必须添加表前缀dbo.
		$MerchantWechatCard = M('newsmessagetab', 'dbo.', 'DB_CONFIG2');
		$rs = $MerchantWechatCard->select();
		// dump($r);
		foreach ($rs as $key => $value) {
			# code...
			// unset($value['MerchantWechatCardID']);
			// unset($value['AddTime']);
			// dump($value);die;
			// unset($value['MerchantWechatCardID']);
			$r = $usercard->add($value);
			if ($r > 0) {
				echo 'insert success';
			} else {
				echo 'insert error';
			}
		}
		$this->display();
	}

	public function usemssql4() {
		$usercard = M('rechargeratesettab');
		dump($usercard->select());
		// 必须添加表前缀dbo.
		$MerchantWechatCard = M('rechargeratesettab', 'dbo.', 'DB_CONFIG2');
		$rs = $MerchantWechatCard->select();
		// dump($r);
		foreach ($rs as $key => $value) {
			# code...
			// unset($value['MerchantWechatCardID']);
			// unset($value['AddTime']);
			// dump($value);die;
			// unset($value['MerchantWechatCardID']);
			$r = $usercard->add($value);
			if ($r > 0) {
				echo 'insert success';
			} else {
				echo 'insert error';
			}
		}
		$this->display();
	}

	public function usemssql5() {
		$usercard = M('messagearriveratiotab');
		dump($usercard->select());
		// 必须添加表前缀dbo.
		$MerchantWechatCard = M('messagearriveratiotab', 'dbo.', 'DB_CONFIG2');
		$rs = $MerchantWechatCard->select();
		// dump($r);
		foreach ($rs as $key => $value) {
			# code...
			// unset($value['MerchantWechatCardID']);
			// unset($value['AddTime']);
			// dump($value);die;
			// unset($value['MerchantWechatCardID']);
			$r = $usercard->add($value);
			if ($r > 0) {
				echo 'insert success';
			} else {
				echo 'insert error';
			}
		}
		$this->display();
	}

	public function usemssql6() {
		$usercard = M('merchantloginlogtab');
		dump($usercard->select());
		// 必须添加表前缀dbo.
		$MerchantWechatCard = M('merchantloginlogtab', 'dbo.', 'DB_CONFIG2');
		$rs = $MerchantWechatCard->select();
		// dump($r);
		foreach ($rs as $key => $value) {
			# code...
			// unset($value['MerchantWechatCardID']);
			// unset($value['AddTime']);
			// dump($value);die;
			// unset($value['MerchantWechatCardID']);
			$r = $usercard->add($value);
			if ($r > 0) {
				echo 'insert success';
			} else {
				echo 'insert error';
			}
		}
		$this->display();
	}

	public function usemssql7() {
		$usercard = M('merchantcertificatetab');
		dump($usercard->select());
		// 必须添加表前缀dbo.
		$MerchantWechatCard = M('merchantcertificatetab', 'dbo.', 'DB_CONFIG2');
		$rs = $MerchantWechatCard->select();
		// dump($r);
		foreach ($rs as $key => $value) {
			# code...
			// unset($value['MerchantWechatCardID']);
			// unset($value['AddTime']);
			// dump($value);die;
			// unset($value['MerchantWechatCardID']);
			$r = $usercard->add($value);
			if ($r > 0) {
				echo 'insert success';
			} else {
				echo 'insert error';
			}
		}
		$this->display();
	}

	public function usemssql8() {
		$usercard = M('fundstransactionrecordtab');
		dump($usercard->select());
		// 必须添加表前缀dbo.
		$MerchantWechatCard = M('fundstransactionrecordtab', 'dbo.', 'DB_CONFIG2');
		$rs = $MerchantWechatCard->select();
		// dump($r);
		foreach ($rs as $key => $value) {
			# code...
			// unset($value['MerchantWechatCardID']);
			// unset($value['AddTime']);
			// dump($value);die;
			// unset($value['MerchantWechatCardID']);
			$r = $usercard->add($value);
			if ($r > 0) {
				echo 'insert success';
			} else {
				echo 'insert error';
			}
		}
		$this->display();
	}

	public function usemssql9() {
		$usercard = M('withdrawalbankmessagetab');
		dump($usercard->select());
		// 必须添加表前缀dbo.
		$MerchantWechatCard = M('withdrawalbankmessagetab', 'dbo.', 'DB_CONFIG2');
		$rs = $MerchantWechatCard->select();
		// dump($r);
		foreach ($rs as $key => $value) {
			# code...
			// unset($value['MerchantWechatCardID']);
			// unset($value['AddTime']);
			// dump($value);die;
			// unset($value['MerchantWechatCardID']);
			$r = $usercard->add($value);
			if ($r > 0) {
				echo 'insert success';
			} else {
				echo 'insert error';
			}
		}
		$this->display();
	}

	public function usemssql10() {
		$usercard = M('bankmessagetab');
		dump($usercard->select());
		// 必须添加表前缀dbo.
		$MerchantWechatCard = M('bankmessagetab', 'dbo.', 'DB_CONFIG2');
		$rs = $MerchantWechatCard->select();
		// dump($r);
		foreach ($rs as $key => $value) {
			# code...
			// unset($value['MerchantWechatCardID']);
			// unset($value['AddTime']);
			// dump($value);die;
			// unset($value['MerchantWechatCardID']);
			$r = $usercard->add($value);
			if ($r > 0) {
				echo 'insert success';
			} else {
				echo 'insert error';
			}
		}
		$this->display();
	}

	public function usemssql11() {
		$usercard = M('shortmessagesendtab');
		dump($usercard->select());
		// 必须添加表前缀dbo.
		$MerchantWechatCard = M('shortmessagesendtab', 'dbo.', 'DB_CONFIG2');
		$rs = $MerchantWechatCard->select();
		// dump($r);
		foreach ($rs as $key => $value) {
			# code...
			// unset($value['MerchantWechatCardID']);
			// unset($value['AddTime']);
			// dump($value);die;
			// unset($value['MerchantWechatCardID']);
			$r = $usercard->add($value);
			if ($r > 0) {
				echo 'insert success';
			} else {
				echo 'insert error';
			}
		}
		$this->display();
	}

    public function usemssql12() {
        $usercard = M('paysystem_admin');
        dump($usercard->select());
        // 必须添加表前缀dbo.
        $MerchantWechatCard = M('managemessagetab', 'dbo.', 'DB_CONFIG2');
        $rs = $MerchantWechatCard->select();
        // dump($r);
        foreach ($rs as $key => $value) {
            # code...
            // unset($value['MerchantWechatCardID']);
            // unset($value['AddTime']);
            // dump($value);die;
            // unset($value['MerchantWechatCardID']);
            $r = $usercard->add($value);
            if ($r > 0) {
                echo 'insert success';
            } else {
                echo 'insert error';
            }
        }
        $this->display();
    }

    public function usemssql13() {
        $usercard = M('merchantmessagetab');
        dump($usercard->select());
        // 必须添加表前缀dbo.
        $MerchantWechatCard = M('merchantmessagetab', 'dbo.', 'DB_CONFIG2');
        $rs = $MerchantWechatCard->select();
        // dump($r);
        foreach ($rs as $key => $value) {
            # code...
            // unset($value['MerchantWechatCardID']);
            // unset($value['AddTime']);
            // dump($value);die;
            // unset($value['MerchantWechatCardID']);
            $r = $usercard->add($value);
            if ($r > 0) {
                echo 'insert success';
            } else {
                echo 'insert error';
            }
        }
        $this->display();
    }

    public function usemssql14() {
        $usercard = M('merchantclasstab');
        dump($usercard->select());
        // 必须添加表前缀dbo.
        $MerchantWechatCard = M('merchantclasstab', 'dbo.', 'DB_CONFIG2');
        $rs = $MerchantWechatCard->select();
        // dump($r);
        foreach ($rs as $key => $value) {
            # code...
            // unset($value['MerchantWechatCardID']);
            // unset($value['AddTime']);
            // dump($value);die;
            // unset($value['MerchantWechatCardID']);
            $r = $usercard->add($value);
            if ($r > 0) {
                echo 'insert success';
            } else {
                echo 'insert error';
            }
        }
        $this->display();
    }

    public function usemssql15() {
        $usercard = M('paymentpassagesettab');
        dump($usercard->select());
        // 必须添加表前缀dbo.
        $MerchantWechatCard = M('paymentpassagesettab', 'dbo.', 'DB_CONFIG2');
        $rs = $MerchantWechatCard->select();
        // dump($r);
        foreach ($rs as $key => $value) {
            # code...
            // unset($value['MerchantWechatCardID']);
            // unset($value['AddTime']);
            // dump($value);die;
            // unset($value['MerchantWechatCardID']);
            $r = $usercard->add($value);
            if ($r > 0) {
                echo 'insert success';
            } else {
                echo 'insert error';
            }
        }
        $this->display();
    }

    public function usemssql16() {
        $usercard = M('servicepaymentrequesttab');
        dump($usercard->select());
        // 必须添加表前缀dbo.
        $MerchantWechatCard = M('servicepaymentrequesttab', 'dbo.', 'DB_CONFIG2');
        $rs = $MerchantWechatCard->select();
        // dump($r);
        foreach ($rs as $key => $value) {
            # code...
            // unset($value['MerchantWechatCardID']);
            // unset($value['AddTime']);
            // dump($value);die;
            // unset($value['MerchantWechatCardID']);
            $r = $usercard->add($value);
            if ($r > 0) {
                echo 'insert success';
            } else {
                echo 'insert error';
            }
        }
        $this->display();
    }

    public function usemssql17() {
        $usercard = M('serviceclasstab');
        dump($usercard->select());
        // 必须添加表前缀dbo.
        $MerchantWechatCard = M('serviceclasstab', 'dbo.', 'DB_CONFIG2');
        $rs = $MerchantWechatCard->select();
        // dump($r);
        foreach ($rs as $key => $value) {
            # code...
            // unset($value['MerchantWechatCardID']);
            // unset($value['AddTime']);
            // dump($value);die;
            // unset($value['MerchantWechatCardID']);
            $r = $usercard->add($value);
            if ($r > 0) {
                echo 'insert success';
            } else {
                echo 'insert error';
            }
        }
        $this->display();
    }

    public function usemssql18() {
        $usercard = M('goodsmessagetab');
        dump($usercard->select());
        // 必须添加表前缀dbo.
        $MerchantWechatCard = M('goodsmessagetab', 'dbo.', 'DB_CONFIG2');
        $rs = $MerchantWechatCard->select();
        // dump($r);
        foreach ($rs as $key => $value) {
            # code...
            // unset($value['MerchantWechatCardID']);
            // unset($value['AddTime']);
            // dump($value);die;
            // unset($value['MerchantWechatCardID']);
            $r = $usercard->add($value);
            if ($r > 0) {
                echo 'insert success';
            } else {
                echo 'insert error';
            }
        }
        $this->display();
    }

    public function usemssql19() {
        $usercard = M('goodsclasstab');
        dump($usercard->select());
        // 必须添加表前缀dbo.
        $MerchantWechatCard = M('goodsclasstab', 'dbo.', 'DB_CONFIG2');
        $rs = $MerchantWechatCard->select();
        // dump($r);
        foreach ($rs as $key => $value) {
            # code...
            // unset($value['MerchantWechatCardID']);
            // unset($value['AddTime']);
            // dump($value);die;
            // unset($value['MerchantWechatCardID']);
            $r = $usercard->add($value);
            if ($r > 0) {
                echo 'insert success';
            } else {
                echo 'insert error';
            }
        }
        $this->display();
    }

    public function usemssql20() {
        $usercard = M('newsmessagetab');
        dump($usercard->select());
        // 必须添加表前缀dbo.
        $MerchantWechatCard = M('newsmessagetab', 'dbo.', 'DB_CONFIG2');
        $rs = $MerchantWechatCard->select();
        // dump($r);
        foreach ($rs as $key => $value) {
            # code...
            // unset($value['MerchantWechatCardID']);
            // unset($value['AddTime']);
//             dump($value);die;
            // unset($value['MerchantWechatCardID']);
//            foreach ($value as $k => $v) {
////                echo $v . '<br>';
//                if ($v == null) {
//                    echo 'null';
//                    $value[$k] = 0;
//                }
//                if ($v == '0') {
//                    echo 'null';
//                    $value[$k] = '999';
//                }
//                if ($v == 0) {
//                    echo 'null';
//                    $value[$k] = '999';
//                }
//                $value[$k] = '999';
//            }
//            die;
//            $value['IsReward'] = '1';
//            $value['SetRewardID'] = '1';
//            $value['RewardTaskID'] = '1';
//            $value['BackMusic'] = '1';
//            dump($value);die;
//            $value['Title'] = '1';
//            $value['Content'] = htmlspecialchars($value['Content']);
//            dump($value);die;
//            $value['Content'] = '2';
//            $value['SellPrice'] = '3';
//            $value['NewsProperty'] = '4';
            $r = $usercard->add($value);

            if ($r > 0) {
                echo 'insert success';
            } else {
                echo 'insert error';
                echo $usercard->getlastsql();
                die;
            }
        }
        $this->display();
    }

    public function usemssql21() {
        $usercard = M('merchantmobilelisttab');
        dump($usercard->select());
        // 必须添加表前缀dbo.
        $MerchantWechatCard = M('merchantmobilelisttab', 'dbo.', 'DB_CONFIG2');
        $rs = $MerchantWechatCard->select();
        // dump($r);
        foreach ($rs as $key => $value) {
            # code...
            // unset($value['MerchantWechatCardID']);
            // unset($value['AddTime']);
            // dump($value);die;
            // unset($value['MerchantWechatCardID']);
            $r = $usercard->add($value);
            if ($r > 0) {
                echo 'insert success';
            } else {
                echo 'insert error';
            }
        }
        $this->display();
    }

    public function usemssql22() {
        $usercard = M('merchantmobileclasstab');
        dump($usercard->select());
        // 必须添加表前缀dbo.
        $MerchantWechatCard = M('merchantmobileclasstab', 'dbo.', 'DB_CONFIG2');
        $rs = $MerchantWechatCard->select();
        // dump($r);
        foreach ($rs as $key => $value) {
            # code...
            // unset($value['MerchantWechatCardID']);
            // unset($value['AddTime']);
            // dump($value);die;
            // unset($value['MerchantWechatCardID']);
            $r = $usercard->add($value);
            if ($r > 0) {
                echo 'insert success';
            } else {
                echo 'insert error';
            }
        }
        $this->display();
    }

    public function usemssql23() {
        $usercard = M('fundschangerecordtab');
        dump($usercard->select());
        // 必须添加表前缀dbo.
        $MerchantWechatCard = M('fundschangerecordtab', 'dbo.', 'DB_CONFIG2');
        $rs = $MerchantWechatCard->select();
        // dump($r);
        foreach ($rs as $key => $value) {
            # code...
            // unset($value['MerchantWechatCardID']);
            // unset($value['AddTime']);
            // dump($value);die;
            // unset($value['MerchantWechatCardID']);
            $r = $usercard->add($value);
            if ($r > 0) {
                echo 'insert success';
            } else {
                echo 'insert error';
            }
        }
        $this->display();
    }

    public function usemssql24() {
        $usercard = M('transactionclasstab');
        dump($usercard->select());
        // 必须添加表前缀dbo.
        $MerchantWechatCard = M('transactionclasstab', 'dbo.', 'DB_CONFIG2');
        $rs = $MerchantWechatCard->select();
        // dump($r);
        foreach ($rs as $key => $value) {
            # code...
            // unset($value['MerchantWechatCardID']);
            // unset($value['AddTime']);
            // dump($value);die;
            // unset($value['MerchantWechatCardID']);
            $r = $usercard->add($value);
            if ($r > 0) {
                echo 'insert success';
            } else {
                echo 'insert error';
            }
        }
        $this->display();
    }

    public function usemssql25() {
        $usercard = M('altermoneyrecordtab');
        dump($usercard->select());
        // 必须添加表前缀dbo.
        $MerchantWechatCard = M('altermoneyrecordtab', 'dbo.', 'DB_CONFIG2');
        $rs = $MerchantWechatCard->select();
        // dump($r);
        foreach ($rs as $key => $value) {
            # code...
            // unset($value['MerchantWechatCardID']);
            // unset($value['AddTime']);
            // dump($value);die;
            // unset($value['MerchantWechatCardID']);
            $r = $usercard->add($value);
            if ($r > 0) {
                echo 'insert success';
            } else {
                echo 'insert error';
            }
        }
        $this->display();
    }
}
?>