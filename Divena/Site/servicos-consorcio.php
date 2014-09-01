<?php include "header.php"; ?>  
	
	<link rel="stylesheet" href="css/servicos.min.css">
    <style type="text/css">
        .main-bg-img{
            background: url(images/servicos/bg-consorcio.jpg) no-repeat center;
        }
        .slogan{
            background: url(images/servicos/banner-consorcio.jpg) no-repeat center;
        }
    </style>

    <!--Slogan-->
    <div class="slogan">
        <div class="content-center">
            <h2>Serviços Divena Mercedez</h2>
            <p>Os serviços da melhor concessionária do Brasil.</p>
        </div>
    </div>
    <!--End Slogan-->

    <div id="content">
        <div class="content-center">
            <!-- Path -->
            <div class="path">
                <ul>
                    <li><a href="/" title="Home">Home</a></li>
                    <li><span>Serviços</span></li>
                </ul>
                <div class="clear"></div>
            </div>
            <!-- End Path -->

            <!--Internal Menu-->
            <div class="internal-menu">
                <ul>
                    <li><a href="#" title="Oficina">Oficina</a></li>
                    <li><a href="#" title="Revisões">Revisões</a></li>
                    <li><a href="#" title="Funilaria">Funilaria</a></li>
                    <li class="active"><a href="#" title="Consórcio">Consórcio</a></li>
                    <li><a href="#" title="Agende um teste-drive">Agende um teste-drive</a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <!--End Internal Menu-->

            <!--The content-->
            <div class="the-content">
                <h1>Consórcio</h1>
                <p>A história de sucesso da MERCABENCO começou em 1975 e, desde então, a empresa não parou de crescer.</p>
                <p>Hoje são milhares de consorciados satisfeitos com seus veículos, e sonhos realizados, reforçando assim nosso compromisso de levar a você o melhor negócio.</p>
                <p>Em mais de 8.000 metros quadrados de confortáveis instalações, a Divena Veículos disponibiliza uma completa infra-estrura, que inclui desde um amplo showroom a um exclusivo heliponto.</p>
                <p>A confiabilidade de nossos clientes completa o cenário do nosso sucesso, fortalecendo o brilho da estrela que, direta ou indiretamente, faz parte da sua marca. A Mercabenco - Mercantil e Administradora de Bens e Consórcios Ltda., nasceu de idéia de expressivos concessionários da Mercedez-Bens do Brasil em criar sua própria administradora de consórcios.</p>
                <p>Esta é a prova de solidez, confiança e do excelente grau de relacionamento que a empresa mantém com seus clientes e fornecedores.</p>
                <p>Conhecida como CONSÓRCIO DOS CONCESSIONÁRIOS MERCEDES-BENZ, conquistou seu lugar de destaque no segmento de caminhões, ônibus, utilitários e automóveis da linha Mercedes-Benz e incorporando, em seguida, grupos de automóveis e utilitários nacionais e importados de outras marcas.</p>
                <p>O Segredo do Sucesso Na Mercabenco, a pontualidade, a tradição e a segurança nas entregas dos bens garantem a satisfação dos clientes.</p>
                <p>Você tem suas informações rápidas, precisas e seguras, pois todos os nossos setores são informatizados, tendo assim um atendimento personalizado.</p>
                <p>Nossos profissionais são treinados e especializados no que fazem, estando assim aptos a atendê-lo e suprir suas necessidades.</p>
                <p>Condições e Vantagens Mercabenco</p>

                <ul class="text">
                    <li>Sorteio pela Loteria Federal</li>
                    <li>Sem fundo de Reserva</li>
                    <li>Seu usado como lance</li>
                    <li>Prazo para quitar o lance - troca de chaves</li>
                    <li>Opção pela mensalidade reduzida até a data de Contemplação.</li>
                </ul>
                
                <div class="internal-menu">
                    <ul>
                        <li class="active"><a href="#" title="Agende uma visita">Agende uma visita</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <form>
                    <div class="form-left">
                        <div class="field">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome">
                        </div>
                        <div class="field">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="field">
                            <label for="tel">Telefone:</label>
                            <input type="tel" name="tel" id="tel">
                        </div>
                        <div class="clear"></div>
                        
                        <div class="field">
                            <label for="cidade">Cidade:</label>
                            <input type="text" name="cidade" id="cidade">
                        </div>
                        <div class="field">
                            <label for="horario">Horário:</label>
                            <input type="text" name="horario" id="horario">
                        </div>
                        <div class="field">
                            <label for="modelo">Selecione o modelo:</label>
                            <div class="select">
                                <select>
                                    <option>modelo 1</option>
                                    <option>modelo 2</option>
                                    <option>modelo 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-right">
                        <label for="msg">Mensagem:</label>
                        <textarea name="msg" id="msg"></textarea>
                    </div>
                    <div class="clear"></div>
                    
                    <span class="messages">Mensagem enviada com sucesso!</span>
                    <div class="terms-button">
                        <input type="checkbox" checked name="termos" id="termos">
                        <label for="termos"><a href="#">Li e aceito os termos</a> de política de privacidade</label>
                        <button type="button" name="enviar" id="enviar" title="Enviar">Enviar</button>
                    </div>
                    <div class="clear"></div>
                </form>
            </div>
        </div>
        <!--End The content-->
    </div>
        
<?php include "footer.php" ?>