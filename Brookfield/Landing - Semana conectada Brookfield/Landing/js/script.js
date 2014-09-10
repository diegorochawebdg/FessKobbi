$(document).ready(function($) {
    //Countdown
    var date = new Date(2014, 8, 14, 20);
    $('#countdown').countdown({
        until: date,
        padZeroes: true,
        format: 'dHMS',
        layout: '{dn}<span class="dias"> dias </span>{hnn}<span>:</span>{mnn}<span>:</span>{snn}'
    });   
});