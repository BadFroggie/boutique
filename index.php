<?php

require('src/Vetements.php');
require('src/Chaussures.php');
require('src/Pantalons.php');

try {
    $pdo = new PDO('mysql:dbname=boutique;host=127.0.0.1', 'root');
    echo 'Connexion réussie.<br><br>';
} catch(PDOException $e) {
echo 'Connexion échouée : ' . $e->getMessage();
}

$chaussures = $pdo->query('SELECT * FROM chaussures')->fetchAll(PDO::FETCH_OBJ);
foreach ($chaussures as $chaussure) {
    echo "<b>$chaussure->nom_chaussures : </b>";
    echo "$chaussure->prix_chaussures" . " euros - ";
    echo "$chaussure->stock_chaussures" . " paires en pointure ";
    echo "$chaussure->pointure_chaussures" . ".<br>";
}
echo "<br><br>";

$query = $pdo->query('SELECT * FROM pantalons');
$query->setFetchMode(PDO::FETCH_CLASS, 'Pantalons', array('prix_pantalons', 'stock_pantalons', 'nom_pantalons', 'taille_pantalons'));
$pantalons = $query->fetchAll();

foreach ($pantalons as $pantalon) {
    echo "<b>$pantalon->nom_pantalons : </b>";
    echo "$pantalon->prix_pantalons" . " euros - ";
    echo "$pantalon->stock_pantalons" . " exemplaires de taille ";
    echo "$pantalon->taille_pantalons" . ".<br>";
}
echo "<br><br>";

$sweat = new Vetements("20 euros", "50 exemplaires");
$basket = new Chaussures("30 euros", "10 paires", "Bottes", 40);
$jean = new Pantalons("25 euros", "15 exemplaires", "Jean noir", 38);
echo "Sweat coton : " . $sweat->prix . " - " . $sweat->disponibilite . ".<br>";
echo $basket->nom . " : " . $basket->prix . " - " . $basket->disponibilite . " en pointure " . $basket->pointure . ".<br>";
echo $jean->nom . " : " . $jean->prix . " - " . $jean->disponibilite . " de taille " . $jean->taille . ".<br>"; ?>