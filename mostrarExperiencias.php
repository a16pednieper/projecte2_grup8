<?php

require_once("experiencia.php");

    
    $experiencia = new Experiencia();
    $cat = $_GET['idcategoria'];
    $dades = $experiencia -> filtrar($cat);

    echo json_encode($dades);   
    

?>