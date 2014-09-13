$(document).ready(function() {

	/*Main Menu Hover*/
	$('#lines .the-lines li').hover(function() {
		$(this).children('.submenu-lines').stop().fadeIn('fast');
	}, function() {
		$(this).children('.submenu-lines').stop().fadeOut('fast');
	});

	/*Footer Leads*/
	$('#float-footer a').fancybox({
		type: 				'iframe',
		scrolling: 			'no',
		autoDimensions:		'no',
		width: 				630,
		height: 			500,
		margin: 			0,
		padding: 			0,
		autoScale: 			false
	});

});