<<<<<<< HEAD
<?php

require_once("experiencia.php");

    echo "Creo Experiencia <br>";
    $experiencia = new Experiencia();
    $dades = $experiencia -> select();


    echo json_encode($dades);   
    echo "Les dades";

?>