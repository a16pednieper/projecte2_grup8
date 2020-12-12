<?php

    include('viatges.php');


    if (isset($_POST['registro'])) {

        $usuari = $_POST['usuario'];
        $usuari = md5($_POST['password']);

       

    }


?>