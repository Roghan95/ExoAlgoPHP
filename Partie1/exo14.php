<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
</p>

<h2>Résultat</h2>

<?php

$dateNaissance = "29-07-1997";
$aujourdhui = date("Y-m-d");

$diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
$age = $diff->format("%y");

echo "Age de la personne : " . $age . " ans " . $diff->format("%m mois %d jours");