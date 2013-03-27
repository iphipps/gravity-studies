function ajaxformsendmail() {

	$.ajax({
		type: 'POST',
		url: contact_submit.ajaxurl,
		data: {
			action: 'ajaxcontact_send_mail',
			name: $('input[name="name"]').val(),
			lastname: $('input[name="lastname"]').val(),
			email: $('input[name="email"]').val(),
			company: $('input[name="company"]').val(),
			phone: $('input[name="phone"]').val(),
			permalink: $('input[name="permalink"]').val(),
			pagetitle: $('input[name="pagetitle"]').val(),
			message: $('textarea[name="message"]').val()
		},

		beforeSend:function(){
			$('form.contact').addClass('submitted');
		},

		success:function(data){
			$('.response').append('<p>' + data + '</p>');
		},

		error: function(MLHttpRequest, textStatus, errorThrown){
			alert(errorThrown);
		}
	});
}