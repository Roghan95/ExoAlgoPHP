<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php

function supprimerEspacesMajuscules($str)
{
    // Supprimer les espaces
    $str = str_replace(' ', '', $str);

    // Convertir en minuscules
    $str = strtolower($str);

    return $str;
}

$str = "Engage le jeu que je le gagne";
$inverse = strtolower(strrev(supprimerEspacesMajuscules($str)));

if (supprimerEspacesMajuscules($str) === $inverse) {
    echo $str . ' est un palindrome';
} else {
    echo $str . ' n\'est pas un palindrome';
}