<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
</p>

<h2>Résultat</h2>

<?php

class Personne
{
    public $nom;
    public $prenom;
    public $dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function getAge()
    {
        $dateNaissance = new DateTime($this->dateNaissance);
        $aujourdHui = new DateTime();
        $difference = $dateNaissance->diff($aujourdHui);
        return $difference->y;
    }

    public function displayInfos()
    {
        echo $this->prenom . ' ' . $this->nom . ' a ' . $this->getAge() . ' ans.' . PHP_EOL;
    }
}

$sp1 = new Personne("DUPONT", "Michel", "1980-02-19");
$sp2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

$sp1->displayInfos();
$sp2->displayInfos();