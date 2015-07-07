function play68_init() {
	updateShare(0);
}

function play68_submitScore(score) {
	updateShareScore(score);
	Play68.shareFriend(); 
}

function updateShare(bestScore) {
	var percent=Math.min(Math.floor((Math.pow((bestScore/300),1.0/8))*100),100);
	var shareTitle = "";
	var descContent = "有多远滚多远";
	switch(true){
		case bestScore > 1500 :
			shareTitle = "我滚了" + bestScore + "米，滚到人生巅峰，已载入史册！";
			break;
		case bestScore > 1200 :
			shareTitle = "我滚了" + bestScore + "米，下一站火星！";
			break;
		case bestScore > 900 :
			shareTitle = "我滚了" + bestScore + "米，我已经化为一颗小星星远去了！";
			break;
		case bestScore > 700 :
			shareTitle = "我滚了" + bestScore + "米，这是要拜托地球引力的节奏！";
			break;
		case bestScore > 500 :
			shareTitle = "我滚了" + bestScore + "米，滚出了自己的风格！";
			break;
		case bestScore > 300 :
			shareTitle = "我滚了" + bestScore + "米，滚得精彩！";
			break;
		case bestScore > 100 :
			shareTitle = "我滚了" + bestScore + "米，请问终点在哪里？";
			break;
		case bestScore > 0 :
			shareTitle = "我滚了" + bestScore + "米，手一抖就撞墙了！不要问我头疼不疼！";
			break;
		default: shareTitle = "你说有多远滚多远，就别叫我回来，因为我已经滚得太远了...";
	}
	window.shareData.desc = shareTitle;
	appid = '';
	Play68.setShareInfo(shareTitle,descContent);
}

function updateShareScore(bestScore) {
	updateShare(bestScore);
}


(function() {
    var e = function() {};
    e.prototype = {
        postData: function(a) {
            window.parent.postMessage(a, "*")
        },
        goHome: function(a) {
            this.postData({
                op_type: "fn",
                value: {
                    fn: "go_home",
                    args: [{
                        url: a
                    }
                    ]
                }
            })
        },
        setShareInfo: function(a, b, c) {
            this.postData({
                op_type: "fn",
                value: {
                    fn: "setShareInfo",
                    args: [{
                        title: a,
                        desc: b,
                        showShareTime: c
                    }
                    ]
                }
            })
        },
        shareFriend: function() {
        	//console.log("shareFriend");
            this.postData({
                op_type: "fn",
                value: {
                    fn: "share",
                    args: []
                }
            })
        },
        setHorizontal: function(a) {
            this.postData({
                op_type: "fn",
                value: {
                    fn: "setHorizontal",
                    args: [a]
                }
            })
        },
        rankingType: {
            RANKING_TYPE_SCORE_DESC: 1,
            RANKING_TYPE_SCORE_ASC: 2,
            RANKING_TYPE_LEVEL_SCORE_DESC: 3,
            RANKING_TYPE_LEVEL_SCORE_ASC: 4
        },
        rankingShowType: {
            RANKING_SHOW_AUTO: 0,
            RANKING_SHOW: 1,
            RANKING_SHOW_NO: 2
        },
        setRanking: function(a, b, c, d) {
            a = a || this.rankingType.RANKING_TYPE_SCORE_DESC;
            d = d || this.rankingShowType.RANKING_SHOW_AUTO;
            this.postData({
                op_type: "fn",
                value: {
                    fn: "ranking",
                    args: [{
                        type: a,
                        level: b || 0,
                        score: c || 0,
                        showRankingType: d
                    }
                    ]
                }
            })
        },
        setRankingScoreDesc: function(a, b) {
            this.setRanking(this.rankingType.RANKING_TYPE_SCORE_DESC, 0, a, b)
        },
        setRankingScoreAsc: function(a,
        b) {
            this.setRanking(this.rankingType.RANKING_TYPE_SCORE_ASC, 0, a, b)
        },
        setRankingLevelScoreDesc: function(a, b, c) {
            this.setRanking(this.rankingType.RANKING_TYPE_LEVEL_SCORE_DESC, a, b, c)
        },
        setRankingLevelScoreAsc: function(a, b, c) {
            this.setRanking(this.rankingType.RANKING_TYPE_LEVEL_SCORE_ASC, a, b, c)
        },
        showRanking: function() {
            this.postData({
                op_type: "fn",
                value: {
                    fn: "showRanking",
                    args: []
                }
            })
        },
        closeRecommend: function() {
            this.postData({
                op_type: "fn",
                value: {
                    fn: "closeRecommend",
                    args: []
                }
            })
        },
        festivalgame: function() {
            this.postData({
                op_type: "fn",
                value: {
                    fn: "festivalgame",
                    args: []
                }
            })
        }
    };
    window.Play68 = new e;
    window.addEventListener("message", function(a) {
        var b = {
            wx_share_succ: function(a) {
                "function" === typeof on_wx_share_succ && on_wx_share_succ(a)
            }
        };
        //console.log("====== from parent begin ======");
        //console.log(a);
        //console.log("====== from parent end ======");
        //return;
        switch (a.data.op_type) {
        case "fn":
            //b[a.data.value.fn].apply(window, a.data.value.args);
            if(a.data.value.fn == "share"){
                if(!shareShowing){
                	document.getElementById("share").style.display = "block";
                	shareShowing = true;
                }
               
            }
            break;
        default:
            console.log(a)
        }
    }, !1)
})();




