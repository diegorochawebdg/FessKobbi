$(document).ready(function(e){
	
	/*Gallery*/
    var imageList    = new Array();
    var currentImage = 0;
    $(".the-gallery .thumbs a").each(function(index, element) {
        imageList[ index ]         = new Object();
        imageList[ index ].id      = index;
        imageList[ index ].element = $(element);
        imageList[ index ].image   = $(element).attr("href");
        imageList[ index ].title   = $(element).attr("title");
    });
    imageList[ currentImage ].element.addClass("active");
    
    $(".the-gallery .thumbs a").click(function(e) {
        e.preventDefault();
        for( key in imageList ) if( $(this).attr("href") == imageList[key].image ) currentImage = imageList[key].id;
        changeImage();
    });
    
    function changeImage(){
        $(".the-gallery .large-image img").attr("src", imageList[ currentImage ].image);
        $(".the-gallery .large-image img").hide().fadeIn(300);
        $(".the-gallery .thumbs a").removeClass("active");
        imageList[ currentImage ].element.addClass("active");
        $(".gallery .large-image a").attr("href", imageList[ currentImage ].image);
	}
	
	//Lists Toggle
	$('.versions .version-content .content-left li a').click(function(e){
		e.preventDefault();
		$(this).parent().children('ul').toggle('fast');
		$(this).toggleClass('active');
	});
	
	//Second Slider
	$('.car-list .the-slider').bxSlider({
		slideWidth:  825,
		minSlides:   8,
		maxSlides:   8,
		moveSlides:  1,
		pager:       false
	});
    
    $('a.ficha').click(function(e){
        console.log('works');
        e.preventDefault();
        $('html,body').animate({scrollTop: $('.versions').offset().top},'slow');
    });
});