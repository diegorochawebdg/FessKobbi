$(document).ready(function() {
	//Menu move
    $(window).scroll(function(e){
        var menu = $('#price-bar');
        if($(this).scrollTop() > 499){
            $(menu).addClass('fixed');
        } else{
            $(menu).removeClass('fixed');
        };
    });

	/*Gallery Slider*/
	$('#gallery #large-image ul').bxSlider({
		mode:           'fade',
		slideWidth: 	970,
		controls:       false,
		pagerCustom:    '#gallery #thumbs'
	});
	$('#gallery #thumbs').bxSlider({
		moveSlides:  	1,
		slideWidth: 	200,
        slideMargin:    20,
        pager:          false,
		controls:       true,
        adaptiveHeight: false,
        minSlides:      4,
        maxSlides:      4,
        infiniteLoop: 	false
	});	

	/*Go to Info*/
	$('#localizacao .the-map .conheca-regiao a.conheca').click(function(e){
        e.preventDefault();
    });

});
//Magic Anchor
function goToByScroll(id){
	$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}