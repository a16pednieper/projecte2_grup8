<?php

require_once("experiencia.php");

    
    $experiencia = new Experiencia();
    $cat = $_GET['cat'];
    $dades = $experiencia -> filtrar($cat);

    echo json_encode($dades);   
    

?>