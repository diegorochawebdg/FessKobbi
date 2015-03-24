<?php include('../includes/header.php'); ?>

		<!-- Styles just for this page -->
		<style>
			#webdoors li.webdoor1{
				background: url(../assets/images/ram/webdoor.jpg) no-repeat top;
			}
			#webdoors li.webdoor2{
				background: url(../assets/images/ram/webdoor.jpg) no-repeat top;
			}
			#webdoors li.webdoor3{
				background: url(../assets/images/ram/webdoor.jpg) no-repeat top;
			}
			.brand-logo{
				background: url(../assets/images/ram/ram-logo.png) no-repeat center;
				width: 151px;
				padding-top:35px;
			}
			.button{
				background: #444444 url(../assets/images/icons-sprite-white.png) no-repeat;
				background: url(../assets/images/icons-sprite-white.png) no-repeat, -moz-linear-gradient(top,  #444444 0%, #252525 100%);
				background: url(../assets/images/icons-sprite-white.png) no-repeat, -webkit-gradient(linear, left top, left bottom, color-stop(0%,#444444), color-stop(100%,#252525));
				background: url(../assets/images/icons-sprite-white.png) no-repeat, -webkit-linear-gradient(top,  #444444 0%,#252525 100%);
				background: url(../assets/images/icons-sprite-white.png) no-repeat, -o-linear-gradient(top,  #444444 0%,#252525 100%);
				background: url(../assets/images/icons-sprite-white.png) no-repeat, -ms-linear-gradient(top,  #444444 0%,#252525 100%);
				background: url(../assets/images/icons-sprite-white.png) no-repeat, linear-gradient(to bottom,  #444444 0%,#252525 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#444444', endColorstr='#252525',GradientType=0 );


				border-top: solid 1px #676767;
				border-bottom: solid 1px #1e1e1e;
			}
			.button:hover{
				color: #FFF;
			}
			.slider li a.slide-active figcaption,
			main .car-text .link a,
			#outros-servicos form fieldset label{
				color:#000;
			}
			.slider li a.slide-active:after{
				background: url(../assets/images/active-slide-ram.png) no-repeat center;
			}
			#outros-servicos form button{
				background: #444444;
				background: -moz-linear-gradient(top,  #444444 0%, #252525 100%);
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#444444), color-stop(100%,#252525));
				background: -webkit-linear-gradient(top,  #444444 0%,#252525 100%);
				background: -o-linear-gradient(top,  #444444 0%,#252525 100%);
				background: -ms-linear-gradient(top,  #444444 0%,#252525 100%);
				background: linear-gradient(to bottom,  #444444 0%,#252525 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#444444', endColorstr='#252525',GradientType=0 );
				color: #FFF;
			}
			@media screen and (max-width: 767px){
				#webdoors li.webdoor1{
				background: url(../assets/images/ram/webdoor-mobile.jpg) no-repeat top;
				}
				#webdoors li.webdoor2{
					background: url(../assets/images/ram/webdoor-mobile.jpg) no-repeat top;
				}
				#webdoors li.webdoor3{
					background: url(../assets/images/ram/webdoor-mobile.jpg) no-repeat top;
				}
			}
		</style>
		<!-- End Styles -->

		<!-- Images Gallery -->
		<script type="text/javascript">
			$(document).ready(function() {
				//Links para as imagens da galeria de cada um dos carros no link "Fotos"
				$(".fotos.laramie").click(function() {
				    $.fancybox.open([
				        {
				            href : '../assets/images/ram/fotos/galeria1.jpg'
				        },
				        {
				            href : '../assets/images/ram/fotos/galeria2.jpg'
				        }
				    ], {
				        padding : 0
				    });
				    return false;
				});
			});
		</script>
		<!-- End Images Gallery -->

		<!-- Webdoors -->
		<div id="webdoors">
			<ul>
				<li class="webdoor1">
					<div class="webdoor-txt">
						<h3><span>Novo </span>Jeep Renegade</h3>
						<pre>A aventura está chegando. <br>Prepare-se.</pre>
						<a href="../includes/lead-info-email.php" class="button email-webdoor fancybox">informações <strong>por e-mail</strong></a>
					</div>
					<div class="mobile-overlay"></div>
				</li>
				<li class="webdoor2">
					<div class="webdoor-txt">
						<h3><span>Novo </span>Jeep Renegade2</h3>
						<pre>A aventura está chegando. <br>Prepare-se.</pre>
						<a href="../includes/lead-info-email.php" class="button email-webdoor fancybox">informações <strong>por e-mail</strong></a>
					</div>
					<div class="mobile-overlay"></div>
				</li>
				<li class="webdoor3">
					<div class="webdoor-txt">
						<h3><span>Novo </span>Jeep Renegade3</h3>
						<pre>A aventura está chegando. <br>Prepare-se.</pre>
						<a href="../includes/lead-info-email.php" class="button email-webdoor fancybox">informações <strong>por e-mail</strong></a>
					</div>
					<div class="mobile-overlay"></div>
				</li>
			</ul>
		</div>
		<!-- End Webdoors -->

        <!-- Content -->        
        <section id="content">
            <div class="container">
            	<div class="content-padding">
	                <!-- Conheça -->
	                <section id="conheca">
	                	<h2 class="title1">Conheça os carros</h2>
	                	<!-- Slider -->
	                	<div class="slider">
	                		<ul>
		                		<li>
		                			<a href="#" data-slide-index="0" class="slide-active">
		                				<figure>
		                					<img src="../assets/images/dodge/journey-sxt.jpg" height="58" width="133" alt="Journey SXT" title="Journey SXT">
		                					<figcaption>Journey SXT</figcaption>
		                				</figure>
		                			</a>
		                		</li>
		                	</ul>
	                	</div>
	                	<!-- End Slider -->
						
	                	<main>
	                		<ul id="car-selector">
	                			<li>
	                				<!-- Car Image -->
			                		<div class="col-md-6">
			                			<figure><img src="../assets/images/jeep/wrangler-unlimited-big.jpg" height="337" width="429" alt="Wrangler Unlimited" title="Wrangler Unlimited"></figure>
			                		</div>
			                		<!-- End Car Image -->

			                		<!-- Car Text -->
			                		<div class="col-md-6 car-text">
			                			<h1>Wrangler <span>Unlimited</span></h1>
			                			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eget blandit urna. Maecenas sollicitudin, nibh et bibendum congue, odio ligula tristique purus, eget lobortis urna sem ut lectus. Cras scelerisque quis libero quis semper. Sed pulvinar non nisl a consectetur. Integer convallis eros nec nulla gravida molestie.</p>
			                			<div class="link">
			                				<a href="#" class="ficha-tecnica">Ficha técnica</a>
			                				<a href="../assets/images/ram/fotos/galeria1.jpg" class="fotos laramie">Fotos</a>
			                			</div>

			                			<!-- Price -->
			                			<div class="price">
			                				<div class="prefix">
			                					A partir de <span>R$</span>
			                				</div>
			                				<div class="the-price"><strong>255.900,00</strong></div>
			                			</div>
			                			<!-- End Price -->

			                			<div class="the-leads">
			                				<ul>
			                					<li class="agende"><a href="../includes/lead-testdrive.php" title="Agende um test-drive" class="button fancybox">Agende um <strong>test-drive</strong></a></li>
												<li class="ligamos"><a href="../includes/lead-ligamos.php" title="Ligamos para você" class="button fancybox">Ligamos <strong>para você</strong></a></li>
			                				</ul>
			                			</div>
			                		</div>	
			                		<!-- End Car Text -->
			                		<div class="clearfix"></div>
	                			</li>
	                		</ul>
	                	</main>
	                </section>
	                <!-- End Conheça -->

					<div class="line"></div>

					<!-- Outros Serviços -->
					<section id="outros-servicos">
						<h2 class="title1">Outros Serviços</h2>
						<nav id="acessorios-nav">
							<ul>
								<li>
									<a data-slide-index="0" href="" title="Acessórios" class="acessorios-icone">
										<span>Acessórios</span>
									</a>
								</li>
								<li>
									<a data-slide-index="1" href="" title="Peças" class="pecas-icone">
										<span>Peças</span>
									</a>
								</li>
								<li>
									<a data-slide-index="2" href="" title="Serviços" class="servicos-icone">
										<span>Serviços</span>
									</a>
								</li>
							</ul>
						</nav>
						
						<div class="services-overflow inactive">
							<div class="the-services">
								<!-- /*==================================
								=            Acessórios            =
								==================================*/ -->
								
								<section class="acessorios">
									<div class="text">
										<div class="col-md-6">
											<p>Resistentes e precisas, as Peças Genuínas Mercedes-Benz são produzidas sob rigorosos critérios de qualidade. Todas as etapas de produção são controladas para que nenhuma falha comprometa a eficiência das peças.</p>
											<p>As peças genuínas asseguram o máximo desempenho, economia, segurança e durabilidade aos veículos. São perfeitamente ajustáveis a cada modelo, aumentando assim o intervalo entre as manutenções, valorizando o veículo ao preservar suas características originais.</p>
										</div>
										<div class="col-md-6">
											<p>Para você contar sempre com a qualidade e a garantia representada pelas marca Mercedes-Benz a empresa disponibiliza uma ampla oferta de Peças Genuínas através do telepeças da Divena Veículo:</p>
											<p>TEL.: (11) 5069-2246 / 5069-2248 ou preencha a solicitação abaixo. Em breve entraremos em contato.</p>
										</div>
										<div class="clearfix"></div>

										<!-- Form -->
										<form action="">
											<div class="col-md-6">
												<fieldset>
													<label for="acessorios-nome">Nome</label>
													<input type="text" name="acessorios-nome" id="acessorios-nome">
												</fieldset>
												<fieldset>
													<label for="acessorios-email">E-mail</label>
													<input type="email" name="acessorios-email" id="acessorios-email">
												</fieldset>
												<fieldset>
													<label for="acessorios-tel">Telefone</label>
													<input type="tel" name="acessorios-tel" id="acessorios-tel">
												</fieldset>
											</div>
											<div class="col-md-6">
												<fieldset>
													<label for="acessorios-modelo">Modelo do veículo</label>
													<input type="text" name="acessorios-modelo" id="acessorios-modelo">
												</fieldset>
												<fieldset>
													<label for="acessorios-msg">Mensagem</label>
													<textarea name="acessorios-msg" id="acessorios-msg"></textarea>
												</fieldset>
											</div>
											<div class="col-md-6">
												<fieldset class="check">
													<input type="checkbox" name="acessorios-news-email" id="acessorios-news-email">
													<label for="acessorios-news-email">Aceito receber informações e/ou promoções por e-mail.</label>
												</fieldset>
												<fieldset class="check">
													<input type="checkbox" name="acessorios-news-sms" id="acessorios-news-sms">
													<label for="acessorios-news-sms">Aceito receber informações e/ou promoções por sms.</label>
												</fieldset>
											</div>
											<div class="col-md-6">
												<button type="button" name="enviar" id="enviar">Enviar</button>
											</div>
											<div class="clearfix"></div>
										</form>
										<!-- End Form -->
									</div>
								</section>

								<!--=============================
								=            Peças            =
								=============================-->
								<section class="pecas">
									<div class="text">
										<div class="col-md-6">
											<p>Resistentes e precisas, as Peças Genuínas Mercedes-Benz são produzidas sob rigorosos critérios de qualidade. Todas as etapas de produção são controladas para que nenhuma falha comprometa a eficiência das peças.</p>
											<p>As peças genuínas asseguram o máximo desempenho, economia, segurança e durabilidade aos veículos. São perfeitamente ajustáveis a cada modelo, aumentando assim o intervalo entre as manutenções, valorizando o veículo ao preservar suas características originais.</p>
										</div>
										<div class="col-md-6">
											<p>Para você contar sempre com a qualidade e a garantia representada pelas marca Mercedes-Benz a empresa disponibiliza uma ampla oferta de Peças Genuínas através do telepeças da Divena Veículo:</p>
											<p>TEL.: (11) 5069-2246 / 5069-2248 ou preencha a solicitação abaixo. Em breve entraremos em contato.</p>
										</div>
										<div class="clearfix"></div>

										<!-- Form -->
										<form action="">
											<div class="col-md-6">
												<fieldset>
													<label for="pecas-nome">Nome</label>
													<input type="text" name="pecas-nome" id="pecas-nome">
												</fieldset>
												<fieldset>
													<label for="pecas-email">E-mail</label>
													<input type="email" name="pecas-email" id="pecas-email">
												</fieldset>
												<fieldset>
													<label for="pecas-tel">Telefone</label>
													<input type="tel" name="pecas-tel" id="pecas-tel">
												</fieldset>
											</div>
											<div class="col-md-6">
												<fieldset>
													<label for="pecas-modelo">Modelo do veículo</label>
													<input type="text" name="pecas-modelo" id="pecas-modelo">
												</fieldset>
												<fieldset>
													<label for="pecas-msg">Mensagem</label>
													<textarea name="pecas-msg" id="pecas-msg"></textarea>
												</fieldset>
											</div>
											<div class="col-md-6">
												<fieldset class="check">
													<input type="checkbox" name="pecas-news-email" id="pecas-news-email">
													<label for="pecas-news-email">Aceito receber informações e/ou promoções por e-mail.</label>
												</fieldset>
												<fieldset class="check">
													<input type="checkbox" name="pecas-news-sms" id="pecas-news-sms">
													<label for="pecas-news-sms">Aceito receber informações e/ou promoções por sms.</label>
												</fieldset>
											</div>
											<div class="col-md-6">
												<button type="button" name="enviar" id="enviar">Enviar</button>
											</div>
											<div class="clearfix"></div>
										</form>
										<!-- End Form -->
									</div>
								</section>


								<!--================================
								=            Serviços            =
								================================-->
								
								<section class="servicos">
									<div class="text">
										<div class="col-md-6">
											<h3 class="title2">Agende um serviço</h3>
											<p>A oficina da Divena Veículos possui uma ampla estrutura e completa assistęncia técnica podendo considerar-se a mais bem equipada do Brasil, por seu espaço físico, completo ferramental e por sua equipe de técnicos altamente preparados e treinados com mais de 1.800 horas de treinamento por ano. Possui diferenciais em seus serviços tais como:</p>
										</div>
										<div class="col-md-6">
											<ul>
												<li>Serviço Leva e traz gratuito dentro da Grande Săo Paulo</li>
												<li>Troca de Óleo Expressa - (Serviço executado em menos de uma hora)</li>
												<li>Equipe de consultores técnicos certificados para atendê-los</li>
												<li>Sempre com a maior cordialidade e rapidez</li>
												<li>Alinhamento e Balanceamento com equipamentos Beissbarth (de acordo com os padrões da montadora)</li>
											</ul>
										</div>
										<div class="clearfix"></div>

										<!-- Form -->
										<form action="">
											<div class="col-md-6">
												<fieldset>
													<label for="acessorios-nome">Nome</label>
													<input type="text" name="acessorios-nome" id="acessorios-nome">
												</fieldset>
												<fieldset>
													<label for="acessorios-email">E-mail</label>
													<input type="email" name="acessorios-email" id="acessorios-email">
												</fieldset>
												<fieldset>
													<label for="acessorios-tel">Telefone</label>
													<input type="tel" name="acessorios-tel" id="acessorios-tel">
												</fieldset>
											</div>
											<div class="col-md-6">
												<fieldset>
													<label for="acessorios-modelo">Modelo do veículo</label>
													<input type="text" name="acessorios-modelo" id="acessorios-modelo">
												</fieldset>
												<fieldset>
													<label for="acessorios-msg">Mensagem</label>
													<textarea name="acessorios-msg" id="acessorios-msg"></textarea>
												</fieldset>
											</div>
											<div class="col-md-6">
												<fieldset class="check">
													<input type="checkbox" name="acessorios-news-email" id="acessorios-news-email">
													<label for="acessorios-news-email">Aceito receber informações e/ou promoções por e-mail.</label>
												</fieldset>
												<fieldset class="check">
													<input type="checkbox" name="acessorios-news-sms" id="acessorios-news-sms">
													<label for="acessorios-news-sms">Aceito receber informações e/ou promoções por sms.</label>
												</fieldset>
											</div>
											<div class="col-md-6">
												<button type="button" name="enviar" id="enviar">Enviar</button>
											</div>
											<div class="clearfix"></div>
										</form>
										<!-- End Form -->
									</div>
								</section>
							
							</div>
						</div>
					</section>
					<!-- End Outros Serviços -->

					<div class="line"></div>

					<!-- Localização -->
					<section id="localizacao">

						<h2 class="title1">Localização</h2>

						<div class="addresses">
							<div class="box-padding">
								<ul>
									<li>
										<strong>Lorem Ipsum</strong>
										<a href="#" title="Ir para o site">Ir para o site</a>
										<div class="address">
											<span>Avenida Lorem Ipsum, 000</span>
											<span>Bairro Lorem Ipsum</span>
											<span>00000-000 Lorem Ipsim-SP</span>
											<span>(11) 0000-0000</span>
										</div>
									</li>
									<li>
										<strong>Lorem Ipsum</strong>
										<a href="#" title="Ir para o site">Ir para o site</a>
										<div class="address">
											<span>Avenida Lorem Ipsum, 000</span>
											<span>Bairro Lorem Ipsum</span>
											<span>00000-000 Lorem Ipsim-SP</span>
											<span>(11) 0000-0000</span>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<!-- Map -->
						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.1958987391395!2d-46.62229430000006!3d-23.59730630000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5bc61d28833b%3A0xc252747f2134f66e!2sAv.+Dr.+Ricardo+Jafet%2C+2419+-+Vila+Mariana%2C+S%C3%A3o+Paulo+-+SP%2C+04123-030!5e0!3m2!1spt-BR!2sbr!4v1410903097508" width="100%" height="490" frameborder="0" style="border:0"></iframe>
						</div>
						<!-- End Map -->
						
					</section>
					<!-- End Localização -->
				</div>
            </div>
        </section>
        <!-- End Content -->        
        
<?php include('../includes/footer.php'); ?>