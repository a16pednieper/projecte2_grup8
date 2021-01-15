<?php

error_log("comienzo");
require_once('experiencia.php');
error_log("segon");

$titol =  $_POST['titol'];
$fecha =  $_POST['fecha'];
$text =  $_POST['text'];
<<<<<<< HEAD
$cat =  $_POST['cat'];
=======
$cat = $_POST['cat'];
>>>>>>> f048f2b0946295d3c27fa2d66db140d2d59163ee

error_log("tercer");

$experiencia= new experiencia();

error_log("cuatro");

$experiencia-> crearExperiencia($titol, $fecha, $text, $cat);

?>