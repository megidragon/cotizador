
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html lang="es">
<head>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="-1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <meta name="format-detection" content="telephone=no"/>









    <title>La Caja de ahorro y seguro: Cotizador de seguro de bicicleta o monopatín eléctrico</title>


    <!-- fav & smartphone icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/retail/common/assets/ico/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" href="/retail/common/assets/ico/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="/retail/common/assets/ico/favicon-16x16.png" sizes="16x16"/>
    <link rel="manifest" href="/retail/common/assets/ico/manifest.json"/>
    <link rel="mask-icon" href="/retail/Retail/images/static/masivos/nuevosAssets/safari-pinned-tab.svg" color="#CCCCCC"/>
    <meta name="theme-color" content="#ffffff"/>

    <!-- jquery -->
    <script type="text/javascript" src="/retail/common/nuevosAssets/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="/retail/common/nuevosAssets/js/jquery.easing.1.3.min.js"></script>
    <script type="text/javascript" src="/retail/common/nuevosAssets/js/bootstrap.min.js"></script>

    <!-- font-awesome -->
    <link rel="stylesheet" href="/retail/common/nuevosAssets/css/font-awesome.css" type="text/css"/>
    <link rel="stylesheet" href="/retail/common/nuevosAssets/css/fontawesome-pro-brands.css" type="text/css"/>
    <link rel="stylesheet" href="/retail/common/nuevosAssets/css/fontawesome-pro-core.css" type="text/css"/>
    <link rel="stylesheet" href="/retail/common/nuevosAssets/css-bici/fontawesome-pro-light.css" type="text/css"/>
    <link rel="stylesheet" href="/retail/common/nuevosAssets/css-bici/fontawesome-pro-regular.css" type="text/css"/>
    <link rel="stylesheet" href="/retail/common/nuevosAssets/css-bici/fontawesome-pro-solid.css" type="text/css"/>
    <link rel="stylesheet" href="/retail/common/nuevosAssets/css/fontawesome-pro-svg-framework.css" type="text/css"/>

    <!-- animate.css -->
    <link rel="stylesheet" href="/retail/common/nuevosAssets/css/animate.css" type="text/css"/>

    <!-- jquery.scrollTo -->
    <script type="text/javascript" src="/retail/common/nuevosAssets/js/jquery.scrollTo.min.js"></script>

    <!-- owl.carousel -->
    <link rel="stylesheet" href="/retail/common/nuevosAssets/css/owl.carousel.css" type="text/css"/>
    <script type="text/javascript" src="/retail/common/nuevosAssets/js/owl.carousel.min.js"></script>

    <!-- datetimepicker.js -->
    <!--<script type="text/javascript" src="assets/js/moment-with-locales.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.css" type="text/css"/>-->

    <!-- validator.js -->
    <script type="text/javascript" src="/retail/common/nuevosAssets/js/validator.min.js"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>


    <!-- main -->
    <link rel="stylesheet" href="/retail/common/nuevosAssets/css/normalize.css" type="text/css"/>
    <link rel="stylesheet" href="/retail/common/nuevosAssets/css/main-bici.css" type="text/css"/>
    <link rel="stylesheet" href="/retail/common/nuevosAssets/css/cotizador.css" type="text/css"/>

    <script language="javascript" src="/retail/common/js/functions.js"></script>
    <script type="text/javascript" src="/retail/common/js/Functions-masivo.js"></script>
    <script type="text/javascript" src="/retail/common/js/validations.js"></script>
    <script type="text/javascript" src="/retail/common/js/ajax.js"></script>

    <script type="text/javascript">
        var isIE6 = (window.external && typeof window.XMLHttpRequest == "undefined");
        if (isIE6) {-
            $(document)
                .ready(
                    function() {
                        var prot = window.location.protocol;
                        var host = window.location.host;
                        location.href = "https://www.lacaja.com.ar/lacaja/Retail/files/content/navegador-no-compatible/index.html";
                    });
        }
    </script>



    <script type='text/javascript'>

        var smartLookId = "";

        smartLookId = '5625914ae8db33da4fba8aa019237ce8174be6f5';


        window.smartlook||(function(d) {
            var o=smartlook=function(){o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
            var c=d.createElement('script');
            o.api=new Array();
            c.async=true;
            c.type='text/javascript';
            c.charset='utf-8';
            c.src='https://rec.smartlook.com/recorder.js';
            h.appendChild(c);
        })(document);
        smartlook('init', smartLookId);
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WTTWRMX');</script>
    <!-- End Google Tag Manager -->



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

                                                $("#floating_chat_button img").attr("src","/retail/common/assets/images/goto-chat.svg");
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

</head>

<body>

<div class="preloader">
    <div class="preloader-spinner"></div>
</div>


<div id="header-progress">
    <header>
        <div class="container header-trans">
            <a href="tel:08108882888" class="nav-phone">
                <i class="fa fa-phone fa-fw"></i>
                <span class="font-2 hidden-xs">0810 888-2888</span>
            </a>
            <h3><a href="javascript:history.back()" class="back"><i class="far fa-arrow-left color-1 mg-sm-r"></i></a><span class="steps"></span></h3>
            <div class="clearfix"></div>
        </div>
    </header>
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
</div>



<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WTTWRMX"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- Steps -->
<script>
    $( function () {
        $( ".progress-bar" ).css( {
            "width": "100%"
        } );

    } );
    $( function () {
        $( '.steps' ).html( '¡Ya estás asegurado!' );
    } );
</script>
<style>
    .back {
        display: none;
    }
</style>

<!-- fin Steps -->

<div class="wrapper">
    <section id="cotizador">
        <div class="container">
            <h2 class="font-1 title-lg mg-b">Gracias por elegirnos.</h2>
            <h3 class="mg-b">La póliza se emitió con éxito y la vas a recibir por email en los próximos minutos.</h3>
            <h3 class="font-1 mg-xlg-b mg-xlg-t hidden-xs">Accedé a la documentación de tu póliza ingresando a nuestro:</h3>
        </div>
        <div class="hidden-xs mg-xlg-b">
            <hr>
            <div class="container">
                <div class="mg-lg-b mg-lg-t">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                            <a href="/retail/Retail/CotizadorMasivo/LimpiarSesion.trx" class="btn btn-default btn-ghost-g btn-full">Centro de Operaciones Online</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>

    <section class="app-home mg-xlg-t" style="background-image: url('/retail/common/nuevosAssets/images/Hero-Sitio-App-990x530.png')">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 app-home-left">
                    <div class="pd-v-xlg">
                        <h3 class="mg-lg-b font-1  title-md color-w">Descargá nuestra App y descubrí todo lo que podes hacer desde tu celular</h3>
                        <p class="large mg-b color-w">Llevá tu documentación siempre con vos, denunciá un siniestro o seguí el estado de tus trámites entre otras operaciones y no te preocupes más</p>
                        <p class="large mg-lg-b color-w"><a href="https://seguros.lacaja.com.ar/lacaja-app" rel="nofollow" target="_blank" title="Conocé nuestra App" tabindex="-1"><i class="fas fa-chevron-circle-right">&nbsp;</i>Conocé nuestra App </a></p>
                        <a class="mg-r" href="https://play.google.com/store/apps/details?id=com.lacaja.android&amp;hl=es" tabindex="-1" target="_blank" title="Descargala en Google Play"><img alt="google" src="/retail/common/nuevosAssets/images/logo_store_google.svg" width="150"></a> <a href="https://itunes.apple.com/us/app/la-caja/id479755539?mt=8" tabindex="-1" target="_blank" title="Descargala del App Store"> <img alt="apple" src="/retail/common/nuevosAssets/images/logo_store_apple.svg" width="136"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 app-home-right">
                    <img class="app-foto" src="/retail/common/nuevosAssets/images/Home-APP-img_3.png">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="mg-xlg-b mg-xlg-t text-center">
            <div class="container">
                <h3 class="title-md font-1 text-center mg-b mg-xlg-t">Conocé otros productos</h3>
                <hr class="centered">

                <div class="row mg-xlg-t">
                    <div class="owl-stage">
                        <div class="col-sm-4">
                            <div class="card card-overlay mg-lg-b-xs" style="background: url('/retail/common/nuevosAssets/images/seg_auto.jpg');">
                                <div class="card-caption">
                                    <h4 class="card-title">Seguro de Auto</h4>
                                    <div class="card-desc">
                                        <p>Asegurá tu auto de la forma más simple y mantenete siempre en movimiento.</p>
                                    </div>
                                    <a href='https://seguros.lacaja.com.ar/personas/seguro-automotor' target="_blank" class="btn card-btn">Leer más<i class="fal fa-angle-right fa-fw fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card card-overlay mg-lg-b-xs" style="background: url('/retail/common/nuevosAssets/images/seg_hogar.jpg');">
                                <div class="card-caption">
                                    <h4 class="card-title">Seguro de Hogar</h4>
                                    <div class="card-desc">
                                        <p>Empezá a disfrutar de la tranquilidad que vos y tu familia se merecen.</p>
                                    </div>
                                    <a href='https://seguros.lacaja.com.ar/personas/seguro-de-hogar' target="_blank" class="btn card-btn">Leer más<i class="fal fa-angle-right fa-fw fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">

                            <div class="card card-overlay mg-lg-b-xs" style="background: url('/retail/common/nuevosAssets/images/seg_movil.jpg');">
                                <div class="card-caption">
                                    <h4 class="card-title">Seguro de Tecnología Móvil</h4>
                                    <div class="card-desc">
                                        <p>Un seguro de fácil contratación y a un precio muy conveniente.</p>
                                    </div>
                                    <a href='https://seguros.lacaja.com.ar/personas/seguro-de-tecnologia-movil' target="_blank" class="btn card-btn">Leer más<i class="fal fa-angle-right fa-fw fa-lg"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="sticky-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-8 col-md-5 col-md-offset-7 col-sm-6 col-sm-offset-6">
                <div id="contact-box-general" class="desktop--contact-box-container">
                    <div class="user-container">
                        <div class="image" style="background-image:url('/retail/common/nuevosAssets/images/user.jpg')" alt="User"></div>
                        <div class="name">
                            <p>¿Necesitas ayuda?</p>
                        </div>
                    </div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li id="iconoChat"><a href="#tab-1"><i class="fal fa-comments"></i></a>
                            </li>
                            <!-- <li><a href="#tab-3"><i class="fal fa-envelope"></i></a>
                            </li> -->
                            <li><a href="#tab-2"><i class="fal fa-phone"></i></a>
                            </li>
                            <li><a href="#tab-4"><i class="fal fa-map-marker-alt"></i></a>
                            </li>
                        </ul>
                        <div class="row">
                            <div class="">
                                <div class="tab">
                                    <div id="tab-1" class="tab-content">
                                        <div class="pd-full">
                                            <a href="#tab-4" class="close"><span aria-hidden="true">&times;</span></a>
                                            <h3 class="font-2 mg-b color-1">Chat</h3>
                                            <hr class="mg-b">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>Chateá con uno de nuestros representantes</p>
                                                    <a href="#" role="button" target="_blank" class="btn btn-c1 full mg-t">Comenzar</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-content">
                                        <div class="pd-full">
                                            <a href="#tab-4" class="close"><span aria-hidden="true">&times;</span></a>
                                            <h3 class="font-2 mg-b color-1">Llamanos</h3>
                                            <hr class="mg-b">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>Una sola línea para todas tus consultas:</p>
                                                    <a class="btn btn-c1 full mg-t" href="tel:08108882888"><i class="fal fa-phone fa-fw"></i>0810-888-2888</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab-4" class="tab-content">
                                        <div class="pd-full">
                                            <a href="#tab-4" class="close"><span aria-hidden="true">&times;</span></a>
                                            <h3 class="font-2 mg-b color-1">Sucursales</h3>
                                            <hr class="mg-b">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>Acercate a una de nuestras sucursales</p>
                                                    <a href="https://www.lacaja.com.ar/sucursales" role="button" target="_blank" class="btn btn-c1 full mg-t">Buscar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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

        /* 		$( "[data-toggle=popover]" ).popover();

                 $( '.datetimepicker' ).datetimepicker( {
                    locale: 'es',
                    format: 'L',
                    minDate: moment().add( 1, 'days' ),
                    maxDate: moment().add( 20, 'days' )
                } );

                $( window ).scroll( function () {
                    var value = $( this ).scrollTop();
                    if ( value > 0 ) {
                        $( 'body' ).addClass( 'header-small' );
                    } else {
                        $( 'body' ).removeClass( 'header-small' );
                    }
                } );*/
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

    <!-- MODALS DE INFORMACIÓN -->
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
                    <p class="mg-t">El inicio de tu seguro será a partir de las 12hs de hoy o de la fecha que nos solicites, siempre que todos los pasos requeridos a continuación se encuentren completos para que la póliza se emita.</p>
                    <p>El envío de la presente solicitud no otorga cobertura.</p>
                    <p>Únicamente tendrás cobertura en caso de aceptación expresa de la misma por parte de Cía de Seguros.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal -->

    <!-- MODALS Payment data -->

    <!-- payment-data Modal 1 - Tarjetas de crédito / débito -->
    <div class="modal fade" id="payment-data-Modal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content no-pd">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Pago con Tarjetas</h4>
                </div>
                <div class="modal-body">
                    <h3 class="mg-b color-1">Paga online en nuestro sitio</h3>
                    <h4 class="mg-b">Seguro, rápido y de la manera más cómoda</h4>
                    <p>Podes elegir cualquiera de estos medios para pagar. Es rápido, seguro y no tiene costo adicional</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Crédito</h4>
                            <ul class="list">
                                <li>Visa Argentina</li><li>Visa Electron</li><li>Mastecard</li><li>American Express</li><li>Naranja</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h4>Débito</h4>
                            <ul class="list">
                                <li>Visa Argentina</li><li>Mastercard</li><li>American Express</li><li>Diners Club Argentina</li><li>Nevada</li><li>Naranja</li><li>Cabal</li><li>Débito en cuenta</li>
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
                    <h4 class="modal-title" id="myModalLabel">Cómo te protegemos</h4>
                </div>
                <div class="modal-body">
                    <h3 class="mg-b color-1">Sitio 100% seguro</h3>
                    <h4 class="mg-b">Cumplimos con los más altos estándares de seguridad de la industria</h4>
                    <p>Todos los pagos de La Caja se procesan en nuestra propia plataforma para pagar de forma segura. Por eso, no importa cómo pagues, ¡tu dinero siempre está protegido!</p>

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
                    <h3 class="mg-b color-1">Medios de pago electrónicos</h3>
                    <h4 class="mg-b">Conocé otras alternativas de pago disponible.</h4>
                    <ul class="list">
                        <li>Red Pago Fácil (Presentando la factura o DNI)</li><li>Rapipago (Presentando la factura o DNI)</li><li>Pronvincia Net (Presentando la factura o DNI)</li><li>Cobro Express (Presentando la factura)</li><li>Mercado Pago vía Pago Fácil</li><li>Pago Mis Cuentas / Red Banelco</li><li>Red Link</li>
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
                    <p>(1) Oferta válida en todo el país hasta el día de la fecha, pagando con tarjeta de crédito o cuenta bancaria. Precio mensual, no incluye impuestos de sellos provinciales. Según términos y condiciones de póliza.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Fin Modal -->

    <!-- Legales Modal 2- Protección de datos personales -->
    <div class="modal fade" id="Legales-Modal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content no-pd">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Legales</h4>
                </div>
                <div class="modal-body">
                    <h3 class="mg-b color-1">Protección de Datos Personales</h3>
                    <p>(1) La información que otorgo en virtud de la presente operación informática, implica la prestación del consentimiento expreso dispuesto por la ley 25.326. Conozco que podré ejercer los derechos de acceso, rectificación y supresión de datos y acepto que la información que otorgo podrá ser utilizada para acciones de marketing en forma directa o a través de terceros. La información será archivada por Caja de Seguros S.A. con domicilio en Fitz Roy 957 Ciudad Autónoma de Buenos Aires. <a class="color-1" href="http://www.lacaja.com.ar/seguros-personas/proteccion-datos-personales" target="_blank">Protección de Datos Personales</a>
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
        <div class="col-md-3 mg-b"><img alt="SSN" src="/retail/common/nuevosAssets/images/LogoSSN.svg" width="250px"/>
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
            <img src="/retail/common/nuevosAssets/images/logo2.jpg" alt="list item 1"/>
            <img src="/retail/common/nuevosAssets/images/logo3.jpg" alt="list item 2"/>
            <img src="/retail/common/nuevosAssets/images/logo4.jpg" alt="list item 3"/>
            <img src="/retail/common/nuevosAssets/images/logo5.jpg" alt="list item 4"/>
        </div>
    </div>
</div>

<!-- progress bar -->
<script>
    /* 		function move() {
                var elem = document.getElementById( "myBar" );
                var width = 1;
                var id = setInterval( frame, 10 );

                function frame() {
                    if ( width >= 100 ) {
                        clearInterval( id );
                        $( '#modal-calculando' ).modal( 'hide' );
                        location.replace( "paso2.php" )
                    } else {
                        width++;
                        elem.style.width = width + '%';
                        document.getElementById( "demo" ).innerHTML = width * 1 + '%';
                    }
                }
            } */
</script>

</body>
</html>


