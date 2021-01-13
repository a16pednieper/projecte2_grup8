<?php

    require_once('Viatges.php');

    class Usuari {  
        
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
            session_start();
            return $this->rows;
        }

        public function selectByData($nom) {
            //FUNCIONES PARA ABRIR LA BD DE OTRA FORMA INICIO
            function openBD(){
                $servername = "labs.iam.cat";
                $username = "a16pednieper_v2";
                $password = "pedro";
                    $conn = new PDO("mysql:host=$servername;dbname=a16pednieper_v2;charset=utf8", $username, $password);
                    // set the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                    return $conn;
            }
            function closeBD(){
                return null;
            }
            //FUNCIONES PARA ABRIR LA BD DE OTRA FORMA FINAL


            //$usuariData = array()
            $result = "false";
          //  $nom = "";

               /* foreach($usuariData as $property => $value) {
                    $$property = $value;
                };*/



            if ($nom != "") {
                $conn=openBD();

                $sentence= $conn -> prepare("SELECT * FROM USUARI WHERE nom='$nom'");
                $sentence -> execute();

                $result= $sentence->fetchAll();
                //$this->query = "SELECT * FROM USUARI WHERE nom='$nom'";
                //$this->get_results_from_query();
                session_start();

                if ($this!= null) {
                    //$result= "true";
                    /*
                    function console_log( $data ){
                        echo '<script>';
                        echo 'console.log('. json_encode( $data ) .')';
                        echo '</script>';
                      }
                      
                      console_log( $result );
                      */
                    header("Location: login.html");

                    $conn=closeBD();
                };

            } else {

                $this->query = "SELECT * FROM CONTACTES WHERE nom='$nom'";
                $this->get_results_from_query();

            };            
            return array($result, $this-> rows);
        }

        public function insert($usuariData = array()) {

            echo "Estoy haciendo INSERT";
            foreach ($usuariData as $property => $value)
            $$property = $value;
            $this->query = "INSERT INTO USUARI (nom, contrasenya)
            VALUES ('enrique', 'enrique')";
            $this->execute_single_query();            
        }

        public function delete ($usuariNom="") {
            $this->query = "DELETE FROM USUARI WHERE nom = '$usuariNom'";
            $this->execute_single_query($this->query);
        }

        public function update ($usuariData = array()) {

        }
        

    }

?>