<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
    (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
    respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
    Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
</p>

<h2>Résultat</h2>

<?php
function direBonjour($personnes)
{
    $langues = array(
        "FRA" => "Salut",
        "ENG" => "Hello",
        "ESP" => "Hola"
    );

    foreach ($personnes as $prenom => $langue) {
        if (isset($langues[$langue])) {
            echo $langues[$langue] . " " . $prenom . "<br>";
        } else {
            echo "Langue inconnue pour " . $prenom . "<br>";
        }
    }
}

// Tableau de prénoms et de langues associées
$personnes = array(
    "Mickaël" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
);

// Appel de la fonction pour dire bonjour aux personnes
direBonjour($personnes);