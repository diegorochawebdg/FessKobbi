$(document).ready(function() {

	var lightboxBoxes = $('#lightboxes #rio-de-janeiro, #lightboxes #sao-paulo, #lightboxes #campinas, #lightboxes #brasilia, #lightboxes #cuiaba, #lightboxes #goiania');

	/*Leads*/
	$('#lightboxes').click(function(event) {
		$(this).fadeOut('400', function() {
			lightboxBoxes.hide();
		});
	});
	$('#lightboxes .lightbox-content').click(function(event) {
		event.stopPropagation();
	});
	$('#lightboxes .lightbox-content li a').click(function(event) {
		event.returnValue();
	});
	$('#lightboxes .fechar').click(function(event) {
		event.preventDefault();
		$(this).parent().parent().fadeOut('400', function() {
			lightboxBoxes.hide();
		});
	});
	$('#postos-de-troca li.rio-endereco a').click(function(event) {
		event.preventDefault();
		$('#lightboxes #rio-de-janeiro').css('display', 'block');
		$('#lightboxes').fadeIn('400');
	});
	$('#postos-de-troca li.sp-endereco a').click(function(event) {
		event.preventDefault();
		$('#lightboxes #sao-paulo').css('display', 'block');
		$('#lightboxes').fadeIn('400');
	});
	$('#postos-de-troca li.campinas-endereco a').click(function(event) {
		event.preventDefault();
		$('#lightboxes #campinas').css('display', 'block');
		$('#lightboxes').fadeIn('400');
	});
	$('#postos-de-troca li.brasilia-endereco a').click(function(event) {
		event.preventDefault();
		$('#lightboxes #brasilia').css('display', 'block');
		$('#lightboxes').fadeIn('400');
	});
	$('#postos-de-troca li.cuiaba-endereco a').click(function(event) {
		event.preventDefault();
		$('#lightboxes #cuiaba').css('display', 'block');
		$('#lightboxes').fadeIn('400');
	});
	$('#postos-de-troca li.goiania-endereco a').click(function(event) {
		event.preventDefault();
		$('#lightboxes #goiania').css('display', 'block');
		$('#lightboxes').fadeIn('400');
	});

});