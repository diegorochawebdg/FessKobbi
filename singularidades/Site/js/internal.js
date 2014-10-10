$(document).ready(function(e){
    
    /*Left Menu*/
    $('.left a.with-sub-menu').parent().hover(function(e){
        $(this).toggleClass('active');
    }, function(e){
        $(this).toggleClass('active');
    });
    
    /*Quem somos accordion*/
    $('.left-column li a:first-child').click(function(e){
        if($(this).attr('href') == '#'){
            e.preventDefault();
            if($(this).hasClass('active')){
                $('.left-column li a').removeClass('active');
            } else{
                $('.left-column li a').removeClass('active');
                $(this).addClass('active');
            }
            if($('.left-column li div').is(':visible')){
                $('.left-column li div:visible').slideToggle();
            }
            if($(this).parent().children('div').is(':hidden')){
                $(this).parent().children('div').slideToggle();
            }
        }
        
    });
    
});