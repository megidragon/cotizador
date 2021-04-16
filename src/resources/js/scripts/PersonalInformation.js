import CotizadorLayoutComponent from '../layout/CotizadorLayoutComponent'
import DataProvider from '../providers/DataProvider'
import StepService from '../services/StepService'
import SalesForceService from '../services/SalesForceService'
import VueRecaptcha from 'vue-recaptcha';
import NormalizePostalCodeComponent from "../components/modal/NormalizePostalCodeComponent";
import NormalizeStreetComponent from "../components/modal/NormalizeStreetComponent";


export default {
    name: 'PersonalInformation',
    components: { VueRecaptcha, CotizadorLayoutComponent, NormalizePostalCodeComponent, NormalizeStreetComponent },
    mounted() {
        if (!this.plan_id)
        {
            this.run = false
            alert('Debe seleccionar un plan para continuar.')
            window.location.href = '/'
        }

        this.$store.state.is_loading = true

        DataProvider.getCurrentStep().then(response => {
            if (parseInt(response.data.data.step) !== 1 && parseInt(response.data.data.step) !== 2)
            {
                return window.location.href = '/'
            }

            if (parseInt(response.data.data.step) === 2)
            {
                this.display_second_form = true;
            }

            this.fillData()
        })
    },
    data() {
        return {
            // core config
            run: true,
            debug_mode: process.env.NODE_ENV === 'development',

            display_second_form: false, //TODO: DEBUG
            g_recaptcha_site_key: process.env.MIX_RECAPTCHA_SITE_KEY,
            plan_id: Number(this.$route.params.plan_id),

            form1: {
                first_name: null,
                last_name: null,
                document_type: null,
                document_number: null,
                birth_day: null,
                birth_month: null,
                birth_year: null,
                email: null,
                phone_area_code: null,
                phone: null,
            },
            form2: {
                gender: null,
                country: 'ARGE',
                address_street: null,
                address_number: null,
                address_floor: null,
                address_department: null,
                postal_code: 1416,
                locality: 'CAPITAL FEDERAL',
                province: 1,
            },
            hiddenForm: { //TODO: Ver que es esto y como usarlo
                utm_source: 'google',
                utm_medium: 'email',
                utm_campaign: 'solicitoNoContrato',
                premio: null,
                numSecuPol: 414115910009,
                opcionSeleccionada: 330,
                sumaAsegurada: 15000,
                cuotaPlanString: 242,
                cpRecoti: null,
                localidadDescRecoti: null,
                cpLargoRecoti: null,
                tipoProducto: null,
            },

            // fillable data
            g_recaptcha_token: null,
            errors: {},
            localities: [],
            province: [],
            countries: [],
            document_types: [],
            genders: [],
            searchCp: null,

            show_street_modal: false,
            show_cp_modal: true,

            doubts: [
                /* Example
                {
                    province: 'NEUQUEN',
                    party: 'CONFLUENCIA',
                    locality: 'NEUQUEN',
                    height_from: '1 al 2600',
                    street: 'FELIX SAN MARTIN',
                },*/
            ],

            cps: [ //TODO: debug
                {
                    cp: 8300005,
                    description: "BARRIO BOUQUET ROLDAN"
                },{
                    cp: 8300005,
                    description: "BARRIO BOUQUET ROLDAN"
                },{
                    cp: 8300005,
                    description: "BARRIO BOUQUET ROLDAN"
                },

                /* Example
                 {
                    cp: 8300005,
                    description: "BARRIO BOUQUET ROLDAN"
                 }
                 */
            ],
        }
    },
    methods: {
        submitForm1()
        {
            let data = this.form1

            data['plan_id'] = this.plan_id

            if (!this.debug_mode)
            {
                if (!this.g_recaptcha_token)
                {
                    // TODO: Upgradear esto
                    alert('Recaptcha es requerido');
                }
                data['g-recaptcha-response'] = this.g_recaptcha_token
            }

            this.$store.state.is_loading = true
            SalesForceService.sendForm(data)
                .then(response => {
                    console.log(response.data)
                    this.display_second_form = true;
                    this.$store.state.is_loading = false
                })
                .catch((err) => {
                    this.errors = err.response.data.errors
                    this.$store.state.is_loading = false;
                    alert('Error en el servicio, intente nuevamente en unos minutos');
                })
        },

        submitForm2()
        {
            let data = { ...this.form1, ...this.form2 }
            data.plan_id = this.plan_id
            console.log('form2', data)

            if (!this.debug_mode)
            {
                if (!this.g_recaptcha_token)
                {
                    // TODO: Upgradear esto
                    alert('Recaptcha es requerido');
                }
                data['g-recaptcha-response'] = this.g_recaptcha_token
            }

            this.$store.state.is_loading = true
            StepService.sendForm(1, data)
                .then(response => {
                    this.$store.state.is_loading = false
                    console.log(response.data)
                    if (typeof response.data.data.street_correction_modal !== 'undefined')
                    {
                        this.doubts  = response.data.data.doubts//TODO: Add response here
                        return this.show_modal = true
                    }

                    if (typeof response.data.data.cp_correction_modal !== 'undefined')
                    {
                        this.doubts  = response.data.data.cps//TODO: Add response here
                        return this.show_modal = true
                    }

                    if (response.data.type !== 'success')
                    {
                        alert('Se han encontrado problemas en su solicitud. Intente nuveamente mas tarde.');
                    }

                    return this.nextPage()
                })
                .catch((err) => {
                    this.errors = err.response.data.errors
                    this.$store.state.is_loading = false;
                    alert(err.response.data.errors)
                })
        },

        setGRecaptchaToken(token)
        {
            this.g_recaptcha_token = token
        },

        fillData()
        {
            let promises = [];

            promises.push(DataProvider.getLocalities(this.form2.postal_code).then((response) => {
                this.localities = response.data.data

                if (!response.data.data.length)
                {
                    this.localities.push(`No hay resultados para ${this.form2.postal_code}`)
                }
            }))

            promises.push(DataProvider.getProvince(this.form2.postal_code).then((response) => {
                this.province = response.data.data

                if (!response.data.data.length)
                {
                    this.province.push(`No hay resultados para ${this.form2.postal_code}`)
                }
            }))

            promises.push(DataProvider.getCountries(this.form2.postal_code).then((response) => {
                this.countries = response.data.data

                if (!response.data.data.length)
                {
                    this.countries.push(`No hay resultados para ${this.form2.postal_code}`)
                }
            }))

            promises.push(DataProvider.getDocumentTypes().then((response) => {
                this.document_types = response.data.data

                if (!response.data.data.length)
                {
                    this.document_types.push(`No hay resultados`)
                }
            }))

            promises.push(DataProvider.getGender().then((response) => {
                this.genders = response.data.data

                if (!response.data.data.length)
                {
                    this.genders.push(`No hay resultados`)
                }
            }))

            Promise.all(promises).then(values => {
                if (this.debug_mode)
                {
                    this.startDebugMode()
                }

                this.$store.state.is_loading = false
            }).catch(err => {
                console.error(err)
            });
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

        evChangeCp()
        {
            clearTimeout(this.searchCp);

            if (this.form2.postal_code.length < 4)
            {
                return true;
            }

            this.searchCp = setTimeout(() => {
                this.$store.state.is_loading = true;
                DataProvider.getLocalities(this.form2.postal_code)
                    .then(response => {
                        this.localities = response.data.data

                        if (!response.data.data.length)
                        {
                            return this.localities.push(`No hay resultados para ${this.form2.postal_code}`)
                        }

                        //Trigger loading state
                        this.$store.state.is_loading = false;
                        this.form2.locality = this.localities[0].value

                        //Get provinces
                        this.evChangeLocation()
                    })
                    .catch(err => {
                        console.error(err)
                        alert('Fallo la operación solicitada')
                    });
            }, 1500);
        },

        evChangeLocation()
        {
            if (this.form2.postal_code.length < 4)
            {
                return;
            }

            this.$store.state.is_loading = true;
            DataProvider.getProvince(this.form2.postal_code)
                .then(response => {
                    this.province = response.data.data

                    if (!response.data.data.length)
                    {
                        return this.province.push(`No hay resultados para ${this.form2.postal_code}`)
                    }

                    this.form2.province = this.province[0].key
                    this.$store.state.is_loading = false;
                })
                .catch(err => {
                    console.error(err)
                    alert('Fallo la operación solicitada')
                });
        },

        normalizeDone()
        {
            this.nextPage()
        },

        nextPage()
        {
            return this.$router.replace(`/cotizadorbici/forma-de-pago/${this.plan_id}`)
        },

        // TEST METHOD
        startDebugMode()
        {
            this.form1.first_name = 'AGUSTIN'
            this.form1.last_name = 'HOFMAN'
            this.form1.document_type = 'DNI'
            this.form1.document_number = '39461222'
            this.form1.birth_day = '01'
            this.form1.birth_month = '03'
            this.form1.birth_year = '1996'
            this.form1.email = 'agustin.hofman.koala@gmail.com'
            this.form1.phone_area_code = '011'
            this.form1.phone = '23912910'

            this.form2.gender = 'M'
            /*this.form2.address_street = 'AV. BOYACA'
            this.form2.address_number = '1853'
            this.form2.address_floor = '5'
            this.form2.address_department = 'A'*/
            this.form2.address_street = 'SAN MARTIN'
            this.form2.address_number = '300'
            this.form2.postal_code = 8300
        }
    }
}
