<?php

    abstract class viatges {

        //Credencials Base De Dades
            private static $db_host = "labs.iam.cat";
            private static $db_user = "a16pednieper_v2";
            private static $db_pass = "pedro";

            //Nom Base de Dades
            protected $db_name;

            //Query que se ejecutara
            protected $query;

            //Resultat Query quan s'executa
            protected $rows=array();

            //Conexion BBDD
            private $conn;      
            

            abstract protected function select();
            //abstract protected function insert();
            //abstract protected function update();
            //abstract protected function delete();
            abstract protected function registro();

            //Metodo privado para abrir conexion
            private function open_connection() {
                $this->conn = new mysqli (self::$db_host, self::$db_user, self::$db_pass, $this->db_name);
            }

            //Metodo privado para cerrar conexion
            private function close_connection() {
                $this->conn->close();
            }

            //Ejecutar Insert, Update, Delete
            protected function execute_single_query(){
                $this->open_connection();
                $this->conn->query($this->query);
                $this->close_connection();
            }

            //Ejecutar un Select
            protected function get_results_from_query(){
                $this->open_connection();
                $result = $this->conn->query($this->query);

                for ($i=0; $i < $result->num_rows ; $i++)  
                    $this->rows[$i]=$result->fetch_assoc();       
                             
                $result->close();
                $this->close_connection();                
            }

    }

?>