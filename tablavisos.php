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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/bulma.min.css">
  <link rel="stylesheet" href="assets/css/estilosicslab.css">
  <script src="assets/js/graf.js"></script>
  <script src="assets/js/jquery.smoothState.js"></script>
  <script src="assets/js/functions.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <script src="//code.jquery.com/jquery-latest.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
  <script src="assets/js/login.js"></script>
  <link href="https://fonts.googleapis.com/css?family=BenchNine&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js" integrity="sha256-JG6hsuMjFnQ2spWq0UiaDRJBaarzhFbUxiUTxQDA9Lk=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js" integrity="sha256-J2sc79NPV/osLcIpzL3K8uJyAD7T5gaEFKlLDM18oxY=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js" integrity="sha256-CfcERD4Ov4+lKbWbYqXD6aFM9M51gN4GUEtDhkWABMo=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/datos.js"></script>
  <script src="assets/js/jquery-3.1.0.min.js"></script>
  <script src="login/js/main.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <script src="assets/js/Chart.min.js"></script>
  <script src="assets/js/utils.js"></script>
  <script src="assets/js/jquery-3.1.0.min.js"></script>
  <script src="path/to/smooth-scroll.polyfills.min.js"></script>
  <link rel="stylesheet" href="assets/css/bootstrap-flex.css">
  <link rel="stylesheet" href="assets/css/stylescroll.css">
</head>

<body>

  <div style="margin:0px;border-radius: 10px;" class="container ">
    <!-- Grupo de columnas -->
    <div class="columns">
      <!-- columna del menu -->
      <div class="column is-one-fifth">
        <!-- menu -->

        <aside class="menu ">
          <p class="menu-label">
            Información
          </p>
          <ul class="menu-list">
            <li><a id="inicio" href="index.php">Inicio</a></li>
            <li><a href="avisos.php" id="avisos" class="activomenu">Avisos</a></li>
            <li><a id="proximas" href="proximasclases.php">Proximas clases</a></li>
            <li><a id="quejas" href="quejas.php">¿quejas con el tutor?</a></li>
            <li><a id="contacto" href="contacto.php">Contacta al tutor</a></li>
          </ul>
        </aside>

      </div>
      <!-- columna del contenido -->
      <div>

        <div style="padding-right:1em; margin-top:0%;" class="container ">
          <div style="width:85%; color:#000;" class="notifications bounceInDown faster">

            <h1 style="background: #ffffff;" class="title">Bienvenido a la plataforma de tutoría institucional</h1>
            <h2 class="subtitle"> Los avisos importantes deben abrirse al instante que sea recibido para evitar problemas.</h2>

          </div>
        </div>


        <!-------------------------------------------------- registrar problemas     ------------------------------------------------------------------------------- -->
        <div class="container">

        </div>

        <!------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <!--------------------------------------------------  respuestas   ------------------------------------------------------------------------------- -->
        <div class="container">
          <div style="width:85%; color:#000;" class="notifications bounceInUp">


            <table class=" table is-bordered " border="1">
              <tr>
                <td>id</td>
                <td>Remitente</td>
                <td>Asunto</td>
                <td>fecha</td>
                <td></td>

              </tr>
              <?php
              $result = mysqli_query($conexion, $Avisos);
              while ($mostrar = mysqli_fetch_array($result)) {
                ?>
                <tr>
                  <td><?php echo $mostrar['id'] ?></td>
                  <td><?php echo $mostrar['remitente'] ?></td>
                  <td><?php echo $mostrar['Asunto'] ?></td>
                  <td><?php echo $mostrar['fecha'] ?></td>
                  <td><a id="nombretutor" style="background: #a41e34; " class="button is-light is-outlined">Abrir</a></td>

                </tr>
              <?php
              }
              ?>
            </table>

          </div>
          <li><a id="con" href="#section">Contacta al tutor</a></li>

        </div>
        <!------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

      </div>
    </div>
  </div>

  </div>
  </div>
  </section>
  <!-- footer o pie de página -->
  <?php
  include("componentes/footer.php");
  ?>
  <script src="jquery.js"></script>
  <script src="jquery.smoothState.js"></script>
  <script src="functions.js"></script>
  <script>
    $(document).ready(function() {
      $('#con').click(function() {
        $("#section").load("tablavisos.php ");
      });
    });
  </script>
</body>

</html>