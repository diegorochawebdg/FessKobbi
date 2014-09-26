<?php include "header.php" ?>
<link rel="stylesheet" href="css/internals.css">
<link rel="stylesheet" href="css/extensao-eventos-interna.css">

<div class="content-center">
    
    <!--Path-->
    <div class="path">
        <a href="/" title="home">home</a>
        <span>></span>
        <span>extensão</span>
        <span>></span>
        <span>eventos</span>
    </div>
    <!--Path-->
    <!--Title-->
    <div class="title">
        <h1>Extensão / <strong>Eventos de formação continuada</strong></h1>
    </div>
    <!--End of Title-->
    
    <!--Left-->
    <div class="left">
        <!--Left Menu-->
        <ul class="main-menu">
            <li><a href="#" title="Cursos" class="with-sub-menu animate">Cursos</a></li>
            <li><a href="#" title="Sobre a extensão">Sobre a extensão</a></li>
            <li><a href="#" title="Pesquisa">Pesquisa</a></li>
            <li class="active"><a href="#" title="Eventos">Eventos</a></li>
        </ul>
        <!--End of Left Menu-->
    </div>
    <!--End of Left-->
    
    <!--Right-->
    <div class="right">
        
        <div class="evento">
            <span class="category">Palestra</span>
            <h2>O trabalho com sexualidade na educação infantil</h2>
            
            <div class="info">
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                    <tr>
                        <td class="data">
                            <span>Data</span> 18/10/2014 (sábado)
                        </td>
                        <td class="horario">
                            <span>Horário</span> das 9h às 15h
                        </td>
                        <td class="carga-horaria">
                            <span>Carga Horária</span> 3200hs
                        </td>
                        <td class="ministrantes">
                            <span>Ministrantes</span> João da Silva
                        </td>
                        <td class="valor">
                            <span>Valor</span> R$653,00
                        </td>
                    </tr>
                </table>
            </div>
            
            <p>In qui despicationes. Eiusmod dolore lorem fabulas eram a e dolor irure quae 
                deserunt a fabulas noster tempor, qui eram nostrud. Multos excepteur iudicem, 
                irure nescius distinguantur. Offendit si velit cernantur, iis excepteur 
                reprehenderit, vidisse quae aut pariatur voluptatibus, ut legam fabulas laborum 
                iis fugiat qui quamquam, aut lorem fabulas comprehenderit, fore proident 
                litteris, si pariatur firmissimum. Et ad philosophari, id magna efflorescere o 
                sed officia concursionibus, et fugiat transferrem, sed mandaremus aut 
                expetendis, eiusmod nulla quem hic sunt, laboris ubi dolore admodum, eram 
                nostrud excepteur. Non summis laboris qui nescius lorem illum aliquip quem.</p>
            
            <!--Form-->
            <div class="form-inscricao">
                <h3>Formulário de inscrição</h3>
                <form>
                    <input type="text" name="nome-evento" id="nome-evento" value="Nome:" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">

                    <input type="tel" name="tel-evento" id="tel-evento" value="Telefone:" class="left" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                    <input type="email" name="email-evento" id="email-evento" value="E-mail:" class="right" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                    <div class="clear"></div>
                    <input type="text" name="cpf-evento" id="cpf-evento" value="CPF:" class="left" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" maxlength="12">
                    <div class="radio-buttons">
                        <div class="radio-container">
                            <input type="radio" name="publico" id="aluno-evento">
                            <label for="aluno-evento">Sou aluno</label>
                            <input type="radio" name="publico" id="ex-aluno-evento">
                            <label for="ex-aluno-evento">Ex-aluno</label>
                            <input type="radio" name="publico" id="demais-publico-evento">
                            <label for="demais-publico-evento">Demais público</label>
                        </div>
                    </div>
                    <div class="clear"></div>

                    <input type="text" name="instituicao-evento" id="instituicao-evento" value="Instituição em que trabalha:" class="left" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                    <input type="text" name="cargo-evento" id="cargo-evento" value="Cargo:" class="right" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                    <div class="clear"></div>
                    <input type="text" name="endereco-evento" id="endereco-evento" value="Endereço completo" class="left" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                    <div class="radio-buttons">
                        <div class="radio-container">
                            <span>Deseja solicitar certificado?</span>
                            <input type="radio" name="certificado" id="sim-evento">
                            <label for="sim-evento">Sim</label>
                            <input type="radio" name="certificado" id="nao-evento">
                            <label for="nao-evento">Não</label>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="left">
                        <input type="checkbox" checked name="news-evento" id="news-evento">
                        <label for="news-evento">Sim, desejo receber informações sobre cursos e outros conteúdos de Singularidades</label>
                    </div>
                    <button name="enviar-evento" id="enviar-evento" title="Enviar">Enviar</button>
                </form>
            </div>
            <!--End Form-->
        </div>
        
    </div>
    <!--End of Right-->
    <div class="clear"></div>
    
    <img src="images/internals/banner-vestibular-2014.png">
    
</div>

<?php include "footer.php" ?>
<script type="text/javascript" src="js/internal.js"></script>