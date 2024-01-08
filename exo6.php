<h1>Exercie 6</h1>

<p> Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<p>
Affichage :
Prix unitaire de l’article : 9.99 €
Quantité : 5
Taux de TVA : 0.2
Le montant de la facture à régler est de : 59.94 €
</p>

<h2> Résultat</h2>

<?php

$prixUnitaire = 9.99;
$quantité = 5;
$tauxTVA = 0.2;

$montantTTC = $quantité * $prixUnitaire * (1 + $tauxTVA);
// echo $montantTTC;

echo "Prix unitaire de l'article : " .$prixUnitaire." €"."<br>";
echo "Quantité : ".$quantité."<br>";
echo "Taux de TVA : ".$tauxTVA."<br>";
echo "Le montant de la facture à régler est de : ".$montantTTC. " €";
