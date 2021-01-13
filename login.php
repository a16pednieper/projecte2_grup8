<?php

    error_reporting(-1);
    ini_set('display_errors','on');

    require_once('usuari.php');

    $usuari = $_POST['nom'];
    $password = md5($_POST['password']);
    

    $datos = array('nom'=>$usuari,'contrasenya'=>$password);

    if ($usuari != "" && $password != "") {

        $user = new Usuari();

        $user -> selectByData($datos['nom']);

    }


?>