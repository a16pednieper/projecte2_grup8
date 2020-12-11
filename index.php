<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECTO 8</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>



<body>
    
    <header class="header1">  
    
        <a href="#index.php"><div class="logo"><img src="img/logo1.png" width="160px"></div></a>
        <div class="titulo"><p>GRUP 8: VIATGES</p></div>
        <div class="botonesheader"> 
            <input type="button" value="LOGIN">
            <input type="button" value="REGISTRAR">
        </div>    
    
    </header> 

    
    <?php 
        $data = file_get_contents('prova.json');
        $viajes = json_decode($data, true);

        foreach ($viajes as $viaje) {
            echo '<pre>';
            print_r($viaje);
            echo '</pre>';

        }
       
       
    
    ?>

        <footer>
            <div class="integrantes">
        <h4> GRUP 8 </h4>
        <p> 
        Bayron López <br> 
        Enrique Rillo <br> 
        Joel Rodriguez <br> 
        Pedro Nieto
        </p>   
       
    </div>
    <div class="botonadmin">
        <input type="button" value="ADMIN">

    </div>
        </footer>
    


    

</body>
</html>