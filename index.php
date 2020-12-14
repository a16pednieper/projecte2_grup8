<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROYECTO 8</title>
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


    <form action="" method="post" name="registro" class="prueba">
        <div class="formelement">
            <label>Usuario</label>
            <input type="text" name="usuario" required />
        </div>
        <div class="formelement">
            <label>Contrasenya</label>
            <input type="password" name="password" required />
        </div>   
        <button type="submit" name="registro" value="registro">Registrar</button>
    </form>
    
    <?php 

        // $servername = "localhost";
        // $username = "a16pednieper_v2";
        // $password = "pedro";

        // $conn = new mysqli($servername, $username, $password);

        // if ($conn->connect_error) {
        // die("Connection failed: " . $conn->connect_error);
        //   }
        // echo "Connected successfully";

        // $sql = " SELECT * FROM `CATEGORIA` ";
        // $result = $conn->query($sql);

        // echo $result;
          
        // $data = file_get_contents('prova.json');
        // $viajes = json_decode($data, true);

        // foreach ($viajes as $viaje) {
        //    echo '<pre>';
        //   print_r($viaje);
        //  echo '</pre>';

        // }     

        // $sql = 'INSERT INTO USUARI (username, password) VALUES ( $usuari, $contra)';
        // $result = $conn->query($sql);
    
        

    ?>
        <div class="principal">
            <h1>Experiencies</h1>
        </div>
        <footer class="footer1">
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