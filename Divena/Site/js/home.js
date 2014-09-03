$(document).ready(function() {

	/*Slider*/
	$('#slider .the-slider').bxSlider({
		moveSlides:  	1,
        pager:          true,
		controls:       false,
        adaptiveHeight: false,
        infiniteLoop: 	true,
        auto:           true,
        pause:          '8000',

	});	

    /*Todos os veículos*/
    $('li.todos-veiculos').hover(function() {
        $('li.todos-veiculos .category-img, li.todos-veiculos, #section-menu li.todos-veiculos ul, #section-menu li.todos-veiculos span').addClass('active');
    }, function() {
        $('li.todos-veiculos .category-img, li.todos-veiculos, #section-menu li.todos-veiculos ul, #section-menu li.todos-veiculos span').removeClass('active');
    });


});