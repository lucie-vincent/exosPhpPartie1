<h1>Exercice 9</h1>

<p>
Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>

<p>
Affichage :
Age : 32
Sexe : F
La personne est imposable.
</p>

<h2>Résultat</h2>

<?php

$age = 17;
$sexe = "F";

// afficher l'age et le sexe
echo "Age : ".$age."<br>";
echo "Sexe : ".$sexe."<br>";

$condition1 = $sexe == "F" && $age >= 18 && $age <= 35;
$condition2 = $sexe == "H" && $age > 20;

// if
if($condition1 || $condition2) {
    echo "La personne est imposable";
} else {
    echo "La personne est non imposable";
}


// ternaire
echo ($condition1 || $condition2) ? "imposable" : "non imposable";