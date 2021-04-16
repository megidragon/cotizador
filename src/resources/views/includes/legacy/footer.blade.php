<footer>

    <div id="footer-copy" class="pd-v-lg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-10">
                    <p class="no-mg">
                        Consultá acerca de las coberturas, sus límites, condiciones de suscripción y exclusiones de la póliza.<br/>
                        Los Seguros son emitidos por Caja de Seguros S.A. Fitz Roy 957 (C1414CHI) C.A.B.A.,<br/>
                        CUIT 30-66320562-1 | Superintendencia de Seguros de la Nación 0-800-666-8400 | <a href="http://www.ssn.gob.ar" class="color-w">www.ssn.gob.ar</a>
                    </p>
                </div>
                <div class="col-sm-4 col-md-2">
                    <div class="logo-footer mg-lg-t-xs"></div>
                </div>
            </div>
        </div>
    </div>

</footer>

<div id="footerSsn" class="container ssn small" style="display: none">
    <div class="row mg-lg-t mg-b">
        <div class="col-md-3 row-ssn mg-b">
            <p>N° de inscripción SSN<br> 0501</p>
        </div>
        <div class="col-md-3 row-ssn mg-b">
            <p>Atención al asegurado<br> 0800-666-8400</p>
        </div>
        <div class="col-md-3 row-ssn mg-b">
            <p>Organismo de Control<br> www.ssn.gob.ar</p>
        </div>
        <div class="col-md-3 mg-b"><img alt="SSN" src="/nuevosAssets/images/LogoSSN.svg" width="250px"/>
        </div>
        <div class="col-md-12 mg-t mg-b">
            <p>La entidad aseguradora dispone de un Servicio de Atención al Asegurado que atenderá las consultas y reclamos que presenten los tomadores de seguros, asegurados, beneficiarios y/o derechohabientes.</p>
            <p>El Servicio de Atención al Asegurado está integrado por:</p>
            <p>Responsable: Sandra Sevillano<br> Suplente: Ariel Mariano Zabaleta<br> Tel: 4857-7677 opción 2</p>
            <p>En caso de que el reclamo no haya sido resuelto o haya sido desestimado, total o parcialmente, o que haya sido denegada su admisión, podrá comunicarse con la Superintendencia de Seguros de la Nación por teléfono al 0800-666-8400, correo electrónico a denuncias@ssn.gob.ar o formulario web a través de www.argentina.gob.ar/ssn</p>
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

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
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
                subject: isRegistrado?'Consulta de Póliza':''
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

<script type="text/javascript">
    $( ".center-lacaja" ).slick( {
        dots: true,
        touchMove: true,
        infinite: false,
        centerMode: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        swipe: true,
        responsive: [ {
            breakpoint: 769,
            settings: {
                arrows: false,
                infinite: false,
                centerMode: false,
                centerPadding: '40px',
                slidesToShow: 3,
                slidesToScroll: 2,
                swipe: true,
            }
        }, {
            breakpoint: 480,
            settings: {
                infinite: true,
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1,
                swipe: true,
                mobileFirst: true,
            }
        } ]
    } );
</script>

<script src="/js/general.js"></script>
