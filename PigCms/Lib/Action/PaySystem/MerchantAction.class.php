<?php
class MerchantAction extends Action {

    public function index() {
        define('RES',THEME_PATH.'common');
        $this->display();
    }
    // 商户信息管理
    public function infolist() {
        $this->display();
    }
}