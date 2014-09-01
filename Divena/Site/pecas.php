<?php include "header.php"; ?>  
	
	<link rel="stylesheet" href="css/pecas-e-acessorios.min.css">
    
    <!--Slogan-->
    <div class="slogan">
        <div class="content-center">
            <h2>Peças e acessórios</h2>
            <p>Com a qualidade e a garantia que só a Mercedez tem.</p>
        </div>
    </div>
    <!--End Slogan-->

    <div id="content">
        <div class="content-center">
            <!-- Path -->
            <div class="path">
                <ul>
                    <li><a href="/" title="Home">Home</a></li>
                    <li><span>Peças e acessórios</span></li>
                </ul>
                <div class="clear"></div>
            </div>
            <!-- End Path -->
            <!--The content-->
            <div class="the-content">
                <!--Internal Menu-->
                <div class="internal-menu">
                    <ul>
                        <li class="active"><a href="#" title="Peças">Peças</a></li>
                        <li><a href="#" title="Acessórios">Acessórios</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <!--End Internal Menu-->

                <h1>Peças</h1>
                <p>Resistentes e precisas, as Peças Genuínas Mercedes-Benz são produzidas sob rigorosos critérios de qualidade. Todas as etapas de produção são controladas para que nenhuma falha comprometa a eficiência das peças.</p>
                <p>As peças genuínas asseguram o máximo desempenho, economia, segurança e durabilidade aos veículos. São perfeitamente ajustáveis a cada modelo, aumentando assim o intervalo entre as manutenções, valorizando o veículo ao preservar suas características originais.</p>
                <p>Para você contar sempre com a qualidade e a garantia representada pelas marca Mercedes-Benz a empresa disponibiliza uma ampla oferta de Peças Genuínas através do telepeças da Divena Veículo:</p>
                <p><strong>TEL.: (11) 5069-2246 / 5069-2248</strong> <br>ou deixe sua consuta que estaremos em breve lhe respondendo.</p>
                
                <div class="internal-menu">
                    <ul>
                        <li class="active"><a href="#" title="Solicite uma cotação">Solicite uma cotação</a></li>
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