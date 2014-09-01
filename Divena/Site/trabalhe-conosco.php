<?php include "header.php"; ?>  
	
	<link rel="stylesheet" href="css/trabalhe-conosco.min.css">
    
    
    <!--Slogan-->
    <div class="slogan">
        <div class="content-center">
            <h2>Encontre a Mercedes dos seus sonhos na Divena</h2>
            <p>Os principais lançamentos da Mercedes você encontra aqui, visite a loja mais próxima.</p>
        </div>
    </div>
    <!--End Slogan-->

    <div id="content">
        <div class="content-center">
            <!--Internal Menu-->
            <div class="internal-menu">
                <ul>
                    <li><a href="#" title="Empresa">Empresa</a></li>
                    <li><a href="#" title="Certificações">Certificações</a></li>
                    <li><a href="#" title="Meio ambiente">Meio ambiente</a></li>
                    <li><a href="#" title="Localização">Localização</a></li>
                    <li class="active"><a href="#" title="Trabalhe conosco">Trabalhe conosco</a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <!--End Internal Menu-->
            
            <!--The content-->
            <div class="the-content">
                <h1>Faça parte da equipe Divena</h1>
                <p>Faça parte da Divena Veículos, envie seu currículo para nosso banco de carreiras. Estaremos analisando o mesmo e caso surja uma vaga correspondente as suas características profissionais estaremos entrando em contato para agendar uma entrevista.</p>
                
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