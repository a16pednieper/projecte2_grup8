<?php

  require_once("viatges.php");

  class Experiencia extends viatges {

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

  function __toString(){
    return "(" . $this->id . ", " . $this->titol . ", " . $this->imatge . ", " . $this->likes . ", " . $this->coordenadas . "," . $this->dislikes . ", " . $this->fecha . ", " . $this->id_usuari . ", " . $this->id_categoria . ")";
}

  function filtrar($cat){
    if ($cat == 0){
      $this->query = "SELECT * FROM EXPERIENCIA";
    }
  
    else if ($cat == 1){
      $this->query = "SELECT id, titol, descripcio FROM EXPERIENCIA WHERE id_categoria='1'";
      
    }

    $this-> get_results_from_query();
    return $this->rows;
    
  }
    public function select() {
      $this->query = "SELECT * FROM EXPERIENCIA";
      $this->get_results_from_query();
      session_start();
      return $this->rows;
    }
  

  

  }



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