<?php

class Chaussures extends Vetements
{
    public $id;
    public $nom;
    public $pointure;

    public function __construct($prix_instance, $dispo_instance, $nom_instance, $point_instance)
    {
        parent::__construct($prix_instance, $dispo_instance);
        $this->nom = $nom_instance;
        $this->pointure = $point_instance;
    }
}