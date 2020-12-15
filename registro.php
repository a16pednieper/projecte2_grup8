<?php

    include('usuaris.php');


    if (isset($_POST['registro'])) {

        $usuari = $_POST['usuario'];
        $contrasenya = md5($_POST['password']);

       $user1 = new usuari ();

       $datos = array ("username" => $usuari, "password" => $contrasenya, "admin"=>0);
       $user1->insert($datos);

    }


?>