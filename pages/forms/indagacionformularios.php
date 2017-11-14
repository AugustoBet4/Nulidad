<!DOCTYPE html>
<!-- <?php
  setlocale(LC_ALL,"es_ES");
  $fanombredemandante = $_POST["fanombredemandante"];
  $fafechainicio = $_POST["fafechainicio"];
  $fanombredemandado = $_POST["fanombredemandado"];
  $fanombredemandante = $_POST["fanombredemandante"];
  $fadirecciondemandado = $_POST["fadirecciondemandado"];
  $fadirecciondemandante = $_POST["fadirecciondemandante"];
  $fafecha = $_POST["fafecha"];
  $faciudadydepartamento = $_POST["faciudadydepartamento"];
  $faarquidiocesis = $_POST["faarquidiocesis"];
  $fanombreparroquia = $_POST["fanombreparroquia"];
  $faduracionconvivencia = $_POST["faduracionconvivencia"];
  $faconcubinatoprevio  = $_POST["faconcubinatoprevio"];
  $faconcubinatioduracion = $_POST["faconcubinatioduracion"];
  $faduracionnoviazgo = $_POST["faduracionnoviazgo"];
  $faembarazo = $_POST["faembarazo"];
  $fanumhijos = $_POST["fanumhijos"];
  $fadivorcio = $_POST["fadivorcio"];
  $fadivorciofecha = $_POST["fadivorciofecha"];
  $fanomcanon1 = $_POST["fanomcanon1"];
  $fapartecanon1 = $_POST["fapartecanon1"];
  $fanomcanon2 = $_POST["fanomcanon2"];
  $fapartecanon2 = $_POST["fapartecanon2"];
  $fanomcanon3 = $_POST["fanomcanon3"];
  $fapartecanon3 = $_POST["fapartecanon3"];
  $fanomcanon4 = $_POST["fanomcanon4"];
  $fapartecanon4 = $_POST["fapartecanon4"];
  $fanomcanon5 = $_POST["fanomcanon5"];
  $fapartecanon5 = $_POST["fapartecanon5"];
  $fahechos = $_POST["fahechos"];
  $faderechocanon1 = $_POST["faderechocanon1"];
  if (empty($_POST["faderechocanon2"])) {
      $faderechocanon2 = "";
  }else {
      $faderechocanon2 = $_POST["faderechocanon2"];
  }
  if (empty($_POST["faderechocanon3"])) {
      $faderechocanon3 = "";
  }else {
      $faderechocanon3 = $_POST["faderechocanon3"];
  }
  if (empty($_POST["faderechocanon4"])) {
      $faderechocanon4 = "";
  }else {
      $faderechocanon4 = $_POST["faderechocanon4"];
  }
  if (empty($_POST["faderechocanon5"])) {
      $faderechocanon5 = "";
  }else {
      $faderechocanon5 = $_POST["faderechocanon5"];
  }
  $faobscanon1 = $_POST["faobscanon1"];
  if (empty($_POST["faobscanon2"])) {
      $faobscanon2 = "";
  }else {
      $faobscanon2 = $_POST["faobscanon2"];
  }
  if (empty($_POST["faobscanon3"])) {
      $faobscanon3 = "";
  }else {
      $faobscanon3 = $_POST["faobscanon3"];
  }
  if (empty($_POST["faobscanon4"])) {
      $faobscanon4 = "";
  }else {
      $faobscanon4 = $_POST["faobscanon4"];
  }
  if (empty($_POST["faobscanon5"])) {
      $faobscanon5 = "";
  }else {
      $faobscanon5 = $_POST["faobscanon5"];
  }

  $matrimonio = "LOPEZ-PEREZ";
  $fanombrenotario = "Notario 1";
  $facanon = "1030";
?> -->
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Nulidad Matrimonial - Indagación Previa</title>
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

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of POST all themes -->
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
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-tarPOST="#navbar-collapse" aria-expanded="false"></a>
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
                                <a href="../forms/insctruccion.php">Fase de Instrucción</a>
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
                          <h3>Formulario Discusoria</h3>

                          <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Información Básica</a></li>
                                <li role="presentation" class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Información biográfica</a></li>
                                <li role="presentation" class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Historia Familiar</a></li>
                                <li role="presentation" class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Noviazgo y matrimonio</a></li>
                                <li role="presentation" class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Matrimonios contrídos anteriormente</a></li>
                                <li role="presentation" class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Separación y divorcio/disolución</a></li>
                                <li role="presentation" class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Hijos</a></li>
                                <li role="presentation" class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Estado actual</a></li>
                          </ul>
                            <div class="tab-content">
                                  <div role="tabpanel" class="tab-pane fade active in" id="home">
                                    <textarea id="tinymce">
                                      <table style="width:100%">
                                        <tr>
                                          <td width="50%" height="30" valign="top">Primer Nombre:<br><?php echo $fanombredemandante ?></td>
                                          <td width="50%" valign="top">Segundo nombre:<br><?php echo $fanombredemandante ?></td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="30" valign="top">Apellido Paterno:<br><?php echo $fanombredemandante ?></td>
                                          <td width="50%" valign="top">Apellido Materno:<br><?php echo $fanombredemandante ?></td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="30" valign="top">Dirección:<br><?php echo $fadirecciondemandante ?></td>
                                          <td width="50%" valign="top">Dirección de residencia:<br><?php echo $fadirecciondemandado ?></td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="80" valign="top">FECHA DE LA DEMANDA DE LA NULIDAD DEL
                                            MATRIMONIO:<br> <?php echo $fafechainicio?></td>
                                          <td width="50%"><b>EL TRIBUNAL ACEPTO LA CAUSA Y TIENE
                                            JURISDICCIÓN POR :<br>
                                            1. EL M. FUE CELEBRADO EN EL TERRITORIO DEL TRIBUNAL<br>
                                            2. LA PARTE DEMANDADA RESIDE EN EL TERRITORIO DEL
                                            TRIBUNAL<br>
                                            3. LA PARTE DEMANDADA OTORGA EL CONSENTIMIENTO<br>
                                            4. LA MAYORIA DE LAS PRUEBAS ESTÁN DENTRO DEL
                                            TERRITORIO DEL TRIBUNAL</b></td>
                                        </tr>
                                      </table>

                                    </textarea>
                                  </div>
                                  <div role="tabpanel" class="tab-pane fade" id="profile">
                                    <textarea id="tinymce">
                                        <BR>
                                        <center><font color="#A3A3A3" face="tahoma" size="4"><b>INTRODUCTORIA - DOCUMENTO 3</b></font></center>
                                        <center><font color="#A3A3A3" face="tahoma" size="3">REGISTRO DE LA DEMANDA</font></center><br>
                                        <center><font color="#000000" face="tahoma" size="4"><b>NULIDAD DE MATRIMONIO</b></font></center>
                                        <center><font color="#000000" face="tahoma" size="4"><b><?php echo $matrimonio;?></b></font></center><br><br><br>
                                        <font color="#000000" face="times new roman" size="4">AL TRIBUNAL ECLESIÁSTICO DE ...</font><br><br>
                                        <font size="4" face="times new roman">
                                        <?php echo $fanombrenotario?>, en nombre y representación de <?php echo $fanombredemandate?>, en la causa de nulidad del matrimonio canónico que
                                        contrajo la misma con <?php echo $fanombredemandado?>, ante este Venerable Tribunal, como mejor proceda en derecho
                                        comparezco y DIGO:
                                        Que cumplimentando lo dispuesto por este Tribunal, esta parte, al amparo de lo previsto en el canon
                                        <?php echo $facanon?> vigente presenta ESCRITO DE DEFENSA, formulando las siguientes.
                                        <br><br>
                                                                                </font><br><br>
                                    </textarea>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
        </div>
    </section>

    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="../../plugins/node-waves/waves.js"></script>
    <script src="../../plugins/tinymce/tinymce.js"></script>
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/editors.js"></script>
    <script src="../../js/demo.js"></script>
</body>
</html>
