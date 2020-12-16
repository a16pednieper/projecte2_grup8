<?php

    require_once('viatges.php');

    class Usuari extends Viatges {  
        
        private $id;
        private $nom;
        private $password;      

        function __construct () {
            $this->dbname = "a16pednieper_v2";
        }

        function __toString() {
            echo "Entro String <br>";
            return "(" . $this->id . ", " . $this->nom . ", " . $this->password . ")";
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
                
            }    

        }

    }

?>