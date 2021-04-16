@extends('layouts.legacy')
@section('content')
<div class="wrapper">
    <section id="cotizador">
        <div class="bgcabseccion" style="background: url('/nuevosAssets/images/Hero-Home-Sitio-bici-2000x480.png') center center no-repeat;">
            <div class="container">
                <div class="cabseccion">
                    <div class="row">
                        <div class="col-sm-7 col-md-8 col-xs-6">
                            <h2 class="slide-title">Asegurá tu bicicleta o monopatín 100% online</h2>

                            <div class="slide-desc">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form id="solicitar" name="solicitar" action="Solicitar.trx" method="post">

            <input type="hidden" name="utm_source" value="google" id="utm_source"/>

            <input type="hidden" name="utm_medium" value="email" id="utm_medium"/>

            <input type="hidden" name="utm_campaign" value="solicitoNoContrato" id="utm_campaign"/>

            <input type="hidden" name="premio" value="" id="premio"/>

            <input type="hidden" name="cantPlanes" value="0" id="cantPlanes"/>

            <input type="hidden" name="numSecuPol" value="414115340009" id="numSecuPol"/>

            <input type="hidden" name="opcionSeleccionada" value="" id="opcionSeleccionada"/>

            <input type="hidden" name="tipoProducto" value="" id="tipoProducto"/>

            <input type="hidden" name="email" value="" id="email"/>


            <div class="container mg-xlg-b mg-lg-t text-center">

                <h1 class="title-md">Seguro de Bicicleta o Monopatín eléctrico</h1>
                <hr class="centered">

                <h2 class="title-sm">Cobertura de robo en todo el país y al mismo precio durante todo el año <a href="#" data-toggle="modal" data-target="#Paso1-Modal-Coberturas" class="link-red"><i class="fal fa-question-circle"></i></a></h2>

                <h3 class="mg-t title-sm font-1">Seleccioná tu plan:</h3>

                <!-- slider card precios -->
                <div class="row">
                    <div class="center-lacaja slider mg-b">

                        @foreach($plans as $i => $plan)
                            <div class="packs">
                                <div id="block-producto-{{$i++}}">
                                    <div class="column column-pack">
                                        <div class="column-header text-center bg bg-g">
                                            <span class="title-lg color-w">${{$plan['fee']}}</span><br>
                                            <span class="color-w">Por mes<sup>(1)</sup></span>
                                        </div>
                                        <div class="column-body">
                                            <ul>
                                                <li>
                                                    <span class="title-sm">
                                                        Suma asegurada total
                                                        <br />
                                                        <strong>{{$plan['top_hedge_display']}}</strong>
                                                    </span>
                                                </li>
                                                <li>
                                                    <a href="{{url('/cotizador?plan_id='.$plan['code'])}}" class="btn btn-c1 btn-block btn-rounded">Contratá</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 text-center">
                        <a href="#" data-toggle="modal" data-target="#Paso1-Modal-Coberturas" class="title-sm link-red"><i class="fal fa-plus-circle"></i> Conocé más</a>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <section>
        <div class="bg bg-gl">
            <div class="container text-center">
                <!-- Servicios destacados  -->

                <h3 class="title-md font-1 text-center mg-xlg-t">Servicios</h3>
                <hr class="centered">
                <p>¿Con qué servicios cuento en caso de accidente o emergencia?</p>
                <div class="row text-center mg-lg-t flex-container">
                    <div class="col-xs-6 col-sm-4 mg-lg-b">
                        <div class="card-servicios">
                            <a href="#" data-toggle="modal" data-target="#Paso1-Modal-Coberturas">
                                <div class="bg bg-gl pd-full">
                                    <p><img alt="LC" height="48" src="/nuevosAssets/images/e03-household-content-insurance.svg" width="48"></p>
                                    <h4 class="mg-sm-b color-8"><strong>Asesoramiento</strong></h4>
                                    <p>Si tuviste un inconveniente, estamos para ayudarte las 24 hs.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 mg-lg-b">
                        <div class="card-servicios">
                            <a href="#" data-toggle="modal" data-target="#Paso1-Modal-Coberturas">
                                <div class="bg bg-gl pd-full">
                                    <p><img alt="LC" height="48" src="/nuevosAssets/images/a09-car-insurance.svg" width="48"></p>
                                    <h4 class="mg-sm-b color-8"><strong>Taxi o remis</strong></h4>
                                    <p>Te acercamos a tu domicilio o a la comisaria más cercana.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 mg-lg-b">
                        <div class="card-servicios">
                            <a href="#" data-toggle="modal" data-target="#Paso1-Modal-Coberturas">
                                <div class="bg bg-gl pd-full">
                                    <p><img alt="LC" height="48" src="/nuevosAssets/images/d11-wallet.svg" width="48"></p>
                                    <h4 class="mg-sm-b color-8"><strong>Gastos</strong></h4>
                                    <p>Cubrimos el robo total de tu bici hasta la suma asegurada.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 mg-lg-b">
                        <div class="card-servicios">
                            <a href="#" data-toggle="modal" data-target="#Paso1-Modal-Coberturas">
                                <div class="bg bg-gl pd-full">
                                    <p><img alt="LC" height="48" src="/nuevosAssets/images/b10-assistance-services.svg" width="48"></p>
                                    <h4 class="mg-sm-b color-8"><strong>Ambulancia</strong></h4>
                                    <p>En caso de robo, si hay una urgencia o emergencia médica.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 mg-lg-b">
                        <div class="card-servicios">
                            <a href="#" data-toggle="modal" data-target="#Paso1-Modal-Coberturas" >
                                <div class="bg bg-gl pd-full">
                                    <p><img alt="LC" height="48" src="/nuevosAssets/images/b19-medical-assistance.svg" width="48"></p>
                                    <h4 class="mg-sm-b color-8"><strong>Atención médica</strong></h4>
                                    <p>Verificamos por vos los centros de salud más cercanos.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 mg-lg-b">
                        <div class="card-servicios">
                            <a href="#" data-toggle="modal" data-target="#Paso1-Modal-Coberturas">
                                <div class="bg bg-gl pd-full">
                                    <p><img alt="LC" height="48" src="/nuevosAssets/images/c03-tow-truck.svg" width="48"></p>
                                    <h4 class="mg-sm-b color-8"><strong>Traslado</strong></h4>
                                    <p>Llevamos tu bici o monopatín en caso de accidente.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row mg-lg-b">
                    <p class="text-center"><a data-target="#Paso1-Modal-Coberturas" data-toggle="modal" href="#" rel="nofollow" tabindex="-1"><i class="fal fa-plus-circle">&nbsp;</i>Ver más</a></p>
                </div>
                <!-- Fin Servicios destacados  -->
            </div>
        </div>
    </section>
</div>

<section>
    <div class=" mg-xlg-b mg-xlg-t text-center">
        <div>
            <div class="container">
                <h3 class="mg-lg-b text-center mg-r mg-l">Gestioná tus pólizas 100% online</h3>

                <div class="row mg-xlg-t">
                    <div class="owl-stage">
                        <div class="col-sm-4">
                            <div class="card card-overlay mg-lg-b-xs shadow" style="background: url('/nuevosAssets/images/thumb4.jpg');">
                                <div class="card-caption">
                                    <h4 class="card-title">Preguntas frecuentes</h4>
                                    <div class="card-desc">
                                        <p>¿Tenés dudas? Ingresá acá o escribinos al chat.</p>
                                    </div>
                                    <a href="https://seguros.lacaja.com.ar/personas/seguro-de-bicicleta-faq" class="btn card-btn btn-block" target="_blank">Leer más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card card-overlay mg-lg-b-xs shadow" style="background: url('/nuevosAssets/images/thumb1.jpg');">
                                <div class="card-caption">
                                    <h4 class="card-title">Denunciar un siniestro</h4>
                                    <div class="card-desc">
                                        <p>Realizá  de manera rápida y segura tu denuncia.</p>
                                    </div>
                                    <a href="https://seguros.lacaja.com.ar/personas/siniestros" class="btn card-btn btn-block" target="_blank">Ingresar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card card-overlay mg-lg-b-xs shadow" style="background: url('/nuevosAssets/images/thumb5.jpg');">
                                <div class="card-caption">
                                    <h4 class="card-title">Sucursales</h4>
                                    <div class="card-desc">
                                        <p>Encontrá tu sucursal más cercana.</p>
                                    </div>
                                    <a href="https://www.lacaja.com.ar/sucursales" class="btn card-btn btn-block" target="_blank">Buscar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MODALS PASO 1 -->
<section id="modals">
    <!-- SERVICIOS  -->
    <div class="modal fade" id="Paso1-Modal-Coberturas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content no-pd">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Seguro de bicicleta y monopatín</h4>
                </div>
                <div class="modal-body">
                    <h2 class="mg-b color-1">Coberturas y servicios <sup>(1)</sup></h2>
                    <hr class="mg-sm-t mg-lg-b"/>
                    <h3 class="mg-b mg-lg-t">Servicios disponibles para todos los planes:</h3>
                    <ul class="list mg-lg-b">
                        <li>En caso de robo o accidente, cordinamos tu traslado en taxi o remis desde el lugar del hecho hasta la comisaria más cercana.</li>
                        <li>También te llevamos a tu domicilio o lugar donde nos  indiques, siempre que el robo o accidente se hubiera producido en la misma ciudad de residencia.</li>
                        <li>En caso de robo de tarjetas de crédito, débito y/o celular, te asesoramos sobre cómo gestionar la denuncia.</li>
                        <li>En caso de robo o accidente, cubrimos tus gastos de traslado dentro del país hasta tu domicilio (siempre que no puedas efectuarlo en el medio de transporte utilizado en el viaje).</li>
                        <li>En caso de que tengas que realizar el envío de la bicicleta y/o monopatín, el prestador asume el gasto de hasta $400 por vigencia anual de la póliza.</li>
                        <li>Franquicia del 20%.</li>
                    </ul>
                    <h3 class="mg-b">¿Qué es la franquicia?</h3>
                    <p>Es el monto de dinero que tenés que pagar ante el robo de tu bicicleta o monopatín eléctrico.</p>
                    <p class="small mg-lg-t">(1) Términos pactados con los prestadores. Consultar alcances y condiciones de los servicios en <a href="https://seguros.lacaja.com.ar/condiciones-contractuales" target="_blank">nuestra Web</a> o llamando al 0800-666-2252.</p>
                </div>
                <!-- -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="payment-data">
    <div class="container payment-data-container">
        <div class="mg-b mg-xlg-t">
            <div class="row">
                <div class="col-sm-4 payment-data-section mg-lg-b">
                    <a href="#" class="payment-data-icon" data-toggle="modal" data-target="#payment-data-Modal-1" data-title="Tarjetas de crédito / débito" rel="nofollow"><img alt="" src="/nuevosAssets/images/f47-credit-card.svg"></a>
                    <div class="payment-data-title">Pago con Tarjetas</div>
                    <div class="payment-data-subtitle"><a href="#" data-toggle="modal" data-target="#payment-data-Modal-1" data-title="Ver más" rel="nofollow">Ver más</a>
                    </div>
                </div>
                <div class="col-sm-4 payment-data-section mg-lg-b">
                    <a href="#" class="payment-data-icon" data-toggle="modal" data-target="#payment-data-Modal-3" data-title="Medios de pago" rel="nofollow"><img alt="" src="/nuevosAssets/images/d12-net-baking.svg"></a>
                    <div class="payment-data-title">Otros medios de pago</div>
                    <div class="payment-data-subtitle"><a href="#" data-toggle="modal" data-target="#payment-data-Modal-3" data-title="Medios de pago" rel="nofollow">Ver más</a>
                    </div>
                </div>
                <div class="col-sm-4 payment-data-section mg-lg-b">
                    <a href="#" class="payment-data-icon" data-toggle="modal" data-target="#payment-data-Modal-2" data-title="Sitio 100% seguro" rel="nofollow"><img alt="" src="/nuevosAssets/images/f19-lock-symbol.svg"></a>
                    <div class="payment-data-title">Sitio 100% seguro</div>
                    <div class="payment-data-subtitle"><a href="#" data-toggle="modal" data-target="#payment-data-Modal-2" data-title="Sitio 100% seguro" rel="nofollow">Tus datos están protegidos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>  <hr>
</section>

<section id="footer-top">
    <div class="container">
        <div class="row mg-lg-t mg-lg-b">
            <div class="col-md-12">
                <p class="small mg-sm-b"><strong>LEGALES</strong></p>
                <p class="small mg-sm-b">
                    <a href="#" data-toggle="modal" data-target="#Legales-Modal-1" data-title="Bases y condiciones" rel="nofollow">(1) Bases y condiciones</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="sticky-contact" style="display: block;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-8 col-md-5 col-md-offset-7 col-sm-6 col-sm-offset-6">
                <div id="contact-box-general" class="desktop--contact-box-container">
                    <div class="user-container">
                        <div class="image" style="background-image:url('/nuevosAssets/images/user.jpg')" alt="User"></div>
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


<script type="text/javascript">

    jQuery(document).ready(function() {

        $('#footerSsn').show();

    });

</script>

@stop
