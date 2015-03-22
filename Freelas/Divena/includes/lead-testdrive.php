<link rel="stylesheet" href="leads.css">

<!--Test Drive-->
<div class="test-drive-lightbox leads">
    <div class="header-lightbox">
        <div class="box-padding">
            <h3 class="lightbox-icons">Agende um <strong>test-drive</strong></h3>
        </div>
    </div>
    <div class="content-lightbox">
        <div class="box-padding">
            <p>Preencha os campos abaixo com os seus dados. Um vendedor Divena entrará em contato o mais breve possível.</p>
            <form>
                <div class="left">
                    <input type="text" name="nome-lightbox-test-drive" id="nome-lightbox-test-drive" value="Nome completo" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                    <input type="text" name="telefone-lightbox-test-drive" id="telefone-lightbox-test-drive" value="Telefone" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                    <input type="email" name="email-lightbox-test-drive" id="email-lightbox-test-drive" value="E-mail" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                    <div class="select">
                        <select name="data-lightbox-test-drive" id="data-lightbox-test-drive" class="lightbox-icons">
                            <option selected>Data</option>
                        </select>
                    </div>
                </div>
                <div class="right">
                    <div class="select">
                        <select name="marca-lightbox-test-drive" id="marca-lightbox-test-drive" class="lightbox-icons">
                            <option selected>Marca</option>
                        </select>
                    </div>
                    <div class="select">
                        <select name="modelo-lightbox-test-drive" id="modelo-lightbox-test-drive" class="lightbox-icons">
                            <option selected>Modelo</option>
                        </select>
                    </div>
                    <div class="select">
                        <select name="concessionaria-lightbox-test-drive" id="concessionaria-lightbox-test-drive" class="lightbox-icons">
                            <option selected>Concessionária</option>
                        </select>
                    </div>
                    <div class="select">
                        <select name="hora-lightbox-test-drive" id="hora-lightbox-test-drive" class="lightbox-icons">
                            <option selected>Hora</option>
                        </select>
                    </div>
                    <div class="select">
                        <select name="pessoa-fisica-lightbox-test-drive" id="pessoa-fisica-lightbox-test-drive" class="lightbox-icons">
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
