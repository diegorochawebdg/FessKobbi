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
                
                if(theTime >=26.9 && theTime <=27.3 && stopped == false){
                    stopped = true;
                    pauseVideo();
                    thePlay();
                    setTimeout(seek1, 20000);
                }
                if(theTime >=31.1 && theTime <=31.5 && stopped == true){
                    stopped = false;
                    pauseVideo();
                    thePlay();
                    setTimeout(seek2, 20000);
                }
                if(theTime >=35 && theTime <=35.4 && stopped == false){
                    stopped = true;
                    pauseVideo();
                    thePlay();
                    setTimeout(seek3, 20000);
                }
                if(theTime >=39.5 && theTime <=39.8 && stopped == true){
                    stopped = false;
                    pauseVideo();
                    thePlay();
                    setTimeout(seek4, 20000);
                }
                if(theTime >=43 && theTime <=43.6 && stopped == false){
                    stopped = true;
                    pauseVideo();
                    thePlay();
                    setTimeout(seek5, 20000);
                }
                if(theTime >=47.5 && theTime <=47.8 && stopped == true){
                    stopped = false;
                    pauseVideo();
                    thePlay();
                    setTimeout(seek6, 20000);
                }
                if(theTime >=54.3 && theTime <=54.8 && stopped == false){
                    stopped = true;
                    pauseVideo();
                    clearInterval(theInterval);
                }
                
            }
            
            function thePlay() {
                setTimeout(playVideo, 20000);
            }
            function seek1() {
                player.seekTo(27.9, true);
            }
            function seek2() {
                player.seekTo(31.9, true);
            }
            function seek3() {
                player.seekTo(35.9, true);
            }
            function seek4() {
                player.seekTo(39.9, true);
            }
            function seek5() {
                player.seekTo(43.9, true);
            }
            function seek6() {
                player.seekTo(48.7, true);
            }
            function seek7() {
                player.seekTo(55, true);
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