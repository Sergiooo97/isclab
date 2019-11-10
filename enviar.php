
<?php
    $conexion = new mysqli("localhost", "SERGIOOO", "4973160vv", "tiendaa");

 $asunto = $_POST['asunto'];
	$comentario = $_POST['comentario'];
	
mysqli_query($conexion, "INSERT INTO contacto_16070021(asunto, 
comentario) VALUES ('$asunto', '$comentario')");
mysqli_close($conexion); 
header('Location: contacto.php');

?>