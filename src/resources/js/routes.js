import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {
            path: '/',
            redirect: '/cotizadorbici/planes-seguro-bicicleta',
        },
        {
            path: '/cotizadorbici/planes-seguro-bicicleta',
            name: 'select-plan',
            component: require('./views/SelectPlan').default
        },
        {
            path: '/cotizadorbici/datos-personales/:plan_id',
            name: 'personal-information',
            component: require('./views/PersonalInformation').default
        },
        {
            path: '/cotizadorbici/forma-de-pago/:plan_id',
            name: 'payment-method',
            component: require('./views/PaymentMethod').default
        },
        {
            path: '/cotizadorbici/solicitud-confirmacion/:plan_id',
            name: 'terms',
            component: require('./views/Terms').default
        },
        {
            path: '/cotizadorbici/poliza-emitida',
            name: 'confirm',
            component: require('./views/Confirmation').default
        },

        {
            path: '*',
            component: require('./views/404').default
        },
    ],
    mode: 'history'
});
