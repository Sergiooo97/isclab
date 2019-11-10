<?php
session_start();
?>
<?php
include("conexion.php");
include("consultas_index.php");

?>
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
              <li><a href="quejas.php">¿quejas con el tutor?</a></li>
              <li><a style="background-image: linear-gradient(to bottom right,#a41e34, #ff5874); color:#ffffff;">Contacta al tutor</a></li>
            </ul>
          </aside>
        </div>
        <!-- columna del contenido -->
        <div class="column">
          <div class="container">
            <div>
              <div style="width:85%; color:#000;" class="notifications slideInRight faster">

                <h1 style="background: #ffffff;" class="title">Contacto a tutor para resolver problemas.</h1>
                <h2 class="subtitle">Promedios del semestre</h2>
              </div>

              <!-------------------------------------------------- registrar problemas     ------------------------------------------------------------------------------- -->
              <div class="container">
                <div style="width:85%; color:#000;" class="notifications slideInUp">

                  <label>Nombre del tutor: <a id="nombretutor" style="background: #ffffff02; border-color: #a41e34; color:#a41e34; " class="button is-light is-outlined">
                      <?php
                      $result = mysqli_query($conexion, $Tutor);
                      while ($registros = mysqli_fetch_array($result)) {
                        ?>
                        <?php echo $registros['nombre'] ?>
                      <?php
                      }
                      ?>
                    </a></label>
                  <br />
                  <br />
                  <p>Se enviará un correo electronico a su tutor para tratar de resolver su problemas.</p>

                  <br />
                  <form action="enviar.php" method="post">
                    <textarea name="asunto" rows="2" cols="40" placeholder="Asunto"></textarea>
                    <br />
                    <textarea name="comentario" rows="10" cols="40" placeholder="Aquí puede describir su problema"></textarea>
                    <br />
                    <input type="submit" value="Submit" name="submit" onclick="window.location.reload()" /></form>

                </div>
              </div>

              <!------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
              <!--------------------------------------------------  respuestas   ------------------------------------------------------------------------------- -->
              <div class="container">
                <div style="width:85%; color:#000;" class="notification">
                  <p style="font-size: 25px;">Mensajes recientes</p>
                  <br />
                  <table class=" table is-bordered " border="1">
                    <tr>
                      <td>id</td>
                      <td>Asunto</td>
                      <td>Fecha</td>
                      <td></td>
                    </tr>
                    <?php
                    $result = mysqli_query($conexion, $contacto_160);
                    while ($mostrar = mysqli_fetch_array($result)) {
                      ?>
                      <tr>
                        <td><?php echo $mostrar['id'] ?></td>
                        <td><?php echo $mostrar['asunto'] ?></td>
                        <td><?php echo $mostrar['fecha'] ?></td>
                        <td><a href="https://mail.google.com/mail/u/0/" id="nombretutor" style="background: #a41e34; " class="button is-light is-outlined">Abrir correo</a></td>
                      </tr>
                    <?php
                    }
                    ?>
                  </table>
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