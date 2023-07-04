<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la
    forme :</p>

<h2>Résultat</h2>

<?php


function tableMultiplication($nombre)
{
    echo "Table de " . $nombre . " :<br>";
    for ($i = 1; $i <= 10; $i++) {
        $resultat = $i * $nombre;
        echo $i . " x " . $nombre . " = " . $resultat . "<br>";
    }
}

// Appel de la fonction pour afficher la table de multiplication du nombre 8
tableMultiplication(8);