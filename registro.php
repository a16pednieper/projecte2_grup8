<?php

    require_once('checkusuari.php');

    $usuari = $_REQUEST['usuari'];
    $password = $_REQUEST['password'];


    if ($usuari != "" && $password != "") {

        $user = new Usuari();

        if ($usuari->existe_usuario($usuari) == false) {
            $resultusuari = $usuari->registro($usuari, $password);

            if ($resultusuari == false) {
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