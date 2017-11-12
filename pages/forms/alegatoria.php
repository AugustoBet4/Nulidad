<!DOCTYPE html>
<?php
setlocale(LC_ALL,”es_ES”);
 ?>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Nulidad Matrimonial - Fase Alegatoria</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="../../plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="../../plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/theme-blue.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="../../plugins/dropzone/dropzone.css" rel="stylesheet">

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
    <!-- Search Bar -->

    <!-- #END# Search Bar -->
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
                        <a href="../../index.html">
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
                            <li>
                                <a href="../../pages/forms/indagacion.php">Indagacion Previa</a>
                            </li>
                            <li>
                                <a href="../../pages/forms/introduccion.php">Fase Introductoria</a>
                            </li>
                            <li>
                                <a href="../../pages/insctruccion.php">Fase de Instrucción</a>
                            </li>
                            <li class="active">
                                <a href="../../pages/forms/alegatoria.php">Fase Alegatoria</a>
                            </li>
                            <li>
                                <a href="../forms/sentencia.php">Fase Decisoria</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../forms/buscador.html">
                            <i class="material-icons">search</i>
                            <span>Buscar caso</span>
                        </a>
                    </li>
                    <li>
                        <a href="../../pages/forms/nuevo_encargado.php">
                            <i class="material-icons">account_box</i>
                            <span>Agregar nuevo encargado</span>
                        </a>
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>FASE ALEGATORIA</h2>
                        </div>
                        <div class="body">
                          <h3>Resumen de Hechos</h3>
                            <form id="form_validation" method="POST">
                                <fieldset>
                                    <div class="col-sm-6">
                                      <h4>Demandante</h4>
                                      <div class=form-group>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fanombredemandante" value="<?php echo @fanombredemandante?>" disabled>
                                            <label class="form-label">Nombre</label>
                                        </div>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fafechainicio" disabled>
                                            <label class="form-label">Fecha de inicio del proceso de Nulidad</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <h4>Parte Demandada</h4>
                                      <div class=form-group>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fanombredemandado" disabled>
                                            <label class="form-label">Nombre del Cónyuge</label>
                                        </div>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fadireccion" disabled>
                                            <label class="form-label">Direccion</label>
                                        </div>
                                      </div>
                                    </div>
                                    <h4>El matrimonio se celebró en la fecha y lugar siguiente:</h4>
                                    <div class="col-sm-4">
                                      <div class=form-group>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fafecha" disabled>
                                            <label class="form-label">Fecha</label>
                                        </div>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="faarquidiocesis" disabled>
                                            <label class="form-label">Arquidiócesis/Diócesis</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-8">
                                      <div class=form-group>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="faciudadydepartamento" disabled>
                                            <label class="form-label">Ciudad y Departamento</label>
                                        </div>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fanombreparroquia" disabled>
                                            <label class="form-label">Nombre de la Parroquia</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="faduracionconvivencia" placeholder="Duración convivencia matrimonial">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="faconcubinatoprevio" placeholder="Concubinato Previo">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="faconcubinatioduracion" placeholder="Duración">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="faduracionnoviazgo" placeholder="Duración del noviazgo">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="faembarazo" placeholder="Embarazo Previo">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fanumhijos" placeholder="Nº Hijos">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fadivorcio" placeholder="Divorcio">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fadivorciofecha" placeholder="Fecha">
                                        </div>
                                      </div>
                                    </div>
                                    <h4>El Vicario Judicial emitió el decreto judicial determinando la formula de dudas</h4>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fanomcanon1" placeholder="1. Canon">
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fapartecanon1" placeholder="De parte del:">
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fanomcanon2" placeholder="2. Canon">
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fapartecanon2" placeholder="De parte del:">
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fanomcanon3" placeholder="3. Canon">
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fapartecanon3" placeholder="De parte del:">
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fanomcanon4" placeholder="4. Canon">
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fapartecanon4" placeholder="De parte del:">
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fanomcanon5" placeholder="5. Canon">
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fapartecanon5" placeholder="De parte del:">
                                          </div>
                                      </div>
                                    </div>
                                    <h4>Los Hechos:</h4>
                                    <div class="col-sm-12">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <textarea rows="1" class="form-control no-resize auto-growth" name="fahechos" placeholder="" style="overflow: hidden; word-wrap: break-word; height: 46px;"></textarea>
                                          </div>
                                      </div>
                                    </div>
                                    <h4>El derecho:</h4>
                                    <div class="col-sm-12">
                                      <div class="form-group">
                                        <div class="form-line">
                                          <textarea rows="1" class="form-control no-resize auto-growth" name="faderechocanon1" placeholder="1. Canon" style="overflow: hidden; word-wrap: break-word; height: 46px;"></textarea>
                                        </div>
                                        <div class="form-line">
                                          <textarea rows="1" class="form-control no-resize auto-growth" name="faderechocanon2" placeholder="2. Canon" style="overflow: hidden; word-wrap: break-word; height: 46px;"></textarea>
                                        </div>
                                        <div class="form-line">
                                          <textarea rows="1" class="form-control no-resize auto-growth" name="faderechocanon3" placeholder="3. Canon" style="overflow: hidden; word-wrap: break-word; height: 46px;"></textarea>
                                        </div>
                                        <div class="form-line">
                                          <textarea rows="1" class="form-control no-resize auto-growth" name="faderechocanon4" placeholder="4. Canon" style="overflow: hidden; word-wrap: break-word; height: 46px;"></textarea>
                                        </div>
                                        <div class="form-line">
                                          <textarea rows="1" class="form-control no-resize auto-growth" name="faderechocanon5" placeholder="5. Canon" style="overflow: hidden; word-wrap: break-word; height: 46px;"></textarea>
                                        </div>
                                      </div>
                                    </div>
                                    <h4>Las Observaciones:</h4>
                                    <div class="col-sm-12">
                                      <div class="form-group">
                                        <div class="form-line">
                                          <textarea rows="1" class="form-control no-resize auto-growth" name="faobscanon1" placeholder="1. Canon" style="overflow: hidden; word-wrap: break-word; height: 46px;"></textarea>
                                        </div>
                                        <div class="form-line">
                                          <textarea rows="1" class="form-control no-resize auto-growth" name="faobscanon2" placeholder="2. Canon" style="overflow: hidden; word-wrap: break-word; height: 46px;"></textarea>
                                        </div>
                                        <div class="form-line">
                                          <textarea rows="1" class="form-control no-resize auto-growth" name="faobscanon3" placeholder="3. Canon" style="overflow: hidden; word-wrap: break-word; height: 46px;"></textarea>
                                        </div>
                                        <div class="form-line">
                                          <textarea rows="1" class="form-control no-resize auto-growth" name="faobscanon4" placeholder="4. Canon" style="overflow: hidden; word-wrap: break-word; height: 46px;"></textarea>
                                        </div>
                                        <div class="form-line">
                                          <textarea rows="1" class="form-control no-resize auto-growth" name="faobscanon5" placeholder="5. Canon" style="overflow: hidden; word-wrap: break-word; height: 46px;"></textarea>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <button type="button" class="btn btn bg-blue btn-block btn-lg waves-effect">Enviar</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                      <div class="header">
                        <h3>Ingreso de documentación</h3>
                      </div>
                      <div class="body">
                        <form action="/" id="frmFileUpload" class="dropzone dz-clickable" method="post" enctype="multipart/form-data">
                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    <h3>Suelta archivos aqui o haz click para subirlos.</h3>
                                </div>

                            </form>
                      </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Autosize Js -->
    <script src="../../plugins/autosize/autosize.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <script src="../../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="../../plugins/dropzone/dropzone.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../../plugins/momentjs/moment.js"></script>

    <script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/form-wizard.js"></script>
    <script src="../../js/pages/forms/basic-form-elements.js"></script>
    <script src="../../js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>
</html>
