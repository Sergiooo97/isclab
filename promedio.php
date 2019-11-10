<?php
include("conexion.php");
include("consultas_index.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p id="nombre" class="info"> <?php

$consulta= "SELECT  (P1 + P2 +P3 +P4)/4  FROM topmaterias WHERE nombre = 'redes'";
$resultado=$con -> query($consulta);
$fila=$resultado->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo
$TotalPrecios=$fila[' (P1 + P2 +P3 +P4)/4 '];

?>
</p>
</body>
</html>
