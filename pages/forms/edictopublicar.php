<?php
setlocale(LC_ALL,”es_ES”);
$demandante="Ejemplo demandante";
$notario="Ejemplo notario";
$notarioactuario="Ejemplo notario actuario";
$notarioactuario="Ejemplo notario";
$cursor="Ejemplo cursor";
$demandado="Ejemplo demandado";
$parroquia="Apostol Santiago";
$matrimonio="LOPEZ-PEREZ";
$canones="1507-1508";
$fechamatrimonio="30 de febrero de 2010";
$ciudaddemandado="La Paz";
$calledemandado="8";
$numerodemandado="4567";
$callearzobispado="10";
$numeroarzobispado="6";
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Introducción - Nulidad Matrimonial</title>
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />
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
            <p>Porfavor espera...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="Buscar caso...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">NULIDAD MATRIMONIAL</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                </ul>
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
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i><a href="../../pages/forms/ingreso.html">Cerrar Sesion</a></a></li>
                        </ul>
                    </div>
                </div>
            </div>
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
                            <li class="active">
                                <a href="../../pages/forms/introduccion.html">Fase Introductoria</a>
                            </li>
                            <li>
                                <a href="pages/indagacion.html">Fase de Instrucción</a>
                            </li>
                            <li>
                                <a href="pages/indagacion.html">Fase Alegatoria</a>
                            </li>
                            <li >
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
        </aside>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-24 col-md-24 col-sm-24 col-xs-24">
                    <div class="card">
                        <div class="header">
                            <h2>EDICTO A PUBLICAR</h2>
                        </div>
                        <div class="body">
                          <textarea id="tinymce">
                            <BR>
<center><font color="#A3A3A3" face="tahoma" size="4"><b>INTRODUCTORIA - DOCUMENTOS 1</b></font></center>
<center><font color="#A3A3A3" face="tahoma" size="3">EDICTO</font></center><br>
<center><font color="#000000" face="tahoma" size="4"><b>Nulidad de Matrimonio</b></font></center>
<center><font color="#000000" face="tahoma" size="4"><b><?php echo $matrimonio;?></b></font></center><br><br><br>
<font color="#000000" face="times new roman" size="4"><b>EDICTO A PUBLICAR</b></font><br><br><br>
<font color="#000000" face="times new roman" size="4">DECRETO:En La Paz,  a <?echo strftime("%d de %B de %Y");?></font><br><br>
<font size="4" face="times new roman">
Por el presente se cita y emplaza a <?PHP echo $demandado;?>, cuyo paradero se ignora, para que el día primero del próximo mes de..........comparezca en este TRIBUNAL ECLESIASTICO METROPOLITANO DE LA PAZ a personarse en forma para contestar al escrito de demanda de nulidad de matrimonio interpuesto por su esposo(a) <?php echo $demandante?>, con apercibimiento de los perjuicios que puedan irrogársele de no comparecer por si o por su procurador y abogados legítimamente constituidos.
</font><br>
<font size="4" face="times new roman">
  Se ruega a cuantos pudieran saber del paradero de <?php echo $demandado;?>, procuren hacerle llegar esta citación.
</font><br><br><br>
<font color="#000000" face="times new roman" size="4">En La Paz,  a <?echo strftime("%d de %B de %Y");?></font><br><br><br><br><br><br><br><br><br>
<center><font face="times new roman" size="4">Pbro. Dr. Roberto Boceta Fernández</font></center>
<center><font face="times new roman" size="4">VICARIO JUDICIAL</font></center><br><br><br>
<font face="times new roman" size="4">Sello</font><br><br><br><br><br><br><br>
<font face="times new roman" size="4"><?php echo $notarioactuario;?>, Notario Actuario</font><br><br><br><br>
<font face="times new roman" size="4">DILIGENCIA.—La pongo yo, el Cursor del Tribunal Eclesiástico, para hacer constar que con esta fecha ... de ... de ... y a las ... horas fijé en el Tablón de Anuncios de este Tribunal, habiendo permanecido en el mismo hasta el día de la fecha; asimismo entrego tres números del Diario Jornada de los días ... en que dicho edicto se insertó, cumpliendo lo mandado.</font><br><br><br>
<font face="times new roman" size="4"><?php echo $cursor;?>, Cursor</font><br><br>
                          </textarea>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </section>
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="../../plugins/node-waves/waves.js"></script>
    <script src="../../plugins/ckeditor/ckeditor.js"></script>
    <script src="../../plugins/tinymce/tinymce.js"></script>
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/editors.js"></script>
    <script src="../../js/demo.js"></script>
</body>
</html>
