<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Exercice 10</h1>
    <p>En utilisant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire
        complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe
        et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
        « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
        Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
        de validation (submit).</p>
    <h2>résultat</h2>
    <?php
    $nomsInput = array("Nom", "Prénom", "adresse email", "Ville");
    //crée des champs a remplire avec les elements de l'array a coté
    function afficherInput(array $nomsInput)
    {
        foreach ($nomsInput as $valeur) {
            echo "<br>" . $valeur;
            echo "<br>" . "<input type='text'></input>";
        }
    }
    afficherInput($nomsInput);
    $sexe = ["Monsieur", "Madame", "Mademoiselle"];
    //crée des boutons radio avec les elements de l'array a coté
    function afficherRadio($tab)
    {
        $x = 0;
        echo "<br>" . "<br>";
        foreach ($tab as $sexe) {
            echo '<input type="radio" name="radio' . $x . 'value=' . $sexe . '">
                <label for="radio' . $x . '">' . $sexe . '</label>' . '<br>';
            $x += 1;
        }
    }
    afficherRadio($sexe);
    $elements = array("Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet");
    //crée une liste deroulante avec les elements de l'array 
    function alimenterListeDeroulante($elements)
    {
        echo "<br>" . "<select>";
        foreach ($elements as $valeur) {
            echo "<option value='sexe'>$valeur</option>";
        }
        echo "</select>";
    }
    alimenterListeDeroulante($elements);
    //bouton submit
    echo "<br>" . "<br>" . "<button>Submit</button>"
        ?>
</body>

</html>