<template>
    <base-layout-component>
        <loading :active.sync="is_loading"></loading>
        <form id="solicitar" name="solicitar" action="Solicitar.trx" method="post">
            <div class="container mg-xlg-b mg-lg-t text-center">

                <h1 class="title-md">Seguro de Bicicleta o Monopatín eléctrico</h1>
                <hr class="centered">

                <h2 class="title-sm">Cobertura de robo en todo el país y al mismo precio durante todo el año <a href="#" data-toggle="modal" data-target="#Paso1-Modal-Coberturas" class="link-red"><i class="fal fa-question-circle"></i></a></h2>

                <h3 class="mg-t title-sm font-1">Seleccioná tu plan:</h3>

                <!-- slider card precios -->
                <div class="row">
                    <div class="center-lacaja slider mg-b">
                        <slick
                            ref="slick"
                            :options="slickOptions"
                            v-if="plans.length">
                            <div class="packs" v-for="plan in plans">
                                <div class="column column-pack">
                                    <div class="column-header text-center bg bg-g">
                                        <span class="title-lg color-w">${{ plan.fee }}</span><br>
                                        <span class="color-w">Por mes<sup>(1)</sup></span>
                                    </div>
                                    <div class="column-body">
                                        <ul>
                                            <li>
                                            <span class="title-sm">
                                                Suma asegurada total
                                                <br />
                                                <strong>{{ plan.top_hedge_display }}</strong>
                                            </span>
                                            </li>
                                            <li>
                                                <router-link :to="'/cotizadorbici/datos-personales/'+plan.code"><a class="btn btn-c1 btn-block btn-rounded">{{ $t('cotizador.promotions.hire') }}</a></router-link>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </slick>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 text-center">
                        <a href="#" data-toggle="modal" data-target="#Paso1-Modal-Coberturas" class="title-sm link-red"><i class="fal fa-plus-circle"></i> Conocé más</a>
                    </div>
                </div>
            </div>
        </form>
    </base-layout-component>
</template>

<script src="../scripts/SelectPlan.js"></script>

<style scoped>
.center-lacaja {
    height: 300px !important;
}

.packs {
    width: 95% !important;
}
</style>
