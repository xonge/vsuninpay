$(document).ready(function(){
	function item_set(){
		var item_height = $('.plate li').height();
		$('.plate-item').height(item_height-2);
	}

	var run_t = null,
		last_time = '';

	function run(){
		$('.plate li').off('click');
		var start = 1,
			time = 0;
		run_t = setInterval(function(){
			$('.plate li[item-order='+start+']').addClass('active').siblings().removeClass('active');
			start++;
			time += 100;
			if( start == 13 ){
				start = 1;
			}
			if( time == 5000 ){
				end(start);
			}
		},100)
	}

	function end(start){
		var result = parseInt(Math.random()*12)+1;
		if( (last_time == 'min' && result < 7) || (last_time == 'max' && result >= 7) ){
			result = parseInt(Math.random()*12)+1;
			if( result < 7 ){
				last_time = 'min';
			}else{
				last_time = 'max';
			}
		}
		clearInterval(run_t);
		var t = setInterval(function(){
			$('.plate li[item-order='+start+']').addClass('active').siblings().removeClass('active');
			if( start == result ){
				clearInterval(t);
				var txt = $('.plate li[item-order='+result+']').text();
				$('.plate-btn').removeClass('runing');
				use_num();
				pop_result(txt);
			}else{
				start++;
				if( start == 13 ){
					start = 1;
				}
			}
		},300);
	}

	function pop_info(txt){
		$('.pop-info .pop-con').text(txt);
		$('.pop-info,.pop-mask').show();
		$('.pop-info .pop-closed').on('click',function(){
			$('.pop-info,.pop-mask').hide();
		})
	}

	function pop_result(txt){
		$('.pop-result .pop-con p').text(txt);
		$('.pop-result,.pop-mask').show();
		$('.pop-result .pop-closed').on('click',function(){
			$('.pop-result,.pop-mask').hide();
			$('.plate li').removeClass('active');
			active();
		})
	}

	function active(){
		$('.plate li').on('click',function(){
			if( !$(this).hasClass('blank-item') ){
				if( $(this).hasClass('plate-btn') ){
					if( !$(this).hasClass('runing') ){
						$(this).addClass('runing');
						run();
					}
				}else{
					var txt = $(this).text();
					//pop_info(txt);
				}
			}
		})
	}

	function use_num(){
		$.ajax({
			url : _use_num,
			type : 'get',
			dataType : 'json',
			data : {}
		})
	}

	$.when(
		// $.ajax({
		// 	url : _global,
		// 	type : 'get',
		// 	dataType : 'json',
		// 	data : {}
		// })
	).done(function(res){
		console.log(res);
		res1 = '{"status":true,"data":{"id":"2","token":"rreprs1419052211","title":"\u6f33\u6d66\u4e94\u5c1a\u7816KTV\u4eba\u54c1\u8003\u9a8c\u60e9\u7f5a\u53f0","keyword":"\u60e9\u7f5a\u53f0","pic":"http:\/\/weixin.292w.com\/uploads\/r\/rreprs1419052211\/d\/1\/4\/d\/thumb_5495258a593a4.jpg","name":"\u60e9\u7f5a\u53f0","use_num":"601","info":"K\u6b4c\u3001\u559d\u9152\u6c14\u6c1b\u600e\u4e48\u641e\uff1f\uff01\u60f3\u600e\u4e48high\u5c31\u600e\u4e48high\uff01","is_open":"1","item":{"item1":"\u559d\u5149\u4f60\u5de6\u53f3\u4e24\u8fb9\u4eba\u676f\u5185\u7684\u9152","item2":"\u4f60\u6307\u5b9a\u4e24\u4e2a\u4eba\u559d\u5b8c\u4e00\u6574\u676f\u4ea4\u676f\u9152","item3":"\u9009\u62e9\u73a9\u771f\u5fc3\u8bdd\u5927\u5192\u9669\u6216\u8fde\u5e72\u4e24\u676f","item4":"\u606d\u559c\u4f60\u518d\u6765\u4e00\u76d8","item5":"\u9664\u4f60\u4ee5\u5916\uff0c\u6240\u6709\u4eba\u559d\u5b8c\u4e00\u6574\u676f","item6":"\u795e\u7684\u7737\u987e\u5b8c\u5168\u901a\u8fc7","item7":"\u8fde\u5e72\u4e24\u676f","item8":"\u559d\u5b8c\u4e00\u676f","item9":"\u9009\u62e9\u4e00\u4e2a\u5f02\u6027\u548c\u81ea\u5df1\u559d\u5b8c\u4e00\u6574\u676f\u4ea4\u676f\u9152","item10":"\u6307\u5b9a\u4e00\u4e2a\u4eba\u9009\u62e9\u73a9\u771f\u5fc3\u8bdd\u5927\u5192\u9669\u6216\u8fde\u5e72\u4e24\u6574\u676f","item11":"\u559d\u5b8c\u534a\u676f","item12":"\u8214\u9152\u676f10\u4e0b\uff0c\u5e76\u7528\u81ea\u5df1\u7684\u624b\u673a\u62cd\u7167\u53d1\u670b\u53cb\u5708","item13":"\u684c\u4e0a\u676f\u4e2d\u6e05"}}}';
		res = JSON.parse(res1);
		if( res.status == true){
			var html = template('item-list', res.data);
			$('ul').html(html);
			item_set();
			$(window).resize(function(){
				item_set();
			})
			active();
		}
	})
})