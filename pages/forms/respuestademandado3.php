<?php
setlocale(LC_ALL,”es_ES”);
$demandantecalle=9;
$demandanteciudad="Ciudad demandante";
$demandante="Ejemplo demandante";
$notario="Ejemplo notario";
$notarioactuario="Ejemplo notario actuario";
$notarioactuario="Ejemplo notario";
$cursor="Ejemplo cursor";
$demandado="Ejemplo demandado";
$cidemandado=2345678;
$parroquia="Apostol Santiago";
$matrimonio="LOPEZ-PEREZ";
$canones="1507-1508";
$fechamatrimonio="30 de febrero de 2010";
$ciudaddemandado="Ciudad demandado";
$calledemandado="8";
$numerodemandado="4567";
$callearzobispado="10";
$numeroarzobispado="6";
$nombreabogado="Ejemplo abogado";
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
                            <h2>RESPUESTA DEMANDADO</h2>
                        </div>
                        <div class="body">
                          <textarea id="tinymce">
                            <BR>
<center><font color="#A3A3A3" face="tahoma" size="4"><b>INTRODUCTORIA - DOCUMENTOS 1</b></font></center>
<center><font color="#A3A3A3" face="tahoma" size="3">RESPUESTA DEMANDADO</font></center><br>
<center><font color="#000000" face="tahoma" size="4"><b>Nulidad de Matrimonio</b></font></center>
<center><font color="#000000" face="tahoma" size="4"><b><?php echo $matrimonio;?></b></font></center><br><br><br>
<font color="#000000" face="times new roman" size="4"><b>COMPARECENCIA DEL DEMANDADO <?php echo $demandado;?> Y DESIGNACIÓN DE PROCURADOR Y ABOGADO</b></font><br><br><br>
<font size="4" face="times new roman">D./D.ª N. N., Abogado de los Tribunales, en representación y a nombre de <?php echo $demandado;?>, en virtud del Decreto de este Tribunal de ... en el procedimiento de nulidad de matrimonio instado por <?php echo $demandante;?> por incapacidad de matrimonio por alcoholismo de mi representado, nos oponemos a la demanda presentada y formulamos acción reconvencional, basándonos en los siguientes
<br><br>
HECHOS
<br><br>
PRIMERO.—Conforme con el correlativo de la demanda.<br>
SEGUNDO.—No conformes. La vida conyugal entre ambas partes jamás fue posible, y no por las causas que, en su demanda, aduce la actora, sino por las que resultan del forzado matrimonio del esposo, como se desprende de la reconvención formulada a continuación de esta oposición.<br>
Negamos la embriaguez habitual del esposo, y si, alguna vez muy aislada y esporádica, hubo ligeros malos tratos, ello fue originado por la propia actora, con su vida ignominiosa, que, desobedeciendo al esposo, y haciéndole la vida imposible con toda clase de menosprecios, llegó incluso a frecuentar el trato con otros hombres, llevando tal vida sin el consentimiento del esposo.<br>
Tampoco es cierto que el padre haya maltratado a sus hijas, ya que éstas son lo único que, dentro del matrimonio, ha merecido el mayor cariño y respeto por parte del esposo.<br>
TERCERO.—El esposo, que carece de todo medio de fortuna, ante el abandono y menosprecios a que su esposa le sometía, hubo de emigrar a Suiza en busca de trabajo y vida más digna, sin perjuicio de lo cual, en cuanto el esposo marcha del hogar, la esposa ingresa a sus hijas en la casa Cuna de esta Diputación, sin contar no sólo con el consentimiento del esposo, sino también sin su conocimiento.<br>
CUARTO.—El domicilio conyugal de la calle ..., n.º ... hace tiempo que fue abandonado por la esposa, trasladándose a otra ciudad con otro hombre, y llevándose con ella, para mayor oprobio y vergüenza, a la hija mayor del matrimonio.<br>
<br><br>

FUNDAMENTOS JURÍDICOS
<br>
I.    Conformes con los alegados, en cuanto a competencia, jurisdicción y trámites.<br>
II.    De la aplicación correcta de los cánones aludidos por la demanda —nn. 2 y 3 del c. 1095—, resulta su inaplicabilidad al presente supuesto, ya que no existe por parte del esposo ni causa ni hechos que fundamenten la demanda de la actora.<br>
III.	Existe no sólo temeridad, sino también mala fe al proponer tal demanda.<br>
<br><br>

HECHOS DE LA RECONVENCIÓN
<br><br>
PRIMERO.—Las circunstancias personales del demandado reconviniente, y demás extremos sobre el lugar del matrimonio etc. , quedaron expuestos en los escritos de demanda y contestación.<br>
Queda por aclarar que el domicilio actual del reconviniente está en el domicilio de sus padres, calle ... n.º ... de ...<br>
SEGUNDO.—Anteriormente han quedado aclaradas algunas circunstancias de tal matrimonio, pero no las más importantes y relevantes en torno a la existencia y validez del matrimonio, que a continuación pasamos a exponer.<br>
Cuando el reconviniente D. N. N. tenía 19 años, y la reconvenida 26, nuestro representado salía con otras jóvenes de su edad, y también con D.ª N. N., sin que tales compañías o entretenimientos tuvieran para él finalidad matrimonial alguna, y menos con N. N., ya que la diferencia de edad, muy notoria entre ambos y más en esa edad, hacían de N. N. un juguete para N. N.<br>
Pero ocurrió que ella quedó embarazada, imputando la autoría del embarazo a nuestro representado, el cual no sólo quedó sorprendido del hecho, sino que, a mayor abundamiento, se negó firme y terminantemente a casarse con N. N., no queriendo cargar con una consecuencia, muy improbable, habida cuenta de la vida que hacía N. N.<br>
Ante la actitud de D. N. N., que jamás había pensado en contraer matrimonio con D.ª N. N., como ella muy bien sabía, sus hermanos sometieron a D. N. N., primeramente a numerosas amenazas de muerte y, seguidamente, a constantes y graves palizas, con la conminación tajante de su muerte, si no se avenía al matrimonio.<br>
Ante estos hechos y amenazas, es lógico que D. N. N. a sus 19 años, accediera al matrimonio con D.ª N. N., a causa de un miedo grave y externo, que le llevó forzosamente a elegir entre sufrir el mal o el matrimonio.<br>
TERCERO.—Celebrado así el matrimonio, sin consentimiento alguno, el esposo jamás ha renovado, ni interna ni públicamente, el consentimiento matrimonial.<br>
Y si hasta ahora ha estado en el mayor de los silencios, ha sido porque el miedo grave subsiste aún. Y, únicamente, por la improcedente conducta de su esposa, que incluso quiere añadirle la infamia de una nulidad de matrimonio por incapacidad a causa de alcoholismo habitual, rompe de una vez con esta situación, y formula la presente acción reconvencional.<br>
<br><br>
FUNDAMENTOS JURÍDICOS PRIMERO.—Competencia funcional (c. 1671).<br>
SEGUNDO.—El c. 1494 que define la reconvención y cumpliéndose los requisitos exigidos por el c. 1504.<br>
TERCERO.—El c. 1673, § 1 para la competencia del Tribunal.<br>
CUARTO.—El c. 1103 establece que es inválido el matrimonio contraído por violencia o por miedo grave proveniente de una causa externa, incluso el no inferido de propio intento, para librarse del cual alguien se vea obligado a elegir el matrimonio.<br>
El miedo, para que invalide el matrimonio, ha de tener los siguientes requisitos: a) grave, que viene caracterizado por las amenazas y palizas recibidas por el contrayente, doblegando su ánimo y haciéndole comprender, de forma muy plausible, que no es vana y fútil su resistencia a contraer matrimonio; b) proveniente de una causa externa, pues el miedo se crea en el contrayente no merced a supuestas figuraciones internas del mismo, sino que, por el contrario, las motivaciones son causadas por personas ajenas, que, como advertencia previa le golpean sañudamente, y le conminan de forma tajante a casarse o morir; c) indeclinable, es decir, que es tan fuerte el miedo que le lleva a elegir el matrimonio para librarse de las amenazas y de la perturbación anímica.<br>
Por todo ello,<br>
SUPLICO al Tribunal tenga por presentado este escrito con sus copias, y a mí por parte en la representación que ostento a nombre de D. N. N.; por contestada en tiempo y forma la demanda de nulidad de matrimonio por incapacidad del esposo por falta de discreción de juicio o para asumir y cumplir las obligaciones esenciales del matrimonio a causa de alcoholismo habitual; por formulada la demanda reconvencional contra ésta y formulada por su esposo, mediante la misma representación y por concurrir causa de nulidad de matrimonio; ordenar su tramitación conforme a las normas del proceso canónico, recibir el procedimiento a prueba y, en su día, dictar sentencia por la que se declare:<br>
<br>
1.º  	No haber lugar a la estimación de la demanda formulada por D.ª N. N. contra su esposo D. N. N. por incapacidad del mismo (c. 1095, nn. 2 y 3), desestimándola en todas sus partes.<br>
2.º  	Haber lugar a la estimación de la acción reconvencional, formulada por D. N. N. Contra su esposa, declarando la nulidad del matrimonio celebrado entre éste y D.ª N. N. por miedo grave padecido por el esposo reconviniente.<br>
3.º 	Hacer expresa imposición de costas a D.ª N. N. en todo el procedimiento.<br>
<br><br>
Así procede en justicia, que insto en ..., a ... de ... de ... .<br><br></font>
<center><font size="4" face="times new roman">
N. N., Procurador<br><br>
N. N., Abogado<br><br></font></center>
<br>
<center><font size="4" face="times new roman">
DILIGENCIA.—La pongo yo, el Notario, para hacer constar que con esta fecha ha sido pre- sentado este escrito de acción reconvencional. Doy fe en ..., a ... de ... de ...
<br><br>
N. N., Notario<br>
INTRODUCTORIA - DOCUMENTOS 1<br>
RESPUESTA DEMANDADO<br><br>

Nulidad de Matrimonio<br>
<?php echo $matrimonio;?>
<br><br>
</font></center>
<font size="4" face="times new roman">
<b>Decreto sobre admisión o no de la acción reconvencional</b></font>
<br><br><br>
<font size="4" face="times new roman">
DECRETO: En ..., a ... de ... de ...
<br><br>
Por recibido el escrito de acción reconvencional de nulidad de matrimonio que ha presentado, ante este Tribunal Eclesiástico, el Procurador del Ilustre Colegio de ... D. N. N., bajo la dirección del Letrado/a D./D.ª N. N., en nombre y representación de D. N. N.<br>
Como ya está constituido el Tribunal, cuyos jueces diocesanos fueron designados en su día para conocer, juzgar y sentenciar en la causa, que arriba se indica, por incapacidad del esposo para prestar un consentimiento válido y por incapacidad para asumir las obligaciones esenciales del matrimonio, constándonos de nuestra competencia a tenor del c. 1673.1.º y 2.º; de la capacidad legal del demandado reconviniente para actuar en juicio, y estimando que la demanda recovencional está jurídicamente fundada en hecho y en derecho, según se exige en los cc. 1504 y 1505, por el presente la admitimos a trámite, y disponemos que se tramiten simultáneamente.<br>
Se admite al Procurador D./D.ª N. N. y al Abogado D./D.ª N. N. para que represente el prime- ro y defienda el segundo a D. N. N.<br>
Notifíquese a los jueces diocesanos, al Defensor del Vínculo, al Procurador de la parte de- mandada y reconviniente y al de la parte demandante y reconvenida, al que junto con la copia de este decreto deberá enviársele también copia de la demanda reconvencional, para que conteste en el plazo de VEINTE DÍAS a la acción de nulidad promovida por el demandado.<br>
Así lo decretó, mandó y firma el Ilmo. Sr. Vicario Judicial del Obispado de que yo, el infrascrito Notario Actuario, doy fe.<br>
<br><br></font>
<center><font size="4" face="times new roman">
(Sello)	N. N., Vicario Judicial<br>
N. N., Notario Actuario</font></center>
<br><br>
<font size="4" face="times new roman">
NOTIFICACIÓN.—Con esta fecha envío copia del decreto anterior, por correo ordinario, a los jueces diocesanos y al Procurador de la parte demandante y reconvenida, y por correo certificado con acuse de recibo al Procurador de la parte demandada y reconviniente. Lo notifico al Defensor del Vínculo. En ..., a ... de ... de ... Doy fe.
<br><br>
<center>N. N., Notario</center>
<br><br>
5. 	EN EL CASO DE QUE EL DEMANDADO  REHÚSE  RECIBIR  LA CITACIÓN,
EL CURSOR  LO HARÁ  CONSTAR  CON LA SIGUIENTE<br><br>
DILIGENCIA.—La pongo yo, el Cursor, para hacer constar que, personado en el domicilio de D./D.ª N. N., éste se negó a recibir la citación. En ..., a ... de ... de ...<br></font>
<br>
<center><font size="4" face="times new roman">N. N., Cursor</font></center>
</font><br><br>
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
