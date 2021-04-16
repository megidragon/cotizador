<!--DOCUMENT CONTENT_TYPE="text/javascript"  -->
/* 
  Copyright 2004 - Certifica.com 
  $Id: tag_lacaja.js,v 1.01 2005/02/18
*/
var arAreas = Array();
var defaultSite = 105885;
var defaultArea = '/home/homepage';
arAreas['Retail'] = 105886;
arAreas['ART'] = 105887;
arAreas['NegCorp'] = 105888;
arAreas['Indice.lnk'] = 105030;
arAreas['CotizadorMarca'] = 106738;
arAreas['IdentPositInput'] = 106738;
arAreas['CotizadorCoberturaPlanes'] = 106738;
arAreas['ExplicacionPasosSolicitud'] = 106738;
arAreas['PaymentMethodInput'] = 106738;
arAreas['InfoUserInputForm'] = 106738;
arAreas['PaymentMethodForm'] = 106738;
arAreas['ConfirmarSolicitud'] = 106738;
arAreas['NoAcepto'] = 106738;
arAreas['ConInspeccionRecuperador'] = 106738;
arAreas['ConInspeccionSinRecuperador'] = 106738;
arAreas['SinInspeccionRecuperador'] = 106738;
arAreas['SinInspeccionSinRecuperador'] = 106738;
arAreas['RetailDiferenciaPostal'] = 106738;
arAreas['RecotizadorPlanes'] = 106738;
arAreas['RegionsForm'] = 106738;
arAreas['DoubtsForm'] = 106738;
arAreas['InsertDom'] = 106738;
arAreas['IngresoSorteo'] = 106738;
arAreas['Agex'] = 105886;
arAreas['ContactoAtencionClienteInput'] = 201353;
arAreas['ContactoAtencionClienteInput'] = 201353;
arAreas['ContactoAtencionCliente'] = 201353;
arAreas['SuscripcionesInput'] = 201353;
arAreas['IdentificacionPositivaClientes'] = 201353;
arAreas['Suscripciones'] = 201353;
arAreas['ResultadoSuccess'] = 201353;
arAreas['ActualizaDatosInput'] = 201353;
arAreas['IdentificacionPositivaClientes'] = 201353;
arAreas['ActualizaDatosInput'] = 201353;
arAreas['ActualizaDatos'] = 201353;
arAreas['CambioDomicilioRetailInput'] = 201353;
arAreas['IdentificacionPositivaClientes'] = 201353;
arAreas['CambioDomicilioInput'] = 201353;
arAreas['CambioDomicilio'] = 201353;
arAreas['GeneracionCuponInput'] = 201353;
arAreas['IdentificacionPositivaClientes'] = 201353;
arAreas['AutosVigentesFuturos'] = 201353;
arAreas['AutosVigentesFuturosConfirmacion'] = 201353;
arAreas['PolizasPagasInput'] = 201353;
arAreas['IdentificacionPositivaClientes'] = 201353;
arAreas['GenerarCertMercosurInput'] = 201353;
arAreas['GenerarCertMercosurConfirmacion'] = 201353;
arAreas['ImpresionCuponCristalesInput'] = 201353;
arAreas['IdentificacionPositivaClientes'] = 201353;
arAreas['ImpresionCuponCristalesSelectPoliza'] = 201353;
arAreas['AdDebAutomaticoInput'] = 201353;
arAreas['IdentificacionPositivaClientes'] = 201353;
arAreas['AdhesionDebitoAutInput'] = 201353;
arAreas['AdhesionDebitoAut'] = 201353;
arAreas['DenuSiniestros'] = 201353;
arAreas['IdentificacionPositivaClientes'] = 201353;
arAreas['DenunciaSiniestrosInstrucciones'] = 201353;
arAreas['DenuSiniInput'] = 201353;
arAreas['DenuSiniDataInput'] = 201353;
arAreas['DenuSiniConfirmacion'] = 201353;
arAreas['Sucursal'] = 201353;
arAreas['AgendaInspeccionInicio'] = 106738;
arAreas['AgendaInspeccionModifDom'] = 106738;
arAreas['DefineLugarInspeccion'] = 106738;
arAreas['AgendaInspeccionSelectDia'] = 106738;
arAreas['AgendaInspeccionSelectDiaSuc'] = 106738;
arAreas['AgendaInspeccionFin'] = 106738;






/*
   Funciones estandar de Certifica
*/
function cert_getTagCertifica(iSiteId, sPath, sAppend) 
{
    var size, colors, referrer, url, prot;
    size = colors = referrer = 'otro';
    referrer = escape(document.referrer);
    if ( window.screen.width ) size = window.screen.width;
    if ( window.screen.colorDepth ) colors = window.screen.colorDepth;
    else if ( window.screen.pixelDepth ) colors = window.screen.pixelDepth;
    if (document.location.protocol == 'https:')
        prot = 'https:';
    else
        prot = 'http:';
    url = prot + 
       '//hits.e.cl/cert/hit.dll?sitio_id=' + iSiteId + '&path=' + sPath +
       '&referer=' + referrer + '&size=' + size + '&colors=' + colors;
    url += '&java=' + navigator.javaEnabled();
    if (sAppend)
        url += sAppend;
    return url;    
}

function tagCertifica(iSiteId, sPath) 
{
    /* En produccion, la linea inferior no esta comentada */
    /* Esto es para no generar estadisticas */
     //document.writeln( '<img src="' + cert_getTagCertifica(iSiteId, sPath) + '" width="1" height="1" border="0" alt="Certifica.com">' ); 
}

/*
  Funciones especiales para la caja
*/
function isDefaultPage( URL )
{
  return URL.match(/\/Retail\/Global\/Home\.lnk/);
}

function clean( str )
{
  str = str.replace( /=/, '_' );
  while( str.match( /[^a-zA-Z0-9_-]/ ) )
  	str = str.replace( /[^a-zA-Z0-9_-]/, '', 'g' );
  return str;
}

function fixPath( path )
{
  var str = path.replace( /\/\//, '/', 'g' );
  var aux_path = str.split('/');
  if (aux_path.length < 2) {
    for (var i=aux_path.length; i<2; i++) {
      str += '/sin_id';
    }
  }
  return str;
}

function appendPath(str, urlParts, queryString)
{
  for (var i=0; i < urlParts.length; i++) {
      str += '/' + urlParts[i];
  }

  var query_pieces = queryString.split('&');
  for (var i=0; i < query_pieces.length; i++) {
      str += '/' + clean( query_pieces[i] );
  }

  return str;
}

function getSiteId( part )
{
   if ( arAreas[part] )
      return arAreas[part]
   return defaultSite;
}
/*
  Funcion a usar para marcar
*/
function tagCertificaLaCaja()
{
    var sitio_id;
    var path = '';
    var URL = String(document.location);

    if (isDefaultPage(URL)) {
      sitio_id = defaultSite;
      path = defaultArea;
    } else {
      var pos = URL.indexOf('?');
      var query = '';
      if (pos != -1) {
          query = URL.substring(pos+1);
          URL = URL.substring(0,pos);
      }
      var pedazos = URL.split("/");
      if ( ((pedazos.length < 4) || (pedazos[3] != 'retail')) || (typeof arAreas[pedazos[4]] == 'undefined') ) {
        sitio_id = defaultSite
        path = appendPath('/no_identificada/', pedazos.slice(3), '');
      } else {
        sitio_id = getSiteId( pedazos[4]);       
			if (sitio_id == arAreas['Retail']){			
				var suc = getSiteId(pedazos[5]);										
				if (suc == arAreas['Sucursal']){					
					sitio_id = suc;					
				}else{				
					var paginaCompleta =  pedazos[6].substring(0,pedazos[6].search(".lnk"))				
				 	  sitio_id = getSiteId( paginaCompleta);						
				}				
			}
       
        path = appendPath('', pedazos.slice(5), query);
      }
    }
    var referrer = String(document.referrer);
    var aux_referrer = '';
    if ( referrer && referrer.match( /\.lacaja\.com\.ar\// ) ) {
        if (isDefaultPage(referrer)) {
            aux_referrer = 'home';
        } else {
            var pos = referrer.indexOf('?');
            if (pos != -1) {
                referrer = referrer.substring(0,pos);
            }
            var pedazos = referrer.split("/");
            if ( (pedazos.length < 4) || (pedazos[3] != 'retail') ) {
                aux_referrer = 'lacaja_otro';
            } else {
               if (getSiteId(pedazos[4]) != sitio_id) {
                   aux_referrer = pedazos[4];
                   for (var i=5; i < pedazos.length; i++) {
                       aux_referrer += '_' + pedazos[i];
                   }
               }
            }
        }
        path += '/' + aux_referrer;
    }
    path = fixPath( path );
    tagCertifica(sitio_id, path);
}
