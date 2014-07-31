<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="author" content="Fess Kobbi Comunicação">
        <link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
        <!--<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/social-fblog.css">-->

<?php
@$acao = $_GET['acao'];

if($acao == 'concluido'){

@$nome  = $_POST['nome'];
@$email = $_POST['email'];
@$tel   = $_POST['tel'];

require_once("mailer/dispara.php");

echo "
		<script type='text/javascript'>
       
            if(!('fess' in window))window.fess = {};
            window.fess.cdt =
            {
	            id        		: '0',
	            cliente   		: 'Wall Street',
	            tipo      		: 'Corporate',
	            produto         : '',
	            nome      		: '$nome',
	            email      		: '$email',
                ddd      		: '',
                telefone      	: '$tel'
	            
	            
            };
 
            (function(){
                var cdt = document.createElement('script'); cdt.type = 'text/javascript'; cdt.async = true;
                cdt.src = ('http:' == document.location.protocol ? 'http://www.fess.com.br/' : 'https://fess.websiteseguro.com/') + 'cdt/_scripts/cdt.min.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(cdt, s);
            })();
		</script>

<script type='text/javascript'>
window.onload = function() {
    alert( 'Dados enviados com sucesso' );
}
</script>

";
}
?>

        <title><?php wp_title(); ?></title>
        
        <!--The css-->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-53070927-1', 'auto');
            ga('require', 'displayfeatures');
            ga('send', 'pageview');

        </script>
   <?php wp_head(); ?>
    </head>

    <body>

        <header>
            <div class="container">
                <!--Main Menu-->
                <nav class="main-menu">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>" title="Home">Home</a></li>
                        <li><a href="<?php echo home_url(); ?>/contato/" title="Contato">Contato</a></li>
                        <li><a href="<?php echo home_url(); ?>/sobre/" title="Sobre">Sobre</a></li>
                        <li><a href="http://www.wallstreetenglish.com.br/" title="Site institucional Wall Street English">Wall Street English</a></li>
                    </ul>
                </nav>
                <!--End of Main Menu-->
                
                <!--Category Menu-->
                <nav class="category-menu">
                    <ul>
                        <li class="empresa-category"><a href="<?php home_url() ?>/blog/category/empresa/" title="Empresa">Empresa</a></li>
                        <li class="carreira-category"><a href="<?php home_url() ?>/blog/category/carreira/" title="Carreira">Carreira</a></li>
                        <li class="estudo-category"><a href="<?php home_url() ?>/blog/category/estudo/" title="Estudo">Estudo</a></li>
                        <li class="business-category"><a href="<?php home_url() ?>/blog/category/business/" title="Business">Business</a></li>
                        <li class="turismo-category"><a href="<?php home_url() ?>/blog/category/turismo/" title="Turismo">Turismo</a></li>
                    </ul>
                </nav>
                <!--End of Category Menu-->
                
                <!--Search-->
                <div class="search">
                    <form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo('url'); ?>/">
                        <input type="text" name="s" id="search-input" placeholder="Buscar">
                        <button type="submit" id="search-button" title="Procurar no blog..." class="link-padding">Procurar no blog...</button>
                        <div class="clear"></div>
                    </form>
                </div>
                <!--End of Search-->
                
                <div class="clear"></div>
            </div>
        </header>
