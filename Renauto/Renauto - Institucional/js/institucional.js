$(document).ready(function(e){
	//Section change
	var sectionsCollapse = function(e){
		$('.menu-left li').removeClass('active');
		$('.content-right .item1, .content-right .item2, .content-right .item3, .content-right .item4, .content-right .item5').stop().fadeOut(200);
	}
	$('.menu-left .item1').click(function(e){
		e.preventDefault();
		sectionsCollapse();
		$('.content-right .item1').stop().delay(200).fadeIn(200);
		$(this).parent('li').addClass('active');
	});
	$('.menu-left .item2').click(function(e){
		e.preventDefault();
		sectionsCollapse();
		$(this).parent('li').addClass('active');
		$('.content-right .item2').stop().delay(200).fadeIn(200);
	});
	$('.menu-left .item3').click(function(e){
		e.preventDefault();
		sectionsCollapse();
		$(this).parent('li').addClass('active');
		$('.content-right .item3').stop().delay(200).fadeIn(200);
	});
	$('.menu-left .item4').click(function(e){
		e.preventDefault();
		sectionsCollapse();
		$(this).parent('li').addClass('active');
		$('.content-right .item4').stop().delay(200).fadeIn(200);
	});
	$('.menu-left .item5').click(function(e){
		e.preventDefault();
		sectionsCollapse();
		$(this).parent('li').addClass('active');
		$('.content-right .item5').stop().delay(200).fadeIn(200);
	});
	
	/*Unidades Collapse*/
	$('.renault-link, .nissan-link').click(function(e){
		e.preventDefault();
		$('.renault-link, .nissan-link').toggleClass('active');
		$('.renault-list, .nissan-list').slideToggle('fast');
	});
	
	//Slider
	$('.car-list .the-slider').bxSlider({
		slideWidth:  825,
		minSlides:   8,
		maxSlides:   8,
		moveSlides:  1,
		pager:       false
	});
});