
<?php
// commentaire uniligne
/* Commentaire multi mutiligne
un autre commentaire avec de fermer le multiligne
*/
  echo "Hello World<br>";

// LES VARIABLES
  $age_du_lyceen = 16; //c'est un entier (INT), pour un chiffre pas besoin de guillements

  echo $age_du_lyceen;





    //afficher les guilllemets dans chaine de caracteres. S'il y a des guillements dans la chaine, utiliser \

      $guillemets = '"j\'aime les guillemets<br>"';
      echo $guillemets;
      $pasDeGuillemets = 'je n\'aime pas les guillemets<br>';
      echo $pasDeGuillemets;

    //booleens
      $est_majeur = true;
      $estMineure = false;

// CONVENTION INTERNATIONALE. On utilise le camel case

// CONCATENATION DE variables

  $direBonjour = "Hello";
  $pays = "World";

  echo $direBonjour.' '.$pays.', Tu vas bien ?<br>';

// OPERATEURS MATHEMATIQUES

    multiplier => *
    addition => +
    soustraire => -
    diviser => /


    //Methode simple
    $premierNombre = 5;
    $deuxiemeNombre = 12;
    echo $premierNombre + $deuxiemeNombre;

    //Methode plus complexe
    $autreOperation = 5*5;
    echo $autreOperation;

    //Encore plus complexe
    $encorePlusComplexe = (5*5)+10*(1+1);
    echo $encorePlusComplexe;

    //Ou de cette manière
    $megaComplexe = 10;
    $megaComplexe = $megaComplexe - 5;
    // peut s'ecrire aussi comme ça => $megaComplexe -= 5;

    echo $megaComplexe;

// LES TABLEAUX
  //utiliser la fonction array. Il faut séparer les valeurs de chaque clé par une virgule. La dernière valeur n'aura pas de virgule
  $tableau = array(
      'id'          => 4,
      'prenom'      => 'John',
      'nom'         => 'Doe',
      'age'         => 15
  );


    echo $tableau['prenom'].' & '.$tableau['age'];
    echo $direBonjour .' '. $tableau['prenom'];

// un tableau simplifié" commence par 0 puis 1, 2, 3

    $tableauSimplifie = array(4, 'John', 'Doe', 15);
    echo $direBonjour." ".$tableauSimplifie[1]." ".$tableauSimplifie[2];

//LES CONDITIONS

  $age = 18;

    if ($age==18) {
      echo "Vous êtes tout juste majeur<br>";
    }
    if ($age>18) {
      echo "Vous êtes un grand<br>";
    }
    else {
      echo "Vous êtes mineur<br>";
    };
    // ne pas utiliser = mais == si on veut comparer la valeurs

// LES OPERATEURS
/*  == =>  est égal
    >  =>  est superieur
    < =>   est inferieur
    <= =>  est inferieur ou Egal
    >= =>  est superieur ou egal
    != =>  est different de
*/

// LES CONDITIONS MULTIPLES
/* On peut utiliser AND ou &&
    Si on ne souhaite qu'un seule des conditions, on utilise OR ou ||
*/

  $pseudo = "titi";
  $mdp    = "tata";

  if ($pseudo == "toto" AND $mdp == "tata") {
    echo "Mot de passe valide !<br>";
  }

// CONDITIONS TERNAIRES
$number = 1;
echo ($number % 10 == 0) ? "true" : "false";


// EXERCICE MOT DE PASSE INVALIDE

$pseudo = "John";
$mdp    = "Doe";

  if ($pseudo == "John" AND $mdp == "Doe") {
    echo "Mot de passe valide !<br>";
  }

  else {
    echo "Mot de passe invalide !!!<br>";
  }

// IF ELSE IF else
//Utiliser else if pour rajouter une condition


  $monAge = 17;
  if ($monAge > 18) {
    echo "Vous êtes majeur";
  } else if ($monAge ==18) {
    echo "Pile poil dans l'âge";
  } else {
    echo "Vous êtes mineur";
  }


// LES SWITCHS, un autre type de conditions pour tester les égalités

// $noteExam = 15;
//   switch ($noteExam) {
//     case '20':
//       echo "Parfait, tu as eu 20";
//       break;
//     case '19':
//       echo "Excellent, tu as eu 19";
//       break;
//     default:
//       echo "C'est une note moyenne<br>";
//       break;
//   }

//CONDTIONS SIMPLES. On peut retirer les accolades

$sexe = "Garçon";
  if ($sexe == "Garçon")
    echo "tu es un garçon<br>";
  else
    echo "tu es une fille<br>";

// LES BOUCLES WHILE FOR FOREACH DO WHILE
  // WHILE

$ligne = 0;

  while ($ligne <= 10) {
    echo "c'est la ligne ".($ligne+1).", oh yeah<br>";
    $ligne += 1; //fonctionne aussi comme ça : $ligne ++;
  }

  // Boucle FOR. La variable est dans la fonction !!!
  // ON utilise FOR quand on sait combien de fois on veut faire tourner la boucle. Sinon on utilise WHILE


  for ($ligneFor=0; $ligneFor < 10; $ligneFor++) {
    echo "voilà le numero de ligne " .($ligneFor+1). " Badaboum <br/>";
  }

  // Boucle FOREACH. Utile pour les tableaux

$userForEach = array('Pierre', 'Paul', 'Jack', 'Michel', 'Fred');
  for ($i = 0; $i < 5; $i++) {
    echo "Voilà le prenom ". $userForEach[$i] ."<br/>";
  }
  // while ($userForEach < 10) {
  //   echo "Voici le prenom :" .$userForEach. "<br/>";
  // }

  foreach ($userForEach as $prenomTab) {
    echo "Encore le prenom ". $prenomTab."<br/>";
  }

  $Fred = array(
    'prenom' => 'Fred',
    'Nom' => 'Mendes',
    'age' => '40'
  );

    foreach ($Fred as $tableauFred) {
      echo "données du tableau : ". $tableauFred ."<br/>";
    }


    // BOUCLE DO WHILE. Moins utilisée que les autres
  $boucleDoWhile = 12;

  do {
    echo 'Nombre est égal à : '.$boucleDoWhile.'<br/>';
    $boucleDoWhile++;
  } while ($boucleDoWhile < 10);


  // BOUCLES IMBRIQUEES

  for ($i=0; $i < 5 ; $i++) {
      for ($j=0; $j <= 5 ; $j++) {
        echo $i*$j;
      };
      echo "<br/>";
  }

// Les FONCTIONS
//Pour éviter de réécrire du code à chaque fois qu'on a besoin d'un algorythme


  function Bonjour() {
    echo "Bonjour, comment allez-vous ? </br>";
  }

  Bonjour();
  Bonjour();
  Bonjour();
  Bonjour();

  function BonjourNom($prenom, $nom) {
      echo "Salut " .$prenom. " " .$nom. "</br>";
  }

  BonjourNom("Pierre", "Perret");
// Dans cet exemple la fonction BonjourNom attend 2 arguments. Il faut absolument appeler les 2 sinon le code plante

// Fonction qui retourne une valeur. Utiliser return

  function Formule($x, $y) {
    $temp = $x + $y;
    $temp = $temp * $y;

    return $temp;
  }

  $resultat = Formule (5, 10);

  echo $resultat. "</br>";

// Exercice sur les FONCTIONS. Calcul des racines d'une equation du second degré

  function racines($a, $b, $c){

    if ($a==0){
      echo "Cette équation est invalide ! </br>";
      exit;
    }
    // DELTA
    $delta = $b*$b - (4*$a*$c);

    if ($delta < 0){
      echo "il n'y a pas de solution à cette équation ! </br>";
    }
    else if ($delta == 0){
      $result = -$b/(2*$a);
      echo "il y a une solution : " .$result. "</br>";
    }
    else if ($delta > 0){
      $racineA = (-$b - sqrt($delta))/(2*$a);
      $racineB = (-$b + sqrt($delta))/(2*$a);

      echo "Il y a deux solutions, x1 = " .$racineA. " et x2= " .$racineB. "</br>";
    }
  };

    racines (6, 7, 1);

// FONCTIONS NATIVES DE PHP POUR LES STRINGS

    $string = "Salut et bienvenu sur cette section";
    // STRLEN
    echo "nombre de caractères : " .strlen($string). "</br>";

    // STR_REPLACE
    echo "on change la phrase : " .STR_REPLACE('Salut', 'Hello', $string). "</br>";

    // STRTOLOWER
    echo "en minuscule : " .STRTOLOWER($string). "</br>";

    // STRTOUPPER
    echo "en majuscule : " .STRTOUPPER($string). "</br>";

    // SUBSTR
    echo SUBSTR($string, 0, 5). "</br>";

// FONCTIONS NATIVES DE PHP POUR LES CALCULS

    //ABS, valeur absolue
    echo abs(-5)."</br>";

    // max et min
    echo max(4, 7, 8, 20, 15)."</br>";
    echo min(4, 7, 8, 20, 15)."</br>";

    // rand pour du random. Laisser vide pour avoir un nombre au hasard
    echo rand()."</br>";

    // round. Pour arrondir
    echo round(14.15986523, 2). "</br>";

// FONCTIONS NATIVES DE PHP POUR LES TABLEAUX
  // array_flip
    $tableau = array("Pierre", "Paul", "Jacques");
    $tableauDeux = array_flip($tableau); //on créé un 2eme tableau qui renverse les données
    echo $tableauDeux["Pierre"]."</br>";

    // array_key_exists
    if(array_key_exists(1, $tableau)){
      echo "Cet indice existe"."</br>";
    }
    else {
      echo "Cet indice n'existe pas"."</br>";
    }

    // Count
    echo count($tableau);

    // sort
    sort($tableau);
    foreach($tableau as $nom) {
      echo $nom."</br>";
    }

// FONCTION INCLUDE. Permet de recuperer des blocs de texte (header par exemple) et de les appeler n'importe où :
/*
    <?php include (adresse du fichier) ?> affiche la page, que le fichier existe ou non
    <?php require (adresse du fichier) ?> permet de ne pas afficher le reste de la page si ce bloc manque ou est en anomalie
    <?php require_once ou include_once (adresse du fichier) ?> permet de n'afficher le fichier qu'une seule fois
*/



?>
