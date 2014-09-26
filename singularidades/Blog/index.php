<?php include "header.php"; ?>  

	<!-- Facebook Plugin -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- End Facebook Plugin -->
	
	<link rel="stylesheet" href="css/home.css">

	<div class="container">
	
		<!-- Main content -->
		<section id="main-content" class="col-md-8">
			<!-- Latests -->
			<div class="latests">
				<h2>Últimas Publicações</h2>

				<ul>
					<li class="noticias-post">
						<a href="#" title="">
							<article>
								<time datetime="">29/08</time>
								<img src="http://placehold.it/277x102" alt="" title="" width="277" height="102">
								<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit..</blockquote>
							</article>
						</a>
					</li>
					<li class="noticias-post">
						<a href="#" title="">
							<article>
								<time datetime="">29/08</time>
								<img src="http://placehold.it/277x102" alt="" title="" width="277" height="102">
								<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit..</blockquote>
							</article>
						</a>
					</li>
					<li class="noticias-post">
						<a href="#" title="">
							<article>
								<time datetime="">29/08</time>
								<img src="http://placehold.it/277x102" alt="" title="" width="277" height="102">
								<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit..</blockquote>
							</article>
						</a>
					</li>
					<li class="noticias-post">
						<a href="#" title="">
							<article>
								<time datetime="">29/08</time>
								<img src="http://placehold.it/277x102" alt="" title="" width="277" height="102">
								<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit..</blockquote>
							</article>
						</a>
					</li>
				</ul>
			</div>
			<!-- End Latests -->

			<!-- Others Posts -->
			<div class="others-posts">
				<ul>
					<li class="singularidades-post">
						<a href="#">
							<time datetime="">
								<div class="relative">
									<span>29</span> agosto
								</div>
							</time>
							<h2>Dicta molestias quos, reiciendis nemo consequatur quidem animi iure fuga eos.</h2>
							<div class="clear"></div>

							<img src="http://placehold.it/277x153" width="277" height="153" alt="" title="">
							<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe architecto deleniti porro veritatis consectetur tenetur voluptates, aut quis distinctio quo. Accusamus aut ex consequatur molestias est soluta ducimus itaque minima!</blockquote>
						</a>
					</li>
					<li class="singularidades-post">
						<a href="#">
							<time datetime="">
								<div class="relative">
									<span>29</span> agosto
								</div>
							</time>
							<h2>Dicta molestias quos, reiciendis nemo consequatur quidem animi iure fuga eos.</h2>
							<div class="clear"></div>

							<img src="http://placehold.it/277x153" width="277" height="153" alt="" title="">
							<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe architecto deleniti porro veritatis consectetur tenetur voluptates, aut quis distinctio quo. Accusamus aut ex consequatur molestias est soluta ducimus itaque minima!</blockquote>
						</a>
					</li>
					<li class="singularidades-post">
						<a href="#">
							<time datetime="">
								<div class="relative">
									<span>29</span> agosto
								</div>
							</time>
							<h2>Dicta molestias quos, reiciendis nemo consequatur quidem animi iure fuga eos.</h2>
							<div class="clear"></div>

							<img src="http://placehold.it/277x153" width="277" height="153" alt="" title="">
							<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe architecto deleniti porro veritatis consectetur tenetur voluptates, aut quis distinctio quo. Accusamus aut ex consequatur molestias est soluta ducimus itaque minima!</blockquote>
						</a>
					</li>
				</ul>
			</div>
			<!-- End Others Posts -->
			<a href="#" title="Mais publicações" class="main-more-info">Mais publicações</a>
		</section>
		<!-- End Main content -->

		<!-- Sidebar -->
		<aside class="col-md-4">
			<!--Search-->
	        <div class="search">
	            <form role="search" method="get" id="searchform" class="searchform">
	                <input type="text" name="s" id="search-input" placeholder="Busca">
	                <button type="submit" id="search-button" title="Procurar no blog..." class="link-padding">Procurar no blog...</button>
	                <div class="clear"></div>
	            </form>
	        </div>
	        <!--End of Search-->

	        <!-- Vagas -->
	        <div class="vagas">
	        	<div class="titles">
	        		<h3>Vagas</h3>
	        	</div>

	        	<ul>
	        		<li>
	        			<a href="#">
	        				<strong>Estagiário de Lorem Ipsum</strong>
	        				<span>Fess'Kobbi</span>
	        			</a>
	        		</li>
	        		<li>
	        			<a href="#">
	        				<strong>Estagiário de Lorem Ipsum</strong>
	        				<span>Fess'Kobbi</span>
	        			</a>
	        		</li>
	        		<li>
	        			<a href="#">
	        				<strong>Estagiário de Lorem Ipsum</strong>
	        				<span>Fess'Kobbi</span>
	        			</a>
	        		</li>
	        		<li>
	        			<a href="#">
	        				<strong>Estagiário de Lorem Ipsum</strong>
	        				<span>Fess'Kobbi</span>
	        			</a>
	        		</li>
	        	</ul>
	        </div>
	        <!-- End Vagas -->

	        <!-- News -->
	        <div class="news">
	        	<div class="titles">
	        		<h3>Newsletter</h3>
	        	</div>
	        	<form name="news-sidebar">
		        	<input type="email" id="email-news" name="email-news" placeholder="Digite o seu e-mail">
		        	<button type="button" name="assinar-news" id="assinar-news">Assinar</button>
	        	</form>
	        </div>
	        <!-- End News -->

	        <!-- Educação na Web -->
	        <div class="educacao-web">
	        	<div class="titles">
	        		<h3>Educação na web</h3>
	        	</div>
	        	<ul>
	        		<li class="uol">
	        			<i>Uol Educação</i>
	        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque expedita voluptate dolores, quam eum doloremque doloribus necessitatibus unde veritatis.</p>
	        		</li>
	        		<li class="uol">
	        			<i>Uol Educação</i>
	        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque expedita voluptate dolores, quam eum doloremque doloribus necessitatibus unde veritatis.</p>
	        		</li>
	        		<li class="uol">
	        			<i>Uol Educação</i>
	        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque expedita voluptate dolores, quam eum doloremque doloribus necessitatibus unde veritatis.</p>
	        		</li>
	        		<li class="uol">
	        			<i>Uol Educação</i>
	        			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque expedita voluptate dolores, quam eum doloremque doloribus necessitatibus unde veritatis.</p>
	        		</li>
	        	</ul>
	        	<a href="#" title="Carregar mais" class="load-more-education">Carregar mais</a>
	        </div>
	        <!-- End Educação na Web -->

	        <!-- Social -->
	        <div class="facebook-sidebar">
	        	<div class="titles">
	        		<h3>Facebook</h3>
	        	</div>
				<div class="fb-like-box" data-href="https://www.facebook.com/pages/Instituto-Singularidades/230182023664250" data-width="100%" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div>
	        </div>
	        <!-- End Social -->
		</aside>
		<!-- End Sidebar -->

	</div>
        
<?php include "footer.php" ?>