<?php include "header.php"; ?>  
	
	<link rel="stylesheet" href="css/servicos.min.css">
    <style type="text/css">
        .main-bg-img{
            background: url(images/servicos/bg-funilaria.jpg) no-repeat center;
        }
        .slogan{
            background: url(images/servicos/banner-funilaria.jpg) no-repeat center;
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
                    <li class="active"><a href="#" title="Funilaria">Funilaria</a></li>
                    <li><a href="#" title="Consórcio">Consórcio</a></li>
                    <li><a href="#" title="Agende um teste-drive">Agende um teste-drive</a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <!--End Internal Menu-->

            <!--The content-->
            <div class="the-content">
                <h1>Funilaria</h1>
                <p>Contamos com técnicos com mais de 35 anos de experiência em serviços na marca e os melhores equipamentos para funilaria e pintura.</p>
                <ul class="text">
                    <li>Utilizamos o mesmo sistema de pintura da linha de produção das fábricas da Alemanha.</li>
                    <li>Sistema de Repintura da Standox com 10 anos de garantia (descoloração, descolamento).</li>
                    <li>Atendemos todas as principais seguradoras.</li>
                    <li>Parcelamos sua franquia em até três vezes sem juros nos cartôes de crédito; Consulte-nos.</li>
                    <li>Controle de Qualidade e garantia do serviço.</li>
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