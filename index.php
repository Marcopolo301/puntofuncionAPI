<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Metodo punto fijo</title>
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
        <h3><b>Características</b> de este método</h3>
      </center>
      <br>
    </div>
    <center>
      <div class="row">
        <div class="col-sm-4">
          <div class="card" style="width: 18rem;">
            <img src="img/caracteristica1.png" class="card-img-top" width="30" height="250">
            <div class="card-body">
              <h5 class="card-title">Perspectiva del usuario</h5>
              <p class="card-text">Los Puntos de Función miden la aplicación desde una perspectiva del usuario, dejando de lado los detalles de codificación.</p>
            </div>
          </div>
        </div>
        <!--caracteristica 2-->
        <div class="col-sm-4">
          <div class="card" style="width: 18rem;">
            <img src="img/caracteristica2.png" class="card-img-top" width="25" height="250">
            <div class="card-body">
              <h5 class="card-title">Herramienta probada</h5>
              <p class="card-text">Es una técnica totalmente independiente de todas las consideraciones de lenguaje y ha sido aplicada en más de 250 lenguajes diferentes.</p>
            </div>
          </div>
        </div>
        <!--caracteristica 3-->
        <div class="col-sm-4">
          <div class="card" style="width: 18rem;">
            <img src="img/caracteristica3.png" class="card-img-top" width="30" height="250">
            <div class="card-body">
              <h5 class="card-title">Fiabilidad de resultados</h5>
              <p class="card-text">Los resultados obtenidos en el cálculo son muy apegados a la realidad por lo que es una fuente fiable para tener una idea precisa de lo que se requiere.</p>
            </div>
          </div>
          <br>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
            <center>
              <h5>¿Tienes dudas de como ingresar los datos? <br><b>¡Revisa nuestro ejemplo práctico!</b></h5>
              <button type="button" class="btn btn-dark">Ver ejemplo práctico</button>
            </center>
          </div>
        </div>
      </div>
      <div class="container"><br><br>
        <!--FORMULARIO-->
        <form action="results.php" method="post">
          <h4>Generemos los cálculos de tu <b>análisis previo</b></h4>
          <p>________</p>
    </center>
    <center><a href="data.php"><input type="Button" class="btn btn-success" value="Iniciar método"></button></a></center>
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