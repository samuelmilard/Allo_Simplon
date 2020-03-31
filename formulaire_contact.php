<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<div class="website">
    <body>
        <div class="row">
            <div class="col-12">
          <div class="logo">
            <a href="index.php"><img src=images/left-arrow.png alt=""/></a>
          </div>
                <h1 class="titre">Formulaire de contact</h1>
            </div>
        </div>
      <form action="resultat.php" method="post">
        <div class="name">
         <div class="row">
           <div class="col-6">
            <input type="text" name="prenom" class="form-control" placeholder="First name" >
           </div>
           <div class="col-6">
            <input type="text" name="nom" class="form-control" placeholder="Last name">
           </div>
         </div>
        </div>
         <div class="row">
              <div class="col-12">
                  <div class="email">
                  <input type="email" name="email" class="form-control" id="Email" placeholder="Email">
                  </div>
              </div>
             </div>
          <div class="row">
            <div class="col">
              <div class="text-area">
                <textarea class="text-area" name="texte" id="area" placeholder="Entrez votre texte ici!" rows="10" cols="50"></textarea>
              </div>
            </div>
          </div>
          <div class="rows">
            <div class="col-12">
              <div class="bouton">
                <button type="submit" class="btn btn-primary mb-2">Envoyé</button>
              </div>
            </div>
          </div>
      </form>

      <?php 




      ?>

    </body>
  </div>
    
</body>
</html>