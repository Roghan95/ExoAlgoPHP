<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge</p>

<h2>Résultat</h2>

<?php

$age = 10; // Age de l'enfant
$categorie = getCategorieEnfant($age); // Appelle la fonction getCategorieEnfant avec l'âge de l'enfant comme argument
function getCategorieEnfant($age)
{
    if ($age >= 6 && $age <= 7) { // Vérifie si l'âge est compris entre 6 et 7 ans
        return "Poussin";
    } elseif ($age >= 8 && $age <= 9) { // Vérifie si l'âge est compris entre 8 et 9 ans
        return "Pupille";
    } elseif ($age >= 10 && $age <= 11) { // Vérifie si l'âge est compris entre 10 et 11 ans
        return "Minime";
    } elseif ($age >= 12) { // Vérifie si l'âge est supérieur ou égal à 12 ans
        return "Cadet";
    } else {
        return "La catégorie de cet âge n'est pas gérée."; // Retourne un message si l'âge ne correspond à aucune catégorie gérée
    }
}
echo "L'enfant qui a $age ans appartient à la catégorie \"$categorie\"."; // Affiche le résultat
