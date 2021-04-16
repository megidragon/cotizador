@extends('layouts.default')
@section('content')
    <div class="wrapper">

        <section id="cotizador">

            <input type="hidden" name="hasError" value="false" id="hasError"/>







            <form id="formaPago" name="formaPago" onsubmit="return submitAction();; customOnsubmit(); return true;" action="" method="post">



                <input type="hidden" name="utm_source" value="google" id="utm_source"/>

                <input type="hidden" name="utm_medium" value="email" id="utm_medium"/>

                <input type="hidden" name="utm_campaign" value="solicitoNoContrato" id="utm_campaign"/>


                <input type="hidden" name="premio" value="" id="premio"/>


                <input type="hidden" name="sumaAsegurada" value="15.000" id="sumaAsegurada"/>


                <input type="hidden" name="numSecuPol" value="414160780009" id="numSecuPol"/>


                <input type="hidden" name="opcionSeleccionada" value="330" id="opcionSeleccionada"/>


                <input type="hidden" name="opcionSeleccionadaDesc" value="BICICLETA PLAN 330" id="opcionSeleccionadaDesc"/>


                <input type="hidden" name="cuotaPlan" value="242.0" id="cuotaPlan"/>


                <div class="container mg-lg-b">

                    <h2>Forma de Pago</h2>
                    <hr class="mg-sm-t mg-lg-b">

                    <a class="btn-link color-1 visible-xs visible-sm hidden-md hidden-lg mg-lg-b" role="button" data-toggle="collapse" href="#Foo" aria-expanded="false" aria-controls="collapseExample">
                        <h3><i class="fal fa-plus-circle"></i> Tu seguro</h3>
                        <hr class="mg-b mg-sm-t">
                    </a>

                    <div id="Foo" class="collapse in">
                        <div class="block-resume">

                            <div class="row">
                                <div class="col-sm-4">

                                    <p class="mg-b"><span class=""><i class="fal fa-check-circle">&nbsp;</i>PLAN 330</span></p>

                                </div>
                                <div class="col-sm-4">

                                    <p class="mg-b"><span class=""><i class="fal fa-check-circle">&nbsp;</i>Suma asegurada:</span> $15.000 con franquicia del 20%</p>

                                </div>
                                <div class="col-sm-4">
                                    <p class="mg-b"><span class="">
										<i class="fal fa-check-circle">&nbsp;</i>Por mes:</span>
                                        $<script type="text/javascript">
                                            var cuota = '242.0';
                                            document.write(cuota.split('.')[0]);
                                        </script><sup>(1)</sup>
                                    </p>
                                </div>
                            </div>

                            <hr class="hr-light mg-lg-b">

                        </div>
                    </div>

                    <h3>Elegí cómo pagar tu seguro</h3>
                    <hr class="mg-sm-t mg-lg-b">
                    <p class="mg-lg-b">Podés elegir la opción más cómoda para vos.</p>

                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <label id="pago-toggle1" class="pago-toggle control radio mg-lg-b" data-target="#pago1">
                                <input name="cotizacion.formaCobro" value="TA" type="radio" id="s1" onClick="javascript:HideDIV('divhidden_debito');ShowDIV('divhidden_credito');">
                                <span class="control-indicator"></span> Tarjeta de crédito
                            </label>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <label id="pago-toggle2" class="pago-toggle control radio mg-xlg-b" data-target="#pago2">
                                <input type="radio" name="cotizacion.formaCobro" value="BA"  id="s2" onclick="javascript:HideDIV('divhidden_credito');ShowDIV('divhidden_debito');">
                                <span class="control-indicator"></span> Cuenta bancaria
                            </label>
                        </div>


                    </div>

                    <div class="pago-hidden" style="display:none;"  id="divhidden_credito">
                        <hr class="hr-light mg-b">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <label class="label-control">Nombre y Apellido Titular</label>
                                <div class="form-group">
                                    <input type="text" name="cotizacion.titularTarjeta" size="18" value="" id="formaPago_cotizacion_titularTarjeta" class="form-control"/>

                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <label class="label-control">Número</label>
                                <div class="form-group">
                                    <input type="text" name="cotizacion.numTarjeta" size="18" value="" id="numTarjeta" class="form-control" onkeypress="return isNumberKey(event)"/>

                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-xs-6 col-sm-3">
                                <label class="label-control">Mes de Vencimiento</label>
                                <div class="form-group">
                                    <select name="cotizacion.mesVencTarjeta" class="form-control">
                                        <option value="" selected="selected">Mes</option>

                                        <option value='01'>01</option>

                                        <option value='02'>02</option>

                                        <option value='03'>03</option>

                                        <option value='04'>04</option>

                                        <option value='05'>05</option>

                                        <option value='06'>06</option>

                                        <option value='07'>07</option>

                                        <option value='08'>08</option>

                                        <option value='09'>09</option>

                                        <option value='10'>10</option>

                                        <option value='11'>11</option>

                                        <option value='12'>12</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <label class="label-control">Año de Vencimiento</label>
                                <div class="form-group">
                                    <select class="form-control" name="cotizacion.anioVencTarjeta">

                                        <option value="" selected="selected">Año</option>
                                        <option value='2021'>2021</option>

                                        <option value='2022'>2022</option>

                                        <option value='2023'>2023</option>

                                        <option value='2024'>2024</option>

                                        <option value='2025'>2025</option>

                                        <option value='2026'>2026</option>

                                        <option value='2027'>2027</option>

                                        <option value='2028'>2028</option>

                                        <option value='2029'>2029</option>

                                        <option value='2030'>2030</option>

                                        <option value='2031'>2031</option>

                                        <option value='2032'>2032</option>

                                        <option value='2033'>2033</option>

                                        <option value='2034'>2034</option>

                                        <option value='2035'>2035</option>

                                        <option value='2036'>2036</option>

                                    </select>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="pago-hidden" style="display:none;"  id="divhidden_debito">
                        <hr class="hr-light mg-b">
                        <div class="row">


                            <div class="col-sm-4">
                                <label class="label-control">CBU N°</label>
                                <div class="form-group">
                                    <input type="text" name="cotizacion.numCbu1" size="18" maxlength="22" value="" id="numCbu1" class="form-control" onkeypress="return isNumberKey(event)"/>

                                </div>
                            </div>

                        </div>

                    </div>



                    <hr class="mg-sm-t mg-lg-b">

                    <p class="small mg-lg-b">

                        Autorizo a que las sumas de dinero necesarias para atender al cobro de los premios del Seguro de Bicicleta y Monopatín y sus respectivas renovaciones, sean debitados en forma directa y automática de la tarjeta de crédito o cuenta bancaria indicada más arriba. Esta autorización no responsabiliza al Banco pagador de la Tarjeta sobre posibles reclamos fundados en el importe a abonar ni en la calidad de la prestación brindada por "Caja de Seguros S.A.". El cobro se realizará por mes adelantado. Me notifico que el monto de la cuota informada corresponde a un periodo regular. En el primer mes se cobrará un periodo irregular de un mes y/o fracción.

                    </p>
                    <hr>

                    <div class="container">
                        <div class="mg-lg-b mg-lg-t">

                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-sm-offset-4">

                                    <button type="submit" class="btn btn-c1 btn-full">Continuar</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            <script>
                function customOnsubmit() {

                }
            </script>



        </section>
    </div>
@stop
