<link rel="stylesheet" href="leads.css">

<!--Test Drive-->
<div class="ligamos-lightbox leads">
    <div class="header-lightbox">
        <div class="box-padding">
            <h3 class="lightbox-icons">Ligamos <strong>para você</strong></h3>
        </div>
    </div>
    <div class="content-lightbox">
        <div class="box-padding">
            <p>Preencha os campos abaixo com os seus dados. Um vendedor Divena entrará em contato o mais breve possível.</p>
            <form>
                <div class="left">
                    <input type="text" name="nome-lightbox-ligamos" id="nome-lightbox-ligamos" value="Nome completo" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                    <input type="text" name="telefone-lightbox-ligamos" id="telefone-lightbox-ligamos" value="Telefone" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                    <input type="email" name="email-lightbox-ligamos" id="email-lightbox-ligamos" value="E-mail" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                </div>
                <div class="right">
                    <div class="select">
                        <select name="marca-lightbox-ligamos" id="marca-lightbox-ligamos" class="lightbox-icons">
                            <option selected>Marca</option>
                        </select>
                    </div>
                    <div class="select">
                        <select name="modelo-lightbox-ligamos" id="modelo-lightbox-ligamos" class="lightbox-icons">
                            <option selected>Modelo</option>
                        </select>
                    </div>
                    <div class="select">
                        <select name="concessionaria-lightbox-ligamos" id="concessionaria-lightbox-ligamos" class="lightbox-icons">
                            <option selected>Loja</option>
                        </select>
                    </div>
                    <div class="select">
                        <select name="pessoa-fisica-lightbox-ligamos" id="pessoa-fisica-lightbox-ligamos" class="lightbox-icons">
                            <option selected>Pessoa física</option>
                        </select>
                    </div>
                </div>
                <div class="clear"></div>
                <small>Horário de atendimento: <br>Segunda a sexta das 9hs às 18hs / Sábados das 10hs às 16hs.</small>
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
