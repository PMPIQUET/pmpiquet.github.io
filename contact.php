<?php  require 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Lokisalle Connexion</title>
</head>


  <?php





  if(isset($_POST['mailform']))
  {
    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
    {
      $header="MIME-Version: 1.0\r\n";
      $header.='From:"Lokisalle.com"<support@Lokisalle.com>'."\n";
      $header.='Content-Type:text/html; charset="uft-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';

      $message='
      <html>
      <body>
      <div align="center">
      <br />
      <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
      <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
      <br />
      '.nl2br($_POST['message']).'
      <br />
      </div>
      </body>
      </html>
      ';

      mail("pmpiquet@aol.com", "CONTACT - Lokisalle", $message, $header);
      $msg="<h2 style='text-align:center'>Votre message a bien été envoyé !</h2>";
header("Refresh:3; URL=index.php");
    }
    else
    {
      $msg="<h2 style='text-align:center'>Tous les champs doivent être complétés !</h2>";
    }
  }if(isset($msg))
  {
    echo $msg;
  }

  ?>
  <?php
  require 'inc/header.php';

  ?>

<h1 style='text-align:center'>Bienvenu sur l'espace de Contact</h1>

<div class="container">

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
  </div>
</div>






  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Contact</h5>
            <form method="post" class="form-signin">
              <div class="form-label-group">
                <input id="nom" class="form-control" type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" />
                <label for="nom">Votre nom</label>
              </div>
              <div class="form-label-group">
                <input class="form-control" id="email" type="email" name="mail" placeholder="Votre email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" />
                <label for="email">Votre Email</label>
              </div>
              <div class="form-label-group">
                <textarea class="form-control" name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
              </div>
              <div class="form-label-group">
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Envoyer" name="mailform"/>Envoyer</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php require 'inc/footer.php'; ?>
