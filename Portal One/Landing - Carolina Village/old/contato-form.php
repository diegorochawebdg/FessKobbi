<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    <meta name="description" content="">
    <title>Informações por email - One | Desenvolvimento imobiliário</title>
    
    <!--Stylesheets-->
    <link rel="stylesheet" href="css/contato-form.css">
    <!--End of Stylesheets-->
</head>

<body>
<div id="container">
    <div class="all-content">
        <div class="title">
            <h1>Informações por e-mail</h1>
            <a href="#" title="fechar" class="fechar link-padding">fechar</a>
            <div class="clear"></div>
        </div>

        <div class="form">
            <form>
                <label class="form-title">Preencha os campos abaixo</label>
                <input type="text" id="nome" name="nome" value="*NOME:" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                <input type="tel" id="tel" name="tel" value="*TEL.: (00) 0000-0000" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="half">
                <input type="email" id="email" name="email" value="*E-MAIL:" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="half right">
                <div class="clear"></div>
                <textarea id="mensagem" name="mensagem" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">*MENSAGEM:</textarea>
                <input type="checkbox" checked id="receber-email" name="receber-email">
                <label class="email-info">Aceito receber informações e/ou promoções por e-mail</label>
                <div class="clear"></div>
                <small>*Todos os campos são obrigatórios</small>
                <button type="submit" id="enviar" name="enviar" class="animate">Enviar</button>
                <div class="clear"></div>
            </form>
        </div>
    </div>

</div>
<!--Scripts-->
<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
<!--End of Scripts-->

</body>
</html>