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
}