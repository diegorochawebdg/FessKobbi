$(document).ready(function() {
    
});

//Magic Anchor
function goToByScroll(id){
	$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}