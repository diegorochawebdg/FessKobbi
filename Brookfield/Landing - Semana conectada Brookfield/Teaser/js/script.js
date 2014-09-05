$(document).ready(function($) {
    //Countdown
    var date = new Date(2014, 8, 10, 20);
    $('#countdown').countdown({
        until: date,
        format: 'dHMS',
        layout: '{dn}<span class="dias"> dias</span>{hn}<span>:</span>{mn}<span>:</span>{sn}'
    });   
});