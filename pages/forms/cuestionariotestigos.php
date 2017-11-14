<?php
$ncaso=1;
$matrimonio="X-X";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Nulidad Matrimonial - Caso nuevo</title>
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="../../plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
</head>
<body class="theme-blue">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Porfavor espere...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.php">SEMINARIO</a>
            </div>
        </div>
    </nav>
    <section>
        <aside id="leftsidebar" class="sidebar">
            <div class="user-info">
                <div class="image">
                    <img src="../../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Roberto Boceta</div>
                    <div class="email">roberto.boceta@gmail.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                          <li><a href="../../pages/forms/ingreso.php">Cerrar Sesion<i class="material-icons">input</i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu">
                <ul class="list">
                    <li>
                        <a href="indagacion.php">
                            <i class="material-icons">library_add</i>
                            <span>Caso nuevo</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">              <!-- a href="../../pages/bla.html"-->
                            <i class="material-icons">attach_file</i>
                            <span>Dar seguimiento a caso</span>
                        </a>
                        <ul class="ml-menu">
                            <li >
                                <a href="indagacion.php">Indagacion Previa</a>
                            </li>
                            <li class="active">
                                <a href="introduccion.php">Fase Introductoria</a>
                            </li>
                            <li>
                                <a href="indagacion.php">Fase de Instrucción</a>
                            </li>
                            <li>
                                <a href="alegatoria.php">Fase Alegatoria</a>
                            </li>
                            <li>
                                <a href="sentencia.php">Fase Decisoria</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="buscador.php">
                            <i class="material-icons">search</i>
                            <span>Buscar caso</span>
                        </a>
                    </li>
                    <li>
                        <a href="nuevo_encargado.php">
                            <i class="material-icons">account_box</i>
                            <span>Agregar nuevo encargado</span>
                        </a>
        </aside>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                      <div class="header">
                          <b><h2>CUESTIONARIOS</h2></b><br>
                          <b><h2>Cuestionario del demandante</h2></b><br>
                          <font color=red>* Dato requerido</font><br><br>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <div class="form-line">
                                    <h4>Número del caso</h4>
                                      <input type="number" name="ncaso" class="form-control" value="<?php echo $ncaso;?>"disabled></input>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <div class="form-line">
                                    <h4>Nombre del caso</h4>
                                      <input type="text" name="matrimonio" class="form-control" value="<?php echo $matrimonio;?>"disabled></input>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="body">
                        <form method="post" action="">
                          <div id="wizard_vertical">
                              <h2>Sobre usted</h2>
                              <section>
                              <div class="form-group">
                              <div class="form-line">
                                <h5>1. ¿Desde cuándo conoce al Demandante?</h5>
                                  <input type="text" name="descripcionpadres" class="form-control"></input><br>
                                  <h5>2. ¿Es usted pariente de esta persona? De ser así, ¿cuál es su relación?</h5>
                                    <input type="text" class="form-control" name="problemasmatrimoniopadres"></input><br>
                                    <h5>3. ¿Considera usted a esta persona honesta? </h5>
                                      <input type="text" name="relacionhermanos" class="form-control"></input><br>
                                      <h5>4. ¿Cree usted que esta persona diría la verdad, aún cuando pudiera ser para su desventaja?.</h5>
                                        <input type="text" name="infanciaadolescencia" class="form-control"></input><br>
                                        <h5>5. ¿Por cuánto tiempo y qué tan bien conoce al Demandado(a)?</h5>
                                          <input type="text" name="problemassalud" class="form-control"></input><br>
                                          <h5>6. ¿Es usted pariente de esta persona? De ser así, ¿cuál es su relación?</h5>
                                            <input type="text" name="problemasmentales" class="form-control"></input><br>
                                            <h5>7. ¿Considera usted a esta persona honesta? </h5>
                                              <input type="text" name="historialempleo" class="form-control"></input><br>
                                              <h5>8. ¿Cree usted que esta persona diría la verdad, aún cuando pudiera ser para su desventaja?</h5>
                                                <input type="text" name="cualidadespersonalidad" class="form-control"></input><br>

                              </div>
                            </div>
                              </section>
                                  <h2>Antecedentes familiares/personales</h2>
                                  <section>
                                  <div class="form-group">
                                  <div class="form-line">
                                    <h5>A1. 	¿Cómo describiría la personalidad de el/la Demandante?</h5>
                                      <input type="text" name="descripcionpadresesp" class="form-control"></input><br>
                                      <h5>A2.	¿Cuáles son sus antecedentes familiares? (Su relación con sus padres y parientes)</h5>
                                        <input type="text" class="form-control" name="problemasmatrimoniopadresesp"></input><br>
                                        <h5>A3. 	¿Cómo describiría la personalidad de el/la Demandado(a)?</h5>
                                          <input type="text" name="relacionhermanosesp" class="form-control"></input><br>
                                          <h5>A4.	¿Cuáles son sus antecedentes familiares? (Su relación con sus padres y parientes)</h5>
                                            <input type="text" name="infanciaadolescenciaesp" class="form-control"></input><br>
                                          </div>
                                </div>
                                  </section>
                                      <h2>Con respecto al noviazgo</h2>
                                      <section>
                                      <div class="form-group">
                                      <div class="form-line">
                                        <h5>B1. ¿Donde, cuando, y como conoció usted a su esposo(a)?</h5>
                                          <input type="text" name="comoconocioesp" class="form-control"></input><br>
                                          <h5>B2. ¿Con que frecuencia después de haberse conocido salían juntos?</h5>
                                            <input type="text" class="form-control" name="frecuenciasalidas"></input><br>
                                            <h5>B3. ¿Qué fue lo que le atrajo a usted hacia su esposo(a)? ¿Sabe usted que le atrajo a él/ella hacia usted?</h5>
                                              <input type="text" name="atraccionmutua" class="form-control"></input><br>
                                              <h5>B4. Describa brevemente la relación entre usted y su esposo(a) durante el noviazgo.</h5>
                                                <input type="text" name="relacion" class="form-control"></input><br>
                                                <h5>B5. ¿Qué hacían cuando salían juntos?</h5>
                                                  <input type="text" name="tiempojuntos" class="form-control"></input><br>
                                                  <h5>B6. ¿Cuando se dio cuenta de que se había enamorado de su esposo/a?</h5>
                                                    <input type="text" name="enamoradoesp" class="form-control"></input><br>
                                                    <h5>B7. ¿Qué significaba para usted estar enamorado/a?</h5>
                                                      <input type="text" name="queenamorado" class="form-control"></input><br>
                                                      <h5>B8. ¿Paso algo fuera de lo común durante el noviazgo?</h5>
                                                        <input type="text" name="fueracomun" class="form-control"></input><br>
                                                        <h5>B9. ¿Qué edad tenía usted cuando comenzó el noviazgo?</h5>
                                                          <input type="text" name="edadnoviazgo" class="form-control"></input><br>
                                                          <h5>B10. ¿Existió algún compromiso formal y cuanto tiempo duro el compromiso?</h5>
                                                              <input type="text" name="compromisoformal" class="form-control"></input><br>
                                                              <h5>B11. ¿Se termino el compromiso en algún momento? Si la respuesta es sí, ¿Cual fue el motivo?</h5>
                                                                <input type="text" name="compromisoterminado" class="form-control"></input><br>
                                                                <h5>B12. ¿Hubo relaciones sexuales durante el noviazgo o durante el compromiso? </h5>
                                                                  <input type="text" name="relacionessex" class="form-control"></input><br>
                                                                  <h5>B13. ¿Hubo embarazo(s) antes del matrimonio?</h5>
                                                                    <input type="text" name="embarazonantes" class="form-control"></input><br>
                                                                    <h5>B14. ¿Eran novios exclusivos durante el noviazgo y el compromiso?</h5>
                                                                      <input type="text" name="exclusividad" class="form-control"></input><br>
                                                                      <h5>B15. ¿Tuvo usted otros novios antes de comenzar el noviazgo con su esposo(a)? </h5>
                                                                        <input type="text" name="otrosnovios" class="form-control"></input><br>
                                                                        <h5>B16. ¿Tenía su esposo(a) otros novios antes de hacerse novio/a de usted? </h5>
                                                                          </div>
                                    </div>
                                      </section>
                                      <h2>Celebración de la union matrimonial</h2>
                                      <section>
                                      <div class="form-group">
                                      <div class="form-line">
                                        <h5>C1. ¿Estuvo usted presente en la ceremonia de bodas? De ser así, ¿hubo algo inusual en ésta?</h5>
                                          <input type="text" name="razonescato" class="form-control"></input><br>
                                          <h5>C2. ¿Hubo una recepción después de la ceremonia? ¿Asistió a la recepción? ¿Se presentó algo inusual durante la recepción?</h5>
                                          <input type="text" name="razonescato" class="form-control"></input><br>
                                            </div>
                                    </div>
                                      </section>
                                        <h2>La vida del matrimonio</h2>
                                        <section>
                                        <div class="form-group">
                                        <div class="form-line">
                                          <h5>D1. Describa el primer año del Matrimonio.</h5>
                                            <input type="text" name="primeraño" class="form-control"></input><br>
                                            <h5>D2. ¿Cuándo surgieron los problemas por primera vez en el matrimonio?</h5>
                                              <input type="text" class="form-control" name="problemas"></input><br>
                                              <h5>D3. Describa la naturaleza de los problemas.</h5>
                                                <input type="text" name="naturalezaproblemas" class="form-control"></input><br>
                                                <h5>D4. ¿Qué papel asumió cada uno de ustedes durante el matrimonio?</h5>
                                                  <input type="text" name="papelmatrimonio" class="form-control"></input><br>
                                                  <h5>D5. ¿Cómo y por quién fueron las decisiones hechas en el matrimonio?</h5>
                                                    <input type="text" name="decisionesmatrimonio" class="form-control"></input><br>
                                                    <h5>D6. ¿Hasta que punto usted y su esposo(a) pudieron comunicarse honesta y eficazmente entre si?</h5>
                                                      <input type="text" name="honestidad" class="form-control"></input><br>
                                                      <h5>D7. ¿Podían expresar y compartir sus sentimientos el uno con el otro?</h5>
                                                        <input type="text" name="expresarfeelings" class="form-control"></input><br>
                                                        <h5>D8. ¿Tuvo usted una relación sexual satisfactoria en el matrimonio?</h5>
                                                          <input type="text" name="relacionsatisfactoria" class="form-control"></input><br>
                                                          <h5>D9. ¿Tenía usted y su esposo(a) la intención de tener niños en el matrimonio?</h5>
                                                            <input type="text" name="hijos" class="form-control"></input><br>
                                                            <h5>D10. ¿Se utilizaron anticonceptivos durante el matrimonio? Si fue así, ¿por quién?, y ¿por cuánto tiempo?</h5>
                                                                <input type="text" name="anticonceptivos" class="form-control"></input><br>
                                                                <h5>D11. ¿Cuántos hijos nacieron en el matrimonio?</h5>
                                                                  <input type="text" name="cuantoshijos" class="form-control"></input><br>
                                                                  <h5>D12. Si no nacieron hijos en el matrimonio explique por qué no.</h5>
                                                                    <input type="text" name="porquenohijos" class="form-control"></input><br>
                                                                    <h5>D13. ¿Cómo se llevaba usted con la familia de su esposo(a)? </h5>
                                                                      <input type="text" name="relacionfamiliaesp" class="form-control"></input><br>
                                                                      <h5>D14. ¿Cómo se llevaba su esposo(a) con la familia de usted? </h5>
                                                                        <input type="text" name="relacionmifamilia" class="form-control"></input><br>
                                                                        <h5>D15. ¿Hubo problemas relacionados con el trabajo en el matrimonio? Si es así explique por favor.</h5>
                                                                          <input type="text" name="problemastrabajo" class="form-control"></input><br>
                                                                          <h5>D16. ¿Hubo problemas de infidelidad en el matrimonio? ¿Cuándo comenzaron? y ¿Cómo fueron resueltos?</h5>
                                                                            <input type="text" name="infidelidad" class="form-control"></input><br>
                                                                  </div>
                                      </div>
                                        </section>
                                          <h2>Factores de condujeron a la desintregación del matrimonio</h2>
                                          <section>
                                          <div class="form-group">
                                          <div class="form-line">
                                            <h5>E1. ¿Qué hicieron para tratar de resolver los problemas en el matrimonio?</h5>
                                              <input type="text" name="resolverproblemas" class="form-control"></input><br>
                                              <h5>E2. ¿Cuándo fue la posibilidad de divorcio mencionado por primera vez y por quién?</h5>
                                                <input type="text" class="form-control" name="posibilidaddivorcio"></input><br>
                                                <h5>E3. ¿Hubo separaciones durante el matrimonio? ¿Por qué? ¿Cuántas? ¿Por cuánto tiempo?</h5>
                                                  <input type="text" name="separacionesmatrimonio" class="form-control"></input><br>
                                                  <h5>E4. ¿Cuándo y por qué ocurrió la separación final? </h5>
                                                    <input type="text" name="separacionfinal" class="form-control"></input><br>
                                                    <h5>E5. ¿Qué intentos hicieron para reconciliarse?</h5>
                                                      <input type="text" name="intentosreconciliarse" class="form-control"></input><br>
                                                      <h5>E6. ¿Hubo consejería profesional para resolver los problemas en el matrimonio? Si fue así, proporcione los nombres de los consejeros, fechas y lugares.</h5>
                                                        <input type="text" name="consejeria" class="form-control"></input><br>
                                                        <h5>E7. ¿Está usted dispuesto(a) a firmar un permiso para que los consejeros puedan testificar? Si la respuesta es sí, de los nombres y las direcciones. </h5>
                                                          <input type="text" name="firmarpermiso" class="form-control"></input><br>
                                                          <h5>E8. ¿Hubo alguna otra persona involucrada en el rompimiento del matrimonio?</h5>
                                                            <input type="text" name="otrosinvolucrados" class="form-control"></input><br>
                                                            <h5>E9. ¿Cuales eran su quejas sobre su esposo(a)?</h5>
                                                              <input type="text" name="quejas" class="form-control"></input><br>
                                                              <h5>E10. ¿Cuáles eran las quejas de su esposo(a) sobre usted?</h5>
                                                                  <input type="text" name="quejasesp" class="form-control"></input><br>
                                                                  <h5>E11. ¿Quién pidió el divorcio civil? ¿Cuándo? ¿Dónde? ¿Cuáles fueron los causales? </h5>
                                                                    <input type="text" name="divorciocivil" class="form-control"></input><br>
                                                                  </div>
                                        </div>
                                          </section>
                                            <h2>Asuntos/terminos pendientes despues del divorcio</h2>
                                            <section>
                                            <div class="form-group">
                                            <div class="form-line">
                                              <h5>F1. ¿Quién recibió la custodia de los hijos? ¿Por qué? </h5>
                                                <input type="text" name="custodiahijos" class="form-control"></input><br>
                                                <h5>F2. ¿Han sido fieles a las responsabilidades financieras, morales, espirituales, y familiares de los hijos de este matrimonio después del divorcio?</h5>
                                                  <input type="text" class="form-control" name="responsabilidadplata"></input><br>
                                                  <h5>F3. ¿Existen demandas civiles pendientes?</h5>
                                                    <input type="text" name="demandasciviles" class="form-control"></input><br>
                                            </div>
                                          </div>
                                            </section>
                                              <h2>Con respecto a embarazo prematrimonial (Si no hubo embarazo prematrimonial pase a la siguiente sección)</h2>
                                              <section>
                                              <div class="form-group">
                                              <div class="form-line">
                                                <h5>G1. ¿Cuándo el embarazo prematrimonial se supo, ustedes tenían planes de casarse?</h5>
                                                  <input type="text" name="epplanescasarse" class="form-control"></input><br>
                                                  <h5>G2. En el momento del embarazo, ¿estaban ustedes comprometidos?</h5>
                                                    <input type="text" class="form-control" name="epcompromiso"></input><br>
                                                    <h5>G3. ¿Cuál fue su reacción cuando se dio cuenta del embarazo?</h5>
                                                      <input type="text" name="reaccionembarazo" class="form-control"></input><br>
                                                      <h5>G4. ¿Cuál fue la reacción de su esposo(a) cuando se dio cuenta del embarazo?</h5>
                                                        <input type="text" name="reaccionembarazoesp" class="form-control"></input><br>
                                                        <h5>G5. ¿Cuál fue la reacción de sus padres con respecto al embarazo?</h5>
                                                          <input type="text" name="reaccionpadresem" class="form-control"></input><br>
                                                          <h5>G6. ¿Cuál fue la reacción de los padres de su esposo(a)?</h5>
                                                            <input type="text" name="reaccionpadresemesp" class="form-control"></input><br>
                                                            <h5>G7. Si no hubiera habido embarazo, ¿Se hubiera llevado a cabo el matrimonio? Por favor explique.</h5>
                                                              <input type="text" class="form-control" name="noembarazo"></input><br>
                                                              <h5>G8. ¿Hubo presión alguna por parte de los padres de cualquiera de las dos partes para que se llevara a cabo el matrimonio? De ser así por favor explique.</h5>
                                                                <input type="text" name="presioncasarse" class="form-control"></input><br></div>
                                            </div>
                                              </section>
                                                <h2>Validación del matrimonio civil (Si el matrimonio fue validado por la Iglesia Católica,
por favor responda las siguientes preguntas).</h2>
                                                <section>
                                                <div class="form-group">
                                                <div class="form-line">
                                                  <h5>H1. ¿Dónde se llevó a cabo el matrimonio civil? </h5>
                                                    <input type="text" name="mcivil" class="form-control"></input><br>
                                                    <h5>H2. ¿Dónde se llevó a cabo el matrimonio religioso? </h5>
                                                      <input type="text" class="form-control" name="mreligioso"></input><br>
                                                      <h5>H3. ¿Por qué no se celebro el matrimonio en la Iglesia Católica desde un principio?  Por favor elabore una respuesta detallada. </h5>
                                                        <input type="text" name="porquecivil" class="form-control"></input><br>
                                                        <h5>H4. ¿Qué circunstancias provocaron que el matrimonio se celebrara en la Iglesia Católica? </h5>
                                                          <input type="text" name="porquecatoma" class="form-control"></input><br>
                                                          <h5>H5. ¿Hubo presión para que el matrimonio se celebrara en la Iglesia Católica por parte de alguna persona que no fuera el novio/a?  (Por ejemplo, por parte de los padres, amigos, etc) De ser así, elabore una respuesta detallada. </h5>
                                                            <input type="text" name="presionmcato" class="form-control"></input><br>
                                                            <h5>H6. ¿Estaban tanto usted como su esposo(a) completamente de acuerdo con la celebración religiosa? De no ser así, elabore una respuesta detallada. </h5>
                                                              <input type="text" name="deacuerdoma" class="form-control"></input><br>
                                                              <h5>H7. Ya ha mencionado que había problemas en su matrimonio. ¿En el momento en que se celebro el matrimonio en la Iglesia, existían esos problemas?</h5>
                                                                <input type="text" class="form-control" name="problemasantes"></input><br>
                                                                <h5>H8. ¿Después de que se celebrara el matrimonio en la Iglesia, continuaron los problemas?  </h5>
                                                                  <input type="text" name="problemasdespues" class="form-control"></input><br>
                                                                  <h5>H9. Si había problemas en el matrimonio civil, ¿por qué se celebró el matrimonio en la Iglesia?</h5>
                                                                    <input type="text" name="problemasmcivil" class="form-control"></input><br>
                                                </div>
                                              </div>
                                                </section>
                                                <h2>Otros</h2>
                                                <section>
                                                <div class="form-group">
                                                <div class="form-line">
                                                  <h5>I1. ¿Hay algo más que quiere agregar? </h5>
                                                    <input type="text" name="mcivil" class="form-control"></input><br>
                                                    <h5>I2. ¿Esta dispuesto a ser contactado a declarar? </h5>
                                                      <input type="text" class="form-control" name="mreligioso"></input><br>
                                                    </div>
                                                  </div>
                                                    </section>
                          </div>
                        </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>
    <script src="../../plugins/jquery-steps/jquery.steps.js"></script>
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>
    <script src="../../plugins/node-waves/waves.js"></script>
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/form-wizard.js"></script>
    <script src="../../js/demo.js"></script>
</body>
</html>
