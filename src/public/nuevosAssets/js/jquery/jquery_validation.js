/***************************/
//@Author: Adrian "yEnS" Mato Gondelle & Ivan Guardado Castro
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

$(document).ready(function(){
	//global vars
	var form = $("#formulario");
	var name = $("#name");
	var username = $("#username");
	var usernameInfo = $("#usernameInfo");
	var nameInfo = $("#nameInfo");
	var email = $("#email");
	var emailInfo = $("#emailInfo");
	var emailCambio1 = $("#emailCambio1");
	var emailCambio1Info = $("#emailCambio1Info");
	var emailCambio2 = $("#emailCambio2");
	var emailCambio2Info = $("#emailCambio2Info");
	var emailNuevo = $("#emailNuevo");
	var emailNuevoInfo = $("#emailNuevoInfo");
	var password = $("#password");
	var passwordInfo = $("#passwordInfo");
	var pass1 = $("#pass1");
	var pass1Info = $("#pass1Info");
	var pass2 = $("#pass2");
	var pass2Info = $("#pass2Info");
	var message = $("#message");
	
	var tipoDocumento = $("#tipoDocumento");
	var numeroDocumento = $("#numeroDocumento");
	var documentoInfo = $("#documentoInfo");
	
	var codigoPostal = $("#codigoPostal");
	var codigoPostalInfo = $("#codigoPostalInfo");
	
	var formaPago = $("#formaPago");
	var formaPagoInfo = $("#formaPagoInfo");
	
	var numeroPoliza = $("#numeroPoliza");
	var numeroPolizaInfo = $("#numeroPolizaInfo");
	
	var numeroPolizaSola = $("#numeroPolizaSola");
	var numeroPolizaSolaInfo = $("#numeroPolizaSolaInfo");
	
	var apellido = $("#apellido");
	var apellidoInfo = $("#apellidoInfo");
	
	var domicilio = $("#domicilio");
	var domicilioInfo = $("#domicilioInfo");
	
	var numero = $("#numero");
	var numeroInfo = $("#numeroInfo");
	
	var localidad = $("#localidad");
	var localidadInfo = $("#localidadInfo");
	
	var localidadSelect = $("#localidadSelect");
	var localidadSelectInfo = $("#localidadSelectInfo");
	
	var provincia = $("#provincia");
	var provinciaInfo = $("#provinciaInfo");
	
	var prefijo = $("#prefijo");
	var telefono = $("#telefono");
	var tipoTelefono = $("#tipoTelefono");
	var telefonoInfo = $("#telefonoInfo");
	var telefonoOpcional = $("#telefonoOpcional");
	var prefijoOpcional = $("#prefijoOpcional");
	var tipoTelefonoOpcional = $("#tipoTelefonoOpcional");
	var otroPrefijo = $("#otroPrefijo");
	var otroTelefono = $("#otroTelefono");
	var prefijo15= $("#prefijo15")
	
	var dia = $("#dia");
	var mes = $("#mes");
	var anio = $("#anio");
	var fechaInfo = $("#fechaInfo");
	
	/**
	 * Fecha actual
	 */
	var currentDate = new Date();
	/**
	 * Ultimo resultado de la validaci\ufffdn respectiva.
	 */
	var diaValido = !(dia == null || dia.val() == null || dia.val().length != 2);
	/**
	 * Ultimo resultado de la validaci\ufffdn respectiva.
	 */
	var mesValido = !(mes.val() == -9);
	/**
	 * Ultimo resultado de la validaci\ufffdn respectiva.
	 */
	var anioValido = !(dia == null || dia.val() == null || dia.val().length != 4);
	/**
	 * Indica si el onBlur del mes debe validar, o si ya lo hizo el onChange.
	 */
	
	var radioPolizas = document.getElementsByName('polizaNumero');
	var motivoPregunta = document.getElementsByName('motivoPregunta');
	var validPolizasInfo = $("#validacionesInfo");
	var validPolizasP = $("#validacionesP");
	
	var radiobutton = document.getElementsByName('radiobutton');
	var radioInfo = $("#radioInfo");
	
	var cbu = $("#cbu");
	var cbuInfo = $("#cbuInfo");
	
	var numeroTarjCredito = $("#numeroTarjCredito");
	var tarjCreditoInfo =$("#tarjCreditoInfo");
	
	var patente = $("#patente");
	var patenteInfo = $("#patenteInfo");
	
	//On Focus (chris added)
	name.focus(changestyleName);
	email.focus(changestyleEmail);
	emailCambio1.focus(changestyleEmailCambio1);
	emailCambio2.focus(changestyleEmailCambio2);
	emailNuevo.focus(changestyleEmailNuevo);
	username.focus(changestyleUsername);
	password.focus(changestylePassword);
	pass1.focus(changestylePass1);
	pass2.focus(changestylePass2);
	tipoDocumento.focus(changestyleTipoDocumento);
	numeroDocumento.focus(changestyleDocumento);
	codigoPostal.focus(changestyleCP);
	formaPago.focus(changestyleFormaPago);
	numeroPoliza.focus(changestyleNumeroPoliza);
	numeroPolizaSola.focus(changestyleNumeroPolizaSola);
	apellido.focus(changestyleApellido);
	dia.focus(changestyleDia);
	mes.focus(changestyleMes);
	anio.focus(changestyleAnio);
	domicilio.focus(changestyleDomicilio);
	numero.focus(changestyleNumero);
	prefijo.focus(changestylePrefijo);
	otroPrefijo.focus(changestyleOtroPrefijo);
	prefijo15.focus(changestylePrefijo15);

	prefijoOpcional.focus(changestylePrefijoOpcional);
	
	
	telefono.focus(changestyleNumeroTelefono);
	otroTelefono.focus(changestyleNumeroOtroTelefono);	
    telefonoOpcional.focus(changestyleNumeroTelefonoOpcional);	
	tipoTelefono.focus(changestyleTipoTelefono);
    tipoTelefonoOpcional.focus(changestyleTipoTelefonoOpcional);
	localidad.focus(changestyleLocalidad);
	localidadSelect.focus(changestyleLocalidadSelect);
	provincia.focus(changestyleProvincia);
	cbu.focus(changestyleCbu);
	numeroTarjCredito.focus(changestyleNumeroTarjCredito);
	patente.focus(changestylePatente);
	$('#eCalle1').focus(changestyleEntreCalle1);
	$('#eCalle2').focus(changestyleEntreCalle2);
	$('#ciudad').focus(changestyleCiudad);
	$('#asunto').focus(startstyle($('#asunto'), $('#asuntoInfo'), ""));
	$('#comentarios').focus(startstyle($('#comentarios'), $('#comentariosInfo'), ""));
	
	//On blur
	name.blur(validateName);
	email.blur(validateEmail);
	emailCambio1.blur(validateEmailCambio1);
	emailCambio2.blur(validateEmailCambio2);
	emailNuevo.blur(validateEmailNuevo);
	username.blur(validateUsername);
	password.blur(validatePassword);
	pass1.blur(validatePass1);
	pass2.blur(validatePass2);
	tipoDocumento.blur(removeSelectedTipoDocumento);
	numeroDocumento.blur(validateDocumento);
	codigoPostal.blur(validateCP);
	formaPago.blur(removeSelectedFormaPago);
	numeroPoliza.blur(validateNumeroPoliza);
	numeroPolizaSola.blur(validateSoloPoliza);
	apellido.blur(validateApellido);
	dia.blur(validateDia);
	mes.blur(removeSelectedMes);
	anio.blur(validateAnio);
	domicilio.blur(validateDomicilio);
	numero.blur(validateNumero);
	prefijo.blur(validatePrefijo);
	otroPrefijo.blur(validateOtroPrefijo);
	telefono.blur(validateNumeroTelefono);
	otroTelefono.blur(validateNumeroOtroTelefono);
	prefijo15.blur(validatePrefijo15);
    prefijoOpcional.blur(validatePrefijoOpcional);
	telefonoOpcional.blur(validateNumeroTelefonoOpcional);
	tipoTelefono.blur(validateTelefono);
	localidad.blur(validateLocalidad);
	localidadSelect.blur(validateLocalidadSelect);
	provincia.blur(validateProvincia);
	cbu.blur(validateCbu);
	numeroTarjCredito.blur(validateNumeroTarjCredito);
	patente.blur(validatePatente);
	$('#eCalle1').blur(validateEntreCalle1);
	$('#eCalle2').blur(validateEntreCalle2);
	$('#ciudad').blur(validateCiudad);
	$('#asunto').blur(validateAsunto);
	$('#comentarios').blur(validateComentarios);	
	//On Change (combos)
	tipoDocumento.change(validateTipoDocumento);
	formaPago.change(validateFormaPago);
	mes.change(validateMes);
	provincia.change(validateProvincia);
	tipoTelefono.change(validateTelefono);
	tipoTelefonoOpcional.change(validateTelefonoOpcional);	
	//changestyle invocados al inicio
	changestyleFecha();
	changestyleTelefono();
	changestyleOtroTelefono();
    changestyleTelefonoOpcional();
	startstyle(null, validPolizasInfo, "");
	startstyle(cbu, cbuInfo, "Complet\u00e1 sin guiones, puntos, ni espacios.");
	startstyle(numeroTarjCredito, tarjCreditoInfo, "Complet\u00e1 sin guiones, puntos, ni espacios.");
	startstyle(patente, patenteInfo, "( 6 o 7 d\u00edgitos) seg\u00fan a\u00f1o de fabricaci\u00f3n");
	//startstyle(codigoPostal, codigoPostalInfo, "Ingres\u00e1 s\u00f3lo los 4 d\u00edgitos num\u00e9ricos.");
	
	/*** * * * * * * * * * * * * * * * * * * * * *
	 * OnClick botones de Submit con validaci\ufffdn  *
	 * * * * * * * * * * * * * * * * * * * * * * *
	 * 
	 * IMPORTANTE:
	 * 		Validar en orden seg\ufffdn la posici\ufffdn
	 * 	en el formulario.
	 **/
	
	$("[name=submitter]").click(function() { 
		var action = $(this).find("input").attr('name');
		var salida = false;
		
		if  (action == 'LoginPocSubmitear') {
			if(validateEmail() & validatePassword()){
				salida = true;
			}
		} else if  (action == 'LoginPocCrearCuenta') {
			if(validateDocumento()
					& validateNumeroPoliza()
					& validateFormaPago()
					& validateCP()) {
				if(tipoDocumento.val() == 'CUIT' || validateFecha())
					salida = true;
			}
		} else if (action == 'LoginPocCrearSiguiente') {
			actionTempAJAX = action;
			if(validateEmailNuevo()
					& validatePass1()
					& validatePass2()) {
				validarImagen();
			}
		} else if  (action == 'ActualizaTelefonos') {
			if( validacionCamposObligatorios() & validarMinimoCaracteres() & validateTelefono()
					& validateOtroTelefono()
					) {
				salida = true;
			}
		} else if (action == 'PocRecuperarPwd') {
			actionTempAJAX = action;
			if(validateEmail())
				validarImagen();
		} else if (action == 'CambioClaveSubmitear' || action == 'CambioClaveExpiro') {
			if(validatePassword()
					& validatePass1()
					& validatePass2()) {
				salida = true;
			}
			
		} else if (action == 'ValidaGuardaMail') {
			//if(validateEmailCambio1() && validateEmailCambio2()) {
				salida = true;
			//}
		} else if (action == 'CambioDomicilioDomicilioMail') {
			if(validateNumeroPoliza()
					& validateDomicilio()
					& validateNumero()
					& validateCP()
					& validateLocalidadSelect()
					& validateProvincia()
					& validateTelefono()) {
				salida = true;
			}
		} else if (action == 'CambioDomicilioReimpresionMail') {
			if (validateDomicilio()
					& validateNumero()
					& validateCP()
					& validateLocalidad()
					& validateProvincia()
					& validateTelefono()) {
				salida = true;
				submitPopup(action);
				action = 'PocHomeInput';
			}
		} else if (action == 'CambioDomicilioCuponMail') {
			if (validateDomicilio()
					& validateNumero()
					& validateCP()
					& validateLocalidad()
					& validateProvincia()
					& validateTelefono()) {
				salida = true;
				action = 'ImprimePolizaConfirmacion';
				submitPopup(action);
				action = 'PocHomeInput';
			}
		}else if (action == 'AdhesionDebitoAutMail') {
			if(validateTipoPago()) {// && validatePassword()
				if(getRadioCheckedValue(radiobutton) == "debito" && validateCbu()
						|| getRadioCheckedValue(radiobutton) == "credito" && validateNumeroTarjCredito())
					salida = true;
			}
		} else if (action == 'EndosoPatenteMail') {
			if(validatePatente())
				salida = true;
		} else if (action == 'AutosVigentesFuturos') {
			if (validatePolizasRadio()
					&& validateEncuestaRadio()) {
				salida = true;
				if (getRadioCheckedValue(motivoPregunta) != '23') {
					submitPopup1(action);
					action = 'PocHomeInput';
				}
			}
		} else if (action == 'ImprimePolizaConfirmacion') {
			if (validatePolizasRadio()
					&& validateEncuestaRadio()) {
				salida = true;
				if (getRadioCheckedValue(motivoPregunta) != '23') {
					submitPopup1(action);
					action = 'PocHomeInput';
				}else{
					action = 'AutosVigentesFuturos_old';
				}
			}
		}else if (action == 'ContinuarImpresion') {
				salida = false;
				action = 'ImprimePolizaConfirmacion';
				submitPopup1(action);
				//action = 'PocHomeInput';
		}else if (action == 'DispatchGuardaDomicilio') {
			if(validateDomicilio()
					& validateNumero()
					& validateEntreCalle1()
					& validateEntreCalle2()
					& validateCP()
					& validateCiudad())
				salida = true;
		} else if (action == 'DispatchSelectDia') {
			if(validateEntreCalle1()
					& validateEntreCalle2())
				salida = true;
		} else if (action == 'ContactoPoc') {
			actionTempAJAX = action;
			if(validateAsunto()
					& validateComentarios()) {
				validarImagen();
			}
		//	Requerimiento 188704 - Suscribe/desuscribe documentacion electronica.
		} else if (action == 'SuscribeCliente') {			
			var checked = document.getElementById('aceptaCondiciones').checked;
			if(checked) {
				salida = true;
			}else{
				alert("Debe aceptar las condiciones.");
			}
		}else if (action == 'DesuscribeCliente') {			
			salida = true;
		}else if (action == 'VerificarCliente') {
			if(validateDocumento()
					& validateFecha()
				    & validateCP())
				salida = true;
		}else if (action == 'CambioDomicilioRetailModif') {			
				salida = true;
		}else if (action == 'CambioDomicilioPostal') {	
			if (validateDomicilio()
					& validateNumero()
					& validateCP()
					& validateLocalidadSelect()
					& validateProvincia()
					) {
						salida = true;
				}
		}	
		else if (action == 'Agenda') {
			salida = true;

		}
		//	Requerimiento 188704 - Suscribe/desuscribe documentacion electronica.
		if (salida){
			document.getElementById('loader').style.display='block';
			doSubmit(action);
		}else
			return false;				
	});
	
	/*Abre en nueva pestania*/
//	$("[name=popupper]").click(function() { 
//		var action = $(this).find("input").attr('name');
//		var salida = false;
//		
//		if (salida)
//			submitPopup(action);
//		else
//			return false;				
//	});
	/**
	 *	AJAX para verificaci\ufffdn del kaptcha
	 **/

	var actionTempAJAX;
	
	function actualizar(){
		var el =document.getElementById('imgKaptcha');
		var randomnumber=Math.floor(Math.random()*11);
		var prot = window.location.protocol;
		var host = window.location.host;
	    el.src = prot+"//"+host+"/retail/Kaptcha.jpg?"+randomnumber;
		return false;
	}
	
	var imgReq = createXMLHttpRequest();
	function validarImagen(){
		var prot = window.location.protocol;
		var host = window.location.host;
		imgReq.open("POST", prot+"//"+host+"/retail/VerificarCaptchaServlet?codigo="+document.getElementById('codigo').value,true);
		imgReq.onreadystatechange = onAJAXResponseImg;
		imgReq.setRequestHeader( "If-Modified-Since", "Sat, 1 Jan 2000 00:00:00 GMT" );
		imgReq.send(null);
	}
	
	function onAJAXResponseImg(){
		if (imgReq.readyState != 4) {
				return;
		}
		var serverResponse = imgReq.responseText;
		var XmlDoc = loadXMLString(serverResponse);
		if (XmlDoc != null) {
			var lNodos = XmlDoc.getElementsByTagName("reg");
		}
		var auxNodo = lNodos[0];
		if (auxNodo.attributes[1].value == 'ok'){
			$("#formulario").attr("action", actionTempAJAX + ".action");
			$("#formulario").submit();
		} else {
			actionTempAJAX = null;
			actualizar();
			alert('El c\u00f3digo ingresado no coincide con la imagen verificadora');
		}
	}
	
	/**
	 * Style-changers para onFocus
	 */

	function startstyle(campo, mensaje, texto) {
		if(campo != null) {
			campo.removeClass("selected");
			campo.removeClass("error2");
		}
		if (mensaje != null) {
			mensaje.removeClass("error2");
			mensaje.removeClass("explanation");
			mensaje.addClass("plainText");
			mensaje.text(texto);
		}
	}
	function changestyle(campo, mensaje, texto) {
		if (campo != null) {
			campo.addClass("selected");
			campo.removeClass("error2");
		}
		mensaje.removeClass("error2");
		mensaje.addClass("explanation");
		mensaje.text(texto);
	}
	function changestyleName(){
		changestyle(name, nameInfo, "Ingres\u00e1 tu Nombre completo.");
	}
	function changestyleApellido(){
		changestyle(apellido, apellidoInfo, "Ingres\u00e1 tu Apellido.");
	}
	function changestyleEmail(){
		changestyle(email, emailInfo, "Ingres\u00e1 tu direcci\u00f3n de correo electr\u00f3nico.");
	}
	function changestyleEmailCambio1(){
		changestyle(emailCambio1, emailCambio1Info, "Ingres\u00e1 tu nueva direcci\u00f3n de correo electr\u00f3nico.");
	}
	function changestyleEmailCambio2(){
		if(validateEmailCambio1())
			changestyle(emailCambio2, emailCambio2Info, "Volv\u00e9 a ingresar tu nueva direcci\u00f3n de correo electr\u00f3nico.");
		else
			emailCambio1.focus();
	}
	function changestyleEmailNuevo(){
		changestyle(emailNuevo, emailNuevoInfo, "La direcci\u00f3n de correo electr\u00f3nico que ingreses pasar\u00e1 a ser tu nombre de usuario." +
				" Si es distinta a la que ten\u00e9s declarada ante La Caja, \u00e9sta ser\u00e1 reemplazada por la nueva que ingreses.");
	}
	function changestyleUsername(){
		changestyle(username, usernameInfo, "Ingres\u00e1 tu Nombre de Usuario.");
	}	
	function changestylePassword(){
		changestyle(password, passwordInfo, "Ingres\u00e1 tu Clave.");
	}	
	function changestylePass1(){
		changestyle(pass1, pass1Info, "La Clave debe ser alfanum\u00e9rica y tener 8 caracteres como m\u00ednimo.");
	}	
	function changestylePass2(){
		if(validatePass1())
			changestyle(pass2, pass2Info, "Volv\u00e9 a ingresar tu nueva Clave...");
	}
	function changestyleTipoDocumento(){
		changestyle(tipoDocumento, documentoInfo, "Seleccion\u00e1 un Tipo de Documento.");
	}
	function changestyleDocumento(){
		if(validateTipoDocumento())
			changestyle(numeroDocumento, documentoInfo, "Complet\u00e1 sin guiones, puntos, ni espacios.");
		else
			tipoDocumento.focus();
	}
	
	function changestyleCP(){
		changestyle(codigoPostal, codigoPostalInfo, "Ingres\u00e1 s\u00f3lo los cuatro d\u00edgitos num\u00e9ricos.");
	}
	
	function changestyleNumeroPoliza(){
		changestyle(numeroPoliza, numeroPolizaInfo, "Complet\u00e1 sin guiones, puntos, ni espacios.");
	}
	
	function changestyleNumeroPolizaSola(){
		changestyle(numeroPolizaSola, numeroPolizaSolaInfo, "Complet\u00e1 sin guiones, puntos, ni espacios.");
	}
	
	function changestyleFormaPago(){
		changestyle(formaPago, formaPagoInfo, "Seleccion\u00e1 la Forma de Pago de la P\u00f3liza.");
	}
	
	function changestyleDia(){
		changestyle(dia, fechaInfo, "Ingres\u00e1 los dos d\u00edgitos del d\u00eda.");
	}
	function changestyleMes(){
		changestyle(mes, fechaInfo, "Seleccion\u00e1 el mes.");
	}
	function changestyleAnio(){
		changestyle(anio, fechaInfo, "Ingres\u00e1 los cuatro d\u00edgitos del A\u00f1o.");
	}
	
	function changestyleFecha(){
		dia.removeClass("selected");
		dia.removeClass("error2");
		mes.removeClass("selected");
		anio.removeClass("selected");
		anio.removeClass("error2");
		fechaInfo.removeClass("error2");
		fechaInfo.removeClass("explanation");
		fechaInfo.addClass("plainText");
		fechaInfo.text("(dd/mm/aaaa)");
	}
	
	function changestyleDomicilio(){
		changestyle(domicilio, domicilioInfo, "Ingres\u00e1 el nombre de la calle.");
	}
	
	function changestyleNumero(){
		changestyle(numero, numeroInfo, "Ingres\u00e1 la numeraci\u00f3n de tu domicilio.");
	}
	function changestylePrefijo(){
		changestyle(prefijo, telefonoInfo, 'Digite o prefixo.');
	}
	function changestyleOtroPrefijo(){
		changestyle(otroPrefijo, telefonoInfo, 'Digite o prefixo.');
	}
	 function changestylePrefijoOpcional(){
		changestyle(prefijoOpcional, telefonoInfo, 'Digite o prefixo. Se for apenas 2 d\u00EDgitos, voc\u00EA deve prefixar o "0".');
	}
	 
	 function changestylePrefijo15(){
			changestyle(prefijo15, telefonoInfo, "");
		}
	 
	function changestyleNumeroTelefono(){
		changestyle(telefono, telefonoInfo, "Digite o n\u00FAmero do telefone.");
	}
	function changestyleNumeroOtroTelefono(){
		changestyle(otroTelefono, telefonoInfo, "Digite o n\u00FAmero do telefone.");
	}

    function changestyleNumeroTelefonoOpcional(){
		changestyle(telefonoOpcional, telefonoInfo, "Digite o n\u00FAmero do telefone.");
	}

	function changestyleTipoTelefono(){
		changestyle(tipoTelefono, telefonoInfo, "Seleccion\u00e1 el uso.");
	}
   function changestyleTipoTelefonoOpcional(){
		changestyle(tipoTelefonoOpcional, telefonoInfo, "Seleccion\u00e1 el uso.");
	}
	
	function changestyleTelefono(){
		prefijo.removeClass("selected");
		prefijo.removeClass("error2");
		telefono.removeClass("selected");
		telefono.removeClass("error2");
		tipoTelefono.removeClass("selected");
		telefonoInfo.removeClass("error2");
		telefonoInfo.removeClass("explanation");
		telefonoInfo.addClass("plainText");
		telefonoInfo.text("");
	}
	function changestyleOtroTelefono(){
		otroPrefijo.removeClass("selected");
		otroPrefijo.removeClass("error2");
		otroTelefono.removeClass("selected");
		otroTelefono.removeClass("error2");
		tipoTelefono.removeClass("selected");
		telefonoInfo.removeClass("error2");
		telefonoInfo.removeClass("explanation");
		telefonoInfo.addClass("plainText");
		telefonoInfo.text("");
	}
    function changestyleTelefonoOpcional(){
		prefijoOpcional.removeClass("selected");
		prefijoOpcional.removeClass("error2");
		telefonoOpcional.removeClass("selected");
		telefonoOpcional.removeClass("error2");
		tipoTelefonoOpcional.removeClass("selected");
		tipoTelefonoOpcional.removeClass("error2");
		telefonoInfo.removeClass("error2");
		telefonoInfo.removeClass("explanation");
		telefonoInfo.addClass("plainText");
		telefonoInfo.text("");
	}

	function changestyleLocalidad(){
		changestyle(localidad, localidadInfo, "Seleccion\u00e1 la Localidad.");
	}
	
	function changestyleLocalidadSelect(){
		if(validateCP())
			changestyle(localidadSelect, localidadSelectInfo, "Seleccion\u00e1 la Localidad.");
		else
			codigoPostal.focus();
	}
	
	function changestyleProvincia() {
		changestyle(provincia, provinciaInfo, "Seleccion\u00e1 la Provincia o Ciudad.");
	}
	
	function changestyleValidPolizas() {
		validPolizasP.hide();
		changestyle(null, validPolizasInfo, "");
	}
	
	function changestyleCbu() {
		changestyle(cbu, cbuInfo, "Ingres\u00e1 tu CBU.");
	}
	
	function changestyleNumeroTarjCredito() {
		changestyle(numeroTarjCredito, tarjCreditoInfo, "Ingres\u00e1 el n\u00famero de la tarjeta de cr\u00e9dito.");
	}
	
	function changestylePatente() {
		changestyle(patente, patenteInfo, "Ingres\u00e1 la patente.");
	}
	function changestyleEntreCalle1() {
		changestyle($('#eCalle1'),$('#eCalle1Info'), 'Ingres\u00e1 el nombre de la calle que cruza a la calle en la que viv\u00eds.');
	}
	function changestyleEntreCalle2() {
		changestyle($('#eCalle2'),$('#eCalle2Info'), 'Ingres\u00e1 el nombre de la otra calle que cruza a la calle en la que viv\u00eds.');
	}
	function changestyleCiudad() {
		changestyle($('#ciudad'),$('#ciudadInfo'), 'Seleccion\u00e1 la Localidad.');
	}
/*	
$("#formulario").submit(function() {
		var salida;
		var action = $("#action").val();
		if  (action == 'LoginPocSubmitear'){
			if(validateEmail() & validatePass1())
				salida = true;
			else
				salida = false;
		}
		
		return salida;		
	});


form.submit(function(){
		if(validateName() & validateEmail() & validatePass1()  & validateUsername())
			return true;
		else
			return false;
	});
	*/
	
	/**
	 * Devuelve <code>true</code> si se seleccion\ufffd un valor<br>
	 * y <code>false</code> si no eligi\ufffd ninguno.
	 */
	function esComboSeleccionado(combo) {
		if (combo.val() != -9)
			return true;
		return false;
	}

	function esAnioBisiesto() {
		var anioInt = parseInt(anio.val(), 10);
		return (anioInt % 4 == 0) && ((anioInt % 100 != 0) || (anioInt % 400 == 0));
	}
	
	/**
	 * Validators para onBlur y onChange(combo)
	 **/
	
	function validateNotNull(campo, mensaje, texto){
		campo.removeClass("selected");
		mensaje.removeClass("explanation");
		//if it's NOT valid
		if(campo == null || campo.val() == null || campo.val().length < 1){
			campo.addClass("error2");
			mensaje.addClass("error2");
			mensaje.text(texto);
			return false;
		}
		//if it's valid
		else{
			campo.removeClass("error2");
			mensaje.removeClass("error2");
			mensaje.text("");
			return true;
		}
	}
	
	function validateNumber(campo, mensaje, texto){
		campo.removeClass("selected");
		mensaje.removeClass("explanation");
		//if it's NOT valid
		if(campo == null || campo.val() == null || campo.val().length < 1){
			campo.addClass("error2");
			mensaje.addClass("error2");
			mensaje.text(texto);
			return false;
		}
		
		if(!/^([0-9])*$/.test(campo.val())) {
			campo.addClass("error2");
			mensaje.addClass("error2");
			mensaje.text("Ingres\u00e1 s\u00f3lo n\u00fameros.");
			return false;
		}
		//if it's valid
		else{
			campo.removeClass("error2");
			mensaje.removeClass("error2");
			mensaje.text("");
			return true;
		}
	}
	
	function validateComboSeleccionado(campo, mensaje, texto){
		campo.removeClass("selected");	
		mensaje.removeClass("explanation");
		if(esComboSeleccionado(campo)) {
			mensaje.removeClass("error2");
			mensaje.text("");
			return true;
		} else {
			mensaje.addClass("error2");
			mensaje.text(texto);
			return false;
		}
	}
	
	function validateRadio(radioButtons, mensaje, texto) {
		mensaje.removeClass("explanation");
		for(i = 0; radioButtons != null && i < radioButtons.length; i++) {
			if (radioButtons[i].checked) {
				mensaje.removeClass("error2");
				return true;
			}
		}
		mensaje.addClass("error2");
		mensaje.text(texto);
		return false;
	}
	
	function getRadioCheckedValue(radioButtons) {
		for(i = 0; radioButtons != null && i < radioButtons.length; i++) {
			if (radioButtons[i].checked)
				return radioButtons[i].value;
		}
		return "";
	}
	
	function validateEmail(){
		if(validateNotNull(email, emailInfo, "Falt\u00f3 tu direcci\u00f3n de correo electr\u00f3nico.")){
			//var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
			var filter =/^[A-Za-z0-9._%+-]+@([A-Za-z0-9-]+\.)+([A-Za-z0-9]{2,4}|museum)$/;
			if(filter.test(email.val()))
				return true;
			email.addClass("error2");
			emailInfo.addClass("error2");
			emailInfo.text("No parece ser una direcci\u00f3n de correo electr\u00f3nico v\u00e1lida.");
		}
		return false
	}
	
	function validateEmailCambio1(){
		if(validateNotNull(emailCambio1, emailCambio1Info, "Falt\u00f3 tu nueva direcci\u00f3n de correo electr\u00f3nico.")){
			//var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
			var filter =/^[A-Za-z0-9._%+-]+@([A-Za-z0-9-]+\.)+([A-Za-z0-9]{2,4}|museum)$/;
			if(filter.test(emailCambio1.val()))
				return true;
			emailCambio1.addClass("error2");
			emailCambio1Info.addClass("error2");
			emailCambio1Info.text("No parece ser una direcci\u00f3n de correo electr\u00f3nico v\u00e1lida.");
		}
		return false
	}
	
	function validateEmailCambio2() {
		if(validateNotNull(emailCambio2, emailCambio2Info, "Falt\u00f3 que vuelvas a ingresar tu nueva direcci\u00f3n de correo electr\u00f3nico.")){
			if(emailCambio1.val() == emailCambio2.val())
				return true;
			emailCambio2.addClass("error2");
			emailCambio2Info.addClass("error2");
			emailCambio2Info.text("Las direcciones de correo electr\u00f3nico deben coincidir.");
		}
		return false;
	}
	function validateEmailNuevo(){
		if(validateNotNull(emailNuevo, emailNuevoInfo, "Falt\u00f3 tu direcci\u00f3n de correo electr\u00f3nico..")){
			//var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
			var filter =/^[A-Za-z0-9._%+-]+@([A-Za-z0-9-]+\.)+([A-Za-z0-9]{2,4}|museum)$/;
			if(filter.test(emailNuevo.val()))
				return true;
			emailNuevo.addClass("error2");
			emailNuevoInfo.addClass("error2");
			emailNuevoInfo.text("No parece ser una direcci\u00f3n de correo electr\u00f3nico v\u00e1lida.");
		}
		return false
	}
	function validateCP(){
		if(validateNumber(codigoPostal, codigoPostalInfo, "Falt\u00f3 el C\u00f3digo Postal.")){
			if(codigoPostal.val().length == 4 && /^([0-9])*$/.test(codigoPostal.val()))
				return true;
			codigoPostal.addClass("error2");
			codigoPostalInfo.addClass("error2");
			codigoPostalInfo.text("El C\u00f3digo Postal debe tener 4 d\u00edgitos num\u00e9ricos.");
		}
		return false;
	}

	function validateName(){
		return validateNotNull(name, nameInfo, "No ingresaste tu Nombre.");
	}
	
	function validateApellido(){
		return validateNotNull(apellido, apellidoInfo, "No ingresaste tu Apellido.");
	}
	
	function validateUsername(){
		username.removeClass("selected");
		usernameInfo.removeClass("explanation");
		if(username.val().length < 6){
			username.addClass("error2");
			usernameInfo.addClass("error2");
			usernameInfo.text("El nombre de usuario debe superar las 6 letras.");
			return false;
		}
		else{
			usernameInfo.text("");
			username.removeClass("error2");
			usernameInfo.removeClass("error2");
			return true;
		}
	}
	
	function validatePassword(){
		return validateNotNull(password, passwordInfo, "Ingres\u00e1 tu Clave.");
	}
	
	function validatePass1(){
		if(validateNotNull(pass1, pass1Info, "Falt\u00f3 tu nueva Clave.")) {
			if(pass1.val().length >= 8)
				return true;
			pass1Info.text("La Clave debe ser alfanum\u00e9rica y tener 8 caracteres como m\u00ednimo.");
			pass1.addClass("error2");
			pass1Info.addClass("error2");
		}
		return false;
	}
	function validatePass2(){
		if (validateNotNull(pass2, pass2Info, "Falt\u00f3 que vuelvas a ingresar tu nueva Clave.")) {
			if(pass1.val() == pass2.val()) {
				pass2Info.text("Clave confirmada.");
				return true;
			}
			pass2.addClass("error2");
			pass2Info.text("Las Claves no coinciden!");
			pass2Info.addClass("error2");
			pass2.attr("value",null);
		}
		return false;
	}
	function validateMessage(){
		if(message.val().length < 10){
			message.addClass("error");
			return false;
		}
		else{			
			message.removeClass("error");
			return true;
		}
	}
	
	function validateDocumento(){
		if(validateTipoDocumento())
			if(validateNumber(numeroDocumento, documentoInfo, "Falt\u00f3 el N\u00famero de Documento."))
				return true;
		return false;
	}
	
	function validateTipoDocumento(){
		return validateComboSeleccionado(tipoDocumento, documentoInfo, "Falt\u00f3 el Tipo de Documento.");
	}
	
	function validateFormaPago(){
		return validateComboSeleccionado(formaPago, formaPagoInfo, "Falt\u00f3 que selecciones la Forma de Pago.");
	}
	
	
	function validateNumeroPoliza(){
		if(validateNumber(numeroPoliza, numeroPolizaInfo, "Falt\u00f3 el N\u00famero de P\u00f3liza/Solicitud.")) {
			var largo = numeroPoliza.val().length;
			if(largo >= 5 && largo <= 13)
				return true;
			else {
				numeroPolizaInfo.text("El N\u00famero de P\u00f3liza/Solicitud es incorrecto.");
				numeroPolizaInfo.addClass("error2");
			}
		}
		return false;
	}
	
	function validateSoloPoliza(){
		if(validateNumber(numeroPolizaSola, numeroPolizaSolaInfo, "Falt\u00f3 el N\u00famero de P\u00f3liza.")) {
			var largo = numeroPolizaSola.val().length;
			if(largo >= 5 && largo <= 13)
				return true;
			else {
				numeroPolizaSolaInfo.text("El N\u00famero de P\u00f3liza es incorrecto.");
				numeroPolizaSolaInfo.addClass("error2");
				return false;
			}
		}else {
			return false;
		}
	}
	
	
	function validateFecha(){
		if (validateAnio() && validateMes() && validateDia()) {
			changestyleFecha();
			return true;
		}
		dia.attr("value", "");
		mes.attr("value", -9);
		anio.attr("value", "");
		dia.focus();
		return false;
	}
	
	function validateDia() {
		if(validateNumber(dia, fechaInfo, "Falt\u00f3 el d\u00eda.")) {
			if (dia.val() >= 1 && dia.val() <= 31) {
				if (dia.val().length == 2)
					diaValido = true;
				else {
					fechaInfo.removeClass("explanation");
					fechaInfo.addClass("error2");
					dia.addClass("error2");
					fechaInfo.text("D\u00eda de dos d\u00edgitos.");
					diaValido = false;
				}
			} else {
				fechaInfo.removeClass("explanation");
				fechaInfo.addClass("error2");
				dia.addClass("error2");
				fechaInfo.text("Ingres\u00e1 un D\u00eda v\u00e1lido.");
				dia.attr("value", "");
				diaValido = false;
			}
		} else
			diaValido = false;
		
		if (diaValido)
			if (mesValido && anioValido) {
				if(validateDiaMes())
					if (validateFechaAnteriorHoy())
						changestyleFecha();
			} else {
				if (esComboSeleccionado(mes) && anio != null && anio.val() != null && !(anio.val().length < 1)) {
					fechaInfo.text("Fecha incompleta/inv\u00e1lida.");
					fechaInfo.removeClass("explanation");
					fechaInfo.addClass("error2");
				} else
					changestyleFecha();
			}
		return diaValido;
	}
	
	function validateMes() {
		mesValido = false;
		if(esComboSeleccionado(mes)) {
			mesValido = !diaValido || validateDiaMes();
			if (anioValido && mesValido && diaValido) {
				if(validateFechaAnteriorHoy())
					changestyleFecha();
			} else {
				if (dia != null && dia.val() != null && !(dia.val().length < 1)
						&& anio != null && anio.val() != null && !(anio.val().length < 1)) {
					fechaInfo.text("Fecha incompleta/inv\u00e1lida.");
					fechaInfo.removeClass("explanation");
					fechaInfo.addClass("error2");
				} else
					changestyleFecha();
			}
		} else {
			fechaInfo.removeClass("explanation");
			fechaInfo.addClass("error2");
			fechaInfo.text("Seleccion\u00e1 un Mes");
		}
		return mesValido;
	}

	function validateAnio() {
		anioValido = false;
		if (validateNumber(anio, fechaInfo, "Ingres\u00e1 el a\u00f1o.")) {
			if(anio.val().length != 4) {
				anio.addClass("error2");
				fechaInfo.addClass("error2");
				fechaInfo.text("A\u00f1o de 4 d\u00edgitos.");
			} else if (anio.val() < 1900) {
				anio.addClass("error2");
				fechaInfo.addClass("error2");
				fechaInfo.text("El a\u00f1o debe ser m\u00e1s cercano. ");
				anio.attr("value", "");
			} else if (anio.val() > currentDate.getFullYear()){
				anio.addClass("error2");
				fechaInfo.addClass("error2");
				fechaInfo.text("A\u00fan no termin\u00f3 el a\u00f1o " + currentDate.getFullYear());
				anio.attr("value", "");
			} else {
				anioValido = true;
				if (diaValido && mesValido) {
					if (validateDiaMes() && validateFechaAnteriorHoy())
						changestyleFecha();
				} else {
					if (esComboSeleccionado(mes) && dia != null && dia.val() != null && !(dia.val().length < 1)) {
						fechaInfo.text("Fecha incompleta/inv\u00e1lida.");
						fechaInfo.removeClass("explanation");
						fechaInfo.addClass("error2");
					} else
						changestyleFecha();
				}
			}
		}
		return anioValido;
	}
	
	function validateDiaMes() {
		var diaTope;
		if (mes.val() == 1 || mes.val() == 3 || mes.val() == 5
				|| mes.val() == 7 || mes.val() == 8 || mes.val() == 10
				 || mes.val() == 12)
			diaTope = 31;
		else if (mes.val() == 4 || mes.val() == 6
				|| mes.val() == 9 || mes.val() == 10)
			diaTope = 30;
		else if (mes.val() == 2) {
			diaTope = 29;
			if (anioValido && !esAnioBisiesto())
				diaTope = 28;
		}
		
		if (dia.val() > diaTope) {
			fechaInfo.removeClass("explanation");
			fechaInfo.addClass("error2");
			dia.addClass("error2");
			if (diaTope == 29 || diaTope == 28 && dia.val() > 29)
				fechaInfo.text("Febrero tiene m\u00e1ximo 29 d\u00edas.");
			else if (diaTope == 28) {
				anio.addClass("error2");
				fechaInfo.text("El a\u00f1o " + anio.val() + " no es bisiesto.");
			} else
				fechaInfo.text("Este mes tiene " + diaTope + " d\u00edas.");
			return false;
		}
		return true;
	}
	
	function validateFechaAnteriorHoy() {
		var fechaNacimiento = new Date(anio.val(), mes.val() - 1, dia.val());
		if (fechaNacimiento.getTime() < currentDate.getTime())
			return true;
		fechaInfo.removeClass("explanation");
		fechaInfo.addClass("error2");
		fechaInfo.text("Es posterior a hoy.");
		return false;
	}
	
	function validateDomicilio(){
		return validateNotNull(domicilio, domicilioInfo, "Falt\u00f3 el Nombre de la Calle.");
	}

	function validateNumero(){
		return validateNotNull(numero, numeroInfo, "Falt\u00f3 la Numeraci\u00f3n de tu Domicilio.");
	}
	
	function validateProvincia(){
		return validateComboSeleccionado(provincia, provinciaInfo, "Falt\u00f3 seleccionar una Provincia.");
	}
	
	function validatePrefijo() {
		if(validateNotNull(prefijo, telefonoInfo, 'Preencha o C\u00F3digo de \u00C1rea.')) {
			if (prefijo.val().length >= 2 && prefijo.val().length <= 3) {
				changestyleTelefono();
				return true;
			}
			prefijo.removeClass("selected");
			telefonoInfo.removeClass("explanation");
			prefijo.addClass("error2");
			telefonoInfo.addClass("error2");
			telefonoInfo.text('O C\u00F3digo de \u00C1rea deve ter 2 caracteres.');
		}
		return false;
	}
	
	function validateOtroPrefijo() {
		if((otroPrefijo== null && otroTelefono== null)|| ((otroPrefijo.val()== "" && otroTelefono.val()== "" && prefijo15.val()== "15"))){
			changestyleOtroTelefono();
			return true;
		}
		if(validateNotNull(otroPrefijo, telefonoInfo, 'Preencha o C\u00F3digo de \u00C1rea (Celular).')) {
			if (otroPrefijo.val().length >= 2 && otroPrefijo.val().length <= 3) {
				changestyleOtroTelefono();
				return true;
			}
			otroPrefijo.removeClass("selected");
			telefonoInfo.removeClass("explanation");
			otroPrefijo.addClass("error2");
			telefonoInfo.addClass("error2");
			telefonoInfo.text('O C\u00F3digo de \u00C1rea deve ter 2 caracteres (Celular).');
		}
		return false;
	}
	
	function validatePrefijo15() {
//		if((otroPrefijo== null && otroTelefono== null)|| ((otroPrefijo.val()== "" && otroTelefono.val()== "" && prefijo15.val()== "15"))){
//			changestyleOtroTelefono();
//			return true;
//		}
//		if(validateNotNull(prefijo15, telefonoInfo, 'Falt\u00f3 el prefijo 15.')) {
//			if (prefijo15.val()== 15) {
//			     changestyleOtroTelefono();
				return true;
//			}
//			prefijo15.removeClass("selected");
//			telefonoInfo.removeClass("explanation");
//			prefijo15.addClass("error2");
//			telefonoInfo.addClass("error2");
//			telefonoInfo.text('El prefijo del celular debe ser el 15.');
//		}
//		return false;
	}
	
function validatePrefijoOpcional() {
	if((prefijoOpcional == null && telefonoOpcional == null && tipoTelefonoOpcional == null)||(prefijoOpcional.val()== "" && telefonoOpcional.val()== ""&& telefonoOpcional.val() == ""&& tipoTelefonoOpcional.val() == "-9")){
	     changestyleTelefonoOpcional();
			return true
		}
		if(validateNotNull(prefijoOpcional, telefonoInfo, 'Falt\u00f3 el prefijo. En caso de que sea de s\u00f3lo 2 d\u00edgitos, deber\u00e1s anteponer el "0".')) {
			if (prefijoOpcional.val().length > 2 && prefijoOpcional.val().length < 7) {
				changestyleTelefonoOpcional();
				return true;
			}
			prefijoOpcional.removeClass("selected");
			telefonoInfo.removeClass("explanation");
			prefijoOpcional.addClass("error2");
			telefonoInfo.addClass("error2");
			telefonoInfo.text('El prefijo debe tener de 3 a 6 caracteres. Si es de 2 d\u00edgitos, deber\u00e1s anteponer el "0".');
		}
		return false;
		}	

	function validateNumeroTelefono() {
		if(validateNumber(telefono, telefonoInfo, "O n\u00FAmero de telefone est\u00E1 faltando.")) {
			changestyleTelefono();
			return true;
		}
		return false;
	}
	
	function validateNumeroOtroTelefono() {
		if(validateNumber(otroTelefono, telefonoInfo, "O n\u00FAmero de telefone est\u00E1 faltando (celular).")) {
			changestyleNumeroOtroTelefono();
			return true;
		}
		return false;
	}


    function validateNumeroTelefonoOpcional() {
    	if((prefijoOpcional == null && telefonoOpcional == null && tipoTelefonoOpcional == null)||(prefijoOpcional.val()== "" && telefonoOpcional.val()== ""&& telefonoOpcional.val() == ""&& tipoTelefonoOpcional.val() == "-9")){
   	     changestyleTelefonoOpcional();
   			return true
   		 }
			if(validateNumber(telefonoOpcional, telefonoInfo, "O n\u00FAmero de telefone est\u00E1 faltando.")) {
				changestyleTelefonoOpcional();
				return true;
			}
			return false;
		}
	
	function validateTelefono(){
		var retorno = false;
		if (validatePrefijo() && validateNumeroTelefono())
			retorno = validateComboSeleccionado(tipoTelefono, telefonoInfo, "Falt\u00f3 seleccionar el uso.");
		if (retorno)
			changestyleTelefono();
		return retorno;
	}
 function validateOtroTelefono(){
		if((otroPrefijo== null && otroTelefono== null )|| ((otroPrefijo.val()== " " && otroTelefono.val()== " " ))){
			return true;
		}
		var retorno = false;
		if (validateOtroPrefijo() && validateNumeroOtroTelefono())
			retorno = validateComboSeleccionado(tipoTelefono, telefonoInfo, "Falt\u00f3 seleccionar el uso.");
		if (retorno)
			changestyleOtroTelefono();
		return retorno;
	}
function validateTelefonoOpcional(){
	if((prefijoOpcional == null && telefonoOpcional == null && tipoTelefonoOpcional == null)||(prefijoOpcional.val()== "" && telefonoOpcional.val()== ""&& telefonoOpcional.val() == ""&& tipoTelefonoOpcional.val() == "-9")){
		return true;
	}
		var retorno = false;
		if (validatePrefijoOpcional() && validateNumeroTelefonoOpcional())
			retorno = validateComboSeleccionado(tipoTelefonoOpcional, telefonoInfo, "Falt\u00f3 seleccionar el uso.");
		if (retorno)
		    changestyleTipoTelefonoOpcional();
		return retorno;
	}

	function validateLocalidad() {
		return validateNotNull(localidad, localidadInfo, "Falt\u00f3 la Localidad.");
	}
	
	function validateLocalidadSelect() {
		if (validateComboSeleccionado(localidadSelect, localidadSelectInfo, "Falt\u00f3 seleccionar la Localidad.")) {
			if (localidadSelect.val() != null && localidadSelect.val().length > 1) {
				changestyleLocalidadSelect();
				return true;
			}
			localidadSelectInfo.text("Falt\u00f3 seleccionar la Localidad.");
			localidadSelectInfo.addClass("error2");
		}
		return false;
	}
	
	function validatePolizasRadio() {
		if (validateRadio(radioPolizas, validPolizasInfo, "No seleccionaste ninguna P\u00f3liza.")) {
			validPolizasP.hide();
			return true;
		}
		validPolizasP.show();
		return false;
	}

	function validateEncuestaRadio() {
		return true;		
	}
	/*
	function validateEncuestaRadio() {
		if (validateRadio(motivoPregunta, validPolizasInfo, "Deb\u00e9s responder la encuesta al pie para continuar.")) {
			validPolizasP.hide();
			return true;
		}
		validPolizasP.show();
		return false;
	}
	*/
	function validateTipoPago() {
		return validateRadio(radiobutton, radioInfo, "Falt\u00f3 seleccionar el Tipo de Pago.");
	}
	
	function validateCbu() {
		if(validateNumber(cbu, cbuInfo, "Falt\u00f3 ingresar el CBU.")) {
			if(cbu.val().length == 22) {
				startstyle(cbu, cbuInfo, "Complet\u00e1 sin guiones, puntos, ni espacios.");
				return true;
			}
			cbuInfo.text("El CBU parece no ser v\u00e1lido.");
			cbuInfo.addClass("error2");
		}
		return false;
	}
	
	function validateNumeroTarjCredito() {
		if(validateNumber(numeroTarjCredito, tarjCreditoInfo, "Falt\u00f3 el N\u00ba de Tarjeta.")) {
			var numTarj = numeroTarjCredito.val();
			if(numTarj.length < 17 && numTarj.length > 10) {
				startstyle(numeroTarjCredito, tarjCreditoInfo, "Complet\u00e1 sin guiones, puntos, ni espacios.");
				return true;
			} else {
				tarjCreditoInfo.text("El N\u00ba de Tarjeta parece no ser v\u00e1lido.");
				tarjCreditoInfo.addClass("error2");
			}
		}
		return false;
	}
	
	function validatePatente() {
		if(validateNotNull(patente, patenteInfo, "Faltaron los 6 d\u00edgitos de la patente.")) {
			var filtroAuto = /^[a-zA-Z]+[a-zA-Z]+[a-zA-Z]+[0-9]+[0-9]+[0-9]$/;
			var filtroMoto = /^[0-9]+[0-9]+[0-9]+[a-zA-Z][a-zA-Z][a-zA-Z]$/;
			var filtroAuto0k = /^[a-zA-Z][a-zA-Z]+[0-9]+[0-9]+[0-9]+[a-zA-Z][a-zA-Z]$/;
			var filtroMoto0k = /^[a-zA-Z]+[0-9]+[0-9]+[0-9]+[a-zA-Z][a-zA-Z][a-zA-Z]$/;
			if(filtroAuto.test(patente.val()) || filtroMoto.test(patente.val()) || filtroAuto0k.test(patente.val()) || filtroMoto0k.test(patente.val())) {
				startstyle(patente, patenteInfo, "(6 d\u00edgitos u 7 d\u00edgitos)");
				return true;
			}
//			if(patente.val().length == 6) {
//				startstyle(patente, patenteInfo, "(6 d\u00edgitos)");
//				return true;
//			}
			patenteInfo.removeClass("error2");
			patenteInfo.text("La Patente parece no ser v\u00e1lida.");
			patenteInfo.addClass("error2");
		}
		return false;
	}
	
	function validateEntreCalle1() {
		return validateNotNull($('#eCalle1'), $('#eCalle1Info'), "Falt\u00f3 la primer entrecalle.");
	}
	
	function validateEntreCalle2() {
		return validateNotNull($('#eCalle2'), $('#eCalle2Info'), "Falt\u00f3 la otra entrecalle.");
	}
	
	function validateCiudad() {
		return validateNotNull($('#ciudad'), $('#ciudadInfo'), "Falt\u00f3 la Localidad.");
	}
	
	function validateAsunto() {
		return validateNotNull($('#asunto'), $('#asuntoInfo'), "Ten\u00e9s que elegir el asesoramiento.");
	}
	function validateComentarios() {
		return validateNotNull($('#comentarios'), $('#comentariosInfo'), "Deb\u00e9s ingresar tus comentarios/observaciones.");
	}
	
	/**
	 * Funciones removeSelected para onBlur de combos
	 **/
	function removeSelectedTipoDocumento() {
		tipoDocumento.removeClass("selected");
		if(!esComboSeleccionado(tipoDocumento)) {
			documentoInfo.removeClass("explanation");
			documentoInfo.addClass("error2");
			documentoInfo.text("Seleccion\u00e1 el tipo.");
		}
	}
	function removeSelectedFormaPago() {
		formaPago.removeClass("selected");
		if(!esComboSeleccionado(formaPago)) {
			formaPagoInfo.removeClass("explanation");
			formaPagoInfo.addClass("error2");
			formaPagoInfo.text("Seleccion\u00e1 la forma de pago.");
		}
	}
	function removeSelectedMes() {
		if (validateAnio() && validateMes() && validateDia()) {
			changestyleFecha();
			return true;
		}
		mes.removeClass("selected");
		if(!esComboSeleccionado(mes)) {
			fechaInfo.removeClass("explanation");
			fechaInfo.addClass("error2");
			fechaInfo.text("Seleccion\u00e1 el mes.");
		}
	}
});

function doSubmit1(accion){
	var f = document.getElementById('formulario');
	var acc = accion + '.action';
	$("#formulario").attr("action", acc);
	
	$("#formulario").attr("target", "_self");
	f.method='POST';
	document.getElementById('loader').style.display='block';
	f.submit();
}

function doSubmitEbill(accion){
	
	
	var f = document.getElementById('formulario');
	var acc = accion + '.action';
	$("#formulario").attr("action", acc);
	
	$("#formulario").attr("target", "_self");
	f.method='POST';
	document.getElementById('loader').style.display='block';
	
	if (!ejec) {
		ejec = true;
		f.submit();
	}
}

function submitPopup1(accion) {
	var prot = window.location.protocol;
	var host = window.location.host;
	var f = document.getElementById('formulario');	
	var acc = accion + '.action';
	$("#formulario").attr("action", acc);
	$("#formulario").attr("target", "_BLANK");
	
	var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
    if (is_chrome){    	
    	var args = '';			
    	var aux='';
    	if (document.getElementById('formulario').polizaNumero.length != undefined){
	    	for (var i=0;i < document.getElementById('formulario').polizaNumero.length;i++)	{
	    		if (document.getElementById('formulario').polizaNumero[i].checked){
		    		if (aux == '')
		    			aux = document.getElementById('formulario').polizaNumero[i].value;
		    		else{
		    			aux = aux +',';
		    			aux = aux+document.getElementById('formulario').polizaNumero[i].value;
		    		}
	    		}
	    	}
    	}else{
    		aux = document.getElementById('formulario').polizaNumero.value;
    	}
    	$("#polizaNumero").val(aux);
		args = addArgument(args, 'motivoPregunta');
		args = addArgument(args, 'polizaNumero');
		
		var url = prot + '//' + host + '/vivo/Retail/Transaccion/' + accion + '.action?' + args;
    	window.open( url)    	
    	return;
    }
	f.submit();
}

function validacionCamposObligatorios(){
	//Valida de forma generica todo campo que contenga la clase 'campoObligatorio'
	//Para mostrar el mensaje de error insertar un tag con el ID:'requiredInputErrorMessage' de tipo hidden

	var listaObligatoria = document.getElementsByClassName("campoObligatorio");
	var i;
	var resultadoCamposObligatorios = true;
	
	for (i = 0; i < listaObligatoria.length; i++) {
		if($(listaObligatoria[i]).val().trim() == "" ){
			$(listaObligatoria[i]).css('border-width', '2px');
			$(listaObligatoria[i]).css('border-color', '#ff0000');
			$('#requiredInputErrorMessage').show();
			resultadoCamposObligatorios = false;	
		}
		
		else{
			$(listaObligatoria[i]).css('border-width', '2px');
			$(listaObligatoria[i]).css('border-color', '#d6d6d6');
		}
	
	
	}
	if (resultadoCamposObligatorios == true){
		$('#requiredInputErrorMessage').hide();

	}
	return resultadoCamposObligatorios;
}

 function validarMinimoCaracteres (){
	 //Valida de forma generica el minimo de caracteres de todo campo que contenga el atributo 'minlength = x' (x=minimo de caracteres).
	 //Para mostrar el mensaje de error insertar un tag con el ID:'minCharacterErrorMessage' de tipo hidden
	 	var resultadoMinCharacter = true;
		var flagColor = true;
		var listaMinCharacter = $('input[minlength]');
	 
		$( "input[minlength]" ).each(function() {
			var minChar = $( this ).attr( "minlength" );
			var valorCamp = $( this ).val().trim();
			if(valorCamp.length<minChar && valorCamp !="" ) {
					$(this).css('border-width', '2px');
					$(this).css('border-color', '#ff0000');
					$('#minCharacterErrorMessage').show();
					resultadoMinCharacter = false;	
				}
			  else{
				  if ($(this).hasClass( "campoObligatorio" ) & valorCamp==""){
					  flagColor = false;
				  }
				  if (flagColor == true){
					$(this).css('border-width', '2px');
					$(this).css('border-color', '#d6d6d6');
					}
				}});
		
		if(resultadoMinCharacter == true){
		$('#minCharacterErrorMessage').hide();

		}
	  return resultadoMinCharacter ;
 }