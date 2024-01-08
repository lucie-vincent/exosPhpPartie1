<h1>Exercice 11</h1>

<p>
Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau.
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
</p>
<p>
(attention à utiliser une liste à puces)
Il y a 4 marques de voitures dans le tableau :
-Peugeot
-Renault
-BMW
-Mercedes
</p>

<h2>Résultat</h2>

<?php
//créer le tableau
$tableauVoitures = ["Peugeot", "Renault", "BMW", "Mercedes"];

//compter et afficher le nombre d'items du tableau
echo "Il y a ".count($tableauVoitures). " marques de voitures dans le tableau :<br>";

// afficher le contenu par ligne
foreach ($tableauVoitures as $marque) {
    echo "- ".$marque."<br>";
}

// explication de foreach
// foreach ($variable as $key => $value) {
//     # code...
// }