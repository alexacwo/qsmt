jQuery( document ).ready(function() {
	jQuery( '.mobile-menu').click(function (event) {
		event.preventDefault();
		
		jQuery('#site-navigation #menu-primary>li').slideToggle();
	});  
	 
	/* jQuery( '#menu-primary>li').hover(function () {
		clearTimeout(jQuery.data(this,'timer'));
		jQuery('ul',this).stop(true,true).slideDown(200);
	}, function () {
		jQuery.data(this,'timer', setTimeout(jQuery.proxy(function() {
			jQuery('ul',this).stop(true,true).slideUp(200);
		}, this), 100));
	}); */ 

	 jQuery( '#menu-primary>li').hover(function ( ) {  
		clearTimeout(jQuery.data(this,'timer'));
		jQuery('ul',this).stop(true,true).slideDown(200);
	}, function ( ) { 
		event.preventDefault();
		jQuery.data(this,'timer', setTimeout(jQuery.proxy(function() {
			jQuery('ul',this).stop(true,true).slideUp(200);
		}, this), 100));
	});  

	/* Payment method details hide/show */
	
	paymentMethod = jQuery (".payment_method input[type='radio'] ");
	
	paymentMethod.click(function() {
		if(jQuery ( this ).parent().hasClass('first')) {
			jQuery ('.bank-transfer-details').hide('slow');
			jQuery ('.credit-card-details').show('slow');
		}
		if(jQuery ( this ).parent().hasClass('last')) {
			jQuery ('.credit-card-details').hide('slow');
			jQuery (".credit-card-details input[type='radio']").prop('checked', false);
			jQuery ('.credit-card-details input').val('');
			jQuery ('.bank-transfer-details').show('slow');
		}
	});
	
	/* Watch Dietary requirements list */	
	
	jQuery(".dietary_requirement .last").prev().addClass('before-last');
	jQuery('.food_allergies').appendTo('.dietary_requirement .before-last');	
	jQuery('.other_dietary_req').appendTo('.dietary_requirement .last');	
	
	jQuery( ".dietary_requirement input[type='checkbox']" ).change(function() {		
		beforeLastChecked = jQuery(".dietary_requirement .before-last input[type='checkbox']:checked").length;
		lastChecked = jQuery(".dietary_requirement .last input[type='checkbox']:checked").length; 
		
		if (beforeLastChecked) {		
			jQuery('.food_allergies').show('slow');
		} else {				
			jQuery('.food_allergies').hide('slow');
			jQuery(".dietary_requirement input[type='text']").val('');
		}
		if (lastChecked) {		
			jQuery('.other_dietary_req').show('slow');
		} else {				
			jQuery('.other_dietary_req').hide('slow');
			jQuery(".dietary_requirement input[type='text']").val('');
		}	
	});
	
	/* Disable Online Registration Form fields */
	
	amountField = jQuery("#disabled .dollars_amount input[type='number']");
	amountInWordsFields = jQuery("#disabled .dollars_amount_words input[type='text']");
	
	amountField.attr('disabled', 'disabled');	
	amountInWordsFields.attr('disabled', 'disabled');
	
	/* Bind amount in dollars to the registration_fees select list */
	
	jQuery( ".registration_fees input[type='radio']" ).change(function() {
		fee_val = jQuery( this ).val();
		singleDayRegistration = jQuery(".single_day_registration");
		
		switch (fee_val) {
			case '0':
				amountField.val('450');
				amountInWordsFields.val('Four hundred and fifty');
				break;
			case '1':
				amountField.val('550');
				amountInWordsFields.val('Five hundred and fifty');
				break;
			case '2':
				amountField.val('395');
				amountInWordsFields.val('Three hundred and ninety five');
				break;
			case '3':
				amountField.val('160');
				amountInWordsFields.val('One hundred and sixty');
				singleDayRegistration.show('slow');
				break;
		}
	});
	
	/* Pre-Conference Tour Day 1/2 buttons */
	
	jQuery('#day-1-button').click(function( event ) {
		event.preventDefault();		
		jQuery('.day-2').hide('slow');
		jQuery('.day-1').show('slow');
	});
	
	jQuery('#day-2-button').click(function( event ) {
		event.preventDefault();		
		jQuery('.day-1').hide('slow');
		jQuery('.day-2').show('slow');
	});

});