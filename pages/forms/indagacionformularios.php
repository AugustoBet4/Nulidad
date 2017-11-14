<!DOCTYPE html>
<!-- <?php
  setlocale(LC_ALL,"es_ES");

// VARIABLES DE HISTORIA DE Noviazgo ----------------------------------------
  $iphfmatrimoniodmt= $_POST["iphfmatrimoniodmt"];
  $iphfseparaciondmt= $_POST["iphfseparaciondmt"];

  if (empty($_POST["iphfmatrimoniodmt"])) {
      $iphfmatrimoniodmt = "";
  }else {
      $iphfmatrimoniodmt = $_POST["iphfmatrimoniodmt"];
  }
  if (empty($_POST["iphfseparaciondmt"])) {
      $iphfseparaciondmt = "";
  }else {
      $iphfseparaciondmt = $_POST["iphfseparaciondmt"];
  }




// PRINCIPALES
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
                                <li role="presentation" class="active"><a href="#profile1" data-toggle="tab" aria-expanded="true">Información Básica</a></li>
                                <li role="presentation" class=""><a href="#profile2" data-toggle="tab" aria-expanded="false">Información biográfica</a></li>
                                <li role="presentation" class=""><a href="#profile3" data-toggle="tab" aria-expanded="false">Historia Familiar</a></li>
                                <li role="presentation" class=""><a href="#profile4" data-toggle="tab" aria-expanded="false">Noviazgo y matrimonio</a></li>
                                <li role="presentation" class=""><a href="#profile5" data-toggle="tab" aria-expanded="false">Matrimonios contrídos anteriormente</a></li>
                                <li role="presentation" class=""><a href="#profile6" data-toggle="tab" aria-expanded="false">Separación y divorcio/disolución</a></li>
                                <li role="presentation" class=""><a href="#profile7" data-toggle="tab" aria-expanded="false">Hijos</a></li>
                                <li role="presentation" class=""><a href="#profile8" data-toggle="tab" aria-expanded="false">Estado actual</a></li>
                          </ul>
                            <div class="tab-content">
                                  <div role="tabpanel" class="tab-pane fade active in" id="profile1">
                                    <textarea id="tinymce">
                                      <center><h2>Sección 1</h2></center>
                                      <h3>Parte Demandante:</h3>
                                      <center><h4>YO JURO ANTE DIOS Y MI CONCIENCIA QUE TODA LA INFORMACIÓN
                                      QUE PRESENTO ES COMPLETA Y VERDADERA</h4></center>
                                      <h3>INFORMACIÓN BÁSICA</h3>
                                      <table style="width:100%">
                                        <tr>
                                          <td width="30%" height="30" valign="top">Primer Nombre:<br><?php echo $fanombredemandante ?></td>
                                          <td width="70%" valign="top" colspan="2" align="left">Segundo nombre:<br><?php echo $fanombredemandante ?></td>
                                        </tr>
                                        <tr>
                                          <td width="30%" height="30" valign="top">Apellido Paterno:<br> <?php echo $faarquidiocesis?></td>
                                          <td width="70%" valign="top" colspan="2" align="left">Apellido Materno::<br> <?php echo $fanombreparroquia?></td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="30" valign="top">Dirección:<br> <?php echo $faduracionconvivencia?></td>
                                          <td width="25%" valign="top">Sexo:<br> <?php echo $faconcubinatoprevio?></td>
                                          <td width="25%" valign="top">Ci:<br> <?php echo $faconcubinatioduracion?></td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="30" valign="top">Ciudad:<br> <?php echo $faduracionconvivencia?></td>
                                          <td width="25%" valign="top">Zona:<br> <?php echo $faconcubinatoprevio?></td>
                                          <td width="25%" valign="top">Edad:<br> <?php echo $faconcubinatioduracion?></td>
                                        </tr>
                                        <tr>
                                          <td width="30%" height="30" valign="top">Correo Electrónico:<br><?php echo $fanombredemandante ?></td>
                                          <td width="70%" valign="top" colspan="2" align="left">Ocupación:<br><?php echo $fanombredemandante ?></td>
                                        </tr>
                                        <tr>
                                        <tr>
                                          <th colspan="3" align="left" valign="top">
                                            Favor indique como podemos comunicarnos con Ud. acerca de su proceso:
                                          </th>
                                        </tr>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            Teléfono de casa:
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            Teléfono celular
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            Teléfono de trabajo:
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            ¿Parroquia donde se celebró su matrimonio?
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            ¿Fecha de celebración de su matrimonio?
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            Usted nos autoriza a dejar un mensaje acerca de su caso en:
                                          </td>
                                        </tr>
                                      </table><br><br>

                                    <h3>INFORMACIÓN BIOGRÁFICA:</h3>
                                    <table style="width:100%">
                                      <tr>
                                        <td colspan="3" align="left" valign="top">
                                          Usted nos autoriza a dejar un mensaje acerca de su caso en:
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" align="left" valign="top">
                                          Fecha de nacimiento:
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" align="left" valign="top">
                                          Lugar nacimiento: Ciudad:
                                        </td>
                                      </tr>
                                      <tr>
                                        <td width="50%" height="30" valign="top">Departamento:<br><?php echo $fanombredemandante ?></td>
                                        <td width="50%" valign="top" colspan="2" align="left">Estado:<br><?php echo $fanombredemandante ?></td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" align="left" valign="top">
                                          ¿Recibió el bautismo <b>antes</b> de que su matrimonio se efectuara?
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" align="left" valign="top">
                                          Si es así,¿En qué religión o denominación fue bautizado (a)? CATÓLICO

                                          Si es <b>no</b>, diga de qué iglesia:
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" align="left" valign="top">
                                          Fecha del bautismo:
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" align="left" valign="top">
                                          Parroquia del bautismo:
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" align="left" valign="top">
                                          Diócesis:
                                        </td>
                                      </tr>
                                      <tr>
                                        <td width="50%" height="30" valign="top">Libro:<br> <?php echo $faduracionconvivencia?></td>
                                        <td width="25%" valign="top">Página:<br> <?php echo $faconcubinatoprevio?></td>
                                        <td width="25%" valign="top">Número:<br> <?php echo $faconcubinatioduracion?></td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" align="left" valign="top">
                                          ¿Es usted católico practicante?
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" align="left" valign="top">
                                          ¿Pertenece o frecuenta a algún grupo o movimiento eclésiastico?
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" align="left" valign="top">
                                          Si es sí, ¿diga cuál?:
                                        </td>
                                      </tr>
                                      <tr>
                                        <td width="50%" height="30" valign="top">Parroquia:<br> <?php echo $faduracionconvivencia?></td>
                                        <td width="25%" valign="top">Diócesis:<br> <?php echo $faconcubinatoprevio?></td>
                                        <td width="25%" valign="top">Estado:<br> <?php echo $faconcubinatioduracion?></td>
                                      </tr>


                                    </table>

                                    <h3>PARTE DEMANDADA <font type="Times New Roman"><i>(cónyugue)</i></h3>

                                      <table style="width:100%">
                                        <tr>
                                          <td width="30%" height="30" valign="top">Primer Nombre:<br><?php echo $fanombredemandante ?></td>
                                          <td width="70%" valign="top" colspan="2" align="left">Segundo nombre:<br><?php echo $fanombredemandante ?></td>
                                        </tr>
                                        <tr>
                                          <td width="30%" height="30" valign="top">Apellido Paterno:<br> <?php echo $faarquidiocesis?></td>
                                          <td width="70%" valign="top" colspan="2" align="left">Apellido Materno::<br> <?php echo $fanombreparroquia?></td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="30" valign="top">Dirección:<br> <?php echo $faduracionconvivencia?></td>
                                          <td width="25%" valign="top">Sexo:<br> <?php echo $faconcubinatoprevio?></td>
                                          <td width="25%" valign="top">Ci:<br> <?php echo $faconcubinatioduracion?></td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="30" valign="top">Ciudad:<br> <?php echo $faduracionconvivencia?></td>
                                          <td width="25%" valign="top">Zona:<br> <?php echo $faconcubinatoprevio?></td>
                                          <td width="25%" valign="top">Edad:<br> <?php echo $faconcubinatioduracion?></td>
                                        </tr>
                                        <tr>
                                          <tr>
                                            <td width="50%" height="30" valign="top">Teléfono:<br> <?php echo $faduracionconvivencia?></td>
                                            <td width="25%" valign="top">País:<br> <?php echo $faconcubinatoprevio?></td>
                                            <td width="25%" valign="top">¿Se comunica regularmente con la parte demandada?<br> <?php echo $faconcubinatioduracion?></td>
                                          </tr>
                                          <tr>
                                          <td width="30%" height="30" valign="top">Correo Electrónico:<br><?php echo $fanombredemandante ?></td>
                                          <td width="70%" valign="top" colspan="2" align="left">Ocupación de la parte demandada:<br><?php echo $fanombredemandante ?></td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            Usted nos autoriza a dejar un mensaje acerca de su caso en:
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            Fecha de nacimiento de la parte demandada:
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            Lugar nacimiento: Ciudad:
                                          </td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="30" valign="top">Departamento:<br><?php echo $fanombredemandante ?></td>
                                          <td width="50%" valign="top" colspan="2" align="left">Estado:<br><?php echo $fanombredemandante ?></td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            ¿Fue la parte demandada bautizada antes de casarse con usted?
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            Der ser así,¿En qué religión o denominación fue bautizado (a)? CATÓLICO

                                            Si es <b>no</b>, diga de qué iglesia:
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            Parroquia del bautismo:
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            Diócesis:
                                          </td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="30" valign="top">Libro:<br> <?php echo $faduracionconvivencia?></td>
                                          <td width="25%" valign="top">Página:<br> <?php echo $faconcubinatoprevio?></td>
                                          <td width="25%" valign="top">Número:<br> <?php echo $faconcubinatioduracion?></td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            ¿Es usted católico practicante?
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            ¿Pertenece o frecuenta a algún grupo o movimiento eclésiastico?
                                          </td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            Si es sí, ¿diga cuál?:
                                          </td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="30" valign="top">Parroquia:<br> <?php echo $faduracionconvivencia?></td>
                                          <td width="25%" valign="top">Diócesis:<br> <?php echo $faconcubinatoprevio?></td>
                                          <td width="25%" valign="top">Estado:<br> <?php echo $faconcubinatioduracion?></td>
                                        </tr>
                                        <tr>
                                          <td colspan="3" align="left" valign="top">
                                            <b>Nota importante:</b> se tiene que <u>proveer la dirección completa de la parte Demandada.</u>
                                            Sin esta información el caso no será aceptado. Si se han hecho todos los esfuerzos posibles para localizar la parte Demandada y aún así no puede proveer la dirección completa,
                                            refiérase a la sección 2 y facilite toda la documentación requerida.
                                            El Tribunal también tratará de localizar a la parte Demandada; no obstante, esto podría demorar el caso.
                                          </td>
                                        </tr>


                                      </table>


                                    </textarea>
                                  </div>

                                  <div role="tabpanel" class="tab-pane fade" id="profile2">
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
                                  <div role="tabpanel" class="tab-pane fade" id="profile3">
                                    <textarea id="tinymce">
                                      <table style="width:100%">
                                        <tr>
                                          <td width="100%" height="10" valign="top" colspan="2"><b>Padres</b></td>
                                        </tr>
                                        <tr>
                                          <td width="100%" height="10" valign="top" colspan="2"><b>A) Demandante</b></td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="30" valign="top" colspan="2">¿Sus padres son Católicos?:<?php ?></td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="30" valign="top" colspan="2">¿Sus padres están casados por la Iglesia Católica?:<?php  ?></td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="30" valign="top" colspan="2">¿El matrimonio de sus padres es un matrimonio de toda la vida?:<?php  ?></td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="30" valign="top" colspan="2">Si no es así, ¿cómo ha sido el matrimonio de sus padres?:<?php echo $iphfmatrimoniodmt?></td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="30" valign="top" colspan="2">¿Si sus padres se han separado, que edad tenía usted al momento de la separación?:<?php echo $iphfseparaciondmt?></td>
                                        </tr>
                                        <tr>
                                          <td width="50%" height="30" valign="top" colspan="2">¿Sus padres son católicos practicantes?:<?php  ?></td>
                                        </tr>
                                      </table>
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
