<?php

class Animal
{
    protected $espece;
    protected $nom;
    protected $nbDePattes;

    public function __construct($espece, $nom, $nbDePattes)
    {
        $this->setEspece($espece);
        $this->setNom($nom);
        $this->setNbDePattes($nbDePattes);
    }

    /**
     * Get the value of nom.
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom.
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of espece.
     */
    public function getEspece()
    {
        return $this->espece;
    }

    /**
     * Set the value of espece.
     *
     * @return self
     */
    public function setEspece($espece)
    {
        $this->espece = $espece;

        return $this;
    }

    /**
     * Get the value of nbDePattes.
     */
    public function getNbDePattes()
    {
        return $this->nbDePattes;
    }

    /**
     * Set the value of nbDePattes.
     *
     * @return self
     */
    public function setNbDePattes($nbDePattes)
    {
        $this->nbDePattes = $nbDePattes;

        return $this;
    }

    public function identify()
    {
        return "Je suis un {$this->espece} qui s'appelle {$this->nom} et j'ai {$this->nbDePattes} pattes";
    }
}
