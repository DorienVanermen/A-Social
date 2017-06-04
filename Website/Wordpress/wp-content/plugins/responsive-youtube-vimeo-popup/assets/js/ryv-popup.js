(function($) {

	var url = $('.ryv-popup-video').attr('data-ryv-popup-url');

	$('.ryv-popup').click(function(event) {
		event.preventDefault();
		$('.ryv-popup-wrapper, .ryv-popup-video').fadeIn(200);
		$(".ryv-popup-video").attr("src", url);
		$(window).trigger('resize');
	});


	// Close Function
	function close_ryv_popup() {
		$('.ryv-popup-wrapper, .ryv-popup-video').fadeOut(200);
		setTimeout(function(){
			$('.ryv-popup-video').attr('src', '');
		}, 200);
	}

	// Close on click
	$('.ryv-popup-wrapper').click(function() {
		close_ryv_popup();
	});

	// Close on Escape
	$(document).keyup(function(e) {
		if (e.keyCode == 27) {
			if ( $('.ryv-popup-wrapper').is(':visible') ) {
				close_ryv_popup();
			}
		}
	});

	// Resize
	$(window).resize(function() {
		var videoWidth = $('.ryv-popup-video').width();
		$('.ryv-popup-video').height(videoWidth*0.5625);
	});

})( jQuery );