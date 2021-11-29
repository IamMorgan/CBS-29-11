$( window ).on( 'load', ( ) => {

// ===========================
// === START - js for form ===
// ===========================
	// init animation
	new WOW().init();
	
	// mask for phone
	$( 'input[name="phone"]' ).mask( '+7 (k99) 999-99-99' );

	// accept confidential policies
	$( 'input[name="accept"]' ).on( 'input change' , function() {
		$( this ).parents( 'form' ).find( '.js-btn' ).attr('disabled', !$(this)[0].checked);
	});

	// form
	$('form').each(function(index, el) {
		$(el).validate({
			// don't show error text
			errorPlacement: function(error, element) {
				return true;
			},
			submitHandler: function(form){
				$(form).ajaxSubmit({
					type: 'POST',
					url: 'mail.php',
					success: function() {
						$(form).trigger('reset'); // clean form
						$.fancybox.close( true ); // close modal if form in it
						$.fancybox.open($('#thank')); // show Thank modal
					}
				});
			}
		});
	});
// ===========================
// ==== END - js for form ====
// ===========================


});