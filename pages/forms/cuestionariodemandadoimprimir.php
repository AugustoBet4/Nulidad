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
                            <h2>CUESTIONARIO DEL DEMANDADO</h2>
                        </div>
                        <div class="body">
                          <textarea id="tinymce">
                            <BR>
<center><font color="#000000" face="tahoma" size="4"><b>CUESTIONARIO DEL DEMANDADO</b></font></center>
<font color="#000000" face="tahoma" size="4">
<br><br><br>
Numero del Caso:<br><br>
Nombre del Caso:<br><br>

Las siguientes preguntas requieren de una explicación detallada. El propósito del cuestionario es de recaudar datos precisos de la relación en general antes y durante el matrimonio.
Se le agradecerá enormemente sí:<br>
Contesta cada pregunta, y claramente enumera la pregunta que esta contestando.<br>
Escriba sus respuestas en computadora o en letra de molde clara, con tinta negra y en papel blanco.<br>
Utilice papel tamaño carta y escrita sobre un lado solamente.<br>
No anote las preguntas del cuestionario.<br><br>

Si no cumple con las instrucciones facilitadas el material tendrá que hacerlas de nuevo, lo que resultará en un retraso en su caso.<br><br>
<br><br><br><br>
Evite las respuestas de sí y no a menos que sea claro que no hay otra respuesta<br><br><br>


I. SOBRE USTED<br>
  <br>
A1. ¿De una descripción de sus padres?<br>
A2. ¿Había problemas en el matrimonio de sus padres? De ser así, por favor de una explicación detallada.<br>
A3. ¿Cuántos hermanos y hermanas tenía usted? ¿Como era su relación con cada uno de ellos?<br>
A4. Describa su vida durante su infancia y adolescencia.<br>
A5. ¿Tenía algún problema de salud durante su infancia y adolescencia?<br>
A6. ¿Durante sus años en casa, fue alguna vez tratado(a) por problemas emocionales, psicológicos o psiquiátricos? Si es así, de el motivo, dando nombres de doctores y donde fue tratado(a).<br>
A7. Describa su historial de empleo, antes y después de su matrimonio. Aproximadamente los años que duro en los trabajos y porque cambio de trabajo, si fue así.<br>
A8. ¿Cuales considera usted que son las mejores cualidades de su personalidad?<br>
A9. ¿Cuales considera usted que son las debilidades en su personalidad?<br>
A10. ¿Describa su formación religiosa?<br>
A11. ¿Había historial de abuso de alcohol o de drogas en su familia, favor de explicar?<br>
A12. ¿Había historia de abuso físico, mental o sexual en su familia? De ser así, por favor de una explicación detallada.<br>
<br><br><br>
II. SOBRE SU ESPOSO(a)<br><br><br>
 
A13. ¿Describa a los padres de su esposo(a)?<br>
A14. ¿Había problemas en el matrimonio de los padres de su esposo(a)?<br>
A15. ¿Cuántos hermanos y hermanas tenía su esposo(a)? ¿Cómo era la relación de su esposo(a) con ellos?<br>
A16. Describa la vida de su esposo(a) durante su infancia y adolescencia.<br>
A17. ¿Tenía su esposo(a) problemas de salud durante la infancia y adolescencia?<br>
A18. ¿Ha sido su esposo(a) tratado(a) por problemas psiquiátricos, psicológicos o emocionales?<br>
A19. Describa el historial de empleo de su esposo(a), trabajos, cuánto tiempo trabajo en cada lugar y porque cambio de trabajos.<br>
A20. ¿Cuales considera usted que sean las mejores cualidades en la personalidad de su esposo(a)?<br>
A21. ¿Cuales considera usted que sean las debilidades en la personalidad de su esposo(a)?<br>
A22. Describa la formación religiosa de su esposo(a).<br>
A23. ¿Había abuso de alcohol o de drogas en la familia de su esposo(a)? Favor de explicar.<br>
A24. ¿Había historia de abuso físico, mental o sexual en la familia de su esposo(a)? De ser así, por favor de una explicación detallada.<br>

<br><br><br>

III. NOVIAZGO/COMPROMISO
 <br><br><br>
B1. ¿Donde, cuando, y como conoció usted a su esposo(a)?<br>
B2. ¿Con que frecuencia después de haberse conocido salían juntos?<br>
B3. ¿Qué fue lo que le atrajo a usted hacia su esposo(a)? ¿Sabe usted que le atrajo a él/ella hacia usted?<br>
B4. Describa brevemente la relación entre usted y su esposo(a) durante el noviazgo.<br>
B5. ¿Qué hacían cuando salían juntos?<br>
B6. ¿Cuando se dio cuenta de que se había enamorado de su esposo/a?<br>
B7. ¿Qué significaba para usted estar enamorado/a?<br>
B8. ¿Paso algo fuera de lo común durante el noviazgo?<br>
B9. ¿Qué edad tenía usted cuando comenzó el noviazgo?<br>
B10. ¿Existió algún compromiso formal y cuanto tiempo duro el compromiso?<br>
B11. ¿Se termino el compromiso en algún momento? Si la respuesta es sí, ¿Cual fue el motivo?<br>
B12. ¿Hubo relaciones sexuales durante el noviazgo o durante el compromiso?<br>
B13. ¿Hubo embarazo(s) antes del matrimonio?<br>
B14. ¿Eran novios exclusivos durante el noviazgo y el compromiso?<br>
B15. ¿Tuvo usted otros novios antes de comenzar el noviazgo con su esposo(a)?<br>
B16. ¿Tenía su esposo(a) otros novios antes de hacerse novio/a de usted?<br>
B17. ¿Cuál era la actitud de sus padres, familiares, amistades con respecto a su noviazgo con su esposo(a)?<br>
B18. ¿Cuándo y bajo que circunstancia surgió entre ustedes dos el tema del matrimonio?<br>
B19. ¿Cuáles eran las razones básicas por las cuales decidieron casarse?<br>
B20. ¿Cuánto tiempo antes de que se casaran fijaron la fecha de la ceremonia?<br>
 <br><br><br>
IV. CELEBRACION DE LA BODA
 <br><br><br>
C1. Si se casó en la iglesia Católica, de las razones por las que se casó en la Iglesia Católica.<br>
C2. Antes de que se casaran, ¿recibieron ustedes instrucciones acerca del matrimonio? (Por ejemplo, de un sacerdote, diacono, ministro, consejero, programa de pre-cana, etc.)<br>
C3. ¿Fue presentada la enseñanza Católica acerca de la fidelidad, los hijos y la permanencia del matrimonio durante la preparación antes del casamiento?<br>
C4. ¿Cuál fue la reacción de cada uno de ustedes a esta preparación?<br>
C5. ¿Qué papel desempeñaba la religión en la vida de cada uno en ese tiempo?<br>
C6. Si este fue un matrimonio entre dos personas de diferente religiones, ¿Hubo algún conflicto debido a la diferencia de religiones, o problemas con el bautismo y la educación de los hijos en la Iglesia Católica?<br>
C7. ¿Tenía usted alguna duda de que él/ella era la persona con quien usted quería vivir el resto de su vida?<br>
C8. ¿Hubo alguien que le aconsejara en contra de este matrimonio? ¿Por qué?<br>
C9. ¿Qué papel tomó cada uno en los planes de la boda?<br>
C10. ¿Hubo alguna interferencia de parte de otros en sus planes?<br>
C11. ¿Pasó algo fuera de lo común el día de la boda o en los días inmediatamente antes de la boda? <br>
C12. ¿Creían ustedes que cuando hicieron sus votos matrimoniales estaban renunciando a la libertad de volverse a casar si este matrimonio resultara infeliz? Favor de explicar.<br>
C13. El matrimonio es una unión en donde la meta es para el bien de la pareja y la procreación y educación de los hijos. ¿Comprendían ustedes este aspecto del matrimonio?<br>
C14. Si alguno de los dos entendía esto, ¿se comprometió sinceramente a este matrimonio?<br>
C15. ¿Hicieron algún contrato o pacto prenupcial antes de la boda? Si la respuesta es sí, presente una copia.<br>
C16. ¿Escribieron ustedes sus propios votos matrimoniales? Si la respuesta es sí, cuales fueron esos votos.<br>
C17. ¿Tenía en su mente o en la mente de su esposo(a) alguna condición o reservación acerca del uno al otro antes de casarse? Si la respuesta es sí, favor de explicar.<br>
C18. ¿Hubo presión o miedo, interior o exterior, que le obligo a casarse? Si la respuesta es sí, favor de explicar.<br>
C19. ¿Tuvieron luna de miel?<br>
C20. Describa si hubo problemas, frustraciones o descubrimientos indiscretos durante la luna de miel.<br>
 <br><br><br>
V. LA VIDA DEL MATRIMONIO
 <br><br><br>
D1. Describa el primer año del Matrimonio.<br>
D2. ¿Cuándo surgieron los problemas por primera vez en el matrimonio?<br>
D3. Describa la naturaleza de los problemas.<br>
D4. ¿Qué papel asumió cada uno de ustedes durante el matrimonio?<br>
D5. ¿Cómo y por quién fueron las decisiones hechas en el matrimonio?<br>
D6. ¿Hasta que punto usted y su esposo(a) pudieron comunicarse honesta y eficazmente entre si?<br>
D7. ¿Podían expresar y compartir sus sentimientos el uno con el otro?<br>
D8. ¿Tuvo usted una relación sexual satisfactoria en el matrimonio?<br>
D9. ¿Tenía usted y su esposo(a) la intención de tener niños en el matrimonio?<br>
D10. ¿Se utilizaron anticonceptivos durante el matrimonio? Si fue así, ¿por quién?, y ¿por cuánto tiempo?<br>
D11. ¿Cuántos hijos nacieron en el matrimonio?<br>
D12. Si no nacieron hijos en el matrimonio explique por qué no.<br>
D13. ¿Cómo se llevaba usted con la familia de su esposo(a)?<br>
D14. ¿Cómo se llevaba su esposo(a) con la familia de usted?<br>
D15. ¿Hubo problemas relacionados con el trabajo en el matrimonio? Si es así explique por favor.<br>
D16. ¿Hubo problemas de infidelidad en el matrimonio? ¿Cuándo comenzaron? y ¿Cómo fueron resueltos?<br>
D17. ¿Cómo se describiría usted como padre/madre?<br>
D18. ¿Qué clase de padre/madre fue su esposo/a?<br>
D19. ¿Hubo problemas financieros que afectaron el matrimonio?<br>
D20. ¿Hubo problemas con el abuso de alcohol y/o drogas?<br>
D21. ¿Qué papel tuvo la religión en el matrimonio?<br>
D22. ¿Hubo problemas que surgieron debido a diferencias culturales, raciales y religiosas?<br>
D23. ¿Hubo algún problema de abuso físico, mental o sexual durante su matrimonio? Si fue así, favor de explicar.<br>
 <br><br><br>
VI. FACTORES QUE CONDUJERON A LA DESINTEGRACIÓN DEL MATRIMONIO
 <br><br><br>
E1. ¿Qué hicieron para tratar de resolver los problemas en el matrimonio?<br>
E2. ¿Cuándo fue la posibilidad de divorcio mencionado por primera vez y por quién?<br>
E3. ¿Hubo separaciones durante el matrimonio? ¿Por qué? ¿Cuántas? ¿Por cuánto tiempo?<br>
E4. ¿Cuándo y por qué ocurrió la separación final?<br>
E5. ¿Qué intentos hicieron para reconciliarse?<br>
E6. ¿Hubo consejería profesional para resolver los problemas en el matrimonio? Si fue así, proporcione los nombres de los consejeros, fechas y lugares.<br>
E7. ¿Está usted dispuesto(a) a firmar un permiso para que los consejeros puedan testificar? Si la respuesta es sí, de los nombres y las direcciones.<br>
E8. ¿Hubo alguna otra persona involucrada en el rompimiento del matrimonio?<br>
E9. ¿Cuales eran su quejas sobre su esposo(a)?<br>
E10. ¿Cuáles eran las quejas de su esposo(a) sobre usted?<br>
E11. ¿Quién pidió el divorcio civil? ¿Cuándo? ¿Dónde? ¿Cuáles fueron los causales?<br>
E12. ¿Cuánto tiempo vivieron juntos exactamente?<br>
E13. Considerando los problemas en su matrimonio, ¿Cuál fue la razón por la cual vivieron juntos todo ese tiempo?<br>
E14. ¿Por qué cree usted que su matrimonio es inválido y nulo?<br>
<br><br><br>
VII. ASUNTOS/TERMINOS PENDIENTES DESPUES DEL DIVORCIO
 <br><br><br>
F1. ¿Quién recibió la custodia de los hijos? ¿Por qué?<br>
F2. ¿Han sido fieles a las responsabilidades financieras, morales, espirituales, y familiares de los hijos de este matrimonio después del divorcio?<br>
F3. ¿Existen demandas civiles pendientes?<br>
F4. ¿Se ha vuelto a casar usted? Si la respuesta es sí, escriba el/los nombre(s) fecha(s), de los matrimonios religión y previo estado matrimonial de su presente esposo(a). Si se ha casado más de una vez, por favor liste la misma información para cada uno de sus matrimonios.<br>
F5. ¿Se ha vuelto a casar su esposo(a)? Si la respuesta es sí, de el nombre, religión y estado matrimonial previo del presente esposo(a).<br>
F6. ¿Por qué está solicitando esta anulación matrimonial de la Iglesia?<br>
 <br><br><br>
VIII. CON RESPECTO A EMBARAZO PREMATRIMONIAL
<br>
(Si hubo un embarazo prematrimonial,
por favor conteste las siguientes preguntas)
 <br>
G1. ¿Cuándo el embarazo prematrimonial se supo, ustedes tenían planes de casarse?<br>
G2. En el momento del embarazo, ¿estaban ustedes comprometidos?<br>
G3. ¿Cuál fue su reacción cuando se dio cuenta del embarazo?<br>
G4. ¿Cuál fue la reacción de su esposo(a) cuando se dio cuenta del embarazo?<br>
G5. ¿Cuál fue la reacción de sus padres con respecto al embarazo?<br>
G6. ¿Cuál fue la reacción de los padres de su esposo(a)?<br>
G7. Si no hubiera habido embarazo, ¿Se hubiera llevado a cabo el matrimonio? Por favor explique.<br>
G8. ¿Hubo presión alguna por parte de los padres de cualquiera de las dos partes para que se llevara a cabo el matrimonio? De ser así por favor explique.<br>
G9. ¿Tenía usted o su esposo(a) la intención de terminar el matrimonio después de que el bebe naciera?<br>
G10. ¿Consideraron otras alternativas además del matrimonio cuando el embarazo se supo?<br>
G11. ¿Tiene algún otro comentario que añadir a este respecto?<br>
 <br><br><br>
IX. VALIDACION DEL MATRIMONIO CIVIL<br>
(Si el matrimonio fue validado por la Iglesia Católica,
por favor responda las siguientes preguntas).
 <br><br><br>
H1. ¿Dónde se llevó a cabo el matrimonio civil?<br>
H2. ¿Dónde se llevó a cabo el matrimonio religioso?<br>
H3. ¿Por qué no se celebro el matrimonio en la Iglesia Católica desde un principio?  Por favor elabore una respuesta detallada.<br>
H4. ¿Qué circunstancias provocaron que el matrimonio se celebrara en la Iglesia Católica?<br>
H5. ¿Hubo presión para que el matrimonio se celebrara en la Iglesia Católica por parte de alguna persona que no fuera el novio/a?  (Por ejemplo, por parte de los padres, amigos, etc) De ser así, elabore una respuesta detallada.<br>
H6. ¿Estaban tanto usted como su esposo(a) completamente de acuerdo con la celebración religiosa? De no ser así, elabore una respuesta detallada.<br>
H7. Ya ha mencionado que había problemas en su matrimonio. ¿En el momento en que se celebro el matrimonio en la Iglesia, existían esos problemas?<br>
H8. ¿Después de que se celebrara el matrimonio en la Iglesia, continuaron los problemas? <br>
H9. Si había problemas en el matrimonio civil, ¿por qué se celebró el matrimonio en la Iglesia?<br>
H10. Al momento en que se hacían arreglos para la celebración de la boda en la Iglesia, ¿fue el sacerdote o diacono informado que había problemas en el matrimonio civil?<br>
H11. ¿Qué consejo recibió de parte del sacerdote o diácono?<br>
H12. ¿Recibieron usted y su esposo(a) instrucciones de parte del sacerdote o diácono antes de que se celebrara la boda?<br>
H13. ¿De qué se trataron estas instrucciones?<br>
H14. ¿Dónde se llevó a cabo la celebración de la boda religiosa? Escriba el nombre y la dirección de la Iglesia.<br>
H15. ¿Quiénes fueron sus testigos en la validación del matrimonio?<br>
H16. ¿Sucedió algo fuera de lo común durante la celebración matrimonial? De ser así, por favor elaborar una respuesta detallada.<br>
H17. ¿Tiene información adicional con respecto a la validación del matrimonio?<br>
 <br><br><br>
Si tiene información que añadir sobre el matrimonio, por favor inclúyalo en este espacio.
<br><br><br>
Existe la posibilidad de que su esposo(a)  lea el testimonio que usted ha escrito. Sin embargo, la Ley Eclesiástica atestigua que la Corte tiene el derecho de retener información si se considera que no está en los mejores intereses de las partes involucradas.
<br><br><br><br><br><br>


Yo, quien suscribe, declaro bajo juramento de perjurio, que las respuestas que he dado, son la verdad, toda la verdad y nada más que la verdad. LO JURO ANTE DIOS.
<br><br><br>
Además juro no discutir esta información con las otras partes o los testigos que he nombrado, hasta que el caso se haya concluido.
<br><br><br>

_________________________________      Firmado el día  ________ de _______________ del_______
Firma del Demandante
<br><br><br>

El Cuestionario ya firmado deberá se regresado con sus respuestas.
<br><br><br>

Debido a las provisiones de la ley Eclesiástica de mantener documentos originales con firmas originales, no podemos aceptar ninguna respuesta por fax u otros recursos electrónicos. Gracias por su cooperación.

<br><br><br>

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
