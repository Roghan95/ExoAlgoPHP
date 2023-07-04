<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
    chaîne de caractère représentant une date.
    Exemple :
    formaterDateFr("2018-02-23");
</p>

<h2>Résultat</h2>

<?php

function formaterDateFr($date_str)
{
    $date = date_create($date_str);

    $mois_fr = array(
        'janvier',
        'février',
        'mars',
        'avril',
        'mai',
        'juin',
        'juillet',
        'août',
        'septembre',
        'octobre',
        'novembre',
        'décembre'
    );

    $jour = date_format($date, 'd');
    $mois = date_format($date, 'n');
    $annee = date_format($date, 'Y');

    $date_en_lettres = $jour . ' ' . $mois_fr[$mois - 1] . ' ' . $annee;

    return $date_en_lettres;
}

$date_fr = formaterDateFr("2018-02-23");
echo $date_fr;