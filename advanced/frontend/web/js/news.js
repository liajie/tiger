 function parseQueryString(url) {
    var pos;
    var obj = {};
    if ((pos = url.indexOf("?")) != -1) {
        var param = url.substring(pos+1, url.length)
        var paramArr = param.split('&');
        var keyValue = [];
        for (var i = 0, l = paramArr.length; i < l; i++) {
            keyValue = paramArr[i].split('=');
            obj[keyValue[0]] = keyValue[1];
        }
    }
    return obj
}

var isApp = false;

var timer = setInterval(function() {
	if ($) {
		clearInterval(timer);
		init();
	}
}, 500);

function adeptHeader() {
	if (document.documentElement.clientWidth < 651) {
		$('body').attr('style', 'margin-top:0!important');
		$('embed').attr('style', 'display: none!important');
	} else {
		$('body').removeAttr('style');
		$('embed').attr('style', 'display: block');
	}
}

function changeURLPar(destiny, par, par_value) { 
	var pattern = par+'=([^&]*)'; 
	var replaceText = par+'='+par_value; 
	if (destiny.match(pattern)) { 
		var tmp = '/\\'+par+'=[^&]*/'; 
		tmp = destiny.replace(eval(tmp), replaceText); 
		return (tmp); 
	} else { 
		if (destiny.match('[\?]')) { 
			return destiny+'&'+ replaceText; 
		}  else { 
			return destiny+'?'+replaceText; 
		} 
	} 
	return destiny+'\n'+par+'\n'+par_value; 
}

function init() {
	// 虎牙app特殊跳转处理
	var platform = parseQueryString(location.href)['platform'];
	//alert(location.href);
	if (platform == 'huyaapp') {
		isApp = true;
		$.getScript('https://kiwistatic.huya.com/jssdk/dist/Huya-JSSdk.js', function() {
			$('a').click(function(e) {
				e.preventDefault();
				var link = $(this).attr('href') + '?platform=huyaapp';
				HUYASdk.openUrl({
				    url: link  //虎牙内部跳转协议,例如yykiwi://xxx
				});
			});

			HUYASdk.setShareInfo({
			    isShow: true,
			    url:location.href,
			    title: document.title,
			    content: document.title,
			    shareUrl: changeURLPar(location.href, 'platform', 'pc')          //当前页面url
			});
		});
	}

	adeptHeader();

	$(window).resize(function() {
		adeptHeader();
	});
}


