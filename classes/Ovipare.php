<?php

    class Ovipare extends Animal
    {
        public function identify()
        {
            return "Je suis un {$this->espece} qui s'appelle {$this->nom} et j'ai {$this->nbDePattes} pattes et je ponds des oeufs (accessoirement je suis proche aux dinosaures la plupart du temps)";
        }
    }
