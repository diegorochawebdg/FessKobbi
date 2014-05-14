$(document).ready(function(e){
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