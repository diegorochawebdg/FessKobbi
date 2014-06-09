<?php include "header.php" ?>
<link rel="stylesheet" href="css/internals.css">
<link rel="stylesheet" href="css/formulario.css">

<div class="content-center">
    
    <!--Path-->
    <div class="path">
        <a href="/" title="home">home</a>
        <span>></span>
        <a href="#" title="contato">contato</a>
        <span>></span>
        <span>formulário</span>
    </div>
    <!--Path-->
    <!--Title-->
    <div class="title">
        <h1>Contato / <strong>Formulário</strong></h1>
    </div>
    <!--End of Title-->
    
    <!--Left-->
    <div class="left">
        <!--Left Menu-->
        <ul class="main-menu">
            <li class="active"><a href="#" title="Localização">Localização</a></li>
            <li><a href="#" title="Formulário">Formulário</a></li></li>
        </ul>
        <!--End of Left Menu-->
        
        <!--Banners-->
        <div class="banners">
            <a href="#" title="Graduação singularidades - Vestibular 2014"><img src="http://placehold.it/210x210"></a>
        </div>
        <!--End of Banners-->
    </div>
    <!--End of Left-->
    
    <!--Right-->
    <div class="right">
        
        <h2>Entre em contato</h2>
        <p>Preencha o formulário e entre em contato conosco, nossa equipe está preparada para tiras qualquer dúvida. Mande também as suas sugestões, ajude o Singularidades a melhorar a cada dia:</p>
        
        <div class="form">
            <form>
                <input type="text" name="nome" id="nome" value="Nome:" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="left-input" required>
                <input type="email" name="email" id="email" value="E-mail:" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="right-input" required>
                <div class="clear"></div>
                <input type="tel" name="tel" id="tel" value="Tel.: (00) 0000•0000" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="left-input" required>
                <input type="text" name="assunto" id="assunto" value="Assunto:" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" class="right-input" required>
                <div class="clear"></div>
                <textarea name="mensagem" id="mensagem" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" required>Mensagem:</textarea>
                <small>* Todos os campos são obrigatórios</small>
                <button name="enviar" id="enviar" title="enviar" class="animate">Enviar</button>
                <div class="clear"></div>
            </form>
        </div>
        
    </div>
    <!--End of Right-->
    <div class="clear"></div>
    
</div>

<?php include "footer.php" ?>
<script type="text/javascript" src="js/internal.js"></script>