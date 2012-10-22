Do.ready(

function() {
	// $(window).unload(function(){
	// 	alert('Are you sure you want to leave?');
	// })
	// window.onbeforeunload = function(){
	// 	return "do you want leave?";
	// } 
	// $(window).bind('beforeunload',function(){
	//   if ( /Firefox[\/\s](\d+)/.test(navigator.userAgent) && new Number(RegExp.$1) >= 4) {
	//       if(confirm('您的内容尚未保存，确定要离开本页吗？')){
	//           history.go();
	//       } else{
	//           window.setTimeout(function() { window.stop(); }, 1);
	//       }
	//   } else{
	//       return '您的内容尚未保存，确定要离开本页吗？';
	//   }
	// });
	$(window).bind('beforeunload', function() {
		if($.browser.mozilla) {
			if(confirm('您的内容尚未保存，确定要离开本页吗？')) {
				history.go();
			} else {
				window.setTimeout(function() {
					window.stop();
				}, 1);
			}
		} else {
			return '您的内容尚未保存，确定要离开本页吗？';
		}
	});

})