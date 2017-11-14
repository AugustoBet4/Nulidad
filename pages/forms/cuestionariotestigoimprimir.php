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
                                <a href="indagacion.php">Indagación previa</a>
                            </li>
                            <li class="active">
                                <a href="introduccion.php">Fase Introductoria</a>
                            </li>
                            <li>
                                <a href="instruccion.php">Fase Instructoria</a>
                            </li>
                            <li>
                                <a href="alegatoria.php">Fase Alegatoria</a>
                            </li>
                            <li >
                                <a href="sentencia.php">Fase Decisoria</a>
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
                            <h2>CUESTIONARIO DEL TESTIGO</h2>
                        </div>
                        <div class="body">
                          <textarea id="tinymce">
                            <BR>
<center><font color="#000000" face="tahoma" size="4"><b>CUESTIONARIO DEL TESTIGO</b></font></center>
<font color="#000000" face="tahoma" size="4">
<br><br><br>
Numero del Caso:<br><br>
Nombre del Caso:<br><br>

Demandante: <br><br>
Demandado: <br><br>
Nombre del Testigo:<br><br>
<br><br><br>
Por favor complete o corrija la información sobre usted.
<br><br><br>
Nombre Completo:
<br><br><br>
Prefix:
<br><br><br>
Prefijo Nombre
<br><br><br>
Segundo Nombre
<br><br><br>
Apellido
<br><br><br>
Sufijo
<br><br><br>
Dirección
<br><br><br>
<br><br><br>
Calle
<br><br><br>
Ciudad
<br><br><br>
Estado
<br><br><br>
Código Postal
<br><br><br>
País
<br><br><br>
Teléfono
<br><br><br>
Fecha de nacimiento
<br><br><br>
Afiliación Religiosa
<br><br><br>
Género
<br><br><br>
En aceptar testificar, declaro que yo no he sido entrenado en ningún modo, por ninguna de las partes o cualquier otra persona, con respecto a las respuestas que estoy a punto de dar. Entiendo que este es un procedimiento de la Iglesia y no tiene nada que ver con las leyes civiles ni afectan la legitimidad de cualquiera de los hijos nacidos del matrimonio. Si una Declaración de Nulidad fuera concedida su único efecto sería la libertad de las partes para entrar en otro matrimonio en la Iglesia Católica.
<br>
Se le agradecerá mucho si usted: <br>
Mecanografié sus respuestas o escriba sus respuestas claramente en tinta negra en papel blanco <br>
Utilizar papel de tamaño carta y escribir en un solo lado<br>
Conteste cada pregunta, numerando claramente las preguntas siendo contestadas<br>
Evite "sí" y "no" respuestas a menos que sea claro que no hay otra respuesta <br>
No escriba sus respuestas en el cuestionario. <br>
1. ¿Desde cuándo conoce al Demandante?<br>
2. ¿Es usted pariente de esta persona? De ser así, ¿cuál es su relación?<br>
3. ¿Considera usted a esta persona honesta? <br>
4. ¿Cree usted que esta persona diría la verdad, aún cuando pudiera ser para su desventaja?<br>
5. ¿Por cuánto tiempo y qué tan bien conoce al Demandado(a)?<br>
6. ¿Es usted pariente de esta persona? De ser así, ¿cuál es su relación?<br>
7. ¿Considera usted a esta persona honesta? <br>
8. ¿Cree usted que esta persona diría la verdad, aún cuando pudiera ser para su desventaja?<br>
<br>
I. ANTECEDENTES FAMILIARES/ PERSONALES<br>

A1. 	¿Cómo describiría la personalidad de el/la Demandante?<br>
A2.	¿Cuáles son sus antecedentes familiares? (Su relación con sus padres y parientes)<br>
A3. 	¿Cómo describiría la personalidad de el/la Demandado(a)?<br>
A4.	¿Cuáles son sus antecedentes familiares? (Su relación con sus padres y parientes)<br>
<br><br><br>
II. CON RESPECTO AL NOVIAZGO<br>
<br><br><br>
B1.	¿Por cuánto tiempo fueron novios el/la Demandante y el/la Demandado(a)?<br>
B2.	¿Estuvieron comprometidos para casarse? De ser así, ¿por cuánto tiempo?<br>
B3.	Antes del matrimonio, ¿habló usted con alguna de las partes acerca del matrimonio? De ser así, por favor explique.<br>
B4.	¿Le confió cualquiera de las partes sus creencias y/o convicciones con respecto al matrimonio? De ser así, por favor explique.<br>
B5.	Describa cualquier problema y/o circunstancias durante el noviazgo. (Por ejemplo: peleas constantes, rompimientos serios, uso excesivo de alcohol o drogas, embarazo, infidelidad, irresponsabilidad, etc.) ¿Cómo se resolvieron esas dificultades?<br>
B6.	¿Esperaba usted que este matrimonio fuera exitoso? Por favor, explique.<br>
B7.	Si corresponde, ¿tuvieron cualquiera de las partes, dudas acerca del compromiso matrimonial en la Iglesia Católica? De ser así, por favor explique. <br>
B8.	¿Hubo alguien que se opusiera o aconsejara que no se realizara este matrimonio? De ser así, ¿quién y por qué?<br>
B10	¿Hubo alguna presión interna o externa que intimidara o forzara la decisión de casarse? ¿Quién lo hizo? ¿Por qué, y qué clase de presión se ejerció?
B9.	¿Cree usted que ambas partes se comprometieron en matrimonio de forma libre y con amor mutuo? De no ser así, por favor explique.<br>
B11.	¿Cuando llegaron al matrimonio, usted cree que ambas partes intentaban una unión permanente hasta la muerte? De no ser así, por favor explique.<br>
B12.	¿Cuando llegaron al matrimonio?, ¿cree usted que ambas partes tenían la intención de tener hijos? De no ser así, por favor explique.<br>
B13.	Cuando llegaron al matrimonio, ¿cree usted que ambas partes tenían la intención de ser fieles por siempre? De no ser así, por favor explique.<br>
B14.	¿Creía usted que ambas partes eran lo suficientemente maduras para comprender las obligaciones y responsabilidades del matrimonio? De no ser así, por favor explique. <br>
B15.	¿Eran, ambas partes, capaces y dispuestos a asumir esas obligaciones y responsabilidades del matrimonio? De no ser así, por favor explique.<br>
B16.	¿Hubo algún embarazo antes del matrimonio de por medio en este caso? De ser así, ¿de qué manera afectó la decisión de llegar al matrimonio?<br>
<br><br><br>
III. CELEBRACIÓN DE LA UNIÓN MATRIMONIAL
<br><br><br>
C1. ¿Estuvo usted presente en la ceremonia de bodas? De ser así, ¿hubo algo inusual en ésta?
C2. ¿Hubo una recepción después de la ceremonia? ¿Asistió a la recepción? ¿Se presentó algo inusual durante la recepción?

IV. LA VIDA DEL MATRIMONIO

D1. 	¿Qué tan cercana era su relación con la pareja durante su vida matrimonial? ¿Con qué frecuencia se comunicaba con ellos?
D2.	¿Cómo fueron los primeros años del matrimonio?
D3.	¿Cualquiera de las partes le confiaron cómo iban las cosas en el matrimonio? De ser así, ¿quién de ellos hizo las confidencias, cuándo y hasta qué punto?
D4. 	¿En su opinión, hasta qué punto la pareja tuvo la oportunidad de comunicarse honesta y efectivamente el uno con el otro?
D5.	¿Había problemas por el abuso de bebidas alcohólicas o drogas durante el matrimonio?
D6.	¿De qué forma manejaban ambas partes los eventos diarios de la vida?
D7.	¿Qué tan bien manejaban cada uno de ellos los cambios en las diferentes situaciones que se presentaban?
D8.	Si no hubo hijos producto de este matrimonio, explique la razón.
D9.	¿Cuál fue el papel de la religión en el matrimonio?
D10.	Si corresponde, ¿hubo dificultades que surgieran por las diferencias culturales, raciales, o religiosas?
D11.	¿Cómo describiría sus valores personales, por que vivían?
D12.	¿Se presentaron problemas de infidelidad en el matrimonio? De ser así, por favor explique.
D13.	¿Si corresponde, hubo problemas de abuso físico, sexual, o mental con el cónyuge o los hijos? De ser así, explique.
D14.	¿Tenía cualquiera de las partes problemas con la ley? De ser así, explique
D15.	Explique si cualquiera de las pastes presentaba una actitud posesiva inusual.
D16.	¿Cómo eran las partes como padres? ¿Manejaban su responsabilidad con cariño, cuidado y educación para sus hijos?

V. FACTORES QUE ENCAMINARON AL ROMPIMIENTO DEL MATRIMONIO
Y AL DIVORCIO FINAL

E1.	¿Cuándo se dio cuenta de que había problemas en el matrimonio?
E2.	¿Cuál era la naturaleza del los problemas? Explique.
E3.	¿Se resolvieron esos problemas? De ser así, explique.
E4.	¿Cuándo se habló de divorcio por primera vez? ¿Quién lo inició?
E5. 	¿Hubo separaciones temporales que ocurrieran durante el matrimonio? (Cuándo, por qué, y por cuánto tiempo)
E6.	¿Cuándo y por qué se dio la separación final?
E7.	¿Hubo otras personas involucradas en el rompimiento del matrimonio?
E8.	¿Hubo intentos de reconciliación?
E9.	¿Cuál fue su reacción personal cuando se enteró del divorcio?
E10.	¿Por qué cree que fracasó el matrimonio?
E11.	Dada la duración del matrimonio, ¿por qué cree que la pareja permaneció juntos durante todo ese tiempo?

VI. ASUNTOS DESPUÉS DEL DIVORCIO

F1.	Si hubo hijos producto del matrimonio, ¿quién recibió la custodia?
F2.	¿Han cumplido las partes con sus responsabilidades financieras, morales, espirituales y familiares con los hijos producto del matrimonio? De no ser así, explique.
F3.	¿Se ha vuelto a casar alguna de las partes? De ser así, ¿cree usted que sea feliz en la presente relación?

VII. 	EN LO CONCERNIENTE A UN EMBARAZO PREMARITAL

G1. 	¿Hubo un embarazo prematrimonial en esta relación matrimonial?
G2. 	De ser así, ¿cómo afectó esto la decisión de casarse?
G3. 	¿Había planes de matrimonio antes de saber sobre el embarazo?
G4. 	¿Cómo reaccionaron las partes al saber del embarazo?
G5. 	¿Como reaccionaron los padres de los involucrados al saber del embarazo?
G6. 	¿Se hubiera llevado a cabo el matrimonio si no hubiera habido un embarazo?
G7. 	¿Se consideró alguna alternativa al matrimonio cuando se supo del embarazo? De ser así, elabore la respuesta.
G8. 	¿Tiene algún otro comentario a este respecto?

VIII - VALIDACIÓN DE UN MATRIMONIO CIVIL

(Si se llevó a cabo un matrimonio civil o no-católico antes de la ceremonia religiosa, por favor responda a las siguientes preguntas).

H1. 	¿Por qué no se llevó a cabo el matrimonio por la Iglesia inicialmente?
H2. 	¿Después de la celebración del servicio civil, las partes se consideraban unidas en casamiento o no fue sino hasta la celebración de la boda en la Iglesia que consideraron su matrimonio “legítimo?”
H3. 	¿Se consideró la convalidación como un nuevo compromiso o únicamente como una bendición de la Iglesia?
H4. 	¿Existió alguna presión por parte de personas alrededor de la pareja para que se llevara a cabo la convalidación en la Iglesia Católica?  Por favor de detalles.
H5. 	¿Hubo problemas en el matrimonio antes de la ceremonia católica?  De ser así, por favor de detalles.
H6. 	¿Hubo alguna instrucción por parte del sacerdote o diácono celebrando el sacramento?
H7. 	¿Se le informo al sacerdote o diácono de los problemas en la relación de la pareja?
H8. 	¿Cómo describiría los sentimientos o el ambiente con respecto a la celebración en la Iglesia?
H9. 	¿Tiene alguna otra observación que agregar a este respecto?

IX - OTHER

I1. 	¿Hay algo más que quisiera agregar a la oficina del Tribunal Eclesiástico con respecto al matrimonio?
I2. 	Si se presentara la necesidad de aclarar sus declaraciones, ¿estaría usted en la disposición de ser contactado por esta Corte o la Corte de Apelaciones?




Yo, quien firma el presente documento, declaro bajo juramento, que las respuestas que he ofrecido, son verdaderas, la verdad y nada más que la verdad. EN EL NOMBRE SEA DE DIOS

Además prometo no discutir con nadie la información ofrecida hasta que este caso haya concluido.




Lugar
																			Firma del Testigo del Demandante


Con fecha del



El Cuestionario, firmado, deberá regresarse con sus respuestas.

Debido a las provisiones de la ley Eclesiástica de mantener documentos originales con firmas originales, no podemos aceptar cualquier respuesta por fax u otros recursos electrónicos. Gracias por su cooperación.

</font>
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
