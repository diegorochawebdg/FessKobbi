    <footer>
        <div class="container">
            <small>&copy; WSI International, Inc. 2012 All right reserved. <br>Privacy Policy Term of use</small>
            <a href="#top" title="Topo" class="topo">Topo</a>
            
            <!--Menu-->
            <div class="btn-group dropup">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-align-justify"></span>
                    <span class="">Menu</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo home_url(); ?>" title="Home">Home</a></li>
                    <li><a href="<?php echo home_url(); ?>/contato/" title="Contato">Contato</a></li>
                    <!--<li><a href="#" title="Sobre">Sobre</a></li>
<li><a href="#" title="Contato">Contato</a></li>-->
                    <li><a href="http://www.wallstreetenglish.com.br/" target="_blank" title="Site institucional Wall Street English">Wall Street English</a></li>
                </ul>
            </div>
            <!--End of Menu-->
            
            <!--Categorias-->
            <div class="btn-group dropup categorias">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                    <span>Categorias</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo home_url() ?>/category/empresa/" title="Empresa">Empresa</a></li>
                    <li><a href="<?php echo home_url() ?>/category/carreira/" title="Carreira">Carreira</a></li>
                    <li><a href="<?php echo home_url() ?>/category/estudo/" title="Estudo">Estudo</a></li>
                    <li><a href="<?php echo home_url() ?>/category/business/" title="Business">Business</a></li>
                    <li><a href="<?php echo home_url() ?>/category/turismo/" title="Turismo">Turismo</a></li>
                </ul>
            </div>
            <!--End of Categorias-->
            
            <!--Social-->
            <ul class="social">
                <li><a href="https://www.facebook.com/wse.brazil" target="_blank" title="Siga-nos no Facebook"><img src="<?php bloginfo('template_directory'); ?>/images/facebook-footer.png"></a></li>
                <li><a href="https://twitter.com/WSEBrazil" target="_blank" title="Siga-nos no Twitter"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-footer.png"></a></li>
                <li><a href="https://www.youtube.com/user/wallstreetenglishbr" title="Acompanhe o nosso canal no Youtube" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/youtube-footer.png"></a></li>
                <li><a href="https://www.linkedin.com/company/wallstreetenglishbrasil" title="Acesse nosso Linkedin" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin-footer.png"></a></li>
            </ul>
            <!--End of Social-->
            <div class="clear"></div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript *** Placed at the end of the document so the pages load faster -->
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
                (function(){
                    var cdt = document.createElement('script'); cdt.type = 'text/javascript'; cdt.async = true;
                    cdt.src = ('http:' == document.location.protocol ? 'http://www.fess.com.br/' : 'https://fess.websiteseguro.com/') + 'cdt/_scripts/cdt.min.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(cdt, s);
                })();
    </script>
    <script type="text/javascript">
        $(document).ready(function(e){
            $('a[href=#top]').click(function(e){
                e.preventDefault();
                $('html, body').animate({scrollTop:0}, 'slow');
            });
        });    
    </script>

</body>
</html>