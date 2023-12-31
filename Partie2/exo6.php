<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
    de valeurs.
    Exemple :
    $elements = array("Monsieur","Madame","Mademoiselle");
    alimenterListeDeroulante($elements);
</p>

<h2>Résultat</h2>

<?php

$elements = array("Monsieur", "Madame", "Mademoiselle");
function alimenterListeDeroulante($elements)
{
    echo '<select>';
    foreach ($elements as $element) {
        echo '<option value="' . $element . '">' . $element . '</option>';
    }
    echo '</select>';
}
alimenterListeDeroulante($elements);