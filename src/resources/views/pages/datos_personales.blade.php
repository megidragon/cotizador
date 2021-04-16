@extends('layouts.default')
@section('content')

    <div class="wrapper">
        <section id="cotizador">

            <input type="hidden" name="hasError" value="false" id="hasError"/>

            <input type="hidden" name="viewUser.usuario.nombres.email" value="" id="emailUsuario"/>




            <div class="alert alert-danger" id="mensajeError" style="display:none">
                <div class="container" >
                    <p id="textoError" class="no-mg"></p>
                </div>
            </div>

            <!-- EMPIEZA FORM -->

            <form id="formaPago" name="formaPago" onsubmit="return recotizar();; customOnsubmit(); return true;" action="RecotizaMasivosAutomaticoBici.trx" method="post">



                <input type="hidden" name="utm_source" value="google" id="utm_source"/>

                <input type="hidden" name="utm_medium" value="email" id="utm_medium"/>

                <input type="hidden" name="utm_campaign" value="solicitoNoContrato" id="utm_campaign"/>

                <input type="hidden" name="premio" value="" id="premio"/>

                <input type="hidden" name="numSecuPol" value="414115910009" id="numSecuPol"/>

                <input type="hidden" name="opcionSeleccionada" value="330" id="opcionSeleccionada"/>

                <input type="hidden" name="sumaAsegurada" value="15.000" id="sumaAsegurada"/>

                <input type="hidden" name="cuotaPlanString" value="242.0" id="cuotaPlanString"/>

                <input type="hidden" name="cuotaPlan" value="" id="cuotaPlan"/>

                <input type="hidden" name="viewUser.usuario.localidadDesc" value="CAPITAL FEDERAL" id="localidadDesc"/>

                <input type="hidden" name="codigoPostalOri" value="1414" id="codigoPostalOri"/>

                <input type="hidden" name="cpRecoti" value="" id="cpRecoti"/>

                <input type="hidden" name="localidadDescRecoti" value="" id="localidadDescRecoti"/>

                <input type="hidden" name="cpLargoRecoti" value="" id="cpLargoRecoti"/>

                <input type="hidden" name="tipoProducto" value="" id="tipoProducto"/>

                <div class="container mg-b">

                    <h2>Contratá online</h2>
                    <hr class="mg-sm-t mg-lg-b">

                    <a class="btn-link color-1 visible-xs visible-sm hidden-md hidden-lg mg-lg-b" role="button" data-toggle="collapse" href="#Foo" aria-expanded="false" aria-controls="collapseExample">
                        <h3><i class="fal fa-plus-circle"></i> Tu seguro</h3>
                        <hr class="mg-b mg-sm-t">
                    </a>

                    <div id="Foo" class="collapse in">
                        <div class="block-resume">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="mg-b"><span class=""><i class="fal fa-check-circle">&nbsp;</i>PLAN 330 </span> </p>
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
                    </div>

                    <h3>Datos personales</h3>
                    <hr class="mg-sm-t mg-b">

                    <p class="mg-lg-b">Ingresá tus datos para comenzar a armar tu póliza.</p>

                    <div class="row mg-t">
                        <div class="col-sm-6">
                            <label class="label-control">Nombre/s</label>
                            <div class="form-group">
                                <input type="text" name="viewUser.usuario.nombres" size="18" value="" id="nombres" class="form-control"/>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label class="label-control">Apellido/s</label>
                            <div class="form-group">
                                <input type="text" name="viewUser.usuario.apellido" size="18" value="" id="apellido" class="form-control"/>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="label-control">Documento</label>
                            <div class="form-group">
                                <select name="viewUser.usuario.tipoDocumento" id="tipoDoc" class="form-control">
                                    <option value="-9">Seleccioná</option>
                                    <option value="DNI">Documento Nacional de Identidad</option>
                                    <option value="LC">Libreta Civica</option>
                                    <option value="LE">Libreta de Enrolamiento</option>
                                    <option value="CUIT">C.U.I.T.</option>
                                    <option value="CUIL">C.U.I.L.</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="label-control">Número</label>
                            <input type="text" name="viewUser.usuario.numeroDocumento" size="11" maxlength="12" value="" id="numDoc" class="form-control" placeholder="Ej.: 22987321"/>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <label class="label-control mg-sm-t">Fecha de Nacimiento:</label>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4">
                                    <div class="form-group">
                                        <input type="text" name="viewUser.usuario.diaNac" size="1" maxlength="2" value="" id="diaNac" class="form-control" placeholder="Día"/>

                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4">
                                    <div class="form-group">
                                        <select name="viewUser.usuario.mesNac" id="mes" class="form-control">
                                            <option value="-9">Mes</option>
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
                                        <input type="text" name="viewUser.usuario.anioNac" size="4" maxlength="4" value="" id="anioNac" class="form-control" placeholder="Año"/>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8 col-md-6">
                            <label class="label-control mg-sm-t">Correo electrónico<sup>(2)</sup></label>
                            <div class="form-group">
                                <input type="text" name="emailMasivos" size="27" maxlength="128" value="" id="email" class="form-control" placeholder="Ej.: ejemplo@lacaja.com.ar"/>

                            </div>
                        </div>

                        <div class="col-md-2 col-sm-6 col-xs-4">


                            <label class="label-control mg-sm-t">Código área</label>


                            <div class="input-group mg-b-xs">
                                <input type="text" name="viewUser.usuario.prefijo" maxlength="6" value="" id="prefijo" class="form-control" onkeypress="return onlyNumbers(event)" placeholder="Ej.: 011"/>

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-8">
                            <label class="label-control mg-sm-t">N° Celular sin 11 o 15<sup>(2)</sup></label>
                            <div class="form-group">
                                <input type="text" name="viewUser.usuario.telefono" size="18" maxlength="10" value="" id="telefono" class="form-control" onkeypress="return onlyNumbers(event)" placeholder="Ej.: 48578118"/>

                            </div>
                        </div>
                    </div>

                    <!-- Hidden 1 -->

                    <div id="block-form-viewmore1">
                        <hr>
                        <div class="container">
                            <div class="mg-lg-b mg-lg-t">

                                <div class="row">
                                    <div class="col-sm-4 col-sm-offset-4">
                                        <div class="captcha mg-lg-b">
                                            <div class="g-recaptcha" data-sitekey="6Ld7gj0UAAAAAPmKMCaxIvp9-kAeJG5ac9cvlHXh"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                                        <a href="#form-hidden-1" class="btn btn-ghost-g btn-full form-viewmore" data-self="#block-form-viewmore1">
                                            Continuar <i class="fal fa-angle-down fa-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="form-hidden-1" class="form-hidden">
                        <div class="mg-lg-b">
                            <h3>Datos personales adicionales</h3>
                            <hr class="mg-sm-t mg-b">

                            <div class="row mg-t">
                                <div class="col-sm-6">
                                    <label class="label-control">Género</label>
                                    <div class="form-group">
                                        <select name="viewUser.usuario.sexo" id="sexo" class="form-control">
                                            <option value="-9">Seleccioná</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="label-control">Nacionalidad</label>
                                    <div class="form-group">
                                        <select name="viewUser.usuario.nacionalidad" id="nacionalidad" class="form-control">
                                            <option value="-9">Seleccioná</option>
                                            <option value="ARGE">Argentina</option>
                                            <option value="BOLV">Bolivia</option>
                                            <option value="BRAI">Brasil</option>
                                            <option value="CHIE">Chile</option>
                                            <option value="COLB">Colombia</option>
                                            <option value="PARG">Paraguay</option>
                                            <option value="PERA">Peru</option>
                                            <option value="URUY">Uruguay</option>
                                            <option value="VENZ">Venezuela</option>
                                            <option value="AFGA">Afganistan</option>
                                            <option value="ALAS">Alaska</option>
                                            <option value="ALBA">Albania</option>
                                            <option value="ALEN">Alemania</option>
                                            <option value="ANDO">Andorra</option>
                                            <option value="ANGO">Angola</option>
                                            <option value="ANGU">Anguila</option>
                                            <option value="ANBA">Antigua Y Barbuda</option>
                                            <option value="ABAR">Antigua Y Barbuda</option>
                                            <option value="ANTI">Antillas</option>
                                            <option value="ANHO">Antillas Holandesas</option>
                                            <option value="ARAB">Arabia Saudita</option>
                                            <option value="ARAV">Archipielago De Svbalbard</option>
                                            <option value="ARG">Argelia</option>
                                            <option value="ARME">Armenia</option>
                                            <option value="ARUB">Aruba</option>
                                            <option value="ASEN">Ascencion</option>
                                            <option value="AUST">Australia</option>
                                            <option value="AUS">Austria</option>
                                            <option value="BAHA">Bahamas</option>
                                            <option value="BAHR">Bahrein</option>
                                            <option value="BANG">Bangladesh</option>
                                            <option value="BARB">Barbados</option>
                                            <option value="BELI">Belgica</option>
                                            <option value="BELC">Belice</option>
                                            <option value="BERM">Bermuda</option>
                                            <option value="BIEL">Bielorrusia</option>
                                            <option value="BIRM">Birmania</option>
                                            <option value="BOSN">Bosnia</option>
                                            <option value="BRUN">Brunei </option>
                                            <option value="BRDA">Bruneii Darussalam</option>
                                            <option value="BULG">Bulgaria</option>
                                            <option value="BURU">Burundi</option>
                                            <option value="CAVE">Cabo Verde</option>
                                            <option value="CAMB">Cambodia </option>
                                            <option value="CAME">Camerun</option>
                                            <option value="CAND">Canada</option>
                                            <option value="CADI">Capione D´Italia</option>
                                            <option value="CHIN">China</option>
                                            <option value="CHIP">Chipre</option>
                                            <option value="GIBR">Colonia De Gibraltar</option>
                                            <option value="CODO">Commonwealth De Dominca (Estado Asoc.)</option>
                                            <option value="CONG">Congo</option>
                                            <option value="CORA">Corea Del Norte</option>
                                            <option value="COSU">Corea Del Sur</option>
                                            <option value="COST">Costa De Marfil</option>
                                            <option value="COS">Costa Rica</option>
                                            <option value="CROA">Croacia</option>
                                            <option value="CUBA">Cuba</option>
                                            <option value="DINA">Dinamarca</option>
                                            <option value="DJIB">Djibuti</option>
                                            <option value="ECUD">Ecuador</option>
                                            <option value="EGIP">Egipto</option>
                                            <option value="ELSA">El Salvador</option>
                                            <option value="EMIR">Emiratos Arabes Unidos</option>
                                            <option value="ESPÑ">España</option>
                                            <option value="USA">Estados Unidos</option>
                                            <option value="ESTO">Estonia</option>
                                            <option value="ETIO">Etiopia</option>
                                            <option value="FESC">Federacion De San Cristobal</option>
                                            <option value="FIDJ">Fidji</option>
                                            <option value="FILI">Filipinas</option>
                                            <option value="FINL">Finlandia</option>
                                            <option value="FRAC">Francia</option>
                                            <option value="GAMB">Gambia</option>
                                            <option value="GHAN">Ghana</option>
                                            <option value="LUXE">Gran Ducado De Luxemburgo</option>
                                            <option value="GRAN">Granada</option>
                                            <option value="GREC">Grecia</option>
                                            <option value="GROE">Groenlandia</option>
                                            <option value="GUAM">Guam (Territorio No Autónomo De Eeuu)</option>
                                            <option value="GUAT">Guatemala</option>
                                            <option value="GUYA">Guyana</option>
                                            <option value="HAIT">Haiti</option>
                                            <option value="HOLD">Holanda</option>
                                            <option value="HONU">Honduras</option>
                                            <option value="HONG">Hong Kong</option>
                                            <option value="HUNG">Hungria</option>
                                            <option value="INDI">India</option>
                                            <option value="INDO">Indonesia</option>
                                            <option value="IRAK">Irak</option>
                                            <option value="IRAN">Iran</option>
                                            <option value="IRLA">Irlanda</option>
                                            <option value="ISAZ">Isla Azores</option>
                                            <option value="ICHR">Isla Christmas</option>
                                            <option value="ISCR">Isla Christmas</option>
                                            <option value="ISCO">Isla De Cocos O Keeling</option>
                                            <option value="ISOK">Isla De Cook  (Trio. Asoc. A New Zeland)</option>
                                            <option value="ISMA">Isla De Man (Territorio De Reino Unido)</option>
                                            <option value="ISNO">Isla De Norfolk</option>
                                            <option value="ISSP">Isla De San Pedro Y Miguelon</option>
                                            <option value="ISCA">Isla Del Canal</option>
                                            <option value="ISML">Isla Marshall</option>
                                            <option value="IQES">Isla Qeshm</option>
                                            <option value="ISQE">Isla Qeshm</option>
                                            <option value="ISLA">Islandia</option>
                                            <option value="IAZO">Islas Azores</option>
                                            <option value="CAIM">Islas Caiman</option>
                                            <option value="IMAR">Islas Marshall </option>
                                            <option value="IPAC">Islas Pacifico</option>
                                            <option value="ISPA">Islas Pacifico</option>
                                            <option value="ISSA">Islas Salomon</option>
                                            <option value="ISAL">Islas Salomon</option>
                                            <option value="ISTU">Islas Turkas E Islas Caicos (Trio.De Uk)</option>
                                            <option value="ISBR">Islas Virgenes Britanicas  (Trio. De Uk)</option>
                                            <option value="ISEU">Islas Virgenes De E.E.U.U.</option>
                                            <option value="ISRA">Israel</option>
                                            <option value="ITAI">Italia</option>
                                            <option value="JAMA">Jamaica</option>
                                            <option value="JAPO">Japon</option>
                                            <option value="JORD">Jordania</option>
                                            <option value="KENI">Kenia</option>
                                            <option value="KIRI">Kiribati</option>
                                            <option value="KUWA">Kuwait</option>
                                            <option value="KYRG">Kyrgyzstan</option>
                                            <option value="LABU">Labuan</option>
                                            <option value="LIBA">Libano</option>
                                            <option value="LIBE">Liberia</option>
                                            <option value="LIBI">Libia</option>
                                            <option value="LITU">Lituania</option>
                                            <option value="MACA">Macao</option>
                                            <option value="MADE">Madeira (Territorio De Portugal)</option>
                                            <option value="MALA">Malasia</option>
                                            <option value="MALD">Maldivas</option>
                                            <option value="MALT">Malta</option>
                                            <option value="MARR">Marruecos</option>
                                            <option value="MAUR">Mauricio</option>
                                            <option value="MEJI">Mexico</option>
                                            <option value="MONA">Monaco</option>
                                            <option value="MONG">Mongolia</option>
                                            <option value="MONT">Montserrat (Trio. Autonomo Del Uk)</option>
                                            <option value="MYAN">Myammar</option>
                                            <option value="MYAM">Myammar</option>
                                            <option value="NAMI">Namibia</option>
                                            <option value="NAUR">Nauru</option>
                                            <option value="NEPA">Nepal</option>
                                            <option value="NEVI">Nevis</option>
                                            <option value="NICA">Nicaragua</option>
                                            <option value="NIGE">Nigeria</option>
                                            <option value="NIUE">Niue</option>
                                            <option value="NORU">Noruega</option>
                                            <option value="NUEV">Nueva Zelandia</option>
                                            <option value="OMAN">Oman</option>
                                            <option value="PAKI">Pakistan</option>
                                            <option value="PANA">Panama</option>
                                            <option value="PATA">Patau</option>
                                            <option value="PITC">Pitcairn</option>
                                            <option value="POFR">Polinesia Francesa (Trio. De Francia)</option>
                                            <option value="POLO">Polonia</option>
                                            <option value="PORT">Portugal</option>
                                            <option value="PRLI">Principado De Liechtenstein</option>
                                            <option value="LIEC">Principado De Liechtenstein </option>
                                            <option value="PUER">Puerto Rico</option>
                                            <option value="QATA">Qatar</option>
                                            <option value="RESW">Reino De Swazilandia</option>
                                            <option value="RETO">Reino De Tonga</option>
                                            <option value="REIN">Reino Unido</option>
                                            <option value="CHEC">Republica Checa</option>
                                            <option value="DOMI">Republica Dominicana</option>
                                            <option value="ESLO">Republica Eslovenia</option>
                                            <option value="SUD">Republica Sudafricana</option>
                                            <option value="RUMA">Rumania</option>
                                            <option value="RUSI">Rusia</option>
                                            <option value="SAMO">Samoa</option>
                                            <option value="SAAM">Samoa Americana (Trio. De Los Eeuu)</option>
                                            <option value="SAOC">Samoa Occidental</option>
                                            <option value="SMAR">San Marino </option>
                                            <option value="SVLG">San Vicente Y Las Granadinas</option>
                                            <option value="VGRA">San Vicente Y Las Granadinas </option>
                                            <option value="SAEL">Santa Elena</option>
                                            <option value="SALU">Santa Lucia</option>
                                            <option value="STPR">Santo Tome Y Principe</option>
                                            <option value="TOME">Santo Tome Y Príncipe</option>
                                            <option value="SENE">Senegal</option>
                                            <option value="SRSM">Serenisima Republica De San Marino</option>
                                            <option value="SEYC">Seychelles</option>
                                            <option value="SING">Singapur</option>
                                            <option value="SIRI">Siria</option>
                                            <option value="SOMA">Somalia</option>
                                            <option value="SRIL">Sri Lanka</option>
                                            <option value="SUAZ">Suazilandia</option>
                                            <option value="SUDA">Sudan</option>
                                            <option value="SUEC">Suecia</option>
                                            <option value="SUIZ">Suiza</option>
                                            <option value="SUOM">Sultanato De Oman</option>
                                            <option value="TAIL">Tailandia</option>
                                            <option value="TAIW">Taiwan</option>
                                            <option value="TAJI">Tajikistan</option>
                                            <option value="TANZ">Tanzania</option>
                                            <option value="TAYI">Tayikistán</option>
                                            <option value="TOKE">Tokelau</option>
                                            <option value="TONG">Tonga </option>
                                            <option value="TRIE">Trieste (Italia)</option>
                                            <option value="TRTO">Trinidad Y Tobago</option>
                                            <option value="TRCU">Tristan Da Cunha</option>
                                            <option value="TUNC">Tunecina</option>
                                            <option value="TUNE">Tunez</option>
                                            <option value="TURM">Turkmenistan</option>
                                            <option value="TURK">Turkmenistan</option>
                                            <option value="TURQ">Turquia</option>
                                            <option value="TUVA">Tuvalu</option>
                                            <option value="UCRA">Ucrania</option>
                                            <option value="UGAN">Uganda</option>
                                            <option value="VANU">Vanuatu</option>
                                            <option value="VIET">Vietnam</option>
                                            <option value="YEME">Yemen</option>
                                            <option value="YIBU">Yibuti</option>
                                            <option value="YUGO">Yugoslavia</option>
                                            <option value="ZAIR">Zaire</option>
                                            <option value="ZAMB">Zambia</option>
                                            <option value="ZIMB">Zimbabwe</option>
                                            <option value="ZOOS">Zona Libre De Ostrava</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <h3>Domicilio Contractual</h3>
                            <hr class="mg-sm-t mg-b">
                            <p class="mg-lg-b">Es el domicilio donde te llegará las notificaciones y documentación de tu seguro.</p>
                            <div class="row ">

                                <div class="col-sm-6 col-xs-12">
                                    <label class="label-control mg-sm-t">Domicilio</label>
                                    <div class="form-group">
                                        <input type="text" name="viewUser.usuario.direccion.calle" size="18" value="" id="calle" class="form-control" placeholder="Calle"/>

                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <label class="label-control mg-sm-t">Nro</label>
                                    <div class="form-group">
                                        <input type="text" name="viewUser.usuario.direccion.numero" size="18" value="" id="numero" class="form-control"/>

                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <label class="label-control mg-sm-t">Piso</label>
                                    <div class="form-group">
                                        <input type="text" name="viewUser.usuario.direccion.piso" size="18" value="" id="piso" class="form-control"/>

                                    </div>
                                </div>
                                <div class="col-sm-2 col-xs-4">
                                    <label class="label-control mg-sm-t">Depto</label>
                                    <div class="form-group">
                                        <input type="text" name="viewUser.usuario.direccion.depto" size="18" value="" id="depto" class="form-control"/>

                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-4">
                                    <label class="label-control mg-sm-t">Código Postal</label>
                                    <div class="form-group">
                                        <input type="text" name="viewUser.usuario.codigoPostal" maxlength="4" value="1414" id="codigoPostal" class="form-control" placeholder="Ej.: 1414"/>

                                    </div>
                                </div>
                                <div class="col-sm-5 col-xs-8">
                                    <label class="label-control mg-sm-t">Localidad</label>
                                    <div class="form-group">
                                        <select disabled id="localidad" name="viewUser.usuario.localidad" class="form-control" >
                                            <option>Seleccioná</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="label-control mg-sm-t">Provincia</label>
                                    <div class="form-group">
                                        <select name="viewUser.usuario.direccion.provincia" id="provincia" class="form-control">
                                            <option value="-9">Seleccioná</option>
                                            <option value="2">BUENOS AIRES</option>
                                            <option value="1">CAPITAL FEDERAL</option>
                                            <option value="3">CATAMARCA</option>
                                            <option value="6">CHACO</option>
                                            <option value="7">CHUBUT</option>
                                            <option value="4">CORDOBA</option>
                                            <option value="5">CORRIENTES</option>
                                            <option value="8">ENTRE RIOS</option>
                                            <option value="9">FORMOSA</option>
                                            <option value="10">JUJUY</option>
                                            <option value="11">LA PAMPA</option>
                                            <option value="12">LA RIOJA</option>
                                            <option value="13">MENDOZA</option>
                                            <option value="14">MISIONES</option>
                                            <option value="15">NEUQUEN</option>
                                            <option value="16">RIO NEGRO</option>
                                            <option value="17">SALTA</option>
                                            <option value="18">SAN JUAN</option>
                                            <option value="19">SAN LUIS</option>
                                            <option value="20">SANTA CRUZ</option>
                                            <option value="21">SANTA FE</option>
                                            <option value="22">SANTIAGO DEL ESTERO</option>
                                            <option value="24">TIERRA DEL FUEGO</option>
                                            <option value="23">TUCUMAN</option>
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
                                        <button type="submit" class="btn btn-c1 btn-full">
                                            Continuar
                                        </button>
                                    </div>
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

    <section id="payment-data">
        <div class="container payment-data-container">
            <div class="mg-b mg-xlg-t">
                <div class="row">
                    <div class="col-sm-4 payment-data-section mg-lg-b">
                        <a href="#" class="payment-data-icon" data-toggle="modal" data-target="#payment-data-Modal-1" data-title="Tarjetas de crédito / débito" rel="nofollow"><img alt="" src="/nuevosAssets/images/f47-credit-card.svg"></a>
                        <div class="payment-data-title">Pago con Tarjetas</div>
                        <div class="payment-data-subtitle"><a href="#" data-toggle="modal" data-target="#payment-data-Modal-1" data-title="Ver más" rel="nofollow">Ver más</a>
                        </div>
                    </div>
                    <div class="col-sm-4 payment-data-section mg-lg-b">
                        <a href="#" class="payment-data-icon" data-toggle="modal" data-target="#payment-data-Modal-3" data-title="Medios de pago" rel="nofollow"><img alt="" src="/nuevosAssets/images/d12-net-baking.svg"></a>
                        <div class="payment-data-title">Otros medios de pago</div>
                        <div class="payment-data-subtitle"><a href="#" data-toggle="modal" data-target="#payment-data-Modal-3" data-title="Medios de pago" rel="nofollow">Ver más</a>
                        </div>
                    </div>
                    <div class="col-sm-4 payment-data-section mg-lg-b">
                        <a href="#" class="payment-data-icon" data-toggle="modal" data-target="#payment-data-Modal-2" data-title="Sitio 100% seguro" rel="nofollow"><img alt="" src="/nuevosAssets/images/f19-lock-symbol.svg"></a>
                        <div class="payment-data-title">Sitio 100% seguro</div>
                        <div class="payment-data-subtitle"><a href="#" data-toggle="modal" data-target="#payment-data-Modal-2" data-title="Sitio 100% seguro" rel="nofollow">Tus datos están protegidos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <hr>
    </section>

@stop
