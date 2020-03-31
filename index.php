<!DOCTYPE html>
<html lang="fr" >
<head>
  <meta charset="UTF-8">
  <title>BDD_Allo_Simplon</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <!--

Partie Cinéma !

 -->
<div class="container">
  <form id="contact" action="traitement/insert-cinema.php" method="post">
    <h3><center>FILM - Nouveau Film</center></h3>
    <h4><center>Insertion d'un nouveau film, ajout dans la bibliothèque</center></h4>
    <fieldset>
      <input placeholder="Synopsis" name="synopsis" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Durée" name="duree" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Affiche" name="affiche" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Bande Annonce" name="bande_annonce" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Date" name="date_de_sortie" type="text" tabindex="5" required>
    </fieldset>
    <fieldset>
      <input placeholder="Titre" name="titre" type="text" tabindex="6" required>
    </fieldset>
    <fieldset>
      <input placeholder="Note" name="note" type="text" tabindex="7" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>
<!--

Partie salle !

-->

<div class="container">
  <form id="contact" action="traitement/insert-salle.php" method="post">
    <h3><center>USER - Nouvel Utilisateur</center></h3>
    <fieldset>
      <input placeholder="Mot de passe" name="mdp" type="text" tabindex="8" required>
    </fieldset>
    <fieldset>
      <input placeholder="Nom" name="nom" type="text" tabindex="9" required>
    </fieldset>
    <fieldset>
      <input placeholder="Prenom" name="prenom" type="text" tabindex="10" required>
    </fieldset>
    <fieldset>
      <input placeholder="Pseudo" name="pseudo" type="text" tabindex="11" required>
    </fieldset>
    <fieldset>
      <input placeholder="Mail" name="mail" type="text" tabindex="12" required>
    </fieldset>
    <fieldset>
           <select  name="ID_user" tabindex="13" require >
            <?php
                include ('connectBDD.php');

                $req = $bdd->prepare(" SELECT ID_user, mdp, nom, prenom, pseudo, mail, FROM user ");
                $req->execute();

                while ( $donnees = $req->fetch() ){ ?>

                  <option value="<?= $donnees['ID_user']; ?>"> Nom user : <?= $donnees['pseudo']; ?> | ID_user : <?= $donnees['ID_user']; ?> </option>


              <?php  }

             ?>





            </select>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>




<!--

Partie Équipement afiliation !


 -->




 <div class="container">
   <form id="contact" action="traitement/insert-equipement.php" method="post">
     <h3><center>Ajouter Film</center></h3>
     <h4><center>Exercice d'utilisation CRUD, ajout dans une table simple</center></h4>
     <fieldset>
       <input placeholder="User" name="user" type="text" tabindex="14"  required autofocus>
     </fieldset>
     <fieldset>
       <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
     </fieldset>
   </form>
 </div>

 <!--

    Partie Équipement afiliation !


     -->


     <div class="container">
       <form id="contact" action="traitement/insert-relation.php" method="post">
         <h3><center>Table de Relation</center></h3>
         <h4><center>Ajout dans table de relation</center></h4>
         <fieldset>
           <select  name="id_cinema" tabindex="8" required>

           <?php

           // REQUETE PERMETTANT LA RECHERCHE DES CINEMAS
           $req = $bdd->prepare("SELECT id_salle,numero_salle,id_cinema FROM salle");
           $req->execute();
           //Boucle pour afficher tout les résultats
           while($donnees = $req->fetch()) {
           ?>
            <option value="<?= $donnees['id_salle']; ?>"> Salle n°<?= $donnees['numero_salle']; ?> , Cinema N° <?= $donnees['id_cinema']; ?> </option>
           <?php
          }
          ?>
          </select>
          </fieldset>

          <fieldset>
            <?php
              $req = $bdd->prepare("SELECT id_equipement, nom_equipement FROM equipement");
              $req->execute();
              while($donnees = $req->fetch()) {
              ?>

              <input type="checkbox" id="id_equipement[]" name="<?php echo $donnees['id_equipement'] ?>" value="<?php echo $donnees['id_equipement'] ?>">
              <label for="<?php echo $donnees['id_equipement'] ?>"> <?php echo $donnees['nom_equipement'] ?></label><br>

            <?php } ?>

          </fieldset>
          <fieldset>
          <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Envoyer</button>
        </fieldset>
      </form>
    </div>





