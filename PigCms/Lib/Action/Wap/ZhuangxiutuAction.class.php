<?php
class ZhuangxiutuAction extends BaseAction{
    public $token;
    public $wecha_id;
    public $lottory_record_db;
    public $lottory_db;

    public function index(){
        if (IS_POST) {
            $loupan = $this->_post('loupan');
            $realname = $this->_post('realname');
            $phone = $this->_post('phone');
            $weixin = $this->_post('weixin');
            $imgurls = $this->_post('imgurls');

            unset($data);
            $data['loupan'] = $loupan;
            $data['realname'] = $realname;
            $data['phone'] = $phone;
            $data['weixin'] = $weixin;
            $data['imgurls'] = $imgurls;
            $data['addtime'] = date('Y-m-d H:i:s');
            $zhuangxiutu = M('xg_zhuangxiutu');
            $queryResult = $zhuangxiutu->add($data);

            if ($queryResult > 0) {
                $response['error'] = 0;
                $response['message'] = 'insert success';
            } else {
                echo $zhuangxiutu->getLastSql();
                $response['error'] = 101;
                $response['message'] = 'insert error';
            }
            $this->ajaxReturn($response);
            exit;
        }
        $agent = $_SERVER['HTTP_USER_AGENT'];
        if(!strpos($agent,"icroMessenger")) {
            //echo '此功能只能在微信浏览器中使用';exit;
        }
        $this->token=$this->_get('token');
        $this->wecha_id	= $this->_get('wecha_id');
        $this->lottory_record_db=M('Lottery_record');
        $this->lottory_db=M('Lottery');
        if (!defined('RES')){
            define('RES',THEME_PATH.'common');
        }
        if (!defined('STATICS')){
            define('STATICS',TMPL_PATH.'static');
        }


        $token		= $this->token;
        $wecha_id	= $this->wecha_id;
        $id 		= $this->_get('id');
        $Lottery 	= $this->lottory_db->where(array('id'=>$id,'token'=>$token,'type'=>3,'status'=>1))->find();
        $Lottery['renametel']=$Lottery['renametel']?$Lottery['renametel']:'手机号';
        $Lottery['renamesn']=$Lottery['renamesn']?$Lottery['renamesn']:'SN码';
        $this->assign('lottery',$Lottery);
        //var_dump($Lottery);
        //0. 判断优惠券是否领完了
        if ($Lottery['statdate']>time()){
            $data['usenums']=0;
        }else {

//            $data=$this->prizeHandle($token,$wecha_id,$Lottery);
        }

        $data['token'] 		= $token;
        $data['wecha_id']	= $wecha_id;
        $data['lid']		= $Lottery['id'];
        $data['id']		= $Lottery['id'];
        $data['keyword']		= $Lottery['keyword'];
        $data['title']		= $Lottery['title'];
        $data['startpicurl']		= $Lottery['startpicurl'];

        $data['phone']		= $data['phone'];
        $data['usenums']	= $data['usenums'];
        $data['sendtime']	= $data['sendtime'];
        $data['canrqnums']	= $Lottery['canrqnums'];
        $data['fist'] 		= $Lottery['fist'];
        $data['second'] 	= $Lottery['second'];
        $data['third'] 		= $Lottery['third'];
        $data['fistnums'] 	= $Lottery['fistnums'];
        $data['secondnums'] = $Lottery['secondnums'];
        $data['thirdnums'] 	= $Lottery['thirdnums'];
        $data['info']		= $Lottery['info'];
        $data['aginfo']		= $Lottery['aginfo'];
        $data['txt']		= $Lottery['txt'];
        $data['sttxt']		= $Lottery['sttxt'];
        $data['title']		= $Lottery['title'];
        $data['statdate']	= $Lottery['statdate'];
        $data['enddate']	= $Lottery['enddate'];
        $data['info']=nl2br($data['info']);
        $data['endinfo']=nl2br($data['endinfo']);
        $this->assign('Coupon',$data);
        //var_dump($data);exit();
        $this->display();
    }

    Public function upload() {
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->allowExts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath = './Uploads/';// 设置附件上传目录
        if (!$upload->upload()) {// 上传错误提示错误信息
            $this->error($upload->getErrorMsg());
        } else {// 上传成功 获取上传文件信息
            $info = $upload->getUploadFileInfo();
//            dump($info);
            $info['error'] = 0;
            $this->ajaxReturn($info);
        }
    }
}