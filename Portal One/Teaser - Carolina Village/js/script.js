$(document).ready(function() {

	/*Valida Campos do formulário*/
	$(function() {
		function validaCampos(){ 
			var campos="";
			var conta = 0;
			
			if($('#nome').val()!="") {			      
				conta++;
			}else{
				campos=campos+"- Nome\n";
			}
			    			     			     
            if($('#email').val()!="") {
            
                var filtro_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                
                if(filtro_email.test($('#email').val())){
                    conta++;      
                }else{
                    campos=campos+"- Email Inválido\n";
                }
            }else{
                campos=campos+"- E-mail\n";
            }
            
            if($('#tel').val()!="") {
				conta++;
			}else{
				campos=campos+"- Telefone\n";
			}   

			if($('#msg').val()!="") {
				conta++;
			}else{
				campos=campos+"- Mensagem\n";
			}                    
			if(conta==4){      
				return true;
			}else{
				alert('Preencha os campos:\n'+campos+'');
				return false;
			}
		}
		
		$(document).on('click','#enviar',function(e){
            if(validaCampos()){
				e.preventDefault();
				$('form').submit();
			}  
		});
	
	});
	
});