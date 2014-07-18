<?php include "header.php" ?>
<link rel="stylesheet" href="css/internals.css">
<link rel="stylesheet" href="css/depoimentos.css">

<div class="content-center">
    
    <!--Path-->
    <div class="path">
        <a href="/" title="home">home</a>
        <span>></span>
        <a href="#" title="o instituto">graduação</a>
        <span>></span>
        <a href="#" title="quem somos">depoimentos</a>
    </div>
    <!--Path-->
    <!--Title-->
    <div class="title">
        <h1>Graduação / <strong>Depoimentos</strong></h1>
    </div>
    <!--End of Title-->
    
    <!--Left-->
    <div class="left">
        <!--Left Menu-->
        <ul class="main-menu">
            <li><a href="#" title="Cursos">Cursos</a></li>
            <li><a href="#" title="Como ingressar">Como ingressar</a></li>
            <li><a href="#" title="Sobre a graduação">Sobre a graduação</a></li>
            <li><a href="#" title="Metodologia de ensino">Metodologia de ensino</a></li>
            <li><a href="#" title="Apoio psicopedagógico">Apoio psicopedagógico</a></li>
            <li><a href="#" title="Vivência em sala de aula">Vivência em sala de aula</a></li>
            <li><a href="#" title="Calendário acadêmico">Calendário acadêmico</a></li>
            <li><a href="#" title="Manual do aluno">Manual do aluno</a></li>
            <li><a href="#" title="Depoimentos">Depoimentos</a></li>
        </ul>
        <!--End of Left Menu-->
        
        <!--Banners-->
        <div class="banners">
            <a href="#" title="Graduação singularidades - Vestibular 2014"><img src="images/quem-somos/banner-vestiular-2014.jpg" width="210" height="191" alt="Graduação singularidades - Vestibular 2014" title="Graduação singularidades - Vestibular 2014"></a>
            <a href="#" title="Programa de bolsas Fies e Prouni - Transforme o seu futuro"><img src="images/quem-somos/banner-fies-prouni.jpg" width="210" height="191" alt="Programa de bolsas Fies e Prouni - Transforme o seu futuro" title="Programa de bolsas Fies e Prouni - Transforme o seu futuro"></a>
        </div>
        <!--End of Banners-->
    </div>
    <!--End of Left-->
    
    <!--Right-->
    <div class="right">
        
        <!--Depoimentos-->
        <div class="depoimentos">
            <ul>
                <li>
                    <div class="image-content">
                        <div class="image-mask"></div>
                        <img src="http://placehold.it/146x146">
                    </div>
                    <div class="txt">
                        <p class="the-text">"Qui quid enim ut aliquip. Legam nostrud do quae fugiat de in dolor nostrud,  eiusmod eu sint, quorum fabulas aut illustriora ne noster doctrina illustriora ut ita laboris nam nostrud, tamen cernantur ea quamquam ita iudicem illum  litteris. Aute laboris non exquisitaque, hic tamen amet nam quibusdam, laboris  minim esse do multos, sint quibusdam sed senserit est fabulas o malis cupidatat  o de velit eram eram expetendis de eu excepteur imitarentur nam ab singulis familiaritatem. Cupidatat varias singulis laboris. Probant illustriora ubi  eiusmod. Consequat hic quamquam aut non ipsum commodo, et nulla expetendis  voluptatibus, eu a amet sunt sunt. Hic fugiat amet aute possumus, do se aliqua malis malis eu aut te irure vidisse, laborum est magna ad ut iis illum laborum ea iis velit consequat tempor, eu iis dolore consequat non voluptate  praesentibus ita mandaremus. Ne admodum ex probant a fabulas familiaritatem hic  voluptate."</p>
                        <p class="author"><span>Joana da Silva</span> - Aluna do curso de pedagogia</p>
                    </div>
                    <div class="clear"></div>
                </li>
                <li>
                    <div class="image-content">
                        <div class="image-mask"></div>
                        <img src="http://placehold.it/146x146">
                    </div>
                    <div class="txt">
                        <p class="the-text">"Qui quid enim ut aliquip. Legam nostrud do quae fugiat de in dolor nostrud,  eiusmod eu sint, quorum fabulas aut illustriora ne noster doctrina illustriora ut ita laboris nam nostrud, tamen cernantur ea quamquam ita iudicem illum  litteris. Aute laboris non exquisitaque, hic tamen amet nam quibusdam, laboris  minim esse do multos, sint quibusdam sed senserit est fabulas o malis cupidatat  o de velit eram eram expetendis de eu excepteur imitarentur nam ab singulis familiaritatem. Cupidatat varias singulis laboris. Probant illustriora ubi  eiusmod. Consequat hic quamquam aut non ipsum commodo, et nulla expetendis  voluptatibus, eu a amet sunt sunt. Hic fugiat amet aute possumus, do se aliqua malis malis eu aut te irure vidisse, laborum est magna ad ut iis illum laborum ea iis velit consequat tempor, eu iis dolore consequat non voluptate  praesentibus ita mandaremus. Ne admodum ex probant a fabulas familiaritatem hic  voluptate."</p>
                        <p class="author"><span>Joana da Silva</span> - Aluna do curso de pedagogia</p>
                    </div>
                    <div class="clear"></div>
                </li>
            </ul>
        </div>
        <!--End of Depoimentos-->
        
    </div>
    <!--End of Right-->
    <div class="clear"></div>
    
    <a href="#" title="Graduação Singularidades - Vestibular 2014" class="bottom-banner"><img src="images/internals/banner-vestibular-2014.png" width="940" height="75" alt="Graduação Singularidades - Vestibular 2014" title="Graduação Singularidades - Vestibular 2014"></a>
    
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