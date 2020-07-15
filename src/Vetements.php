<?php

class Vetements
{
    public $prix;
    public $disponibilite;

    public function __construct($prix_instance, $dispo_instance)
    {
        $this->prix = $prix_instance;
        $this->disponibilite = $dispo_instance;
    }
}