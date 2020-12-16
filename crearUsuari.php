<?php
	
	if (!$_POST) { ?>
		
		<h2>Crear contacte</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="nom">Nom </label>
            <input type="text" name="nom">
            <br>
			<label for="cognom1"> Password </label>
            <input type="password" name="password">
            <br>
            <input type="submit" value="Crear">
            <br>            
        </form> 
		
<?php	} else {

		require_once('Usuari.php');
        foreach ($_POST as $property => $value) {
			$$property = $value;
		}
       
    $usuari = new Usuari();
    $existeix = $usuari -> selectByData($_POST);

    if ($existeix[0] =="true") {
		
		$result = "EL usuari ja existeix";
		} else {
    
			$result = $usuari -> insert($_POST);
    }
    
    
    //echo json_encode($result);
}

?>