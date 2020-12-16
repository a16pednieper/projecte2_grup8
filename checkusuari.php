<?php

include "viatges.php";

class Usuari extends viatges {

    function _construct() {
        $this->dbname = "a16pednieper_v2";
    }

    public function iniciarsession ($usuari, $password) {
        $this->query = "SELECT * FROM USUARI WHERE nom='$usuari' AND contrasenya='$password'";
        $this->resultados_query();
        if (count ($this->rows)==1) {
            foreach ($this->rows[0] as $property => $value)
            $this->$property = $value;
            session_start();
            $_SESSION['userLogged']= $this->rows[0]['id'];
            return $this->rows;
        } else {
            return false;
        }
    }

    public function registro ($usuari, $password) {
        $this->query = "INSERT INTO usuari (nom, contrasenya) VALUES ('$usuari', '$password')";
        $this->ejecutar_query();

        return $this->iniciarsession($usuari, $password);
    }

    public function existUsuari ($usuari){
        $this->query = "SELECT * FROM usuari WHERE nom='$usuari'";
        $this->resultados_query();

        if (count($this->rows)==1) {
            foreach ($this->rows[0] as $property => $value)
            $this->$property = $value;
            return $this->rows;
        }
        else{
            return false;
        }
    }
}


?>