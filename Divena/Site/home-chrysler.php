<?php include "header.php"; ?>  
	
	<link rel="stylesheet" href="css/home.min.css">
	<link rel="stylesheet" href="css/home-chrysler.min.css">

	<!-- Slider Scripts -->
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="js/home.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
    		$('#brands-menu li').removeClass('active');
    		$('#brands-menu li a[title="Chrysler"]').parent().addClass('active');
    	});
    </script>
	<!-- End Slider Scripts -->

	<!-- Slider -->
	<div id="slider">
		<div class="the-slider">
			<a href="#" class="item1"></a>
			<a href="#" class="item2"></a>
			<a href="#" class="item3"></a>
			<a href="#" class="item4"></a>
			<a href="#" class="item5"></a>
			<a href="#" class="item6"></a>
		</div>
	</div>
	<!-- End Slider -->

	<!-- Content -->
	<div id="content">
		<div class="content-center">
			<!-- Section Menu -->
			<div id="section-menu">
				<ul>
					 <li>
					 	<a href="#" title="Carros">
					 		<img src="http://placehold.it/224x151" alt="Serviços" title="Serviços">
					 		<span>Carros</span>
					 	</a>
					 </li>
					 <li>
					 	<a href="#" title="Serviços">
					 		<img src="http://placehold.it/224x151" alt="Serviços" title="Serviços">
					 		<span>Serviços</span>
					 	</a>
					 </li>
					 <li>
					 	<a href="#" title="Peças e acessórios">
					 		<img src="http://placehold.it/224x151" alt="Peças e acessórios" title="Peças e acessórios">
					 		<span>Peças e acessórios</span>
					 	</a>
					 </li>
					 <li>
					 	<a href="#" title="Blindados">
					 		<img src="http://placehold.it/224x151" alt="Blindados" title="Blindados">
					 		<span>Blindados</span>
					 	</a>
					 </li>
				</ul>
				<div class="clear"></div>
			</div>
			<!-- End Section Menu -->

			<!-- Seminovos -->
			<div id="seminovos-menu">
				<div class="title">
					<h2>Seminovos</h2>
					<a href="#" title="Ver todos">&gt; Ver todos</a>
					<div class="clear"></div>
				</div>
				 <ul>
				 	<li>
				 		<img src="http://placehold.it/223x114">
				 		<a href="#" title="A 200 Turbo Style" class="car-name">A 200 Turbo Style</a>
				 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				 		<a href="#" title="Saiba mais" class="saiba-mais">Saiba mais</a>
				 	</li>
				 	<li>
				 		<img src="http://placehold.it/223x114">
				 		<a href="#" title="A 200 Turbo Style" class="car-name">A 200 Turbo Style</a>
				 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				 		<a href="#" title="Saiba mais" class="saiba-mais">Saiba mais</a>
				 	</li>
				 	<li>
				 		<img src="http://placehold.it/223x114">
				 		<a href="#" title="A 200 Turbo Style" class="car-name">A 200 Turbo Style</a>
				 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				 		<a href="#" title="Saiba mais" class="saiba-mais">Saiba mais</a>
				 	</li>
				 	<li>
				 		<img src="http://placehold.it/223x114">
				 		<a href="#" title="A 200 Turbo Style" class="car-name">A 200 Turbo Style</a>
				 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				 		<a href="#" title="Saiba mais" class="saiba-mais">Saiba mais</a>
				 	</li>
				 </ul>
				 <div class="clear"></div>
			</div>
			<!-- End Seminovos -->
		</div>
	</div>
	<!-- End Content -->
        
<?php include "footer.php" ?>