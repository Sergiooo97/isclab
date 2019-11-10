<?php

session_start();
$conexion = new mysqli("localhost", "SERGIOOO", "4973160vv", "tiendaa");
$nombre1 = $_POST['email'];
$password1 = $_POST['pass'];


$cone = mysqli_query($conexion, "SELECT COUNT(*) as contar FROM usuarios where correo = '$nombre1' and  contraseña = '$password1' ");
$parametros = mysqli_fetch_array($cone);
if($parametros['contar']>0){
   $_SESSION['username'] = $nombre1;
   echo "<h1>datos correctos</h1> <br> ";

   header('Location: index.php');
}else {
    echo "<h1>datos incorrectos</h1> <br> ";
    echo "<a href=''>Volver</a>";
}
?>
