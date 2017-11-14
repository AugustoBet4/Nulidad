<!DOCTYPE html>
<?php
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
  $fechaactual = date("d")."/".date("m")."/".date("Y");
  $matrimonio = "LOPEZ-PEREZ";
  $fanombrenotario = "Notario 1";
  $facanon = "1030";

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
                                <li role="presentation" class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Imprimir Formulario Anterior</a></li>
                                <li role="presentation" class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Formulario Discusoria</a></li>
                          </ul>
                            <div class="tab-content">
                                  <div role="tabpanel" class="tab-pane fade active in" id="home">
                                    <textarea id="tinymce">
                                      <br>
                                      <center><font color="#000000" face="tahoma" size="4"><b>ESCRITO DE OBSERVACIONES DEL DEFENSOR DEL VINCULLO</b></font></center>
                                      <center><font color="#000000" face="tahoma" size="4"><b><?php echo $matrimonio;?></b></font></center><br><br><br>
                                      <font size="4" face="times new roman">
                                        Pbro. Lic. <b>FlorencioFlores Paredes, Defensor del Vínculo</b>, en la causa de nulidad que arriba se indica, al
                                        Tribunal Eclesiástico en cumplimiento de su Ministerio presenta el siguiente escrito de observaciones:<br><br><br>
                                        <b>I. Resumen de los hechos</b><br><br>
                                      </font>
                                        <center>
                                          <table style="width:100%">
                                            <tr>
                                              <td width="50%" height="30" valign="top">DEMANDANTE:<br><?php echo $fanombredemandante ?></td>
                                              <td width="50%" valign="top">PARTE DEMANDADA:<br><?php echo $fanombredemandante ?></td>
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
                                          <br><br>
                                          <table style="width:100%">
                                            <tr>
                                              <th colspan="3" align="left" valign="top"><b>El matrimonio se celebró en la fecha y el lugar siguiente:</b></th>
                                            </tr>
                                            <tr>
                                              <td width="30%" height="30" valign="top">Fecha:<br> <?php echo $fafecha?></td>
                                              <th width="70%" valign="top" colspan="2" align="left">Ciudad y Departamento:<br> <?php echo $faciudadydepartamento?></th>
                                            </tr>
                                            <tr>
                                              <td width="30%" height="30" valign="top">Arquidiócesis/Diócesis<br> <?php echo $faarquidiocesis?></td>
                                              <th width="70%" valign="top" colspan="2" align="left">Nombre de la Parroquia:<br> <?php echo $fanombreparroquia?></th>
                                            </tr>
                                            <tr>
                                              <td width="50%" height="30" valign="top">DURACIÓN CONVIVENCIA MATRIMONIO:<br> <?php echo $faduracionconvivencia?></td>
                                              <td width="25%" valign="top">CONCUBINATO PREVIO:<br> <?php echo $faconcubinatoprevio?></td>
                                              <td width="25%" valign="top">DURACIÓN:<br> <?php echo $faconcubinatioduracion?></td>
                                            </tr>
                                            <tr>
                                              <td width="30%" height="30" valign="top">DURACIÓN DEL NOVIAZGO:<br> <?php echo $faduracionnoviazgo?></td>
                                              <th width="70%" valign="top" colspan="2" align="left">EMBARAZO PREVIO:<br> <?php echo $faembarazo?></th>
                                            </tr>
                                            <tr>
                                              <td width="50%" height="30" valign="top">Nº HIJOS:<br> <?php echo $fanumhijos?></td>
                                              <td width="25%" valign="top">DIVORCIO:<br> <?php echo $fadivorcio?></td>
                                              <td width="25%" valign="top">Fecha:<br> <?php echo $fadivorciofecha?></td>
                                            </tr>
                                          </table>
                                          <br><br><br>
                                          <table style="width:100%">
                                            <tr>
                                              <th colspan="3" align="left" valign="top"><b>El Vicario Judicial emitió el decreto judicial determinando la fórmula de dudas con fecha del día del mes del
                                              año</b></th>
                                            </tr>
                                            <tr>
                                              <td width="70%" height="30" valign="top">1.- Cánon:<br> <?php echo $fanomcanon1?></td>
                                              <td width="30%" valign="top" align="left">De parte del:<br> <?php echo $fapartecanon1?></td>
                                            </tr>
                                            <tr>
                                              <td width="70%" height="30" valign="top">2.- Cánon:<br> <?php echo $fanomcanon2?></td>
                                              <td width="30%" valign="top" align="left">De parte del:<br> <?php echo $fapartecanon2?></td>
                                            </tr>
                                            <tr>
                                              <td width="70%" height="30" valign="top">3.- Cánon:<br> <?php echo $fanomcanon3?></td>
                                              <td width="30%" valign="top" align="left">De parte del:<br> <?php echo $fapartecanon3?></td>
                                            </tr>
                                            <tr>
                                              <td width="70%" height="30" valign="top">4.- Cánon:<br> <?php echo $fanomcanon4?></td>
                                              <td width="30%" valign="top" align="left">De parte del:<br> <?php echo $fapartecanon4?></td>
                                            </tr>
                                            <tr>
                                              <td width="70%" height="30" valign="top">5.- Cánon:<br> <?php echo $fanomcanon5?></td>
                                              <td width="30%" valign="top" align="left">De parte del:<br> <?php echo $fapartecanon5?></td>
                                            </tr>
                                            <tr>
                                              <th colspan="3" align="left" valign="top"><b>La parte demandada, Sr o Sra , fue citado el mediante
                                                La parte demandada respondió a la citación. Indica que va a participar en el proceso. Expresa que está de
                                                acuerdo con el proceso de nulidad.<br> La parte demandada fue declarada ausente. Por medio del decreto de fecha</b></th>
                                            </tr>
                                            <tr>
                                              <th colspan="3" align="left" valign="top" height="100"><b><u>LOS HECHOS:</u></b><br>
                                                <br> <?php echo $fahechos?>
                                              </th>
                                            </tr>
                                          </table>
                                          <br>
                                        </center>
                                        <font size="4" face="times new roman">
                                          <b>II. El derecho</b><br><br>
                                        </font>
                                        <center>
                                          <table style="width:100%">
                                            <tr>
                                              <td align="left" valign="top" height="30"><b>Sin entrar en la explicación de la doctrina aplicable a este caso, suficientemente conocida, queremos recordar
                                                únicamente algunas cuestiones sobre las causales:</b></td>
                                            </tr>
                                            <tr>
                                              <td align="left" valign="top" height="100">1. Cánon:
                                              <br> <?php echo $faderechocanon1?></td>
                                            </tr>
                                            <tr>
                                              <td align="left" valign="top" height="100">2. Cánon:
                                              <br> <?php echo $faderechocanon2?></td>
                                            </tr>
                                            <tr>
                                              <td align="left" valign="top" height="100">3. Cánon:
                                              <br> <?php echo $faderechocanon3?></td>
                                            </tr>
                                            <tr>
                                              <td align="left" valign="top" height="100">4. Cánon:
                                              <br> <?php echo $faderechocanon4?></td>
                                            </tr>
                                            <tr>
                                              <td align="left" valign="top" height="100">5. Cánon:
                                              <br> <?php echo $faderechocanon5?></td>
                                            </tr>
                                          </table>
                                        </center>
                                        <font size="4" face="times new roman">
                                          <b>III. Las Observaciones</b><br><br>
                                        </font>
                                        <center>
                                          <table style="width:100%">
                                            <tr>
                                              <td align="left" valign="top" height="20">1. Cánon:</td>
                                            </tr>
                                            <tr>
                                              <td align="left" valign="top" height="100"><?php echo $faobscanon1?></td>
                                            </tr>
                                            <tr>
                                              <td align="left" valign="top" height="20">2. Cánon:</td>
                                            </tr>
                                            <tr>
                                              <td align="left" valign="top" height="100"><?php echo $faobscanon2?></td>
                                            </tr>
                                            <tr>
                                              <td align="left" valign="top" height="20">3. Cánon:</td>
                                            </tr>
                                            <tr>
                                              <td align="left" valign="top" height="100"><?php echo $faobscanon3?></td>
                                            </tr>
                                            <tr>
                                              <td align="left" valign="top" height="20">4. Cánon:</td>
                                            </tr>
                                            <tr>
                                              <td align="left" valign="top" height="100"><?php echo $faobscanon4?></td>
                                            </tr>
                                            <tr>
                                              <td align="left" valign="top" height="20">5. Cánon:</td>
                                            </tr>
                                            <tr>
                                              <td align="left" valign="top" height="100"><?php echo $faobscanon5?></td>
                                            </tr>
                                          </table>
                                        </center>
                                        <br><br><br><br><br>
                                        <table style="width:100%">
                                          <tr>
                                            <td align="left" valign="bottom" height="100" width="50%">Firma</td>
                                            <td align="left" valign="bottom" height="100">
                                              <font size="5" face="times new roman">
                                                <b><?php echo $fechaactual?></b><br>
                                              </font>
                                              <br>Fecha</td>
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
                                        ALEGACIONES I. RESUMEN DE LOS HECHOS<br>
                                        PRIMERO.—Nos remitimos al escrito de demanda en cuanto a la detallada descripción de los hechos,
                                        ya expuestos en su momento.<br>
                                        SEGUNDO.—La fórmula de dudas quedó fijada en su día en los siguientes términos: «SI CONSTA
                                        DE LA NULIDAD DEL MATRIMONIO, EN ESTE CASO, POR EL CAPÍTULO DE MIEDO
                                        (TEMOR REVERENCIAL) SUFRIDO POR LA ESPOSA Y, SUBSIDIARIAMENTE, POR EL DE
                                        DEFECTO DE LIBERTAD INTERNA PARA CONTRAER, PADECIDO POR LA MISMA».
                                        TERCERO.—A través de la prueba practicada, creemos que han quedado sobradamente cons- tatados
                                        los hechos que sirvieron de base a la demanda. Las declaraciones de la propia actora coinciden
                                        sustancialmente y de forma coherente con la de los demás testigos, en cada uno de los aspectos
                                        esenciales, señalados en la demanda y que ahora de forma sintética se trata de contrastar con el
                                        resultado de la prueba.<br><br>
                                        A. CIRCUNSTANCIAS FAMILIARES Y PERSONALES DE LA CONTRAYENTE<br><br>
                                        N. N., es la hija menor de un funcionario, «asesor laboral de varios colegios de religiosos», y de una
                                        industrial, al frente de establecimientos comerciales, abiertos al público en esta ciudad. De- clara el
                                        padre de la actora: «Mi esposa se dedica por completo a estas tiendas».<br><br>
                                        1) EDUCACIÓN TRADICIONAL Y SEVERA:<br><br>
                                        Manifiesta la esposa actora: «Hemos recibido una educación tradicional y más bien severa». Declara el
                                        padre: «Yo he pretendido educar a mis hijos según los criterios con que a mí me educaron». Y lo
                                        mismo dice la madre: «Y fue educada con criterios bastante rigurosos y bajo los mismos criterios tanto
                                        su padre como yo hemos tratado de educar a nuestra hija N. dada la gran libertad de costumbres que
                                        hoy existe».<br>
                                        Los testigos corroboran unánimente lo declarado por los padres: «Criterios rígidos y tradicionales ...
                                        Criterios religiosos y rígidos ..., educación más que tradicional, fue un poco reaccionaria
                                        ... Esa educación de sus padres fue completada con una educación religiosa en el Colegio de ...».
                                        Ese tipo de educación originó en la demandante un respeto y temor excesivos hacia sus padres, que se
                                        exteriorizaba en una total falta de confianza, especialmente en «los problemas propios de la
                                        adolescencia», agravada por el distanciamiento y por las ausencias de los padres absorbidos
                                        por obligaciones laborales.<br><br>
                                        2) FALTA DE CONFIANZA Y TEMOR A SUS PADRES<br><br>
                                        Ha confesado la actora: «Nunca he tenido una confianza plena con mis padres ...». El padre ha
                                        manifestado que no tenía confianza «para contarme problemas más profundos o serios. Lo mismo
                                        ocurría con su madre ...».<br>
                                        Igualmente declaran todos los testigos.<br>
                                        Ese temor alcanzaba su punto álgido en la demandante, cuando rozaba cuestiones que pudieran alterar a
                                        su madre, que padecía depresiones, crisis nerviosas.<br><br>
                                        3) TEMOR A ALTERAR A LA MADRE (DEPRESIVA, PROPENSA A CRISIS NERVIOSAS) Ha
                                        dicho la actora en su examen judicial: «Mi madre ha tenido crisis nerviosas y depresiones con bastante
                                        frecuencia. Ya a la edad de diez años me advirtió a mí, juntamente con mis hermanos, nuestro padre
                                        que debíamos tener mucho cuidado, para no dar disgustos a mi madre, pues la podían afectar en sus
                                        crisis nerviosas y depresiones». El padre lo corrobora: «Estas alteraciones eran conocidas de mis hijos
                                        y yo también les había advertido de que no dieran ocasión a su madre de pasar por situaciones
                                        familiares difíciles, etc. De alguna manera ha influido en la educación de N (actora) esta preocupación
                                        nerviosa de su madre».Y lo mismo la madre: «N. (actora) siempre ha conocido este temperamento mío
                                        y el modo de proceder».<br>
                                        Los testigos declaran acerca de los padecimientos de la madre y de la advertencia que hizo el padre a
                                        los hijos: «Temperamento muy impresionable. Ha influido este modo de ser de mi suegra en la vida
                                        familiar y en la educación de N.».<br><br>
                                        «Mi madre sufría depresiones nerviosas .., mi padre nos tenía dicho que evitáramos cualquier tipo de
                                        disgustos». «Mi madre padecía crisis nerviosas y depresiones y este modo de ser de mi madre influyó
                                        en mi hermana y en todos nosotros».<br>
                                        Esas circunstancias familiares habrían de influir muy especialmente en la hoy actora que, aunque
                                        contaba 18 años, era infantil, inmadura, mala estudiante de 1.º de BUP en un colegio religioso, y por
                                        tanto sin posibilidades de asumir decisiones de tanta responsabilidad como el fundar una familia.<br><br>
                                        4) INMADUREZ DE LA CONTRAYENTE<br><br>
                                        La esposa demandante ha reconocido que sus padres ejercieron sobre ella un control excesivo, con
                                        muchos castigos, incluso físicos..., le exigían absoluta sumisión, era muy influenciable, la tenían
                                        siempre en el hogar paterno.<br>
                                        El padre ha declarado que estaba muy vigilada y protegida. No tenía autorización para salir sola por la
                                        noche. Absoluta falta de independencia psíquica y económica, porque no se fiaban de ella.
                                        Todos los testigos son coincidentes en lo declarado por la esposa y los padres:. «Era inmadura “cría...
                                        que a los dieciocho años todavía iba al colegio... era bastante cría e ingenua... inmadura y como si
                                        tuviera catorce o quince años” “emotivamente descompensada”, no era capaz de tomar decisiones...
                                        Dependía de los padres en todos los niveles».<br><br>
                                        B. RELACIONES PREMATRIMONIALES<br><br>
                                        Las relaciones que entabló la demandante con N., demandado, no pueden calificarse como noviazgo
                                        formal, puesto que nunca pensó en el matrimonio: «Yo nunca me consideré novia formal»,
                                        «no estaba enamorada de él ... nunca pensé en que la relación con N. desembarcara en el matrimonio».
                                        Todos los testigos lo adveran: «Me enteré de esta amistad por mi otra hija y le recriminamos
                                        fuertemente su conducta. Nunca pensé que este trato de amistad con N, llegara a ocasionar el embarazo
                                        de mi hija; ... lo recriminamos fuertemente; ... no se puede decir que hubiera noviazgo ... N. nunca
                                        estuvo enamorada de N. ... creo que no pensaban casarse y menos inmediatamente.. eran relaciones
                                        pasajeras ... más era una amistad que un noviazgo ..., nunca le vi enamorada», «yo creo que no se
                                        hubieran casado N. y N., si no hubiera sido por el embarazo».<br><br>

                                        C. REACCIÓN DE LA DEMANDANTE ANTE EL EMBARAZO<br><br>
                                        La reacción de N. fue de profunda angustia, vergüenza, temor y conmoción psíquica que la sumieron
                                        en un estado de depresión y de inhibición que culminó vertiginosamente en un matrimonio que
                                        decidieron por ella sus familiares.<br>
                                        Puede darse por absolutamente probado cuanto se afirma al respecto en el escrito de demanda. Ella ha
                                        manifestado: «Tenía un trauma muy grande..., sentía no sólo temor sino un gran terror pensando que
                                        tenía que comunicárselo a mis padres, ... aunque yo nunca estuve de acuerdo ni lo estoy actualmente
                                        con el aborto, pensé abortar por el miedo y terror que me suponía el comunicar
                                        el hecho del embarazo a mis padres».<br>
                                        La inmadurez y confusión de la demandante en el momento en que debería haber decidido el
                                        matrimonio se muestra patente en la respuesta que da ante la pregunta de oficio, sobre los medios que
                                        puso para conocer el modo de abortar. La respuesta, increíble para una persona mínimamente madura
                                        es: «Mi amiga N. y yo nos acercamos al barrio chino para intentar conocer alguna persona que nos
                                        iniciara en algún medio para abortar ... A continuación tratamos de localizar a mi hermano N. pero
                                        tampoco le encontramos. Aparte de esa confusión, la inhibición más absoluta hizo presa de N. («nos
                                        dieron como solución el matrimonio como única alternativa... yo me quedé callada y aunque no
                                        aceptaba el matrimonio no supe reaccionar»). En consecuencia, se puso en manos de su hermana N. y
                                        del que hoy es su cuñado, N., que le llevaron al matrimonio, convirtiéndole en espectadora de
                                        decisiones ajenas («porque iban a dar la noticia del embarazo a mis padres y yo sentía gran terror ...»).
                                        El padre no ha dudado en afirmar: «... mi hija estaba viviendo en la casa de un hermano de N. ... creo
                                        que esta decisión de N. fue un acierto porque yo no sé qué hubiera hecho con mi hija al darme la
                                        noticia del embarazo».<br>
                                        Los testigos han declarado: «Entre todos la obligamos a contraer matrimonio, o mejor dicho, le
                                        dábamos como única salida el matrimonio», «Ella se dejó llevar porque estaba avergonzada por la falta
                                        que había cometido y por el sufrimiento de sus padres y familiares». No se le dio opción ..., «La llevé a
                                        casa de mi hermano y mi cuñada donde estuvo tres días avergonzada, confusa y teme- rosa. Sus padres
                                        no le buscaron y ella únicamente recibía las noticias de ellos que yo le daba ..., mi primera reacción fue
                                        violenta y de reproche», «entre toda la familia le coaccionamos», «la veía muy temerosa y sin saber
                                        que hacer; no hablaba casi, no hacía más que llorar, y yo nunca pensé que se casaba libremente ...»,
                                        «entre mi marido y yo decidimos que no fuera a casa para evitar el choque con mis padres ..., buscó
                                        refugio en mi hermana N. y en su entonces novio, N. A mí me es- tuvo buscando ... pero no me
                                        encontró».<br><br>

                                        D. REACCIÓN DE LOS PADRES<br><br>
                                        La reacción de los padres fue violenta y las amenazas, sobre todo implícitas, pero también ex- presas
                                        mediante gestos como, por ejemplo, omisiones y silencios, que a veces son más significativos que las
                                        palabras y amenazas e insultos a través de terceras personas. La esposa declara que temió la reacción de
                                        su padre: «Yo notaba en su mirada, en sus gestos y en la forma de hablar, la indignación que tenía. En
                                        ese momento me dijo muy serio qué has pensado, y yo, con mucho miedo, le dije que casarme. Quiero
                                        aclarar que no hubo amenazas expresas»). Se sobreentiende que en el contexto «expresas» equivale a
                                        «de palabra en ese momento». Pues aparte de esos gestos, no fueron menos explícitos el silencio de la
                                        madre («me hablaba lo imprescindible y se le veía fría e indignada») y otras exteriorizaciones que
                                        constan en la prueba practicada.<br>
                                        El padre declara cómo recibió la noticia del embarazo: «Para nosotros fue un derrumbamiento moral y
                                        nos encontrábamos totalmente hundidos», «no dejé de recriminarla... me pedía perdón llorando», «su
                                        madre no quería hablarle... enseguida se echaba a llorar...».<br>
                                        La madre abunda en lo manifestado por su esposo: «no hablaba normalmente con ella..., y era superior
                                        a mis fuerzas tratarle con normalidad».<br>
                                        Los testigos hablan de la reacción de los padres: «reaccionaron muy mal, y, aunque no estaba presente,
                                        le insultaron y amenazaron ..., reaccionaron muy violentamente con insultos y amenazas, ... mi madre
                                        casi no quería mirarle...».<br><br>

                                        E. CELEBRACIÓN OBLIGADA Y PRECIPITADA DE LA BODA<br><br>
                                        De la falta de libertad de N. dan prueba suficiente también los testimonios aportados que coinciden con
                                        las respuestas de la demandante: fue obligada a un matrimonio que rechazaba.<br>
                                        La actora tuvo que aceptar el matrimonio: «Yo con mucho miedo, le dije que casarme», «la actitud mía
                                        en esos días fue de tristeza y de preocupación, y la de mis padres y familiares fue de frialdad e
                                        indignación..., a la vez que de vergüenza...» «mi resistencia a casarme», «porque ya estaba todo
                                        preparado».<br>
                                        Declara el padre de la actora que ésta no fue libremente al matrimonio: «Creo que no quiso casarse y
                                        por lo tanto no fue libremente al matrimonio», «su hermana N. y su entonces novio N. le
                                        predispusieron para que al presentarse ante nosotros ya nos diera garantías de que iba a casarse», «más
                                        triste a medida que se acercaba el día de la boda».<br>
                                        La madre resalta la rapidez con que se llevó la preparación del matrimonio: «A nosotros nos dieron la
                                        noticia del embarazo el día ... de ..., y la boda se celebró el día ... de ...».<br>
                                        El cuñado y la hermana de la actora han manifestado en el juicio: «Entre todos le obligamos a contraer
                                        matrimonio ...» «Ella se dejó llevar porque estaba avergonzada... y por el sufrimiento de sus padres y
                                        familiares. No se le dio opción ...», «Después de la conversación entre N. y su padre, éste le obligó a
                                        casarse»... «ella dijo que casarse, porque ya iba aleccionada por N. y por mí para que dijera eso; la
                                        decisión final la tomó después de hablar con mi padre, pero ella iba ya segura de lo que iba a hacer por
                                        lo que N. y yo le habíamos dicho; ella aceptó nuestras sugerencias pero pienso que no de buen grado,
                                        porque se mostraba muy triste».<br><br>

                                        F. VICISITUDES POSTERIORES DEL MATRIMONIO<br><br>
                                        Por último, resulta probado que desde el primer momento la desavenencia conyugal fue absoluta y que
                                        la convivencia cesó efectivamente antes de un año después de celebrado el matrimonio.<br><br><br>

                                        II. IN IURE<br><br>
                                        4. El miedo como causa de nulidad matrimonial<br><br>
                                        El c. 1103 establece la invalidez del consentimiento prestado por violencia o por miedo siempre que
                                        reúna los requisitos de gravedad exterioridad e indeclinabilidad.
                                        Prescindiendo de otros aspectos más colaterales la cuestión podría centrarse en el análisis de esos
                                        requisitos en el supuesto que nos ocupa.<br><br>
                                        a) Exterioridad, en el sentido de que la coacción moral, de la que proviene, consista en una actuación
                                        «libre» de alguna persona distinta de la que padece el miedo, aunque la causa externa puede darse en
                                        los casos de miedo «ambiental» y de «sospecha» de males. Hay casos en que la simple «invitación»
                                        puede alcanzar el valor de una «amenaza implícita» siempre que venga puesta en relación con una
                                        particular situación objetiva. Es más, en nuestro caso no debe confundirse amenaza «expresa» con
                                        amenaza que se exterioriza en palabras directas. Le negativa a aceptar el matrimonio expondría
                                        indudablemente a determinados males graves que luego se concretarán. Pero es que además el metum
                                        agens, el padre en este caso, se valió de intermediarios para amedrentar durante tres días a su hija que
                                        se hallaba en un medio extraño.<br>
                                        En efecto, las noticias que la demandante recibía eran alarmantes y la propia ausencia de su padre
                                        durante tan angustiosos días era de por sí más explícita que las palabras. Ni siquiera cedió la presión
                                        cuando se doblegó la voluntad de la hija, que fue humillada, avergonzada por el trato de su familia,
                                        especialmente el silencio de la madre que no era capaz de tratarle normalmente (cf. Víctor REINA, «La
                                        exterioridad del miedo en el consentimiento coaccionado», en RJC, n.º 2, 1981; GRA- ZIANI,
                                        «Appunti sul requisito della extrinsicità del metus», Il Dir. Eccl. 1961, II, 239; GIACCHI, Il consenso
                                        nel matrimonio canonico, Milano, 1968, 173; R.R. Dec. , vol. IV, 217, coram Prior, y 267, coram Lega;
                                        vol. XXVI, 782, coram Manucci; vol. LVIII, 956, coram. Lefebvre; vol. XXIX, 802, coram Mattioli).
                                        Para ser más explícitos en relación con la exterioridad, conviene centrar el examen de la cuestión de la
                                        antecedencia (evidente en nuestro caso, puesto que el matrimonio se celebró por miedo antecedente y
                                        con miedo concomitante) y de sus dos correlatos: la aversión y la perduración del miedo.<br>
                                        Respecto de la aversión es claro que lo decisivo es la aversio in matrimonium (hacia este matrimonio
                                        celebrado en estas circunstancias): en nuestro supuesto, el matrimonio se aborrecía porque no entraba
                                        en los planes vitales de la actora contraerlo, por no tener siquiera planes definidos, no estar enamorada,
                                        no mantener relaciones formales de noviazgo.<br>
                                        Tampoco contrajo la esposa como consecuencia directa del embarazo, es decir, no como consecuencia
                                        de una decisión suya, sino como consecuencia directa de una decisión de otros, principalmente de su
                                        padre, de su hermana y del que hoy es su cuñado que sirvió de intermediario, como está profusamente
                                        demostrado en las declaraciones.<br>
                                        Respecto de la perduración del miedo, y aunque demostrada la coacción inicial se estima que subsiste
                                        virtualmente y que el amenazado obra bajo su influjo, en el presente caso la presión continuó en los
                                        breves días que transcurrieron hasta la precipitada boda. Boda que además se precipitó, precisamente,
                                        para no dar opción a la demandante, que no obstante exteriorizó con su tristeza, incluso el día de su
                                        boda, la conmoción que experimentaba.<br>
                                        b) Gravedad. Con una gravedad «subjetiva» (gravedad del mismo miedo) a la que corresponde una
                                        gravedad «objetiva» (gravedad de la coacción productora del miedo) al menos «relativa» (gravedad
                                        para el paciente). Es grave el mal que puede causar una intensa conmoción del ánimo, que basta que
                                        sea relativamente grave. De ahí que la jurisprudencia tome en cuenta la edad (aquí 18 años aunque
                                        todos coinciden en calificarle de «cría de catorce o quince años) sexo (aquí femenino), temperamento
                                        (aquí influenciable, sumiso, sensible, inmaduro) y demás características personales de la persona que
                                        sufre el mal (hija menor, obsesionada por el respeto a su padre y las depresiones de su madre que no
                                        quiere agravar, estudiante de 1.º de BUP, sin posibilidades profesionales o económicas, etc.).
                                        ¿Cuál fue en concreto el mal temido en el caso presente? De la prueba practicada se deduce con
                                        claridad que tuvo una triple vertiente: una moral que puede sintetizarse en la expresión clásica de
                                        indignatio parentum; otra material: verse echada de casa y tener que pechar sin ayuda familiar alguna
                                        con la situación de madre soltera; otra psíquica, la obsesión de alterar los nervios de la madre.
                                        c) Indeclinabilidad, es decir, para librarse del cual alguien se vea obligado a elegir el matrimonio. Las
                                        circunstancias aquí fueron claras: la reacción y las amenazas implícitas y expresas a través de
                                        intermediarios y de gestos y actitudes distintos a las palabras no dejaron aquí otra alternativa
                                        moralmente posible que el matrimonio.<br>
                                        Por si estuviera poco patente, la paciente intentó para evadir el mal, otros males peores que no alcanzó
                                        debido a su confusión de inmadurez.<br><br><br>

                                        5. El defecto de libertad interna como causa subsidiaria<br><br>
                                        De cuanto llevamos dicho se estima suficientemente probada la existencia de miedo invalidante, a tenor
                                        del c. 1103, pero es que la conmoción psíquica producida en la actora, como consecuencia del
                                        embarazo y de las circunstancias concomitantes, ocasionaron una falta de libertad interna reactiva,
                                        suficiente por sí sola para invalidar el matrimonio, de acuerdo con lo previsto en los cc. 1057 y 1095
                                        (vid. ANTONIO REINA, La incidencia de las perturbaciones psíquicas en el consentimiento
                                        matrimonial, 1979, 53-112). Hablamos de defecto de libertad interna no como signo externo de la
                                        existencia del miedo, sino como capítulo distinto del miedo, pero subsidiario de éste.
                                        De la prueba practicada se deduce la situación de depresión profunda que se produjo en la de-
                                        mandante, como consecuencia de la conmoción psíquica que el embarazo y las demás circunstancias le
                                        ocasionaron.<br>
                                        En esa situación reactiva, que se produjo durante los escasos días que transcurrieron desde el
                                        conocimiento del embarazo hasta la boda, la paciente demostró síntomas de un profundo trastorno
                                        mental transitorio, que no siempre exige tratamiento psiquiátrico o sentido «manicomial» para ex-
                                        tender su virtualidad.<br>
                                        De hecho en la prueba practicada pueden detectarse los siguientes síntomas que no se compadecen con
                                        la necesaria libertad interna para contraer: inestabilidad emocional que se traducía en continuos lloros,
                                        angustia y depresión que son calificados de tristeza por todos los testigos; falta de ilusión hasta
                                        extremos patológicos; inhibición extrema hasta el punto de permitir que otros actuaran por ella misma
                                        en todo tipo de aspectos (desde los más triviales de preparación de la boda, hasta los más trascendentes
                                        de elegir la boda misma); vergüenza patológica del trato social en esos días; aturdimiento y confusión
                                        que le llevaron a actos radicalmente contrarios a sus convicciones más firmes (intentar el aborto por
                                        medios infantiles, fantasiosos y faltos de conexión con la realidad) e incluso absurdos (abandonar el
                                        hogar para ir a vivir tres días a casa de la hermana del que a la sazón era también novio de su hermana,
                                        es decir cobijarse en casa de unos desconocidos; como absurdo fue intentar y no lograr un encuentro
                                        con su hermano que vivía en su misma ciudad).<br>
                                        Estos y otros síntomas y reacciones son lo suficientemente explícitos para demostrar esa conmoción
                                        psíquica que, aunque reactiva, transitoria y ocasionalmente puede ocasionar un defecto de libertad
                                        interna, sin necesidad de diagnosticar una enfermedad psíquica en sentido clínico.<br>
                                        El Decreto de 8 de noviembre de 1980, c. Panizo, declara abiertamente que «dentro de la libertad ab
                                        intrinseco, los condicionamientos pueden provenir de raíz patológica o no patológica»;<br><br>
                                        Así se señalan como supuestos de falta de libertad interna:<br><br>
                                        a) Los condicionamientos de carácter patológico.<br>
                                        b) Los condicionamientos derivados de la propia personalidad, aún en línea no estrictamente
                                        patológica (estructuras de la personalidad, determinantes de una voluntad muy débil e influenciable).<br><br>
                                        La falta de libertad interna debida especialmente a circunstancias transitorias y ocasionales. La relación
                                        de este apartado con el anterior es patente. Puede darse una concurrencia tal de factores y
                                        circunstancias que, al proyectarse sobre la persona del contrayente, le ofusquen y le priven de libertad
                                        para contraer: presión consternadora y obnubilante de circunstancias personales, familiares,
                                        ambientales, capaces por sí mismas y tal vez en concurrencia con un determinado modo de ser personal
                                        de llevarle a un estado tal de ofuscación que ni sea capaz de discernir, ni menos aún de tener una
                                        opción libre.<br>
                                        Circunstancias de este tipo pueden producirse, como en nuestro caso, a consecuencia de embarazo de la
                                        mujer (cf. coram Sabbatani, de 24 de febrero de 1961).<br>
                                        Por todo lo expuesto<br>
                                        SUPLICA al tribunal que teniendo por presentado este escrito de defensa, se dicte sentencia declarando
                                        la nulidad del matrimonio canónico contraído por mi representada D.ª N. N. y D. N. N. por el capítulo
                                        de miedo (temor reverencial) y subsidiariamente por el de defecto de libertad interna para contraer,
                                        ambos padecidos por la esposa.<br>
                                        En ..., a ... de ... de ...<br><br>
                                        N. N., Procurador<br>
                                        N. N., Abogado<br><br>
                                        DILIGENCIA.—La pongo yo, el Notario Actuario, para hacer constar que hoy, ... de ... de ..., ha sido
                                        presentado este escrito de alegaciones o defensa. Doy fe y cuenta a Su Sría.<br>
                                        N. N., Notario
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
