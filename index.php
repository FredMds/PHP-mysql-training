
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

// OPERATEURS MATHEMATQUES
  /*
    multiplier => *
    addition => +
    soustraire => -
    diviser => /
  */

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
      echo "Vous êtes tout juste majeur";
    }
    if ($age>18) {
      echo "Vous êtes un grand";
    }
    else {
      echo "Vous êtes mineur";
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

  $pseudo = "toto";
  $mdp    = "tata";

  if (condition) {
    echo "Mot de passe valide !"
  }

?>
