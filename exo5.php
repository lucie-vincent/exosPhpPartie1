<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$montantFrancs = 1000000000;

// faire la division et arrondirà 2 décimales
$montantEuros = round($montantFrancs / 6.55957, 2);

var_dump($montantEuros);

echo "Montant en francs : ".$montantFrancs."<br>";
echo $montantFrancs." francs = ".$montantEuros." €<br>";

$montantEuros2 = number_format($montantFrancs / 6.55957, 2, ",", " ");
echo $montantEuros2;
var_dump($montantEuros2);

// number_format permet d'arrondir et de choisir les séparateurs (espaces, virgules, points ...) 
// !! le résultat n'est plus un chiffre mais une string !! 