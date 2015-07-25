<?php
class IndexAction extends Action{

    public function _initialize() {
        define('RES',THEME_PATH.'common');
    }

    public function index(){
        $this->display();
    }

    public function toppage() {
        $this->display();
    }
}