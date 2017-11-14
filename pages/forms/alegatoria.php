<!DOCTYPE html>
<?php
  setlocale(LC_ALL,"es_ES");
  $fanombredemandante = "Demandante 1";
  $fafechainicio = "2017-09-19";
  $fanombredemandado = "Demandado 1";
  $fadirecciondemandado = "Direccion 2";
  $fadirecciondemandante = "Direccion 1";
  $fafecha = "2017-08-19";
  $faciudadydepartamento = "Nuestra Señora de La Paz, La Paz";
  $faarquidiocesis = "arqui";
  $fanombreparroquia = "Parroquia de la esquina";
  $faduracionconvivencia = "2 años";
  $faconcubinatoprevio = "Si";
  $faconcubinatioduracion = "Duracion convivencia :D";
  $faduracionnoviazgo = "Duracion noviazgo";
  $faembarazo = "Si";
  $fanumhijos = "20";
  $fadivorcio = "No";
  $fadivorciofecha = "2017-10-09";
  $fanomcanon1 = "Canon 1 :p";
  $fapartecanon1 = "Parte demandante :D";
  $fanomcanon2 = "Canon 2 :p";
  $fapartecanon2 = "Parte demandante :D";
  $fanomcanon3 = "Canon 3 :p";
  $fapartecanon3 = "Parte demandante :D";
  $fanomcanon4 = "Canon 4 :p";
  $fapartecanon4 = "Parte demandante :D";
  $fanomcanon5 = "Canon 5 :p";
  $fapartecanon5 = "Parte demandante :D";
  $fahechos;
  $faderechocanon1;
  $faderechocanon2;
  $faderechocanon3;
  $faderechocanon4;
  $faderechocanon5;
  $faobscanon1;
  $faobscanon2;
  $faobscanon3;
  $faobscanon4;
  $faobscanon5;
  $matrimonio = "LOPEZ-PEREZ";

  if(!empty($_FILES)){
    $targetDir = "../../Documentos/".$matrimonio."/";
    $fileName = $_FILES['file']['name'];
    $targetFile = $targetDir.$fileName;

    if (!file_exists($targetDir)) {
      mkdir($targetDir, 0777, true);
    }
    move_uploaded_file($_FILES['file']['tmp_name'],$targetFile);
    }
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Nulidad Matrimonial - Fase Alegatoria</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

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
    <link href="../../css/style.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/theme-blue.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="../../plugins/dropzone/dropzone.css" rel="stylesheet" />

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
                        <a href="../../index.php">
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
                                <a href="../../pages/forms/instruccion.php">Fase de Instrucción</a>
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
                        <a href="../forms/buscador.php">
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
                            <form id="form_validation" method="POST" action="alegatoria2.php">
                                <fieldset>
                                    <div class="col-sm-6">
                                      <h4>Demandante</h4>
                                      <div class=form-group>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fanombredemandante" value="<?php echo $fanombredemandante ?>" readonly>
                                            <label class="form-label">Nombre</label>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fafechainicio" value="<?php echo $fafechainicio ?>" readonly>
                                            <label class="form-label">Fecha de inicio del proceso de Nulidad</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <h4>Parte Demandada</h4>
                                      <div class=form-group>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fanombredemandado" value="<?php echo $fanombredemandado ?>" readonly>
                                            <label class="form-label">Nombre del Cónyuge</label>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fadirecciondemandado" value="<?php echo $fadirecciondemandado ?>" readonly>
                                            <label class="form-label">Direccion parte demandada</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-12">
                                      <div class="form-group">
                                        <div class="form-line">
                                          <input type="text" class="form-control" name="fadirecciondemandante" value="<?php echo $fadirecciondemandante ?>" readonly>
                                          <label class="form-label">Direccion parte demandante</label>
                                        </div>
                                      </div>
                                    </div>
                                    <h4>El matrimonio se celebró en la fecha y lugar siguiente:</h4><br>
                                    <div class="col-sm-4">
                                      <div class=form-group>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fafecha" value=<?php echo $fafecha ?> readonly>
                                            <label class="form-label">Fecha</label>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="faarquidiocesis" value="<?php echo $faarquidiocesis ?>" readonly>
                                            <label class="form-label">Arquidiócesis/Diócesis</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-8">
                                      <div class=form-group>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="faciudadydepartamento" value="<?php echo $faciudadydepartamento ?>" readonly>
                                            <label class="form-label">Ciudad y Departamento</label>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fanombreparroquia" value="<?php echo $fanombreparroquia ?>" readonly>
                                            <label class="form-label">Nombre de la Parroquia</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <div class="form-line">
                                              <input type="text" class="form-control" name="faduracionconvivencia" value="<?php echo $faduracionconvivencia ?>" readonly>
                                              <label class="form-label">Duracion de Convivencia Matrimonial</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="faconcubinatoprevio" value="<?php echo $faconcubinatoprevio ?>" readonly>
                                            <label class="form-label">Concubinato Previo</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="faconcubinatioduracion" value="<?php echo $faconcubinatioduracion ?>" readonly>
                                            <label class="form-label">Duración</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="faduracionnoviazgo" value="<?php echo $faduracionnoviazgo ?>" readonly>
                                            <label class="form-label">Duración del noviazgo</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="faembarazo" value="<?php echo $faembarazo ?>" readonly>
                                            <label class="form-label">Embarazo Previo</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fanumhijos" value="<?php echo $fanumhijos ?>" readonly>
                                            <label class="form-label">Nº Hijos</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fadivorcio" value="<?php echo $fadivorcio?>" readonly>
                                            <label class="form-label">Divorcio</label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-3">
                                      <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="fadivorciofecha" value="<?php echo $fadivorciofecha?>" readonly>
                                            <label class="form-label">Fecha del divorcio</label>
                                        </div>
                                      </div>
                                    </div>
                                    <h4>El Vicario Judicial emitió el decreto judicial determinando la formula de dudas</h4>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fanomcanon1" value="<?php echo $fanomcanon1?>" readonly>
                                            <label class="form-label">1. Canon</label>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fapartecanon1" value="<?php echo $fapartecanon1?>" readonly>
                                            <label class="form-label">De parte del:</label>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fanomcanon2" value="<?php echo $fanomcanon2?>" readonly>
                                            <label class="form-label">2. Canon</label>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fapartecanon2" value="<?php echo $fapartecanon2?>" readonly>
                                            <label class="form-label">De parte del:</label>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fanomcanon3" value="<?php echo $fanomcanon3?>" readonly>
                                            <label class="form-label">3. Canon</label>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fapartecanon3" value="<?php echo $fapartecanon3?>" disbled>
                                            <label class="form-label">De parte del:</label>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fanomcanon4" value="<?php echo $fanomcanon4?>" readonly>
                                            <label class="form-label">4. Canon</label>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fapartecanon4" value="<?php echo $fapartecanon4?>" readonly>
                                            <label class="form-label">De parte del:</label>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-8">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fanomcanon5"  value="<?php echo $fanomcanon5?>" readonly>
                                            <label class="form-label">5. Canon</label>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <input type="text" class="form-control" name="fapartecanon5" value="<?php echo $fapartecanon5?>" readonly>
                                            <label class="form-label">De parte del:</label>
                                          </div>
                                      </div>
                                    </div>
                                    <h4>Los Hechos:</h4>
                                    <div class="col-sm-12">
                                      <div class="form-group">
                                          <div class="form-line">
                                            <textarea rows="1" class="form-control no-resize auto-growth" name="fahechos" placeholder="" style="overflow: hidden; word-wrap: break-word; height: 46px;" required></textarea>
                                          </div>
                                      </div>
                                    </div>
                                    <h4>El derecho:</h4>
                                    <div class="col-sm-12">
                                      <div class="form-group">
                                        <div class="form-line">
                                          <textarea rows="1" class="form-control no-resize auto-growth" name="faderechocanon1" placeholder="1. Canon" style="overflow: hidden; word-wrap: break-word; height: 46px;" required></textarea>
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
                                          <textarea rows="1" class="form-control no-resize auto-growth" name="faobscanon1" placeholder="1. Canon" style="overflow: hidden; word-wrap: break-word; height: 46px;" required></textarea>
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
                                      <button type="submit" class="btn btn bg-blue btn-block btn-lg waves-effect">Enviar</button>
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
                        <form action="alegatoria.php" id="frmFileUpload" enctype="multipart/form-data" class="dropzone dz-clickable" method="post" enctype="multipart/form-data">
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
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script src="../../plugins/nouislider/nouislider.js"></script>

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
