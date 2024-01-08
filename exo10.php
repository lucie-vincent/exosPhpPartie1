<h1>Exercice 10</h1>

<p>
A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.
</p>

<h2>Résultat</h2>

<?php

$montant_a_payer = 152;
$montant_versé = 200;
$trop_percu = $montant_versé - $montant_a_payer;

echo "Montant à payer : ".$montant_a_payer." €<br>";
echo "Montant versé  : ".$montant_versé." €<br>";
echo "Reste à payer  : ".$trop_percu." €<br>";
echo "***************************************************<br>";
echo "Rendu de monnaie :<br>";


$billets10 = intdiv($trop_percu, 10);
echo $billets10." billets de 10 € - ";
$trop_percu = $trop_percu - $billets10 * 10;
$billets5 = intdiv($trop_percu, 5);
echo $billets5." billet de 5 € - ";
$trop_percu = $trop_percu - $billets5 * 5;
$pieces2 = intdiv($trop_percu, 2);
echo $pieces2." pièce de 2 € - ";
$trop_percu = $trop_percu - $pieces2 * 2;
$pieces1 = intdiv($trop_percu, 1);
echo $pieces1." pièce de 1 € ";



// =============================================
// =============méthode boucle==================

// $billets10 = 0;
// while($trop_percu > 10) {
//     $billets10++;
//     $trop_percu = $trop_percu - 10;
// }
// echo $billets10;