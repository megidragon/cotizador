<template>
    <modal name="cp-modal" scrollable height="auto" :width="900" :shiftY=".1" :adaptive="true" >
        <div class="modal-content" style="padding: 15px; border-radius: 0;">
            <div class="modal-header">
                <h3 class="modal-title font-2 color-2">{{$t('cotizador.subtitle.normalize_cp')}}</h3>
            </div>
            <div class="modal-body">
                <p>{{ $t('cotizador.form.select_neighborhood') }}</p>
                <div class="bg bg-gl pd-full-lg mg-lg-b">
                    <div v-for="option in options">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group no-mg">
                                    <label class="label-control mg-sm-t">
                                        {{ option.description <br/>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group no-mg">
                                    <p class="form-control-static"></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="control radio">
                                    <input type="radio" name="cp" :value="option.cp" @click="setOption(option.cp)">
                                    <span class="control-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <hr class="mg-lg-b mg-lg-t">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <button type="submit" class="btn btn-c1 full">{{ $t('cotizador.general.continue') }}</button>
                    </div>
                </div>
            </div>
    </div>
    </modal>
</template>


<script>
import AddressService from "../../services/AddressService";

export default {
    name: 'NormalizePostalCode',
    props: {
        options: {
            required: true,
            type: Array
        },
        address: {
            required: true,
            type: Object
        },
        show: {
            type: Boolean,
            default: false
        }
    },
    data()
    {
        return {
            selected_option: null
        };
    },
    mounted() {
        if (this.show)
        {
            this.showModal()
        }
    },
    methods: {
        showModal()
        {
            this.$modal.show('cp-modal')
        },

        setOption(option)
        {
            this.selected_option = option
        },

        sendAddress()
        {
            let data = { ...this.address }
            data.address_street = this.selected_option

            this.$store.state.is_loading = true
            AddressService.send(data)
                .then(res => {
                    this.$store.state.is_loading = false
                    console.log(res.data)
                    if (typeof res.data.data.street_correction_modal !== 'undefined')
                    {
                        this.doubts  = res.data.data.doubts//TODO: Add response here
                        return this.show_modal = true
                    }

                    if (typeof res.data.data.cp_correction_modal !== 'undefined')
                    {
                        this.doubts  = res.data.data.cps
                        return this.show_modal = true
                    }

                    if (res.data.type !== 'success')
                    {
                        alert('Se han encontrado problemas en su solicitud. Intente nuveamente mas tarde.');
                    }

                    if (res.data.data.success)
                    {
                        this.$emit('done');
                    }
                })
        }
    },
    watch: {
        show: function (val) {
            if (val)
            {
                this.showModal()
            }
        }
    }
}
</script>
