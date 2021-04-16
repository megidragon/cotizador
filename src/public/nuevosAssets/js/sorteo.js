/*Archivo javascript utilizado para el requerimiento de sorteo
las funciones son llamadas por el evento onunload dentro del tag 
body de la pagina jsp*/
var httpRequest= initRequest();
var nombrePath = document.location.pathname;
var pagURL = String(document.location);
var participaSorteo= false; 
var urlredir = pagURL.substring(0,pagURL.search(nombrePath));
var a;
function cerrarNavegador()
	{
		var browser = navigator.appName;
			   
	    
		if (browser=="Microsoft Internet Explorer"){
			// toma las coordenadas de donde se encuantra IE toma
			//valores negativos al presionar el boton cerrar
	 	
			   
	 			
	 		if (window.event.clientX < 0 && window.event.clientY < 0) 			{	
			 	
	 			 if (participaSorteo ==true ){
	 				window.open(urlredir+"/retail/Retail/Transaccion/IngresoSorteo.lnk");		
	 				}	
 			}
 				
		}if (browser=="Netscape"){
					
	
		/*		if (paginasDelSorteo(pedazos[6].substring(0,String.search(pedazos[6],".lnk")))){
					httpRequest.open("GET", url, true);
					httpRequest.onreadystatechange=parsePagina;
					httpRequest.send(null);					
				}*/
		}
		
}
// inicializa el request segun el navegador
function initRequest() {
       if (window.XMLHttpRequest) {
           return new XMLHttpRequest();
       } else if (window.ActiveXObject) {
           return new ActiveXObject("Microsoft.XMLHTTP");
       }
   }

// funcion que devuelve  a que pagina debe ir

function parsePagina(){
	 
	  
	  	if (httpRequest.readyState != 4 ) {	  
			return;
		}
	
		var serverResponse = httpRequest.responseText;
	//	var serverResponse = httpRequest.responseXML;
		var XmlDoc = loadXMLString(serverResponse);
		if (XmlDoc != null) {			
		
			var pag =	xmlDoc.getElementsByTagName("sorteo")[0].childNodes[0].nodeValue;
		
			// var pages=httpRequest.responseXML.getElementsByTagName("sorteo")[0];		
	    //	  var pag = pages.childNodes[0].nodeValue;
	    	  
		}	

 	  if (pag == "Si"){
			
	//	alert (urlredir+"/retail/Retail/Transaccion/IngresoSorteo.trx");
	  	participaSorteo=true;
	  }else{
		
	  	participaSorteo = false;
	  }
}

function loadXMLString(txt) {
	try // Internet Explorer
	{	
	if (window.ActiveXObject) {
	
 	    xmlDoc = new ActiveXObject("Microsoft.XMLDOM");
		xmlDoc.async = "false";
		xmlDoc.loadXML(txt);
		
		return (xmlDoc);
	}else {
			parser = new DOMParser;
			xmlDoc = parser.parseFromString(txt, "text/xml");			
			return (xmlDoc);
	}
	
	} catch (e) {
			alert("Error en loadXMLString:" + e.message)
		}
	
}

//devuelve true si la pagina actual corresponde  a las paginas del sorteo
function paginasDelSorteo(pagina){

                                                                                                                     
var paginas =["CotizadorCoberturaPlanes","InfoUserInputExplicacionForm", "InfoUserInputForm","PaymentMethodForm","PaymentMethodForm"];		

			for (var x= 0; x < paginas.length; x = x+1){
					if (paginas[x] == pagina)
					return true;
			}
		return false;		
}



function verificaSorteo(){
	    var browser = navigator.appName;
		var url = 'verificaSorteo.action';
		
	    var pedazos = pagURL.split("/");
	   
	    
		if (browser=="Microsoft Internet Explorer"){
		
	 			if (paginasDelSorteo(pedazos[6].substring(0,pedazos[6].search(".lnk")))){
							
					httpRequest.open("GET", url, true);
					httpRequest.onreadystatechange=parsePagina;
					httpRequest.send(null);					
				}			
	 
 		
}
}


function onlyLetters()
{
	if (((event.keyCode>64) && (event.keyCode<123)) 
	    || (event.keyCode==32)
	    || (event.keyCode==39)
	    || (event.keyCode==44)) {
		return true;
	}
	return false;
}



