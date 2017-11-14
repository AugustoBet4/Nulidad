<!DOCTYPE html>
<?php
  $matrimonio = "LOPEZ-PEREZ";
 ?>
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
  <link href="../../plugins/node-waves/waves.css" rel="stylesheet" >

  <!-- Animation Css -->
  <link href="../../plugins/animate-css/animate.css" rel="stylesheet" >

  <!-- Custom Css -->
  <link href="../../css/style.css" rel="stylesheet">

  <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
  <link href="../../css/themes/all-themes.css" rel="stylesheet" >
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
              <b><a href="../../pages/forms/ingreso.php">Cerrar Sesion<i class="material-icons">input</i></a></b>
              </b>
            </ul>
          </div>
        </div>
      </div>
      <!-- #User Info -->
      <!-- Menu -->
      <div class="menu">
        <ul class="list">
          <b>
            <a href="../../pages/forms/indagacion.php">
                            <i class="material-icons">library_add</i>
                            <span>Nuevo caso</span>
                        </a>
          </b>
          <li class="active">
            <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">attach_file</i>
                            <span>Dar Seguimiento a caso</span>
                        </a>
            <ul class="ml-menu">
              <li class="active">
                <a href="../../pages/forms/indagacion.php">Indagacion Previa</a>
              </li>
              <li>
                <a href="../../pages/forms/introduccion.php">Fase Introductoria</a>
              </li>
              <li>
                <a href="pages/forms/indagacion.php">Fase de Instrucción</a>
              </li>
              <li>
                <a href="pages/forms/alegatoria.php">Fase Alegatoria</a>
              </li>
              <li>
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
              <h2>PREPARACIÓN DE SU DEMANDA - INDAGACIÓN PREVIA</h2>
              <h1>Sección 4</h1>
            </div>
            <div class="body">
              <ul class="nav nav-tabs tab-nav-right" role="tablist">
                    <li role="presentation" class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Preparación de la demanda</a></b>
                    <li role="presentation" class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Demanda de nulidad matrimonial</a></b>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="home">
                  <form id="wizard_with_validation" method="POST" action="indagacionformularios.php">
                    <align>
                        <h4>A. Al tiempo de contraer matrimonio, uno o ambos:</h4>
                        <h5>No sabía lo que era el matrimonio (una relación permanente, fiel, abierta a la procreación)</h5>
                        <div class="demo-checkbox">
                          <input type="checkbox" id="indg2p1demandante" class="chk-col-light-blue">
                          <label for="indg2p1demandante">Demandante</label>
                          <input type="checkbox" id="indg2p1demandado" class="chk-col-light-blue">
                          <label for="indg2p1demandado">Demandado</label>
                        </div>
                        <br><br>
                        <b>
                          <h5>Trataba de escaparse de una situación no querida por la cual estaba atravesando en ese momento de la vida</h5>
                        </b>
                        <div class="demo-checkbox">
                          <input type="checkbox" id="indg2p2demandante" class="chk-col-light-blue">
                          <label for="indg2p2demandante">Demandante</label>
                          <input type="checkbox" id="indg2p2demandado" class="chk-col-light-blue">
                          <label for="indg2p2demandado">Demandado</label>
                        </div>
                        <br><br>
                        <b>
                          <h5>Creía que estaba obligado al matrimonio por estar de novios durante mucho tiempo</h5>
                        </b>
                          <div class="demo-checkbox">
                            <input type="checkbox" id="indg2p3demandante" class="chk-col-light-blue">
                            <label for="indg2p3demandante">Demandante</label>
                            <input type="checkbox" id="indg2p3demandado" class="chk-col-light-blue">
                            <label for="indg2p3demandado">Demandado</label>
                          </div>
                            <br><br>
                            <b>
                              <h5>No consideramos seriamente que significaría estar casado con esa otra persona</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p4demandante" class="chk-col-light-blue">
                              <label for="indg2p4demandante">Demandante</label>
                              <input type="checkbox" id="indg2p4demandado" class="chk-col-light-blue">
                              <label for="indg2p4demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Tenía serias dudas acerca de si en verdad era una buena decisión</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p5demandante" class="chk-col-light-blue">
                              <label for="indg2p5demandante">Demandante</label>
                              <input type="checkbox" id="indg2p5demandado" class="chk-col-light-blue">
                              <label for="indg2p5demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>No consideró en forma realista si la relación era lo suficientemente fuerte como para casarse</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p6demandante" class="chk-col-light-blue">
                              <label for="indg2p6demandante">Demandante</label>
                              <input type="checkbox" id="indg2p6demandado" class="chk-col-light-blue">
                              <label for="indg2p6demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Tenía poca o ninguna experiencia de noviazgo</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p7demandante" class="chk-col-light-blue">
                              <label for="indg2p7demandante">Demandante</label>
                              <input type="checkbox" id="indg2p7demandado" class="chk-col-light-blue">
                              <label for="indg2p7demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Ha ignorado la clara oposición, de familiares o de amigos, a que se casaran</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p8demandante" class="chk-col-light-blue">
                              <label for="indg2p8demandante">Demandante</label>
                              <input type="checkbox" id="indg2p8demandado" class="chk-col-light-blue">
                              <label for="indg2p8demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>No ha tenido ejemplo de lo que es un matrimonio estable</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p9demandante" class="chk-col-light-blue">
                              <label for="indg2p9demandante">Demandante</label>
                              <input type="checkbox" id="indg2p9demandado" class="chk-col-light-blue">
                              <label for="indg2p9demandado">Demandado</label>
                            </div>
                            <br><br>
                            <h4>B. Al tiempo de contraer matrimonio, uno o ambos:</h4>
                            <b>
                              <h5>Estaba expuesto, ya sea personalmente ya sea algún otro miembro de la familia, a violencia física, abuso sexual, alcoholismo o drogadicción</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p10demandante" class="chk-col-light-blue">
                              <label for="indg2p10demandante">Demandante</label>
                              <input type="checkbox" id="indg2p10demandado" class="chk-col-light-blue">
                              <label for="indg2p10demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Había tenido o necesitaba tener algún tipo de tratamiento psicológico a causa de alguna enfermedad grave de orden psicológico</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p11demandante" class="chk-col-light-blue">
                              <label for="indg2p11demandante">Demandante</label>
                              <input type="checkbox" id="indg2p11demandado" class="chk-col-light-blue">
                              <label for="indg2p11demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Era incapaz de tener estabilidad ya sea en el trabajo, en cuanto a educación se refiere, estilo de vida o socialmente</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p12demandante" class="chk-col-light-blue">
                              <label for="indg2p12demandante">Demandante</label>
                              <input type="checkbox" id="indg2p12demandado" class="chk-col-light-blue">
                              <label for="indg2p12demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Tenía antecedentes de comportamiento violento o algún otro tipo de comportamiento antisocial</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p13demandante" class="chk-col-light-blue">
                              <label for="indg2p13demandante">Demandante</label>
                              <input type="checkbox" id="indg2p13demandado" class="chk-col-light-blue">
                              <label for="indg2p13demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>No podía hacerse cargo de los propios actos</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p14demandante" class="chk-col-light-blue">
                              <label for="indg2p14demandante">Demandante</label>
                              <input type="checkbox" id="indg2p14demandado" class="chk-col-light-blue">
                              <label for="indg2p14demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Lidiaba con algún tipo de asunto que posteriormente seria visto como una adicción (adicción al juego, sustancias que producen dependencia, sexo etc.)</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p15demandante" class="chk-col-light-blue">
                              <label for="indg2p15demandante">Demandante</label>
                              <input type="checkbox" id="indg2p15demandado" class="chk-col-light-blue">
                              <label for="indg2p15demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Ha tenido problemas o ha negado haber tenido dificultades en cuanto a su orientación sexual</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p16demandante" class="chk-col-light-blue">
                              <label for="indg2p16demandante">Demandante</label>
                              <input type="checkbox" id="indg2p16demandado" class="chk-col-light-blue">
                              <label for="indg2p16demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Había sido o era abusado/a sexualmente</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p17demandante" class="chk-col-light-blue">
                              <label for="indg2p17demandante">Demandante</label>
                              <input type="checkbox" id="indg2p17demandado" class="chk-col-light-blue">
                              <label for="indg2p17demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Tenía problemas de personalidad tan graves que no consideré/consideró seriamente lo que significaba casarse</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p18demandante" class="chk-col-light-blue">
                              <label for="indg2p18demandante">Demandante</label>
                              <input type="checkbox" id="indg2p18demandado" class="chk-col-light-blue">
                              <label for="indg2p18demandado">Demandado</label>
                            </div>
                            <br><br>
                            <h4>C. Al tiempo de contraer matrimonio, uno o ambos:</h4>
                            <b>
                              <h5>Se casó no por que realmente quería casarse, sino por algún otro motivo (por ejemplo, obtener
                              los papeles de residencia, nacionalidad, escapar de otra situación, obtener ayuda financiera, tener un amigo/a etc.)</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p19demandante" class="chk-col-light-blue">
                              <label for="indg2p19demandante">Demandante</label>
                              <input type="checkbox" id="indg2p19demandado" class="chk-col-light-blue">
                              <label for="indg2p19demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Se casó no porque quería casarse sino por algún motivo personal</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p20demandante" class="chk-col-light-blue">
                              <label for="indg2p20demandante">Demandante</label>
                              <input type="checkbox" id="indg2p20demandado" class="chk-col-light-blue">
                              <label for="indg2p20demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Pensé que debido al embarazo no había otra opción mas que casarse</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p21demandante" class="chk-col-light-blue">
                              <label for="indg2p21demandante">Demandante</label>
                              <input type="checkbox" id="indg2p21demandado" class="chk-col-light-blue">
                              <label for="indg2p21demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Pensé que porque estábamos viviendo juntos no había otra opción mas que casarse</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p22demandante" class="chk-col-light-blue">
                              <label for="indg2p22demandante">Demandante</label>
                              <input type="checkbox" id="indg2p22demandado" class="chk-col-light-blue">
                              <label for="indg2p22demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Pensé que porque había tenido relaciones prematrimoniales tenía que casarme</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p23demandante" class="chk-col-light-blue">
                              <label for="indg2p23demandante">Demandante</label>
                              <input type="checkbox" id="indg2p23demandado" class="chk-col-light-blue">
                              <label for="indg2p23demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Pensé que mi cónyuge era la solución para salir de una situación problemática</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p24demandante" class="chk-col-light-blue">
                              <label for="indg2p24demandante">Demandante</label>
                              <input type="checkbox" id="indg2p24demandado" class="chk-col-light-blue">
                              <label for="indg2p24demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Decidí casarme por despecho</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p25demandante" class="chk-col-light-blue">
                              <label for="indg2p25demandante">Demandante</label>
                              <input type="checkbox" id="indg2p25demandado" class="chk-col-light-blue">
                              <label for="indg2p25demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Creí que el matrimonio era la única alternativa debido a las objeciones de mi familia a que viviésemos juntos</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p26demandante" class="chk-col-light-blue">
                              <label for="indg2p26demandante">Demandante</label>
                              <input type="checkbox" id="indg2p26demandado" class="chk-col-light-blue">
                              <label for="indg2p26demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Quería continuar viviendo juntos pero no me quería casar </h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p27demandante" class="chk-col-light-blue">
                              <label for="indg2p27demandante">Demandante</label>
                              <input type="checkbox" id="indg2p27demandado" class="chk-col-light-blue">
                              <label for="indg2p27demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Quería echarse atrás, no casarse, pero no pudo</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p28demandante" class="chk-col-light-blue">
                              <label for="indg2p28demandante">Demandante</label>
                              <input type="checkbox" id="indg2p28demandado" class="chk-col-light-blue">
                              <label for="indg2p28demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Durante la niñez y la adolescencia no tuvo ningún tipo de ejemplo de lo que es un matrimonio estable</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p29demandante" class="chk-col-light-blue">
                              <label for="indg2p29demandante">Demandante</label>
                              <input type="checkbox" id="indg2p29demandado" class="chk-col-light-blue">
                              <label for="indg2p29demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>No quería establecer una relación matrimonial</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p30demandante" class="chk-col-light-blue">
                              <label for="indg2p30demandante">Demandante</label>
                              <input type="checkbox" id="indg2p30demandado" class="chk-col-light-blue">
                              <label for="indg2p30demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Otras cosas eran más importantes que el cónyuge, por ej. creí que el trabajo o la profesión eran más importantes que el matrimonio</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p31demandante" class="chk-col-light-blue">
                              <label for="indg2p31demandante">Demandante</label>
                              <input type="checkbox" id="indg2p31demandado" class="chk-col-light-blue">
                              <label for="indg2p31demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>No tenía ninguna intención de asumir responsabilidades respecto de la otra persona</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p32demandante" class="chk-col-light-blue">
                              <label for="indg2p32demandante">Demandante</label>
                              <input type="checkbox" id="indg2p32demandado" class="chk-col-light-blue">
                              <label for="indg2p32demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Quería echarse atrás, no casarse, pero no pudo</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p33demandante" class="chk-col-light-blue">
                              <label for="indg2p33demandante">Demandante</label>
                              <input type="checkbox" id="indg2p33demandado" class="chk-col-light-blue">
                              <label for="indg2p33demandado">Demandado</label>
                            </div>
                            <br><br>
                            <h4>D. Al tiempo de contraer matrimonio, uno o ambos:</h4>
                            <b>
                              <h5>No tenía ninguna intención de tener hijos, si bien este hecho tal vez no fue evidente, o no se supo, hasta después del matrimonio</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p34demandante" class="chk-col-light-blue">
                              <label for="indg2p34demandante">Demandante</label>
                              <input type="checkbox" id="indg2p34demandado" class="chk-col-light-blue">
                              <label for="indg2p34demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Se rehusaba a tener relaciones sexuales a no ser que se usara algún medio anticonceptivo</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p35demandante" class="chk-col-light-blue">
                              <label for="indg2p35demandante">Demandante</label>
                              <input type="checkbox" id="indg2p35demandado" class="chk-col-light-blue">
                              <label for="indg2p35demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Tenía la intención de limitar o excluir la prole (procreación de los hijos) por motivos personales</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p36demandante" class="chk-col-light-blue">
                              <label for="indg2p36demandante">Demandante</label>
                              <input type="checkbox" id="indg2p36demandado" class="chk-col-light-blue">
                              <label for="indg2p36demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Jamás tuvo intención de hacerse cargo de la crianza de los hijos</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p37demandante" class="chk-col-light-blue">
                              <label for="indg2p37demandante">Demandante</label>
                              <input type="checkbox" id="indg2p37demandado" class="chk-col-light-blue">
                              <label for="indg2p37demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Tuvimos un aborto provocado para no tener hijos</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p38demandante" class="chk-col-light-blue">
                              <label for="indg2p38demandante">Demandante</label>
                              <input type="checkbox" id="indg2p38demandado" class="chk-col-light-blue">
                              <label for="indg2p38demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Decidimos posponer tener los hijos hasta algún tiempo indefinido o hasta que se lograra alguna condición</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p39demandante" class="chk-col-light-blue">
                              <label for="indg2p39demandante">Demandante</label>
                              <input type="checkbox" id="indg2p39demandado" class="chk-col-light-blue">
                              <label for="indg2p39demandado">Demandado</label>
                            </div>
                            <br><br>
                            <h4>E. Al tiempo de contraer matrimonio, uno o ambos:</h4>
                            <b>
                              <h5>Entendía que la infidelidad era aceptable, si había un motivo para ello</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p40demandante" class="chk-col-light-blue">
                              <label for="indg2p40demandante">Demandante</label>
                              <input type="checkbox" id="indg2p40demandado" class="chk-col-light-blue">
                              <label for="indg2p40demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Creía que uno podía tener relaciones sexuales fuera del matrimonio</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p41demandante" class="chk-col-light-blue">
                              <label for="indg2p41demandante">Demandante</label>
                              <input type="checkbox" id="indg2p41demandado" class="chk-col-light-blue">
                              <label for="indg2p41demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Fue infiel poco antes o poco después del matrimonio</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p42demandante" class="chk-col-light-blue">
                              <label for="indg2p42demandante">Demandante</label>
                              <input type="checkbox" id="indg2p42demandado" class="chk-col-light-blue">
                              <label for="indg2p42demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Creía que la infidelidad no estaba mal, siempre y cuando no hubiera un vínculo sentimental</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p43demandante" class="chk-col-light-blue">
                              <label for="indg2p43demandante">Demandante</label>
                              <input type="checkbox" id="indg2p43demandado" class="chk-col-light-blue">
                              <label for="indg2p43demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Nunca tuvo la intención de tener una relación exclusiva ni de observar la fidelidad</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p44demandante" class="chk-col-light-blue">
                              <label for="indg2p44demandante">Demandante</label>
                              <input type="checkbox" id="indg2p44demandado" class="chk-col-light-blue">
                              <label for="indg2p44demandado">Demandado</label>
                            </div>
                            <br><br>
                            <h4>F. Al tiempo de contraer matrimonio, uno o ambos:</h4>
                            <b>
                              <h5>Estaba convencido de que el divorcio era aceptable si el matrimonio era un fracaso y no eran felices</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p45demandante" class="chk-col-light-blue">
                              <label for="indg2p45demandante">Demandante</label>
                              <input type="checkbox" id="indg2p45demandado" class="chk-col-light-blue">
                              <label for="indg2p45demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Creí que el divorcio era una mejor alternativa a un matrimonio infeliz para toda la vida</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p46demandante" class="chk-col-light-blue">
                              <label for="indg2p46demandante">Demandante</label>
                              <input type="checkbox" id="indg2p46demandado" class="chk-col-light-blue">
                              <label for="indg2p46demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Creí que el divorcio y el casarse de nuevo eran aceptables en ciertas circunstancias, por ejemplo en caso de adulterios</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p47demandante" class="chk-col-light-blue">
                              <label for="indg2p47demandante">Demandante</label>
                              <input type="checkbox" id="indg2p47demandado" class="chk-col-light-blue">
                              <label for="indg2p47demandado">Demandado</label>
                            </div>
                            <br><br>
                            <h4>G. Al tiempo de contraer matrimonio, uno o ambos:</h4>
                            <b>
                              <h5>Se casó con la intención de permanecer casado siempre y cuando determinada condición o expectativa fuera a cumplirse. (Favor especifique de cual se trata)</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p48demandante" class="chk-col-light-blue">
                              <label for="indg2p48demandante">Demandante</label>
                              <input type="checkbox" id="indg2p48demandado" class="chk-col-light-blue">
                              <label for="indg2p48demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Se casó con la intención de permanecer casado siempre y cuando no hubiera infidelidad</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p49demandante" class="chk-col-light-blue">
                              <label for="indg2p49demandante">Demandante</label>
                              <input type="checkbox" id="indg2p49demandado" class="chk-col-light-blue">
                              <label for="indg2p49demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Se casó con la intención de permanecer casado siempre y solo mientras el amor durarse</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p50demandante" class="chk-col-light-blue">
                              <label for="indg2p50demandante">Demandante</label>
                              <input type="checkbox" id="indg2p50demandado" class="chk-col-light-blue">
                              <label for="indg2p50demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Se casó con la intención de permanecer casado siempre y mientras me sintiera satisfecho/a</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p51demandante" class="chk-col-light-blue">
                              <label for="indg2p51demandante">Demandante</label>
                              <input type="checkbox" id="indg2p51demandado" class="chk-col-light-blue">
                              <label for="indg2p51demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Se casó con la intención de permanecer casado siempre que estuviera económicamente asegurado/a</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p52demandante" class="chk-col-light-blue">
                              <label for="indg2p52demandante">Demandante</label>
                              <input type="checkbox" id="indg2p52demandado" class="chk-col-light-blue">
                              <label for="indg2p52demandado">Demandado</label>
                            </div>
                            <br><br>
                            <h4>H. Al tiempo de contraer matrimonio, uno o ambos:</h4>
                            <b>
                              <h5>No era libre para casarme. Ella estaba embarazada y fui obligado/a, presionado/a a casarme</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p53demandante" class="chk-col-light-blue">
                              <label for="indg2p53demandante">Demandante</label>
                              <input type="checkbox" id="indg2p53demandado" class="chk-col-light-blue">
                              <label for="indg2p53demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>decidí casarme para evitar una situación desagradable</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p54demandante" class="chk-col-light-blue">
                              <label for="indg2p54demandante">Demandante</label>
                              <input type="checkbox" id="indg2p54demandado" class="chk-col-light-blue">
                              <label for="indg2p54demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Creía que por alguna presión externa o por circunstancias particulares de ese momento no  había otra opción que casarse</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p55demandante" class="chk-col-light-blue">
                              <label for="indg2p55demandante">Demandante</label>
                              <input type="checkbox" id="indg2p55demandado" class="chk-col-light-blue">
                              <label for="indg2p55demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Creía que a causa de la insistencia de los padres a que se casaran no tenían otra opción que casarse</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p56demandante" class="chk-col-light-blue">
                              <label for="indg2p56demandante">Demandante</label>
                              <input type="checkbox" id="indg2p56demandado" class="chk-col-light-blue">
                              <label for="indg2p56demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Quería echarse atrás (no casarse), pero no pudo</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p57demandante" class="chk-col-light-blue">
                              <label for="indg2p57demandante">Demandante</label>
                              <input type="checkbox" id="indg2p57demandado" class="chk-col-light-blue">
                              <label for="indg2p57demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Tenía miedo de que si no se casaba en ese momento después ya no se casaría con nadie</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p58demandante" class="chk-col-light-blue">
                              <label for="indg2p58demandante">Demandante</label>
                              <input type="checkbox" id="indg2p58demandado" class="chk-col-light-blue">
                              <label for="indg2p58demandado">Demandado</label>
                            </div>
                            <br><br>
                            <h4>I. Al tiempo de contraer matrimonio, uno o ambos:</h4>
                            <b>
                              <h5>Falsificó su identidad en el momento del matrimonio, de tal manera, que usted pensó que se casó con una persona diferente a quien usted creía que era</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p59demandante" class="chk-col-light-blue">
                              <label for="indg2p59demandante">Demandante</label>
                              <input type="checkbox" id="indg2p59demandado" class="chk-col-light-blue">
                              <label for="indg2p59demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Quería casarse con una persona que poseyera cierta y determinada cualidad. (virginidad, profesión, estatus social, capacidad para engendrar hijos, etc.)</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p60demandante" class="chk-col-light-blue">
                              <label for="indg2p60demandante">Demandante</label>
                              <input type="checkbox" id="indg2p60demandado" class="chk-col-light-blue">
                              <label for="indg2p60demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Tenía miedo de que si no se casaba en ese momento después ya no se casaría con nadie</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p61demandante" class="chk-col-light-blue">
                              <label for="indg2p61demandante">Demandante</label>
                              <input type="checkbox" id="indg2p61demandado" class="chk-col-light-blue">
                              <label for="indg2p61demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Equivocadamente creyó que la otra persona tenía esa determinada cualidad</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p62demandante" class="chk-col-light-blue">
                              <label for="indg2p62demandante">Demandante</label>
                              <input type="checkbox" id="indg2p62demandado" class="chk-col-light-blue">
                              <label for="indg2p62demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>No se hubiera casado de haber sabido la verdad acerca de la cualidad en cuestión (es decir acerca de la presencia o ausencia de la cualidad en cuestión)</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p63demandante" class="chk-col-light-blue">
                              <label for="indg2p63demandante">Demandante</label>
                              <input type="checkbox" id="indg2p63demandado" class="chk-col-light-blue">
                              <label for="indg2p63demandado">Demandado</label>
                            </div>
                            <br><br>
                            <h4>J. Al tiempo de contraer matrimonio, uno o ambos:</h4>
                            <b>
                              <h5>A sabiendas, engañó al otro acerca de algo muy importante referente al matrimonio</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p64demandante" class="chk-col-light-blue">
                              <label for="indg2p64demandante">Demandante</label>
                              <input type="checkbox" id="indg2p64demandado" class="chk-col-light-blue">
                              <label for="indg2p64demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Engañó a la otra persona para que contrajera matrimonio</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p65demandante" class="chk-col-light-blue">
                              <label for="indg2p65demandante">Demandante</label>
                              <input type="checkbox" id="indg2p65demandado" class="chk-col-light-blue">
                              <label for="indg2p65demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>No se hubiera casado de haber sabido la verdad</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p66demandante" class="chk-col-light-blue">
                              <label for="indg2p66demandante">Demandante</label>
                              <input type="checkbox" id="indg2p66demandado" class="chk-col-light-blue">
                              <label for="indg2p66demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Se sintió engañado a casarse</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p67demandante" class="chk-col-light-blue">
                              <label for="indg2p67demandante">Demandante</label>
                              <input type="checkbox" id="indg2p67demandado" class="chk-col-light-blue">
                              <label for="indg2p67demandado">Demandado</label>
                            </div>
                            <br><br>
                            <h4>K.  Al tiempo de contraer matrimonio, uno o ambos creíamos que la convalidación de nuestro matrimonio en la Iglesia era:</h4>
                            <b>
                              <h5>La ratificación por parte de la Iglesia Católica de un matrimonio que ya era válido pero que fue celebrado fuera de la Iglesia Católica</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p68demandante" class="chk-col-light-blue">
                              <label for="indg2p68demandante">Demandante</label>
                              <input type="checkbox" id="indg2p68demandado" class="chk-col-light-blue">
                              <label for="indg2p68demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Era el primero y único matrimonio auténtico y verdadero</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p69demandante" class="chk-col-light-blue">
                              <label for="indg2p69demandante">Demandante</label>
                              <input type="checkbox" id="indg2p69demandado" class="chk-col-light-blue">
                              <label for="indg2p69demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>La ratificación por parte de la Iglesia Católica, de un matrimonio que ya era válido, pero que por medio de la ratificación de la Iglesia, dicha unión se convertía en Sacramental</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p70demandante" class="chk-col-light-blue">
                              <label for="indg2p70demandante">Demandante</label>
                              <input type="checkbox" id="indg2p70demandado" class="chk-col-light-blue">
                              <label for="indg2p70demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Una ceremonia religiosa requerida por la Iglesia Católica, a fin de reconocer oficialmente nuestro matrimonio con el fin de que la parte Católica pudiera estar nuevamente en comunión plena con la Iglesia</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p71demandante" class="chk-col-light-blue">
                              <label for="indg2p71demandante">Demandante</label>
                              <input type="checkbox" id="indg2p71demandado" class="chk-col-light-blue">
                              <label for="indg2p71demandado">Demandado</label>
                            </div>
                            <br><br>
                            <b>
                              <h5>Algo que en verdad no era necesario pero que de todos modos se hizo, por algún motivo específico (por ejemplo: para poder bautizar a nuestro hijo; para complacer a nuestros padres)</h5>
                            </b>
                            <div class="demo-checkbox">
                              <input type="checkbox" id="indg2p72demandante" class="chk-col-light-blue">
                              <label for="indg2p72demandante">Demandante</label>
                              <input type="checkbox" id="indg2p72demandado" class="chk-col-light-blue">
                              <label for="indg2p72demandado">Demandado</label>
                            </div>
                            <br><br>
                            <h4>L. ¿Por qué cree que el matrimonio fracasó y fue inválido desde el comienzo?</h4>
                            <div class="form-group form-float">
                              <div class="form-line">
                                <input type="text" class="form-control" name="indg2p72">
                                <label class="form-label"></label>
                              </div>
                            </div>
                    </align>
                </div>
                <div role="tabpanel" class="tab-pane fade actie in" id="profile">
                    <textarea id="tinymce">
                       <br>
                       <center><font color="#000000" face="tahoma" size="4"><b>DEMANDA DE NULIDAD MATRIMONIAL</b></font></center>
                       <center><font color="#000000" face="tahoma" size="4"><b><?php echo $matrimonio;?></b></font></center>
                       <br>
                       <table style="width:100%">
                         <tr>
                           <td width="50%" height="30" valign="top">DEMANDANTE:<!--Aqui va el nombre del demandante--></td>
                           <td width="50%" valign="top">PARTE DEMANDADA:<!--Aqui va el nombre del demandado--></td>
                         </tr>
                         <tr>
                           <td width="50%" height="30" valign="top">CI Nº:<!--Aqui va el ci del demandante--></td>
                           <td width="50%" valign="top">CI Nº:<!--Aqui va el ci del demandado--></td>
                         </tr>
                         <tr>
                           <td width="50%" height="30" valign="top">Dirección:<!--Aqui va la dirección demandante--></td>
                           <td width="50%" valign="top">Dirección de residencia: <!--Aqui va la dirección del demandado--></td>
                         </tr>
                       </table>
                       <br><br>

                       <table style="width:100%">
                         <tr>
                           <th colspan="3" align="left" valign="top"><b>Por el presente pido al Tribunal Eclesiástico Metropolitano de La Paz que se sirva aceptar y admitir a trámite esta demanda presentada y previos los trámites legales dicte en su día sentencia, declarando la nulidad del matrimonio entre los cónyuges arriba mencionados.
                           </b></th>
                         </tr>
                       </table>
                       <table style="width:100%">
                         <tr>
                           <th colspan="3" align="left" valign="top"><b>El matrimonio se celebró en la fecha y el lugar siguiente:</b></th>
                         </tr>
                         <tr>
                           <td width="30%" height="30" valign="top">Fecha:</td>
                           <td width="70%" valign="top" colspan="2" align="left">Ciudad y Departamento:</td>
                         </tr>
                         <tr>
                           <td width="30%" height="30" valign="top">Arquidiócesis/Diócesis</td>
                           <td width="70%" valign="top" colspan="2" align="left">Nombre de la Parroquia:</td>
                         </tr>
                         <tr>
                           <th colspan="3" align="left" valign="top"><u><b>RELACIÓN DE HECHOS<br><br><br><br></u></b></th>
                         </tr>
                         <tr>
                           <td width="50%" height="30" valign="top">DURACION CONVIVENCIA MATRIM:</td>
                           <td width="25%" valign="top">CONCUBINATO PREVIO:</td>
                           <td width="25%" valign="top">DURACIÓN:</td>
                         </tr>
                         <tr>
                           <td width="30%" height="30" valign="top">DURACION DEL NOVIAZGO:</td>
                           <td width="70%" valign="top" colspan="2" align="left">EMBARAZO PREVIO:</td>
                         </tr>
                         <tr>
                           <td width="50%" height="30" valign="top">Nº HIJOS:</td>
                           <td width="25%" valign="top">DIVORCIO:</td>
                           <td width="25%" valign="top">Fecha:</td>
                         </tr>
                         <tr>
                           <th colspan="3" align="left" valign="top"><u><b>FUNDAMENTO DE DERECHO:<br><br></u></b>
                           Es competente para conocer de esta causa el Tribunal Eclesiástico del Obispado de La Paz, y en mi calidad de esposo(a) me encuentro habilitado para solicitar la declaración de nulidad del matrimonio (c. 1674.1.º).
                           <b>Con relación a las causales de solicitud de nulidad de matrimonio:	</b>
                           </th>
                         </tr>
                           <tr>
                             <th colspan="3" align="left" valign="top"><b>El matrimonio se celebró en la fecha y el lugar siguiente:</b></th>
                           </tr>
                           <tr>
                             <td width="30%" height="30" valign="top">1.-Cánon:</td>
                             <td width="70%" valign="top" colspan="2" align="left">De parte del:</td>
                           </tr>
                           <tr>
                             <td width="30%" height="30" valign="top">2.-Cánon</td>
                             <td width="70%" valign="top" colspan="2" align="left">De parte del:</td>
                           </tr>
                           <tr>
                             <td width="30%" height="30" valign="top">3.-Cánon</td>
                             <td width="70%" valign="top" colspan="2" align="left">De parte del:</td>
                           </tr>
                           <tr>
                             <th colspan="3" align="left" valign="top"><u><b>PRUEBAS:<br><br></u></b>
                             Se propone prueba testifical al amparo del art. 59 de la Instrucción Provida Mater, con lista de testigos e interrogatorio.
                             </th>
                           </tr>
                           <tr>
                             <th colspan="3" align="left" valign="top"><u><b>TESTIGOS:<br><br></u></b>
                             Nombro los siguientes testigos que tienen conocimiento acerca de los hechos arriba mencionados, quienes están dispuestos a comparecer y a ofrecer sus testimonios:
                             </th>
                           </tr>
                           <tr>
                             <td width="30%" height="30" valign="top">1:</td>
                             <td width="70%" valign="top" colspan="2" align="left">2:</td>
                           </tr>
                           <tr>
                             <td width="30%" height="30" valign="top">3:</td>
                             <td width="70%" valign="top" colspan="2" align="left">4:</td>
                           </tr>
                         </table>
                        <br><br><br><br><br>
                        <table width=100%>
                          <tr>
                             <th>Firma: ________________________________</th>
                             <th>Fecha: ________________________________</th>
                           </tr>
                         </table>
                         <br><br><br><br>
                         <table>
                           <th>
                            <b>Fecha recibida:</b>
                          </th>
                         </table>
                         </textarea>
                         <br><br>
                         <div class="col-sm-3">
                           <button class="btn btn bg-blue btn-block btn-lg waves-effect" type="submit">Siguiente</button>
                         </div>
                       </form>

                    <br>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
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

  <!-- TinyMCE -->
  <script src="../../plugins/tinymce/tinymce.js"></script>

  <!-- Custom Js -->
  <script src="../../js/admin.js"></script>
  <script src="../../js/pages/forms/editors.js"></script>

  <!-- Demo Js -->
  <script src="../../js/demo.js"></script>

</body>
</html>
