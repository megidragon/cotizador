<html lang="es">
<head>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="-1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>La Caja de ahorro y seguro: Cotizador de seguro de bicicleta o monopatín eléctrico</title>


    <!-- fav & smartphone icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/ico/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" href="/assets/ico/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="/assets/ico/favicon-16x16.png" sizes="16x16"/>
    <link rel="manifest" href="/assets/ico/manifest.json"/>
    <link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="#CCCCCC"/>
    <meta name="theme-color" content="#ffffff"/>

    <!-- jquery -->
    <script type="text/javascript" src="/nuevosAssets/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="/nuevosAssets/js/jquery.easing.1.3.min.js"></script>
    <script type="text/javascript" src="/nuevosAssets/js/bootstrap.min.js"></script>

    <!-- font-awesome -->
    <link rel="stylesheet" href="/nuevosAssets/css/font-awesome.css" type="text/css"/>
    <link rel="stylesheet" href="/nuevosAssets/css/fontawesome-pro-brands.css" type="text/css"/>
    <link rel="stylesheet" href="/nuevosAssets/css/fontawesome-pro-core.css" type="text/css"/>
    <link rel="stylesheet" href="/nuevosAssets/css-bici/fontawesome-pro-light.css" type="text/css"/>
    <link rel="stylesheet" href="/nuevosAssets/css-bici/fontawesome-pro-regular.css" type="text/css"/>
    <link rel="stylesheet" href="/nuevosAssets/css-bici/fontawesome-pro-solid.css" type="text/css"/>
    <link rel="stylesheet" href="/nuevosAssets/css/fontawesome-pro-svg-framework.css" type="text/css"/>

    <!-- animate.css -->
    <link rel="stylesheet" href="/nuevosAssets/css/animate.css" type="text/css"/>

    <!-- jquery.scrollTo -->
    <script type="text/javascript" src="/nuevosAssets/js/jquery.scrollTo.min.js"></script>

    <!-- owl.carousel -->
    <link rel="stylesheet" href="/nuevosAssets/css/owl.carousel.css" type="text/css"/>
    <script type="text/javascript" src="/nuevosAssets/js/owl.carousel.min.js"></script>

    <!-- vue recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer>
    </script>

    <!-- datetimepicker.js -->
    <!--<script type="text/javascript" src="assets/js/moment-with-locales.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.css" type="text/css"/>-->

    <!-- validator.js -->
    <script type="text/javascript" src="/nuevosAssets/js/validator.min.js"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>


    <!-- main -->
    <link rel="stylesheet" href="/nuevosAssets/css/normalize.css" type="text/css"/>
    <link rel="stylesheet" href="/nuevosAssets/css/main-bici.css" type="text/css"/>
    <link rel="stylesheet" href="/nuevosAssets/css/cotizador.css" type="text/css"/>

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
        //TODO: Desabilitado para desarrollo
        if ({{ env('APP_DEBUG') ? 'false' : 'true' }}) {
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
        }

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
