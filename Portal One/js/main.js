$(document).ready(function(e){
    //Menu Hover
    $('#top-menu .item1').hover(function(e){
        $('#top-menu li.item1').addClass('active');
        $('#top-menu .calls .item1').stop().hide().fadeIn(200);
    });
    $('#top-menu .item1').mouseleave(function(e){
        $('#top-menu li.item1').removeClass('active');
        $('#top-menu .calls .item1').stop().hide();
    });

    $('#top-menu .item2').hover(function(e){
        $('#top-menu li.item2').addClass('active');
        $('#top-menu .calls .item2').stop().hide().fadeIn(200);
    });
    $('#top-menu .item2').mouseleave(function(e){
        $('#top-menu li.item2').removeClass('active');
        $('#top-menu .calls .item2').stop().hide();
    });

    $('#top-menu .item3').hover(function(e){
        $('#top-menu li.item3').addClass('active');
        $('#top-menu .calls .item3').stop().hide().fadeIn(200);
    });
    $('#top-menu .item3').mouseleave(function(e){
        $('#top-menu li.item3').removeClass('active');
        $('#top-menu .calls .item3').stop().hide();
    });

    $('#top-menu .item4').hover(function(e){
        $('#top-menu li.item4').addClass('active');
        $('#top-menu .calls .item4').stop().hide().fadeIn(200);
    });
    $('#top-menu .item4').mouseleave(function(e){
        $('#top-menu li.item4').removeClass('active');
        $('#top-menu .calls .item4').stop().hide();
    });

    $('#top-menu .item5').hover(function(e){
        $('#top-menu li.item5').addClass('active');
        $('#top-menu .calls .item5').stop().hide().fadeIn(200);
    });
    $('#top-menu .item5').mouseleave(function(e){
        $('#top-menu li.item5').removeClass('active');
        $('#top-menu .calls .item5').stop().hide();
    });
    
    //Float Footer
    $('.float-email a, .float-corretor a, .float-ligamos a').fancybox({
        type:       'iframe',
        titleShow : false,
        /*width:      '920',
        height:     '680'*/
        autoDimensions :    true
    });
    
});