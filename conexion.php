<?php

//Con esto nos conectamos a nuestra PhPMyAdmin

include ("configuracion.php");

$conexion = new mysqli($server,$user,$pass,$bd);

if (mysqli_connect_errno()) {
    
    echo "No estás conectado", mysqli_connect_errno();
    exit();
}
/* Con esto Comprobamos que estamos conectados a nuestra Base de Datos de MySQL.
else {
    echo "Conectado";
}
*/


?>