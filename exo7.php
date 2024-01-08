<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge</p>

<p>
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.
</p>

<h2>Résultat</h2>

<?php

$age = 12;

if ($age <= 5) {
    echo "Si la catégorie n'est pas gérée, merci de le préciser.";
} elseif ($age <=7) {
    echo "L'enfant qui a ".$age." ans appartient à la catégorie \" Pupille \" . ";
} elseif($age <= 9) {
    echo "L'enfant qui a ".$age." ans appartient à la catégorie \" Minime \" . ";
} elseif($age >= 11) {
    echo "L'enfant qui a ".$age." ans appartient à la catégorie \" Cadet \" . ";
}elseif ($age <= 12) {
    echo "L'enfant qui a ".$age." ans appartient à la catégorie \" Poussin \" . ";
}

