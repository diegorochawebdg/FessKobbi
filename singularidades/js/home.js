$(document).ready(function(e){
    
    /*Main Slider*/
    $(function(){
        $('#main-slider-home').slides({
            preload: false,
            play: 8000,
            pause: 2500,
            hoverPause: true
        });
    });
    
    /*Selectors Transition*/
    $('.left-column #cursos-slider .selectors li').hover(function(e){
        $(this).addClass('selected2');
    }, function(e){
        $(this).removeClass('selected2');
    });
    $('.left-column #cursos-slider .selectors li a').click(function(e){
        e.preventDefault();
        $('.left-column #cursos-slider .selectors li').removeClass('selected');
        $(this).parent().parent().addClass('selected');
    });
    
    /*Slider Cursos*/
    $(function(){
        $('#cursos-slider .overflow .item1').slides({
            preload: false,
            play: 5000,
            pause: 2500,
            hoverPause: true
        });
    });
    
    
});