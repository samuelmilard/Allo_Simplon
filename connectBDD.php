<?php
try   {
  $synopsis = "synopsis";
  $duree = "duree";
  $affiche ="affiche";
  $bande_annonce ="bande_annonce";
  $date_de_sortie ="date_de_sortie";
  $titre ="titre";
  $note ="note";
  // Je me connecte à ma bdd
  $bdd = new PDO('mysql:host=db5000303646.hosting-data.io;dbname=dbs296633;charset=utf8', $synopsis, $duree, $affiche, $bande_annonce, $date_de_sortie, $titre, $note, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}catch(Exception $e)
{
  // En cas d'erreur, un message s'affiche et tout s'arrête
        die('Erreur : '.$e->getMessage());
}


?>