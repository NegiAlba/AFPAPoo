<?php
    //? Fonction php qui permet d'éxécuter une callback à chaque fois que PHP n'arrive pas à accéder à une ressource.
    spl_autoload_register(
        function ($class) {
            require_once 'classes/'.$class.'.php';
        }
    );

    $elephant = new Mammifere('Eléphant', 'Babar', 4);
    $chien = new Mammifere('Chien', 'PasOriginal', 4);
    $coq = new Ovipare('Coq', 'Footix', 2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <h2><?php echo $elephant->identify(); ?></h2>
    <h2><?php echo $chien->identify(); ?></h2>
    <h2><?php echo $coq->identify(); ?></h2>
</body>
</html>