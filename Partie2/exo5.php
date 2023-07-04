<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
    précisant le nom des champs associés. <br>
    Exemple :
    $nomsInput = array("Nom","Prénom","Ville");
    afficherInput($nomsInput);
</p>

<h2>Résultat</h2>

<?php
function afficherInput($nomsInput)
{
    echo '<div  style="display: flex; background-color: gray; flex-direction: column; width: 200px; color: #e6dfdf; height: 200px; justify-content: center; padding: 0 20px 0 20px;>';
    echo '<form">';

    foreach ($nomsInput as $nom) {
        echo '<label for="' . $nom . '">' . $nom . ':</label>';
        echo '<input type="text" id="' . $nom . '" name="' . $nom . '" style="padding: 5px;"><br>';
    }

    echo '</form>';
    echo '</div>';
}

// Noms des champs de texte
$nomsInput = array("Nom", "Prénom", "Ville");

// Appel de la fonction pour afficher le formulaire
afficherInput($nomsInput);