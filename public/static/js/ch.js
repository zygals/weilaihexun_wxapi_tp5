//导航-导航悬浮
var header = parseInt($('.header').height());
$(window).scroll(function() {
		var s = $(window).scrollTop();
		if (s > header) {
			$('#head').attr('class', 'header current');
			$('body').css('padding-top', 0);
			$('.nav').css('top', 40);
		} else {
			$('#head').attr('class', 'header');
			$('body,html').css('padding-top', 0);
			$('.nav').css('top', 80);
		}
		$('.nav').find('a').click(function() {
			$('.nav').find('a').removeClass('cur');
			$(this).addClass('cur');
		})
	})

