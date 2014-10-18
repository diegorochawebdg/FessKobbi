$(document).ready(function() {
	//Countdown
    var date = new Date(2014, 10-1, 26);
    $('#countdown').countdown({
        until: date,
        padZeroes: true,
        format: 'dHMS',
        layout: '{dn}<span class="dias">dias </span>{hnn}<span class="dias">h </span>{mnn}<span class="dias">min </span>{snn}<span class="dias">seg</span>'
    });  

    //Lightbox
    $('a').click(function(event) {
        if($(this).attr('href') == '#'){
            event.preventDefault();
        }
    });
    var lightboxHide = function(e){
        $('.lightbox, .lightbox .vendedor-lightbox, .lightbox .test-drive-lightbox, .lightbox .ligamos-lightbox, .lightbox .email-lightbox').stop().fadeOut();
    }
    $('.lightbox, a[title="Fechar"]').click(function(e){
        lightboxHide();
    });
    $('.lightbox .vendedor-lightbox, .lightbox .test-drive-lightbox, .lightbox .ligamos-lightbox, .lightbox .email-lightbox').click(function(e) {
        e.stopPropagation();
    });
    $('#menu2 a.item1, #itens li.item .leads li a.leads-info').click(function(e){
        $('.lightbox, .lightbox .email-lightbox').fadeIn();
    });
    $('#menu2 a.item2, #itens li.item .leads li a.leads-ligamos').click(function(e){
        $('.lightbox, .lightbox .ligamos-lightbox').fadeIn();
    });
    $('#menu2 a.item3').click(function(e){
        $('.lightbox, .lightbox .test-drive-lightbox').fadeIn();
    });
    $('#menu2 a.item4').click(function(e){
        $('.lightbox, .lightbox .vendedor-lightbox').fadeIn();
    });
});