<!DOCTYPE html>
<html>
<head>
	<title>
		Lokisalle -	Acceuil
	</title>
</head>


<?php
include 'config.php';
include 'inc/header.php';

?>



<body>



	<!-- Page Content -->
	<div class="container">

		<div class="row">

			<div class="col-lg-3">

				<h1 class="my-4">LokiSalle</h1>
       <img class="img-fluid" src="pics/logo_lokisalle.png">

				<div class="list-group">
					<a style="text-decoration: none" href="rechercher.php" class="list-group-item">Parcourir nos Salles</a>
<?php if(internauteEstConnecteEtEstAdmin()){ ?>
					<a style="text-decoration: none" href="profil.php" class="list-group-item">Profil</a>
<?php }else{ ?>
					<a style="text-decoration: none" href="inscription.php" class="list-group-item">S'inscrire</a>
<?php } ?>
				</div>

			</div>
			<!-- /.col-lg-3 -->

			<div class="col-lg-9">

				<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<img class="d-block img-fluid" src="pics/acceuil_lobby_hall_business.jpg" alt="Lobby Hall Foyer Office commercial business scene ">
						</div>
						<div class="carousel-item">
							<img class="d-block img-fluid" src="pics/acceuil_lobby_hall_foyer_office_commercial.jpg" alt="Lobby Hall Foyer Office commercial business ">
						</div>
						<div class="carousel-item">
							<img class="d-block img-fluid" src="pics/acceuil_lobby_foyer_office_commercial_business_.jpg" alt="acceuil_lobby_foyer_office_commercial_business_ slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
<div class="row">
				<?php


				$requete = $bdd->query("SELECT `id_salle`, `titre`, `description`, `photo`, `pays`, `ville`, `adresse`, `cp`, `capacite`, `categorie` FROM `salle` ") or die(print_r($bdd->errorInfo()));

				while ($donnees = $requete->fetch())

				{
					$id_salle = $donnees['id_salle'];


					?>




						<div style="text-align:center;" class="col-lg-4 col-md-6 mb-4">
							<div  class="card h-100">
								<p>
									<img class="card-img-top" src="pics/<?php echo $donnees['photo']; ?>">
								</p>
								<div class="card-body">
									<h5 class="card-title"><?php echo $donnees['titre']; ?></h5>
								</div>
								<div class="card-footer">
									<p class="card-text"><?php echo $donnees['description'];?></p>
								</div>
								<p>
									<small class="text-unmuted">&#9733;  &#9733; &#9733; &#9733;  &#9733;  &#9733; &#9733;</small>
								</p>
								<div>
									<p>
										<a href="salle.php?id_salle=<?= $id_salle ?>">Voir la fiche détaillée</a>
									</p>
								</div>
							</div>
						</div>


					<?php
				}
				$requete->closeCursor(); // Termine le traitement de la requête

				?>

				<!-- /.row -->
		</div>
			</div>
			<!-- /.col-lg-9 -->

		</div>
		<!-- /.row -->

	</div>
	<!-- /.container -->
	<?php
	include 'inc/footer.php';
	?>
