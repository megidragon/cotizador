<template>
    <div id="header-progress" class="process-component">
        <header>
            <div class="container header-trans">
                <a href="tel:08108882888" class="nav-phone">
                    <i class="fa fa-phone fa-fw"></i>
                    <span class="font-2 hidden-xs">{{$t('cotizador.general.tel_display')}}</span>
                </a>
                <h3 v-if="currentStep < totalSteps">
                    <a @click="$router.replace(previous_route)" class="back">
                        <i class="far fa-arrow-left color-1 mg-sm-r"></i>
                    </a>
                    <span class="steps">{{ step }}</span>
                </h3>
                <h3 v-else>
                    <span class="steps">{{$t('cotizador.subtitle.already_secured')}}</span>
                </h3>
                <div class="clearfix"></div>
            </div>
        </header>
        <div class="progress">
            <div class="progress-bar" role="progressbar" :aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" :style="`width: ${width}%`"></div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ProcessComponent',
    props: {
        currentStep: {
            type: Number,
            required: true
        },
        previous_route: {
            type: String,
            required: false,
            default: '/'
        }
    },
    data() {
        return {
            totalSteps: 4
        }
    },

    computed: {
        step() { return `Paso ${this.currentStep} de ${this.totalSteps}`; },
        width() { return 100 / this.totalSteps * this.currentStep }
    }
}

</script>
