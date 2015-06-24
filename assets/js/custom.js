$(window).load(function(){
	var resizingContent = function(){
		var bodyHeight = document.body.clientHeight;
		var browserHeight = $(window).innerHeight();
		
		if(bodyHeight < browserHeight){
			
			var tmp = $(".header-row").height() + $(".menu-row").height() + $(".footer-row").height();
			var login = $('.login-content-container').height();
			
			if(login != undefined){
				var contentHeight = browserHeight - tmp;
				$('.login-content-container').css('height', contentHeight+"px");
				
			}
			else{
				var main = $('.main-container').height();
				var contentHeight = browserHeight - main;
				$('.blank-row').css('height', contentHeight+"px");
			}
		}
	}
	resizingContent();
});
