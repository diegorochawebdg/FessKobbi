$(document).ready(function() {         

	/*Gallery Slider*/
	$('#slider #large-img ul').bxSlider({
		mode:           'fade',
		slideWidth: 	606,
		controls:       false,
		pagerCustom:    '#slider #thumbs ul'
	});
	$('#slider #thumbs ul').bxSlider({
		mode: 			     'vertical',
		moveSlides:  	    1,
		slideWidth: 	    117,
        slideMargin:        0,
        pager:              false,
		controls:           true,
        adaptiveHeight:     false,
        minSlides:          5,
        maxSlides:          4,
        infiniteLoop: 	    false,
        hideControlOnEnd:   true,
        nextText:           'Próximo',
        prevText:           'Anterior'
	});	

	/*Tabs Collapse*/
    var currentClass = 'item1';
    $('#opcionais-descricao .internal-menu a').click(function(e){
        e.preventDefault();
        var linkClass = $(this).parent().attr('class');
        if(currentClass != linkClass){
            $('#opcionais-descricao li.' + currentClass).removeClass('active');
            $(this).parent().addClass('active');
            $('#opcionais-descricao .txt .' + currentClass).stop().fadeOut(200);
            $('#opcionais-descricao .txt .' + linkClass).stop().delay(200).fadeIn(200);
            currentClass = linkClass;
        }
    });
});