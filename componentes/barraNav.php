<div class="container-fluid navbar-fixed-top">
  <div id="grad" class="row flex-items-xs-between menu-1 flex-items-xs-middle">
    <a class="navbar-item" href="http://www.itsmotul.edu.mx/">
      <img src="assets/img/logo-tecmotul22.png" width="40" height="100">
    </a>
    <!-- INICIA DROPDOWN MENU -->
    <div class="dropdown is-hoverable">
      <div class="dropdown-trigger">
        <a class="button is-light is-outlined">
          <?php echo $sesion;  ?>
          <span class="icon is-small">
            <i class="fas fa-angle-down" aria-hidden="true"></i>
          </span>
        </a>
        </button>
      </div>
      <div class="dropdown-menu" id="dropdown-menu" role="menu">
        <div class="dropdown-content">
          <a href="#" class="dropdown-item">
            Registrar datos
          </a>
          <a href="datospersonales.php" class="dropdown-item">
            Informacion de usuario
          </a>

          <hr class="dropdown-divider">
          <a href="cerrar_sesion.php" class="dropdown-item">
            Cerrar sesión
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- TERMINA DROPDOWN MENU -->
</div>
</div>
<!-- FIN MENU -->