<?php include "header.php"; ?>  
	
	<link rel="stylesheet" href="css/contato.css">
	
    <div class="path">
        <div class="content-center">
            <a href="/" title="home">Home</a>
            <span class="separator">\</span>
            <a href="/" title="Contato">Contato</a>
            <span class="separator">\</span>
            <span class="the-path">Fale conosco</span>
        </div>
    </div>

</div>
<!--End of Slider-->

<!--Content-->
<div id="content">
    <div class="content-center">
        <h1>Contato</h1>
        
        <!--Left-->
        <div class="left">
            <ul>
                <li class="active"><a class="item1" href="#" title="Fale conosco">Fale conosco</a></li>
                <li><a class="item2" href="#" title="Venda seu terreno">Venda seu terreno</a></li>
                <li><a class="item3" href="#" title="Fornecedor">Fornecedor</a></li>
            </ul>
        </div>
        <!--End of Left-->
        
        <!--Right-->
        <div class="right">
            <!--Fale conosco-->
            <div class="item1">
                <h2>Fale conosco</h2>
                <p>Em busca do aprimoramento constante a One Desenvolvimento Imobiliário prioriza o atendimento a todos os seus clientes, fornecedores, colaboradores e vizinhos. Estamos sempre abertos a ouvir sua opinião, sugestão ou crítica.</p>
                
                <!--Form-->
                <div class="form">
                    <h3>Preencha os campos abaixo</h3>
                    <form>
                        <input type="text" name="nome-fale-conosco" id="nome-fale-conosco" value="NOME" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="left-input">
                        <input type="email" name="email-fale-conosco" id="email-fale-conosco" value="E-MAIL" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="right-input">
                        <input type="tel" name="tel-fale-conosco" id="tel-fale-conosco" value="TEL.: (00) 0000•0000" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="left-input">
                        <input type="text" name="assunto" id="assunto-fale-conosco" value="ASSUNTO" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="right-input">
                        <textarea name="mensagem-fale-conosco" id="mensagem-fale-conosco" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">MENSAGEM</textarea>
                    <small>*Todos os campos são obrigatórios</small>
                        <button type="submit" title="Enviar" id="enviar-fale-conosco" class="enviar animate">Enviar</button>
                    </form>
                </div>
                <!--End of Form-->
            </div>
            <!--End of Fale conosco-->
            
            <!--Venda seu terreno-->
            <div class="item2">
                <h2>Venda seu terreno</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                
                <!--Form-->
                <div class="form">
                    <h3>Preencha os campos abaixo</h3>
                    <h4>Dados pessoais:</h4>
                    <form>
                        <input type="text" name="nome-venda-terreno" id="nome-venda-terreno" value="NOME" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="left-input">
                        <input type="email" name="email-venda-terreno" id="email-venda-terreno" value="E-MAIL" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="right-input">
                        <input type="tel" name="tel-venda-terreno" id="tel-venda-terreno" value="TEL.: (00) 0000•0000" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="left-input">
                        <input type="tel" name="cel-venda-terreno" id="cel-venda-terreno" value="CEL.: (00) 00000•0000" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="right-input">
                        <div class="clear"></div>
                        
                        <h4 style="margin-top:30px;">Dados do terreno</h4>
                        <input type="text" name="endereco-venda-terreno" id="endereco-venda-terreno" value="ENDEREÇO" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="left-input">
                        <input type="text" name="cep-venda-terreno" id="cep-venda-terreno" value="CEP" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="right-input">
                        <input type="text" name="bairro-venda-terreno" id="bairro-venda-terreno" value="BAIRRO" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="left-input">
                        <input type="text" name="cidade-venda-terreno" id="cidade-venda-terreno" value="CIDADE" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="right-input">
                        <input type="text" name="estado-venda-terreno" id="estado-venda-terreno" value="ESTADO" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="left-input">
                        <input type="text" name="area-venda-terreno" id="area" value="ÁREA EM M2" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="right-input">
                        <input type="text" name="referencia-venda-terreno" id="referencia-venda-terreno" value="PONTO DE REFERÊNCIA" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="left-input">
                        <div class="clear"></div>
                        <button type="button" title="Anexar foto 1" id="foto-1-venda-terreno" class="upload left-input animate">Anexar foto 1</button>
                        <button type="button" title="Anexar foto 2" id="foto-2-venda-terreno" class="upload right-input animate">Anexar foto 2</button>
                        <div class="clear"></div>
                        
                        <textarea name="mensagem-venda-terreno" id="mensagem-venda-terreno" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">MENSAGEM</textarea>
                        
                        <small>*Todos os campos são obrigatórios</small>
                        <button type="submit" title="Enviar" id="enviar-fale-conosco" class="enviar animate">Enviar</button>
                    </form>
                </div>
                <!--End of Form-->
            </div>
            <!--End of Venda seu terreno-->
            
            <!--Fornecedor-->
            <div class="item3">
                <h2>Fornecedor</h2>
                <p>Estamos constantemente buscando novos fornecedores para nossos empreendimentos. Se você tem interesse em ser um de nossos parceiros, preencha o formulário abaixo.</p>
                
                <!--Form-->
                <div class="form">
                    <h3>Preencha os campos abaixo</h3>
                    <form>
                        <input type="text" name="nome-fornecedores" id="nome-fornecedores" value="NOME" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="left-input">
                        <input type="email" name="email-fornecedores" id="email-fornecedores" value="E-MAIL" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="right-input">
                        <input type="tel" name="tel-fornecedores" id="tel-fornecedores" value="TEL.: (00) 0000•0000" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="left-input">
                        <input type="text" name="assunto-fornecedores" id="assunto-fornecedores" value="ASSUNTO" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="right-input">
                        <textarea name="mensagem-fornecedores" id="mensagem-fornecedores" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">MENSAGEM</textarea>
                    <small>*Todos os campos são obrigatórios</small>
                        <button type="submit" title="Enviar" id="enviar-fale-conosco" class="enviar animate">Enviar</button>
                    </form>
                </div>
                <!--End of Form-->
            </div>
            <!--End of Fornecedor-->
        </div>
        <!--End of Right-->
        <div class="clear"></div>
    </div>
</div>
<!--End of Content-->

<!--Scripts-->
<script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/js/contato.js"></script>
<!--End of Scripts-->

<link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css">
        
<?php include "footer.php" ?>
