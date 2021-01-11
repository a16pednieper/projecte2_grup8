<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECTE 8</title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico">


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
                    <h4 class="modal-title" id="myModalLabel">Registro Usuario</h4>
                </div>
                <div class="modal-body">
                    <?php
                         include 'crearUsuari.php';
                    ?>
                </div>
            </div>
        </div>
    </div>


    <div class="principal">
        <div class="cabecera">
            <h1>Experiencies</h1>
            <img src="img/avion.gif" alt="avion" width="200" class="avion">
        </div>

            
            <div class="experiences">

            <?php
            $contenido = file_get_contents("prova.json");
            $con = $contenido;
            $datos = json_decode($con, true);
            $hay = count($datos["Experiencies"]);
            $exps = $datos["Experiencies"];
            ?>
                
            <?php
                foreach($exps as $exp){
            ?>

            <ul class="cards clearfix">
                <li>
                    <figure class="product-card">
                    <a href="#">
                        <?php echo "<img src='$exp[Imatge]'></img>"; ?>
                        <figcaption>
                        <h5 class="product-card-title"><?php echo "$exp[Nom]";?></h5>
                        <p><?php echo "$exp[Descripcio]";?></p>
                        <p class="product-card-address">
                            <?php echo "$exp[Data]";?>
                        </p>
                        <div class="product-card-price">
                            <span class="price-savings"><?php echo "$exp[Categoria]";?></span>
                            <p class="amount-price"><?php echo "$exp[Likes]";?> Likes</p>
                            <p class="amount-price"><?php echo "$exp[Dislikes]";?> Dislikes</p>
                        </div>
                        </figcaption>
                    </a>
                    </figure>
                </li>
            </ul>

            <?php
                }
            ?>

        </div>

    </div>

    <?php include 'footer.php'; ?>


</body>

</html>