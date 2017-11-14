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
                        <a href="pages/forms/indagacion.php">
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
                            <li class="active">
                                <a href="../../pages/forms/indagacion.php">Indagacion Previa</a>
                            </li>
                            <li>
                                <a href="../../pages/forms/introduccion.php">Fase Introductoria</a>
                            </li>
                            <li>
                                <a href="pages/forms/instruccion.php">Fase de Instrucción</a>
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
                            <h2>NUEVO CASO - INDAGACIÓN PREVIA</h2>
                            <h1>Sección 3</h1>
                            <h2><b>Preguntas para la preparación de la demanda</b></h2>

                        </div>
                        <div class="body">
                            <textarea id="tinymce">
<h3>INFORMACIÓN FAMILIAR DE LA PAREJA ANTES DEL MATRIMONIO</h3>


1.   Describa la relación conyugal de sus padres (incluyendo el carácter de cada uno y quien era la figura dominante en el hogar).<br><br>
<b>Demandante</b>:<br><br>


<b>Demandado(a):</b><br><br>

2.   ¿Hubo algún problema particular referente a sus padres y/o hermanos que pudieran haber tenido consecuencias grandes en usted (como alcohol, drogas, infidelidad, separaciones y divorcios, como también muerte prematura, enfermedades mentales o discapacidades físicas, etc.)?.  Si fue así, favor de explicar.<br><br>
<b>Demandante</b>:<br><br>


<b>Demandado(a):</b><br>
3.   ¿Cómo estos conflictos y relaciones afectaron su crecimiento o desarrollo (por ejemplo: su sentido de responsabilidad, sensibilidad hacia las necesidades de los demás, temperamento, ira, celos, egoísmo, uso de razón, etc.)?<br><br>
Referente a usted<br><br>
<b>Demandante</b>:<br><br>


<b>Demandado(a):</b><br><br>
4.  Describa cualquier evento o asunto importante  relacionados con su vida escolar, educación religiosa y amistades.<br><br>
<b>Demandante</b>:<br><br>


<b>Demandado(a):</b><br><br>
5.  Describa relaciones importantes anteriores que pudiesen haber afectado su vida adulta y matrimonial (historial del noviazgo, despecho, infidelidad, relaciones sexuales prematrimoniales, abortos voluntarios e involuntarios, etc.)<br><br>
<b>Demandante</b>:<br><br><br>


<b>Demandado(a):</b><br><br>
  6.   Describa el ambiente de su empleo, y/o carrera profesional y eventos o problemas significativos.<br><br>
<b>Demandante</b>:<br><br>


<b>Demandado(a):</b><br><br>
7.   ¿Hubo algún conflicto o lucha con vicios que haya experimentado antes o durante su matrimonio como juegos de azar, drogas, alcohol o pornografía¿Hubo alguna adicción o problemas legales? Si fue así, favor de explicar. ¿Cómo se abordaron estos conflictos?<br><br>
<b>Demandante</b>:<br><br>


<b>Demandado(a):</b><br><br>
8.   ¿Hubo algún problema físico y/o psicológico que pudieron haber afectado su relación antes o durante el matrimonio? Si fue así, favor de explicar. ¿Buscaron algún tipo de ayuda profesional? Referente al demandado(a)<br><br>
<b>Demandante</b>:<br><br>


<b>Demandado(a):</b><br><br>
9. ¿Cuándo y cómo conoció a la parte Demandada?<br><br>

10. Explique brevemente, ¿Qué estaba pasando en su vida cuando conoció a la parte Demandada?<br><br>

11. Explique brevemente, ¿Qué estaba pasando en la vida de la parte Demandada cuando se conocieron?<br><br>

12. ¿Cuánto duró el noviazgo?:<br><br>
    ¿Cómo fue el noviazgo?  (Muy Bueno/Regular/Malo/Muy Malo)<br><br>

    ¿Porqué?<br><br>

13. ¿Tuvieron rupturas durante el noviazgo?     (Si/No)    ¿Cuántas?          ¿De qué duración?<br><br>

    ¿Quién rompía y porqué?:<br><br>

    ¿Quién pedía la reconciliación y porqué?:<br><br>

14. ¿Quién mencionó el tema del matrimonio y cuáles fueron las circunstancias?<br><br>


15. ¿Durante el noviazgo mantuvieron relaciones sexuales?  (Si/No)<br><br>
      ¿Desde el inicio del noviazgo cuándo comenzaron? ¿Eran relaciones continuas o esporádicas?<br><br>


16. ¿Durante el noviazgo bebían, se emborrachaban?  (Si/No)<br><br>
   ¿Quién lo hacía?<br><br>
    ¿Cada cuánto tiempo se emborrachaba?<br><br>


    ¿Desaparecía durante algún día?<br><br>


17. ¿Ocurrió algo específico, o raro que acelerara la decisión para casarse?<br><br>


18. ¿Hubo alguna presión para casarse por parte de alguno de los contrayentes?   (Si/No)<br><br>
  Si es así, explique:<br><br>



19. ¿Cómo aconteció el compromiso para la boda, quién preparó la boda?<br><br>



20. ¿Hicieron Cursillo prematrimonial?  (Si/No)<br><br>
   Si lo hicieron dónde fue y cuántos días<br><br>


21. ¿Hicieron algún sacramento, bautismo o confirmación, antes del matrimonio?  (Si/No)<br><br>
      ¿Quién o quiénes lo hicieron, tuvieron catequesis, durante cuánto tiempo?<br><br>



22. ¿Se rompió o se canceló el compromiso en algún momento?   (Si/No)<br><br>
  Si es así, por favor explique las circunstancias, cómo y por qué se reconciliaron:<br><br>


23. ¿Hubo alguna fuerza, amenaza o miedo infundido (interno o externo) para que se casara con la parte Demandada?   ¿Para que la parte Demandada se casara con usted?  Por favor explique<br><br>






24. ¿Tuvo dudas sobre el matrimonio días antes de la boda?  (Si/No)   Si es sí, puede explicarlas.<br><br>



25. ¿Cómo fue el día de la boda y la fiesta?<br><br>






26. ¿Cómo fue la noche de bodas?<br><br>


27. ¿Hicieron viaje de novios?  (Si/No)   ¿Si no, porqué no lo hicieron?   ¿Si lo hicieron cómo fue?<br><br>

<b>Su concepto del matrimonio</b><br><br>

28. Al momento de contraer matrimonio, ¿pensó usted en cualquier evento o circunstancia que le permitiera terminar el matrimonio y contraer otro matrimonio?   (Si/No)  Por favor explique su respuesta:<br><br>


29. ¿Tuvo usted algún conocimiento si la parte Demandada pensó en algún evento o circunstancia que le permitiera terminar el matrimonio y contraer otro matrimonio?   (Si/No)  Por favor explique su respuesta:<br><br>




30. Antes de contraer este matrimonio, ¿cuál fue su experiencia en cuanto al divorcio entre su familia y  amistades?<br><br>




31. ¿Cuál fue la experiencia de la parte Demandada?<br><br>



32. ¿Cree que usted y  la parte Demandada compartían el mismo concepto sobre el matrimonio en el momento de casarse?     (Si/No)  <br><br>
Por favor explique su respuesta:<br><br>



33. Por favor complete lo siguiente tal y como lo pensó en el momento del matrimonio:
       “Matrimonio hasta que la muerte nos separe” significa:….<br><br>



34. Antes del matrimonio, ¿qué discutieron y decidieron usted y la parte Demandada sobre el tema de los hijos en el matrimonio?<br><br>



35. ¿Compartían las mismas ideas y decisiones sobre el tema de los hijos en el matrimonio? (Si/No)<br><br>
       Por favor explique su respuesta:<br><br>



36. ¿Se reservó usted o la parte Demandada el derecho de determinar cuando tendrían hijos/o si intentarían tener hijos?(Si/No)<br><br>
      ¿Puede explicarlo?<br><br>





37. ¿Puso usted o la parte Demandada alguna condición sobre cuando intentarían tener hijos (por ejemplo, si el matrimonio fuese exitoso, si se lograra alguna estabilidad económica, si se alcanzase cierto nivel profesional?  (Si/No)<br><br>
Por favor, explique.<br><br>




38. ¿Planeó usted demorar la concepción de los hijos por medio de algún método anticonceptivo o algún procedimiento de esterilización?  (Si/No)<br><br>
   De ser así, ¿Qué planificó? ¿Lo llevó a cabo?<br><br>


¿Quién de ustedes usó un método anticonceptivo y por cuánto tiempo?<br><br>

¿Quién llevo a cabo la esterilización?<br><br>
     




39. En el momento de casarse, ¿era alguno de ustedes sexualmente activo con alguien más?   (Si/No)<br><br>
      Si es así, explique:<br><br>




40. ¿Fue la infidelidad un problema en su matrimonio con la parte Demandada?    (Si/No)<br><br>



41. Si es así, ¿cuál de los dos fue infiel? ¿O lo fueron ambos?<br><br>



42. Si uno o ambos fueron infieles, por favor conteste lo siguiente:<br><br>
      ¿Cuál fue el acto de infidelidad?<br><br>




      ¿Cuándo ocurrió el primer acto de infidelidad?<br><br>




      ¿Fue la infidelidad un problema continuo?    (Si/No)  <br><br>
      Si fue así, por favor de detalles:<br><br>




43. ¿En el momento del matrimonio, creyó usted que la infidelidad da a los esposos el derecho de terminar el matrimonio y contraer otro?<br><br>

<b>REFLEXIÓN GENERAL</b><br><br>

44. Por favor explique brevemente los problemas, conflictos, y/o hechos  que usted cree causaron la ruptura de este matrimonio, y cuándo surgió cada uno de ellos:<br><br>


45. ¿Supo usted de la existencia de esos problemas antes de casarse?    (Si/No) <br><br>

<br><br> Si es así, por favor explique por qué en ese momento no los analizó seriamente o por qué decidió casarse a pesar de esos problemas:<br><br>





46. ¿Qué piensa la parte Demandada sobre cuan responsable fue usted por los problemas y el fracaso del matrimonio?<br><br>




47. ¿Cuán responsable fue la parte Demandada con los problemas y el fracaso del matrimonio?<br><br>



48. ¿Cuándo dejaron de vivir juntos como marido y mujer?<br><br>




49. ¿Qué fue lo que condujo a la separación final?<br><br>


50. ¿Descubrió usted algo importante después de su matrimonio que fue ocultado o no revelado antes de la boda?  (Si/No)<br><br>
 Si es así, por favor explique:<br><br>




51. ¿Se casó usted por otra razón que no fuese a la de querer contraer matrimonio, como algún embarazo, obtener  los papeles de residencia, obtener ayuda financiera, etc.?  ¿Y la parte Demandada?<br><br>




52. ¿Puso usted o la parte Demandada alguna condición antes del matrimonio que era de llevarse a cabo por alguno de los dos después del matrimonio?   Si es así, por favor explique:<br><br>





                            </textarea>
                              <button type="button" onclick="window.location='../../pages/forms/indagacion2.php';">Siguiente</buton>
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
