/**
 * Se verifica si hay agentes disponibles, si no hay se oculta el chat.
 */

function verificarAgentesLiveChat() {
	
	  		var prot = window.location.protocol;
	  		var host = window.location.host;
			var rutaServletChat=prot+'//'+host+'/retail/verificarAgentesChatServlet'
	
	  		$.ajax({
			  type: 'GET',
			  url: rutaServletChat,
			  data: {"xSector":xSector},		 
			  success:function(data){
			    if (data.retCode === 'success'){
			    	//console.log(data.AGENTES);
					if(data.AGENTES > 0 && data.SECTOR === xSector){
					  $("head").append('<script src="https://www.lacaja.com.ar/lacaja-gcti-chat-widget/genesys-webchat.jquery.min-lacaja.js"></scr' + 'ipt>');
					  $("head").append('<script src="https://www.lacaja.com.ar/lacaja-gcti-chat-widget/genesys-webchat.options.js"></scr' + 'ipt>')
							.append(function() {
									//$("#floating_chat_button img").attr("src","/retail/common/assets/images/chat-button.png");
									$("#floating_chat_button img").attr("src","/retail/common/assets/images/goto-chat.svg");
							});
					  $("#linkwhatsapp").css('display', 'block');
				  }
				  //$("#floating_chat_button img").attr("src","/retail/common/assets/images/chat-button.png");
				}
			  }
			});
	}


/**
 * Se define el canal correspondiente a la pantalla actual.
 */

	if (xSector==null||xSector==""){
			
			xSector="TMKIN";
		}
		$(function(){
		window.oChatOptions = {	
			i18n_lang: "es",
			userData: {
              xSECTOR: xSector
			}
      };
	});
		
		
/**
 * Cuando se hace click en la imagen del chat se muestran los inputs de Nombre, Apellido y Mail.
 */
		
if('<%= session.getAttribute(Constants.USUARIO) %>' != null && '<%= ((Usuario) session.getAttribute(Constants.USUARIO)).isAutenticado() %>'){

		$( document ).ready(function() {
		    	$("#floating_chat_button").click(function(){
				$('input[name="firstname"]').val('<%=((Usuario) session.getAttribute(Constants.USUARIO)).getNombres()%>').attr('readonly', true);
				$('input[name="lastname"]').val('<%=((Usuario) session.getAttribute(Constants.USUARIO)).getApellido()%>').attr('readonly', true);
				$('input[name="email"]').val('<%=((Usuario) session.getAttribute(Constants.USUARIO)).getEmail()%>').attr('readonly', true);});
		});

}