<?php
/**
 *Back2Action为公共类
 */
class MemberAction extends Back2Action {
	// 首页
	public function index() {
		if (IS_GET) {
			$s_member_uid = session('member_uid');
			$member = M('user2')->where(array('MerchantID' => $s_member_uid))->find();
			// 会员信息
			$this->member = $member;
			// 我也不知道是啥
			$rate = M('rechargeratesettab')->where(array('MerchantID' => $s_member_uid))->find();
			$this->rate = $rate;
			// 短信
			$message = M('messagearriveratiotab')->where(array('MerchantID' => $s_member_uid))->find();
			$this->message = $message;
			// ip
			$loginlog = M('merchantloginlogtab')->where(array('MerchantID' => $s_member_uid))->find();
			$this->loginlog = $loginlog;
			$this->display();
		}
	}

	public function baseinfo() {
		if (IS_GET) {
			$s_member_uid = session('member_uid');
			$member = M('user2')->where(array('MerchantID' => $s_member_uid))->find();
			$this->member = $member;
			$this->display();
		} elseif (IS_POST) {

		}
	}

	public function validate() {
		if (IS_GET) {
			$s_member_uid = session('member_uid');
			$member = M('user2')->where(array('MerchantID' => $s_member_uid))->find();
			$this->member = $member;
			// 验证资料
			$validate = M('merchantcertificatetab')->where(array('MerchantID' => $s_member_uid))->find();
			$this->validate = $validate;
			$this->display();
		} elseif (IS_POST) {

		}
	}

	public function news() {
		if (IS_GET) {
			$s_member_uid = session('member_uid');
			$member = M('user2')->where(array('MerchantID' => $s_member_uid))->find();
			$this->member = $member;
			// 验证资料
			$validate = M('merchantcertificatetab')->where(array('MerchantID' => $s_member_uid))->find();
			$this->validate = $validate;
			$this->display();
		} elseif (IS_POST) {

		}
	}

	// 微名片管理
	public function card() {
		if (IS_GET) {
			$s_member_uid = session('member_uid');
			$member = M('user2')->where(array('MerchantID' => $s_member_uid))->find();
			$this->member = $member;
			// 验证资料
			$card = M('usercard')->where(array('MerchantID' => $s_member_uid))->find();
			$this->card = $card;
			$this->display();
		} elseif (IS_POST) {

		}
	}

	// 通知之类的东西
	public function notice() {
		if (IS_GET) {
			$s_member_uid = session('member_uid');
			$member = M('user2')->where(array('MerchantID' => $s_member_uid))->find();
			$this->member = $member;
			// 验证资料
			$card = M('usercard')->where(array('MerchantID' => $s_member_uid))->find();
			$this->card = $card;
			$this->display();
		} elseif (IS_POST) {

		}
	}

	// 账户资金信息
	public function account() {
		if (IS_GET) {
			$s_member_uid = session('member_uid');
			$member = M('user2')->where(array('MerchantID' => $s_member_uid))->find();
			$this->member = $member;
			// 验证资料
			$card = M('usercard')->where(array('MerchantID' => $s_member_uid))->find();
			$this->card = $card;
			// 资金交易
			$money = M('fundstransactionrecordtab')->where(array('MerchantID' => $s_member_uid, 'TransactionClassID' => 2))->sum('TransactionMoney');
			$this->money = $money;
			// 当日订单数量
			$zero = date('Y-m-d', time());
			$nextday = date("Y-m-d", strtotime("+1 day"));
			// dump($nextday);
			$ordernum = M('fundstransactionrecordtab')->where(array('AddTime' => array('between', '$zero, $nextday')))->count();
			$this->ordernum = $ordernum;
			$totalmoney = M('fundstransactionrecordtab')->where(array('AddTime' => array('between', '$zero, $nextday')))->sum('TransactionMoney');
			$this->totalmoney = $totalmoney;
			$bankcard = M('withdrawalbankmessagetab')->where(array('MerchantID' => $s_member_uid, 'IsDefault' => 1))->find();
			$this->bankcard = $bankcard;
			// 使用原生mysql获得银行卡号最后4位
			$r4num = M()->query('select right(WithdrawalAccount, 4) from tp_withdrawalbankmessagetab where MerchantID=' . $s_member_uid . ' and IsDefault=1');
			$this->r4num = $r4num;
			$this->display();
		} elseif (IS_POST) {

		}
	}

	// 提现设置
	public function tixian() {
		if (IS_GET) {
			$s_member_uid = session('member_uid');
			$member = M('user2')->where(array('MerchantID' => $s_member_uid))->find();
			$this->member = $member;
			// 验证资料
			$card = M('usercard')->where(array('MerchantID' => $s_member_uid))->find();
			$this->card = $card;
			// 资金交易
			$money = M('fundstransactionrecordtab')->where(array('MerchantID' => $s_member_uid, 'TransactionClassID' => 2))->sum('TransactionMoney');
			$this->money = $money;
			// 当日订单数量
			$zero = date('Y-m-d', time());
			$nextday = date("Y-m-d", strtotime("+1 day"));
			// dump($nextday);
			$ordernum = M('fundstransactionrecordtab')->where(array('AddTime' => array('between', '$zero, $nextday')))->count();
			$this->ordernum = $ordernum;
			$totalmoney = M('fundstransactionrecordtab')->where(array('AddTime' => array('between', '$zero, $nextday')))->sum('TransactionMoney');
			$this->totalmoney = $totalmoney;
			$bankcard = M('withdrawalbankmessagetab')->where(array('MerchantID' => $s_member_uid, 'IsDefault' => 1))->find();
			$this->bankcard = $bankcard;
			// 使用原生mysql获得银行卡号最后4位
			$r4num = M()->query('select right(WithdrawalAccount, 4) from tp_withdrawalbankmessagetab where MerchantID=' . $s_member_uid . ' and IsDefault=1');
			$this->r4num = $r4num;
			$this->display();
		} elseif (IS_POST) {

		}
	}

	// 提现设置
	public function rate() {
		if (IS_GET) {
			$s_member_uid = session('member_uid');
			$member = M('user2')->where(array('MerchantID' => $s_member_uid))->find();
			$this->member = $member;
			// 验证资料
			$card = M('usercard')->where(array('MerchantID' => $s_member_uid))->find();
			$this->card = $card;
			// 资金交易
			$money = M('fundstransactionrecordtab')->where(array('MerchantID' => $s_member_uid, 'TransactionClassID' => 2))->sum('TransactionMoney');
			$this->money = $money;
			// 当日订单数量
			$zero = date('Y-m-d', time());
			$nextday = date("Y-m-d", strtotime("+1 day"));
			// dump($nextday);
			$ordernum = M('fundstransactionrecordtab')->where(array('AddTime' => array('between', '$zero, $nextday')))->count();
			$this->ordernum = $ordernum;
			$totalmoney = M('fundstransactionrecordtab')->where(array('AddTime' => array('between', '$zero, $nextday')))->sum('TransactionMoney');
			$this->totalmoney = $totalmoney;
			$bankcard = M('withdrawalbankmessagetab')->where(array('MerchantID' => $s_member_uid, 'IsDefault' => 1))->find();
			$this->bankcard = $bankcard;
			// 使用原生mysql获得银行卡号最后4位
			$r4num = M()->query('select right(WithdrawalAccount, 4) from tp_withdrawalbankmessagetab where MerchantID=' . $s_member_uid . ' and IsDefault=1');
			$this->r4num = $r4num;
			// 充值手续费
			$rate = M('rechargeratesettab')->where(array('MerchantID' => $s_member_uid))->getField('RateStandard');
			$this->rate = $rate;
			$this->display();
		} elseif (IS_POST) {

		}
	}

	// 提现设置
	public function chongzhi() {
		if (IS_GET) {
			$s_member_uid = session('member_uid');
			$member = M('user2')->where(array('MerchantID' => $s_member_uid))->find();
			$this->member = $member;
			// 验证资料
			$card = M('usercard')->where(array('MerchantID' => $s_member_uid))->find();
			$this->card = $card;
			// 资金交易
			$money = M('fundstransactionrecordtab')->where(array('MerchantID' => $s_member_uid, 'TransactionClassID' => 2))->sum('TransactionMoney');
			$this->money = $money;
			// 当日订单数量
			$zero = date('Y-m-d', time());
			$nextday = date("Y-m-d", strtotime("+1 day"));
			// dump($nextday);
			$ordernum = M('fundstransactionrecordtab')->where(array('AddTime' => array('between', '$zero, $nextday')))->count();
			$this->ordernum = $ordernum;
			$totalmoney = M('fundstransactionrecordtab')->where(array('AddTime' => array('between', '$zero, $nextday')))->sum('TransactionMoney');
			$this->totalmoney = $totalmoney;
			$bankcard = M('withdrawalbankmessagetab')->where(array('MerchantID' => $s_member_uid, 'IsDefault' => 1))->find();
			$this->bankcard = $bankcard;
			// 使用原生mysql获得银行卡号最后4位
			$r4num = M()->query('select right(WithdrawalAccount, 4) from tp_withdrawalbankmessagetab where MerchantID=' . $s_member_uid . ' and IsDefault=1');
			$this->r4num = $r4num;
			// 充值手续费
			$rate = M('rechargeratesettab')->where(array('MerchantID' => $s_member_uid))->getField('RateStandard');
			$this->rate = $rate;
			$this->display();
		} elseif (IS_POST) {

		}
	}

	// 提现设置
	public function shoukuanjilu() {
		if (IS_GET) {
			$s_member_uid = session('member_uid');
			$member = M('user2')->where(array('MerchantID' => $s_member_uid))->find();
			$this->member = $member;
			// 验证资料
			$card = M('usercard')->where(array('MerchantID' => $s_member_uid))->find();
			$this->card = $card;
			// 资金交易
			$money = M('fundstransactionrecordtab')->where(array('MerchantID' => $s_member_uid, 'TransactionClassID' => 2))->sum('TransactionMoney');
			$this->money = $money;
			// 当日订单数量
			$zero = date('Y-m-d', time());
			$nextday = date("Y-m-d", strtotime("+1 day"));
			// dump($nextday);
			$ordernum = M('fundstransactionrecordtab')->where(array('AddTime' => array('between', '$zero, $nextday')))->count();
			$this->ordernum = $ordernum;
			$totalmoney = M('fundstransactionrecordtab')->where(array('AddTime' => array('between', '$zero, $nextday')))->sum('TransactionMoney');
			$this->totalmoney = $totalmoney;
			$bankcard = M('withdrawalbankmessagetab')->where(array('MerchantID' => $s_member_uid, 'IsDefault' => 1))->find();
			$this->bankcard = $bankcard;
			// 使用原生mysql获得银行卡号最后4位
			$r4num = M()->query('select right(WithdrawalAccount, 4) from tp_withdrawalbankmessagetab where MerchantID=' . $s_member_uid . ' and IsDefault=1');
			$this->r4num = $r4num;
			// 充值手续费
			$rate = M('rechargeratesettab')->where(array('MerchantID' => $s_member_uid))->getField('RateStandard');
			$this->rate = $rate;
			$this->display();
		} elseif (IS_POST) {

		}
	}

	// 提现设置
	public function member_add() {
		if (IS_GET) {
			$s_member_uid = session('member_uid');
			$member = M('user2')->where(array('MerchantID' => $s_member_uid))->find();
			$this->member = $member;
			// 验证资料
			$card = M('usercard')->where(array('MerchantID' => $s_member_uid))->find();
			$this->card = $card;
			// 资金交易
			$money = M('fundstransactionrecordtab')->where(array('MerchantID' => $s_member_uid, 'TransactionClassID' => 2))->sum('TransactionMoney');
			$this->money = $money;
			// 当日订单数量
			$zero = date('Y-m-d', time());
			$nextday = date("Y-m-d", strtotime("+1 day"));
			// dump($nextday);
			$ordernum = M('fundstransactionrecordtab')->where(array('AddTime' => array('between', '$zero, $nextday')))->count();
			$this->ordernum = $ordernum;
			$totalmoney = M('fundstransactionrecordtab')->where(array('AddTime' => array('between', '$zero, $nextday')))->sum('TransactionMoney');
			$this->totalmoney = $totalmoney;
			$bankcard = M('withdrawalbankmessagetab')->where(array('MerchantID' => $s_member_uid, 'IsDefault' => 1))->find();
			$this->bankcard = $bankcard;
			// 使用原生mysql获得银行卡号最后4位
			$r4num = M()->query('select right(WithdrawalAccount, 4) from tp_withdrawalbankmessagetab where MerchantID=' . $s_member_uid . ' and IsDefault=1');
			$this->r4num = $r4num;
			// 使用原生mysql获得手机号码最后4位
			$l4phone = M()->query('select left(UserName, 3) from tp_suninpay_member where MerchantID=' . $s_member_uid);
			$this->l4phone = $l4phone;
			$r4phone = M()->query('select right(UserName, 4) from tp_suninpay_member where MerchantID=' . $s_member_uid);
			$this->r4phone = $r4phone;
			// 充值手续费
			$rate = M('rechargeratesettab')->where(array('MerchantID' => $s_member_uid))->getField('RateStandard');
			$this->rate = $rate;
			$this->display();
		} elseif (IS_POST) {
			$super = $this->_post('super');
			$username = $this->_post('TxtUserName');
			$password = $this->_post('TxtPwd');
			$repassword = $this->_post('TxtOKPwd');
			echo $super . $username . $password . $repassword;
		}
	}
}