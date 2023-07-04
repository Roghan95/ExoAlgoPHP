<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
    le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
    nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
    On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
</p>

<h2>Résultat</h2>

<?php
function afficherTableHTML($capitales)
{
    // Tri du tableau par ordre alphabétique des valeurs (les capitales)
    asort($capitales);

    // Début de la table HTM
    echo '<table style="border-collapse: collapse">';
    echo '<tr style="border-collapse: collapse"><th>Pays</th><th>Capitale</th><th>Wikipédia</th></tr>';

    // Parcours du tableau pour afficher chaque ligne du tableau HTML
    foreach ($capitales as $pays => $capitale) {
        echo '<tr style="border: 1px solid">';
        echo '<td style="border: 1px solid">' . strtoupper($pays) . '</td>';
        echo '<td style="border: 1px solid">' . $capitale . '</td>';
        echo '<td style="border: 1px solid"><a href="https://fr.wikipedia.org/wiki/' . $capitale . '" target="_blank">Lien</a></td>';
        echo '</tr>';
    }

    // Fin de la table HTML
    echo '</table>';
}

$capitales = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
);

afficherTableHTML($capitales);