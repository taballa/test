// add something styleSheets
$(function(){
	// $('title').html('jQuery html'); // 此代码 ie 下会报错！
	$('document').attr('title','jQuery test'); //用 document 修改 title 没问
	$('.first-li:even').css({'color':'red'});
	$('.first-li:odd').css({'color':'cyan'});
	$('.first-li:eq(1)').css({'font-size':'18px'});
	$('.first-li.bottom').css('color', 'yellow');
	$('.last-li').css('color', 'magenta');

	$('a[href*="mtv.com"]').before('<span class="icon-music"></span>');
	$('.last-li').prepend('<span class="icon-glass"></span>');
	// $('a[href*="google.com"]').addClass('icon-glass');
	// $('.last-li').addClass('icon-glass');
	
})

// test clone
$(function(){
	$('.last-li').clone().appendTo('.product')
});

// test on click
$(function(){
	$('.my-link').on('click', alertMe)
	function alertMe(){
		alert("Hello!");
	}
});

// test event
$(function(){// 保证DOM加载
	// test error event
	$('#portrait').error(function(){
		$(this).attr('src', 'upload/images/default.jpg');
	})

	// click box or box-live clone this to .container
	$('.box').on('click',function(){
		$(this).clone().appendTo('.container');
	})
	$('.box-live').live('click', function(){
		$(this).clone().appendTo('.container');
	})

	// test first()
	$('.container').first().on('click', function(){
		$(this).clone().addClass('square').appendTo('.container:first');
	})
})

// 测试mouseover and mouseenter 的区别
x=0;
y=0;
$(document).ready(function(){
  $("div.over").mouseover(function(){
    $(".over span").text(x+=1);
  });
  $("div.enter").mouseenter(function(){
    $(".enter span").text(y+=1);
  });
});

// test toggle
$('.content-link').on('click', function(){
	$('.content').toggle();
})

// TODO: 显示效果不完善，预期为指向每个链接时，链接尺寸放大，离开时恢复。现在不能正确完成，生成的图层挡住了本来需要触发的图层，计划用鼠标位置完成触发，以后再改。
// gallery > photos
// use mouseover mouseout mouseenter mouseleave event.

// $(function(){
// 	$('a.photo').bind({
// 		mouseover: function(){
// 			$(this).clone().addClass('prepose').css({'width':'240px', 'height':'180px'}).appendTo('.slide-gallery')
// 		},
// 		mouseout: function(){
// 			$('.prepose').remove();
// 		}
// 	});
// })
$(function(){
	$('a.photo').hover(
		function(){
			$(this).clone().addClass('prepose').css({'width':'240px', 'height':'180px'}).appendTo('.slide-gallery')
		},
		function(){
			$('.prepose').remove();
		}
	);
})

// test hover event
