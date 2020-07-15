<?php

class Chaussures extends Vetements
{
    public $pointure;

    public function __construct($prix_instance, $dispo_instance, $point_instance)
    {
        parent::__construct($prix_instance, $dispo_instance);
        $this->pointure = $point_instance;
    }
}