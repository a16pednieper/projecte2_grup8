<?php

require_once("viatges.php");

class Usuari extends viatges {

    private $id;
    private $nom;
    private $contrasenya;

    function __construct() {
        $this->db_name = "a16pednieper_v2";
    }    
    
    function __toString(){
        return "(" . $this->id . ", " . $this->nom . ", " . $this->contrasenya . ")";
    }


    public function registro ($datos= array()) {
        foreach($datos as $property => $value)
        $$property = $value;
        
        $this->query = "INSERT INTO USUARI (nom, contrasenya) VALUES ('$nom', '$contrasenya');";
        $this->execute_single_query();
    }

    public function select(){

        
    }

}

?>