/*Tabs Slider*/
    window.slider;

$(document).ready(function(e){
    
    /*Main Slider*/
    $('#content #slider ul').bxSlider({
        pager:      true,
        controls:   false,
        auto:       true,
        pause:      7000
    });

    window.slider = $('#tabs-sections .tabs-content .item1 ul').bxSlider({
        pager:          false,
        controls:       true,
        slideWidth:     860, 
        auto:           true,
        pause:          5000
    });
    window.slider2 = $('#tabs-sections .tabs-content .item2 ul').bxSlider({
        pager:          false,
        controls:       true,
        slideWidth:     860, 
        auto:           true,
        pause:          5000
    });
    window.slider3 = $('#tabs-sections .tabs-content .item3 ul').bxSlider({
        pager:          false,
        controls:       true,
        slideWidth:     860, 
        auto:           true,
        pause:          5000
    });
    
    
    /*Tabs Collapse*/
    var currentClass = 'item1';
    $('#tabs-sections .titles a').click(function(e){
        /*debugger;*/
        e.preventDefault();
        var linkClass = $(this).parent().attr('class');
        if(currentClass != linkClass){
            $('#tabs-sections .titles li').removeClass('active');
            $(this).parent().addClass('active');
            $('#tabs-sections .tabs-content .' + currentClass).hide();
            $('#tabs-sections .tabs-content .' + linkClass).show(0, function(){
                window.slider.reloadSlider();
                window.slider2.reloadSlider();
                window.slider3.reloadSlider();
            });
            currentClass = linkClass;
            
        }
    });
    
});