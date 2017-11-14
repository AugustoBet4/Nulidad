<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Nulidad Matrimonial - Caso nuevo</title>
  <!-- Favicon----->
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

          </li>
          <li class="active">
            <a href="javascript:void(0);" class="menu-toggle">
              <!-- a href="../../pages/bla.php"-->
              <i class="material-icons">attach_file</i>
              <span>Dar seguimiento a caso</span>
            </a>
            <ul class="ml-menu">
              <li class="active">
                <a href="../../pages/forms/indagacion.php">Indagacion Previa</a>
              </li>
              <li>
                <a href="../../pages/forms/introduccion.php">Fase Introductoria</a>
              </li>
              <li>
                <a href="../../pages/forms/instruccion.php">Fase de Instrucción</a>
              </li>
              <li>
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
              <h2>NUEVO CASO - INDAGACIÓN PREVIA</h2>
              <h1>Sección 2</h1>
              <h2>Sus esfuerzo para localizar al cónyuge</h2>
            </div>
            <div class="body">
              <form id="wizard_with_validation" method="POST">
                <h3></h3>
                <fieldset>

                  <div class="form-group form-float">
                    <h5>Nombre completo de la parte Demandada:</h5>
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipsdpnombre" required>
                      <label class="form-label">Primer Nombre*</label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipsdsnombre">
                      <label class="form-label">Segundo Nombre</label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipsdapaterno" required>
                      <label class="form-label">Apellido paterno*</label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipsdamaterno" required>
                      <label class="form-label">Apellido materno*</label>
                    </div>
                  </div>
                  <br>

                  <div class="demo-radio-button">
                    <h5>¿Ha sido esta persona conocida con otro nombre (por ejemplo, apellido de soltera, un alias o apodo)?</h5>
                    <input name="ipsdrbapodo" type="radio" id="rbapodosi" required>
                    <label for="rbapodosi">Si</label>
                    <input name="ipsdrbapodo" type="radio" id="rbapodono" required>
                    <label for="rbapodono">No</label>
                  </div>
                  <br>

                  <div class="form-group form-float">
                      <div class="form-line">
                        <h5>Si es así, por favor escriba todos los alias o apellido de soltera/nombres anteriores:</h5>
                          <input type="text" class="form-control" name="ipsdalias">
                          <label class="form-label"></label>
                      </div>
                  </div>
                  <br>

                  <div class="demo-radio-button">
                    <h5>¿Cómo fue la última vez que habló con la parte Demandada?</h5>
                    <input name="ipsdrbdemandada" type="radio" id="rbpersonalmente" required>
                    <label for="rbpersonalmente">Personalmente</label>
                    <input name="ipsdrbdemandada" type="radio" id="rbtelefono" required>
                    <label for="rbtelefono">Por telefono</label>
                    <input name="ipsdrbdemandada" type="radio" id="rbcorreo" required>
                    <label for="rbcorreo">Por correo/e-mail</label>
                  </div>
                  <br>

                  <div class="form-group form-float">
                      <div class="form-line">
                        <h5>¿Cómo fue lla conversación la última vez que habló con la parte Demandada?</h5>
                          <input type="text" class="form-control" name="ipsdultimadmd">
                          <label class="form-label"></label>
                      </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <label class="form-label">Ultima dirección que conoció de la parte Demandada:</label>
                    <div class="row clearfix">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Calle:" name="ipsdcalle">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="number" class="form-control" value="" placeholder="Ciudad:" name="ipsdciudad">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Zona:" name="ipsdzona">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Departamento:" name="ipsddeparta">
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                      <div class="form-line">
                        <h5>¿Cuál fue la última vez que supo que la parte Demandada vivía en la dirección arriba señalada?</h5>
                          <input type="text" class="form-control" name="ipsddireccion">
                          <label class="form-label"></label>
                      </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                      <div class="form-line">
                          <h5>Último número de teléfono conocido:</h5>
                          <input type="text" class="form-control" name="ipsdultnumero">
                          <label class="form-label"></label>
                      </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                      <div class="form-line">
                          <h5>Correo electrónico:</h5>
                          <input type="text" class="form-control" name="ipsdultcorreo">
                          <label class="form-label"></label>
                      </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <label class="form-label">Último trabajo: compañía o empleador:</label>
                    <div class="row clearfix">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Calle:" name="ipsdcalleult">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="number" class="form-control" value="" placeholder="Ciudad:" name="ipsdciudadult">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Zona:" name="ipsdzonault">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Departamento:" name="ipsddepartault">
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                      <div class="form-line">
                          <h5>Si tuvieron hijos, explique por qué los hijos no pueden darle la información actual de la parte Demandada:</h5>
                          <input type="text" class="form-control" name="ipsdinfoact">
                          <label class="form-label"></label>
                      </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                      <div class="form-line">
                          <h5>Direcciones de parientes de la parte Demandada que le puedan hacer llegar la correspondencia:</h5>
                          <input type="text" class="form-control" name="ipsdcorrespondencia">
                          <label class="form-label"></label>
                      </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                      <div class="form-line">
                          <h5>Otros esfuerzos que ha efectuado y cuándo:</h5>
                          <input type="text" class="form-control" name="ipsdotro">
                          <label class="form-label"></label>
                      </div>
                  </div>
                  <br>



<!-- end -->        </fieldset>
<h3>Siguiente</h3>
<fieldset>
  <button type="button" onclick="window.location='../../pages/forms/indagacion1.php';">Siguiente</buton>
</fieldset>
                              </form>
                              </div>
                              </div>
                              </div>
                              </div>
                              <!-- #END# Advanced Form Example With Validation -->
                              </div>
                              </section>



<!-- -->
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

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../../plugins/autosize/autosize.js"></script>

    <!-- Custom JS -->
    <script src="../../js/pages/forms/basic-form-elements.js"></script>

    <!-- Moment plugin js -->
    <script src="../../plugins/momentjs/moment.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/form-wizard.js"></script>
    <script src="../../js/pages/forms/basic-form-elements.js"></script>
    <script src="../../js/pages/forms/advanced-form-elements.js"></script>

    <script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>
</html>
