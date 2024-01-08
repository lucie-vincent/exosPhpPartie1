<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme :
Affichage (pour la table de 8) :
Table de 8 :
1 x 8 = 8
2 x 8 = 16
3 x 8 = 24 …</p>

<h2>Résultat</h2>

<?php

// ---------------------FOR---------------------------

$nombre = 8;

echo "Table de ".$nombre." :<br>";

for($i = 1; $i <= 10; $i++) {
    $multiplication = $i * $nombre;
    echo $i." x ".$nombre." = ".$multiplication."<br>";
}
echo "---------------<br>";

// ---------------------WHILE---------------------------

echo "Table de ".$nombre." :<br>";
$i = 1;
while($i <= 10) {
    $multiplication = $i * $nombre;
    echo $i." x ".$nombre." = ".$multiplication."<br>";
    $i++;
}