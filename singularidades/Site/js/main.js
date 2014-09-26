$(document).ready(function(e){
    //Submenu portal hover
    $('#header .portais-link li').hover(function(e){
        $(this).children('.submenu-header').stop().fadeIn('fast');
    }, function(e){
        $(this).children('.submenu-header').stop().fadeOut('fast');
    });
    
    //Main Menu hover
    $('.main-menu-2 ul:first-child li').hover(function(e){
        if($(this).has('.submenu')){
            $(this).children('.submenu').stop().fadeIn(200);
        }
    }, function(e){
        if($(this).has('.submenu')){
            $(this).children('.submenu').stop().hide();
        }
    });
});