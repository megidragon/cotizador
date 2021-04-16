<template>
    <cotizador-layout-component
        :title="$t('cotizador.titles.payment_method')"
        :step="2"
        :previous_route="`/cotizadorbici/datos-personales/${this.plan_id}`"
        :is_loading="is_loading"
        :errors="errors"
        :plan_id="plan_id">

        <form v-on:submit.prevent="submit">
            <div class="container mg-lg-b">
                <h2>{{$t('cotizador.titles.payment_method')}}</h2>
                <hr class="mg-sm-t mg-lg-b">
                <h3>{{$t('cotizador.subtitle.select_how_to_pay_for_the_service')}}</h3>
                <hr class="mg-sm-t mg-lg-b">
                <p class="mg-lg-b">{{$t('cotizador.subtitle.you_can_select_the_option')}}</p>

                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <label id="pago-toggle1" class="pago-toggle control radio mg-lg-b">
                            <input name="payment-method" value="TA" type="radio" @click="setMethod('TA')" required>
                            <span class="control-indicator"></span> {{$t('cotizador.form.credit_card')}}
                        </label>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <label id="pago-toggle2" class="pago-toggle control radio mg-xlg-b">
                            <input name="payment-method" type="radio" value="BA" @click="setMethod('BA')" required>
                            <span class="control-indicator"></span> {{$t('cotizador.form.bank_account')}}
                        </label>
                    </div>
                </div>

                <div class="pago-hidden" v-if="form_credit">
                    <hr class="hr-light mg-b">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <label class="label-control">{{$t('cotizador.form.titular_fullname')}}</label>
                            <div class="form-group">
                                <input type="text" size="18" maxlength="100" class="form-control" @keyup="toUp" v-model="form.card_owner_name" required/>

                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <label class="label-control">{{$t('cotizador.form.number')}}</label>
                            <div class="form-group">
                                <input type="text" size="18" minlength="16" maxlength="16" placeholder="Ej.: 4593540002129583" v-model="form.card_number" class="form-control" @keypress="isNumber" required/>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-xs-6 col-sm-3">
                            <label class="label-control">{{$t('cotizador.form.expiration_month')}}</label>
                            <div class="form-group">
                                <select class="form-control" v-model="form.card_expiration_month" required>
                                    <option value="0" selected="selected">{{$t('cotizador.form.month')}}</option>
                                    <option :value="i" v-for="i in 12">{{i}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <label class="label-control">{{$t('cotizador.form.expiration_year')}}</label>
                            <div class="form-group">
                                <select class="form-control" v-model="form.card_expiration_year" required>
                                    <option value="0" selected="selected">{{$t('cotizador.form.year')}}</option>
                                    <option :value="parseYear(i)" v-for="i in 16">{{ parseYear(i) }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pago-hidden"  v-if="form_debit">
                    <hr class="hr-light mg-b">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="label-control">{{$t('cotizador.form.cbu')}}</label>
                            <div class="form-group">
                                <input
                                    type="text"
                                    size="18"
                                    placeholder="Ej.: 7531598426975135412354"
                                    minlength="22"
                                    maxlength="22"
                                    class="form-control"
                                    @keypress="isNumber"
                                    v-model="form.cbu"
                                    required/>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mg-sm-t mg-lg-b">
                <p class="small mg-lg-b">{{$t('cotizador.subtitle.authorize_bank_payment')}}</p>
                <hr>

                <div class="container">
                    <div class="mg-lg-b mg-lg-t">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                                <button type="submit" class="btn btn-c1 btn-full" :disabled="form.payment_method === null">{{$t('cotizador.general.continue')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </cotizador-layout-component>
</template>

<script src="../scripts/PaymentMethod.js"></script>
