<template>
    <div>
        <section id="footer-top" v-if="show_legals">
            <div class="container">
                <div class="row mg-lg-t mg-lg-b">
                    <div class="col-md-12">
                        <p class="small mg-sm-b"><strong>LEGALES</strong></p>
                        <p class="small">
                            <a href="#" data-toggle="modal" data-target="#Legales-Modal-1" data-title="Bases y condiciones" rel="nofollow">(1) Bases y condiciones</a>
                        </p>
                        <p class="small">
                            <a href="#" data-toggle="modal" data-target="#Legales-Modal-2" data-title="(2) Protección de datos personales" rel="nofollow">(2) Protección de datos personales</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sticky-contact" v-if="show_contact">
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

        <footer v-if="show_foot">
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
    </div>
</template>

<script>
export default {
    name: 'FooterComponent',
    props: {
        show_legals: {
            default: true,
        },
        show_contact: {
            default: true,
        },
        show_foot: {
            default: true,
        },
    },
}
</script>
