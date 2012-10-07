$(function(){
	$('title').html('jQuery html');
	$('.first-li:even').css({'color':'red'});
	$('.first-li:odd').css({'color':'cyan'});
	$('.first-li:eq(1)').css({'font-size':'18px'});
	$('.first-li.bottom').css('color', 'yellow');
	$('.last-li').css('color', 'magenta');

	$('a[href*="mtv.com"]').before('<span class="icon-music"></span>');
	$('.last-li').prepend('<span class="icon-glass"></span>');
	// $('a[href*="google.com"]').addClass('icon-glass');
	// $('.last-li').addClass('icon-glass');
	
	$('.last-li').clone().appendTo('.product');
})