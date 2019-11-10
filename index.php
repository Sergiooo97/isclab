<?php
session_start();
$sesion = $_SESSION['username'];
if (!isset($sesion)) {
  header("location: login.php");
} else { }
?>
<?php
include("conexion.php");
include("consultas_index.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de tutoría ITS Motul</title>
  <meta http-equiv="Page-Enter" content="revealTrans(Duration=0.5,Transition=3)">
  <link rel="stylesheet" href="assets/css/bulma.min.css">
  <link rel="stylesheet" href="assets/css/estilosicslab.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
  <script src="assets/js/login.js"></script>
  <link href="https://fonts.googleapis.com/css?family=BenchNine&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js" integrity="sha256-J2sc79NPV/osLcIpzL3K8uJyAD7T5gaEFKlLDM18oxY=" crossorigin="anonymous"></script>
  <script src="login/js/main.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <script src="assets/js/Chart.min.js"></script>
  <script src="assets/js/utils.js"></script>
  <script src="path/to/smooth-scroll.polyfills.min.js"></script>
  <link rel="stylesheet" href="assets/css/bootstrap-flex.css">
  <link rel="stylesheet" href="assets/css/stylescroll.css">
  <!-- jquery -->
  <script src="assets/js/jquery-3.1.0.min.js"></script>
  <script src="//code.jquery.com/jquery-latest.min.js"></script>
  <style>
    canvas {
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
    }
  </style>
</head>

<body>
  <?php
  include("componentes/barraNav.php");
  ?>
  <!-- sección con el contenido de TOOOODA la página -->
  <section id="section" class="section">
    <div style="margin:0px;border-radius: 10px;" class="container">
      <!-- Grupo de columnas -->
      <div class="columns">
        <!-- columna del menu -->
        <div class="column is-one-fifth">
          <!-- menu -->
          <aside class="menu">
            <p class="menu-label">
              Información
            </p>
            <ul class="menu-list">
              <li><a id="inicio" class="activomenu">Inicio</a></li>
              <li><a href="Avisos.php" style="color:#000;" id="avisos">Avisos</a></li>
              <li><a id="proximas" href="proximasclases.php">Proximas clases</a></li>
              <li><a id="quejas" href="quejas.php">¿quejas con el tutor?</a></li>
              <li><a id="contacto" href="contacto.php">Contacta al tutor</a></li>
            </ul>
          </aside>
        </div>
        <!-- columna del contenido -->
        <div>
          <div style="padding-right:1em; margin-top:0%;" class="container">
            <div>
              <div style="width:85%; color:#000;" class="notifications slideInRight faster">

                <h1 style="background: #ffffff;" class="title">Bienvenido a la plataforma de tutoría institucional</h1>
                <h2 class="subtitle">Promedios del semestre</h2>
              </div>

              <!-- tabla de calificaciones -->
              <div id="tabla">
                <div class="notifications slideInUp">
                  <?php
                  include("componentes/tablaCalificaciones_index.php");
                  ?> </div>
              </div>

              <div id="grafica">
                <div class="notificationsss fadeInRight ">
                  <?php
                  include("componentes/dona.php");
                  ?>
                </div>
              </div>

              <!-- FOOTER -->
            </div>
          </div>
        </div>
  </section>
  <!-- footer o pie de página -->
  <footer class="footer">
    <div class="content has-text-centered">
      <p style="color:#000"> Desarrollado por SERGIO EB para el <a href="http://www.itsmotul.edu.mx">ITS Motul</a></p>
    </div>
  </footer> <!-- FIN FOOTER -->

</body>

</html>