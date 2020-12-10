<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECTO 8</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    
    <?php include 'php/header.php'; ?>

    
    <?php 
        $json = file_get_contents('prova.json');

        $data = json_decode($json);

       
        print($json);
    
    ?>

    


    <?php include 'php/footer.php'; ?>

</body>
</html>