<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Nulidad Matrimonial - Caso nuevo</title>
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="../../plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue">
    <!-- Page Loader -->
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
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.php">SEMINARIO</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
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
            <!-- #User Info -->
            <!-- Menu -->
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
                                <a href="instruccion.php">Fase de Instrucción</a>
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
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                      <div class="header">
                          <h2>DOCUMENTOS GENERADOS PARA LA FASE DE INTRODUCCIÓN</h2>
                      </div>
                      <div class="body">
                          <div id="wizard_vertical">
                              <h2>Registro de la demanda</h2>
                              <section>
                                  <p>
                                      <a href="registrodemanda.php">Realizar registro del escrito de la demanda.</a>
                                  </p>
                              </section>
                              <h2>Aceptación demanda</h2>
                              <section>
                                  <p>
                                    <a href="aceptaciondemanda.php">Decreto de admisión de la demanda y formula de dudas.</a>
                                  </p>
                              </section>
                              <h2>Citación de la demanda</h2>
                              <section>
                                  <p>
                                    <a href="citaciondemanda.php">Cedula de citación al demandado.</a>
                                  </p>
                                </section>
                                  <h2>Comparecencia</h2>
                                  <section>
                                    <p>
                                      <a href="comparecencia.php">Comparecencia de demandante.</a>
                                    </p>
                                  </section>
                                  <h2>Decreto citación por edicto</h2>
                                  <section>
                                      <p>
                                          <a href="decretoedicto.php">Decreto del vicario judicial disponiendo citar por edicto.</a>
                                      </p>
                                  </section>
                                  <h2>Edicto</h2>
                                  <section>
                                      <p>
                                          <a href="edictopublicar.php">Edicto a publicar.</a>
                                      </p>
                                  </section>
                                  <h2>Citación por exhorto</h2>
                                  <section>
                                      <p>
                                          <a href="citacionexhorto.php">Emplazamiento del demandado a través de exhorto a otro tribunal.</a>
                                      </p>
                                  </section>
                                  <h2>Respuesta demandado</h2>
                                  <section>
                                      <p>
                                          <ul>
                                          <li><a href="respuestademandado1.php">- Remisión a la justicia del tribunal y conformidad del demandado con los capitulos de nulidad invocados por la parte actora.</a></li>
                                          <li><a href="respuestademandado2.php">- Comparecencia del demandado y designación de procurador y abogado</a></li>
                                          <li><a href="respuestademandado3.php">- Escrito del demandado presentando, dentro del plazo concedido, oposición a la demanda y formulando a la vez acción reconvencional.</a></li>
                                          <li><a href="respuestademandado4.php">- Decreto sobre admisión o no de la acción reconvencional.</a></li>
                                          <li><a href="respuestademandado5.php">- Cuando el demandado se niega a recibir la citación, antes de procedes a declararle ausente en juicio al demandado, puede darse otro decreto de un tenor.</a></li>
                                          <li><a href="respuestademandado6.php">- En la citación al demandado, en segundo señalamiento, se puede hacer constar que, si no quisiera intervenir el juicio, puede remitirse a la justicia del tribunal.</a></li>
                                          <li><a href="respuestademandado7.php">- En el caso en que el demandado, en segundo señalamiento, no quiera recibir la citación, procederá la declaración de ausencia en el juicio del demandado.</a></li>
                                          <li><a href="respuestademandado8.php">- Cuando el que no comparece, para contestar a la demanda reconvencional o concordar el dubio, es el actor, se le ha de citar de nuevo; y, si ni la segunda vez comparece, se entenderá que renuncia a la instancia, a no ser que el demandado o el fiscal inste en posecución de la misma (art. 91).</a></li>
                                          <li><a href="respuestademandado9.php">- Decreto teniendo por renunciada la instancia por parte del actor.</a></li>
                                          <li><a href="respuestademandado10.php">- Decreto de contitución del tribunal.</a></li>
                                          <li><a href="respuestademandado11.php">- Fijación de la formula de dudas.</a></li>
                                          <li><a href="respuestademandado12.php">- Señalar declaraciones de los testigos de la parte actora.</a></li>
                                          <li><a href="respuestademandado13.php">- Cedula de citación para testigos.</a></li>
                                          </ul>
                                      </p>
                                  </section>
                          </div>
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
