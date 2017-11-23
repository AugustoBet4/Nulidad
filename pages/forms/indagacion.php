<!DOCTYPE html>
<?php
  setlocale(LC_ALL,"es_ES");
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
<!--Comentarios-->
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

    <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />

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
                          <h2>INDAGACIÓN PREVIA</h2>
                          <h1>Sección 1</h1>
                          <h2>Para Demandante</h2>
                      </div>
                      <div class="body">
                          <form id="wizard_with_validation" method="POST">
                              <h3> &ensp; </h3>
                              <fieldset>
                                <h3>Información Básica</h3>
                                <h3>A)DEMANDANTE</h3>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipibprimernomrbredemandante" required>
                                          <label class="form-label">Primer Nombre*</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipibsegundonomrbredemandante">
                                          <label class="form-label">Segundo Nombre</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipibapellidopaternodemandante" required>
                                          <label class="form-label">Apellido paterno*</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipibapellidomaternodemandante" required>
                                          <label class="form-label">Apellido materno*</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="number" class="form-control" name="ipibdemandanteci" required>
                                          <label class="form-label">Cédula de Identidad*</label>
                                      </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>Sexo</h1>
                                    <input name="ipibrbsexo" type="radio" id="rbsexomasculino" required>
                                    <label for="rbsexomasculino">Masculino</label>
                                    <input name="ipibrbsexo" type="radio" id="rbsexofemenino" required>
                                    <label for="rbsexofemenino">Femenino</label>
                                  </div>
                                  <div class="form-group form-float">
                                          <label class="form-label">Dirección:</label>
                                          <div class="row clearfix">
                                              <div class="col-sm-6">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Calle:" name="ipibdemandantediraccioncalle">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="number" class="form-control" value="" placeholder="Número:" name="ipibdemandantedireccionnumero">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Zona:" name="ipibdemandantedireccionzona">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Ciudad:" name="ipibdemandantedireccionciudad">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="number" class="form-control" name="ipibdemandanteedad" required>
                                          <label class="form-label">Edad*</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipibdemandantecorreo">
                                          <label class="form-label">Correo Electrónico</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipibdemandanteocupacion">
                                          <label class="form-label">Ocupación</label>
                                      </div>
                                  </div>
                                  <h5>Favor indique como podemos comunicarnos con Ud. acerca de su proceso:</h5>
                                  <div class="form-group form-float">
                                          <label class="form-label"></label>
                                          <div class="row clearfix">
                                              <div class="col-sm-3">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="number" class="form-control" value="" placeholder="Teléfono de casa:" name="ipibdemandantetelefonocasa">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-3">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="number" class="form-control" value="" placeholder="Teléfono de celular:" name="ipibdemandantetelefonocelular">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-3">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="number" class="form-control" value="" placeholder="Teléfono de trabajo:" name="ipibdemandantetelefonotrabajo">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipibparroquiamatrimonio" required>
                                          <label class="form-label">¿Parroquia donde se celebró el matrimonio?*</label>
                                      </div>
                                  </div>
                                  <div class="input-group">
                                    <h5>¿Fecha de celebración de su matrimonio?</h5>
                                    <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="material-icons">date_range</i>
                                      </span>
                                      <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="30/07/2016" name="ipibfechamatrimonio" required>
                                    </div>
                                    </div>
                                  </div>
                                  <h5>Usted nos autoriza a dejar un mensaje acerca de su caso en:</h5></li>
                                  <div class="demo-checkbox">
                                    <input type="checkbox" id="ipibckmensajeemail" class="chk-col-light-blue">
                                    <label for="ipibckmensajeemail">Email</label>
                                    <input type="checkbox" id="ipibckmensajecasa" class="chk-col-light-blue">
                                    <label for="ipibckmensajecasa">Casa</label>
                                    <input type="checkbox" id="ipibckmensajecelular" class="chk-col-light-blue">
                                    <label for="ipibckmensajecelular">Celular</label>
                                    <input type="checkbox" id="ipibckmensajetrabajo" class="chk-col-light-blue">
                                    <label for="ipibckmensajetrabajo">Trabajo</label>
                                  </div>
                                  <h3>B)DEMANDADO</h3>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipibprimernomrbredemandado" required>
                                          <label class="form-label">Primer Nombre*</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipibsegundonomrbredemandado">
                                          <label class="form-label">Segundo Nombre</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipibapellidopaternodemandado" required>
                                          <label class="form-label">Apellido paterno*</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipapellidomaternodemandado" required>
                                          <label class="form-label">Apellido materno*</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="number" class="form-control" name="ipibdemandadoci" required>
                                          <label class="form-label">Cédula de Identidad*</label>
                                      </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>Sexo</h1>
                                    <input name="ipibrbsexo1" type="radio" id="rbsexomasculino1"  value="Masculino" required>
                                    <label for="rbsexomasculino1">Masculino</label>
                                    <input name="ipibrbsexo1" type="radio" id="rbsexofemenino1"  value="Femenino" required>
                                    <label for="rbsexofemenino1">Femenino</label>
                                  </div>
                                  <div class="form-group form-float">
                                          <label class="form-label">Dirección:</label>
                                          <div class="row clearfix">
                                              <div class="col-sm-6">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Calle:" name="ipibdemandadodiraccioncalle">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="number" class="form-control" value="" placeholder="Número:" name="ipibdemandadodireccionnumero">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Zona:" name="ipibdemandadodireccionzona">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Ciudad:" name="ipibdemandadodireccionciudad">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="number" class="form-control" name="ipibdemandadoedad" required>
                                          <label class="form-label">Edad*</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="number" class="form-control" name="ipibdemandadotelefono" required>
                                          <label class="form-label">Teléfono*</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipibdemandadopais" required>
                                          <label class="form-label">País*</label>
                                      </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Se comunica regularmente con la parte Demandada?</h1>
                                    <input name="ipibrbcomunicacion" type="radio" id="rbcomunicacionsi"  value="Si" required>
                                    <label for="rbcomunicacionsi">Si</label>
                                    <input name="ipibrbcomunicacion" type="radio" id="rbcomunicacionno"  value="No" required>
                                    <label for="rbcomunicacionno">No</label>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipibdemandadocorreo">
                                          <label class="form-label">Correo Electrónico</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipibdemandanteocupacion">
                                          <label class="form-label">Ocupación</label>
                                      </div>
                                  </div>
                              </fieldset>
                              <h3>&ensp;</h3>
                              <fieldset>
                                <h3>Información Biográfica</h3>
                                <h3>A) DEMANDANTE</h3>
                                <div class="input-group">
                                  <h5>Fecha de nacimiento</h5>
                                  <div class="input-group">
                                  <span class="input-group-addon">
                                      <i class="material-icons">date_range</i>
                                  </span>
                                  <div class="form-line">
                                      <input type="text" class="form-control date" placeholder="30/07/2016" name="ipbfdemandantefechanacimiento" required>
                                  </div>
                                  </div>
                                </div>
                                  <div class="form-group form-float">
                                          <label class="form-label">Lugar de nacimiento:</label>
                                          <div class="row clearfix">
                                              <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Ciudad:" name="ipbfdemandanteciudadnacimiento" required>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Departamento:" name="ipbfdemandantedepartamentonacimiento" required>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Estado:" name="ipbfdemandanteestadonacimiento"required>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Recibió el bautismo antes de que su matrimonio se efectuara?</h1>
                                    <input name="ipbfrbbautismo" type="radio" id="rbbautismosi"  value="Si" required>
                                    <label for="rbbautismosi">Si</label>
                                    <input name="ipbfrbbautismo" type="radio" id="rbbautismono"  value="No" required>
                                    <label for="rbbautismono">No</label>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>Si es así ¿En que religión o denominación fue bautizado?<br>Católica:</br></h1>
                                    <input name="ipbfrbbautizado" type="radio" id="rbbautizadosi"  value="Si" required>
                                    <label for="rbbautizadosi">Si</label>
                                    <input name="ipbfrbbautizado" type="radio" id="rbbautizadono"  value="No" required>
                                    <label for="rbbautizadono">No</label>
                                    <div class="form-line focused">
                                      <h5>Si la repuesta es no diga de que iglesia:</h5>
                                        <input type="text" class="form-control" value="" placeholder="Otro:" name="ipbfdemandantebautizoiglesia">
                                    </div>
                                  </div>
                                  <div class="input-group">
                                    <h5>Fecha del bautismo:</h5>
                                    <div class="input-group">
                                      <span class="input-group-addon">
                                          <i class="material-icons">date_range</i>
                                      </span>
                                      <div class="form-line">
                                          <input type="text" class="form-control date" placeholder="30/07/2016" name="ipbfdemandantefechabautismo">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipbfdemandantediocesisbautismo" required>
                                          <label class="form-label">Diocesis:</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                          <label class="form-label"></label>
                                          <div class="row clearfix">
                                              <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Libro:" name="ipbfdemandantelibrobautismo">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Página:" name="ipbfdemandantepaginabautismo">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Número:" name="ipbfdemandantenumerobautismo">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>¿Es usted católico practicante?</h5>
                                          <input type="text" class="form-control" name="ipbfdemandantecatolico">
                                          <label class="form-label"></label>
                                      </div>
                                      <div class="demo-radio-button">
                                        <h5>¿Pertenece o frecuenta algún grupo o movimiento eclesiástico?</br></h1>
                                        <input name="ipbfrbgrupoeclesiastico" type="radio" id="rbgrupoeclesiasticosi"  value="Si" required>
                                        <label for="rbgrupoeclesiasticosi">Si</label>
                                        <input name="ipbfrbgrupoeclesiastico" type="radio" id="rbgrupoeclesiasticono"  value="No" required>
                                        <label for="rbgrupoeclesiasticono">No</label>
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" value="" placeholder="Si es así especifique:" name="ipbfgrupoespecificacion">
                                        </div>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipbfdemandanteparroquia">
                                          <label class="form-label">Parroquia:</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipbfdemandantediocesis">
                                          <label class="form-label">Diócesis:</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipbfdemandanteestado">
                                          <label class="form-label">Estado:</label>
                                        </div>
                                      <h3>B) DEMANDADO</h3>
                                      <div class="input-group">
                                        <h5>Fecha de nacimiento</h5>
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="30/07/2016" name="ipbfdemandadofechanacimiento" required>
                                        </div>
                                        </div>
                                      </div>
                                        <div class="form-group form-float">
                                                <label class="form-label">Lugar de nacimiento:</label>
                                                <div class="row clearfix">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                          <div class="form-line focused">
                                                            <input type="text" class="form-control" value="" placeholder="Ciudad:" name="ipbfdemandadociudadnacimiento" required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <div class="form-group">
                                                          <div class="form-line focused">
                                                            <input type="text" class="form-control" value="" placeholder="Departamento:" name="ipbfdemandadodepartamentonacimiento" required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <div class="form-group">
                                                          <div class="form-line focused">
                                                            <input type="text" class="form-control" value="" placeholder="Estado:" name="ipbfdemandadoestadonacimiento"required>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                        </div>
                                        <div class="demo-radio-button">
                                          <h5>¿Recibió el bautismo antes de que su matrimonio se efectuara?</h1>
                                          <input name="ipbfrbbautismo1" type="radio" id="rbbautismosi1"  value="Si" required>
                                          <label for="rbbautismosi1">Si</label>
                                          <input name="ipbfrbbautismo1" type="radio" id="rbbautismono1"  value="No" required>
                                          <label for="rbbautismono1">No</label>
                                        </div>
                                        <div class="demo-radio-button">
                                          <h5>Si es así ¿En que religión o denominación fue bautizado?<br>Católica:</br></h1>
                                          <input name="ipbfrbbautizado1" type="radio" id="rbbautizadosi1"  value="Si" required>
                                          <label for="rbbautizadosi1">Si</label>
                                          <input name="ipbfrbbautizado1" type="radio" id="rbbautizadono1"  value="No" required>
                                          <label for="rbbautizadono1">No</label>
                                          <div class="form-line focused">
                                            <h5>Si la repuesta es no diga de que iglesia:</h5>
                                              <input type="text" class="form-control" value="" placeholder="Otro:" name="ipbfdemandadobautizoiglesia">
                                          </div>
                                        </div>
                                        <div class="input-group">
                                          <h5>Fecha del bautismo:</h5>
                                          <div class="input-group">
                                          <span class="input-group-addon">
                                              <i class="material-icons">date_range</i>
                                          </span>
                                          <div class="form-line">
                                              <input type="text" class="form-control date" placeholder="30/07/2016" name="ipbfdemandadofechabautismo">
                                          </div>
                                          </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ipbfdemandadodiocesisbautismo" required>
                                                <label class="form-label">Diocesis:</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                                <label class="form-label"></label>
                                                <div class="row clearfix">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                          <div class="form-line focused">
                                                            <input type="text" class="form-control" value="" placeholder="Libro:" name="ipbfdemandadolibrobautismo">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <div class="form-group">
                                                          <div class="form-line focused">
                                                            <input type="text" class="form-control" value="" placeholder="Página:" name="ipbfdemandadopaginabautismo">
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <div class="form-group">
                                                          <div class="form-line focused">
                                                            <input type="text" class="form-control" value="" placeholder="Número:" name="ipbfdemandadonumerobautismo">
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                              <h5>¿Es usted católico practicante?</h5>
                                                <input type="text" class="form-control" name="ipbfdemandadocatolico">
                                                <label class="form-label"></label>
                                            </div>
                                            <div class="demo-radio-button">
                                              <h5>¿Pertenece o frecuenta algún grupo o movimiento eclesiástico?</br></h1>
                                              <input name="ipbfrbgrupoeclesiastico1" type="radio" id="rbgrupoeclesiasticosi1"  value="Si" required>
                                              <label for="rbgrupoeclesiasticosi1">Si</label>
                                              <input name="ipbfrbgrupoeclesiastico1" type="radio" id="rbgrupoeclesiasticono1"  value="No" required>
                                              <label for="rbgrupoeclesiasticono1">No</label>
                                              <div class="form-line focused">
                                                  <input type="text" class="form-control" value="" placeholder="Si es así especifique:" name="ipbfgrupoespecificacion1">
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ipbfdemandadoparroquia">
                                                <label class="form-label">Parroquia:</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ipbfdemandadodiocesis">
                                                <label class="form-label">Diócesis:</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ipbfdemandadoestado">
                                                <label class="form-label">Estado:</label>
                                            </div>
                                        </div>
                                      </div>
                              </fieldset>
                                <h3>&ensp;</h3>
                                <fieldset>
                                  <h3>Historia Familiar</h3>
                                  <!-- DEMANDANTE PADRES -->
                                  <h2>PADRES</h2>
                                  <h3>A) DEMANDANTE</h3>
                                    <div class="demo-radio-button">
                                      <h5>¿Sus padres son católicos?</h5>
                                      <input name="iphfrbpadcatdmt" type="radio" id="rbpadcatdmtsi"  value="Si" required>
                                      <label for="rbpadcatdmtsi">Si</label>
                                      <input name="iphfrbpadcatdmt" type="radio" id="rbpadcatdmtno"  value="No" required>
                                      <label for="rbpadcatdmtno">No</label>
                                    </div>
                                    <div class="demo-radio-button">
                                      <h5>¿Sus padres están casados por la iglesia católica?</h5>
                                      <input name="iphfrbcasadcatdmt" type="radio" id="rbcasadcatdmtsi"  value="Si" required>
                                      <label for="rbcasadcatdmtsi">Si</label>
                                      <input name="iphfrbcasadcatdmt" type="radio" id="rbcasadcatdmtno"  value="No" required>
                                      <label for="rbcasadcatdmtno">No</label>
                                      <div class="form-line focused">
                                          <input type="text" class="form-control" value="" placeholder="Otro:" name="iphfcatotrodmt">
                                      </div>
                                    </div>
                                    <div class="demo-radio-button">
                                      <h5>¿El matrimonio de sus padres es un matrimonio de toda la vida?</h5>
                                      <input name="iphfrbpadmatdmt" type="radio" id="rbpadmatdmtsi"  value="Si" required>
                                      <label for="rbpadmatdmtsi">Si</label>
                                      <input name="iphfrbpadmatdmt" type="radio" id="rbpadmatdmtno"  value="No" required>
                                      <label for="rbpadmatdmtno">No</label>
                                      <div class="form-line focused">
                                        <h5>Si no es así ¿Cómo ha sido el matrimonio de sus padres?</h5>
                                          <input type="text" class="form-control" value="" placeholder="Detalles:" name="iphfmatrimoniodmt">
                                      </div>
                                    </div>
                                    <div class="form-line focused">
                                      <h5>¿Si sus padres se han separado, que edad tenía usted al momento de la separación?</h5>
                                        <input type="text" class="form-control" value="" placeholder="Detalles:" name="iphfseparaciondmt">
                                    </div>
                                    <div class="demo-radio-button">
                                      <h5>¿Sus padres son católicos practicantes?</h1>
                                      <p>
                                      <h6>Padre:</h6>
                                      <input name="iphfrbcatpracpadredmt" type="radio" id="rbcatpracpadredmtsi"  value="Si" required>
                                      <label for="rbcatpracpadredmtsi">Si</label>
                                      <input name="iphfrbcatpracpadredmt" type="radio" id="rbcatpracpadredmtno"  value="No" required>
                                      <label for="rbcatpracpadredmtno">No</label>
                                      <div class="form-line focused">
                                      </p>
                                      <p>
                                      <h6>Madre:</h6>
                                      <input name="iphfrbcatpracmadredmt" type="radio" id="rbcatpracmadredmtsi"  value="Si" required>
                                      <label for="rbcatpracmadredmtsi">Si</label>
                                      <input name="iphfrbcatpracmadredmt" type="radio" id="rbcatpracmadredmtno"  value="No" required>
                                      <label for="rbcatpracmadredmtno">No</label>
                                      <div class="form-line focused">
                                      </p>
                                      <br>
                                    </div>
                                  </div>
                                </div>
                                      <!-- DEMANDADO PADRES -->
                                      <h3>B) DEMANDADO</h3>
                                        <div class="demo-radio-button">
                                          <h5>¿Sus padres son católicos?</h5>
                                          <input name="iphfrbpadcatdmd" type="radio" id="rbpadcatdmdsi"  value="Si" required>
                                          <label for="rbpadcatdmdsi">Si</label>
                                          <input name="iphfrbpadcatdmd" type="radio" id="rbpadcatdmdno"  value="No" required>
                                          <label for="rbpadcatdmdno">No</label>
                                        </div>
                                        <div class="demo-radio-button">
                                          <h5>¿Sus padres están casados por la iglesia católica?</h5>
                                          <input name="iphfrbcasadcatdmd" type="radio" id="rbcasadcatdmdsi"  value="Si" required>
                                          <label for="rbcasadcatdmdsi">Si</label>
                                          <input name="iphfrbcasadcatdmd" type="radio" id="rbcasadcatdmdno"  value="No" required>
                                          <label for="rbcasadcatdmdno">No</label>
                                          <div class="form-line focused">
                                              <input type="text" class="form-control" value="" placeholder="Otro:" name="iphfcatotrodmd">
                                          </div>
                                        </div>
                                        <div class="demo-radio-button">
                                          <h5>¿El matrimonio de sus padres es un matrimonio de toda la vida?</h5>
                                          <input name="iphfrbpadmatdmd" type="radio" id="rbpadmatdmdsi"  value="Si" required>
                                          <label for="rbpadmatdmdsi">Si</label>
                                          <input name="iphfrbpadmatdmd" type="radio" id="rbpadmatdmdno"  value="No" required>
                                          <label for="rbpadmatdmdno">No</label>
                                          <div class="form-line focused">
                                            <h5>Si no es así ¿Cómo ha sido el matrimonio de sus padres?</h5>
                                          </div>
                                          <input type="text" class="form-control" value="" placeholder="Detalles:" name="iphfmatrimoniodmd">
                                        </div>
                                        <div class="form-line focused">
                                          <h5>¿Si sus padres se han separado, que edad tenía usted al momento de la separación?</h5>
                                            <input type="text" class="form-control" value="" placeholder="Detalles:" name="iphfseparaciondmd">
                                        </div>
                                        <div class="demo-radio-button">
                                          <h5>¿Sus padres son católicos practicantes?</h1>
                                          <p>
                                          <h6>Padre:</h6>
                                          <input name="iphfrbcatpracpadredmd" type="radio" id="rbcatpracpadredmdsi"  value="Si" required>
                                          <label for="rbcatpracpadredmdsi">Si</label>
                                          <input name="iphfrbcatpracpadredmd" type="radio" id="rbcatpracpadredmdno"  value="No" required>
                                          <label for="rbcatpracpadredmdno">No</label>
                                          <div class="form-line focused">
                                          </p>
                                          <p>
                                          <h6>Madre:</h6>
                                          <input name="iphfrbcatpracmadredmd" type="radio" id="rbcatpracmadredmdsi"  value="Si" required>
                                          <label for="rbcatpracmadredmdsi">Si</label>
                                          <input name="iphfrbcatpracmadredmd" type="radio" id="rbcatpracmadredmdno"  value="No" required>
                                          <label for="rbcatpracmadredmdno">No</label>
                                          <div class="form-line focused">
                                          </p>
                                          <br>
                                          <br>
                                          <hr>
                                        </div>
                                        </div>
                                        </div>
                                      <!-- -->

                                      <h2>HERMANOS</h3>
                                      <h3>A) DEMANDANTE</h3>
                                      <label class="form-label">¿Cuántos hermanos son, incluido usted?</label>
                                      <div class="row clearfix">
                                          <div class="col-sm-4">
                                              <div class="form-group">
                                                <div class="form-line focused">
                                                  <input type="number" class="form-control" value="" placeholder="Varones:" name="iphfhnovardmt" required>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-4">
                                              <div class="form-group">
                                                <div class="form-line focused">
                                                  <input type="number" class="form-control" value="" placeholder="Mujeres:" name="iphfhnamujdmt" required>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-line">
                                          <label class="form-label">¿Qué número ocupa usted entre sus hermanos?</label>
                                          <input type="number" class="form-control" name="iphfnumherdmt" required>
                                      </div>
                                      <div class="demo-radio-button">
                                        <h5>¿Ha fracasado el matrimonio de alguno de sus hermanos?</h5>
                                        <input name="iphfrbmathnodmt" type="radio" id="rbmathnodmtsi"  value="Si" required>
                                        <label for="rbmathnodmtsi">Si</label>
                                        <input name="iphfrbmathnodmt" type="radio" id="rbmathnodmtno"  value="No" required>
                                        <label for="rbmathnodmtno">No</label>
                                        <div class="form-line focused">
                                          <h5>Expliquese:</h5>
                                            <input type="text" class="form-control" value="" placeholder="Detalles:" name="iphfexplidmt">
                                        </div>
                                      </div>
                                      <br>
                                      <!-- -->
                                      <h3>B) DEMANDADO</h3>
                                      <label class="form-label">¿Cuántos hermanos son, incluido usted?</label>
                                      <div class="row clearfix">
                                          <div class="col-sm-4">
                                              <div class="form-group">
                                                <div class="form-line focused">
                                                  <input type="number" class="form-control" value="" placeholder="Varones:" name="iphfhnovardmd" required>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="col-sm-4">
                                              <div class="form-group">
                                                <div class="form-line focused">
                                                  <input type="number" class="form-control" value="" placeholder="Mujeres:" name="iphfhnamujdmd" required>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-line">
                                          <label class="form-label">¿Qué número ocupa usted entre sus hermanos?</label>
                                          <input type="number" class="form-control" name="iphfnumherdmd" required>
                                      </div>
                                      <div class="demo-radio-button">
                                        <h5>¿Ha fracasado el matrimonio de alguno de sus hermanos?</h5>
                                        <input name="iphfrbmathnodmd" type="radio" id="rbmathnodmdsi"  value="Si" required>
                                        <label for="rbmathnodmdsi">Si</label>
                                        <input name="iphfrbmathnodmd" type="radio" id="rbmathnodmdno"  value="No" required>
                                        <label for="rbmathnodmdno">No</label>
                                        <div class="form-line focused">
                                          <h5>Expliquese:</h5>
                                            <input type="text" class="form-control" value="" placeholder="Detalles:" name="iphfexplidmd">
                                        </div>
                                      </div>
                                      <!-- -->
                                      <hr>
                                      <div class="form-line focused">
                                        <h5>Observaciones:</h5>
                                        <div class="col-sm-12">
                                          <div class="form-group">
                                            <div class="form-line">
                                              <textarea rows="1" class="form-control no-resize auto-growth" name="faobscanon1" placeholder="Escriba aqui su observacion" style="overflow: hidden; word-wrap: break-word; height: 46px;"></textarea>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </fieldset>
                                <h3>&ensp;</h3>
                                <fieldset>
                                  <h3>Noviazgo y matrimonio</h3>
                                  <label class="form-label">Brevemente ¿Cuándo y cómo conoció a la parte Demandada?</label>
                                  <div class="row clearfix">
                                      <div class="col-sm-4">
                                          <div class="form-group">
                                            <div class="form-line focused">
                                              <input type="text" class="form-control" value="" placeholder="Fecha:" name="ipnmfecha" required>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row clearfix">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                          <div class="form-line focused">
                                            <input type="text" class="form-control" value="" placeholder="Circusntancias:" name="ipnmcircu" required>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>¿Cuánto duró el noviazgo antes de tomar la desición de casarse?</h5>
                                          <input type="text" class="form-control" name="ipnmdurnov" required>
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Hubo un compromiso formal antes del matrimonio?</h5>
                                    <input name="ipnmrbcompro" type="radio" id="rbcomprosi"  value="Si" required >
                                    <label for="rbcomprosi">Si</label>
                                    <input name="ipnmrbcompro" type="radio" id="rbcomprono"  value="No" required>
                                    <label for="rbcomprono">No</label>
                                    <div class="form-line focused">
                                      <h5>Si es así, fecha del compromiso:</h5>
                                        <input type="text" class="form-control" name="ipnmfechacompro">
                                    </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>¿Cuánto tiempo duró el compromiso?</h5>
                                          <input type="text" class="form-control" name="ipnmtiempocompro">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Vivieron juntos antes de casarse?</h5>
                                    <input name="ipnmrbvivirantes" type="radio" id="rbvivirantessi"  value="Si" required>
                                    <label for="rbvivirantessi">Si</label>
                                    <input name="ipnmrbvivirantes" type="radio" id="rbvivirantesno"  value="No" required>
                                    <label for="rbvivirantesno">No</label>
                                    <div class="form-line focused">
                                      <h5>Si es así, ¿Cuánto tiempo vivieron juntos antes de casarse?:</h5>
                                        <input type="text" class="form-control" name="ipnmantescas" >
                                      <h5>Si es así, explique ¿Porqué decidió casarse?:</h5>
                                        <input type="text" class="form-control" name="ipsnmporquecas" >
                                    </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Hubo algun embarazo o sospecha de un embarazo antes de contraer matrimonio?</h5>
                                    <input name="ipnmrbsospecha" type="radio" id="rbsospechasi"  value="Si" required>
                                    <label for="rbsospechasi">Si</label>
                                    <input name="ipnmrbsospecha" type="radio" id="rbsospechano"  value="No" required>
                                    <label for="rbsospechano">No</label>
                                    <div class="form-line focused">
                                      <h5>Si es así, ¿Como afecto la desicion de contraer matrimonio?:</h5>
                                        <input type="text" class="form-control" name="ipnmcontraer" >
                                    </div>
                                  </div>

                                  <div class="demo-radio-button">
                                    <h5>¿Usted y la parte demandada firmaron algun acuerdo o convenio prenupcial antes de la boda?</h5>
                                    <input name="ipnmrbacuerdo" type="radio" id="rbacuedosi"  value="Si" required>
                                    <label for="rbacuedosi">Si</label>
                                    <input name="ipnmrbacuerdo" type="radio" id="rbacuedono"  value="No" required>
                                    <label for="rbacuedono">No</label>
                                    <div class="form-line focused">
                                      <h5>Si es así, porfavor agregue una copia de este acuerdo:</h5>
                                      <h3>Carga de archivos al final de la pagina</h3>
                                    </div>
                                  </div>
                                  <div class="input-group">
                                    <h5>Fecha exacta de la boda:</h5>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="30/07/2016" name="ipnmfechaboda">
                                    </div>
                                    </div>
                                  </div>

                                  <div class="demo-radio-button">
                                    <h5>El matrimonio fue oficiado por un: </h5>
                                    <input name="ipnmrboficiado" type="radio" id="rbsac"  value="Sacerdote católico" required>
                                    <label for="rbsac">sacerdote o diacono católico</label>
                                    <input name="ipnmrboficiado" type="radio" id="rbdiacono"  value="Otro religioso/diácono" required>
                                    <label for="rbdiacono">Otro religiso oficial</label>
                                    <input name="ipnmrboficiado" type="radio" id="rbcivil"  value="Oficial de registro civil" required>
                                    <label for="rbcivil">Oficial de registro civil</label>
                                    <input name="ipnmrboficiado" type="radio" id="rbotro"  value="Otro" required>
                                    <label for="rbotro">Otro</label>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Nombre del sacerdote, ministro u oficiante</h5>
                                          <input type="text" class="form-control" name="ipnmsacerdote">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>

                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Parroquia o lugar donde se contrajo matrimonio</h5>
                                          <input type="text" class="form-control" name="ipnmparroquia">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>

                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Ciudad</h5>
                                          <input type="text" class="form-control" name="ipnmciudad">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>

                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Departamento</h5>
                                        <input type="text" class="form-control" name="ipnmdepart">
                                        <label class="form-label"></label>
                                      </div>
                                  </div>

                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Estado</h5>
                                          <input type="text" class="form-control" name="ipnmestado">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>

                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Pais</h5>
                                          <input type="text" class="form-control" name="ipnmpais">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>

                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>¿Donde realizo el matrimonio civil?</h5>
                                          <input type="text" class="form-control" name="ipnmcivil">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>

                                  <div class="input-group">
                                    <h5>Si hubo un matrimonio civil antes del matrimonio de la Iglesia, fecha:</h5>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="30/07/2016" name="ipnmfechabodacivil">
                                    </div>
                                    </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Fue su matrimonio con la parte demandada, su primer matrimonio?</h5>
                                    <input name="ipnmrbmatrimoniodm" type="radio" id="rbmatrimoniodmsi"  value="Si" required>
                                    <label for="rbmatrimoniodmsi">Si</label>
                                    <input name="ipnmrbmatrimoniodm" type="radio" id="rbmatrimoniodmno"  value="No" required>
                                    <label for="rbmatrimoniodmno">No</label>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Fue el matrimonio con usted el primer matrimonio para la parte Demandada?</h5>
                                    <input name="ipnmrbprimermatrimonio" type="radio" id="rbprimermatrimoniosi"  value="Si" required>
                                    <label for="rbprimermatrimoniosi">Si</label>
                                    <input name="ipnmrbprimermatrimonio" type="radio" id="rbprimermatrimoniono"  value="No" required>
                                    <label for="rbprimermatrimoniono">No</label>
                                  </div>


                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Duracion del noviazgo</h5>
                                          <input type="text" class="form-control" name="ipnmduracion">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>




                                </fieldset>
                                <h3>&ensp;</h3>
                                <fieldset>
                                  <h3>Matrimonios contraídos anteriormente</h3>
                                  <h3>A)DEMANDANTE</h3>
                                  <h4>Matrimonio Nº1</h4>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Nombre de su ex-cónyuge</h5>
                                          <input type="text" class="form-control" name="ipmcademandantenombreexconyuge">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="input-group">
                                    <h5>¿Fecha de celebración de su matrimonio?</h5>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="30/07/2016" name="ipmcademandantefechamatrimonio">
                                    </div>
                                    </div>
                                  </div>
                                  <div class="form-group form-float">
                                          <label class="form-label">Lugar de la Boda:</label>
                                          <div class="row clearfix">
                                              <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Ciudad:" name="ipbfdemandanteciudadmatrimonio">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Departamento:" name="ipmcademandantedepartamentomatrimonio">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Estado:" name="ipmcademandanteestadomatrimonio">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>Tipo de ceremonia</h5>
                                    <input name="ipmcarbdemandantetipoceremonia" type="radio" id="rbdemandantetipoceremoniacivil"  value="Civil" >
                                    <label for="rbdemandantetipoceremoniacivil">Civil</label>
                                    <input name="ipmcarbdemandantetipoceremonia" type="radio" id="rbdemandantetipoceremoniareligiosa" value="Religiosa" >
                                    <label for="rbdemandantetipoceremoniareligiosa">Religiosa</label>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Fue este el primer matrimonio para su cónyuge?</h5>
                                    <input name="ipmcarbdemandantematrimonioconyuge" type="radio" id="rbdemandantematrimonioconyugesi"  value="Si" >
                                    <label for="rbdemandantematrimonioconyugesi">Si</label>
                                    <input name="ipmcarbdemandantematrimonioconyuge" type="radio" id="rbdemandantematrimonioconyugeno" value="No" >
                                    <label for="rbdemandantematrimonioconyugeno">No</label>
                                    <h5>De no ser así:</h5>
                                      <input type="text" class="form-control" value="Descripción" name="ipmcademandantedescripcionmatrimonioconyuge" >
                                  </div>
                                  <div class="form-group form-float">
                                          <label class="form-label">De ser aplicable:</label>
                                          <div class="row clearfix">
                                              <div class="col-sm-5">
                                                <div class="input-group">
                                                  <h5>Fecha de la muerte de su cónyuge</h5>
                                                  <div class="input-group">
                                                  <span class="input-group-addon">
                                                      <i class="material-icons">date_range</i>
                                                  </span>
                                                  <div class="form-line">
                                                      <input type="text" class="form-control date" placeholder="30/07/2016" name="ipmcademandantefechamuerteconyugue">
                                                  </div>
                                                  </div>
                                                </div>
                                                </div>
                                                <div class="col-sm-7">
                                                  <div class="form-group">
                                                    <h5>Lugar de muerte de su cónyuge</h5>
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Lugar:" name="ipmcademandantelugarmuerteconyugue">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Fue anulado este matrimonio por la Iglesia Católica?</h5>
                                    <input name="ipmcarbdemandantematrimonioconyugeanulado" type="radio" id="rbdemandantematrimonioconyugeanuladosi"  value="Si" >
                                    <label for="rbdemandantematrimonioconyugeanuladosi">Si</label>
                                    <input name="ipmcarbdemandantematrimonioconyugeanulado" type="radio" id="rbdemandantematrimonioconyugeanuladono" value="No" >
                                    <label for="rbdemandantematrimonioconyugeanuladono">No</label>
                                    <h5>De  ser así:</h5>
                                      <input type="text" class="form-control" value="" placeholder="Tribunal" name="ipmcademandantetribunalmatrimonioconyugeanulado">
                                      <input type="text" class="form-control" value="" placeholder="Lugar" name="ipmcademandantelugarmatrimonioconyugeanulado">
                                      <input type="number" class="form-control" value="" placeholder="Nº Caso" name="ipmcademandantenrocasomatrimonioconyugeanulado">
                                      <div class="input-group">
                                        <h5>Fecha de anulación de su matrimonio</h5>
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="30/07/2016" name="ipmcademandantefechamatrimonioconyugeanulado">
                                        </div>
                                        </div>
                                      </div>
                                  </div>

                                  <h4>Matrimonio Nº2</h4>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Nombre de su ex-cónyuge</h5>
                                          <input type="text" class="form-control" name="ipmcademandantenombreexconyuge2">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="input-group">
                                    <h5>¿Fecha de celebración de su matrimonio?</h5>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="30/07/2016" name="ipmcademandantefechamatrimonio2">
                                    </div>
                                    </div>
                                  </div>
                                  <div class="form-group form-float">
                                          <label class="form-label">Lugar de la Boda:</label>
                                          <div class="row clearfix">
                                              <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Ciudad:" name="ipbfdemandanteciudadmatrimonio2">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Departamento:" name="ipmcademandantedepartamentomatrimonio2">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Estado:" name="ipmcademandanteestadomatrimonio2">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>Tipo de ceremonia</h5>
                                    <input name="ipmcarbtipoceremonia2" type="radio" id="rbtipoceremoniacivil2"  value="Civil" >
                                    <label for="rbtipoceremoniacivil2">Civil</label>
                                    <input name="ipmcarbtipoceremonia2" type="radio" id="rbtipoceremoniareligiosa2" value="Religiosa" >
                                    <label for="rbtipoceremoniareligiosa2">Religiosa</label>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Fue este el primer matrimonio para su cónyuge?</h5>
                                    <input name="ipmcarbdemandantematrimonioconyuge2" type="radio" id="rbdemandantematrimonioconyugesi2"  value="Si" >
                                    <label for="rbdemandantematrimonioconyugesi2">Si</label>
                                    <input name="ipmcarbdemandantematrimonioconyuge2" type="radio" id="rbdemandantematrimonioconyugeno2" value="No" >
                                    <label for="rbdemandantematrimonioconyugeno2">No</label>
                                    <h5>De no ser así:</h5>
                                      <input type="text" class="form-control" value="Descripción" name="ipmcademandantedescripcionmatrimonioconyuge2" >
                                  </div>
                                  <div class="form-group form-float">
                                          <label class="form-label">De ser aplicable:</label>
                                          <div class="row clearfix">
                                              <div class="col-sm-5">
                                                <div class="input-group">
                                                  <h5>Fecha de la muerte de su cónyuge</h5>
                                                  <div class="input-group">
                                                  <span class="input-group-addon">
                                                      <i class="material-icons">date_range</i>
                                                  </span>
                                                  <div class="form-line">
                                                      <input type="text" class="form-control date" placeholder="30/07/2016" name="ipmcademandantefechamuerteconyugue2">
                                                  </div>
                                                  </div>
                                                </div>
                                                </div>
                                                <div class="col-sm-7">
                                                  <div class="form-group">
                                                    <h5>Lugar de muerte de su cónyuge</h5>
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Lugar:" name="ipmcademandantelugarmuerteconyugue2">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Fue anulado este matrimonio por la Iglesia Católica?</h5>
                                    <input name="ipmcarbdemandantematrimonioconyugeanulado2" type="radio" id="rbdemandantematrimonioconyugeanuladosi2"  value="Si" >
                                    <label for="rbdemandantematrimonioconyugeanuladosi2">Si</label>
                                    <input name="ipmcarbdemandantematrimonioconyugeanulado2" type="radio" id="rbdemandantematrimonioconyugeanuladono2" value="No" >
                                    <label for="rbdemandantematrimonioconyugeanuladono2">No</label>
                                    <h5>De  ser así:</h5>
                                      <input type="text" class="form-control" value="" placeholder="Tribunal" name="ipmcademandantetribunalmatrimonioconyugeanulado2">
                                      <input type="text" class="form-control" value="" placeholder="Lugar" name="ipmcademandantelugarmatrimonioconyugeanulado2">
                                      <input type="number" class="form-control" value="" placeholder="Nº Caso" name="ipmcademandantenrocasomatrimonioconyugeanulado2">
                                      <div class="input-group">
                                        <h5>Fecha de anulación de su matrimonio</h5>
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="30/07/2016" name="ipmcademandantefechamatrimonioconyugeanulado2">
                                        </div>
                                        </div>
                                      </div>
                                  </div>

                                  <h3>B)DEMANDADO</h3>
                                  <h4>Matrimonio Nº1</h4>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Nombre de su ex-cónyuge</h5>
                                          <input type="text" class="form-control" name="ipmcademandadonombreexconyuge">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="input-group">
                                    <h5>¿Fecha de celebración de su matrimonio?</h5>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="30/07/2016" name="ipmcademandadofechamatrimonio">
                                    </div>
                                    </div>
                                  </div>
                                  <div class="form-group form-float">
                                          <label class="form-label">Lugar de la Boda:</label>
                                          <div class="row clearfix">
                                              <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Ciudad:" name="ipbfdemandadociudadmatrimonio">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Departamento:" name="ipmcademandadodepartamentomatrimonio">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Estado:" name="ipmcademandadoestadomatrimonio">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>Tipo de ceremonia</h5>
                                    <input name="ipmcarbdemandadotipoceremonia" type="radio" id="rbdemandadotipoceremoniacivil"  value="Civil" >
                                    <label for="rbdemandadotipoceremoniacivil">Civil</label>
                                    <input name="ipmcarbdemandadotipoceremonia" type="radio" id="rbdemandadotipoceremoniareligiosa" value="Religiosa" >
                                    <label for="rbdemandadotipoceremoniareligiosa">Religiosa</label>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Fue este el primer matrimonio para su cónyuge?</h5>
                                    <input name="ipmcarbdemandadomatrimonioconyuge" type="radio" id="rbdemandadomatrimonioconyugesi"  value="Si" >
                                    <label for="rbdemandadomatrimonioconyugesi">Si</label>
                                    <input name="ipmcarbdemandadomatrimonioconyuge" type="radio" id="rbdemandadomatrimonioconyugeno" value="No" >
                                    <label for="rbdemandadomatrimonioconyugeno">No</label>
                                    <h5>De no ser así:</h5>
                                      <input type="text" class="form-control" value="Descripción" name="ipmcademandadodescripcionmatrimonioconyuge" >
                                  </div>
                                  <div class="form-group form-float">
                                          <label class="form-label">De ser aplicable:</label>
                                          <div class="row clearfix">
                                              <div class="col-sm-5">
                                                <div class="input-group">
                                                  <h5>Fecha de la muerte de su cónyuge</h5>
                                                  <div class="input-group">
                                                  <span class="input-group-addon">
                                                      <i class="material-icons">date_range</i>
                                                  </span>
                                                  <div class="form-line">
                                                      <input type="text" class="form-control date" placeholder="30/07/2016" name="ipmcademandadofechamuerteconyugue">
                                                  </div>
                                                  </div>
                                                </div>
                                                </div>
                                                <div class="col-sm-7">
                                                  <div class="form-group">
                                                    <h5>Lugar de muerte de su cónyuge</h5>
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Lugar:" name="ipmcademandadolugarmuerteconyugue">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Fue anulado este matrimonio por la Iglesia Católica?</h5>
                                    <input name="ipmcarbdemandadomatrimonioconyugeanulado" type="radio" id="rbdemandadomatrimonioconyugeanuladosi"  value="Si" >
                                    <label for="rbdemandadomatrimonioconyugeanuladosi">Si</label>
                                    <input name="ipmcarbdemandadomatrimonioconyugeanulado" type="radio" id="rbdemandadomatrimonioconyugeanuladono" value="No" >
                                    <label for="rbdemandadomatrimonioconyugeanuladono">No</label>
                                    <h5>De  ser así:</h5>
                                      <input type="text" class="form-control" value="" placeholder="Tribunal" name="ipmcademandadotribunalmatrimonioconyugeanulado">
                                      <input type="text" class="form-control" value="" placeholder="Lugar" name="ipmcademandadolugarmatrimonioconyugeanulado">
                                      <input type="number" class="form-control" value="" placeholder="Nº Caso" name="ipmcademandadonrocasomatrimonioconyugeanulado">
                                      <div class="input-group">
                                        <h5>Fecha de anulación de su matrimonio</h5>
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="30/07/2016" name="ipmcademandadofechamatrimonioconyugeanulado">
                                        </div>
                                        </div>
                                      </div>
                                  </div>

                                  <h4>Matrimonio Nº2</h4>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Nombre de su ex-cónyuge</h5>
                                          <input type="text" class="form-control" name="ipmcademandadonombreexconyuge2">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="input-group">
                                    <h5>¿Fecha de celebración de su matrimonio?</h5>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="30/07/2016" name="ipmcademandadofechamatrimonio2">
                                    </div>
                                    </div>
                                  </div>
                                  <div class="form-group form-float">
                                          <label class="form-label">Lugar de la Boda:</label>
                                          <div class="row clearfix">
                                              <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Ciudad:" name="ipbfdemandadociudadmatrimonio2">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Departamento:" name="ipmcademandadodepartamentomatrimonio2">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Estado:" name="ipmcademandadoestadomatrimonio2">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>Tipo de ceremonia</h5>
                                    <input name="ipmcarbdemandadotipoceremonia2" type="radio" id="rbdemandadotipoceremoniacivil2"  value="Si" >
                                    <label for="rbdemandadotipoceremoniacivil2">Civil</label>
                                    <input name="ipmcarbdemandadotipoceremonia2" type="radio" id="rbdemandadotipoceremoniareligiosa2" value="No" >
                                    <label for="rbdemandadotipoceremoniareligiosa2">Religiosa</label>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Fue este el primer matrimonio para su cónyuge?</h5>
                                    <input name="ipmcarbdemandadomatrimonioconyuge2" type="radio" id="rbdemandadomatrimonioconyugesi2" value="Si"  >
                                    <label for="rbdemandadomatrimonioconyugesi2">Si</label>
                                    <input name="ipmcarbdemandadomatrimonioconyuge2" type="radio" id="rbdemandadomatrimonioconyugeno2" value="No" >
                                    <label for="rbdemandadomatrimonioconyugeno2">No</label>
                                    <h5>De no ser así:</h5>
                                      <input type="text" class="form-control" value="Descripción" name="ipmcademandadodescripcionmatrimonioconyuge2" >
                                  </div>
                                  <div class="form-group form-float">
                                          <label class="form-label">De ser aplicable:</label>
                                          <div class="row clearfix">
                                              <div class="col-sm-5">
                                                <div class="input-group">
                                                  <h5>Fecha de la muerte de su cónyuge</h5>
                                                  <div class="input-group">
                                                  <span class="input-group-addon">
                                                      <i class="material-icons">date_range</i>
                                                  </span>
                                                  <div class="form-line">
                                                      <input type="text" class="form-control date" placeholder="30/07/2016" name="ipmcademandadofechamuerteconyugue2">
                                                  </div>
                                                  </div>
                                                </div>
                                                </div>
                                                <div class="col-sm-7">
                                                  <div class="form-group">
                                                    <h5>Lugar de muerte de su cónyuge</h5>
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Lugar:" name="ipmcademandadolugarmuerteconyugue2">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Fue anulado este matrimonio por la Iglesia Católica?</h5>
                                    <input name="ipmcarbdemandadomatrimonioconyugeanulado2" type="radio" id="rbdemandadomatrimonioconyugeanuladosi2"  value="Si" >
                                    <label for="rbdemandadomatrimonioconyugeanuladosi2">Si</label>
                                    <input name="ipmcarbdemandadomatrimonioconyugeanulado2" type="radio" id="rbdemandadomatrimonioconyugeanuladono2" value="No" >
                                    <label for="rbdemandadomatrimonioconyugeanuladono2">No</label>
                                    <h5>De  ser así:</h5>
                                      <input type="text" class="form-control" value="" placeholder="Tribunal" name="ipmcademandadotribunalmatrimonioconyugeanulado2">
                                      <input type="text" class="form-control" value="" placeholder="Lugar" name="ipmcademandadolugarmatrimonioconyugeanulado2">
                                      <input type="number" class="form-control" value="" placeholder="Nº Caso" name="ipmcademandadonrocasomatrimonioconyugeanulado2">
                                      <div class="input-group">
                                        <h5>Fecha de anulación de su matrimonio</h5>
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="30/07/2016" name="ipmcademandadofechamatrimonioconyugeanulado2">
                                        </div>
                                        </div>
                                      </div>
                                  </div>
                                </fieldset>
                                <h3>&ensp;</h3>
                                <fieldset>
                                  <h3>Separación y Divorcio/Disolución</h3>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>¿Cuánto tiempo (aproximadamente) vivieron casados antes de la separación final?</h5>
                                          <input type="text" class="form-control" name="ipsdtiempocasados">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>¿Cuánto tiempo (aproximadamente) vivieron casados antes de la separación final?</h5>
                                          <input type="text" class="form-control" name="ipsdnumeroseparaciones">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <h5>Fecha aproximada de la primera separación</h5>
                                  <div class="form-line">
                                      <input type="text" class="form-control date" placeholder="30/07/2016" name="ipsdfechaprimeraseparacion">
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>¿Qué fue lo que causó la primera separación?(indique brevemente)</h5>
                                          <input type="text" class="form-control" name="ipsdcausaprimeraseparacion">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>¿Otras separaciones?(indique brevemente)</h5>
                                          <input type="text" class="form-control" name="ipsdotrasseparaciones">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>¿Qué causó la separación definitiva?(indique brevemente)</h5>
                                          <input type="text" class="form-control" name="ipsdseparaciondefinitiva">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                          <label class="form-label">Fecha de la separación definitiva:</label>
                                          <div class="row clearfix">
                                              <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Año:" name="ipsdañoseparacion">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Mes:" name="ipsdmesseparacion">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <h5>Fecha del divorcio civil</h5>
                                  <div class="form-line">
                                      <input type="text" class="form-control date" placeholder="30/07/2016" name="ipsdfechadivorciocivil" required>
                                  </div>
                                  <h5>Fue un</h5>
                                  <input name="ipsdrbdivorcioanulacion" type="radio" id="rbdivorcio"  value="Si" >
                                  <label for="rbdivorcio">Si</label>
                                  <input name="ipsdrbdivorcioanulacion" type="radio" id="rbanulacioncivil" value="No" >
                                  <label for="rbanulacioncivil">No</label>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>¿Con cuál causal se obtuvo el divorcio/anulación civil?</h5>
                                          <input type="text" class="form-control" name="ipsdcausaldivorciocivil">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                          <label class="form-label"></label>
                                          <div class="row clearfix">
                                              <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Departamento:" name="ipsddepartamentodivorciocivil">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Estado:" name="ipsdestadodivorciocivil">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-4">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="País (si corresponde):" name="ipsdpaisdivorciocivil">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <h5>¿Quién pidió el divorcio?</h5>
                                  <input name="ipsdrbpedidodivorcio" type="radio" id="rbpedidodivorcioyo"  value="Demandante" >
                                  <label for="rbpedidodivorcioyo">Yo lo hice</label>
                                  <input name="ipsdrbpedidodivorcio" type="radio" id="rbpedidodivorciodemandado" value="Demandado" >
                                  <label for="rbpedidodivorciodemandado">La parte demandada</label>
                                  <input name="ipsdrbpedidodivorcio" type="radio" id="rbpedidodivorcioambos" value="Ambos" >
                                  <label for="rbpedidodivorcioambos">Ambos</label>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Duración de la convivencia del matrimonio</h5>
                                          <input type="text" class="form-control" name="ipsdduracionconvivenciamatrimonio">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>

                                </fieldset>
                                <!-- HIJOS -->
                                <h3>&ensp;</h3>
                                <fieldset>
                                  <h3>Hijos</h3>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Si no hubo hijos durante su matrimonio, ¿por qué no?</h5>
                                          <input type="text" class="form-control" name="iphjhijosmat">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>¿Cuántos niños tuvieron durante su matrimonio?</h5>
                                          <input type="text" class="form-control" name="iphjninios">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>¿Cuántos hijos son todavía menores de edad?</h5>
                                          <input type="text" class="form-control" name="iphjhijosmenores">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>¿Quién tiene ahora la custodia legal de los niños?</h5>
                                          <input type="text" class="form-control" name="iphjcustodia">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>¿Ha cumplido usted con las visitas / custodia de los niños?</h5>
                                          <input type="text" class="form-control" name="iphjvisita">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Está usted obligado a pagar manutención de niños y/o cónyuge fijada por el juez?</h5>
                                    <input name="iphjrbmanutencion" type="radio" id="rbmanutencionsi"  value="Si" required>
                                    <label for="rbmanutencionsi">Si</label>
                                    <input name="iphjrbmanutencion" type="radio" id="rbmanutencionno"  value="No" required>
                                    <label for="rbmanutencionno">No</label>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Ha cumplido con el pago de pensiones?</h5>
                                    <input name="iphjrbpensiones" type="radio" id="rbpensionesi"  value="Si" required>
                                    <label for="rbpensionesi">Si</label>
                                    <input name="iphjrbpensiones" type="radio" id="rbpensioneno"  value="No" required>
                                    <label for="rbpensioneno">No</label>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Hay alguna querella pendiente o en proceso en el Tribunal Civil entre usted y la parte demandada?</h5>
                                    <input name="iphjrbtribunal" type="radio" id="rbtribunalsi"  value="Si" required>
                                    <label for="rbtribunalsi">Si</label>
                                    <input name="iphjrbtribunal" type="radio" id="rbtribunalno"  value="No" required>
                                    <label for="rbtribunalno">No</label>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Si es así, por favor descríbalo brevemente:</h5>
                                          <input type="text" class="form-control" name="iphjdesp">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Hay en la actualidad una orden de “protección contra abuso”, “orden de restricción”, o una orden similar del Juez en
                                    vigor entre usted y la parte Demandada?</h5>
                                    <input name="iphjlargo" type="radio" id="rblargosi"  value="Si" required>
                                    <label for="rblargosi">Si</label>
                                    <input name="iphjlargo" type="radio" id="rblargono"  value="No" required>
                                    <label for="rblargono">No</label>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Existió alguna vez esa orden?</h5>
                                    <input name="iphjorden" type="radio" id="rbordensi"  value="Si" required>
                                    <label for="rbordensi">Si</label>
                                    <input name="iphjorden" type="radio" id="rbordenno"  value="No" required>
                                    <label for="rbordenno">No</label>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Si es así, describa los hechos que han causado esta decisión</h5>
                                          <input type="text" class="form-control" name="iphjhechos">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Numero de hijos</h5>
                                          <input type="number" class="form-control" name="iphjhechos">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>

                                </fieldset>

                                <h3>&ensp;</h3>
                                <fieldset>
                                  <h3>Estado actual</h3>
                                  <h5>¿Cuál es su estado civil actual?</h5>
                                  <input name="ipearbestadocivilactual" type="radio" id="rbestadocivilsoltero"  value="Soltero(a)" >
                                  <label for="rbestadocivilsoltero">Soltero(a)</label>
                                  <input name="ipearbestadocivilactual" type="radio" id="rbestadocivilcomprometido" value="Comprometido(a)" >
                                  <label for="rbestadocivilcomprometido">Comprometido(a)</label>
                                  <input name="ipearbestadocivilactual" type="radio" id="rbestadocivilconviviendo" value="Conviviendo" >
                                  <label for="rbestadocivilconviviendo">Conviviendo</label>
                                  <input name="ipearbestadocivilactual" type="radio" id="rbestadocivilcasadocivilmente"  value="Casado(a)" >
                                  <label for="rbestadocivilcasadocivilmente">Casado(a) civilmente</label>
                                  <h5>Si está casado(a) nuevamente, conviviendo o comprometido(a)</h5>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipeaprimernombre">
                                          <label class="form-label">Primer Nombre*</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipeasegundonomrbre">
                                          <label class="form-label">Segundo Nombre</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipeaapellidopaterno">
                                          <label class="form-label">Apellido paterno*</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipeaapellidomaterno">
                                          <label class="form-label">Apellido materno*</label>
                                      </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>Sexo</h1>
                                    <input name="ipearbsexo" type="radio" id="rbeasexomasculino"  value="Masculino" required>
                                    <label for="rbeasexomasculino">Masculino</label>
                                    <input name="ipearbsexo" type="radio" id="rbeasexofemenino"  value="Femenino" required>
                                    <label for="rbeasexofemenino">Femenino</label>
                                  </div>
                                  <br>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipeatiempojuntos">
                                          <label class="form-label">¿Cuánto tiempo llevan juntos?</label>
                                      </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Tienen Hijos?</h1>
                                    <input name="ipearbhijos" type="radio" id="rbhijossi"  value="Si" required>
                                    <label for="rbhijossi">Si</label>
                                    <input name="ipearbhijos" type="radio" id="rbhijosno"  value="No" required>
                                    <label for="rbhijosno">No</label>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="number" class="form-control" name="ipeanumerohijos">
                                          <label class="form-label">¿Cuántos hijos?</label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                        <h5>Edades de los hijos</h5>
                                          <input type="text" class="form-control" name="ipeaedadeshijos" placeholder="2/18/25(años)">
                                          <label class="form-label"></label>
                                      </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipeareligionconyuge">
                                          <label class="form-label">Religión de su actual ó futuro(a) cónyuge</label>
                                      </div>
                                  </div>
                                  <div class="input-group">
                                    <h5>Fecha de nacimiento</h5>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="30/07/2016" name="ipeafechanacimiento">
                                    </div>
                                    </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>Si no es católico(a)¿está usted o su actual/futuro(a)cónyuge en el programa católico Rito de iniciación cristiana para adultos?</h1>
                                    <input name="ipearbrito" type="radio" id="rbritosi"  value="Si" required>
                                    <label for="rbritosi">Si</label>
                                    <input name="ipearbrito" type="radio" id="rbritono"  value="No" required>
                                    <label for="rbritono">No</label>
                                    <h5>Si es así, ¿En que parroquia?</h5>
                                      <input type="text" class="form-control" value="" placeholder="Otro:" name="ipeaparroquia">
                                  </div>
                                  <div class="form-group form-float">
                                          <label class="form-label"></label>
                                          <div class="row clearfix">
                                              <div class="col-sm-5">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Ciudad:" name="ipeaciudad">
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-sm-5">
                                                  <div class="form-group">
                                                    <div class="form-line focused">
                                                      <input type="text" class="form-control" value="" placeholder="Estado:" name="ipeaestado">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                  </div>
                                  <div class="input-group">
                                    <h5>Si su actual/futuro cónyuge está bautizado¿Cuál es la fecha del bautismo?</h5>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                    <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="30/07/2016" name="ipeaconyuguefechabautismo">
                                    </div>
                                    </div>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipeacambioreligionconyuge">
                                          <label class="form-label">¿Ha cambiado alguna vez de religión su actual/futuro cónyuge?</label>
                                      </div>
                                  </div>
                                  <div class="demo-radio-button">
                                    <h5>¿Es este su único matrimonio después del contraído con la parte Demandada?</h1>
                                    <input name="ipearbunicomatrimonio" type="radio" id="rbunicomatrimoniosi" value="Si" >
                                    <label for="rbunicomatrimoniosi">Si</label>
                                    <input name="ipearbunicomatrimonio" type="radio" id="rbunicomatrimoniono" value="No" >
                                    <label for="rbunicomatrimoniono">No</label>
                                  </div>
                                  <div class="form-group form-float">
                                      <div class="form-line">
                                          <input type="text" class="form-control" name="ipeaantiguoconyuge">
                                          <label class="form-label">¿Ha estado su actual o futuro cónyuge casado anteriormente (civil o en la iglesia)?</label>
                                      </div>
                                  </div>
                                </fieldset>
                                <h3>&ensp;</h3>
                                <fieldset>
                                  <h3>Siguiente</h3>
                                  <button type="button" onclick="window.location='../../pages/forms/indagacion0.php';">Siguiente</buton>
                                </fieldset>
                          </form>
                      </div>
                    </div>
                    <div class="card">
                      <div class="header">
                        <h3>Ingreso de documentación</h3>
                      </div>
                      <div class="body">
                        <form action="indagacion.php" id="frmFileUpload" enctype="multipart/form-data" class="dropzone dz-clickable" method="post" enctype="multipart/form-data">
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

    <!-- JQuery Steps Plugin Js -->
    <script src="../../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="../../plugins/dropzone/dropzone.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../../plugins/autosize/autosize.js"></script>

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
