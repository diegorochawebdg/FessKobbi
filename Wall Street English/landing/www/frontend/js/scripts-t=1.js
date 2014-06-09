$(document).ready(function()
{
    var quest  =
    {
        id_usuario:         0,

        iniciado:           false,
        finalizado:         false,
        salvando_quiz:      false,
        proxima_pergunta:   null,
        pergunta_atual:     0,
        total_perguntas:    0,
        acertos:            0,
        form_data:          {},

        unidade_topo:       $('select.customSelectTopo'),
        unidade:            $('select[name=id_unidade]'),
        horario:            $('select[name=horario]'),

        resultado:          $('.resultado'),
        footer:             $('.footer'),
        pergunta:           $('.pergunta'),
        respondidas:        $('#respondidas'),
        respostas:          $('.respostas'),
        total:              $('#total'),
        loading_final:      $('.finalizar img'),

        up:                 $('.up'),
        down:               $('.down'),

        body:               $("body,html"),
        nome:               $("input#nome"),
        email:              $("input#email"),
        telefone:           $("input#telefone"),
        erro:               $(".erro"),

        ilustra_final:      'estatistico',

        init: function()
        {
            quest.total_perguntas = quest.pergunta.length;
            quest.createFooter();

            $('input[id*=tel], input[id*=cel]').mask("(99) 99999999?9");

            var windowHeight = window.innerHeight ? window.innerHeight : document.documentElement.offsetHeight;
            $('.espaco').height(windowHeight-500);

            $('.confirmar a').click(function(){
                if(!quest.iniciado)
                    quest.validarDados();
            })

            $('.agendar').click(function()
            {
                if($('input[name=data]').val() == 'DATA')
                {
                    alert('Selecione a data de agendamento.');
                    return false;
                }

                $(this).fadeOut();

            });

            if($("a.fancy").length > 0)
            {
                $("a.fancy").fancybox({
                    type: 'iframe',
                    padding: 0,
                    width: 835,
                    height: 580,
                    fitToView: false,
                    autoSize: false
                });
            }

            quest.unidade_topo.customSelect({customClass:'customSelectTopo'});
            quest.horario.customSelect({customClass:'selectHorario'});
            quest.unidade.customSelect();

            var dateToday = new Date();
            $("#datepicker").datepicker({
                dateFormat: 'dd/mm/yy',
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
                dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                nextText: 'Próximo',
                prevText: 'Anterior',
                minDate: '+1d',
                maxDate: '+11d',
                beforeShowDay: $.datepicker.noWeekends
            });

            quest.unidade.change(function()
            {
                var $u = $(this);
                if($u.val() == false)
                    $(".endereco, .horario").slideUp('slow');
                else
                {
                    $(".endereco").slideUp();
                    $("#u"+$u.val()+", .horario").slideDown('slow');
                }
            });

            // captura do teclado
            $(document).keydown(function(e)
            {
                var keyCode = e.keyCode || e.which;

                if(quest.iniciado && (keyCode == 65 || keyCode == 66 || keyCode == 67 || keyCode == 68))
                {
                    var pergunta = quest.perguntaAtual();
                    pergunta.find('.respostas div').removeClass('selecionada');

                    if(keyCode == 65) // A
                    {
                        if(pergunta.find('.respostas div:eq(0)').length == 0)
                            return;

                        pergunta.find('.respostas div:eq(0)').addClass('selecionada');
                    }
                    else if(keyCode == 66) // B
                    {
                        if(pergunta.find('.respostas div:eq(1)').length == 0)
                            return;

                        pergunta.find('.respostas div:eq(1)').addClass('selecionada');
                    }
                    else if(keyCode == 67) // C
                    {
                        if(pergunta.find('.respostas div:eq(2)').length == 0)
                            return;

                        pergunta.find('.respostas div:eq(2)').addClass('selecionada');
                    }
                    else if(keyCode == 68) // D
                    {
                        if(pergunta.find('.respostas div:eq(3)').length == 0)
                            return;

                        pergunta.find('.respostas div:eq(3)').addClass('selecionada');
                    }
                    else
                        return;

                    quest.ativaProxima();
                    quest.marcaFooter();
                }
                else
                {
                    if(keyCode == 13)
                    {
                        $('.confirmar a').trigger('click');
                        return false;
                    }
                }
            });

            quest.respostas.find('div').click(function()
            {
                if(quest.iniciado)
                {
                    var opcao = $(this);
                    var pergunta = opcao.parent().parent();

                    if(!pergunta.hasClass('transparente'))
                    {
                        pergunta.find('.respostas div').removeClass('selecionada');
                        opcao.addClass('selecionada');
                    }

                    quest.ativaProxima();
                    quest.marcaFooter();
                }
            });

            quest.up.click(function()
            {
                quest.ativaAnterior();
            });

            quest.down.click(function()
            {
                quest.ativaProxima();
            });

            var lastScrollTop = 0;
            $(window).scroll(function()
            {
                if(!quest.finalizado && quest.iniciado)
                {
                    var top_distance = $(this).scrollTop();
                    lastScrollTop = top_distance;

                    quest.pergunta.each(function(i)
                    {
                        var p = $(this);
                        var offset = p.offset();
                        var ofwin = (offset.top - 20) - top_distance;

                        if(ofwin < 250 && ofwin > -100)
                        {
                            $(".pergunta").addClass('transparente');
                            p.removeClass('transparente');

                            //quest.footer.find('li').removeClass('ativo');
                            //quest.footer.find('li:eq('+i+')').addClass('ativo');
                        }
                    });
                }
            });

            quest.footer.find('ul li').click(function(){
                 quest.ativarPergunta($(this).index());
            });

        },
        ativaProxima: function()
        {
            if(!quest.finalizado)
            {
                /*
                quest.setProximaPergunta();
                var index = quest.proxima_pergunta.index('.pergunta');
                if($('.pergunta').eq(index))
                    quest.ativarPergunta(index);
                */

                quest.setProximaPergunta();
                if(quest.proxima_pergunta == false)
                {
                    quest.finalizar();
                    return false;
                }

                var index = quest.perguntaAtual().index('.pergunta')+1;
                if($('.pergunta').eq(index))
                    quest.ativarPergunta(index);
            }
        },
        ativaAnterior: function()
        {
            if(!quest.finalizado)
            {
                var index = quest.perguntaAtual().index('.pergunta')-1;
                if($('.pergunta').eq(index))
                    quest.ativarPergunta(index);
            }
        },
        perguntaAtual: function()
        {
            return quest.pergunta.not('.transparente');
        },
        validarDados: function()
        {
            quest.erro.slideUp('nomal', function()
            {
                quest.erro.text('');
                var email_reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                if(quest.nome.val() == '')
                    quest.erro.text('Preencha seu nome.');
                else if(quest.email.val() == '')
                    quest.erro.text('Preencha seu email.');
                else if(!email_reg.test(quest.email.val()))
                    quest.erro.text('Email inválido.');
                else if(quest.telefone.val() == '')
                    quest.erro.text('Preencha seu telefone.');
                else if(quest.unidade_topo.val() == '')
                    quest.erro.text('Selecione a unidade mais próxima.');
                else
                {
                    quest.unidade.val(quest.unidade_topo.val());
                    var texto = $("select.customSelectTopo option[value='"+quest.unidade_topo.val()+"']").text();
                    $('.customSelect .customSelectInner').text(texto);
                    $(".endereco").slideUp();
                    $("#u"+quest.unidade_topo.val()+", .horario").slideDown('slow');


                    $("#loading1").fadeIn();

                    $.ajax({
                        type: 'POST',
                        url: baseUrl+'/site/ajaxUsuario',
                        data: 'nome='+quest.nome.val()+'&email='+quest.email.val()+'&telefone='+quest.telefone.val()+'&id_unidade='+quest.unidade_topo.val(),
                        success: function(data)
                        {
                            if(data != 'erro')
                            {
                                $("#loading1").fadeOut('normal', function(){
                                    quest.primeiraPergunta();
                                });

                                quest.id_usuario = data;
                            }
                            else
                            {
                                alert('Erro. Por favor tente novamente em alguns minutos.')
                            }
                        }
                    });
                }
                quest.erro.slideDown();
            });
        },
        primeiraPergunta: function()
        {
            var offset = $('.sep:eq(0)').offset();

            $('.pergunta:eq('+quest.pergunta_atual+'), .topo').removeClass('transparente');
            $('.finalizar').show();

            quest.animateBody(offset.top);
            quest.footer.fadeIn();
            quest.iniciado = true;
        },
        setProximaPergunta: function()
        {
            quest.proxima_pergunta = false;
            quest.pergunta.each(function()
            {
                var p = $(this);
                if(p.find('.respostas div.selecionada').length == 0)
                {
                    quest.proxima_pergunta = p;
                    return false;
                }
            });
        },
        proximaPergunta: function()
        {
            if(!quest.finalizado)
            {
                quest.setProximaPergunta();
                var pergunta = quest.proxima_pergunta;

                if(pergunta !== false)
                {
                    var offset = pergunta.offset();
                    quest.animateBody((offset.top-20));
                    quest.marcaFooter();
                }
                else
                {
                    quest.finalizar();
                }
            }
        },
        ativarPergunta: function(index)
        {
            var pergunta = $('.pergunta:eq('+index+')');
            if(pergunta.length == 1)
            {
                var offset = pergunta.offset();
                quest.animateBody((offset.top-20));
            }
        },
        finalizar: function()
        {
            quest.ultimaQuestao();
            quest.marcaFooter();

            quest.finalizado = true;
            quest.loading_final.fadeIn();

            // insere as respostas selecionadas
            quest.pergunta.each(function(i){
                var selecionada = $(this).find('.selecionada');
                if(selecionada)
                    quest.form_data[i] = selecionada.attr('data-id');
            });

            if(!quest.salvando_quiz)
            {
                quest.salvando_quiz = true;

                $.ajax({
                    type: 'POST',
                    url: baseUrl+'/site/ajaxQuiz',
                    data: 'id='+quest.id_usuario+'&data='+JSON.stringify(quest.form_data),
                    success: function(data)
                    {
                        var obj = jQuery.parseJSON(data);
                        if(obj.msg != 'ok')
                        {
                            alert('Erro. Por favor tente novamente em alguns minutos.')
                            quest.finalizado = false;
                            quest.loading_final.fadeOut();
                            quest.salvando_quiz = false;
                            return false;
                        }
                        else
                        {
                            quest.acertos = obj.acertos;
                            var porentagem = parseInt((quest.acertos/10)*100);
                            $('#porcentagem').text(porentagem+'%');

                            $('.setas').fadeOut();
                            $('.espaco').slideUp();
                            $('.pergunta').addClass('transparente');
                            $('input[name=id_usuario]').val(quest.id_usuario);
                            quest.resultado.slideDown();

                            var offset = quest.resultado.offset();
                            quest.animateBody(offset.top);
                        }
                    }
                });
            }
        },
        animateBody: function(offset)
        {
            quest.body.stop(true,true).animate({scrollTop:offset}, '500');
        },
        marcaFooter: function()
        {
            var respondidas = 0;
            $('.container:eq(1) .pergunta').each(function(i)
            {
                var p = $(this);
                if(p.find('.respostas div.selecionada').length == 1)
                {
                    quest.footer.find('li:eq('+i+')').addClass('ativo');
                    respondidas += 1;
                }

            });

            quest.respondidas.text(respondidas);

        },
        createFooter: function()
        {
            var bullets = '';
            var ul = quest.footer.find('ul');

            quest.total_perguntas = 10;
            quest.total.text(quest.total_perguntas);

            for(var i = 0; i < quest.total_perguntas; i++)
                bullets+='<li></li>';

            ul.html(bullets);

            var width = parseInt(ul.find('li:eq(0)').outerWidth()) * quest.total_perguntas;
            var margem = ($('.container').width() - width) / 2;

            ul.css({
                'margin-left': margem
            });
        },
        ultimaQuestao: function()
        {
            var id = quest.pergunta.last().find('.respostas div.selecionada').attr('data-id');

            var classe = '';
            if(id == 45)
                classe = 'ocupado';
            else if(id == 46)
                classe = 'carente';
            else
                classe = 'estatistico';

            $('.info.'+classe).show();
        }
    }

    quest.init();

});