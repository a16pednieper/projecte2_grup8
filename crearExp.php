<?php

error_log("comienzo");
require_once('experiencia.php');
error_log("segon");

$titol =  $_POST['titol'];
$fecha =  $_POST['fecha'];
$text =  $_POST['text'];
$cat =  $_POST['cat'];

error_log("tercer");

$experiencia= new experiencia();

error_log("cuatro");

$experiencia-> crearExperiencia($titol, $fecha, $text, $cat);

?>