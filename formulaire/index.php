<?php
// FORMULAIRES


  echo '<form method= "post" action="index.php">
    <p>
        <table>
            <tr>
                <td>Votre Prénom</td>
                  <td><input type= "text" name = Prénom> </td>
                <td>Votre Nom</td>
                  <td> <input type= "text" name = Nom> </td>
            </tr>
        </table>
            <button type= "submit"> Envoyer </button>
    <p>';

    if(isset($_POST["Prénom"]) && isset($_POST["Nom"]))

      {
        //PROTECTION DES DONNEES
        $prenom = htmlspecialchars($_POST["Prénom"]);
        $nom    = htmlspecialchars($_POST["Nom"]);
        echo "Bonjour ". $prenom;
      }



 ?>
