
(function($) {


	$("#contact button").click(function(e) {
		// Validate user input
		$("#contact").validate({
			// Remove the error markup
			errorPlacement: function(){}
		});

		if ( $("#contact").valid() ) {
			// Submit the form
			ajaxformsendmail();
		}

		e.preventDefault();

	});


})(jQuery);