import CotizadorLayoutComponent from '../layout/CotizadorLayoutComponent'
import DataProvider from "../providers/DataProvider";
import StepService from "../services/StepService";


export default {
    name: 'PaymentMethod',
    components: { CotizadorLayoutComponent },
    mounted() {
        if (!this.plan_id)
        {
            this.run = false
            alert('Debe seleccionar un plan para continuar.')
            window.location.href = '/'
        }

        DataProvider.getCurrentStep().then(response => {
            if (parseInt(response.data.data.step) !== 4)
            {
                alert('step: '+response.data.data.step)
                return window.location.href = '/'
            }

            this.fillData()
        })
    },
    data() {
        return {
            // core config
            run: true,
            debug_mode: process.env.NODE_ENV === 'development',
            plan_id: Number(this.$route.params.plan_id),
            is_loading: false,
            errors: {},

            form: {
                payment_method: null,
                cbu: null,
                card_owner_name: null,
                card_number: null,
                card_expiration_month: null,
                card_expiration_year: null
            },

            form_credit: false,
            form_debit: false,
        }
    },
    methods: {
        submit() {
            let data = {
                payment_method: this.form.payment_method
            }

            if (this.form_credit)
            {
                data.card_number = this.form.card_number
                data.card_owner_name = this.form.card_owner_name,
                data.card_expiration_month = this.form.card_expiration_month,
                data.card_expiration_year = this.form.card_expiration_year
            } else
            {
                data.cbu = this.form.cbu
            }

            this.$store.state.is_loading = true;
            StepService.sendForm(2, data)
                .then(response => {
                    this.$store.state.is_loading = false;
                    this.$router.replace(`/cotizadorbici/solicitud-confirmacion/${this.plan_id}`)
                })
                .catch(err => {
                    this.$store.state.is_loading = false;
                    this.errors = err.data.errors;
                    alert('Fallo el llamado al servicio.');
                })
        },

        isNumber(evt)
        {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if ((charCode > 31 && (charCode < 48 || charCode > 57)) && charCode !== 46)
            {
                evt.preventDefault()
            } else
            {
                return true;
            }
        },

        toUp(e)
        {
            e.target.value = e.target.value.toUpperCase();
            return true
        },

        parseYear(i) {
            return i+this.year-1
        },

        showForm(payment_method) {
            this.form_credit = payment_method === 'TA'
            this.form_debit = payment_method === 'BA'
        },

        setMethod(payment_method)
        {
            this.form.payment_method = payment_method;
            this.showForm(payment_method)
        },

        fillData()
        {

        }
    },
    computed: {
        year: () => {
            return new Date().getFullYear()
        }
    }
}
