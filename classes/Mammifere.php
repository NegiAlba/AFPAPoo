<?php

    class Mammifere extends Animal
    {
        public function identify()
        {
            return "Je suis un {$this->espece} qui s'appelle {$this->nom} et j'ai {$this->nbDePattes} pattes et je ponds pas de p***** d'oeufs (sauf si je suis un ornithorynque, dans ce cas je m'excuse car je suis quand même absolument chelou)";
        }
    }
