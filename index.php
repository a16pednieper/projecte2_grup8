<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECTE 8</title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    
    <header class="header1">  
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a href="#index.php"><div class="logo"><img src="img/logo1.png" width="160px"></div></a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><input type="button" value="LOGIN"></li>
                        <li class="nav-item mx-0 mx-lg-1"><input type="button" value="REGISTRAR"></li>
                    </ul>
                </div>
            </div>
        </nav>  
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

        $servername = "localhost";
        $username = "a16pednieper_v2";
        $password = "pedro";

        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
          }
        echo "Connected successfully";

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
    <br>
        <div class="principal">
            <h1>Experiencies</h1>
        </div>

        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Ubicació</h4>
                        <p class="lead mb-0">
                            Institut Pedralbes
                            <br />
                            Barcelona
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Membres del Grup 8</h4>
                        <p class="lead mb-0">
                            Pedro Nieto, Joel Rodríguez, Enrique Rillo i Bayron Lopez
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <input type="button" value="ADMIN">
                    </div>
                </div>
            </div>            
        </footer>
        
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright © Institut Pedralbes 2020</small></div>
        </div>
        <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
    
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

    

</body>
</html>