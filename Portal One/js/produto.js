$(document).ready(function(e){
    //Menu move
    $(window).scroll(function(e){
        var menu = $('.menu-lancamento');
        if($(this).scrollTop() > 334){
            $(menu).addClass('fixed');
        } else{
            $(menu).removeClass('fixed');
        };
    });
    
    //Add/Remove active menu class
    $('.menu-lancamento .links a').click(function(e){
        $('.menu-lancamento .links a').removeClass('active');
        $(this).addClass('active');
    });
    
    
	//Main slider
	$('#the-slider').bxSlider({
		moveSlides:  	1,
		slideWidth: 	1920,
		controls:       false,
		adaptiveHeight: false,
		auto:			true,
		pause: 			8000
	});
    
    //Plantas Gallery
    $("#plantas .img-container").fancybox();
    
    //Conheça a região
    $('#localizacao .the-map .conheca-regiao a.conheca').click(function(e){
        e.preventDefault();
        $('#localizacao .the-map .links').slideToggle();
    });
    
    //Acompanhe Gallery
    $("#acompanhe .img-container").fancybox();
    
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
        slideMargin:    0,
        pager:          false,
		controls:       true,
        adaptiveHeight: false,
        minSlides:      7,
        maxSlides:      2000,
	});
});

//Magic Anchor
function goToByScroll(id){
    $('html,body').animate({scrollTop: $('div.versions').offset().top},'slow');
}