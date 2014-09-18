<?php	 	 

/*
  Template Name: Produtos
 */
?>
<?php	 	 

session_start();
global $page_name;
global $background;
$page_name = 'products';
$background = isset($_SESSION['theme']) ? $_SESSION['theme'] : 'theme-1';
?>
<?php	 	 
 get_header() ?>
<div class="wpr">

  <!-- Compre Aqui -->
  <div class="compre-aqui">
    <div class="relative">
      <a href="#" title="Compre agora" class="compre-aqui-btn"><img src="<?php bloginfo('template_directory'); ?>/img/compre-aqui.png" width="140" height="45" alt="Compre Aqui" title="Compre Aqui"></a>

      <!-- Lojas Container -->
      <div class="lojas-container">
        <div class="box-padding">
          <h3>Lojas:</h3>
          <ul>
            <li><strong>Ultrafarma </strong> <a href="http://www.ultrafarma.com.br/busca/babysec?ci_csrf_token=392fc55bf3b3cd03dba4f4984b729d06&texto_busca=babysec" target="_blank">www.ultrafarma.com.br</a></li>
            <li><strong>Babyou</strong> <a href="http://www.babyou.com.br/babysec" target="_blank">www.babyou.com.br</a></li>
            <li><strong>Lojas Rede</strong> <a href="http://www.lojasrede.com.br/cat/332/666/MaisVendidos/Decrescente/20/1//0/0/.aspx" target="_blank">www.lojasrede.com.br</a></li>
            <li><strong>Bifarma</strong> <a href="http://www.bifarma.com.br/busca/babysec" target="_blank">www.bifarma.com.br</a></li>
          </ul>
        </div>
      </div>
      <!-- End Lojas Container -->

    </div>
  </div>
  <!-- End Compre Aqui -->

  <h2 class="ir">Produtos</h2>

  <ul class="list">
    <li class="selected">
       <a rel="recem-nascido" href="javascript:void(0)" class="switch-bg" data-background="green-theme">
        <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/prod-recem-nascido.png" alt="Recém Nascido">
        <span>Recém-Nascido</span>
      </a>
    </li>
    <li>
      <a rel="premium" href="javascript:void(0)" class="default-bg">
        <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/prod-babysec-premium.png" alt="Babysec&reg; Premium">
        <span>Babysec<sup>&reg;</sup> Premium</span>
      </a>
    </li>
    <li>
      <a rel="ultra" href="javascript:void(0)" class="default-bg">
        <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/prod-babysec-ultra.png" alt="Babysec&reg; Ultra">
        <span>Babysec<sup>&reg;</sup> Ultra</span>
      </a>
    </li>
    <li>
      <a rel="toalhas-umidecidas" href="javascript:void(0)" class="default-bg">
        <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/prod-lencos-umidecidos.png" alt="Lenços Umidecidos">
        <span>Toalhas Umedecidas</span>
      </a>
    </li>
    <li>
      <a rel="vou-aprender" href="javascript:void(0)" class="switch-bg" data-background="green-theme">
        <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/prod-vou-aprender.png" alt="Vou Aprender">
        <span>Vou Aprender</span>
      </a>
    </li>
  </ul>


  <ul class="page-prods">

    <!-- prod1 -->
    <li class="recem-nascido selected">
      <h3>Babysec<sup>&reg;</sup> Recém-Nascido</h3>
      <div class="clearfix row">
        <div class="product-box recem-nascido-box">
          <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/recem_nascido_product.png" alt="" />
        </div>
        
        
        <div class="para-conhecer">
          <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/para-conhecer.png" alt="" />
        </div>
        

        <div class="product-features recem-nascido-features">
          <div class="feature feature-1">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/recem_nascido_bubble_1.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/recem_nascido_bubble_1_over.png" alt="" class="over"/>
          </div>
          <div class="feature feature-2">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/recem_nascido_bubble_2.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/recem_nascido_bubble_2_over.png" alt="" class="over"/>
          </div>
          <div class="feature feature-3">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/recem_nascido_bubble_3.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/recem_nascido_bubble_3_over.png" alt="" class="over"/>
          </div>
          <div class="feature feature-4">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/recem_nascido_bubble_4.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/recem_nascido_bubble_4_over.png" alt="" class="over"/>
          </div>
        </div>

        <div class="product-sizes recem-nascido-sizes">
          <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/recem_nascido_sizes.png" alt="" />
        </div>
      </div>

      <div class="clearfix row"></div>
    </li>

    <!-- prod1 -->

    <!-- prod2 -->
    <li class="premium">
      <h3>Babysec<sup>&reg;</sup> Premium Galinha Pintadinha</h3>
      <div class="clearfix row">
        <div class="product-box">
          <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/premium_product.png" alt="" />
        </div>
        
         <div class="para-conhecer">
          <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/para-conhecer.png" alt="" />
        </div>
        <div>
        <br>
        </div>
         

        <div class="product-features premium-features">
          <div class="feature feature-1">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/premium_bubble_1.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/premium_bubble_1_over.png" alt="" class="over"/>
          </div>
          <div class="feature feature-2">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/premium_bubble_2.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/premium_bubble_2_over.png" alt="" class="over"/>
          </div>
          <div class="feature feature-3">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/premium_bubble_3.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/premium_bubble_3_over.png" alt="" class="over"/>
          </div>
          <div class="feature feature-4">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/premium_bubble_4.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/premium_bubble_4_over.png" alt="" class="over"/>
          </div>
          <div class="feature feature-5">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/premium_bubble_5.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/premium_bubble_5_over.png" alt="" class="over"/>
          </div>
          <div class="feature feature-6">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/premium_bubble_6.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/premium_bubble_6_over.png" alt="" class="over"/>
          </div>
        </div>

        <div class="product-sizes premium-sizes">
          <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/premium_sizes_new.png" alt="" />
        </div>
      </div>

      <div class="clearfix row"></div>
    </li>
    <!-- prod2 -->

    <!-- prod3 -->
     <li class="ultra">
      <h3>Babysec<sup>&reg;</sup> Ultra Galinha Pintadinha</h3>
      <div class="clearfix row">
        <div class="product-box">
          <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/ultra_product.png" alt="" />
        </div>
        
        <div class="para-conhecer">
          <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/para-conhecer.png" alt="" />
        </div>
        

        <div class="product-features ultra-features">
          <div class="feature feature-1">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/ultra_bubble_1.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/ultra_bubble_1_over.png" alt="" class="over"/>
          </div>
          <div class="feature feature-2">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/ultra_bubble_2.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/ultra_bubble_2_over.png" alt="" class="over"/>
          </div>
          <div class="feature feature-3">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/ultra_bubble_3.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/ultra_bubble_3_over.png" alt="" class="over"/>
          </div>
        </div>

        <div class="product-sizes ultra-sizes">
          <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/ultra_sizes_new.png" alt="" />
        </div>
      </div>

      <div class="clearfix row"></div>
    </li>
    <!-- prod3 -->

    <!-- prod4 -->
    <li class="vou-aprender">
      <h3>Babysec<sup>&reg;</sup> Vou Aprender</h3>
      <div class="clearfix row">
        <div class="product-box aprender-box">
          <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/aprender_product.png" alt="" />
        </div>
        
        <div class="para-conhecer">
          <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/para-conhecer.png" alt="" />
        </div>

        <div class="product-features aprender-features">
          <div class="feature feature-1">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/aprender_bubble_1.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/aprender_bubble_1_over.png" alt="" class="over"/>
          </div>
          <div class="feature feature-2">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/aprender_bubble_2.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/aprender_bubble_2_over.png" alt="" class="over"/>
          </div>
          <div class="feature feature-3">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/aprender_bubble_3.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/aprender_bubble_3_over.png" alt="" class="over"/>
          </div>
          <div class="feature feature-4">
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/aprender_bubble_4.png" alt="" />
            <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/aprender_bubble_4_over.png" alt="" class="over"/>
          </div>
        </div>

        <div class="product-sizes aprender-sizes">
          <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/aprender_sizes.png" alt="" />
        </div>
      </div>

      <div class="clearfix row"></div>
    </li>
	<!-- prod4 -->
	
    <!-- prod5 -->
     <li class="toalhas-umidecidas">
      <h3>Babysec<sup>&reg;</sup> Toalhas Umedecidas</h3>
      <div class="clearfix row">
        <div class="product-box toalhas-box">
          <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/toalhas_product.png" alt="" />
        </div>

        <div class="product-sizes toalhas-sizes">
          <img src="<?php	 	 
 bloginfo('template_directory') ?>/img/products/toalhas_features_sizes.png" alt="" />
        </div>
      </div>

      <div class="clearfix row"></div>
    </li>
	<!-- prod5 -->

  </ul>
</div>
<?php	 	 
 get_footer() ?>