<?php include ('include/connectBDD.php'); ?>


<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="UTF-8">
  <title>BDD ALLO_SIMPLON</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <div class="container">
    <form id="contact">
      <h3><center>affichage des éléments </center></h3>
        <table border="1">
          <tr>
            <td>ID_film</td>
            <td>Synopsis</td>
            <td>Durée</td>
            <td>Affiche</td>
            <td>Bande_Annonce</td>
            <td>Date_De_Sortie</td>
            <td>Titre</td>
            <td>Note</td>

            <td>Modifier</td>
            <td>Supprimer</td>
          </tr>

          <?php

          $req = $bdd->prepare(" SELECT ID_film, Synopsis, Durée, Affiche, Bande_Annonce, Date_De_Sortie, Titre, Note, Modifier, Supprimer, FROM film");
          $req ->execute();

          while( $donnees = $req->fetch() ) {
          ?>

            <tr>
              <td><?php echo $donnees['ID_film']; ?></td>
              <td><?= $donnees['Synopsis']; ?></td>
              <td><?= $donnees['Durée']; ?></td>
              <td><?= $donnees['Affiche']; ?></td>
              <td><?= $donnees['Bande_Annonce']; ?></td>
              <td><?= $donnees['Date_De_Sortie']; ?></td>
              <td><?= $donnees['Titre']; ?></td>
              <td><?= $donnees['Note']; ?></td>

              <td><?= $donnees['Modifier']; ?></td>
              <td><?= $donnees['Supprimer']; ?></td>
              <td></td>
              <td></td>
            </tr>


            <?php
          }
          ?>




        </table>
    </form>
  </div>
</body>
</html>
