<?php include "header.php" ?>
<link rel="stylesheet" href="css/internals.css">
<link rel="stylesheet" href="css/graduacao-como-ingressar.css">

<div class="content-center">
    
    <!--Path-->
    <div class="path">
        <a href="/" title="home">home</a>
        <span>></span>
        <span>o singularidades</span>
        <span>></span>
        <span>como ingressar</span>
    </div>
    <!--Path-->
    <!--Title-->
    <div class="title">
        <h1>Graduação / <strong>Como ingressar</strong></h1>
    </div>
    <!--End of Title-->
    
    <!--Left-->
    <div class="left">
        <!--Left Menu-->
        <ul class="main-menu">
            <li><a href="#" title="O Singularidades">O Singularidades</a></li>
            <li><a href="#" title="CPA">CPA</a></li>
            <li><a href="#" title="Documentos institucionais">Documentos institucionais</a></li>
            <li><a href="#" title="Avaliações institucionais">Avaliações institucionais</a></li>
            <li><a href="#" title="Contato">Contato</a></li>
            <li><a href="#" title="Trabalhe conosco">Trabalhe conosco</a></li>
            <li><a href="#" title="FAQ">FAQ</a></li>
        </ul>
        <!--End of Left Menu-->
    </div>
    <!--End of Left-->
    
    <!--Right-->
    <div class="right">
        
        <!--Banner-->
        <div class="banner">
            <img src="http://placehold.it/693x211">
        </div>
        <!--End Banner-->
        
        <!--Tabs-->
        <div class="tabs">
            <ul class="tabs-main">
                <li class="active"><a href="#" class="item1" title="Vestibular">Vestibular</a></li>
                <li><a href="#" class="item2" title="Transferência">Transferência</a></li>
                <li><a href="#" class="item3" title="Segunda graduação">Segunda graduação</a></li>
                <li><a href="#" class="item4" title="Reingresso">Reingresso</a></li>
                <li><a href="#" class="item5" title="Destrancamento">Destrancamento</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <!--End Tabs-->
        
        <!--Tabs Content-->
        <div class="tabs-content">
            <div class="item1">
                <div class="text">
                    <h3>Item1</h3>
                    <p>Et ne irure ullamco, ab sunt fabulas aliquip, est duis commodo appellat, ingeniis magna varias id esse. Non sed concursionibus ab incididunt anim aute minim, e commodo te ingeniis, nisi ita cupidatat de aute ut sint  commodo comprehenderit do quo varias quid sed quibusdam iis nulla instituendarum</p>
                    <a href="#">Duis e expetendis a ipsum</a>
                    <ul>
                        <li>Qui hic legam quibusdam</li>
                        <li>Qui hic legam quibusdam</li>
                        <li>Qui hic legam quibusdam</li>
                    </ul>
                </div>
            </div>
            
            <div class="item2">
                <div class="text">
                    <h3>Item2</h3>
                    <p>Et ne irure ullamco, ab sunt fabulas aliquip, est duis commodo appellat, ingeniis magna varias id esse. Non sed concursionibus ab incididunt anim aute minim, e commodo te ingeniis, nisi ita cupidatat de aute ut sint  commodo comprehenderit do quo varias quid sed quibusdam iis nulla instituendarum</p>
                    <a href="#">Duis e expetendis a ipsum</a>
                    <ul>
                        <li>Qui hic legam quibusdam</li>
                        <li>Qui hic legam quibusdam</li>
                        <li>Qui hic legam quibusdam</li>
                    </ul>
                </div>
            </div>
            
            <div class="item3">
                <div class="text">
                    <h3>Item3</h3>
                    <p>Et ne irure ullamco, ab sunt fabulas aliquip, est duis commodo appellat, ingeniis magna varias id esse. Non sed concursionibus ab incididunt anim aute minim, e commodo te ingeniis, nisi ita cupidatat de aute ut sint  commodo comprehenderit do quo varias quid sed quibusdam iis nulla instituendarum</p>
                    <a href="#">Duis e expetendis a ipsum</a>
                    <ul>
                        <li>Qui hic legam quibusdam</li>
                        <li>Qui hic legam quibusdam</li>
                        <li>Qui hic legam quibusdam</li>
                    </ul>
                </div>
            </div>
            
            <div class="item4">
                <div class="text">
                    <h3>Item4</h3>
                    <p>Et ne irure ullamco, ab sunt fabulas aliquip, est duis commodo appellat, ingeniis magna varias id esse. Non sed concursionibus ab incididunt anim aute minim, e commodo te ingeniis, nisi ita cupidatat de aute ut sint  commodo comprehenderit do quo varias quid sed quibusdam iis nulla instituendarum</p>
                    <a href="#">Duis e expetendis a ipsum</a>
                    <ul>
                        <li>Qui hic legam quibusdam</li>
                        <li>Qui hic legam quibusdam</li>
                        <li>Qui hic legam quibusdam</li>
                    </ul>
                </div>
            </div>
            
            <div class="item5">
                <div class="text">
                    <h3>Item5</h3>
                    <p>Et ne irure ullamco, ab sunt fabulas aliquip, est duis commodo appellat, ingeniis magna varias id esse. Non sed concursionibus ab incididunt anim aute minim, e commodo te ingeniis, nisi ita cupidatat de aute ut sint  commodo comprehenderit do quo varias quid sed quibusdam iis nulla instituendarum</p>
                    <a href="#">Duis e expetendis a ipsum</a>
                    <ul>
                        <li>Qui hic legam quibusdam</li>
                        <li>Qui hic legam quibusdam</li>
                        <li>Qui hic legam quibusdam</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Tabs Content-->
        
    </div>
    <!--End of Right-->
    <div class="clear"></div>
    
    <img src="images/internals/banner-vestibular-2014.png">
    
</div>

<?php include "footer.php" ?>
<script type="text/javascript" src="js/internal.js"></script>
<script type="text/javascript">
    $(document).ready(function(e){
        var currentClass = 'item1';
        $('.tabs a').click(function(e){
            e.preventDefault();
            var linkClass = $(this).attr('class');
            if(currentClass != linkClass){
                $('.tabs a.' + currentClass).parent().removeClass('active');
                $(this).parent().addClass('active');
                $('.tabs-content .' + currentClass).stop().fadeOut(200);
                $('.tabs-content .' + linkClass).stop().delay(200).fadeIn(200);
                currentClass = linkClass;
            }
        });
    });
</script>