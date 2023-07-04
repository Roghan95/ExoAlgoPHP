<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
    Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

$montantFrancs = 100; // Montant en francs à convertir
$tauxDeChange = 0.1524; // Taux de change Franc - Euro

$montantEuros = $montantFrancs * $tauxDeChange;

echo "Montant en francs : " . $montantFrancs . "<br>";
echo $montantFrancs . " francs = " . number_format($montantEuros, 2) . " €";