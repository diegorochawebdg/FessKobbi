$(document).ready(function() {
	//Slider
	var settings = function() {
		var settings1 = {
			controls: 		true,
			pager: 			false,
			slideWidth: 	133,
			minSlides: 		6,
			maxSlides: 		6,
			moveSlides: 	1,
			slideMargin: 	30
		};
		var settings2 = {
			controls: 		true,
			pager: 			false,
			slideWidth: 	100,
			minSlides: 		2,
			maxSlides: 		2,
			slideMargin: 	10
		};
		return ($(window).width()>767) ? settings1 : settings2;
	}

	mySlider = $('.slider ul').bxSlider(settings());
	$(window).resize(tourLandingScript);

	function tourLandingScript() {
		window.mySlider.reloadSlider(settings());
	}
	$('.slider a').click(function(event) {
		event.preventDefault();
		if(!$(this).hasClass('slide-active')){
			$('.slider a').removeClass('slide-active');
			$(this).addClass('slide-active');
		}
	});

	//Leads
	$('a.fancybox').fancybox({
		type: 		'iframe',
		width: 		650,
		height: 	500
	});

	//Outros Serviços
	$('#outros-servicos .the-services').bxSlider({
		pagerCustom: 	'#acessorios-nav ul',
		touchEnabled: 	false,
		controls: 		false
	});

	//The Cars Slider
	$('main ul#car-selector').bxSlider({
		pagerCustom: 	'.slider ul',
		touchEnabled: 	false,
		controls: 		false
	});
});