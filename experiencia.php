<?php

  require_once("viatges.php");

  class Experiencia extends Viatges {

    private $id;
    private $titol;
    private $descripcio;
    private $imatge;
    private $coordenadas;
    private $likes;
    private $dislikes;
    private $fecha;
    private $id_usuari;
    private $id_categoria;

  

  function __construct () {
    $this->db_name = "a16pednieper_v2";
  }  								

  public function select() {
    $this->query = "SELECT * FROM EXPERIENCIA";
    $this->get_results_from_query();
    session_start();
    return $this->rows;
  }

  

  }
// if ($_GET['cat'] == 0){
//     $sql = "SELECT * FROM EXPERIENCIA";
//   }
//   else{
//     $sql = "SELECT id, titulo, descripcion FROM EXPERIENCIA WHERE idCategoria=".$_GET['cat'];
//   }


//   $stmt = $conn->prepare($sql);
//   $stmt->execute();
//   $arrResultat = array();

//   // output data of each row
//   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){    
//     $arrResultat[] = $row; 
//   }
  
  
//   $show_json = json_encode($arrResultat );
//     echo($show_json);
  

?>