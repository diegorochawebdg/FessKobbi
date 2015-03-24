$(document).ready(function() {
	//Slider Webdoors
	$('#webdoors ul').bxSlider({
		controls: 		false,
		pager: 			false,
		auto: 			true
	});

	//Slider Cars
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
		controls: 		false,
		mode: 			'fade'
	});
	$('#acessorios-nav a').removeClass('active');
	$('#acessorios-nav a').click(function(event) {
		$('.services-overflow').removeClass('inactive');
		$(this).addClass('active');
	});

	//The Cars Slider
	$('main ul#car-selector').bxSlider({
		mode: 			'fade',
		pagerCustom: 	'.slider ul',
		touchEnabled: 	false,
		controls: 		false
	});
});