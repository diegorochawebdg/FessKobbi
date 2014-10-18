$(document).ready(function(e){

	//Leads
	$('.menu-leads a').fancybox({
		type: 				'iframe',
		scrolling: 			'no',
		width: 				600,
		height: 			500
	});

	//Projetos Gallery
	$('#projeto #slider-projeto ul').bxSlider({
		slideWidth: 	853,
		controls:       false,
		pager: 			true,
        adaptiveHeight: true,
	});
    
    //Big Gallery
	$('#gallery .the-slider').bxSlider({
		mode:           'fade',
		slideWidth: 	1920,
		controls:       false,
		pagerCustom:    '#gallery .selectors .links',
        adaptiveHeight: true,
	});
    $('#gallery .selectors .links').bxSlider({
		moveSlides:  	1,
		slideWidth: 	181,
        slideMargin:    2,
        pager:          false,
		controls:       true,
        adaptiveHeight: false,
        minSlides:      6,
        maxSlides:      8,
	});

	//Plantas Gallery
	$('#slider-plantas ul').bxSlider({
		slideWidth: 	853,
		controls:       true,
		pagerCustom:    '#plantas #plantas-selector',
        adaptiveHeight: true,
	});
});

//Magic Anchor
function goToByScroll(id){
    $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}