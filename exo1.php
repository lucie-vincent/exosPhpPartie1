<h1>Exercice 1</h1>

<p>Soit la phrase « Notre formation DL commence aujourd'hui ».
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase
(espaces inclus).</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation Dl commence aujourd'hui";

$nbCaracteres = strlen($phrase);

echo "La phrase « $phrase » contient $nbCaracteres caractères."; // les guillements avec les codes numériques n'ont pas besoin d'être echappés

// ------- compter le nombre de caractère et afficher la phrase en même temps -------

// echo "La phrase \" $phrase \" contient ".strlen($phrase)." caractères";

?>


