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
            return "(" . $this->username . ", " . $this;
        }
        
        
        

    }

?>