$(document).ready(function() {
	/*Slider*/
    $('#slider').bxSlider({
        moveSlides:     1,
        pager:          true,
        controls:       false,
        adaptiveHeight: false,
        infiniteLoop:   true,
        auto:           true,
        pause:          '8000',

    });

    /*Car Slider*/
	$('ul#car-select').bxSlider({
		moveSlides:  	1,
        pager:          false,
		controls:       true,
        infiniteLoop: 	true,
        minSlides:      3,
        maxSlides:      3,
        slideWidth:     '115',

	});

	//Countdown
    var date = new Date(2014, 10-1, 17);
    $('#countdown').countdown({
        until: date,
        padZeroes: true,
        format: 'dHMS',
        layout: '{dn}<span class="dias">dias </span>{hnn}<span class="dias">h </span>{mnn}<span class="dias">min </span>{snn}<span class="dias">seg</span>'
    });  

    //Lightbox
    var lightboxHide = function(e){
        $('.lightbox, .lightbox .vendedor-lightbox, .lightbox .test-drive-lightbox, .lightbox .ligamos-lightbox, .lightbox .email-lightbox').stop().fadeOut();
    }
    $('.lightbox, a[title="Fechar"]').click(function(e){
        lightboxHide();
    });
    $('.lightbox .vendedor-lightbox, .lightbox .test-drive-lightbox, .lightbox .ligamos-lightbox, .lightbox .email-lightbox').click(function(e) {
        e.stopPropagation();
    });
    $('#menu2 a.item1').click(function(e){
        $('.lightbox, .lightbox .email-lightbox').fadeIn();
    });
    $('#menu2 a.item2').click(function(e){
        $('.lightbox, .lightbox .ligamos-lightbox').fadeIn();
    });
    $('#menu2 a.item3').click(function(e){
        $('.lightbox, .lightbox .test-drive-lightbox').fadeIn();
    });
    $('#menu2 a.item4').click(function(e){
        $('.lightbox, .lightbox .vendedor-lightbox').fadeIn();
    });
});