<?php
class Red_packetAction extends WapAction {
	public $packet_info;
	function _initialize() {
		parent::_initialize();
		$id = $this->_get('id', 'intval');
		$where = array('token' => $this->token, 'is_open' => '1', 'id' => $id);
		$this->packet_info = M('Red_packet')->where($where)->find();

		if (empty($this->packet_info)) {
			$this->error('活动还没有开启');
		}

		$openid = '';

		$Userinfo = M('Userinfo')->where(array('token' => $this->token, 'wecha_id' => $this->wecha_id))->find();
		// if (empty($Userinfo)){
		// 	$this->error('请先完善个人资料再参加活动',U('Userinfo/index',array('token'=>$this->token,'wecha_id'=>$this->wecha_id,'redirect'=>MODULE_NAME.'/index|id:'.$id)));
		// }

		$this->assign('packet_info', $this->packet_info);
	}

//    显示红包发放引导页面，取名fake只是为了说明这是诱导页面
    function fake_1() {
        $this->display();
    }

    // 提示关注页面
    function guanzhu() {
        $this->display();
    }

    /**
     * Returns the url query as associative array
     *
     * @param    string    query
     * @return    array    params
     */
    function convertUrlQuery($query) {
        $queryParts = explode('&', $query);

        $params = array();
        foreach ($queryParts as $param) {
            $item = explode('=', $param);
            $params[$item[0]] = $item[1];
        }

        return $params;
    }

    function getUrlQuery($array_query) {
        $tmp = array();
        foreach ($array_query as $k => $param) {
            $tmp[] = $k . '=' . $param;
        }
        $params = implode('&', $tmp);
        return $params;
    }

//    红包拆开页面
    function chaikai() {
        // 直接把自己作为授权页面
        include 'WxOAuth2.class.php';
        $oauth2 = new WxOAuth2();
        $v_token = $this->_get('token');
        $code = $this->_get('code');
        $state = $this->_get('state');

        vendor('WxJssdk.jssdk', '', '.php');
        $jssdk = new JSSDK("wxb959b9317dd0b640", "41b38fa3cbd209b713dd91764666379e");
//        $jsoncallback = $_GET['jsoncallback'];
//        $url1 = $_GET['url1'];
        $_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
//        $_url_array = parse_url($_url);
//        $_query_query = convertUrlQuery($_url_array['query']);
//        foreach ($_query_query as $k => $v) {
//            if ();
//        }
//        使用正则去掉不需要jssdk编码的参数
//        $_url = preg_replace('/&(code(.*))/', '', $_url);
        $signPackage = $jssdk->GetSignPackage($_url);
        $this->assign('signpackage', $signPackage);
        $_url = preg_replace('/&(code(.*))/', '', $_url);
        $this->assign('url', $_url);

        // 如果没有授权，就去授权
        if (!$state) {
            $appid = M('wxuser')->where(array('token' => $v_token))->getField('appid');
            $oauth2->app_id = $appid;
            $callback = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'];
//            $url = $oauth2->get_authorize_url($callback, 'snsapi_base', $v_token);
            $url = $oauth2->get_authorize_url($callback, 'snsapi_userinfo',
                $v_token);
            header('location:' . $url);
        } else {
            if ($code) {
                // 如果用户同意授权
                // 根据用户标识来确定app_id
                $wxuser = M('wxuser')->where(array('token' => $v_token))->find();
                // dump($wxuser);
                $oauth2->app_id = $wxuser['appid'];
                $oauth2->app_secret = $wxuser['appsecret'];
                // 确认授权后会，根据返回的code获取token
                $token_arr = $oauth2->get_access_token($wxuser['appid'], $wxuser['appsecret'], $code);
                if (!$token_arr) {
                    die;
                } else {
                    // header('location:' . implode(',', $token_arr));
                }
                $user_info = $oauth2->get_user_info($token_arr['access_token'], $token_arr['openid']); //获取用户信息
//                dump($user_info);
                $user_info['privilege'] = json_encode($user_info['privilege']);
//                echo $v_token;
                if ($user_info['openid']) {
                    $user_info['token'] = $v_token;
                    $ir = M('wechat_group_list')->add($user_info);
                }
                if ($ir) {
//                    echo '添加到数据库成功';
                } else {
//                    echo '添加到数据库失败1';
                }
                $this->assign('openid', $token_arr['openid']);
                $this->assign('headimgurl', $user_info['headimgurl']);
                if (!$this->wecha_id) {
                    $this->openid = $this->wecha_id = $token_arr['openid'];
                    $this->assign('reopenid', $this->wecha_id);
                }
                $this->assign('is_start', $this->is_start($this->packet_info['id']));
                $this->display();
            }
        }
    }

//    检查红包状态
    function checkpay() {
        $result = array();
        $id = $this->_get('id', 'intval');
        $openid = $this->_get('wecha_id');
        $ucode = $this->_post('ucode');
        // echo $openid;

        if ($this->is_start() == 1) {
            $result['err'] = 1;
            $result['msg'] = '活动还没有开始，请耐心等待！';
            echo json_encode($result);
            exit;
        }

        if ($this->is_start() == 2) {
            $result['err'] = 2;
            $result['msg'] = '活动已经结束，敬请关注下一轮活动开始！';
            echo json_encode($result);
            exit;
        }

        $pwhere = array('token' => $this->token, 'wecha_id' => $ucode, 'packet_id' => $id);
        $p_count = M('Red_packet_log')->where($pwhere)->count();

        /*奖品数量消耗完提示红包被领光*/
        if ($p_count >= $this->packet_info['get_number']) {
            $result['err'] = 3;
            $result['msg'] = '领取次数已经用光了！<br/>点击“我的红包”查看记录';
            echo json_encode($result);
            exit;
        }

        if (!$this->check_packet_type()) {
            $result['err'] = 4;
            $result['msg'] = '红包已经领光啦，敬请关注下一轮活动开始！';
            echo json_encode($result);
            exit;
        }

        $result['err'] = 1989;
        $result['msg'] = '可以领取红包';
        echo json_encode($result);
    }

//    使用企业付款发红包
    function pay() {
        if ($this->packet_info['packet_type'] == '1') {
            $max = $this->packet_info['item_max']; //单个上限
            if ($this->packet_info['deci'] == 0) {
                $prize = mt_rand(1, $max);
            } else if ($this->packet_info['deci'] == 1) {
                $prize = mt_rand(1, $max * 10) / 10;
            } else if ($this->packet_info['deci'] == 2) {
                //$prize 		= mt_rand(1,$max*100)/100;
                $prize = sprintf("%.2f", mt_rand(1, $max * 100) / 100);
            }
            $prize_name = $prize . '元';
        } else if ($this->packet_info['packet_type'] == '2') {
            $unit = $this->packet_info['item_unit']; //面额
            $prize = $this->packet_info['item_unit'];
            $prize_name = $prize . '元';
        }
//        抽中红包返回
        $result['err'] = 0;
        $result['msg'] = '恭喜您抽中了' . $prize_name . ',返回到微信主界面即可领取';
        $result['money'] = $prize;

//        红包活动id
        $id = $this->_get('id');
//        获得openid
        $ucode = $this->_post('ucode');
        $log = array();
        $log['token'] = $this->token;
        $log['wecha_id'] = $ucode;
        $log['packet_id'] = $id;
        $log['prize_name'] = $prize_name;
        $log['worth'] = $prize;
        $log['add_time'] = time();
        $log['type'] = $this->packet_info['packet_type'];
        $md5 = $ucode . $id . $prize . time();
        $log['code'] = substr(md5($md5), 0, 12);

        $log_id = M('Red_packet_log')->add($log);
        if ($log_id) {
            echo json_encode($result);
            // 这里使用企业付款发红包
            vendor('WxPay.class#wxpay');
            $pay = new WxPay();
            $payarr['amount'] = 1; // 红包金额，单位为分
            $pay->mch_pay($ucode, null, $payarr);
            exit;
        } else {
            $result['err'] = 5;
            $result['msg'] = '未知错误，请稍后再试';
            $result['type'] = $this->packet_info['packet_type'];
            $result['prize'] = $prize;
            echo json_encode($result);
            exit;
        }
    }

	function index() {
		// 直接把自己作为授权页面
		include 'WxOAuth2.class.php';
		$oauth2 = new WxOAuth2();
		$v_token = $this->_get('token');
		$code = $this->_get('code');
		$state = $this->_get('state');

		// 如果没有授权，就去授权
		if (!$state) {
			$appid = M('wxuser')->where(array('token' => $v_token))->getField('appid');
			$oauth2->app_id = $appid;
			$callback = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'];
			$url = $oauth2->get_authorize_url($callback, 'snsapi_base', $v_token);
			header('location:' . $url);
		} else {
			if ($code) {
				// 如果用户同意授权
				// 根据用户标识来确定app_id
				$wxuser = M('wxuser')->where(array('token' => $v_token))->find();
				// dump($wxuser);
				$oauth2->app_id = $wxuser['appid'];
				$oauth2->app_secret = $wxuser['appsecret'];
				// 确认授权后会，根据返回的code获取token
				$token_arr = $oauth2->get_access_token($wxuser['appid'], $wxuser['appsecret'], $code);
				if (!$token_arr) {
					die;
				} else {
					// header('location:' . implode(',', $token_arr));
				}
				// $user_info = $oauth2->get_user_info($token_arr['access_token'], $token_arr['openid']); //获取用户信息
				$this->assign('openid', $token_arr['openid']);
				if (!$this->wecha_id) {
					$this->openid = $this->wecha_id = $token_arr['openid'];
					$this->assign('reopenid', $this->wecha_id);
				}
				$this->assign('is_start', $this->is_start($this->packet_info['id']));
				$this->display();
			}
		}
	}

	function getPacket() {
		$result = array();
		$id = $this->_get('id', 'intval');
		$openid = $this->_get('wecha_id');
		// echo $openid;

		if ($this->is_start() == 1) {
			$result['err'] = 1;
			$result['msg'] = '活动还没有开始，请耐心等待！';
			echo json_encode($result);
			exit;
		}

		if ($this->is_start() == 2) {
			$result['err'] = 2;
			$result['msg'] = '活动已经结束，敬请关注下一轮活动开始！';
			echo json_encode($result);
			exit;
		}

		$pwhere = array('token' => $this->token, 'wecha_id' => $this->wecha_id, 'packet_id' => $id);
		$p_count = M('Red_packet_log')->where($pwhere)->count();

		/*奖品数量消耗完提示红包被领光*/
		if ($p_count >= $this->packet_info['get_number']) {
			$result['err'] = 3;
			$result['msg'] = '领取次数已经用光了！<br/>点击“我的红包”查看记录';
			echo json_encode($result);
			exit;
		}

		if (!$this->check_packet_type()) {
			$result['err'] = 4;
			$result['msg'] = '红包已经领光啦，敬请关注下一轮活动开始！';
			echo json_encode($result);
			exit;
		}

		if ($this->packet_info['packet_type'] == '1') {
			$max = $this->packet_info['item_max']; //单个上限
			if ($this->packet_info['deci'] == 0) {
				$prize = mt_rand(1, $max);
			} else if ($this->packet_info['deci'] == 1) {
				$prize = mt_rand(1, $max * 10) / 10;
			} else if ($this->packet_info['deci'] == 2) {
				//$prize 		= mt_rand(1,$max*100)/100;
				$prize = sprintf("%.2f", mt_rand(1, $max * 100) / 100);

			}

			$prize_name = $prize . '元';

		} else if ($this->packet_info['packet_type'] == '2') {
			$unit = $this->packet_info['item_unit']; //面额
			$prize = $this->packet_info['item_unit'];
			$prize_name = $prize . '元';
		}

		$result['err'] = 0;
		$result['msg'] = '恭喜您抽中了' . $prize_name . ',返回到微信主界面即可领取';

		$log = array();
		$log['token'] = $this->token;
		$log['wecha_id'] = $this->wecha_id;
		$log['packet_id'] = $id;
		$log['prize_name'] = $prize_name;
		$log['worth'] = $prize;
		$log['add_time'] = time();
		$log['type'] = $this->packet_info['packet_type'];
		$md5 = $this->wecha_id . $id . $prize . time();
		$log['code'] = substr(md5($md5), 0, 12);

		$log_id = M('Red_packet_log')->add($log);
		if ($log_id) {
			echo json_encode($result);
			// 这里做发微信红包处理
			vendor('WxPay.class#wxpay');
			$pay = new WxPay();

			if ($prize < 1) {
				// 如果中奖金额小于100分，做100补齐
				$payarr['total_amount'] = 100;
				$payarr['min_value'] = 100;
				$payarr['max_value'] = 100;
				$pay->pay($openid, null, $payarr);
			} else {
				// vendor('WxPay.class#wxpay');
				// $pay = new WxPay();
				// $payarr['total_amount'] = $prize_name * 100;
				// $payarr['min_value'] = $prize_name * 100;
				// $payarr['max_value'] = $prize_name * 100;
				// echo $this->wecha_id;
				// // $pay->pay('o7F8auB73FIMKIB1RWf_VleZRPfM', null, $payarr);
				// $pay->pay($this->wecha_id, null, $payarr);

				$payarr['total_amount'] = $prize * 100;
				$payarr['min_value'] = $prize * 100;
				$payarr['max_value'] = $prize * 100;
				// echo $this->wecha_id;
				// $pay->pay('o7F8auB73FIMKIB1RWf_VleZRPfM', null, $payarr);
				$pay->pay($openid, null, $payarr);
			}
			exit;
		} else {
			$result['err'] = 5;
			$result['msg'] = '未知错误，请稍后再试';
			$result['type'] = $this->packet_info['packet_type'];
			$result['prize'] = $prize;
			echo json_encode($result);

			exit;
		}

	}

	/**
	 * 获取活动状态
	 */
	public function is_start($id) {
		$now = time();
		$is_start = 0;

		$where = array('token' => $this->token, 'packet_id' => $id);
		$pcount = M('Red_packet_prize')->where($where)->sum('num');

		if ($this->packet_info['start_time'] > $now) {
			$is_start = 1;
		} else if ($this->packet_info['end_time'] < $now) {
			$is_start = 2;
		} else if (!$this->check_packet_type()) {
			$is_start = 3;
		}

		return $is_start;
	}

	public function check_packet_type() {
		$flag = true;
		$where = array('token' => $this->token, 'packet_id' => $this->packet_info['id']);

		$log = M('Red_packet_log')->Distinct(true)->field('wecha_id')->where($where)->select();
		$pcount = count($log);

		if ($this->packet_info['people'] == 0 || $this->packet_info['people'] > $pcount) {
			//领取人数

			if ($this->packet_info['packet_type'] == '1') {
				$sum = $this->packet_info['item_sum']; //总额
				$lsum = M('Red_packet_log')->where($where)->sum('worth');

				if ($sum <= $lsum) {
					$flag = false;
				}

			} else if ($this->packet_info['packet_type'] == '2') {
				$num = $this->packet_info['item_num']; //领取数量
				$lcount = M('Red_packet_log')->where($where)->count();
				if ($num <= $lcount) {
					$flag = false;
				}
			}

		} else {
			$flag = false;
		}

		return $flag;
	}
/**********************/
	public function rule() {

		$this->display();
	}

/**********************/
	public function my_packet() {
		$packet_id = $this->_get('id', 'intval');
		$wecha_id = $this->_get('wecha_id', 'trim');
		$where = array('token' => $this->token, 'packet_id' => $packet_id, 'wecha_id' => $wecha_id);
		$count = M('Red_packet_log')->where($where)->count();
		//$Page   = new Page($count,10);
		//$list 	= M('Red_packet_log')->where($where)->order('is_reward asc,add_time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$list = M('Red_packet_log')->where($where)->order('is_reward asc,add_time desc')->select();

		$this->assign('list', $list);
		//$this->assign('page',$Page->show());
		$this->display();
	}

	public function reward_forms() {
		$id = $this->_get('id', 'intval');
		$rid = $this->_get('rid', 'intval');
		$where = array('token' => $this->token, 'packet_id' => $id, 'id' => $rid);
		$reward_info = M('Red_packet_log')->where($where)->find();

		$this->assign('reward_info', $reward_info);
		$this->display();
	}

	public function reward_sub() {
		$data = array();
		$result = array();
		$is_one = $this->_get('is_one', 'intval');
		$ptype = $this->_get('ptype', 'intval');

		$where = array('token' => $this->token, 'wecha_id' => $this->wecha_id, 'packet_id' => $this->_get('id', 'intval'), 'is_reward' => '0');
		if ($is_one == 1) {
			$where['id'] = $this->_get('log_id', 'intval');
			$price = M('Red_packet_log')->where($where)->getField('worth');
		} else {
			$price = M('Red_packet_log')->where($where)->sum('worth');
		}

		if (!M('Red_packet_log')->where($where)->find()) {
			$result['err'] = 1;
			$result['info'] = '请不要重复兑换';
			echo json_encode($result);
			exit;
		}

		if ($ptype == 1) {
			$pwd = $this->_get('pwd', 'trim');
			if ($this->packet_info['password'] != $pwd) {
				$result['err'] = 2;
				$result['info'] = '兑换密码错误';
				echo json_encode($result);
				exit;
			}
		}

		if ($ptype == 2) {
			$cardid = $this->_get('cardid', 'intval');

			$single_orderid = date('YmdHis', time()) . mt_rand(1000, 9999);
			$record['orderid'] = $single_orderid;
			$record['ordername'] = '红包兑换';
			$record['paytype'] = 'PacketPay';
			$record['createtime'] = time();
			$record['paid'] = 1;
			$record['price'] = $price;
			$record['token'] = $this->token;
			$record['wecha_id'] = $this->wecha_id;
			$record['type'] = 1;
			$record['module'] = 'Red_packet';

			M('Member_card_pay_record')->add($record);
			M('Userinfo')->where("wecha_id = '$this->wecha_id' AND token = '$this->token'")->setInc('balance', $price);
		}

		$log_id = M('Red_packet_log')->where($where)->getField('id', true);
		$data['token'] = $this->token;
		$data['wecha_id'] = $this->wecha_id;
		$data['price'] = $price;
		$data['packet_id'] = $this->_get('id', 'intval');
		$data['status'] = 1;
		/*$data['sncode'] 	= $this->_get('sncode','trim');
		$data['wxname'] 	= $this->_get('wxname','trim'); */
		$data['type'] = $ptype;
		$data['time'] = time();
		$data['log_id'] = join(',', $log_id);
		if ($ptype == 1) {
			$data['type_name'] = '线下兑换';
		} else if ($ptype == 2) {
			$data['type_name'] = '转入会员卡';
		} else if ($ptype == 3) {
			$data['type_name'] = '手机充值';
			$data['mobile'] = $this->_get('mobile', 'trim');
			$data['status'] = 0;
		}

		if (M('red_packet_exchange')->add($data)) {
			M('Red_packet_log')->where($where)->save(array('is_reward' => '2'));

			$result['err'] = 0;
			$result['info'] = '兑奖成功！';
		}
		//$log		= M('Red_packet_log')->where($cwhere)->field('id','code','is_reward')->find();

		echo json_encode($result);
/* 		if($log['is_reward'] != 0){
$result['err']	= 1;
$result['info']	= '你已经领过奖项啦，请不要重复兑奖！';
echo json_encode($result);
exit;
}

if($data['sncode'] == $log['code']){
$result['err']	= 0;
$result['info']	= '兑奖成功，等待确认！';
if(M('Red_packet_reward')->add($data)){
M('Red_packet_log')->where($cwhere)->save(array('is_reward'=>'1'));
}
}else{
$result['err']	= 2;
$result['info']	= '请输入有效的兑奖码!';
}	 */
	}

	public function get_sum() {
		$id = $this->_get('id', 'intval');
		$log_id = $this->_get('log_id', 'intval');
		$is_one = $this->_get('is_one');
		$where = array('token' => $this->token, 'wecha_id' => $this->wecha_id, 'packet_id' => $id, 'is_reward' => '0');
		if ($is_one == 1) {
			$where['id'] = $log_id;
			$price = M('Red_packet_log')->where($where)->getField('prize_name');
		} else {
			$count = M('Red_packet_log')->where($where)->sum('worth');
			$price = $count . '元';
		}
		$result['err'] = 0;
		$result['price'] = $price;
		echo json_encode($result);
	}

	public function get_card() {
		$where = $where = array('token' => $this->token, 'wecha_id' => $this->wecha_id);

		$card = M('Member_card_create')->where($where)->select();
		$str = '<option value="">请选择要转入的会员卡</option>';
		foreach ($card as $key => $value) {
			$card_name = M('Member_card_set')->where(array('id' => $value['cardid']))->getField('cardname');
			$str .= '<option value="' . $value['cardid'] . '">' . $card_name . '</option>';
		}

		$result['err'] = 0;
		$result['option'] = $str;
		echo json_encode($result);
	}

}