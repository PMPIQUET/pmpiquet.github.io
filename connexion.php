<?php  require 'config.php'; ?>

<?php
if(isset($_GET['action']) && $_GET['action'] == "deconnexion")
{
	session_destroy();
  header("Refresh:0.1; URL=index.php");
}




?>




<!DOCTYPE html>
<html>
<head>
	<title>Lokisalle Connexion</title>
</head>
<body>

	<?php require 'inc/header.php'; ?>
	<h1 style='text-align:center'>Bienvenu sur l'espace de connexion</h1>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
					<div class="card card-signin my-5">
						<div class="card-body">
							<h5 class="card-title text-center">Se connecter</h5>
							<form class="form-signin" method="post" action="profil.php" >
								<div class="form-label-group">
									<input name='pseudo' type="text" id="pseudo" class="form-control" placeholder="pseudo" required autofocus>
									<label for="pseudo">Pseudo</label>
								</div>
								<div class="form-label-group">
									<input name='mdp' type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
									<label for="inputPassword">Mot de passe</label>
								</div>
								<div class="custom-control custom-checkbox mb-3">
									<input type="checkbox" class="custom-control-input" id="customCheck1">
									<label class="custom-control-label" for="customCheck1">Se souvenir de moi</label>
								</div>
								<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Se connecter</button>
								<hr>
								<hr class="my-4">
								<a href="https://accounts.google.com/ServiceLogin/identifier?elo=1&flowName=GlifWebSignIn&flowEntry=AddSession" class="btn btn-google btn-user btn-block">
									Se connecter avec Google
								</a>
								<a href="https://www.facebook.com" class="btn btn-google btn-user btn-block">
									Se connecter avec Facebook
								</a>
							</form>
							<hr>

							<div class="text-center">
								<a class="small" href="inscription.php">Créer un compte</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php require 'inc/footer.php'; ?>
