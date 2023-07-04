<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
    coefficient). Elle devra être affichée avec 2 décimales.
</p>

<h2>Résultat</h2>

<?php

$notes = array(10, 12, 8, 19, 3, 16, 11, 13, 9);
$somme = 0;

foreach ($notes as $note) {
    $somme += $note;
}

$nombreNotes = count($notes);
$moyenne = $somme / $nombreNotes;

echo "Les notes obtenues par l'élève sont : " . implode(" ", $notes) . "<br>";
echo "Sa moyenne générale est donc de : " . number_format($moyenne, 2);