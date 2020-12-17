<?php

    require_once('checkusuari.php');

    $usuari = $_REQUEST['usuari'];
    $password = $_REQUEST['password'];

    $datos = array('nom'=>$usuari,'contrasenya'=>$password);

    if ($usuari != "" && $password != "") {

        $user = new Usuari();

        $user => registro($datos);

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