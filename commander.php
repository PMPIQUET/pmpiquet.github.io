<?php
require "config.php";

$id_salle = $_GET['id_salle'];



$requete = $bdd->query("SELECT * FROM salle WHERE id_salle = '$id_salle'");


$resultat = $requete->fetch(PDO::FETCH_ASSOC);



$titre = $resultat['titre'];
$description = $resultat['description'];
$photo = $resultat['photo'];
$ville = $resultat['ville'];
$adresse = $resultat['adresse'];
$cp = $resultat['cp'];
$capacite = $resultat['capacite'];
$categorie = $resultat['categorie'];

if ($_POST) {



  $cmd = $bdd->prepare("UPDATE `produit` SET `etat` = :etat, date_arrivee = :date_arrivee, date_depart = :date_depart WHERE id_salle = '$id_salle'");

  $cmd->execute(array( "etat" => $_POST['etat'],
"date_arrivee" => $_POST['date_arrivee'],
"date_depart" => $_POST['date_depart']
));

  $content .= "<h1 style='font-style:bold;text-align:center;'>Votre Réservation Salle à bien été reservée</h1>";
  header("Refresh:5; URL=profil.php");

}


include 'inc/header.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>
    Lokisalle Commander
  </title>
</head>
<body>
  <?php echo $content; ?>
  <h2 style="text-align:center">Resumé de la commande</h2>
  <form style="text-align:center" method="post">
    <p>
      <label>Titre : </label>
      <p>
        <?php echo $titre; ?>
      </p>
    </p>
    <p>
      <label>Description : </label>
      <p>
        <?php echo $description; ?>
      </p>
    </p>
    <p>
      <label>Ville : </label>
      <p>
        <?php echo $ville; ?>
      </p>
    </p>
    <p>
      <label>Adresse : </label>
      <p>
        <?php echo $adresse; ?>
      </p>
    </p>
    <p>
      <label>Code postal :</label>
      <p>
        <?php echo  $cp; ?>
      </p>
    </p>
    <p>
      <label>Capacité :</label>
      <p>
        <?php echo $capacite . ' Personnes'; ?>
      </p>
    </p>
    <p>
      <label>Catégorie :</label>
      <p>
        <?php echo $categorie; ?>
      </p>
    </p>
<p>
<label>date d'arrivée :</label>
</p>
<p>
<input type="date" name="date_arrivee">
</p>
<p>
  <label>date de départ :</label>
</p>
<p>
<input type="date" name="date_depart">
</p>
    <p>
  <input type="radio" name="etat" value="reservation">Je reserve</input>
    </p>
    <p>
      <button type="submit" value='envoyer'>Commander</button>
    </p>
  </form>

</body>
</html>
<?php include 'inc/footer.php'; ?>
