<h1>Exercice 2</h1>

<p>Soit le tableau suivant :
    $capitales = array
    ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
    Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
    s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
    une fonction personnalisée.
    Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);

</p>

<h2>Résultat</h2>

<?php

function afficherTableHTML($capitales)
{
    ksort($capitales);

    echo '<table style="border-collapse: collapse">';
    echo '<tr><th>Pays</th><th>Capitale</th></tr>';

    foreach ($capitales as $pays => $capitale) {
        echo "<tr>";
        echo '<td style="border: 1px solid">' . strtoupper($pays) . "</td>";
        echo '<td style="border: 1px solid">' . $capitale . '</td>';
        echo '</tr>';
    }
}

$capitales = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
);

afficherTableHTML($capitales);