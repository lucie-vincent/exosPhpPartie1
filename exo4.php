<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.
« Engage le jeu que je le gagne »</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu quepp jej le gagne";




// ========================================================
// =================== fonctionne =========================
// ========================================================

// mettre en minuscule
$phraseLowered = strtolower($phrase);
echo $phraseLowered."<br>";

// enlever les espaces
$phraseSansEspace = str_ireplace(" ","", $phraseLowered);
echo $phraseSansEspace."<br>";

// inverser
$phraseReversed = strrev($phraseSansEspace);
echo $phraseReversed."<br>";

// comparer et afficher 
if($phraseSansEspace == $phraseReversed) {
    echo "La phrase « $phrase » est un palindrome";
} else {
    echo "La phrase « $phrase » n'est pas un palindrome";
}


// ========================================================
// ======= fonctionne mais affiche mauvaise phrase=========
// ========================================================

// // mettre en minuscule
// $phrase = strtolower($phrase);
// echo $phrase."<br>";

// // enlever les espaces
// $phrase = str_ireplace(" ","", $phrase);
// echo $phrase."<br>";

// // inverser
// $phrase2 = strrev($phrase);
// echo $phrase2."<br>";

// // comparer et afficher 
// if($phrase == $phrase2) {
//     echo "La phrase \" $phrase \" est un palindrome";
// } else {
//     echo "La phrase \" $phrase \" n'est pas un palindrome";
// }

// ========================================================
// ======= minuscule + espaces + reversed en 1 fois =======
// ========================================================

$phraseReversed = strrev(str_ireplace(" ","", strtolower($phrase)));