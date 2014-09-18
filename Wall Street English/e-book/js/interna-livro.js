$(document).ready(function(e) {
    
    /*Tel Mask*/
    $("#tel").mask("(99) 9999-9999?9", {placeholder:"X"});

    /*Books Slider*/
    $('#e-book-slider ul').bxSlider({
		slideWidth: 	970,
		controls:       false,
		pager: 			true
	});

	/*Books Loupe*/
    $("#e-book-slider ul img").mlens(
	{
		imgSrc: $("#e-book-slider ul img").attr("data-big"),
		lensShape: "circle",
		lensSize: 180,
		borderSize: 4,
		borderColor: "#fff",
		borderRadius: 0,
		imgOverlay: $("#green_monster").attr("data-overlay"),
		overlayAdapt: true,
		zoomLevel: 2
	});

});