<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Metodo punto de función</title>
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
        <h3>Cálculo por el método <b><mark>Punto de función</mark></b></h3>
      </center>
      <br>
    </div>
    <form action="results.php" method="post">
    <center>
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">Escriba su nombre</span>
            </div>
            <input required type="text" name="nombre"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">Escriba el nombre del proyecto</span>
            </div>
            <input required type="text" name="proyecto" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">Ingrese la cantidad de miembros del equipo de desarrollo del proyecto</span>
            </div>
            <input type="number" name="integrantes" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="1" min="1" max="15">
          </div>
        </div>
      </div>
    </center>
    <div class="progress" style="height: 1px;">
      <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div><br>
    <div class="row">
      <div class="col-sm-12">
        <h5>Paso #1 - Identificación de <b>componentes</b></h5>
        <p class="lead">
          Este es un paso previo que debes realizar, pero te recordamos la forma que debes tener estructurado tu análisis.
          Para desarrollar de forma efectiva este ejercicio, se requiere que clasifiques tus componentes en:
        </p>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Entradas externas. <b>EE</b></li>
          <li class="list-group-item">Salidas externas. <b>SE</b></li>
          <li class="list-group-item">Consultas externas. <b>CE</b></li>
          <li class="list-group-item">Archivos lógicos internos. <b>ALI</b></li>
          <li class="list-group-item">Archivos de interfaz externa. <b>AIE</b></li>
        </ul>
        <p class="lead">
          Tras clasificar cada uno de tus componentes, te sugerimos hacer un conteo por categoria. <B>¡Lo necesitaremos en el paso #2!</B><br>
        </p>
        <div class="progress" style="height: 1px;">
          <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div><br>
        <h5>Paso #2 - Conteo de <b>complejidad</b></h5>
        <p class="lead">
          En este paso debes de ingresar el número de componentes que obtuviste al ejecutar el análisis. Para este caso debes de asignarle una
          complejidad (simple, media o alta) según creas conveniente. Sí ya asignaste las actividades y no utilizas alguna dificultad sobrante, <b>dejala en 0 (cero)</b> <br></p>
        <p>
          <mark><B>Nota: </B>Para tener un resultado éxitoso, no debes de pasarte del total por categoria. Por ejemplo, sí en <b>Entradas externas</b> tienes
            un total de 3 archivos, puedes distribuirlos en (1)simple y 2(media). Las que no uses, déjalas en 0 (cero).</mark>
        </p>
        
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Valor de dominio de información</th>
                <th scope="col" class="text-center">Simple</th>
                <th scope="col" class="text-center">Media</th>
                <th scope="col" class="text-center">Alta</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Entradas externas. <b>EE</b></th>
                <td class="text-center">3 x
                  <select name="EE1">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                  </select>
                </td>
                <td class="text-center">4 x
                  <select name="EE2">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                  </select>
                </td>
                <td class="text-center">6 x
                  <select name="EE3">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                  </select>
                </td>

              </tr>
              <tr>
                <th scope="row">Salidas externas. <b>SE</b></th>
                <td class="text-center">4 x
                  <select name="SE1">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                  </select>
                </td>
                <td class="text-center">5 x
                  <select name="SE2">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                  </select>
                </td>
                <td class="text-center">7 x
                  <select name="SE3">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                  </select>
                </td>

              </tr>
              <tr>
                <th scope="row">Consultas externas. <b>CE</b></th>
                <td class="text-center">3 x
                  <select name="CE1">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                  </select>
                </td>
                <td class="text-center">4 x
                  <select name="CE2">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                  </select>
                </td>
                <td class="text-center">6 x
                  <select name="CE3">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                  </select>
                </td>
                <td class="text-center">-</td>
              </tr>
              <tr>
                <th scope="row">Archivos lógicos internos. <b>ALI</b></th>
                <td class="text-center">7 x
                  <select name="ALI1">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                  </select>
                </td>
                <td class="text-center">10 x
                  <select name="ALI2">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                  </select>
                </td>
                <td class="text-center">15 x
                  <select name="ALI3">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                  </select>
                </td>

              </tr>
              <tr>
                <th scope="row">Archivos de interfaz externa. <b>AIE</b></th>
                <td class="text-center">5 x
                  <select name="AIE1">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                  </select>
                </td>
                <td class="text-center">7 x
                  <select name="AIE2">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                  </select>
                </td>
                <td class="text-center">10 x
                  <select name="AIE3">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                  </select>
                </td>
              </tr>
            </tbody>
          </table> <br>
          <h5>Factores <b>Ajuste de valor</b></h5>
          <p class="lead">
            Acá debes asignar, según el análisis hecho, un valor desde <mark><b>0 a 5</b></mark> , donde el extremo 0 implica que <mark><b>no es importante / aplicable</b></mark>
            y el extremo 5 implica <mark><b>absolutamente esencial</b></mark> en el desarrollo de tu proyecto. Puedes agregar valores intermedios
            sí es aplicable.
          </p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>1- </b>¿El sistema requiere respaldo y recuperación confiables?
              <select name="Pregunta1">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
            <li class="list-group-item"><b>2- </b>¿Se requieren comunicaciones de datos especializadas para transferir información hacia o desde
              la aplicación?
              <select name="Pregunta2">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
            <li class="list-group-item"><b>3- </b>¿Existen funciones de procesamiento distribuidas?
              <select name="Pregunta3">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
            <li class="list-group-item"><b>4- </b>¿El desempeño es crucial?
              <select name="Pregunta4">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
            <li class="list-group-item"><b>5- </b>¿El sistema correrá en un entorno operativo existente enormemente utilizado?
              <select name="Pregunta5">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
            <li class="list-group-item"><b>6- </b>¿El sistema requiere entrada de datos en línea?
              <select name="Pregunta6">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
            <li class="list-group-item"><b>7- </b>¿La entrada de datos en línea requiere que la transacción de entrada se construya sobre múltiples pantallas u operaciones?
              <select name="Pregunta7">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
            <li class="list-group-item"><b>8- </b>¿Los ALI se actualizan en línea?
              <select name="Pregunta8">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
            <li class="list-group-item"><b>9- </b>¿Las entradas, salidas, archivos o consultas son complejos?
              <select name="Pregunta9">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
            <li class="list-group-item"><b>10- </b>¿El procesamiento interno es complejo?
              <select name="Pregunta10">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
            <li class="list-group-item"><b>11- </b>¿El código se diseña para ser reutilizable?
              <select name="Pregunta11">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
            <li class="list-group-item"><b>12- </b>¿La conversión y la instalación se incluyen en el diseño?
              <select name="Pregunta12">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
            <li class="list-group-item"><b>13- </b>¿El sistema se diseña para instalaciones múltiples en diferentes organizaciones?
              <select name="Pregunta13">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
            <li class="list-group-item"><b>14- </b>¿La aplicación se diseña para facilitar el cambio y su uso por parte del usuario?
              <select name="Pregunta14">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </li>
          </ul><br>
          <div class="progress" style="height: 1px;">
            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div><br>
          <p class="lead">
            Hasta acá ya has ingresado los datos que necesitamos para calcular tu información. Si deseas iniciar el cálculo,
            haz click sobre el boton <mark><b>Calcular información.</b></mark>
          </p>
          <center><a href="results.php"><input type="submit" class="btn btn-dark" value="Calcular información"></input></a></center>
          
        </form>
        <!--BOTON DE CONFIRMACION-->
        
      </div>

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