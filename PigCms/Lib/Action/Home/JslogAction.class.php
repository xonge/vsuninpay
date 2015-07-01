<?php
class JslogAction extends BaseAction {
    public function index () {
//        $content = $this->_get('content');
        $content = $this->_post('content');
//        $content = '';
//        $teststr = file_get_contents('xgwx20150602test.txt');
//        $content = preg_replace('/&amp;quot;/', '"', $teststr);
//        echo $content;
        $content = preg_replace('/&amp;quot;/', '"', $content);
//        die;
        $content .= PHP_EOL;
        $ctime = date('Ymd',time());
        echo file_put_contents('xgwx' . $ctime . '.txt', $content, FILE_APPEND);
        echo 'txt ok';
    }

    public function speedreport () {
        $data_type = $this->_get('data_type');
        $net = $this->_get('net');
        $os = $this->_get('os');
        $ua = $this->_get('ua');
        $ext_data = $this->_get('ext_data');
        echo $ext_data;
        $ext_data = urldecode($ext_data);

        $report['data_type'] = $data_type;
        $report['net'] = $net;
        $report['os'] = $os;
        $report['ua'] = $ua;
        $report['ext_data'] = $ext_data;
        $jsonstr = json_encode($report);
        $jsonstr .= PHP_EOL;
        file_put_contents('speedreport' . date('Ymd', time()) . '.txt', $jsonstr, FILE_APPEND);
    }

    public function jslog () {
        $level = $this->_get('level');
        $id = $this->_get('id');
        $content = $this->_get('content');
        $content = urldecode($content);
        $jslog['level'] = $level;
        $jslog['id'] = $id;
        $jslog['content'] = $content;
        $jsonstr = json_encode($jslog);
        $jsonstr .= PHP_EOL;
        file_put_contents('jslog' . date('Ymd') . '.txt', $jsonstr, FILE_APPEND);
    }
}