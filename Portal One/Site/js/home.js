$(document).ready(function(e){
	$('#the-slider').bxSlider({
		moveSlides:  	1,
		slideWidth: 	1920,
		controls:       false,
		adaptiveHeight: false,
		auto:			true,
		pause: 			8000
	});
    
    $('.destaques-box').bxSlider({
		moveSlides:  	1,
		slideWidth: 	450,
		controls:       false,
        pager:          true,
		adaptiveHeight: false,
        minSlides:      1,
        maxSlides:      2,
        slideMargin:    1,
        infiniteLoop:   false
	});
});