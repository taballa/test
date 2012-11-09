Do.ready(function() {
	// bind
	$('.special-offer').on('click', function() {
		$('#message').show(hideMessage);
	})
	$('.hide-message').on('click', function() {
		$('#message').hide(hideMessage);
	});
	$('.remove-cookie-hide-message').on('click', function() {
		$.cookie('hideMessage', 0);
	})
	$('.advanced-toggle').on('click', function() {
		$('.advanced').slideToggle();
	})

	// execute
	if($.cookie('hideMessage') == 1) {
		$('#message').hide();
	};
})


function hideMessage() {
	$.cookie('hideMessage', 1, {
		expires: 7
	});
}


// 随便加2个中文，试试编码格式