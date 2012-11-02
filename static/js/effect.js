Do.ready('effect-css', function() {
	// test fadin fadeout
	$('.fade-test>img').on({
		click: function() {
			// $(this).fadeTo(600, 0.1);
			$(this).fadeOut();
		}
	})
	$('.fade-test>.reset').on({
		click: function() {
			$('.fade-test>img').fadeIn();
		}
	})

	//slide images
	var slideImagesArray = ["ansel_adams1.jpg", "ansel_adams2.jpg", "ansel_adams3.jpg", "ansel_adams4.jpg", "ansel_adams5.jpg", "ansel_adams6.jpg"];
	var slideImagesArray2 = ["dog1.png", "dog2.png", "dog3.png"]
	$('.slide-images').html('<img src="upload/images/' + slideImagesArray2[0] + '" />').after('<ul class="slide-nav"></ul>');
	for(var i = 0; i < slideImagesArray2.length; i++) {
		var slideNavText = i + 1;
		$('.slide-nav').append('<li><a href="#!" rel="' + slideImagesArray2[i] + '">' + slideNavText + '</a></li>');
	};
	var imagesDirectory = "upload/images/";
	var slideNavList = $('.slide-nav li a');
	slideNavList.on('click', function() {
		var imageName = $(this).attr('rel');
		$('.slide-images img').attr('src', imagesDirectory + imageName);
		slideNavList.removeClass('active');
		$(this).addClass('active');
	})
	slideNavList.eq(0).click();

	// text delay animation
	// FIXME: 效果老是累加，应该新动画开始前自动停止。
	$('.show-tip').hover(
	function() {
		$('.tool-tip').fadeIn(900);
	}, function() {
		$('.tool-tip').delay(2000).fadeOut(900);
	})
})