$(document).ready(function($) {
    //Countdown
    var date = new Date(2014, 8, 14, 20);
    $('#countdown').countdown({
        until: date,
        padZeroes: true,
        format: 'dHMS',
        layout: '{dn}<span class="dias"> dias </span>{hnn}<span>:</span>{mnn}<span>:</span>{snn}'
    });   

    //Scripts for the video
    var player;

    window.onload=function()
    {
        var theTime = '';
        window.onYouTubePlayerAPIReady = function() 
        {
            player = new YT.Player('video');
            
            var theInterval = setInterval(displTime,200);
            theInterval;
            
            window.stopped = false;
            function displTime() {
                
                theTime = player.getCurrentTime();
                console.log(theTime);

                if(theTime >=7.1 && theTime <=7.4){
                    pauseVideo();
                    clearInterval(theInterval);
                }
                
            }
            function pauseVideo(){
                player.pauseVideo();
            }
            function playVideo(){
                player.playVideo();
            }
        }

        

        var tag = document.createElement('script');
        tag.src = "//www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    };
});