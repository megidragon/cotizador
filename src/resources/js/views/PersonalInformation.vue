<template>
    <cotizador-layout-component
        :title="$t('cotizador.promotions.hire_online')"
        :step="1"
        :errors="errors"
        :plan_id="plan_id">

        <normalize-postal-code-component
            :address="form2"
            :options="cps"
            :show="show_cp_modal"
            @done="normalizeDone"
        ></normalize-postal-code-component>

        <normalize-postal-code-component
            :address="form2"
            :options="doubts"
            :show="show_street_modal"
            @done="normalizeDone"
        ></normalize-postal-code-component>

        <form v-on:submit.prevent="submitForm1">
            <div class="container mg-b">
                <h3>{{$t('cotizador.titles.personal_information')}}</h3>
                <hr class="mg-sm-t mg-b">

                <p class="mg-lg-b">{{$t('cotizador.titles.insert_your_details_to_start_your_policy')}}</p>

                <div class="row mg-t">
                    <div class="col-sm-6">
                        <label class="label-control">{{$t('cotizador.form.names')}}</label>
                        <div class="form-group">
                            <input type="text" size="18" v-model="form1.first_name" class="form-control" @keyup="toUp" required/>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="label-control">{{$t('cotizador.form.last_names')}}</label>
                        <div class="form-group">
                            <input type="text" size="18" v-model="form1.last_name" class="form-control" @keyup="toUp" required/>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label class="label-control">{{$t('cotizador.form.document')}}</label>
                        <div class="form-group">
                            <select v-model="form1.document_type" class="form-control" required>
                                <option :value="row.key" v-for="row in document_types">{{ row.value }}</option>
                            </select>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label class="label-control">{{$t('cotizador.form.number')}}</label>
                        <input type="text" size="11" maxlength="12" v-model="form1.document_number" class="form-control" placeholder="Ej.: 22987321" required/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <label class="label-control mg-sm-t">{{$t('cotizador.form.birth_date')}}:</label>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4">
                                <div class="form-group">
                                    <input type="text" size="1" maxlength="2" v-model="form1.birth_day" class="form-control" placeholder="Día" required/>

                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <div class="form-group">
                                    <select v-model="form1.birth_month" class="form-control" required>
                                        <option value="">Mes</option>
                                        <option value="01">Enero</option>
                                        <option value="02">Febrero</option>
                                        <option value="03">Marzo</option>
                                        <option value="04">Abril</option>
                                        <option value="05">Mayo</option>
                                        <option value="06">Junio</option>
                                        <option value="07">Julio</option>
                                        <option value="08">Agosto</option>
                                        <option value="09">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <div class="form-group">
                                    <input type="text" size="4" maxlength="4" v-model="form1.birth_year" class="form-control" placeholder="Año" required/>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8 col-md-6">
                        <label class="label-control mg-sm-t">{{$t('cotizador.form.email')}}<sup>(2)</sup></label>
                        <div class="form-group">
                            <input type="text" size="27" maxlength="128" v-model="form1.email" class="form-control" placeholder="Ej.: ejemplo@lacaja.com.ar" required/>

                        </div>
                    </div>

                    <div class="col-md-2 col-sm-6 col-xs-4">
                        <label class="label-control mg-sm-t">{{$t('cotizador.form.area_code')}}</label>

                        <div class="input-group mg-b-xs">
                            <input type="text" maxlength="6" v-model="form1.phone_area_code" class="form-control" @keypress="isNumber($event)" placeholder="Ej.: 011" required/>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-8">
                        <label class="label-control mg-sm-t">{{$t('cotizador.form.phone_without_code')}}<sup>(2)</sup></label>
                        <div class="form-group">
                            <input type="text" size="18" maxlength="10" v-model="form1.phone" class="form-control" @keypress="isNumber($event)" placeholder="Ej.: 48578118" required/>
                        </div>
                    </div>
                </div>

                <!-- Hidden 1 -->

                <div id="block-form-viewmore1" v-if="!display_second_form">
                    <hr>
                    <div class="container">
                        <div class="mg-lg-b mg-lg-t">

                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <div class="captcha mg-lg-b">
                                        <vue-recaptcha :sitekey="g_recaptcha_site_key" @verify="setGRecaptchaToken" v-if="!debug_mode"></vue-recaptcha>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                                    <button type="button" class="btn btn-ghost-g btn-full" :disabled="$store.state.is_loading" @click="submitForm1">
                                        {{$t('cotizador.general.continue')}} <i class="fal fa-angle-down fa-lg"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="display_second_form">
                    <div class="mg-lg-b">
                        <h3>{{$t('cotizador.titles.additional_personal_information')}}</h3>
                        <hr class="mg-sm-t mg-b">

                        <div class="row mg-t">
                            <div class="col-sm-6">
                                <label class="label-control">{{$t('cotizador.form.gender')}}</label>
                                <div class="form-group">
                                    <select v-model="form2.gender" id="sexo" class="form-control">
                                        <option value="">{{$t('cotizador.general.select')}}</option>
                                        <option :value="row.key" v-for="row in genders">{{ row.value }}</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="label-control">{{$t('cotizador.form.nationality')}}</label>
                                <div class="form-group">
                                    <select v-model="form2.country" class="form-control">
                                        <option value="">{{$t('cotizador.general.select')}}</option>
                                        <option v-for="row in countries" :value="row.key">{{row.value}}</option>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <h3>{{$t('cotizador.titles.contractual_address')}}</h3>
                        <hr class="mg-sm-t mg-b">
                        <p class="mg-lg-b">{{$t('cotizador.subtitle.contractual_address_subtitle')}}</p>
                        <div class="row ">

                            <div class="col-sm-6 col-xs-12">
                                <label class="label-control mg-sm-t">{{$t('cotizador.form.address')}}</label>
                                <div class="form-group">
                                    <input type="text" v-model="form2.address_street" @keyup="toUp" size="18" class="form-control" placeholder="Calle"/>

                                </div>
                            </div>
                            <div class="col-sm-2 col-xs-4">
                                <label class="label-control mg-sm-t">{{$t('cotizador.form.address_number')}}</label>
                                <div class="form-group">
                                    <input type="text" v-model="form2.address_number" size="18" class="form-control"/>

                                </div>
                            </div>
                            <div class="col-sm-2 col-xs-4">
                                <label class="label-control mg-sm-t">{{$t('cotizador.form.address_floor')}}</label>
                                <div class="form-group">
                                    <input type="text" v-model="form2.address_floor" size="18" class="form-control"/>

                                </div>
                            </div>
                            <div class="col-sm-2 col-xs-4">
                                <label class="label-control mg-sm-t">{{$t('cotizador.form.address_department')}}</label>
                                <div class="form-group">
                                    <input type="text" v-model="form2.address_department" size="18" class="form-control"/>

                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-4">
                                <label class="label-control mg-sm-t">{{$t('cotizador.form.postal_code')}}</label>
                                <div class="form-group">
                                    <input
                                        type="number"
                                        maxlength="7"
                                        v-model="form2.postal_code"
                                        class="form-control"
                                        placeholder="Ej.: 1414"
                                        @keyup="evChangeCp()"
                                        :disabled="$store.state.is_loading"
                                    />

                                </div>
                            </div>
                            <div class="col-sm-5 col-xs-8">
                                <label class="label-control mg-sm-t">{{$t('cotizador.form.locality')}}</label>
                                <div class="form-group">
                                    <select :disabled="!form2.locality" v-model="form2.locality" @change="evChangeLocation" class="form-control" >
                                        <option v-for="row in localities" :value="row.value">{{row.value}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <label class="label-control mg-sm-t">{{$t('cotizador.form.province')}}</label>
                                <div class="form-group">
                                    <select v-model="form2.province" class="form-control">
                                        <option v-for="row in province" :value="row.key">{{row.value}}</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="container">
                        <div class="mg-lg-b mg-lg-t">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                                    <button type="button" class="btn btn-c1 btn-full" :disabled="$store.state.is_loading" @click="submitForm2">
                                        {{$t('cotizador.general.continue')}}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </cotizador-layout-component>
</template>

<script src="../scripts/PersonalInformation.js"></script>
