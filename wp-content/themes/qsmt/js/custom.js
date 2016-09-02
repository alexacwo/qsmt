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
	
	jQuery(".dietary_requirement_single .last").prev().addClass('before-last');
	jQuery('.food_allergies_single').appendTo('.dietary_requirement .before-last');	
	jQuery('.other_dietary_req_single').appendTo('.dietary_requirement .last');	
	
	jQuery( ".dietary_requirement_single input[type='checkbox']" ).change(function() {		
		beforeLastChecked = jQuery(".dietary_requirement_single .before-last input[type='checkbox']:checked").length;
		lastChecked = jQuery(".dietary_requirement_single .last input[type='checkbox']:checked").length; 
		
		if (beforeLastChecked) {		
			jQuery('.food_allergies_single').show('slow');
		} else {				
			jQuery('.food_allergies_single').hide('slow');
			jQuery(".dietary_requirement_single input[type='text']").val('');
		}
		if (lastChecked) {		
			jQuery('.other_dietary_req_single').show('slow');
		} else {				
			jQuery('.other_dietary_req_single').hide('slow');
			jQuery(".dietary_requirement_single input[type='text']").val('');
		}	
	});
	
	/* Disable Online Registration Form fields */
	
	amountField = jQuery("#disabled .dollars_amount input[type='number']");
	amountInWordsFields = jQuery("#disabled .dollars_amount_words input[type='text']");
	
	amountField.attr('disabled', 'disabled');	
	amountInWordsFields.attr('disabled', 'disabled');
	
	/* Bind amount in dollars to the registration_fees select list */
	
	jQuery( ".registration_fees input[type='radio']" ).change(function() {
		price = jQuery( this ).data('price');
		
		amountField.val(price);
		
		singleDayRegistration = jQuery(".single_day_registration");
		
		if (jQuery( this ).val() == 3) {
			singleDayRegistration.show('slow');
		}
	});
	
	/* Pre-Conference Tour */
	
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
	
	jQuery(".dietary_requirement_01 .last").prev().addClass('before-last');
	jQuery(".dietary_requirement_02 .last").prev().addClass('before-last');
	jQuery('.food_allergies_01').appendTo('.dietary_requirement_01 .before-last');	
	jQuery('.food_allergies_02').appendTo('.dietary_requirement_02 .before-last');	
	jQuery('.other_dietary_req_01').appendTo('.dietary_requirement_01 .last');	
	jQuery('.other_dietary_req_02').appendTo('.dietary_requirement_02 .last');	
	
	jQuery( ".dietary_requirement_01 input[type='checkbox']" ).change(function() {		
		beforeLastChecked = jQuery(".dietary_requirement_01 .before-last input[type='checkbox']:checked").length;
		lastChecked = jQuery(".dietary_requirement_01 .last input[type='checkbox']:checked").length; 
		
		if (beforeLastChecked) {		
			jQuery('.food_allergies_01').show('slow');
		} else {				
			jQuery('.food_allergies_01').hide('slow');
			jQuery(".dietary_requirement_01 input[type='text']").val('');
		}
		if (lastChecked) {		
			jQuery('.other_dietary_req_01').show('slow');
		} else {				
			jQuery('.other_dietary_req_01').hide('slow');
			jQuery(".dietary_requirement_01 input[type='text']").val('');
		}	
	});	
	
	jQuery( ".dietary_requirement_02 input[type='checkbox']" ).change(function() {		
		beforeLastChecked = jQuery(".dietary_requirement_02 .before-last input[type='checkbox']:checked").length;
		lastChecked = jQuery(".dietary_requirement_02 .last input[type='checkbox']:checked").length; 
		
		if (beforeLastChecked) {		
			jQuery('.food_allergies_02').show('slow');
		} else {				
			jQuery('.food_allergies_02').hide('slow');
			jQuery(".dietary_requirement_02 input[type='text']").val('');
		}
		if (lastChecked) {		
			jQuery('.other_dietary_req_02').show('slow');
		} else {				
			jQuery('.other_dietary_req_02').hide('slow');
			jQuery(".dietary_requirement_02 input[type='text']").val('');
		}	
	});
	
	jQuery( ".pre_conference_tour_prices input[type='checkbox']" ).change(function() {
		
		var sum = 0;
		
		jQuery(".pre_conference_tour_prices input[type='checkbox']:checked").each(function() {
			sum += jQuery ( this ).data('price');
		});	
		
		var amountInWordsArray = {
			50: "Fifty",
			100: "One hundred",
			110: "One hundred and ten",
			160: "One hundred and sixty",
			180: "One hundred and eighty",
			210: "Two hundered and ten",
			220: "Two hundred and twenty",
			230: "Two hundred and thirty",
			280: "Two hundred and eighty",
			290: "Two hundred and ninety",
			320: "Three hundred and twenty",
			330: "Three hundred and thirty",
			340: "Three hundred and fourty",
			390: "Three hundred and ninety",
			410: "Four hundred and ten",
			440: "Four hundred and fourty",
			450: "Four hundred and fifty",
			460: "Four hundred and sixty",
			500: "Five hundred",
			510: "Five hundred and ten",
			520: "Five hundred and twenty",
			550: "Five hundred and fifty",
			570: "Five hundred and seventy",
			620: "Six hundred and twenty",
			630: "Six hundred and thirty",
			680: "Six hundred and eighty",
			730: "Seven hundred and thirty",
		};	
		
		amountField.val(sum);
		amountInWordsFields.val(amountInWordsArray[sum]);		
	});
	
	
});