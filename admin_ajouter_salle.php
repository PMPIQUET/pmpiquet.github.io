<?php

try {

  $bdd = new PDO('mysql:host=localhost;dbname=lokisalle;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

} catch (Exception $e) {

  die("Erreur : " . $e->getMessage());

}



if($_POST)
{
  $titre = $_POST['titre'];
  $description = $_POST['description'];
  $photo = $_POST['photo'];
  $pays = $_POST['pays'];
  $ville = $_POST['ville'];
  $adresse = $_POST['adresse'];
  $cp = $_POST['cp'];
  $capacite = $_POST['capacite'];
  $categorie = $_POST['categorie'];


  //$requete = $bdd->exec("INSERT INTO annuaire (nom, prenom, telephone, profession, ville, code_postal, adresse, date_de_naissance, sexe, description )
  //                      VALUES ('$nom', '$prenom', '$telephone', $profession ,'$ville , '$cp', '$adresse', '$dateNaissance', '$sexe', '$description')");

  $requete = $bdd->exec("INSERT INTO salle (titre, description, photo, pays, ville, adresse, cp, capacite, categorie)
  VALUES ('$titre', '$description', '$photo', '$pays', '$ville', '$adresse', '$cp', '$capacite', '$categorie')");


    echo "<h2 style= text-align:center>Vôtre salle a bien été ajoutée à la base de données</h2>";

//  print_r($bdd->errorInfo());
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>LokiSalle - Admin ajouter une salle</title>
</head>
<body>
  <?php require 'config.php'; ?>
  <?php require 'inc/header.php'; ?>
  <h2 style='text-align:center'>Ajouter une salle</h2>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Ajouter une salle</h5>
              <form class="form-signin" method="post" >
                <div class="form-label-group">
                  <input name='titre' type="text" id="titre" class="form-control" placeholder="Titre" required autofocus>
                  <label for="titre">Titre</label>
                </div>
                <div class="form-label-group">
                  <textarea name='description'  id="description" class="form-control" placeholder="Description" required autofocus></textarea>
                </div>
                <div class="form-label-group">
                  <input  name="photo" class="form-file" id='photo'type="file"  placeholder="photo">
                  <label for="photo">Photo</label>
                </div>
                <div class="form-label-group">
                  <input name="pays" class="form-control" id='pays'type="pays"   placeholder="Pays">
                  <label for="pays">Pays :</label>
                </div>
                <div class="form-label-group">
                  <input name="ville"   type="text" id="ville" class="form-control" placeholder="Ville" required>
                  <label for="ville">Ville :</label>
                </div>
                <div class="form-label-group">
                  <textarea name="adresse"   type="text" id="adresse" class="form-control" placeholder="Adresse :" required></textarea>
                </div>
                <div class="form-label-group">
                  <input name='cp' type="text" id="cp" class="form-control" placeholder="Code postal :" required autofocus>
                  <label for="cp">Code postal :</label>
                </div>
                <div class="form-label-group">
                  <input name='capacite' type="text" id="capacite" class="form-control" placeholder="Capacite :" required autofocus>
                  <label for="capacite">Capacité :</label>
                </div>
                <label for="categorie">Catégorie :</label>
                <div class="form-label-group">

                    <input type='radio' name="categorie"  value="bureau">Bureau</input>
                    <input type='radio' name="categorie"  value="reunion">Réunion</input>
                    <input type='radio' name="categorie"  value="formation">Formation</input>

                </div>

                <button class="btn btn-lg btn-primary btn-block text-uppercase"  type="submit" value="envoyer">Ajouter</button>
                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require 'inc/footer.php'; ?>
  </body>
