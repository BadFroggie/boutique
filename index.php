<?php

require('src/Vetements.php');
require('src/Chaussures.php');
require('src/Pantalons.php');

$sweat = new Vetements("20 euros", "50 exemplaires");
$basket = new Chaussures("30 euros", "10 paires", 40);
$jean = new Pantalons("25 euros", "15 exemplaires", 38);
echo "Sweat coton : " . $sweat->prix . " - " . $sweat->disponibilite . "<br>";
echo "Baskets : " . $basket->prix . " - " . $basket->disponibilite . " en pointure " . $basket->pointure . "<br>";
echo "Jean : " . $jean->prix . " - " . $jean->disponibilite . " de taille " . $jean->taille . "<br>"; ?>