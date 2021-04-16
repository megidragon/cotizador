<template>
    <div v-if="run">
        <loading :active.sync="this.$store.state.is_loading"></loading>

        <process-component :current-step="step" :previous_route="previous_route"></process-component>

        <div class="wrapper">
            <section id="cotizador">
                <error-display-component :errors="errors" :display="Object.keys(errors).length > 0"></error-display-component>

                <plan-resume-component
                    :plan_id="plan_id"
                    :title="title"></plan-resume-component>

                <!-- View render here -->
                <slot/>

            </section>
        </div>

        <payment-data-component></payment-data-component>

        <footer-component></footer-component>
    </div>
</template>

<script>
import ProcessComponent from '../components/ProcessComponent';
import PlanResumeComponent from '../components/PlanResumeComponent';
import PaymentDataComponent from '../components/PaymentDataComponent';
import ErrorDisplayComponent from '../components/ErrorDisplayComponent';
import FooterComponent from '../components/FooterComponent';
import Loading from 'vue-loading-overlay'
import 'vue-loading-overlay/dist/vue-loading.css'


export default {
    name: 'CotizadorLayoutComponent',
    components: { ProcessComponent, PlanResumeComponent, PaymentDataComponent, ErrorDisplayComponent, Loading, FooterComponent },
    props: {
        title: {
            type: String,
            required: true
        },
        step: {
            type: Number,
            required: true
        },
        previous_route: {
            type: String,
            required: false,
            default: '/'
        },
        run: {
            type: Boolean,
            required: false,
            default: true
        },
        errors: {
            type: Object,
            required: false,
            default: () => {
                return {};
            }
        },
        plan_id: {
            type: Number,
            required: true
        }
    }
}
</script>
