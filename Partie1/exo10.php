<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
    affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
    1 €.
</p>

<h2>Résultat</h2>

<?php

$verse = 200;
$payer = 152;

$aPayer = $verse - $payer;

$billets10 = (int) ($aPayer / 10); // Nombre de billets de 10 €
$aPayer = $aPayer % 10; // Met à jour le reste à payer

$billets5 = (int) ($aPayer / 5); // Nombre de billets de 5 €
$aPayer = $aPayer % 5; // Met à jour le reste à payer

$pieces2 = (int) ($aPayer / 2); // Nombre de pièces de 2 €
$aPayer = $aPayer % 2; // Met à jour le reste à payer

$pieces1 = $aPayer;

$aPayer = $verse - $payer;

echo "Montant à payer : " . $payer . " € <br>";
echo "Montant versé : " . $verse . " € <br>";
echo "Reste à payer : " . $aPayer . " € <br>";
echo "********************************** <br>";
echo "$billets10 billets de 10 € - $billets5 billets de 5 € - $pieces2 pièces de 2 € - $pieces1 pièces de 1 € <br>";