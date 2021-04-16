<template>
    <div class="container mg-b">
        <h2>{{ title }}</h2>
        <hr class="mg-sm-t mg-lg-b">

        <a class="btn-link color-1 visible-xs visible-sm hidden-md hidden-lg mg-lg-b" role="button" data-toggle="collapse" href="#Foo" aria-expanded="false" aria-controls="collapseExample">
            <h3><i class="fal fa-plus-circle"></i> {{$t('cotizador.promotions.your_insurance')}}</h3>
            <hr class="mg-b mg-sm-t">
        </a>

        <div id="Foo" class="collapse in">
            <div class="block-resume">
                <div class="row">
                    <div class="col-sm-4">
                        <p class="mg-b"><span class=""><i class="fal fa-check-circle">&nbsp;</i>{{$t('cotizador.promotions.plan', {id: this.plan.code})}} </span> </p>
                    </div>
                    <div class="col-sm-4">
                        <p class="mg-b"><i class="fal fa-check-circle">&nbsp;</i>{{$t('cotizador.promotions.show_plan_promotion_text', {amount: this.plan.top_hedge_display, percent: 20})}}</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="mg-b">
                            <i class="fal fa-check-circle">&nbsp;</i>{{$t('cotizador.promotions.price_per_month', {price: this.plan.fee})}}<sup>(1)</sup>
                        </p>
                    </div>
                </div>
                <hr class="hr-light mg-lg-b">
            </div>
        </div>
    </div>
</template>

<script>
import PlanProvider from '../providers/PlanProvider'

export default {
    name: 'PlanResumeComponent',
    props: {
        plan_id: {
            type: Number,
            required: true
        },
        title: {
            type: String,
            required: true
        }
    },
    mounted() {
        this.$store.state.is_loading = true

        PlanProvider.getPlan(this.plan_id).then(response => {
            this.plan = response.data.data;
            this.$store.state.is_loading = false
        })
    },
    data() {
        return {
            plan: {
                code: 'xxx',
                description: '',
                fee: 'xxx',
                top_hedge: 0,
                top_hedge_display: 'xx.xxx',
                hedge: []
            }
        }
    },
}
</script>
