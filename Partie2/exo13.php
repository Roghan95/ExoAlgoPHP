<h1>Exercice 13</h1>
<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
    vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
    des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
    instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d'un
    véhicule.
    v1 ➔ "Peugeot","408",5
    v2 ➔ "Citroën","C4",3
    Coder l'ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
    tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
    suivants :
</p>
<h2>Résultat</h2>

<?php
class Voiture
{
    private string $_marque;
    private string $_modele;
    private int $_nbportes;
    private int $_vitesseActuelle = 0;
    private bool $_etat = false; //si la voiture est demarrer ou pas

    //contructer de la classe Voiture
    public function __construct(string $marque, string $modele, int $nbportes)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbportes = $nbportes;
    }

    //getters et setters des elements de la classe
    public function getMarque()
    {
        return $this->_marque;
    }

    public function setMarque(string $marque)
    {
        $this->_marque = $marque;
    }

    public function getModele()
    {
        return $this->_modele;
    }

    public function setModele(string $modele)
    {
        $this->_modele = $modele;
    }

    public function getNbportes()
    {
        return $this->_nbportes;
    }

    public function setNbportes(int $nbportes)
    {
        $this->_nbportes = $nbportes;
    }

    public function getVitesseActuelle()
    {
        return $this->_vitesseActuelle;
    }

    public function setVitesseActuelle(int $vitesseActuelle)
    {
        $this->_vitesseActuelle = $vitesseActuelle;
    }

    public function getEtat()
    {
        return $this->_etat;
    }

    public function setEtat(bool $etat)
    {
        $this->_etat = $etat;
    }

    //affiche que le vehicule a demarrer
    public function Demarrer()
    {
        $this->_etat = true;
        echo "<br>" . "<br>" . "La vehicule $this->_marque $this->_modele démarre";
    }

    //affiche que le vehicule s'est stopper et remet sa vitesse a 0
    public function stopper()
    {
        $this->_etat = false;
        $this->_vitesseActuelle = 0;
        echo "<br>" . "<br>" . "Le vehicule $this->_marque $this->_modele est stoppé";
    }

    //ajoute la valeur donné a la vitesse du vehicule, si le vehicule est a l'arret demande a l'utilisateur de le demarrer avant 
    public function accelerer(int $accel)
    {
        if ($this->_etat == true) {
            $this->_vitesseActuelle += $accel;
            echo "<br>" . "<br>" . "Le vehicule $this->_marque $this->_modele accélère de $accel km / h";
        } else {
            echo "<br>" . "<br>" . "Le vehicule $this->_marque $this->_modele veux accélérer de $accel km / h" . "<br>" . "<br>" . "pour accélerer, il faut démarrer le vehicule $this->_marque $this->_modele !";
        }
    }

    //donne la vitesse du vehicule
    function vitesse()
    {
        echo "<br>" . "<br>" . "La vitesse du véhicule $this->_marque $this->_modele est de : $this->_vitesseActuelle km / h";
    }

    //diminue la vitesse selon la valeur donner, previent l'utilisateur si la valeur donner est superieur a la vitesse actuelle
    function ralentir(int $decel)
    {
        if ($this->_etat == true && $this->_vitesseActuelle >= $decel) {
            $this->_vitesseActuelle -= $decel;
            echo "<br>" . "<br>" . "Le vehicule $this->_marque $this->_modele ralenti de $decel km / h";
        } else {
            echo "<br>" . "<br>" . "Le vehicule $this->_marque $this->_modele veux ralentir de $decel" . "<br>" . "<br>" . "Cependant la vitesse est deja de $this->_vitesseActuelle km / h !";
        }
    }

    //affiche les informations des vehicules
    function info()
    {
        echo "<br>" . "<br>" . "Info vehicule" . "<br>" . "****************************" . "<br>" . "Nom et modèle du vehicule : $this->_marque $this->_modele" . "<br>" . "Nombre de portes : $this->_nbportes"
            . "<br>" . "Le véhicule $this->_marque est";
        if ($this->_etat == true) {
            echo " démarrer";
        } else {
            echo " a l'arret";
        }
        echo "<br>" . "Sa vitesse actuelle est de : $this->_vitesseActuelle km / h";
    }
}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);
$v1->Demarrer();
$v1->accelerer(50);
$v2->Demarrer();
$v2->stopper();
$v2->accelerer(20);
$v1->vitesse();
$v2->vitesse();
$v1->info();
$v2->info();