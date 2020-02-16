<?php include 'inc/function.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lokisalle Location de salles</title>

  <!-- Bootstrap core CSS -->
  <link href="inc/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="inc/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="inc/css/shop-homepage.css" rel="stylesheet">
  <link rel="stylesheet" href="inc/css/login.css">
  <link rel="stylesheet" href="inc/css/font_awesome.css">

<!-- favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

  <link href="gulpfile.js" rel="gulpfile">
</head>
<header>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="" alt="">Lokisalle</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
            <li class="nav-item">
              <a class="nav-link" href="rechercher.php">Recherche</a>
            </li>
            <ul class="navbar-nav ml-auto">

              <?php if(internauteEstConnecteEtEstAdmin()) { ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" style="color:rgba(255,255,255,.5)" href="profil.php"id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Espace Admin
                  </a>
                  <div class="dropdown-menu" style="background-color:#343a40" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" class="nav-link" style="color:black" href="profil.php">Mon Profil</a>
                    <a class="dropdown-item" class="nav-link" style="color:black" href="connexion.php?action=deconnexion">deconnexion</a>
                    <a class="dropdown-item" class="nav-link" style="color:black" href="gestion_salles.php">Gestion des salles</a>
                    <a class="dropdown-item" class="nav-link" style="color:black" href="ajouter_salle.php">Ajouter une salle</a>
                    <a class="dropdown-item" class="nav-link" style="color:black" href="gestion_membres.php">Gestion des membres</a>
                    <a class="dropdown-item" class="nav-link" style="color:black" href="ajouter_membre.php">Ajouter un Membre</a>
                    <a class="dropdown-item" class="nav-link" style="color:black" href="gestion_avis.php">Gestion des avis</a>
                    <a class="dropdown-item" class="nav-link" style="color:black" href="gestion_produit.php">Gestion des produits</a>
                    <a class="dropdown-item" class="nav-link" style="color:black" href="gestion_commande.php">Gestion des commandes</a>
                    <a class="dropdown-item" class="nav-link" style="color:black" href="stats.php">Statistiques</a>

                  <?php } ?>

                  <?php if(internauteEstConnecte()){ ?>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" style="color:rgba(255,255,255,.5)" href="profil.php"id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Espace Membre
                      </a>
                      <div class="dropdown-menu" style="background-color:#343a40" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" class="nav-link" style="color:black" href="profil.php">Mon Profil</a>
                        <a class="dropdown-item" class="nav-link" style="color:black" href="connexion.php?action=deconnexion">deconnexion</a>

                      <?php } else { ?>
                        <li class="nav-item"><a class="nav-link" href="connexion.php">Connexion</a></li>
                        <li class="nav-item"><a class="nav-link" href="inscription.php">Inscription</a></li>
                      <?php } ?>


                    </ul>
                  </ul>
                </div>
              </div>
            </nav>
          </header>
