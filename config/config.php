<?php

    require 'dev.php';
    //? Fonction php qui permet d'éxécuter une callback à chaque fois que PHP n'arrive pas à accéder à une ressource.
    spl_autoload_register(
        function ($class) {
            require_once 'classes/'.$class.'.php';
        }
    );

    if(isset($_GET['disconnect'])){
        $userDAO = new userDAO();
        $userDAO->disconnect();
        return header('Location:index.php?d');
    }