<h1>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>

<h2>Résultat</h2>

<?php 

// Permet de compter le nombre de mots contenu dans la phrase suivante : "Notre formation DL commence aujourd'hui" 

$str="Notre formation DL commence aujourd'hui";
$length = str_word_count($str);

echo 'La phrase « '.$str.' » contient '.$length.' caractères.';