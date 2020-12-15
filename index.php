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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



</head>

<body>
    
    <?php include 'header.php'; ?>

    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Esto es un modal</h4>
			</div>
			<div class="modal-body">
				Texto del modal
			</div>
		</div>
	</div>
    </div>



    <!-- <form action="registro.php" method="post" name="registro" class="prueba">
        <div class="formelement">
            <label>Usuario</label>
            <input type="text" name="usuari" required />
        </div>
        <div class="formelement">
            <label>Contrasenya</label>
            <input type="password" name="pass" required />
        </div>   
        <button type="submit" name="registro" value="registro">Registrar</button>
    </form> -->
  
    
    <br>
        <div class="principal">
            <h1>Experiencies</h1>
            <?php 

        // $servername = "labs.iam.cat";
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

    <?php
        $contenido = file_get_contents("prova.json");
        $con = $contenido;
        $datos = json_decode($con, true);
        $hay = count($datos["Experiencies"]);
        $exps = $datos["Experiencies"];
        ?>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Categoria</th>
                    <th>Imatge</th>
                    <th>Data</th>
                    <th>Likes</th>
                    <th>Dislikes</th>
                    <th>Descripcio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($exps as $exp){
                    echo "<tr>";
                    echo "<td>$exp[Nom]</td>";
                    echo "<td>$exp[Categoria]</td>";
                    echo "<td><img src='$exp[Imatge]'></img></td>";
                    echo "<td>$exp[Data]</td>";
                    echo "<td>$exp[Likes]</td>";
                    echo "<td>$exp[Dislikes]</td>";
                    echo "<td>$exp[Descripcio]</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        </div>

        <?php include 'footer.php'; ?>
        

</body>
</html>