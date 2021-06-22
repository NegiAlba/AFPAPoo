<?php

//? Une méthode abstraite permet de définir le squelette des classes qui vont en hériter. On peut aussi créer des méthodes abstraites qui devront être surchargées par les classes qui héritent de la classe abstraite.
abstract class Shape
{
    //* Propriétés avec des modificateurs d'accès
    //* L'héritage se détermine dans les modificateurs d'accès.
    protected $height;
    protected $width;

    //* Constructeur de la classe
    public function __construct($height, $width)
    {
        $this->setHeight($height);
        $this->setWidth($width);
    }

    //* Getters : Accesseurs de données
    //? $this signifie que ma réference c'est l'objet en cours d'utilisation.
    public function getHeight()
    {
        return $this->height;
    }

    //* Setters : Modificateurs de données

    public function setHeight(int $height)
    {
        if ($height > 0) {
            $this->height = $height;
        }
    }

    /**
     * Get the value of width.
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width.
     *
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    //* Méthodes personnalisée : Aire de la forme
    abstract public function area();
}

class Rectangle extends Shape
{
    public function area()
    {
        return $this->height * $this->width;
    }
}
class Square extends Shape
{
    public function area()
    {
        return $this->height * $this->height;
    }
}

class Triangle extends Shape
{
    // Width c'est la base du triangle
    public function area()
    {
        return ($this->height * $this->width) / 2;
    }
}

//* Pour créer un objet, il faut d'abord lui assigner une variable et ensuite instancier la classe avec new + LeNomDeLaClasse().

$carre = new Square(10, 10);
$rectangle = new Rectangle(10, 15);

// $shape2 = new Shape();

// $carre->setHeight(10);
// $carre->setWidth(10);

var_dump($rectangle->area());
var_dump($carre->area());
