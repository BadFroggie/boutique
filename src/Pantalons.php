<?php

class Pantalons extends Vetements
{
    public $id;
    public $nom;
    public $taille;

    public function __construct($prix_instance, $dispo_instance, $nom_instance, $taille_instance)
    {
        parent::__construct($prix_instance, $dispo_instance);
        $this->nom = $nom_instance;
        $this->taille = $taille_instance;
    }
}