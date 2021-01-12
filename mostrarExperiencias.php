<?php

require_once("experiencia.php");

    echo "Creo Experiencia <br>";
    $experiencia = new Experiencia();
    $dades = $experiencia -> select();


    echo $dades;   
    echo "Les dades";
    
?>