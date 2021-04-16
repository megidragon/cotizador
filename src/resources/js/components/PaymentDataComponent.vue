<template>
    <section id="payment-data">
        <div class="container payment-data-container">
            <div class="mg-b mg-xlg-t">
                <div class="row">
                    <div class="col-sm-4 payment-data-section mg-lg-b">
                        <a href="#" class="payment-data-icon" data-toggle="modal" data-target="#payment-data-Modal-1" data-title="Tarjetas de crédito / débito" rel="nofollow">
                            <img alt="" src="/nuevosAssets/images/f47-credit-card.svg">
                        </a>
                        <div class="payment-data-title">{{$t('cotizador.promotions.pay_with_card')}}</div>
                        <div class="payment-data-subtitle">
                            <a href="#" data-toggle="modal" data-target="#payment-data-Modal-1" data-title="Ver más" rel="nofollow">{{$t('cotizador.general.view_more')}}</a>
                        </div>
                    </div>
                    <div class="col-sm-4 payment-data-section mg-lg-b">
                        <a href="#" class="payment-data-icon" data-toggle="modal" data-target="#payment-data-Modal-3" data-title="Medios de pago" rel="nofollow">
                            <img alt="" src="/nuevosAssets/images/d12-net-baking.svg">
                        </a>
                        <div class="payment-data-title">{{$t('cotizador.promotions.pay_with_other_method')}}</div>
                        <div class="payment-data-subtitle">
                            <a href="#" data-toggle="modal" data-target="#payment-data-Modal-3" data-title="Medios de pago" rel="nofollow">{{$t('cotizador.general.view_more')}}</a>
                        </div>
                    </div>
                    <div class="col-sm-4 payment-data-section mg-lg-b">
                        <a href="#" class="payment-data-icon" data-toggle="modal" data-target="#payment-data-Modal-2" data-title="Sitio 100% seguro" rel="nofollow">
                            <img alt="" src="/nuevosAssets/images/f19-lock-symbol.svg">
                        </a>
                        <div class="payment-data-title">{{$t('cotizador.promotions.secure_site')}}</div>
                        <div class="payment-data-subtitle">
                            <a href="#" data-toggle="modal" data-target="#payment-data-Modal-2" data-title="Sitio 100% seguro" rel="nofollow">{{$t('cotizador.promotions.secure_site_text')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </section>
</template>

<script>
export default {
    name: 'PaymentDataComponent'
}
</script>
