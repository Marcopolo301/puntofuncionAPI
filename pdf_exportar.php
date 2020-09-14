<?php ob_start(); 

$Nombre = $_GET['nombre'];
$Proyecto = $_GET['proyecto'];
$Integrantes = $_GET['integrantes'];
$EE1=$_GET['EE1'];$EE2=$_GET['EE2'];$EE3=$_GET['EE3'];
$SE1=$_GET['SE1'];$SE2=$_GET['SE2'];$SE3=$_GET['SE3'];
$CE1=$_GET['CE1'];$CE2=$_GET['CE2'];$CE3=$_GET['CE3'];
$ALI1=$_GET['ALI1'];$ALI2=$_GET['ALI2'];$ALI3=$_GET['ALI3'];
$AIE1=$_GET['AIE1'];$AIE2=$_GET['AIE2'];$AIE3=$_GET['AIE3'];

$EE = $_GET['EE'];
$SE = $_GET['SE'];
$CE = $_GET['CE'];
$ALI = $_GET['ALI'];
$AIE = $_GET['AIE'];

$SumaEE = $_GET['SumaEE'];
$SumaSE = $_GET['SumaSE'];
$SumaCE = $_GET['SumaCE'];
$SumaALI = $_GET['SumaALI'];
$SumaAIE = $_GET['SumaAIE'];
$UFC =$_GET['UFC'];

$Pregunta1=$_GET['Pregunta1'];$Pregunta2=$_GET['Pregunta2'];$Pregunta3=$_GET['Pregunta3'];$Pregunta4=$_GET['Pregunta4'];$Pregunta5=$_GET['Pregunta5'];
$Pregunta6=$_GET['Pregunta6'];$Pregunta7=$_GET['Pregunta7'];$Pregunta8=$_GET['Pregunta8'];$Pregunta9=$_GET['Pregunta9'];$Pregunta10=$_GET['Pregunta10'];
$Pregunta11=$_GET['Pregunta11'];$Pregunta12=$_GET['Pregunta12'];$Pregunta13=$_GET['Pregunta13'];$Pregunta14=$_GET['Pregunta14'];
$FAV=$_GET['FAV'];
$PFA=$_GET['PFA'];
$difucultad=$_GET['Dificultad'];$HorasPersona=$_GET['HorasPersona'];$HorasMiembro=$_GET['HorasMiembro'];$Duracion=$_GET['Duracion'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $Proyecto;?> - Reporte Metodo punto de función</title>
</head>
<body>
    <style>
        body {
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
        }
        table {
            font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 14px;         width: 80%; text-align: left;    border-collapse: collapse; vertical-align: center;
}
th, td {
   
   text-align: center;
   vertical-align: center;
   border: 0px solid #000;
   padding: 0.3em;
   caption-side: bottom;
   color:#000;
}
caption {
   padding: 0.3em;
   color: #fff;
    background: #000;
}
th {
   background: #6c757d;
   height: 30px;
   text-align: center;
   color:white;
   vertical-align:inherit;
}

mark{
   background: #6c757d;
   text-align: center;
   color:white;
   vertical-align:inherit;
   padding-top: 15px;
   padding-bottom: 15px;
}
    </style>
<div class="container">
        <div>
            <table align="center">
                    <thead>
                        <tr>
                            <th scope="col"><h2><mark>Resultados del método <b>Punto de función</b></mark></h2></th>
                        </tr>
                    </thead>
            </table>
            <br>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <p class="lead">Nombre del representante del proyecto: <b><?php echo $Nombre; ?></b><br> Nombre del proyecto en análisis: <b><?php echo $Proyecto; ?></b><br>Número de miembros del equipo de desarrollo del proyecto: <b><?php echo $Integrantes; ?></b></p>
                <p class="lead">
                    Durante el Conteo de complejidad, los resultados obtenidos a base de sus datos proporcionados son los siguientes:
                </p>

                <p class="lead">
                    <center><b>Totalización de componentes del proyecto ingresados</b></center>
                </p><br>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Entradas externas. (EE) - <b><?php echo $EE; ?> componentes</b></li>
                    <li class="list-group-item">Salidas externas. (SE) - <b><?php echo $SE; ?> componentes</b></li>
                    <li class="list-group-item">Consultas externas. (CE) - <b><?php echo $CE; ?> componentes</b></li>
                    <li class="list-group-item">Archivos lógicos internos. (ALI) - <b><?php echo $ALI; ?> componentes</b></li>
                    <li class="list-group-item">Archivos de interfaz externa. (AIE) - <b><?php echo $AIE; ?> componentes</b></li>
                </ul><br>
                <p class="lead">
                    <center><b>Tabla Conteo de complejidad - UFC</b></center>
                </p><br>
               <table align="center" cellpadding="5">
                    <thead >
                        <tr>
                            <th scope="col">Valor de dominio de información</th>
                            <th scope="col" align="center">Simple</th>
                            <th scope="col" align="center">Media</th>
                            <th scope="col" align="center">Alta</th>
                            <th scope="col" align="center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center" scope="row">Entradas externas. <b>EE</b></th>
                            <td align="center">3 x <b><?php echO $EE1 ?></b></td>
                            <td align="center">4 x <b><?php echo $EE2; ?></b></td>
                            <td align="center">6 x <b><?php echo $EE3; ?></b></td>
                            <td align="center"> <b><?php echo $SumaEE; ?></b></td>

                        </tr>
                        <tr>
                            <td align="left" scope="row">Salidas externas. <b>SE</b></th>
                            <td align="center">4 x <b><?php echO $SE1 ?></b></td>
                            <td align="center">5 x <b><?php echO $SE2 ?></b></td>
                            <td align="center">7 x <b><?php echo $SE3; ?></b></td>
                            <td align="center"> <b><?php echo $SumaSE; ?></b></td>

                        </tr>
                        <tr>
                            <td align="left" scope="row">Consultas externas. <b>EE</b></th>
                            <td align="center">3 x <b><?php echo $CE1; ?></b></td>
                            <td align="center">4 x <b><?php echo $CE2; ?></b></td>
                            <td align="center">6 x <b><?php echo $CE3; ?></b></td>
                            <td align="center"> <b><?php echo $SumaCE; ?></b></td>

                        </tr>
                        <tr>
                            <td align="left" scope="row">Archivos lógicos internos. <b>ALI</b></th>
                            <td align="center">7 x <b><?php echo $ALI1; ?></b></td>
                            <td align="center">10 x <b><?php echo $ALI2; ?></b></td>
                            <td align="center">15 x <b><?php echo $ALI3; ?></b></td>
                            <td align="center"> <b><?php echo $SumaALI; ?></b></td>

                        </tr>
                        <tr>
                            <td align="left" scope="row" text-align="left">Archivos de interfaz externos. <b>AIE</b></th>
                            <td align="center">5 x <b><?php echo $AIE1; ?></b></td>
                            <td align="center">7 x <b><?php echo $AIE2; ?></b></td>
                            <td align="center">10 x <b><?php echo $AIE3; ?></b></td>
                            <td align="center"> <b><?php echo $SumaAIE; ?></b></td>

                        </tr>
                        <tr>
                            <td scope="row"></th>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td align="right"><b>Conteo total</b></td>
                            <td align="center" style="background: #6c757d;text-align: center;color:white;"><b><?php echo $UFC; ?></b></td>

                        </tr>
                    </tbody>
                </table>
                <p class="lead">
                    <center><b>UFC = <?php echo $UFC; ?> </b></center>
                </p><br>
                <p class="lead">
                    <center><b>Tabla resumen Factor de Ajuste de Valor (FAV)</b></center>
                </p><br>
                <table align="center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" class="text-left">Factor</th>
                            <th scope="col" class="text-center">Valor asignado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</th>
                            <td>Respaldo y recuperación.</td>
                            <td class="text-center"><b><?php echo $Pregunta1; ?></b></td>
                        </tr>
                        <tr>
                            <td scope="row">2</th>
                            <td>Comunicaciones de datos.</td>
                            <td class="text-center"><b><?php echo $Pregunta2; ?></b></td>

                        </tr>
                        <tr>
                            <td scope="row">3</th>
                            <td>Procesamiento distribuido.</td>
                            <td class="text-center"><b> <?php echo $Pregunta3; ?></b></td>

                        </tr>
                        <tr>
                            <td scope="row">4</th>
                            <td>Rendimiento crítico.</td>
                            <td class="text-center"><b> <?php echo $Pregunta4; ?></b></td>

                        </tr>
                        <tr>
                            <td scope="row">5</th>
                            <td>Existencia de entorno operativo.</td>
                            <td class="text-center"><b><?php echo $Pregunta5; ?></b> </td>
                        </tr>
                        <tr>
                            <td scope="row">6</th>
                            <td>Entrada de datos en línea.</td>
                            <td class="text-center"><b><?php echo $Pregunta6; ?></b> </td>
                        </tr>
                        <tr>
                            <td scope="row">7</th>
                            <td>Transacción de entrada sobre múltiples pantallas.</td>
                            <td class="text-center"><b><?php echo $Pregunta7; ?></b> </td>
                        </tr>
                        <tr>
                            <td scope="row">8</th>
                            <td>Archivos maestros actualizados en línea.</td>
                            <td class="text-center"><b><?php echo $Pregunta8; ?></b> </td>

                        </tr>
                        <tr>
                            <td scope="row">9</th>
                            <td>Complejo de valores de dominio de información.</td>
                            <td class="text-center"><b><?php echo $Pregunta9; ?></b></td>

                        </tr>
                        <tr>
                            <td scope="row">10</th>
                            <td>Complejo de procesamiento interno.</td>
                            <td class="text-center"><b><?php echo $Pregunta10; ?></b> </td>

                        </tr>
                        <tr>
                            <td scope="row">11</th>
                            <td>Código diseñado para reuso.</td>
                            <td class="text-center"><b><?php echo $Pregunta11; ?></b> </td>
                        </tr>
                        <tr>
                            <td scope="row">12</th>
                            <td>Conversión/instalación en diseño.</td>
                            <td class="text-center"><b><?php echo $Pregunta12; ?></b> </td>
                        </tr>
                        <tr>
                            <td scope="row">13</th>
                            <td>Instalaciones múltiples.</td>
                            <td class="text-center"><b><?php echo $Pregunta13; ?></b> </td>
                        </tr>
                        <tr>
                            <td scope="row">14</th>
                            <td>Aplicación diseñada para cambio.</td>
                            <td class="text-center"><b><?php echo $Pregunta14; ?></b></td>
                        </tr>
                        <tr>
                            <td scope="row"></th>
                            <td class="text-center"><b>Conteo total</b></td>
                            <th class="table-dark text-center"><b><?php echo $FAV; ?></b></td>
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
                        <kbd><br>Fórmula: <br> <var>PFA = UFC x [0.65 + 0.01 x FAV]</var>
                            <br><br>
                            Solución: <br>
                            <var>PFA =<?php echo $UFC;?> x [0.65 + 0.01 x <?php echo $FAV;?> ]</var><br>
                            PFA =<?php echo $PFA;?></kbd>
                            <br>
                            <br>
                        </center>
                    </p><br>
                </div>
                <div>
                    <p class="lead">
                        <center>Cálculo de <b>puntos de función ajustados (PFA)</b></center>
                    </p><br>
                    <p class="lead">
                        Para determinar los puntos de función ajustados <b>(PFA)</b>, combinaremos en un producto, los valores de UFC y FAV.</center>
                        <center>
                        <kbd><br>Fórmula: <br> <var>PFA = UFC x [0.65 + 0.01 x FAV]</var>
                            <br><br>
                            Solución: <br>
                            <var>PFA =<?php echo $UFC;?> x [0.65 + 0.01 x <?php echo $FAV;?> ]</var><br>
                            PFA =<?php echo $PFA;?></kbd>
                            <br><br></center>
                        Según los resultados obtenidos, se puede interpretar que la difucultad del proyecto es <b><?php echo $difucultad; ?></b>,
                        por haber obtenido un puntaje de función ajustado de: <b><?php echo $PFA;?></b>
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
                            <br><kbd>Fórmula: <br> <var>Esfuerzo horas/persona = PFA / ( 1 / 8 )</var><br>donde: <br><var>PFA = puntos de función ajustado. <br>(1/8) = una jornada laboral de 8h, dictaminada por el estándard.</var>
                            <br><br>
                            Solución: <br>
                            Esfuerzo horas/persona = <?php echo $PFA; ?>/ (1/8)<br>
                            <kbd>Esfuerzo horas/persona = <?php echo $HorasPersona; ?></kbd>
                            <br><br></center>

                        En base a este importante dato, te mostramos los tiempos del proyecto en determinación de <b>5 horas productivas</b> de las 8 de la jornada laboral
                        y esto tambien basado en 20 dias hábiles al mes, el estándar dictamina que son <b>100 horas productivas en el mes.</b> Entonces podemos determinar: <br>
                        <center><br><kbd>Fórmulas: <br> <var>horas por miembro del equipo = Esfuerzo horas/persona / numero de miembros</var><br>
                            Duración del proyecto en meses = horas por miembro del equipo / 100 horas<br>
                            Donde: <br>se estiman 100h productivas en el mes (5h diarias x 20 dias hábiles)

                            <br><br>

                            Solución: <br>
                            Horas por miembro del equipo = <?php echo $HorasPersona; ?>/ (1/8)<br>
                            Horas por miembro del equipo = <?php echo $HorasMiembro; ?><br><br>
                            Duración del proyecto en meses = <?php echo $HorasMiembro; ?>/100<br>
                            Horas por miembro del equipo = <?php echo $HorasMiembro; ?>/ 100<br>
                            Duración del proyecto en meses = <?php echo $Duracion; ?> - aproximadamente <?php echo round($Duracion, 0, PHP_ROUND_HALF_UP); ?> meses</kbd><br><br>
                            <br><br></center>
                    </p><br>
                </div>
            </div>
            
        </div>
</body>
</html>
 
<?php
/*________________________________________________________________________________________ */

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf(array('isPhpEnabled' => true));
// load the html content
$dompdf->loadHtml(ob_get_clean());
$dompdf->render();
$dompdf->stream($Proyecto ." - Reporte Metodo punto de función");

/*________________________________________________________________________________________ */

?>