<?php
	
	if (!$_POST) { ?>
		
		<h2>Crear contacte</h2>
        <form action="registro.php" method="post">
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
    $usuari -> insert($_POST);
    
}

?>