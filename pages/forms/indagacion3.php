<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Sentencia - Nulidad Matrimonial</title>
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
      <p>Porfavor espera...</p>
    </div>
  </div>
  <!-- #END# Page Loader -->
  <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- #END# Overlay For Sidebars -->
  <!-- Search Bar -->
  <!-- <div class="search-bar">
    <div class="search-icon">
      <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="Buscar caso...">
    <div class="close-search">
      <i class="material-icons">close</i>
    </div>
  </div> -->
  <!-- #END# Search Bar -->
  <!-- Top Bar -->
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
        <a href="javascript:void(0);" class="bars"></a>
        <a class="navbar-brand" href="../../index.php">SEMINARIO</a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <!-- Call Search -->
          <!-- <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li> -->
          <!-- #END# Call Search -->
        </ul>
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
              <li><a href="javascript:void(0);"><i class="material-icons">input</i><a href="../../pages/forms/ingreso.php">Cerrar Sesion</a></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- #User Info -->
      <!-- Menu -->
      <div class="menu">
        <ul class="list">
          <li>
            <a href="pages/forms/indagacion.php">
                            <i class="material-icons">library_add</i>
                            <span>Nuevo caso</span>
                        </a>
          </li>
          <li class="active">
            <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">attach_file</i>
                            <span>Dar Seguimiento a caso</span>
                        </a>
            <ul class="ml-menu">
              <li>
                <a href="../../pages/forms/indagacion.php">Indagacion Previa</a>
              </li>
              <li>
                <a href="../../pages/forms/introduccion.php">Fase Introductoria</a>
              </li>
              <li>
                <a href="pages/forms/instruccion.php">Fase de Instrucción</a>
              </li>
              <li>
                <a href="pages/forms/alegatoria.php">Fase Alegatoria</a>
              </li>
              <li class="active">
                <a href="../forms/sentencia.php">Fase Decisoria</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="../../pages/forms/buscador.php">
                            <i class="material-icons">search</i>
                            <span>Buscar Caso</span>
                        </a>
          </li>
          <li>
            <a href="../../pages/forms/nuevo_encargado.php">
                            <i class="material-icons">account_box</i>
                            <span>Agregar nuevo encargado</span>
                        </a>
          </li>
        </ul>
      </div>
      <!-- #Menu -->
    </aside>
    <!-- #END# Left Sidebar -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row clearfix">
        <div class="col-lg-48 col-md-48 col-sm-48 col-xs-48">
          <div class="card">
            <div class="header">

              <h2>NUEVO CASO - INDAGACIÓN PREVIA</h2>
              <h1>Sección 4</h1>
              <h2>Testigos</h2>
            </div>

            <div class="body">
              <form id="wizard_with_validation" method="POST">
                <h3>Testigo 1</h3>
                <fieldset>

                  <div class="form-group form-float">
                    <h5>Nombre completo del testigo:</h5>
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstpnombre" required>
                      <label class="form-label">Primer Nombre*</label>
                    </div>
                  </div>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstsnombre">
                      <label class="form-label">Segundo Nombre</label>
                    </div>
                  </div>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstapaterno" required>
                      <label class="form-label">Apellido paterno*</label>
                    </div>
                  </div>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstamaterno" required>
                      <label class="form-label">Apellido materno*</label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <label class="form-label">Ultima dirección que conoció de la parte Demandada:</label>
                    <div class="row clearfix">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Direccion:" name="ipstdireccion">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="number" class="form-control" value="" placeholder="Ciudad:" name="ipstciudad">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Zona:" name="ipstzona">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="C.I.:" name="ipstci">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Sexo:" name="ipstsexo">
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Desde cuándo esta persona le conoce?</h5>
                      <input type="text" class="form-control" name="ipstpersona">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Qué relación tiene con usted?</h5>
                      <input type="text" class="form-control" name="ipstrelacion">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Qué relación tiene con la parte Demandada?</h5>
                      <input type="text" class="form-control" name="ipstrelaciondmd">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="demo-radio-button">
                    <h5>¿Conoció esta persona a ustedes antes de su matrimonio?</h5>
                    <input name="ipstrbmatrimonio" type="radio" id="rbmatrimoniosi">
                    <label for="rbmatrimoniosi">Si</label>
                    <input name="ipstrbmatrimonio" type="radio" id="rbmatrimoniono">
                    <label for="rbmatrimoniono">No</label>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>En términos generales, ¿qué estaría esta persona dispuesta a declarar al Tribunal?</h5>
                      <input type="text" class="form-control" name="ipsttribunal">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Está de acuerdo esta persona en ser testigo?</h5>
                      <input type="text" class="form-control" name="ipsttestigo">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                </fieldset>
                 <h3>Testigo 2</h3>
                <fieldset>

                  <div class="form-group form-float">
                    <h5>Nombre completo del testigo:</h5>
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstpnombre2" required>
                      <label class="form-label">Primer Nombre*</label>
                    </div>
                  </div>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstsnombre2">
                      <label class="form-label">Segundo Nombre</label>
                    </div>
                  </div>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstapaterno2" required>
                      <label class="form-label">Apellido paterno*</label>
                    </div>
                  </div>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstamaterno2" required>
                      <label class="form-label">Apellido materno*</label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <label class="form-label">Ultima dirección que conoció de la parte Demandada:</label>
                    <div class="row clearfix">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Direccion:" name="ipstdireccion2">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="number" class="form-control" value="" placeholder="Ciudad:" name="ipstciudad2">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Zona:" name="ipstzona2">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="C.I.:" name="ipstci2">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Sexo:" name="ipstsexo2">
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Desde cuándo esta persona le conoce?</h5>
                      <input type="text" class="form-control" name="ipstpersona2">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Qué relación tiene con usted?</h5>
                      <input type="text" class="form-control" name="ipstrelacion2">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Qué relación tiene con la parte Demandada?</h5>
                      <input type="text" class="form-control" name="ipstrelaciondmd2">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="demo-radio-button">
                    <h5>¿Conoció esta persona a ustedes antes de su matrimonio?</h5>
                    <input name="ipstrbmatrimonio2" type="radio" id="rbmatrimoniosi2">
                    <label for="rbmatrimoniosi2">Si</label>
                    <input name="ipstrbmatrimonio2" type="radio" id="rbmatrimoniono2">
                    <label for="rbmatrimoniono2">No</label>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>En términos generales, ¿qué estaría esta persona dispuesta a declarar al Tribunal?</h5>
                      <input type="text" class="form-control" name="ipsttribunal2">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Está de acuerdo esta persona en ser testigo?</h5>
                      <input type="text" class="form-control" name="ipsttestigo2">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                </fieldset>
                <h3>Testigo 3</h3>
                <fieldset>

                  <div class="form-group form-float">
                    <h5>Nombre completo del testigo:</h5>
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstpnombre3" required>
                      <label class="form-label">Primer Nombre*</label>
                    </div>
                  </div>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstsnombre3">
                      <label class="form-label">Segundo Nombre</label>
                    </div>
                  </div>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstapaterno3" required>
                      <label class="form-label">Apellido paterno*</label>
                    </div>
                  </div>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstamaterno3" required>
                      <label class="form-label">Apellido materno*</label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <label class="form-label">Ultima dirección que conoció de la parte Demandada:</label>
                    <div class="row clearfix">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Direccion:" name="ipstdireccion3">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="number" class="form-control" value="" placeholder="Ciudad:" name="ipstciudad3">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Zona:" name="ipstzona3">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="C.I.:" name="ipstci3">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Sexo:" name="ipstsexo3">
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Desde cuándo esta persona le conoce?</h5>
                      <input type="text" class="form-control" name="ipstpersona3">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Qué relación tiene con usted?</h5>
                      <input type="text" class="form-control" name="ipstrelacion3">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Qué relación tiene con la parte Demandada?</h5>
                      <input type="text" class="form-control" name="ipstrelaciondmd3">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="demo-radio-button">
                    <h5>¿Conoció esta persona a ustedes antes de su matrimonio?</h5>
                    <input name="ipstrbmatrimonio3" type="radio" id="rbmatrimoniosi3">
                    <label for="rbmatrimoniosi3">Si</label>
                    <input name="ipstrbmatrimonio3" type="radio" id="rbmatrimoniono3">
                    <label for="rbmatrimoniono3">No</label>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>En términos generales, ¿qué estaría esta persona dispuesta a declarar al Tribunal?</h5>
                      <input type="text" class="form-control" name="ipsttribunal3">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Está de acuerdo esta persona en ser testigo?</h5>
                      <input type="text" class="form-control" name="ipsttestigo3">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                </fieldset>
                <h3>Testigo 4</h3>
                <fieldset>

                  <div class="form-group form-float">
                    <h5>Nombre completo del testigo:</h5>
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstpnombre4" required>
                      <label class="form-label">Primer Nombre*</label>
                    </div>
                  </div>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstsnombre4">
                      <label class="form-label">Segundo Nombre</label>
                    </div>
                  </div>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstapaterno4" required>
                      <label class="form-label">Apellido paterno*</label>
                    </div>
                  </div>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstamaterno4" required>
                      <label class="form-label">Apellido materno*</label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <label class="form-label">Ultima dirección que conoció de la parte Demandada:</label>
                    <div class="row clearfix">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Direccion:" name="ipstdireccion4">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="number" class="form-control" value="" placeholder="Ciudad:" name="ipstciudad4">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Zona:" name="ipstzona4">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="C.I.:" name="ipstci4">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Sexo:" name="ipstsexo4">
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Desde cuándo esta persona le conoce?</h5>
                      <input type="text" class="form-control" name="ipstpersona4">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Qué relación tiene con usted?</h5>
                      <input type="text" class="form-control" name="ipstrelacion4">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Qué relación tiene con la parte Demandada?</h5>
                      <input type="text" class="form-control" name="ipstrelaciondmd4">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="demo-radio-button">
                    <h5>¿Conoció esta persona a ustedes antes de su matrimonio?</h5>
                    <input name="ipstrbmatrimonio4" type="radio" id="rbmatrimoniosi4">
                    <label for="rbmatrimoniosi4">Si</label>
                    <input name="ipstrbmatrimonio4" type="radio" id="rbmatrimoniono4">
                    <label for="rbmatrimoniono4">No</label>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>En términos generales, ¿qué estaría esta persona dispuesta a declarar al Tribunal?</h5>
                      <input type="text" class="form-control" name="ipsttribunal4">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Está de acuerdo esta persona en ser testigo?</h5>
                      <input type="text" class="form-control" name="ipsttestigo4">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                </fieldset>
                <h3>Testigo 5</h3>
                <fieldset>

                  <div class="form-group form-float">
                    <h5>Nombre completo del testigo:</h5>
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstpnombre5" required>
                      <label class="form-label">Primer Nombre*</label>
                    </div>
                  </div>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstsnombre5">
                      <label class="form-label">Segundo Nombre</label>
                    </div>
                  </div>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstapaterno5" required>
                      <label class="form-label">Apellido paterno*</label>
                    </div>
                  </div>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <input type="text" class="form-control" name="ipstamaterno5" required>
                      <label class="form-label">Apellido materno*</label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <label class="form-label">Ultima dirección que conoció de la parte Demandada:</label>
                    <div class="row clearfix">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Direccion:" name="ipstdireccion5">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="number" class="form-control" value="" placeholder="Ciudad:" name="ipstciudad5">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Zona:" name="ipstzona5">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="C.I.:" name="ipstci5">
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <div class="form-line focused">
                            <input type="text" class="form-control" value="" placeholder="Sexo:" name="ipstsexo5">
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Desde cuándo esta persona le conoce?</h5>
                      <input type="text" class="form-control" name="ipstpersona5">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Qué relación tiene con usted?</h5>
                      <input type="text" class="form-control" name="ipstrelacion">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Qué relación tiene con la parte Demandada?</h5>
                      <input type="text" class="form-control" name="ipstrelaciondmd5">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="demo-radio-button">
                    <h5>¿Conoció esta persona a ustedes antes de su matrimonio?</h5>
                    <input name="ipstrbmatrimonio5" type="radio" id="rbmatrimoniosi5">
                    <label for="rbmatrimoniosi5">Si</label>
                    <input name="ipstrbmatrimonio5" type="radio" id="rbmatrimoniono5">
                    <label for="rbmatrimoniono5">No</label>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>En términos generales, ¿qué estaría esta persona dispuesta a declarar al Tribunal?</h5>
                      <input type="text" class="form-control" name="ipsttribunal5">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>¿Está de acuerdo esta persona en ser testigo?</h5>
                      <input type="text" class="form-control" name="ipsttestigo5">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>


                </fieldset>
                <h3>Peritos</h3>
                <fieldset>
                  <div class="demo-radio-button">
                    <h5>¿Consultó a un Sacerdote, Psicólogo(a), Psiquiatra, Trabajador(a) Social?</h5>
                    <input name="ipstrperitos" type="radio" id="rbprno">
                    <label for="rbprno">No</label>
                    <input name="ipstrperitos" type="radio" id="rbprsi1">
                    <label for="rbprno">Sí, lo hice sin la parte Demandada</label>
                    <input name="ipstrperitos" type="radio" id="rbprsi2">
                    <label for="rbprsi2">Sí, lo hicimos juntos</label>
                    <input name="ipstrperitos" type="radio" id="rbprsi3">
                    <label for="rbprsi3">Sí, la parte Demandada lo hizo sin mí.</label>
                  </div>
                  <br>

                  <div class="demo-radio-button">
                    <h5>¿Consultaron a un doctor en medicina o a un especialista en la salud (sobre asuntos relacionados a este matrimonio) en los últimos 5 años?</h5>
                    <input name="ipstrperitosuno" type="radio" id="rbprunono">
                    <label for="rbprunono">No</label>
                    <input name="ipstrperitosuno" type="radio" id="rbprunosi1">
                    <label for="rbprunosi1">Sí, lo hice sin la parte Demandada</label>
                    <input name="ipstrperitosuno" type="radio" id="rbprunosi2">
                    <label for="rbprunosi2">Sí, lo hicimos juntos</label>
                    <input name="ipstrperitosuno" type="radio" id="rbprunosi3">
                    <label for="rbprunosi3">Sí, la parte Demandada lo hizo sin mí.</label>
                  </div>
                  <br>

                  <div class="form-group form-float">
                    <div class="form-line">
                      <h5>Si su respuesta a cualquiera de las preguntas anteriores es afirmativa, ¿firmaría usted una certificación de
  confidencialidad liberando de cargos a esta persona y permitiendo que brinde testimonio relevante a su caso (si es que el
  Tribunal lo considera necesario y de ayuda al caso)?</h5>
                      <input type="text" class="form-control" name="ipsttestigo5">
                      <label class="form-label"></label>
                    </div>
                  </div>
                  <br>

                </fieldset>
                <h3>Consultor Pastoral</h3>
                <fieldset>
                  <textarea id="tinymce">
                                    <br>
                                    <ul>
                                    <li>Me reuní con la parte Demandante y rellené la Demanda.
                                    </li><br><br>
                                    <li>Una declaración de nulidad no puede ser emitida a menos que yo presente suficiente evidencia para destruir la presunción de validez de mi matrimonio.
                                    </li><br><br>
                                  </ul>
                                  <br><br>
                                  <table width=100%>
                                    <tr>
                                      <th>Firma: ________________________________</th>
                                      <th>Fecha: ________________________________</th>
                                    </tr>
                                  </table>
                                  <br><br><br><br>
                                  </textarea>


                </fieldset>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ckeditor -->
  <script src="../../plugins/ckeditor/ckeditor.js"></script>

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
  <script src="../../js/admin.js"></script>
  <script src="../../js/pages/forms/editors.js"></script>

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

  <!-- TinyMCE -->
  <script src="../../plugins/tinymce/tinymce.js"></script>
    <script src="../../js/pages/forms/editors.js"></script>
</body>

</html>
