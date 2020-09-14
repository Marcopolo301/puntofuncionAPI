<?php ob_start(); ?>


<?php

$Nombre = $_POST['nombre'];
$Proyecto = $_POST['proyecto'];
$Integrantes = $_POST['integrantes'];
$EE1 = $_POST['EE1'];
$EE2 = $_POST['EE2'];
$EE3 = $_POST['EE3'];

$EE = $EE1 + $EE2 + $EE3;
$SE = ($_POST['SE1']) + ($_POST['SE2']) + ($_POST['SE3']);
$CE = ($_POST['CE1']) + ($_POST['CE2']) + ($_POST['CE3']);
$ALI = ($_POST['ALI1']) + ($_POST['ALI2']) + ($_POST['ALI3']);
$AIE = ($_POST['AIE1']) + ($_POST['AIE2']) + ($_POST['AIE3']);

$SumaEE = ($_POST['EE1'] * 3) + ($_POST['EE2'] * 4) + ($_POST['EE3'] * 6);
$SumaSE = ($_POST['SE1'] * 4) + ($_POST['SE2'] * 5) + ($_POST['SE3'] * 7);
$SumaCE = ($_POST['CE1'] * 3) + ($_POST['CE2'] * 4) + ($_POST['CE3'] * 6);
$SumaALI = ($_POST['ALI1'] * 7) + ($_POST['ALI2'] * 10) + ($_POST['ALI3'] * 15);
$SumaAIE = ($_POST['AIE1'] * 5) + ($_POST['AIE2'] * 7) + ($_POST['AIE3'] * 10);

$FAV = 0;

for ($i = 1; $i <= 14; $i++) {
    $FAV = $FAV + $_POST['Pregunta' . $i];
}
/*CALCULANDO EL UFC*/
$UFC = $SumaEE + $SumaSE + $SumaCE + $SumaALI + $SumaAIE;

/*CALCULANDO LOS PUNTOS DE FUNCION AJUSTADOS - PFA*/
$PFA = $UFC * (0.65 + 0.01 * $FAV);
$difucultad = "-";
if ($PFA <= 100) {
    $difucultad = "Sencilla";
} else if ($UFC > 100 || $UFC <= 300) {
    $difucultad = "Media";
} else {
    $difucultad = "Dificil";
}

/*CALCULANDO EL ESFUERZO DE HORAS/PERSONA*/

$HorasPersona = $PFA / (1 / 8);

/*HORAS POR MIEMBRO */

$HorasMiembro = $HorasPersona / $Integrantes;

/*DURACION EN MESES */

$Duracion = $HorasMiembro / 100;


?>



<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados | Metodo punto de función</title>
</head>

<header>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Método <b><mark>Punto de función</mark></b></h1>
            <p class="lead">Método utilizado en <b>ingeniería del software</b> para medir el tamaño del software, <b>las horas/hombre</b> que se requieren como minimo para desarrollar el proyecto y asi tener un estimado del <b>equipo de desarolladores necesario</b> que se requiere para poder sacar adelante tus <B>proyectos informáticos.</B></p>
        </div>
    </div>
</header>

<body>
    <div class="container">
        <div>
            <center>
                <h3><b><mark>Resultados generales</mark></b></h3><br>
                <center>
                    <p class="lead">Resultados basados en la cantidad de <b><?php echo $Integrantes ?> integrantes</b> del equipo de desarrollo asignado al proyecto: <b><?php echo $Proyecto ?></b> </p> <br><kbd>Esfuerzo horas/persona = <?php echo $HorasPersona; ?> horas</kbd> | <kbd>Horas por miembro del equipo = <?php echo $HorasMiembro; ?> horas</kbd><br><kbd>Duración del proyecto en meses = <?php echo $Duracion; ?> - aproximadamente <?php echo round($Duracion, 0, PHP_ROUND_HALF_UP); ?> meses</kbd><br><br>
                </center>
            </center>
            <br><br>

        </div>
        
        <div>
            <center>
                <h3>Resultados detallados del método <b><mark>Punto de función</mark></b></h3>
            </center>
            <br>
        </div>
        <div class="progress" style="height: 1px;">
            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div><br>
        <div class="row">
            <div class="col-sm-12">
                <p class="lead">Nombre del representante del proyecto: <b><?php echo $Nombre; ?></b><br> Nombre del proyecto en análisis: <b><?php echo $Proyecto; ?></b><br>Número de miembros del equipo de desarrollo del proyecto: <b><?php echo $Integrantes; ?></b></p>
                <p class="lead">
                    Durante el Conteo de complejidad, los resultados obtenidos a base de sus datos proporcionados son los siguientes:
                </p>

                <p class="lead">
                    <center><b>Totalización de componentes del proyecto ingresados</b></center>
                </p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Entradas externas. (EE) - <b><?php echo $EE; ?> componentes</b></li>
                    <li class="list-group-item">Salidas externas. (SE) - <b><?php echo $SE; ?> componentes</b></li>
                    <li class="list-group-item">Consultas externas. (CE) - <b><?php echo $CE; ?> componentes</b></li>
                    <li class="list-group-item">Archivos lógicos internos. (ALI) - <b><?php echo $ALI; ?> componentes</b></li>
                    <li class="list-group-item">Archivos de interfaz externa. (AIE) - <b><?php echo $AIE; ?> componentes</b></li>
                </ul><br>
                <p class="lead">
                    <center>Tabla <b>Conteo de complejidad - UFC</b></center>
                </p><br>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Valor de dominio de información</th>
                            <th scope="col" class="text-center">Simple</th>
                            <th scope="col" class="text-center">Media</th>
                            <th scope="col" class="text-center">Alta</th>
                            <th scope="col" class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Entradas externas. <b>EE</b></th>
                            <td class="text-center">3 x <b><?php echo $_POST['EE1']; ?></b></td>
                            <td class="text-center">4 x <b><?php echo $_POST['EE2']; ?></b></td>
                            <td class="text-center">6 x <b><?php echo $_POST['EE3']; ?></b></td>
                            <td class="text-center"> <b><?php echo $SumaEE; ?></b></td>

                        </tr>
                        <tr>
                            <th scope="row">Salidas externas. <b>SE</b></th>
                            <td class="text-center">4 x <b><?php echo $_POST['SE1']; ?></b></td>
                            <td class="text-center">5 x <b><?php echo $_POST['SE2']; ?></b></td>
                            <td class="text-center">7 x <b><?php echo $_POST['SE3']; ?></b></td>
                            <td class="text-center"> <b><?php echo $SumaSE; ?></b></td>

                        </tr>
                        <tr>
                            <th scope="row">Consultas externas. <b>EE</b></th>
                            <td class="text-center">3 x <b><?php echo $_POST['CE1']; ?></b></td>
                            <td class="text-center">4 x <b><?php echo $_POST['CE2']; ?></b></td>
                            <td class="text-center">6 x <b><?php echo $_POST['CE3']; ?></b></td>
                            <td class="text-center"> <b><?php echo $SumaCE; ?></b></td>

                        </tr>
                        <tr>
                            <th scope="row">Archivos lógicos internos. <b>ALI</b></th>
                            <td class="text-center">7 x <b><?php echo $_POST['ALI1']; ?></b></td>
                            <td class="text-center">10 x <b><?php echo $_POST['ALI2']; ?></b></td>
                            <td class="text-center">15 x <b><?php echo $_POST['ALI3']; ?></b></td>
                            <td class="text-center"> <b><?php echo $SumaALI; ?></b></td>

                        </tr>
                        <tr>
                            <th scope="row">Archivos de interfaz externos. <b>AIE</b></th>
                            <td class="text-center">5 x <b><?php echo $_POST['AIE1']; ?></b></td>
                            <td class="text-center">7 x <b><?php echo $_POST['AIE2']; ?></b></td>
                            <td class="text-center">10 x <b><?php echo $_POST['AIE3']; ?></b></td>
                            <td class="text-center"> <b><?php echo $SumaAIE; ?></b></td>

                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"><b>Conteo total</b></td>
                            <td class="table-dark text-center"><b><?php echo $UFC; ?></b></td>

                        </tr>
                    </tbody>
                </table>
                <p class="lead">
                    <center><b>UFC = <?php echo $UFC; ?> </b></center>
                </p><br>
                <p class="lead">
                    <center>Tabla resumen <b>Factor de Ajuste de Valor (FAV)</b></center>
                </p><br>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" class="text-left">Factor</th>
                            <th scope="col" class="text-center">Valor asignado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Respaldo y recuperación.</td>
                            <td class="text-center"><b><?php echo $_POST['Pregunta1']; ?></b></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Comunicaciones de datos.</td>
                            <td class="text-center"><b><?php echo $_POST['Pregunta2']; ?></b></td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Procesamiento distribuido.</td>
                            <td class="text-center"><b> <?php echo $_POST['Pregunta3']; ?></b></td>

                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Rendimiento crítico.</td>
                            <td class="text-center"><b> <?php echo $_POST['Pregunta4']; ?></b></td>

                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Existencia de entorno operativo.</td>
                            <td class="text-center"><b><?php echo $_POST['Pregunta5']; ?></b> </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Entrada de datos en línea.</td>
                            <td class="text-center"><b><?php echo $_POST['Pregunta6']; ?></b> </td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Transacción de entrada sobre múltiples pantallas.</td>
                            <td class="text-center"><b><?php echo $_POST['Pregunta7']; ?></b> </td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Archivos maestros actualizados en línea.</td>
                            <td class="text-center"><b><?php echo $_POST['Pregunta8']; ?></b> </td>

                        </tr>
                        <tr>
                            <th scope="row"><b>9</b></th>
                            <td>Complejo de valores de dominio de información.</td>
                            <td class="text-center"><?php echo $_POST['Pregunta9']; ?></td>

                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>Complejo de procesamiento interno.</td>
                            <td class="text-center"><b><?php echo $_POST['Pregunta10']; ?></b> </td>

                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>Código diseñado para reuso.</td>
                            <td class="text-center"><b><?php echo $_POST['Pregunta11']; ?></b> </td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td>Conversión/instalación en diseño.</td>
                            <td class="text-center"><b><?php echo $_POST['Pregunta12']; ?></b> </td>
                        </tr>
                        <th scope="row">13</th>
                        <td>Instalaciones múltiples.</td>
                        <td class="text-center"><b><?php echo $_POST['Pregunta13']; ?></b> </td>
                        </tr>
                        <th scope="row">14</th>
                        <td>Aplicación diseñada para cambio.</td>
                        <td class="text-center"><b><?php echo $_POST['Pregunta14']; ?></b></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td class="text-center"><b>Conteo total</b></td>
                            <td class="table-dark text-center"><b><?php echo $FAV; ?></b></td>
                        </tr>
                    </tbody>
                </table><br>
                <div class="progress" style="height: 1px;">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div>
                    <p class="lead">
                        <center>Cálculo de <b>puntos de función ajustados (PFA)</b></center>
                    </p><br>
                    <p class="lead">
                        Para determinar los puntos de función ajustados <b>(PFA)</b>, combinaremos en un producto, los valores de UFC y FAV.</center>
                        <center>
                            <br>Fórmula: <br> <var>PFA = UFC x [0.65 + 0.01 x FAV]</var>
                            <br><br>
                            Solución: <br>
                            <var>PFA = <?php echo $UFC; ?> x [0.65 + 0.01 x <?php echo $FAV; ?> ]</var><br>
                            <kbd>PFA = <?php echo $PFA; ?></kbd>
                            <br>
                            <br>
                        </center>
                        Según los resultados obtenidos, se puede interpretar que la difucultad del proyecto es <mark><b><?php echo $difucultad; ?></b></mark>,
                        por haber obtenido un puntaje de función ajustado de: <mark><b><?php echo $PFA; ?></b></mark>
                        <br>
                    </p><br>
                </div>
                <div>
                    <p class="lead">
                        <center>Cálculo del <b>Esfuerzo horas/personas</b></center>
                    </p><br>
                    <p class="lead">
                        Se nos proporconó el dato que tu equipo de trabajo es de <b><?php echo $Integrantes ?> integrantes</b>, para ello te generamos el cálculo para esa
                        cantidad de personas. Antes te mostramos el cálculo de las horas/persona, <b>(PFA)</b>Suponiendo una jornada de 8 horas de trabajo:</center>
                        <center>
                            <br>Fórmula: <br> <var>Esfuerzo horas/persona = PFA / ( 1 / 8 )</var><br>donde: <br><var>PFA = puntos de función ajustado. <br>(1/8) = una jornada laboral de 8h, dictaminada por el estándard.</var>
                            <br><br>
                            Solución: <br>
                            <var>Esfuerzo horas/persona = <?php echo $PFA; ?>/ (1/8)</var><br>
                            <kbd>Esfuerzo horas/persona = <?php echo $HorasPersona; ?></kbd>
                            <br><br></center>

                        En base a este importante dato, te mostramos los tiempos del proyecto en determinación de <b>5 horas productivas</b> de las 8 de la jornada laboral
                        y esto tambien basado en 20 dias hábiles al mes, el estándar dictamina que son <b>100 horas productivas en el mes.</b> Entonces podemos determinar: <br>
                        <center><br>Fórmulas: <br> <var>horas por miembro del equipo = Esfuerzo horas/persona / numero de miembros</var><br>
                            <var>Duración del proyecto en meses = horas por miembro del equipo / 100 horas</var><br>
                            <var>Donde: <br>se estiman 100h productivas en el mes (5h diarias x 20 dias hábiles)</var>

                            <br><br>

                            Solución: <br>
                            <var>Horas por miembro del equipo = <?php echo $HorasPersona; ?>/ (1/8)</var><br>
                            <kbd>Horas por miembro del equipo = <?php echo $HorasMiembro; ?></kbd><br><br>
                            <var>Duración del proyecto en meses = <?php echo $HorasMiembro; ?>/100</var><br>
                            <var>Horas por miembro del equipo = <?php echo $HorasMiembro; ?>/ 100</var><br>
                            <kbd>Duración del proyecto en meses = <?php echo $Duracion; ?> - aproximadamente <?php echo round($Duracion, 0, PHP_ROUND_HALF_UP); ?> meses</kbd><br><br>
                            <br><br></center>
                    </p><br>
                </div>
            </div>
            <form action="" method="post" align="center">
                 ¿Deseas obtener este reporte como PDF? <a href="pdf_exportar.php?
                nombre=<?php echo $Nombre; ?>&
                proyecto=<?php echo $Proyecto; ?>&
                integrantes=<?php echo $Integrantes; ?>&
                EE1=<?php echo $_POST['EE1']; ?>&EE2=<?php echo $_POST['EE2']; ?>&EE3=<?php echo $_POST['EE3']; ?>&
                SE1=<?php echo $_POST['SE1']; ?>&SE2=<?php echo $_POST['SE2']; ?>&SE3=<?php echo $_POST['SE3']; ?>&
                CE1=<?php echo $_POST['CE1']; ?>&CE2=<?php echo $_POST['CE2']; ?>&CE3=<?php echo $_POST['CE3']; ?>&
                ALI1=<?php echo $_POST['ALI1']; ?>&ALI2=<?php echo $_POST['ALI2']; ?>&ALI3=<?php echo $_POST['ALI3']; ?>&
                AIE1=<?php echo $_POST['AIE1']; ?>&AIE2=<?php echo $_POST['AIE2']; ?>&AIE3=<?php echo $_POST['AIE3']; ?>&
                EE=<?php echo $EE; ?>&
                SE=<?php echo $SE; ?>&
                CE=<?php echo $CE; ?>&
                ALI=<?php echo $ALI; ?>&
                AIE=<?php echo $AIE; ?>&
                SumaEE=<?php echo $SumaEE; ?>&
                SumaSE=<?php echo $SumaSE; ?>&
                SumaCE=<?php echo $SumaCE; ?>&
                SumaALI=<?php echo $SumaALI; ?>&
                SumaAIE=<?php echo $SumaAIE; ?>&
                UFC=<?php echo $UFC; ?>&
                Pregunta1=<?php echo $_POST['Pregunta1']; ?>&Pregunta2=<?php echo $_POST['Pregunta2']; ?>&Pregunta3=<?php echo $_POST['Pregunta3']; ?>&
                Pregunta4=<?php echo $_POST['Pregunta4']; ?>&Pregunta5=<?php echo $_POST['Pregunta5']; ?>&Pregunta6=<?php echo $_POST['Pregunta6']; ?>&
                Pregunta7=<?php echo $_POST['Pregunta7']; ?>&Pregunta8=<?php echo $_POST['Pregunta8']; ?>&Pregunta9=<?php echo $_POST['Pregunta9']; ?>&
                Pregunta10=<?php echo $_POST['Pregunta10']; ?>&Pregunta11=<?php echo $_POST['Pregunta11']; ?>&Pregunta12=<?php echo $_POST['Pregunta12']; ?>&
                Pregunta13=<?php echo $_POST['Pregunta13']; ?>&Pregunta14=<?php echo $_POST['Pregunta14']; ?>&
                FAV=<?php echo $FAV; ?>&PFA=<?php echo $PFA; ?>&Dificultad=<?php echo $difucultad; ?>&HorasPersona=<?php echo $HorasPersona;?>&HorasMiembro=<?php echo $HorasMiembro;?>&
                Duracion=<?php echo $Duracion;?>

            ">Generar reporte PDF</a>
            </form>
        </div>
</body>
<footer>
    <br>
    <div class="progress" style="height: 2px;">
        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div>
        <center>
            <p>Edwin Osmin Orellana Martinez - <b>Administración de proyectos informáticos [API115] 2020</b></p>
        </center>
    </div>
</footer>

</html>