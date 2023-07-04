<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
    valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
    Exemple :
    afficherRadio($nomsRadio);

</p>

<h2>Résultat</h2>

<?php


$nomsRadio = array("Monsieur", "Madame", "Mademoiselle");
function afficherRadio($nomsRadio)
{
    foreach ($nomsRadio as $nom) {
        echo '<input type="radio" name="radio" value="' . $nom . '">' . $nom . '<br>';
    }
}
afficherRadio($nomsRadio);