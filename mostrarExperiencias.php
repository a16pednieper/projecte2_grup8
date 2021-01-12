<?php

require_once("experiencia.php");

    
    $experiencia = new Experiencia();
    $dades = $experiencia -> select();

    echo json_encode($dades);   
    

?>