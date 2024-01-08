<h1>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
contenus dans celle-ci.</p>

<h2>Résultat</h2>

<?php

$phrase = " Notre formation DL commence aujourd'hui ";

//-------- utiliser une variable tampon pour compter le nbre de mots -----------

$nbMots = str_word_count($phrase);

echo "La phrase « $phrase » contient $nbMots mots."; 


//------- compter le nbre de mots et afficher le résultat en même temps ----------

echo "La phrase « $phrase » contient ".str_word_count($phrase)." mots.";


// https://www.php.net/manual/fr/ref.strings.php
// liste les fonctions en lien avec les chaines de caractère