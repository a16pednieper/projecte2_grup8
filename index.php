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

    <script>
            let datos = [];
            function renderDatos() {

                let htmlStr="";
                var llargada = datos;
                console.log(datos.length);
                for (let index = 0; index < 2; index++) {
                    const element = datos[index];                    
                        
                        htmlStr += `<ul class="cards clearfix">
                        <li>
                            <p>Pedrito</p>
                            <figure class="product-card">
                            <a href="#">
                                <img src='${datos[index].imatge}'></img>
                                <figcaption>
                                <h5 class="product-card-title">${datos[index].titol}</h5>
                                <p>${datos[index].descripcio}</p>
                                <p class="product-card-address">
                                ${datos[index].fecha}
                                </p>
                                <div class="product-card-price">
                                    <span class="price-savings">${datos[index].id_categoria}</span>
                                    <p class="amount-price">${datos[index].likes} Likes</p>
                                    <p class="amount-price">${datos[index].dislikes} Dislikes</p>
                                </div>
                                </figcaption>
                            </a>
                            </figure>
                        </li>
                    </ul>
                    `};
                

                document.getElementById("experiencies").innerHTML=htmlStr;
            }

            

            window.onload = function () {
                
                axios.get('http://labs.iam.cat/~a16pednieper/projecte2_grup8/mostrarExperiencias.php'
              )         
            .then (function (datos)  {
                datos=datos.data;
                console.log(datos);                
                renderDatos();
            })
            .catch(function (error) {
                console.log(error);
            })
            .then (function () {
                //always executed
            });
            }
            
            </script>


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

            
        <div class="experiences" id="experiencies">     

        </div>      

            
                      

        

    </div>

    <?php include 'footer.php'; ?>


</body>

</html>