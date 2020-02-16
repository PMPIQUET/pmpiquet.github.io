<?php
 require 'config.php';




if($_POST)
{
	$pseudo = $_POST['pseudo'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email= $_POST['email'];
	$mdp = $_POST['mdp'];
	$sexe = $_POST['civilite'];



    //UPDATE `contacts` SET `ville` = 'Poissy' WHERE `contacts`.`id_contact` = 14;
    $requete = $bdd->prepare("INSERT INTO membre SET pseudo = :pseudo, mdp = :mdp, nom = :nom, prenom = :prenom, email = :email, civilite = :civilite, statut = :statut ");
    $requete->execute(array(
      "pseudo" => $_POST['pseudo'],
      "mdp" => $_POST['mdp'],
      "nom" => $_POST['nom'],
      "prenom" => $_POST['prenom'],
      "email" => $_POST['email'],
      "civilite" => $_POST['civilite'] ,
      "statut" => $_POST['statut']


    ));


    $content .= "<h1 style='font-style:bold;text-align:center;'>Le profil Utilisateur a bien été Ajouté</h1>";

    header("Refresh:1; URL=gestion_membres.php");
  }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Ajouter un Membre</title>
</head>
<body>

	<?php require 'inc/header.php'; ?>
	<h1 style='text-align:center'>Bienvenu sur l'espace d'ajout de membres</h1>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
					<div class="card card-signin my-5">
						<div class="card-body">

							<form class="form-signin" method="post">
								<div class="form-label-group">
									<input name='pseudo' type="text" id="pseudo" class="form-control" placeholder="pseudo" required autofocus>
									<label for="pseudo">Pseudo</label>
								</div>
								<div class="form-label-group">
									<input name='nom' type="text" id="nom" class="form-control" placeholder="Nom" required autofocus>
									<label for="nom">Nom</label>
								</div>
								<div class="form-label-group">
									<input  name="prenom" class="form-control" id='prenom'type="text" placeholder="prenom">
									<label for="prenom">Prénom</label>
								</div>
								<div class="form-label-group">
									<input name="email" class="form-control" id='email'type="email"   placeholder="Email">
									<label for="email">Adresse mail :</label>
								</div>
								<div class="form-label-group">
									<input name="mdp"   type="text" id="inputPassword" class="form-control" placeholder="Password" required>
									<label for="inputPassword">Mot de passe</label>
								</div>
								<div class="custom-control custom-checkbox mb-3">
									<input type="radio" name="civilite" value="m" >Homme</input >
								</div>
								<div class="custom-control custom-checkbox mb-3">
									<input  type="radio" name="civilite" value="f" >Femme</input >
								</div>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="radio" name="statut" value="1">Admin</input>
                  <input type="radio" name="statut" value="0">Membre</input>
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
