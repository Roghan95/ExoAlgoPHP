<h1>Exercice 1</h1>

<p>Soit la phrase « Notre formation DL commence aujourd'hui ».
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase (espaces inclus).</p>

<h2>Résultat</h2>

<?php 

// Permet de compter le nombre de lettre dans la phrase suivante : "Notre formation DL commence aujourd'hui"

$str="Notre formation DL commence aujourd'hui";
$length = strlen($str);

echo 'La phrase « '.$str.' » contient '.$length.' caractères.';