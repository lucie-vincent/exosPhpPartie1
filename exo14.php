<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<p>Affichage si la date courante est le 21/05/2018 et la date de naissance le 17/01/1985 :
Age de la personne : 33 ans 4 mois 4 jours</p>

<h2>Résultat</h2>

<?php

// echo date("d/m/Y")."<br>";

// $dateCourante = date_create("2018-05-21");
// $dateNaissance = date_create("1985-01-17");

$dateCourante = new DateTime();
$dateNaissance = new DateTime("1985-01-17"); // il faut bien respecter le format de date selon la norme ISO = année mois jour

$age = date_diff($dateCourante, $dateNaissance);
echo "Age de la personne : ".$age->format("%y ans %m mois %d jours");

var_dump($dateNaissance);
var_dump($age);
