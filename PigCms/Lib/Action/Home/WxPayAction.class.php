<?php
/**
 *
 */
class WxPayAction {
	public function index() {
		// vendor
		vendor('WxPay.class#wxpay');
		$pay = new WxPay();
		$payarr['total_amount'] = 101;
		$payarr['min_value'] = 101;
		$payarr['max_value'] = 101;
		$pay->pay('o7F8auB73FIMKIB1RWf_VleZRPfM', null, $payarr);
	}

	public function mch_pay_test() {
		// vendor
		vendor('WxPay.class#wxpay');
		$pay = new WxPay();
		$_payarr['amount'] = 1;
		// o7F8auDz4SGsyIkBov3pWzA2C4jE
//        o7F8auFB-s2WRNRcskQOI7Ap-Mn8
//        fuck
		$pay->mch_pay('o7F8auDz4SGsyIkBov3pWzA2C4jE', null, $_payarr);
	}
}