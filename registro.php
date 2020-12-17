<?php

    error_reporting(-1);
    ini_set('display_errors','on');

    require_once('checkusuari.php');

    $usuari = $_POST['nom'];
    $password = $_POST['password'];

    $datos = array('nom'=>$usuari,'contrasenya'=>$password);

    if ($usuari != "" && $password != "") {

        $user = new Usuari();

        $user -> registro($datos);

    }
    //     if ($user->existUsuari($usuari) == false) {
    //         $resultUser = $user->registro($datos);

    //         if ($resultUser == false) {
    //             echo "NOPE";
    //         } else {
    //             echo "OKAY";
    //         }
    //     } else {
    //         echo "EXISTE";
    //     }


    // } else {
    //     echo "EMPTY";
    // }

?>