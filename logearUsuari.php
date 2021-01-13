<?php
	
	if (!$_POST) { ?>
		
		<h2>LOGIN</h2>
        <form action="login.php" method="post">
            <label for="nom">Nom </label>
            <input type="text" name="nom">
            <br>
			<label for="cognom1"> Password </label>
            <input type="password" name="password">
            <br>
            <input type="submit" value="logear">
            <br>            
        </form> 
		
<?php	} else {

		require_once('usuari.php');
        foreach ($_POST as $property => $value) {
			$$property = $value;
		}
       
    $usuari = new Usuari();    
    $usuari -> selectByData($_POST);
    
}

?>