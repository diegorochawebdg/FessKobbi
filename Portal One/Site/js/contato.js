$(document).ready(function(e){
	//Section change
	var sectionsCollapse = function(e){
		$('.left li').removeClass('active');
		$('.right .item1, .right .item2, .right .item3, .right .item4, .right .item5').stop().fadeOut(200);
	}
	$('.left .item1').click(function(e){
		e.preventDefault();
		sectionsCollapse();
		$('.right .item1').stop().delay(200).fadeIn(200);
		$(this).parent('li').addClass('active');
	});
	$('.left .item2').click(function(e){
		e.preventDefault();
		sectionsCollapse();
		$(this).parent('li').addClass('active');
		$('.right .item2').stop().delay(200).fadeIn(200);
	});
	$('.left .item3').click(function(e){
		e.preventDefault();
		sectionsCollapse();
		$(this).parent('li').addClass('active');
		$('.right .item3').stop().delay(200).fadeIn(200);
	});
});