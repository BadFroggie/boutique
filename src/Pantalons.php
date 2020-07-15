<?php

class Pantalons extends Vetements
{
    public $taille;

    public function __construct($prix_instance, $dispo_instance, $taille_instance)
    {
        parent::__construct($prix_instance, $dispo_instance);
        $this->taille = $taille_instance;
    }
}