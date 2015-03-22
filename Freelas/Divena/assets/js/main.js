$(document).ready(function() {
	//Slider
	$('.slider ul').bxSlider({
		controls: 		true,
		pager: 			false,
		slideWidth: 	133,
		minSlides: 		6,
		maxSlides: 		6,
		moveSlides: 	1,
		slideMargin: 	30
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
		//mode: 			'fade',
		controls: 		false
	});
});