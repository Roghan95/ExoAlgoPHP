<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
    dans le tableau associatif si la case est cochée ou non.
    Exemple :
    genererCheckbox($elements);
    //où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p>

<h2>Résultat</h2>

<?php

function genererCheckbox($elements)
{
    foreach ($elements as $key => $valeur) {
        $coche = ($valeur) ? 'checked' : '';
        echo '<input type="checkbox" name="' . $key . '" ' . $coche . '>';
        echo '<label for="' . $key . '">' . $key . '</label><br>';
    }
}

$elements = array(
    "Choix 1" => true,
    "Choix 2" => false,
    "Choix 3" => true
);

genererCheckbox($elements);