$(document).ready(function(e){
    
    /*Accordion*/
    $('.left-column li a:first-child').click(function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        $(this).parent().children('div').slideToggle();
    });
    
});