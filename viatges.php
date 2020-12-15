<?php

    abstract class viatges {

            //Credencials Base De Dades
            private static $servidor = "localhost";
            private static $user = "a16pednieper_v2";
            private static $password = "pedro";

            //Nom Base de Dades
            protected $dbname = "a16pednieper_v2";

            //Query que se ejecutara
            protected $query;

            //Resultat Query quan s'executa
            protected $rows=array();

            //Conexion BBDD
            private $conn;

            //Metodos Abstractos
            abstract protected function select();
            abstract protected function insert();
            abstract protected function update();
            abstract protected function delete();

            //Metodo privado para abrir conexion
            private function abrir_conexion() {
                $this->conn = new msqli (self::$servidor, self::$user, self::$password, self::$dbname);
            }

            //Metodo privado para cerrar conexion
            private function cerrar_conexion() {
                $this->conn->close();
            }


            //Ejecutar Insert, Update, Delete
            private function ejecutar_query(){
                $this->abrir_conexion();
                $this->conn->query($this->query);
                $this->cerrar_conexion();
            }

            //Ejecutar un Select
            protected function resultados_query(){
                $this->abrir_conexion();
                $result = $this->conn->query($this->query);

                for ($i=0; $i < $result->num_rows ; $i++)  
                    $this->rows[$i]=$result->fetch_assoc();       
                             
                $result->close();
                $this->cerrar_conexion();                
            }

            







    }

?>