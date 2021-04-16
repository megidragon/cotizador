<template>
    <cotizador-layout-component
        :title="$t('cotizador.titles.confirm')"
        :step="3"
        :previous_route="`/cotizadorbici/forma-de-pago/${this.plan_id}`"
        :is_loading="is_loading"
        :errors="errors"
        :plan_id="plan_id">

        <div class="container">
            <h2>{{$t('cotizador.subtitle.personal_data')}}</h2>
            <hr class="mg-b mg-t">
            <div class=" mg-b">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group no-mg">
                            <label class="label-control mg-sm-t">{{$t('cotizador.form.document_type')}}</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <div class="form-group no-mg">
                            <p class="form-control-static">{{ form.document_type }}</p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <div class="form-group no-mg">
                            <p class="form-control-static">{{ form.document }}</p>
                        </div>
                    </div>
                </div>
                <hr class="hr-light mg-sm-b mg-sm-t">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group no-mg">
                            <label class="label-control mg-sm-t">{{$t('cotizador.form.fullname')}}</label>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group no-mg">
                            <p class="form-control-static">{{ formattedName }}</p>
                        </div>
                    </div>
                </div>
                <hr class="hr-light mg-sm-b mg-sm-t">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group no-mg">
                            <label class="label-control mg-sm-t">{{$t('cotizador.form.birth_date')}}</label>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group no-mg">
                            <p class="form-control-static">{{ formattedBirthDate }}</p>
                        </div>
                    </div>
                </div>
                <hr class="hr-light mg-sm-b mg-sm-t">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group no-mg">
                            <label class="label-control mg-sm-t">{{$t('cotizador.form.contractual_address')}}</label>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group no-mg">
                            <p class="form-control-static">{{ formattedAddress }}</p>
                        </div>
                    </div>
                </div>
                <hr class="hr-light mg-sm-b mg-sm-t">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group no-mg">
                            <label class="label-control mg-sm-t">{{$t('cotizador.form.postal_code')}}</label>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group no-mg">
                            <p class="form-control-static">{{ form.postal_code }}</p>
                        </div>
                    </div>
                </div>
                <hr class="hr-light mg-sm-b mg-sm-t">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group no-mg">
                            <label class="label-control mg-sm-t">{{$t('cotizador.form.phone')}}</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <div class="form-group no-mg">
                            <p class="form-control-static">{{ formattedPhone }}</p>
                        </div>
                    </div>
                </div>
                <hr class="hr-light mg-sm-b mg-sm-t">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group no-mg">
                            <label class="label-control mg-sm-t">{{$t('cotizador.form.email')}}</label>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group no-mg">
                            <p class="form-control-static">{{ form.email }}</p>
                        </div>
                    </div>
                </div>
                <hr class="hr-light mg-sm-b mg-sm-t">
                <h4 class="mg-b mg-lg-t">{{ $t('cotizador.subtitle.payment_method') }}</h4>
                <hr class="mg-b">


                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group no-mg">
                            <label class="label-control mg-sm-t">{{$t('cotizador.form.type')}}</label>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <div class="form-group no-mg">
                            <p class="form-control-static">{{ debitMethod }}</p>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4">
                        <div class="form-group no-mg">
                            <p class="form-control-static">{{ form.cbu }}</p>
                        </div>
                    </div>
                </div>

                <hr class="hr-light mg-lg-b mg-sm-t">
            </div>

            <div class="box-bordered pd-full mg-xlg-t mg-lg-b">
                <p class="text-center small">
                    {{$t('cotizador.terms_and_services.1')}}
                    <br/>
                    {{$t('cotizador.terms_and_services.2')}}
                    <br/>
                    {{$t('cotizador.terms_and_services.3')}}
                    <br/>
                    {{$t('cotizador.terms_and_services.1')}}
                </p>
                <div class="text-center mg-t mg-b">
                    <label class="control checkbox">
                        <input type="checkbox" v-model="terms_and_services" value="1">
                        <span class="control-indicator"></span> {{$t('cotizador.form.accept_terms_and_services')}} </label>
                </div>
            </div>
            <hr>
            <div class="mg-lg-b mg-lg-t">

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <button type="button" class="btn btn-c1 btn-full" @click="submit">{{ $t('cotizador.general.confirm') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </cotizador-layout-component>
</template>

<script src="../scripts/Terms.js"></script>
