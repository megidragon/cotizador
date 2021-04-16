@extends('layouts.default')
@section('content')
    <div class="wrapper">
        <section id="cotizador">



            <!-- EMPIEZA FORM -->
            <form id="confirmacion" name="confirmacion" action="" onsubmit="return submitAction();">

                <input type="hidden" name="utm_source" value="google" id="utm_source"/>

                <input type="hidden" name="utm_medium" value="email" id="utm_medium"/>

                <input type="hidden" name="utm_campaign" value="solicitoNoContrato" id="utm_campaign"/>

                <input type="hidden" name="premio" value="" id="premio"/>

                <input type="hidden" name="sumaAsegurada" value="15.000" id="sumaAsegurada"/>

                <input type="hidden" name="numSecuPol" value="414160780009" id="numSecuPol"/>

                <input type="hidden" name="opcionSeleccionada" value="330" id="opcionSeleccionada"/>

                <input type="hidden" name="opcionSeleccionadaDesc" value="BICICLETA PLAN 330" id="opcionSeleccionadaDesc"/>

                <input type="hidden" name="cuotaPlan" value="2420.0" id="cuotaPlan"/>


                <div class="container">

                    <h2>Confirmación de la Solicitud</h2>
                    <hr class="mg-sm-t mg-lg-b">
                    <h3> Tu seguro</h3>
                    <hr class="mg-b mg-t">
                    <div class="">

                        <div class="row">
                            <div class="col-sm-4">
                                <p class="mg-b"><span class=""><i class="fal fa-check-circle">&nbsp;</i>PLAN 330</span></p>
                            </div>
                            <div class="col-sm-4">
                                <p class="mg-b"><span class=""><i class="fal fa-check-circle">&nbsp;</i>Suma asegurada:</span> $15.000  con franquicia del 20%</p>
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
                    <h3>Datos Personales</h3>
                    <hr class="mg-b mg-t">
                    <div class=" mg-b">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group no-mg">
                                    <label class="label-control mg-sm-t">Tipo de documento</label>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <div class="form-group no-mg">
                                    <p class="form-control-static">DNI</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <div class="form-group no-mg">
                                    <p class="form-control-static">39460475</p>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-light mg-sm-b mg-sm-t">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group no-mg">
                                    <label class="label-control mg-sm-t">Apellido y nombre</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group no-mg">
                                    <p class="form-control-static">hofman, agustin</p>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-light mg-sm-b mg-sm-t">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group no-mg">
                                    <label class="label-control mg-sm-t">Nacimiento</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group no-mg">
                                    <p class="form-control-static">09/03/1996</p>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-light mg-sm-b mg-sm-t">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group no-mg">
                                    <label class="label-control mg-sm-t">Domicilio contractual</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group no-mg">
                                    <p class="form-control-static">YATAY 789 1 A</p>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-light mg-sm-b mg-sm-t">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group no-mg">
                                    <label class="label-control mg-sm-t">Código postal</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group no-mg">
                                    <p class="form-control-static">1414</p>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-light mg-sm-b mg-sm-t">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group no-mg">
                                    <label class="label-control mg-sm-t">Teléfono</label>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <div class="form-group no-mg">
                                    <p class="form-control-static">(011) 23912910</p>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-light mg-sm-b mg-sm-t">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group no-mg">
                                    <label class="label-control mg-sm-t">Correo electrónico</label>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group no-mg">
                                    <p class="form-control-static">agustin.hofman.koala@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-light mg-sm-b mg-sm-t">
                        <h4 class="mg-b mg-lg-t">Forma de Pago</h4>
                        <hr class="mg-b">


                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group no-mg">
                                    <label class="label-control mg-sm-t">Tipo</label>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <div class="form-group no-mg">
                                    <p class="form-control-static">Débito en cuenta</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <div class="form-group no-mg">
                                    <p class="form-control-static">0170079440000072290758</p>
                                </div>
                            </div>
                        </div>

                        <hr class="hr-light mg-lg-b mg-sm-t">
                    </div>

                    <div class="box-bordered pd-full mg-xlg-t mg-lg-b">
                        <p class="text-center small">
                            (i) Declaro que los datos informados son correctos, exactos y revisten carácter de declaración jurada.
                            <br/>
                            (ii) Acepto que el envío de la solicitud no otorga cobertura. Sólo habrá seguro si La Caja la acepta. De lo contrario, la solicitud quedará sin efecto.
                            <br/>
                            (iii) Solicito que se me entregue la documentación referida a mi póliza por medios electrónicos. Autorizo a que me envíen mensajes por Whats App al teléfono celular informado y/o a través de cualquier otro medio electrónico (Ej: Mail, Chat online, App Móvil).
                            <br/>
                            (iv) Presto conformidad para que la información que otorgo en esta solicitud sea utilizada por La Caja para acciones de marketing en forma directa o a través de terceros.


                        </p>
                        <div class="text-center mg-t mg-b">
                            <label class="control checkbox">
                                <input type="checkbox" name="condiciones" id="condiciones" value="acepto">
                                <span class="control-indicator"></span> Acepto las condiciones </label>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="container">
                    <div class="mg-lg-b mg-lg-t">

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-c1 btn-full">Confirmar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
@stop
