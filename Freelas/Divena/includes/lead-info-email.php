<link rel="stylesheet" href="leads.css">

<!--Test Drive-->
<div class="info-email-lightbox leads">
    <div class="header-lightbox">
        <div class="box-padding">
            <h3 class="lightbox-icons">Informações <strong>por e-mail</strong></h3>
        </div>
    </div>
    <div class="content-lightbox">
        <div class="box-padding">
            <p>Preencha os campos abaixo com os seus dados. Um vendedor Divena entrará em contato o mais breve possível.</p>
            <form>
                <div class="left">
                    <input type="text" name="nome-lightbox-info-email" id="nome-lightbox-info-email" value="Nome completo" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                    <input type="text" name="telefone-lightbox-info-email" id="telefone-lightbox-info-email" value="Telefone" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                    <input type="email" name="email-lightbox-info-email" id="email-lightbox-info-email" value="E-mail" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                    <textarea name="msg-lightbox-info-email" id="msg-lightbox-info-email" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">Mensagem</textarea>
                    
                </div>
                <div class="right">
                    <div class="select">
                        <select name="marca-lightbox-info-email" id="marca-lightbox-info-email" class="lightbox-icons">
                            <option selected>Marca</option>
                        </select>
                    </div>
                    <div class="select">
                        <select name="modelo-lightbox-info-email" id="modelo-lightbox-info-email" class="lightbox-icons">
                            <option selected>Modelo</option>
                        </select>
                    </div>
                    <div class="select">
                        <select name="loja-lightbox-info-email" id="loja-lightbox-info-email" class="lightbox-icons">
                            <option selected>loja</option>
                        </select>
                    </div>
                    <div class="select">
                        <select name="pessoa-fisica-lightbox-info-email" id="pessoa-fisica-lightbox-info-email" class="lightbox-icons">
                            <option selected>Pessoa física</option>
                        </select>
                    </div>
                </div>
                <div class="clear"></div>
                <small>Todos os campos são obrigatórios</small>
                <div class="linha"></div>
                <input type="checkbox" checked name="info-email-lightbox-vendedor" id="info-email-lightbox-vendedor">
                <label for="info-email-lightbox-vendedor" class="checkbox-span">Aceito receber informações e/ou promoções por e-mail.</span>
                <div class="clear"></div>

                <input type="checkbox" checked name="info-sms-lightbox-vendedor" id="info-sms-lightbox-vendedor">
                <label for="info-sms-lightbox-vendedor" class="checkbox-span">Aceito receber informações e/ou promoções por SMS.</span>
                <div class="clear"></div>
                <button type="button" id="confirmar" class="animate" title="Confirmar">Confirmar</button> 
            </form>
        </div>
    </div>
</div>
<!--End of Test Drive-->
