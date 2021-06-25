<?php

namespace App\src;

use Exception;
use App\src\controllers\FrontController;

class Router
{
    private $frontController;

    public function __construct()
    {
        $this->frontController = new FrontController();
    }

    public function run()
    {
        //* Fonctionnement souhaité
        //* site.com/Controller/Action/Params
        //* On a un seul controller donc on peut se passer du /Controller
        try {
            if(isset($_GET['path'])){
                //* Virer la partie site.com => Action/Params
                $url = explode('/', filter_var($_GET['path'], FILTER_SANITIZE_URL));
                //* ["Action","Params"]
                $ctrlFunction = $url[0];
                var_dump($url);
                if(method_exists($this->frontController, $ctrlFunction))
                {
                    $params = null;
                    if(isset($url[1])){
                        $params = $url[1];
                    }


                    return $this->frontController->{$ctrlFunction}($params);
                }
                //* De préférence créer une page d'erreur à la place
                return $this->frontController->error();
            }
            return $this->frontController->home();
        } catch (Exception $e) {
            throw $e->getMessage();
        }
    }
}