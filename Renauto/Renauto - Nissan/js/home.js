$(document).ready(function(e){
	//First Slider
	$('#slider .the-slider').bxSlider({
		moveSlides:  1,
		pagerCustom: '#slider .selectors',
		slideWidth: 1920,
		controls:       false,
		adaptiveHeight: false
	});
	
	//Second Slider
	$('.car-list .the-slider').bxSlider({
		slideWidth:  825,
		minSlides:   8,
		maxSlides:   8,
		moveSlides:  1,
		pager:       false
	});
});