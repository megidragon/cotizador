import PlanProvider from '../providers/PlanProvider'
import BaseLayoutComponent from '../layout/BaseLayoutComponent'
import Slick from 'vue-slick'
import 'slick-carousel/slick/slick.css'
import Loading from 'vue-loading-overlay'
import 'vue-loading-overlay/dist/vue-loading.css'

export default {
    name: 'SelectPlan',
    components: { BaseLayoutComponent, Slick, Loading },
    mounted() {
        this.fillData()
    },
    data() {
        return {
            // core config
            run: true,
            state: this.$store,
            debug_mode: false,
            is_loading: false,

            plans: [],
            slickOptions: {
                dots: true,
                touchMove: true,
                infinite: false,
                centerMode: false,
                slidesToShow: 3,
                slidesToScroll: 3,
                swipe: true,
                responsive: [
                    {
                        breakpoint: 769,
                        settings: {
                            arrows: false,
                            infinite: false,
                            centerMode: false,
                            centerPadding: '40px',
                            slidesToShow: 3,
                            slidesToScroll: 2,
                            swipe: true,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            infinite: true,
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1,
                            swipe: true,
                            mobileFirst: true,
                        }
                    }
                ]
            }
        }
    },
    methods: {
        fillData()
        {
            this.is_loading = true

            PlanProvider.getPlans().then((response) => {
                this.plans = response.data.data
                this.is_loading = false

            }).catch(err => {
                console.error(err)
                this.is_loading = false
                alert('Algo salio mal, intente nuevamente en unos minutos')
            })
        },
    }
}
