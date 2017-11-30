// JavaScript Document
$(function(){
	//搜索框
	$('input.lm_hsText').focus(function(){
		if($(this).val() == '产品介绍 / 如何申请 / 充值'){
			$(this).val('');
		}
	}).blur(function(){
		if($(this).val() == ''){
			$(this).val('产品介绍 / 如何申请 / 充值');
		}
	});
	
	//搜索结果页折叠
	$('.lm_hSearchUl li').each(function(){
        $(this).click(function(){
			if($(this).hasClass('on')){
				$(this).removeClass('on');
				$(this).find('div.qaCon').hide();
			}else{
				$(this).addClass('on');
				$(this).find('div.qaCon').show();
				$(this).siblings('li').removeClass('on');
				$(this).siblings('li').find('div.qaCon').hide();
			}
		});
    });
	
	//左侧菜单
	$('#lm_hcQyUl > li').each(function(){
        $(this).click(function(){
			$(this).siblings('li').removeClass('on');
			$(this).addClass('on');
			$(this).find('li').each(function(){
				$(this).click(function(){
					$(this).siblings('li').removeClass('curr');
					$(this).parent().parent().siblings('li').find('li').removeClass('curr');
				    $(this).addClass('curr');
				});
            });
		});
		$(this).find('li').each(function(){
			$(this).click(function(){
				$(this).siblings('li').removeClass('curr');
				$(this).parent().parent().siblings('li').find('li').removeClass('curr');
				$(this).addClass('curr');
			});
		});
    });
	$('#lm_hcQyUl > li > ul > li').each(function(){
		$(this).click(function(){
			$(this).siblings('li').removeClass('curr');
			$(this).parent().parent().siblings('li').find('li').removeClass('curr');
			$(this).addClass('curr');
		});
    });

    //四个板块，不同的划过颜色值
    $.each(['#e09236', '#639ac9', '#60a9b1', '#e65c5c'], function(i, v){
        $('div.help_boxx:eq('+i+') a').hover(function(e){
            $(this).css({'background': v});
        }, function(e){
            $(this).css({'background': ''});
        });
    });
});
