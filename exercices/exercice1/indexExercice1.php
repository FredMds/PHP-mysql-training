<?php

echo 'Hello, voilà le 1er exercice php : Les Tableaux<br><br>';

$tableau = array(
    'prenom'      => 'Jack',
    'nom'         => 'Smith',
    'age'         => 15
);

$nouvelAge = $tableau['age'] + 50;

  echo 'bonjour '.$tableau['prenom']." ".$tableau['nom']." ";
  echo 'dans 50 ans vous aurez ' .$nouvelAge." ans !!!";




 ?>
