<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <title>Galeria - Instituto Singularidades</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
        <meta name="description" content="">
        <meta name="keywords" lang="pt-br" content="">
        <meta name="Author" content="Fess'Kobbi">
        <link href="favicon.png" rel="icon" type="image/x-icon" />
        <link rel="stylesheet" href="css/galeria-eventos.css">

    </head>

    <body>
        <!--Container-->
        <div id="container">
            
            <div class="header">
                <div class="logo">
                    <a href="index.php" title="Voltar para a página inicial"><img src="images/slider/singularidades-logo.png" width="223" height="55" alt="Logotipo do Instituto Singularidades" title="Instituto Singularidades"></a>
                </div>
                <a href="#" title="Fechar" class="fechar">Fechar</a>
                <div class="clear"></div>
            </div>
            <div class="content">
                <!--Super Gallery-->
                <div id="gallery">
                    <!--The Slider-->
                    <ul class="the-slider">
                        <li><img src="images/slider/slider01.jpg" width="1920" height="1070" alt=""></li>
                        <li><img src="images/slider/slider01.jpg" width="1920" height="1070" alt=""></li>
                        <li><img src="images/slider/slider01.jpg" width="1920" height="1070" alt=""></li>
                        <li><img src="images/slider/slider01.jpg" width="1920" height="1070" alt=""></li>
                    </ul>
                    <!--End of The Slider-->

                    <!--Selectors-->
                    <div class="selectors">
                        <div class="links">
                            <a href="" data-slide-index="1" title="" class="animate"><img src="images/slider/gallery-thumbs.jpg" width="152" height="122" alt="" title=""></a>
                            <a href=""width="152" height="122" data-slide-index="2" title="" class="animate"><img src="images/slider/gallery-thumbs.jpg" alt="" title=""></a>
                            <a href=""width="152" height="122" data-slide-index="3" title="" class="animate"><img src="images/slider/gallery-thumbs.jpg" alt="" title=""></a>
                            <a href=""width="152" height="122" data-slide-index="4" title="" class="animate"><img src="images/slider/gallery-thumbs.jpg" alt="" title=""></a>
                            <a href=""width="152" height="122" data-slide-index="5" title="" class="animate"><img src="images/slider/gallery-thumbs.jpg" alt="" title=""></a>
                            <a href=""width="152" height="122" data-slide-index="6" title="" class="animate"><img src="images/slider/gallery-thumbs.jpg" alt="" title=""></a>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--End of Selectors-->
                </div>
                <!--End of Super Gallery-->
            </div>
            
            <!--Title | Time-->
            <div class="title-time">
                <strong>Officia duis si mentitum relinqueret, te id relinqueret et nam doctrina</strong>
                <span>Postado em 17 de maio de 2014</span>
            </div>
            <!--End Title | Time-->

        </div>
        <!--End of Container-->
        
        <!--Scripts-->
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(e){
                //Big Gallery
                $('#gallery .the-slider').bxSlider({
                    mode:           'fade',
                    slideWidth: 	1920,
                    controls:       false,
                    pagerCustom:    '#gallery .selectors .links',
                    adaptiveHeight: true,
                });
                $('#gallery .selectors .links').bxSlider({
                    moveSlides:  	1,
                    slideWidth: 	152,
                    slideMargin:    0,
                    pager:          false,
                    controls:       true,
                    adaptiveHeight: false,
                    minSlides:      7,
                    maxSlides:      2000,
                });
                
                //Close Fancybox
                $('.header .fechar').click(function(e){
                    parent.$.fancybox.close();
                });
            });
        </script>
        <!--End Scripts-->
    </body>
</html>