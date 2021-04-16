import Loading from 'vue-loading-overlay'
import 'vue-loading-overlay/dist/vue-loading.css'
import ProcessComponent from '../components/ProcessComponent';
import FooterComponent from '../components/FooterComponent';
import DataProvider from "../providers/DataProvider";

export default {
    name: 'Confirmation',
    components: { Loading, ProcessComponent, FooterComponent },
    mounted() {
        DataProvider.getCurrentStep().then(response => {
            if (parseInt(response.data.data.step) !== 6)
            {
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
            is_loading: false,
            errors: {},
        }
    },
    methods: {
    },
    computed: {
    }
}
