<?php include "header.php"; ?>  
<link rel="stylesheet" href="css/informacoes-por-email.min.css">	

<!--Title-->
<div class="title">
    <h1>Informações <strong>por email</strong></h1>
</div>
<!--End of Title-->

<div id="content">

    <!--Form-->
    <div class="form">
        <form name="info">
            <input type="text" name="nome" id="nome" value="Nome Completo" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
            <input type="email" name="email" id="email" value="E-mail" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
            <input type="tel" name="tel" id="tel" value="Telefone" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
            <select name="marca" id="marca">
                <option>marca1</option>
                <option>marca2</option>
                <option>marca3</option>
            </select>
            <select name="modelo" id="modelo">
                <option>modelo1</option>
                <option>modelo2</option>
                <option>modelo3</option>
            </select>
            <select name="concessionaria" id="concessionaria">
                <option>concessionaria1</option>
                <option>concessionaria2</option>
                <option>concessionaria3</option>
            </select>
            <textarea name="mensagem" id="mensagem" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">Mensagem</textarea>
            <button type="button" name="enviar" id="enviar">Enviar</button>
        </form>
    </div>
    <!--End Form-->

</div>
        
<?php include "footer.php" ?>