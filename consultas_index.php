<?php
    $conexion = new mysqli("localhost", "SERGIOOO", "4973160vv", "tiendaa");


                           //<-index.php ->
    $topmaterias="SELECT * from topmaterias";//tabla de calificaciones.

//<-----------------------------Gráfica----------------------------------------------->
    $Automatas = "SELECT * FROM topmaterias WHERE nombre = 'Autómatas'";
    $Redes = "SELECT * FROM topmaterias WHERE nombre = 'redes'";
    $UX = "SELECT * FROM topmaterias WHERE nombre = 'UX'";
    $Tinvestigacion = "SELECT * FROM topmaterias WHERE nombre = 'T. investigación'";
    $GestionP = "SELECT * FROM topmaterias WHERE nombre = 'Gestión de proyectos'";
    $IngSoft = "SELECT * FROM topmaterias WHERE nombre = 'Ing. de software'";
//<------------------------------------------------------------------------------------>
                           //<-Avisos.php ->

    $Avisos="SELECT * from avisos";

//<------------------------------------------------------------------------------------>
                           //<-contacto.php ->

    $Tutor = "SELECT * FROM tutores Where semestretutorado = '7B'";//mostrar nombre del tutor.
    $contacto_160="SELECT * from contacto_16070021"; //tabla de mensajes del alumno.

//<------------------------------------------------------------------------------------>
                           //<-proximasclases.php ->
                           
    $proximasclases="SELECT * from proximasclases";

    $promedio4  = "SELECT P4 FROM topmaterias WHERE nombre = 'redes'";
    $promedio2  = "SELECT P2 FROM topmaterias WHERE nombre = 'redes'";
$total = $promedio2 + $promedio4;

    
    $nombre="SELECT * from informacion WHERE id= 16070021";

    $RedesP = "SELECT P4 FROM topmaterias WHERE nombre = 'redes'";
