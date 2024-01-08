<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p>

<p>Affichage :
Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9
Sa moyenne générale est donc de : 11.22</p>

<h2>Résultat</h2>

<?php

// créér le tableau de notes
$tableauNotes = [10, 12, 8, 19, 3, 16, 11, 13, 9];

// afficher le texte !! avant le foreach car sinon se répète !!
echo "Les notes obtenues par l'élève sont : ";

echo implode(" ",$tableauNotes);

// afficher les valeurs du tableau à la suite
// foreach ($tableauNotes as $note) {
//     echo $note." ";
// }

//calculer et afficher la moyenne

// compter le nombre de notes du tableau
$nbNotes = count($tableauNotes);

// calculer la somme des notes
$sommeNotes = array_sum($tableauNotes);

// calculer la moyenne + arrondir
$moyenne = round($sommeNotes / $nbNotes, 2);

// afficher la moyenne
echo "<br>Sa moyenne générale est donc de : ".$moyenne;