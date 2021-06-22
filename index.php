<?php
    //* La fonction spl_autoload_register permet de créer un autoloader personnalisé
    spl_autoload_register(
        function ($class) {
            require_once 'classes/'.$class.'.php';
        }
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices POO</title>
</head>
<body>
//* Vérification des exercices
    <h1>Exercice 1</h1>
    <?php
        $axel = new User('Axel', 'Gromat', 'axel@gromat.com', '123456', '0783382827');
        echo $axel->getFullName();
        echo '<br/>';
        echo $axel->identify();
        echo '<br/>';
        echo $axel;
        echo '<br/>';
        $thomas = new Admin('Thomas', 'Delalbre', 'thomas@delalbre.com', '543216', '0123456789');
        $thomas->setNickname('TDAdmin');
        echo $thomas->identify();

        ?>
</body>
</html>