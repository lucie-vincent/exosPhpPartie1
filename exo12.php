<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur),
dire bonjour aux différentes personnes dans leur langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)</p>

<p>Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG Affichage :
Salut Mickaël
Hola Virgile
Hello Marie-Claire
</p>

<p>
Variante : trier d’abord le tableau par ordre alphabétique du prénom Affichage :
Hello Marie-Claire
Salut Mickaël
Hola Virgile</p>

<h2>Résultat</h2>

<?php

//=========================================
//============= 1ere partie ===============
//=========================================

echo "------------correction---------------<br>";

$tableauNomsLangues = [
    "Mickaël" => "FRA", 
    "Virgile" => "ESP", 
    "Marie-Claire" => "ENG",
    "Lucie" => "FRA"
];

$tableauSalutations = [
    "FRA" => "Salut",
    "ENG" => "Hello", 
    "ESP" => "Hola"
];

foreach($tableauNomsLangues as $prenom => $langue) {
    echo $tableauSalutations[$langue]." ".$prenom."<br>";
}

// permet de lister le tableau et afficher les bons résultats sans 
// avoir besoin de boucles


echo "------------tableau + if---------------<br>";

// parcourir et afficher le tableau en utilisant foreach
foreach ($tableauNomsLangues as $prenom => $langue) {
    
    if($langue == "FRA"){
        echo "Salut"." ".$prenom."<br>";
    }
    elseif ($langue == "ESP") {
        echo "Hola"." ".$prenom."<br>";
    }
    elseif ($langue == "ENG") {
        echo "Hello"." ".$prenom."<br>";
    }
}

//=========================================
// =========== Ordre alphabétique =========
//=========================================

echo "------------ordre alpha---------------<br>";

$tableauNomsLangues = array("Mickaël"=>"FRA", "Virgile"=>"ESP", "Marie-Claire"=>"ENG");

ksort($tableauNomsLangues); // ksort = trier sur la clé de A à Z (krsort = Key Reverse Sort)

foreach ($tableauNomsLangues as $prenom => $langue) {
    
    if($langue == "FRA"){
        echo "Salut"." ".$prenom."<br>";
    }
    elseif ($langue == "ESP") {
        echo "Hola"." ".$prenom."<br>";
    }
    elseif ($langue == "ENG") {
        echo "Hello"." ".$prenom."<br>";
    }
}

echo "----------switch--------------<br>";


//=========================================
// ============== switch ==================
//=========================================

$tableauNomsLangues = array("Mickaël"=>"FRA", "Virgile"=>"ESP", "Marie-Claire"=>"ENG");

foreach ($tableauNomsLangues as $prenom => $langue) {
    switch($langue){
        case 'FRA':
            echo "Salut"." ".$prenom."<br>";
            break;
        case 'ESP':
            echo "Hola"." ".$prenom."<br>";
            break;
        case 'ENG':
            echo "Hello"." ".$prenom."<br>";
            break;
    }
}