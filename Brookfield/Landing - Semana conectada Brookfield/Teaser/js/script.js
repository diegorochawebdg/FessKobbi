$(document).ready(function($) {
    //Countdown
    var date = new Date(2014, 9-1, 15);
    $('#countdown').countdown({
        until: date,
        padZeroes: true,
        format: 'dHMS',
        layout: '{dn}<span class="dias"> dias </span>{hnn}<span>:</span>{mnn}<span>:</span>{snn}'
    });   

    //Button
    $('#content .the-content button').click(function(e) {
    	e.preventDefault();
    });
});