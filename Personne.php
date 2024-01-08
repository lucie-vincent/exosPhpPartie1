<?php

// classe Personne = décrit l'objet
class Personne {

    // atttributs - propriétés - variables
    // private : uniquement accessible depuis la classe
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;

    // constructeur : 1 méthode magique parmi d'autres
    // permet d'instancier 
    public function __construct(string $nom, string $prenom, string $dateNaissance) { // !! date est string à l'entrée mais devient DateTime à la sortie!!
        // $this fait référence à l'objet de la classe
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($dateNaissance); // ici on converti la string en DateTime (avec le new DateTime.)
                                                              // si on part d'une DateTime plus haut, on convertirait une DateTime en DateTime à nouveau et ça marcherait pas
    }

    // accesseur - getter
    // permet de récupérer l'attribut / propriété
    // on en crée 1 par propriété
    public function getNom() : string {
        return $this->_nom;
    }
    // mutateur - setter
    // permet de modifier l'attribut / propriété 
    // on en crée 1 par propriété
    public function setNom(string $nom) {
        $this->_nom = $nom;
    }

    public function getPrenom() : string {
        return $this->_prenom;
    }
    public function setPrenom(string $prenom) {
        $this->_prenom = $prenom;
    }

    public function getDateNaissance() : DateTime {
        return $this->_dateNaissance;
    }
    public function setDateNaissance(DateTime $dateNaissance) {
        $this->_dateNaissance = $dateNaissance;
    }

    public function calculAge(){
        $dateCourante = new DateTime(); 
        $interval = date_diff($this->_dateNaissance, $dateCourante); //interval = un objet DateInterval qui donne pleins d'infos. On peut choisir d'afficher uniquement années
        return $interval->format("%y ans.");
    }

    public function __tostring(){
        return "$this->_prenom $this->_nom a ".$this->calculAge()."<br>";
    }

}
