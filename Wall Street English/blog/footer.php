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
                    <li><a href="<?php home_url(); ?>" title="Home">Home</a></li>
                    <!--<li><a href="#" title="Sobre">Sobre</a></li>
                    <li><a href="#" title="Contato">Contato</a></li>-->
                    <li><a href="http://www.wallstreetenglish.com.br/" title="Site institucional Wall Street English">Wall Street English</a></li>
                </ul>
            </div>
            <!--End of Menu-->
            
            <!--<a href="#" title="Categorias" class="categorias">Categorias</a>-->
            
            <div class="btn-group dropup categorias">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                    <span class="">Categorias</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#" title="Empresa">Empresa</a></li>
                    <li><a href="#" title="Carreira">Carreira</a></li>
                    <li><a href="#" title="Estudo">Estudo</a></li>
                    <li><a href="#" title="Business">Business</a></li>
                    <li><a href="#" title="Turismo">Turismo</a></li>
                </ul>
            </div>
            
            <!--Social-->
            <ul class="social">
                <li><a href="https://www.facebook.com/wse.brazil" title="Siga-nos no Facebook"><img src="images/facebook-footer.png"></a></li>
                <li><a href="https://twitter.com/WSEBrazil" title="Siga-nos no Twitter"><img src="images/twitter-footer.png"></a></li>
                <li><a href="#" title="Acompanhe o nosso canal no Youtube"><img src="images/youtube-footer.png"></a></li>
                <li><a href="#" title="Acesse nosso Linkedin"><img src="images/linkedin-footer.png"></a></li>
                <!--<li><a href="#" title=""><img src="images/instagram-footer.png"></a></li>-->
            </ul>
            <!--End of Social-->
            <div class="clear"></div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript *** Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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