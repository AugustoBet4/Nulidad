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
                          <b><h2>Cuestionario del demandado</h2></b><br>
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
                                <h5>A1: ¿De una descripción de sus padres?</h5>
                                  <input type="text" name="descripcionpadres" class="form-control"></input><br>
                                  <h5>A2. ¿Había problemas en el matrimonio de sus padres? De ser así, por favor de una explicación detallada.</h5>
                                    <input type="text" class="form-control" name="problemasmatrimoniopadres"></input><br>
                                    <h5>A3. ¿Cuántos hermanos y hermanas tenía usted? ¿Como era su relación con cada uno de ellos?</h5>
                                      <input type="text" name="relacionhermanos" class="form-control"></input><br>
                                      <h5>A4. Describa su vida durante su infancia y adolescencia.</h5>
                                        <input type="text" name="infanciaadolescencia" class="form-control"></input><br>
                                        <h5>A5. ¿Tenía algún problema de salud durante su infancia y adolescencia?</h5>
                                          <input type="text" name="problemassalud" class="form-control"></input><br>
                                          <h5>A6. ¿Durante sus años en casa, fue alguna vez tratado(a) por problemas emocionales, psicológicos o psiquiátricos? Si es así, de el motivo, dando nombres de doctores y donde fue tratado(a).</h5>
                                            <input type="text" name="problemasmentales" class="form-control"></input><br>
                                            <h5>A7. Describa su historial de empleo, antes y después de su matrimonio. Aproximadamente los años que duro en los trabajos y porque cambio de trabajo, si fue así.</h5>
                                              <input type="text" name="historialempleo" class="form-control"></input><br>
                                              <h5>A8. ¿Cuales considera usted que son las mejores cualidades de su personalidad?</h5>
                                                <input type="text" name="cualidadespersonalidad" class="form-control"></input><br>
                                                <h5>A9. ¿Cuales considera usted que son las debilidades en su personalidad?</h5>
                                                  <input type="text" name="debilidadespersonalidad" class="form-control"></input><br>
                                                  <h5>A10. ¿Describa su formación religiosa?</h5>
                                                      <input type="text" name="formacionreligiosa" class="form-control"></input><br>
                                                      <h5>A11. ¿Había historial de abuso de alcohol o de drogas en su familia, favor de explicar?</h5>
                                                        <input type="text" name="abusoalcoholfamilia" class="form-control"></input><br>
                                                        <h5>A12. ¿Había historia de abuso físico, mental o sexual en su familia? De ser así, por favor de una explicación detallada.</h5>
                                                          <input type="text" name="abusofamilia" class="form-control"></input><br>

                              </div>
                            </div>
                              </section>
                                  <h2>Sobre su esposo</h2>
                                  <section>
                                  <div class="form-group">
                                  <div class="form-line">
                                    <h5>A13. ¿Describa a los padres de su esposo(a)?</h5>
                                      <input type="text" name="descripcionpadresesp" class="form-control"></input><br>
                                      <h5>A14. ¿Había problemas en el matrimonio de los padres de su esposo(a)?</h5>
                                        <input type="text" class="form-control" name="problemasmatrimoniopadresesp"></input><br>
                                        <h5>A15. ¿Cuántos hermanos y hermanas tenía su esposo(a)? ¿Cómo era la relación de su esposo(a) con ellos?</h5>
                                          <input type="text" name="relacionhermanosesp" class="form-control"></input><br>
                                          <h5>A16. Describa la vida de su esposo(a) durante su infancia y adolescencia.</h5>
                                            <input type="text" name="infanciaadolescenciaesp" class="form-control"></input><br>
                                            <h5>A17. ¿Tenía su esposo(a) problemas de salud durante la infancia y adolescencia?</h5>
                                              <input type="text" name="problemassaludesp" class="form-control"></input><br>
                                              <h5>A18. ¿Ha sido su esposo(a) tratado(a) por problemas psiquiátricos, psicológicos o emocionales? </h5>
                                                <input type="text" name="problemasmentalesesp" class="form-control"></input><br>
                                                <h5>A19. Describa el historial de empleo de su esposo(a), trabajos, cuánto tiempo trabajo en cada lugar y porque cambio de trabajos.</h5>
                                                  <input type="text" name="historialempleoesp" class="form-control"></input><br>
                                                  <h5>A20. ¿Cuales considera usted que sean las mejores cualidades en la personalidad de su esposo(a)?</h5>
                                                    <input type="text" name="cualidadespersonalidadesp" class="form-control"></input><br>
                                                    <h5>A21. ¿Cuales considera usted que sean las debilidades en la personalidad de su esposo(a)?</h5>
                                                      <input type="text" name="debilidadespersonalidadesp" class="form-control"></input><br>
                                                      <h5>A22. Describa la formación religiosa de su esposo(a).</h5>
                                                          <input type="text" name="formacionreligiosaesp" class="form-control"></input><br>
                                                          <h5>A23. ¿Había abuso de alcohol o de drogas en la familia de su esposo(a)? Favor de explicar.</h5>
                                                            <input type="text" name="abusoalcoholfamiliaesp" class="form-control"></input><br>
                                                            <h5>A24. ¿Había historia de abuso físico, mental o sexual en la familia de su esposo(a)? De ser así, por favor de una explicación detallada.</h5>
                                                              <input type="text" name="abusofamiliaesp" class="form-control"></input><br>

                                  </div>
                                </div>
                                  </section>
                                      <h2>Noviazgo/Compromiso</h2>
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
                                                                          <input type="text" name="otrosnoviosesp" class="form-control"></input><br>
                                                                            <h5>B17. ¿Cuál era la actitud de sus padres, familiares, amistades con respecto a su noviazgo con su esposo(a)?</h5>
                                                                              <input type="text" name="actitudpadres" class="form-control"></input><br>
                                                                              <h5>B18. ¿Cuándo y bajo que circunstancia surgió entre ustedes dos el tema del matrimonio?</h5>
                                                                                <input type="text" name="temamatrimonio" class="form-control"></input><br>
                                                                                <h5>B19. ¿Cuáles eran las razones básicas por las cuales decidieron casarse?</h5>
                                                                                  <input type="text" name="razonesbasicasmatriqui" class="form-control"></input><br>
                                                                                  <h5>B20. ¿Cuánto tiempo antes de que se casaran fijaron la fecha de la ceremonia?</h5>
                                                                                    <input type="text" name="tiempofecha" class="form-control"></input><br>
                                      </div>
                                    </div>
                                      </section>
                                      <h2>Celebración de la boda</h2>
                                      <section>
                                      <div class="form-group">
                                      <div class="form-line">
                                        <h5>C1. Si se casó en la iglesia Católica, de las razones por las que se casó en la Iglesia Católica.</h5>
                                          <input type="text" name="razonescato" class="form-control"></input><br>
                                          <h5>C2. Antes de que se casaran, ¿recibieron ustedes instrucciones acerca del matrimonio? (Por ejemplo, de un sacerdote, diacono, ministro, consejero, programa de pre-cana, etc.)</h5>
                                            <input type="text" class="form-control" name="instruccionesmatriqui"></input><br>
                                            <h5>C3. ¿Fue presentada la enseñanza Católica acerca de la fidelidad, los hijos y la permanencia del matrimonio durante la preparación antes del casamiento?</h5>
                                              <input type="text" name="enseñanzacato" class="form-control"></input><br>
                                              <h5>C4. ¿Cuál fue la reacción de cada uno de ustedes a esta preparación? </h5>
                                                <input type="text" name="reaccionpreparacion" class="form-control"></input><br>
                                                <h5>C5. ¿Qué papel desempeñaba la religión en la vida de cada uno en ese tiempo?</h5>
                                                  <input type="text" name="papelreligion" class="form-control"></input><br>
                                                  <h5>C6. Si este fue un matrimonio entre dos personas de diferente religiones, ¿Hubo algún conflicto debido a la diferencia de religiones, o problemas con el bautismo y la educación de los hijos en la Iglesia Católica? </h5>
                                                    <input type="text" name="matrimoniodiferente" class="form-control"></input><br>
                                                    <h5>C7. ¿Tenía usted alguna duda de que él/ella era la persona con quien usted quería vivir el resto de su vida? </h5>
                                                      <input type="text" name="duda" class="form-control"></input><br>
                                                      <h5>C8. ¿Hubo alguien que le aconsejara en contra de este matrimonio? ¿Por qué? </h5>
                                                        <input type="text" name="encontramatriqui" class="form-control"></input><br>
                                                        <h5>C9. ¿Qué papel tomó cada uno en los planes de la boda?</h5>
                                                          <input type="text" name="papelplanes" class="form-control"></input><br>
                                                          <h5>C10. ¿Hubo alguna interferencia de parte de otros en sus planes? </h5>
                                                              <input type="text" name="interferencia" class="form-control"></input><br>
                                                              <h5>C11. ¿Pasó algo fuera de lo común el día de la boda o en los días inmediatamente antes de la boda?  </h5>
                                                                <input type="text" name="fueracomundia" class="form-control"></input><br>
                                                                <h5>C12. ¿Creían ustedes que cuando hicieron sus votos matrimoniales estaban renunciando a la libertad de volverse a casar si este matrimonio resultara infeliz? Favor de explicar.</h5>
                                                                  <input type="text" name="votosmatriqui" class="form-control"></input><br>
                                                                  <h5>C13. El matrimonio es una unión en donde la meta es para el bien de la pareja y la procreación y educación de los hijos. ¿Comprendían ustedes este aspecto del matrimonio?</h5>
                                                                    <input type="text" name="comprendianmatriqui" class="form-control"></input><br>
                                                                    <h5>C14. Si alguno de los dos entendía esto, ¿se comprometió sinceramente a este matrimonio?</h5>
                                                                      <input type="text" name="sinceridad" class="form-control"></input><br>
                                                                      <h5>C15. ¿Hicieron algún contrato o pacto prenupcial antes de la boda? Si la respuesta es sí, presente una copia. </h5>
                                                                        <input type="text" name="prenupcial" class="form-control"></input><br>
                                                                        <h5>C16. ¿Escribieron ustedes sus propios votos matrimoniales? Si la respuesta es sí, cuales fueron esos votos.</h5>
                                                                          <input type="text" name="propiosvotos" class="form-control"></input><br>
                                                                            <h5>C17. ¿Tenía en su mente o en la mente de su esposo(a) alguna condición o reservación acerca del uno al otro antes de casarse? Si la respuesta es sí, favor de explicar. </h5>
                                                                              <input type="text" name="condicion" class="form-control"></input><br>
                                                                              <h5>C18. ¿Hubo presión o miedo, interior o exterior, que le obligo a casarse? Si la respuesta es sí, favor de explicar. </h5>
                                                                                <input type="text" name="obligacion" class="form-control"></input><br>
                                                                                <h5>C19. ¿Tuvieron luna de miel?</h5>
                                                                                  <input type="text" name="lunamiel" class="form-control"></input><br>
                                                                                  <h5>C20. Describa si hubo problemas, frustraciones o descubrimientos indiscretos durante la luna de miel. </h5>
                                                                                    <input type="text" name="problemaslunamiel" class="form-control"></input><br>
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
                                                                              <h5>D17. ¿Cómo se describiría usted como padre/madre?</h5>
                                                                                <input type="text" name="desmadre" class="form-control"></input><br>
                                                                                <h5>D18. ¿Qué clase de padre/madre fue su esposo/a?</h5>
                                                                                  <input type="text" name="despadre" class="form-control"></input><br>
                                                                                  <h5>D19. ¿Hubo problemas financieros que afectaron el matrimonio?</h5>
                                                                                    <input type="text" name="problemasfinancieros" class="form-control"></input><br>
                                                                                    <h5>D20. ¿Hubo problemas con el abuso de alcohol y/o drogas?</h5>
                                                                                      <input type="text" name="problemasporserdrogo" class="form-control"></input><br>
                                                                                      <h5>D21. ¿Qué papel tuvo la religión en el matrimonio?</h5>
                                                                                        <input type="text" name="papelreligionmatrimonio" class="form-control"></input><br>
                                                                                        <h5>D22. ¿Hubo problemas que surgieron debido a diferencias culturales, raciales y religiosas?</h5>
                                                                                          <input type="text" name="problemasculturales" class="form-control"></input><br>
                                                                                          <h5>D23. ¿Hubo algún problema de abuso físico, mental o sexual durante su matrimonio? Si fue así, favor de explicar. </h5>
                                                                                            <input type="text" name="abusomatrimonio" class="form-control"></input><br>
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
                                                                    <h5>E12. ¿Cuánto tiempo vivieron juntos exactamente?</h5>
                                                                      <input type="text" name="tiempovivir" class="form-control"></input><br>
                                                                      <h5>E13. Considerando los problemas en su matrimonio, ¿Cuál fue la razón por la cual vivieron juntos todo ese tiempo?</h5>
                                                                        <input type="text" name="razonjuntos" class="form-control"></input><br>
                                                                        <h5>E14. ¿Por qué cree usted que su matrimonio es inválido y nulo? </h5>
                                                                          <input type="text" name="matrimonionulo" class="form-control"></input><br>
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
                                                    <h5>F4. ¿Se ha vuelto a casar usted? Si la respuesta es sí, escriba el/los nombre(s) fecha(s), de los matrimonios religión y previo estado matrimonial de su presente esposo(a). Si se ha casado más de una vez, por favor liste la misma información para cada uno de sus matrimonios.</h5>
                                                      <input type="text" name="casaragain" class="form-control"></input><br>
                                                      <h5>F5. ¿Se ha vuelto a casar su esposo(a)? Si la respuesta es sí, de el nombre, religión y estado matrimonial previo del presente esposo(a).</h5>
                                                        <input type="text" name="casaragainesp" class="form-control"></input><br>
                                                        <h5>F6. ¿Por qué está solicitando esta anulación matrimonial de la Iglesia? </h5>
                                                          <input type="text" name="porqueanular" class="form-control"></input><br>
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
                                                                <input type="text" name="presioncasarse" class="form-control"></input><br>
                                                                <h5>G9. ¿Tenía usted o su esposo(a) la intención de terminar el matrimonio después de que el bebe naciera?</h5>
                                                                  <input type="text" name="intencionterminar" class="form-control"></input><br>
                                                                  <h5>G10. ¿Consideraron otras alternativas además del matrimonio cuando el embarazo se supo?</h5>
                                                                    <input type="text" name="otrasalternativas" class="form-control"></input><br>
                                                                    <h5>G11. ¿Tiene algún otro comentario que añadir a este respecto?</h5>
                                                                      <input type="text" name="otrocoment" class="form-control"></input><br>
                                              </div>
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
                                                                    <h5>H10. Al momento en que se hacían arreglos para la celebración de la boda en la Iglesia, ¿fue el sacerdote o diacono informado que había problemas en el matrimonio civil? </h5>
                                                                      <input type="text" name="infoproblemas" class="form-control"></input><br>
                                                                      <h5>H11. ¿Qué consejo recibió de parte del sacerdote o diácono? </h5>
                                                                        <input type="text" name="consejopadre" class="form-control"></input><br>
                                                                        <h5>H12. ¿Recibieron usted y su esposo(a) instrucciones de parte del sacerdote o diácono antes de que se celebrara la boda? </h5>
                                                                          <input type="text" name="instruccionespadre" class="form-control"></input><br>
                                                                          <h5>H13. ¿De qué se trataron estas instrucciones? </h5>
                                                                            <input type="text" class="form-control" name="queinstru"></input><br>
                                                                            <h5>H14. ¿Dónde se llevó a cabo la celebración de la boda religiosa? Escriba el nombre y la dirección de la Iglesia. </h5>
                                                                              <input type="text" name="dondemacato" class="form-control"></input><br>
                                                                              <h5>H15. ¿Quiénes fueron sus testigos en la validación del matrimonio? </h5>
                                                                                <input type="text" name="testigosval" class="form-control"></input><br>
                                                                                <h5>H16. ¿Sucedió algo fuera de lo común durante la celebración matrimonial? De ser así, por favor elaborar una respuesta detallada.</h5>
                                                                                  <input type="text" name="fueracomunma" class="form-control"></input><br>
                                                                                  <h5>H17. ¿Tiene información adicional con respecto a la validación del matrimonio? </h5>
                                                                                    <input type="text" name="valimaadic" class="form-control"></input><br>
                                                                                    <h5>Si tiene información que añadir sobre el matrimonio, por favor inclúyalo en este espacio.</h5>
                                                                                      <input type="text" name="infoadici" class="form-control"></input><br>

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
