<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>

<h2>Résultat</h2>

<?php

// ===========================================================================
// ======================= fonctionnement str_ireplace =======================
// ===========================================================================

// // Phrase à travailler
// $phrase = "Notre formation DL commence aujourd'hui";

// // Mot à remplacer
// $mot1 = "aujourd'hui";

// // Remplacé par
// $mot2 = "demain";

// // str_ireplace()
// // par rapport à str_replace, ireplace ne prend pas en compte la casse 
// // (les 2 fonctionnent ici)
// $phrase = str_ireplace($mot1, $mot2, $phrase);

// // Printing the result
// echo $phrase;

// ===========================================================================
// ======================= fonctionne str_ireplace =======================
// ===========================================================================

// $phrase = "Notre formation DL commence aujourd'hui.";
// $phrase = str_ireplace("aujourd'hui", "demain", $phrase);
// echo $phrase."<br>";

// ===========================================================================
// ======================== afficher les 2 phrases ===========================
// ===========================================================================

$phrase = "Notre formation DL commence aujourd'hui.";
echo $phrase."<br>";
$phrase = str_ireplace("aujourd'hui", "demain", $phrase);
echo $phrase;

