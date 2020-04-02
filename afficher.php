<?php include ('connect.php'); ?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crud Cinema - Correction</title>
  

</head>
<body>
  <div class="container">
    <form id="contact">
      <h3><center>affichage des éléments </center></h3>
        <table border="1">
          <tr>
            <td>titre</td>
            <td>duree</td>
            <td>date_de_sortie</td>
            <td>affiche</td>
            <td>bande_annonce</td>
            <td>note</td>
            <td>synopsis</td>

            <td>modifier</td>
            <td>supprimer</td>
          </tr>

          <?php

          $req = $bdd->prepare(" SELECT titre, duree, date_de_sortie, affiche, bande_annonce, note, synopsis FROM film");
          $req ->execute();

          while( $donnees = $req->fetch() ) {
          ?>

<tr>
              <td><?php echo $donnees['titre']; ?></td>
              <td><?= $donnees['duree']; ?></td>
              <td><?= $donnees['date_de_sortie']; ?></td>
              <td><img width="560" height="315"  class="tbl" src="<?= $donnees['affiche']; ?>" ></td>
              <td><?= $donnees['bande_annonce']; ?></td>
              <td><?= $donnees['note']; ?></td>
              <td><?= $donnees['synopsis']; ?></td>
            </tr>


            <?php
          }
          ?>




        </table>
    </form>
  </div>
</body>
</html>
