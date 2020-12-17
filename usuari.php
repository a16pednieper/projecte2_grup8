<?php

    require_once('Viatges.php');

    class Usuari extends Viatges {  
        
        private $id;
        private $nom;
        private $password;      

        function __construct () {
            $this->db_name = "a16pednieper_v2";
        }

        function __toString() {
            echo "Entro String <br>";
            return "(" . $this->nom . ", " . $this->password . ")";
        }

        public function select() {
            $this->query = "SELECT * FROM USUARI";
            $this->get_results_from_query();

            return $this->rows;
        }

        public function selectByData($usuariData = array()) {

            $result = "false";
            $nom = "";

                foreach($usuariData as $property => $value) {
                    $$property = $value;
                };

            if ($nom != "") {

                $this->query = "SELECT * FROM USUARI WHERE nom='$nom'";

                if (count($this->rows) == 1) {
                    $result= "true";
                };

            } else {

                $this->query = "SELECT * FROM CONTACTES WHERE nom='$nom'";
                $this->get_results_from_query();

            };            
            return array($result, $this-> rows);
        }

        public function insert($usuariData = array()) {

            foreach ($usuariData as $property => $value)
            $$property = $value;
            $this->query = "INSERT INTO USUARI (nom, contrasenya)
            VALUES ('enrique', 'enrique')";
            $this->execute_single_query();
            

            // if (array_key_exists("nom", $usuariData)) {
            //     $this->selectByData($usuariData);
            //     if($usuariData["nom"] != $this->nom) {
            //         foreach ($usuariData as $property => $value)
            //             $$property = $value;
            //         $this->query = "INSERT INTO USUARI (nom, contrasenya)
            //         VALUES ('$nom', '$password')";
            //         $this->execute_single_query();
            // }
            // }
        }

        public function delete ($usuariNom="") {
            $this->query = "DELETE FROM USUARI WHERE nom = '$usuariNom'";
            $this->execute_single_query($this->query);
        }

        public function update ($usuariData = array()) {

        }

    }

?>