// alert('a');
// /*
//  * ΢�ŷ�����������(�ϰ汾API)
//  */
// function wxShareFunc(shareData){
//   /*var shareData = {
//     "title": title,
//     "content": content,
//     "imgUrl": imgUrl,
//     "shareUrl": shareUrl
//   };*/

//   document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
//     WeixinJSBridge.call('showOptionMenu');

//   // ���͸�����
//   WeixinJSBridge.on('menu:share:appmessage', function (argv) {
//     WeixinJSBridge.invoke('sendAppMessage', {
//       "img_url": shareData.imgUrl,
//       "img_width": "150",
//       "img_height": "150",
//       "link": shareData.shareUrl ? shareData.shareUrl : shareData.shareFriend,
//       "desc": shareData.content,
//       "title": shareData.title
//     }, function (res) {
//       //_report('send_msg', res.err_msg);
//       shareData.toFriend && shareData.toFriend(res);
//     });
//   });

//   // ��������Ȧ
//   WeixinJSBridge.on('menu:share:timeline', function (argv) {
//     WeixinJSBridge.invoke('shareTimeline', {
//       "img_url": shareData.imgUrl,
//       "img_width": "150",
//       "img_height": "150",
//       "link": shareData.shareUrl ? shareData.shareUrl : shareData.shareCircle,
//       "desc": shareData.content,
//       "title": shareData.title
//     }, function (res) {
//       //_report('timeline', res.err_msg);
//       shareData.toCircle && shareData.toCircle(res);
//     });
//   });

//   }, false);

// }




// /*
//  * ΢�ŷ���6.0.2�°� API
//  * victor
//  */

// //***********LOAD SDK****************

// var LOADWXJS = document.createElement("script");
// LOADWXJS.setAttribute("src","http://res.wx.qq.com/open/js/jweixin-1.0.0.js");
// document.head.appendChild(LOADWXJS);

// //***********SDK����*******************

// var WXJSSDK = WXJSSDK || {};
// var WXAPI = WXAPI || {};

// WXJSSDK.config = {
//     debug: true, // ����
//     // appId: 'wxcaebd5318cdb7fa1', // ������ںŵ�Ψһ��ʶ,�����ʾǩ����Ч�����id�Ƿ�͵�ǰ�󶨵�js��ȫ����ͬһ�����ں�
//     // timestamp: parseInt((new Date).getTime()/1000), // �������ǩ����ʱ���
//     // nonceStr: Math.random().toString(36).substr(2), // �������ǩ���������
//     // signature: '',// ǩ��
//     appId: '', // ������ںŵ�Ψһ��ʶ,�����ʾǩ����Ч�����id�Ƿ�͵�ǰ�󶨵�js��ȫ����ͬһ�����ں�
//     timestamp: 0, // �������ǩ����ʱ���
//     nonceStr: '', // �������ǩ���������
//     signature: '',// ǩ��
//     jsApiList: ["onMenuShareTimeline","onMenuShareAppMessage","onMenuShareQQ","onMenuShareWeibo"] // �����Ҫʹ�õ�JS�ӿ��б�
// };

// WXJSSDK.signature = function (callback){
//   // $.ajax({
//   //  async: false,
//   //  url: "http://v.suninpay.com/%E5%BE%AE%E4%BF%A1jssdk/sample.php",
//   //  type: "GET",
//   //  // data: {timestamp: WXJSSDK.config.timestamp, nonceStr: WXJSSDK.config.nonceStr, url: window.location.href.split('#')[0]},
//   //  dataType: "JSONP",
//   //  jsonp:,
//   //  timeout: 5000,
//   //  success: function(data){
//   //    console.log('z');
//   //    console.log(data);
//   //    WXJSSDK.config.signature = data.signature;
//   //    callback && callback();
//   //  }
//   // });
// var url = window.location.href.split('#')[0];
// var newurl = "http://v.suninpay.com/%E5%BE%AE%E4%BF%A1jssdk/sample.php?jsoncallback=?&url1=" + url;
// console.log(newurl);
// $.getJSON(newurl, function(json){
//   console.log('z');
//   if (json) {
//     console.log(json);
//     WXJSSDK.config.appId = json.appId;
//     WXJSSDK.config.timestamp = json.timestamp;
//     WXJSSDK.config.nonceStr = json.nonceStr;
//     WXJSSDK.config.signature = json.signature;
//     // WXJSSDK.config.signature = 1;
//     console.log(WXJSSDK.config.signature);
//     callback && callback();
//   }
// });

// };

// // ����΢�ſ������߰�
// // callbacks�� ��һ�������˸��ֻص��Ķ���
// WXJSSDK.load = function (callbacks){
//   //SDK������ɺ�
//   console.log("rrrrrr");
//   LOADWXJS.onload = function(){
//     //ע��������Ϣ
//     console.log('tttttt');
//     WXJSSDK.signature(function() {
//       console.log('zzzzzz');
//       console.log(WXJSSDK.config);
//       wx.config(WXJSSDK.config);
//     });

//     //config��Ϣ��֤���ִ��ready����
//     wx.ready(function(){
//       callbacks.ready && callbacks.ready();
//     });
//     // // �ӿڵ��óɹ�ʱִ�еĻص�����
//     // wx.success(function(res){
//     //  callbacks.success && callbacks.success();
//     // });
//     // // �ӿڵ���ʧ��ʱִ�еĻص�����
//     // wx.fail(function(res){
//     //  $.vAlert ? $.vAlert(res.errMsg) : alert(res.errMsg);
//     //  callbacks.fail && callbacks.fail();
//     // });
//     // // �ӿڵ������ʱִ�еĻص����������۳ɹ���ʧ�ܶ���ִ��
//     // wx.complete(function(res){
//     //  callbacks.complete && callbacks.complete();
//     // });
//     // // �û����ȡ��ʱ�Ļص����������������û�ȡ��������api�Ż��õ�
//     // wx.cancel(function(res){
//     //  callbacks.cancel && callbacks.cancel();
//     // });
//     // // ����Menu�еİ�ť���ʱ�����ķ������÷�����֧��Menu�е���ؽӿ�
//     // wx.trigger(function(res){
//     //  callbacks.trigger && callbacks.trigger();
//     // });
//     // config��Ϣ��֤ʧ�ܻ�ִ��error����
//     wx.error(function(res){
//       console.log(res);
//       alert(res);
//       $.flytip ? $.flytip(res.errMsg) : alert(res.errMsg);
//       callbacks.error && callbacks.error();
//     });
//   };

// };


// //*************API����*****************

// //==============================
// // ΢�ŷ���ӿ�
// //==============================
// WXAPI.shares = function (params){
//   wx.showOptionMenu();

//   // ��������Ȧ
//   wx.onMenuShareTimeline({
//       title: params.title, // �������
//       link: params.shareCircle ? params.shareCircle : params.link, // ��������
//       imgUrl: params.imgUrl, // ����ͼ��
//       success: function () {

//       },
//       cancel: function () {
//       }
//   });

//   // ���������
//   wx.onMenuShareAppMessage({
//       title: params.title, // �������
//       desc: params.desc, // ��������
//       link: params.shareFriend ? params.shareFriend : params.link, // ��������
//       imgUrl: params.imgUrl, // ����ͼ��
//       type: params.type ? params.type : "link", // ��������,music��video��link������Ĭ��Ϊlink
//       dataUrl: params.dataUrl ? params.dataUrl : "", // ���type��music��video����Ҫ�ṩ�������ӣ�Ĭ��Ϊ��
//       success: function () {
//       },
//       cancel: function () {
//       }
//   });

//   // ����QQ
//   wx.onMenuShareQQ({
//       title: params.title, // �������
//       desc: params.desc, // ��������
//       link: params.shareQQ ? params.shareQQ : params.link, // ��������
//       imgUrl: params.imgUrl, // ����ͼ��
//       success: function () {
//       },
//       cancel: function () {
//       }
//   });

//   // ������Ѷ΢��
//   wx.onMenuShareWeibo({
//       title: params.title, // �������
//       desc: params.desc, // ��������
//       link: params.shareWeibo ? params.shareWeibo : params.link, // ��������
//       imgUrl: params.imgUrl, // ����ͼ��
//       success: function () {
//       },
//       cancel: function () {
//       }
//   });
// };




/*
 * ΢�ŷ���6.0.2�°� API
 * victor
 */

//***********LOAD SDK****************
//var wx_node = document.createElement("script");
//wx_node.setAttribute("src","https://res.wx.qq.com/open/js/jweixin-1.0.0.js");
//
//if (document.head) {
//    document.head.appendChild(wx_node);
//} else {
//    document.getElementsByTagName('head')[0].appendChild(wx_node);
//}

//***********SDK����*******************
var wx_jssdk = wx_jssdk || {};
var wx_api = wx_api || {};

//Ԥ����$.getJSON�Ļص�����
//function test (json) {
//    console.log(json);
//}

//wx_jssdk.signature = function (callback){
//    // $.ajax({
//    //  async: false,
//    //  url: "http://v.suninpay.com/%E5%BE%AE%E4%BF%A1jssdk/sample.php",
//    //  type: "GET",
//    //  // data: {timestamp: WXJSSDK.config.timestamp, nonceStr: WXJSSDK.config.nonceStr, url: window.location.href.split('#')[0]},
//    //  dataType: "JSONP",
//    //  jsonp:,
//    //  timeout: 5000,
//    //  success: function(data){
//    //    console.log('z');
//    //    console.log(data);
//    //    WXJSSDK.config.signature = data.signature;
//    //    callback && callback();
//    //  }
//    // });
//    var url = window.location.href.split('#')[0];
//    var newurl = "http://v.suninpay.com/%E5%BE%AE%E4%BF%A1jssdk/sample.php?jsoncallback=?&url1=" + encodeURIComponent(url);
//    console.log(newurl);
//// newurl = encodeURIComponent(newurl);
////    ��ȡ������Ϣ
////    ͬ���ӷ��������������Ϣ
//    $.ajaxSettings.async = false;
//    $.getJSON(newurl, function(json){
//        console.log('z');
//        if (json) {
//            console.log(json);
//            wx_jssdk.config.appId = json.appId;
//            wx_jssdk.config.timestamp = json.timestamp;
//            wx_jssdk.config.nonceStr = json.nonceStr;
//            wx_jssdk.config.signature = json.signature;
//            console.log(wx_jssdk.config.signature);
//            //callback && callback();
//            //��֤������Ϣ�Ƿ���ȷ
//            wx.config(wx_jssdk.config);
//            // config��Ϣ��֤���ִ��ready����
//            wx.ready(function () {
//                //��֤�ɹ���ִ�д���
//                console.log('yyyy');
//                // callbacks.ready && callbacks.ready();
//                callback && callback();
//                //wx.getLocation({
//                //    success: function (res) {
//                //        var latitude = res.latitude; // γ�ȣ�����������ΧΪ90 ~ -90
//                //        var longitude = res.longitude; // ���ȣ�����������ΧΪ180 ~ -180��
//                //        var speed = res.speed; // �ٶȣ�����/ÿ���
//                //        var accuracy = res.accuracy; // λ�þ���
//                //    }
//                //});
//            });
//            wx.error(function(res){
//                console.log('error');
//                console.log(res);
//                alert(res);
//                $.flytip ? $.flytip(res.errMsg) : alert(res.errMsg);
//                callbacks.error && callbacks.error();
//            });
//        }
//    });
//};

// ����΢�ſ������߰�
// callbacks�� ��һ�������˸��ֻص��Ķ���
// WXJSSDK.load = function (callbacks){
//wx_node.onload = function() {
//    wx_node.onload = null;
//    wx_jssdk.signature(function () {
//        console.log('zzzzzz');
//        console.log(wx_jssdk.config);
//        wx.config(wx_jssdk.config);
//    });
//};

var wx_sdk = document.createElement("script");
wx_sdk.setAttribute("src", "http://res.wx.qq.com/open/js/jweixin-1.0.0.js");

if (document.head) {
    document.head.appendChild(wx_sdk);
} else {
    document.getElementsByTagName('head')[0].appendChild(wx_sdk);
}
//�ٷ�SDK������ɺ󣬷���ͬ����������ļ�����������ʹ�ûص�������

wx_jssdk.config = {
    debug: false, // ����
    // appId: 'wxcaebd5318cdb7fa1', // ������ںŵ�Ψһ��ʶ,�����ʾǩ����Ч�����id�Ƿ�͵�ǰ�󶨵�js��ȫ����ͬһ�����ں�
    // timestamp: parseInt((new Date).getTime()/1000), // �������ǩ����ʱ���
    // nonceStr: Math.random().toString(36).substr(2), // �������ǩ���������
    // signature: '',// ǩ��
    appId: '', // ������ںŵ�Ψһ��ʶ,�����ʾǩ����Ч�����id�Ƿ�͵�ǰ�󶨵�js��ȫ����ͬһ�����ں�
    timestamp: 0, // �������ǩ����ʱ���
    nonceStr: '', // �������ǩ���������
    signature: '',// ǩ��
    jsApiList: ["onMenuShareTimeline","onMenuShareAppMessage","onMenuShareQQ","onMenuShareWeibo","chooseImage","uploadImage","getLocation"] // �����Ҫʹ�õ�JS�ӿ��б�
};

var xgwx = xgwx || {};
var xg_api = xg_api || {};
xgwx.wx = {};
var jsapilist = {};
var sdk_isok = 0;

xgwx.callme = function () {
    shares = function (params) {
        console.log("shares is run");
        //wx.showOptionMenu();
        // ��������Ȧ
        wx.onMenuShareTimeline({
            title: params.title, // �������
            link: params.shareCircle ? params.shareCircle : params.link, // ��������
            imgUrl: params.imgUrl, // ����ͼ��
            success: function () {

            },
            cancel: function () {
            }
        });
        // ���������
        wx.onMenuShareAppMessage({
            title: params.title, // �������
            desc: params.desc, // ��������
            link: params.shareFriend ? params.shareFriend : params.link, // ��������
            imgUrl: params.imgUrl, // ����ͼ��
            type: params.type ? params.type : "link", // ��������,music��video��link������Ĭ��Ϊlink
            dataUrl: params.dataUrl ? params.dataUrl : "", // ���type��music��video����Ҫ�ṩ�������ӣ�Ĭ��Ϊ��
            success: function () {
            },
            cancel: function () {
            }
        });
        // ����QQ
        wx.onMenuShareQQ({
            title: params.title, // �������
            desc: params.desc, // ��������
            link: params.shareQQ ? params.shareQQ : params.link, // ��������
            imgUrl: params.imgUrl, // ����ͼ��
            success: function () {
            },
            cancel: function () {
            }
        });
        // ������Ѷ΢��
        wx.onMenuShareWeibo({
            title: params.title, // �������
            desc: params.desc, // ��������
            link: params.shareWeibo ? params.shareWeibo : params.link, // ��������
            imgUrl: params.imgUrl, // ����ͼ��
            success: function () {
            },
            cancel: function () {
            }
        });
    };
    getlocation = function (params) {
        //console.log(wx);
        console.log("im run");
        if (params.el) {
            var el = params.el;
            var address = params.address;
            // 7.2 ��ȡ��ǰ����λ��
            document.querySelector(el).onclick = function () {
                wx.getLocation({
                    success: function (res) {
                        xgwx.mylocation = res;
                        var latitude = res.latitude; // γ�ȣ�����������ΧΪ90 ~ -90
                        var longitude = res.longitude; // ���ȣ�����������ΧΪ180 ~ -180��
                        var speed = res.speed; // �ٶȣ�����/ÿ���
                        var accuracy = res.accuracy; // λ�þ���
                        var content = JSON.stringify(res);
                        $.ajax({
                            type: 'POST',
                            url: 'http://v.suninpay.com/Index.php?m=Jslog&a=index',
                            data: {content: content},
                            //dataType: 'json',
                            timeout: 300,
                            //context: $('body'),
                            success: function (data) {
                                alert("log success");
                            },
                            error: function (xhr, type) {
                                //alert(xhr.status);
                            }
                        });
                        var data = {url:'http://api.map.baidu.com/geocoder?address=' + address + '&src=suninpay|weimingpian'};
                        $.getJSON('http://v.suninpay.com/xml.php?callback=?',data,function(json){
                                console.log(json['result']['location']);
                                var s_location = json['result']['location'];
                                var lat = s_location['lat'];
                                var lng = s_location['lng'];
                                console.log(lat + '&&' + lng);
                                var StrGuideWebLink = "http://api.map.baidu.com/direction?origin=latlng:" + latitude + "," + longitude + "|name:��̶�������԰&destination=name:" + address + "|latlng:" + lat + "," + lng + "&mode=driving&region=��̶&output=html&src=��̶";
                                location.href = StrGuideWebLink;
                    })
                    },
                    cancel: function (res) {
                        alert('�û��ܾ���Ȩ��ȡ����λ��');
                    }
                });
            };
        } else {
            wx.getLocation({
                success: function (res) {
                    xgwx.mylocation = res;
                    var latitude = res.latitude; // γ�ȣ�����������ΧΪ90 ~ -90
                    var longitude = res.longitude; // ���ȣ�����������ΧΪ180 ~ -180��
                    var speed = res.speed; // �ٶȣ�����/ÿ���
                    var accuracy = res.accuracy; // λ�þ���
                    var content = JSON.stringify(res);
                    $.ajax({
                        type: 'POST',
                        url: 'http://v.suninpay.com/Index.php?m=Jslog&a=index',
                        data: {content: content},
                        //dataType: 'json',
                        timeout: 300,
                        //context: $('body'),
                        success: function (data) {
                            alert("log success");
                        },
                        error: function (xhr, type) {
                            alert(xhr.status);
                        }
                    })
                }
            });
        }
    };
    console.log(wanted);
    //xgwx.json = JSON.parse(wanted);
    //console.log(xgwx.json);
    for (var name in wanted) {
        if(wanted.hasOwnProperty(name)){
            console.log(name);
            console.log(wanted[name]);
            switch(name) {
                case "shares":
                    shares(wanted[name]);
                    break;
                case "getlocation":
                    getlocation(wanted[name]);
                    break;
                case "chooseimage":
                    chooseimage();
                    break;
                default:
                    continue;
            }
        }
    }
};

xgwx.getlocation = function () {
    //console.log(wx);
    console.log("im run");
    wx.getLocation({
        success: function (res) {
            var latitude = res.latitude; // γ�ȣ�����������ΧΪ90 ~ -90
            var longitude = res.longitude; // ���ȣ�����������ΧΪ180 ~ -180��
            var speed = res.speed; // �ٶȣ�����/ÿ���
            var accuracy = res.accuracy; // λ�þ���
        }
    });
};

xgwx.chooseimage = function () {
    wx.chooseImage({
        success: function (res) {
            var localIds = res.localIds; // ����ѡ����Ƭ�ı���ID�б�localId������Ϊimg��ǩ��src������ʾͼƬ
        }
    });
};

wx_signature = function (callbacks) {
    //ע��������Ϣ
    var url = window.location.href.split('#')[0];
    var newurl = "http://v.suninpay.com/%E5%BE%AE%E4%BF%A1jssdk/sample.php?jsoncallback=?&url1=" + encodeURIComponent(url);
    console.log(newurl);
// newurl = encodeURIComponent(newurl);
//    ��ȡ������Ϣ
//    ͬ���ӷ��������������Ϣ
    $.ajaxSettings.async = false;
    console.log(callbacks);
    $.getJSON(newurl, function(json) {
        console.log('z');
        if (json) {
            console.log(json);
            wx_jssdk.config.debug = false;
            wx_jssdk.config.appId = json.appId;
            wx_jssdk.config.timestamp = json.timestamp;
            wx_jssdk.config.nonceStr = json.nonceStr;
            wx_jssdk.config.signature = json.signature;
            console.log(wx_jssdk.config);
            //callback && callback();
            //��֤������Ϣ�Ƿ���ȷ
            //wx.config(wx_jssdk.config);
            //callback && callback();
            wx.config(wx_jssdk.config);
            wx.ready(function () {
                //console.log("sign ok");
                //��wxjssdkͨ����֤�������ص�loding��
                $("#loading").css("display", "none");
                console.log(callbacks);
                //console.log(wxShareDate);
                //for (var i = 0; i< callbacks.length;i++) {
                //    console.log(callbacks[i]);
                //    var unitcall = callbacks[i];
                //    unitcall && unitcall();
                //}
                callbacks && callbacks();
            });
            wx.error(function (res) {
                //console.log('error');
                console.log("zz");
                //alert(res);
                //$.flytip ? $.flytip(res.errMsg) : alert(res.errMsg);
                //callbacks.error && callbacks.error();
            });
        }
    });
};

//xgwx.config = function (callbacks) {
//    wx.config(wx_jssdk.config);
//    wx.ready(function () {
//        console.log("sign ok");
//        callbacks && callbacks();
//        //xgwx.getlocation();
//    });
//};

//΢�Ű汾�ȽϺ���
var versioncompare = function(curver, targetver){
    if (curver === null || targetver === null) {
        return false;
    }
    //����ʹ��û�й���.���ַ����������ֲ��ñȽ�
    var curverarr = curver.split('.');
    var targetverarr = targetver.split('.');
    console.log("current version number array is: " + curverarr);
    for (var i = 0; i < curverarr.length; i++) {
        console.log(curverarr[i]);
        //�����汾�ַ�������ͬһλ�����ִ�С�Ƚϣ�������ת�����ֲ��ܱȽ�
        var curno = parseInt(curverarr[i]);
        var tarno = parseInt(targetverarr[i]);
        if (curno < tarno) {
            //ֻҪ��ǰС��ָ������������
            console.log(curverarr[i] + " is less that " + targetverarr[i]);
            return false;
        } else {
            //���ھͼ����Ƚϣ������ǲ��Ƕ����ˣ�
            //����Ҳ�������أ���Ȼ�ܻ�С�ڵģ���ûʲô������
            return true;
        }
    }
    return true;
};

//���ڴ˴�ʹ�ûص�������ֻ����ʼ��
xgwx.init = function (funcs) {
    console.log("init");
    console.log(funcs);
    //�������΢�ţ�ֱ�ӻ��ˣ��������ǲ���α��ua
    //�ж�΢�Ű汾�Ƿ����6.0.2���Ͱ汾�þɽӿڣ��߰汾��jssdk
    var useragent = navigator.userAgent;
    console.log(useragent);
    //var versionno = useragent.match('/MicroMessenger\/(.*?)[^\d\.]/');
    //ʹ�������ua�л��΢�Ű汾��
    var _versionstr = useragent.match(/MicroMessenger\/(.*?)[^\d\.]/i);
    //��������Ͳ���΢�ţ�ֱ�ӻ���
    if (_versionstr === null) {
        //ִ������loding�����
        console.log("is not weixin");
        //alert("is not weixin");
        $("#loading").css("display", "none");
        return false;
    }
    //���˵��汾�ַ����е�.���������㵱ǰ�汾�ǲ��ǳ���6.0.2
    //_versionno = _versionno.replace(/\./g, '');
    //�������Ҫ�İ汾��
    var _versionno = _versionstr[1];
    if (versioncompare(_versionno, '6.0.2')) {
        console.log("current version is high that target");
        //alert("current version is high that target");
        //�������ã�����;
    } else {
        console.log("current version is less that target");
        $(document).ready(function(){
            //ִ������loding�����
            $("#loading").css("display", "none");
        });
        return false;
    }
    console.log("current weixin version is: " + _versionno);
    //alert("current weixin version is: " + _versionno);

    var callbacks = funcs;
    wx_sdk.onload = function () {
        console.log(callbacks);
        wx_signature(callbacks);
    }
};

//wx_api.shares = function (params) {
//    wx.showOptionMenu();
//    // ��������Ȧ
//    wx.onMenuShareTimeline({
//        title: params.title, // �������
//        link: params.shareCircle ? params.shareCircle : params.link, // ��������
//        imgUrl: params.imgUrl, // ����ͼ��
//        success: function () {
//
//        },
//        cancel: function () {
//        }
//    });
//};

//wx_node.onload = function () {
//        //ע��������Ϣ
//        var url = window.location.href.split('#')[0];
//        var newurl = "http://v.suninpay.com/%E5%BE%AE%E4%BF%A1jssdk/sample.php?jsoncallback=?&url1=" + encodeURIComponent(url);
//        console.log(newurl);
//// newurl = encodeURIComponent(newurl);
////    ��ȡ������Ϣ
////    ͬ���ӷ��������������Ϣ
//        $.ajaxSettings.async = false;
//        $.getJSON(newurl, function(json){
//            console.log('z');
//            if (json) {
//                console.log(json);
//                wx_jssdk.config.appId = json.appId;
//                wx_jssdk.config.timestamp = json.timestamp;
//                wx_jssdk.config.nonceStr = json.nonceStr;
//                wx_jssdk.config.signature = json.signature;
//                console.log(wx_jssdk.config.signature);
//                //callback && callback();
//                //��֤������Ϣ�Ƿ���ȷ
//                wx.config(wx_jssdk.config);
//                // config��Ϣ��֤���ִ��ready����
//                wx.ready(function () {
//                    //��֤�ɹ���ִ�д���
//                    //console.log('yyyy');
//                    // callbacks.ready && callbacks.ready();
//                    //callback && callback();
//                    //wx.getLocation({
//                    //    success: function (res) {
//                    //        var latitude = res.latitude; // γ�ȣ�����������ΧΪ90 ~ -90
//                    //        var longitude = res.longitude; // ���ȣ�����������ΧΪ180 ~ -180��
//                    //        var speed = res.speed; // �ٶȣ�����/ÿ���
//                    //        var accuracy = res.accuracy; // λ�þ���
//                    //    }
//                    //});
//                });
//                wx.error(function(res){
//                    //console.log('error');
//                    console.log(res);
//                    //alert(res);
//                    //$.flytip ? $.flytip(res.errMsg) : alert(res.errMsg);
//                    //callbacks.error && callbacks.error();
//                });
//            }
//        });
//    };

    // // �ӿڵ��óɹ�ʱִ�еĻص�����
    // wx.success(function(res){
    //   callbacks.success && callbacks.success();
    // });
    // // �ӿڵ���ʧ��ʱִ�еĻص�����
    // wx.fail(function(res){
    //   $.vAlert ? $.vAlert(res.errMsg) : alert(res.errMsg);
    //   callbacks.fail && callbacks.fail();
    // });
    // // �ӿڵ������ʱִ�еĻص����������۳ɹ���ʧ�ܶ���ִ��
    // wx.complete(function(res){
    //   callbacks.complete && callbacks.complete();
    // });
    // // �û����ȡ��ʱ�Ļص����������������û�ȡ��������api�Ż��õ�
    // wx.cancel(function(res){
    //   callbacks.cancel && callbacks.cancel();
    // });
    // // ����Menu�еİ�ť���ʱ�����ķ������÷�����֧��Menu�е���ؽӿ�
    // wx.trigger(function(res){
    //   callbacks.trigger && callbacks.trigger();
    // });
    // config��Ϣ��֤ʧ�ܻ�ִ��error����
    //wx.error(function(res){
    //    console.log('error');
    //    console.log(res);
    //    alert(res);
    //    $.flytip ? $.flytip(res.errMsg) : alert(res.errMsg);
    //    callbacks.error && callbacks.error();
    //});
    // });

//};


//*************API����*****************
//��õ���λ��
//wx_api.getlocation = function () {
//    wx.getLocation({
//        success: function (res) {
//            var latitude = res.latitude; // γ�ȣ�����������ΧΪ90 ~ -90
//            var longitude = res.longitude; // ���ȣ�����������ΧΪ180 ~ -180��
//            var speed = res.speed; // �ٶȣ�����/ÿ���
//            var accuracy = res.accuracy; // λ�þ���
//        }
//    });
//};
//==============================
// ΢�ŷ���ӿ�
//==============================
//var wx = {};
//wx_api.shares = function (params) {
//    if(wx) {
//        wx.showOptionMenu();
//
//        // ��������Ȧ
//        wx.onMenuShareTimeline({
//            title: params.title, // �������
//            link: params.shareCircle ? params.shareCircle : params.link, // ��������
//            imgUrl: params.imgUrl, // ����ͼ��
//            success: function () {
//
//            },
//            cancel: function () {
//            }
//        });
//    }
//};
//
//    // ���������
//    wx.onMenuShareAppMessage({
//        title: params.title, // �������
//        desc: params.desc, // ��������
//        link: params.shareFriend ? params.shareFriend : params.link, // ��������
//        imgUrl: params.imgUrl, // ����ͼ��
//        type: params.type ? params.type : "link", // ��������,music��video��link������Ĭ��Ϊlink
//        dataUrl: params.dataUrl ? params.dataUrl : "", // ���type��music��video����Ҫ�ṩ�������ӣ�Ĭ��Ϊ��
//        success: function () {
//        },
//        cancel: function () {
//        }
//    });
//
//    // ����QQ
//    wx.onMenuShareQQ({
//        title: params.title, // �������
//        desc: params.desc, // ��������
//        link: params.shareQQ ? params.shareQQ : params.link, // ��������
//        imgUrl: params.imgUrl, // ����ͼ��
//        success: function () {
//        },
//        cancel: function () {
//        }
//    });
//
//    // ������Ѷ΢��
//    wx.onMenuShareWeibo({
//        title: params.title, // �������
//        desc: params.desc, // ��������
//        link: params.shareWeibo ? params.shareWeibo : params.link, // ��������
//        imgUrl: params.imgUrl, // ����ͼ��
//        success: function () {
//        },
//        cancel: function () {
//        }
//    });
//};