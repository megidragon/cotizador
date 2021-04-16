<template>
    <div v-if="run">
        <loading :active.sync="this.$store.state.is_loading"></loading>

        <process-component :current-step="4"></process-component>

        <div class="wrapper">
            <section id="cotizador">
                <div class="container">
                    <h2 class="font-1 title-lg mg-b">{{$t('cotizador.promotions.thanks_you_for_choosing_us')}}</h2>
                    <h3 class="mg-b">{{$t('cotizador.promotions.policy_successful_emitted')}}</h3>
                    <h3 class="font-1 mg-xlg-b mg-xlg-t hidden-xs">{{$t('cotizador.promotions.access_to_your_account')}}</h3>
                </div>
                <div class="hidden-xs mg-xlg-b">
                    <hr>
                    <div class="container">
                        <div class="mg-lg-b mg-lg-t">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                    <a href="/retail/Retail/CotizadorMasivo/LimpiarSesion.trx" class="btn btn-default btn-ghost-g btn-full">{{$t('cotizador.titles.operation_center_online')}}</a>
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
                                <h3 class="mg-lg-b font-1  title-md color-w">{{$t('cotizador.promotions.download_our_app_long')}}</h3>
                                <p class="large mg-b color-w">{{$t('cotizador.promotions.keep_your_documentation')}}</p>
                                <p class="large mg-lg-b color-w"><a href="https://seguros.lacaja.com.ar/lacaja-app" rel="nofollow" target="_blank" title="Conocé nuestra App" tabindex="-1"><i class="fas fa-chevron-circle-right">&nbsp;</i>{{$t('cotizador.promotions.meet_our_app')}}</a></p>
                                <a class="mg-r" href="https://play.google.com/store/apps/details?id=com.lacaja.android&amp;hl=es" tabindex="-1" target="_blank" title="Descargala en Google Play">
                                    <img alt="google" src="/nuevosAssets/images/logo_store_google.svg" width="150">
                                </a>
                                <a href="https://itunes.apple.com/us/app/la-caja/id479755539?mt=8" tabindex="-1" target="_blank" title="Descargala del App Store">
                                    <img alt="apple" src="/nuevosAssets/images/logo_store_apple.svg" width="136">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 app-home-right">
                            <img class="app-foto" src="/nuevosAssets/images/Home-APP-img_3.png">
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="mg-xlg-b mg-xlg-t text-center">
                    <div class="container">
                        <h3 class="title-md font-1 text-center mg-b mg-xlg-t">{{ $t('cotizador.promotions.see_other_products') }}</h3>
                        <hr class="centered">

                        <div class="row mg-xlg-t">
                            <div class="owl-stage">
                                <div class="col-sm-4">
                                    <div class="card card-overlay mg-lg-b-xs" style="background: url('/retail/common/nuevosAssets/images/seg_auto.jpg');">
                                        <div class="card-caption">
                                            <h4 class="card-title">{{ $t('cotizador.subtitle.car_insurance') }}</h4>
                                            <div class="card-desc">
                                                <p>{{ $t('cotizador.promotions.see_other_products') }}</p>
                                            </div>
                                            <a href='https://seguros.lacaja.com.ar/personas/seguro-automotor' target="_blank" class="btn card-btn">{{ $t('cotizador.general.read_more') }}<i class="fal fa-angle-right fa-fw fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card card-overlay mg-lg-b-xs" style="background: url('/retail/common/nuevosAssets/images/seg_hogar.jpg');">
                                        <div class="card-caption">
                                            <h4 class="card-title">{{ $t('cotizador.subtitle.house_insurance') }}</h4>
                                            <div class="card-desc">
                                                <p>{{ $t('cotizador.promotions.house_insurance_promotion_text') }}</p>
                                            </div>
                                            <a href='https://seguros.lacaja.com.ar/personas/seguro-de-hogar' target="_blank" class="btn card-btn">{{ $t('cotizador.general.read_more') }}<i class="fal fa-angle-right fa-fw fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">

                                    <div class="card card-overlay mg-lg-b-xs" style="background: url('/retail/common/nuevosAssets/images/seg_movil.jpg');">
                                        <div class="card-caption">
                                            <h4 class="card-title">{{ $t('cotizador.subtitle.phone_insurance') }}</h4>
                                            <div class="card-desc">
                                                <p>{{ $t('cotizador.promotions.phone_insurance_promotion_text') }}</p>
                                            </div>
                                            <a href='https://seguros.lacaja.com.ar/personas/seguro-de-tecnologia-movil' target="_blank" class="btn card-btn">{{ $t('cotizador.general.read_more') }}<i class="fal fa-angle-right fa-fw fa-lg"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer-component></footer-component>
    </div>
</template>

<script src="../scripts/Confirmation.js"></script>
