<!-- sticky contact  -->
<!-- sticky contact  -->
<script>
    $( document ).scroll( function () {
        var y = $( this ).scrollTop();
        if ( y > 150 ) {
            $( '.sticky-contact' ).fadeIn();
        } else {
            $( '.sticky-contact' ).fadeOut();
        }

    } );
</script>
<!-- open tabs  -->
<script>
    $( document ).ready( function () {
        var $tabs = $( ".tabs-menu a" ).click( function ( event ) {

            event.preventDefault();
            $( ".tab-content" ).hide();

            var $parent = $( this ).parent();

            if ( $parent.is( '.current' ) ) {
                $parent.removeClass( 'current' );
                $tabs.removeClass( 'current' );
                return;
            }

            $tabs.removeClass( 'current' );
            $parent.addClass( "current" );

            var tab = $( this ).attr( "href" );
            $( tab ).fadeIn();
        } ).parent();

        $( 'body' ).click( function ( e ) {
            if ( !$( e.target ).closest( '#tabs-container' ).length ) {
                $tabs.filter( '.current' ).find( 'a' ).click();
            }
        } )
    } );
</script>
<!-- close tabs  -->
<script>
    $( document ).ready( function () {
        $( ".close" ).click( function () {
            $( ".tab-content" ).hide();
            $( ".tabs-menu li" ).removeClass( 'current' );

        } );
    } );
</script>

<script type="text/javascript">
    $( function () {

        $( window ).scroll();

        $( '.goto-top' ).click( function () {
            $.scrollTo( '0', {
                duration: '250'
            } );
            return false;
        } );

    } );
</script>

<!-- Open "Tu Cotizacion"  -->
<script type="text/javascript">
    $( document ).ready( function () {
        if ( matchMedia ) {
            var mq = window.matchMedia( "(max-width: 768px)" );
            mq.addListener( WidthChange );
            WidthChange( mq );
        }

        function WidthChange( mq ) {
            if ( mq.matches ) {
                $( "#Foo" ).removeClass( "in" );
            }
        }
    } );
</script>

<section id="modals">

    <!-- MODALS DE INFORMACI??N -->
    <!-- Info Modal 1 - Vigencia -->
    <div class="modal fade" id="Info-Modal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content no-pd">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Ayuda</h4>
                </div>
                <div class="modal-body">
                    <h3 class="mg-b color-1">Inicio de tu seguro</h3>
                    <p class="mg-t">El inicio de tu seguro ser?? a partir de las 12hs de hoy o de la fecha que nos solicites, siempre que todos los pasos requeridos a continuaci??n se encuentren completos para que la p??liza se emita.</p>
                    <p>El env??o de la presente solicitud no otorga cobertura.</p>
                    <p>??nicamente tendr??s cobertura en caso de aceptaci??n expresa de la misma por parte de C??a de Seguros.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal -->

    <!-- MODALS Payment data -->

    <!-- payment-data Modal 1 - Tarjetas de cr??dito / d??bito -->
    <div class="modal fade" id="payment-data-Modal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content no-pd">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Pago con Tarjetas</h4>
                </div>
                <div class="modal-body">
                    <h3 class="mg-b color-1">Paga online en nuestro sitio</h3>
                    <h4 class="mg-b">Seguro, r??pido y de la manera m??s c??moda</h4>
                    <p>Podes elegir cualquiera de estos medios para pagar. Es r??pido, seguro y no tiene costo adicional</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Cr??dito</h4>
                            <ul class="list">
                                <li>Visa Argentina</li><li>Visa Electron</li><li>Mastecard</li><li>American Express</li><li>Naranja</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h4>D??bito</h4>
                            <ul class="list">
                                <li>Visa Argentina</li><li>Mastercard</li><li>American Express</li><li>Diners Club Argentina</li><li>Nevada</li><li>Naranja</li><li>Cabal</li><li>D??bito en cuenta</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal -->

    <!-- payment-data Modal 2 - Sitio 100% seguro -->
    <div class="modal fade" id="payment-data-Modal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content no-pd">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">C??mo te protegemos</h4>
                </div>
                <div class="modal-body">
                    <h3 class="mg-b color-1">Sitio 100% seguro</h3>
                    <h4 class="mg-b">Cumplimos con los m??s altos est??ndares de seguridad de la industria</h4>
                    <p>Todos los pagos de La Caja se procesan en nuestra propia plataforma para pagar de forma segura. Por eso, no importa c??mo pagues, ??tu dinero siempre est?? protegido!</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal -->

    <!-- payment-data Modal 3- Sitio 100% seguro -->
    <div class="modal fade" id="payment-data-Modal-3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content no-pd">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Otros medios de pago</h4>
                </div>
                <div class="modal-body">
                    <h3 class="mg-b color-1">Medios de pago electr??nicos</h3>
                    <h4 class="mg-b">Conoc?? otras alternativas de pago disponible.</h4>
                    <ul class="list">
                        <li>Red Pago F??cil (Presentando la factura o DNI)</li><li>Rapipago (Presentando la factura o DNI)</li><li>Pronvincia Net (Presentando la factura o DNI)</li><li>Cobro Express (Presentando la factura)</li><li>Mercado Pago v??a Pago F??cil</li><li>Pago Mis Cuentas / Red Banelco</li><li>Red Link</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal -->

    <!-- MODALS LEGALES -->

    <!-- Legales Modal 1- Bases y condiciones (*) -->
    <div class="modal fade" id="Legales-Modal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content no-pd">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Legales</h4>

                </div>
                <div class="modal-body">
                    <h3 class="mg-b color-1">Bases y condiciones</h3>
                    <p>(1) Oferta v??lida en todo el pa??s hasta el d??a de la fecha, pagando con tarjeta de cr??dito o cuenta bancaria. Precio mensual, no incluye impuestos de sellos provinciales. Seg??n t??rminos y condiciones de p??liza.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Fin Modal -->

    <!-- Legales Modal 2- Protecci??n de datos personales -->
    <div class="modal fade" id="Legales-Modal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content no-pd">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Legales</h4>
                </div>
                <div class="modal-body">
                    <h3 class="mg-b color-1">Protecci??n de Datos Personales</h3>
                    <p>(1) La informaci??n que otorgo en virtud de la presente operaci??n inform??tica, implica la prestaci??n del consentimiento expreso dispuesto por la ley 25.326. Conozco que podr?? ejercer los derechos de acceso, rectificaci??n y supresi??n de datos y acepto que la informaci??n que otorgo podr?? ser utilizada para acciones de marketing en forma directa o a trav??s de terceros. La informaci??n ser?? archivada por Caja de Seguros S.A. con domicilio en Fitz Roy 957 Ciudad Aut??noma de Buenos Aires. <a class="color-1" href="http://www.lacaja.com.ar/seguros-personas/proteccion-datos-personales" target="_blank">Protecci??n de Datos Personales</a>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal -->

</section>

<div id="footerSsn" class="container ssn small" style="display: none">
    <div class="row mg-lg-t mg-b">
        <div class="col-md-3 row-ssn mg-b">
            <p>N?? de inscripci??n SSN<br> 0501</p>
        </div>
        <div class="col-md-3 row-ssn mg-b">
            <p>Atenci??n al asegurado<br> 0800-666-8400</p>
        </div>
        <div class="col-md-3 row-ssn mg-b">
            <p>Organismo de Control<br> www.ssn.gob.ar</p>
        </div>
        <div class="col-md-3 mg-b"><img alt="SSN" src="/nuevosAssets/images/LogoSSN.svg" width="250px"/>
        </div>
        <div class="col-md-12 mg-t mg-b">
            <p>La entidad aseguradora dispone de un Servicio de Atenci??n al Asegurado que atender?? las consultas y reclamos que presenten los tomadores de seguros, asegurados, beneficiarios y/o derechohabientes.</p>
            <p>El Servicio de Atenci??n al Asegurado est?? integrado por:</p>
            <p>Responsable: Sandra Sevillano<br> Suplente: Ariel Mariano Zabaleta<br> Tel: 4857-7677 opci??n 2</p>
            <p>En caso de que el reclamo no haya sido resuelto o haya sido desestimado, total o parcialmente, o que haya sido denegada su admisi??n, podr?? comunicarse con la Superintendencia de Seguros de la Naci??n por tel??fono al 0800-666-8400, correo electr??nico a denuncias@ssn.gob.ar o formulario web a trav??s de www.argentina.gob.ar/ssn</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 mg-lg-b text-center">
            <img src="/nuevosAssets/images/logo2.jpg" alt="list item 1"/>
            <img src="/nuevosAssets/images/logo3.jpg" alt="list item 2"/>
            <img src="/nuevosAssets/images/logo4.jpg" alt="list item 3"/>
            <img src="/nuevosAssets/images/logo5.jpg" alt="list item 4"/>
        </div>
    </div>
</div>

<script src="/nuevosAssets/slick/slick.js" type="text/javascript" charset="utf-8"></script>

<!-- SECTOR WEB CHAT -->
<script type="text/javascript">
    //var xSector ="VENTAS_HOGAR";

    $( document ).ready( function () {

        $('#iconoChat').css("display","none");
        //verificarAgentesConectados();

    });

    function verificarAgentesConectados() {

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
                        /* 	$("head").append('<script src="https://www.lacaja.com.ar/lacaja-gcti-chat-widget/genesys-webchat.jquery.min-lacaja.js"></scr' + 'ipt>');
                            $("head").append('<script src="https://www.lacaja.com.ar/lacaja-gcti-chat-widget/genesys-webchat.options.js"></scr' + 'ipt>')
                                     .append(function() {

                                            $("#floating_chat_button img").attr("src","/assets/images/goto-chat.svg");
                                     }); */

                        $("#iconoChat").show();

                    } else{
                        $("#iconoChat").hide();
                    }

                }else{
                    $("#iconoChat").hide();
                }
            },
            error : function() {
                $("#iconoChat").hide();
                console.log("Hubo un error al realizar la peticion ajax");
            }
        });
    }

    function chat(sector, isRegistrado){
        //INICIALIZO LA EXTENSION
        if(!window._genesys.widgets.extensions){
            window._genesys.widgets.extensions = {};
        }
        console.log('Chat !!!!!');

        var tempUserData;
        if (isRegistrado){
            tempUserData={
                "xSECTOR": sector,
                "xDOCUMENTO": "248722224",
                "xTIPODOC": 'DNI'
            };
        }else{
            tempUserData={"xSECTOR": sector};
        }

        CXBus.command("WebChat.open", {
            form: {
                autoSubmit: isRegistrado,
                firstname: isRegistrado?'Juan':'',
                lastname: isRegistrado?'Perez':'',
                nickname: isRegistrado?'pepe':'',
                email: isRegistrado?'Juan@mail.com':'',
                subject: isRegistrado?'Consulta de P??liza':''
            },
            userData:tempUserData

        }).done(function(e){
            // Handle success return state
            // "e", the event object, is a standard CXBus format
            // Any return data will be available under e.data
            console.log('Chat abierto.. inyecto un mensaje!!!!!');
            //********************************************************************
            //	INYECTO UN MENSAJE AL SEGUNDO.
            //		setTimeout(function() {
            //			inyectar_mensaje(sector);
            //		}, 1000);
            //********************************************************************

        }).fail(function(e){
            // Handle failure return state
            // "e", the event object, may contain an error message, warning, or AJAX response object
            console.log('Chat NOOOOO abierto!!!!!');
        });
    }
</script>
<!-- Aqui Termina el webChat -->
