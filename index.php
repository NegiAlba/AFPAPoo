<?php

class Shape
{
    //Propriétés avec des modificateurs d'accès
    private $height;
    public $width;

    //Getters : Accesseurs de données
    //? $this signifie que ma réference c'est l'objet en cours d'utilisation.
    public function getHeight()
    {
        return $this->height;
    }

    //Setters : Modificateurs de données

    public function setHeight($height)
    {
        $this->height = $height;
    }
}

//* Pour créer un objet, il faut d'abord lui assigner une variable et ensuite instancier la classe avec new + LeNomDeLaClasse().

$shape1 = new Shape();
// $shape2 = new Shape();

var_dump($shape1->getHeight());
