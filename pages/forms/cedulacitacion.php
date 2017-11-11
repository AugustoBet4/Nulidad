<?php
setlocale(LC_ALL,”es_ES”);
$demandante="Ejemplo demandante";
$demandado="Ejemplo demandado";
$matrimonio="LOPEZ-PEREZ";
 ?>
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
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="Buscar caso...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">SEMINARIO</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
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
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i><a href="../../pages/forms/ingreso.html">Cerrar Sesion</a></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li>
                        <a href="pages/forms/indagacion.html">
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
                                <a href="../../pages/forms/indagacion.html">Indagacion Previa</a>
                            </li>
                            <li>
                                <a href="../../pages/forms/introduccion.html">Fase Introductoria</a>
                            </li>
                            <li>
                                <a href="pages/indagacion.html">Fase de Instrucción</a>
                            </li>
                            <li>
                                <a href="pages/indagacion.html">Fase Alegatoria</a>
                            </li>
                            <li class="active">
                                <a href="../forms/sentencia.html">Fase Decisoria</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../../pages/forms/buscador.html">
                            <i class="material-icons">search</i>
                            <span>Buscar Caso</span>
                        </a>
                    </li>
                    <li>
                        <a href="../../pages/nuevo_encargado.html">
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
                <div class="col-lg-24 col-md-24 col-sm-24 col-xs-24">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SENTENCIA
                            </h2>
                        </div>
                        <div class="body">
                          <textarea id="tinymce">
                            <BR>
                            <div align="right"><font face="arial" size=2>Nulidad de matrimonio<br><? echo $matrimonio;?></size></div><br><br>
<font size=5 face="arial"><center><p>CEDULA DE CITACIÓN</p></center><font><br>
<font size=2 face="arial">El vicario Judicial del Arzobispado de La Paz, en conformidad con las prescripciones canónicas,<br>
1507-1512 del Código del Derecho Canónico, cita:</font><br><br>
<font size=2 face="arial">Al(a) Sr.(a).:</font><br><br>
<font size=2 face="arial"><? echo $demandado;?>, para que se presente en esta Vicaria Judicial, el<br>
   día <b>...........</b> de <b>.............</b> a Hrs..........con el fin de imponerse del tramite de nulidad<br>
   de su matrimonio canonico que ha presentado su esposo(a) el(la) Sr.(a) <?php echo $demandante;?> <br>
    ante este Tribunal. El(la) declarante debe presentarse con su cedula de identidad personal.</font>
<br><br><br>
<font size=2 face="arial">La Paz, <?echo strftime("%d de %B de %Y");?></font><br><br>
<br>
<br>
<br>
<br>
<table border="0" width="100%">
<tr>
<td width="50%">
<font size=2 face="arial"><center>NOTARIO ECLESIASIASTICO</center></font>
</td>
<td width="50%">
<font size=2 face="arial"><center>VICARIO JUDICIAL</center></font>
</td>
<tr>
</table>
<h3></h3>
<br>
<br>
<br>
<font size=2 face="arial">Notificado el...............del mes de.............mes...........de <?echo date("Y");?> a Hrs..........</font>
<br>
<br>
<br>
<table border="0" width="100%">
<tr>
<td width="50%">
<font size=2 face="arial"><center>FIRMA DEL NOTIFICADO</center></font>
</td>
<td width="50%">
<font size=2 face="arial"><center>SECRETARIO DE LA VICARIA JUDICIAL</center></font>
</td>
<tr>
</table>
                          </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# TinyMCE -->
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

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Ckeditor -->
    <script src="../../plugins/ckeditor/ckeditor.js"></script>

    <!-- TinyMCE -->
    <script src="../../plugins/tinymce/tinymce.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/editors.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>
