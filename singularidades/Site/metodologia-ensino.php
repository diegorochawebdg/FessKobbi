<?php include "header.php" ?>
<link rel="stylesheet" href="css/internals.css">
<link rel="stylesheet" href="css/manual-aluno.css">

<div class="content-center">
    
    <!--Path-->
    <div class="path">
        <a href="/" title="home">home</a>
        <span>></span>
        <a href="#" title="o instituto">graduação</a>
        <span>></span>
        <span>metodologia de ensino</span>
    </div>
    <!--Path-->
    <!--Title-->
    <div class="title">
        <h1>Graduação / <strong>Metodologia de ensino</strong></h1>
    </div>
    <!--End of Title-->
    
    <!--Left-->
    <div class="left">
        <!--Left Menu-->
        <ul class="main-menu">
            <li><a href="#" title="Cursos" class="with-sub-menu animate">Cursos</a</li>
            <li><a href="#" title="Como ingressar" class="with-sub-menu animate">Como ingressar</a></li>
            <li><a href="#" title="Sobre a graduação">Sobre a graduação</a></li>
            <li class="active"><a href="#" title="Metodologia de ensino">Metodologia de ensino</a></li>
            <li><a href="#" title="Apoio psicológico">Apoio psicológico</a></li>
            <li><a href="#" title="Vivência em sala de aula">Vivência em sala de aula</a></li>
            <li><a href="#" title="Agenda">Agenda</a></li>
            <li><a href="#" title="Manual do aluno">Manual do aluno</a></li>
        </ul>
        <!--End of Left Menu-->
    </div>
    <!--End of Left-->
    
    <!--Right-->
    <div class="right">
        <h2>Ad probant eu deserunt, a minim cernantur incurreret ex a lorem quo quid, fugiat</h2>
        <p>Duis singulis expetendis, quorum singulis quamquam. Excepteur sunt velit ita  quorum o iis varias elit noster deserunt a nostrud illum mentitum aliquip autnon tamen non sint. Ut quo quorum admodum, noster proident occaecat in malis</p>
        
        <!--Vídeos-->
        <div class="videos">
            <div class="play-preview icons-home"></div>
            <h2 class="icons-home"><a href="#" title="Singularidades em Vídeo">Risus convallis consectetur.</a></h2>
            <a href="#" title="Singularidades em vídeo"><img src="images/internals/video-preview.jpg" width="307" height="184" alt="" title=""></a>
        </div>
        <div class="videos last">
            <div class="play-preview icons-home"></div>
            <h2 class="icons-home"><a href="#" title="Singularidades em Vídeo">Risus convallis consectetur.</a></h2>
            <a href="#" title="Singularidades em vídeo"><img src="images/internals/video-preview.jpg" width="307" height="184" alt="" title=""></a>
        </div>
        <div class="clear"></div>
        <!--End of Vídeos-->

        <!--Slider-->
        <div class="slider">
            <div class="box-padding">
                <h2>Convallis consectetur.</h2>
                <div class="the-slider">
                    <a href="http://placekitten.com/500/300"><img src="http://placekitten.com/190/113" alt="" width="190" height="113"></a>
                    <a href="http://placekitten.com/500/300"><img src="http://placekitten.com/190/113" alt="" width="190" height="113"></a>
                    <a href="http://placekitten.com/500/300"><img src="http://placekitten.com/190/113" alt="" width="190" height="113"></a>
                    <a href="http://placekitten.com/500/300"><img src="http://placekitten.com/190/113" alt="" width="190" height="113"></a>
                    <a href="http://placekitten.com/500/300"><img src="http://placekitten.com/190/113" alt="" width="190" height="113"></a>
                </div>
            </div>
        </div>
        <!--End of Slider-->
        
    </div>
    <!--End of Right-->
    <div class="clear"></div>
    
</div>

<?php include "footer.php" ?>
<script type="text/javascript" src="js/internal.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
    $(document).ready(function(e){
        $(".the-slider").bxSlider({
            controls:       true,
            slideWidth:     190,
            pager:          false,
            minSlides:      3,
            maxSlides:      3,
            slideMargin:    20,
            moveSlides:     1,
            infiniteLoop:   false
        });

        $(".the-slider a").fancybox({
            type:       'image'
        });
    });
</script>
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css">