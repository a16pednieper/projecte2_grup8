<?php

    require once ('viatges.php');

    class usuari extends viatges {        

        function __construct () {
            $this->dbname = "a16pednieper_v2";
        }

        public function selectusuaris() {
            $this->query = "SELECT id, nom FROM USUARI";
            $this->resultados_query();

            if (count($this->rows)==1) {
                foreach ($this->rows[0] as $property => $value)
                $this->$property = $value;
            }

            return $this->rows;
        }


        
        

    }

?>