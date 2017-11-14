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
