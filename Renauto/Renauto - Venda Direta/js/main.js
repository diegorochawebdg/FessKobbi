$(document).ready(function(e){
	//Lightbox
	var lightboxHide = function(e){
		$('.lightbox, .lightbox .vendedor-lightbox, .lightbox .test-drive-lightbox, .lightbox .ligamos-lightbox, .lightbox .email-lightbox').stop().fadeOut();
	}
	$('.lightbox .header-lightbox a').click(function(e){
		lightboxHide();
	});
	$('#slider #menu2 a.item1').click(function(e){
		$('.lightbox, .lightbox .email-lightbox').fadeIn();
	});
	$('#slider #menu2 a.item2').click(function(e){
		$('.lightbox, .lightbox .ligamos-lightbox').fadeIn();
	});
	$('#slider #menu2 a.item3').click(function(e){
		$('.lightbox, .lightbox .test-drive-lightbox').fadeIn();
	});
	$('#slider #menu2 a.item4').click(function(e){
		$('.lightbox, .lightbox .vendedor-lightbox').fadeIn();
	});
	
});