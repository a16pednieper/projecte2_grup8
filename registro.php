<?php

    require_once('checkusuari.php');

    $usuari = $_REQUEST['usuari'];
    $password = $_REQUEST['password'];


    if ($usuari != "" && $password != "") {

        $user = new Usuari();

        if ($user->existUsuari($usuari) == false) {
            $resultUser = $user->registro($usuari, $password);

            if ($resultUser == false) {
                echo "NOPE";
            } else {
                echo "OKAY";
            }
        } else {
            echo "EXISTE";
        }


    } else {
        echo "EMPTY";
    }

?>