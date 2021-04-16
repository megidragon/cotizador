import CotizadorLayoutComponent from '../layout/CotizadorLayoutComponent'
import DataProvider from "../providers/DataProvider";
import StepService from "../services/StepService";


export default {
    name: 'Terms',
    components: { CotizadorLayoutComponent },
    mounted() {
        if (!this.plan_id)
        {
            this.run = false
            alert('Debe seleccionar un plan para continuar.')
            window.location.href = '/'
        }

        DataProvider.getCurrentStep().then(response => {
            if (parseInt(response.data.data.step) !== 5)
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

            terms_and_services: false,
            form: {
                first_name: '*',
                last_name: '*',
                document_type: '*',
                document_number: '*',
                birth_day: '*',
                birth_month: '*',
                birth_year: '*',
                email: '*',
                phone_area_code: '*',
                phone: '*',
                gender: '*',
                address_street: '*',
                address_number: '*',
                address_floor: '*',
                address_department: '*',
                payment_method: '*',
                cbu: '*'
            },
        }
    },
    methods: {
        submit() {
            if (!this.terms_and_services)
            {
                alert('Debe aceptar los terminos y condiciones')
                return
            }

            this.$store.state.is_loading = true;
            StepService.sendForm(3, {
                terms_and_services: this.terms_and_services
            })
                .then(response => {
                    this.$store.state.is_loading = false;

                    if (response.data.type !== 'success')
                    {
                        alert('No se pudo emitir su poliza.');
                        return
                    }

                    this.$router.replace(`/cotizadorbici/poliza-emitida`)
                })
                .catch(err => {
                    this.$store.state.is_loading = false;
                    alert('Se encontro una falla en la emicion de poliza.');
                })
        },

        fillData()
        {
            this.$store.state.is_loading = true;
            DataProvider.getForm()
                .then(response => {
                    this.$store.state.is_loading = false;
                    this.form = response.data.data
                })
                .catch(err => {
                    this.$store.state.is_loading = false;
                    this.errors = err
                    alert('No se pudo obtener los datos del servidor.')
                })
        }
    },
    computed: {
        formattedPhone() {
            return `(${this.form.phone_area_code}) ${this.form.phone}`
        },
        formattedAddress() {
            return `${this.form.address_street} ${this.form.address_number} ${this.form.address_floor} ${this.form.address_department}`
        },
        formattedBirthDate() {
            return `${this.form.birth_day}/${this.form.birth_month}/${this.form.birth_year}`
        },
        formattedName() {
            return `${this.form.last_name}, ${this.form.first_name}`
        },
        debitMethod() {
            if (this.payment_method === 'BA')
            {
                return this.$trans('cotizador.form.debit_of_account')
            } else
            {
                return this.$trans('cotizador.form.credit')
            }
        }
    }
}
