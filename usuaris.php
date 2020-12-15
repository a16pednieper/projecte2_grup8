<?php
    require once ('viatges.php');

    class usuaris extends viatges {

        private $username;
        private $password;
        private $nom;
        private $admin;

        function __construct () {
            $this->dbname = "a16pednieper_v2";
        }

        function __toString () {
            return "(" . $this->username . ", " . $this->password . ", " . $this->nom . ", " .
                         $this->admin . ")";
        }

        function __destruct (){
            //unset ($this);
        }
        

        // Seleccionar un registro de la tabla
        public function select ($username="") {
            if($username != "") {
               $this->query="SElECT username, password, nom FROM USUARI WHERE nom = '$username'";
               $this->resultados_query();
            }
            if (count($this->rows)==1) {
                foreach ($this->rows[0] as $property => $value)
                    $this->$property = $value;
            }
        }

        // Insertar un Usuario

        public function insert ($userData=array()) {
            if (array_key_exists("username", $userData)) {
                $this->select($userData['username']);

                if($userData['username'] != $this->username) {
                    $property = $value;
                    $this->query="INSERT INTO USUARI (username, password, admin)
                                  VALUES ('$username', '$password', 0 )";
                    $this->ejecutar_query();
                }
            }
        }
        
        

    }

?>