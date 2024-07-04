jQuery(document).ready(function($){
	
	if (typeof bxSlider != 'undefined') {
		$('.sow-testimonials').bxSlider({
			randomStart: true,
			auto: true,
			pause: 6000,
			easing: 'in',
			speed: 1000
		});
		
		$('.home .carousel .panel-grid-cell').bxSlider({
			randomStart: true,
			auto: true,
			pause: 6000,
			easing: 'in',
			speed: 1000
		});	
	}
	
}) // end jQuery(document).ready