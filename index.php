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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"> </script>
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
            <img src="img/avion.gif" alt="avion" width="150" class="avion">
        </div>

        <select name="idcategoria" id="categoria">
            <option value="0">Todas</option>
            <option value="1">Muntanya</option>
            <option value="2">Aventures</option>
            <option value="3">Familiar</option>
        </select>
    
        <input type="button" id="consulta" value="Consulta">
        <br>
        <input type="button" id="afegir" value=""> 
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
                         include 'afegirExperiencia.php';
                    ?>
                </div>
            </div>
        </div>
        </div>
        <div class="experiences" id="experiencies">
            
        <script src="js/filtro.js"></script>

        </div>  

    </div>

    <?php include 'footer.php'; ?>


</body>

</html>