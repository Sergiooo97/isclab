<?php
session_start();
$sesion = $_SESSION['username'];
if (!isset($sesion)) {
  header("location: login.php");
} else { }

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de tutoría ITS Motul</title>
  <link rel="stylesheet" href="assets/css/bulma.min.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/estilosicslab.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
  <link href="https://fonts.googleapis.com/css?family=BenchNine&display=swap" rel="stylesheet">
  <script src="login/js/main.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <script src="assets/js/utils.js"></script>
  <script src="path/to/smooth-scroll.polyfills.min.js"></script>
  <link rel="stylesheet" href="assets/css/bootstrap-flex.css">
  <link rel="stylesheet" href="assets/css/stylescroll.css">
  <!-- jquery -->
  <script src="assets/js/jquery-3.1.0.min.js"></script>
  <script src="//code.jquery.com/jquery-latest.min.js"></script>
</head>

<body>
  <!-- barra de navegación -->

  <?php
  include("componentes/barraNav.php");
  ?>
  <!-- sección con el contenido de TOOOODA la página -->
  <section class="section">
    <div style="margin:0px;" class="container">
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
              <li><a href="index.php">Inicio</a></li>
              <li><a href="Avisos.php">Avisos</a></li>
              <li><a href="proximasclases.php">Proximas clases</a></li>
              <li><a style="background-image: linear-gradient(to bottom right,#a41e34, #ff5874); color:#ffffff;">¿quejas con el tutor?</a></li>
              <li><a href="contacto.php">Contacta al tutor</a></li>
            </ul>
          </aside>
        </div>
        <!-- columna del contenido -->
        <div class="column">
          <div class="container">
            <div>
              <div style="width:85%; color:#000;" class="notifications slideInRight faster">

                <h1 style="background: #ffffff;" class="title">Puedes reportar el mal desempeño de tu tutor.</h1>
                <h2 class="subtitle">Llenar datos para reporte.</h2>
              </div>

              <!-------------------------------------------------- registrar problemas     ------------------------------------------------------------------------------- -->
              <div class="container">
                <div style="width:85%; color:#000;" class="notifications slideInUp">
                  <label>Nombre del tutor: <a id="nombretutor" style="background: #ffffff02; border-color: #a41e34; color:#a41e34; " class="button is-light is-outlined">
                      <?php
                      $conexion = new mysqli("localhost", "SERGIOOO", "4973160vv", "tiendaa");
                      $sql = "SELECT * FROM tutores Where semestretutorado = '7B'";
                      $result = mysqli_query($conexion, $sql);
                      while ($registros = mysqli_fetch_array($result)) {
                        ?>
                        <?php echo $registros['nombre'] ?>
                      <?php
                      }
                      ?>
                    </a></label>
                  <br />
                  <br />
                  <p>El reprote se enviará a ... .</p>
                  <br />
                  <textarea name="comentarios" rows="2" cols="40" placeholder="Asunto"></textarea>
                  <br />
                  <textarea name="comentarios" rows="10" cols="40" placeholder="Aquí puede describir su problema"></textarea>
                  <br />
                  <a id="nombretutor" style="background: #a41e34; " class="button is-light is-outlined">Enviar</a>
                </div>
              </div>
              <!------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- footer o pie de página -->
  <footer class="footer">
    <div class="content has-text-centered">
      <p style="color:#000"> Desarrollado por SERGIO EB para el <a href="http://www.itsmotul.edu.mx">ITS Motul</a></p>
    </div>
  </footer>
</body>

</html>