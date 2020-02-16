<?php

	 require 'config.php';


if($_POST)
{
	$pseudo = $_POST['pseudo'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email= $_POST['email'];
	$mdp = $_POST['mdp'];
	$sexe = $_POST['sexe'];


	//$requete = $bdd->exec("INSERT INTO annuaire (nom, prenom, telephone, profession, ville, code_postal, adresse, date_de_naissance, sexe, description )
	//                      VALUES ('$nom', '$prenom', '$telephone', $profession ,'$ville , '$cp', '$adresse', '$dateNaissance', '$sexe', '$description')");

	$requete = $bdd->query("INSERT INTO membre (pseudo, nom, prenom, email, mdp, civilite)
	VALUES ('$pseudo', '$nom', '$prenom', '$email', '$mdp', '$sexe')");


	echo "<h1 style=text-align:center>Bienvenu sur Lokisalle</h1>";
	echo "<h1 style=text-align:center>Votre inscription est bien prise en compte</h1>";

	//	print_r($bdd->errorInfo());
	header("Refresh:2; URL=connexion.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Espace Membres</title>
</head>
<body>

	<?php require 'inc/header.php'; ?>
	<h1 style='text-align:center'>Bienvenu sur l'espace d' inscription</h1>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
					<div class="card card-signin my-5">
						<div class="card-body">
							<h5 class="card-title text-center">S'inscrire</h5>
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
								<div class="form-label-group">
									<input name="mdp"   type="text" id="inputPasswordr" class="form-control" placeholder="Password" required>
									<label for="inputPasswordr">Confirmer le  mot de passe</label>
								</div>

								<div class="custom-control custom-checkbox mb-3">
									<input type="radio" name="sexe" value="m" >Homme</input >
								</div>
								<div class="custom-control custom-checkbox mb-3">
									<input  type="radio" name="sexe" value="f" >Femme</input >
								</div>
								<button class="btn btn-lg btn-primary btn-block text-uppercase"  type="submit" value="envoyer">S'inscrire</button>
								<hr class="my-4">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require 'inc/footer.php'; ?>
	</body>
