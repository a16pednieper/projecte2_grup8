<?php

require_once("viatges.php");

class Usuari extends viatges {

    private $id;
    private $nom;
    private $contrasenya;

    function __construct() {
        $this->db_name = "a16pednieper_v2";
    }

    // public function iniciarsession ($usuari, $password) {
    //     $this->query = "SELECT * FROM USUARI WHERE nom='$usuari' AND contrasenya='$password'";
    //     $this->get_results_from_query();
    //     if (count ($this->rows)==1) {
    //         foreach ($this->rows[0] as $property => $value)
    //         $this->$property = $value;
    //         session_start();
    //         $_SESSION['userLogged']= $this->rows[0]['id'];
    //         return $this->rows;
    //     } else {
    //         return false;
    //     }
    // }
    
    function __toString(){
        return "(" . $this->id . ", " . $this->nom . ", " . $this->contrasenya . ")";
    }


    public function registro ($datos= array()) {
        foreach($datos as $property => $value)
        $$property = $value;
        
        $this->query = "INSERT INTO USUARI (nom, contrasenya) VALUES ('$nom', '$contrasenya')";
        $this->execute_single_query();
    }

//     public function existUsuari ($usuari){
//         $this->query = "SELECT * FROM USUARI WHERE nom='$usuari'";
//         $this->get_results_from_query();

//         if (count($this->rows)==1) {
//             foreach ($this->rows[0] as $property => $value)
//             $this->$property = $value;
//             return $this->rows;
//         }
//         else{
//             return false;
//         }
//     }
}


?>