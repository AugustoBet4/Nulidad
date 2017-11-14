<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Nulidad Matrimonial - Caso nuevo</title>
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="../../plugins/sweetalert/sweetalert.css" rel="stylesheet" />
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
            <p>Porfavor espere...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.php">SEMINARIO</a>
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
                          <li><a href="../../pages/forms/ingreso.php">Cerrar Sesion<i class="material-icons">input</i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="menu">
                <ul class="list">
                    <li>
                        <a href="indagacion.php">
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
                            <li >
                                <a href="indagacion.php">Indagacion Previa</a>
                            </li>
                            <li class="active">
                                <a href="introduccion.php">Fase Introductoria</a>
                            </li>
                            <li>
                                <a href="instruccion.php">Fase de Instrucción</a>
                            </li>
                            <li>
                                <a href="alegatoria.php">Fase Alegatoria</a>
                            </li>
                            <li>
                                <a href="sentencia.php">Fase Decisoria</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="buscador.php">
                            <i class="material-icons">search</i>
                            <span>Buscar caso</span>
                        </a>
                    </li>
                    <li>
                        <a href="nuevo_encargado.php">
                            <i class="material-icons">account_box</i>
                            <span>Agregar nuevo encargado</span>
                        </a>
        </aside>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>FASE INTRODUCTORIA - NULIDAD MATRIMONIAL</h2>
                            <font color=red><h6><em>* Espacio requerido</em></h6></font>
                        </div>
                        <form method="post" action="introducciondocs.php">
                        <div class="body">
                          <div class="row clearfix">
                              <div class="col-md-2">
                                  <div class="form-group">
                                      <div class="form-line">
                                        <h4>Número de expediente*</h4>
                                          <input type="text" id="NumEpx" class="form-control" placeholder="" value="/201" required>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-2">
                                  <div class="form-group">
                                      <div class="form-line">
                                        <h4>Número de entrada*</h4>
                                          <input type="text" id="NumEntr" class="form-control" placeholder="" value="/201" required>
                                      </div>
                                  </div>
                              </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Telefono Demandante*</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" id="TelfDemandante" class="form-control" placeholder="Telf. o Cel." required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Telefono Demandado*</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" id="TelfDemandado" class="form-control" placeholder="Telf. o Cel." required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>A llenar por el Vicario Judicial</h4>
                        <h4>Formula de dudas</h4>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Canon:*</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="canon1" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Canon:</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="canon2" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Canon:</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="canon3" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Citación*</h4>
                        <div align="center" class="demo-checkbox">
                          <input type="checkbox" id="basic_checkbox_1" checked/>
                          <label for="basic_checkbox_1">Ordinaria</label>
                          <input type="checkbox" id="basic_checkbox_2"  />
                          <label for="basic_checkbox_2">Edictos</label>
                          <input type="checkbox" id="basic_checkbox_3" />
                          <label for="basic_checkbox_3">Exhortos</label>
                        </div>
                        <h4>Posición del demandado*</h4>
                        <div align="center" class="demo-checkbox">
                          <input type="checkbox" id="basic_checkbox_4" checked/>
                          <label for="basic_checkbox_4">Conformidad-Remision Tribunal</label>
                          <input type="checkbox" id="basic_checkbox_5"  />
                          <label for="basic_checkbox_5">Oposicion-Reconvencion</label>
                          <input type="checkbox" id="basic_checkbox_6" />
                          <label for="basic_checkbox_6">Oposicion-Remision Tribunal</label>
                          <input type="checkbox" id="basic_checkbox_7" />
                          <label for="basic_checkbox_7">No responde-Ausente del juicio</label>
                        </div>
                        <h4>¿El demandado se suma a la demanda?*</h4>
                        <div align="center" class="demo-radio-button">
                          <input name="group1" type="radio" id="radio_1" checked/>
                          <label for="radio_1">Si</label>
                          <input name="group1" type="radio" id="radio_2" />
                          <label for="radio_2">No</label>
                        </div>
                        <h3>Esta demanda debe pasar a:*</h3>
                        <div align="center" class="demo-checkbox">
                          <input type="checkbox" id="basic_checkbox_8" checked/>
                          <label for="basic_checkbox_8">Proceso Ordinario</label><br>
                          <input type="checkbox" id="basic_checkbox_9" />
                          <label for="basic_checkbox_9">Proceso Breve</label><br>
                          <input type="checkbox" id="basic_checkbox_10" />
                          <label for="basic_checkbox_10">Proceso Documental</label><br>
                        </div>
                        <h4>Abogado*</h4>
                        <div align="center" class="demo-radio-button">
                          <input name="group2" type="radio" id="radio_3" checked />
                          <label for="radio_3">Si</label>
                          <input name="group2" type="radio" id="radio_4" />
                          <label for="radio_4">No</label>
                        </div>
                        <br>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Nombre Abogado</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="canon1" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Proceso Ordinario</h4>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Tribunal</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="canon1" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Juez</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="canon1" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Asesor 1</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="canon1" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Asesor 2</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="canon1" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Proceso Más Breve</h4>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Instructor</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="canon1" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="email_address_2">Asesor</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="canon1" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Observaciones</h4>
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="canon1" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            <button type="submit" class="btn btn bg-blue btn-block btn-lg waves-effect">Siguiente</button>
                          </div>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </section>
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>
    <script src="../../plugins/jquery-steps/jquery.steps.js"></script>
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>
    <script src="../../plugins/node-waves/waves.js"></script>
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/form-wizard.js"></script>
    <script src="../../js/demo.js"></script>
</body>
</html>
