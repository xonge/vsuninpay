// alert('a');
// /*
//  * 微信分享内容设置(老版本API)
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

//   // 发送给好友
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

//   // 分享到朋友圈
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
//  * 微信分享6.0.2新版 API
//  * victor
//  */

// //***********LOAD SDK****************

// var LOADWXJS = document.createElement("script");
// LOADWXJS.setAttribute("src","http://res.wx.qq.com/open/js/jweixin-1.0.0.js");
// document.head.appendChild(LOADWXJS);

// //***********SDK配置*******************

// var WXJSSDK = WXJSSDK || {};
// var WXAPI = WXAPI || {};

// WXJSSDK.config = {
//     debug: true, // 调试
//     // appId: 'wxcaebd5318cdb7fa1', // 必填，公众号的唯一标识,如果提示签名无效需检查此id是否和当前绑定的js安全域名同一个公众号
//     // timestamp: parseInt((new Date).getTime()/1000), // 必填，生成签名的时间戳
//     // nonceStr: Math.random().toString(36).substr(2), // 必填，生成签名的随机串
//     // signature: '',// 签名
//     appId: '', // 必填，公众号的唯一标识,如果提示签名无效需检查此id是否和当前绑定的js安全域名同一个公众号
//     timestamp: 0, // 必填，生成签名的时间戳
//     nonceStr: '', // 必填，生成签名的随机串
//     signature: '',// 签名
//     jsApiList: ["onMenuShareTimeline","onMenuShareAppMessage","onMenuShareQQ","onMenuShareWeibo"] // 必填，需要使用的JS接口列表
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

// // 加载微信开发工具包
// // callbacks： 是一个包含了各种回调的对象
// WXJSSDK.load = function (callbacks){
//   //SDK加载完成后
//   console.log("rrrrrr");
//   LOADWXJS.onload = function(){
//     //注入配置信息
//     console.log('tttttt');
//     WXJSSDK.signature(function() {
//       console.log('zzzzzz');
//       console.log(WXJSSDK.config);
//       wx.config(WXJSSDK.config);
//     });

//     //config信息验证后会执行ready方法
//     wx.ready(function(){
//       callbacks.ready && callbacks.ready();
//     });
//     // // 接口调用成功时执行的回调函数
//     // wx.success(function(res){
//     //  callbacks.success && callbacks.success();
//     // });
//     // // 接口调用失败时执行的回调函数
//     // wx.fail(function(res){
//     //  $.vAlert ? $.vAlert(res.errMsg) : alert(res.errMsg);
//     //  callbacks.fail && callbacks.fail();
//     // });
//     // // 接口调用完成时执行的回调函数，无论成功或失败都会执行
//     // wx.complete(function(res){
//     //  callbacks.complete && callbacks.complete();
//     // });
//     // // 用户点击取消时的回调函数，仅部分有用户取消操作的api才会用到
//     // wx.cancel(function(res){
//     //  callbacks.cancel && callbacks.cancel();
//     // });
//     // // 监听Menu中的按钮点击时触发的方法，该方法仅支持Menu中的相关接口
//     // wx.trigger(function(res){
//     //  callbacks.trigger && callbacks.trigger();
//     // });
//     // config信息验证失败会执行error函数
//     wx.error(function(res){
//       console.log(res);
//       alert(res);
//       $.flytip ? $.flytip(res.errMsg) : alert(res.errMsg);
//       callbacks.error && callbacks.error();
//     });
//   };

// };


// //*************API定义*****************

// //==============================
// // 微信分享接口
// //==============================
// WXAPI.shares = function (params){
//   wx.showOptionMenu();

//   // 分享到朋友圈
//   wx.onMenuShareTimeline({
//       title: params.title, // 分享标题
//       link: params.shareCircle ? params.shareCircle : params.link, // 分享链接
//       imgUrl: params.imgUrl, // 分享图标
//       success: function () {

//       },
//       cancel: function () {
//       }
//   });

//   // 分享给朋友
//   wx.onMenuShareAppMessage({
//       title: params.title, // 分享标题
//       desc: params.desc, // 分享描述
//       link: params.shareFriend ? params.shareFriend : params.link, // 分享链接
//       imgUrl: params.imgUrl, // 分享图标
//       type: params.type ? params.type : "link", // 分享类型,music、video或link，不填默认为link
//       dataUrl: params.dataUrl ? params.dataUrl : "", // 如果type是music或video，则要提供数据链接，默认为空
//       success: function () {
//       },
//       cancel: function () {
//       }
//   });

//   // 分享到QQ
//   wx.onMenuShareQQ({
//       title: params.title, // 分享标题
//       desc: params.desc, // 分享描述
//       link: params.shareQQ ? params.shareQQ : params.link, // 分享链接
//       imgUrl: params.imgUrl, // 分享图标
//       success: function () {
//       },
//       cancel: function () {
//       }
//   });

//   // 分享到腾讯微博
//   wx.onMenuShareWeibo({
//       title: params.title, // 分享标题
//       desc: params.desc, // 分享描述
//       link: params.shareWeibo ? params.shareWeibo : params.link, // 分享链接
//       imgUrl: params.imgUrl, // 分享图标
//       success: function () {
//       },
//       cancel: function () {
//       }
//   });
// };




/*
 * 微信分享6.0.2新版 API
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

//***********SDK配置*******************
var wx_jssdk = wx_jssdk || {};
var wx_api = wx_api || {};

//预留给$.getJSON的回调函数
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
////    获取配置信息
////    同步从服务器获得配置信息
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
//            //验证配置信息是否正确
//            wx.config(wx_jssdk.config);
//            // config信息验证后会执行ready方法
//            wx.ready(function () {
//                //验证成功后执行代码
//                console.log('yyyy');
//                // callbacks.ready && callbacks.ready();
//                callback && callback();
//                //wx.getLocation({
//                //    success: function (res) {
//                //        var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
//                //        var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
//                //        var speed = res.speed; // 速度，以米/每秒计
//                //        var accuracy = res.accuracy; // 位置精度
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

// 加载微信开发工具包
// callbacks： 是一个包含了各种回调的对象
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
//官方SDK加载完成后，反正同步获得配置文件，不在下面使用回调函数了

wx_jssdk.config = {
    debug: false, // 调试
    // appId: 'wxcaebd5318cdb7fa1', // 必填，公众号的唯一标识,如果提示签名无效需检查此id是否和当前绑定的js安全域名同一个公众号
    // timestamp: parseInt((new Date).getTime()/1000), // 必填，生成签名的时间戳
    // nonceStr: Math.random().toString(36).substr(2), // 必填，生成签名的随机串
    // signature: '',// 签名
    appId: '', // 必填，公众号的唯一标识,如果提示签名无效需检查此id是否和当前绑定的js安全域名同一个公众号
    timestamp: 0, // 必填，生成签名的时间戳
    nonceStr: '', // 必填，生成签名的随机串
    signature: '',// 签名
    jsApiList: ["onMenuShareTimeline","onMenuShareAppMessage","onMenuShareQQ","onMenuShareWeibo","chooseImage","uploadImage","getLocation"] // 必填，需要使用的JS接口列表
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
        // 分享到朋友圈
        wx.onMenuShareTimeline({
            title: params.title, // 分享标题
            link: params.shareCircle ? params.shareCircle : params.link, // 分享链接
            imgUrl: params.imgUrl, // 分享图标
            success: function () {

            },
            cancel: function () {
            }
        });
        // 分享给朋友
        wx.onMenuShareAppMessage({
            title: params.title, // 分享标题
            desc: params.desc, // 分享描述
            link: params.shareFriend ? params.shareFriend : params.link, // 分享链接
            imgUrl: params.imgUrl, // 分享图标
            type: params.type ? params.type : "link", // 分享类型,music、video或link，不填默认为link
            dataUrl: params.dataUrl ? params.dataUrl : "", // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
            },
            cancel: function () {
            }
        });
        // 分享到QQ
        wx.onMenuShareQQ({
            title: params.title, // 分享标题
            desc: params.desc, // 分享描述
            link: params.shareQQ ? params.shareQQ : params.link, // 分享链接
            imgUrl: params.imgUrl, // 分享图标
            success: function () {
            },
            cancel: function () {
            }
        });
        // 分享到腾讯微博
        wx.onMenuShareWeibo({
            title: params.title, // 分享标题
            desc: params.desc, // 分享描述
            link: params.shareWeibo ? params.shareWeibo : params.link, // 分享链接
            imgUrl: params.imgUrl, // 分享图标
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
            // 7.2 获取当前地理位置
            document.querySelector(el).onclick = function () {
                wx.getLocation({
                    success: function (res) {
                        xgwx.mylocation = res;
                        var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
                        var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
                        var speed = res.speed; // 速度，以米/每秒计
                        var accuracy = res.accuracy; // 位置精度
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
                                var StrGuideWebLink = "http://api.map.baidu.com/direction?origin=latlng:" + latitude + "," + longitude + "|name:湘潭市雨湖公园&destination=name:" + address + "|latlng:" + lat + "," + lng + "&mode=driving&region=湘潭&output=html&src=湘潭";
                                location.href = StrGuideWebLink;
                    })
                    },
                    cancel: function (res) {
                        alert('用户拒绝授权获取地理位置');
                    }
                });
            };
        } else {
            wx.getLocation({
                success: function (res) {
                    xgwx.mylocation = res;
                    var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
                    var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
                    var speed = res.speed; // 速度，以米/每秒计
                    var accuracy = res.accuracy; // 位置精度
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
            var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
            var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
            var speed = res.speed; // 速度，以米/每秒计
            var accuracy = res.accuracy; // 位置精度
        }
    });
};

xgwx.chooseimage = function () {
    wx.chooseImage({
        success: function (res) {
            var localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
        }
    });
};

wx_signature = function (callbacks) {
    //注入配置信息
    var url = window.location.href.split('#')[0];
    var newurl = "http://v.suninpay.com/%E5%BE%AE%E4%BF%A1jssdk/sample.php?jsoncallback=?&url1=" + encodeURIComponent(url);
    console.log(newurl);
// newurl = encodeURIComponent(newurl);
//    获取配置信息
//    同步从服务器获得配置信息
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
            //验证配置信息是否正确
            //wx.config(wx_jssdk.config);
            //callback && callback();
            wx.config(wx_jssdk.config);
            wx.ready(function () {
                //console.log("sign ok");
                //等wxjssdk通过验证，就隐藏掉loding层
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

//微信版本比较函数
var versioncompare = function(curver, targetver){
    if (curver === null || targetver === null) {
        return false;
    }
    //这里使用没有过滤.的字符串，纯数字不好比较
    var curverarr = curver.split('.');
    var targetverarr = targetver.split('.');
    console.log("current version number array is: " + curverarr);
    for (var i = 0; i < curverarr.length; i++) {
        console.log(curverarr[i]);
        //两个版本字符串数组同一位置数字大小比较，还必须转成数字才能比较
        var curno = parseInt(curverarr[i]);
        var tarno = parseInt(targetverarr[i]);
        if (curno < tarno) {
            //只要当前小于指定就立即返回
            console.log(curverarr[i] + " is less that " + targetverarr[i]);
            return false;
        } else {
            //大于就继续比较，这里是不是多余了？
            //大于也立即返回，不然总会小于的，就没什么意义了
            return true;
        }
    }
    return true;
};

//不在此处使用回调函数，只做初始化
xgwx.init = function (funcs) {
    console.log("init");
    console.log(funcs);
    //如果不是微信，直接回退，不考虑是不是伪造ua
    //判断微信版本是否高于6.0.2，低版本用旧接口，高版本用jssdk
    var useragent = navigator.userAgent;
    console.log(useragent);
    //var versionno = useragent.match('/MicroMessenger\/(.*?)[^\d\.]/');
    //使用正则从ua中获得微信版本号
    var _versionstr = useragent.match(/MicroMessenger\/(.*?)[^\d\.]/i);
    //如果根本就不是微信，直接回退
    if (_versionstr === null) {
        //执行隐藏loding层操作
        console.log("is not weixin");
        //alert("is not weixin");
        $("#loading").css("display", "none");
        return false;
    }
    //过滤掉版本字符串中的.，用来计算当前版本是不是超过6.0.2
    //_versionno = _versionno.replace(/\./g, '');
    //这才是需要的版本号
    var _versionno = _versionstr[1];
    if (versioncompare(_versionno, '6.0.2')) {
        console.log("current version is high that target");
        //alert("current version is high that target");
        //返回你妹，继续;
    } else {
        console.log("current version is less that target");
        $(document).ready(function(){
            //执行隐藏loding层操作
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
//    // 分享到朋友圈
//    wx.onMenuShareTimeline({
//        title: params.title, // 分享标题
//        link: params.shareCircle ? params.shareCircle : params.link, // 分享链接
//        imgUrl: params.imgUrl, // 分享图标
//        success: function () {
//
//        },
//        cancel: function () {
//        }
//    });
//};

//wx_node.onload = function () {
//        //注入配置信息
//        var url = window.location.href.split('#')[0];
//        var newurl = "http://v.suninpay.com/%E5%BE%AE%E4%BF%A1jssdk/sample.php?jsoncallback=?&url1=" + encodeURIComponent(url);
//        console.log(newurl);
//// newurl = encodeURIComponent(newurl);
////    获取配置信息
////    同步从服务器获得配置信息
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
//                //验证配置信息是否正确
//                wx.config(wx_jssdk.config);
//                // config信息验证后会执行ready方法
//                wx.ready(function () {
//                    //验证成功后执行代码
//                    //console.log('yyyy');
//                    // callbacks.ready && callbacks.ready();
//                    //callback && callback();
//                    //wx.getLocation({
//                    //    success: function (res) {
//                    //        var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
//                    //        var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
//                    //        var speed = res.speed; // 速度，以米/每秒计
//                    //        var accuracy = res.accuracy; // 位置精度
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

    // // 接口调用成功时执行的回调函数
    // wx.success(function(res){
    //   callbacks.success && callbacks.success();
    // });
    // // 接口调用失败时执行的回调函数
    // wx.fail(function(res){
    //   $.vAlert ? $.vAlert(res.errMsg) : alert(res.errMsg);
    //   callbacks.fail && callbacks.fail();
    // });
    // // 接口调用完成时执行的回调函数，无论成功或失败都会执行
    // wx.complete(function(res){
    //   callbacks.complete && callbacks.complete();
    // });
    // // 用户点击取消时的回调函数，仅部分有用户取消操作的api才会用到
    // wx.cancel(function(res){
    //   callbacks.cancel && callbacks.cancel();
    // });
    // // 监听Menu中的按钮点击时触发的方法，该方法仅支持Menu中的相关接口
    // wx.trigger(function(res){
    //   callbacks.trigger && callbacks.trigger();
    // });
    // config信息验证失败会执行error函数
    //wx.error(function(res){
    //    console.log('error');
    //    console.log(res);
    //    alert(res);
    //    $.flytip ? $.flytip(res.errMsg) : alert(res.errMsg);
    //    callbacks.error && callbacks.error();
    //});
    // });

//};


//*************API定义*****************
//获得地理位置
//wx_api.getlocation = function () {
//    wx.getLocation({
//        success: function (res) {
//            var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
//            var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
//            var speed = res.speed; // 速度，以米/每秒计
//            var accuracy = res.accuracy; // 位置精度
//        }
//    });
//};
//==============================
// 微信分享接口
//==============================
//var wx = {};
//wx_api.shares = function (params) {
//    if(wx) {
//        wx.showOptionMenu();
//
//        // 分享到朋友圈
//        wx.onMenuShareTimeline({
//            title: params.title, // 分享标题
//            link: params.shareCircle ? params.shareCircle : params.link, // 分享链接
//            imgUrl: params.imgUrl, // 分享图标
//            success: function () {
//
//            },
//            cancel: function () {
//            }
//        });
//    }
//};
//
//    // 分享给朋友
//    wx.onMenuShareAppMessage({
//        title: params.title, // 分享标题
//        desc: params.desc, // 分享描述
//        link: params.shareFriend ? params.shareFriend : params.link, // 分享链接
//        imgUrl: params.imgUrl, // 分享图标
//        type: params.type ? params.type : "link", // 分享类型,music、video或link，不填默认为link
//        dataUrl: params.dataUrl ? params.dataUrl : "", // 如果type是music或video，则要提供数据链接，默认为空
//        success: function () {
//        },
//        cancel: function () {
//        }
//    });
//
//    // 分享到QQ
//    wx.onMenuShareQQ({
//        title: params.title, // 分享标题
//        desc: params.desc, // 分享描述
//        link: params.shareQQ ? params.shareQQ : params.link, // 分享链接
//        imgUrl: params.imgUrl, // 分享图标
//        success: function () {
//        },
//        cancel: function () {
//        }
//    });
//
//    // 分享到腾讯微博
//    wx.onMenuShareWeibo({
//        title: params.title, // 分享标题
//        desc: params.desc, // 分享描述
//        link: params.shareWeibo ? params.shareWeibo : params.link, // 分享链接
//        imgUrl: params.imgUrl, // 分享图标
//        success: function () {
//        },
//        cancel: function () {
//        }
//    });
//};